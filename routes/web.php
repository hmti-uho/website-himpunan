<?php

use App\Http\Controllers\AchievementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/achievements", [AchievementController::class, "index"])->name("achievements.index");

Route::get("/achievements/{id}", [AchievementController::class, "show"])->name("achievements.show");
