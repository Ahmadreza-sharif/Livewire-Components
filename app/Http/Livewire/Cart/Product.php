<?php

namespace App\Http\Livewire\Cart;

use App\Models\cart;
use App\Models\favorite;
use App\Models\product as ModelsProduct;
use Livewire\Component;

class Product extends Component
{
    public $cartProducts = [];
    public $favoriteProducts = [];

    public function addToCart ($id)
    {
        cart::create(['product_id' => $id]);
        $this->cartProducts[] = $id;
        $this->emit('updateCart');
    }

    public function removeOfCart ($id)
    {
        cart::where('product_id',$id)->delete();
        if (($key = array_search($id,$this->cartProducts)) != false) {
            unset($this->cartProducts[$key]);
        }
        $this->emit('updateCart');
    }

    public function addFavorite($id)
    {
        favorite::create(['product_id' => $id]);
        $this->favoriteProducts[] = $id;
        $this->emit('updateFavorite');
    }

    public function removeFavorite($id)
    {
        favorite::where('product_id',$id)->delete();
        $this->emit('updateFavorite');
    }

    public function render()
    {
        $products = ModelsProduct::all();
        return view('livewire.cart.product',['products' => $products]);
    }
}
