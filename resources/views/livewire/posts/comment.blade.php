<div>
    <x-card>
        <x-slot:header >
            {{ $comment->user->name }}
        </x-slot:header>
        {!! $comment->content !!}
    </x-card>

    <div class="ml-4 mt-2 flex flex-col gap-2">
        @foreach($comment->replies as $reply)
            <x-card>
                <x-slot:header>
                    {{ $reply->user->name }}
                </x-slot:header>
                {!! $reply->content !!}
            </x-card>
        @endforeach
    </div>
</div>