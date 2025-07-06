<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('tenants')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
