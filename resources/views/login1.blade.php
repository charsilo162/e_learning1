<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-white flex items-center justify-center font-sans">

    <div class="w-full max-w-6xl grid grid-cols-1 md:grid-cols-2 shadow-lg rounded-2xl overflow-hidden">

        <!-- Left Side (Form) -->
        <div class="flex flex-col justify-center px-8 py-10 bg-white">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Welcome back</h2>

            <form action="#" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email or username</label>
                    <input type="text" name="email" class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:ring-2 focus:ring-sky-400 focus:outline-none shadow-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:ring-2 focus:ring-sky-400 focus:outline-none shadow-sm">
                </div>

                <button type="submit" class="w-full bg-sky-400 hover:bg-sky-500 text-white font-semibold py-2 rounded-lg transition">
                    Login
                </button>

                <p class="text-sm text-gray-600 text-center">
                    Don’t have an account?
                    <a href="{{ route('about-us') }}" class="text-sky-500 hover:underline">Sign up</a>
                </p>
            </form>
        </div>

        <!-- Right Side (Image) -->
        <div class="hidden md:block">
            <img src="{{ asset('storage/login.png') }}" alt="Login Illustration"
                 class="w-full h-full object-cover">
        </div>

    </div>

</body>
</html>
