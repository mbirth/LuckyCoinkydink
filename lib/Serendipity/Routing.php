<?php

// Serendipity
// See LICENSE file for license information.

namespace Serendipity;

class Routing
{
    public function __construct(&$serendipity)
    {
        $this->serendipity =& $serendipity;
    }

    public function serveIndex()
    {
        $this->serendipity['view'] = 'start';

        if ($this->serendipity['GET']['action'] == 'search') {
            $this->serendipity['view'] = 'search';
            $this->serendipity['uriArguments'] = array(PATH_SEARCH, urlencode($this->serendipity['GET']['searchTerm']));
        } else {
            $this->serendipity['uriArguments'][] = PATH_ARCHIVES;
        }

        // TODO: REMOVE - BACKWARDS COMPATIBILITY
        $serendipity =& $this->serendipity;
        include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
    }

    public function serve404()
    {
        $this->serendipity['view'] = '404';
        $this->serendipity['viewtype'] = '404_4';
        $this->serendipity['content_message'] = URL_NOT_FOUND;
        header('HTTP/1.0 404 Not found');
        header('Status: 404 Not found');
        // TODO: REMOVE - BACKWARDS COMPATIBILITY
        $serendipity =& $this->serendipity;
        include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
    }

    /* Attempt to locate hidden variables within the URI */
    protected function locateHiddenVariables($_args)
    {
        foreach ($_args as $k => $v) {
            if ($v == PATH_COMMENTS || $v == PATH_CATEGORIES || $v == PATH_ARCHIVE || $v == PATH_ARCHIVES) {
                continue;
            }

            if (strlen($v) <= 0) {
                continue;
            }

            if ($v[0] == 'P') { /* Page */
                $page = substr($v, 1);
                if (is_numeric($page)) {
                    $this->serendipity['GET']['page'] = $page;
                    unset($_args[$k]);
                    unset($this->serendipity['uriArguments'][$k]);
                }
            } elseif ($v[0] == 'A') { /* Author */
                $url_author = substr($v, 1);
                if (is_numeric($url_author)) {
                    $this->serendipity['GET']['viewAuthor'] = (int)$url_author;
                    unset($_args[$k]);
                }
            } elseif ($v == 'summary') { /* Summary */
                $this->serendipity['short_archives'] = true;
                if (!array_key_exists('head_subtitle', $this->serendipity)) {
                    $this->serendipity['head_subtitle'] = '';
                }
                $this->serendipity['head_subtitle'] .= SUMMARY . ' - ';
                unset($_args[$k]);
            } elseif ($v[0] == 'C') { /* category */
                $cat = substr($v, 1);
                if (is_numeric($cat)) {
                    $this->serendipity['GET']['category'] = $cat;
                    unset($_args[$k]);
                }
            }
        }
        return $_args;
    }

    public function serveComments()
    {
        $this->serendipity['view'] = 'comments';
        $uri = $_SERVER['REQUEST_URI'];
        $_args = serendipity_getUriArguments($uri, true); // Need to also match "." character
        $timedesc = array();

        /* Attempt to locate hidden variables within the URI */
        foreach ($_args as $k => $v) {
            if ($v == PATH_COMMENTS) {
                continue;
            }

            if (preg_match('@^(last|f|t|from|to)[\s_-]*([\d/ -]+)$@', strtolower(urldecode($v)), $m)) {
                if ($m[1] == 'last') {
                    $usetime = time() - ($m[2]*86400);
                    $this->serendipity['GET']['commentStartTime'] = $usetime;
                    $timedesc['start'] = serendipity_strftime(DATE_FORMAT_SHORT, $usetime);
                    continue;
                }

                $date = strtotime($m[2]);
                if ($date < 1) {
                    continue;
                }

                if ($m[1] == 'f' || $m[1] == 'from') {
                    $this->serendipity['GET']['commentStartTime'] = $date;
                    $timedesc['start'] = serendipity_strftime(DATE_FORMAT_SHORT, $date);
                } else {
                    $this->serendipity['GET']['commentEndTime'] = $date;
                    $timedesc['end'] = serendipity_strftime(DATE_FORMAT_SHORT, $date);
                }
            } elseif ($v == 'trackbacks' || $v == 'comments_and_trackbacks' || $v == 'comments') {
                $this->serendipity['GET']['commentMode'] = $v;
            } elseif (!empty($v)) {
                $this->serendipity['GET']['viewCommentAuthor'] .= urldecode($v);
            }
        }

        $this->serendipity['head_title'] = COMMENTS_FROM . ' ' . serendipity_specialchars($this->serendipity['GET']['viewCommentAuthor']);
        if (isset($timedesc['start']) && isset($timedesc['end'])) {
            $this->serendipity['head_title'] .= ' (' . $timedesc['start'] . ' - ' . $timedesc['end'] . ')';
        } elseif (isset($timedesc['start'])) {
            $this->serendipity['head_title'] .= ' (&gt; ' . $timedesc['start'] . ')';
        } elseif (isset($timedesc['end'])) {
            $this->serendipity['head_title'] .= ' (&lt; ' . $timedesc['end'] . ')';
        }
        $this->serendipity['head_subtitle'] = $this->serendipity['blogTitle'];
        $this->serendipity['GET']['action']     = 'comments';
        // TODO: REMOVE - BACKWARDS COMPATIBILITY
        $serendipity =& $this->serendipity;
        include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
    }

