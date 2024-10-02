<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "is about home";
});     

Route::get('/user/{id}/{slug}', function ($id, $slug) {
    return "hello user " . $id. " " . $slug;
});
