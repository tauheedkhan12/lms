<?php

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
    $table->id('question_id');
    $table->unsignedBigInteger('quiz_id');
    $table->text('question');
    $table->json('options');
    $table->string('correct_answer');
    $table->timestamps();

    $table->foreign('quiz_id')->references('quiz_id')->on('quizzes')->onDelete('cascade');
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
