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
        Schema::create('irshasil', function (Blueprint $table) {
            $table->integer('smt');
            $table->char('nim', 14);
            $table->primary(['nim', 'smt']);
            $table->integer('status')->nullable();
            $table->foreign('nim')->references('nim')->on('mahasiswa')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('irshasil');
    }
};
