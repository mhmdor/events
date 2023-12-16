<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

##Category

Route::any('/Create/Category', [App\Http\Controllers\CategoryController::class, 'createCategory'])->name('createCategory');

Route::get('/Category', [App\Http\Controllers\CategoryController::class, 'getCategory'])->name('getCategory');

Route::get('/Edit/Category/{id}', [App\Http\Controllers\CategoryController::class, 'editCategory'])->name('editCategory');

Route::post('/Update/Category', [App\Http\Controllers\CategoryController::class, 'updateCategory'])->name('updateCategory');

Route::post('/delete/Category', [App\Http\Controllers\CategoryController::class, 'deleteCategory'])->name('deleteCategory');

##Nickname

Route::any('/Create/Nickname', [App\Http\Controllers\NicknameController::class, 'createNickname'])->name('createNickname');

Route::get('/Nickname', [App\Http\Controllers\NicknameController::class, 'getNickname'])->name('getNickname');

Route::get('/Edit/Nickname/{id}', [App\Http\Controllers\NicknameController::class, 'editNickname'])->name('editNickname');

Route::post('/Update/Nickname', [App\Http\Controllers\NicknameController::class, 'updateNickname'])->name('updateNickname');

Route::post('/delete/Nickname', [App\Http\Controllers\NicknameController::class, 'deleteNickname'])->name('deleteNickname');


##Sarname

Route::any('/Create/Sarname', [App\Http\Controllers\SarnameController::class, 'createSarname'])->name('createSarname');

Route::get('/Sarname', [App\Http\Controllers\SarnameController::class, 'getSarname'])->name('getSarname');

Route::get('/Edit/Sarname/{id}', [App\Http\Controllers\SarnameController::class, 'editSarname'])->name('editSarname');

Route::post('/Update/Sarname', [App\Http\Controllers\SarnameController::class, 'updateSarname'])->name('updateSarname');

Route::post('/delete/Sarname', [App\Http\Controllers\SarnameController::class, 'deleteSarname'])->name('deleteSarname');


##Place

Route::any('/Create/Place', [App\Http\Controllers\PlaceController::class, 'createPlace'])->name('createPlace');

Route::get('/Place', [App\Http\Controllers\PlaceController::class, 'getPlace'])->name('getPlace');

Route::get('/Edit/Place/{id}', [App\Http\Controllers\PlaceController::class, 'editPlace'])->name('editPlace');

Route::post('/Update/Place', [App\Http\Controllers\PlaceController::class, 'updatePlace'])->name('updatePlace');

Route::post('/delete/Place', [App\Http\Controllers\PlaceController::class, 'deletePlace'])->name('deletePlace');


##Event

Route::any('/Create/Event', [App\Http\Controllers\EventController::class, 'createEvent'])->name('createEvent');

Route::get('/Event', [App\Http\Controllers\EventController::class, 'getEvent'])->name('getEvent');

Route::get('/Edit/Event/{id}', [App\Http\Controllers\EventController::class, 'editEvent'])->name('editEvent');

Route::post('/Update/Event', [App\Http\Controllers\EventController::class, 'updateEvent'])->name('updateEvent');

Route::post('/delete/Event', [App\Http\Controllers\EventController::class, 'deleteEvent'])->name('deleteEvent');

##Invitation

Route::any('/Create/Invitation', [App\Http\Controllers\InvitationController::class, 'createInvitation'])->name('createInvitation');

Route::get('/Invitation', [App\Http\Controllers\InvitationController::class, 'getInvitation'])->name('getInvitation');

Route::get('/Edit/Invitation/{id}', [App\Http\Controllers\InvitationController::class, 'editInvitation'])->name('editInvitation');

Route::post('/Update/Invitation', [App\Http\Controllers\InvitationController::class, 'updateInvitation'])->name('updateInvitation');

Route::post('/delete/Invitation', [App\Http\Controllers\InvitationController::class, 'deleteInvitation'])->name('deleteInvitation');

