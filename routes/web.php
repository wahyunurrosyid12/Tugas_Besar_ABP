<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ObatController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('page1', [dashboardController::class, 'dashboard1']);
Route::get('page2', [dashboardController::class, 'dashboard2']);
//CRUD
Route::get('/obat', [ObatController::class, 'obat']);
Route::get('/obat/tambah', [ObatController::class, 'tambah']);
Route::get('/obat/edit/{id}', [ObatController::class, 'edit']);
Route::get('/obat/hapus/{id}', [ObatController::class, 'hapus']);

Route::post('/obat/store', [ObatController::class, 'store']);
Route::post('/obat/update', [ObatController::class, 'update']);
