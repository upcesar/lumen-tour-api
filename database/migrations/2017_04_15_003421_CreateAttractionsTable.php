<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('attractions', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('destination');
            $table->string('code');
            $table->unsignedInteger('att_cat_id');
            $table->string('name');
            $table->string('description');
            $table->string('imageThumbs');
            $table->string('imageFull');            
            
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
        Schema::drop('attractions');
    }
}
