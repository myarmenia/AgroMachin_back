<?php

use App\Http\Controllers\Countingplaces\CountingPlacesController;
use App\Http\Controllers\Dictionary\DictionaryController;
use App\Http\Controllers\Languages\LanguageController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\User\PermissionController;
use App\Http\Controllers\User\RoleController;
use App\Http\Controllers\User\UserController;
// use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/', function () {
    return redirect('/login');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::resource('languages', LanguageController::class);
    Route::resource('dictionary', DictionaryController::class);

    Route::resource('roles', RoleController::class);
    Route::post('change-role-status/{id}/{status}', [RoleController::class, 'change_role_status'])->name('change_role_status');

    Route::resource('users', UserController::class);
    Route::resource('permissions', PermissionController::class);

    Route::resource('countingplaces',CountingPlacesController::class);

});
