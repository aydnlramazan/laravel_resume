<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\EducationController;
use App\Http\Controllers\admin\ExperienceController;
use App\Http\Controllers\admin\SkillsController;
use App\Http\Controllers\ResumeController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

Route::get('/', [ResumeController::class, 'index']);
Route::get('/web', [ResumeController::class, 'index']);



Route::prefix('/admin')->group(function () {
    Route::resource('/about', AboutController::class);
    Route::resource('/experience', ExperienceController::class);
    Route::resource('/education', EducationController::class);
    Route::resource('/skills', SkillsController::class);
    Route::resource('/contact',ContactController::class);
});
