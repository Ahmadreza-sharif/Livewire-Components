<?php

namespace App\Http\Livewire\Automatic;

use App\Models\product;
use Livewire\Component;
use Cviebrock\EloquentSluggable\Services\SlugService;

class Autolinks extends Component
{
    public $products;
    public $title;
    public $link;
    public $rules = [
        'title' => 'required|min:5|max:100',
        'link' => 'required|min:5|max:100'
    ];

    public function updatedTitle()
    {
        $this->link = SlugService::createSlug(product::class,'slug',$this->title);
    }

    public function save()
    {
        $this->validate();
        $product = product::create([
            'name' => $this->title,
            'slug' => $this->link
        ]);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.automatic.autolinks')->layout('layouts/app');
    }
}
