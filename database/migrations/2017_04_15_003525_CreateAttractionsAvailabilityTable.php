<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttractionsAvailabilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attr_availability', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('attraction_id');
            $table->string('code', 15);
            $table->string('name', 30);
            $table->string('contract', 15);
            $table->string('iso_currency', 3);
            $table->decimal('service_price', 13, 2);
            $table->timestamps();
            
            $table->foreign('attraction_id')
                ->references('id')
                ->on('attractions')
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
        
        Schema::table('attr_availability', function(Blueprint $table){
            $table->dropForeign('attr_availability_attraction_id_foreign');
        });
        
        Schema::drop('attr_availability');
    }
}
