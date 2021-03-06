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

Route::get('/', function () {
    return view('website.index');
});




require __DIR__ . '/frontEnd.php';
require __DIR__ . '/adminAuth.php';
require __DIR__ . '/backEnd.php';
























/* Route::view('/concept', 'website.pages.concept')->name('concept');
Route::view('/disater-relief', 'website.pages.disaster')->name('disater');
Route::view('/video', 'website.pages.video')->name('video');
Route::view('/grow-home', 'website.pages.grow-home')->name('grow-home');
Route::view('/home-for-americans', 'website.pages.american')->name('american');
Route::view('/how-to-buy', 'website.pages.buy')->name('buy');
Route::get('/contact-us', function () {
    return view('website.pages.contact');
})->name('contact'); */