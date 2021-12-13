<?php

use Illuminate\Database\Seeder;
use Modules\Product\Seeds\ProductSeeder;
use Modules\Category\Seeds\CategorySeeder;

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
        $this->call(ProductSeeder::class);
        $this->call(CategorySeeder::class);
    }
}
