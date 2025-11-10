{{-- 
    Component: Training Promo
    Usage:
    <x-training-promo
        image="img3.png"
        title="It's not magic. It's training"
        :features="[
            'Your online and Offline training in one place',
            'Certificate to acquire at the best price',
            'Over 1k skills to learn'
        ]"
        cta-text="Book a Demo"
        cta-href="#"
    />
--}}

@props([
    'image' => 'img3.png',
    'title' => "It's not magic. It's training",
    'features' => [],
    'ctaText' => 'Book a Demo',
    'ctaHref' => '#',
    'subtitle' => 'Ready to ditch the CV struggle',
])

<section class="mt-8">
    <div class="flex flex-col md:flex-row items-center p-6">
        <!-- Image -->
        <div class="w-full md:w-1/2">
            <img 
                src="{{ asset('storage/' . $image) }}" 
                alt="{{ $title }}"
                class="w-full h-64 object-cover rounded-lg shadow-md"
            >
        </div>

        <!-- Content -->
        <div class="w-full md:w-1/2 mt-4 md:mt-0 md:pl-6">
            <h3 class="text-2xl font-bold text-gray-900">{{ $title }}</h3>

            @if ($features && count($features) > 0)
                <ul class="mt-4 space-y-2 text-gray-600">
                    @foreach ($features as $feature)
                        <li class="flex items-center">
                            <span class="w-4 h-4 mr-2 text-green-500">Check</span>
                            {{ $feature }}
                        </li>
                    @endforeach
                </ul>
            @endif

            @if ($subtitle)
                <p class="mt-4 text-gray-700">{{ $subtitle }}</p>
            @endif

            <a 
                href="{{ $ctaHref }}" 
                class="mt-4 inline-block bg-sky-500 text-white font-semibold py-2 px-6 rounded-full hover:bg-sky-600 transition-colors duration-300"
            >
                {{ $ctaText }}
            </a>
        </div>
    </div>
</section>