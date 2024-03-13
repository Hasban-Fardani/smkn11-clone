<?php

namespace App\Livewire\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{   
    use WithPagination;

    public string $search = '';
    public $selectedCategories = [];
    public $selectedTags = [];

    #[Layout('layouts.app')]
    public function render()
    {
        $categoriesTmp = Category::all(['name', 'id'])->pluck('name', 'id');
        $categories = [];
        foreach ($categoriesTmp as $key => $value) {
            array_push($categories, [
                'name' => $value,
                'id' => $key,
            ]);
        }

        $tags = Tag::all()->pluck('name', 'id')->toArray();
        $posts = Post::with('category', 'tags', 'user')
            ->latest()
            ->when($this->search !== '', function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%');
            })
            ->when($this->selectedCategories, function ($query) {
                $query->whereIn('category_id', $this->selectedCategories);
            })
            ->paginate(9);
        return view('livewire.posts.index', compact('posts', 'categories', 'tags', 'categoriesTmp'));
    }
}
