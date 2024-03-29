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
    return view('welcome');
});


Route::get('/HelloLaravel', function () {
    $nev = "Bence";
    return view("hello", [
        'name' => $nev
    ]);
});

Route::get('/ArrayWriteOut', function () {
    $tomb = ["Lajos", "Béla", "Tibi"];
    return view("ArrayView", [
        "arr"=>$tomb
    ]);
});


Route::get('/post/{cim}', function ($cim) {
    $tomb = ["Lajos", "Béla", "Tibi"];
    return view("post", [
        "title"=>$tomb[$cim] ?? abort(404)
    ]);
});