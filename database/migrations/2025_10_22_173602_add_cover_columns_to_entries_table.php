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
        // El metodo table de Schema sirve para hacer un ALTER a una tabla
        Schema::table('entries', function (Blueprint $table) {
            //
            $table->string('cover')->nullable();
            $table->string('cover_description')->nullable();
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
            //
            $table->dropColumn(['cover', 'cover_description']);
        });
    }
};
