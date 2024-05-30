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
        Schema::create('siswapb', function (Blueprint $table) {
            $table->id();
            $table->char('Induk',9);
            $table->char('Nama',200);
            $table->char('TempatLahir', 100);
            $table->date('TanggalLahir');
            $table->enum('gender',array('L','P'));
            $table->enum('kepercayaan',array('Islam','Kristen Protestan','Kristen Katolik','Budha','Hindu','Konghucu','kepercayaan daerah'));
            $table->char('ayah',200);
            $table->char('Ibu',200);
            $table->enum('Kelas',array('VII','VIII','IX'));
            $table->char('Kota', 100);
            $table->text('alamat');
            $table->char('phone',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswapb');
    }
};
