<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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
    return view('backend.layout.master');
});

Route::get('/users',[UserController::class,"getAll"]);

Route::prefix("authors")->group(function () {
    Route::get('/',[AuthorController::class,"index"])->name("authors.index");
    Route::get('/create', [AuthorController::class,"showFormCreate"])->name("authors.showFormCreate");
    Route::post('/create', [AuthorController::class,"create"])->name('authors.create')->middleware("checkName");
    Route::get('/{id}/detail', [AuthorController::class,"show"])->name("authors.show");
    Route::get('/{id}/destroy', [AuthorController::class,"destroy"])->name("authors.destroy");
});

Route::get('/students',[StudentController::class,"index"])->name('students.index');
Route::get('/students/create',[StudentController::class,"create"])->name('students.create');
Route::post('/students',[StudentController::class,"store"])->name('students.store');
Route::get('/students/{id}/detail',[StudentController::class,"show"])->name('students.show');
Route::get('/students/{id}/destroy',[StudentController::class,"destroy"])->name('students.destroy');
