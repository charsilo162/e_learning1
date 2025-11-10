<x-layouts.app title="Course Watch">
    <x-navigation.header-original />

    <main class="py-8">
        {{-- 
            Pass the course's ID to the Livewire component.
            Livewire will then use this ID in its mount method to fetch 
            the course and its videos.
        --}}
        
        @livewire('course.course-watch', ['courseId' => $course->id])
    </main>

    <x-navigation.footer />
</x-layouts.app>
