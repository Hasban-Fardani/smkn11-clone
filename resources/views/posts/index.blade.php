@extends('layouts.app')
@section('content')
    <x-section>
        <x-input/>
    </x-section>
    <x-section>
        <x-post-card
            class="w-full h-80"
            :title="$posts[0]->title" 
            :description="$posts[0]->description" 
            :image="$posts[0]->image" 
            :category="$posts[0]->category->name" 
            :url="'/posts/' . $posts[0]->slug"/>
        <div class="w-full flex flex-wrap gap-4 mt-8">
            @foreach ($posts->skip(1) as $post)
                <x-post-card 
                    class="w-[300px] h-72"
                    :title="$post->title" 
                    :description="$post->description" 
                    :image="$post->image" 
                    :category="$post->category->name" 
                    :url="'/posts/' . $post->slug" />
            @endforeach
        </div>
        {{ $posts->links() }}
    </x-section>
@endsection
