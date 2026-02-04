<?php

use App\Controllers\AboutController;
use App\Controllers\CatalogController;
use App\Controllers\RequestController;
use App\Controllers\StoriesController;
use App\Controllers\WelcomeController;
use App\Router;

Router::get('/', WelcomeController::class);

Router::get('/requests', [RequestController::class, 'index']);
Router::get('/request', [RequestController::class, 'show']);

Router::get('/stories', [StoriesController::class, 'index']);
Router::get('/story', [StoriesController::class, 'show']);

Router::get('/about', AboutController::class);

Router::get('/catalog', [CatalogController::class, 'index']);
Router::get('/catalog/single', [CatalogController::class, 'show']);