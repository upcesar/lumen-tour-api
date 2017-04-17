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
            "code" => "WDWBASENXT",
            "name" => "MCO",
            "contract" => "MCO",
            "iso_currency" => "USD",
            "service_price" => 656.08,
            "created_at" => date('Y-m-d H:i:s'),
        ]);
    }
}
