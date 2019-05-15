<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendorTypeSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataseeds = array(
            ['name'=>'subkon'],
            ['name'=>'supplier'],
            ['name'=>'alat'],
            ['name'=>'transporter'],
        );
        DB::table('user_vendor_type')->insert($dataseeds);
    }
}
