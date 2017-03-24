<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationshipToJurusanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jurusan', function (Blueprint $table) {
            $table->foreign('fakultas_id')->references('id')->on('fakultas')
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
        Schema::table('jurusan', function (Blueprint $table) {
            $table->dropForeign('jurusan_fakultas_id_foreign');
        });
    }
}
