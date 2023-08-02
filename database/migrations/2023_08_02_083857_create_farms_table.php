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
        Schema::create('farms', function (Blueprint $table) {
            $table->id();
            $table->String("nama_kandang");
            $table->enum("kepala_kandang", ['Georgia Anatasya', 'Aladdin bin Slamet', 'Dwina Insani','Dimas Nallando Putra','Muhammad Besari']);
            $table->enum("status_kandang", ['panen', 'chick in', 'persiapan kandang','cuci kandang','kosong'])->default('kosong');
            $table->integer("kapasitas_kandang");
            $table->String("lokasi_kandang");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farms');
    }
};
