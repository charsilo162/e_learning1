<div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full p-8 space-y-8 bg-white shadow-xl rounded-lg border border-gray-200">
        <div>
            <h2 class="mt-0 text-center text-4xl font-extrabold text-gray-900 tracking-tight">
                Create Your Account
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Start your journey with us today.
            </p>
        </div>

        <form wire:submit.prevent="register" class="mt-8 space-y-6">
            <div class="space-y-4">
                
                <div>
                    <x-input-label for="name" value="Full Name" class="text-sm font-medium text-gray-700"/>
                    <x-text-input wire:model="name" id="name" type="text" required autofocus class="mt-1 block w-full border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="email" value="Email Address" class="text-sm font-medium text-gray-700"/>
                    <x-text-input wire:model="email" id="email" type="email" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="type" value="Account Type" class="text-sm font-medium text-gray-700"/>
                    <select wire:model="type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-600 focus:ring-indigo-600 py-2 px-3 bg-white text-gray-900 sm:text-sm">
                        <option value="user">Student / Learner</option>
                        <option value="center">Training Center</option>
                        <option value="tutor">Tutor / Instructor</option>
                        
                    </select>
                    <x-input-error :messages="$errors->get('type')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="password" value="Password" class="text-sm font-medium text-gray-700"/>
                    <x-text-input wire:model="password" id="password" type="password" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"/>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="password_confirmation" value="Confirm Password" class="text-sm font-medium text-gray-700"/>
                    <x-text-input wire:model="password_confirmation" id="password_confirmation" type="password" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"/>
                </div>
            </div>

            <div class="flex items-center justify-between mt-6">
                <div class="text-sm">
                    <a href="{{ route('logins') }}" class="font-medium text-indigo-600 hover:text-indigo-700 transition duration-150 ease-in-out">
                        Already have an account? Login
                    </a>
                </div>

                <button type="submit" class="w-auto flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                    Register
                </button>
            </div>
        </form>
    </div>
</div>