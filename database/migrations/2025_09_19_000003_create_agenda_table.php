<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 150);
            $table->text('deskripsi')->nullable();
            $table->unsignedBigInteger('direksi_id');   // FK ke direksi
            $table->unsignedBigInteger('created_by');   // FK ke user (sekre/sekper)
            $table->dateTime('tanggal_mulai');
            $table->dateTime('tanggal_selesai');
            $table->string('lokasi', 150)->nullable();
            $table->enum('sifat', ['biasa', 'rahasia'])->default('biasa');
            $table->boolean('is_synced_calendar')->default(false);
            $table->timestamps();

            $table->foreign('direksi_id')->references('id')->on('direksi')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('agenda');
    }
};
