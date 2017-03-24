<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKandidatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kandidat', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nama', 255);
            $table->string('tempat_lahir', 255);
            $table->date('tanggal_lahir');
            $table->text('visi');
            $table->text('misi');
            $table->string('foto', 255);
            $table->integer('acara_id')->unsigned();
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
        Schema::dropIfExists('kandidat');
    }
}
