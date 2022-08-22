<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('addData', [CrudController::class, 'create'])->name('add.data');
Route::get('/', [CrudController::class, 'index'])->name('get.data');
Route::get('/openForm', [CrudController::class, 'openForm'])->name('open.form');
Route::get('editData/{id}', [CrudController::class, 'editData'])->name('edit.data');
Route::post('updateData/{id}', [CrudController::class, 'updateData'])->name('update.data');
Route::post('deleteData/{id}', [CrudController::class, 'deleteData'])->name('delete.data');
