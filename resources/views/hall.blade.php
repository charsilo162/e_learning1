<x-layouts.app title="eTalent Home">
    {{-- <x-navigation.header /> --}}

    <x-navigation.header-original />

  <!-- Slider -->



<section class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
<div class="mb-8 px-4 sm:px-0">
    
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Academic Hall for rent around you</h2> 
    
    <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4"> 
        
     <div  class="flex flex-wrap gap-2 order-2 md:order-1 w-full md:w-auto"> 
    
    <button style="background-color: #f40d15ff;" class="flex items-center py-2 px-4 rounded-full text-sm font-medium border border-gray-200 bg-white text-gray-700 hover:bg-gray-50 transition duration-150"> 
        <span class="h-2 w-2 rounded-full mr-2" style="background-color: #080203ff;"></span>
        &lt;10000
    </button> 
    
    <button class="flex items-center py-2 px-4 rounded-full text-sm font-medium border border-transparent bg-green-500 text-white hover:bg-green-600 transition duration-150"> 
        <span class="h-2 w-2 rounded-full mr-2 bg-white"></span>
        10000-50K
    </button> 
    
    <button style="background-color: #f6993f;" class="flex items-center py-2 px-4 rounded-full text-sm font-medium border border-gray-200 bg-white text-gray-700 hover:bg-gray-50 transition duration-150"> 
        <span class="h-2 w-2 rounded-full mr-2" style="background-color: #cfbfafff;"></span>
        50k-100k
    </button> 
    
    <button style="background-color: #9561e1;" class="flex items-center py-2 px-4 rounded-full text-sm font-medium border border-gray-200 bg-white text-gray-700 hover:bg-gray-50 transition duration-150"> 
        <span class="h-2 w-2 rounded-full mr-2" style="background-color: #6cb2eb;"></span>
        Premiums
    </button> 
    
    <button style="background-color: #6cb2eb;" class="flex items-center py-2 px-4 rounded-full text-sm font-medium border border-gray-200 bg-white text-gray-700 hover:bg-gray-50 transition duration-150"> 
        <span class="h-2 w-2 rounded-full mr-2" style="background-color: #9561e1;"></span>
        Recommended
    </button> 
</div>
        
        <div class="flex gap-2 order-1 md:order-2 w-full md:w-auto md:max-w-xs"> 
            <div class="relative flex-grow"> 
                <input type="text" placeholder="Enter Location" class="py-2 px-4 pr-10 border border-gray-300 rounded-lg w-full text-sm focus:ring-blue-500 focus:border-blue-500"> 
                <svg class="absolute right-3 top-1/2 -translate-y-1/2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg> 
            </div> 
            
            <button class="py-2 px-4 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition duration-200 flex-shrink-0">Search</button> 
        </div>
    </div>
</div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
 @for ($i = 1; $i <= 6; $i++)
    <div class="relative w-full"> 
        
        <div class="h-48 w-full rounded-xl overflow-hidden shadow-lg mb-[-20px] z-10 relative"> 
            <img src="{{ asset('storage/img1.png') }}" alt="Academic Hall" class="w-full h-full object-cover">
        </div>
        
        <div class="bg-white rounded-lg shadow-xl overflow-hidden p-4 mx-1 relative z-20">
            <div class="pt-5">
                <div class="flex items-center mb-2">
                    <img src="{{ asset('storage/logo1.png') }}" alt="Studio Logo" class="h-6 w-6 rounded-full mr-2">
                    <div>
                        <p class="text-sm font-semibold text-gray-800">Joint Performance Studio</p>
                        <p class="text-xs text-gray-500">345 songs</p>
                    </div>
                </div>
                <p class="text-sm text-gray-600 mb-1">Manager: <span class="font-medium text-gray-800">Johnny Drill</span></p>
                <p class="text-sm text-gray-600 mb-4">Base Price: <span class="font-bold text-gray-900">₹10,500/hr</span></p>
                
                <div class="flex items-center justify-between text-xs text-gray-500 mb-2">
                    <div class="flex items-center">
                        <svg class="h-4 w-4 mr-1 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                        234 comment
                    </div>
                    <div class="flex items-center">
                        <svg class="h-4 w-4 mr-1 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                        234 share
                    </div>
                    <div class="flex items-center">
                        <svg class="h-4 w-4 mr-1 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                        234 like
                    </div>
                    </div>
            </div>
        </div>
    </div>
     @endfor
    </div>

    <div class="flex justify-center mt-8">
        <button class="bg-blue-600 text-white py-2 px-8 rounded-lg font-medium hover:bg-blue-700 transition duration-200">See more</button>
    </div>
   
</section>

 <livewire:home-center-list />

    <x-navigation.footer />
</x-layouts.app>