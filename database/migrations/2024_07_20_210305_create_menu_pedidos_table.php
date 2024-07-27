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
        Schema::create('menu_pedidos', function (Blueprint $table) {
            $table->id();
            $table->integer("Cantidad");
            $table->decimal("Total");
            $table->foreignId('menu_id')->constrained()->references('id')->on('menus');
            $table->foreignId('pedido_id')->constrained()->references('id')->on('pedidos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_pedidos');
    }
};
