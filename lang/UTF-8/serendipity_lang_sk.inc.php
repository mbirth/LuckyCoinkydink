<?php

/**
 *  @version 1.0
 *  Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
 *  All rights reserved.  See LICENSE file for licensing details
 *  Translation (c) 2010 Martin Matuška <martin@matuska.org>
 */
$i18n_filename_from = array (
'á','č','ď','é','ě','í','ĺ','ľ','ň','ó','ô','ŕ','ř','ś','š','ť','ú','ů','ý','ź','ž',
'Á','Č','Ď','É','Ě','Í','Ĺ','Ľ','Ň','Ó','Ô','Ŕ','Ř','Ś','Š','Ť','Ú','Ů','Ý','Ź','Ž',
' ',',','.','!',
);
$i18n_filename_to = array (
'a','c','d','e','e','i','l','l','n','o','o','r','r','s','s','t','u','u','y','z','z',
'A','C','D','E','E','I','L','L','N','O','O','R','R','S','S','T','U','U','Y','Z','Z',
'-', '', '', '',
);
@define('SQL_CHARSET', 'utf8');
@define('DATE_LOCALES', 'sk_SK.UTF-8, sk_SK.UTF8, slovak, sk');
@define('DATE_FORMAT_ENTRY', '%A, %e. %B %Y');
@define('DATE_FORMAT_SHORT', '%d.%m.%Y %H:%M');
@define('WYSIWYG_LANG', 'sk-iso');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', ',');
@define('NUMBER_FORMAT_THOUSANDS', ' ');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Typ');
@define('PREVIEW', 'Náhľad');
@define('DATE', 'Dátum');
@define('TIME', 'Time');
@define('APPEARANCE', 'Vzhľad');
@define('LOGIN', 'Prihlásenie');
@define('LOGOUT', 'Odhlásenie');
@define('LOGGEDOUT', 'Odhlásený.');
@define('CREATE', 'Vytvoriť');
@define('BACK', 'Naspäť');
@define('FORWARD', 'Ďalej');
@define('ANONYMOUS', 'Anonym');
@define('RECENT', 'Nové...');
@define('OLDER', 'Staršie...');
@define('DONE', 'Hotovo');
@define('TITLE', 'Titulok');
@define('DESCRIPTION', 'Popis');
@define('PLACEMENT', 'Umiestnenie');
@define('DELETE', 'Zmazať');
@define('SAVE', 'Uložiť');
@define('UP', 'HORE');
@define('DOWN', 'DOLE');
@define('PREVIOUS', 'Predchádzajúce');
@define('NEXT', 'Ďalšie');
@define('ENTRIES', 'články');
@define('CATEGORIES', 'Kategórie');
@define('NAME', 'Meno');
@define('EMAIL', 'E-mail');
@define('HOMEPAGE', 'Domovská webstránka');
@define('COMMENT', 'Komentár');
@define('VIEW', 'Ukázať');
@define('HIDE', 'Skryť');
@define('WEEK', 'Týžden');
@define('WEEKS', 'Týždne(-ov)');
@define('MONTHS', 'Mesiace(-ov)');
@define('DAYS', 'Dni');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Úspešne dokončené.');
@define('COMMENTS', 'Komentáre');
@define('ADD_COMMENT', 'Pridať komentár');
@define('NO_COMMENTS', 'Žiadne komentáre');
@define('POSTED_BY', 'Napísal(a)');
@define('ON', 'v');
@define('NO_CATEGORY', 'Žiadna kategória');
@define('CATEGORY', 'Kategória');
@define('EDIT', 'Upraviť');
@define('GO', 'Vykonať!');
@define('YES', 'Áno');
@define('NO', 'Nie');
@define('NOT_REALLY', 'Nie, nechcem...');
@define('DUMP_IT', 'Zmazať!');
@define('IN', 'vo');
@define('AT', 'o');
@define('LEFT', 'vľavo');
@define('RIGHT', 'vpravo');
@define('CENTER', 'stred');
@define('ARCHIVES', 'Archívy');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Rýchle hľadanie');
@define('TRACKBACKS', 'Odozvy');
@define('TRACKBACK', 'Odozva');
@define('NO_TRACKBACKS', 'Žiadne odozvy');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Výpis');
@define('TRACKED', 'Sledované');
@define('USER', 'Používateľ');
@define('USERNAME', 'Meno');
@define('PASSWORD', 'Heslo');
@define('HIDDEN', 'skryté');
@define('IMAGE', 'Obrázok');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Autor');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'verzia');
@define('INSTALL', 'Inštalovať');
@define('REPLY', 'Odpoveď');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Chyba');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Vynútiť');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Administrácia');
@define('ADMIN_FRONTPAGE', 'Hlavná stránka');
@define('QUOTE', 'Citát');
@define('NONE', 'nič');
@define('GROUP', 'Skupina');
@define('AUTHORS', 'Autori');
@define('UPGRADE', 'Aktualizácia');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Všetci autori');
@define('PREVIOUS_PAGE', 'predošlá stránka');
@define('NEXT_PAGE', 'ďalšia stránka');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'Všetky kategórie');
@define('LAST_UPDATED', 'Naposledy zmenené');
@define('IP_ADDRESS', 'IP adresa');
@define('CHARSET', 'Znaková sada');
@define('REFERER', 'Odkazujúca stránka');
@define('APPROVE', 'Schváliť');
@define('NOT_FOUND', 'Nenájdené');
@define('WRITABLE', 'Zapisovateľné');
@define('NOT_WRITABLE', 'Nezapisovateľé');
@define('WELCOME_BACK', 'Vitajte naspäť,');
@define('USE_DEFAULT', 'Prednastavené');
@define('SORT_BY', 'Zoradiť podľa');
@define('SORT_ORDER', 'Zoraďiť podľa');
@define('SORT_ORDER_ASC', 'Vzostupne');
@define('SORT_ORDER_DESC', 'Zostupne');
@define('FILTERS', 'Filtre');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Vybrať všetko');
@define('TOGGLE_OPTION', 'Vybrať voľbu');
@define('IN_REPLY_TO', 'Odpoveď na');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Adresár');
@define('BACK_TO_BLOG', 'Naspäť na weblog');
@define('HTML_NUGGET', 'Vložený HTML kód');
@define('TITLE_FOR_NUGGET', 'Názov HTML kódu');
@define('COMMENT_ADDED', 'Váš komentár bol úspešne pridaný.');
@define('ENTRIES_FOR', 'Články pre %s');
@define('NO_ENTRIES_TO_PRINT', 'Žiadne články na zobrazenie');
@define('COMMENT_DELETE_CONFIRM', 'Naozaj chcete zmazať komentár #%d, vložený %s?');
@define('DELETE_SURE', 'Naozaj chcete trvale zmazať #%s?');
@define('MEDIA_FULLSIZE', 'Plný rozmer');
@define('SIDEBAR_PLUGIN', 'doplnok bočnej lišty');
@define('EVENT_PLUGIN', 'doplnok udalostí');
@define('PLUGIN_ITEM_DISPLAY', 'Kde by mala býť táto položka zobrazená?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'V rozšírenej časti');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'V prehľade');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'V obidvoch častiach');
@define('DIRECTORY_WRITE_ERROR', 'Do priečinka %s sa nedá zapisovať - prosím skontrolujte oprávnenia');
@define('FILE_WRITE_ERROR', 'Nepodarilo sa zapísať do súboru %s.');
@define('INCLUDE_ERROR', 'chyba serendipity: súbor "%s" sa nepodarilo vložiť - ukončené.');
@define('DO_MARKUP', 'Formátovať text (markup)');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Formát dátumu');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Formát dátumu článku, vytvára sa pomocou PHP funkcie strftime(). (Prednastavené: "%s")');
@define('APPLY_MARKUP_TO', 'Použiť formátovanie textu na %s');
@define('XML_IMAGE_TO_DISPLAY', 'Symbol XML');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Odkazy na XML kanály budú zobrazené pod týmto symbolom. Nechajte prázdné pre pôvodné nastavenie, alebo zadajte \'none\' pre vypnutie.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Zmazanie súboru \'%s\'...');
@define('SETTINGS_SAVED_AT', 'Nové nastavenia boli uložené v %s');
@define('INVERT_SELECTIONS', 'Obrátiť výber');

