<?php

use Illuminate\Support\Facades\Route;

Route::get('/product/{id}', [Controller::class, 'function'])->name('example');
