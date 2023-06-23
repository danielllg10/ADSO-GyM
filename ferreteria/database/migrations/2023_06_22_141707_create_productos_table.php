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
            $table->bigIncrements('ID_PRODUCTO');
            $table->unsignedBigInteger('ID_CATEGORIA');
            $table->foreign('ID_CATEGORIA')->references('ID_CATEGORIA')->on('categorias');
            $table->string('NOMBRE');
            $table->text('DESCRIPCION');
            $table->decimal('PRECIO', 8, 2);
            $table->integer('STOCK');
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
