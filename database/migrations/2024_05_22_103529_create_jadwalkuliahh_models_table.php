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
        Schema::create('jadwalkuliahh', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('mahasiswa_id');
            $table->foreign('mahasiswa_id')->references(columns:'id')->on(table: 'mahasiswa');
            $table->unsignedBigInteger('prodi_id');
            $table->foreign('prodi_id')->references(columns:'id')->on(table: 'prodi');
            $table->unsignedBigInteger('matakuliah_id');
            $table->foreign('matakuliah_id')->references(columns: 'id')->on(table: 'matakuliah');

            $table->string('ruangan');
            $table->time('jam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwalkuliahh');
    }
};
