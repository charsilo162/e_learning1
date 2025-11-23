<div>
    <form wire:submit.prevent="login" class="space-y-4">
        <div>
            <input 
                type="email" 
                wire:model="email" 
                placeholder="Email" 
                class="w-full px-4 py-2 border rounded-lg"
                required
            >
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <input 
                type="password" 
                wire:model="password" 
                placeholder="Password" 
                class="w-full px-4 py-2 border rounded-lg"
                required
            >
        </div>

        <button 
            type="submit" 
            class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 disabled:opacity-50"
            wire:loading.attr="disabled"
        >
            <span wire:loading.remove>Login</span>
            <span wire:loading>Logging in...</span>
        </button>
    </form>
</div>