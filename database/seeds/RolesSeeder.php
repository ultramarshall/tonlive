<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataseeds = array(
            ['role_name'=>'admin'],
            ['role_name'=>'vendor']
        );
        DB::table('roles')->insert($dataseeds);
    }
}
