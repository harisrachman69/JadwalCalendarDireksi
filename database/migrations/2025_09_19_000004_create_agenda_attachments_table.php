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
        Schema::create('agenda_attachments', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('agenda_id');
    $table->string('file_path', 255);
    $table->string('file_name', 150);
    $table->string('file_type', 50)->nullable();
    $table->timestamps();

    $table->foreign('agenda_id')->references('id')->on('agenda')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agenda_attachments');
    }
};