@define('PERSONAL_SETTINGS', 'Osobné nastavenia');
@define('DO_MARKUP_DESCRIPTION', 'Aplikovať transformácie na text (smajlíky, skratky *, /, _, ...). Vypnutie tohto nastavenia zabezpečí uloženie HTML kódov v texte.');
@define('BASE_DIRECTORY', 'Koreňový priečinok');
@define('PERM_READ', 'Právo na čítanie');
@define('PERM_WRITE', 'Právo na zápis');
@define('PERM_DENIED', 'Prístup odmietnutý.');
@define('CURRENT_AUTHOR', 'Aktuálny autor');
@define('PLUGIN_ACTIVE', 'Aktívny');
@define('PLUGIN_INACTIVE', 'Neaktívny');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Uložte tento odkaz do obľúbených záložiek a použite záložku na akejkoľvek stránke, o ktorej chcete písať. Záložka Vás rýchle prepne do Vášho Serendipity weblogu.');
@define('SET_TO_MODERATED', 'Schváliť');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Inštalácia Serendipity');
@define('WELCOME_TO_INSTALLATION', 'Vitajte v inštalácii Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', 'Najprv skontrolujeme Vaše základné nastavenie a skúsime zistiť prípadné problémy');
@define('ERRORS_ARE_DISPLAYED_IN', 'Chyby budú zobrazené %s, odporúčania %s a úspešnosť %s');
@define('RED', 'červeou');
@define('YELLOW', 'žltou');
@define('GREEN', 'zelenou');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s - predinštalačná správa');
@define('INTEGRITY', 'Kontrola integrity inštalácie');
@define('PHP_INSTALLATION', 'Inštalácia PHP');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Operačný systém');
@define('WEBSERVER_SAPI', 'Webserver SAPI');
@define('PHPINI_CONFIGURATION', 'konfigurácia php.ini');
@define('RECOMMENDED', 'Odporúčané');
@define('ACTUAL', 'Aktuálne');
@define('PERMISSIONS', 'Oprávnenia');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Oprávnenia môžu byť nastavené použitím shellového príkazu: `<em>%s</em>` v priečinku, alebo nastavením pomocou FTP programu');
@define('PROBLEM_DIAGNOSTIC', 'Boli zistené problémy a v inštalácii, pokračovať môžete až po ich odstránení');
@define('SELECT_INSTALLATION_TYPE', 'Vyberte typ inštalácie');
@define('RECHECK_INSTALLATION', 'Skontrolovať inštaláciu');
@define('SIMPLE_INSTALLATION', 'Jednoduchá inštalácia');
@define('EXPERT_INSTALLATION', 'Pokročilá inštalácia');
@define('COMPLETE_INSTALLATION', 'Kompletná inštalácia');
@define('WONT_INSTALL_DB_AGAIN', 'nebude sa znova vytvárať databáza');
@define('THEY_DO', 'pozitívne');
@define('THEY_DONT', 'negatívne');
@define('CHECK_DATABASE_EXISTS', 'Kontrola, či databáza a tabulky už existujú');
@define('CREATE_DATABASE', 'Vytvorenie základnej databázy...');
@define('ATTEMPT_WRITE_FILE', 'Pokus o zápis do súboru %s...');
@define('CREATING_PRIMARY_AUTHOR', 'Vytvorenie hlavného autora \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Nastavenie prednastavenej šablóny (template)');
@define('INSTALLING_DEFAULT_PLUGINS', 'Inštalácia prednastavených doplnkov');
@define('SERENDIPITY_INSTALLED', 'Serendipity bolo úspešne nainštalované');
@define('VISIT_BLOG_HERE', 'Tu navštívite svoj nový weblog');
@define('THANK_YOU_FOR_CHOOSING', 'Ďakujeme, že ste si vybrali Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'Pri inštalácii bola zistená chyba');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Vytvorené pomocou');
@define('ADMIN_FOOTER_POWERED_BY', 'Vytvorené pomocou Serendipity %s a PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Autor');
@define('USERLEVEL_CHIEF_DESC', 'Redaktor');
@define('USERLEVEL_ADMIN_DESC', 'Administrátor');
@define('WWW_USER', 'Zmeňte "www" na používateľa, pod ktorým beží webserver (napr. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Priečinok %s neexistuje a nepodarilo sa ho vytvoriť. Prosím vytvorte priečinok ručne.');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; spustiť <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Nepodarilo sa spustiť binárny súbor %s.');
@define('FILE_CREATE_YOURSELF', 'Prosím vytvorte súbor ručne alebo skontrolujte oprávnenia.');
@define('COPY_CODE_BELOW', '<br />* Skopírujte kód uvedený nížšie a umiestnite ho do súboru "%s" vo vašom priečinku "%s":<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Po dokončení stlačte tlačidlo obnovenia stránky vo vašom prehliadači.');
@define('ERROR_TEMPLATE_FILE', 'Súbor so šablónou sa nepodarilo otvoriť, prosím aktualizujte verziu Serendipity!');
@define('HTACCESS_ERROR', 'Na otestovanie konfigurácie Vášho webservera potrebuje Serendipity práva na vytvorenie súbora ".htaccess". Tento súbor sa nepodarilo vytvoriť. Prosím upravte práva súboru následovne: <br />&nbsp;&nbsp;%s<br />a opätovne nahrajte túto stránku..');
@define('EMPTY_SETTING', 'Nezadali ste platnú hodnotu pre "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Vyžadované iba ak chcete v budúcnosti využívať plugin Spartacus pre sťahovanie nových doplnkov.)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity zistil, že máte nainštalovanú verziu %s a zrejme sa pokúšate aktualizovať na verziu %s. Ak chcete pokračovať v aktualizácii, <a href="%s">kliknite tu</a>.');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Víta Vás správca aktualizácie Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Pomôžem Vám s aktualizáciou Vašej inštalácie Serendipity %s.');
@define('SERENDIPITY_UPGRADER_WHY', 'Táto správa sa Vám zobrazila preto, lebo ste nainštalovali Serendipity %s, ale Vaša databáza ešte nebola aktualizovaná na túto verziu.');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Aktualizácia databázy (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Boli nájdené tieto .sql súbory, ktoré musia byť spustené pred pokračovaním v práci so Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Špecifické úlohy pre túto verziu');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Žiadne špecifické úlohy');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Môžem vykonať horeuvedené úlohy?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Nie, spustím ich ručne');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Áno, vykonať');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Aktualizácia nie je potrebná');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Serendipity bol aktualizovaný');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Vynechali ste aktualizačný proces Serendipity, prosím preverte, či je Vaša databáza správne nainštalovaná a plánované úlohy boli spustené');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'Vaša inštalácia Serendipity bola aktualizovaná na verziu %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Kliknutím %ssem%s sa vrátite do Vášho weblogu');
@define('ADMIN_ENTRIES', 'Články');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Nepodarilo sa spojiť s databázou MySQL: %s.');
@define('COULDNT_SELECT_DB', 'Nepodarilo sa vybrať databázu: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Nepodarilo sa načítať údaje používateľa: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Nepodarilo sa načítať údaje kategórie: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Nepodarilo sa načítať údaje článku: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Nepodarilo sa načítať údaje komentára: %s.');
@define('MYSQL_REQUIRED', 'Na tento úkon musí byť nainštalované rozširenie MySQL.');
@define('CREATE_AUTHOR', 'Vytvoriť autora \'%s\'.');
@define('CREATE_CATEGORY', 'Vytvoriť kategóriu \'%s\'.');
@define('MT_DATA_FILE', 'Súbory Movable Type');
@define('INSTALL_DBPORT', 'Port databázy');
@define('INSTALL_DBPORT_DESC', 'Port použitý pre spojenie s Váším databázovým serverom');
@define('IMPORT_PLEASE_ENTER', 'Prosím vložte dáta uvedené nižšie');
@define('IMPORT_NOW', 'Naimportovať');
@define('IMPORT_STARTING', 'Spúšťam import...');
@define('IMPORT_FAILED', 'Import neúspešný');
@define('IMPORT_DONE', 'Import úspešne dokončený');
@define('IMPORT_WEBLOG_APP', 'Weblogová aplikácia');
@define('IMPORT_NOTES', 'Poznámka:');
@define('IMPORT_STATUS', 'Stav po importe');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import (rozšírený WordPress RSS import), vyžaduje PHP5 a môže spotrebovať priveľa pamäti');
@define('RSS_IMPORT_BODYONLY', 'Uložiť celý importovaný text do "hlavnej" časti, nerozdeľovať do "rozšírenej" časti.');
@define('IMPORT_GENERIC_RSS', 'Základný RSS import');
@define('ACTIVATE_AUTODISCOVERY', 'Odoslať odozvy na odkazy obsiahnuté v článku');
@define('RSS_IMPORT_CATEGORY', 'Použíť túto kategóriu pre nezaradené články');
@define('IMPORT_WP_PAGES', 'Zobrazovať ako bežné članky blogu i prílohy a statické stránky?');
@define('DOCUMENT_NOT_FOUND', 'Dokument %s nebol nájdený.');
@define('CONVERT_HTMLENTITIES', 'Skúsiť automatickú konverziu HTML entít?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Administrátorská oblasť');
@define('WRONG_USERNAME_OR_PASSWORD', 'Nespsrávne meno alebo heslo.');
@define('PLEASE_ENTER_CREDENTIALS', 'Zadajte prosím prihlasovacie údaje.');
@define('AUTOMATIC_LOGIN', 'Zapamätať login');
@define('MAIN_MENU', 'Main menu');
@define('MENU_PERSONAL', 'Personal menu');
@define('MENU_DASHBOARD', 'Dashboard');
@define('MENU_ACTIVITY', 'Activity');
@define('MENU_SETTINGS', 'Settings');
@define('MENU_TEMPLATES', 'Templates');
@define('MENU_PLUGINS', 'Plugins');
@define('MENU_USERS', 'Users');
@define('MENU_GROUPS', 'Groups');
@define('MENU_MAINTENANCE', 'Maintenance');
@define('MEDIA', 'Médiá (obrázky)');
@define('MEDIA_LIBRARY', 'Knižnica médií');
@define('ADD_MEDIA', 'Pridať');
@define('MANAGE_DIRECTORIES', 'Spravovať priečinky');
@define('CONFIGURATION', 'Konfigurácia');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', 'Ďalšie odkazy');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Domovská stránka Serendipity');
@define('FURTHER_LINKS_S9Y_DOCS', 'Dokumentácia Serendipity');
@define('FURTHER_LINKS_S9Y_BLOG', 'Oficiálny blog');
@define('FURTHER_LINKS_S9Y_FORUMS', 'Fórum');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'Tento článok ešte nie je zverejnený.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Lokálna dokumentácia');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'História verzií');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Doplnky pre bočné lišty');
@define('EVENT_PLUGINS', 'Doplnky udalostí');
@define('CONFIGURE_PLUGINS', 'Spravovať doplnky');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Nesplnené požiadavky: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Aktualizácia na verziu %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Tu kliknite pre nainštalovanie %s');
@define('ALREADY_INSTALLED', 'Nainštalované');
@define('PLUGIN_AVAILABLE_COUNT', 'Spolu %d pluginov');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Editovat články');
@define('EDIT_ENTRY', 'Editovať článok');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Koncept');
@define('PUBLISH', 'Publikovať');
@define('CONTENT', 'Obsah');
@define('ENTRIES_PER_PAGE', 'článkov na stránku');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Prilepené články');
@define('PAGE_BROWSE_ENTRIES', 'Stránka %s z %s, spolu %s článkov');
@define('FIND_ENTRIES', 'Hľadať záznamy');
@define('RIP_ENTRY', 'Zmazaný článok #%s');
@define('NEW_ENTRY', 'Nový článok');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Text článku');
@define('EXTENDED_BODY', 'Rozšírená textová časť');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Koncept tohto článku bol uložený');
@define('IFRAME_PREVIEW', 'Serendipity teraz vytvára náhľad Vášho článku...');
@define('IFRAME_WARNING', 'Váš prehliadač nepodporuje iframe. Otvorte súbor serendipity_config.inc.php a nastavte premennú $serendipity[\'use_iframe\'] na FALSE.');
@define('DATE_INVALID', 'Upozornenie: Dátum pre článok je neplatný. Musí mať formát RRRR-MM-DD HH:MM.');
@define('ADVANCED_OPTIONS', 'Rozšírené nastavenia');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Tento odkaz nie je určený na klikanie. Obsahuje spätné URI pre tento článok. Môžete použiť toto URI na odoslanie pingov a sledovanie odoziev z Vášho vlastného weblogu. Odkaz skopírujete kliknutím pravého tlačítka myši a vybraním "Kopírovať odkaz" v Internet Exploreri alebo "Kopírovať adresu odkazu" v Mozille alebo Firefoxe.');
@define('RESET_DATE', 'Resetovať dátum');
@define('RESET_DATE_DESC', 'Kliknite sem na vrátenie dátumu na dnešný');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Správa používateľov');
@define('CREATE_NEW_USER', 'Vytvoriť nového používateľa');
@define('CREATE_NOT_AUTHORIZED', 'Nemôžete meniť používateľov s rovnakou úrovňou prístupu, ako je Vaša úroveň');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Nemôžete vytvárať používateľov s vyššou úrovňou prístupu, ako je Vaša úroveň');
@define('CREATED_USER', 'Nový používateľ %s bol vytvorený');
@define('MODIFIED_USER', 'Nastavenia používateľa %s boli zmenené');
@define('USER_LEVEL', 'Úroveň prístupu');
@define('WARNING_NO_GROUPS_SELECTED', 'Varovanie: Nevybrali ste členstvo v žiadnej skupine. To by Vás odhlásilo zo správy užívateľských skupín a Vaše nastavenie členstva v skupinách by zostalo nezmenené.');
@define('DELETE_USER', 'Chcete zmazať používateľa #%d %s. Úlohu naozaj vykonať? Táto zmena znemožní prehliadanie ním vytvorených článkov na hlavnej stránke.');
@define('DELETED_USER', 'Používateľ #%d %s bol zmazaný.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Správa skupín');
@define('DELETED_GROUP', 'Skupina #%d %s zmazaná.');
@define('CREATED_GROUP', 'Nová skupina %s bola vytvorená');
@define('MODIFIED_GROUP', 'Nastavenia skupiny %s boli zmenené');
@define('CREATE_NEW_GROUP', 'Vytvoriť novú skupinu');
@define('DELETE_GROUP', 'Chystáte sa zmazať skupinu #%d %s. Naozaj zmazať?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Hľadať komentáre');
@define('COMMENTS_FILTER_SHOW', 'Zobraziť');
@define('COMMENTS_FILTER_ALL', 'Všetko');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Iba schválené');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Čakajúce na súhlas');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Čaká sa na potvrdenie užívateľom');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Naozaj chcete zmazazať vybrané komentáre??');
@define('PAGE_BROWSE_COMMENTS', 'Stránka %s zo %s, spolu %s komentárov');
@define('COMMENT_IS_DELETED', '(Komentár odstránený)');
@define('COMMENT_MODERATED', 'Komentár č.%s bol úspešne schválený');
@define('ACTIVE_COMMENT_SUBSCRIPTION', 'Subscribed');

