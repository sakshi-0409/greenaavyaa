<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\adminController;
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
Route::get('/billing', [adminController::class,'billing']);
Route::get('/admin-dashboard', [adminController::class,'admin_dashboard']);
Route::get('/admin-profile', [adminController::class,'admin_profile']);
Route::get('/rtl', [adminController::class,'rtl']);
Route::get('/sign-in', [adminController::class,'sign_in']);
Route::get('/sign-up', [adminController::class,'sign_up']);
Route::get('/tables', [adminController::class,'tables']);
Route::get('/user-management', [adminController::class,'user_management']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
