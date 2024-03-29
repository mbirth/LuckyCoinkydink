<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translation (c) Jannis Hermanns, Garvin Hicking and others
/* vim: set sts=4 ts=4 expandtab : */

@define('SQL_CHARSET', 'utf8');
@define('DATE_LOCALES', 'de_DE.UTF-8, de_DE.UTF8, german, de_DE, de_DE@euro, de');
@define('DATE_FORMAT_ENTRY', '%A, %e. %B %Y');
@define('DATE_FORMAT_SHORT', '%d.%m.%Y %H:%M');
@define('WYSIWYG_LANG', 'de-utf');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', ',');
@define('NUMBER_FORMAT_THOUSANDS', '.');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Typ');
@define('PREVIEW', 'Vorschau');
@define('DATE', 'Datum');
@define('TIME', 'Time');
@define('APPEARANCE', 'Aussehen');
@define('LOGIN', 'Login');
@define('LOGOUT', 'Abmelden');
@define('LOGGEDOUT', 'Abgemeldet.');
@define('CREATE', 'Erstellen');
@define('BACK', 'Zurück');
@define('FORWARD', 'Vorwärts');
@define('ANONYMOUS', 'Anonym');
@define('RECENT', 'Das Neueste ...');
@define('OLDER', 'Älteres ...');
@define('DONE', 'Fertig');
@define('TITLE', 'Titel');
@define('DESCRIPTION', 'Beschreibung');
@define('PLACEMENT', 'Platzierung');
@define('DELETE', 'Löschen');
@define('SAVE', 'Speichern');
@define('UP', 'HOCH');
@define('DOWN', 'RUNTER');
@define('PREVIOUS', 'Zurück');
@define('NEXT', 'Weiter');
@define('ENTRIES', 'Einträge');
@define('CATEGORIES', 'Kategorien');
@define('NAME', 'Name');
@define('EMAIL', 'E-Mail');
@define('HOMEPAGE', 'Homepage');
@define('COMMENT', 'Kommentar');
@define('VIEW', 'Anzeigen');
@define('HIDE', 'Ausblenden');
@define('WEEK', 'Woche');
@define('WEEKS', 'Wochen');
@define('MONTHS', 'Monate');
@define('DAYS', 'Tage');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Erfolgreich beendet');
@define('COMMENTS', 'Kommentare');
@define('ADD_COMMENT', 'Kommentar schreiben');
@define('NO_COMMENTS', 'Noch keine Kommentare');
@define('POSTED_BY', 'Geschrieben von');
@define('ON', 'am');
@define('NO_CATEGORY', 'Keine Kategorie');
@define('CATEGORY', 'Kategorie');
@define('EDIT', 'Bearbeiten');
@define('GO', 'Los!');
@define('YES', 'Ja');
@define('NO', 'Nein');
@define('NOT_REALLY', 'Nicht wirklich ...');
@define('DUMP_IT', 'Hinfort damit!');
@define('IN', 'in');
@define('AT', 'um');
@define('LEFT', 'links');
@define('RIGHT', 'rechts');
@define('CENTER', 'mitte');
@define('ARCHIVES', 'Archive');
@define('SUBSCRIBE', 'Abonnieren');
@define('UNSUBSCRIBE', 'Abbestellen');
@define('QUICKSEARCH', 'Suche');
@define('TRACKBACKS', 'Trackbacks');
@define('TRACKBACK', 'Trackback');
@define('NO_TRACKBACKS', 'Keine Trackbacks');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'Keine Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Quelle');
@define('EXCERPT', 'Auszug');
@define('TRACKED', 'Aufgenommen');
@define('USER', 'Benutzer');
@define('USERNAME', 'Benutzername');
@define('PASSWORD', 'Passwort');
@define('HIDDEN', 'versteckt');
@define('IMAGE', 'Bild');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Autor');
@define('ENTRY', 'Artikel');
@define('BLOG', 'Blog');
@define('VERSION', 'version');
@define('INSTALL', 'Installieren');
@define('REPLY', 'Antwort');
@define('SUBSCRIPTIONS', 'Abonnements');
@define('SUBSCRIBED', 'Abonniert');
@define('SUBSCRIBED_AT', 'Abonniert am:');
@define('ERROR', 'Fehler');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Übersicht');
@define('MORE', 'Mehr');
@define('FORCE', 'Erzwingen');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Administration');
@define('ADMIN_FRONTPAGE', 'Startseite');
@define('QUOTE', 'Zitat');
@define('NONE', 'keine');
@define('GROUP', 'Gruppe');
@define('AUTHORS', 'Autoren');
@define('UPGRADE', 'Aktualisieren');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Verschieben');
@define('MOVE_UP', 'Nach oben');
@define('MOVE_DOWN', 'Nach unten');
@define('ALL_AUTHORS', 'Alle Autoren');
@define('PREVIOUS_PAGE', 'vorherige Seite');
@define('NEXT_PAGE', 'nächste Seite');
@define('FIRST_PAGE', 'Erste Seite');
@define('LAST_PAGE', 'Letzte Seite');
@define('ALL_CATEGORIES', 'Alle Kategorien');
@define('LAST_UPDATED', 'Zuletzt aktualisiert');
@define('IP_ADDRESS', 'IP-Adresse');
@define('CHARSET', 'Zeichensatz');
@define('REFERER', 'Referrer');
@define('APPROVE', 'Bewilligen');
@define('NOT_FOUND', 'Nicht gefunden');
@define('WRITABLE', 'Beschreibbar');
@define('NOT_WRITABLE', 'Nicht beschreibbar');
@define('WELCOME_BACK', 'Willkommen zurück,');
@define('USE_DEFAULT', 'Standard');
@define('SORT_BY', 'Sortieren nach');
@define('SORT_ORDER', 'Sortierung');
@define('SORT_ORDER_ASC', 'Aufsteigend');
@define('SORT_ORDER_DESC', 'Absteigend');
@define('FILTERS', 'Filter');
@define('RESET_FILTERS', 'Filter entfernen');
@define('TOGGLE_ALL', 'Alle Optionen ein-/ausblenden');
@define('TOGGLE_OPTION', 'Option ein-/ausblenden');
@define('IN_REPLY_TO', 'Antwort zu');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Verzeichnis');
@define('BACK_TO_BLOG', 'Zurück zum Blog');
@define('HTML_NUGGET', 'HTML-Klotz');
@define('TITLE_FOR_NUGGET', 'Titel für den Klotz');
@define('COMMENT_ADDED', 'Kommentar wurde hinzugefügt. ');
@define('ENTRIES_FOR', 'Einträge für %s');
@define('NO_ENTRIES_TO_PRINT', 'Keine Einträge vorhanden');
@define('COMMENT_DELETE_CONFIRM', 'Soll der Kommentar #%d von %s wirklich gelöscht werden?');
@define('DELETE_SURE', 'Soll #%s permanent gelöscht werden?');
@define('MEDIA_FULLSIZE', 'Vollbild');
@define('SIDEBAR_PLUGIN', 'Seitenleisten-Plugin');
@define('EVENT_PLUGIN', 'Ereignis-Plugin');
@define('PLUGIN_ITEM_DISPLAY', 'Wo soll dieses Plugin angezeigt werden?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Nur Artikel-Detailansicht');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Nur Artikelübersicht');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'Überall');
@define('DIRECTORY_WRITE_ERROR', 'Keine Schreibrechte für Verzeichnis %s. Bitte korrigieren');
@define('FILE_WRITE_ERROR', 'Datei \'%s\' kann nicht geschrieben werden.');
@define('INCLUDE_ERROR', 'Serendipity Fehler: Kann Datei \'%s\' nicht einbinden - wird beendet.');
@define('DO_MARKUP', 'Textformatierung(en) durchführen');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Datumsformat');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Das Datumsformat des Eintrages, mithilfe von PHPs strftime() Variablen. (Standard: "%s")');
@define('APPLY_MARKUP_TO', 'Textformatierung auf %s anwenden');
@define('XML_IMAGE_TO_DISPLAY', 'XML-Button');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Bilddatei, um ein Icon für XML-Feeds darzustellen. Für das Standardbild leer lassen, oder \'none\' zum Deaktivieren.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Abonnement Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'Die email-Abonnementsseite ist mit diesem Icon verlinkt. Für das Standardbild leer lassen, oder \'none\' zum Deaktivieren.');
@define('DELETING_FILE', 'Lösche Datei \'%s\' ...');
@define('SETTINGS_SAVED_AT', 'Die neuen Einstellungen wurden um %s gespeichert.');
@define('INVERT_SELECTIONS', 'Auswahl umkehren');