/* ADMIN - SUBSCRIPTIONS.TPL */
@define('EDIT_SUBSCRIPTIONS', 'Edit Subscriptions');
@define('SUBSCRIPTION_ENTRY', 'Subscriptions for Entry');
@define('SUBSCRIPTION_TYPE', 'Subscription type');
@define('SUBSCRIPTION_TIME', 'Subscribed at');
@define('SUBSCRIPTION_STATE', 'Subscription state');
@define('SUBSCRIPTION_BLOG', 'Blog subscription');
@define('SUBSCRIPTION_AUTHOR', 'Author subscription');
@define('SUBSCRIPTION_CATEGORY', 'Category subscription');
@define('NO_SUBSCRIPTIONS_TO_PRINT', 'No subscriptions to print');
@define('PAGE_BROWSE_SUBSCRIPTIONS', 'Page %s of %s, totally %s subscriptions');
@define('OPTIN_PENDING', 'optin pending');
@define('RIP_SUB', 'Subscription #%s deleted.');
@define('FIND_SUBSCRIPTIONS', 'Find subscriptions');

/* ADMIN - CATEGORY.TPL */
@define('CATEGORY_SAVED', 'Kategória uložená');
@define('CATEGORY_ALREADY_EXIST', 'Kategória s názvom "%s" už existuje');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Kategória #%s bola zmazaná. Staršie články boli presunuté do #%s');
@define('CATEGORY_DELETED', 'Kategória #%s bbola zmazaná.');
@define('INVALID_CATEGORY', 'Na vymazanie nebola vybraná žiadna kategória');
@define('EDIT_THIS_CAT', 'Editácia "%s"');
@define('CATEGORY_REMAINING', 'Vymazať túto kategóriu a presunúť články do kategórie');
@define('PARENT_CATEGORY', 'Nadradená kategória');
@define('CATEGORY_HIDE_SUB', 'Skryť články z podkategórií?');
@define('CATEGORY_HIDE_SUB_DESC', 'Ak je zobrazená kategória, bežne sa zobrazujú aj všetky články z jej podkategórií. Ak je táto voľba zapnutá, budú sa zobrazovať iba príspevky z vybranej kategórie.');
@define('CREATE_NEW_CAT', 'Vytvoriť novú kategóriu');
@define('ALREADY_SUBCATEGORY', '%s už je podkategóriou %s.');
@define('NO_CATEGORIES', 'Žiadne kategórie');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Nie je možné porovnať kontrolné súčty! (v základnom priečinku chýba súbor checksums.ini.php)');
@define('CHECKSUMS_PASS', 'Všetky súbory skontrolované.');
@define('CHECKSUM_FAILED', 'Kontrola zlyhala: %s je poškodený nebo zmenený');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Import dát');
@define('EXPORT_ENTRIES', 'Export článkov');
@define('EXPORT_FEED', 'Exportovať plný RSS kanál');
@define('CREATE_THUMBS', 'Vytvoriť náhľady');
@define('WARNING_THIS_BLAHBLAH', "POZOR:\\nTento úkon môže trvať dlhšie, ak máte veľa obrázkov bez náhľadov.");
@define('SYNC_OPTION_LEGEND', 'Nastavenia synchronizácie náhľadov obrázov');
@define('SYNC_OPTION_KEEPTHUMBS', 'Zachovať všetky existujúce náhľady');
@define('SYNC_OPTION_SIZECHECKTHUMBS', 'Zachovať existujúce náhľady iba ak majú správnu veľkosť');
@define('SYNC_OPTION_DELETETHUMBS', 'Znovu vytvoriť všetky náhľady');
@define('MAINTENANCE_MODE', 'Maintenance Mode');
@define('MAINTENANCE_MODE_DESC', 'Activate maintenance mode to prevent access from users that are not logged in.');
@define('MAINTENANCE_MODE_WARNING', "Do not log out, as you won't be able to log in again until maintenance mode expires!");
@define('MAINTENANCE_MODE_DURATION', 'Duration (in hours):');
@define('MAINTENANCE_MODE_TIME', 'Will be active until');
@define('MAINTENANCE_MODE_ACTIVATE', 'Activate');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Deactivate');

