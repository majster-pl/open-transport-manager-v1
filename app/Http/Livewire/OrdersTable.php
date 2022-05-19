<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class OrdersTable extends Component
{
    use WithPagination;
    
    // public $orders_;
    public $dateFrom;
    public $dateTo;
    public $itemsPerPage;

    public function mount()
    {
        $this->dateFrom = Carbon::now()->subDays(3)->format('Y-m-d');
        $this->dateTo = Carbon::now()->format('Y-m-d');
        $this->itemsPerPage = 50;

        // $this->orders_ = Order::whereBetween('created_date', [$this->dateFrom, $this->dateTo])->paginate(10);
    }

    public function updated()
    {
        return view('livewire.orders-table', [
            'orders' => Order::whereBetween('created_date', [$this->dateFrom, $this->dateTo])->paginate($this->itemsPerPage)
        ]);
    }

    public function changeDateFrom()
    {
        dd('$date');
        # code...
        // $this->dateFrom = Carbon::create($date)->format('Y-m-d');
        // $this->orders = Order::whereBetween('created_date', [$this->dateFrom, $this->dateTo])->get();
    }

    public function render()
    {
        return view('livewire.orders-table', [
            'orders' => Order::whereBetween('created_date', [$this->dateFrom, $this->dateTo])->paginate($this->itemsPerPage)
        ]);
    }
}