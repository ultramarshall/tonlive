<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataseeds = array(
            ['status'=>1,'email'=>'dirszas14@gmail.com','password'=>Hash::make('coba12345'),'roles_id'=>1 ,],
            ['status'=>1,'email'=>'me@nabila.com','password'=>Crypt::encrypt('ROxLN8sY'),'roles_id'=>2],
        );
        DB::table('users')->insert($dataseeds);
    }
}
