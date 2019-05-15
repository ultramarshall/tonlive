<?php

use Illuminate\Database\Seeder;

class WinnerViewStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataseeds = array(
            ['winnerview_status_name'=>'public'],
            ['winnerview_status_name'=>'private'],            
        );
        DB::table('winnerview_status')->insert($dataseeds);
    }
}
