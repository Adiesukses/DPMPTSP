<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNominatif extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominatif', function (Blueprint $table) {
            $table->bigincrements ('id');
            $table->text ('nama');
            $table->text ('nip');
            $table->text ('jabatan');
            $table->text ('gol');
            $table->text ('alamat');
            $table->text ('no_hp');
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
        Schema::dropIfExists('nominatif');
    }
}
