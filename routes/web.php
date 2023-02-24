<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
    return view('Bakery');
});

Route::get('/menu', function () {
    return view('BakeryMenu');
});

Route::get('/location', function () {
    return view('BakeryLocation');
});

Route::get('/history', function () {
    return view('BakeryHistory');
});

Route::get('/contact', function () {
    return view('BakeryContact');
});
