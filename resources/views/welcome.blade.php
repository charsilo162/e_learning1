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
  <!-- ========== HEADER ========== -->
<header class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full text-base">
  <nav class="relative w-full bg-white border border-gray-200 rounded-none flex flex-wrap md:flex-nowrap items-center justify-between py-4 px-4 dark:bg-neutral-900 dark:border-neutral-700">
    
    <div class="flex items-center">
      <a class="flex-none text-xl font-semibold focus:outline-hidden focus:opacity-80" href="#" aria-label="eTalent">
        <span class="text-2xl font-bold text-sky-600">e<span class="text-gray-900 dark:text-white">talent</span></span>
      </a>
    </div>
    <div class="flex items-center gap-4 md:order-4 md:ms-10">
      <a class="w-full sm:w-auto whitespace-nowrap py-3 px-5 inline-flex justify-center items-center gap-x-2 text-base font-semibold rounded-full border border-transparent bg-gray-800 text-white hover:bg-gray-900 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:text-neutral-800 dark:hover:bg-neutral-200" href="#">
         Book a call
       </a>

       <div class="md:hidden">
         <button type="button" class="hs-collapse-toggle flex justify-center items-center size-10 border border-gray-200 text-gray-500 rounded-full hover:bg-gray-200 focus:outline-hidden dark:border-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700" id="hs-navbar-header-floating-collapse" aria-expanded="false" aria-controls="hs-navbar-header-floating" data-hs-collapse="#hs-navbar-header-floating">
           <svg class="hs-collapse-open:hidden shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
           <svg class="hs-collapse-open:block hidden shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
         </button>
       </div>
    </div>

    <div id="hs-navbar-header-floating" class="hidden hs-collapse overflow-hidden transition-all duration-300 basis-full grow md:block" aria-labelledby="hs-navbar-header-floating-collapse">
      <div class="flex flex-col md:flex-row md:items-center md:justify-end gap-2 md:gap-5 mt-3 md:mt-0 py-2 md:py-0 md:ps-7">
        <a href="#" class="py-2 px-4 md:px-1 border-b-2 border-sky-600 font-semibold text-sky-600" aria-current="page">Home</a>
        <a href="#" class="py-2 px-4 md:px-1 text-gray-600 hover:text-sky-600 border-b-2 border-transparent">Work</a>
        <a href="#" class="py-2 px-4 md:px-1 text-gray-600 hover:text-sky-600 border-b-2 border-transparent">Reviews</a>
      </div>
    </div>
  </nav>
</header>
<!-- ========== END HEADER ========== -->
  <!-- Fade-up animation -->


  <!-- Slider -->
<!-- Carousel Section -->
<div data-hs-carousel='{
    "loadingClasses": "opacity-0",
    "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500",
    "isAutoPlay": true
  }' class="relative">

  <div class="hs-carousel relative overflow-hidden w-full min-h-96 bg-white rounded-lg">
    <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
      
      <!-- Slide 1 -->
      <div class="hs-carousel-slide relative w-full h-full">
        <img class="w-full h-full object-cover" src="{{ asset('storage/img4.png') }}" alt="Banner Image 1">
        <!-- Caption -->
        <div class="absolute bottom-6 left-6 text-left max-w-md animate-fade-up">
          <h2 class="text-2xl md:text-4xl font-bold text-white drop-shadow-lg">
            Discover Our Services
          </h2>
          <p class="mt-2 text-sm md:text-base text-gray-200 drop-shadow">
            We provide top-quality solutions to help your business grow and succeed.
          </p>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="hs-carousel-slide relative w-full h-full">
        <img class="w-full h-full object-cover" src="{{ asset('storage/img1.png') }}" alt="Banner Image 2">
        <div class="absolute bottom-6 left-6 text-left max-w-md animate-fade-up">
          <h2 class="text-2xl md:text-4xl font-bold text-white drop-shadow-lg">
            Modern Workspaces
          </h2>
          <p class="mt-2 text-sm md:text-base text-gray-200 drop-shadow">
            Flexible, innovative spaces designed for productivity and comfort.
          </p>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="hs-carousel-slide relative w-full h-full">
        <img class="w-full h-full object-cover" src="{{ asset('storage/img2.png') }}" alt="Banner Image 3">
        <div class="absolute bottom-6 left-6 text-left max-w-md animate-fade-up">
          <h2 class="text-2xl md:text-4xl font-bold text-white drop-shadow-lg">
            Join Our Community
          </h2>
          <p class="mt-2 text-sm md:text-base text-gray-200 drop-shadow">
            Connect, collaborate, and create with like-minded professionals.
          </p>
        </div>
      </div>

    </div>
  </div>

  <!-- Prev Button -->
  <button type="button" class="hs-carousel-prev absolute inset-y-0 start-0 inline-flex justify-center items-center w-11.5 h-full text-gray-800 hover:bg-gray-800/10 rounded-s-lg dark:text-white">
    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path d="m15 18-6-6 6-6"></path>
    </svg>
    <span class="sr-only">Previous</span>
  </button>

  <!-- Next Button -->
  <button type="button" class="hs-carousel-next absolute inset-y-0 end-0 inline-flex justify-center items-center w-11.5 h-full text-gray-800 hover:bg-gray-800/10 rounded-e-lg dark:text-white">
    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path d="m9 18 6-6-6-6"></path>
    </svg>
    <span class="sr-only">Next</span>
  </button>

  <!-- Pagination Dots -->
  <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 gap-x-2"></div>
