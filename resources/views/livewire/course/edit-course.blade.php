<div 
    x-data="{ open: @entangle('showModal') }" 
    x-show="open" 
    x-cloak
    class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto"
    style="background-color: rgba(0,0,0,0.5);"
>
    <div class="relative bg-white rounded-xl shadow-2xl w-full max-w-2xl mx-4 my-8 overflow-hidden" @click.away="open = false">
        
        <div class="px-6 py-4 border-b flex justify-between items-center bg-gray-50">
            <h2 class="text-xl font-bold text-gray-800">Edit Course</h2>
            <button @click="open = false" class="text-gray-400 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <div class="p-6 max-h-[75vh] overflow-y-auto">
            <x-livewire.modal-form title="" submit-action="updateCourse" submit-button-text="Update Course">
                
                {{-- 1. Category Selector (Now stays in sync) --}}
                <div class="mb-5">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Course Category</label>
                    <livewire:category-search-select :initialId="$category_id" wire:key="category-select-{{ $courseId }}" />
                    @error('category_id') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
                </div>

                {{-- Publish Toggle --}}
                <div class="mb-5 p-3 bg-gray-50 rounded-lg border border-gray-200">
                    <label class="flex items-center space-x-3 cursor-pointer">
                        <input type="checkbox" 
                               wire:model.live="publish" 
                               class="w-5 h-5 text-orange-600 rounded focus:ring-orange-500 border-gray-300">
                        <span class="text-sm font-semibold text-gray-700">Publish Course</span>
                    </label>
                    <p class="mt-1 text-xs text-gray-500 ml-8">
                        @if($publish)
                            This course is <span class="font-bold text-green-600">Live</span> and visible to students.
                        @else
                            This course is <span class="font-bold text-gray-600">Draft</span> and hidden from the public.
                        @endif
                    </p>
                </div>

                {{-- 2. Title Field --}}
                <div class="mb-5">
                    <label for="course-title-edit" class="block text-sm font-medium text-gray-700">Course Title</label>
                    <input type="text" id="course-title-edit" wire:model.defer="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500 sm:text-sm">
                    @error('title') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                </div>

                {{-- 3. Course Type & Center --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-5">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Delivery Method</label>
                        <div class="flex items-center space-x-4">
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="radio" wire:model.live="type" value="online" class="form-radio text-orange-600 focus:ring-orange-500 h-4 w-4">
                                <span class="ml-2 text-sm text-gray-700">Online</span>
                            </label>
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="radio" wire:model.live="type" value="physical" class="form-radio text-orange-600 focus:ring-orange-500 h-4 w-4">
                                <span class="ml-2 text-sm text-gray-700">Physical (At Center)</span>
                            </label>
                        </div>
                    </div>

                    @if ($type === 'physical')
                        <div wire:ignore>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Select Center</label>
                            <livewire:center-search-select :initialId="$center_id" wire:key="center-select-{{ $courseId }}" />
                            @error('center_id') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
                        </div>
                    @endif
                </div>

                {{-- 4. Description & Price --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-5">
                    <div class="md:col-span-2">
                        <label for="course-desc-edit" class="block text-sm font-medium text-gray-700">Course Description</label>
                        <textarea id="course-desc-edit" wire:model.defer="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500 sm:text-sm"></textarea>
                        @error('description') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="course-price-edit" class="block text-sm font-medium text-gray-700">Price Amount (₦)</label>
                        <div class="relative mt-1">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500 text-sm">₦</span>
                            <input type="number" id="course-price-edit" wire:model.defer="price_amount" step="0.01" min="0" class="pl-7 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500 sm:text-sm">
                        </div>
                        @error('price_amount') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                    </div>
                </div>

                {{-- 5. Image Thumbnail Field --}}
                <div class="mb-5" x-data="{ isUploading: false, preview: null, progress: 0 }" 
                     x-on:livewire-upload-start="isUploading = true"
                     x-on:livewire-upload-finish="isUploading = false"
                     x-on:livewire-upload-error="isUploading = false"
                     x-on:livewire-upload-progress="progress = $event.detail.progress">

                    <label class="block text-sm font-medium text-gray-700">Course Image</label>
                    
                    <input type="file" id="course-thumb-edit" wire:model="image_thumb" 
                        x-on:change="
                            const file = $event.target.files[0];
                            if (file) {
                                const reader = new FileReader();
                                reader.onload = (e) => { preview = e.target.result; };
                                reader.readAsDataURL(file);
                            }
                        "
                        class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-orange-700 hover:file:bg-orange-100"
                    >

                    @error('image_thumb') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                    
                    {{-- Progress Bar --}}
                    <div x-show="isUploading" class="mt-2">
                        <div class="w-full bg-gray-200 rounded-full h-1.5">
                            <div class="bg-orange-600 h-1.5 rounded-full" :style="`width: ${progress}%` text-align: center;"></div>
                        </div>
                    </div>

                    {{-- Image Preview Logic --}}
                    <div class="mt-3 flex items-center space-x-4">
                        <div class="w-24 h-24 border rounded-lg overflow-hidden bg-gray-50">
                            {{-- 1. Show the Alpine.js preview (client side) if a new file is picked --}}
                            <template x-if="preview">
                                <img :src="preview" class="w-full h-full object-cover">
                            </template>

                            {{-- 2. If no client-side preview, check Livewire states --}}
                            <template x-if="!preview">
                                <div>
                                    @if($image_thumb)
                                        {{-- New image uploaded but not yet saved --}}
                                        <img src="{{ $image_thumb->temporaryUrl() }}" class="w-full h-full object-cover">
                                    @elseif($current_image_url)
                                        {{-- Old image from the database --}}
                                        <img src="{{ $current_image_url }}" class="w-full h-full object-cover">
                                    @else
                                        {{-- Fallback placeholder --}}
                                        <img src="{{ asset('images/placeholder.png') }}" class="w-full h-full object-cover">
                                    @endif
                                </div>
                            </template>
                        </div>
                        <span class="text-xs text-gray-400 italic">Click "Update" to save changes.</span>
                    </div>
                </div>

                <div class="flex justify-end space-x-3 pt-4 border-t mt-4">
                    <button type="button" @click="open = false" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">
                        Cancel
                    </button>
                    <button type="submit" wire:loading.attr="disabled" class="px-4 py-2 text-sm font-medium text-white bg-orange-600 border border-transparent rounded-md shadow-sm hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                        <span wire:loading.remove wire:target="updateCourse">Save Changes</span>
                        <span wire:loading wire:target="updateCourse">Updating...</span>
                    </button>
                </div>

            </x-livewire.modal-form>
        </div>
    </div>
</div>