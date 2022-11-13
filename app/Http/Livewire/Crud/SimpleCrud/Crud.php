<?php

namespace App\Http\Livewire\Crud\SimpleCrud;

use App\Models\product;
use Livewire\Component;

class Crud extends Component
{
    public $productId;
    public $product;
    public $rules = [
        'product.name' => 'required',
        'product.slug' => 'required', 
        'product.description' => 'required',
    ];

    public function render()
    {
        return view('livewire.crud.simple-crud.crud');
    }
    
    public function update($id)
    {
            $this->productId = 1;
            $this->product = product::find($id);
    }

    public function insert()
    {
        $this->reset('product');
    }

    public function save()
    {
        $this->validate();
        if(!$this->productId){
            product::create($this->product);
        }else {
            $this->product->save();
        }
    }

    public function resetAll()
    {
        $this->reset();
    }

    public function delete($id)
    {
        product::find($id)->delete();
    }
}
