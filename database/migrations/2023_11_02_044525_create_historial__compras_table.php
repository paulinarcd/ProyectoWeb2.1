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
        Schema::create('historial__compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_compra")->comment("ID de la compra");
            $table->foreign("id_compra")->references("id")->on("compras");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial__compras');
    }
};
