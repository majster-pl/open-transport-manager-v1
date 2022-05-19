<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class OrdersTable extends Component
{
    use WithPagination;
    
    public $dateFrom;
    public $dateTo;
    public $itemsPerPage;

    public function mount()
    {
        $this->dateFrom = Carbon::now()->subDays(3)->format('Y-m-d');
        $this->dateTo = Carbon::now()->format('Y-m-d');
        $this->itemsPerPage = 50;
    }

    public function updated()
    {
        return view('livewire.orders-table', [
            'orders' => Order::whereBetween('created_date', [$this->dateFrom, $this->dateTo])->paginate($this->itemsPerPage)
        ]);
    }


    public function render()
    {
        return view('livewire.orders-table', [
            'orders' => Order::whereBetween('created_date', [$this->dateFrom, $this->dateTo])->paginate($this->itemsPerPage)
        ]);
    }
}
