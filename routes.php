<?php

use App\Controllers\RequestController;
use App\Controllers\StoriesController;
use App\Controllers\WelcomeController;
use App\Router;

Router::get('/', WelcomeController::class);

Router::get('/requests', [RequestController::class, 'index']);
Router::get('/request', [RequestController::class, 'show']);

Router::get('/stories', [StoriesController::class, 'index']);