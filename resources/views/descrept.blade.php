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
    
    <!-- Logo (always on the far left) -->
    <a href="#" class="flex items-center space-x-2">
      <span class="text-2xl font-bold text-sky-600">
        e<span class="text-gray-900">talent</span>
      </span>
    </a>

    <!-- Nav Links (centered with spacing) -->
    <div class="hidden md:flex flex-1 justify-center space-x-8 text-sm font-medium">
        <a href="#" class="text-sky-600 font-semibold border-b-2 border-sky-600 pb-1">Home</a>
      <a href="#" class="hover:text-sky-600">How it Works</a>
      <a href="#" class="hover:text-sky-600">Pricing</a>
      <a href="#" class="hover:text-sky-600">Blog</a>
      <a href="#" class="hover:text-sky-600">Resources</a>
      <a href="#" class="hover:text-sky-600">FAQs</a>
    </div>

    <!-- Button (always on the far right) -->
    <div class="ml-6">
      <a href="#" class="px-4 py-2 bg-sky-600 text-white rounded-lg font-medium hover:bg-sky-700 transition">
        Get in Touch
      </a>
    </div>

  </nav>
</header>

  
<!-- ========== END HEADER ========== -->
<section class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
  <div class="flex flex-col lg:flex-row gap-8">
    <!-- Image Section -->
    <div class="w-full lg:w-1/2">
      <img src="{{ asset('storage/img3.png') }}" alt="Arcane Tutorial Center" class="w-full h-auto rounded-lg shadow-lg">
    </div>

    <!-- Content Section -->
    <div class="w-full lg:w-1/2 p-6 bg-white rounded-lg shadow-lg">
      <h1 class="text-3xl font-bold text-gray-900 mb-2">Arcane Tutorial Center</h1>
      <p class="text-gray-600 text-sm mb-4">24 Iyalla street off Shoprite, Alausa Ikeja, Lagos state, Nigeria</p>

      <!-- Rating Section -->
      <div class="flex items-center mb-4">
        <span class="text-yellow-400 text-xl">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
        <span class="text-gray-600 text-sm ml-2">4.34</span>
      </div>

      <!-- Contact and Info Section -->
      <div class="border-b border-gray-200 pb-4 mb-4">
        <div class="flex items-center text-sm text-gray-700 mb-2">
          <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1H3a1 1 0 01-1-1V3zM8 3a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1H9a1 1 0 01-1-1V3zM14 3a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1h-2a1 1 0 01-1-1V3zM2 9a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1H3a1 1 0 01-1-1V9zM8 9a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1H9a1 1 0 01-1-1V9zM14 9a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1h-2a1 1 0 01-1-1V9zM2 15a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1H3a1 1 0 01-1-1v-2zM8 15a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1H9a1 1 0 01-1-1v-2zM14 15a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1h-2a1 1 0 01-1-1v-2z"></path></svg>
          08056374859, 090687936456
        </div>
        <div class="flex items-center text-sm text-gray-700">
          <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
          Arcanebukstor@gmail.com
        </div>
      </div>

      <!-- Tags Section -->
      <div class="flex flex-wrap gap-2 text-xs font-semibold uppercase text-gray-600 mb-4">
        <span class="py-1 px-2 border border-gray-300 rounded-full">Tailoring</span>
        <span class="py-1 px-2 border border-gray-300 rounded-full">Fashion Design</span>
        <span class="py-1 px-2 border border-gray-300 rounded-full">Tailoring</span>
      </div>

      <!-- Social Section: Likes, Comments, Views, Shares -->
 <div class="flex flex-wrap gap-4 border-b border-gray-200 pb-4 mb-4">
  <div class="flex items-center gap-1">
    <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13.25a.75.75 0 00-1.5 0v5.5a.75.75 0 00.75.75h4.5a.75.75 0 000-1.5H11.5V6.75z" clip-rule="evenodd"></path></svg>
    <span>324 comments</span>
  </div>
  <div class="flex items-center gap-1">
    <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.602 6.008 3 10 3s8.268 2.602 9.542 7c-1.274 4.398-5.55 7-9.542 7S1.732 14.398.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
    <span>123 likes</span>
  </div>
  <div class="flex items-center gap-1">
    <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.602 6.008 3 10 3s8.268 2.602 9.542 7c-1.274 4.398-5.55 7-9.542 7S1.732 14.398.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
    <span>123 views</span>
  </div>
  <div class="flex items-center gap-1">
    <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.602 6.008 3 10 3s8.268 2.602 9.542 7c-1.274 4.398-5.55 7-9.542 7S1.732 14.398.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
    <span>123 shares</span>
  </div>
