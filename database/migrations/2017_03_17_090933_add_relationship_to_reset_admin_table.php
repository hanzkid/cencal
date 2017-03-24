<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationshipToResetAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reset_admin', function (Blueprint $table) {
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan')
                ->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reset_admin', function (Blueprint $table) {
            $table->dropForeign('reset_admin_pertanyaan_id_foreign');
        });
    }
}
