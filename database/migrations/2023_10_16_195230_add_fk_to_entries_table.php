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
        Schema::table('entries', function (Blueprint $table) {
            // Campo para la FK de categories
            $table->unsignedTinyInteger('category_id')->after('entry_id');

            // Defino la FK
            // El campo de la tabla | a que clave primaria referencia | y en que tabla esta esa clave primaria
            $table->foreign('category_id')->references('category_id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('entries', function (Blueprint $table) {
            Schema::dropIfExists('category_id');
        });
    }
};
