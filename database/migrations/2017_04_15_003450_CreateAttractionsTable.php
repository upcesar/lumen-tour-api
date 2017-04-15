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
            $table->unsignedInteger('attr_cat_id');
            $table->string('name');
            $table->string('description');
            $table->string('imageThumbs');
            $table->string('imageFull');
            $table->timestamps();
            
            $table->foreign('attr_cat_id')
                ->references('id')
                ->on('attr_categories')
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
        Schema::table('attractions', function(Blueprint $table){
            $table->dropForeign('attractions_attr_cat_id_foreign');
        });
        
        Schema::drop('attractions');
    }
}
