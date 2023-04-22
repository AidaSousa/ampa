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
            $table->string('name_children');
            $table->string('surname_children');
            $table->date('birth_date');
            $table->enum('school_year', ['4_EI', '5_EI', '6_EI', '1_EP', '2_EP', '3_EP', '4_EP', '5_EP', '6_EP']);
            $table->string('phone_contact');
            $table->enum('matriculado_centro', ['si', 'no']);
            $table->enum('directo_comedor', ['si', 'no']);
            $table->enum('necesidades_especiales', ['si', 'no']);
            $table->timestamps();

            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('user_id')->references('id')->on('users');
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
