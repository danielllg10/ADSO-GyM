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
    Schema::create('movimiento_inventarios', function (Blueprint $table) {
        $table->bigIncrements('ID_MOVIMIENTO_INVENTARIO');
        $table->unsignedBigInteger('ID_PRODUCTO');
        $table->foreign('ID_PRODUCTO')->references('ID_PRODUCTO')->on('productos');
        $table->string('TIPO_MOVIMIENTO');
        $table->integer('CANTIDAD_MOVIDA');
        $table->date('FECHA_MOVIMIENTO');
        $table->string('DESCRIPCION_MOVIMIENTO');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimiento_inventarios');
    }
};
