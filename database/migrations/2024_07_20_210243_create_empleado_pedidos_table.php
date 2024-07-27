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
        Schema::create('empleado_pedidos', function (Blueprint $table) {
            $table->id();
            $table->date("FecAtentido");
            $table->string("Observacion");
            $table->foreignId("empleado_id")->constrained()->references("id")->on("empleados");
            $table->foreignId("pedido_id")->constrained()->references("id")->on("pedidos");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleado_pedidos');
    }
};
