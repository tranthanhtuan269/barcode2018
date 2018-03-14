<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barcodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barcode',13)->unique();
            $table->string('name',200)->nullable();
            $table->string('model',50)->nullable();
            $table->string('manufacturer',200)->nullable();
            $table->string('image',200)->nullable();
            $table->string('avg_price',100)->nullable();
            $table->string('currency_unit',15)->nullable();
            $table->text('spec')->nullable();
            $table->text('feature')->nullable();
            $table->text('description')->nullable();
            $table->string('insert_time',255)->nullable();
            $table->integer('user_id');
            $table->timestamps();
            $table->index(['barcode', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barcodes');
    }
}
