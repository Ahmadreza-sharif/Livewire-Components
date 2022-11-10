<?php

namespace App\Http\Livewire\Quiz;

use App\Models\quizOption;
use App\Models\quizQuestion;
use Livewire\Component;

class Quiz extends Component
{
    public $questions;
    public $currentQuestion = 1;
    public $answers = [];
    public $answer = null;
    public $result = null;

    public function mount()
    {
        $this->questions = quizQuestion::with('options')->inRandomOrder()->get();
    }

    public function updatedAnswer()
    {
        if (!is_null($this->answer)) {
            $this->answers[] = $this->answer;
            $this->currentQuestion++;
        }

        if (count($this->answers) >= $this->questions->count()) {
            $correctAnswer = quizOption::where('is_correct', true)
                ->whereIn('question_id', $this->questions->pluck('id'))
                ->pluck('id')->toArray();
            $this->result = count(array_intersect($correctAnswer, $this->answers));
        }
        $this->answer = null;
    }

    public function render()
    {
        return view('livewire.quiz.quiz');
    }
}
