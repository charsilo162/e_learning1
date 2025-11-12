{{-- resources/views/livewire/category-manager.blade.php --}}
<div>
    <!-- Header -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Categories</h2>
        <button wire:click="create"
                class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
            Add Category
        </button>
    </div>

    <!-- Search -->
    <div class="mb-6">
        <input type="text" wire:model.live.debounce.300ms="search"
               placeholder="Search categories..."
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
    </div>

    <!-- Table -->
    <div class="bg-white shadow overflow-hidden rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    {{-- <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Thumbnail</th> --}}
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slug</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($categories as $category)
                    <tr>
                        {{-- <td class="px-6 py-4 whitespace-nowrap">
                            @if($category->thumbnail_url)
                                <img src="{{ asset('storage/' . $category->thumbnail_url) }}"
                                     alt="{{ $category->name }}"
                                     class="h-10 w-10 rounded-full object-cover">
                            @else
                                <div class="h-10 w-10 rounded-full bg-gray-200 border-2 border-dashed border-gray-300"></div>
                            @endif
                        </td> --}}
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ $category->name }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $category->slug }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                            <button wire:click="edit({{ $category->id }})"
                                    class="text-indigo-600 hover:text-indigo-900">Edit</button>
                            <button wire:click="delete({{ $category->id }})"
                                    wire:confirm="Are you sure you want to delete this category?"
                                    class="text-red-600 hover:text-red-900">Delete</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-12 text-center text-gray-500">
                            No categories found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $categories->links() }}
    </div>

    <!-- Modal -->
    @if($showModal)
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
            <div class="bg-white rounded-lg max-w-md w-full p-6">
                <h3 class="text-lg font-semibold mb-4">
                    {{ $editingId ? 'Edit Category' : 'Create Category' }}
                </h3>

                <form wire:submit="save">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" wire:model="name"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                        @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Thumbnail</label>
                        <input type="file" wire:model="thumbnail"
                               class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        @error('thumbnail') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    @if($editingId && $categories->find($editingId)?->thumbnail_url)
                        <div class="mb-4">
                            <p class="text-sm text-gray-600 mb-1">Current thumbnail:</p>
                            <img src="{{ asset('storage/' . $categories->find($editingId)->thumbnail_url) }}"
                                 class="h-16 w-16 rounded-full object-cover">
                        </div>
                    @endif

                    <div class="flex justify-end gap-3 mt-6">
                        <button type="button" wire:click="closeModal"
                                class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                            Cancel
                        </button>
                        <button type="submit"
                                class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                            {{ $editingId ? 'Update' : 'Create' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif

    <!-- Toast Notifications -->
    <div>
        @foreach (['success', 'error'] as $type)
            <div x-data="{ show: false }" x-init="@this.on('notify', (e) => {
                if (e.type === '{{ $type }}') {
                    $dispatch('toast', e.message);
                }
            })"></div>
        @endforeach

        <div x-data="{ message: '', show: false }"
             x-show="show"
             x-transition
             class="fixed bottom-4 right-4 bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg"
             x-init="$watch('message', () => { if (message) { show = true; setTimeout(() => { show = false; message = '' }, 3000); } })">
            <span x-text="message"></span>
        </div>

        @push('scripts')
            <script>
                document.addEventListener('livewire:init', () => {
                    Livewire.on('notify', (event) => {
                        const toast = document.querySelector('[x-data]');
                        toast.__x.$data.message = event.message;
                    });
                });
            </script>
        @endpush
    </div>
</div>