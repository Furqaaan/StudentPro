<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\MarkController;
use Illuminate\Support\Facades\Route;

Route::get("/",[StudentController::class,"viewStudents"])->name("viewStudents");
Route::get("/add-student",[StudentController::class,"addStudent"])->name("addStudent");
Route::post("/add-student",[StudentController::class,"storeStudent"])->name("storeStudent");
Route::get("/edit-student/{id}",[StudentController::class,"editStudent"])->name("editStudent");
Route::post("/update-student/{id}",[StudentController::class,"updateStudent"])->name("updateStudent");
Route::post("/delete-student",[StudentController::class,"deleteStudent"])->name("deleteStudent");

Route::get("/add-marks",[MarkController::class,"addMarks"])->name("addMarks");
Route::post("/store-marks",[MarkController::class,"storeMarks"])->name("storeMarks");
Route::get("/view-marks",[MarkController::class,"viewMarks"])->name("viewMarks");
Route::get("/edit-mark/{id}",[MarkController::class,"editMark"])->name("editMark");
Route::post("/update-mark/{id}",[MarkController::class,"updateMark"])->name("updateMark");
Route::post("/delete-mark",[MarkController::class,"deleteMark"])->name("deleteMark");
