<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acara', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nama', 255);
            $table->text('deskripsi');
            $table->date('tanggal_mulai');
            $table->date('tanggal_berakhir');
            $table->integer('panitia_id')->unsigned();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('is_verified')->default(0);
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
        Schema::dropIfExists('acara');
    }
}
