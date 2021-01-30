<?php

use Modules\Country\Models\Country;
use Modules\Setting\Models\Setting;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Country::create([
            'name' => 'Egypt',
            'key' => '+20',
        ]);

        Country::create([
            'name' => 'Saudi Arabia',
            'key' => '+966',
        ]);


        Country::create([
            'name' => 'United States',
            'key' => '+1',
        ]);

        //factory(Country::class, 20)->create();
    }
}
