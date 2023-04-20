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
        Schema::create('event_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('child_id');
            $table->string('phone_contact');
            $table->enum('matriculado_centro', ['si', 'no']);
            $table->enum('directo_comedor', ['si', 'no']);
            $table->enum('necesidades_especiales', ['si', 'no']);
            $table->integer('quantity')->nullable();
            $table->float('total_price')->nullable();
            $table->boolean('is_paid')->default(false);
            $table->timestamps();

            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('child_id')->references('id')->on('children');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_user');
    }
};
