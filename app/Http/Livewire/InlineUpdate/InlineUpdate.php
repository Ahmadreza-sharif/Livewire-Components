<?php

namespace App\Http\Livewire\InlineUpdate;

use App\Models\product;
use Livewire\Component;

class InlineUpdate extends Component
{
    public $products = [];
    public $editedProductIndex = null;
    public $editedProductField = null;

    public $rules = [
        'products.*.name' => 'required',
        'products.*.price' =>'required||numeric',
    ];
    protected $validationAttributes = [
        'products.*.name' =>'name',
        'products.*.price' => 'price',
    ];

    public function mount()
    {
        $this->products = product::all()->toArray();
    }

    public function updateProduct($productIndex)
    {
        $this->editedProductIndex = $productIndex;
    }

    public function saveProduct($productIndex)
    {
        $this->validate();
        $product = $this->products[$productIndex] ?? null;
        if (! is_null($product)) {
            optional(product::find($product['id']))->update($product);
        }
        $this->editedProductIndex = null;
        $this->editedProductField = null;
        
    }

    public function editedProductField($productIndex,$field)
    {
        $this->editedProductField = $productIndex . ' . ' . $field;
    }

    public function render()
    {
        return view('livewire.inline-update.inline-update',['products' => $this->products]);
    }
}
