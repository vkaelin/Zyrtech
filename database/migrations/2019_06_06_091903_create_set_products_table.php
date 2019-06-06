<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('set_id');
            $table->unsignedInteger('product_id');
            $table->timestamps();

            $table->index(['set_id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_products');
    }
}
