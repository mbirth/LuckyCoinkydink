<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

#$serendipity = array();

/**
 * Create a snapshot of the current memory usage
 *
 * This functions makes use of static function properties to store the last used memory and the intermediate snapshots.
 * @access public
 * @param  string   A label for debugging output
 * @return boolean  Return whether the snapshot could be evaluated
 */
function memSnap($tshow = '') {
    static $avail    = null;
    static $show     = true;
    static $memUsage = 0;

    if (!$show) {
        return false;
    }

    if ($avail === false) {
        return true;
    } elseif ($avail === null) {
        if (function_exists('memory_get_usage')) {
            $avail = memory_get_usage();
        } else {
            $avail = false;
            return false;
        }
    }

    if ($memUsage === 0) {
        $memUsage = $avail;
    }

    $current = memory_get_usage();
    $memUsage = $current;
    return '[' . date('d.m.Y H:i') . '] ' . number_format($current - $memUsage, 2, ',', '.') . ' label "' . $tshow . '", totalling ' . number_format($current, 2, ',', '.') . '<br />' . "\n";
}

if (!isset($_REQUEST)) {
    $_REQUEST = &$HTTP_REQUEST_VARS;
}
if (!isset($_POST)) {
    $_POST = &$HTTP_POST_VARS;
}

if (!isset($_GET)) {
    $_GET = &$HTTP_GET_VARS;
}

if (!isset($_SESSION)) {
    $_SESSION = &$HTTP_SESSION_VARS;
}

if (!isset($_COOKIE)) {
    $_COOKIE = &$HTTP_COOKIE_VARS;
}

if (!isset($_SERVER)) {
    $_SERVER = &$HTTP_SERVER_VARS;
}

if (extension_loaded('filter') && function_exists('input_name_to_filter') && input_name_to_filter(ini_get('filter.default')) !== FILTER_UNSAFE_RAW) {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = input_get(INPUT_POST, $key, FILTER_UNSAFE_RAW);
    }
    foreach ($_GET as $key => $value) {
        $_GET[$key] = input_get(INPUT_GET, $key, FILTER_UNSAFE_RAW);
    }
    foreach ($_COOKIE as $key => $value) {
        $_COOKIE[$key] = input_get(INPUT_COOKIE, $key, FILTER_UNSAFE_RAW);
    }
    // NOT YET IMPLEMENTED IN PHP:
    /*
    foreach ($_SESSION as $key => $value) {
        $_SESSION[$key] = input_get(INPUT_SESSION, $key, FILTER_UNSAFE_RAW);
    }
    */
}

if (extension_loaded('filter') && function_exists('filter_id') && function_exists('filter_input') && filter_id(ini_get('filter.default')) !== FILTER_UNSAFE_RAW) {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = filter_input(INPUT_POST, $key, FILTER_UNSAFE_RAW);
    }
    foreach ($_GET as $key => $value) {
        $_GET[$key] = filter_input(INPUT_GET, $key, FILTER_UNSAFE_RAW);
    }
    foreach ($_COOKIE as $key => $value) {
        $_COOKIE[$key] = filter_input(INPUT_COOKIE, $key, FILTER_UNSAFE_RAW);
    }

    // NOT YET IMPLEMENTED IN PHP:
    /*
    foreach ($_SESSION as $key => $value) {
        $_SESSION[$key] = filter_input(INPUT_SESSION, $key, FILTER_UNSAFE_RAW);
    }
    */
}

// Merge get and post into the serendipity array
// It is vital that also an empty array is mapped as a reference
// because the s9y core actually sets new array key values sometimes in $_GET and
// sometimes in $serendipity['GET'] (and POST/COOKIE).
// TODO: This is being worked on currently to be unified see #650
if (!array_key_exists('serendipity', $_GET) || !is_array($_GET['serendipity'])) {
    $_GET['serendipity'] = array();
}

$serendipity['GET']    = &$_GET['serendipity'];

if (!array_key_exists('serendipity', $_POST) || !is_array($_POST['serendipity'])) {
    $_POST['serendipity'] = array();
}

$serendipity['POST']   = &$_POST['serendipity'];

if (!array_key_exists('serendipity', $_COOKIE) || !is_array($_COOKIE['serendipity'])) {
    $_COOKIE['serendipity'] = array();
}

$serendipity['COOKIE'] = &$_COOKIE['serendipity'];

// Attempt to fix IIS compatibility
if (empty($_SERVER['REQUEST_URI'])) {
    $_SERVER['REQUEST_URI'] = $_SERVER['SCRIPT_NAME'] . '?' . (!empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '');
}

