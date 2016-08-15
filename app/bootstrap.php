<?php 

$loader = require_once __DIR__.'/../vendor/autoload.php';

$loader->add('UnitTest', __DIR__ . '/../src');

$loader->register();

return $loader;