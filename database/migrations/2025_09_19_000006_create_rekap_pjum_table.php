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
        Schema::create('rekap_pjum', function (Blueprint $table) {
    $table->id();
    $table->date('tanggal');
    $table->text('deskripsi');
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
        Schema::dropIfExists('rekap_pjum');
    }
};
