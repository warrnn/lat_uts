<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index']);
Route::get('/login', [MainController::class, 'login'])->name('admin.login');
Route::get('/admin/index', [MainController::class, 'admin_index'])->name('admin.index');

Route::post('/admin/entry', [AdminController::class, 'entryResi'])->name('admin.entry');
Route::post('/admin/delete/{id}', [AdminController::class, 'deleteResi'])->name('admin.delete');