<?php

// Serendipity
// See LICENSE file for license information.

namespace Serendipity;

class PageGenerator
{
    protected $serendipity;

    public function __construct(&$serendipity)
    {
        $this->serendipity =& $serendipity;
    }

    public function render()
    {
        // TODO: REMOVE ME!
        $serendipity =& $this->serendipity;
        include_once('serendipity_config.inc.php');
        include_once(S9Y_INCLUDE_PATH . 'include/plugin_api.inc.php');

        $uri = $_SERVER['REQUEST_URI'];  // need to define this again here, as index.php (2.1) no longer includes this file
        $uri_addData = array(
            'startpage' => false,
            'uriargs'   => implode('/', serendipity_getUriArguments($uri, true)),
            'view'      => $this->serendipity['view'],
            'viewtype'  => isset($this->serendipity['viewtype']) ? $this->serendipity['viewtype'] : ''
        );

        if ((empty($uri_addData['uriargs']) || trim($uri_addData['uriargs']) == $this->serendipity['indexFile']) && empty($this->serendipity['GET']['subpage'])) {
            $uri_addData['startpage'] = true;
        }

        $this->serendipity['plugindata']['smartyvars'] = $uri_addData; // Plugins can change this global variable
        \serendipity_plugin_api::hook_event('genpage', $uri, $uri_addData);
        serendipity_smarty_init();
        if (count($this->serendipity['plugindata']['smartyvars']) > 0) {
            $this->serendipity['smarty']->assign($this->serendipity['plugindata']['smartyvars']);
        }

        $leftSidebarElements  = \serendipity_plugin_api::count_plugins('left');
        $rightSidebarElements = \serendipity_plugin_api::count_plugins('right');
        $this->serendipity['smarty']->assignByRef('leftSidebarElements', $leftSidebarElements);
        $this->serendipity['smarty']->assignByRef('rightSidebarElements', $rightSidebarElements);

        switch ($this->serendipity['GET']['action']) {
            // User wants to read the diary
            case 'read':
                if (isset($this->serendipity['GET']['id'])) {
                    $entry = array(serendipity_fetchEntry('id', $this->serendipity['GET']['id']));
                    if (!is_array($entry) || count($entry) < 1 || !is_array($entry[0])) {
                        unset($this->serendipity['GET']['id']);
                        $entry = array(array());
                        $this->serendipity['head_subtitle'] = '';
                        $this->serendipity['smarty']->assign('head_subtitle', $this->serendipity['head_subtitle']);
                        $this->serendipity['view'] = '404';
                        $this->serendipity['content_message'] = URL_NOT_FOUND;
                        serendipity_header('HTTP/1.0 404 Not found');
                        serendipity_header('Status: 404 Not found');
                    }

                    serendipity_printEntries($entry, 1);
                } else {
                    serendipity_printEntries(serendipity_fetchEntries($this->serendipity['range'] ?? null, true, $this->serendipity['fetchLimit']));
                }
                break;

            // User searches
            case 'search':
                $r = serendipity_searchEntries($this->serendipity['GET']['searchTerm']);
                if (strlen($this->serendipity['GET']['searchTerm']) <= 3) {
                    $this->serendipity['smarty']->assign(
                        array(
                            'content_message'       => SEARCH_TOO_SHORT,
                            'searchresult_tooShort' => true
                        )
                    );
                    break;
                }

                if (is_string($r) && $r !== true) {
                    $this->serendipity['smarty']->assign(
                        array(
                            'content_message'    => sprintf(SEARCH_ERROR, $this->serendipity['dbPrefix'], $r),
                            'searchresult_error' => true
                        )
                    );
                    break;
                } elseif ($r === true) {
                    $this->serendipity['smarty']->assign(
                        array(
                            'content_message'        => sprintf(NO_ENTRIES_BLAHBLAH, '<span class="searchterm">' . $this->serendipity['GET']['searchTerm'] . '</span>'),
                            'searchresult_noEntries' => true
                        )
                    );
                    break;
                }

                $this->serendipity['smarty']->assign(
                    array(
                        'content_message'      => sprintf(YOUR_SEARCH_RETURNED_BLAHBLAH, '<span class="searchterm">' . $this->serendipity['GET']['searchTerm'] . '</span>', '<span class="searchresults">' . serendipity_getTotalEntries() . '</span>'),
                        'searchresult_results' => true,
                        'searchresult_fullentry' => $this->serendipity['GET']['fullentry'] ?? null
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
                $this->serendipity['head_subtitle'] = ARCHIVES;
                $this->serendipity['smarty']->assign('head_subtitle', $this->serendipity['head_subtitle']);
                serendipity_printArchives();
                break;


            case 'custom':
                if ($this->serendipity['smarty_custom_vars']) {
                    $this->serendipity['smarty']->assign($this->serendipity['smarty_custom_vars']);
                }
                break;

            case 'empty':
                break;

            // Welcome screen or whatever
            default:
                serendipity_printEntries(serendipity_fetchEntries(null, true, $this->serendipity['fetchLimit']));
                break;
        }

        if ($this->serendipity['GET']['action'] != 'search' && !empty($this->serendipity['content_message'])) {
            $this->serendipity['smarty']->assign('content_message', $this->serendipity['content_message']);
        }

        if ($this->serendipity['smarty']->getTemplateVars('searchresult_tooShort') == null) {
            $this->serendipity['smarty']->assign(
                        array(
                            'searchresult_tooShort' => false
                        )
                    );
        }
        if ($this->serendipity['smarty']->getTemplateVars('searchresult_error') == null) {
            $this->serendipity['smarty']->assign(
                        array(
                            'searchresult_error' => false
                        )
                    );
        }
        if ($this->serendipity['smarty']->getTemplateVars('searchresult_noEntries') == null) {
            $this->serendipity['smarty']->assign(
                        array(
                            'searchresult_noEntries' => false
                        )
                    );
        }
        if ($this->serendipity['smarty']->getTemplateVars('searchresult_results') == null) {
            $this->serendipity['smarty']->assign(
                        array(
                            'searchresult_results' => false
                        )
                    );
        }
        if ($this->serendipity['smarty']->getTemplateVars('content_message') == null) {
            $this->serendipity['smarty']->assign(
                        array(
                            'content_message' => false
                        )
                    );    
        }
        if ($this->serendipity['smarty']->getTemplateVars('ARCHIVES') == null) {
            $this->serendipity['smarty']->assign(
                        array(
                            'ARCHIVES' => ''
                        )
                    );
        }
        if ($this->serendipity['smarty']->getTemplateVars('ENTRIES') == null) {
            $this->serendipity['smarty']->assign(
                        array(
                            'ENTRIES' => ''
                        )
                    );
        }

        serendipity_smarty_fetch('CONTENT', 'content.tpl');
        $this->serendipity['smarty']->assign('ENTRIES', '');
    }
}
