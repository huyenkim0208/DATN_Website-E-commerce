<?php

namespace App\Exports;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
 
class ProductExportView implements FromView,WithDrawings
{
    public function __construct($template){
        $this->template = $template;
    }
    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('HuyenIT');
        $drawing->setHeight(90);
        $drawing->setCoordinates('F3');
 
        return $drawing;
    }
    public function view(): View
    {
        
        return View($this->template)->with(array('products' => Product::all()));
    }
}