</div>


<!-- End Carousel -->

<!-- Search Section (own block, below carousel) -->
<div class="max-w-3xl mx-auto mt-8 px-4">
  <div class="bg-white rounded-xl shadow-lg p-4 flex items-center space-x-2">
    <input type="text" placeholder="Search..." 
           class="flex-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500" />
    <button class="px-4 py-2 bg-sky-600 text-white rounded-lg hover:bg-sky-700">Search</button>
  </div>
</div>

<!-- Trainings Section -->


<div class="max-w-6xl mx-auto mt-12 px-6">
  <h2 class="text-xl font-semibold text-gray-800 mb-6">Trainings Around You</h2>

  <!-- Adjusted Grid -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @for ($i = 1; $i <= 6; $i++)
    <!-- Card -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition w-full">
      <!-- Image -->
      {{-- class="relative h-48 bg-gray-200 rounded-b-xl overflow-hidden" --}}
      <img class="w-full h-56 object-cover rounded-b-xl overflow-hidden" src="{{ asset('storage/img2.png') }}" alt="Course Title" />

      <!-- Content -->
      <div class="p-5">
        <!-- Title + Rating -->
        <div class="flex items-center justify-between">
          <h3 class="text-lg font-semibold text-gray-800">Arcane Tutorial</h3>
          <div class="flex items-center">
            <!-- Stars -->
            <div class="flex space-x-0.5">
              <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.122-6.545L.489 6.91l6.561-.955L10 0l2.95 5.955 6.561.955-4.755 4.635 1.122 6.545z"/></svg>
              <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.122-6.545L.489 6.91l6.561-.955L10 0l2.95 5.955 6.561.955-4.755 4.635 1.122 6.545z"/></svg>
              <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.122-6.545L.489 6.91l6.561-.955L10 0l2.95 5.955 6.561.955-4.755 4.635 1.122 6.545z"/></svg>
              <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.122-6.545L.489 6.91l6.561-.955L10 0l2.95 5.955 6.561.955-4.755 4.635 1.122 6.545z"/></svg>
              <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.122-6.545L.489 6.91l6.561-.955L10 0l2.95 5.955 6.561.955-4.755 4.635 1.122 6.545z"/></svg>
            </div>
            <!-- Rating -->
            <span class="ml-2 text-sm text-gray-600">4.34</span>
          </div>
        </div>

        <!-- Experience -->
        <p class="mt-2 text-sm text-gray-600">3 years experience</p>

        <!-- Location -->
        <div class="flex items-center mt-2 text-sm text-gray-500">
          <svg class="w-4 h-4 mr-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.05 3.636a7 7 0 119.9 9.9l-4.243 4.243a1 1 0 01-1.414 0L5.05 13.536a7 7 0 010-9.9zm4.95-.636a5 5 0 100 10 5 5 0 000-10z" clip-rule="evenodd"/>
          </svg>
          24 Iyalla street off Shoprite, Alausa
        </div>

        <!-- Tags -->
        <div class="mt-3 flex flex-wrap gap-2">
          <span class="px-3 py-1 text-xs font-medium bg-gray-100 rounded-full text-gray-700">Tailoring</span>
          <span class="px-3 py-1 text-xs font-medium bg-gray-100 rounded-full text-gray-700">Fashion Design</span>
          <span class="px-3 py-1 text-xs font-medium bg-gray-100 rounded-full text-gray-700">Makeup</span>
        </div>
      </div>
    </div>
    <!-- End Card -->
  @endfor
    
  </div>