@define('PERSONAL_SETTINGS', 'Eigene Einstellungen');
@define('DO_MARKUP_DESCRIPTION', 'Textformatierung(en) durchführen, wie z.B. Smilies, Schnellformatierung via *, /, _, ... Wenn deaktiviert, wird der Inhalt 1:1 ausgegeben und jegliche HTML-Formatierung beibehalten. Wenn diese Option aktiviert ist, können andere Plugins den Inhalt des Klotzes modifizieren (falls benötigt).');
@define('BASE_DIRECTORY', 'Stammverzeichnis');
@define('PERM_READ', 'Leserechte');
@define('PERM_WRITE', 'Schreibrechte');
@define('PERM_DENIED', 'Zugriff verboten.');
@define('CURRENT_AUTHOR', 'Derzeitiger Autor');
@define('PLUGIN_ACTIVE', 'Aktiv');
@define('PLUGIN_INACTIVE', 'Inaktiv');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Fügen Sie diesen Link als Lesezeichen/Favoriten hinzu. Dann können Sie dieses Lesezeichen auf jeder beliebigen Seite benutzen um so sofort in ihr Serendipity-Blog zu gelangen.');
@define('SET_TO_MODERATED', 'Moderieren');
@define('TOGGLE_SELECT', 'Zu Auswahl hinzufügen');
@define('ENTRY_METADATA', 'Eintrags-Metadaten');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Serendipity-Installation');
@define('WELCOME_TO_INSTALLATION', 'Willkommen zur Installation von Serendipity!');
@define('FIRST_WE_TAKE_A_LOOK', 'Zuerst wird eine Systemdiagnose durchgeführt, um etwaigen Inkompatibilitäten oder fehlenden Modulen vorzubeugen.');
@define('ERRORS_ARE_DISPLAYED_IN', 'Fehler werden in %s, Empfehlungen in %s und erfolgreiche Meldungen in %s dargestellt.');
@define('RED', 'rot');
@define('YELLOW', 'gelb');
@define('GREEN', 'grün');
@define('PRE_INSTALLATION_REPORT', 'Systemdiagnose von Serendipity v.%s');
@define('INTEGRITY', 'Installation prüfen');
@define('PHP_INSTALLATION', 'PHP-Installation');
@define('INSTALLER_KEY', 'Schlüssel');
@define('INSTALLER_VALUE', 'Wert');
@define('OPERATING_SYSTEM', 'Betriebssystem');
@define('WEBSERVER_SAPI', 'Webserver SAPI');
@define('PHPINI_CONFIGURATION', 'php.ini Konfiguration');
@define('RECOMMENDED', 'Empfohlen');
@define('ACTUAL', 'Vorhanden');
@define('PERMISSIONS', 'Rechte');
@define('INSTALLER_CLI_TOOLS', 'Serverseitige Kommandozeilen-Tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI-Tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Ausführbar?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Zugriffsrechte können durch folgenden Shell-Befehl (oder auch mittels FTP-Client) geändert werden: `<em>%s</em>` mit dem Namen des nicht beschreibbaren Verzeichnisses.');
@define('PROBLEM_DIAGNOSTIC', 'Da ein Fehler bei der Systemdiagnose auftrat, muss dieser erst behoben werden, bevor die Installation fortgesetzt werden kann.');
@define('SELECT_INSTALLATION_TYPE', 'Bitte die Installationsart wählen');
@define('RECHECK_INSTALLATION', 'Installation erneut überprüfen');
@define('SIMPLE_INSTALLATION', 'Einfache Installation');
@define('EXPERT_INSTALLATION', 'Fortgeschrittene Installation');
@define('COMPLETE_INSTALLATION', 'Vollständige Installation');
@define('WONT_INSTALL_DB_AGAIN', 'werde Datenbank nicht erneut erzeugen');
@define('THEY_DO', 'Positiv');
@define('THEY_DONT', 'Negativ');
@define('CHECK_DATABASE_EXISTS', 'Prüfe, ob Datenbank und Tabellen bereits bestehen ...');
@define('CREATE_DATABASE', 'Richte Datenbank ein ...');
@define('ATTEMPT_WRITE_FILE', 'Versuche, die Datei \'%s\' zu erstellen...');
@define('CREATING_PRIMARY_AUTHOR', 'Erstelle Hauptbenutzer \'%s\' ...');
@define('SETTING_DEFAULT_TEMPLATE', 'Setze Standard-Theme ...');
@define('INSTALLING_DEFAULT_PLUGINS', 'Installiere Standard-Plugins ...');
@define('SERENDIPITY_INSTALLED', 'Serendipity wurde erfolgreich installiert!');
@define('VISIT_BLOG_HERE', 'Besuchen Sie Ihr neues Blog hier');
@define('THANK_YOU_FOR_CHOOSING', 'Danke, dass Sie Serendipity gewählt haben.');
@define('ERROR_DETECTED_IN_INSTALL', 'Bei der Installation trat ein Fehler auf');
@define('INSTALL_DBPREFIX_INVALID', 'Der Datenbank-Tabellenpräfix darf nicht leer sein und darf nur Zahlen, Nummern und den Unterstrich enthalten.');
@define('POWERED_BY', 'Powered by');
@define('ADMIN_FOOTER_POWERED_BY', 'Betrieben mit Serendipity %s und PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Redakteur');
@define('USERLEVEL_CHIEF_DESC', 'Chefredakteur');
@define('USERLEVEL_ADMIN_DESC', 'Administrator');
@define('WWW_USER', 'Ersetzen Sie \'www\' durch den User, als der der Webserver läuft. (z.B. \'nobody\')');
@define('INSTALL_PASSWORD_INVALID', 'Die eingebenen Administrator-Passwörter stimmen nicht überein.');
@define('DIRECTORY_CREATE_ERROR', 'Verzeichnis %s existiert nicht und konnte nicht erstellt werden. Bitte legen Sie es manuell an.');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; führen Sie <i>%s %s</i> aus!');
@define('CANT_EXECUTE_BINARY', 'Kann die Datei \'%s\' nicht ausführen');
@define('FILE_CREATE_YOURSELF', ' Bitte die Datei manuell anlegen oder Dateirechte korrigieren.');
@define('COPY_CODE_BELOW', '<br />* Kopieren Sie den folgenden Code in die Datei \'%s\' des Verzeichnisses \'%s\':<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Danach aktualisieren Sie bitte diese Seite in Ihrem Browser.');
@define('ERROR_TEMPLATE_FILE', 'Die Template-Datei konnte nicht geöffnet werden. Bitte die Serendipity-Version aktualisieren!');
@define('HTACCESS_ERROR', 'Um die Webserver-Konfiguration zu testen benötigt Serendipity die Möglichkeit, die Datei ".htaccess" zu erstellen. Dies war aufgrund von Rechteproblemen nicht möglich. Bitte passen Sie die Rechte wie folgt an: <br />&nbsp;&nbsp;%s<br />und laden Sie diese Seite neu.');
@define('EMPTY_SETTING', 'Sie haben für "%s" keinen gültigen Wert angegeben!');
@define('NOT_WRITABLE_SPARTACUS', ' (Nur notwendig wenn Spartacus zur Plugin-Installation über das Internet genutzt werden soll)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity hat entdeckt, dass derzeit Version %s verwendet wird. Jedoch wurde Version %s installiert, daher müssen Sie die <a href="%s">Installation aktualisieren</a>!');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Willkommen beim Serendipity Aktualisierungs-Agenten');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Ich möchte Ihnen gerne beim Aktualisieren der Serendipity %s Installation helfen.');
@define('SERENDIPITY_UPGRADER_WHY', 'Diese Seite erscheint, da gerade Serendipity %s installiert wurde, aber die Datenbank noch nicht an diese Version angepasst wurde.');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Datenbank-Aktualisierungen (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Die folgenden SQL-Dateien wurden gefunden und müssen nun ausgeführt werden, bevor Serendipity wieder wie gewohnt funktioniert.');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Versionsabhängige Funktionen');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Keine versionsabhängigen Funktionen gefunden');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Soll ich die aufgeführten Funktionen ausführen?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Nein, das werde ich manuell erledigen');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Ja, bitte ausführen');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Es müssen keine Aktualisierungen vorgenommen werden.');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity wurde an die neue Version angepasst!');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Sie haben den automatischen Aktualisierungsvorgang ignoriert. Bitte stellen Sie sicher, dass die Datenbank anhand der SQL-Dateien aktualisiert wird und die geplanten Funktionen aufgerufen werden!');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Die Serendipity-Installation ist nun auf die Version %s aktualisiert!');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Zurück zum %sBlog%s');
@define('ADMIN_ENTRIES', 'Einträge');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Verbindung zu MySQL-Datenbank \'%s\' fehlgeschlagen.');
@define('COULDNT_SELECT_DB', 'Datenbank \'%s\' konnte nicht ausgewählt werden.');
@define('COULDNT_SELECT_USER_INFO', 'Die Benutzerinformationen von %s konnten nicht gelesen werden.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Die Kategorien von %s konnten nicht gelesen werden.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Die Einträge von %s konnten nicht gelesen werden.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Die Kommentare von %s konnten nicht gelesen werden.');
@define('MYSQL_REQUIRED', 'Die MySQL-Erweiterung muss installiert sein, damit diese Aktion durchgeführt werden kann.');
@define('CREATE_AUTHOR', 'Erstelle Autoren \'%s\'.');
@define('CREATE_CATEGORY', 'Erstelle Kategorie \'%s\'.');
@define('MT_DATA_FILE', 'Movable-Type-Datensätze');
@define('INSTALL_DBPORT', 'Datenbank-Port');
@define('INSTALL_DBPORT_DESC', 'Der Port, der verwendet wird, um zum Datenbankserver zu verbinden');
@define('IMPORT_PLEASE_ENTER', 'Bitte die folgenden Daten eintragen');
@define('IMPORT_NOW', 'Jetzt importieren!');
@define('IMPORT_STARTING', 'Starte Import-Vorgang ...');
@define('IMPORT_FAILED', 'Import fehlgeschlagen');
@define('IMPORT_DONE', 'Import erfolgreich abgeschlossen!');
@define('IMPORT_WEBLOG_APP', 'Weblog-Software');
@define('IMPORT_NOTES', 'Hinweis');
@define('IMPORT_STATUS', 'Status nach dem Importieren');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS Import, benötigt PHP5 und kann viel RAM/Speicher benötigen.');
@define('RSS_IMPORT_BODYONLY', 'Füge den gesamten importierten Text in das einzelne "Text"-Feld ein. Verhindert die Aufteilung in den "Erweiterten Eintrag"-Bereich.');
@define('IMPORT_GENERIC_RSS', 'Allgemeiner RSS-Import');
@define('ACTIVATE_AUTODISCOVERY', 'Trackbacks an erkannte Links im Eintrag senden');
@define('RSS_IMPORT_CATEGORY', 'Diese Kategorie für nicht zugeordnete importierte Einträge verwenden');
@define('IMPORT_WP_PAGES', 'Auch attachments und staticpages als normale Blog-Einträge importieren?');
@define('DOCUMENT_NOT_FOUND', 'Das Dokument %s wurde nicht gefunden.');
@define('CONVERT_HTMLENTITIES', 'Soll versucht werden, HTML-Instanzen automatisch zu konvertieren?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Serendipity Verwaltungsoberfläche');
@define('WRONG_USERNAME_OR_PASSWORD', 'Das Passwort oder der Username war falsch. Bitte wiederholen Sie die Eingabe.');
@define('PLEASE_ENTER_CREDENTIALS', 'Bitte geben Sie die Zugangsdaten ein.');
@define('AUTOMATIC_LOGIN', 'Daten speichern');
@define('MAIN_MENU', 'Hauptmenü');
@define('MENU_PERSONAL', 'Persönliches Menü');
@define('MENU_DASHBOARD', 'Dashboard');
@define('MENU_ACTIVITY', 'Aktivität');
@define('MENU_SETTINGS', 'Einstellungen');
@define('MENU_TEMPLATES', 'Themes');
@define('MENU_PLUGINS', 'Plugins');
@define('MENU_USERS', 'Benutzer');
@define('MENU_GROUPS', 'Gruppen');
@define('MENU_MAINTENANCE', 'Wartung');
@define('MEDIA', 'Mediendatenbank');
@define('MEDIA_LIBRARY', 'Mediendatenbank');
@define('ADD_MEDIA', 'Mediendaten hinzufügen');
@define('MANAGE_DIRECTORIES', 'Verzeichnisse verwalten');
@define('CONFIGURATION', 'Konfiguration');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'Neue stabile Serendipity-Version verfügbar: ');
@define('UPDATE_FAILMSG', 'Update-Check für neue Serendipity-Version fehlgeschlagen. Das kann passieren wenn die URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE nicht erreichbar ist, der Server ausgehende Verbindungen verhindert oder es andere Verbindungsprobleme gibt.');
@define('FURTHER_LINKS', 'Weitere Links');
@define('UPDATE_FAILACTION', 'Automatischen Update-Check deaktivieren');
@define('DASHBOARD_ENTRIES', 'In Vorbereitung');
@define('FURTHER_LINKS_S9Y', 'Serendipity Homepage');
@define('FURTHER_LINKS_S9Y_DOCS', 'Serendipity Dokumentation');
@define('FURTHER_LINKS_S9Y_BLOG', 'Offizielles Blog');
@define('FURTHER_LINKS_S9Y_FORUMS', 'Forum');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Diesen Eintrag jetzt veröffentlichen (setzt aktuelle Zeit)');
@define('ENTRY_PUBLISHED', 'Eintrag #%s veröffentlicht');
@define('PUBLISH_ERROR', 'Fehler bei der Veröffentlichung:');
@define('PUBLISHED', 'Veröffentlicht');
@define('JS_FAILURE', 'Die Javascript-Bibliothek von Serendipity konnte nicht geladen werden. Das kann aufgrund von PHP- oder Pluginfehlern, eventuell auch aufgrund eines zerstörten Browsercaches vorkommen. Um die genaue Fehlermeldung zu sehen, öffnen Sie bitte <a href="%1$s">%1$s</a> von Hand im Browser und suchen nach Fehlermeldungen.');
@define('ENTRY_PUBLISHED_FUTURE', 'Dieser Artikel wurde noch nicht veröffentlicht.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Webseiten');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Lokale Dokumentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Versionsgeschichte');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Seitenleisten-Plugins');
@define('EVENT_PLUGINS', 'Ereignis-Plugins');
@define('CONFIGURE_PLUGINS', 'Plugins verwalten');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin ist bereits installiert und unterstützt die Mehrfachinstallation ("stackable") nicht.');
@define('UNMET_REQUIREMENTS', 'Bedingung nicht erfüllt: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Seitenleisten-Plugin installieren');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Ereignis-Plugin installieren');
@define('UPGRADE_TO_VERSION', 'Aktualisierbar auf Version %s.');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Hier klicken, um %s zu installieren');
@define('ALREADY_INSTALLED', 'Bereits installiert');
@define('PLUGIN_AVAILABLE_COUNT', 'Gesamt: %d Plugins.');
@define('NO_UPDATES', 'Keine Plugin-Updates verfügbar.');
@define('PLUGIN_ALL_UPDATED', 'Alle Plugins aktualisiert');
@define('PLUGIN_LINK_SPARTACUS', 'Weitere Informationen');
@define('PLUGIN_SOURCE_BUNDLED', 'mitgeliefertes Plugin');
@define('PLUGIN_SOURCE_LOCAL', 'lokal installiert');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Einträge bearbeiten');
@define('EDIT_ENTRY', 'Eintrag bearbeiten');
@define('ENTRY_STATUS', 'Eintragsstatus');
@define('DRAFT', 'Entwurf');
@define('PUBLISH', 'Veröffentlichung');
@define('CONTENT', 'Inhalt');
@define('ENTRIES_PER_PAGE', 'Artikel pro Seite');
@define('SCHEDULED', 'Vorgemerkt');
@define('STICKY_POSTINGS', 'Dauerhafte Einträge');
@define('PAGE_BROWSE_ENTRIES', 'Seite %s von %s, insgesamt %s Einträge');
@define('FIND_ENTRIES', 'Einträge durchsuchen');
@define('RIP_ENTRY', 'Ruhe in Frieden, #%s ...');
@define('NEW_ENTRY', 'Neuer Eintrag');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Eintrag');
@define('EXTENDED_BODY', 'Erweiterter Eintrag');
@define('IFRAME_SAVE', 'Serendipity speichert nun den Eintrag, verschickt Mails an Abonnenten, erstellt etwaige Trackbacks und führt mögliche XML-RPC Aufrufe durch. Dies kann eine Weile dauern ...');
@define('IFRAME_SAVE_DRAFT', 'Der Entwurf dieses Eintrags wurde gespeichert.');
@define('IFRAME_PREVIEW', 'Serendipity erstellt die Vorschau des Eintrags ...');
@define('IFRAME_WARNING', 'Ihr Browser unterstützt keine iframes. Bitte die Datei serendipity_config.inc.php öffnen und die Variable $serendipity[\'use_iframe\'] auf FALSE setzen.');
@define('DATE_INVALID', 'Warnung: Das Datum, welches Sie für den Artikel angegeben haben, ist ungültig. Es muss dem Format JJJJ-MM-TT SS:MM entsprechen.');
@define('ADVANCED_OPTIONS', 'Erweiterte Optionen');
@define('TOGGLE_VIEW', 'Darstellung der Kategorien wechseln');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Dieser Link ist nicht aktiv. Er enthält die Trackback-URI zu diesem Eintrag. Sie können diese URI benutzen, um Ping- und Trackbacks von Ihrem eigenen Blog zu diesem Eintrag zu schicken. Um den Link zu kopieren, klicken Sie ihn mit der rechten Maustaste an und wählen "Verknüpfung kopieren" im Internet Explorer oder "Linkadresse kopieren" in Mozilla/Firefox.');
@define('RESET_DATE', 'Datum zurücksetzen');
@define('RESET_DATE_DESC', 'Hier klicken, um das Datum auf die aktuelle Systemzeit zu setzen');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Benutzerverwaltung');
@define('CREATE_NEW_USER', 'Einen neuen Benutzer anlegen');
@define('CREATE_NOT_AUTHORIZED', 'Sie können keine Benutzer mit demselben Benutzerrang wie Ihrem eigenen bearbeiten.');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Sie können keine Benutzer mit einem höheren Benutzerrang als Ihrem eigenen anlegen.');
@define('CREATED_USER', 'Der neue Benutzer %s wurde angelegt.');
@define('MODIFIED_USER', 'Die Eigenschaften von Benutzer %s wurden geändert.');
@define('USER_LEVEL', 'Benutzerrang');
@define('WARNING_NO_GROUPS_SELECTED', 'Warnung: Sie haben keine Gruppenmitgliedschaften angegeben. Dies würde Sie effektiv aus der Blogverwaltung ausschließen. Daher wurden die Gruppenzugehörigkeiten nicht geändert.');
@define('DELETE_USER', 'Sie wollen den Benutzer #%d %s löschen. Sind sie sicher? Die Artikel dieses Benutzers werden dann nicht mehr auf der Oberfläche angezeigt.');
@define('DELETED_USER', 'Benutzer #%d %s gelöscht.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Gruppenverwaltung');
@define('DELETED_GROUP', 'Gruppe #%d %s gelöscht.');
@define('CREATED_GROUP', 'Neue Gruppe \'%s\' wurde angelegt');
@define('MODIFIED_GROUP', 'Die Eigenschaften der Gruppe \'%s\' wurden aktualisiert.');
@define('CREATE_NEW_GROUP', 'Neue Gruppe anlegen');
@define('DELETE_GROUP', 'Sie beabsichtigen, die Gruppe #%d %s zu löschen. Sind Sie sicher?');
@define('GROUP_NAME_DESC', "Wenn hier ein String angegeben wird, der in irgendeine Sprachdatei als Konstante definiert ist (z.B. 'USERLEVEL_EDITOR_DESC'), wird die zugewiesene Übersetzung dieses Gruppennamens ausgegeben. Es ist möglich, eigene Konstanten zu definieren und ihre Namen hier anzugeben. Sind übersetzbare Gruppennamen nicht benötigt, kann hier jeder beliebige String eingegeben werden.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Kommentare durchsuchen');
@define('COMMENTS_FILTER_SHOW', 'Zeige');
@define('COMMENTS_FILTER_ALL', 'Alle');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Nur bewilligte');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Zu bewilligende');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Zu bestätigende');
@define('COMMENT_NOT_DELETED', 'Kommentar #%s konnte nicht gelöscht werden.');
@define('COMMENTS_DELETE_CONFIRM', 'Sollen die markierten Kommentare gelöscht werden?');
@define('PAGE_BROWSE_COMMENTS', 'Seite %s von %s, %s Kommentare insgesamt');
@define('COMMENT_IS_DELETED', '(Kommentar entfernt)');
@define('COMMENT_MODERATED', 'Kommentar #%s wurde erfolgreich auf Status "moderieren" zurückgesetzt.');
@define('ACTIVE_COMMENT_SUBSCRIPTION', 'Abonniert');

