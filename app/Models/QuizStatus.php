<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'quiz_id',
        'is_finished'
    ];
}
