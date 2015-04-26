# OpenWebSoccer-Sim / TLC Version by Rolf Joseph / ErdemCan - Starten Sie Ihren eigenen Online-Fußball-Manager !

Mit dieser PHP-basierten Web-Anwendung können sie Ihren Website-Besuchern einen virtuellen Fantasy-Fußball-Manager anbieten.

Sie setzen die Taktik für das nächste Spiel, erwerben oder bieten Spieler auf dem Transfermarkt, trainieren Ihre Mannschaft.
Suchen Sie nach neuen Talenten in der Jugendabteilung oder erweitern ihre Stadion.

Die Software simuliert alle Spiele automatisch und in Echtzeit. Der Spielbericht, einem Live-Ticker ähnlich, begleitet das
Live-Spiel, wo der User Live in das Spiel eingreifen kann.

Viele Optinonen und viele Einstellungsmöglichkeiten runden die Open Websoccer-Sim ab.

## Die TLC-Version beinhaltet zur Zeit folgende Änderungen bzw. Erweiterungen

Die neue Core-Struktur bietet eine einfache Entwicklung. Änderungen an den Orginal-Dateien bzw. Erweiterungen mittels extend
sind daher nicht mehr nötig und erhöhen damit die Stabilität. Legen Sie eine bearbeitete Kopie der Datei in die ürsprünglichen
Ordnern. So können auch Fremdmodule leicht eingebunden oder getestet werden.

- Die Null-Byte-Dateien wurden entfernt und in der lockfile.txt Versionsinformationen eingefügt
- alle Dateien aus dem Verzeichniss classes wurden den Modulen im Ordner modules zugeordnet
- die Datei global.inc.php wurde angepasst und ersetzt die original Datei
- alle Dateein aus dem Verzeichnis templates/default wurden den Mmodulen im Ordner modules zugeordnet
- die Datei TemplateEngine.class.php wurde angepasst und ersetzt ebenfalls die original Datei
- für die Zuordnung der Dateien zu den Modulen wurde eine Batch-Datei ersellt, siehe im Ordner websoccer-tools
- die Installationsführung wurde angepasst, so das sich nun Fragen dazu erübrigen dürften
- entsprechend wurde die Datei websoccer/install/index.php angepasst
- alternative job.php im Hauptverzeichnis ( Parameter werden über die Konfiguration gesteuert )
- Anpassung der modul.xml und der adminmessages_de.xml im Modul core für die alternative job.php
- Anpassung in der layout.twig wegen des Hinweis auf die Version
- Anpassung der Datei websoccer/admin/config/version.txt auf Open Websoocer-Sim / TLC 1.0


Das Verzeichnis kann nun auch als Update genutzt werden. Die gesetzte Konfiguration wird nun nicht mehr überschrieben, da die
Datei config.inc.php nicht mehr mitgeliefert wird.


## Dieser Ableger basiert auf der Open Websoccer-Sim, die sie hier bekommen:

** [Jetzt downloaden!] (Https://github.com/ihofmann/open-websoccer/releases) **


## Nachfolger des HSE WebSoccer-Sim

OpenWebSoccer-Sim ist der offizielle Nachfolger der kommerziellen Produkte _H & H WebSoccer_ und _HSE WebSoccer-Sim_.
Herr Ingo Hofmann ist ein professionellen Software-Ingenieur aus der Schweiz, der die erste Version der Software im Jahr 2003 entwickelt hat.

Die Unterstützung von anderen Entwicklern mit Erweiterungen oder Ideen ist der Grund das der Websoccer nun OpenSource ist.

Sie können über Ingo erreichen: Ingo (at) websoccer- sim.com.


## Dokumentation und Issue Tracker in englischer Sprache

Hinweise zur Installation, Konfiguration und zur Verbesserung der Software in der [Wiki] (https://github.com/ihofmann/open-websoccer/wiki/00.-Home).

Haben Sie einen Fehler gefunden oder haben eine Idee für ein neues Feature? Dann zögern Sie nicht, ein Problem über der [Issue Tracker] zu eröffnen (https://github.com/ihofmann/open-websoccer/issues).