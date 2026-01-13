{{-- resources/views/components/profile/dashboard-layout.blade.php --}}
@props([
    'title' => 'Dashboard',
    'activeTab' => 'home',
    'showPostButtons' => true,
    'showEditModal' => true,
])

<x-layouts.profiledashboard :title="$title">
    {{-- Header --}}
    <div class="bg-white pt-6 pb-4 sm:pt-10 sm:pb-6 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-col sm:flex-row items-start space-y-3 sm:space-y-0 sm:space-x-4 w-full">
                    <div class="flex items-start space-x-4">
                        <div class="shrink-0">
                            <img class="h-16 w-16 rounded-full object-cover"
                                 src="{{ asset(session('user.photo_path')) }}" alt="Ishola Balogun">
                        </div>
                        <div class="flex flex-col">
                            <h1 class="text-xl font-semibold text-gray-800">   {{ session('user.name') }}</h1>
                            <p class="text-sm text-gray-500 mt-0.5">   {{ session('user.email') }}</p>
                           
                        </div>
                    </div>
                </div>

   @if((session('user.role') ?? session('user.type') ?? '') !== 'user')

                @if($showPostButtons)
                    <div class="mt-4 sm:mt-0 flex flex-col sm:flex-row sm:space-x-3 space-y-2 sm:space-y-0">
                        <livewire:post-center-button />
                        <livewire:course.post-course-button />
                       <livewire:profile.edit-profile />
                    </div>
                @endif
                @endif
                   @if((session('user.role') ?? session('user.type') ?? '') == 'user')
                <div class="mt-4 sm:mt-0 flex flex-col sm:flex-row sm:space-x-3 space-y-2 sm:space-y-0">
                        <livewire:profile.edit-profile />
                    </div>
                     @endif
            </div>

            {{-- Include dependent components only when buttons are shown --}}
         
             @if((session('user.role') ?? session('user.type') ?? '') !== 'user')
            @if($showPostButtons)
                <livewire:post-center />
                <livewire:course.post-course />
            @endif
             @endif
            
        </div>
    </div>

    {{-- Tabs --}}

     @if((session('user.role') ?? session('user.type') ?? '') !== 'user')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-white border-b border-gray-200">
        <nav class="flex flex-wrap space-x-8" aria-label="Tabs">
            <a href="{{ route('my.course') }}"
               class="py-4 px-1 mb-2 sm:mb-0 inline-flex items-center gap-x-2 text-base font-medium 
                      {{ $activeTab === 'course' ? 'text-black before:absolute before:bottom-0 before:start-0 before:w-full before:h-0.5 before:bg-black relative' : 'text-gray-500 hover:text-gray-700' }}"
               aria-current="{{ $activeTab === 'course' ? 'page' : 'false' }}">
               My Course
            </a>
            <a href="{{ route('my.videos') }}"
               class="py-4 px-1 mb-2 sm:mb-0 inline-flex items-center gap-x-2 text-base font-medium 
                      {{ $activeTab === 'videos' ? 'text-black before:absolute before:bottom-0 before:start-0 before:w-full before:h-0.5 before:bg-black relative' : 'text-gray-500 hover:text-gray-700' }}">
                My Videos
            </a>
            <a href="{{ route('courses.no-video') }}"
               class="py-4 px-1 mb-2 sm:mb-0 inline-flex items-center gap-x-2 text-base font-medium 
                      {{ $activeTab === 'draft' ? 'text-black before:absolute before:bottom-0 before:start-0 before:w-full before:h-0.5 before:bg-black relative' : 'text-gray-500 hover:text-gray-700' }}">
                My Draft
            </a>
            <a href="#"
               class="py-4 px-1 mb-2 sm:mb-0 inline-flex items-center gap-x-2 text-base font-medium 
                      {{ $activeTab === 'overview' ? 'text-black before:absolute before:bottom-0 before:start-0 before:w-full before:h-0.5 before:bg-black relative' : 'text-gray-500 hover:text-gray-700' }}">
                Overview
            </a>
           
        </nav>
         <livewire:course.edit-course />
    </div>
 @endif

    {{-- Main Content --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-white mt-8 pb-6 shadow-sm sm:rounded-lg">
  {{-- @if((session('user.role') ?? session('user.type') ?? '') !== 'user')

            @if($showPostButtons)
                <div class="flex flex-wrap items-center gap-3 mt-6">
                    <livewire:course.post-course-button />
                    <livewire:post-center-button />
                </div>
            @endif
 @endif --}}

            <div class="mt-6">
                {{ $slot }}
            </div>
        </div>
    </div>

    @if($showEditModal)
        {{ $editModal ?? '' }}
    @endif
</x-layouts.profiledashboard>