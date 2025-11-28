<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex items-center justify-center bg-white font-sans">

    <div class="w-full max-w-6xl grid grid-cols-1 md:grid-cols-2 items-center gap-10 px-6 py-10">
        
        <!-- Left Side – Form -->
        <div class="space-y-5">
            <h2 class="text-3xl font-semibold text-gray-800">Create your account</h2>

            <form action="#" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                    <input type="text" name="name" class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:ring-2 focus:ring-sky-400 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:ring-2 focus:ring-sky-400 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:ring-2 focus:ring-sky-400 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Re type Password</label>
                    <input type="password" name="password_confirmation" class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:ring-2 focus:ring-sky-400 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Phone no</label>
                    <input type="text" name="phone" class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:ring-2 focus:ring-sky-400 focus:outline-none">
                </div>

                <button type="submit" class="w-full bg-sky-400 hover:bg-sky-500 text-white font-semibold py-2 rounded-lg transition">Sign up</button>

                <p class="text-sm text-gray-600 text-center">
                    Already have an account?
                    <a href="{{ route('logins') }}" class="text-sky-500 hover:underline">Sign in</a>
                </p>
            </form>
        </div>

        <!-- Right Side – Image + Role Selection -->
        <div class="flex flex-col items-center space-y-5">
            <!-- Profile image upload placeholder -->
            <div class="relative">
                <img src="{{ asset('storage/img3.png') }}" alt="Profile" class="w-40 h-40 object-cover rounded-md border">
                <button type="button" class="absolute inset-0 flex items-center justify-center bg-black/40 rounded-md text-white opacity-0 hover:opacity-100 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7h2l2-3h10l2 3h2a2 2 0 012 2v11a2 2 0 01-2 2H3a2 2 0 01-2-2V9a2 2 0 012-2z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 11a3 3 0 100 6 3 3 0 000-6z" />
                    </svg>
                </button>
            </div>

            <p class="text-gray-700 font-medium text-center">What are you registering as</p>

            <div class="flex gap-3">
                <button type="button" class="px-5 py-2 rounded-full border border-sky-400 text-sky-500 hover:bg-sky-50 transition">User</button>
                <button type="button" class="px-5 py-2 rounded-full border border-sky-400 text-sky-500 hover:bg-sky-50 transition">Center</button>
                <button type="button" class="px-5 py-2 rounded-full bg-sky-400 text-white shadow-md">Trainer</button>
            </div>
        </div>
    </div>

</body>
</html>
