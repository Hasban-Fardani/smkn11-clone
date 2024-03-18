<x-section>
    <div class="mb-4 flex flex-col md:flex-row justify-between">
        <x-input label="Cari" :hint=" 'Cari post: ' . $search" wire:model.live='search' placeholder="ketik sesuatu"/>
        <div class="flex gap-2 justify-between">
            <label>
                Tag
                <x-select.styled :options="$tags" multiple/>
            </label>
            <label>
                Kategori
                <x-select.styled :options="$categories" multiple wire:model.live="selectedCategories" select="label:name|value:id"/>
            </label>
        </div>
    </div>
    @if ($posts->count() > 0)
        <x-post-card class="w-full h-80" :title="$posts[0]->title" :description="$posts[0]->description" :image="$posts[0]->image" :category="$posts[0]->category->name"
            url="{{route('posts.show', $posts[0]->slug)}}" />
        <div class="w-full flex flex-col md:flex-row md:flex-wrap gap-4 mt-8">
            @foreach ($posts->skip(1) as $post)
                <div wire:key="{{ $post->id }}">
                    <x-post-card class="lg:w-[300px] w-full h-80" :title="$post->title" :description="$post->description" :image="$post->image"
                        :category="$post->category->name" url="{{route('posts.show', $post->slug)}}"/>
                </div>
            @endforeach
        </div>
        <div>
            <p class="text-lg font-bold">
                {{ $search }}
            </p>
        </div>
        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    @else 
        <p>No posts</p>
    @endif
</x-section>
