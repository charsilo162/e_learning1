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
<main class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
  <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
    <!-- Left Sidebar for Filter Tabs -->
    <div class="md:col-span-1">
      <h2 class="text-2xl font-bold text-gray-900 mb-4">Categories</h2>
      <div class="mb-6">
        <label for="search" class="sr-only">Search Category</label>
        <div class="relative">
          <input type="text" id="search" name="search" class="w-full pl-4 pr-10 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500" placeholder="Search Category">
          <button type="button" class="absolute inset-y-0 right-0 px-3 flex items-center text-gray-400 hover:text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
          </button>
        </div>
      </div>
      <div class="space-y-6">
        <!-- Category Tabs -->
        <div>
          <h3 class="font-bold text-gray-900 mb-2">Category</h3>
          <div class="flex flex-col space-y-2">
            <button class="px-4 py-2 border rounded-full text-sm font-medium text-gray-600 hover:text-sky-600 hover:bg-gray-100" data-filter="panel-beater">Panel beater</button>
            <button class="px-4 py-2 border rounded-full text-sm font-medium text-gray-600 hover:text-sky-600 hover:bg-gray-100" data-filter="vulcanizer">Vulcanizer</button>
            <button class="px-4 py-2 border rounded-full text-sm font-medium text-gray-600 hover:text-sky-600 hover:bg-gray-100" data-filter="mechanic">Mechanic</button>
          </div>
        </div>
        <!-- Class Tabs -->
        <div>
          <h3 class="font-bold text-gray-900 mb-2">Class</h3>
          <div class="flex flex-col space-y-2">
            <button class="px-4 py-2 border rounded-full text-sm font-medium text-gray-600 hover:text-sky-600 hover:bg-gray-100" data-filter="online">Online</button>
            <button class="px-4 py-2 border rounded-full text-sm font-medium text-gray-600 hover:text-sky-600 hover:bg-gray-100" data-filter="physical">Physical</button>
          </div>
        </div>
        <!-- Location Tabs -->
        <div>
          <h3 class="font-bold text-gray-900 mb-2">Location</h3>
          <div class="flex flex-col space-y-2">
            <button class="px-4 py-2 border rounded-full text-sm font-medium text-gray-600 hover:text-sky-600 hover:bg-gray-100" data-filter="lagos">Lagos</button>
            <button class="px-4 py-2 border rounded-full text-sm font-medium text-gray-600 hover:text-sky-600 hover:bg-gray-100" data-filter="abuja">Abuja</button>
            <button class="px-4 py-2 border rounded-full text-sm font-medium text-gray-600 hover:text-sky-600 hover:bg-gray-100" data-filter="port-harcourt">Port Harcourt</button>
          </div>
        </div>
        <!-- Price Tabs -->
        <div>
          <h3 class="font-bold text-gray-900 mb-2">Price</h3>
          <div class="flex flex-col space-y-2">
            <button class="px-4 py-2 border rounded-full text-sm font-medium text-gray-600 hover:text-sky-600 hover:bg-gray-100" data-filter="1000-1002">1000-1002</button>
            <button class="px-4 py-2 border rounded-full text-sm font-medium text-gray-600 hover:text-sky-600 hover:bg-gray-100" data-filter="300-400">300-400</button>
            <button class="px-4 py-2 border rounded-full text-sm font-medium text-gray-600 hover:text-sky-600 hover:bg-gray-100" data-filter="300-5000">300-5000</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="md:col-span-3">
      <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-gray-900 mb-4 sm:mb-0">23434 Results</h2>
        <div class="flex space-x-2">
          <a href="#" class="px-4 py-2 border rounded-full text-sm font-medium text-sky-600 bg-sky-100">All</a>
          <a href="#" class="px-4 py-2 border rounded-full text-sm font-medium text-gray-600 hover:text-sky-600 hover:bg-gray-100">Physical</a>
          <a href="#" class="px-4 py-2 border rounded-full text-sm font-medium text-gray-600 hover:text-sky-600 hover:bg-gray-100">Online</a>
        </div>
      </div>
      <div class="grid grid-cols-1 gap-4" id="result-cards">
        <!-- Result Card -->
        <div class="bg-white rounded-lg shadow-md flex flex-col sm:flex-row items-start sm:items-center justify-between p-4" data-category="panel-beater" data-class="physical" data-location="lagos" data-price="300-5000">
          <div class="flex items-start space-x-4 w-full sm:w-auto">
            <img class="w-24 h-24 rounded-lg object-cover" src="{{ asset('storage/img4.png') }}" alt="Training thumbnail">
            <div class="flex-1">
              <h3 class="text-xl font-bold text-gray-900">How to sew Male Suit</h3>
              <p class="text-sm text-gray-500 mb-2">
                <span class="font-bold text-gray-700">(345 registered)</span>
                <span class="bg-gray-200 px-2 py-1 rounded-full text-xs ml-2">Physical</span>
              </p>
              <div class="flex flex-wrap items-center text-xs text-gray-600 gap-x-4 gap-y-2">
                <div class="flex items-center"><svg class="w-4 h-4 mr-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-2-6a1 1 0 011-1h.01a1 1 0 010 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg> 324 comments</div>
                <div class="flex items-center"><svg class="w-4 h-4 mr-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13.25a.75.75 0 00-1.5 0v5.5a.75.75 0 00.75.75h4.5a.75.75 0 000-1.5H11.5V6.75z" clip-rule="evenodd"></path></svg> 123 Likes</div>
                <div class="flex items-center"><svg class="w-4 h-4 mr-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.602 6.008 3 10 3s8.268 2.602 9.542 7c-1.274 4.398-5.55 7-9.542 7S1.732 14.398.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg> 123 views</div>
                <div class="flex items-center"><svg class="w-4 h-4 mr-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.602 6.008 3 10 3s8.268 2.602 9.542 7c-1.274 4.398-5.55 7-9.542 7S1.732 14.398.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg> 123 shares</div>
              </div>
              <div class="flex items-center mt-1">
                <span class="text-yellow-400 text-lg">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                <span class="text-xs text-gray-600 ml-1">4.34</span>
              </div>
            </div>
          </div>
          <div class="flex items-center space-x-4 mt-4 sm:mt-0">
            <span class="text-xl font-bold text-gray-900">#7,500</span>
            <a href="#" class="bg-sky-500 text-white font-semibold py-2 px-6 rounded-full hover:bg-sky-600 transition-colors">Register</a>
          </div>
        </div>
        <!-- Add more cards with different data attributes as needed -->
        <div class="bg-white rounded-lg shadow-md flex flex-col sm:flex-row items-start sm:items-center justify-between p-4" data-category="vulcanizer" data-class="online" data-location="abuja" data-price="1000-1002">
          <div class="flex items-start space-x-4 w-full sm:w-auto">
            <img class="w-24 h-24 rounded-lg object-cover" src="{{ asset('storage/img4.png') }}" alt="Training thumbnail">
            <div class="flex-1">
              <h3 class="text-xl font-bold text-gray-900">How to Repair Tires</h3>
              <p class="text-sm text-gray-500 mb-2">
                <span class="font-bold text-gray-700">(150 registered)</span>
                <span class="bg-gray-200 px-2 py-1 rounded-full text-xs ml-2">Online</span>
              </p>
              <div class="flex flex-wrap items-center text-xs text-gray-600 gap-x-4 gap-y-2">
                <div class="flex items-center"><svg class="w-4 h-4 mr-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-2-6a1 1 0 011-1h.01a1 1 0 010 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg> 150 comments</div>
                <div class="flex items-center"><svg class="w-4 h-4 mr-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13.25a.75.75 0 00-1.5 0v5.5a.75.75 0 00.75.75h4.5a.75.75 0 000-1.5H11.5V6.75z" clip-rule="evenodd"></path></svg> 80 Likes</div>
                <div class="flex items-center"><svg class="w-4 h-4 mr-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.602 6.008 3 10 3s8.268 2.602 9.542 7c-1.274 4.398-5.55 7-9.542 7S1.732 14.398.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg> 80 views</div>
                <div class="flex items-center"><svg class="w-4 h-4 mr-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.602 6.008 3 10 3s8.268 2.602 9.542 7c-1.274 4.398-5.55 7-9.542 7S1.732 14.398.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg> 80 shares</div>
              </div>
              <div class="flex items-center mt-1">
                <span class="text-yellow-400 text-lg">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                <span class="text-xs text-gray-600 ml-1">4.2</span>
              </div>
            </div>
          </div>
          <div class="flex items-center space-x-4 mt-4 sm:mt-0">
            <span class="text-xl font-bold text-gray-900">#1,500</span>
            <a href="#" class="bg-sky-500 text-white font-semibold py-2 px-6 rounded-full hover:bg-sky-600 transition-colors">Register</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<style>
  [data-filter].active {
    background-color: #e0f2fe;
    color: #0369a1;
    font-weight: 600;
  }
