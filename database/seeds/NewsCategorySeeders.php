<?php

use Illuminate\Database\Seeder;

class NewsCategorySeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataseeds = array(
            ['category_name'=>'accounting'],
            ['category_name'=>'bussiness']
        );
        DB::table('news_category')->insert($dataseeds);
    }
}
