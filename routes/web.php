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

Auth::routes(['register' => false]);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\Admin\IndexController::class, 'index'])->name('dashboard');
Route::get('/', function () {
    return redirect('dashboard');
});