</style>

<script>
  document.querySelectorAll('[data-filter]').forEach(button => {
    button.addEventListener('click', () => {
      // Remove active class from all buttons
      document.querySelectorAll('[data-filter]').forEach(btn => btn.classList.remove('active'));
      // Add active class to clicked button
      button.classList.add('active');

      const filterValue = button.getAttribute('data-filter');
      const cards = document.querySelectorAll('#result-cards > div');

      cards.forEach(card => {
        const category = card.getAttribute('data-category');
        const classType = card.getAttribute('data-class');
        const location = card.getAttribute('data-location');
        const price = card.getAttribute('data-price');

        if (filterValue === 'panel-beater' && category === 'panel-beater' ||
            filterValue === 'vulcanizer' && category === 'vulcanizer' ||
            filterValue === 'mechanic' && category === 'mechanic' ||
            filterValue === 'online' && classType === 'online' ||
            filterValue === 'physical' && classType === 'physical' ||
            filterValue === 'lagos' && location === 'lagos' ||
            filterValue === 'abuja' && location === 'abuja' ||
            filterValue === 'port-harcourt' && location === 'port-harcourt' ||
            filterValue === '1000-1002' && price === '1000-1002' ||
            filterValue === '300-400' && price === '300-400' ||
            filterValue === '300-5000' && price === '300-5000') {
          card.style.display = 'flex';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // Show all cards initially
  document.querySelectorAll('#result-cards > div').forEach(card => {
    card.style.display = 'flex';
  });
</script>



    </body>
</html>


{{-- 
Panel Beater
Vulcanizer
Mechanic

Online
Physical

Lagos
Abuja

₦1,000 - ₦1,002
₦300 - ₦400
₦300 - ₦5,000 --}}