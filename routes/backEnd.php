<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\VideoController;



Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth:admin']], function () {

    Route::resource('image', PhotoController::class);
    Route::resource('video', VideoController::class);
    Route::resource('contact', ContactController::class);
    Route::get('our-concept-text',  [\App\Http\Controllers\Admin\HomeController::class, 'ourConcept']);
    Route::get('disaster-relief-text',  [\App\Http\Controllers\Admin\HomeController::class, 'disasterText']);
    Route::get('grow-home-text',  [\App\Http\Controllers\Admin\HomeController::class, 'growHomeText']);
    Route::get('home-for-american-text',  [\App\Http\Controllers\Admin\HomeController::class, 'homeForAmerican']);
    Route::get('how-to-buy-text',  [\App\Http\Controllers\Admin\HomeController::class, 'howToBuy']);
    Route::get('blogs',  [\App\Http\Controllers\Admin\HomeController::class, 'blogs']);
    Route::get('create-blog',  [\App\Http\Controllers\Admin\HomeController::class, 'createBlog']);
    Route::get('edit-blog/{id}',  [\App\Http\Controllers\Admin\HomeController::class, 'editBlog']);
    Route::post('update-text',  [\App\Http\Controllers\Admin\HomeController::class, 'updateText']);
    Route::post('blog-save',  [\App\Http\Controllers\Admin\HomeController::class, 'blogSave']);
    Route::post('delete-blog/{id}',  [\App\Http\Controllers\Admin\HomeController::class, 'deleteBlog']);
    Route::post('update-blog',  [\App\Http\Controllers\Admin\HomeController::class, 'updateBlog']);
    Route::post('update-message', [ContactController::class, 'updateMessage'])->name('updateMsg');


    // Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    // Route::resource('post', ArticleController::class);
    // Route::resource('category', CategoryController::class);


});


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard')->middleware(['admin.auth:admin']);
