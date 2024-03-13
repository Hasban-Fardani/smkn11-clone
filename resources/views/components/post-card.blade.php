<div class="group {{ $class }}" >
    <div class="group relative overflow-hidden ">
        <a href="{{ $url }}">
            <img src="{{ $image }}" alt="{{ $title }}"
                loading="lazy"
                class="duration-200 group-hover:scale-110 object-cover object-center {{ $class }}">
            <div
                class="absolute inset-0 flex flex-col justify-end gap-2 bg-gradient-to-b from-transparent from-50% to-sky-900 p-4 text-white">
                <h3 class="text-xl font-semibold">{{ $title }}</h3>
                <p class="text-sm">{{ $description }}</p>
            </div>
        </a>
        <p
            class="absolute top-4 left-4 w-fit py-1 flex flex-col justify-end bg-gray-700 px-4 z-50 text-white">
            {{ $category }}
        </p>
    </div>
</div>