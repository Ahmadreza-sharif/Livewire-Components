<?php

namespace App\Http\Livewire\Comment;

use App\Models\post_comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Comments extends Component
{
    public $post_id = 1;
    public $comment_text = null;
    public $replid_to = null;
    public $user = null;
    public $rules = [
        'comment_text' =>'required|min:1|max:255'
    ];

    public function save()
    {
        $this->validate();
        post_comment::create([
            'comment_text' => $this->comment_text,
            'post_id' => $this->post_id,
            'user_id' => 1,
            'parent_id' => $this->replid_to
        ]);
        $this->reset();
    }

    public function reply($id)
    {
        $this->replid_to = $id;
    }
    
    public function render()
    {
        $comments = post_comment::whereNull('parent_id')->with('replies')->latest()->get();
        return view('livewire.comment.comments',['comments' => $comments]);
    }
}
