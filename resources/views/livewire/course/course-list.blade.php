<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
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

    <x-shared.list-section 
        :title="$sectionTitle" 
        :items="$items" 
        :show-see-all="!$usePagination"
        :see-all-route="route('category.index', [
            'type' => $filterType !== 'all' ? $filterType : null,
            'price' => $filterPrice !== 'all' ? $filterPrice : null,
            'location' => $searchLocation ?: null
        ])"
    />

    {{-- ONLY SHOW PAGINATION WHEN $usePagination IS TRUE --}}
    @if ($usePagination && isset($courses['links']))
        <div class="mt-8">
            {{ $courses->links() }} {{-- Laravel automatically handles array-based pagination --}}
        </div>
    @endif
</div>