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
        Schema::create('camisa_pers', function (Blueprint $table) {
            $table->id();
            $table->integer("precio")->comment("Precio del producto");
            $table->string("imagen")->comment("Imagen del producto");
            $table->unsignedBigInteger("id_talla")->comment("ID de la talla");
            $table->foreign("id_talla")->references("id")->on("tallas");
            $table->unsignedBigInteger("id_color")->comment("ID del color");
            $table->foreign("id_color")->references("id")->on("colors");
            $table->unsignedBigInteger("id_user")->comment("ID del comprador");
            $table->foreign("id_user")->references("id")->on("users");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camisa_pers');
    }
};