/* ADMIN - TEMPLATES.TPL */
@define('TEMPLATE_SET', '\'%s\' bolo nastavené ako prednastavená šablóna (template)');
@define('WARNING_TEMPLATE_DEPRECATED', 'Varovánie: Váša šablóna používa nepovolenú metódu, ak je to možné, vykonajte aktualizáciu');
@define('STYLE_OPTIONS_NONE', 'Táto téma/štýl nemá špecifické voľby. Ak chcete vedieť, ako môžete pre Vaše šablóny nastaviť špecifické voľby, prečítajte si Technical Documentation (technickú dokumentáciu) na www.s9y.org "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Nastavenia pre tému/štýl');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Upravené prostredie pre administráciu je dostupné');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Nastaviť ako šablónu');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Skontrolovať a uložiť');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Odstrániť označené doplnky');
@define('SAVE_CHANGES_TO_LAYOUT', 'Uložiť zmeny vzhľadu');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Synchronizácia databázy s priečinkom obrázkov');
@define('SYNC_DONE', 'Hotové (synchronizovaných %s obrázkov).');
@define('RESIZE_BLAHBLAH', '<b>Zmeniť rozmery %s</b>');
@define('ORIGINAL_SIZE', 'Pôvodné rozmery: <i>%sx%s</i> pixelov');
@define('RESIZING', 'Zmena rozmerov');
@define('RESIZE_DONE', 'Hotové (upravené rozmery %s obrázkov).');
@define('KEEP_PROPORTIONS', 'Zachovať pomer strán');
@define('REALLY_SCALE_IMAGE', 'Naozaj chcete zmeniť rozmery? Návrat nie je možný!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Tu môžete zadať nové rozmery obrázku. Ak chcete zachovať pomer strán, zadajte iba jednu stranu a stlačte klávesu TAB, rozmer druhej strany bude vypočítaný automaticky:');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Nový rozmer: ');
@define('SCALING_IMAGE', 'Zmena rozmerov %s na %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Priečinky a súbory boli úspešne presunuté do %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Priečinky a súbory sa nepodarilo presunúť do %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Priečinok <strong>%s</strong> bol vytvorený.');
@define('PARENT_DIRECTORY', 'Nadradený priečinok');
@define('CONFIRM_DELETE_DIRECTORY', 'Naozaj chcete odstrániť všetok obsah priečinka <strong>%s</strong>?');
@define('ERROR_NO_DIRECTORY', 'Chyba: priečinok <strong>%s</strong> neexistuje.');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Priečinok sa nepodarilo zmazať, lebo obsahuje súbory. Skúste vybrať "zmazať všetky súbory", ak chcete zmazať priečinok aj s jeho obsahom. Existujúce súbory:');
@define('DIRECTORY_DELETE_FAILED', 'Nepodarilo sa vymazať priečinok \'%s\'. Prosím skontrolujte oprávnenia alebo vyššie uvedené upozornenia.');
@define('DIRECTORY_DELETE_SUCCESS', 'Priečinok \'%s\' bol úspešne zmazaný.');
@define('CHECKING_DIRECTORY', 'Kontrola súborov v priečinku \'%s\'');
@define('DELETE_DIRECTORY', 'Zmazať priečinok');
@define('DELETE_DIRECTORY_DESC', 'Chcete zmazať obsah priečinka obsahujúceho mediálne súbory, ktoré môžu byť použité vo Vašich existujúcich článkoch.');
@define('FORCE_DELETE', 'Zmazať VŠETKY súbory v priečinku vrátane súborov, ktoré neboli vytvorené pomocou Serendipity');
@define('CREATE_DIRECTORY', 'Vytvoriť priečinok');
@define('CREATE_NEW_DIRECTORY', 'Vytvoriť nový priečinok');
@define('CREATE_DIRECTORY_DESC', 'Tu môžete vytvoriť priečinok pre ukladanie mediálných súborov. Vyberte názov priečinka název a prípadný nadradený priečinok.');
@define('ABOUT_TO_DELETE_FILE', 'Chcete zmazať <b>%s</b><br />Ak používate tento súbor v článkoch, spôsobí to neprítomnosť odkazov alebo obrázkov.<br />Napriek tomu pokračovať?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Chyba: Súbor už na serveri existuje!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Nepodarilo sa nájsť súbor s názvom <b>%s</b>, možno už bol vymazaný?');
@define('ERROR_FILE_FORBIDDEN', 'Nemáte oprávnenie nahrávať súbory s aktívnym obsahom');
@define('REMOTE_FILE_NOT_FOUND', 'Súbor nebol na vzdialenom serveri nájdený, je URL: <b>%s</b> naozaj správné?');
@define('FILE_FETCHED', '%s uložené ako %s');
@define('FILE_UPLOADED', 'Súbor %s bol úspešne nahraný ako %s.');
@define('DELETE_FILE_FAIL', 'Súbor <b>%s</b> sa nepodarilo zmazať');
@define('DELETE_FILE', 'Vymazať súbor s názvom <b>%s</b>');
@define('FOUND_FILE', 'Našiel sa nový/zmenený súbor: \'%s\'.');
@define('FILENAME_REASSIGNED', 'Automaticky priradené nové meno súboru: %s');
@define('ERROR_FILE_EXISTS', 'Chyba: Nový názov súboru už je použitý, zvoľte iný názov!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'prepojené');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Prosím zadajte nový názov pre: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Pridať obrázok...');
@define('THUMB_CREATED_DONE', 'Náhľad vytvorený.<br>Hotové.');
@define('THUMBNAIL_USING_OWN', '%s je použitý ako náhľad, lebo je priveľmi malý.');
@define('THUMBNAIL_FAILED_COPY', '%s sa nepodarilo použíť ako vlastný náhľad, lebo sa nedá skopíťovať!');
@define('DELETE_THUMBNAIL', 'Zmazaný náhľad obrázku s názvom <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Neznáma chyba, súbor sa nenahral. Možným dôvodom je, že veľkosť súboru prekračuje maximálnu veľkosť povolenú serverom. Spojte sa s vaším providerom alebo upravte súbor php.ini a povolte väčšiu veľkosť.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Chyba: Nemôžete uploadovať súbory väčšie ako %s bytov!');
@define('MEDIA_UPLOAD_DIMERROR', 'Chyba: Nemôžete uploadovať súbory obrázkov väčšie ako %s x %s pixelov!');
@define('HOTLINK_DONE', 'Súbor prepojený odkazom.<br />Dokončené.');
@define('DELETE_HOTLINK_FILE', 'Zmazaný odkazovaný súbor <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Nepodarilo sa spustiť: "%s", chyba: %s, vracia premennú: %d');
@define('SKIPPING_FILE_EXTENSION', 'Súbor vynechaný: chýbajúca prípona \'%s\'.');
@define('SKIPPING_FILE_UNREADABLE', 'Súbor vynechaný: nepodarilo sa načítať \'%s\'.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Nastaviť rovnaké práva pre všetky podpriečinky');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Chcem mať v článku náhľad.');
@define('I_WANT_BIG_IMAGE', 'Chcem mať v článku veľký obrázok.');
@define('I_WANT_NO_LINK', 'Obrázok nemá byť odkazom.');
@define('I_WANT_IT_TO_LINK', 'Obrázok má odkazovať na URL:');
@define('MEDIA_ALT', 'Atribút ALT (popis alebo krátky popis)');
@define('MEDIA_TITLE', 'Atribút TITLE (zobrazuje sa pri prejdení kurzorom na obrázok)');
@define('IMAGE_SIZE', 'Rozmery obrázku');
@define('IMAGE_ALIGNMENT', 'Úprava obrázku');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Vloženie obrázka');
@define('MEDIA_TARGET', 'Cieľ tohto odkazu');
@define('MEDIA_TARGET_JS', 'Popup okno (pomocou JavaScriptu, prispôsobiteľná veľkosť)');
@define('MEDIA_ENTRY', 'Samostatný článok');
@define('MEDIA_TARGET_BLANK', 'Popup okno (pomocou target=_blank)');
@define('YOU_CHOSE', 'Vybrali ste %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Otočiť o 90 stupňov vľavo');
@define('IMAGE_ROTATE_RIGHT', 'Otočiť o 90 stupňov vpravo');
@define('MEDIA_RENAME', 'Premenovať súbor');
@define('THUMBNAIL_SHORT', 'Náhľ.');
@define('ORIGINAL_SHORT', 'Orig.');
@define('SORT_ORDER_NAME', 'Názov súboru');
@define('SORT_ORDER_EXTENSION', 'Prípona súboru');
@define('SORT_ORDER_SIZE', 'Veľkosť');
@define('SORT_ORDER_WIDTH', 'Šírka obrázku');
@define('SORT_ORDER_HEIGHT', 'Výška obrázku');
@define('SORT_ORDER_DATE', 'Dátum nahrania');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Pridať súbor do schránky médií:</b><p>Tu môžete ukladať mediálne súbory, alebo určiť, kde ich stiahnuť z WEBu! Ak nemáte odpovedajúci obrázok, <a href="https://images.google.com/" target="_blank">hľadajte obrázok na Google</a>, toto hľadanie je dosť často úspešné a zábavné :). Ale pozor, väčšina obrázkov je chránených autorskými právami, takže potrebujete na ich použitie súhlas autora.<p><b>Vyberte metódu:</b><br>');
@define('ENTER_MEDIA_URL', 'Vložte URL súboru na pridanie:');
@define('ENTER_MEDIA_UPLOAD', 'Vyberte súbor pre nahranie:');
@define('SAVE_FILE_AS', 'Uložiť súbor ako:');
@define('STORE_IN_DIRECTORY', 'Uložiť do tohto priečinka: ');
@define('IMAGE_MORE_INPUT', 'Pridať viac obrázkov');
@define('ENTER_MEDIA_URL_METHOD', 'Spôsob prepojenia:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Poznámka: Ak zvolíte odkaz na server, uistite sa, že máte potrebné práva, alebo že ide o Váš web. Odkazy Vám umožnia využívať obrázky z iných ako miestnych zdrojov.');
@define('FETCH_METHOD_IMAGE', 'Nahranie na server');
@define('FETCH_METHOD_HOTLINK', 'Odkaz na server');
@define('GO_ADD_PROPERTIES', 'Zadať vlastnosti');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Zmeniť rozmer obrázka');
@define('MEDIA_DELETE', 'Vymazať súbor');
@define('FILES_PER_PAGE', 'Súborov na stránku');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'Žiadne obrázky');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'všetky priečinky');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Konfigurácia bola zapísaná a uložená');
@define('DIAGNOSTIC_ERROR', 'Diagnostika našla chyby vo vkladaných údajoch:');
@define('FULL_COMMENT_TEXT', 'Áno, s plným znením komentára');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Nastavenia databázy');
@define('INSTALL_CAT_DB_DESC', 'Tu zadajte všetky nastavenia databázy. Serendipity vyžaduje tieto nastavenia.');
@define('INSTALL_DBTYPE', 'Typ databázy');
@define('INSTALL_DBTYPE_DESC', 'Typ databázy');
@define('INSTALL_DBHOST', 'Server');
@define('INSTALL_DBHOST_DESC', 'Název alebo IP adresa databázového serveru');
@define('INSTALL_DBUSER', 'Používateľ');
@define('INSTALL_DBUSER_DESC', 'Meno používateľa na pripojenie do databázy');
@define('INSTALL_DBPASS', 'Heslo');
@define('INSTALL_DBPASS_DESC', 'Heslo používateľa na pripojenie do databáyz');
@define('INSTALL_DBNAME', 'Názov');
@define('INSTALL_DBNAME_DESC', 'Názov databázy');
@define('INSTALL_DBPREFIX', 'Predpona');
@define('INSTALL_DBPREFIX_DESC', 'Predpona pre názvy tabuliek, napr. serendipity_');
@define('INSTALL_DBPERSISTENT', 'Použiť trvalé pripojenie');
@define('INSTALL_DBPERSISTENT_DESC', 'Zapnúť trvalé pripojenie do databázy, viac informácií nájdete <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">tu</a>. Nastavenie neodporúčame.');
@define('INSTAL_DB_UTF8', 'Zapnúť konverziu databázovej znakovej sady');
@define('INSTAL_DB_UTF8_DESC', 'Spustí dotaz MySQL "SET NAMES", aby sa zistila požadovaná znaková sada pre databázu. Zapnite alebo vypnite, ak sa Vám na blogu objevujú divné znaky.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Cesty');
@define('INSTALL_CAT_PATHS_DESC', 'Cesty k rôznym priečinkom a súborom. Priečinky prosím nezabudnúť ukončiť lomítkom!');
@define('INSTALL_FULLPATH', 'Úplná cesta');
@define('INSTALL_FULLPATH_DESC', 'Úplná absolútna cesta k Vašej inštalácii Serendipity.');
@define('INSTALL_UPLOADPATH', 'Cesta pre upload');
@define('INSTALL_UPLOADPATH_DESC', 'Všetky uploady budú nahrané sem, hodnota je relatívna k \'úplnej ceste\' - štandardne \'uploads/\'');
@define('INSTALL_RELPATH', 'Relatívna cesta');
@define('INSTALL_RELPATH_DESC', 'Cesta k Serendipity pre prehliadače, štandardne \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Relatívna cesta k šablónam');
@define('INSTALL_RELTEMPLPATH_DESC', 'Cesta k priečinku, ktorý obsahuje šablóny (templates) - relatívne k \'relatívnej ceste\'');
@define('INSTALL_RELUPLOADPATH', 'Relatívna cesta k uploadom');
@define('INSTALL_RELUPLOADPATH_DESC', 'Cesta k uploadom pre prehliadače - relatívne k \'relatívnej ceste\'');
@define('INSTALL_URL', 'URL weblogu');
@define('INSTALL_URL_DESC', 'Základná URL Vašej inštalácie Serendipity');
@define('INSTALL_AUTODETECT_URL', 'Autodetekcia použitej HTTP adresy na serveri');
@define('INSTALL_AUTODETECT_URL_DESC', 'Pri voľbe "Áno" bude Serendipity predpokladať, že HTTP adresa použitá návštevníkom, je Vašé základné nastavenie URL. Zapnutie umožní používáníe rôznych domén k prístupu na Vaše stránky, a použitie téjto jednej domény pre všetky odkazy na sledovánie zmien na stránkách.');
@define('INSTALL_INDEXFILE', 'Indexový súbor');
@define('INSTALL_INDEXFILE_DESC', 'Názov súboru použitého ako index');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Trvalé odkazy');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Definuje rôzne vzory URL patterns pre definíciu trvalých odkazov (permanent links) Vo vašom weblogu. Doporučujeme použiť prednastavenú hodnotu; inak skúste použiť hodnotu %id% tam, kde je to možné, aby ste predišli dotazom do databázy pri hľadaní cieľovej URL.');
@define('INSTALL_PERMALINK', 'Štruktúra URL trvalých odkazov');
@define('INSTALL_PERMALINK_DESC', 'Tu môžete definovať relatívnu štruktúru URL, kde začiatok je Vaše základné URL, z ktorého môžu byť Vaše články dostupné. Môžete použiť premenné %id%, %title%, %day%, %month%, %year% a akékoľvek iné znaky.');
@define('INSTALL_PERMALINK_AUTHOR', 'Štruktúra URL autorov');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Tu môžete definovať relatívnu štruktúru URL, kde začiatok je Vaše základné URL, z ktorého môžu byť dostupné články určitých autorov. Môžete použíť premenné %id%, %realname%, %username%, %email% a akékoľvek iné znaky.');
@define('INSTALL_PERMALINK_CATEGORY', 'Štruktúra URL kategórií');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Tu môžete definovať relatívnu štruktúru URL, kde začiatok je Vaše základné URL, z ktorého môžu byť dostupné určité kategórie. Môžete použíť premenné %id%, %name%, %parentname%, %description% a akékoľvek iné znaky.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Śtruktúra URL trvalých odkazov kategórií RSS');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Tu môžete definovať relatívnu štruktúru URL, kde začiatok je Vaše základné URL, z ktorého môžu byť dostupné RSS kanály z určitých kategórií. Môžete použíť premenné %id%, %name%, %description% a akékoľvek iné znaky.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Štruktúra URL adresy pre RSS kanál autorov');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Tu môžete definovať relatívnu štruktúru URL, kde začiatok je Vaše základné URL, z ktorého môžu byť dostupné RSS kanály od určitých použivateľov. Môžete použít premenné %id%, %realname%, %username%, %email% a ákékoľvek iné znaky.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Cesta k archívom');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Cesta k archívu');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Cesta ku kategóriám');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Cesta k autorom');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Cesta k odhláseniu komentárov');
@define('INSTALL_PERMALINK_DELETEPATH', 'Cesta pre zmazanie komentárov');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Cesta k schváleniu komentárov');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Cesta k RSS');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Cesta k jednotlivému doplnku');
@define('INSTALL_PERMALINK_ADMINPATH', 'Cesta do administrácie');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Cesta k vyhľadávaniu');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Cesta ku komentárom');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Základné nastavenia');
@define('INSTALL_CAT_SETTINGS_DESC', 'Nastavenie správania Serendipity');
@define('INSTALL_USERNAME', 'Meno administrátora');
@define('INSTALL_USERNAME_DESC', 'Prihlasovacie meno administrátora');
@define('INSTALL_PASSWORD', 'Heslo administrátora');
@define('INSTALL_PASSWORD_DESC', 'Prihlasovacie heslo administrátora');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Skutočné Meno');
@define('USERCONF_REALNAME_DESC', 'Plné meno autora. Toto meno je viditeľné pre návštevníkov');
@define('INSTALL_EMAIL', 'E-mail administrátora');
@define('INSTALL_EMAIL_DESC', 'E-mail administrátorského používateľa');
@define('INSTALL_SENDMAIL', 'Posielať administrátorovi e-maily?');
@define('INSTALL_SENDMAIL_DESC', 'Chcete dostávať e-mailové správy o komentároch k Vaším článkom?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Názov weblogu');
@define('INSTALL_BLOGNAME_DESC', 'Název Vášho weblogu');
@define('INSTALL_BLOGDESC', 'Popis weblogu');
@define('INSTALL_BLOGDESC_DESC', 'Popis Vašho weblogu');
@define('INSTALL_BLOG_EMAIL', 'E-Mail pre weblog');
@define('INSTALL_BLOG_EMAIL_DESC', 'Tu je nastavená e-mailová adresa, ktorá je použitá v poli "From"- (od) pre odchádzajúce e-maily. Nastavte túto adresu tak, aby byla rozpoznanaá mailovým serverom Vášho poskytovateľa - veľa mailových serverov odmieta poštu, ktorá má neznámu From-addresu (adr. odosielateľa).');
@define('COMMENT_TOKENS', 'Použiť príznaky (tokens) pre schvaľovanie komentárov?');
@define('COMMENT_TOKENS_DESC', 'Ak sú príznaky (tokens) používáné, komentáre môžu byť schválené alebo odstránené kliknutím na odkaz v oznamovacom e-maile, bez potreby prihlásenia do weblogu. Berte do úvahy, že ak niekto získa prístup k Vaším e-mailom, môže schvaľovať a mazať komentáre bez zadania prihlasovacích údajov.');
@define('INSTALL_LANG', 'Jazyk');
@define('INSTALL_LANG_DESC', 'Vyberte jazyk Vášho weblogu');
@define('INSTALL_CHARSET', 'Výber znakovej sady - Charset');
@define('INSTALL_CHARSET_DESC', 'Tu môžete vybrať medzi UTF-8 alebo národnou (ISO, EUC, ...) znakovou sadou. Niektoré jazyky majú iba UTF-8 preklady, takže nastavenie znakovej sady na národnú nemá účinok. UTF-8 je odporúčané pre nové inštalácie. Nemente toto nastavenie, pokiaľ ste už napísali články s diakritikou - môže to spôsobiť porušenie textu. O tomto probléme si môžete prečítať viac na adrese https://docs.s9y.org/docs/developers/internationalization.html .');
@define('INSTALL_CAL', 'Typ kalendáre');
@define('INSTALL_CAL_DESC', 'Vyberte formát kalendára');
@define('AUTOLANG', 'Použiť jazyk prehliadača ako prednastavený');
@define('AUTOLANG_DESC', 'Zapnutím téjto voľby určíte, že jazyk prehliadača bude prevzatý ako základný jazyk pre uživateľské rozhranie a pre články.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Zapnúť Doplnok ACL pre používateľské skupiny?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'Ak je volba "Plugin ACL pre používateľské skupiny" v nastaveniach zapnutá, môžete určiť, ktoré skupiny užívateľov môzu používať určité doplnky/udalosti.');
@define('UPDATE_NOTIFICATION', 'Update notification');
@define('UPDATE_NOTIFICATION_DESC', 'Show the update notification in the Dashboard, and for which channel?');
@define('LOG_LEVEL', 'Log Level');
@define('LOG_LEVEL_DESC', 'At certain places in the Serendipity code we have placed debugging breakpoints. If this option is set to "Debug", it will write this debug output to templates_c/logs/. You should only enable this option if you are experiencing bugs in those areas, or if you are a developer. Setting this option to "Error" will enable logging PHP errors, overwriting the PHP error_log setting.');
@define('USE_CACHE', 'Enable caching');
@define('USE_CACHE_DESC', 'Enables an internal cache to not repeat specific database queries. This reduces the load on servers with medium to high traffic and improves page load time.');
@define('QUICKSEARCH_SORT_RELEVANCE', 'Relevancia');
@define('UPDATE_STABLE', 'stable');
@define('UPDATE_BETA', 'beta');

/* APPEARANCE AND OPTIONS SETTINGS */
@define('INSTALL_CAT_DISPLAY', 'Vzhľad a nastavenia');
@define('INSTALL_CAT_DISPLAY_DESC', 'Úprava vzhľadu a správania Serendipity');
@define('INSTALL_FETCHLIMIT', 'Články zobrazené na hlavnej stránke');
@define('INSTALL_FETCHLIMIT_DESC', 'Počet článkov zobrazených na hlavnej stránke');
@define('INSTALL_RSSFETCHLIMIT', 'Články, ktoré sa majú zobraziť v RSS Feede');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Počet článkov, ktoré sa majú zobraziť na každej stránke v RSS Feede.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'Ako sa majú zoraďovať výsledky hľadania?');
@define('SYNDICATION_RFC2616', 'Aktivovať strict RFC2616 RSS-Feed compliance');
@define('SYNDICATION_RFC2616_DESC', 'Ak neaktivujete RFC2616, bude to mať za následok, že všetky podmienené GETy na Serendipity vrátia príspevky, ktoré boli modifikované od času posledného požiadavku. Takže pri takejto voľbe "false" dostanú Vaši návštevníci všetky články od svojho posledného požiadavku, čo sa považuje za dobré. Avšak niektorí agenti ako Planet fungujú za tejto situácie nesprávne a tiež to porušuje RFC2616. Takže ak nastavíte túto voľbu na "TRUE", budete vyhovovať RFC ale návštevníkom môžu v čítačkách behom prázdnin zmiznúť príspevky. V každom prípade, buď to nevyhovuje agregátorom ako je Planet, alebo to nevyhovuje návštevníkom weblogu. Ak sa vyskytnú sťažnosti z ktorejkoľvek strany, môžete túto voľbu prepnúť. Referencia: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Použiť kompresiu gzip');
@define('INSTALL_USEGZIP_DESC', 'Kompresia stránok urýchľuje ich nahranie, pokiaľ to prehliadač podporuje. Odporúčame použiť toto nastavenie.');
@define('INSTALL_XHTML11', 'Vynútiť kompatibilitu s XHTML 1.1?');
@define('INSTALL_XHTML11_DESC', 'Chcete plnú kompatibilitu s XHTML 1.1? (môže spôsobiť problémy v starších prehliadačoch)');
@define('INSTALL_POPUP', 'Zapnúť použitie vyskakovacích okien');
@define('INSTALL_POPUP_DESC', 'Chcete vo weblogu používať vyskakovacie okná pre komentáre, odozvy atď.?');
@define('INSTALL_EMBED', 'Je Serendipity integrované?');
@define('INSTALL_EMBED_DESC', 'Ak chcete vložiť weblog do Vaších stránok, vyberte áno pre odstránenie vštkých záhlaví, zobrazí sa iba obsah. Môžete použiť voliteľný súbor indexFile na určenie vlastných záhlaví. Viac informácií nájdete v súbore README!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Spraviť externé odkazy klikateľnými?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"Nie": Neoznačené externé odkazy (Top výstupy, Top odkazujúce stránky, Užívateľské komentáre) nebudú zobrazené alebo budú zobrazené ako bežný text všade, kde je to možné (doporučené pre obmedzenie spamu). "Ano": Neoznačené externé odkazy budú zobrazené ako hyperlinky. Nastavenie môže byť prepísané v konfigurácii doplnkov!');
@define('INSTALL_TRACKREF', 'Zapnúť sledovanie odkazujúcich stránok?');
@define('INSTALL_TRACKREF_DESC', 'Zapnutie sledovania odkazujúcich stránok Vám ukáže, ktoré webové stránky odkazujú na Vaše články. Dnes sa to často zneužíva na SPAM, takže to môžete nechať vypnuté.');
@define('INSTALL_BLOCKREF', 'Blokované odkazujúce stránky');
@define('INSTALL_BLOCKREF_DESC', 'Chcete obmedziť prístup z určitých adries? Adresy oddelujte znakom \';\' a pozor, adresy sú blokované vrátane podadries!');
@define('INSTALL_REWRITE', 'Prepisovanie URL');
@define('INSTALL_REWRITE_DESC', 'Nastavte pravidlá pre tvorbu URL. Zapnutie režimu prepisovania umožní ľahšie čitateľné URL a zjednoduší indexáciu vyhľadávačmi, ako napr. Google. Webserver musí podporovať mod_rewrite, alebo nastavenie "AllowOverride All" pre priečinok Serendipity. Prednastavená je automatická detekcia.');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Nastaviť posun časovéj zóny voči serveru?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Posun času článkov voči času na serveri. Vyberte "áno" pre zadanie relatívneho časového posunu voči časovej zóne serveru. Nejedná sa o posun voči GMT (Greenwich mean time).');
@define('INSTALL_OFFSET', 'Časový posun servera');
@define('INSTALL_OFFSET_DESC', 'Vložte počet hodín medzi časem serveru (aktuálny čas: %clock%) a Vašou časovou zónou');
@define('INSTALL_SHOWFUTURE', 'Zobraziť budúce články');
@define('INSTALL_SHOWFUTURE_DESC', 'Toto nastavenie zapne zobrazenie budúcích článkov weblogu. Štandardne sú skryté a budú zobrazené až v čase ich vydania.');
@define('INSTALL_ACL', 'Aplikovať práva na čítanie pre kategórie');
@define('INSTALL_ACL_DESC', 'Ak je zapnuté, nastavenia užívateľských skupín, ktoré nastavíte pre kategórie, budú aplikované keď si prihlásení užívatelia prezerajú Váš weblog. Ak je vypnuté, práva na čítanie nie sú aplikované a pozitívnym efektom je mierne zrýchlenie Vášho weblogu. Ak nepotrebujete práva na čítanie pre rôznych používateľov, nechajte toto nastavenie vypnuté.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Zobraziť celé články vrátane rozšírenej časti v RSS kanáli');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Obrázok pre kanál RSS');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL obrázku vo formáte GIF/JPEG/PNG, ak je k dispozícii. (prázdné: logo serendipity)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Šírka obrázku');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'v pixeloch, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Výška obrázku');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'v pixeloch, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Zobrazovať e-mailové adresy?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Pole "hlavný redaktor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'E-mailová adresa hlavného redaktora, ak je k dispozícii. (prázdné: nezobraziť) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Pole "webmaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'E-mailová adresa webmastera, ak je k dispozícii. (prázdné: nezobraziť) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Pole "ttl" (životnosť)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Čas v minútach, po ktorom by Váš weblog nemal býť naďalej vo vyrovnávacej pamäťi na cudzích serveroch/aplikáciách (prázdné: nezobraziť) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Pole "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Má byť pole "pubDate" integrované do kanálu RSS, aby obsahoval dátum posledného článku?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Nastavenie úpravy obrázkov');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Tu zadajte všeobecné informácie, ako má Serendipity spracovávať obrázky');
@define('INSTALL_IMAGEMAGICK', 'Používať Imagemagick?');
@define('INSTALL_IMAGEMAGICK_DESC', 'Máte nainštalovaný Imagemagick a chcete ho použiť na zmenu veľkosti obrázkov?');
@define('INSTALL_IMAGEMAGICKPATH', 'Cesta k súboru convert');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Úplná cesta a název binárneho súboru convert programu Imagemagick');
@define('INSTALL_THUMBSUFFIX', 'Prápona náhľadov');
@define('INSTALL_THUMBSUFFIX_DESC', 'Náhľady budú pomenované následovne: originál.[prípona].typ');
@define('INSTALL_THUMBWIDTH', 'Maximálna veľkosť náhľadu');
@define('INSTALL_THUMBWIDTH_DESC', 'Maximálna veľkosť náhľadu v obmedzujúcom rozmere');
@define('INSTALL_THUMBDIM', 'Obmedzujúci rozmer pre náhľady');
@define('INSTALL_THUMBDIM_LARGEST', 'najdlhšia hrana');
@define('INSTALL_THUMBDIM_WIDTH', 'šírka');
@define('INSTALL_THUMBDIM_HEIGHT', 'výška');
@define('INSTALL_THUMBDIM_DESC', 'Rozmer , ktorý určuje maximálnu veľkosť náhľadu. Štandardné nastavenie "' . INSTALL_THUMBDIM_LARGEST .  '" obmedzuje obidva rozmery, takže ani jeden z nich nemôže byť väčší ako maximálna veľkosť; "' . INSTALL_THUMBDIM_WIDTH . '" a "' .  INSTALL_THUMBDIM_HEIGHT . '" obmedzujú iba jeden rozmer, takže druhý rozmer môže byť väčší ako maximálna veľkosť.');
@define('MEDIA_UPLOAD_SIZE', 'Max. veľkosť uploadovaného súboru');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Zadajte maximálnu veľkosť pre uploadované (nahrávané) súbory v bytoch. Toto nastavenie môže byť prepísané nastavením servera v php.ini: upload_max_filesize, post_max_size, max_input_time majú prednosť pred touto voľbou. Prázdny reťazec znamená, že sa použije limit serveru.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Max. šírka obrázku pre upload');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Zadajte maximálnu šírku pre uploadované obrázky v pixeloch.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Max. výška obrázku pre upload');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Zadajte maximálnu výšku v pixelech pre uploadované obrázky.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Zapnúť synchronizáciu médií za behu (on the fly)');
@define('ONTHEFLYSYNCH_DESC', 'Ak je zapnuté, Serendipity bude porovnávať databázu médií so súbormi uloženými na serveri a bude synchronizovať obsah databázy a priečinkov.');
@define('MEDIA_DYN_RESIZE', 'Zapnúť dynamickú zmenu veľkosti obrázkov?');
@define('MEDIA_DYN_RESIZE_DESC', 'Ak je zapnuté, môže media selector vracať obrázky v akejkoľvek požadovanej veľkosti pomocou premennej GET. Výsledky sú cachované, takže sa môže pri intenzívnom využití vytvoriť veľké množstvo súborov.');
@define('MEDIA_EXIF', 'Importovať EXIF/JPEG dáta obrázku');
@define('MEDIA_EXIF_DESC', 'Ak je zapnuté, existujúce EXIF/JPEG metadata obrázkov budú spracované a uložené v databáze, aby sa dali zobraziť v galérii médií.');
@define('MEDIA_PROP', 'Vlastnosti médií');
@define('MEDIA_PROP_DESC', 'Zadajte zoznam polí vlastností (oddelených  ";"), ktoré chcete definovať pre každý souor v médiách');
@define('MEDIA_PROP_MULTIDESC', '(Za každú položku môžete pridať ":MULTI", čo bude indikovať, že táto položka bude obsahovať dlhý text namiesto iba niekoľko znamkv)');
@define('MEDIA_KEYWORDS', 'Médiá - kľúčové slová');
@define('MEDIA_KEYWORDS_DESC', 'Zadajte zoznam slov (oddelených ";"), ktoré chcete použiť ako prednastavené kľúčové slová pre položky v médiách.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Osobné nastavenia');
@define('USERCONF_CAT_PERSONAL_DESC', 'Nastavenia Vášho účtu');
@define('USERCONF_USERNAME', 'Meno');
@define('USERCONF_USERNAME_DESC', 'Vaše užívateľské meno');
@define('USERCONF_PASSWORD', 'Heslo');
@define('USERCONF_PASSWORD_DESC', 'Vaše heslo');
@define('USERCONF_CHECK_PASSWORD', 'Staré heslo');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Ak meníte heslo v poli vyššie, musíte zadať pôvodné heslo do tohto poľa.');
@define('USERCONF_USERLEVEL', 'Úroveň prístupu');
@define('USERCONF_USERLEVEL_DESC', 'Táto úroveň prístupu určuje práva používateľa weblogu.');
@define('USERCONF_GROUPS', 'Členstvo v skupinách');
@define('USERCONF_GROUPS_DESC', 'Tento používateľ je členom nasledujúcich skupín. Ćlenstvo vo viacerých skupinách je možné.');
@define('USERCONF_EMAIL', 'E-mailová adresa');
@define('USERCONF_EMAIL_DESC', 'Váš e-mail');
@define('INSTALL_WYSIWYG', 'Používať WYSIWYG editor?');
@define('INSTALL_WYSIWYG_DESC', 'Chcete používať WYSIWYG editor? (Pracuje v IE5+, čiastočne v Mozille 1.3+)');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR', 'Toolbar for WYSIWYG editor');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR_DESC', 'Sets the list of available toolbar buttons for the WYSIWYG-Editor. If you need to further change those presets, you can create a file templates/XXX/admin/ckeditor_custom_config.js. For further details please check out the files htmlarea/ckeditor_s9y_config.js and htmlarea/ckeditor_s9y_plugin.js.');
@define('USERCONF_WYSIWYG_PRESET_S9Y', 'Serendipity (default)');
@define('USERCONF_WYSIWYG_PRESET_BASIC', 'Reduced');
@define('USERCONF_WYSIWYG_PRESET_FULL', 'Full');
@define('USERCONF_WYSIWYG_PRESET_STANDARD', 'Alternate');
@define('USERCONF_WYSIWYG_PRESET_CKE', 'CKEditor Full');
@define('USERCONF_WYSIWYG_PRESET_NOCC_S9Y', 'Force: Serendipity');
@define('USERCONF_WYSIWYG_PRESET_NOCC_BASIC', 'Force: Reduced');
@define('USERCONF_WYSIWYG_PRESET_NOCC_FULL', 'Force: Full');
@define('USERCONF_WYSIWYG_PRESET_NOCC_STANDARD', 'Force: Alternate');
@define('USERCONF_WYSIWYG_PRESET_NOCC_CKE', 'Force: CKEditor Full');
@define('USERCONF_SENDCOMMENTS', 'Posielať správy o komentároch?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Chcete dostávať zprávy o komentároch k článkom e-mailom?');
@define('USERCONF_SENDTRACKBACKS', 'Posielať správy o odozvách?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Chcete dostávať správy o odozvách na články e-mailom?');
@define('USERCONF_CREATE', 'Zneplatniť používateľa / zakázať aktivitu?');
@define('USERCONF_CREATE_DESC', 'Ak je táto voľba vybraná, používateľ nebude mať žiadne práva k vytváraniu alebo meneniu weblogu. Ak sa prihlási do administrátorskej oblasti, môže si iba prehliadať osobné nastavenia alebo sa odhlásiť.');
@define('USERCONF_ALLOWPUBLISH', 'Právo publikovať články?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Umožniť užívateľovi publikovať články?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Zobraziť lištu nástrojov v okne výberu médií?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Prednastavené voľby pre nové články');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'UPOZORNENIE: Atribút úroveň prístupu používateľa (userlevel) je teraz používaný iba kvôli spätnej kompatibilite s doplnkami a autorizáciou. Užívateľské práva sa odteraz riadia pomocou členských skupín!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Nezadali ste správne staré heslo a tým pádom nemáte právo zmeniť heslo. Vaše nastavenia neboli uložené.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'Meno používateľa nemôže byť prázdne.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'ersonalConfiguration: Prístup k osobnej konfigurácii');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: Zmena úrovne používateľa (level)');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: Zmena "zákazu nových článkov"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: Zmena práva na publikovanie článkov');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Konfigurácia systému');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Konfigurácia weblogu');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Správa článkov');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Správa článkov ostatných používateľov');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Import článkov');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Správa kategórií');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Správa kategórií ostatných používateľov');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Mazanie kategórií');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Správa používateľov');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Mazanie používateľov');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: Zmena úrovne používateľa');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Správa používateľov v rovnakých skupinách');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Správa používateľov v iných skupinách');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Vytváranie nových používateľov');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Správa používateľských skupín');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Správa doplnkov');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Správa doplnkov ostatných užívateľov');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Správa mediálnych súborov (obrázkov)');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Správa mediálnych (obrázkových) priečinkov');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: Pridanie nových mediálnych súborov (obrázkov)');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Mazanie mediálnych súborov (obrázkov)');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Správa mediálnych súborov (obrázkov) ostatných používateľov');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: Prehliadanie mediálnych súborov (obrázkov)');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Synchronizácia náhľadov');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Správa komentárov');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Správa šablón (templates)');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: Zobraziť mediálne súbory (obrázky) ostatných používateľov');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Zakázané doplnky');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Zakázané udalosti');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Záznam uložený');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Vláknové');
@define('COMMENTS_VIEWMODE_LINEAR', 'Lineárne');
@define('DISPLAY_COMMENTS_AS', 'Zobraziť komentáre ako');
@define('COMMENTS_DISABLE', 'Zablokovať pridávánie komentárov');
@define('COMMENTS_ENABLE', 'Povoliť pridávánie komentárov');
@define('COMMENTS_CLOSED', 'Autor zablokoval pridávanie komentárov');
@define('VIEW_EXTENDED_ENTRY', 'Pokračovať v čítaní "%s"');
@define('TRACKBACK_SPECIFIC', 'Odozva zo špecifického URI na tento článok');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'zobraziť všetko');
@define('VIEW_TOPICS', 'zobraziť nadpisy');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Téma');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Články sa nepodarilo úspešne vložiť!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Zapamätať údaje? ');
@define('SUBMIT_COMMENT', 'Odoslať komentár');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Prihlásiť sa k sledovaniu komentáov tohto článku');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Váš prehliadač nezaslal platný reťazec HTTP-Referrer. To môže byť spôsobené nesprávnym nastavením prehliadača resp. proxy servera alebo ide o tzv. Cross Site Request Forgery (XSRF), ktorý je namierený na Vás. Požadovaný úkon nemohol byť dokončený.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Themes page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Komentár #%s už bol schválený');
@define('COMMENT_EDITED', 'Vybraný komentár bol upravený');
@define('COMMENTS_WILL_BE_MODERATED', 'Odoslané komentáre budú pred zverejnením moderované.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Pozor: Tento komentár musí byť pred uverejnením schválený');
@define('DELETE_COMMENT', 'Zmazať komentár');
@define('APPROVE_COMMENT', 'Schváliť komentár');
@define('REQUIRES_REVIEW', 'Vyžaduje kontrolu');
@define('COMMENT_APPROVED', 'Komentár #%s bol schválený');
@define('COMMENT_DELETED', 'Komentár #%s bol zmazaný');
@define('COMMENTS_MODERATE', 'Komentáre a odozvy k tomuto článku budú moderované');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Pozor: Táto odozva musí býť pred zverejnením schválená');
@define('DELETE_TRACKBACK', 'Vymazať odeovu');
@define('APPROVE_TRACKBACK', 'Schváliť odozvu');
@define('TRACKBACK_APPROVED', 'Odozva #%s bola schválená');
@define('TRACKBACK_DELETED', 'Odozva #%s bola vymazaná');
@define('COMMENT_NOTOKENMATCH', 'Odkazu na schválenie vypršala platnosť, alebo bol komentár č. %s už schválený alebo odstránený');
@define('TRACKBACK_NOTOKENMATCH', 'Odkazu na schválenie vypršala platnosť, alebo bola odozva č. %s už schválená alebo odstránená');
@define('BADTOKEN', 'Neplatný odkaz na schválenie');
@define('TOP_LEVEL', 'Najvyššia úroveň');
@define('VIEW_COMMENT', 'Zobraziť komentár');
@define('VIEW_ENTRY', 'Zobraziť článok');
@define('LINK_TO_ENTRY', 'Odkaz na článok');
@define('LINK_TO_REMOTE_ENTRY', 'Odkaz na externý článok');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Posielanie oznámenia (pingback) na URI %s...');
@define('PINGBACK_SENT', 'Oznámenie úspešné');
@define('PINGBACK_FAILED', 'Oznámenie zlyhalo: %s');
@define('PINGBACK_NOT_FOUND', 'Oznamovacia URI adresa neexistuje.');
@define('TRACKBACK_SENDING', 'Odoslanie odozvy na URI %s...');
@define('TRACKBACK_SENT', 'Odozva úspešná');
@define('TRACKBACK_FAILED', 'Odozva neúspešná: %s');
@define('TRACKBACK_NOT_FOUND', 'URI odozvy neexistuje.');
@define('TRACKBACK_URI_MISMATCH', 'Automaticky získané URI neoodpovedá Vášmu cieľovému.');
@define('TRACKBACK_CHECKING', 'Testovanie <u>%s</u> na možné odozvy...');
@define('TRACKBACK_NO_DATA', 'Cieľ neobsahuje dáta');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Odozva nebola odoslaná: nepodarilo sa spojiť s %s na porte %d');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Sending emails to % subscribers ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Emails sent');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Dobrý deň %s,\n\nPožiadali ste o zasielanie oznámení o nových komentároch k článku \"%s\" (<%s>). Túto žiadosť (\"Double Opt In\") potvrdíte kliknutím na nasledujúci odkaz:\n<%s>\n.");
@define('CONFIRMATION_MAIL_TITLE', 'Email Subscription to new articles of "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for new articles to the blog \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "Dobrý deň %s,\n\nPoslali ste nový komentár na \"%s\". Komentár znie:\n\n%s\n\nVlastník weblogu požaduje e-mailové potvrdenie, takže je potrebné komentár potvrdiť kliknútím na nasledujúcí odkaz:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Dobrý deň %s,\n\nPoslali ste nový komentár na \"%s\". Váš komentár znie:\n\n%s\n\nVlastník weblogu vyžaduje prvotné e-mailové potvrdenie. Znamená to, že je potrebné komentár potvrdiť kliknutím na nasledující odkaz:\n<%s>\n\nSúčasne tým budú potvrdené všetky ďalšie komentáre s tým istým menom a tou istou e-mailovou adresou, takže Vám v budúcnosti už podobné oznámenie nebude doručované.");
@define('SUBSCRIPTION_MAIL_INTRO', 'In the blog %s a new article was posted:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here: ');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Nový komentár k sledovanému článku "%s"');
@define('SUBSCRIPTION_MAIL', "Dobrý deň %s,\n\nA k čláku, ktorý sledujete na \"%s\", s názvom \"%s\", bol práve pridaný nový komentár.\nMeno odosielateľa: %s\n\nOdkaz na článok: %s\n\nOdhlásiť sledovanie článku: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Dobrý deň %s,\n\nA k článku, ktorý sledujete na \"%s\", s názvem \"%s\", bola práve pridaná nová odozva\nMeno odosielateľa: %s\n\nOdkaz na článok: %s\n\nOdhlásiť sledovanie článku: %s\n");
@define('SIGNATURE', "\n-- \n%s je vytvorený pomocou Serendipity.\n Tento výborný voľný blogovací systém môžete použiť aj vy.\nViac informácií na webstránke <https://s9y.org>.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Nový komentár vo weblogu "%s", k článku s názvom "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Nová odozva na weblog/článok s názvom "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'Máte k dispozícii tieto voľby:');
@define('NEW_TRACKBACK_TO', 'Nová odozva na');
@define('NEW_COMMENT_TO', 'Nový komentár ku');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Nebol nájdený žianen článok obsahujúci výraz "%s"' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Pri hľadaní výrazu "%s" bolo nájdených %s výsledkov:');
@define('SEARCH_TOO_SHORT', 'Hľadaný výraz musí být dlhší ako 3 znaky. Pri hľadaní kratších výrazov skúste k výrazu pridať znak "*", ako napríklad výraz: "s9y*".');
@define('SEARCH_ERROR', 'Funkcia vyhľadávania nepracovala podľa očakávaní. Poznámka pre administrátora webblogu: Toto môže byť spôsobené neprítomnosťou príslušných indexov v databáze. Používateľský účet v databáze MySQL musí mať práva na vykonanie tohto príkazu: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> Konkrétna chyba vrátená databázou bola: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Váš komentár je prázdny, prosím %svrátte sa%s a skúste znovu');
@define('COMMENT_NOT_ADDED', 'Váš komentár sa nepodarilo pridať, lebo komentáre k tomuto príspevku boli zakázané, zadali ste nesprávne údaje alebo bol Váš komentár zachytený antispamom.');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Komentáre od');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', 'Vaše potvrdenie komentára bolo úspešne prijaté.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'Vaše potvrdenie komentára nemohlo byť prijaté. Skontrolujte prosím odkaz, na ktorý ste klikli. Ak je odkaz starší ako 3 týždne, musíte požiadať o zasielanie oznámení znova.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Your subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'Vaše potvrdenie žiadosti o zasielanie oznámení o nových komentároch bolo úspešne prijaté.');

