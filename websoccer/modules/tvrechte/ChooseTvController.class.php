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

class ChooseTvController implements IActionController {
	private $_i18n;
	private $_websoccer;
	private $_db;

	public function __construct(I18n $i18n, WebSoccer $websoccer, DbConnection $db) {
		$this->_i18n = $i18n;
		$this->_websoccer = $websoccer;
		$this->_db = $db;
	}

	public function executeAction($parameters) {

		$user = $this->_websoccer->getUser();
		$teamId = $user->getClubId($this->_websoccer, $this->_db);
		if ($teamId < 1) {
			return null;
		}

		$tv = TvsDataService::getSponsorinfoByTeamId($this->_websoccer, $this->_db, $teamId);

		if ($tv) {
			throw new Exception($this->_i18n->getMessage("tv_choose_stillcontract"));
		}

		// check min matchday
		$teamMatchday = MatchesDataService::getMatchdayNumberOfTeam($this->_websoccer, $this->_db, $teamId);
		if ($teamMatchday < $this->_websoccer->getConfig("sponsor_earliest_matchday")) {
			throw new Exception($this->_i18n->getMessage("sponsor_choose_tooearly", $this->_websoccer->getConfig("sponsor_earliest_matchday")));
		}

		// check if selected sponsor is in list of available sponsors
		// (sponsor might be selected by other teams in meanwhile)
		$tvs = TvsDataService::getTvOffers($this->_websoccer, $this->_db, $teamId);
		$found = FALSE;
		foreach ($tvs as $availableTv) {
			if ($availableTv["tv_id"] == $parameters["id"]) {
				$found = TRUE;
				break;
			}
		}

		if (!$found) {
			throw new Exception($this->_i18n->getMessage("tv_choose_novalidtv"));
		}

		// update team
		$columns["tv_id"] = $parameters["id"];
		$columns["tv_spiele"] = $this->_websoccer->getConfig("tv_matches");
		$fromTable = $this->_websoccer->getConfig("db_prefix") . "_verein";
		$whereCondition = "id = %d";
		$this->_db->queryUpdate($columns, $fromTable, $whereCondition, $teamId);

		// success message
		$this->_websoccer->addFrontMessage(new FrontMessage(MESSAGE_TYPE_SUCCESS,
				$this->_i18n->getMessage("tv_choose_success"),
				""));

		return null;
	}

}

?>