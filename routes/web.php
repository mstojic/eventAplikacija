<?php

use Illuminate\Support\Facades\Route;
use Admin\UserController;
use Organizer\OrganizerEventController;
use User\Profile;

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



Route::get('/', 'EventController@index');

Route::get('/category', function () {
    return view('category');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/listing', 'EventController@listing');

Route::prefix('organizer')->middleware(['auth', 'auth.isOrganizer', 'verified'])->name('organizer.')->group(function(){
    Route::resource('/events', OrganizerEventController::class);
});

//User rute
Route::prefix('user')->middleware(['auth', 'verified'])->name('user.')->group(function() {
    Route::get('profile', Profile::class)->name('profile');
});

//Admin rute
Route::prefix('admin')->middleware(['auth', 'auth.isAdmin', 'verified'])->name('admin.')->group(function(){
    Route::resource('/users', UserController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