/* SERVE UNSUBSCRIBE */
@define('NOTIFICATION_UNSUBSCRIBE_CONFIRM', "Your subscription to \"%s\" is successfully deleted. You won't get informed about new articles.");
@define('NOTIFICATION_UNSUBSCRIBE_FAIL', 'Your subscription for the email %s cannot be deleted. Please check the link you clicked on for completion.');
@define('NOTIFICATION_UNSUBSCRIBE_ENTRY_CONFIRM', "Your subscription to \"%s\" for the email %s is successfully deleted. You won't get informed about new comments.");
@define('NOTIFICATION_UNSUBSCRIBE_BAD_TOKEN', 'Your subscription cannot be deleted. Please check the link you clicked on for completion.');

/* SERVE SUBSCRIBE */
@define('NOTIFICATION_OPTINMAIL_SENT', 'Your request for a blog subscription is recieved. An email will be sent to %s to approve this subscription ("Double Opt In") with a link to confirm your email address.');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM', 'The subscription to "%s" is received. A summary of a new article will be sent to you. You can unsubscribe with a link included in every mail.');
@define('NOTIFICATION_SUBSCRIBE_DUPE', 'Your subscription failed because there is already an active subscription for "%s".');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM_FAIL', 'Your subscription failed. Please check your email address.');
@define('BLOG_SUBSCRIPTION_TITLE', 'Email Subscription of new articles');
@define('BLOG_SUBSCRIPTION_BLAHBLAH', 'To get informed of new articles, enter your email address here.');
@define('BLOG_SUBSCRIPTION_AUTHOR', "To get informed of new articles from \"%s\", enter your email address here.");
@define('BLOG_SUBSCRIPTION_CATEGORY', "To get informed of new articles in the category \"%s\", enter your email address here.");
@define('BLOG_SUBSCRIPTION_OPTIN', 'An email with an confirmation link will be sent to this address, click on the link to confirm your subscription.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_AUTHOR', 'To get informed of new articles from "%s", enter your email address here.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_CATEGORY', 'To get informed of new articles in the category "%s", enter your email address here.');