/* ADMIN - SUBSCRIPTIONS.TPL */
@define('EDIT_SUBSCRIPTIONS', 'Abonnements bearbeiten');
@define('SUBSCRIPTION_ENTRY', 'Abonnements für Artikel');
@define('SUBSCRIPTION_TYPE', 'Abonnementtyp');
@define('SUBSCRIPTION_TIME', 'Abonniert am');
@define('SUBSCRIPTION_STATE', 'Abonnementsstatus');
@define('SUBSCRIPTION_BLOG', 'Blogabonnement');
@define('SUBSCRIPTION_AUTHOR', 'Authorabonnement');
@define('SUBSCRIPTION_CATEGORY', 'Kategorieabonnement');
@define('NO_SUBSCRIPTIONS_TO_PRINT', 'Keine Abonnements zum Anzeigen');
@define('PAGE_BROWSE_SUBSCRIPTIONS', 'Seite %s von %s, gesamt %s Abonnements');
@define('OPTIN_PENDING', 'wartet auf Optin');
@define('RIP_SUB', 'Ruhe in Frieden, #%s ...');
@define('FIND_SUBSCRIPTIONS', 'Abonnements durchsuchen');

/* ADMIN - CATEGORY.TPL */
@define('CATEGORY_SAVED', 'Kategorie gespeichert');
@define('CATEGORY_ALREADY_EXIST', 'Eine Kategorie namens "%s" besteht bereits!');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Kategorie #%s wurde gelöscht. Alte Artikel in dieser Kategorie nach %s verschoben');
@define('CATEGORY_DELETED', 'Kategorie #%s wurde gelöscht.');
@define('INVALID_CATEGORY', 'Es wurde keine Kategorie zum Löschen gewählt.');
@define('EDIT_THIS_CAT', 'Bearbeite "%s"');
@define('CATEGORY_REMAINING', 'Diese Kategorie löschen und Einträge darin in folgende Kategorie verschieben');
@define('PARENT_CATEGORY', 'Übergeordnete Kategorie');
@define('CATEGORY_HIDE_SUB', 'Artikel von Unterkategorien verstecken?');
@define('CATEGORY_HIDE_SUB_DESC', 'Standardmäßig werden bei der Ansicht einer Kategorie im Frontend alle Artikel der gewählten Kategorie und aller Unterkategorien angezeigt. Wenn diese Option aktiviert wird, werden Artikel von Unterkategorien nicht angezeigt.');
@define('CREATE_NEW_CAT', 'Neue Kategorie');
@define('ALREADY_SUBCATEGORY', '%s ist bereits eine Unterkategorie von %s.');
@define('NO_CATEGORIES', 'Keine Kategorien');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Fehler beim Vergleich der Prüfsummen! (Keine Prüfsummendatei checksums.inc.php im Hauptverzeichnis gefunden)');
@define('CHECKSUMS_PASS', 'Alle erforderlichen Dateien wurden überprüft.');
@define('CHECKSUM_FAILED', '%s beschädigt oder verändert: Überprüfung fehlgeschlagen');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'Es sind derzeit keine Dateien zu löschen.');
@define('CLEANCOMPILE_TITLE', 'Template-Cache leeren');
@define('CLEANCOMPILE_INFO', 'Löscht alle kompilierten Template-Dateien des derzeit aktiven Themes. Die kompilierten Template-Dateien werden bei Bedarf vom Smarty-Framework automatisch neu erzeugt.');
@define('IMPORT_ENTRIES', 'Daten importieren');
@define('EXPORT_ENTRIES', 'Einträge exportieren');
@define('EXPORT_FEED', 'Vollständigen RSS-Feed exportieren');
@define('CREATE_THUMBS', 'Vorschauen erneuern');
@define('WARNING_THIS_BLAHBLAH', "ACHTUNG:\\nDas kann jetzt lange dauern, wenn für viele Bilder noch keine Vorschau existiert.");
@define('SYNC_OPTION_LEGEND', 'Optionen für die Erzeugung der Vorschaubilder');
@define('SYNC_OPTION_KEEPTHUMBS', 'Behalte alle vorhandenen Vorschaubilder');
@define('SYNC_OPTION_SIZECHECKTHUMBS', 'Behalte vorhandene Vorschaubilder nur, wenn diese die richtige Größe haben');
@define('SYNC_OPTION_DELETETHUMBS', 'Erneuere alle Vorschaubilder');
@define('MAINTENANCE_MODE', 'Wartungsmodus');
@define('MAINTENANCE_MODE_DESC', 'Der Wartungsmdous verhindert den Zugriff auf das Blog für alle nicht eingeloggten Benutzer.');
@define('MAINTENANCE_MODE_WARNING', "Sie müssen eingeloggt bleiben, weil auch Sie sich sonst bis zum Ablauf des Wartungszeitraums nicht mehr einloggen können.");
@define('MAINTENANCE_MODE_DURATION', 'Sperrzeit (in Stunden):');
@define('MAINTENANCE_MODE_TIME', 'Wartungsmodus aktiv bis');
@define('MAINTENANCE_MODE_ACTIVATE', 'Aktivieren');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Deaktivieren');

