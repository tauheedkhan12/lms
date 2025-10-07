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
     Schema::create('lessons', function (Blueprint $table) {
    $table->id('lesson_id');
    $table->unsignedBigInteger('module_id');
    $table->string('title');
    $table->string('video_path')->nullable();
    $table->text('notes')->nullable();
    $table->timestamps();

    $table->foreign('module_id')->references('module_id')->on('modules')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
