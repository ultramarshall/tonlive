<?php

use Illuminate\Database\Seeder;

class WinnerStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataseeds = array(
            ['winner_status_name'=>'win'],
            ['winner_status_name'=>'lose'],            
        );
        DB::table('winner_status')->insert($dataseeds);
    }
}
