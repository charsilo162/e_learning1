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

    {{-- Post a center button --}}
    <button type="button" 
            wire:click="$set('showModal', true)" 
            class="py-2 px-4 inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none transition duration-150 ease-in-out">
        Post a center
    </button>

    {{-- Post a course button --}}
    <button type="button" 
            wire:click="$set('showModal', true)"
            class="py-2 px-4 inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-black text-white hover:bg-gray-800 disabled:opacity-50 disabled:pointer-events-none transition duration-150 ease-in-out">
        Post a course
    </button>

</div>

{{-- Components still attached here --}}
{{-- @livewire('post-center')
@livewire('post-course') --}}
 <livewire:post-center />
 <livewire:post-course />
        </div>
    </div>

    {{-- 🛑 IMPORTANT: Attach the components here at the end of your main container 🛑 --}}
    {{-- The components themselves handle the modal view and logic. --}}
    {{-- @livewire('post-center')
    @livewire('post-course') --}}

</div>

{{-- Note: For a more advanced and clean solution, consider using the Livewire Modals Package. --}}

 	

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


<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        
        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
            <h3 class="text-sm font-medium text-gray-500">Total Views</h3>
            <p class="text-3xl font-bold text-gray-800 mt-1">10,680</p>
            </div>

        <div class="bg-gray-100 md:col-span-2 p-6 rounded-xl shadow-md border border-gray-100">
            <h3 class="text-sm font-semibold text-gray-800 mb-4">Previous month performance</h3>
            
            <div id="performance-chart" class="w-full h-64">
                </div>
        </div>
    </div>

    <div class="mt-4">
        <div class="bg-gray-100 p-6 rounded-xl shadow-md border border-gray-100">
            <h3 class="text-sm font-semibold text-gray-800 mb-4">Center visits</h3>
            
            <div id="visits-chart" class="w-full h-80">
                </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4">
        
        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 md:col-span-1">
            <h3 class="text-base font-semibold text-blue-500 mb-4">Reached Audience</h3>
            <div id="audience-chart" class="w-full h-40"></div>
        </div>
        
        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 md:col-span-2">
            <h3 class="text-base font-semibold text-blue-500 mb-4">Target</h3>
            <div id="target-chart" class="w-full h-40">


<div class="container">
  <div class="donut-chart-block block"> 
		<div class="donut-chart">
			<div id="part1" class="portion-block"><div class="circle"></div></div>
			<div id="part2" class="portion-block"><div class="circle"></div></div>
			<div id="part3" class="portion-block"><div class="circle"></div></div>
			<p class="center"></p>        
		</div>
   </div>
</div>

            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 md:col-span-1">
            <h3 class="text-base font-semibold text-blue-500 mb-4">Engagements</h3>
            <div id="engagements-chart" class="w-full h-40"></div>
        </div>
    </div>
</div>
</x-layouts.profiledashboard>

