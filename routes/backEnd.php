<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\VideoController;



Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth:admin']], function () {

    Route::resource('image', PhotoController::class);
    Route::resource('video', VideoController::class);
    Route::resource('contact', ContactController::class);
    Route::get('update-message', [ContactController::class, 'updateMessage'])->name('updateMsg');


    // Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    // Route::resource('post', ArticleController::class);
    // Route::resource('category', CategoryController::class);


});


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard')->middleware(['admin.auth:admin']);