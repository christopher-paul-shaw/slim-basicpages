<?php


$app->get('/', 'App\Controllers\HomeController:home');
$app->get('/about', 'App\Controllers\HomeController:about');