</div>

      <!-- Thumbs Up and Thumbs Down Section -->
      <div class="flex items-center text-sm text-gray-700 mt-4 mb-4 space-x-6">
  <button class="flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-green-500">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
    </svg>
  </button>
  <button class="flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-red-500">
      <path stroke-linecap="round" stroke-linejoin="round" d="M7.498 15.25H4.372c-1.026 0-1.945-.694-2.054-1.715a12.137 12.137 0 0 1-.068-1.285c0-2.848.992-5.464 2.649-7.521C5.287 4.247 5.886 4 6.504 4h4.016a4.5 4.5 0 0 1 1.423.23l3.114 1.04a4.5 4.5 0 0 0 1.423.23h1.294M7.498 15.25c.618 0 .991.724.725 1.282A7.471 7.471 0 0 0 7.5 19.75 2.25 2.25 0 0 0 9.75 22a.75.75 0 0 0 .75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 0 0 2.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384m-10.253 1.5H9.7m8.075-9.75c.01.05.027.1.05.148.593 1.2.925 2.55.925 3.977 0 1.487-.36 2.89-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398-.306.774-1.086 1.227-1.918 1.227h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 0 0 .303-.54" />
    </svg>
  </button>
</div>


      <!-- Map Section: Reduced Height -->
      <div class="w-full h-32 bg-gray-200 rounded-lg overflow-hidden relative mb-4">
        <img src="https://via.placeholder.com/400x200" alt="Map Location" class="w-full h-full object-cover">
        <div class="absolute bottom-4 right-4 bg-white p-2 rounded-lg shadow-md">
          <svg class="w-6 h-6 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
        </div>
      </div>

      <!-- Pricing and Register Section -->
      <div class="flex items-center justify-between">
        <span class="text-4xl font-bold text-gray-900">#7,500</span>
        <a href="#" class="bg-sky-600 text-white font-semibold py-3 px-8 rounded-full hover:bg-sky-700 transition-colors duration-300">Register</a>
      </div>
    </div>
  </div>
</section>


<!-- ========== END banner ========== -->




<!--physical Trainings Section -->
<section class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
  
    <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
    <h2 class="text-3xl font-bold text-gray-900 mb-4">Description</h2>
    <p class="text-gray-600 text-sm">
      Another great experience with your software! I've recently been involved in recruiting a key business development role and through eTraining the well-written advertising attracted a pool of 142 candidates. Normally sifting a pool this size would take hours of wading through CVs and trying to guess who to interview. With eTraining, the process was reduced to a matter of minutes to create a shortlist of 9 possibles, arrange to interview them, and come to a clear decision. All with a minimum of effort and an excellent result – thank you!
    </p>
    <p class="text-gray-600 text-sm mt-4">
      A client has also been recruiting apprentices in one of the trades. Again, the advertising produced 56 applicants, 30 of whom were qualified, and some good candidates to interview. So, whenever anyone tells me that you can’t find candidates in their area of work, my question is simple – have you tried eTraining? Having used a wide range of recruiting tools and interviewed hundreds of candidates over my career in a wide variety of roles, I have yet to come across any other system that comes close to eTraining in easily supporting high-confidence recruitment. Thank you!
    </p>
  </div>
</section>


<section class="max-w-4xl mx-auto py-10 px-4 sm:px-6 lg:px-8">

  <div class="bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-3xl font-bold text-gray-900 mb-4">Comments</h2>

    <div class="flex items-center mb-6">
      <input
        type="text"
        placeholder="Write a comment..."
        class="w-full py-2 px-4 border rounded-lg border-gray-300 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
      />
      <button class="ml-4 bg-sky-500 text-white font-semibold py-2 px-4 rounded-lg">Send</button>
    </div>

    <div class="space-y-6">
      <div class="flex items-start space-x-4">
        <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Avatar" class="w-12 h-12 rounded-full">
        <div class="flex-1">
          <div class="flex items-center mb-1">
            <p class="font-semibold text-gray-800">Rizal Gradian</p>
            <span class="text-xs text-gray-400 ml-2">●</span>
            <p class="text-xs text-gray-400 ml-2">8:42 AM</p>
          </div>
          <p class="text-sm text-gray-700">Hi Everybody 👋</p>
          <p class="text-sm text-gray-700">Can you show me the progress of Lesta Real Estate Apps?</p>
          <div class="flex items-center text-xs text-gray-600 mt-2">
            <div class="flex items-center pr-2 border-r border-gray-200">
              <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-2-6a1 1 0 011-1h.01a1 1 0 010 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
              324 comments
            </div>
            <div class="flex items-center px-2 border-r border-gray-200">
              <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13.25a.75.75 0 00-1.5 0v5.5a.75.75 0 00.75.75h4.5a.75.75 0 000-1.5H11.5V6.75z" clip-rule="evenodd"></path></svg>
              123 Likes
            </div>
            <div class="flex items-center px-2 border-r border-gray-200">
              <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.602 6.008 3 10 3s8.268 2.602 9.542 7c-1.274 4.398-5.55 7-9.542 7S1.732 14.398.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
              123 views
            </div>
            <div class="flex items-center pl-2">
              <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.602 6.008 3 10 3s8.268 2.602 9.542 7c-1.274 4.398-5.55 7-9.542 7S1.732 14.398.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
              123 shares
            </div>
          </div>
        </div>
      </div>
      
      <div class="flex items-start space-x-4">
        <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Avatar" class="w-12 h-12 rounded-full">
        <div class="flex-1">
          <div class="flex items-center mb-1">
            <p class="font-semibold text-gray-800">Sergio Aquinna</p>
            <span class="text-xs text-gray-400 ml-2">●</span>
            <p class="text-xs text-gray-400 ml-2">8:43 AM</p>
          </div>
          <p class="text-sm text-gray-700">Of Course. I'll attach the code here</p>
          <div class="flex items-center text-xs text-gray-600 mt-2">
            <div class="flex items-center pr-2 border-r border-gray-200">
              <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-2-6a1 1 0 011-1h.01a1 1 0 010 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
              324 comments
            </div>
            <div class="flex items-center px-2 border-r border-gray-200">
              <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13.25a.75.75 0 00-1.5 0v5.5a.75.75 0 00.75.75h4.5a.75.75 0 000-1.5H11.5V6.75z" clip-rule="evenodd"></path></svg>
              123 Likes
            </div>
            <div class="flex items-center px-2 border-r border-gray-200">
              <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.602 6.008 3 10 3s8.268 2.602 9.542 7c-1.274 4.398-5.55 7-9.542 7S1.732 14.398.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
              123 views
            </div>
            <div class="flex items-center pl-2">
              <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.602 6.008 3 10 3s8.268 2.602 9.542 7c-1.274 4.398-5.55 7-9.542 7S1.732 14.398.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
              123 shares
            </div>
          </div>
        </div>
      </div>
      </div>
  </div>
