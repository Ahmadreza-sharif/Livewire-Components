<?php

namespace App\Http\Livewire\Quiz;

use Livewire\Component;

class Quiz extends Component
{
    public function render()
    {
        return view('livewire.quiz.quiz')->layout('layouts/app');
    }
}
