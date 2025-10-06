<x-layouts.app title="eTalent Home">
    {{-- <x-navigation.header /> --}}

    <x-navigation.header-original />

<!-- HOW IT WORKS Section -->
<section class="relative max-w-6xl mx-auto mt-20 px-6">
  <!-- Small Heading -->
  <div class="text-center mb-4">
    <span class="inline-block text-xs font-medium uppercase tracking-wider text-sky-500">
      It really works
    </span>
  </div>

  <!-- Main Heading -->
  <h2 class="text-center text-3xl sm:text-4xl font-bold text-gray-900 mb-8">
    How does <span class="text-sky-500">eTraining</span> work?
  </h2>

  <!-- Grid Layout -->
  <div class="grid md:grid-cols-2 gap-6 items-center">
    <!-- Accordion -->
    <div class="w-full bg-white rounded-lg shadow-md dark:bg-neutral-800">
      <div class="hs-accordion-group divide-y divide-gray-200 dark:divide-neutral-700">
        <!-- Accordion 1 -->
        <div class="hs-accordion active" id="hs-basic-heading-one">
            <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 px-6 py-3 inline-flex items-center gap-x-3 text-sm w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="true" aria-controls="hs-basic-collapse-one">
        <svg class="hs-accordion-active:hidden hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M5 12h14"></path>
          <path d="M12 5v14"></path>
        </svg>
        <svg class="hs-accordion-active:block hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M5 12h14"></path>
        </svg>
        Accordion #1
      </button>
           <div id="hs-basic-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-heading-one">
        <div class="pb-4 px-6">
          <p class="text-sm text-gray-600 dark:text-neutral-200">
            It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element.
          </p>
        </div>
      </div>
        </div>

        <!-- Accordion 2 -->
        <div class="hs-accordion" id="hs-basic-heading-two">
          <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 px-6 py-3 inline-flex items-center gap-x-3 text-sm w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-collapse-two">
        <svg class="hs-accordion-active:hidden hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M5 12h14"></path>
          <path d="M12 5v14"></path>
        </svg>
        <svg class="hs-accordion-active:block hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M5 12h14"></path>
        </svg>
        Accordion #2
      </button>
      <div id="hs-basic-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-heading-two">
        <div class="pb-4 px-6">
          <p class="text-sm text-gray-600 dark:text-neutral-200">
            It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element.
          </p>
        </div>
        </div>
        </div>

        <!-- Accordion 3 -->
        <div class="hs-accordion" id="hs-basic-heading-three">
          <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 px-6 py-3 inline-flex items-center gap-x-3 text-sm w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-collapse-three">
        <svg class="hs-accordion-active:hidden hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M5 12h14"></path>
          <path d="M12 5v14"></path>
        </svg>
        <svg class="hs-accordion-active:block hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M5 12h14"></path>
        </svg>
        Accordion #3
      </button>
      <div id="hs-basic-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-heading-three">
        <div class="pb-4 px-6">
          <p class="text-sm text-gray-600 dark:text-neutral-200">
            It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element.
          </p>
        </div>
      </div>
        </div>
      </div>
    </div>

    <!-- Right Image -->
    <div class="w-full">
      <img src="{{ asset('storage/img3.png') }}" alt="Arcane Tutorial Center" class="w-full rounded-lg shadow-md">
    </div>
  </div>
</section>



<section class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold text-gray-800">Groups you may like</h2>
        <a href="#" class="text-red-500 font-medium hover:text-red-600 transition duration-150">See more</a>
    </div>

    <div class="flex space-x-4 overflow-x-auto pb-4 -mx-4 px-4 sm:mx-0 sm:px-0">
        
        <div class="flex-shrink-0 w-64 p-4 bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300">
            <div class="h-32 w-full rounded-lg overflow-hidden mb-3">
                <img src="[URL_TO_GROUP_IMAGE]" alt="Group of people smiling" class="w-full h-full object-cover">
            </div>
            <h3 class="text-md font-semibold text-gray-800 mb-1">Essential staff</h3>
            <p class="text-sm text-gray-500 mb-4">1 Member · 0 Posts today</p>
            <button class="w-full py-2 px-4 inline-flex justify-center items-center text-sm font-semibold rounded-lg border border-transparent bg-orange-500 text-white hover:bg-orange-600 transition duration-200">
                Join
            </button>
        </div>

        <div class="flex-shrink-0 w-64 p-4 bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300">
            <div class="h-32 w-full rounded-lg overflow-hidden mb-3">
                <img src="[URL_TO_GROUP_IMAGE]" alt="Group of people smiling" class="w-full h-full object-cover">
            </div>
            <h3 class="text-md font-semibold text-gray-800 mb-1">Health group</h3>
            <p class="text-sm text-gray-500 mb-4">1 Member · 0 Posts today</p>
            <button class="w-full py-2 px-4 inline-flex justify-center items-center text-sm font-semibold rounded-lg border border-transparent bg-orange-500 text-white hover:bg-orange-600 transition duration-200">
                Join
            </button>
        </div>

        <div class="flex-shrink-0 w-64 p-4 bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300">
            <div class="h-32 w-full rounded-lg overflow-hidden mb-3">
                <img src="[URL_TO_GROUP_IMAGE]" alt="Group of people smiling" class="w-full h-full object-cover">
            </div>
            <h3 class="text-md font-semibold text-gray-800 mb-1">Everyday news</h3>
            <p class="text-sm text-gray-500 mb-4">1 Member · 0 Posts today</p>
            <button class="w-full py-2 px-4 inline-flex justify-center items-center text-sm font-semibold rounded-lg border border-transparent bg-orange-500 text-white hover:bg-orange-600 transition duration-200">
                Join
            </button>
        </div>
        
        </div>
</section>

    <x-navigation.footer />
</x-layouts.app>