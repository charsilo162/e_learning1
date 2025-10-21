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





<!-- === MY COURSES SECTION === -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-white mt-8 pb-12">

  <!-- Tabs and Actions Row -->
  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between border-b border-gray-200 pb-4">
    <!-- Tabs -->
    <div class="flex items-center space-x-6">
      <button
        class="text-xl font-semibold text-gray-800 relative after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px] after:bg-gray-900 after:rounded-full">
        My Courses
      </button>
      <button
        class="text-xl font-semibold text-gray-500 hover:text-gray-700 transition">
        My Training
      </button>
    </div>

    <!-- Search -->
    <div class="relative mt-4 sm:mt-0">
      <input
        type="text"
        placeholder="Search Courses"
        class="pl-10 pr-4 py-2 border rounded-full text-sm focus:ring-2 focus:ring-gray-800 focus:outline-none w-64"
      />
      <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" xmlns="http://www.w3.org/2000/svg" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
      </svg>
    </div>
  </div>

  <!-- Post Buttons -->
  <div class="flex flex-wrap items-center gap-3 mt-6">
    <livewire:post-course-button />
    <livewire:post-center-button />
  </div>

  <!-- Courses Grid -->
  <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    
    <!-- === COURSE CARD === -->
    <div class="relative bg-white border rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition group">
      <!-- Thumbnail -->
      <div class="relative">
        <img src="{{ asset('storage/img3.png') }}" alt="Course thumbnail" class="h-48 w-full object-cover">

        <!-- Action Buttons -->
        <div class="absolute top-3 right-3 flex space-x-2 opacity-0 group-hover:opacity-100 transition">
          <!-- Edit -->
          <button
            class="bg-white p-1.5 rounded-full shadow hover:bg-gray-100"
            title="Edit Course">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15.232 5.232l3.536 3.536M9 13l6.293-6.293a1 1 0 011.414 0l2.586 2.586a1 1 0 010 1.414L13 17H9v-4z" />
            </svg>
          </button>

          <!-- Delete -->
          <button
            class="bg-white p-1.5 rounded-full shadow hover:bg-gray-100"
            title="Delete Course">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Body -->
      <div class="p-4">
        <h3 class="text-lg font-semibold text-gray-800 truncate">How to sew Male Suit</h3>

        <div class="mt-2 flex items-center text-sm text-gray-500 space-x-2">
          <span>(345 registered)</span>
          <span class="px-2 py-0.5 text-xs rounded-full bg-gray-100 text-gray-700">Physical</span>
        </div>

        <div class="mt-3 flex items-center text-xs text-gray-500 space-x-4">
          <span>💬 324 comments</span>
          <span>❤️ 123 likes</span>
          <span>👁️ 123 views</span>
        </div>

        <div class="mt-3 flex items-center text-yellow-500">
          ⭐⭐⭐⭐☆ <span class="ml-2 text-sm text-gray-500">4.34</span>
        </div>

        <div class="mt-4 flex items-center justify-between">
          <span class="text-blue-600 text-sm font-medium">23,343 enrolled</span>
          <span class="text-gray-900 font-bold text-lg">#7,500</span>
        </div>
      </div>
    </div>

    <!-- Duplicate card for layout preview -->
    <div class="relative bg-white border rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition group">
      <div class="relative">
        <img src="{{ asset('storage/img3.png') }}" alt="Course thumbnail" class="h-48 w-full object-cover">
        <div class="absolute top-3 right-3 flex space-x-2 opacity-0 group-hover:opacity-100 transition">
          <button class="bg-white p-1.5 rounded-full shadow hover:bg-gray-100" title="Edit Course">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15.232 5.232l3.536 3.536M9 13l6.293-6.293a1 1 0 011.414 0l2.586 2.586a1 1 0 010 1.414L13 17H9v-4z" />
            </svg>
          </button>
          <button class="bg-white p-1.5 rounded-full shadow hover:bg-gray-100" title="Delete Course">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>

      <div class="p-4">
        <h3 class="text-lg font-semibold text-gray-800 truncate">Tailoring Essentials</h3>
        <div class="mt-2 flex items-center text-sm text-gray-500 space-x-2">
          <span>(200 registered)</span>
          <span class="px-2 py-0.5 text-xs rounded-full bg-gray-100 text-gray-700">Online</span>
        </div>
        <div class="mt-3 flex items-center text-xs text-gray-500 space-x-4">
          <span>💬 123 comments</span>
          <span>❤️ 87 likes</span>
          <span>👁️ 532 views</span>
        </div>
        <div class="mt-3 flex items-center text-yellow-500">
          ⭐⭐⭐⭐⭐ <span class="ml-2 text-sm text-gray-500">4.9</span>
        </div>
        <div class="mt-4 flex items-center justify-between">
          <span class="text-blue-600 text-sm font-medium">10,543 enrolled</span>
          <span class="text-gray-900 font-bold text-lg">#6,000</span>
        </div>
      </div>
    </div>
  </div>
</div>


</x-layouts.profiledashboard>

