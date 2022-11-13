<?php

namespace App\Http\Livewire\Chart;

use App\Models\User;
use Livewire\Component;
use App\Charts\mychart;

class Chart extends Component
{
    public function render()
    {
        $chart = new mychart;
        $user = User::all()->pluck('created_at','id');
        $chart->labels($user->values());
        $chart->dataset("my chart",'line',$user->keys());
        return view('livewire.chart.chart',['chart' => $chart]);
    }
}
