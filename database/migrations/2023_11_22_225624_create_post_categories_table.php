<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Trong tệp migration
    public function up()
    {
        Schema::create('post_categories', function (Blueprint $table) {

            $table->unsignedBigInteger('post_id')->nullable(); // Cho phép giá trị NULL
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('post_id')->references('post_id')->on('posts');
            $table->foreign('category_id')->references('category_id')->on('categories');
        });
    }




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_categories');
    }
};
