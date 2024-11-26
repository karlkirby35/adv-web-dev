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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            //if book is deleted the review will be deleted too
            $table->foreignID('series_id')->constrained()->onDelete('cascade');
            //if the users deleted so is the reviews
            $table->foreignID('user_id')->constrained()->onDelete('cascade');
            $table->integer('rating')->unsigned()->default(1); //1-5 Rating
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
