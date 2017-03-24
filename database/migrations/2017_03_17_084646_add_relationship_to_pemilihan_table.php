<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationshipToPemilihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pemilihan', function (Blueprint $table) {
            $table->foreign('kandidat_id')->references('id')->on('kandidat')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('dpt_id')->references('id')->on('dpt')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('acara_id')->references('id')->on('acara')
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
        Schema::table('pemilihan', function (Blueprint $table) {
            $table->dropForeign('pemilihan_kandidat_id_foreign');
            $table->dropForeign('pemilihan_dpt_id_foreign');
            $table->dropForeign('pemilihan_acara_id_foreign');
        });
    }
}
