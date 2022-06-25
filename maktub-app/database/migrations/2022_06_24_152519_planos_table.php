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
        Schema::create('planos-table', function (Blueprint $table) {
            $table->id();
            $table->string('operadora');
            $table->string('nome');
            $table->integer('coparticipacao');
            $table->string('cobertura');
            $table->float('reembolso');
            $table->string('hospitais');
            $table->float('valor');
            $table->boolean('visivel');
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
        Schema::drop('planos-table');

    }
};
