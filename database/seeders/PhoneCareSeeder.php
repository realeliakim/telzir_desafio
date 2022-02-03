<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneCareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = array(
            ['plan_name'=>'FaleMais30', 'values'=>'30'],
            ['plan_name'=>'FaleMais60', 'values'=>'60'],
            ['plan_name'=>'FaleMais120', 'values'=>'120']
        );

        DB::table('phonecare_plan')->insert($values);
    }
}