/**
 * Translate values coming from the Database into native PHP variables to detect boolean values.
 *
 * @access public
 * @param   string      input value
 * @return  boolean     boolean output value
 */
function serendipity_get_bool($item) {
    static $translation = array('true'  => true,
                                'false' => false);

    if (isset($translation[$item])) {
        return $translation[$item];
    } else {
        return $item;
    }
}

/**
 * Detect the language of the User Agent/Visitor
 *
 * This function needs to be included at this point so that it is globally available, also
 * during installation.
 *
 * @access public
 * @param   boolean     Toggle whether to include the language that has been autodetected.
 * @return  string      Return the detected language name
 */
function serendipity_detectLang($use_include = false) {
    global $serendipity;

    $supported_languages = array_keys($serendipity['languages']);
    $possible_languages = explode(',', (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : ''));
    if (is_array($possible_languages)) {
        foreach($possible_languages as $index => $lang) {
            $preferred_language = strtolower(preg_replace('@^([^\-_;]*)_?.*$@', '\1', $lang));
            if (in_array($preferred_language, $supported_languages)) {
                if ($use_include) {
                    @include_once(S9Y_INCLUDE_PATH . 'lang/UTF-8/serendipity_lang_' . $preferred_language . '.inc.php');
                    //$serendipity['autolang'] = $preferred_language; -> according to the documentation, it should remain on 'en'
                }
                return $preferred_language;
            } // endif
        } // endforeach
    } // endif

    // negotiation failed
    return null;
}

/**
 * Get the current serendipity version, minus the "-alpha", "-beta" or whatever tags
 *
 * @access public
 * @param  string   Serendipity version
 * @return string   Serendipity version, stripped of unneeded parts
 */
function serendipity_getCoreVersion($version) {
    return preg_replace('@^([0-9\.]+).*$@', '\1', $version);
}

/**
 * Make Serendipity emit an error message and terminate the script
 *
 * @access public
 * @param   string  HTML code to die with
 * @return null
 */
function serendipity_die($html) {
    die(
'<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body><div class="msg_notice">' . $html . '</div><style>.msg_notice {
    display: block;
    margin: 1.5em 0;
    padding: .5em;
    background: #f2dede;
    border: 1px solid #e4b9b9;
    color: #b94a48;
}</style></body>
</html>');
}

/*
 *  Some defaults for our config vars.
 *  They are likely to be overwritten later in the code
 */
$serendipity['templatePath'] = 'templates/';
if (!isset($serendipity['serendipityPath'])) {
    $serendipity['serendipityPath'] = (defined('S9Y_INCLUDE_PATH') ? S9Y_INCLUDE_PATH : './');
}

$serendipity['indexFile'] = 'index.php';

/**
 * In PHP 5.4, the default encoding of htmlspecialchar changed to UTF-8 and it will emit empty strings when given
 * native encoded strings containing umlauts. This wrapper should to be used in the core until PHP 5.6 fixes the bug.
 */
function serendipity_specialchars($string, $flags = null, $encoding = 'UTF-8', $double_encode = true) {
    if ($flags == null) {
        if (defined('ENT_HTML401')) {
            // Added with PHP 5.4.x
            $flags = ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE;
        } else {
            // For PHP < 5.4 compatibility
            $flags = ENT_COMPAT;
        }
    }

    return htmlspecialchars($string, $flags, $encoding, $double_encode);
}

/**
 * see serendipity_specialchars
 */
function serendipity_entities($string, $flags = null, $encoding = 'UTF-8', $double_encode = true) {
    if ($flags == null) {
        if (defined('ENT_HTML401')) {
            // Added with PHP 5.4.x
            $flags = ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE;
        } else {
            // For PHP < 5.4 compatibility
            $flags = ENT_COMPAT;
        }
    }
    return htmlentities($string, $flags, $encoding, $double_encode);
}

/**
 * serendipity_specialchars
 */
function serendipity_entity_decode($string, $flags = null, $encoding = 'UTF-8') {
    if ($flags == null) {
        # NOTE: ENT_SUBSTITUTE does not exist for this function, and the documentation does not specify that it will
        # ever echo empty strings on charset errors
        if (defined('ENT_HTML401')) {
            // Added with PHP 5.4.x
            $flags = ENT_COMPAT | ENT_HTML401;
        } else {
            // For PHP < 5.4 compatibility
            $flags = ENT_COMPAT;
        }
    }
    return html_entity_decode($string, $flags, $encoding);
}

/* vim: set sts=4 ts=4 expandtab : */
