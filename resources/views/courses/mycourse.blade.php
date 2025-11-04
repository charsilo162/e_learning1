<x-profile.dashboard-layout
    title="Course Listings"
    active-tab="course"
    :stats="['completed' => 2, 'pending' => 2]"
>

    <livewire:user-courses-list />

    <livewire:edit-course />

</x-profile.dashboard-layout>