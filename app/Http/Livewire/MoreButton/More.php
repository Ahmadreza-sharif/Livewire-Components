<?php

namespace App\Http\Livewire\MoreButton;

use App\Models\city;
use App\Models\product;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class More extends Component
{
    public int $offset = 0 ;
    public int $amount = 5 ;
    public bool $showMore ;
    public Collection $products;

    public function mount()
    {
        $this->loadData()
    }

    public function loadData()
    {
        $products = city::query()->offset($this->offset)->limit($this->amount)->get();
        $this->products = isset($products) ? $this->products->merge($products) : $products;

        $this->products += $this->amount;

        $this->showMore = product::count() > $this->offset;
    }

    public function render()
    {
        return view('livewire.more-button.more');
    }
}
