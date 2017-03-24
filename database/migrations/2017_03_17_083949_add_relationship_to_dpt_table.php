<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationshipToDptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dpt', function (Blueprint $table) {
            $table->foreign('acara_id')->references('id')->on('acara')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('pengguna_id')->references('id')->on('pengguna')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dpt', function (Blueprint $table) {
            $table->dropForeign('dpt_acara_id_foreign');
            $table->dropForeign('dpt_pengguna_id_foreign');
        });
    }
}
