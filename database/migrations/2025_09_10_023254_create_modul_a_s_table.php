<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('modul_as', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi')->nullable(); // ✅ tambahkan deskripsi
            $table->string('file');
            $table->enum('kelas', ['4', '5', '6']);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('modul_as');
    }
};
