<x-layouts.app title="eTalent Home">
    {{-- <x-navigation.header /> --}}

    <x-navigation.header-original />

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
        <img class="w-full h-full object-cover" src="{{ asset('storage/img4.jpg') }}" alt="Banner Image 1">
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
        <img class="w-full h-full object-cover" src="{{ asset('storage/img2.jpg') }}" alt="Banner Image 3">
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
   <livewire:popular-category-cards />
 <livewire:home-center-list />




<div x-data="{
        activeSlide: 0,
        slides: [
            [
        { img: '{{ asset('storage/img1.png') }}', title: 'Back to School', text: 'Get 20% off all supplies' },
        { img: '{{ asset('storage/img5.png') }}', title: 'New Arrivals', text: 'Fresh styles for everyone' },
        { img: '{{ asset('storage/img7.png') }}', title: 'Limited Offer', text: 'Up to 50% discount!' },
    ],
    [
        { img: '{{ asset('storage/img8.jpg') }}', title: 'Back to School', text: 'Get 20% off all supplies' },
        { img: '{{ asset('storage/logo1.jpg') }}', title: 'New Arrivals', text: 'Fresh styles for everyone' },
        { img: '{{ asset('storage/img1.jpg') }}', title: 'Limited Offer', text: 'Up to 50% discount!' },
    ],
        ],
        interval: null
    }"
     x-init="interval = setInterval(() => { activeSlide = (activeSlide + 1) % slides.length }, 5000)"
     @mouseenter="clearInterval(interval)"
     @mouseleave="interval = setInterval(() => { activeSlide = (activeSlide + 1) % slides.length }, 5000)"
     class="relative w-full max-w-7xl mx-auto overflow-hidden py-8 px-4 sm:px-6 lg:px-8 mt-12 rounded-lg shadow-lg bg-gray-200">

    <!-- Slides -->
    <template x-for="(slide, index) in slides" :key="index">
        <div x-show="activeSlide === index" class="grid grid-cols-1 md:grid-cols-3 gap-4 transition-all duration-700 ease-in-out">
            <template x-for="banner in slide" :key="banner.img">
                <div class="relative rounded-2xl overflow-hidden shadow-md">
                    <img :src="banner.img" alt="" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black/40 flex flex-col justify-end p-4 text-white">
                        <h3 class="text-lg font-semibold" x-text="banner.title"></h3>
                        <p class="text-sm" x-text="banner.text"></p>
                    </div>
                </div>
            </template>
        </div>
    </template>

    <!-- Controls -->
    <div class="absolute inset-y-0 flex items-center justify-between px-4">
        <button @click="activeSlide = (activeSlide - 1 + slides.length) % slides.length"
            class="bg-black/50 text-white p-2 rounded-full hover:bg-black">‹</button>
        <button @click="activeSlide = (activeSlide + 1) % slides.length"
            class="bg-black/50 text-white p-2 rounded-full hover:bg-black">›</button>
    </div>

    <!-- Dots -->
    <div class="absolute bottom-3 left-0 right-0 flex justify-center space-x-2">
        <template x-for="(slide, index) in slides" :key="index">
            <button @click="activeSlide = index"
                    :class="{'bg-blue-600': activeSlide === index,'bg-gray-600': activeSlide !== index}"
                    class="w-3 h-3 rounded-full transition"></button>
        </template>
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


  <section class="bg-sky-500 text-white py-8 rounded-lg mb-8 mt-4 p-4">
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

<section class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
<div class="mb-8 px-4 sm:px-0">


    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
 @for ($i = 1; $i <= 4; $i++)
    <div class="relative w-full"> 
        
        <div class="h-48 w-full rounded-xl overflow-hidden shadow-lg mb-[-20px] z-10 relative"> 
            <img src="{{ asset('storage/img1.png') }}" alt="Academic Hall" class="w-full h-full object-cover">
        </div>
        
        <div class="bg-white rounded-lg shadow-xl overflow-hidden p-4 mx-1 relative z-20">
            <div class="pt-5">
                <div class="flex items-center mb-2">
                    <img src="{{ asset('storage/logo1.png') }}" alt="Studio Logo" class="h-6 w-6 rounded-full mr-2">
                    <div>
                        <p class="text-sm font-semibold text-gray-800">Joint Performance Studio</p>
                        <p class="text-xs text-gray-500">345 songs</p>
                    </div>
                </div>
                <p class="text-sm text-gray-600 mb-1">Manager: <span class="font-medium text-gray-800">Johnny Drill</span></p>
                <p class="text-sm text-gray-600 mb-4">Base Price: <span class="font-bold text-gray-900">₹10,500/hr</span></p>
                
                <div class="flex items-center justify-between text-xs text-gray-500 mb-2">
                    <div class="flex items-center">
                        <svg class="h-4 w-4 mr-1 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                        234 comment
                    </div>
                    <div class="flex items-center">
                        <svg class="h-4 w-4 mr-1 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                        234 share
                    </div>
                    <div class="flex items-center">
                        <svg class="h-4 w-4 mr-1 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                        234 like
                    </div>
                    </div>
            </div>
        </div>
    </div>
    @endfor
    </div>

    <div class="flex justify-center mt-8">
        <button class="bg-blue-600 text-white py-2 px-8 rounded-lg font-medium hover:bg-blue-700 transition duration-200">See more</button>
    </div>
