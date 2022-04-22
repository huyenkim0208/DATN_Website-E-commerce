<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
class OrderExport implements FromCollection,WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order::all();
       
    }
    /**
     * Returns headers for report
     * @return array
     */
    public function headings(): array {
        return [
            'Ref_id',
            'User',
            'Payment method',
            'Amount',
            'Status',
            'Created',
            
        ];
    }
 
    public function map($order): array {
        return [
            $order->ref_id,
            $order->user->full_name,
            $order->paymentMethod->name,
            $order->total,
            $order->order_status,
            $order->created_at,
        ];
    }
}
