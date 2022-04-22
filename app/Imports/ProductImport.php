<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'name'     => $row[0],
            'slug'    => $row[1], 
            'description' => $row[2],
            'details' => $row[3],
            'price' => $row[4],
            'quantity' => $row[5],
            'featured' => $row[6],
            'status' => $row[7],
            'review_able' => $row[8],
            'category_id' => $row[9],
        ]);
    }
}
