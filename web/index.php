<?php

$app = require_once __DIR__.'/../app/app.php';

if ('test' == $app['env'])
    return $app;
else
    $app->run();

