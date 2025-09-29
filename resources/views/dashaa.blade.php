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
           <div class="flex flex-wrap">
  <div class="border-e border-gray-200 dark:border-neutral-700">
    <nav class="flex flex-col space-y-2" aria-label="Tabs" role="tablist" aria-orientation="vertical">
      <button type="button" class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 dark:hs-tab-active:text-blue-600 py-1 pe-4 inline-flex items-center gap-x-2 border-e-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active" id="vertical-tab-with-border-item-1" aria-selected="true" data-hs-tab="#vertical-tab-with-border-1" aria-controls="vertical-tab-with-border-1" role="tab">
        Tab 1
      </button>
      <button type="button" class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 dark:hs-tab-active:text-blue-600 py-1 pe-4 inline-flex items-center gap-x-2 border-e-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500" id="vertical-tab-with-border-item-2" aria-selected="false" data-hs-tab="#vertical-tab-with-border-2" aria-controls="vertical-tab-with-border-2" role="tab">
        Tab 2
      </button>
      <button type="button" class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 dark:hs-tab-active:text-blue-600 py-1 pe-4 inline-flex items-center gap-x-2 border-e-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500" id="vertical-tab-with-border-item-3" aria-selected="false" data-hs-tab="#vertical-tab-with-border-3" aria-controls="vertical-tab-with-border-3" role="tab">
        Tab 3
      </button>
    </nav>
  </div>

  <div class="ms-3">
  <main class="flex-1 p-8">

                <!-- Tab 1 Content -->
      <div id="vertical-tab-with-border-1" role="tabpanel" aria-labelledby="vertical-tab-with-border-item-1">
      
                {{-- <div id="tabs-with-icons-2" role="tabpanel" aria-labelledby="tabs-with-icons-item-2" class="hidden">
                     --}}
                  <div class="bg-white rounded-lg shadow-lg p-6 max-w-4xl mx-auto">
                        <div class="flex items-center space-x-4 border-b border-gray-200 pb-4 mb-4">
                            <div class="relative w-16 h-16">
                                <img src="https://via.placeholder.com/60x60" alt="Tutor Profile" class="rounded-full-profile border-2 border-white shadow-md">
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
                                <img src="https://via.placeholder.com/60x60" alt="Tutor Profile" class="rounded-full-profile border-2 border-white shadow-md">
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
                                <img src="https://via.placeholder.com/60x60" alt="Tutor Profile" class="rounded-full-profile border-2 border-white shadow-md">
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
            </main>
  </div>
</div>
      
    </body>
</html>