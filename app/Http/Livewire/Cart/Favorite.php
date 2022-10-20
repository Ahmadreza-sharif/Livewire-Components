<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class Favorite extends Component
{
    public $listeners = ['updateFavorite' => 'render'];
    public function render()
    {
        return view('livewire.cart.favorite',['favoriteCount' => \App\Models\favorite::count()]);
    }
}