/* ADMIN - TEMPLATES.TPL */
@define('TEMPLATE_SET', '\'%s\' wurde als Theme gewählt.');
@define('WARNING_TEMPLATE_DEPRECATED', 'Hinweis: Das aktuelle Theme verwendet eine ältere Methode der HTML-Erzeugung. Falls möglich, bitte das Theme auf die Nutzung von Smarty optimieren.');
@define('STYLE_OPTIONS_NONE', 'Dieses Theme hat keine speziellen Optionen. Wie Ihr Theme solche Optionen anlegen kann, ist in der technischen Dokumentation auf www.s9y.org im Bereich "Configuration of Theme options" beschrieben.');
@define('STYLE_OPTIONS', 'Theme-Optionen');
@define('CURRENT_TEMPLATE', 'Aktuelles Theme');
@define('CUSTOM_ADMIN_INTERFACE', 'Angepasste Admin-Oberfläche vorhanden');
@define('CUSTOM_CONFIG', 'Eigene Konfigurationsdatei');
@define('TEMPLATE_INFO', 'Theme-Informationen');
@define('AVAILABLE_TEMPLATES', 'Verfügbare Themes');
@define('THEMES_PREVIEW_BLOG', 'Siehe Demo auf blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Als Theme wählen');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Testen &amp; speichern');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Markierte Plugins entfernen');
@define('SAVE_CHANGES_TO_LAYOUT', 'Änderungen am Layout speichern');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Synchronisiere Datenbank mit Bilder-Ordner');
@define('SYNC_DONE', 'Fertig (%s Bilder synchronisiert).');
@define('RESIZE_BLAHBLAH', '<b>Größe von %s ändern</b>');
@define('ORIGINAL_SIZE', 'Originalgröße: <i>%sx%s</i> Pixel');
@define('RESIZING', 'Anpassen der Bildgröße');
@define('RESIZE_DONE', 'Fertig (%s Bildgrößen angepaßt).');
@define('KEEP_PROPORTIONS', 'Proportionen beibehalten');
@define('REALLY_SCALE_IMAGE', 'Bildgröße wirklich verändern? Diese Änderung kann nicht rückgängig gemacht werden!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Hier können Sie die Bildgröße ändern. Um die Proportionen beizubehalten, einfach einen der beiden Werte eingeben, und anschließend die TAB-Taste drücken, und Sie erhalten eine Vorschau mit korrekten Proportionen.');
@define('MEDIA_RESIZE_EXISTS', 'Datei-Dimensionen existieren bereits!');
@define('NEWSIZE', 'Neue Größe ');
@define('SCALING_IMAGE', 'Ändere Größe von %s nach %s x %s Pixel');
@define('MEDIA_DIRECTORY_MOVED', 'Verzeichnis und Dateien wurden erfolgreich nach %s verschoben');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Verzeichnis und Dateien konnten nicht nach %s verschoben werden!');
@define('DIRECTORY_INFO', 'Verzeichnis-Info');
@define('DIRECTORY_INFO_DESC', 'Verzeichnisse entsprechen dem Namen ihrer zugehörigen phsikalischen Ordner. Wollen Sie Verzeichnisse, die Dateien enthalten, ändern oder verschieben, haben Sie zwei Optionen. Sie können entweder das gewünschte Ziel(unter)verzeichnis anlegen, die Elemente über die Medienbibliothek dorthin verschieben und das leere Ursprungsverzeichnis löschen; oder Sie können das gesamte Ursprungsverzeichnis über den Button "Verzeichnis bearbeiten" ändern und frei umbenennen. Letzteres wird alle Unterverzeichnisse und Elemente verschieben und die darauf verweisenden Blogeinträge anpassen.');
@define('DIRECTORY_CREATED', 'Verzeichnis <strong>%s</strong> wurde angelegt.');
@define('PARENT_DIRECTORY', 'Stammverzeichnis');
@define('CONFIRM_DELETE_DIRECTORY', 'Wirklich alle Inhalte von Verzeichnis <strong>%s</strong> löschen?');
@define('ERROR_NO_DIRECTORY', 'Fehler: Verzeichnis <strong>%s</strong> existiert nicht.');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Konnte das Verzeichnis nicht löschen, da noch Dateien vorhanden sind. Bitte die "Alle Dateien löschen"-Auswahlbox anklicken, falls diese Dateien trotzdem gelöscht werden sollen. Die noch vorhandenen Dateien sind:');
@define('DIRECTORY_DELETE_FAILED', 'Das Löschen des Verzeichnisses \'%s\' ist fehlgeschlagen. Bitte Verzeichnisrechte oder vorherige Meldungen überprüfen.');
@define('DIRECTORY_DELETE_SUCCESS', 'Verzeichnis \'%s\' erfolgreich gelöscht.');
@define('CHECKING_DIRECTORY', 'Prüfe Dateien im Verzeichnis \'%s\' ...');
@define('DELETE_DIRECTORY', 'Verzeichnis löschen');
@define('DELETE_DIRECTORY_DESC', 'Sie sind dabei, den Inhalt eines Verzeichnisses zu löschen, in welchem Dateien enthalten sind, die möglicherweise in Blog-Einträgen verwendet werden!');
@define('FORCE_DELETE', 'ALLE Dateien dieses Verzeichnisses löschen, inklusive der Dateien, die Serendipity nicht katalogisiert hat');
@define('CREATE_DIRECTORY', 'Verzeichnis anlegen');
@define('CREATE_NEW_DIRECTORY', 'Neues Verzeichnis anlegen');
@define('CREATE_DIRECTORY_DESC', 'Hier kann ein neues Verzeichnis angelegt werden, in welchem Mediendaten gespeichert werden können. Bitte den Namen des neuen Verzeichnisses angeben und optional ein übergeordnetes Verzeichnis auswählen.');
@define('ABOUT_TO_DELETE_FILE', 'Sie beabsichtigen, die Datei <b>%s</b> zu löschen.<br />Wenn Sie die Datei in einem Ihrer Einträge verwenden, wird das Löschen Lücken erzeugen.<br />Soll trotzdem fortgefahren werden?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Fehler: Diese Datei existiert schon auf dem Server!');
@define('REMOTE_FILE_INVALID', 'Die angegebene URL scheint eine lokale zu sein und darf nicht abgerufen werden. Sie können dies explizit gestatten, indem Sie in der Konfiguration die Option "Erlaube, Daten über lokale URLs abzurufen" setzen.');
@define('FILE_NOT_FOUND', 'Die Datei namens <b>%s</b> kann nicht gefunden werden, vielleicht wurde diese schon gelöscht?');
@define('ERROR_FILE_FORBIDDEN', 'Der Upload von Dateien mit aktivem Inhalt ist nicht gestattet!');
@define('REMOTE_FILE_NOT_FOUND', 'Die Datei konnte auf dem Server nicht gefunden werden. Sind Sie sicher, dass die URL <b>%s</b> korrekt ist?');
@define('FILE_FETCHED', '\'%s\' geladen als \'%s\'');
@define('FILE_UPLOADED', 'Datei \'%s\' erfolgreich als \'%s\' hochgeladen');
@define('DELETE_FILE_FAIL', 'Kann das Bild namens <b>%s</b> nicht löschen');
@define('DELETE_FILE', 'Datei namens <b>%s</b> gelöscht');
@define('FOUND_FILE', 'Neue bzw. geänderte Datei \'%s\' gefunden.');
@define('FILENAME_REASSIGNED', 'Automagisch zugewiesener Dateiname: %s');
@define('ERROR_FILE_EXISTS', 'Fehler: Neuer Dateiname "%s" existiert schon, bitte einen anderen wählen.');
@define('ABOUT_TO_DELETE_FILES', 'Sie beabsichtigen mehrere Dateien auf einmal zu löschen.<br />Wenn Sie diese in ihren Einträgen verwenden, wird das Löschen Lücken erzeugen.<br />Soll trotzdem fortgefahren werden?<br /><br />');
@define('MEDIA_HOTLINKED', 'Link');
@define('EDITOR_NO_TAGS', 'Keine Tags');
@define('ENTER_NEW_NAME', 'Bitte einen neuen Namen eingeben für: ');
@define('MEDIA_PROPERTIES_DONE', 'Eigenschaften von #%d geändert.');
@define('MULTICHECK_NO_ITEM', 'Kein Element ausgewählt, bitte mindestens eins auswählen. <a href="%s">Zurück zur vorigen Seite</a>.');
@define('MULTICHECK_NO_DIR', 'Kein Verzeichnis ausgewählt, bitte mindestens eins auswählen. <a href="%s">Zurück zur vorigen Seite</a>.');
@define('ADDING_IMAGE', 'Bild hinzufügen ...');
@define('THUMB_CREATED_DONE', 'Vorschau erstellt.<br />Fertig.');
@define('THUMBNAIL_USING_OWN', 'Verwende %s als Vorschaubild, da das Originalbild bereits so klein ist.');
@define('THUMBNAIL_FAILED_COPY', 'Wollte %s als Vorschaubild verwenden, aber das Kopieren schlug fehl!');
@define('DELETE_THUMBNAIL', 'Vorschaubilder zu <b>%s</b> gelöscht');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Ein Fehler trat beim Dateiupload auf. Vielleicht ist die Datei größer, als durch die Server-Konfiguration zugelassen wird. Bitte mit Ihrem ISP absprechen oder die php.ini-Datei bearbeiten, um größere Uploads zuzulassen.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Fehler: Sie können keine Datei größer als %s Bytes hochladen!');
@define('MEDIA_UPLOAD_DIMERROR', 'Fehler: Sie können keine Bilder größer als %s x %s Pixel hochladen!');
@define('HOTLINK_DONE', 'Link zur Datei erstellt.<br />Fertig.');
@define('DELETE_HOTLINK_FILE', 'Link zur Datei namens <b>%s</b> löschen?');
@define('IMAGICK_EXEC_ERROR', 'Konnte folgendes Programm nicht ausführen: "%s", Fehlermeldung: %s, Rückgabewert: %d');
@define('SKIPPING_FILE_EXTENSION', 'Überspringe Datei: Fehlende Dateiendung von %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Überspringe Datei: \'%s\' nicht lesbar.');
@define('MEDIA_RENAME_FAILED', 'Umbenennen fehlgeschlagen!');
@define('PERM_SET_CHILD', 'Identische Rechte auch auf alle Unterverzeichnisse anwenden');
@define('TIMESTAMP_RESET', 'Das Datum wurde auf die aktuelle Systemzeit gesetzt.');
@define('CURRENT_TAB', 'Aktives Tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Ich möchte die Vorschau im Eintrag haben.');
@define('I_WANT_BIG_IMAGE', 'Ich möchte das große Bild im Eintrag haben.');
@define('I_WANT_NO_LINK', 'Das Bild soll kein Link sein.');
@define('I_WANT_IT_TO_LINK', 'Das Bild soll hierhin linken:');
@define('MEDIA_ALT', 'ALT-Attribut (Bildinhalt oder Kurzbeschreibung)');
@define('MEDIA_TITLE', 'TITLE-Attribut (wird beim Überfahren mit der Maus angezeigt)');
@define('IMAGE_SIZE', 'Bildgröße');
@define('IMAGE_ALIGNMENT', 'Bildausrichtung');
@define('ALIGN_TOP', 'Oben');
@define('ALIGN_LEFT', 'Links');
@define('ALIGN_RIGHT', 'Rechts');
@define('IMAGE_AS_A_LINK', 'Bild als Link');
@define('MEDIA_TARGET', 'Ziel dieses Links');
@define('MEDIA_TARGET_JS', 'Popup-Fenster (via JavaScript, adaptive Größe)');
@define('MEDIA_ENTRY', 'Eigenständige Seite');
@define('MEDIA_TARGET_BLANK', 'Popup-Fenster (via target=_blank)');
@define('YOU_CHOSE', 'Sie haben sich für %s entschieden');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Bild um 90 Grad gegen den Uhrzeigersinn drehen');
@define('IMAGE_ROTATE_RIGHT', 'Bild um 90 Grad im Uhrzeigersinn drehen');
@define('MEDIA_RENAME', 'Datei umbenennen');
@define('THUMBNAIL_SHORT', 'Vorsch.');
@define('ORIGINAL_SHORT', 'Orig.');
@define('SORT_ORDER_NAME', 'Dateiname');
@define('SORT_ORDER_EXTENSION', 'Dateiendung');
@define('SORT_ORDER_SIZE', 'Dateigröße');
@define('SORT_ORDER_WIDTH', 'Bildbreite');
@define('SORT_ORDER_HEIGHT', 'Bildhöhe');
@define('SORT_ORDER_DATE', 'Upload-Datum');
@define('SHOW_METADATA', 'Metadaten zeigen');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Bild/Datei zur Sammlung hinzufügen:</b><p>Hier können Sie eine Datei (z.B. ein Bild) hochladen, oder mitteilen, von wo es geladen werden soll! Wenn das passende Bild fehlt, einfach bei Google danach suchen. Probieren Sie mal <a href="http://images.google.de" target="_blank">Googles Bildsuche</a>, die Resultate sind oft brauchbar, aber auf jeden Fall witzig :). Aber vorsicht: Die meisten Bilder sind urheberrechtlich geschützt, also vorher fragen, um Ärger zu vermeiden.</p><b>Methode wählen:</b></p><br />');
@define('ENTER_MEDIA_URL', 'URL zum Download angeben:');
@define('ENTER_MEDIA_UPLOAD', 'Datei zum Hochladen angeben:');
@define('SAVE_FILE_AS', 'Datei speichern mit dem Namen:');
@define('STORE_IN_DIRECTORY', 'In diesem Verzeichnis ablegen: ');
@define('IMAGE_MORE_INPUT', 'Mehr Bilder hinzufügen');
@define('ENTER_MEDIA_URL_METHOD', 'Download-Methode:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Hinweis: Falls Sie auf eine Datei/Grafik nur verweisen wollen, stellen Sie bitte sicher, dass Sie die Erlaubnis haben, zu diesen Bildern zu linken bzw. dass die verlinkte Webseite Ihnen gehört. Dateiverweise/Links ermöglichen es, eine Datei/Grafik nicht lokal zu speichern, sondern sie direkt von der verlinkten Website einzubinden.');
@define('FETCH_METHOD_IMAGE', 'Bild auf diesem Server speichern');
@define('FETCH_METHOD_HOTLINK', 'Nur zum Quellserver linken');
@define('GO_ADD_PROPERTIES', 'Los & Eigenschaften angeben');
@define('PLAIN_ASCII_NAMES', '(keine Sonderzeichen, Umlaute)');
@define('NO_FILE_SELECTED', 'Damit s9y etwas machen kann, musst du zuerst eine Datei auswählen');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Dateiausmaße ändern');
@define('MEDIA_DELETE', 'Datei löschen');
@define('FILES_PER_PAGE', 'Dateien pro Seite');
@define('HIDE_SUBDIR_FILES', 'Dateien in Unterverzeichnissen verstecken');
@define('NO_IMAGES_FOUND', 'Keine Mediendaten gefunden');
@define('RANGE_FROM', 'Von');
@define('RANGE_TO', 'Bis');
@define('MEDIA_DIRECTORY_MOVE', 'Dateien verschieben');
@define('INSERT_ALL', 'Alle einfügen');
@define('ALL_DIRECTORIES', 'alle Verzeichnisse');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Konfiguration geschrieben und gesichert!');
@define('DIAGNOSTIC_ERROR', 'Bei der Einrichtung der Installation traten einige Fehler auf:');
@define('FULL_COMMENT_TEXT', 'Ja, mit vollständigen Kommentar-Texten.');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Datenbankeinstellungen');
@define('INSTALL_CAT_DB_DESC', 'Konfigurieren Sie hier die Datenbank. Serendipity benötigt die Daten, um lauffähig zu sein.');
@define('INSTALL_DBTYPE', 'Datenbanktyp');
@define('INSTALL_DBTYPE_DESC', 'Datenbanktyp');
@define('INSTALL_DBHOST', 'Datenbank Servername');
@define('INSTALL_DBHOST_DESC', 'Datenbank Servername. Bei pgsql kann ein abweichender Port mittels "localhost port=4711" angegeben werden; bei MySQL mit "localhost:4711".');
@define('INSTALL_DBUSER', 'Datenbank Username');
@define('INSTALL_DBUSER_DESC', 'Datenbank Username');
@define('INSTALL_DBPASS', 'Datenbank Passwort');
@define('INSTALL_DBPASS_DESC', 'Datenbank Passwort');
@define('INSTALL_DBNAME', 'Datenbankname');
@define('INSTALL_DBNAME_DESC', 'Name der Datenbank');
@define('INSTALL_DBPREFIX', 'Datenbank-Präfix');
@define('INSTALL_DBPREFIX_DESC', 'Präfix für Tabellennamen, z.B. serendipity_');
@define('INSTALL_DBPERSISTENT', 'Persistente Verbindungen nutzen');
@define('INSTALL_DBPERSISTENT_DESC', 'Aktiviert die Nutzung einer persistenten Datenbankverbindung. Mehr dazu in der <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">PHP-Dokumentation</a>. Üblicherweise wird diese Einstellung nicht empfohlen.');
@define('INSTAL_DB_UTF8', 'Datenbank-Zeichensatzkonvertierung aktivieren');
@define('INSTAL_DB_UTF8_DESC', 'Sendet einen MySQL "SET NAMES" Befehl, um den verwendeten Zeichensatz der Datenbank mitzuteilen. Falls sich merkwürdige Zeichen im Blog zeigen, ist es einen Versuch wert, diese Option zu (de)aktivieren.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Pfade');
@define('INSTALL_CAT_PATHS_DESC', 'Zahlreiche Pfade zu unterschiedlichen wichtigen Verzeichnissen und Dateien. Unbedingt auf abschließenden Schrägstrich nach Pfaden achten!');
@define('INSTALL_FULLPATH', 'Voller Pfad');
@define('INSTALL_FULLPATH_DESC', 'Der volle und absolute Pfad zur Serendipity-Installation.');
@define('INSTALL_UPLOADPATH', 'Upload-Pfad');
@define('INSTALL_UPLOADPATH_DESC', 'Alle Dateien werden hierhin hochgeladen. Relativ zum vollen Pfad - üblicherweise \'uploads/\'');
@define('INSTALL_RELPATH', 'Relativer HTTP-Pfad');
@define('INSTALL_RELPATH_DESC', 'Der HTTP-Pfad zu Serendipity für den Browser, üblicherweise \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Relativer Template-Pfad');
@define('INSTALL_RELTEMPLPATH_DESC', 'Der Pfad zum Verzeichnis, der die Templates enthält - relativ zum HTTP-Pfad');
@define('INSTALL_RELUPLOADPATH', 'Relativer Upload-Pfad');
@define('INSTALL_RELUPLOADPATH_DESC', 'Der Pfad zum Upload-Verzeichnis für den Browser - relativ zum HTTP-Pfad');
@define('INSTALL_URL', 'URL zum Blog');
@define('INSTALL_URL_DESC', 'Stamm-URL zur Serendipity-Installation');
@define('INSTALL_AUTODETECT_URL', 'HTTP-Hostnamen automatisch erkennen');
@define('INSTALL_AUTODETECT_URL_DESC', 'Falls aktiviert, wird Serendipity sicherstellen, dass der vom Besucher gewählte HTTP-Hostname als BaseURL-Variable verwendet wird. Sofern diese Option aktiviert ist, ist es möglich, mehrere Domainnamen für das Weblog zu verwenden. Alle Links werden dann mit dem HTTP-Hostnamen umgeschrieben, der vom Besucher gewählt wurde.');
@define('INSTALL_INDEXFILE', 'Index-Datei');
@define('INSTALL_INDEXFILE_DESC', 'Welche Datei wird als Index-Datei verwendet (index.php)');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Permalinks');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Bestimmt diverse URL-Strukturen, die dazu verwendet werden, die HTML-Links Ihres Blogs auszugeben. Es wird empfohlen, die Standardeinstellung beizubehalten. Falls Sie diese jedoch ändern möchten, empfiehlt es sich, möglichst überall den %id%-Platzhalter einzusetzen, um Serendipity einige Datenbankabfragen zu ersparen, wenn eine URL ausgelesen werden soll.');
@define('INSTALL_PERMALINK', 'Permalink-Struktur für die Artikel-URLs');
@define('INSTALL_PERMALINK_DESC', 'Legt die relative URL-Struktur fest (beginnend mit der Stamm-URL), mit der normale Artikel dargestellt werden. Die Variablen %id%, %title%, %day%, %month%, %year% und alle anderen normalen Zeichen sind möglich.');
@define('INSTALL_PERMALINK_AUTHOR', 'Permalink-Struktur für Autoren-URLs');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Legt die relative URL-Struktur fest (beginnend mit der Stamm-URL), mit der Artikel von gewählten Autoren dargestellt werden. Die Variablen %id%, %realname%, %username%, %email% und alle anderen normalen Zeichen sind möglich.');
@define('INSTALL_PERMALINK_CATEGORY', 'Permalink-Struktur für Kategorie-URLs');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Legt die relative URL-Struktur fest (beginnend mit der Stamm-URL), mit der gewählte Kategorien dargestellt werden. Die Variablen %id%, %name%, %parentname%, %description% und alle anderen normalen Zeichen sind möglich.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Permalink-Struktur für RSS-Kategorien-Feed URLs');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Legt die relative URL-Struktur fest (beginnend mit der Stamm-URL), mit der gewählte RSS-Feeds von Kategorien dargestellt werden. Die Variablen %id%, %name%, %description% und alle anderen normalen Zeichen sind möglich.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Permalink-Struktur für RSS-Autoren-Feed URLs');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Legt die relative URL-Struktur fest (beginnend mit der Stamm-URL), mit der gewählte RSS-Feeds von Autoren dargestellt werden. Die Variablen %id%, %realname%, %username%, %email% und jede anderen normalen Zeichen sind möglich.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Pfad zu den Einträgen');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Pfad zu den Archiven');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Pfad zu den Kategorien');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Pfad zu den Autoren');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Pfad zu Blogabonnements');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Pfad zum Abbestellen von Kommentaren');
@define('INSTALL_PERMALINK_DELETEPATH', 'Pfad zum Löschen von Kommentaren');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Pfad zum Bewilligen von Kommentaren');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Pfad zu den RSS-Feeds');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Pfad zu einem externen Plugin');
@define('INSTALL_PERMALINK_ADMINPATH', 'Pfad zur Administration');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Pfad zur Suche');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Pfad zu Kommentaren');
@define('CONFIG_PERMALINK_PATH_DESC', 'Beachten Sie bitte, dass Sie ein Präfix verwenden müssen, damit Serendipity die URL korrekt der richtigen Aktion zuordnen kann. Sie dürfen das Präfix in jeden beliebigen einzigartigen Namen ändern, aber nicht komplett entfernen. Das gilt für alle Definitionen für Pfad-Präfixe.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Generelle Einstellungen');
@define('INSTALL_CAT_SETTINGS_DESC', 'Stellt die Grundeigenschaften von Serendipity ein');
@define('INSTALL_USERNAME', 'Admin-Benutzername');
@define('INSTALL_USERNAME_DESC', 'Benutzername für den Administrator-Zugang');
@define('INSTALL_PASSWORD', 'Admin-Passwort');
@define('INSTALL_PASSWORD_DESC', 'Passwort für den Administrator-Zugang');
@define('INSTALL_PASSWORD2', 'Admin-Passwort (erneut)');
@define('INSTALL_PASSWORD2_DESC', 'Passwort für den Administrator-Zugang, nochmal zur Bestätigung eingeben.');
@define('USERCONF_REALNAME', 'Voller Name');
@define('USERCONF_REALNAME_DESC', 'Der vollständige Name des Autors. Nur dieser Name wird Besuchern angezeigt.');
@define('INSTALL_EMAIL', 'Admin-E-Mail');
@define('INSTALL_EMAIL_DESC', 'E-Mail des Administrators');
@define('INSTALL_SENDMAIL', 'Sende E-Mails zum Admin?');
@define('INSTALL_SENDMAIL_DESC', 'Soll der Administrator E-Mails erhalten, wenn Kommentare zum Blog geschrieben werden?');
@define('INSTALL_SUBSCRIBE', 'Abonnments erlauben?');
@define('INSTALL_SUBSCRIBE_DESC', 'Soll es den Besuchern des Blogs möglich sein, Inhalte zu abonnieren und so alle neuen Veröffentlichungen dazu per E-Mail erhalten?');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Benutze Double-Opt In für Abonnements?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'Falls aktiviert, wird einem Kommentator, der E-Mail-Benachrichtigung zu neuen Kommentaren oder Artikeln abonnieren möchte, eine E-Mail geschickt. Diese enthält einen Bestätigungslink nach dem z.B. für Deutsche Gesetze erforderlichen Opt-In-Schema.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Benachrichtigungsgröße');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'Wieviel des Inhalts soll in der email gezeigt werden?');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mailformat Html für Abonnenten');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Sende Mail an Abonnenten als Html oder einfacher Text');
@define('INSTALL_BLOGNAME', 'Blog-Titel');
@define('INSTALL_BLOGNAME_DESC', 'Der Titel des Blogs');
@define('INSTALL_BLOGDESC', 'Blog-Beschreibung');
@define('INSTALL_BLOGDESC_DESC', 'Die Beschreibung des Blogs');
@define('INSTALL_BLOG_EMAIL', 'E-Mail-Adresse des Blogs');
@define('INSTALL_BLOG_EMAIL_DESC', 'Mit dieser Option legen Sie die E-Mail-Adresse fest, die im "From"-Teil von ausgehenden Mails des Servers als Absender verwendet wird. Diese Adresse muss auf dem eingesetzten Mailserver gültig sein, da viele Mailserver ungültige From-Adressen als Spam klassifizieren.');
@define('COMMENT_TOKENS', 'Schnelle Kommentar-Moderation verwenden?');
@define('COMMENT_TOKENS_DESC', 'Diese Methode setzt Tokens ein, damit Kommentare direkt aus der Hinweis-E-Mail heraus gelöscht oder akzeptiert werden können. Diese Funktion ist für höheren Komfort gedacht, geht aber zu Lasten der Sicherheit: Wenn jemand die E-Mail abfängt, kann diese Person entsprechende Kommentare ohne weitere Authentifikation löschen oder freischalten.');
@define('INSTALL_LANG', 'Sprache');
@define('INSTALL_LANG_DESC', 'Wählen Sie die Sprache des Blogs');
@define('INSTALL_CHARSET', 'Zeichensatz-Auswahl');
@define('INSTALL_CHARSET_DESC', 'Hier können Sie zwischen UTF-8 oder dem nationalen Zeichensatz ("Native" - ISO, EUC, ...) wählen. Einige Sprachen sind sowieso nur in UTF-8 Zeichensätzen verfügbar, so dass die Option "Nationaler Zeichensatz" dort keine Auswirkungen hat. UTF-8 wird als Zeichensatz für Neuinstallation empfohlen. Ändern Sie diese Einstellung nicht, wenn Sie bereits Einträge erstellt haben - dies kann zu defekten Zeichen führen. Weitere Informationen finden Sie unter https://docs.s9y.org/docs/developers/internationalization.html.');
@define('INSTALL_CAL', 'Kalendertyp');
@define('INSTALL_CAL_DESC', 'Wählen Sie das gewünschte Kalenderformat');
@define('AUTOLANG', 'Sprache des Browsers eines Besuchers verwenden');
@define('AUTOLANG_DESC', 'Falls aktiviert, wird die im Browser des Besuchers eingestellte Sprache als Standardsprache für Einträge und die Serendipity-Oberfläche benutzt.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Sollen persönliche Plugin-Rechte für Benutzergruppen aktiviert werden?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'Falls die globale Konfigurations-Option "Sollen persönliche Plugin-Rechte für Benutzergruppen aktiviert werden" aktiviert ist, können Sie bei jeder Benutzergruppe definieren, welche Plugins/Ereignisse diese Gruppe ausführen darf.');
@define('UPDATE_NOTIFICATION', 'Update-Hinweis');
@define('UPDATE_NOTIFICATION_DESC', 'Sollen Update-Checks im Dashboard angezeigt werden, und wenn ja für welche Versionen?');
@define('LOG_LEVEL', 'Log Level');
@define('LOG_LEVEL_DESC', 'An einigen Stellen im Serendipity-Code wurden Debugging-Ausgaben platziert. Wenn diese Option auf "Debug" gesetzt wird, werden jene Ausgaben nach templates_c/logs/ geschrieben. Diese Option sollte nur aktiviert werden, wenn Probleme in der Funktionsausführung bestehen. Wird die Option auf "Fehler" gesetzt, werden PHP-Fehler in jenes Logfile geschrieben, hierbei wird die PHP error_log Option überschrieben.');
@define('USE_CACHE', 'Caching aktivieren');
@define('USE_CACHE_DESC', 'Aktiviert einen internen Cache, um die Wiederholung bestimmter Datenbank-Abfragen zu umgehen. Das reduziert die Last auf Server mit mittlerem bis hohem Traffic und verbessert die Ladezeit der Seite.');
@define('QUICKSEARCH_SORT_RELEVANCE', 'Relevanz');
@define('UPDATE_STABLE', 'stabil');
@define('UPDATE_BETA', 'beta');

/* APPEARANCE AND OPTIONS SETTINGS */
@define('INSTALL_CAT_DISPLAY', 'Design und Optionen');
@define('INSTALL_CAT_DISPLAY_DESC', 'Legt fest, wie Serendipity aussieht');
@define('INSTALL_FETCHLIMIT', 'Anzahl der Artikel auf der Startseite');
@define('INSTALL_FETCHLIMIT_DESC', 'Legt fest, wie viele Artikel auf jeder Seite des Blogs angezeigt werden sollen');
@define('INSTALL_RSSFETCHLIMIT', 'Einträge im Feed');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Anzahl der Einträge, die im RSS-Feed dargestellt werden sollen.');
@define('ARCHIVE_SORT_STABLE', 'Unveränderliche Archiv-Seiten');
@define('ARCHIVE_SORT_STABLE_DESC', 'Archiv-Seiten absteigend sortieren, so dass die ältesten Einträge sich auf Seite 1 finden, so dass sich die Inhalte nicht mehr ändern und Suchmaschinen die Seiten nicht ständig neu indizieren müssen.');
@define('QUICKSEARCH_SORT', 'Wie sollen Suchergebnisse sortiert werden?');
@define('SYNDICATION_RFC2616', 'Strikte RFC2616-RSS-Feed-Kompatibilität');
@define('SYNDICATION_RFC2616_DESC', 'Falls RFC2616 NICHT strikt ausgelegt wird, können alle Conditional-GET-Anfragen zu Serendipity die letzten Einträge seit dem letzten Client-Abruf zurückliefern - für Benutzer, die auch nach ihrem Urlaub alle Artikel lesen wollen, ist dies eine tolle Sache. Jedoch können dadurch einige spezielle Clients, wie z.B. Planet, aus dem Tritt gebracht werden, und neue Artikel ihres RSS-Feeds falsch interpretieren. Wenn diese Option also auf JA gesetzt wird, wird zwar der RFC befolgt, aber ihre RSS-Leser könnten Einträge verpassen, wenn Sie länger nicht auf ihrer Seite waren. Wie auch immer sie sich entscheiden, entweder ärgern Sie damit Clients wie Planet oder Ihre Benutzer.');
@define('INSTALL_USEGZIP', 'GZIP-Kompression verwenden');
@define('INSTALL_USEGZIP_DESC', 'Um die Darstellung von Seiten zu beschleunigen, können diese vorher mit GZIP komprimiert werden, sofern der Browser des Betrachters dies unterstützt. Diese Einstellung ist empfohlen.');
@define('INSTALL_XHTML11', 'XHTML 1.1 Standard verwenden');
@define('INSTALL_XHTML11_DESC', 'Soll der XHTML 1.1 Standard verwendet werden? (Erzeugt gültigen Code, kann jedoch bei älteren Browsern Probleme hervorrufen)');
@define('INSTALL_POPUP', 'Popups für Kommentare, Trackbacks usw. verwenden?');
@define('INSTALL_POPUP_DESC', 'Sollen die Links zu den Kommentaren, Trackbacks etc. in Popup-Fenstern geöffnet werden? (Wird nicht von allen Themes unterstützt)');
@define('INSTALL_EMBED', 'Eingebettete Nutzung von Serendipity aktivieren?');
@define('INSTALL_EMBED_DESC', 'Falls Serendipity in eine normale Seite eingebettet werden soll, aktivieren Sie diese Option. Serendipity stellt dann nur Inhalte dar, und Sie können sich um Header und Footer kümmern. Lesen Sie die Datei README, um hierzu weitere Informationen zu erhalten.');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Externe Links klickbar?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"Nein": Ungeprüfte externe Links (Top Exits, Top Referrer, Kommentare) werden unterdrückt/als Text angezeigt, um Google-Spam zu verhindern (empfohlen). "Ja": Externe Links werden als Hyperlinks angezeigt. Diese Einstellung kann in den einzelnen Plugins überschrieben werden.');
@define('INSTALL_TRACKREF', 'Referrer-Tracking aktivieren?');
@define('INSTALL_TRACKREF_DESC', 'Wenn das Referrer-Tracking aktiviert ist, werden Verweise auf Ihre Einträge gespeichert. Heutzutage wird dies leider häufig für Spam missbraucht und kann daher deaktiviert werden.');
@define('INSTALL_BLOCKREF', 'Geblockte Referrer');
@define('INSTALL_BLOCKREF_DESC', 'Sollen spezielle Hosts aus der Referrer-Liste gesperrt werden? Hostnamen getrennt mit ";" eingeben. Jeder Hostname wird als Teilstring überprüft, so dass "goo" sowohl "google.com" als auch "googlegroups.com" sperren würde.');
@define('INSTALL_REWRITE', 'URL-Formung');
@define('INSTALL_REWRITE_DESC', 'Wählen Sie die Methode zur Erzeugung der URLs. Wenn diese aktiviert werden, können sprechende Namen für jeden Artikel verwendet werden und somit besser von Suchmaschinen indiziert Der Webserver muss entweder mod_rewrite oder die "AllowOverride All"-Direktive unterstützen. Der Standardwert wird automagisch bestimmt.');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Basiert die Zeitdifferenz auf der Server-Zeitzone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Eintragszeiten nach Server-Zeitzone eintragen oder nicht. YES wählt die Server-Zeitzone als Basis, NO wählt GMT.');
@define('INSTALL_OFFSET', 'Zeitunterschied des Servers');
@define('INSTALL_OFFSET_DESC', 'Gibt an, wie viele Stunden zwischen der Uhrzeit des Servers (aktuell: %clock%) und der eigenen Zeitzone liegen.');
@define('INSTALL_SHOWFUTURE', 'Zukünftige Einträge zeigen');
@define('INSTALL_SHOWFUTURE_DESC', 'Falls aktiviert, werden auch die Einträge angezeigt, deren Datum in der Zukunft liegt. Standardmäßig werden solche Einträge versteckt und erscheinen erst, wenn der entsprechende Zeitpunkt erreicht wird.');
@define('INSTALL_ACL', 'Leserechte auf Kategorien anwenden');
@define('INSTALL_ACL_DESC', 'Falls aktiviert, werden die Leserechte der Benutzergruppen bei der Ansicht des Frontends aktiviert. Falls deaktiviert, werden die für Kategorien vergebenen Leserechte NICHT angewandt, dafür müssen aber auch weniger SQL-Abfragen durchgeführt werden. Wenn Sie also keine Mehrbenutzer-Leserechte benötigen, deaktivieren Sie diese Einstellung.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed-Einstellungen');
@define('INSTALL_CAT_FEEDS_DESC', 'Einstellungen für den RSS Feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Volle Einträge mit erweitertem Text im RSS-Feed einbinden');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Bild für den RSS-Feed');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL für ein Bild im GIF/JPEG/PNG Format, falls vorhanden (leer: Serendipity-Logo).');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Breite des Bildes');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'in Pixeln, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Höhe des Bildes');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'in Pixeln, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'E-Mail-Adressen einbinden?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Feld "managingEditor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'E-Mail-Adresse des verantwortlichen Editors, falls vorhanden (leer: nicht verwenden). [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Feld "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'E-Mail-Adresse des Webmasters, falls vorhanden (leer: nicht verwenden). [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Feld "ttl" (time-to-live)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Anzahl der Minuten, nachdem das Blog von fremden Seiten nicht mehr gecached werden sollte (leer: nicht verwenden). [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Feld "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Soll das "pubDate"-Feld für den RSS-Kanal eingebettet werden, um das Datum des letzten Eintrags zu enthalten?');
@define('FEED_CUSTOM', 'Individuelle Feed-URL');
@define('FEED_CUSTOM_DESC', 'Wenn gesetzt, wird die eingetragene URL verwendet um Feedreader dorthin weiterzuleiten. Dies ist hilfreich für Statistikdienste wie z.B. Feedburner, so dass hier die Feedburner-URL des eigenen Feeds hinterlegt werden kann.');
@define('FEED_FORCE', 'Erzwingen der individuellen Feed-URL?');
@define('FEED_FORCE_DESC', 'Wenn aktiviert, werden alle Feedreader automatisch zu der eingetragenen individuellen Feed-URL weitergeleitet.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Bildkonvertierung');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Wie soll Serendipity Bilder handhaben');
@define('INSTALL_IMAGEMAGICK', 'ImageMagick zur Skalierung verwenden');
@define('INSTALL_IMAGEMAGICK_DESC', 'Ist ImageMagick installiert? Verwendet ansonsten die GDLib.');
@define('INSTALL_IMAGEMAGICKPATH', 'Pfad zur convert ImageMagick-Datei');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Voller Pfad und Name zur Image-Magick Datei');
@define('INSTALL_THUMBSUFFIX', 'Vorschaubild-Endung');
@define('INSTALL_THUMBSUFFIX_DESC', 'Vorschaubilder werden nach dem Schema originalname.Suffix.erweiterung benannt.');
@define('INSTALL_THUMBWIDTH', 'Vorschaubildgröße');
@define('INSTALL_THUMBWIDTH_DESC', 'Maximale Breite/Höhe der automatisch erzeugten Vorschaubildes');
@define('INSTALL_THUMBDIM', 'Bestimmung der maximalen Vorschaubildgröße');
@define('INSTALL_THUMBDIM_LARGEST', 'Längste Seite');
@define('INSTALL_THUMBDIM_WIDTH', 'Breite');
@define('INSTALL_THUMBDIM_HEIGHT', 'Höhe');
@define('INSTALL_THUMBDIM_DESC', 'Legt fest, wie die Größe der Thumbnails angepasst werden soll. Der Standard"' . INSTALL_THUMBDIM_LARGEST .  '" nutzt die größte Seite als Beschränkung, so dass weder Breite noch Höhe die festgelegte Zahl überschreiten dürfen."' . INSTALL_THUMBDIM_WIDTH . '" und "' .  INSTALL_THUMBDIM_HEIGHT . '"legen lediglich die Höhe bzw. Breite als größte Seite fest, so dass die jeweils andere Angabe auch größer als die festgelegte Zahl sein darf.');
@define('MEDIA_UPLOAD_SIZE', 'Maximale Dateigröße für den Upload');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Geben Sie die maximale Dateigröße für hochgeladene Dateien in Bytes an. Diese Option kann jedoch auch durch serverseitige Optionen der PHP.ini beschränkt sein. PHP.ini: upload_max_filesize, post_max_size, max_input_time. Wenn Sie diese Option leerlassen, werden nur die serverseitigen Einschränkungen angewandt.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Maximale Breite eines hochgeladenen Bildes');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Geben sie die maximale Breite eines hochgeladenen Bildes in Pixeln an.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Maximale Höhe eines hochgeladenen Bildes');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Geben sie die maximale Höhe eines hochgeladenen Bildes in Pixeln an.');
@define('MEDIA_UPLOAD_RESIZE', 'Vor dem Upload Größe anpassen');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Mittels Javascript werden Bilder vor dem Upload an die gewählte Maximalgröße angepasst. Wenn aktiv, wird Ajax für den Bildupload verwendet was auch zu der Entfernung des "Eigenschaften eingeben"-Buttons führt, dies muss dann separat geschehen.');
@define('ONTHEFLYSYNCH', 'Automagische Synchronisation der Mediendatenbank');
@define('ONTHEFLYSYNCH_DESC', 'Falls diese Option aktiviert ist, wird Serendipity den Inhalt der Mediendatenbank mit dem echten Inhalt im Dateisystem abgleichen.');
@define('MEDIA_DYN_RESIZE', 'Dynamische Bildgrößenanpassung erlauben?');
@define('MEDIA_DYN_RESIZE_DESC', 'Falls aktiviert, kann die Medienauswahl ein Bild in beliebigen Größen zurückliefern, indem spezielle GET-Variablen übermittelt werden. Die Ergebnisse werden gecached und können daher möglicherweise viel Speicherplatz beanspruchen.');
@define('MEDIA_EXIF', 'EXIF/JPEG Metadaten übernehmen?');
@define('MEDIA_EXIF_DESC', 'Falls aktiviert, werden EXIF/JPEG Metadaten ausgelesen und in der Datenbank gespeichert.');
@define('MEDIA_PROP', 'Medien-Eigenschaften');
@define('MEDIA_PROP_DESC', 'Tragen Sie eine Liste von ";" separierten Eigenschaftsfeldern ein, die für Mediendatenbankeinträge ausgefüllt werden können.');
@define('MEDIA_PROP_MULTIDESC', '(Sie können ":MULTI" nach jedem Element eintragen, um anzugeben dass für dieses Feld eine lange Beschreibung erwartet wird)');
@define('MEDIA_KEYWORDS', 'Medien-Schlüsselwörter');
@define('MEDIA_KEYWORDS_DESC', 'Tragen Sie eine Liste von ";" separierten Schlüsselwörtern ein, die für Mediendatenbankeinträge vergeben werden können.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Erlaube, Daten über lokale URLs abzurufen');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'Standardmäßig ist es aus Sicherheitsgründen verboten, Daten über lokale URLs abzurufen, um Server Side Request Forgers (SSRF) zu vermeiden. Wenn Sie ein lokales Intranet verwenden können sie die Datenabfrage über diese Option explizit erlauben.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Persönliche Einstellungen');
@define('USERCONF_CAT_PERSONAL_DESC', 'Einstellungen des eigenen Accounts');
@define('USERCONF_USERNAME', 'Benutzername');
@define('USERCONF_USERNAME_DESC', 'Ihr Benutzername');
@define('USERCONF_PASSWORD', 'Passwort');
@define('USERCONF_PASSWORD_DESC', 'Ihr Passwort');
@define('USERCONF_CHECK_PASSWORD', 'Altes Passwort');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Falls Sie das Passwort im vorhergehenden Feld ändern, müssen Sie das aktuelle Password in diesem Feld eingeben.');
@define('USERCONF_USERLEVEL', 'Zugriffsrechte');
@define('USERCONF_USERLEVEL_DESC', 'Zugriffsrechte bestimmen die Art und den Umfang des Zugriffs eines Benutzers auf die Funkionalitäten des Blogs');
@define('USERCONF_GROUPS', 'Gruppenzugehörigkeit');
@define('USERCONF_GROUPS_DESC', 'Dieser Benutzer ist Mitglied folgender Gruppen (mehrere Zugehörigkeiten möglich).');
@define('USERCONF_EMAIL', 'E-Mail');
@define('USERCONF_EMAIL_DESC', 'Ihre E-Mail-Adresse');
@define('INSTALL_WYSIWYG', 'Grafischen WYSIWYG-Editor verwenden');
@define('INSTALL_WYSIWYG_DESC', 'Soll der grafische WYSIWYG-Editor verwendet werden?');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR', 'WYSIWYG-Buttonleiste');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR_DESC', 'Hier kann die Menge der verfügbaren Buttons im WYSIWYG-Editor mittels einer Voreinstellung gewählt werden. Falls darüber hinaus eigene Anpassungen (mittels einer individuellen JavaScript-Konfigurationsdatei in templates/XXX/admin/ckeditor_custom_config.js) benötigt werden befinden sich Hinweise hierzu in den Dateien htmlarea/ckeditor_s9y_config.js und htmlarea/ckeditor_s9y_plugin.js.');
@define('USERCONF_WYSIWYG_PRESET_S9Y', 'Serendipity (Standard)');
@define('USERCONF_WYSIWYG_PRESET_BASIC', 'Reduziert');
@define('USERCONF_WYSIWYG_PRESET_FULL', 'Vollständig');
@define('USERCONF_WYSIWYG_PRESET_STANDARD', 'Alternative');
@define('USERCONF_WYSIWYG_PRESET_CKE', 'CKEditor Vollständig');
@define('USERCONF_WYSIWYG_PRESET_NOCC_S9Y', 'Erzwingen: Serendipity');
@define('USERCONF_WYSIWYG_PRESET_NOCC_BASIC', 'Erzwingen: Reduziert');
@define('USERCONF_WYSIWYG_PRESET_NOCC_FULL', 'Erzwingen: Vollständig');
@define('USERCONF_WYSIWYG_PRESET_NOCC_STANDARD', 'Erzwingen: Alternative');
@define('USERCONF_WYSIWYG_PRESET_NOCC_CKE', 'Erzwingen: CKEditor Vollständig');
@define('USERCONF_SENDCOMMENTS', 'Bei Kommentaren benachrichtigen?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Wollen Sie eine E-Mail erhalten, sobald ein neuer Kommentar zu Ihrem Eintrag geschrieben wurde?');
@define('USERCONF_SENDTRACKBACKS', 'Bei Trackbacks benachrichtigen?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Wollen Sie eine E-Mail erhalten, sobald ein neues Trackback zu Ihrem Eintrag geschrieben wurde?');
@define('USERCONF_CREATE', 'Benutzer deaktivieren / Rechte entziehen?');
@define('USERCONF_CREATE_DESC', 'Wenn diese Option aktiviert ist, wird dieser Benutzer keine Möglichkeit mehr haben Einträge anzulegen oder sonstige Aktionen auszuführen. Wenn er in die Administrations-Oberfläche kommt, wird er nichts anderes tun können als seine Persönlichen Einstellungen zu ändern und sich auszuloggen.');
@define('USERCONF_ALLOWPUBLISH', 'Rechte: Einträge veröffentlichen?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Darf Einträge veröffentlichen?');
@define('SIMPLE_FILTERS', 'Vereinfachte Filter');
@define('SIMPLE_FILTERS_DESC', 'Wenn aktiviert, werden Suchformulare und Filteroptionen auf die notwendigen Optionen reduziert. Ist diese Option deaktiviert, werden alle erweiterten Filteroptionen, z.b. beim Eintrags-Editor oder der Mediendatenbank, angezeigt.');
@define('INSTALL_BACKENDPOPUP', 'Popups für das Backend verwenden?');
@define('INSTALL_BACKENDPOPUP_DESC', 'Sollen im Backend Popup-Fenster eingesetzt werden? Wenn deaktiviert (standard), werden eingebettete modale Dialoge z.b. für die Mediendatenbank und die Kategorieauswahl verwendet.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Popups in speziellen Bereichen erzwingen');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'Wenn Popups generell deaktiviert wurden, kann an speziellen Stellen dennoch der Einsatz von Popups forciert werden, indem die Liste jener Stellen hier aufgeführt wird (kommasepariert). Die vollständige Liste ist: ');
@define('SHOW_MEDIA_TOOLBAR', 'Symbolleiste für das Mediendatenbank-Popup anzeigen?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Voreinstellungen für neue Einträge');
@define('CONF_USE_AUTOSAVE', 'Automatische Speicherung aktivieren');
@define('CONF_USE_AUTOSAVE_DESC', 'Wenn aktiviert, wird der Text von Blog-Einträgen regelmäßig automatisch im Session-Speicher des Browsers gesichert. Falls der Browser während des Schreibens abstürzt wird beim nächsten Erzeugen eines Eintrags der verlorene Text wiederhergestellt.');
@define('USERLEVEL_OBSOLETE', 'HINWEIS: Das Attribut "Benutzerrang" wird nur noch zwecks Abwärtskompatibilität zu Plugins benötigt. Sämtliche Benutzerrechte werden nun mittels Gruppenzugehörigkeiten verwaltet!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Sie haben kein gültiges derzeitiges Passwort angegeben und sind daher nicht berechtigt, das neue Passwort festzulegen. Ihre Einstellungen wurden nicht gespeichert.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'Der Benutzername darf nicht leer gelassen werden.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: Zugriff auf Persönliche Einstellungen');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: Benutzerlevel ändern');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: Ändern von "Erstellung von Einträgen verbieten"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: Recht zur Veröffentlichung von Einträgen');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Systemweite Konfiguration');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Blog-spezifische Konfiguration');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Einträge verwalten');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Einträge anderer Benutzer verwalten');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Abonnements löschen');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Einträge importieren');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Kategorien verwalten');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Kategorien anderer Benutzer verwalten');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Kategorien löschen');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Benutzer verwalten');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Benutzer löschen');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: Benutzerlevel ändern');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Benutzer eigener Gruppe verwalten');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Benutzer anderer Gruppen verwalten');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Neue Benutzer anlegen');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Benutzergruppen verwalten');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Plugins verwalten');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Plugins anderer Benutzer verwalten');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Mediendaten verwalten');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Medienverzeichnisse verwalten');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: Neue Mediendaten hinzufügen');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Mediendaten löschen');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Mediendaten anderer Benutzer verwalten');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: Mediendaten ansehen');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Vorschaubilder synchronisieren');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Kommentare verwalten');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Templates verwalten');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: Mediendaten anderer Benutzer ansehen');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Verbotene Plugins');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Verbotene Ereignisse');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Der Eintrag wurde gespeichert');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Verschachtelt');
@define('COMMENTS_VIEWMODE_LINEAR', 'Linear');
@define('DISPLAY_COMMENTS_AS', 'Ansicht der Kommentare: ');
@define('COMMENTS_DISABLE', 'Kommentare für diesen Eintrag nicht mehr zulassen');
@define('COMMENTS_ENABLE', 'Kommentare für diesen Eintrag zulassen');
@define('COMMENTS_CLOSED', 'Die Kommentarfunktion wurde vom Besitzer dieses Blogs in diesem Eintrag deaktiviert. ');
@define('VIEW_EXTENDED_ENTRY', '"%s" vollständig lesen');
@define('TRACKBACK_SPECIFIC', 'Trackback-URL für diesen Eintrag');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'ganz anzeigen');
@define('VIEW_TOPICS', 'Überschriften anzeigen');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Themen in');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Einträge konnten nicht importiert werden!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Daten merken? ');
@define('SUBMIT_COMMENT', 'Kommentar abschicken');
@define('SUBSCRIBE_COMMENT', 'Abonniere Kommentare');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'Sie können auch über neue Kommentare informiert werden ohne einen zu verfassen. Bitte geben Sie ihre email-Adresse unten ein.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Bei Aktualisierung dieser Kommentare benachrichtigen');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Ihr Browser hat keinen gültigen HTTP-Referrer übermittelt. Dies kann entweder daher kommen, dass Ihr Browser/Proxy nicht korrekt konfiguriert ist, oder dass Sie Opfer einer "Cross Site Request Forgery (XSRF)" waren, mit der man Sie zu ungewollten Änderungen zwingen wollte. Die angeforderte Aktion konnte daher nicht durchgeführt werden.');
@define('NAVLINK_AMOUNT', 'Anzahl der Links in der Navigationsleiste (Themes verwalten-Seite muss danach neu geladen werden)');
@define('NAV_LINK_TEXT', 'Text des Navigationsleisten-Links');
@define('NAV_LINK_URL', 'URL des Navigationsleisten-Links');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Kommentar #%s wurde bereits bewilligt.');
@define('COMMENT_EDITED', 'Der gewählte Kommentare wurde bearbeitet.');
@define('COMMENTS_WILL_BE_MODERATED', 'Kommentare werden erst nach redaktioneller Prüfung freigeschaltet!');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Hinweis: Dieser Kommentar wird ohne Bewilligung nicht dargestellt.');
@define('DELETE_COMMENT', 'Kommentar löschen');
@define('APPROVE_COMMENT', 'Kommentar bewilligen');
@define('REQUIRES_REVIEW', 'Bewilligung notwendig');
@define('COMMENT_APPROVED', 'Kommentar #%s wurde erfolgreich bewilligt.');
@define('COMMENT_DELETED', 'Kommentar #%s wurde erfolgreich gelöscht.');
@define('COMMENTS_MODERATE', 'Kommentare und Trackbacks dieses Eintrags werden moderiert.');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Hinweis: Dieses Trackback wird ohne Bewilligung nicht dargestellt.');
@define('DELETE_TRACKBACK', 'Trackback löschen');
@define('APPROVE_TRACKBACK', 'Trackback bewilligen');
@define('TRACKBACK_APPROVED', 'Trackback #%s wurde erfolgreich bewilligt.');
@define('TRACKBACK_DELETED', 'Trackback #%s wurde erfolgreich gelöscht.');
@define('COMMENT_NOTOKENMATCH', 'Der Kommentar-Link ist nicht mehr gültig, oder Kommentar #%s wurde bereits akzeptiert oder gelöscht.');
@define('TRACKBACK_NOTOKENMATCH', 'Der Kommentar-Link ist nicht mehr gültig, oder Trackback #%s wurde bereits akzeptiert oder gelöscht.');
@define('BADTOKEN', 'Ungültiger Kommentar-Link');
@define('TOP_LEVEL', 'Ursprung');
@define('VIEW_COMMENT', 'Kommentar ansehen');
@define('VIEW_ENTRY', 'Eintrag ansehen');
@define('LINK_TO_ENTRY', 'Link zum Eintrag');
@define('LINK_TO_REMOTE_ENTRY', 'Link zum Remote-Eintrag');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Sende pingback an URI %s...');
@define('PINGBACK_SENT', 'Pingback erfolgreich');
@define('PINGBACK_FAILED', 'Pingback fehlgeschlagen: %s');
@define('PINGBACK_NOT_FOUND', 'Keine pingback-URI gefunden.');
@define('TRACKBACK_SENDING', 'Sende Trackback zu URI %s ...');
@define('TRACKBACK_SENT', 'Trackback erfolgreich!');
@define('TRACKBACK_FAILED', 'Trackback gescheitert: %s');
@define('TRACKBACK_NOT_FOUND', 'Keine Trackback-URI gefunden.');
@define('TRACKBACK_URI_MISMATCH', 'Die automatisch erkannte Trackback-URI gleicht nicht der angegebenen URI.');
@define('TRACKBACK_CHECKING', 'Überprüfe <u>%s</u> auf mögliche Trackbacks ...');
@define('TRACKBACK_NO_DATA', 'URI enthielt keine Daten');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Kein Trackback: Konnte Verbindung zu %s auf Port %d nicht herstellen.');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Sende emails an % Abonnenten ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Emails versandt!');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Hallo %s,\n\nSie haben bei ihrem Blog-Kommentar zu dem Eintrag \"%s\" auf <%s> das Abonnement neuer Kommentare gewünscht. Um dies zu bestätigen (\"Double Opt In\") klicken Sie bitte diesen Link:\n<%s>\n");
@define('CONFIRMATION_MAIL_TITLE', 'Email-Abonnement neuer Artikel von "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Hallo %s,\n\nSie wollen benachrichtigt werden wenn neue Artikel im Blog \"%s\" (<%s>) erscheinen. Um das Abonnement zu bestätigen (\"Double Opt In\") klicken Sie bitte auf diesen Link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "Hallo %s,\n\nSie haben einen neuen Kommentar zu \"%s\" erstellt. Ihr Kommentar war:\n\n%s\n\nDer Betreiber dieses Blogs hat die Bestätigung per E-Mail gewünscht, daher müssen Sie folgenden Link anklicken:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Hallo %s,\n\nSie haben einen neuen Kommentar zu \"%s\" erstellt. Ihr Kommentar war:\n\n%s\n\nDer Betreiber dieses Blogs hat die Bestätigung per E-Mail gewünscht, daher müssen Sie folgenden Link anklicken:\n<%s>\n\nNachdem Sie dies getan haben, können Sie auf dem Blog jederzeit mit ihrem Namen und E-Mail-Adresse ohne weitere Freischaltung kommentieren.");
@define('SUBSCRIPTION_MAIL_INTRO', 'Im Blog %s ist ein neuer Artikel erschienen:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'Sie erhalten diese e-mail weil Sie neue Artikel im Blog %s abonniert haben. Um das Abonnement zu beenden, bitte hier klicken: ');
@define('SUBSCRIPTION_NEW_ARTICLE', 'Neuer Artikel');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Benachrichtigung zu neuem Kommentar des Eintrags "%s"');
@define('SUBSCRIPTION_MAIL', "Hallo %s,\n\nEin neuer Kommentar wurde dem Eintrag hinzugefügt, den Sie auf \"%s\" namens \"%s\" finden.\nDer Name des Autors ist: %s\n\nSie können den Eintrag hier finden: %s\n\nSie können diese Benachrichtung mit folgender URL kündigen: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Hallo %s,\n\nEin neues Trackback wurde dem Eintrag hinzugefügt, den Sie auf \"%s\" namens \"%s\" finden.\nDer Name des Autors ist: %s\n\nSie können den Eintrag hier finden: %s\n\nSie können diese Benachrichtung mit folgender URL kündigen: %s\n");
@define('SIGNATURE', "\n-- \n%s wird betrieben mit Serendipity.\nDas allerbeste Blog, Sie können es auch nutzen.\nWie das geht, sehen Sie auf <https://s9y.org>.");
@define('SIGNATURE_HTML', "<hr><p>%s wird betrieben mit Serendipity.<br>Das allerbeste Blog, Sie können es auch nutzen.<br>Wie das geht, sehen Sie auf <a href='https://s9y.org'>s9y.org</a>.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Im Blog %s wurde ein neuer Kommentar zu Eintrag "%s" abgegeben!');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Ein neues Trackback für den Blog-Eintrag namens "%s" wurde empfangen.');
@define('YOU_HAVE_THESE_OPTIONS', 'Folgende Möglichkeiten stehen zur Verfügung:');
@define('NEW_TRACKBACK_TO', 'Neues Trackback für');
@define('NEW_COMMENT_TO', 'Neuer Kommentar für');

/* ROUTING */
@define('URL_NOT_FOUND', 'Die angeforderte Seite konnte nicht gefunden werden (404). Dies ist die Standardseite.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Bei der Suche nach "%s" konnte kein Eintrag gefunden werden.' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Die Suche nach "%s" ergab %s Treffer:');
@define('SEARCH_TOO_SHORT', 'Die Wörter Ihrer Suchanfrage müssen länger als 3 Zeichen sein. Sie können versuchen, ein "*" an diese kurzen Wörter anzuhängen (z.B. s9y*) um die Beschränkung zu umgehen.');
@define('SEARCH_ERROR', 'Die Suche konnte nicht wie gewünscht ausgeführt werden. Hinweis für den Administrator dieses Blogs: Dieser Fehler kann durch fehlende Index-Schlüssel der Datenbank verursacht werden. Auf MySQL-Systemen muss der Datenbankbenutzer-Account in der Lage sein, Index-Schlüssel zu erstellen und folgende Abfrage auszuführen: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> Die genaue Fehlermeldung der Datenbank bei der Suche lautete: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Ihr Kommentar war leer, bitte %sgehen Sie zurück%s und versuchen es erneut');
@define('COMMENT_NOT_ADDED', 'Kommentar wurde nicht hinzugefügt, da Kommentare für diesen Eintrag entweder deaktiviert sind, Sie ungültige Eingaben gemacht haben oder Anti-Spam-Maßnahmen angewendet wurden.');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Kommentare von');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', 'Die Bestätigung ihres Kommentars wurde erfolgreich verarbeitet.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'Ihre Bestätigung des Kommentars konnte nicht verarbeitet werden. Bitte prüfen Sie den Link, den Sie geklickt haben, auf Vollständigkeit. Falls dieser Link vor mehr als 3 Wochen gesendet wurde, müssen Sie ihr Kommentar erneut senden.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Das Abonnement konnte nicht bestätigt werden. Bitte prüfen Sie ob der angeklickte Link vollständig ist. Wenn der Link vor mehr als drei Wochen zugesandt wurde, musst Du eine neue Bestätigungsmail anfordern.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'Die Bestätigung des Abonnements der Kommentarbenachrichtigung wurde erfolgreich verarbeitet.');

/* SERVE UNSUBSCRIBE */
@define('NOTIFICATION_UNSUBSCRIBE_CONFIRM', 'Das Abonnement für "%s" wurde erfolgreich gelöscht. Sie werden nicht mehr über neue Artikel informiert.');
@define('NOTIFICATION_UNSUBSCRIBE_FAIL', 'Das Abonnement für die email %s konnte nicht gelöscht werden. Bitte prüfen Sie den Link auf den Sie geklickt haben auf Vollständigkeit.');
@define('NOTIFICATION_UNSUBSCRIBE_ENTRY_CONFIRM', 'Das Abonnement für die email %s für "%s" wurde erfolgreich gelöscht. Sie werden nicht mehr über neue Kommentare informiert.');
@define('NOTIFICATION_UNSUBSCRIBE_BAD_TOKEN', 'Das Abonnement konnte nicht gelöscht werden. Bitte prüfen Sie den Link auf den Sie geklickt haben auf Vollständigkeit.');

/* SERVE SUBSCRIBE */
@define('NOTIFICATION_OPTINMAIL_SENT', 'Die Anforderung für ein Blog-Abonnement wurde empfangen. Eine email wird an %s gesandt um das Abonnement zu bestätigen ("Double Opt In").');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM', 'Das Abonnement für "%s" ist bestätigt. Eine Zusammenfassung eines neuen Artikels wird Ihnen zugesandt. Sie können das Abonnement jederzeit mit dem in jeder Mail befindlichen Link abbestellen.');
@define('NOTIFICATION_SUBSCRIBE_DUPE', 'Das Abonnement ist fehlgeschlagen weil es bereits ein aktives Abonnement unter dieser Adresse für "%s" gibt.');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM_FAIL', 'Das Abonnement ist fehlgeschlagen. Bitte prüfen Sie die eingegebene e-mail-Adresse.');
@define('BLOG_SUBSCRIPTION_TITLE', 'Email-Abonnement neuer Artikel');
@define('BLOG_SUBSCRIPTION_BLAHBLAH', 'Um über neue Artikel informiert zu werden, bitte hier die email-Adresse eingeben.');
@define('BLOG_SUBSCRIPTION_AUTHOR', 'Um über neue Artikel von "%s" informiert zu werden, bitte hier die email-Adresse eingeben.');
@define('BLOG_SUBSCRIPTION_CATEGORY', 'Um über neue Artikel in der Kategorie "%s" informiert zu werden, bitte hier die email-Adresse eingeben.');
@define('BLOG_SUBSCRIPTION_OPTIN', 'Eine email mit einem Bestätigungslink wird an diese Adresse verschickt. Klicken Sie auf diesen Link um das Abonnement zu bestätigen.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_AUTHOR', 'Um über neue Artikel von "%s" informiert zu werden, bitte hier die email-Adresse eingeben.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_CATEGORY', 'Um über neue Artikel in der Kategorie "%s" informiert zu werden, bitte hier die email-Adresse eingeben.');

/* PLUGIN_API */
@define('PLUGIN_API_VALIDATE_ERROR', 'Falsche Konfigurationsangaben für die Option "%s". Diese muss vom Typ "%s" sein!');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Zeigt eine Liste der Kategorien');
@define('CATEGORIES_PARENT_BASE', 'Zeige nur Kategorien unterhalb ...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Sie können eine Eltern-Kategorie definieren, so dass nur die Unterkategorien derselben angezeigt werden.');
@define('CATEGORIES_HIDE_PARALLEL', 'Kategorien verstecken, die nicht Teil des vom Besucher gewählten Kategoriebaums sind.');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Falls Sie Kategorien verstecken wollen, die innerhalb einer parallelen Baumstruktur abgebildet sind, muss diese Option aktiviert werden. Diese Einstellung macht hauptsächlich dann Sinn, wenn sie in einem Multi-Blog-System des "Eigenschaften/Templates von Kategorien"-Plugins verwendet werden.');
@define('CATEGORIES_HIDE_PARENT', 'Die gewählte Oberkategorie verstecken?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Falls Sie die Liste der Kategorien auf gewisse Unterkategorien einschränken, wird standardmäßig die Oberkategorie mit angezeigt. Wenn diese Option deaktiviert wird, kann dies verhindert werden.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Smarty-Templating aktivieren?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Falls diese Option aktiviert ist, wird das Kategorie-Plugin die Liste mittels Smarty-Templates ausgeben. Durch die Aktivierung der Option kann dann das Layout mittels der Template-Datei "plugin_categories.tpl" angepasst werden. Die Aktivierung dieser Option bringt Performance-Einbußen mit sich, daher sollten Sie die Option nur dann aktivieren, wenn Ihnen die Anpassungen wichtig sind.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Anzahl der Einträge pro Kategorie anzeigen?');
@define('CATEGORY_PLUGIN_SHOWALL', 'Zeige einen Link zu "Alle Kategorien"?');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'Falls aktiviert wird Besuchern ein Link angezeigt, um das Blog ohne Einschränkung der Kategorien darzustellen.');
@define('CATEGORIES_ALLOW_SELECT', 'Besuchern erlauben, mehrere Kategorien gleichzeitig darzustellen?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Falls diese Option aktiviert ist, wird eine Auswahlbox neben jeder Kategorie angezeigt, damit Besucher mehrere Kategorien gleichzeitig auswählen können.');
@define('CATEGORIES_TO_FETCH', 'Quelle der Kategorien');
@define('CATEGORIES_TO_FETCH_DESC', 'Kategorien welcher Autoren einbeziehen?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Zeigt die Liste aller Autoren');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Anzahl der Artikel neben dem Autor-Namen anzeigen? ');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Wenn diese Option aktiviert ist, wird die Anzahl der von diesem Autor verfassten Artikel in Klammern neben seinem Namen angezeigt.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Nur Autoren mit mindestens X Beiträgen anzeigen');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Syndication');
@define('SHOWS_RSS_BLAHBLAH', 'Zeigt die RSS Syndication-Links');
@define('SYNDICATE_THIS_BLOG', 'Blog abonnieren');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed-Format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Hier kann das Standard-Format der Feeds gewählt werden. Beide Formate werden heutzutage von den meisten Feedreader unterstützt.');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Kommentar-Feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Bindet einen zusätzlichen Link zum Kommentar-Feed ein. Dies ist meist eher für die Blog-Autoren interessant.');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s Feed');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91 feed');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0 feed');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0 feed');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 Kommentar');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3 feed');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed-Icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Zeigt ein (großes) Bild anstelle eines Textlinks an. Auf "none" stellen um dies zu deaktivieren oder auf "feedburner" stellen, wenn bei der Verwendung von FeedBurner dessen Symbol genutzt werden soll.');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Zeigt den subToMe button, mit dem Feed-Abonnements einfacher für Besucher verwaltet werden können.');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Individuelle Feed-URL aktivieren?');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'Falls der Link zu der individuellen Feed-URL der globalen Konfiguration führen soll, muss diese Option aktiviert werden.');
@define('SYNDICATION_PLUGIN_FEEDNAME', 'Angezeigter Name für "feed"');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'Optional benutzerdefinierten Namen für die Feeds eingeben (Vorgabe ist "feed" wenn leer)');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'Anzeigename für "Kommentar" feed');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'Optional benutzerdefinierten Namen für den Kommentar-Feed eingeben');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'FeedBurner-ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'Die ID des Feeds, der veröffentlicht werden soll');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner-Bild');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Dateiname des Bildes, das dargestellt werden soll (leer lassen für einen Zähler). Die Datei muss auf feedburner.com vorhanden sein, z.B. fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner Titel');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Titel (falls vorhanden) der neben dem Bild angezeigt werden soll');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner Bildunterschrift');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Text (falls vorhanden), der angezeigt werden soll, wenn Sie den Mauszeiger auf das Bild bewegen');
@define('SYNDICATION_PLUGIN_XML_DESC', 'Auf "none" setzen um nur einen Textlink anzuzeigen.');

