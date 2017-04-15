<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        
        $this->call('AttrCategoriesSeeder');
        $this->call('AttractionsSeeder');
        $this->call('AttrAvailabilitySeeder');
        $this->call('AttrOperationDatesSeeder');
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
