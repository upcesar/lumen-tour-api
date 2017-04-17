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
            
            $table->foreign('attr_availability_id')
                ->references('id')
                ->on('attr_availabilities')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {        
        Schema::table('attr_operation_dates', function(Blueprint $table){
            $table->dropForeign('attr_operation_dates_attr_availability_id_foreign');
        });
        
        Schema::drop('attr_operation_dates');
    }
}
