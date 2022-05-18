<?php

namespace App\Imports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithStartRow;

class OrdersImport implements ToModel, SkipsOnError, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Order([
            'created_date' => Date::excelToDateTimeObject($row[2]),
            'pickticket_status' => $row[3],
            'pickticket_control' => $row[5],
            'ar_account' => $row[7],
            'ship_to' => $row[8],
            'ship_to_name' => $row[9],
            'customer_po' => $row[11],
            'order' => $row[12],
            'planned_ship_via' => $row[13],
            'value' => $row[14],
        ]);
    }

    public function onError(\Throwable $e)
    {
        // Function to skip duplicates (pckticket_control)
    }

    public function startRow(): int
    {
        // will ignore first row
        return 2;
    }

}
