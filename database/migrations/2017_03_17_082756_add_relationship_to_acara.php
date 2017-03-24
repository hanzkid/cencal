<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationshipToAcara extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('acara', function (Blueprint $table) {
            $table->foreign('panitia_id')->references('id')->on('panitia')
                ->onDelete('cascade')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('acara', function (Blueprint $table) {
            $table->dropForeign('acara_panitia_id_foreign');
        });
    }
}
