<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenitipanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penitipan', function (Blueprint $table) {
            $table->id('idpenitipan');
            $table->string('nopenitipan', 10)->index();
            $table->string('pemilik', 35)->index();
            $table->string('tipe', 25);
            $table->string('pj', 25);
            $table->string('harga', 25);
            $table->string('hargapokok', 25);
            $table->string('status', 25);
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
        Schema::dropIfExists('penitipan');
    }
}
