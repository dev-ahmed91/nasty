<?php

namespace Modules\Category\Seeds;


use Illuminate\Database\Seeder;
use Modules\Category\Constants\CategoryStatus;
use Modules\Category\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Coils', 'status' => CategoryStatus::ACTIVE, 'image' => '/uploads/categories/1.jpeg']);
        Category::create(['name' => 'Cartridge', 'status' => CategoryStatus::ACTIVE, 'image' => '/uploads/categories/2.jpeg']);
        Category::create(['name' => 'Disposables', 'status' => CategoryStatus::ACTIVE]);
        Category::create(['name' => 'E-Liquid', 'status' => CategoryStatus::ACTIVE]);
        Category::create(['name' => 'Pods', 'status' => CategoryStatus::ACTIVE]);
        Category::create(['name' => 'Mods & Kits', 'status' => CategoryStatus::ACTIVE]);
        Category::create(['name' => 'Tanks', 'status' => CategoryStatus::ACTIVE]);
        Category::create(['name' => 'Batteries', 'status' => CategoryStatus::ACTIVE]);
        Category::create(['name' => 'Accessories', 'status' => CategoryStatus::ACTIVE]);
        Category::create(['name' => '0MG NIC', 'parent_id' => 4, 'status'  => CategoryStatus::ACTIVE]);
        Category::create(['name' => '3MG NIC', 'parent_id' => 4, 'status'  => CategoryStatus::ACTIVE]);
        Category::create(['name' => '6MG NIC', 'parent_id' => 4, 'status'  => CategoryStatus::ACTIVE]);
        Category::create(['name' => '9MG NIC', 'parent_id' => 4, 'status'  => CategoryStatus::ACTIVE]);
        Category::create(['name' => '12MG NIC', 'parent_id' => 4, 'status'  => CategoryStatus::ACTIVE]);
        Category::create(['name' => '18MG NIC', 'parent_id' => 4, 'status'  => CategoryStatus::ACTIVE]);
        Category::create(['name' => '30MG NIC', 'parent_id' => 4, 'status'  => CategoryStatus::ACTIVE]);
        Category::create(['name' => '50MG NIC', 'parent_id' => 4, 'status'  => CategoryStatus::ACTIVE]);
        Category::create(['name' => 'High Salt NIC', 'parent_id' => 4, 'status'  => CategoryStatus::ACTIVE]);
        Category::create(['name' => 'Low Salt NIC', 'parent_id' => 4, 'status'  => CategoryStatus::ACTIVE]);
    }
}
