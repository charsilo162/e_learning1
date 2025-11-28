<header class="sticky top-0 inset-x-0 z-50 w-full text-base bg-white border-b shadow-sm
               dark:bg-neutral-900 dark:border-neutral-700">
    <nav class="relative max-w-7xl mx-auto flex flex-wrap md:flex-nowrap items-center
                justify-between py-3 px-4 md:py-4">
        <!-- Mobile Toggle Button -->
        <div class="lg:hidden me-4">
            <button type="button"
                    class="hs-overlay-toggle flex justify-center items-center size-9
                            border border-gray-200 text-gray-700 rounded-full hover:bg-gray-100"
                    data-hs-overlay="#mobile-menu">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                     width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                    <line x1="3" x2="21" y1="6" y2="6"/>
                    <line x1="3" x2="21" y1="12" y2="12"/>
                    <line x1="3" x2="21" y1="18" y2="18"/>
                </svg>
            </button>
        </div>

        <!-- Logo -->
        <x-shared.logo />

        <!-- Desktop Navigation -->
        <div class="hidden lg:flex items-center space-x-6">
            <x-navigation.main-menu
                :class="'flex flex-col md:flex-row md:items-center md:justify-end
                         gap-1 md:gap-5 mt-3 md:mt-0 pt-2 pb-4 md:py-0 md:ps-7
                         border-t md:border-t-0 text-gray-700 dark:text-gray-200'" />
        </div>

        <!-- ==================== USER SECTION ==================== -->
@if(session('user'))
    <div x-data="{ open: false }" class="relative">
        <button @click="open = !open" @click.outside="open = false" type="button"
                class="inline-flex items-center gap-x-2 text-sm font-medium rounded-full bg-gray-100 text-gray-800 hover:bg-gray-200 p-2 dark:bg-neutral-800 dark:text-gray-200 dark:hover:bg-neutral-700">
            {{ session('user.name') }}
            <svg class="w-4 h-4 transition-transform" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </button>

        <div x-show="open" x-transition x-cloak class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg shadow-lg ring-1 ring-black ring-opacity-5 dark:bg-neutral-800 dark:ring-neutral-700 z-50">
            <div class="py-1">
                {{-- <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-neutral-700">Profile</a> --}}
                @if((session('user.role') ?? session('user.type') ?? '') !== 'user')
                    <a href="{{ route('profile2') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-neutral-700">Admin Panel</a>
                @endif

                <!-- FINAL WINNING LOGOUT -->
               <a href="#" onclick="
    event.preventDefault();
    fetch('http://127.0.0.1:8001/api/logout', {
        method: 'POST',
        headers: {
            'Authorization': 'Bearer {{ session('api_token') }}',
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json'
        }
    }).then(() => {
        window.location = '/clear-session';
    }).catch(() => {
        window.location = '/clear-session';
    });
" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-neutral-700">
    Log Out
</a>
            </div>
        </div>
    </div>
@else
    {{-- <a href="{{ route('login') }}" class="...">Login</a> --}}

     <a href="{{ route('logins') }}"
               class="inline-flex items-center gap-x-2 text-sm font-medium
                      rounded-full bg-gray-100 text-gray-800 hover:bg-gray-200 p-2
                      dark:bg-neutral-800 dark:text-gray-200 dark:hover:bg-neutral-700">
                Login
            </a>
     <a href="{{ route('registers') }}"
               class="inline-flex items-center gap-x-2 text-sm font-medium
                      rounded-full bg-gray-100 text-gray-800 hover:bg-gray-200 p-2
                      dark:bg-neutral-800 dark:text-gray-200 dark:hover:bg-neutral-700">
                Sign UP
            </a>
@endif

        <!-- ==================================================== -->
    </nav>
</header>