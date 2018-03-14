
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifiedUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar', 255)->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('birthday', 10)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('career', 255)->nullable();
            $table->string('organization', 255)->nullable();
            $table->string('reset_code', 255)->nullable();
            $table->string('reset_code_time', 255)->nullable();
            $table->integer('number_barcode')->nullable();
            $table->string('barcode_table_setting',255)->nullable();
            $table->string('payment_table_setting',255)->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
