<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDapursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dapurs', function (Blueprint $table) {
            $table->increments('id_bahanbaku');
            $table->timestamps();
            $table->string('nama_bahanbaku');
            $table->string('jenis_bahanbaku');
            $table->string('jumlah_stok');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dapurs');
    }
}
