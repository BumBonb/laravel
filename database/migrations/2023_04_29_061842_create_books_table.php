<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('genre_id')->nullable();
            $table->unsignedBigInteger('author_id');
            $table->timestamps();

            $table->index('genre_id', 'book_genre_idx');
            $table->foreign('genre_id', 'book_genre_fk')->on('genres')->references('id');

            $table->index('author_id', 'book_author_idx');
            $table->foreign('author_id', 'book_author_fk')->on('authors')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
