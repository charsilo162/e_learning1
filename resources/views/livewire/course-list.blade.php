<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    {{-- NEW: TOP FILTER BAR (From your provided code, updated for Livewire) --}}
    <div class="mb-4 px-4 sm:px-0">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4"> 
            
            {{-- Price and Type Filters --}}
            <div class="flex flex-wrap gap-2 order-2 md:order-1 w-full md:w-auto"> 
            
                <h2 class="text-2xl font-bold text-gray-800 hidden md:block">Filter Courses</h2> 
            
                {{-- Price Filters --}}
                <button 
                    wire:click="setPriceFilter('0-10000')" 
                    @class([
                        'flex items-center py-2 px-4 rounded-full text-sm font-medium border transition duration-150', 
                        'bg-red-600 text-white border-transparent' => $filterPrice === '0-10000',
                        'bg-white text-gray-700 hover:bg-gray-50 border-gray-200' => $filterPrice !== '0-10000',
                    ])> 
                    <span class="h-2 w-2 rounded-full mr-2" style="background-color: #f40d15ff;"></span>
                    < ₦10,000
                </button> 
                
                <button 
                    wire:click="setPriceFilter('10000-50000')"
                    @class([
                        'flex items-center py-2 px-4 rounded-full text-sm font-medium border transition duration-150',
                        'bg-green-500 text-white border-transparent' => $filterPrice === '10000-50000',
                        'bg-white text-gray-700 hover:bg-gray-50 border-gray-200' => $filterPrice !== '10000-50000',
                    ])> 
                    <span class="h-2 w-2 rounded-full mr-2 bg-white"></span>
                    ₦10k - ₦50k
                </button> 
                
                <button 
                    wire:click="setPriceFilter('50000-100000')"
                    @class([
                        'flex items-center py-2 px-4 rounded-full text-sm font-medium border transition duration-150',
                        'bg-orange-400 text-white border-transparent' => $filterPrice === '50000-100000',
                        'bg-white text-gray-700 hover:bg-gray-50 border-gray-200' => $filterPrice !== '50000-100000',
                    ])> 
                    <span class="h-2 w-2 rounded-full mr-2" style="background-color: #cfbfafff;"></span>
                    ₦50k - ₦100k
                </button> 

                {{-- Type Filters (Moved from below, simplified/replaced existing buttons) --}}
                <button 
                    wire:click="setFilter('online')" 
                    @class([
                        'py-2 px-4 rounded-full font-semibold text-sm transition shadow',
                        'bg-indigo-600 text-white hover:bg-indigo-700' => $filterType === 'online',
                        'bg-gray-100 text-gray-700 hover:bg-gray-200' => $filterType !== 'online',
                    ])
                >
                    Online
                </button>
                <button 
                    wire:click="setFilter('physical')" 
                    @class([
                        'py-2 px-4 rounded-full font-semibold text-sm transition shadow',
                        'bg-sky-500 text-white hover:bg-sky-600' => $filterType === 'physical',
                        'bg-gray-100 text-gray-700 hover:bg-gray-200' => $filterType !== 'physical',
                    ])
                >
                    Physical
                </button>
                
                <button 
                    wire:click="setFilter('all')" 
                    @class([
                        'py-2 px-4 rounded-full font-semibold text-sm transition shadow',
                        'bg-gray-700 text-white hover:bg-gray-800' => $filterType === 'all' && $filterPrice === 'all',
                        'bg-gray-100 text-gray-700 hover:bg-gray-200' => $filterType !== 'all' || $filterPrice !== 'all',
                    ])
                >
                    Clear All Filters
                </button> 
            </div>
            
            {{-- Search Bar for Location --}}
            <div class="flex gap-2 order-1 md:order-2 w-full md:w-auto md:max-w-xs"> 
                <div class="relative flex-grow"> 
                    {{-- Use wire:model.live to update the property and re-render automatically --}}
                    <input 
                        type="text" 
                        placeholder="Enter Location" 
                        class="py-2 px-4 pr-10 border border-gray-300 rounded-lg w-full text-sm focus:ring-blue-500 focus:border-blue-500"
                        wire:model.live.debounce.300ms="searchLocation" 
                    > 
                    <svg class="absolute right-3 top-1/2 -translate-y-1/2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg> 
                </div> 
                
                {{-- Optional: Keep a dedicated search button if wire:model.live isn't used --}}
                <button 
                    wire:click="doSearchLocation"
                    class="py-2 px-4 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition duration-200 flex-shrink-0"
                >
                    Search
                </button> 
            </div>
        </div>
    </div>
    
    {{-- Original Conditional Toggle Buttons (Can be removed as they are now in the top bar) --}}
    @if ($showButtons)
        {{-- You can remove this entire block since you moved them to the main filter bar --}}
        {{-- <div class="flex justify-center space-x-4 mb-8 pt-6"> ... buttons ... </div> --}}
    @endif
    
    {{-- Renders the Generic List Section Blade Component (Existing) --}}
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