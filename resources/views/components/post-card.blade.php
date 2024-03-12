<a class="group {{ $class }}" href="{{ $url }}">
    <div class="group relative overflow-hidden ">
        <img src="{{ $image }}" alt="{{ $title }}"
            loading="lazy"
            class="duration-200 group-hover:scale-110 object-cover object-center {{ $class }}">
        <div
            class="absolute inset-0 flex flex-col justify-end gap-2 bg-gradient-to-b from-transparent from-50% to-sky-900 p-4 text-white">
            <h3 class="text-xl font-semibold">{{ $title }}</h3>
            <p class="text-sm">{{ $description }}</p>
        </div>
    </div>
</a>