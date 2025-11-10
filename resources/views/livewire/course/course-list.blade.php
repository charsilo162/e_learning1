<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    {{-- 🚨 RENDER THE NEW DEDICATED FILTER BAR COMPONENT --}}
    {{-- This will only show if it's NOT a contextual/limited list --}}
    @if ($usePagination)
        <div class="mb-8 px-4 sm:px-0">
            <livewire:course.course-filter-bar 
                :filterType="$filterType" 
                :filterPrice="$filterPrice" 
                :searchLocation="$searchLocation" 
                :key="'main-filter-bar'"
            />
        </div>
    @endif
    
    {{-- Renders the Generic List Section Blade Component (No change needed here) --}}
    <x-shared.list-section 
        :title="$sectionTitle" 
        :items="$items" 
        :show-see-all="!$usePagination"
        see-all-route="{{ route('category.index', ['type' => $filterType, 'price' => $filterPrice, 'location' => $searchLocation]) }}" 
    />

    @if ($usePagination)
        <div class="mt-8">
            {{ $items->links() }}
        </div>
    @endif

</div>