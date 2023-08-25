<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\leadController;
use App\Http\Controllers\brokersController;
use App\Http\Controllers\propertyController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\teamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;

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



Route::group(['middleware'=>'admin'],function(){

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
Route::get('/editbroker/{id}', [brokersController::class,'edit_broker'])->name('editbroker');
Route::post('/updatebroker/{id}', [brokersController::class,'update_broker'])->name('updatebroker');
Route::get('/deletebroker', [brokersController::class,'delete_broker'])->name('deletebroker');


Route::get('/contacts', [contactController::class,'contacts'])->name('contacts');
Route::get('/create-contact', [contactController::class,'create_contact'])->name('create-contact');
Route::post('/create-contact', [contactController::class,'createcontact'])->name('createcontact');
Route::get('/editcontact/{id}', [contactController::class,'edit_contact'])->name('editcontact');
Route::post('/update-contact/{id}', [contactController::class,'update_contact'])->name('updatecontact');
Route::get('/deletecontact', [contactController::class,'delete_contact'])->name('deletecontact');

Route::get('/team', [teamController::class,'team'])->name('team');
Route::get('/create-team', [teamController::class,'create_team'])->name('create-team');
Route::post('/create-team', [teamController::class,'createteam'])->name('createteam');
Route::get('/edit-team/{id}', [teamController::class,'editteam'])->name('editteam');
Route::post('/update-team/{id}', [teamController::class,'updateteam'])->name('updateteam');
Route::get('/deleteteam', [teamController::class,'deleteteam'])->name('deleteteam');

Route::get('/teams', [teamController::class,'teams'])->name('teams');
Route::get('/create-teamname', [teamController::class,'create_teamname'])->name('create-teamname');
Route::post('/create-teamname', [teamController::class,'create_team_name'])->name('create-team-name');
Route::get('/edit-teamname/{id}', [teamController::class,'editteam_name'])->name('editteam-name');
Route::post('/update-teamname/{id}', [teamController::class,'updateteam_name'])->name('update-teamname');
Route::get('/deleteteam-name', [teamController::class,'deleteteam_name'])->name('deleteteam-name');


});

Route::get('/dashboard', function () {
    return view('pages/dashboard');
})->name('home');

// Route::post('register',[RegisteredUserController::class,'store'])->name('register');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