/* PLUGIN_SUBSCRIBE */
@define('PLUGIN_SUBSCRIBE_NAME', 'Blog-Abonnement per e-mail');
@define('PLUGIN_SUBSCRIBE_DESC', 'Erlaubt einem Benutzer den Blog zu abonnieren. Er erhält eine email wenn ein neuer Artikel veröffentlicht wird mit einem Link zum Abbestellen');
@define('PLUGIN_SUBSCRIBE_TITLE', 'Titel');
@define('PLUGIN_SUBSCRIBE_TITLE_DESC', 'Hier den Titel eintragen der in der Sidebar erscheint:');
@define('PLUGIN_SUBSCRIBE_TITLE_DEFAULT', 'Abonnement per e-mail');
@define('PLUGIN_SUBSCRIBE_LINK', 'Linktext');
@define('PLUGIN_SUBSCRIBE_LINK_DESC', 'Welcher Text soll im Linktext erscheinen?');
@define('PLUGIN_SUBSCRIBE_LINK_DEFAULT', 'Abonnement per e-mail');
@define('PLUGIN_SUBSCRIBE_IMAGE_TO_DISPLAY', 'Abonnement-Icon');
@define('PLUGIN_SUBSCRIBE_IMAGE_DESC', 'Auf "none" setzen wenn nur ein Textlink gewünscht ist.');

