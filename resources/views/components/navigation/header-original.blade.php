<header class="sticky top-0 inset-x-0 z-50 w-full bg-white border-b shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
    {{-- Removed max-w-7xl and mx-auto to allow full edge-to-edge width --}}
    <nav class="w-full px-4 sm:px-8 lg:px-12" aria-label="Global">
        
        <div class="relative flex items-center justify-between h-16 md:h-24">
            
            <div class="flex-none">
                <x-shared.logo />
            </div>

            {{-- flex-grow ensures this area takes up all available middle space --}}
            <div class="hidden md:flex flex-grow items-center justify-center px-10">
                <x-navigation.main-menu />
            </div>

            <div class="flex items-center gap-x-4 md:gap-x-8">
                
                @if(session('user'))
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" @click.outside="open = false" 
                                class="inline-flex items-center gap-x-2 text-sm font-medium rounded-full bg-gray-100 px-4 py-2 dark:bg-neutral-800 dark:text-gray-200">
                            {{ session('user.name') }}
                            <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>

                        <div x-show="open" x-transition x-cloak class="absolute right-0 mt-3 w-48 bg-white dark:bg-neutral-800 border dark:border-neutral-700 shadow-xl rounded-xl z-50">
                            <div class="p-1">
                                <a href="{{ route('profile2') }}" class="block px-4 py-2 text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700">Panel</a>
                                <div class="h-px bg-gray-100 dark:bg-neutral-700 my-1"></div>
                                <a href="#" onclick="event.preventDefault(); handleLogout();" class="block px-4 py-2 text-sm text-red-600 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/20">Log Out</a>
                            </div>
                        </div>
                    </div> 
                @else
                    <div class="flex items-center gap-x-4 md:gap-x-6">
                        <a href="{{ route('logins') }}" class="text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-neutral-300 transition">Login</a>
                        <a href="{{ route('registers') }}" class="py-2.5 px-6 text-sm font-semibold rounded-full bg-blue-600 text-white hover:bg-blue-700 transition shadow-md">
                            Sign Up
                        </a>
                    </div>
                @endif

                <button type="button" class="hs-collapse-toggle md:hidden size-10 flex justify-center items-center rounded-full border border-gray-200 dark:border-neutral-700" 
                        data-hs-collapse="#navbar-collapse-basic">
                    <svg class="hs-collapse-open:hidden size-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                    <svg class="hs-collapse-open:block hidden size-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
            </div>
        </div>

        <div id="navbar-collapse-basic" class="hidden hs-collapse overflow-hidden transition-all duration-300 basis-full grow md:hidden">
            <div class="py-6 border-t border-gray-100 dark:border-neutral-800">
                <x-navigation.main-menu />
            </div>
        </div>
    </nav>
</header>
<script>
    function handleLogout() {
        fetch('http://127.0.0.1:8001/api/logout', {
            method: 'POST',
            headers: {
                'Authorization': 'Bearer {{ session('api_token') }}',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            }
        }).finally(() => { window.location = '/clear-session'; });
    }
</script>