</div>

<!-- Full Width Section -->
<div class="overflow-hidden w-full min-h-96  text-white py-12 mt-16">

    <!-- Heading -->
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Centers Around You</h2>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @for ($i = 1; $i <= 6; $i++)
        <!-- Card -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition w-full">
          <!-- Image -->
          <img class="w-full h-56 object-cover" src="{{ asset('storage/img1.png') }}" alt="Course Title" />

          <!-- Content -->
          <div class="p-5">
            <!-- Title + Rating -->
            <div class="flex items-center justify-between">
              <h3 class="text-lg font-semibold text-gray-800">Arcane Tutorial</h3>
              <div class="flex items-center">
                <!-- Stars -->
                <div class="flex space-x-0.5">
                  <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.122-6.545L.489 6.91l6.561-.955L10 0l2.95 5.955 6.561.955-4.755 4.635 1.122 6.545z"/></svg>
                  <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.122-6.545L.489 6.91l6.561-.955L10 0l2.95 5.955 6.561.955-4.755 4.635 1.122 6.545z"/></svg>
                  <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.122-6.545L.489 6.91l6.561-.955L10 0l2.95 5.955 6.561.955-4.755 4.635 1.122 6.545z"/></svg>
                  <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.122-6.545L.489 6.91l6.561-.955L10 0l2.95 5.955 6.561.955-4.755 4.635 1.122 6.545z"/></svg>
                  <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.122-6.545L.489 6.91l6.561-.955L10 0l2.95 5.955 6.561.955-4.755 4.635 1.122 6.545z"/></svg>
                </div>
                <!-- Rating -->
                <span class="ml-2 text-sm text-gray-600">4.34</span>
              </div>
            </div>

            <!-- Experience -->
            <p class="mt-2 text-sm text-gray-600">3 years experience</p>

            <!-- Location -->
            <div class="flex items-center mt-2 text-sm text-gray-500">
              <svg class="w-4 h-4 mr-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.05 3.636a7 7 0 119.9 9.9l-4.243 4.243a1 1 0 01-1.414 0L5.05 13.536a7 7 0 010-9.9zm4.95-.636a5 5 0 100 10 5 5 0 000-10z" clip-rule="evenodd"/>
              </svg>
              24 Iyalla street off Shoprite, Alausa
            </div>

            <!-- Tags -->
            <div class="mt-3 flex flex-wrap gap-2">
              <span class="px-3 py-1 text-xs font-medium bg-gray-100 rounded-full text-gray-700">Tailoring</span>
              <span class="px-3 py-1 text-xs font-medium bg-gray-100 rounded-full text-gray-700">Fashion Design</span>
              <span class="px-3 py-1 text-xs font-medium bg-gray-100 rounded-full text-gray-700">Makeup</span>
            </div>
          </div>
        </div>
        <!-- End Card -->
      @endfor
    </div>
    </div>
    
<!-- Full Width Section with Image Background  max-w-6xl mx-auto mt-12 px-6-->
<section class="relative max-w-6xl mx-auto mt-12 px-6 bg-gray-50 py-12">
  <!-- Background Image -->
  <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/storage/img3.png');">
    <div class="absolute inset-0 bg-black opacity-40"></div>
  </div>
  
  <!-- Content Over Image -->
  <div class="relative z-10 max-w-7xl mx-auto px-6 text-center">
    <!-- Heading Text -->
    <h2 class="text-3xl sm:text-4xl font-semibold text-white mb-6">
      Be engaged with the best Tutors Nationwide
    </h2>
    <p class="text-lg sm:text-xl text-white mb-8">
      with experiences from different parts of the Globe
    </p>

    <!-- Apply Button -->
    <div class="mt-12 w-full">
      <button class="w-full sm:w-auto py-3 px-6 bg-blue-500 text-white text-lg font-semibold rounded-md hover:bg-blue-600 transition duration-300">
        Apply
      </button>
    </div>
  </div>
