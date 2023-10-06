<?php

use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\WorkingoutController;
use App\Http\Controllers\ProfileController;
use App\Models\V1\Workouts;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('dashboard')->group(function () {
    Route::get('/workouts',[WorkingoutController::class,'index']);
    Route::get('/workouts/create',[WorkingoutController::class,'create']);
    Route::post('/workouts/store',[WorkingoutController::class,'store']);
    Route::get('/workouts/edit/{workouts}',[WorkingoutController::class,'edit']);
    Route::post('/workouts/update/{workouts}',[WorkingoutController::class,'update']);
    Route::delete('/workouts/delete/{id}',[WorkingoutController::class,'destroy']);
});


Route::prefix('dashboard')->group(function () {

// returns the home page with all posts
Route::get('/class', ClassController::class .'@index')->name('classes.index');
// returns the form for adding a post
Route::get('/class/create', ClassController::class . '@create')->name('classes.create');
// adds a post to the database
Route::post('/class/store', ClassController::class .'@store')->name('classes.store');
// returns a page that shows a full post
Route::get('/class/{post}', ClassController::class .'@show')->name('classes.show');
// returns the form for editing a post
Route::get('/class/{post}/edit', ClassController::class .'@edit')->name('classes.edit');
// updates a post
Route::put('/class/{post}', ClassController::class .'@update')->name('classes.update');
// deletes a post
Route::delete('/class/{post}', ClassController::class .'@destroy')->name('classes.destroy');

});

Route::get('/customer/search', [CustomerController::class,'search'])->name('customer.search');
Route::get('/customer', [CustomerController::class,'payment'])->name('customer.payment');

require __DIR__.'/auth.php';