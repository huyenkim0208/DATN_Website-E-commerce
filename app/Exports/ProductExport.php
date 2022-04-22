<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
class ProductExport implements FromCollection,WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::all();
       
    }
    /**
     * Returns headers for report
     * @return array
     */
    public function headings(): array {
        return [
            'Id',
            'Name',
            'Slug',
            'Description',
            'Details',
            'Quanity',
            'Created',
            'Updated',
            
        ];
    }
 
    public function map($product): array {
        return [
            $product->id,
            $product->name,
            $product->slug,
            $product->description,
            $product->details,
            $product->quantity,
            $product->created_at,
            $product->updated_at,
        ];
    }
}