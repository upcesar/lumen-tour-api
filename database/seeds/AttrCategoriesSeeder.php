<?php

use Illuminate\Database\Seeder;

class AttrCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attr_categories')->truncate();
        
        DB::table('attr_categories')->insert([
            'description' => 'Theme & Aquatic Parks',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
