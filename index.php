<?php

require_once __DIR__ . '/vendor/autoload.php';

use FactoryMethodInPhp\Sender\WebSender;
use FactoryMethodInPhp\Sender\APISender;

$web = new WebSender();

var_dump($web->sendResponse());

$api = new APISender();

var_dump($api->sendResponse());
