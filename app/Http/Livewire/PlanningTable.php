<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Order;
use Livewire\Component;

class PlanningTable extends Component
{
    public $orders;
    public $dateFrom;
    public $dateTo;

    public function mount()
    {
        $this->dateFrom = Carbon::now()->subDays(14)->format('Y-m-d');
        $this->dateTo = Carbon::now()->format('Y-m-d');
        // $this->user = $user;
        // $this->roles = $user->roles;
        $from = date('2022-05-11');
        $to = date('Y-m-d');
        $this->orders = Order::whereBetween('created_date', [$this->dateFrom, $this->dateTo])->get();
    }


    public function render()
    {
        return view('livewire.planning-table');
    }
}
