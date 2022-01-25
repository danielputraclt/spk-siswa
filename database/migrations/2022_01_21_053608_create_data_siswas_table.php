<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->decimal('nilai_rapor', $precision=4, $scale = 2);
            $table->decimal('absensi', $precision=4, $scale = 2);
            $table->decimal('kepribadian', $precision=4, $scale = 2);
            $table->decimal('ekstrakurikuler', $precision=4, $scale = 2);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_siswas');
    }
}
