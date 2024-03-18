<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Testing\Fluent\Concerns\Interaction;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use TallStackUi\Traits\Interactions;

class CreatorPost extends Component
{
    use WithPagination, Interactions;

    public ?int $quantity = 8; 
    public ?string $search = null; 
    public function data()
    {
        return [
            'headers' => [
                ['index' => 'title', 'label' => 'Judul'],
                ['index' => 'description', 'label' => 'Deskripsi'],
                ['index' => 'status', 'label' => 'Status'],
                ['index' => 'is_accepted', 'label' => 'Di setujui'],
                ['index' => 'created_at', 'label' => 'Dibuat'],
                ['index' => 'action', 'label' => 'Aksi'],
            ],
            'rows' => Post::with(['user', 'category', 'tags', 'comments'])
                ->when($this->search, function (Builder $query) { 
                    return $query->where('title', 'like', "%{$this->search}%")
                        ->orWhere('description', 'like', "%{$this->search}%")
                        ->orWhere('status', 'like', "%{$this->search}%")
                        ->orWhereHas('user', function (Builder $query) {
                            $query->where('name', 'like', "%{$this->search}%");
                        });
                })
                ->paginate($this->quantity),
            'type' => 'data',
        ];
    }

    public function show(int $id)
    {

    }
    public function edit(int $id)
    {

    }

    // Delete
    public function delete(int $id)
    {
        $this->dialog()
            ->question("Apakah anda yakin ingin menghapus post ini?")
            ->confirm("Hapus", "confirmDelete", $id)
            ->cancel("Batal", "cancelDelete", $id)
            ->send();
    }
    public function confirmDelete(int $id)
    {
        $post = Post::find($id);
        $post->delete();
        $this->toast()
            ->success("Berhasil", "Post Berhasil Dihapus")
            ->send();
    }
    public function cancelDelete(int $id)
    {
        $this->toast()
            ->error("Batal", "Post Batal Dihapus")
            ->send();
    }
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.creator-post', $this->data());
    }
}
