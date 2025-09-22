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
        Schema::create('nota', function (Blueprint $table) {
    $table->id();
    $table->string('nomor_nota', 100);
    $table->string('perihal', 200);
    $table->date('tanggal_dokumen');
    $table->string('file_path', 255)->nullable();
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
        Schema::dropIfExists('nota');
    }
};
