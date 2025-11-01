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
        <a href="#" class="py-4 px-1 mb-2 sm:mb-0 inline-flex items-center gap-x-2 text-base font-medium text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out">
            Favorite Training
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


<livewire:featured-venues />
















    {{-- 🏛 Event Venues Section --}}
<div class="bg-gray-50 py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Featured Event Venues</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- Card 1 --}}
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden border border-gray-100 hover:shadow-md transition">
                <img src="{{ asset('storage/venues/venue1.jpg') }}" alt="Rena Rentals" class="w-full h-48 object-cover">
                <div class="p-5 space-y-2">
                    <span class="text-xs font-semibold text-red-600 bg-red-50 px-2 py-1 rounded">5% OFF</span>
                    <h3 class="text-lg font-bold text-gray-800">Rena Rentals</h3>
                    <p class="text-sm text-gray-500"><i class="fa-solid fa-location-dot"></i> Ikeja, Lagos State</p>

                    <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-sm text-gray-600 border-t pt-2">
                        <span>🏠 Furnished</span>
                        <span>🚻 Restroom</span>
                        <span>❄️ AC</span>
                        <span>👕 Changing Room</span>
                    </div>

                    {{-- 💰 Price side-by-side --}}
                    <div class="pt-3 flex items-baseline gap-3">
                        <p class="text-sm text-gray-500 line-through">₦250,000</p>
                        <p class="text-xl font-semibold text-gray-900">₦237,500</p>
                    </div>

                    <button
                        class="mt-3 w-full bg-white border-2 border-red-500 text-red-500 font-semibold py-2 rounded-full hover:bg-red-500 hover:text-white transition">
                        View Details →
                    </button>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden border border-gray-100 hover:shadow-md transition">
                <img src="{{ asset('storage/venues/venue2.jpg') }}" alt="Whitestone Event Centre, Abuja" class="w-full h-48 object-cover">
                <div class="p-5 space-y-2">
                    <h3 class="text-lg font-bold text-gray-800">Whitestone Event Centre, Abuja</h3>

                    <div class="text-sm text-gray-600 space-y-1">
                        <div class="flex flex-wrap items-center gap-x-3 gap-y-1">
                            <span><i class="fa-solid fa-location-dot"></i> Bwari, Abuja (FCT)</span>
                            <span>👥 500–800 Guests</span>
                        </div>
                        <div class="flex flex-wrap items-center gap-x-3 gap-y-1 border-t pt-2">
                            <span>🏠 Furnished</span>
                            <span>🚻 Restroom</span>
                            <span>❄️ AC</span>
                            <span>👕 Changing Room</span>
                        </div>
                    </div>

                    {{-- 💰 Price side-by-side (if discounted, show both) --}}
                    <div class="pt-3 flex items-baseline gap-3">
                        {{-- Example: old price (optional) --}}
                        {{-- <p class="text-sm text-gray-500 line-through">₦320,000</p> --}}
                        <p class="text-xl font-semibold text-gray-900">₦300,000</p>
                    </div>

                    <button
                        class="mt-3 w-full bg-white border-2 border-red-500 text-red-500 font-semibold py-2 rounded-full hover:bg-red-500 hover:text-white transition">
                        View Details →
                    </button>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden border border-gray-100 hover:shadow-md transition">
                <img src="{{ asset('storage/venues/venue3.jpg') }}" alt="The Haven Event Centre, PH" class="w-full h-48 object-cover">
                <div class="p-5 space-y-2">
                    <span class="text-xs font-semibold text-red-600 bg-red-50 px-2 py-1 rounded">2% OFF</span>
                    <h3 class="text-lg font-bold text-gray-800">The Haven Event Centre, PH</h3>
                    <p class="text-sm text-gray-500"><i class="fa-solid fa-location-dot"></i> Ikwerre, Rivers State</p>

                    <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-sm text-gray-600 border-t pt-2">
                        <span>🏠 Furnished</span>
                        <span>🚻 Restroom</span>
                        <span>❄️ AC</span>
                        <span>👕 Changing Room</span>
                    </div>

                    {{-- 💰 Price side-by-side --}}
                    <div class="pt-3 flex items-baseline gap-3">
                        <p class="text-sm text-gray-500 line-through">₦120,000</p>
                        <p class="text-xl font-semibold text-gray-900">₦117,600</p>
                    </div>

                    <button
                        class="mt-3 w-full bg-white border-2 border-red-500 text-red-500 font-semibold py-2 rounded-full hover:bg-red-500 hover:text-white transition">
                        View Details →
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>


</x-layouts.profiledashboard>

