<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Modules\Product\Models\Product;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return Product
     */
    public function model(array $row)
    {
        return new Product([
            'name' => $row[1],
            'category_id' => $row[2],
            'price' => $row[3],
            'image' => $row[4]
        ]);
    }
}
