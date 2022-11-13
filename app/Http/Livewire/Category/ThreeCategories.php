<?php

namespace App\Http\Livewire\Category;

use App\Models\city;
use App\Models\state;
use Livewire\Component;

class ThreeCategories extends Component
{
    public $title;
    public $country;
    public $state;
    public $city;

    public $countries;
    public $states;
    public $cities;


    public function mount()
    {
        $this->states = collect();
        $this->cities = collect();
    }

    public function updatedcountry($value)
    {
        $this->states = state::where('country_id', $value)->get();
    }

    public function updatedState($value)
    {
        $this->cities = city::where('state_id', $value)->get();
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'state' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);
        \App\Models\company::create([
            'title' => $this->title,
            'city_id' => $this->city,
            'state_id' => $this->state,
            'country_id' => $this->country,
        ]);
        $this->reset();
        $this->cities = collect();
        $this->states = collect();
    }
    
    public function render()
    {
        return view('livewire.category.three-categories');
    }
}
