<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('direksi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_direksi', 100);
            $table->string('jabatan', 100);
            $table->string('email_kantor', 150)->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('direksi');
    }
};
