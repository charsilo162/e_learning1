<x-layouts.profiledashboard title="Course Listings">

  
<div class="bg-white pt-6 pb-4 sm:pt-10 sm:pb-6 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
            
            <div class="flex flex-col sm:flex-row items-start space-y-3 sm:space-y-0 sm:space-x-4 w-full"> 
                
                <div class="flex items-start space-x-4">
                    <div class="shrink-0">
                        <img class="h-16 w-16 rounded-full object-cover" src="{{ asset('storage/img3.png') }}" alt="Ishola Balogun">
                    </div>
                    
                    <div class="flex flex-col">
                        <h1 class="text-xl font-semibold text-gray-800">Ishola Balogun</h1>
                        <p class="text-sm text-gray-500 mt-0.5">@emailaddress</p>
                        
                        <div class="flex flex-wrap items-center space-x-2 sm:space-x-4 mt-1 text-sm text-gray-500">
                            <span>2 completed Videos</span>
                            <span class="text-gray-300 hidden sm:inline">|</span> 
                            <span>2 pending</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 sm:mt-0 flex flex-col sm:flex-row sm:space-x-3 space-y-2 sm:space-y-0">

                {{-- 🛑 Use the new Button component here 🛑 --}}
                <livewire:post-center-button />

                {{-- 🛑 Use the new Button component here 🛑 --}}
                <livewire:post-course-button />

            </div>


        </div>
         <livewire:post-center />
            <livewire:post-course />
    </div>

</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-white border-b border-gray-200">
    <nav class="flex flex-wrap space-x-8" aria-label="Tabs">
        <a href="home" class="py-4 px-1 mb-2 sm:mb-0 inline-flex items-center gap-x-2 text-base font-medium text-black relative before:absolute before:bottom-0 before:start-0 before:w-full before:h-0.5 before:bg-black" aria-current="page">
            Home
        </a>
        <a href="{{ route('my.videos') }}" class="py-4 px-1 mb-2 sm:mb-0 inline-flex items-center gap-x-2 text-base font-medium text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out">
            My Videos
        </a>
        <a href="#" class="py-4 px-1 mb-2 sm:mb-0 inline-flex items-center gap-x-2 text-base font-medium text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out">
            Overview
        </a>
    </nav>
</div>




  <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-white mt-8 pb-12 shadow-sm sm:rounded-lg">

            <!-- Tabs and Actions Row -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between border-b border-gray-200 pb-4">
                <!-- Tabs -->
                <div class="flex items-center space-x-6">
                    <button class="text-xl font-semibold text-gray-800 relative after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px] after:bg-gray-900 after:rounded-full">
                        My Courses
                    </button>
                    <button class="text-xl font-semibold text-gray-500 hover:text-gray-700 transition">
                        My Training
                    </button>
                </div>

                <!-- Search Input -->
                <div class="relative mt-4 sm:mt-0">
                    {{-- This input uses Alpine.js to dispatch an event to our Livewire component on input --}}
                    <input
                        type="text"
                        placeholder="Search Your Courses..."
                        class="pl-10 pr-4 py-2 border rounded-full text-sm focus:ring-2 focus:ring-gray-800 focus:outline-none w-64"
                        x-data
                        @input.debounce.300ms="$dispatch('search-updated', $event.target.value)"
                    />
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
                    </svg>
                </div>
            </div>

            <!-- Post Buttons -->
            <div class="flex flex-wrap items-center gap-3 mt-6">
                <livewire:post-course-button />
                <livewire:post-center-button />
            </div>

            <!-- This is where we embed our reusable, dynamic Livewire component -->
            <livewire:user-courses-list />

        </div>
    </div>

    {{-- IMPORTANT: Make sure the Edit Course Modal component is available on the page --}}
    <livewire:edit-course />

<div class="container mx-auto py-8">
        {{-- Add the Livewire Component here --}}
        @livewire('enrolled-courses')
    </div>



















    {{-- 🏛 Event Venues Section --}}



</x-layouts.profiledashboard>

