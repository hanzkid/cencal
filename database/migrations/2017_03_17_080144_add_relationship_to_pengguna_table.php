<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationshipToPenggunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengguna', function (Blueprint $table) {
            $table->foreign('jurusan_id')->references('id')->on('jurusan')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengguna', function (Blueprint $table) {
            $table->dropForeign('pengguna_jurusan_id_foreign');
        });
    }
}
