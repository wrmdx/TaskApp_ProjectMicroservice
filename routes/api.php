<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::middleware('verify.token')->group(function () {
    Route::get('/projects', [ProjectController::class, 'index']);
    Route::get('/projects/{project}', [ProjectController::class, 'show']);
    Route::post("/projects", [ProjectController::class, 'store']);
    Route::put("/projects/{project}", [ProjectController::class, 'update']);
    Route::delete("/projects/{project}", [ProjectController::class, 'destroy']);
});

