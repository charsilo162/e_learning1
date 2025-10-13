<header class="sticky top-0 inset-x-0 z-50 w-full text-base bg-white border-b shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
   <nav class="relative max-w-7xl mx-auto flex flex-wrap md:flex-nowrap items-center justify-between py-3 px-4 md:py-4">
        <!-- Mobile Toggle Button -->
        <div class="lg:hidden me-4">
            <button type="button" class="hs-overlay-toggle flex justify-center items-center size-9 border border-gray-200 text-gray-700 rounded-full hover:bg-gray-100"
                    data-hs-overlay="#mobile-menu">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                    :class="'flex flex-col md:flex-row md:items-center md:justify-end gap-1 md:gap-5 mt-3 md:mt-0 pt-2 pb-4 md:py-0 md:ps-7 border-t md:border-t-0 text-gray-700 dark:text-gray-200'" 
                />
        </div>

        <!-- User Profile and Log Out (on the right side) -->
        <div class="flex items-center gap-x-3">
            <span class="text-sm text-gray-600 hidden sm:block">Welcome, Admin</span>
            <button type="button" class="inline-flex items-center gap-x-2 text-sm font-medium rounded-full bg-gray-100 text-gray-800 hover:bg-gray-200 p-2">
                Log Out
            </button>
        </div>
    </nav>
</header>
