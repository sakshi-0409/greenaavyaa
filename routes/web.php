<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\leadController;
use App\Http\Controllers\brokersController;
use App\Http\Controllers\propertyController;
use App\Http\Controllers\contactController;
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
Route::get('/page', function () {
    return view('welcome');
})->name('page');

Route::get('/', function () {
    return view('welcome');
})->name('profile');

Route::get('/billing', [adminController::class,'billing']);
Route::get('/home', [adminController::class,'admin_dashboard'])->name('home');
Route::get('/admin-profile', [adminController::class,'admin_profile'])->name('adminprofile');
Route::get('/rtl', [adminController::class,'rtl'])->name('rtl');
Route::get('/sign-in', [adminController::class,'sign_in'])->name('sign-in-static');
Route::get('/sign-up', [adminController::class,'sign_up'])->name('sign-up-static');



Route::get('/properties', [propertyController::class,'properties'])->name('properties');
Route::get('/createproperty', [propertyController::class,'createproperty'])->name('createproperty');
Route::post('/create-property', [propertyController::class,'create_property'])->name('create-property');
Route::get('/editproperty/{id}', [propertyController::class,'edit_property'])->name('edit-property');
Route::post('/update-property/{id}', [propertyController::class,'update_property'])->name('update-property');
Route::get('/deleteproperty', [propertyController::class,'delete_property'])->name('delete-property');


Route::get('/leads', [leadController::class,'leads'])->name('leads');
Route::get('/createlead', [leadController::class,'createlead'])->name('createlead');
Route::post('/create-lead', [leadController::class,'create_lead'])->name('create-lead');
Route::get('/editlead/{id}', [leadController::class,'edit_lead'])->name('edit-lead');
Route::post('/update-lead/{id}', [leadController::class,'update_lead'])->name('update-lead');
Route::get('/deletelead', [leadController::class,'delete_lead'])->name('delete-lead');


Route::get('/brokers', [brokersController::class,'brokers'])->name('brokers');
Route::get('/createbroker', [brokersController::class,'create_broker'])->name('create-broker');
Route::post('/createbroker', [brokersController::class,'createbroker'])->name('createbroker');
Route::get('/deletebroker', [brokersController::class,'delete_broker'])->name('deletebroker');


Route::get('/contacts', [contactController::class,'contacts'])->name('contacts');
Route::get('/create-contact', [contactController::class,'create_contact'])->name('create-contact');
Route::post('/create-contact', [contactController::class,'createcontact'])->name('createcontact');


Route::get('/user-profile', [adminController::class,'user_management'])->name('profile-static');
Route::get('/virtual-reality', [adminController::class,'user_management'])->name('virtual-reality');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
