<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_list', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('list_id');
            $table->uuid('product_id');

            $table->foreign('list_id')
                  ->references('id')
                  ->on('lists');


            $table->foreign('product_id')
                  ->references('id')
                  ->on('products');

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
        Schema::table('product_list', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
            $table->dropForeign(['list_id']);
        });

        Schema::dropIfExists('product_list');
    }
};
