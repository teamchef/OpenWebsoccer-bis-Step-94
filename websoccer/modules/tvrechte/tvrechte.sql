/* TV-Vertrag SQL Tabelleneintrag setzen */;


CREATE TABLE IF NOT EXISTS `_tvrechte` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `bild` varchar(100) DEFAULT NULL,
  `liga_id` smallint(5) NOT NULL,
  `b_spiel` int(10) NOT NULL,
  `b_heimzuschlag` int(10) NOT NULL,
  `b_sieg` int(10) NOT NULL,
  `b_meisterschaft` int(10) NOT NULL,
  `max_teams` smallint(5) NOT NULL,
  `min_platz` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;


/* TV-Vertrag SQL Tabelleneintrag-Erweiterung für den Table _verien setzen */;


ALTER TABLE _verein ADD tv_spiele smallint(5) NOT NULL;
ALTER TABLE _verein ADD tv_id int(10) DEFAULT NULL;