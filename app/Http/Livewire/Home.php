<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Imports\OrdersImport;
use Maatwebsite\Excel\Facades\Excel;

class Home extends Component
{
    public function render()
    {

        // Excel::import(new OrdersImport, 'current_month.xlsx');
        // Excel::load('current_month.xlsx');
        
        return view('livewire.home');
    }
}
