<a class="group w-80 h-80" href="{{ $url }}">
    <div class="group relative overflow-hidden rounded-xl ">
        <img src="{{ $image }}" alt="{{ $title }}"
            class="duration-200 group-hover:scale-105 object-cover">
        <div
            class="absolute inset-0 flex flex-col justify-end gap-2 bg-gradient-to-b from-transparent from-50% to-sky-900 p-4 rounded-b-xl text-white">
            <h3 class="text-xl font-semibold">{{ $title }}</h3>
            <p class="text-sm">{{ $description }}</p>
        </div>
    </div>
</a>