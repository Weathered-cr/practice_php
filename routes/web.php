<?php

use Src\Route;

Route::add('go', [Controller\Site::class, 'index']);
Route::add('hello', [Controller\Site::class, 'hello']);
Route::add('go/signup', [Controller\Site::class, 'signup']);
Route::add('go/login', [Controller\Site::class, 'login']);
Route::add('go/logout', [Controller\Site::class, 'logout']);
