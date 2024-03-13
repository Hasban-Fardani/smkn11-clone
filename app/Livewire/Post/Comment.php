<?php

namespace App\Livewire\Post;

use Livewire\Component;

class Comment extends Component
{
    public $post;
    public $comment;
    public function mount($comment){
        $this->comment = $comment;
    }
    public function render()
    {
        return view('livewire.posts.comment');
    }
}
