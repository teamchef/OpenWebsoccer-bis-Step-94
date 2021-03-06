ALTER TABLE _randomevent ADD status enum('1','0');

INSERT INTO `_randomevent` (`id`, `message`, `effect`, `effect_money_amount`, `effect_blocked_matches`, `effect_skillchange`, `weight`, `status`) VALUES
('', 'Sie gewinnen im Lotto', 'money', 100000, 0, 0, 3, 0),
('', 'Sie finden Geld auf der Straße. Sie sind ein Glückspilz', 'money', 500, 0, 0, 3, 0),
('', 'Sie bekommen Steuern erstattet!', 'money', 15000, 0, 0, 3, 0),
('', 'Ein Sponsor überweißt Ihnen einen Bonus', 'money', 25000, 0, 0, 3, 0),
('', 'Sie sind der Sieger eines Fotowettbewerbes', 'money', 1000, 0, 0, 3, 0),
('', 'Für eine Homestory bekommen Sie einen Bonus', 'money', 50000, 0, 0, 3, 0),
('', '{playername} fällt nach einer Disconacht aus.', 'player_injured', 0, 1, -1, 3, 0),
('', '{playername} lässt sich von seiner Frau scheiden', 'player_happiness', 0, 0, -2, 3, 0),
('', '{playername} heiratet seine Freundin', 'player_happiness', 0, 0, 2, 3, 0),
('', '{playername} trainiert neben dem Training im Kraftraum.', 'player_stamina', 0, 0, 2, 3, 0),
('', '{playername} stolpert die Treppe runter und verletzt sich', 'player_injured', 0, 2, -1, 3, 0),
('', '{playername} bekommt ein Kind', 'player_fitness', 0, 0, -2, 3, 0),
('', '{playername} bekommt mit seiner Frau Zwillinge', 'player_happiness', 0, 0, 2, 3, 0),
('', 'Durch eine Fanleihe gewinnen Sie Geld', 'money', 250000, 0, 0, 3, 0),
('', 'Deine Mitarbeiter erwirtschaften ein dickes Plus in der Kasser', 'money', 75000, 0, 0, 3, 0),
('', 'Deine Mitarbeiter streiken vorm Vereinshaus', 'money', -50000, 0, 0, 3, 0),
('', 'Ein Angestellter des Vereins brennt mit dem Tagesgeld durch', 'money', -150000, 0, 0, 3, 0),
('', 'Ein anonymer Fan spendet Ihrem Verein', 'money', 5000, 0, 0, 3, 0),
('', 'Ein Hacker legt die EDV Abteilung des Vereins lahm', 'money', -15000, 0, 0, 3, 0),
('', 'Ein Mitarbeiter telefoniert auf Vereinskosten', 'money', -1000, 0, 0, 3, 0),
('', 'Ein Brand im Lagerraum zerstört die gesamte EDV Anlage', 'money', -225000, 0, 0, 3, 0),
('', 'Wegen Hooligans wird ihr Verein zu einer Geldstrafe verdonnert', 'money', -275000, 0, 0, 3, 0),
('', 'Renovierungen im Stadionumfeld sind von Nöten', 'money', -200000, 0, 0, 3, 0),
('', 'Ihr Sponsor ist sehr zufrieden und zahlt dem Verein einen Bonus', 'money', 350000, 0, 0, 3, 0),
('', 'Ihr Verein bekommt eine Spende von einem Fanclub', 'money', 100000, 0, 0, 3, 0),
('', 'Ihr Verein steht in der Presse schlecht da. Sie starten eine Imagekapampagne', 'money', -15000, 0, 0, 3, 0),
('', 'Ihr Verein wird für vorbildliche Fans ausgezeichnet', 'money', 300000, 0, 0, 3, 0),
('', '{playername} fällt nach einer Schiedsrichterbeleidigung aus', 'player_blocked', 0, 2, 0, 3, 0),
('', '{playername} fällt nach einer Trainingskeilerei aus', 'player_injured', 0, 1, 0, 3, 0),
('', '{playername} verdreht sich das Knie beim Joggen', 'player_injured', 0, 4, 0, 3, 0),
('', '{playername} plaudert Internas aus und wird suspendiert', 'player_blocked', 0, 5, 0, 3, 0),
('', '{playername} trauert seiner Ex-Freundin hinterher', 'player_fitness', 0, 0, -2, 3, 0),
('', '{playername} bekommt viel Lob von der Presse', 'player_happiness', 0, 0, 3, 3, 0),
('', '{playername} geht nach dem Training zum Wasseraerobic', 'player_fitness', 0, 0, 2, 3, 0),
('', '{playername} holt sich ein Hexenschuss als er sein Kind hebt', 'player_injured', 0, 0, -1, 3, 0),
('', 'Sie gewinnen im Casino', 'money', 750000, 0, 0, 3, 0),
('', 'Sie erhalten einen Preis eines Sportmagazines', 'money', 75000, 0, 0, 3, 0),
('', 'Sie veräußern eine Immobilie gewinnbringend', 'money', 125000, 0, 0, 3, 0),
('', '{playername} streitet sich mit mehreren Mitspielern', 'player_happiness', 0, 0, -2, 3, 0),
('', '{playername} lädt seine Mannschaftskollegen zum Mannschaftsabend ein', 'player_happiness', 0, 0, 2, 3, 0),
('', '{playername} lädt seine Teamkollegen zum gemeinsamen Essen ein', 'player_happiness', 0, 0, 2, 3, 0),
('', '{playername} bekommt einen neuen Ausrüstervertrag', 'player_happiness', 0, 0, 2, 3, 0),
('', '{playername} verliert einen Ausrüstervertrag', 'player_happiness', 0, 0, -2, 3, 0),
('', '{playername} erkrankt schwer', 'player_injured', 0, 2, 0, 3, 0),
('', '{playername} knickt unglücklich um als er einen Trick ausprobiert', 'player_injured', 0, 1, 0, 3, 0),
('', '{playername} wird beim Rückwärts ausparken von seinem Teamkollegen übersehen. Sein Fuß ist danach kaputt.', 'player_injured', 0, 1, 0, 3, 0),
('', '{playername} geht privat sehr viel Joggen,was sich auf die Kondition auswirkt.', 'player_stamina', 0, 0, 2, 3, 0),
('', '{playername} diskutiert viel mit seinem Trainer und lernt wertvolles.', 'player_happiness', 0, 0, 2, 3, 0),
('', '{playername} wütet nach der Niederlage gegen seine Mitspieler. Sie suspendieren Ihn.', 'player_blocked', 0, 2, 0, 3, 0),
('', '{playername} verbessert sein Standing im Team', 'player_happiness', 0, 0, 1, 3, 0),
('', 'Sie verlieren eine Sportwette gegen ein alten Trainerkollegen. Und werden zur Kasse gebeten.', 'money', -1000, 0, 0, 3, 0),
('', 'Sie laden ihre Spieler zum Bowlingabend ein und zahlen diesen.', 'money', -1250, 0, 0, 3, 0),
('', 'Sie laden ihr Team zum Kanu-Trip ein.', 'money', -800, 0, 0, 3, 0),
('', 'Sie kommen zu spät zum Training und zahlen dafür in die Mannschaftskasse ein', 'money', 500, 0, 0, 3, 0),
('', 'Sie beschaffen sich eine Taktik Tafel für zu Hause', 'money', -375, 0, 0, 3, 0),
('', '{playername} wird viel mit Vereinen in Verbindung gebracht. Seine Vorbereitung schleift dadurch', 'player_happiness', 0, 0, -2, 3, 0),
('', '{playername} wird mit großen Clubs in Verbindung gebracht. Das imponiert ihm sehr und er hängt sich mehr rein.', 'player_happiness', 0, 0, 3, 3, 0),
('', '{playername} verkracht sich mit seinem besten Kumpel.', 'player_fitness', 0, 0, -2, 3, 0),
('', '{playername} kommt verspätet zum Training', 'player_blocked', 0, 1, 0, 3, 0),
('', '{playername} trauert um seine Oma', 'player_happiness', 0, 0, -2, 3, 0),
('', 'Durch eine Fehl-Bestellung entstehen erhöhte Kosten', 'money', -3500, 0, 0, 3, 0),
('', 'Sie gewinnen einen Preis für die Beste Jugendabteilung', 'money', 30000, 0, 0, 3, 0),
('', 'Sie platzieren eine Sportwette und gewinnen diese auch noch.', 'money', 1750, 0, 0, 3, 0),
('', 'Sie finden einen Alukoffer und öffnen diesen', 'money', 75750, 0, 0, 3, 0),
('', 'Ein Mitarbeiter verletzt sich im Büro. Sie kaufen Ihn eine Aufmerksamkeit.', 'money', -500, 0, 0, 3, 0);
ALTER TABLE `_randomevent` MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;