<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome');
});
Route::get('/about', function () {
    return Inertia::render('About');
});
// Route::inertia('/contact', 'Contact');


Route::get('/contact', [ContactController::class, 'index']);

Route::get('/contact/create', [ContactController::class, 'create']);
Route::post('/contact/store', [ContactController::class, 'store']);

Route::get('/contact/{id}/edit', [ContactController::class, 'edit']);
Route::post('/contact/{id}/update', [ContactController::class, 'update']);
