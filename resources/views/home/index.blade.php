<x-layouts.app title="eTalent Home">
    {{-- Header --}}
    <x-navigation.header-original />

    {{-- Hero Carousel --}}
    <x-carousel :slides="[
        [
            'img' => 'img4.jpg',
            'title' => 'Discover Our Services',
            'text' => 'We provide top-quality solutions to help your business grow and succeed.'
        ],
        [
            'img' => 'img1.png',
            'title' => 'Modern Workspaces',
            'text' => 'Flexible, innovative spaces designed for productivity and comfort.'
        ],
        [
            'img' => 'img2.jpg',
            'title' => 'Join Our Community',
            'text' => 'Connect, collaborate, and create with like-minded professionals.'
        ],
    ]" />

    {{-- Popular Categories --}}
    <livewire:popular-category-cards />

    {{-- Home Center List --}}
    <livewire:home-center-list />

    {{-- Short Videos Slider --}}
    {{-- <x-short-videos /> --}}
    <x-short-videos />
    {{-- Banner CTA --}}
    <x-banner.overlay
        image="img3.png"
        title="Be engaged with the best Tutors Nationwide"
        subtitle="with experiences from different parts of the Globe"
        :button="['text' => 'Apply', 'href' => '#']"
    />

    {{-- Quick Picks --}}
    <section class="bg-sky-500 text-white py-8 rounded-lg mb-8 mt-4 p-4">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Quick Picks</h2>
            <div class="flex items-center space-x-4 mt-4 sm:mt-0">
                <button class="flex items-center px-3 py-1 bg-white bg-opacity-20 rounded-full text-sm">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    What's around?
                </button>
                <div class="relative">
                    <input type="text" class="pl-4 pr-10 py-2 rounded-full text-black focus:outline-none" placeholder="Use current location">
                    <button class="absolute right-0 top-0 bottom-0 px-3 flex items-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
                <select class="px-4 py-2 rounded-full text-black focus:outline-none">
                    <option>Category</option>
                    <option>Tech</option>
                </select>
            </div>
        </div>
        <livewire:simple-category-grid />
    </section>

    {{-- Training Promo --}}
    <x-training-promo
        image="img3.png"
        title="It's not magic. It's training"
        :features="[
            'Your online and Offline training in one place',
            'Certificate to acquire at the best price',
            'Over 1k skills to learn'
        ]"
        subtitle="Ready to ditch the CV struggle"
        cta-text="Book a Demo"
        cta-href="#"
    />

    {{-- Why Users Love Us --}}
    <x-why-love-us />
    <livewire:featured-venues />
    {{-- Clients --}}
    <x-clients-section :logos="[
        'logo4.png', 'logo3.png', 'logo5.png', 'logo1.jpg', 'logo2.jpg'
    ]" />

    {{-- Explore More --}}
    <x-explore-more />

    {{-- Groups --}}
    <x-groups-you-may-like />

    {{-- Contact Footer --}}
    <x-contact-footer 
        phone="+08453889243"
        email="info@etraining.net"
        address="3 Walker Street, Edinburgh, EH3 7JY"
        :social="[
            'LinkedIn' => '#',
            'X (formerly Twitter)' => '#',
            'YouTube' => '#'
        ]"
    />

    {{-- Footer --}}
    <x-navigation.footer />
</x-layouts.app>