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
 <livewire:home-center-list />



    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 py-5 md:py-20">
  <div class="flex flex-col lg:flex-row gap-12 lg:gap-16">

    <div class="w-full lg:w-7/12 flex flex-col justify-center">
      <div class="mb-6">
        <span class="inline-block bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 text-xs font-semibold tracking-wider uppercase rounded-full px-3 py-1">
          ■ It really works
        </span>
      </div>
      <h1 class="text-4xl md:text-2xl font-extrabold text-gray-900 dark:text-gray-700 leading-tight">
        Connecting you to the best trainers and vice versa
      </h1>
      <div class="mt-8 space-y-6">
        <div class="flex items-start">
          <div class="flex-shrink-0 h-7 w-7 bg-blue-500 rounded-full flex items-center justify-center">
            <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
          </div>
        
          <p class="ml-4 text-gray-900 dark:text-gray-700">
            Psychometric screening will tell you so much more about a candidate than a CV ever can.
          </p>
        </div>
        <div class="flex items-start">
          <div class="flex-shrink-0 h-7 w-7 bg-blue-500 rounded-full flex items-center justify-center">
            <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
          </div>
          <p class="ml-4 text-gray-900 dark:text-gray-700">
            Your candidates complete a tailored online assessment specifically designed for your vacancy. Our screening incorporates personality testing (using the Big 5 or OCEAN model of personality), a behavioural profiling (using a DISC assessment), and even an optional values section to establish how suitable someone is for a role. It can also tell you how truthful a candidate has been in their responses.
          </p>
        </div>
        <div class="flex items-start">
          <div class="flex-shrink-0 h-7 w-7 bg-blue-500 rounded-full flex items-center justify-center">
            <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
          </div>
          <p class="ml-4 text-gray-900 dark:text-gray-700">
            Our software evaluates each result, removing unsuitable candidates and presenting you with a visual ordered ranking of the applicants. The interface is clear, colourful and easy to read.
          </p>
        </div>
      </div>
    </div>
<div class="w-full lg:w-5/12 pl-6 relative before:content-[''] before:absolute before:top-0 before:bottom-0 before:left-0 before:w-1 before:bg-gradient-to-b before:from-yellow-400 before:via-red-500 before:to-red-700 ">
    
    <div class="relative">
        <input type="text" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Search...">
        <div class="absolute inset-y-0 end-0 flex items-center">
            <button type="button" class="py-2 px-4 m-1 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Search
            </button>
        </div>
    </div>

    <div class="mt-6 flex flex-wrap gap-3">
        <button type="button" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800">Tech</button>
        <button type="button" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white shadow-sm">Handwork</button>
        <button type="button" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800">Vocational</button>
        <button type="button" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800">Business</button>
        <button type="button" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800">Business</button>
        <button type="button" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800">Engineering</button>
        <button type="button" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800">Fashion</button>
    </div>

    <div class="mt-8 space-y-4">
        <div class="flex items-center justify-between p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors duration-200">
            <div class="flex items-center"><span class="h-3 w-3 rounded-full bg-pink-500 mr-4 ring-1 ring-gray-300 dark:ring-gray-700"></span><span class="text-gray-900 dark:text-black font-medium">Tailoring</span></div>
            <span class="font-mono text-sm text-gray-600 dark:text-gray-400">(345)</span>
        </div>
        <div class="flex items-center justify-between p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors duration-200">
            <div class="flex items-center"><span class="h-3 w-3 rounded-full bg-fuchsia-500 mr-4 ring-1 ring-gray-300 dark:ring-gray-700"></span><span class="text-gray-900 dark:text-black font-medium">Barbing</span></div>
            <span class="font-mono text-sm text-gray-600 dark:text-gray-400">(345)</span>
        </div>
        <div class="flex items-center justify-between p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors duration-200">
            <div class="flex items-center"><span class="h-3 w-3 rounded-full bg-red-500 mr-4 ring-1 ring-gray-300 dark:ring-gray-700"></span><span class="text-gray-900 dark:text-black font-medium">Carpenter</span></div>
            <span class="font-mono text-sm text-gray-600 dark:text-gray-400">(345)</span>
        </div>
        <div class="flex items-center justify-between p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors duration-200">
            <div class="flex items-center"><span class="h-3 w-3 rounded-full bg-orange-500 mr-4 ring-1 ring-gray-300 dark:ring-gray-700"></span><span class="text-gray-900 dark:text-black font-medium">Vulcanizers</span></div>
            <span class="font-mono text-sm text-gray-600 dark:text-gray-400">(345)</span>
        </div>
        <div class="flex items-center justify-between p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors duration-200">
            <div class="flex items-center"><span class="h-3 w-3 rounded-full bg-amber-500 mr-4 ring-1 ring-gray-300 dark:ring-gray-700"></span><span class="text-gray-900 dark:text-black font-medium">Makeup Artist</span></div>
            <span class="font-mono text-sm text-gray-600 dark:text-gray-400">(345)</span>
        </div>
        <div class="flex items-center justify-between p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors duration-200">
            <div class="flex items-center"><span class="h-3 w-3 rounded-full bg-yellow-400 mr-4 ring-1 ring-gray-300 dark:ring-gray-700"></span><span class="text-gray-900 dark:text-black font-medium">Hair dresser</span></div>
            <span class="font-mono text-sm text-gray-600 dark:text-gray-400">(345)</span>
        </div>
        <div class="flex items-center justify-between p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors duration-200">
            <div class="flex items-center"><span class="h-3 w-3 rounded-full bg-lime-500 mr-4 ring-1 ring-gray-300 dark:ring-gray-700"></span><span class="text-gray-900 dark:text-black font-medium">Fashion Design</span></div>
            <span class="font-mono text-sm text-gray-600 dark:text-gray-400">(345)</span>
        </div>
        <div class="flex items-center justify-between p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors duration-200">
            <div class="flex items-center"><span class="h-3 w-3 rounded-full bg-green-500 mr-4 ring-1 ring-gray-300 dark:ring-gray-700"></span><span class="text-gray-900 dark:text-black font-medium">Plumber</span></div>
            <span class="font-mono text-sm text-gray-600 dark:text-gray-400">(345)</span>
        </div>
    </div>
    
    <div class="mt-12 flex justify-end">
        <img src="https://placehold.co/150x50/000000/FFFFFF?text=e-talent&font=raleway" alt="e-talent Logo" class="opacity-80">
    </div>

</div>
</div>
</div>



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
            <img src="{{ asset('storage/logo1.png') }}" alt="Digbyswift Logo" class="max-h-full w-auto filter grayscale opacity-75 hover:grayscale-0 hover:opacity-100 transition duration-300">
        </div>

        <div class="flex items-center justify-center h-10 my-4">
            <img src="{{ asset('storage/logo2.png') }}" alt="Get Staffed Logo" class="max-h-full w-auto filter grayscale opacity-75 hover:grayscale-0 hover:opacity-100 transition duration-300">
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

    <x-navigation.footer />
</x-layouts.app>