<?php

use Illuminate\Database\Seeder;
use Modules\Doctor\Seeds\DoctorSeeder;
use Modules\Lead\Seeds\LeadSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(LeadSeeder::class);
    }
}
