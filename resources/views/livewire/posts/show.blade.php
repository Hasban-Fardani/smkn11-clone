<x-section>
    <div class="flex flex-col lg:flex-row flex-wrap gap-8">
        <div class="lg:w-2/3">
            <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full max-h-[500px] object-cover object-center">
            <div class="mt-4">
                <div class="flex flex-wrap gap-2 text-sm">
                    <x-link href="#"
                        :text="$post->user->name"
                        icon="user"
                        class="border-r pr-2" />
                    <x-link href="#"
                        :text="$post->category->name"
                        icon="folder" 
                        class="border-r pr-2"/>
                    
                    <x-icon name="calendar" class="h-5 w-5">
                        <x-slot:right>
                            {{ $post->created_at->diffForHumans() }}
                        </x-slot:right>
                    </x-icon>
                </div>
                <h2 class="text-3xl font-bold mt-4">
                    {{ $post->title }}
                </h2>
                <p class="mt-2">
                    {!! $post->content !!}
                </p>
            </div>

            <!-- comment section -->
            <div class="mt-4">
                <h3 class="uppercase font-bold text-lg border-b-4 border-b-yellow-400 w-fit">Komentar</h3>
                <form action="" class="mt-4">
                    <x-textarea />
                </form>
                <div class="mt-4 flex flex-col gap-4">
                    @isset($comments)
                        @foreach($comments as $comment)
                            <livewire:post.comment :comment="$comment" :key="$comment->id" />
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
        <div class="lg:w-1/4">
            <h3 class="uppercase font-bold text-lg border-l-4 border-l-yellow-400 pl-2">Berita terkait</h3>
        </div>
    </div>
</x-section>
@push('js')
    <script src="https://cdn.tiny.cloud/1/xmbkvq3c55a3out0mcazzve3hsj1oi9dxwrt25my8prdh9qx/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
        selector: 'textarea#editor',
        plugins: 'code table lists',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
    });
    </script>
@endpush
