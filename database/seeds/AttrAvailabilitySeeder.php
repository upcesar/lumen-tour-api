<?php

use Illuminate\Database\Seeder;

class AttrAvailabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attr_availabilities')->truncate();

        DB::table('attr_availabilities')->insert([
            "attraction_id" => 1,
            "code" => "0#CNX09/19",
            "name" => "3 Days",
            "contract" => "2015WDWEURTO",
            "iso_currency" => "USD",
            "service_price" => 656.08,
            "created_at" => date('Y-m-d H:i:s'),
        ]);
    }
}
