<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookBookshelfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_bookshelf', function (Blueprint $table) {
            $table->foreignId('book_id')->constrained('books');
            $table->foreignId('bookshelf_id')->constrained('bookshelves');

            $table->primary(['book_id', 'bookshelf_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_bookshelf');
    }
}
