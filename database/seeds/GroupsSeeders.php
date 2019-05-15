<?php

use Illuminate\Database\Seeder;

class GroupsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataseeds = array(
            ['group_name'=>'group_user'],
            ['group_name'=>'group_admin'],
            ['group_name'=>'group_vendor'],
        );
        DB::table('groups')->insert($dataseeds);
    }
}