</section>
 <!-- Get More Courses Section -->
  <div class="mt-16 text-center mb-2">
  <h3 class="text-xl font-semibold text-gray-800 mb-6">Get A Course As Well To Enhance Your Learning</h3>
  
  
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
    @for ($i = 1; $i <= 3; $i++)
      <!-- Course Card -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition w-full">
        <!-- Image with Badge -->
        <div class="relative">
          <img class="w-full h-56 object-cover" src="{{ asset('storage/img3.png') }}" alt="Course" />
          <!-- Badge -->
          <span class="absolute top-4 left-4 bg-blue-500 text-white px-3 py-1 text-sm font-semibold rounded-lg">PART 2</span>
        </div>

        <!-- Course Content -->
        <div class="p-5">
          <!-- Course Title -->
          <h4 class="text-lg font-semibold text-gray-800">How To Cut and Sew Male Suit</h4>
          <p class="text-sm text-gray-600 mt-2">Learn how to create a perfect male suit in this in-depth course.</p>

                <!-- Price Section -->
                <div class="flex items-center mt-4 justify-between">
                <!-- Cancelled Price -->
                <span class="text-sm text-gray-500 line-through">₦8,000.00</span>
                <!-- Main Price -->
                <span class="text-lg font-semibold text-gray-800 ml-auto">₦7,000.00</span>
                </div>
       <!-- Add to Cart Button -->
                    <div class="mt-4 float-left">
                  <button 
                        type="button" 
                        class="py-3 px-4 inline-flex items-center gap-x-2
                        text-sm font-medium rounded-lg border border-transparent
                        bg-gray-900 text-white hover:bg-gray-800
                        focus:outline-none focus:bg-gray-700
                        disabled:opacity-50 disabled:pointer-events-none">
                        Add to Cart
                        </button>
                 </div>

        </div>
      </div>
      <!-- End Course Card -->
    @endfor
  </div>
</div>
<!-- First Section: Full-Width Image -->
<div class="relative w-full mt-16 mb-16">
  <img src="{{ asset('storage/img4.png') }}" alt="Scenic View" class="w-full h-[200px] object-cover" />
</div>
<!-- Second Section (Contact and Privacy) -->
<div class="bg-gray-100 py-16 px-6 sm:px-8 lg:px-16">
  <div class="max-w-screen-xl mx-auto">
    <!-- Grid Layout with three columns for Contact Details, Contact Form, and Privacy Statement -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-16">

      <!-- Left Section (Contact Info) -->
      <div>
        <h3 class="text-2xl font-semibold text-gray-800 mb-6">Contact Details</h3>
        <div class="mb-4 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="text-blue-500 mr-2" fill="currentColor" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zM3 5.2A4.2 4.2 0 1 1 7.2 9 4.2 4.2 0 0 1 3 5.2zm6.4 5.4A4.2 4.2 0 1 1 9 7.8a4.2 4.2 0 0 1 0 2.8zM3 10.2a4.2 4.2 0 1 1 0-5.6 4.2 4.2 0 0 1 0 5.6z"/></svg>
          <p class="text-gray-600">
            <strong>Phone:</strong> <a href="tel:+08453889243" class="text-blue-500">0845 388 9243</a>
          </p>
        </div>
        <div class="mb-4 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="text-blue-500 mr-2" fill="currentColor" viewBox="0 0 16 16"><path d="M1.5 0a.5.5 0 0 0-.5.5V15a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5V.5a.5.5 0 0 0-.5-.5H1.5zM8 14a6 6 0 1 1 0-12 6 6 0 0 1 0 12z"/></svg>
          <p class="text-gray-600">
            <strong>Email:</strong> <a href="mailto:info@etraining.net" class="text-blue-500">info@etraining.net</a>
          </p>
        </div>
        <div class="mb-4 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="text-blue-500 mr-2" fill="currentColor" viewBox="0 0 16 16"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2 1v7h12V5H2z"/></svg>
          <p class="text-gray-600">
            <strong>Address:</strong> 3 Walker Street, Edinburgh, EH3 7JY
          </p>
        </div>
        <div class="mt-6">
          <h4 class="text-lg font-semibold text-gray-800">We are Social</h4>
          <div class="flex space-x-4 mt-2">
            <a href="#" class="text-blue-500 hover:text-gray-700">LinkedIn</a>
            <a href="#" class="text-blue-500 hover:text-gray-700">X (formerly Twitter)</a>
            <a href="#" class="text-blue-500 hover:text-gray-700">YouTube</a>
          </div>
        </div>
      </div>

      <!-- Middle Section (Contact Form) -->
      <div>
        <h3 class="text-2xl font-semibold text-gray-800 mb-6">Contact Us</h3>
        <form action="#" method="POST" class="space-y-4">
          <div>
            <input type="text" id="full_name" name="full_name" placeholder="Full Name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
          </div>
          <div>
            <input type="tel" id="phone_number" name="phone_number" placeholder="Phone Number" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
          </div>
          <div>
            <input type="email" id="email" name="email" placeholder="Email Address" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
          </div>
          <div>
            <textarea id="message" name="message" placeholder="Your Message" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
          </div>
          <button type="submit" class="w-full py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Send Message
          </button>
        </form>
      </div>

      <!-- Right Section (Privacy Statement) -->
      <div>
        <h3 class="text-2xl font-semibold text-gray-800 mb-6">Privacy Statement</h3>
        <p class="text-gray-600 text-sm">
          A privacy statement is a formal document that outlines how an organization collects, uses, discloses, and protects personal information. It typically details the types of data collected, the purpose of data collection, data sharing practices, security measures, and users' rights regarding their information.
        </p>
      </div>
      
    </div>
  </div>
