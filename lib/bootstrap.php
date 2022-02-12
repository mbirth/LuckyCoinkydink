<?php

// Serendipity
// See LICENSE file for license information.

require_once __DIR__ . '/../vendor/autoload.php';

// TODO: REMOVE WHEN DONE DEVELOPING
$whoops = new \Whoops\Run();
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
$whoops->register();
