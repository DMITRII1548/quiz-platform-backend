<?php

namespace App\Http\Resources\Quiz;

use App\Http\Resources\Question\QuestionResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuizResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'time' => $this->time,
            'point_of_correct_answer' => $this->point_of_correct_answer,
            'questions' => QuestionResource::collection($this->questions)->resolve()
        ];
    }
}
