<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans bg-gray-50 text-gray-800">
  <header class="sticky top-0 z-50 bg-white border-b shadow-sm">
  <nav class="max-w-7xl mx-auto px-4 flex items-center justify-between h-16">
    <a href="#" class="flex items-center space-x-2">
      <span class="text-2xl font-bold text-sky-600">
        e<span class="text-gray-900">talent</span>
      </span>
    </a>

    <div class="hidden md:flex flex-1 justify-center space-x-8 text-sm font-medium">
      <a href="#" class="text-sky-600 font-semibold border-b-2 border-sky-600 pb-1">Home</a>
      <a href="#" class="hover:text-sky-600">How it Works</a>
      <a href="#" class="hover:text-sky-600">Pricing</a>
      <a href="#" class="hover:text-sky-600">Blog</a>
      <a href="#" class="hover:text-sky-600">Resources</a>
      <a href="#" class="hover:text-sky-600">FAQs</a>
    </div>

    <div class="ml-6">
      <a href="#" class="px-4 py-2 bg-sky-600 text-white rounded-lg font-medium hover:bg-sky-700 transition">
        Get in Touch
      </a>
    </div>
  </nav>
</header>

  <!-- Hero Section -->
  <section class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
    <!-- Left: Categories -->
    <div>
      <a href="#" class="px-6 py-2 bg-sky-500 text-white rounded-full font-medium hover:bg-sky-600">
        Get started
      </a>
      <div class="mt-6 grid grid-cols-2 gap-4 text-gray-700 text-sm">
        <a href="#" class="hover:text-sky-600">Makeup Artist (345)</a>
        <a href="#" class="hover:text-sky-600">Hair dresser (345)</a>
        <a href="#" class="hover:text-sky-600">Fashion Design (345)</a>
        <a href="#" class="hover:text-sky-600">Video Edit (345)</a>
      </div>
      <a href="#" class="mt-3 inline-block text-sky-600 text-sm font-medium">see more</a>
    </div>

    <!-- Right: Featured video -->
    <div class="relative">
      <img src="{{ asset('storage/img3.png') }}" class="rounded-lg object-cover w-full h-64 md:h-80">
      <button class="absolute inset-0 flex items-center justify-center">
        <svg class="w-16 h-16 text-white drop-shadow-lg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8 5v14l11-7z"></path>
        </svg>
      </button>
    </div>
  </section>

  <!-- Video Thumbnails -->
  <div class="max-w-7xl mx-auto px-4 flex space-x-4 overflow-x-auto pb-6">
    <div class="relative flex-shrink-0">
      <img src="{{ asset('storage/img3.png') }}" class="w-40 h-28 rounded-lg object-cover">
      <button class="absolute inset-0 flex items-center justify-center">
        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8 5v14l11-7z"></path>
        </svg>
      </button>
    </div>
    <div class="relative flex-shrink-0">
      <img src="{{ asset('storage/img3.png') }}" class="w-40 h-28 rounded-lg object-cover">
      <button class="absolute inset-0 flex items-center justify-center">
        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8 5v14l11-7z"></path>
        </svg>
      </button>
    </div>
    <div class="relative flex-shrink-0">
      <img src="{{ asset('storage/img3.png') }}" class="w-40 h-28 rounded-lg object-cover">
      <button class="absolute inset-0 flex items-center justify-center">
        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8 5v14l11-7z"></path>
        </svg>
      </button>
    </div>
  </div>
 <!-- Categories Grid -->
<main class="max-w-7xl mx-auto px-4">
  <!-- Search Section -->

  <!-- Popular Categories Section -->

    <livewire:popular-category-cards />
  
