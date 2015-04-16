<?php
/******************************************************

  HSE WebSoccer-Sim

  Copyright (c) 2013-2014 by

  Hofmann Software Engineering
  EMail: info@websoccer-sim.com
  Homepage: http://www.websoccer-sim.com

  THIS IS NOT FREEWARE! YOU NEED TO OBTAIN A
  VALID LICENCE IN ORDER TO BE ALLOWED TO USE
  THIS SOURCE CODE!

  DIES IST KEINE FREEWARE (KEINE KOSTENLOSE SOFTWARE).
  SIE MUESSEN EINE KORREKTE LIZENZ BESITZEN, UM DIESEN
  PROGRAMMCODE BENUTZEN ZU DUERFEN!

******************************************************/

/**
 * Data service for tv-rechte.
 */
class TvsDataService {

	public static function getSponsorinfoByTeamId(WebSoccer $websoccer, DbConnection $db, $clubId) {

		$columns["T.tv_spiele"] = "matchdays";
		$columns["S.id"] = "tv_id";
		$columns["S.name"] = "name";
		$columns["S.b_spiel"] = "amount_match";
		$columns["S.b_heimzuschlag"] = "amount_home_bonus";
		$columns["S.bild"] = "picture";

		$fromTable = $websoccer->getConfig("db_prefix") . "_tv AS S";
		$fromTable .= " INNER JOIN " . $websoccer->getConfig("db_prefix") . "_verein AS T ON T.tv_id = S.id";
		$whereCondition = "T.id = %d AND T.tv_spiele > 0";
		$result = $db->querySelect($columns, $fromTable, $whereCondition, $clubId, 1);
		$sponsor = $result->fetch_array();
		$result->free();

		return $sponsor;
	}


	public static function getSponsorOffers(WebSoccer $websoccer, DbConnection $db, $teamId) {

		$team = TeamsDataService::getTeamSummaryById($websoccer, $db, $teamId);
		$teamRank = TeamsDataService::getTableRankOfTeam($websoccer, $db, $teamId);

		$columns["S.id"] = "tv_id";
		$columns["S.name"] = "name";
		$columns["S.b_spiel"] = "amount_match";
		$columns["S.b_heimzuschlag"] = "amount_home_bonus";

		$fromTable = $websoccer->getConfig("db_prefix") . "_tv AS S"; // Tabellenauswahl _sponor oder _tv
		$whereCondition = "S.liga_id = %d AND (S.min_platz = 0 OR S.min_platz >= %d)"
							. " AND (S.max_teams <= 0 OR S.max_teams > (SELECT COUNT(*) FROM " . $websoccer->getConfig("db_prefix") . "_verein AS T WHERE T.tv_id = S.id AND T.tv_spiele > 0))"
							. " ORDER BY S.b_spiel DESC";
		$parameters = array($team["team_league_id"], $teamRank);

		return $db->queryCachedSelect($columns, $fromTable, $whereCondition, $parameters, 20);
	}

}
?>