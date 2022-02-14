<?php

// Serendipity
// See LICENSE file for license information.

namespace Serendipity;

use Serendipity\ConfigContainer;

class PageGenerator
{
    public function __construct()
    {
    }

    public function render()
    {
        $cfg = ConfigContainer::getInstance();
        include_once('serendipity_config.inc.php');
        include_once(S9Y_INCLUDE_PATH . 'include/plugin_api.inc.php');

        $uri = $_SERVER['REQUEST_URI'];  // need to define this again here, as index.php (2.1) no longer includes this file
        $uri_addData = array(
            'startpage' => false,
            'uriargs'   => implode('/', serendipity_getUriArguments($uri, true)),
            'view'      => $cfg->get('view'),
            'viewtype'  => $cfg->get('viewtype') ?? ''
        );

        if ((empty($uri_addData['uriargs']) || trim($uri_addData['uriargs']) == $cfg->get('indexFile')) && empty($cfg->get('GET')['subpage'])) {
            $uri_addData['startpage'] = true;
        }

        $plugindata = $cfg->getByRef('plugindata');
        $plugindata['smartyvars'] = $uri_addData; // Plugins can change this global variable
        \serendipity_plugin_api::hook_event('genpage', $uri, $uri_addData);
        serendipity_smarty_init();
        $smarty = $cfg->get('smarty');
        if (count($plugindata['smartyvars']) > 0) {
            $smarty->assign($plugindata['smartyvars']);
        }

        $leftSidebarElements  = \serendipity_plugin_api::count_plugins('left');
        $rightSidebarElements = \serendipity_plugin_api::count_plugins('right');
        $smarty->assignByRef('leftSidebarElements', $leftSidebarElements);
        $smarty->assignByRef('rightSidebarElements', $rightSidebarElements);

        switch ($cfg->get('GET')['action']) {
            // User wants to read the diary
            case 'read':
                if (isset($cfg->get('GET')['id'])) {
                    $entry = array(serendipity_fetchEntry('id', $cfg->get('GET')['id']));
                    if (!is_array($entry) || count($entry) < 1 || !is_array($entry[0])) {
                        unset($cfg->get('GET')['id']);
                        $entry = array(array());
                        $cfg->set('head_subtitle', '');
                        $smarty->assign('head_subtitle', $cfg->get('head_subtitle'));
                        $cfg->set('view', '404');
                        $cfg->set('content_message', URL_NOT_FOUND);
                        serendipity_header('HTTP/1.0 404 Not found');
                        serendipity_header('Status: 404 Not found');
                    }

                    serendipity_printEntries($entry, 1);
                } else {
                    serendipity_printEntries(serendipity_fetchEntries($cfg->get('range') ?? null, true, $cfg->get('fetchLimit')));
                }
                break;

            // User searches
            case 'search':
                $r = serendipity_searchEntries($cfg->get('GET')['searchTerm']);
                if (strlen($cfg->get('GET')['searchTerm']) <= 3) {
                    $smarty->assign(
                        array(
                            'content_message'       => SEARCH_TOO_SHORT,
                            'searchresult_tooShort' => true
                        )
                    );
                    break;
                }

                if (is_string($r) && $r !== true) {
                    $smarty->assign(
                        array(
                            'content_message'    => sprintf(SEARCH_ERROR, $cfg->get('dbPrefix'), $r),
                            'searchresult_error' => true
                        )
                    );
                    break;
                } elseif ($r === true) {
                    $smarty->assign(
                        array(
                            'content_message'        => sprintf(NO_ENTRIES_BLAHBLAH, '<span class="searchterm">' . $cfg->get('GET')['searchTerm'] . '</span>'),
                            'searchresult_noEntries' => true
                        )
                    );
                    break;
                }

                $smarty->assign(
                    array(
                        'content_message'      => sprintf(YOUR_SEARCH_RETURNED_BLAHBLAH, '<span class="searchterm">' . $cfg->get('GET')['searchTerm'] . '</span>', '<span class="searchresults">' . serendipity_getTotalEntries() . '</span>'),
                        'searchresult_results' => true,
                        'searchresult_fullentry' => $cfg->get('GET')['fullentry'] ?? null
                    )
                );

                serendipity_printEntries($r);
                break;

            // Show the comments
            case 'comments':
                serendipity_printCommentsByAuthor();
                // use 'content_message' for pagination?
                break;

            // Show the archive
            case 'archives':
                $cfg->set('head_subtitle', ARCHIVES);
                $smarty->assign('head_subtitle', $cfg->get('head_subtitle'));
                serendipity_printArchives();
                break;


            case 'custom':
                if ($cfg->get('smarty_custom_vars')) {
                    $smarty->assign($cfg->get('smarty_custom_vars'));
                }
                break;

            case 'empty':
                break;

            // Welcome screen or whatever
            default:
                serendipity_printEntries(serendipity_fetchEntries(null, true, $cfg->get('fetchLimit')));
                break;
        }

        if ($cfg->get('GET')['action'] != 'search' && !empty($cfg->get('content_message'))) {
            $smarty->assign('content_message', $cfg->get('content_message'));
        }

        if ($smarty->getTemplateVars('searchresult_tooShort') == null) {
            $smarty->assign(
                        array(
                            'searchresult_tooShort' => false
                        )
                    );
        }
        if ($smarty->getTemplateVars('searchresult_error') == null) {
            $smarty->assign(
                        array(
                            'searchresult_error' => false
                        )
                    );
        }
        if ($smarty->getTemplateVars('searchresult_noEntries') == null) {
            $smarty->assign(
                        array(
                            'searchresult_noEntries' => false
                        )
                    );
        }
        if ($smarty->getTemplateVars('searchresult_results') == null) {
            $smarty->assign(
                        array(
                            'searchresult_results' => false
                        )
                    );
        }
        if ($smarty->getTemplateVars('content_message') == null) {
            $smarty->assign(
                        array(
                            'content_message' => false
                        )
                    );    
        }
        if ($smarty->getTemplateVars('ARCHIVES') == null) {
            $smarty->assign(
                        array(
                            'ARCHIVES' => ''
                        )
                    );
        }
        if ($smarty->getTemplateVars('ENTRIES') == null) {
            $smarty->assign(
                        array(
                            'ENTRIES' => ''
                        )
                    );
        }

        serendipity_smarty_fetch('CONTENT', 'content.tpl');
        $smarty->assign('ENTRIES', '');
    }
}
