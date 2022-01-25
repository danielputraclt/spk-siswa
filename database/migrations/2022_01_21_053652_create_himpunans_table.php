<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHimpunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('himpunan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_himpunan')->nullable();
            $table->float('bawah', 10, 2)->nullable();
            $table->float('tengah', 10, 2)->nullable();
            $table->float('atas', 10, 2)->nullable();
            $table->tinyInteger('kelompok')->nullable();
            $table->string('keterangan', 200)->nullable();
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
        Schema::dropIfExists('himpunans');
    }
}
