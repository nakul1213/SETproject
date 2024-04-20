<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PersonalDetailsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/personal-details', function () {
    return view('personal_details');
})->name('personal-details.create');

Route::post('/personal-details', [PersonalDetailsController::class, 'store'])->name('personal-details.store');

Route::get('/hello', [PersonalDetailsController::class, 'hello']); // Removed the extra space after the class name

Route::post('/new-data', [PersonalDetailsController::class, 'newDataEndpoint']);


Route::prefix('admin')->group(function () {
    Route::get('test', [AdminController::class, 'test']); // Assuming 'test' is a method in AdminController
});
