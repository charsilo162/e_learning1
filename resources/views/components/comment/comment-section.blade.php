<section class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">

    <div class="bg-white p-8 rounded-xl shadow-2xl">
        <h2 class="text-3xl font-extrabold text-gray-900 mb-6 border-b pb-2">
            Comments ({{ $comments->count() }})
        </h2>

        {{-- Session Flash Message (e.g., login required, error, success) --}}
        @if (session()->has('message'))
            <div class="p-3 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg" role="alert">
                {{ session('message') }}
            </div>
        @endif
        
        {{-- Comment Input Form (UPDATED FOR RESPONSIVENESS) --}}
        <form wire:submit.prevent="postComment" 
            class="flex flex-col sm:flex-row items-stretch sm:items-start mb-10 gap-3 sm:gap-0"
        >
            <input
                wire:model.defer="newCommentText"
                type="text"
                placeholder="Write a comment..."
                class="w-full py-3 px-5 border border-gray-300 text-base text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-lg sm:rounded-r-none sm:rounded-l-lg"
            >
            <button 
                type="submit"
                class="w-full sm:w-auto bg-blue-600 text-white font-semibold py-3 px-6 hover:bg-blue-700 transition-colors disabled:opacity-50 rounded-lg sm:rounded-l-none sm:rounded-r-lg"
                @guest disabled @endguest
            >
                Send
            </button>
        </form>

        {{-- Display Validation Errors --}}
        @error('newCommentText')
            <p class="text-sm text-red-500 mb-4">{{ $message }}</p>
        @enderror


        {{-- List of Comments --}}
        <div class="space-y-8">
            @forelse ($comments as $comment)
                <div class="flex items-start space-x-4 border-b pb-6 last:border-b-0">
                    {{-- User Avatar --}}
                    <div class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center text-gray-600 font-semibold text-lg flex-shrink-0">
                        {{ strtoupper(substr($comment->user->name ?? 'U', 0, 1)) }}
                    </div>
                    
                    <div class="flex-1">
                        <div class="flex items-center mb-1">
                            <p class="font-semibold text-gray-800">{{ $comment->user->name ?? 'Guest User' }}</p>
                            <span class="text-xs text-gray-400 ml-2">●</span>
                            <p class="text-xs text-gray-400 ml-2">{{ $comment->created_at->diffForHumans() }}</p>
                        </div>
                        
                        {{-- Comment Content --}}
                        <p class="text-sm text-gray-700 whitespace-pre-wrap">{{ $comment->body }}</p>
                    </div>
                </div>
            @empty
                <p class="text-gray-500 text-center py-6">Be the first to leave a comment!</p>
            @endforelse
        </div>
            <div class="mt-8">
        {{ $comments->links() }}
    </div>
    </div>
</section>