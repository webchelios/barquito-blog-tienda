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
        Schema::create('users_have_books', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users','id');
            $table->unsignedTinyInteger('book_id');
            $table->foreign('book_id')->references('book_id')->on('books');

            $table->primary(['user_id','book_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_have_books');
    }
};
