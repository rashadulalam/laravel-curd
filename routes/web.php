<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BasicCurdController;
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

Route::get('/', [BasicCurdController::class, 'onSelect']);

Route::get('/insert', function() {
    return view('insert');
});

Route::post('/data_insert', [BasicCurdController::class, 'onInsert']);

Route::get('/delete', [BasicCurdController::class, 'onDelete']);
Route::get('/update', [BasicCurdController::class, 'onUpdate']);




