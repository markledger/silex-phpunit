<?php

require_once __DIR__.'/bootstrap.php';

use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();

// Detect environment (default: prod) by checking for the existence of $app_env
if (isset($app_env) && in_array($app_env, array('prod','dev','test')))
    $app['env'] = $app_env;
else
    $app['env'] = 'prod';


$app['debug'] = true;


$app->get('/', function() {
    return new Response('Welcome to my new Silex app');
});





return $app;