/* PLUGIN_API */
@define('PLUGIN_API_VALIDATE_ERROR', 'Konfiguračná syntax pre voľbu "%s" je chybná. Vyžadovaný obsah je typu "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Zoznam kategórií.');
@define('CATEGORIES_PARENT_BASE', 'Zobraziť iba kategórie nižšie ...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Môžete vybrať nadradenú kategóriu a budú zobrazené iba jej podradené kategórie.');
@define('CATEGORIES_HIDE_PARALLEL', 'Skryť kategórie, ktoré nie sú súčasťou stromu kategórií');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Ak chcete skryť kategórie, ktoré sú čásťou iného stromu kategórií, musíte použiť toto nastavenie. Táto možnost má najlepšie využitie s multi-blogom a doplnkom "Properties/Templates of categories".');
@define('CATEGORIES_HIDE_PARENT', 'Skryť zvolenú nadradenú kategóriu?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Ak obmedzíte výpis kategórií na určitú kategóriu, štandardne bude vo výstupe táto kategória zobrazená. Ak zapnete toto nastavenie, nadradená kategória nebude zobrazená.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Zapnúť Smarty-Templates?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Ak je táto možnosť zapnutá, bude doplnok pre výpis kategórií využívať možností Smarty-Templating. Vzhľad môžete upraviť pomocou šablóny "plugin_categories.tpl". Zapnutie tejto voľby má negatívny vplyv na výkon, takže ak nechcete robiť vladné úpravy, nechajte to vypnuté.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Zobraziť počet článkov v kategórii? ');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Povoliť návštevníkom zobraziť viac kategórií naraz?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'k je táto voľba zapnutá, bude vedľa každej kategórie v tomto doplnku bočnej lišty zobrazené okienko. Návštevníci môžu zaškrtnúť tieto okienka a bude im zobrazené články vyhovujúce tomuto výberu.');
@define('CATEGORIES_TO_FETCH', 'Zdroj kategórií');
@define('CATEGORIES_TO_FETCH_DESC', 'Kategórie ktorých autorov sa majú zahrnúť?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Zobraziť zoznam autorov');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Zobraziť počet článkov pri autorovom mene?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Ak je táto voľba zapnutá, vedľa mena autora bude v zátvorke zobrazený počet jeho článkov.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Zobraziť iba autorov s viac ako X článkami');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Spolupráca');
@define('SHOWS_RSS_BLAHBLAH', 'Zdieľané RSS odkazy');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', 'Kanál %s');
@define('SYNDICATION_PLUGIN_091', 'Kanál RSS 0.91');
@define('SYNDICATION_PLUGIN_10', 'Kanál RSS 1.0');
@define('SYNDICATION_PLUGIN_20', 'Kanál RSS 2.0');
@define('SYNDICATION_PLUGIN_20c', 'Komentáre RSS 2.0');
@define('SYNDICATION_PLUGIN_ATOM03', 'Kanál ATOM 0.3');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Show a (big) icon insteaf of a textlink to the feed. Set to "none" to deactivate, or to "feedburner" to show a feedburner counter if an id is given below');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Show the subToMe button, a layer to make feed subscription easier');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Custom URL');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'If you want to link to the custom feed specified in the blog configuration, enable this option.');
@define('SYNDICATION_PLUGIN_FEEDNAME', 'Zobrazené meno pre "kanál"');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'Zadajte voliteľné meno pre kanál (ak je prázdne, tak je štandardne pomenovaný ako "kanál")');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'Zobrazované meno pre kanál s komentármi');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'Zadajte (volitelne) akékoľvek meno pre kanál s komentármi');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'FeedBurner ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'ID feedu, ktorý chcete publikovať');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner obrázok');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Názov obrázku, ktorý sa má zobraziť (alebo prázdny pre počitadlo), umiestnené na feedburner.com, napr.: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner nadpis');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Nadpis (voliteľné), ktorý sa má zobraziť pri obrázku');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner text obrázku');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Text (voliteľné) ktorý sa má zobraziť pri pohybe kurzoru nad obrázkom');
@define('SYNDICATION_PLUGIN_XML_DESC', 'Set to "none" if you only want to show a text link.');

