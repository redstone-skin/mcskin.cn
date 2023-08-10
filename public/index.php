<?php
require_once __DIR__ . '/../vendor/autoload.php';

$klein = new \Klein\Klein();

$klein->respond(function ($request,$response) {
    $config = require __DIR__ . '/../config.php';
    // redirect to real server
    $response->redirect($config['redirect_host'] . $request->uri());
});

$klein->dispatch();