    public function serveJS($js_mode)
    {
        $this->serendipity['view'] = 'js';
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
            header('Cache-Control: no-cache');
        } else {
            header('Cache-Control:');
            header('Pragma:');
            header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + 3600));
        }

        header('Content-type: application/javascript; charset=' . LANG_CHARSET);

        $out = "";
        // FIXFIX: including genpage without any given action will generate the
        // default page which is unneccessary, set action to empty to only make
        // the fix below
        $this->serendipity['GET']['action'] = 'empty';

        // TODO: REMOVE - BACKWARDS COMPATIBILITY
        $serendipity =& $this->serendipity;
        include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');

        // HOTFIX: The staticpage plugin spews out a 404 error in the genpage hook,
        // because it assumes that all "normal" content pages could belong to it.
        // We need to override the header at this point (again), so that the files
        // will be properly parsed. Another (maybe better) idea would be to actually
        // not include genpage.inc.php at this point and init smarty differently,
        // or to make sure the "genpage" event hook is not called at this point.
        header('HTTP/1.0 200 OK');
        header('Status: 200 OK');

        if ($js_mode == "serendipity_admin.js") {
            \serendipity_plugin_api::hook_event('js_backend', $out);
        } else {
            \serendipity_plugin_api::hook_event('js', $out);
        }
        echo $out;
    }

    public function serveCSS($css_mode)
    {
        serendipity_smarty_init();
        $this->serendipity['view'] = 'css';
        include(S9Y_INCLUDE_PATH . 'serendipity.css.php');
    }

    public function serveSearch()
    {
        $this->serendipity['view'] = 'search';
        $_args = $this->serendipity['uriArguments'];

        /* Attempt to locate hidden variables within the URI */
        $search = array();
        foreach ($_args as $k => $v) {
            if ($v == PATH_SEARCH) {
                continue;
            }

            if ($v[0] == 'P') { /* Page */
                $page = substr($v, 1);
                if (is_numeric($page)) {
                    $this->serendipity['GET']['page'] = $page;
                    unset($_args[$k]);
                    unset($this->serendipity['uriArguments'][$k]);
                } else {
                    $search[] = $v;
                }
            } else {
                $search[] = $v;
            }
        }

        $this->serendipity['GET']['action']     = 'search';
        $this->serendipity['GET']['searchTerm'] = urldecode(serendipity_specialchars(strip_tags(implode(' ', $search))));
        // TODO: REMOVE - BACKWARDS COMPATIBILITY
        $serendipity =& $this->serendipity;
        include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
    }

    public function serveAuthorPage($matches)
    {
        $this->serendipity['view'] = 'authors';
        $this->serendipity['GET']['viewAuthor'] = $matches[1];

        $this->serendipity['GET']['action'] = 'read';

        $this->locateHiddenVariables($this->serendipity['uriArguments']);


        $matches[1] = serendipity_searchPermalink($this->serendipity['permalinkAuthorStructure'], implode('/', $this->serendipity['uriArguments']), $matches[1], 'author');
        $this->serendipity['GET']['viewAuthor'] = $matches[1];
        $this->serendipity['GET']['action'] = 'read';

        $uInfo = serendipity_fetchUsers($this->serendipity['GET']['viewAuthor']);

        if (!is_array($uInfo)) {
            $this->serendipity['view'] = '404';
            $this->serendipity['viewtype'] = '404_3';
            header('HTTP/1.0 404 Not found');
            header('Status: 404 Not found');
        } else {
            $this->serendipity['head_title']    = sprintf(ENTRIES_FOR, $uInfo[0]['realname']);
            $this->serendipity['head_subtitle'] = $this->serendipity['blogTitle'];
        }

        // TODO: REMOVE - BACKWARDS COMPATIBILITY
        $serendipity =& $this->serendipity;
        include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
    }

    public function serveCategory($matches)
    {
        $this->serendipity['view'] = 'categories';
        $uri = $_SERVER['REQUEST_URI'];

        $is_multicat = (isset($this->serendipity['POST']['isMultiCat']) && is_array($this->serendipity['POST']['multiCat']));
        if ($is_multicat) {
            $this->serendipity['GET']['category'] = serendipity_specialchars(implode(';', $this->serendipity['POST']['multiCat']));
            $this->serendipity['uriArguments'][]  = PATH_CATEGORIES;
            $this->serendipity['uriArguments'][]  = serendipity_db_escape_string($this->serendipity['GET']['category']) . '-multi';
        } elseif (preg_match('@/([0-9;]+)@', $uri, $multimatch)) {
            if (stristr($multimatch[1], ';')) {
                $is_multicat = true;
                $this->serendipity['GET']['category'] = $multimatch[1];
            }
        }

        $this->serendipity['GET']['action'] = 'read';

        $_args = $this->locateHiddenVariables($this->serendipity['uriArguments']);

        if (!$is_multicat) {
            $matches[1] = serendipity_searchPermalink($this->serendipity['permalinkCategoryStructure'], implode('/', $_args), $matches[1], 'category');
            $this->serendipity['GET']['category'] = $matches[1];
        }
        $cInfo = serendipity_fetchCategoryInfo($this->serendipity['GET']['category']);
        \serendipity_plugin_api::hook_event('multilingual_strip_langs',$cInfo, array('category_name'));

        if (!is_array($cInfo)) {
            $this->serendipity['view'] = '404';
            $this->serendipity['viewtype'] = '404_2';
            header('HTTP/1.0 404 Not found');
            header('Status: 404 Not found');
        } else {
            $this->serendipity['head_title'] = $cInfo['category_name'];
            if (isset($this->serendipity['GET']['page'])) {
                $this->serendipity['head_title'] .= " - " . serendipity_specialchars($this->serendipity['GET']['page']);
            }
            $this->serendipity['head_subtitle'] = $this->serendipity['blogTitle'];
        }

        // TODO: REMOVE - BACKWARDS COMPATIBILITY
        $serendipity =& $this->serendipity;
        include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
    }

    public function serveArchive()
    {
        $this->serendipity['view'] = 'archive';
        $this->serendipity['GET']['action'] = 'archives';

        $this->locateHiddenVariables($this->serendipity['uriArguments']);

        // TODO: REMOVE - BACKWARDS COMPATIBILITY
        $serendipity =& $this->serendipity;
        include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
    }

    public function gotoAdmin()
    {
        $base = $this->serendipity['baseURL'];
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
            $base = str_replace('http://', 'https://', $base);
        }
        header('Status: 302 Found');
        header("Location: {$base}serendipity_admin.php");
    }

    public function servePlugin($matches) {
        $this->serendipity['view'] = 'plugin';

        // TODO: REMOVE - BACKWARDS COMPATIBILITY
        $serendipity =& $this->serendipity;
        if (strpos($matches[2], 'admin/')  !== false) {
            include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
        }

        \serendipity_plugin_api::hook_event('external_plugin', $matches[2]);
    }

    public function serveFeed($matches)
    {
        $this->serendipity['view'] = 'feed';
        header('Content-Type: text/html; charset=utf-8');
        $uri = $_SERVER['REQUEST_URI']; 

        if (preg_match('@/(index|atom[0-9]*|rss|comments|trackbacks|comments_and_trackbacks|opml)\.(rss[0-9]?|rdf|rss|xml|atom)@', $uri, $vmatches)) {
            list($_GET['version'], $_GET['type']) = serendipity_discover_rss($vmatches[1], $vmatches[2]);
        }
        if (is_array($matches)) {
            if (preg_match('@(/?' . preg_quote(PATH_FEEDS, '@') . '/)(.+?)(?:\.rss)?$@i', $uri, $uriparts)) {
                if (strpos($uriparts[2], $this->serendipity['permalinkCategoriesPath']) === 0) {
                    $catid = serendipity_searchPermalink($this->serendipity['permalinkFeedCategoryStructure'], $uriparts[2], $matches[1], 'category');
                    if (is_numeric($catid) && $catid > 0) {
                        $_GET['category'] = $catid;
                    }
                } elseif (strpos($uriparts[2], $this->serendipity['permalinkAuthorsPath']) === 0) {
                    $authorid = serendipity_searchPermalink($this->serendipity['permalinkFeedAuthorStructure'], $uriparts[2], $matches[1], 'author');
                    if (is_numeric($authorid) && $authorid > 0) {
                        $_GET['viewAuthor'] = $authorid;
                    }
                }
            }
        }

        // TODO: REMOVE - BACKWARDS COMPATIBILITY
        $serendipity =& $this->serendipity;
        include(S9Y_INCLUDE_PATH . 'rss.php');
    }

    public function serveEntry($matches)
    {
        $this->serendipity['view'] = 'entry';
        $uri = $_SERVER['REQUEST_URI'];

        if (isset($this->serendipity['GET']['id'])) {
            $matches[1] = (int)$this->serendipity['GET']['id'];
        } elseif (isset($_GET['p'])) {
            $matches[1] = $_GET['p'];
        } else {
            $matches[1] = serendipity_searchPermalink($this->serendipity['permalinkStructure'], $uri, (!empty($matches[2]) ? $matches[2] : $matches[1]), 'entry');
        }
        serendipity_rememberComment();

        if (!empty($this->serendipity['POST']['submit']) && !isset($_REQUEST['serendipity']['csuccess'])) {
            $comment['url']       = $this->serendipity['POST']['url'];
            $comment['comment']   = (is_string($this->serendipity['POST']['comment']) ? trim($this->serendipity['POST']['comment']) : '');
            $comment['name']      = $this->serendipity['POST']['name'];
            $comment['email']     = $this->serendipity['POST']['email'];
            $comment['subscribe'] = $this->serendipity['POST']['subscribe'] ?? false;
            $comment['parent_id'] = $this->serendipity['POST']['replyTo'];

            if (!empty($comment['comment'])) {
                if (serendipity_saveComment($this->serendipity['POST']['entry_id'], $comment, 'NORMAL')) {
                    $sc_url = ($_SERVER['HTTPS'] == 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . (strstr($_SERVER['REQUEST_URI'], '?') ? '&' : '?') . 'serendipity[csuccess]=' . (isset($this->serendipity['csuccess']) ? $this->serendipity['csuccess'] : 'true');
                    if (serendipity_isResponseClean($sc_url)) {
                        header('Status: 302 Found');
                        header('Location: ' . $sc_url);
                    }
                    exit;
                } else {
                    $this->serendipity['messagestack']['comments'][] = COMMENT_NOT_ADDED;
                }
            } else {
                $this->serendipity['messagestack']['comments'][] = sprintf(EMPTY_COMMENT, '', '');
            }
        }

        $id = (int)$matches[1];
        if ($id === 0) {
            $id = false;
        }

        $this->serendipity['GET']['action'] = 'read';
        $this->serendipity['GET']['id']     = $id;

        $title = serendipity_db_query("SELECT title FROM {$this->serendipity['dbPrefix']}entries WHERE id=$id AND isdraft = 'false' " . (!serendipity_db_bool($this->serendipity['showFutureEntries']) ? " AND timestamp <= " . serendipity_db_time() : ''), true);
        if (is_array($title)) {
            $this->serendipity['head_title']    = serendipity_specialchars($title[0]);
            $this->serendipity['head_subtitle'] = serendipity_specialchars($this->serendipity['blogTitle']);
        } else {
            $this->serendipity['view'] = '404';
            $this->serendipity['viewtype'] = '404_1';
            header('HTTP/1.0 404 Not found');
            header('Status: 404 Not found');
        }

        // TODO: REMOVE - BACKWARDS COMPATIBILITY
        $serendipity =& $this->serendipity;
        include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
    }

    public function serveArchives()
    {
        $this->serendipity['view'] = 'archives';

        $_args = $this->locateHiddenVariables($this->serendipity['uriArguments']);
        /* We must always *assume* that Year, Month and Day are the first 3 arguments */
        $year = $_args[1] ?? null;
        $month = $_args[2] ?? null;
        $day = $_args[3] ?? null;
        //if ($year == "archives") {
        //    unset($year);
        //}

        $this->serendipity['GET']['action']     = 'read';
        $this->serendipity['GET']['hidefooter'] = true;

        if (!isset($year)) {
            $year = date('Y');
            $month = date('m');
            $day = date('j');
            $this->serendipity['GET']['action']     = null;
            $this->serendipity['GET']['hidefooter'] = null;
        }

        if (isset($year) && !is_numeric($year)) {
            $year = date('Y');
        }

        if (isset($month) && !is_numeric($month)) {
            $month = date('m');
        }

        if (isset($day) && !is_numeric($day)) {
            $day = date('d');
        }

        switch($this->serendipity['calendar']) {
            case 'gregorian':
            default:
                $gday = 1;

                if ($day) {
                    $ts = mktime(0, 0, 0, $month, $day, $year);
                    $te = mktime(23, 59, 59, $month, $day, $year);
                    $date = serendipity_formatTime(DATE_FORMAT_ENTRY, $ts, false);
                } else {
                    $ts = mktime(0, 0, 0, $month, $gday, $year);
                    if (!isset($gday2)) {
                        $gday2 = date('t', $ts);
                    }
                    $te = mktime(23, 59, 59, $month, $gday2, $year);
                    $date = serendipity_formatTime('%B %Y', $ts, false);
                }

                break;

            case 'persian-utf8':
                require_once S9Y_INCLUDE_PATH . 'include/functions_calendars.inc.php';
                $gday = 1;

                if ($day) {
                    $ts = persian_mktime(0, 0, 0, $month, $day, $year);
                    $te = persian_mktime(23, 59, 59, $month, $day, $year);
                    $date = serendipity_formatTime(DATE_FORMAT_ENTRY, $ts, false);
                } else {
                    $ts = persian_mktime(0, 0, 0, $month, $gday, $year);
                    if (!isset($gday2)) {
                        $gday2 = persian_date_utf('t', $ts);
                    }
                    $te = persian_mktime(23, 59, 59, $month, $gday2, $year);
                    $date = serendipity_formatTime('%B %Y', $ts, false);
                }

                list($year, $month, $day) = p2g ($year, $month, $day);
                break;
        }

        $this->serendipity['range'] = array($ts, $te);

        if ($this->serendipity['GET']['action'] == 'read') {
            if ($this->serendipity['GET']['category'] ?? false) {
                $cInfo = serendipity_fetchCategoryInfo($this->serendipity['GET']['category']);
                $this->serendipity['head_title'] = $cInfo['category_name'];
            }
            if (!isset($this->serendipity['head_subtitle'])) {
                $this->serendipity['head_subtitle'] = '';
            }
            $this->serendipity['head_subtitle'] .= sprintf(ENTRIES_FOR, $date);
        }

        // TODO: REMOVE - BACKWARDS COMPATIBILITY
        $serendipity =& $this->serendipity;
        include(S9Y_INCLUDE_PATH . 'include/genpage.inc.php');
    }
}
