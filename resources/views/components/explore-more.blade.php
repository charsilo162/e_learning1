{{-- 
    Component: Explore More Cards
    Matches original dual card layout
--}}

@props([
    'cards' => [
        [
            'image' => 'img1.png',
            'logo' => 'LOGO',
            'text' => 'Get evidence of existence and visibility for every one and friends, and family and dissolve every form of doubt by studying on those people...',
            'button' => 'EXPLORE MORE'
        ],
        [
            'image' => 'img1.png',
            'logo' => 'LOGO',
            'text' => 'Get evidence of existence and visibility for every one and friends, and family and dissolve every form of doubt by studying on those people...',
            'button' => 'EXPLORE MORE'
        ],
    ],
    'title' => 'Explore more with essential',
    'subtitle' => 'Promotions, deals and special offers for you'
])

<section class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
    <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ $title }}</h3>
    <p class="text-gray-600 mb-8">{{ $subtitle }}</p>
   
    <div class="flex flex-col md:flex-row gap-8">
        @foreach ($cards as $card)
            <div class="w-full md:w-1/2 rounded-xl overflow-hidden shadow-lg relative h-60">
                <img src="{{ asset('storage/' . $card['image']) }}" 
                     alt="Promo" 
                     class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-end p-6">
                    <p class="text-xl font-semibold text-white mb-2">{{ $card['logo'] }}</p>
                    <p class="text-sm text-white mb-6">{{ $card['text'] }}</p>
                    <button class="bg-white text-gray-800 py-2 px-4 rounded-lg font-medium w-fit hover:bg-gray-100 transition duration-200">
                        {{ $card['button'] }}
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</section>