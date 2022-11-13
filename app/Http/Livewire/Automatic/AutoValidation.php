<?php

namespace App\Http\Livewire\Automatic;

use App\Models\product;
use Livewire\Component;

class AutoValidation extends Component
{
    public $name;
    public $slug;
    public $description;
    public $price;
    public $category_id;
    public $message;

    public $rules = [
        'name' => 'required|max:50|min:3',
        'slug' => 'required|min:3|max:100',
        'description' => 'required|max:100|min:3',
        'price' => 'required|int',
        'category_id' => 'required|int',
    ];

    public function updated($key)
    {
        $this->reset('message');
        $this->validateOnly($key);
    }

    public function render()
    {
        return view('livewire.automatic.auto-validation');
    }

    public function save()
    {

        $this->validate();
        product::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category_id
        ]);
        $this->reset(['title', 'slug', 'description', 'price', 'category_id']);
        $this->message = 'Saved Successfully.';
    }
}
