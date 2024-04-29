<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'time'
    ];

    public function quizStatuses(): HasMany
    {
        return $this->hasMany(QuizStatus::class);
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
