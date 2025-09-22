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
        Schema::create('contacts', function (Blueprint $table) {
    $table->id();
    $table->string('nama', 100);
    $table->string('jabatan', 100)->nullable();
    $table->string('instansi', 150)->nullable();
    $table->string('email', 150)->nullable();
    $table->string('telepon', 50)->nullable();
    $table->string('alamat', 255)->nullable();
    $table->enum('visibility', ['public','private'])->default('public');
    $table->unsignedBigInteger('created_by');
    $table->timestamps();

    $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
