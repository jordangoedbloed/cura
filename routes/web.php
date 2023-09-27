<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('home');
});

Route::get('massages/{massage}', function ($slug) {

    $massages = file_get_contents(__DIR__ . "/../resources/massages{$slug}.html");

    return view('massages', [
        'massages' => $massages,
    ]);
});
