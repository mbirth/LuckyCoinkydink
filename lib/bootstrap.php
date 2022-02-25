<?php

// 幸運な偶然 - Lucky Coinkydink
// See LICENSE file for license information.

namespace LuckyCoin;

// FIXME: Remove when code makes sense again
error_reporting(E_ALL & ~E_NOTICE);

// Ensure vendor libraries exist
$autoload = __DIR__ . '/../vendor/autoload.php';
if (!is_file($autoload)) {
    die('Please run: <i>./composer.phar install</i>');
}

// Register the auto-loader.
$loader = require $autoload;

// TODO: REMOVE WHEN DONE DEVELOPING
$whoops_handler = new \Whoops\Handler\PrettyPageHandler();
$whoops_handler->addDataTableCallback('$serendipity', function () {
    global $serendipity;
    return $serendipity;
});
$whoops = new \Whoops\Run();
$whoops->pushHandler($whoops_handler);
$whoops->register();

// Set timezone to default, falls back to system if php.ini not set
date_default_timezone_set(@date_default_timezone_get());

// Set internal encoding.
@ini_set('default_charset', 'UTF-8');
mb_language('uni');
mb_internal_encoding('UTF-8');
