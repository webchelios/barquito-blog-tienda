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
        // Crea estructura tabla en el schema de la database llamada 'entries'
        // Blueprint tiene los métodos
        Schema::create('entries', function (Blueprint $table) {
            $table->id('entry_id');
            $table->string('title', 100);
            $table->text('text');
            $table->string('author', 100);
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
        Schema::dropIfExists('entries');
    }
};
