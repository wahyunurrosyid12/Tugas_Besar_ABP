<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ObatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('siswa', 'SiswaController@index');
Route::post('siswa', 'SiswaController@create');
Route::put('/siswa/{id}', 'SiswaController@update');
Route::delete('/siswa/{id}', 'SiswaController@delete');
// Route::get('page1', [dashboardController::class, 'dashboard1']);
// Route::get('page2', [dashboardController::class, 'dashboard2']);
// //CRUD
// Route::get('/obat', [ObatController::class, 'obat']);
// Route::get('/obat/tambah', [ObatController::class, 'tambah']);
// Route::get('/obat/edit/{id}', [ObatController::class, 'edit']);
// Route::delete('/obat/hapus/{id}', [ObatController::class, 'hapus']);

// Route::post('/obat/store', [ObatController::class, 'store']);
// Route::post('/obat/update', [ObatController::class, 'update']);