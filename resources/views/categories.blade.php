<x-layouts.appdashboard title="Course Listings" :activeCategorySlug="$categorySlug">

    {{-- Sidebar (left panel) --}}
    <livewire:category-sidebar :active-category-slug="$categorySlug" />

    {{-- Main content (course list) --}}
    @livewire('course-list', [
        'categorySlug' => $categorySlug,
        'usePagination' => true,
    ])

</x-layouts.appdashboard>

{{-- <x-layouts.appdashboard title="Course Listings" :activeCategorySlug="$categorySlug">

@livewire('course-list', [
    'categorySlug' => $activeCategorySlug ?? null,
    'usePagination' => true,
])
</x-layouts.appdashboard> --}}