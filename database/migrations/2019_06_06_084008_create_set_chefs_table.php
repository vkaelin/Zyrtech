<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetChefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_chefs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('set_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->index(['set_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_chefs');
    }
}
