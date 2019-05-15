<?php

use Illuminate\Database\Seeder;

class PlanningStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataseeds = array(
            ['planning_status_name'=>'on'],
            ['planning_status_name'=>'off']
        );
        DB::table('planning_status')->insert($dataseeds);
    }
}
