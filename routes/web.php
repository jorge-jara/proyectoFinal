<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

// Define una constante para la ruta común
const COURSE_ROUTE = '/courses/{id}';

// 1. Index
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');

// 2. Create
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');

// 3. Store
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');

// 4. Show
Route::get(COURSE_ROUTE, [CourseController::class, 'show'])->name('courses.show');

// 5. Edit
Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');

// 6. Update
Route::put(COURSE_ROUTE, [CourseController::class, 'update'])->name('courses.update');

// 7. Destroy
Route::delete(COURSE_ROUTE, [CourseController::class, 'destroy'])->name('courses.destroy');


