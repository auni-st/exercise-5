<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MahasiswaController;

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
    return to_route("mahasiswas.index");
});

//route mahasiswas
Route::get("/mahasiswas", [MahasiswaController::class, "index"])->name("mahasiswas.index");
Route::get("/mahasiswas/create", [MahasiswaController::class, "create"])->name("mahasiswas.create");
Route::post("/mahasiswas/store", [MahasiswaController::class, "store"])->name("mahasiswas.store");
Route::get("/mahasiswas/edit/{id}", [MahasiswaController::class, "edit"])->name("mahasiswas.edit");
Route::post("/mahasiswas/update/{id}", [MahasiswaController::class, "update"])->name("mahasiswas.update");
Route::delete("/mahasiswas/destroy/{id}", [MahasiswaController::class, "destroy"])->name("mahasiswas.destroy");

//route jurusans
Route::get("/jurusans", [JurusanController::class, "index"])->name("jurusans.index");
Route::get("/jurusans/create", [JurusanController::class, "create"])->name("jurusans.create");
Route::post("/jurusans/store", [JurusanController::class, "store"])->name("jurusans.store");
Route::get("/jurusans/edit/{id}", [JurusanController::class, "edit"])->name("jurusans.edit");
Route::post("/jurusans/update/{id}", [JurusanController::class, "update"])->name("jurusans.update");
Route::delete("/jurusans/destroy/{id}", [JurusanController::class, "destroy"])->name("jurusans.destroy");

Route::get("/template", function(){
    return view("mahasiswas.index");
});