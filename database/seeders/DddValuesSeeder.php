<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DddValuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = array(
            ['ddd_from'=>'011', 'ddd_to'=>'016', 'value_min'=>'1.90'],
            ['ddd_from'=>'016', 'ddd_to'=>'011', 'value_min'=>'2.90'],
            ['ddd_from'=>'011', 'ddd_to'=>'017', 'value_min'=>'1.70'],
            ['ddd_from'=>'017', 'ddd_to'=>'011', 'value_min'=>'2.70'],
            ['ddd_from'=>'011', 'ddd_to'=>'018', 'value_min'=>'0.90'],
            ['ddd_from'=>'018', 'ddd_to'=>'011', 'value_min'=>'1.90']
        );

        DB::table('ddd_values')->insert($values);
    }
}
