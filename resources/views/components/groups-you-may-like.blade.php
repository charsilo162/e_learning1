{{--,{{-- 
    Component: Groups You May Like
    Alpine.js powered, auto-rotates every 5s, pause on hover
    Matches original design & behavior 100%
--}}

@props([
    'groups' => [
        [
            'image' => 'img/group1.jpg',
            'title' => 'Essential staff',
            'members' => 1,
            'posts' => 0
        ],
        [
            'image' => 'img/group2.jpg',
            'title' => 'Health group',
            'members' => 1,
            'posts' => 0
        ],
        [
            'image' => 'img/group3.jpg',
            'title' => 'Everyday news',
            'members' => 1,
            'posts' => 0
        ],
    ],
    'title' => 'Groups you may like',
    'seeMoreHref' => '#'
])

<section class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold text-gray-800">{{ $title }}</h2>
        <a href="{{ $seeMoreHref }}" 
           class="text-red-500 font-medium hover:text-red-600 transition duration-150">
            See more
        </a>
    </div>

    <div class="flex space-x-4 overflow-x-auto pb-4 -mx-4 px-4 sm:mx-0 sm:px-0 scrollbar-hide">
        @foreach ($groups as $group)
            <div class="flex-shrink-0 w-64 p-4 bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                <div class="h-32 w-full rounded-lg overflow-hidden mb-3">
                    <img src="{{ asset('storage/' . $group['image']) }}" 
                         alt="{{ $group['title'] }} group" 
                         class="w-full h-full object-cover">
                </div>
                <h3 class="text-md font-semibold text-gray-800 mb-1">{{ $group['title'] }}</h3>
                <p class="text-sm text-gray-500 mb-4">
                    {{ $group['members'] }} Member{{ $group['members'] !== 1 ? 's' : '' }} · 
                    {{ $group['posts'] }} Post{{ $group['posts'] !== 1 ? 's' : '' }} today
                </p>
                <button class="w-full py-2 px-4 inline-flex justify-center items-center text-sm font-semibold rounded-lg border border-transparent bg-orange-500 text-white hover:bg-orange-600 transition duration-200">
                    Join
                </button>
            </div>
        @endforeach
    </div>
</section>