<livewire:course.course-list :initial-type="'physical'" :show-buttons="false" />
  <!-- Quick Picks Section -->
  <section class="bg-sky-500 text-white py-8 rounded-lg mb-8 p-4">
    <div class="flex flex-col sm:flex-row justify-between items-center mb-6">
      <h2 class="text-2xl font-bold">Quick Picks</h2>
      <div class="flex items-center space-x-4 mt-4 sm:mt-0">
        <button class="flex items-center px-3 py-1 bg-white bg-opacity-20 rounded-full text-sm">
          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          What's around?
        </button>
        <div class="relative">
          <input type="text" class="pl-4 pr-10 py-2 rounded-full text-black focus:outline-none" placeholder="Use current location">
          <button class="absolute right-0 top-0 bottom-0 px-3 flex items-center">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
          </button>
        </div>
        <select class="px-4 py-2 rounded-full text-black focus:outline-none">
          <option>Category</option>
          <option>Tech</option>
        </select>
      </div>
    </div>

     <livewire:simple-category-grid />


  </section>
  <!-- Video Thumbnail Section (Separate Section without Background) -->
  <section class="mt-8">
    <div class="flex flex-col md:flex-row items-center p-6">
      <div class="w-full md:w-1/2">
        <img src="{{ asset('storage/img3.png') }}" class="w-full h-64 object-cover rounded-lg" alt="Training video">
      </div>
      <div class="w-full md:w-1/2 mt-4 md:mt-0 md:pl-6">
        <h3 class="text-2xl font-bold text-gray-900">It's not magic. It's training</h3>
        <ul class="mt-4 space-y-2 text-gray-600">
          <li class="flex items-center"><span class="w-4 h-4 mr-2">✔</span> Your online and Offline training in one place</li>
          <li class="flex items-center"><span class="w-4 h-4 mr-2">✔</span> Certificate to acquire at the best price</li>
          <li class="flex items-center"><span class="w-4 h-4 mr-2">✔</span> Over 1k skills to learn</li>
        </ul>
        <p class="mt-4 text-gray-700">Ready to ditch the CV struggle</p>
        <a href="#" class="mt-4 inline-block bg-sky-500 text-white font-semibold py-2 px-6 rounded-full hover:bg-sky-600 transition-colors">Book a Demo</a>
      </div>
    </div>
  </section>
  <!-- Why our users Love Us Section -->
<section class="max-w-7xl mx-auto px-4 py-12 bg-gray-50">
  <h2 class="text-3xl font-bold text-gray-900 text-center mb-6">Why our users Love Us</h2>
  <p class="text-center text-gray-600 mb-10">Our system is more than just clever software</p>
  <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-10">
    <div class="text-center p-4 bg-white rounded-lg shadow-md">
      <div class="mx-auto w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mb-4">
        <svg class="w-6 h-6 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
        </svg>
      </div>
      <h3 class="text-sm font-semibold text-gray-900">Saves you time</h3>
    </div>
    <div class="text-center p-4 bg-white rounded-lg shadow-md">
      <div class="mx-auto w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mb-4">
        <svg class="w-6 h-6 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
      </div>
      <h3 class="text-sm font-semibold text-gray-900">Saves you money</h3>
    </div>
    <div class="text-center p-4 bg-white rounded-lg shadow-md">
      <div class="mx-auto w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mb-4">
        <svg class="w-6 h-6 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </div>
      <h3 class="text-sm font-semibold text-gray-900">Pinpoints your perfect match</h3>
    </div>
    <div class="text-center p-4 bg-white rounded-lg shadow-md">
      <div class="mx-auto w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mb-4">
        <svg class="w-6 h-6 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
      </div>
      <h3 class="text-sm font-semibold text-gray-900">Reduces hiring stress</h3>
    </div>
  </div>
  <div class="flex flex-col md:flex-row items-center justify-between p-6 bg-white rounded-lg shadow-md">
    <div class="w-full md:w-1/2 mb-6 md:mb-0">
      <img src="{{ asset('storage/img1.png') }}" class="w-full h-64 object-cover rounded-lg" alt="Training team">
    </div>
    <div class="w-full md:w-1/2 md:pl-6">
      <h3 class="text-xl font-bold text-gray-900">Whatever your industry, whatever the position, or skill eTraining will work for you</h3>
      <p class="mt-4 text-gray-600">The qualities needed for a car mechanic will differ enormously from those for the matron in a care home, or a senior manager in a pharmaceutical company, or a barista in a small coffee shop. From tour guides to technical writers, to jewellers, lawyers to labourers, pharmacists to farmers, we can help.</p>
      <a href="#" class="mt-6 inline-block bg-sky-500 text-white font-semibold py-2 px-6 rounded-full hover:bg-sky-600 transition-colors">Get started</a>
    </div>
  </div>
</section>
</main>

    </body>
</html>

