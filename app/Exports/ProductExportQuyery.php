<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
 
class ProductExportQuery implements FromQuery
{
    use Exportable;
 
    public function __construct(int $year,$created_at)
    {
        $this->year = $year;
        $this->created_at = $created_at;
    }
 
    public function query()
    {
        //return User::query()->whereYear('created_at', $this->year);
        return Product::query()->whereDate('created_at',$this->created_at);
    }
}
