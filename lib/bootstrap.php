<?php

// Serendipity
// See LICENSE file for license information.

require_once __DIR__ . '/../vendor/autoload.php';

// TODO: REMOVE WHEN DONE DEVELOPING
$whoops_handler = new \Whoops\Handler\PrettyPageHandler();
$whoops_handler->addDataTableCallback('$serendipity', function () {
    global $serendipity;
    return $serendipity;
});
$whoops = new \Whoops\Run();
$whoops->pushHandler($whoops_handler);
$whoops->register();
