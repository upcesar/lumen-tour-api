<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttrAvailabOpDateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attr_operation_dates', function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('attr_availability_id');
            $table->date('attr_op_from');
            $table->date('attr_op_to');
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
        Schema::drop('attr_operation_dates');
    }
}
