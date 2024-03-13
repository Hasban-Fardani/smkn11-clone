<?php

namespace App\Livewire\Post;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public Post $post;
    public $comments = [];
    public function mount(Post $post){
        $this->post = $post;
        $this->comments = $this->post->comments()->with('replies')->where('parent_id', null)->latest()->get();
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.posts.show');
    }
}
