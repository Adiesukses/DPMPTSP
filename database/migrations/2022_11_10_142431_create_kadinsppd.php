<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKadinsppd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kadinsppd', function (Blueprint $table) {
            $table->bigincrements ('id');
            $table->text ('nama');
            $table->date ('tanggal_sppd');
            $table->date ('tanggal_berangkat');
            $table->date ('tanggal_kembali');
            $table->text ('tujuan');
            $table->text ('maksud');
            $table->text ('kendaraan');
            $table->text ('dasar');
            $table->text ('anggaran');
            $table->text ('pptk');
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
        Schema::dropIfExists('kadinsppd');
    }
}
