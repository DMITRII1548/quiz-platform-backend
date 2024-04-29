<?php

use App\Enums\CorrectAnswerEnum;
use App\Models\Quiz;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->string('answer_1');
            $table->string('answer_2');
            $table->string('answer_3');
            $table->string('answer_4');
            $table->enum('correct_answer', [
                CorrectAnswerEnum::ANSWER_1,
                CorrectAnswerEnum::ANSWER_2,
                CorrectAnswerEnum::ANSWER_3,
                CorrectAnswerEnum::ANSWER_4,
            ]);
            $table->foreignIdFor(Quiz::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
