<div id="mobile-menu"
     class="hs-overlay -translate-x-full transition-all duration-300 transform
            fixed top-0 start-0 bottom-0 z-40 w-64
            bg-gradient-to-b from-gray-900 via-slate-900 to-black
            lg:translate-x-0 lg:end-auto lg:bottom-0 lg:block
            pt-24 shadow-2xl"
     wire:ignore.self>

    {{-- Navigation --}}
    <nav class="px-4 space-y-2">

        @if((session('user.role') ?? session('user.type') ?? '') !== 'user')

            {{-- Categories --}}
            <a href="{{ route('category.list') }}"
               class="group flex items-center gap-x-3 py-3 px-4
                      text-sm rounded-xl font-medium
                      text-gray-200
                      hover:bg-white/10 hover:text-white
                      transition-all duration-200">
                <span>Categories</span>

                <span class="ml-auto h-2 w-2 rounded-full bg-blue-500
                             opacity-0 group-hover:opacity-100 transition"></span>
            </a>

            {{-- Draft --}}
            <a href="{{ route('courses.no-video') }}"
               class="group flex items-center gap-x-3 py-3 px-4
                      text-sm rounded-xl font-medium
                      text-gray-200
                      hover:bg-white/10 hover:text-white
                      transition-all duration-200">
                <span>Draft</span>

                <span class="ml-auto h-2 w-2 rounded-full bg-orange-500
                             opacity-0 group-hover:opacity-100 transition"></span>
            </a>
            
            <a href="{{ route('center.centers') }}"
               class="group flex items-center gap-x-3 py-3 px-4
                      text-sm rounded-xl font-medium
                      text-gray-200
                      hover:bg-white/10 hover:text-white
                      transition-all duration-200">
                <span>Centers</span>

                <span class="ml-auto h-2 w-2 rounded-full bg-orange-500
                             opacity-0 group-hover:opacity-100 transition"></span>
            </a>

            {{-- Profile --}}
            <a href="#"
               class="group flex items-center gap-x-3 py-3 px-4
                      text-sm rounded-xl font-medium
                      text-gray-200
                      hover:bg-white/10 hover:text-white
                      transition-all duration-200">
                <span>Profile</span>

                <span class="ml-auto h-2 w-2 rounded-full bg-violet-500
                             opacity-0 group-hover:opacity-100 transition"></span>
            </a>

        @else
         <a href="{{ route('home') }}"
               class="group flex items-center gap-x-3 py-3 px-4
                      text-sm rounded-xl font-medium
                      text-gray-200
                      hover:bg-white/10 hover:text-white
                      transition-all duration-200">
                <span>Home</span>

                <span class="ml-auto h-2 w-2 rounded-full bg-orange-500
                             opacity-0 group-hover:opacity-100 transition"></span>
            </a>
         <a href="{{ route('category.index') }}"
               class="group flex items-center gap-x-3 py-3 px-4
                      text-sm rounded-xl font-medium
                      text-gray-200
                      hover:bg-white/10 hover:text-white
                      transition-all duration-200">
                <span>Category</span>

                <span class="ml-auto h-2 w-2 rounded-full bg-orange-500
                             opacity-0 group-hover:opacity-100 transition"></span>
            </a>
         <a href="{{ route('contact_us') }}"
               class="group flex items-center gap-x-3 py-3 px-4
                      text-sm rounded-xl font-medium
                      text-gray-200
                      hover:bg-white/10 hover:text-white
                      transition-all duration-200">
                <span>Contact Us</span>

                <span class="ml-auto h-2 w-2 rounded-full bg-orange-500
                             opacity-0 group-hover:opacity-100 transition"></span>
            </a>

            
        @endif

    </nav>
</div>
