<?php

use Illuminate\Database\Seeder;

class UsersStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataseeds = array(
            ['statusName'=>'not verified'],
            ['statusName'=>'verified'],
        );
        DB::table('userStatus')->insert($dataseeds);
    }
}
