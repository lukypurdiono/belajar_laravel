<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function(){
//     return 'Homepage';
// });

// Route::get('contact', function(){
//     return 'Contact Us';
// });

// Route::get('about', function(){
//     return 'About Me';
// });

// Route::view('contact','contact');
// Route::view('about','about');
// Route::view('user/create','user.premium.show');

Route::get('belajar', function(){
    $name = "<h1> Luky Purdiono </h1>";
    return view('belajar', ['name' => $name]);
});

Route::get('/', function(){
    return view('home');
});

Route::view('contact','contact');
Route::view('about','about');
Route::view('logout','logout');