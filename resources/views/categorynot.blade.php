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
<div class="flex flex-wrap">
  <!-- LEFT SIDE: Vertical Tabs -->
  <div class="border-e border-gray-200 dark:border-neutral-700">
    <nav class="flex flex-col space-y-2" aria-label="Tabs" role="tablist" aria-orientation="vertical">
      
      <!-- Category -->
      <h3 class="text-sm font-bold text-gray-700 mt-2">Category</h3>
      <button type="button" class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 py-1 pe-4 inline-flex border-e-2 border-transparent text-sm text-gray-500 hover:text-blue-600"
        id="tab-panel-beater" data-hs-tab="#content-panel-beater" aria-controls="content-panel-beater" role="tab">
        Panel Beater
      </button>
      <button type="button" class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 py-1 pe-4 inline-flex border-e-2 border-transparent text-sm text-gray-500 hover:text-blue-600"
        id="tab-vulcanizer" data-hs-tab="#content-vulcanizer" aria-controls="content-vulcanizer" role="tab">
        Vulcanizer
      </button>
      <button type="button" class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 py-1 pe-4 inline-flex border-e-2 border-transparent text-sm text-gray-500 hover:text-blue-600"
        id="tab-mechanic" data-hs-tab="#content-mechanic" aria-controls="content-mechanic" role="tab">
        Mechanic
      </button>

      <!-- Class -->
      <h3 class="text-sm font-bold text-gray-700 mt-4">Class</h3>
      <button type="button" class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 py-1 pe-4 inline-flex border-e-2 border-transparent text-sm text-gray-500 hover:text-blue-600"
        id="tab-online" data-hs-tab="#content-online" aria-controls="content-online" role="tab">
        Online
      </button>
      <button type="button" class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 py-1 pe-4 inline-flex border-e-2 border-transparent text-sm text-gray-500 hover:text-blue-600"
        id="tab-physical" data-hs-tab="#content-physical" aria-controls="content-physical" role="tab">
        Physical
      </button>

      <!-- Location -->
      <h3 class="text-sm font-bold text-gray-700 mt-4">Location</h3>
      <button type="button" class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 py-1 pe-4 inline-flex border-e-2 border-transparent text-sm text-gray-500 hover:text-blue-600"
        id="tab-lagos" data-hs-tab="#content-lagos" aria-controls="content-lagos" role="tab">
        Lagos
      </button>
      <button type="button" class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 py-1 pe-4 inline-flex border-e-2 border-transparent text-sm text-gray-500 hover:text-blue-600"
        id="tab-abuja" data-hs-tab="#content-abuja" aria-controls="content-abuja" role="tab">
        Abuja
      </button>
      <button type="button" class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 py-1 pe-4 inline-flex border-e-2 border-transparent text-sm text-gray-500 hover:text-blue-600"
        id="tab-ph" data-hs-tab="#content-ph" aria-controls="content-ph" role="tab">
        Port Harcourt
      </button>

      <!-- Price -->
      <h3 class="text-sm font-bold text-gray-700 mt-4">Price</h3>
      <button type="button" class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 py-1 pe-4 inline-flex border-e-2 border-transparent text-sm text-gray-500 hover:text-blue-600"
        id="tab-price1" data-hs-tab="#content-price1" aria-controls="content-price1" role="tab">
        ₦1,000 - ₦1,002
      </button>
      <button type="button" class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 py-1 pe-4 inline-flex border-e-2 border-transparent text-sm text-gray-500 hover:text-blue-600"
        id="tab-price2" data-hs-tab="#content-price2" aria-controls="content-price2" role="tab">
        ₦300 - ₦400
      </button>
      <button type="button" class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 py-1 pe-4 inline-flex border-e-2 border-transparent text-sm text-gray-500 hover:text-blue-600"
        id="tab-price3" data-hs-tab="#content-price3" aria-controls="content-price3" role="tab">
        ₦300 - ₦5,000
      </button>
    </nav>
  </div>

  <!-- RIGHT SIDE: Tab Content -->
  <div class="ms-3 flex-1">
    <!-- Panel Beater -->
    <div id="content-panel-beater" role="tabpanel" aria-labelledby="tab-panel-beater">
      <!-- Card Example -->
      <div class="bg-white rounded-lg shadow-md p-4">
        <h3 class="text-xl font-bold">Panel Beater Training</h3>
        <p class="text-gray-500">Learn car body repair techniques.</p>
      </div>
    </div>

    <!-- Vulcanizer -->
    <div id="content-vulcanizer" class="hidden" role="tabpanel" aria-labelledby="tab-vulcanizer">
      <div class="bg-white rounded-lg shadow-md p-4">
        <h3 class="text-xl font-bold">Vulcanizer Training</h3>
        <p class="text-gray-500">Tyre fixing & maintenance.</p>
      </div>
    </div>

    <!-- Mechanic -->
    <div id="content-mechanic" class="hidden" role="tabpanel" aria-labelledby="tab-mechanic">
      <div class="bg-white rounded-lg shadow-md p-4">
        <h3 class="text-xl font-bold">Mechanic Workshop</h3>
        <p class="text-gray-500">Engine repairs and servicing.</p>
      </div>
    </div>

    <!-- Add other tabs for Online, Lagos, Price, etc. in same style -->
  </div>
</div>




    </body>
</html>



Panel Beater
Vulcanizer
Mechanic

Online
Physical

Lagos
Abuja

₦1,000 - ₦1,002
₦300 - ₦400
₦300 - ₦5,000