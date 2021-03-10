<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::view('/concept', 'website.pages.concept')->name('concept');
Route::view('/disater-relief', 'website.pages.disaster')->name('disater');
Route::view('/video', 'website.pages.video')->name('video');
Route::view('/grow-home', 'website.pages.grow-home')->name('grow-home');
Route::view('/home-for-americans', 'website.pages.american')->name('american');
Route::view('/how-to-buy', 'website.pages.buy')->name('buy');
Route::view('/blogs', 'website.pages.blogs')->name('blogs');
Route::get('/contact-us', function () {
    return view('website.pages.contact');
})->name('contact');

Route::post('/contact-us', [ContactController::class, 'store'])->name('message');
