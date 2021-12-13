<?php

namespace Modules\Product\Seeds;


use App\Imports\ProductsImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Product\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new ProductsImport(), 'public/sheets/coils.csv');
        Excel::import(new ProductsImport(), 'public/sheets/vape.csv');
    }
}
