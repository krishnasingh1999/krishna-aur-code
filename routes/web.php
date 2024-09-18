<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CenterRegistrationController;

Route::get("/", [AdminController::class,"index"])->name("index");
Route::get("/center", [AdminController::class,"center"])->name("center");
Route::get("/center-details", [AdminController::class,"centerDetails"])->name("centerDetails");
Route::get("/add-center", [CenterRegistrationController::class,"index"])->name("addCenter");
Route::post("/add-center", [CenterRegistrationController::class, "Addcenter"])->name("Addcenter");
Route::get("/center-panel/enrol-student", [AdminController::class,"enrolStudent"])->name("enrolStudent");
Route::get("/center-panel/login", [AdminController::class,"centerLogin"])->name("centerLogin");
Route::get("/center-panel/centerDashboard", [AdminController::class,"centerDashboard"])->name("centerDashboard");



