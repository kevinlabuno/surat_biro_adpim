<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratmasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratmasuk', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->string('namasuratmsk');
            $table->string('pengirim');
            $table->string('namapengirim');
            $table->string('nosurat');
            $table->string('perihal');
            $table->string('tertuju');
            $table->date('tanggalmsk');
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
        Schema::dropIfExists('suratmasuk');
    }
}
