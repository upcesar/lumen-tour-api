<?php

use Illuminate\Database\Seeder;

class AttrOperationDatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attr_operation_dates')->truncate();

        $records = [
            [
                "attr_availability_id" => 1,
                "attr_op_from" => new DateTime('2016-11-26'),
                "attr_op_to" => new DateTime('2016-11-29'),
                "created_at" => date('Y-m-d H:i:s'),
            ],
            [
                "attr_availability_id" => 1,
                "attr_op_from" => new DateTime('2015-11-27'),
                "attr_op_to" => new DateTime('2015-11-30'),
                "created_at" => date('Y-m-d H:i:s'),
            ],
        ];
        
        DB::table('attr_operation_dates')->insert($records);
        
    }
}