</div>

<!-- Footer Section -->
<div class="overflow-hidden w-full min-h-96 bg-gray-900 text-white py-12 mt-16">
  <div class="max-w-screen-xl mx-auto px-6 sm:px-8">
    <!-- Footer Content Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">

      <!-- Column 1: Logo & Tagline -->
      <div>
        <img src="{{ asset('storage/logo.png') }}" alt="Logo" class="w-24 mb-4" />
        <p class="text-lg font-semibold mb-4">Smart Hiring Starts Here!</p>

        
      </div>

      <!-- Column 2: Useful Links -->
     <div>
     <h4 class="text-lg font-semibold mb-4">Useful links</h4>
     <ul class="space-y-2 text-sm">
 <li><a href="#" class="flex items-center space-x-2 hover:text-blue-400">
               
                <span>Home</span>
              </a></li>
 <li><a href="#" class="flex items-center space-x-2 hover:text-blue-400">
                
                <span>How It Works</span>
              </a></li>
<li><a href="#" class="flex items-center space-x-2 hover:text-blue-400">
              
                <span>Video Library</span>
              </a></li>
 <li><a href="#" class="flex items-center space-x-2 hover:text-blue-400">
                
                <span>Pricing</span>
              </a></li>
 <li><a href="#" class="flex items-center space-x-2 hover:text-blue-400">
               <span>Downloads</span>
              </a></li>
                    <li><a href="#" class="flex items-center space-x-2 hover:text-blue-400">
                                
                                    <span>Guide to Hiring</span>
                                </a></li>
                    <li><a href="#" class="flex items-center space-x-2 hover:text-blue-400">
                            
                                    <span>Blog</span>
                                </a></li>
                    <li><a href="#" class="flex items-center space-x-2 hover:text-blue-400">
                                
                                    <span>FAQs</span>
                                </a></li>
                    </ul>
</div>

      <!-- Column 3: Contact Info -->
      <div>
        <h4 class="text-lg font-semibold mb-4">Contact</h4>
        <p class="text-sm">3 Walker Street, Edinburgh, EH3 7JY</p>
      </div>

      <!-- Column 4: Subscribe Form -->
      <div>
        <h4 class="text-lg font-semibold mb-4">Subscribe</h4>
        <form action="#" method="POST" class="space-y-4">
          <div>
            <input type="text" name="full_name" placeholder="Full Name*" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
          </div>
          <div>
            <input type="email" name="email" placeholder="Your Email*" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
          </div>
          <button type="submit" class="w-full py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Send
          </button>
        </form>
      </div>

    </div>
    
  {{-- </div>
</section> --}}



    </body>
</html>
