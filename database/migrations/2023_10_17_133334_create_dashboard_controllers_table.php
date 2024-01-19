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
        Schema::create('user_creates', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('asal_smp');
            $table->string('jenis_kelamin');
            $table->string('minat_jurusan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dashboard_controllers');
    }
};