/* PLUGIN_SUBSCRIBE */
@define('PLUGIN_SUBSCRIBE_NAME', 'Blog subscription with email');
@define('PLUGIN_SUBSCRIBE_DESC', 'Allows an user to subscribe to the blog. He will receive an email if new articles are published with the option to unsubscribe');
@define('PLUGIN_SUBSCRIBE_TITLE', 'Title');
@define('PLUGIN_SUBSCRIBE_TITLE_DESC', 'Enter the sidebar title to display:');
@define('PLUGIN_SUBSCRIBE_TITLE_DEFAULT', 'Email subscription');
@define('PLUGIN_SUBSCRIBE_LINK', 'Linktext');
@define('PLUGIN_SUBSCRIBE_LINK_DESC', 'which text should be shown in the subscribe link?');
@define('PLUGIN_SUBSCRIBE_LINK_DEFAULT', 'Email subscription');
@define('PLUGIN_SUBSCRIBE_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('PLUGIN_SUBSCRIBE_IMAGE_DESC', 'Set to "none" if you only want to show a text link.');

/* PLUGIN_ARCHIVES */
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Schovať odkaz na archívy, ak nie sú vo vybranom období vydané žiadne články (vyžaduje počítánie článkov)');
@define('ARCHIVE_COUNT', 'Počet položiek v archívnom zozname');
@define('ARCHIVE_COUNT_DESC', 'Celkový počet zobrazených mesiacov, týždnov alebo dní');
@define('ARCHIVE_FREQUENCY', 'Archívny interval');
@define('ARCHIVE_FREQUENCY_DESC', 'Kalendány interval medzi položkami v archívnom zozname');
@define('BROWSE_ARCHIVES', 'Prehliadať mesačné archívy');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Zobraziť "Serendipity" ako text');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Vytvorené v "Serendipity" sa zobrazí ako text');
@define('POWERED_BY_SHOW_IMAGE', 'Zobraziť "Serendipity" s logom');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Zobrazí sa logo Serendipity');
@define('ADVERTISES_BLAHBLAH', 'Reklama na tvorcov systému vášho weblogu');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Použít https pre prihlásenie');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Pre login sa použije https odkaz. Váš webserver to musí podporovať!');
@define('SUPERUSER', 'Správa weblogu');
@define('SUPERUSER_OPEN_ADMIN', 'Administrácia');
@define('SUPERUSER_OPEN_LOGIN', 'Prihlásenie');
@define('ALLOWS_YOU_BLAHBLAH', 'Vložiť odkaz do bočného bloku administrácie weblogu');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Kalendár');
@define('CALENDAR_BOW_DESC', 'Deň určený ako začiatok týždňa. Prednastavený je pondelok');
@define('QUICKJUMP_CALENDAR', 'Vyhľadávací kalendár');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Začiatok týždňa');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Zapnúť Plugin API hook');
@define('CALENDAR_EXTEVENT_DESC', 'Ak je zapnuté, doplnky sa môžu napojiť na kalendár a zvýrazňovať svoje vlastné udalosti. Zapnite iba ak máte doplnky, ktoré toto vyžadujú, inak to znižuje výkon.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Hľadať články');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Vloženie HTML kódu do krajného stĺpca');
@define('THE_NUGGET', 'Vložené HTML');
@define('BACKEND_TITLE', 'Dalšie informácie v konfigurácii doplnku');
@define('BACKEND_TITLE_FOR_NUGGET', 'Tu môžete zadať reťazec, ktorý bude zobrazený v konfiguračnej stránke doplnkov spolu s popisom doplnku HTML Nugget. Ak máte niekoľko HTML Nuggetov s prázdnym názvom, toto Vám pomôže ich rozlíšiť.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Zobraziť Top výstupy/odkazujúce stránky ako odkazy?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"Nie": Výstupy a adresy odkazujúcich stránok budú zobrazené ako čistý text pre obmedzenie spamu, "Áno": ako hypertextové odkazy. "Default": Použiť globálne nastavenia (doporučené).');
@define('HAVE_TO_BE_LOGGED_ON', 'Na zobrazenie tejto stránky musíte byť prihlásený');
@define('WELCOME_TO_ADMIN', 'Vitajte v administrácii Serendipity.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Veľký obrázok');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(Ak zadáte absolútnu URL adresu s http://..., bude táto adresa použitá ako cieľ presmerovania v prípade, že ste vybrali voľbu "Vynútiť" pre FeedBurner. Nezabudnite, že to môže být URL adresa nezávislá na FeedBurneri. Pre nové kanály Google FeedBurnera budete musieť zadať http://feeds2.feedburner.com/jmenoVasehoKanalu)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'Ak nastavíte túto voľbu na "Vynútiť", môžete presmerovať RSS kanál na akúkoľvek webovú službu, nie len na FeedBurner. Pozrite sa nižšie na voľbu "Feedburner ID" pre zadanie absolútnej adresy.');
@define('MEDIA_PROPERTY_COMMENT1', 'Krátky komentár');
@define('MEDIA_PROPERTY_COMMENT2', 'Dlhý komentár');
@define('DELETE_SELECTED_ENTRIES', 'Zmazať vybrané príspevky');
@define('MEDIA_PROPERTY_ALT', 'Popis (zhrnutie pre atribút ALT)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Titulok');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity ešte nie je nainštalované. Prosím <a href="%s">nainštalujte</a> ho teraz.');
@define('COMMENT_ADDED_CLICK', 'Kliknite %ssem%s pre návrat ku komentárom nebo %ssem%s pre zavretie okna.');
@define('COMMENT_NOT_ADDED_CLICK', 'Kliknite %ssem%s pre návrat ku komentárom alebo %ssem%s pre zavretie okna.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Dĺžka');
@define('MEDIA_PROPERTY_DATE', 'Asociovaný dátum');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'URL presunutého priečinka zmenené v %s článkoch.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'V iných databázach ako MySQL nie je možná iterácia po článkoch a nahradenie starej adresy pôvodného adresára novou URL. Budete musieť články ručne editovať a adresy upraviť. Priečinok sa dá ale stále presnúť naspäť na pôvodné miesto, ak to považujete za náročné.');
@define('TRACKBACK_SIZE', 'Cieľové URI prekročilo max. veľkosť súboru %s bajtov.');
@define('CLICK_FILE_TO_INSERT', 'Kliknite na súbor, ktorý chcete vložiť:');
@define('SELECT_FILE', 'Vyberte súbor na vloženie:');
@define('MANAGE_IMAGES', 'Správa obrázkov');
@define('WORD_NEW', 'Nové');
@define('WORD_OR', 'alebo');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Frontend: Externé služby');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Frontend: Ďalšie možnosti');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Frontend: Úplné mody');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Frontend: Zobrazenie/filtre');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Frontend: Doplnky pre články');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Backend: Editor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Backend: Správa používateľov');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Backend: Meta informácie');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Backend: Templates - šablóny vzhľadov');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Backend: Dalšie možnosti');
@define('PLUGIN_GROUP_IMAGES', 'Obrázky');
@define('PLUGIN_GROUP_ANTISPAM', 'Antispam');
@define('PLUGIN_GROUP_MARKUP', 'Markup - textové značky');
@define('PLUGIN_GROUP_STATISTICS', 'Štatistiky');
@define('IMPORT_WELCOME', 'Vitajte v nástroji pre import dát');
@define('USER_SELF_INFO', 'Prihlásený ako %s (%s)');
@define('IMPORT_WHAT_CAN', 'Tu môžete importovať články z iných weblogov');
@define('IMPORT_SELECT', 'Vyberte program, z ktorého chcete importovať');
@define('MANAGE_STYLES', 'Spravovať štýly');
@define('SELECT_A_PLUGIN_TO_ADD', 'Vyberte doplnok, ktorý chcete nainštalovať');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Nižšie je zoznam nainštalovaných doplnkov');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Zrušiť');
@define('DELETE_SELECTED_COMMENTS', 'Zmazať vybrané komentáre');
@define('MODERATE_SELECTED_COMMENTS', 'Approve selected comments');
@define('FIND_MEDIA', 'Hľadať médiá');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Chyba: Starý názov súboru neexistuje!');
@define('ERROR_SOMETHING', 'Chyba: Niečo nie je v poriadku.');
@define('DIRECT_LINK', 'Priamy odkaz na tento článok');
@define('SELECT_TEMPLATE', 'Vyberte šablónu pre váš web');
@define('DATABASE_ERROR', 'chyba serendipity: nepodarilo sa spojiť s databázou - ukončené.');
@define('LIMIT_TO_NUMBER', 'Koľko článkov sa má zobraziť?');
@define('DIRECTORIES_AVAILABLE', 'Kliknutím na niektorý priečinok v zozname môžete vytvoriť jeho podpriečinok.');
@define('CATEGORY_INDEX', 'Nižšie je zoznam kategórií, ktoré môžete použiť vo Vašom článku');
@define('PAGE_BROWSE_PLUGINS', 'Strana %s z %s, spolu %s doplnkov');
@define('CHARSET_NATIVE', 'Národná');
@define('XMLRPC_NO_LONGER_BUNDLED', 'XML-RPC API Interface už nie je súčasťou Serendipity kvôli bezpečnostným problémom s touto API a nízkemu počtu jeho používateľov. Preto musíte nainštalovať doplnok XML-RPC, ak chcete XML-RPC API používať. URL, ktorá sa použije vo Vašej aplikácii sa nezmení - hneď po inštalácii doplnku môžete API používať.');
@define('AUTHORS_ALLOW_SELECT', 'Povoliť návštevníkom vybrať viac autorov naraz?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Ak je táto voľba zapnutá, bude vedľa každého autora v tomto doplnku bočnej lišty zobrazené okienko. Návštevníci môžu zaškrtnúť tieto okienka a bude im zobrazené články vyhovujúce tomuto výberu.');
@define('PREFERENCE_USE_JS', 'Zapnúť používanie advanced JS?');
@define('PREFERENCE_USE_JS_DESC', 'Ak je zapnuté, budú pre zlepšenie použiteľnosti aktivované oblasti s advanced JavaScript. Napr. v oblasti pre konfiguráciu doplnkov môžete pre reorganizáciu doplnkov použiť drag and drop (tiahnuť myšou).');
@define('PREFERENCE_USE_JS_WARNING', '(Táto stránka používa advanced JavaScripting. Ak máte problémy s funkčnosťou, zakážte prosím používanie advanced JS vo svojich osobných nastaveniach alebo zakážte javascript vo Vašom prehliadači.)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
@define('NOTIFICATION_CONFIRM_SUBMAIL_FAIL', 'Sorry, the confirmation of your subscription to new comments has failed.');
