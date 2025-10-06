<x-layouts.app title="{{ $course->title }} | Course Details">
    
    <x-navigation.header-centered />

    {{-- 1. Hero Section (Detail Wrapper) --}}
    <x-shared.detail-wrapper 
        :imageUrl="$course->image_url ?? 'https://placehold.co/1200x800/2563eb/ffffff?text=Course+Image'"
        :title="$course->title"
        :description="$course->description"
        :rating="$course->average_rating ?? 4.5"
        :tagLabels="$course->tags ?? ['Beginner', 'Programming']"
        badgeText="{{ $course->category->name ?? 'Category' }}"
    >
        {{-- Injecting the Interactive Livewire Component (Thumbs Up/Down) into the 'thumbsBlock' slot --}}
        <x-slot:thumbsBlock>
            @livewire('interaction-panel', [
                // Passing the data required for polymorphism
                'resourceId' => $course->id, 
                'resourceType' => 'App\Models\Course' 
            ])
        </x-slot:thumbsBlock>
<x-slot:interactionStats>
    <x-shared.resource-stats 
        :commentsCount="$course->comments_count" 
        :viewsCount="$course->views_count ?? 1250"
        :likesCount="$course->likes_count" 
        :sharesCount="$course->shares_count ?? 50"
        timeElapsed="{{ $course->created_at->diffForHumans() ?? '2 weeks ago' }}"
    />
</x-slot:interactionStats>

        {{-- Injecting the Dynamic Contact Area (e.g., Tutor Info) --}}
     <x-slot:contactArea>
    <div class="mb-4 p-4 border rounded-lg bg-gray-50">
        
        {{-- Display the ASSIGNED TUTOR/INSTRUCTOR --}}
        @if ($course->assignedTutor && $course->assignedTutor->user)
            <div class="flex items-center mb-4">
                <img class="w-10 h-10 rounded-full mr-3 object-cover" 
                     src="{{ $course->assignedTutor->user->profile_photo_url ?? 'https://via.placeholder.com/40' }}" 
                     alt="{{ $course->assignedTutor->user->name }}">
                <div>
                    {{-- Public facing detail --}}
                    <h3 class="font-semibold text-gray-800">
                        Primary Instructor: {{ $course->assignedTutor->user->name }}
                    </h3>
                    <p class="text-xs text-gray-500">
                        Certified instructor with {{ $course->assignedTutor->experience_years ?? '0' }}+ years experience.
                    </p>
                </div>
            </div>
        @else
            {{-- Fallback if no specific tutor is assigned --}}
            <h3 class="font-semibold text-gray-800">Taught by: <span class="text-gray-500">Unspecified Instructor</span></h3>
            <p class="text-xs text-gray-500">Expert details coming soon.</p>
        @endif
        
        {{-- Optional: Display the Uploader/Creator for internal reference or extra credit --}}
        {{-- The commented-out section is a good example of how to use the 'uploader' relation: --}}
        {{-- 
        @if ($course->uploader)
             <p class="text-xs text-gray-400 mt-2">Uploaded by: {{ $course->uploader->name }}</p>
        @endif
        --}}

        {{-- Display associated centers (where the course is physically offered) --}}
        {{-- @if ($course->centers->count() > 0)
            <div class="mt-4 pt-3 border-t border-gray-200">
                <h4 class="text-sm font-semibold text-gray-700 mb-2">Also offered at Centers:</h4>
                <ul class="list-disc list-inside text-xs text-gray-600 space-y-1 ml-2">
                    @foreach ($course->centers as $center)
                        <li>
                            {{ $center->name }} 
                            @if ($center->pivot->price)
                                - **Price:** ${{ number_format($center->pivot->price, 2) }}
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
    </div>
</x-slot:contactArea>

        {{-- Injecting the Footer Area (e.g., Price and Enroll Button) --}}
        <x-slot:footerArea>
            <div class="flex items-center justify-between">
                <span class="text-3xl font-extrabold text-blue-600">
                    ${{ number_format($course->currentPrice->amount ?? 99.00, 2) }}
                </span>
                <a href="{{ route('enroll.course', $course->id) }}" class="bg-blue-600 text-white py-3 px-8 text-lg font-semibold rounded-xl hover:bg-blue-700 transition-colors shadow-lg">
                    Enroll Now
                </a>
            </div>
        </x-slot:footerArea>
        
    </x-shared.detail-wrapper>
    
    {{-- 2. Course Description Section (Component: Content Description) --}}
    <x-shared.content-description title="About This Course">
        <p>
            {{ $course->long_description_p1 ?? 'This is the first paragraph detailing the course content, learning objectives, and who the course is designed for. We focus on practical application and real-world examples to ensure you gain valuable, employable skills.' }}
        </p>
        <p class="mt-4">
            {{ $course->long_description_p2 ?? 'The second paragraph explains the structure, including video lessons, quizzes, and project work. Our goal is to provide a complete learning path from beginner concepts to advanced mastery in the subject.' }}
        </p>
        <p class="mt-4">
            {{ $course->long_description_p3 ?? 'Join our community to connect with other students and instructors, ensuring you have the support you need throughout your learning journey.' }}
        </p>
    </x-shared.content-description>

    {{-- 3. Comments Section (Livewire Component) --}}
    @livewire('comment-section', [
        'resourceId' => $course->id, 
        'resourceType' => 'App\Models\Course' 
    ])


 <div>
 <livewire:random-courses />

    <livewire:course-list 
    :tutorId="$course->assigned_tutor_id" 
    :showButtons="false"
/>
    </div>
    <x-navigation.footer />
</x-layouts.app>
