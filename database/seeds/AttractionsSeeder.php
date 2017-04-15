<?php

use Illuminate\Database\Seeder;

class AttractionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attractions')->truncate();

        DB::table('attractions')->insert([
            "destination" => "MCO",
            "code" => "WDWBASENXT",
            "attr_cat_id" => 1,
            "name" => "Disney Magic Your Way Base Ticket with No Expiration Option",
            "description" => "The Walt Disney World Resort is the place where fun reigns supreme and dreams come true every day. With four Theme Parks, two Water Parks plus Downtown Disney Area - where the most amazing shopping, dining and entertainment imaginable can be found. Discover an entire world of enchantment and wonder around every corner with one of Disney's Magic Your Way Tickets. Disney’s Magic Your Way Base Ticket offers admission to one of the following theme parks for each day of the ticket",
            "imageThumbs" => "http://www.hotelbeds.com/giata/extras/small/ds/28917/28917_3.jpg",
            "imageFull" => "http://www.hotelbeds.com/giata/extras/big/ds/28917/28917_3.jpg",
            "created_at" => date('Y-m-d H:i:s'),
        ]);
    }
}
