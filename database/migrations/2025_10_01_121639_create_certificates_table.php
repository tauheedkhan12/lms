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
    Schema::create('certificates', function (Blueprint $table) {
    $table->id('certificate_id');
    $table->unsignedBigInteger('enrollment_id');
    $table->string('pdf_path');
    $table->timestamps();

    $table->foreign('enrollment_id')->references('enrollment_id')->on('enrollments')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
