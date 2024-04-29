<?php

use App\Http\Controllers\QuizController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('quizzes')->group( function () {
    Route::get('/', [QuizController::class, 'index']);
    Route::get('/{quiz}', [QuizController::class, 'show']);
});
