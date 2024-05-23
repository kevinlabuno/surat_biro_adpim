<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratkeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratkeluar', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->string('namasuratklr');
            $table->string('nosurat')->nullable();
            $table->string('pengirim');
            $table->string('namapengirim');
            $table->string('perihal');
            $table->string('tertuju');
            $table->date('tanggalklr');
            $table->smallInteger('status')->default(0);
            $table->string('komen')->nullable();
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
        Schema::dropIfExists('suratkeluar');
    }
}
