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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('slug')->nullable();
            $table->text('body')->nullable();
            // $table->json('image-body');
            $table->text('excerpt')->nullable();
            $table->string('views')->default(0)->nullable();
            $table->date('date')->nullable();

            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('users');
            $table->unsignedBigInteger('categoryId');
            $table->foreign('categoryId')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
