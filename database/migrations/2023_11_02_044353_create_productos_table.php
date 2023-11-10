<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre")->comment("Nombre del producto");
            $table->integer("cantidad")->comment("Nombre de la cantidad");
            $table->integer("precio")->comment("Precio del producto");
            $table->string("genero")->comment("Genero de prenda");
            $table->string("imagen")->comment("Imagen del producto");
            $table->unsignedBigInteger("id_categoria")->comment("ID de la categoria");
            $table->foreign("id_categoria")->references("id")->on("categorias");
            $table->unsignedBigInteger("id_user")->comment("ID del vendedor");
            $table->foreign("id_user")->references("id")->on("users");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
