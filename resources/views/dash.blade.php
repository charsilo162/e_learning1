<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .rounded-full-profile {
                border-radius: 50%;
                object-fit: cover;
                width: 60px;
                height: 60px;
            }
            .icon-badge {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 20px;
                height: 20px;
                border-radius: 50%;
                color: white;
                font-size: 8px;
                margin-right: 6px;
            }
            .bg-green-filled { background-color: #22c55e; }
            .bg-red-filled { background-color: #ef4444; }
            .content-container {
                display: flex;
                min-height: calc(100vh - 4rem);
            }
            aside {
                width: 10rem;
                background-color: white;
                border-right: 1px solid #e5e7eb;
            }
            main {
                flex: 1;
                padding: 2rem;
            }
            .stat-card {
                flex: 1;
                min-width: 0;
                padding: 0.625rem;
            }
            .main-grid {
                display: grid;
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            @media (min-width: 640px) {
                .main-grid {
                    grid-template-columns: 3fr 1fr;
                }
            }
        </style>
    </head>
    <body class="antialiased font-sans bg-gray-50 text-gray-800">
        <header class="sticky top-0 z-50 bg-gray-100 border-b">
            <nav class="max-w-7xl mx-auto flex items-center justify-between px-4 h-16">
                <a href="#" class="flex items-center space-x-2">
                    <span class="text-2xl font-bold text-sky-600">e<span class="text-gray-900">talent</span></span>
                </a>
                <div class="hidden md:flex space-x-6 text-sm font-semibold text-gray-700">
                    <a href="#" class="hover:text-sky-600">Home</a>
                    <a href="#" class="hover:text-sky-600">How it Works</a>
                    <a href="#" class="hover:text-sky-600">Pricing</a>
                    <a href="#" class="hover:text-sky-600">Blog</a>
                    <a href="#" class="hover:text-sky-600">Resources</a>
                    <a href="#" class="hover:text-sky-600">FAQs</a>
                    <a href="#" class="hover:text-sky-600">Reviews</a>
                </div>
                <a href="#" class="hs-button hs-button-primary">Get in Touch</a>
            </nav>
        </header>

        <div class="content-container">
            <aside class="bg-white border-r">
                <div class="max-w-40 border-e-2 mx-3 border-gray-200 dark:border-neutral-700">
                    <nav class="-me-0.5 flex flex-col space-y-3" aria-label="Tabs" role="tablist" aria-orientation="vertical">
                    <button type="button" class="py-2 px-4 pe-4 hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 dark:hs-tab-active:text-blue-600 py-1 pe-4 inline-flex items-center gap-x-2 border-e-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active" id="vertical-tab-with-border-item-1" aria-selected="true" data-hs-tab="#vertical-tab-with-border-1" aria-controls="vertical-tab-with-border-1" role="tab">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    Home
                    </button>
{{-- <a  class="py-2 px-4 pe-4 inline-flex items-center gap-2 border-e-2 border-blue-500 text-sm font-medium whitespace-nowrap text-blue-600 focus:outline-hidden focus:text-blue-800 dark:text-blue-500" href="#">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            Tab 2
                        </a> --}}


<button type="button" class="py-2 px-4 pe-4 inline-flex items-center gap-2 border-e-2 border-blue-500 text-sm font-medium whitespace-nowrap text-blue-600 focus:outline-hidden focus:text-blue-800 dark:text-blue-500"
 id="vertical-tab-with-border-item-2" aria-selected="false" data-hs-tab="#vertical-tab-with-border-2" aria-controls="vertical-tab-with-border-2" role="tab">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
</svg>
  
   Settings
      </button>


                <button type="button" class="py-2 px-4 pe-4 hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 dark:hs-tab-active:text-blue-600 py-1 pe-4 inline-flex items-center gap-x-2 border-e-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500" id="vertical-tab-with-border-item-3" aria-selected="false" data-hs-tab="#vertical-tab-with-border-3" aria-controls="vertical-tab-with-border-3" role="tab">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672Zm-7.518-.267A8.25 8.25 0 1 1 20.25 10.5M8.288 14.212A5.25 5.25 0 1 1 17.25 10.5" />
                </svg>

                Activities
                </button>



                        {{-- <a id="tabs-with-icons-item-3" aria-selected="false" data-hs-tab="#tabs-with-icons-3" aria-controls="tabs-with-icons-3" role="tab" class="py-2 px-4 pe-4 inline-flex items-center gap-2 border-e-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            Tab 3
                        </a> --}}
                    </nav>
                </div>
            </aside>

            <main class="flex-1 p-8">

                <!-- Tab 1 Content -->
      <div id="vertical-tab-with-border-1" role="tabpanel" aria-labelledby="vertical-tab-with-border-item-1">
      
                {{-- <div id="tabs-with-icons-2" role="tabpanel" aria-labelledby="tabs-with-icons-item-2" class="hidden">
                     --}}
                  <div class="bg-white rounded-lg shadow-lg p-6 max-w-4xl mx-auto">
                        <div class="flex items-center space-x-4 border-b border-gray-200 pb-4 mb-4">
                            <div class="relative w-16 h-16">
                                <img src="{{ asset('storage/img1.png') }}" alt="Tutor Profile" class="rounded-full-profile border-2 border-white shadow-md">
                                <div class="absolute bottom-0 right-0 bg-blue-500 text-white rounded-full p-1 text-xs">TUTOR</div>
                            </div>
                            <div>
                                <h1 class="text-xl font-bold text-gray-800">Arcane Academy</h1>
                                <p class="text-sm text-gray-500">@bolwizzy</p>
                                <div class="flex items-center text-gray-500 text-sm mt-1 space-x-4">
                                    <span>2 Videos</span>
                                    <span>1,987,860 Views</span>
                                </div>
                            </div>
                        </div>

                        <div class="main-grid">
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                                <div class="stat-card flex flex-col items-start bg-gray-50 p-2.5 rounded-lg shadow-sm">
                                    <h2 class="text-xs text-gray-500">Total Views</h2>
                                    <p class="text-xl font-bold text-gray-800">15,230</p>
                                    <p class="flex items-center text-green-500 text-xs mt-1">
                                        <span class="icon-badge bg-green-filled">▲</span>+8.5% than last month
                                    </p>
                                </div>
                                <div class="stat-card flex flex-col items-start bg-gray-50 p-2.5 rounded-lg shadow-sm">
                                    <h2 class="text-xs text-gray-500">Total Videos Watched</h2>
                                    <p class="text-xl font-bold text-gray-800">30</p>
                                    <p class="flex items-center text-green-500 text-xs mt-1">
                                        <span class="icon-badge bg-green-filled">▲</span>+200% than last month
                                    </p>
                                </div>
                                <div class="stat-card flex flex-col items-start bg-gray-50 p-2.5 rounded-lg shadow-sm">
                                    <h2 class="text-xs text-gray-500">Revenue</h2>
                                    <p class="text-xl font-bold text-gray-800">$450,000</p>
                                    <button class="mt-2 w-full text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xs px-4 py-2">
                                        Withdraw
                                    </button>
                                    <p class="text-[10px] text-gray-400 mt-1 text-left">with a return charge of 25% - $112,500</p>
                                </div>
                                <div class="stat-card flex flex-col items-start bg-gray-50 p-2.5 rounded-lg shadow-sm">
                                    <h2 class="text-xs text-gray-500">Total Videos</h2>
                                    <p class="text-xl font-bold text-gray-800">5</p>
                                    <p class="flex items-center text-red-500 text-xs mt-1">
                                        <span class="icon-badge bg-red-filled">▼</span>-10% than last month
                                    </p>
                                </div>
                                <div class="stat-card flex flex-col items-start bg-gray-50 p-2.5 rounded-lg shadow-sm">
                                    <h2 class="text-xs text-gray-500">Total Students</h2>
                                    <p class="text-xl font-bold text-gray-800">12,450</p>
                                    <p class="flex items-center text-green-500 text-xs mt-1">
                                        <span class="icon-badge bg-green-filled">▲</span>+15% than last month
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center justify-center">
                                <button class="w-full max-w-xs px-6 py-3 border border-gray-300 rounded-lg text-gray-700 bg-white hover:bg-gray-100 transition-colors duration-200">
                                    Back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab 2 Content (Original) -->
            <div id="vertical-tab-with-border-2" class="hidden" role="tabpanel" aria-labelledby="vertical-tab-with-border-item-2">
    
                  <div class="bg-white rounded-lg shadow-lg p-6 max-w-4xl mx-auto">
                        <div class="flex items-center space-x-4 border-b border-gray-200 pb-4 mb-4">
                            <div class="relative w-16 h-16">
                                <img src="{{ asset('storage/img3.png') }}" alt="Tutor Profile" class="rounded-full-profile border-2 border-white shadow-md">
                                <div class="absolute bottom-0 right-0 bg-blue-500 text-white rounded-full p-1 text-xs">TUTOR</div>
                            </div>
                            <div>
                                <h1 class="text-xl font-bold text-gray-800">Arcane Academy</h1>
                                <p class="text-sm text-gray-500">@bolwizzy</p>
                                <div class="flex items-center text-gray-500 text-sm mt-1 space-x-4">
                                    <span>2 Videos</span>
                                    <span>1,987,860 Views</span>
                                </div>
                            </div>
                        </div>

                        <div class="main-grid">
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                                <div class="stat-card flex flex-col items-start bg-gray-50 p-2.5 rounded-lg shadow-sm">
                                    <h2 class="text-xs text-gray-500">Total Views</h2>
                                    <p class="text-xl font-bold text-gray-800">10,680</p>
                                    <p class="flex items-center text-red-500 text-xs mt-1">
                                        <span class="icon-badge bg-red-filled">▼</span>-12.76% thanola last month
                                    </p>
                                </div>
                                <div class="stat-card flex flex-col items-start bg-gray-50 p-2.5 rounded-lg shadow-sm">
                                    <h2 class="text-xs text-gray-500">Total Videos Viewed</h2>
                                    <p class="text-xl font-bold text-gray-800">23</p>
                                    <p class="flex items-center text-green-500 text-xs mt-1">
                                        <span class="icon-badge bg-green-filled">▲</span>+343% than last month
                                    </p>
                                </div>
                                <div class="stat-card flex flex-col items-start bg-gray-50 p-2.5 rounded-lg shadow-sm">
                                    <h2 class="text-xs text-gray-500">Earned</h2>
                                    <p class="text-xl font-bold text-gray-800">$526,272</p>
                                    <button class="mt-2 w-full text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xs px-4 py-2">
                                        Withdraw
                                    </button>
                                    <p class="text-[10px] text-gray-400 mt-1 text-left">with a return charge of 29% - $120,000</p>
                                </div>
                                <div class="stat-card flex flex-col items-start bg-gray-50 p-2.5 rounded-lg shadow-sm">
                                    <h2 class="text-xs text-gray-500">Total Videos</h2>
                                    <p class="text-xl font-bold text-gray-800">7</p>
                                    <p class="flex items-center text-green-500 text-xs mt-1">
                                        <span class="icon-badge bg-green-filled">▲</span>+343%ada than last month
                                    </p>
                                </div>
                                <div class="stat-card flex flex-col items-start bg-gray-50 p-2.5 rounded-lg shadow-sm">
                                    <h2 class="text-xs text-gray-500">Total Registered Students</h2>
                                    <p class="text-xl font-bold text-gray-800">10,680</p>
                                    <p class="flex items-center text-red-500 text-xs mt-1">
                                        <span class="icon-badge bg-red-filled">▼</span>-12.76% than last adamonth
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center justify-center">
                                <button class="w-full max-w-xs px-6 py-3 border border-gray-300 rounded-lg text-gray-700 bg-white hover:bg-gray-100 transition-colors duration-200">
                                    Back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab 3 Content -->
               <div id="vertical-tab-with-border-3" class="hidden" role="tabpanel" aria-labelledby="vertical-tab-with-border-item-3">
        
                  <div class="bg-white rounded-lg shadow-lg p-6 max-w-4xl mx-auto">
                        <div class="flex items-center space-x-4 border-b border-gray-200 pb-4 mb-4">
                            <div class="relative w-16 h-16">
                                <img src="{{ asset('storage/img1.png') }}" alt="Tutor Profile" class="rounded-full-profile border-2 border-white shadow-md">
                                <div class="absolute bottom-0 right-0 bg-blue-500 text-white rounded-full p-1 text-xs">TUTOR</div>
                            </div>
                            <div>
                                <h1 class="text-xl font-bold text-gray-800">Arcane Academy</h1>
                                <p class="text-sm text-gray-500">@bolwizzy</p>
                                <div class="flex items-center text-gray-500 text-sm mt-1 space-x-4">
                                    <span>2 Videos</span>
                                    <span>1,987,860 Views</span>
                                </div>
                            </div>
                        </div>

                        <div class="main-grid">
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                                <div class="stat-card flex flex-col items-start bg-gray-50 p-2.5 rounded-lg shadow-sm">
                                    <h2 class="text-xs text-gray-500">Total Views</h2>
                                    <p class="text-xl font-bold text-gray-800">9008,900</p>
                                    <p class="flex items-center text-red-500 text-xs mt-1">
                                        <span class="icon-badge bg-red-filled">▼</span>-5.3% obithan last month
                                    </p>
                                </div>
                                <div class="stat-card flex flex-col items-start bg-gray-50 p-2.5 rounded-lg shadow-sm">
                                    <h2 class="text-xs text-gray-500">Total Videos Watched</h2>
                                    <p class="text-xl font-bold text-gray-800">18</p>
                                    <p class="flex items-center text-green-500 text-xs mt-1">
                                        <span class="icon-badge bg-green-filled">▲</span>+150% than chaelilast month
                                    </p>
                                </div>
                                <div class="stat-card flex flex-col items-start bg-gray-50 p-2.5 rounded-lg shadow-sm">
                                    <h2 class="text-xs text-gray-500">Revenue</h2>
                                    <p class="text-xl font-bold text-gray-800">$600,000</p>
                                    <button class="mt-2 w-full text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xs px-4 py-2">
                                        Withdraw
                                    </button>
                                    <p class="text-[10px] text-gray-400 mt-1 text-left">with a return charge of 30% - $180,000</p>
                                </div>
                                <div class="stat-card flex flex-col items-start bg-gray-50 p-2.5 rounded-lg shadow-sm">
                                    <h2 class="text-xs text-gray-500">Total Videos</h2>
                                    <p class="text-xl font-bold text-gray-800">9</p>
                                    <p class="flex items-center text-green-500 text-xs mt-1">
                                        <span class="icon-badge bg-green-filled">▲</span>+50% than last month
                                    </p>
                                </div>
                                <div class="stat-card flex flex-col items-start bg-gray-50 p-2.5 rounded-lg shadow-sm">
                                    <h2 class="text-xs text-gray-500">Total Students</h2>
                                    <p class="text-xl font-bold text-gray-800">9,5430</p>
                                    <p class="flex items-center text-red-500 text-xs mt-1">
                                        <span class="icon-badge bg-red-filled">▼</span>-8% than charles last month
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center justify-center">
                                <button class="w-full max-w-xs px-6 py-3 border border-gray-300 rounded-lg text-gray-700 bg-white hover:bg-gray-100 transition-colors duration-200">
                                    Back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Search Section (own block, below carousel) -->
<div class="max-w-3xl mx-auto mt-8 px-4">
  <div class="bg-white rounded-xl shadow-lg p-4 flex items-center space-x-2">
    <input type="text" placeholder="Search..." 
           class="flex-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500" />
    <button class="px-4 py-2 bg-sky-600 text-white rounded-lg hover:bg-sky-700">Search</button>
  </div>
</div>

<!--physical Trainings Section -->
<section class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
  <div class="mb-8 text-center">
    <h2 class="text-3xl font-extrabold text-gray-900">
      Our Physial Training
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
            </main>
        </div>

    </body>
</html>