</section>

<section class="max-w-7xl mx-auto pt-2 pb-2 px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-3xl font-bold text-center mb-4 text-blue-500">Our clients</h2>
    
    <div class="flex justify-center items-center gap-x-12 flex-wrap py-8">
        
        <div class="flex items-center justify-center h-10 my-4">
            <img src="{{ asset('storage/logo4.png') }}" alt="Communitas Clinics Logo" class="max-h-full w-auto filter grayscale opacity-75 hover:grayscale-0 hover:opacity-100 transition duration-300">
       
          </div>
        <div class="flex items-center justify-center h-10 my-4">
            <img src="{{ asset('storage/logo3.png') }}" alt="Communitas Clinics Logo" class="max-h-full w-auto filter grayscale opacity-75 hover:grayscale-0 hover:opacity-100 transition duration-300">
       
          </div>
        <div class="flex items-center justify-center h-10 my-4">
            <img src="{{ asset('storage/logo5.png') }}" alt="Communitas Clinics Logo" class="max-h-full w-auto filter grayscale opacity-75 hover:grayscale-0 hover:opacity-100 transition duration-300">
       
          </div>

        <div class="flex items-center justify-center h-10 my-4">
            <img src="{{ asset('storage/logo1.jpg') }}" alt="Digbyswift Logo" class="max-h-full w-auto filter grayscale opacity-75 hover:grayscale-0 hover:opacity-100 transition duration-300">
        </div>

        <div class="flex items-center justify-center h-10 my-4">
            <img src="{{ asset('storage/logo2.jpg') }}" alt="Get Staffed Logo" class="max-h-full w-auto filter grayscale opacity-75 hover:grayscale-0 hover:opacity-100 transition duration-300">
        </div>

        </div>
    
    <div class="flex justify-center mt-4 space-x-2">
        <span class="h-2 w-2 bg-gray-400 rounded-full"></span>
        <span class="h-2 w-2 bg-blue-500 rounded-full"></span>
        <span class="h-2 w-2 bg-gray-400 rounded-full"></span>
    </div>
</section>

<section class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
    <h3 class="text-2xl font-bold text-gray-800 mb-2">Explore more with essential</h3>
    <p class="text-gray-600 mb-8">Promotions, deals and special offers for you</p>
    
    <div class="flex flex-col md:flex-row gap-8">
        <div class="w-full md:w-1/2 rounded-xl overflow-hidden shadow-lg relative h-60">
            <img src="{{ asset('storage/img1.png') }}" alt="Family waving" class="w-full h-full object-cover"> 
            <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-end p-6">
                <p class="text-xl font-semibold text-white mb-2">LOGO</p>
                <p class="text-sm text-white mb-6">Get evidence of existence and visibility for every one and friends, and family and dissolve every form of doubt by studying on those people...</p>
                <button class="bg-white text-gray-800 py-2 px-4 rounded-lg font-medium w-fit hover:bg-gray-100 transition duration-200">
                    EXPLORE MORE
                </button>
            </div>
        </div>
            <div class="w-full md:w-1/2 rounded-xl overflow-hidden shadow-lg relative h-60"> 
        {{-- <div class="w-full md:w-1/2 rounded-xl overflow-hidden shadow-lg relative"> --}}
            <img src="{{ asset('storage/img1.png') }}" alt="Family waving" class="w-full h-full object-cover"> 
            <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-end p-6">
                <p class="text-xl font-semibold text-white mb-2">LOGO</p>
                <p class="text-sm text-white mb-6">Get evidence of existence and visibility for every one and friends, and family and dissolve every form of doubt by studying on those people...</p>
                <button class="bg-white text-gray-800 py-2 px-4 rounded-lg font-medium w-fit hover:bg-gray-100 transition duration-200">
                    EXPLORE MORE
                </button>
            </div>
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




    <x-navigation.footer />
</x-layouts.app>