<x-layouts.profiledashboard title="Course Listings">

<div class="w-full space-y-8">

    <!-- Banner / Profile Header -->
    <div class="relative w-full h-56 rounded-xl overflow-hidden bg-gray-200">
        <img src="{{ asset('storage/d3.png') }}" alt="Banner"
             class="w-full h-full object-cover">

        <!-- Overlay Profile Info -->
        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/60 via-black/30 to-transparent p-6 flex items-end justify-between">
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <img src="{{ asset('storage/img2.png') }}" alt="Profile"
                         class="w-24 h-24 rounded-full border-4 border-white object-cover shadow-md">
                    <span class="absolute -bottom-1 -right-1 bg-sky-500 text-white text-xs font-semibold px-2 py-0.5 rounded-full">TUTOR</span>
                </div>
                <div class="text-white">
                    <h2 class="text-2xl font-semibold">Arcane Academy</h2>
                    <p class="text-sm opacity-80">@tboiwizzy</p>
                    <p class="text-xs opacity-70">2 Videos • 1,987,860 Views</p>
                </div>
            </div>

            <!-- Stats Overview (Top Row) -->
            <div class="hidden md:flex items-center space-x-6 text-white">
                <div class="text-center">
                    <p class="text-lg font-semibold">2,546,708</p>
                    <p class="text-xs opacity-80">Total Views</p>
                </div>
                <div class="text-center">
                    <p class="text-lg font-semibold">2,546</p>
                    <p class="text-xs opacity-80">Followers</p>
                </div>
                <div class="text-center">
                    <p class="text-lg font-semibold">2,546</p>
                    <p class="text-xs opacity-80">Comments</p>
                </div>
            </div>
        </div>
    </div>

 <!-- Dashboard Main Content -->
<div class="flex flex-col md:flex-row items-start justify-between bg-white p-8 rounded-2xl shadow-sm">

  <!-- LEFT SECTION -->
  <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    <!-- Stat Card -->
    <div class="bg-white border rounded-xl p-6 shadow-sm">
      <h3 class="text-gray-600 font-medium mb-2">Total Views</h3>
      <p class="text-3xl font-bold text-gray-900 mb-3">10,680</p>
      <div class="flex items-center gap-2 text-sm">
        <span class="flex items-center justify-center w-6 h-6 rounded-full bg-red-100 text-red-500">
          ☆<i class="fas fa-star"></i>
        </span>
        <span class="text-red-500">-12.76% than last month</span>
      </div>
    </div>

    <!-- Stat Card -->
    <div class="bg-white border rounded-xl p-6 shadow-sm">
      <h3 class="text-gray-600 font-medium mb-2">Total Videos Viewed</h3>
      <p class="text-3xl font-bold text-gray-900 mb-3">23</p>
      <div class="flex items-center gap-2 text-sm">
        <span class="flex items-center justify-center w-6 h-6 rounded-full bg-green-100 text-green-600">
          ☆<i class="fas fa-star"></i>
        </span>
        <span class="text-green-600">+34.3% than last month</span>
      </div>
    </div>

    <!-- Stat Card -->
    <div class="bg-white border rounded-xl p-6 shadow-sm">
      <h3 class="text-gray-600 font-medium mb-2">Earned</h3>
      <p class="text-3xl font-bold text-gray-900 mb-3">$526,272</p>
      <div class="flex items-center gap-2 text-sm">
        <button class="px-4 py-1.5 bg-red-500 text-white text-sm rounded-lg hover:bg-red-600 transition">
          Withdraw
        </button>
        <span class="text-gray-500 text-xs">
          with a return charge of 25% ≈ $120,000
        </span>
      </div>
    </div>

    <!-- Stat Card -->
    <div class="bg-white border rounded-xl p-6 shadow-sm">
      <h3 class="text-gray-600 font-medium mb-2">Total Videos</h3>
      <p class="text-3xl font-bold text-gray-900 mb-3">7</p>
      <div class="flex items-center gap-2 text-sm">
        <span class="flex items-center justify-center w-6 h-6 rounded-full bg-green-100 text-green-600">
          ☆<i class="fas fa-star"></i>
        </span>
        <span class="text-green-600">+34.3% than last month</span>
      </div>
    </div>

    <!-- Stat Card -->
    <div class="bg-white border rounded-xl p-6 shadow-sm">
      <h3 class="text-gray-600 font-medium mb-2">Total Registered Students</h3>
      <p class="text-3xl font-bold text-gray-900 mb-3">10,680</p>
      <div class="flex items-center gap-2 text-sm">
        <span class="flex items-center justify-center w-6 h-6 rounded-full bg-red-100 text-red-500">
          ☆<i class="fas fa-star"></i>
        </span>
        <span class="text-red-500">-12.76% than last month</span>
      </div>
    </div>
  </div>

  <!-- RIGHT SECTION (Back Button) -->
  <div class="flex justify-center items-center mt-8 md:mt-0 md:ml-8">
    <button class="px-8 py-2 bg-gray-900 text-white rounded-full hover:bg-gray-700 transition">
      Back
    </button>
  </div>
</div>


</div>

    </x-layouts.profiledashboard>