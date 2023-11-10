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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_compra')->nullable();
            $table->integer("cantidad");
            $table->unsignedBigInteger("id_producto")->comment("ID del producto");
            $table->foreign("id_producto")->references("id")->on("productos");
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
        Schema::dropIfExists('compras');
    }
};
