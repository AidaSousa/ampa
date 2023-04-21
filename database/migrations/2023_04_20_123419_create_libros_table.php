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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('padre_solicita');
            $table->string('menor_solicita');
            $table->enum('curso', ['4º E.P.', '6º E.P.']);
            $table->enum('donado_libros', ['si', 'no']);
            $table->boolean('tapa_libros')->default(false);
            $table->boolean('poner_nombre')->default(false);
            $table->boolean('no_subrayado')->default(false);
            $table->boolean('reemplazar')->default(false);
            $table->boolean('devolver')->default(false);
            $table->boolean('declaracion_leida')->default(false);
            $table->boolean('conforme')->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
