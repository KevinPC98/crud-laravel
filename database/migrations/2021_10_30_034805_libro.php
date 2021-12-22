<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Libro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create("libros",function(Blueprint $table){
        $table->engine="InnoDB"; //permite borrar en cascada
        $table->bigIncrements("id");
        $table->bigInteger("categoria_id")->unsigned();//datos externos
        $table->string("nombre");
        $table->timestamps();
        $table->foreign("categoria_id")->references("id")->on("categorias")->onDelete("cascade");
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