/* PLUGIN_ARCHIVES */
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Versteckt den Archiv-Link, wenn es keine Einträge für einen Zeitraum gab (benötigt das Zählen der Einträge)');
@define('ARCHIVE_COUNT', 'Anzahl der Einträge im Archiv');
@define('ARCHIVE_COUNT_DESC', 'Die Anzahl der angezeigten Monate, Wochen oder Tage');
@define('ARCHIVE_FREQUENCY', 'Kalenderintervall');
@define('ARCHIVE_FREQUENCY_DESC', 'Das Kalenderintervall, welches zwischen den einzelnen Einträgen in der Liste verwendet werden soll');
@define('BROWSE_ARCHIVES', 'Die Archive durchstöbern');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Zeige "Serendipity" als Text');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Zeigt den Text "Serendipity Blog" an');
@define('POWERED_BY_SHOW_IMAGE', 'Zeige "Serendipity" als Logo');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Stellt das Serendipity-Logo dar');
@define('ADVERTISES_BLAHBLAH', 'Zeigt einen Hinweis darauf, dass Serendipity als Blog-Software verwendet wird');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'https zum Login verwenden');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Erstellt eine https-URL als Login-Link zum Blog. Der Webserver muss dies unterstützen!');
@define('SUPERUSER', 'Verwaltung des Blogs');
@define('SUPERUSER_OPEN_ADMIN', 'Administrationsbereich');
@define('SUPERUSER_OPEN_LOGIN', 'Login');
@define('ALLOWS_YOU_BLAHBLAH', 'Zeigt einen Link zur Verwaltung des Blogs in der Seitenleiste an');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Kalender');
@define('CALENDAR_BOW_DESC', 'Welcher Tag gibt den Wochenanfang an? Standard ist Montag.');
@define('QUICKJUMP_CALENDAR', 'QuickJump Kalender');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Anfang der Woche');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Plugin-Schnittstelle aktivieren');
@define('CALENDAR_EXTEVENT_DESC', 'Falls aktiviert, so können andere Plugins in die Darstellung des Kalenders eingreifen. Aktivieren Sie diese Option nur, wenn Sie ein solches Plugin installiert haben, andernfalls haben Sie nur unnötige Performance-Einschränkungen.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Nach Einträgen suchen');
@define('SEARCH_FULLENTRY', 'Gesamten Eintrag anzeigen');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Zeigt einen kleinen Klotz HTML-Code in einer der Seitenleisten an');
@define('THE_NUGGET', 'Der HTML-Klotz!');
@define('BACKEND_TITLE', 'Zusätzlicher Informationstext, der auf der Plugin-Oberfläche dargestellt wird');
@define('BACKEND_TITLE_FOR_NUGGET', 'An dieser Stelle können Sie einen eigenen Text angeben, der auf der Plugin-Konfigurationsoberfläche zusätzlich angezeigt wird. Denn falls Sie mehrere HTML-Klötze mit leerem Titel angelegt haben, ist es gegebenenfalls schwierig, diese auseinanderzuhalten.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Top Exits/Referrers als Link anzeigen?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"Nein": Exit/Referrer-URLs werden als Text angezeigt, um Googlespam zu verhindern. "Ja": Exit/Referrer-URLs werden als Hyperlinks angezeigt. "Default": Die Einstellung aus der globalen Konfiguration wird übernommen (empfohlen).');
@define('HAVE_TO_BE_LOGGED_ON', 'Sie müssen angemeldet sein, um diese Seite zu sehen');
@define('WELCOME_TO_ADMIN', 'Willkommen zur Serendipity Administrationsoberfläche!');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity benötigt eine PHP-Version >= %2$s - Sie benutzen eine ältere Version (%1$s) und müssen auf eine neuere upgraden. Die meisten Provider gestatten den Wechsel auf neuere PHP-Versionen über einen Schalter in der Admin-Oberfläche oder eine Anweisung in der .htaccess.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Großes Bild');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Zeigt ein (großes) Bild oberhalb der Seitenleiste. Hier kann eine volle (oder absolut referenzierte) URL eingetragen werden oder "none" für einen Textlink (bisheriger Standard)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(ist eine absolute URL mit http://... eingetragen, wird diese URL wird als Umleitungsziel verwendet, wenn die "Erzwingen" Option für FeedBurner eingeschaltet ist. Hinweis: Das kann auch eine URL sein, die auf andere Ziele als FeedBurner verweist. Für die neuen Google FeedBurner Feeds muss http://feeds2.feedburner.com/yourfeedname eigetragen werden)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', '(Wenn diese Option auf "Erzwingen" gesetzt ist, wird der RSS Feed an einen anderen Webservice weitergeleitet, wie z.B. (aber nicht nur) FeedBurner. Siehe die untenstehende Option "Feedburner ID" um die absolute URL einzutragen)');
@define('MEDIA_PROPERTY_COMMENT1', 'Kurzer Kommentar');
@define('MEDIA_PROPERTY_COMMENT2', 'Langer Kommentar');
@define('DELETE_SELECTED_ENTRIES', 'Markierte Einträge löschen');
@define('MEDIA_PROPERTY_ALT', 'Bildinhalt (im ALT-Attribut)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Titel');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity ist noch nicht eingerichtet. Bitte jetzt <a href="%s">installieren</a>.');
@define('COMMENT_ADDED_CLICK', 'Klicken Sie %shier, um zu den Kommentaren zurückzukehren%s und %shier, um das Fenster zu schließen%s.');
@define('COMMENT_NOT_ADDED_CLICK', 'Klicken Sie %shier, um zu den Kommentaren zurückzukehren%s und %shier, um das Fenster zu schließen%s.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Laufzeit');
@define('MEDIA_PROPERTY_DATE', 'Verknüpftes Datum');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Die URL der verschobenen Verzeichnisse wurde in %s Einträgen angepasst.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'Bei Nicht-MySQL Datenbanken ist es nicht möglich, jeden Blogeintrag durchzugehen und das alte Verzeichnis durch das neue zu ersetzen. Daher müssen Sie manuell bestehende Einträge überarbeiten und die neuen URLs eintragen. Sie können natürlich auch das Verzeichnis an seinen alten Platz zurückschieben, falls dies zu viel Aufwand bedeuten würde.');
@define('TRACKBACK_SIZE', 'URI ist größer als die erlaubten %s Bytes.');
@define('CLICK_FILE_TO_INSERT', 'Auf eine Datei klicken, um diese einzufügen:');
@define('SELECT_FILE', 'Bitte wählen Sie eine Datei');
@define('MANAGE_IMAGES', 'Bilder verwalten');
@define('WORD_NEW', 'Neu');
@define('WORD_OR', 'Oder');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Frontend: Externe Services');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Frontend: Features');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Frontend: Vollständige Modifikationen');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Frontend: Ansichten');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Frontend: Artikelbezogen');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Backend: Editor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Backend: Benutzerverwaltung');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Backend: Meta-Informationen');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Backend: Themes');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Backend: Features');
@define('PLUGIN_GROUP_IMAGES', 'Bilder / Medien');
@define('PLUGIN_GROUP_ANTISPAM', 'Antispam');
@define('PLUGIN_GROUP_MARKUP', 'Textformatierungen');
@define('PLUGIN_GROUP_STATISTICS', 'Statistik');
@define('IMPORT_WELCOME', 'Willkommen im Import-Bereich von Serendipity!');
@define('USER_SELF_INFO', 'Angemeldet als %s (%s)');
@define('IMPORT_WHAT_CAN', 'Hier können Daten von anderen Weblog-Installationen importiert werden.');
@define('IMPORT_SELECT', 'Bitte die Art der Software auswählen, von der die Daten importiert werden sollen');
@define('MANAGE_STYLES', 'Themes verwalten');
@define('SELECT_A_PLUGIN_TO_ADD', 'Plugin zur Installation wählen');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Es folgt eine Liste installierter Plugins');
@define('PENDING_CONFIRMATION', 'Wartet auf Bestätigung');
@define('PENDING_MODERATION', 'Wartet auf Moderation');
@define('ABORT_NOW', 'Abbrechen');
@define('DELETE_SELECTED_COMMENTS', 'Markierte Kommentare löschen');
@define('MODERATE_SELECTED_COMMENTS', 'Markierte Kommentare freischalten');
@define('FIND_MEDIA', 'Mediendaten durchsuchen');
@define('TEMPLATE_OPTIONS', 'Theme-Optionen');
@define('BULKMOVE_INFO', 'Gleichzeitiges Verschieben mehrerer Dateien');
@define('BULKMOVE_INFO_DESC', 'Sie können mehrere Dateien auswählen, um sie gleichzeitig an einen neuen Ort zu verschieben. <strong>Hinweis:</strong> Diese Aktion kann nicht rückgängig gemacht werden, genau wie das gleichzeitige Löschen mehrerer Dateien. Alle ausgewählten Dateien werden physikalisch verschoben; Blogeinträge, welche diese Dateien referenzieren, werden umgeschrieben, um auf den neuen Ort zu verweisen.');
@define('UPDATE_ALL', 'Alles updaten');
@define('START_UPDATE', 'Starte Update ...');
@define('ERROR_FILE_NOT_EXISTS', ' Alte Datei existiert nicht!');
@define('ERROR_SOMETHING', 'Fehler: Irgend etwas stimmt nicht.');
@define('DIRECT_LINK', 'Direkter Link zu diesem Eintrag');
@define('SELECT_TEMPLATE', 'Wählen Sie das Theme für das Blog');
@define('DATABASE_ERROR', 'Serendipity Fehler: Kann keine Verbindung zur Datenbank herstellen - wird beendet.');
@define('LIMIT_TO_NUMBER', 'Wie viele Elemente sollen angezeigt werden?');
@define('DIRECTORIES_AVAILABLE', 'In der Liste der verfügbaren Unterverzeichnisse kann durch einen Klick auf einen Verzeichnisnamen ein neuer Ordner unterhalb des gewählten erstellt werden.');
@define('CATEGORY_INDEX', 'Es folgt eine Liste von verfügbaren Kategorien');
@define('PAGE_BROWSE_PLUGINS', 'Seite %s von %s, insgesamt %s Plugins.');
@define('CHARSET_NATIVE', 'Nationaler Zeichensatz');
@define('XMLRPC_NO_LONGER_BUNDLED', 'Das XML-RPC Interface zu Serendipity wird nicht länger standardmäßig aktiviert, da häufige Sicherheitsprobleme mit der dafür verwendeten Bibliothek auftraten und da es nur von wenigen Personen benutzt wurde. Daher müssen Sie das XML-RPC Plugin installieren, um die XML-RPC API weiterhin zu nutzen. Die URL in Ihren Anwendungen wird sich dadurch nicht ändern. Sobald das genannte Plugin installiert ist, kann die XML-RPC API wieder vollständig genutzt werden.');
@define('AUTHORS_ALLOW_SELECT', 'Ermöglicht Besuchern, Einträge mehrerer Autoren gleichzeitig darzustellen');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Falls diese Option aktiviert ist, wird eine Auswahlbox neben jedem Autor angezeigt, damit Besucher mehrere Autoren gleichzeitig auswählen können.');
@define('PREFERENCE_USE_JS', 'Fortgeschrittene JavaScripts einsetzen?');
@define('PREFERENCE_USE_JS_DESC', 'Falls aktiviert, werden erweiterte JavaScript Funktionalitäten in einigen Bereichen freigeschaltet. Z.B. in der Plugin-Konfiguration kann Drag+Drop benutzt werden, um leichter Änderungen vorzunehmen.');
@define('PREFERENCE_USE_JS_WARNING', '(Diese Seite setzt fortgeschrittene JavaScripts ein. Falls dabei Probleme in der Benutzbarkeit auftreten, deaktivieren Sie bitte die Option zum Einsatz dieser JavaScripts im Menüpunkt "Eigene Einstellungen", oder deaktivieren Sie JavaScript in Ihrem Browser.)');
@define('PLUGIN_GROUP_ALL', 'Alle Kategorien');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Wartet auf Bestätigung');
@define('NO_COMMENT_SUBSCRIPTION', 'Nicht abonniert');
@define('NOTIFICATION_CONFIRM_SUBMAIL_FAIL', 'Sorry, the confirmation of your subscription to new comments has failed.');
