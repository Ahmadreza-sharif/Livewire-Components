<?php

namespace App\Http\Livewire\InlineUpdate;

use App\Models\product;
use Livewire\Component;

class InlineUpdate extends Component
{
    public $products = [];
    public $editedProductIndex = null;
    public $editedProductField = null;

    public function mount()
    {
        $this->products = product::all()->toArray();
    }

    public function render()
    {
        return view('livewire.inline-update.inline-update',['products' => $this->products]);
    }
}