</section>

<!--physical Trainings Section -->
<section class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
  <div class="mb-8 text-center">
    <h2 class="text-3xl font-extrabold text-gray-900">
      Our Virtual Training
    </h2>
  </div>

  <div class="grid grid-cols-1 gap-4">
    @for ($i = 1; $i <= 5; $i++)
    <div class="bg-white rounded-lg shadow-md flex flex-col sm:flex-row items-start sm:items-center justify-between p-4">
      <div class="flex items-start space-x-4 w-full sm:w-auto">
        <img class="w-24 h-24 rounded-lg object-cover" src="{{ asset('storage/img1.png') }}" alt="Training thumbnail">
        <div class="flex-1">
          <h3 class="text-xl font-bold text-gray-900">How to sew Male Suit</h3>
          <p class="text-sm text-gray-500 mb-2">
            <span class="font-bold text-gray-700">(345 registered)</span>
            <span class="bg-gray-200 px-2 py-1 rounded-full text-xs ml-2">Physical</span>
          </p>

          <div class="flex flex-wrap items-center text-xs text-gray-600 gap-x-4 gap-y-2">
            <div class="flex items-center">
              <svg class="w-4 h-4 mr-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-2-6a1 1 0 011-1h.01a1 1 0 010 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
              324 comments
            </div>
            <div class="flex items-center">
              <svg class="w-4 h-4 mr-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13.25a.75.75 0 00-1.5 0v5.5a.75.75 0 00.75.75h4.5a.75.75 0 000-1.5H11.5V6.75z" clip-rule="evenodd"></path></svg>
              123 Likes
            </div>
            <div class="flex items-center">
              <svg class="w-4 h-4 mr-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.602 6.008 3 10 3s8.268 2.602 9.542 7c-1.274 4.398-5.55 7-9.542 7S1.732 14.398.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
              123 views
            </div>
            <div class="flex items-center">
              <svg class="w-4 h-4 mr-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.602 6.008 3 10 3s8.268 2.602 9.542 7c-1.274 4.398-5.55 7-9.542 7S1.732 14.398.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
              123 shares
            </div>
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
    @endfor
  </div>
</section>




<!-- Trainings Section -->

<!-- Search Section (own block, below carousel) -->
<div class="max-w-3xl mx-auto mt-8 px-4">
  <div class="bg-white rounded-xl shadow-lg p-4 flex items-center space-x-2">
    <input type="text" placeholder="Search..." 
           class="flex-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500" />
    <button class="px-4 py-2 bg-sky-600 text-white rounded-lg hover:bg-sky-700">Search</button>
  </div>
</div>
<div class="max-w-6xl mx-auto mt-12 px-6">
  <h2 class="text-xl font-semibold text-gray-800 mb-6">Trainings Around You</h2>

  <!-- Adjusted Grid -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @for ($i = 1; $i <= 6; $i++)
    <!-- Card -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition w-full">
      <!-- Image -->
      <img class="w-full h-56 object-cover" src="{{ asset('storage/img2.png') }}" alt="Course Title" />

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
<div class="bg-gray-50 py-16 px-6 sm:px-8 lg:px-16">
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
