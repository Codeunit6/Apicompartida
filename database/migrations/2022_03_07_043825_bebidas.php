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
        Schema::create('tipovodka',function(Blueprint $table){
            $table->id();
            $table->string('idbebida');
            $table->string('nombre');
            $table->string('categoria');
            $table->string('tipo');
            $table->string('vaso');
            $table->longText('instruccion_pr')->nullable();
            $table->longText('instruccion_de')->nullable();
            $table->longText('instruccion_it')->nullable();
            $table->string('imagen');
            $table->string('ingrediente1')->nullable();
            $table->string('ingrediente2')->nullable();
            $table->string('ingrediente3')->nullable();
            $table->string('ingrediente4')->nullable();
            $table->string('ingrediente5')->nullable();
            $table->string('ingrediente6')->nullable();
            $table->string('ingrediente7')->nullable();
            $table->string('cantidad1')->nullable();
            $table->string('cantidad2')->nullable();
            $table->string('cantidad3')->nullable();
            $table->string('cantidad4')->nullable();
            $table->string('cantidad5')->nullable();
            $table->string('cantidad6')->nullable();
            $table->string('cantidad7')->nullable();
            $table->string('modificacion')->nullable();
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
        Schema::dropIfExists('tipovodka');
    }
};
