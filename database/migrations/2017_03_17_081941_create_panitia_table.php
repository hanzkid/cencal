<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanitiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panitia', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('email', 255);
            $table->string('nama', 255);
            $table->string('password', 255);
            $table->rememberToken();
            $table->string('verification_token', 255);
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
        Schema::dropIfExists('panitia');
    }
}
