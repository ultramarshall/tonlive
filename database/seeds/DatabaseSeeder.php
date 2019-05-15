<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GroupsSeeders::class);
        $this->call(NewsCategorySeeders::class);
        $this->call(RolesSeeder::class);
        $this->call(UsersStatusSeeder::class);
        $this->call(UsersSeeders::class);
        $this->call(VendorTypeSeeders::class);
        $this->call(PlanningStatusSeeder::class);
        $this->call(WinnerStatusSeeder::class);
        $this->call(WinnerViewStatusSeeder::class);
    }
}
