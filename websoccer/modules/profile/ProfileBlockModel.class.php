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
 * @author Ingo Hofmann
 */
class ProfileBlockModel implements IModel {
	private $_db;
	private $_i18n;
	private $_websoccer;

	public function __construct($db, $i18n, $websoccer) {
		$this->_db = $db;
		$this->_i18n = $i18n;
		$this->_websoccer = $websoccer;
	}

	public function renderView() {
		return (strlen($this->_websoccer->getUser()->username)) ? TRUE : FALSE;
	}

	public function getTemplateParameters() {
		$fromTable = $this->_websoccer->getConfig("db_prefix") . "_user";

		$user = $this->_websoccer->getUser();

		// select general information
		$columns = "fanbeliebtheit AS user_popularity, highscore AS user_highscore";
		$whereCondition = "id = %d";
		$result = $this->_db->querySelect($columns, $fromTable, $whereCondition, $user->id, 1);
		$userinfo = $result->fetch_array();
		$result->free();

		$clubId = $user->getClubId($this->_websoccer, $this->_db);

		// get team info
		$team = null;
		if ($clubId > 0) {
			$team = TeamsDataService::getTeamSummaryById($this->_websoccer, $this->_db, $clubId);
		}

		$this->_teamId = NationalteamsDataService::getNationalTeamManagedByCurrentUser($this->_websoccer, $this->_db);
		if ($this->_teamId) {
    		$nationalMatch = MatchesDataService::getNextMatch($this->_websoccer, $this->_db, $this->_teamId);
		}

		// team size
		$teamsize = TeamsDataService::getTeamSize($this->_websoccer, $this->_db, $clubId);			// Zeile hinzugefügt
		//team rank
		$teamRank = TeamsDataService::getTableRankOfTeam($this->_websoccer, $this->_db, $clubId);		// Zeile hinzugefügt

		// unread messages
		$unseenMessages = MessagesDataService::countUnseenInboxMessages($this->_websoccer, $this->_db);

		// unseen notifications
		$unseenNotifications = NotificationsDataService::countUnseenNotifications($this->_websoccer, $this->_db, $user->id, $clubId);
		$nextMatch = MatchesDataService::getNextMatch($this->_websoccer, $this->_db, $clubId);

		return array("tableRank" => $teamRank, "profile" => $userinfo, "userteam" => $team, "unseenMessages" => $unseenMessages,"unseenNotifications" => $unseenNotifications,
					 "nextMatch" => $nextMatch, 'nationalMatch' => $nationalMatch, 'nationalteam' => $this->_teamId);}
}

?>