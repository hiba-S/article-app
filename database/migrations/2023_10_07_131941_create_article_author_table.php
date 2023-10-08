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
        Schema::create('article_author', function (Blueprint $table) {
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('article_id');
            
            $table->foreign('author_id')
                ->references('id')
                ->on('authors')
                ->onDelete('cascade');
            $table->foreign('article_id')
                ->references('id')
                ->on('articles')
                ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_author');
    }
};
