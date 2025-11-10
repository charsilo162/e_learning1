@props(['image', 'title', 'text'])

<div class="hs-carousel-slide relative w-full h-full">
    <img class="w-full h-full object-cover" src="{{ $image }}" alt="{{ $title }}">
    <div class="absolute bottom-6 left-6 text-left max-w-md animate-fade-up">
        <h2 class="text-2xl md:text-4xl font-bold text-white drop-shadow-lg">{{ $title }}</h2>
        <p class="mt-2 text-sm md:text-base text-gray-200 drop-shadow">{{ $text }}</p>
    </div>
</div>