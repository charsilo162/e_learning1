<div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4"> 
    
    {{-- Price and Type Filters --}}
    <div class="flex flex-wrap gap-2 order-2 md:order-1 w-full md:w-auto"> 
        <h2 class="text-2xl font-bold text-gray-800 hidden md:block">Filter Courses</h2> 
        
        {{-- Inject Dedicated Price Filter --}}
        <livewire:course-price-filter :filterPrice="$filterPrice" key="price-filter-buttons" />
        
        {{-- Inject Dedicated Type Filter --}}
        {{-- <livewire:course-type-filter :filterType="$filterType" key="type-filter-buttons" /> --}}

        {{-- Clear All Button --}}
        <button 
            wire:click="clearAllFilters" 
            @class([
                'py-2 px-4 rounded-full font-semibold text-sm transition shadow',
                'bg-gray-700 text-white hover:bg-gray-800' => $filterType !== 'all' || $filterPrice !== 'all' || $searchLocation !== '',
                'bg-gray-100 text-gray-700' => $filterType === 'all' && $filterPrice === 'all' && $searchLocation === '',
            ])
        >
            Clear All Filters
        </button> 
    </div>
    
    {{-- Inject Dedicated Location Search --}}
    <livewire:course-location-search :searchLocation="$searchLocation" key="location-search-input" />
</div>