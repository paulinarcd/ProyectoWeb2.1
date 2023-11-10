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
        Schema::create('producto__color_tallas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_producto")->comment("ID del producto");
            $table->foreign("id_producto")->references("id")->on("productos");
            $table->unsignedBigInteger("id_talla")->comment("ID de la talla");
            $table->foreign("id_talla")->references("id")->on("tallas");
            $table->unsignedBigInteger("id_color")->comment("ID del color");
            $table->foreign("id_color")->references("id")->on("colors");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto__color_tallas');
    }
};
