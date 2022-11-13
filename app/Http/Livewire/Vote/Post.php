<?php

namespace App\Http\Livewire\Vote;

use Livewire\Component;

class Post extends Component
{

    public $sumVote;
    public $comment;

    public function mount($comment)
    {
        $this->comment = $comment;
        $this->sumVote = $comment->vote->sum('vote');
    }

    public function vote($vote)
    {
        $userId = 1;
//        $userId = auth()->user()->id;
        if (! in_array($vote,[-1,1]) || $this->comment->vote->where('user_id',$userId)->count()){
            return;
        }
        $this->comment->vote()->create([
            'user_id' =>$userId,
            'vote' =>$vote
        ]);
        $this->sumVote += $vote;
    }
    
    public function render()
    {
        return view('livewire.vote.post');
    }
}
