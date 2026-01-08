@php
    $navLinks = [
        ['name' => 'Home', 'route' => 'home', 'path_segment' => 'home'], 
        ['name' => 'Category', 'route' => 'category.index', 'path_segment' => 'category.index'],
        ['name' => 'About Us', 'route' => 'about-us', 'path_segment' => 'about-us'],
        ['name' => 'Contact Us', 'route' => 'contact_us', 'path_segment' => 'contact_us'],
        ['name' => 'FAQs', 'route' => 'faqs', 'path_segment' => 'faqs'],
    ];
@endphp

{{-- Increased md:gap-16 to take advantage of the full-width header --}}
<div {{ $attributes->merge(['class' => 'flex flex-col md:flex-row items-start md:items-center gap-6 md:gap-16']) }}>
    @foreach ($navLinks as $link)
        @php
            $href = route($link['route']);
            $isActive = request()->routeIs($link['route']) || ($link['path_segment'] !== '/' && request()->is($link['path_segment'] . '*'));
            
            $classes = $isActive 
                ? 'text-sky-600 font-bold border-b-2 border-sky-600' 
                : 'text-gray-700 dark:text-neutral-300 hover:text-sky-600 transition-all hover:scale-105';
        @endphp

        <a href="{{ $href }}" class="text-sm font-medium py-2 md:py-1 px-2 {{ $classes }}">
            {{ $link['name'] }}
        </a>
    @endforeach
</div>