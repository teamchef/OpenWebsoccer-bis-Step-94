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
class TvModel implements IModel {
	private $_db;
	private $_i18n;
	private $_websoccer;

	public function __construct($db, $i18n, $websoccer) {
		$this->_db = $db;
		$this->_i18n = $i18n;
		$this->_websoccer = $websoccer;
	}

	public function renderView() {
		return TRUE;
	}

	public function getTemplateParameters() {

		$teamId = $this->_websoccer->getUser()->getClubId($this->_websoccer, $this->_db);
		if ($teamId < 1) {
			throw new Exception($this->_i18n->getMessage("feature_requires_team"));
		}

		$sponsor = TvsDataService::getSponsorinfoByTeamId($this->_websoccer, $this->_db, $teamId);

		$sponsors = array();
		$teamMatchday = 0;
		if (!$sponsor) {
			$teamMatchday = MatchesDataService::getMatchdayNumberOfTeam($this->_websoccer, $this->_db, $teamId);

			if ($teamMatchday >= $this->_websoccer->getConfig("tv_earliest_matchday")) {
				$sponsors = TvsDataService::getSponsorOffers($this->_websoccer, $this->_db, $teamId);
			}

		}

		return array("sponsor" => $sponsor, "sponsors" => $sponsors, "teamMatchday" => $teamMatchday);
	}

}

?>