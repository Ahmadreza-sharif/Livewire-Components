<?php

namespace App\Http\Livewire\MultipleStepForm;

use App\Models\city;
use App\Models\country;
use Livewire\Component;

class MultipleStepForm extends Component
{
    public $countries = array();
    public $cities = array();
    public $currentStep = 1;
    public $maxStep = 1;
    public $children = 0;
    public $adult = 0;
    public $FromCountry = null;
    public $FromCity = 1;
    public $ToCountry = null;
    public $ToCity = null;
    public $price = 0;
    public $stepRules = [
        1 => [
            "FromCountry" => "required",
            "FromCity" => "required"
        ],
        2 => [
            "ToCountry" => "required",
            "ToCity" => "required"
        ],
        3 => [
            'adult' => "required|integer|gt:0",
            'children' =>'required|integer|gt:0'
        ]
    ];

    public function changeStep($step)
    {
        if ($this->maxStep < $step){
            return ;
        }
        $this->currentStep = $step;
    }

    public function mount (){
        $this->countries = country::all();
        $this->cities = city::all()->groupBy('country_id')->toArray();
    }

    public function nextStep()
    {
        if(in_array($this->currentStep,array_keys($this->stepRules))){
            $this->validate($this->stepRules[$this->currentStep]);
        }

        if($this->currentStep >= 3){
            $this->price = $this->adult * 100000 + $this->children * 50000;
            return ;
        }
        $this->currentStep = $this->currentStep + 1;
        $this->maxStep = max($this->maxStep,$this->currentStep);

    }

    public function render()
    {
        return view('livewire.multiple-step-form.multiple-step-form',
        [
            'fromCity' => $this->cities[$this->FromCountry] ?? [],
            'toCity' => $this->cities[$this->ToCountry] ?? []
        ]);
    }
}
