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
        Schema::create('entries_have_tags', function (Blueprint $table) {
            $table->foreignId('entry_id')->constrained('entries', 'entry_id');

            $table->unsignedTinyInteger('tag_id');
            $table->foreign('tag_id')->references('tag_id')->on('tags');

            // Definimos la PH como la combinacion de ambas FKs
            $table->primary(['entry_id', 'tag_id']);

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
        Schema::dropIfExists('entries_have_tags');
    }
};
