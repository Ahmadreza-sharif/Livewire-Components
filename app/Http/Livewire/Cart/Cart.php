<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class Cart extends Component
{
    public $listeners = ['updateCart' => 'render'];
    public function render()
    {
        return view('livewire.cart.cart',['cartCount' => \App\Models\cart::count()]);
    }
}
