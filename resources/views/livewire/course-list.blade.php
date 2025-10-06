<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    {{-- CONDITIONAL TOGGLE BUTTONS --}}
    @if ($showButtons)
        <div class="flex justify-center space-x-4 mb-8 pt-6">
            <button 
                wire:click="setFilter('online')" 
                @class([
                    'py-2 px-4 rounded-full font-semibold text-sm transition shadow',
                    'bg-sky-500 text-white hover:bg-sky-600' => $filterType === 'online',
                    'bg-gray-100 text-gray-700 hover:bg-gray-200' => $filterType !== 'online',
                ])
            >
                Virtual (Online)
            </button>
            <button 
                wire:click="setFilter('physical')" 
                @class([
                    'py-2 px-4 rounded-full font-semibold text-sm transition shadow',
                    'bg-sky-500 text-white hover:bg-sky-600' => $filterType === 'physical',
                    'bg-gray-100 text-gray-700 hover:bg-gray-200' => $filterType !== 'physical',
                ])
            >
                Physical (In-Person)
            </button>
            <button 
                wire:click="setFilter('all')" 
                @class([
                    'py-2 px-4 rounded-full font-semibold text-sm transition shadow',
                    'bg-sky-500 text-white hover:bg-sky-600' => $filterType === 'all',
                    'bg-gray-100 text-gray-700 hover:bg-gray-200' => $filterType !== 'all',
                ])
            >
                View All
            </button>
        </div>
    @endif
    
    {{-- Renders the Generic List Section Blade Component (NOW DYNAMIC) --}}
    <x-shared.list-section 
        :title="$sectionTitle" 
        :items="$items" 
        show-see-all 
        see-all-route="{{ route('courses.index', ['type' => $filterType]) }}" 
    />
</div>
