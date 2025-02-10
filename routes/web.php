<?php
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ExperienceController;
use Illuminate\Support\Facades\Route;


Route::resource('professionals', ProfessionalController::class);
Route::resource('education', EducationController::class);
Route::resource('skills', SkillController::class);
Route::resource('experiences', ExperienceController::class);


Route::get('/', function () {
    return view('pages.home');
});
