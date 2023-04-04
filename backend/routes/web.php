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

Route::get('/test/{test}', function ($test) {
    cache()->remember('test.post', 3600, function($test) {
        var_dump($test);
        return 'hello ' . $test;
    });
Route::get('/test', function ($test) {
        return 'test';
}   ); 
    
});
