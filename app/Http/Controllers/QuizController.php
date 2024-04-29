<?php

namespace App\Http\Controllers;

use App\Http\Resources\Quiz\MinifiedQuizResource;
use App\Http\Resources\Quiz\QuizResource;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index(): array
    {
        $quizzes = Quiz::get();

        return MinifiedQuizResource::collection($quizzes)->resolve();
    }

    public function show(Quiz $quiz): array
    {
        return QuizResource::make($quiz)->resolve();
    }
}
