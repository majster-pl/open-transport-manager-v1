<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\OrderImport;
use Illuminate\Http\Request;
use App\Exports\OrdersExport;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    public function export()
    {
        return Excel::download(new OrdersExport, 'users.xlsx');
    }

}
