<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilFuzziesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_fuzzy', function (Blueprint $table) {
            $table->id();
            $table->integer('id_himpunan')->nullable();
            $table->integer('id_siswa')->nullable();
            $table->float('hasil_fuzzy')->nullable();
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
        Schema::dropIfExists('hasil_fuzzies');
    }
}
