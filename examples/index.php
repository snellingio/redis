<?php

include __DIR__ . '/../vendor/autoload.php';

$redis = new Snelling\Redis('localhost');
$redis->setConnection(['host' => '127.0.0.1']);
