<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   TixMeUp
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Montserrat', sans-serif;
    }
  </style>
 </head>
 <body class="bg-white text-gray-900">
    <!-- Navbar -->
    <nav class="bg-[#00108b] flex items-center justify-between px-6 py-3">
        <div class="flex items-center space-x-2 min-w-[840px]">
            <img alt="TixMeUp logo with hand gesture icon in white on blue background" class="w-8 h-8" height="32"
                src="{{ asset('img/logo.png') }}" width="32" />
            <span class="text-white font-semibold text-lg select-none">TixMeUp</span>
        </div>
        <div class="hidden sm:flex flex-1 max-w-[480px] mx-6 mr-10"> <!-- Increased right margin here -->
            <div class="relative w-full">
                <input
                    class="w-full rounded-full bg-[#00108b] placeholder-white text-white pl-10 pr-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-white"
                    placeholder="Search by artist or event" type="text" />
                <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-white text-sm"></i>
            </div>
        </div>
        <div class="flex items-center space-x-3 min-w-[180px] justify-end">
            <button class="text-white text-xl sm:hidden">
                <i class="fas fa-bars"></i>
            </button>
            <button id="sidebarToggle" class="text-white text-xl hidden sm:block focus:outline-none">
                <i class="fas fa-chevron-down"></i>
            </button>
            <!-- Sidebar -->
            <div id="sidebar"
                class="fixed bg-[#00108b] top-0 right-0 h-full w-64 shadow-lg z-50 transform translate-x-full transition-transform duration-300">
                <div class="flex items-center justify-start px-4 py-3 border-b">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-person-circle text-white" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                    <div class="ml-4">
                        <span class="font-semibold text-white text-lg">USERNAME</span>
                        <br>
                        <span class="text-white text-sm">user@example.com</span>
                    </div>
                    <button id="closeSidebar" class="text-white text-2xl focus:outline-none ml-auto">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <ul class="p-4 space-y-4 text-white ml-4">
                    <li><a href="#" class="hover:underline">My Tickets</a></li>
                    <li><a href="#" class="hover:underline">Shopping Basket</a></li>
                    <li><a href="#" class="hover:underline">Transaction History</a></li>
                    <li><a href="#" class="hover:underline">Reviews &amp; Ratings</a></li>
                    <li><a href="#" class="hover:underline">FAQ</a></li>
                    <li>
                        <div class="flex items-center">
                            <a href="#" class="hover:underline">Started as an</a>
                            <button id="toggleAdminPromotor" class="ml-2 text-white focus:outline-none">
                                <i class="fas fa-chevron-down"></i> <!-- Downward arrow icon -->
                            </button>
                        </div>
                        <ul id="adminPromotorList" class="ml-4 mt-1 space-y-2 hidden"> <!-- Initially hidden -->
                            <li><a href="#" class="hover:underline text-xs">Admin</a></li>
                            <li><a href="#" class="hover:underline text-xs">Promotor</a></li>
                        </ul>
                    </li>
                    <li><a href="#" id="logoutButton" class="hover:underline">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
            <!--popup-->
            <div id="logoutConfirmation" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden" style="z-index: 100;">
            <div class="flex items-center justify-center min-h-screen">
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <h2 class="text-2xl font-bold mb-4">Are you sure you want to exit?</h2>
                    <div class="flex justify-center space-x-4">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">YES</button>
                        <button class="bg-gray-400 text-white px-4 py-2 rounded-lg hover:bg-gray-500">NO</button>
                    </div>
                </div>
            </div>
            </div>
    <script>
        // JavaScript to toggle the visibility of Admin and Promotor options
        document.getElementById('toggleAdminPromotor').addEventListener('click', function() {
            const adminPromotorList = document.getElementById('adminPromotorList');
            adminPromotorList.classList.toggle('hidden'); // Toggle the 'hidden' class
        });

        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const toggle = document.getElementById('sidebarToggle');
            const close = document.getElementById('closeSidebar');
            const logoutButton = document.getElementById('logoutButton');
            const logoutConfirmation = document.getElementById('logoutConfirmation');
            const yesButton = logoutConfirmation.querySelector('.bg-blue-500');
            const noButton = logoutConfirmation.querySelector('.bg-gray-400');

            toggle.addEventListener('click', () => {
                sidebar.classList.remove('translate-x-full');
            });

            close.addEventListener('click', () => {
                sidebar.classList.add('translate-x-full');
            });

            // Show logout confirmation popup
            logoutButton.addEventListener('click', (e) => {
                e.preventDefault(); // Prevent default action
                logoutConfirmation.classList.remove('hidden'); // Show popup
            });

            // Handle YES button click
            yesButton.addEventListener('click', () => {
                // Implement logout logic here
                // For example, redirect to logout URL
                window.location.href = '/logout'; // Change this to your logout URL
            });

            // Handle NO button click
            noButton.addEventListener('click', () => {
                logoutConfirmation.classList.add('hidden'); // Hide popup
            });

            // Optional: close sidebar when clicking outside
            document.addEventListener('click', function(e) {
                if (!sidebar.contains(e.target) && !toggle.contains(e.target)) {
                    sidebar.classList.add('translate-x-full');
                }
            });
        });
    </script>
    </nav>
  <!-- Carousel -->
  <div class="relative border-b border-[#00108b]">
    <img alt="Black and white photo of four women posing with red BLACKPINK text overlay" class="w-full object-cover max-h-[250px]" height="250" src="{{ asset('img/Blackpink.png') }}" width="1200"/>
    <button aria-label="Previous slide" class="absolute top-1/2 left-2 -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-80 rounded-full p-2 text-2xl text-[#00108b]">
      <i class="fas fa-chevron-left"></i>
    </button>
    <button aria-label="Next slide" class="absolute top-1/2 right-2 -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-80 rounded-full p-2 text-2xl text-[#00108b]">
      <i class="fas fa-chevron-right"></i>
    </button>
  </div>
  <!-- Filter Buttons -->
<div class="flex space-x-4 px-6 py-4">
  <button class="border border-[#00108b] rounded-full px-6 py-3 text-lg font-bold text-[#00108b] hover:bg-[#00108b] hover:text-white transition">
    This Month
  </button>
  <button class="border border-[#00108b] rounded-full px-6 py-3 text-lg font-bold text-[#00108b] hover:bg-[#00108b] hover:text-white transition">
    Upcoming
  </button>
  <button class="border border-[#00108b] rounded-full px-6 py-3 text-lg font-bold text-[#00108b] hover:bg-[#00108b] hover:text-white transition">
    Moment's
  </button>
</div>
  <main class="px-6 pb-8 max-w-[1200px] mx-auto">
    <!-- THIS MONTH's SPOTLIGHT -->
    <section class="mb-8">


      <h2 class="text-3xl font-bold mb-4 select-none">THIS MONTH’s SPOTLIGHT</h2>
      <div class="flex items-center space-x-4 overflow-x-auto scrollbar-hide">

@foreach ($contents as $content)
    <div class="min-w-[370px] bg-white border border-gray-200 rounded-lg shadow-sm flex-shrink-">
        @if($content->image_path)
            <img src="{{ asset('storage/' . $content->image_path) }}" alt="{{ $content->name }}" class="rounded-t-lg object-cover w-full h-[140px]" />
        @else
            <img src="https://placehold.co/280x140?text=No+Image" alt="No Image" />
        @endif
        <div class="p-3">
            <p class="text-xs font-semibold mb-1 select-none">{{ $content->name }}</p>
            <div class="flex items-center text-xs text-gray-500 space-x-1 mb-2 select-none">
                <i class="fas fa-calendar-alt"></i>
                <span>{{ \Carbon\Carbon::parse($content->date)->format('H.i') }}</span>
                <i class="fas fa-map-marker-alt ml-3"></i>
                <span>{{ $content->location }}</span>
            </div>
            <a href="/info3">
                <button class="bg-[#4a6b8a] text-white text-xs rounded px-3 py-1 hover:bg-[#3a5570] transition">More info</button>
            </a>
        </div>
    </div>
@endforeach




        <!-- Card 1 -->

        <div class="min-w-[370px] bg-white border border-gray-200 rounded-lg shadow-sm flex-shrink-">
          <img alt="Hello Monster –0 Baby Monster" class="rounded-t-lg object-cover w-full h-[140px]" height="140" src="{{ asset('img/deadline.jpg') }}" width="280"/>
          <div class="p-3">
            <p class="text-xs font-semibold mb-1 select-none">Hello Monster – Baby Monster</p>
            <div class="flex items-center text-xs text-gray-500 space-x-1 mb-2 select-none">
              <i class="fas fa-calendar-alt"></i>
              <span>17.00 - 20.00</span>
              <i class="fas fa-map-marker-alt ml-3"></i>
              <span>Jakarta, Indonesia</span>
            </div>
             <a href="/info3">

            <button class="bg-[#4a6b8a] text-white text-xs rounded px-3 py-1 hover:bg-[#3a5570] transition">More info</button>
            </a>
          </div>
        </div>



        <!-- Card 2 -->
        <div class="min-w-[370px] bg-white border border-gray-200 rounded-lg shadow-sm flex-shrink-0">
          <img alt="Hello Monster – Baby Monster" class="rounded-t-lg object-cover w-full h-[140px]" height="140" src="{{ asset('img/prambanan.jpg') }}" width="280"/>
          <div class="p-3">
            <p class="text-xs font-semibold mb-1 select-none">Hello Monster – Baby Monster</p>
            <div class="flex items-center text-xs text-gray-500 space-x-1 mb-2 select-none">
              <i class="fas fa-calendar-alt"></i>
              <span>17.00 - 20.00</span>
              <i class="fas fa-map-marker-alt ml-3"></i>
              <span>Jakarta, Indonesia</span>
            </div>
            <a href="/info1">

            <button class="bg-[#4a6b8a] text-white text-xs rounded px-3 py-1 hover:bg-[#3a5570] transition">More info</button>
            </a>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="min-w-[370px] bg-white border border-gray-200 rounded-lg shadow-sm flex-shrink-0">
          <img alt="Hello Monster – Baby Monster" class="rounded-t-lg object-cover w-full h-[140px]" height="140" src="{{ asset('img/oppa.jpg') }}" width="280"/>
          <div class="p-3">
            <p class="text-xs font-semibold mb-1 select-none">Hello Monster – Baby Monster</p>
            <div class="flex items-center text-xs text-gray-500 space-x-1 mb-2 select-none">
              <i class="fas fa-calendar-alt"></i>
              <span>17.00 - 20.00</span>
              <i class="fas fa-map-marker-alt ml-3"></i>
              <span>Jakarta, Indonesia</span>
            </div>
            <a href="/info2">

            <button class="bg-[#4a6b8a] text-white text-xs rounded px-3 py-1 hover:bg-[#3a5570] transition">More info</button>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- ON THE HORIZON -->
    <section>
      <h2 class="text-3xl font-bold mb-4 select-none">ON THE HORIZON !!!</h2>
      <div class="flex items-center space-x-4 overflow-x-auto scrollbar-hide">
        <!-- Card 1 -->
        <div class="min-w-[370px] bg-white border border-gray-200 rounded-lg shadow-sm flex-shrink-0">
          <img alt="Hello Monster – Baby Monster" class="rounded-t-lg object-cover w-full h-[140px]" height="140" src="{{ asset('img/oppi.jpeg') }}" width="280"/>
          <div class="p-3">
            <p class="text-xs font-semibold mb-1 select-none">Hello Monster – Baby Monster</p>
            <div class="flex items-center text-xs text-gray-500 space-x-1 mb-2 select-none">
              <i class="fas fa-calendar-alt"></i>
              <span>17.00 - 20.00</span>
              <i class="fas fa-map-marker-alt ml-3"></i>
              <span>Jakarta, Indonesia</span>
            </div>
            <a href="/info3">

            <button class="bg-[#4a6b8a] text-white text-xs rounded px-3 py-1 hover:bg-[#3a5570] transition">More info</button>
            </a>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="min-w-[370px] bg-white border border-gray-200 rounded-lg shadow-sm flex-shrink-0">
          <img alt="Hello Monster – Baby Monster" class="rounded-t-lg object-cover w-full h-[140px]" height="140" src="{{ asset('img/TS.png') }}" width="280"/>
          <div class="p-3">
            <p class="text-xs font-semibold mb-1 select-none">Hello Monster – Baby Monster</p>
            <div class="flex items-center text-xs text-gray-500 space-x-1 mb-2 select-none">
              <i class="fas fa-calendar-alt"></i>
              <span>17.00 - 20.00</span>
              <i class="fas fa-map-marker-alt ml-3"></i>
              <span>Jakarta, Indonesia</span>
            </div>
            <button class="bg-[#4a6b8a] text-white text-xs rounded px-3 py-1 hover:bg-[#3a5570] transition">More info</button>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="min-w-[370px] bg-white border border-gray-200 rounded-lg shadow-sm flex-shrink-0">
          <img alt="Hello Monster – Baby Monster" class="rounded-t-lg object-cover w-full h-[140px]" height="140" src="{{ asset('img/SO7.png') }}" width="280"/>
          <div class="p-3">
            <p class="text-xs font-semibold mb-1 select-none">Hello Monster – Baby Monster</p>
            <div class="flex items-center text-xs text-gray-500 space-x-1 mb-2 select-none">
              <i class="fas fa-calendar-alt"></i>
              <span>17.00 - 20.00</span>
              <i class="fas fa-map-marker-alt ml-3"></i>
              <span>Jakarta, Indonesia</span>
            </div>
            <button class="bg-[#4a6b8a] text-white text-xs rounded px-3 py-1 hover:bg-[#3a5570] transition">More info</button>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Moments We Loved -->
  <section class="bg-[#0B1A8C] mt-12 py-8">
   <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-10">
    <h2 class="text-white font-semibold text-lg sm:text-xl mb-6 select-none">
     Moments We Loved
    </h2>
    <div class="grid grid-cols-3 gap-4">
    <img alt="Person in black suit and sunglasses looking at camera with white background" class="rounded-lg object-cover w-full h-[130px]" height="200" src="{{ asset('img/J-HOPE.jpeg') }}" width="300"/>
    <img alt="Woman looking to side with green blurred background" class="rounded-lg object-cover w-full h-[130px]" height="200" src="{{ asset('img/BERNADYA.jpeg') }}" width="300"/>
    <img alt="Smiling woman with long hair and hand near face in purple light" class="rounded-lg object-cover w-full h-[130px]" height="200" src="{{ asset('img/OLIVIA.jpeg') }}" width="300"/>
    <img alt="Man in brown jacket posing with yellow background" class="rounded-lg object-cover w-full h-[130px]" height="200" src="{{ asset('img/EAJ.jpeg') }}" width="300"/>
    <img alt="Group of four men in denim jackets posing with instruments" class="rounded-lg object-cover w-full h-[130px]" height="200" src="{{ asset('img/DAY6.jpeg') }}" width="300"/>
    <img alt="Man in black shirt posing with black and white background" class="rounded-lg object-cover w-full h-[130px]" height="200" src="{{ asset('img/HINDIA.jpeg') }}" width="300"/>
    <img alt="Woman wearing black beret looking at camera with white background" class="rounded-lg object-cover w-full h-[130px]" height="200" src="{{ asset('img/NIKI.jpeg') }}" width="300"/>
    <img alt="Group of four men sitting on stage with crowd behind" class="rounded-lg object-cover w-full h-[130px]" height="200" src="{{ asset('img/NDX.jpeg') }}" width="300"/>
    <img alt="Group of five people posing and smiling with white background" class="rounded-lg object-cover w-full h-[130px]" height="200" src="{{ asset('img/LOMBA SIHIR.jpeg') }}" width="300"/>
   </div>
   </div>
  </section>
  <!-- Footer -->
  <footer class="bg-[#0B1A8C] text-white px-6 py-8 select-none">
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-3 gap-8 text-xs leading-relaxed">
      <!-- Navigasi Cepat -->
      <div>
        <p class="font-bold mb-2">Navigasi Cepat</p>
        <ul class="space-y-1">
          <li>Beranda</li>
          <li>Jadwal Konser</li>
          <li>Syarat &amp; ketentuan</li>
          <li>My Tickets</li>
          <li>FAQ</li>
        </ul>
      </div>
      <!-- Alamat -->
      <div>
        <p class="font-bold mb-2">Alamat</p>
        <p>
          TixMeUp Indonesia<br />
          Gedung Kreativitas Nusantara Lt. 2,<br />
          Jl. Kaliurang KM 9,3 No. 27A<br />
          RT 003 / RW 002,<br />
          Kelurahan Caturtunggal, Depok,<br />
          Kabupaten Sleman, Daerah Istimewa<br />
          Yogyakarta 55281, Indonesia
        </p>
      </div>
      <!-- Pembayaran -->
      <div>
        <p class="font-bold mb-2">Pembayaran</p>
        <p>Menerima Pembayaran</p>
        <div class="mt-2 grid grid-cols-3 gap-2 max-w-xs">
          <img
            alt="BCA bank logo blue and white"
            class="object-contain"
            height="30"
            src="{{ asset('img/footerBCA.jpg') }}"
            width="80"
          />
          <img
            alt="BRI bank logo blue and white"
            class="object-contain"
            height="30"
            src="{{ asset('img/footerBRI.jpg') }}"
            width="80"
          />
          <img
            alt="Mandiri bank logo blue and yellow"
            class="object-contain"
            height="30"
            src="{{ asset('img/footerMANDIRI.jpg') }}"
            width="80"
          />
          <img
            alt="BSI bank logo green and white"
            class="object-contain"
            height="30"
            src="{{ asset('img/footerBSI.jpg') }}"
            width="80"
          />
          <img
            alt="Gopay logo red and white"
            class="object-contain"
            height="30"
            src="{{ asset('img/footerCIMB.jpg') }}"
            width="80"
          />
          <img
            alt="BNI bank logo orange and white"
            class="object-contain"
            height="30"
            src="{{ asset('img/footerBNI.jpg') }}"
            width="80"
          />
        </div>
      </div>
    </div>
    <hr class="border-gray-600 my-6" />
    <div
      class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between text-xs space-y-3 sm:space-y-0"
    >
      <div class="flex items-center space-x-2 font-extrabold text-white">
        <img
          alt="TixMeUp logo hand sign in white on blue background"
          class="w-6 h-6"
          height="24"
          src="{{ asset('img/logo.png') }}"
          width="24"
        />
        <span>TixMeUp</span>
      </div>
      <div class="flex space-x-4 text-white">
        <a aria-label="Facebook" class="hover:text-gray-300" href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a aria-label="Twitter" class="hover:text-gray-300" href="#">
          <i class="fab fa-twitter"></i>
        </a>
        <a aria-label="Instagram" class="hover:text-gray-300" href="#">
          <i class="fab fa-instagram"></i>
        </a>
        <a aria-label="YouTube" class="hover:text-gray-300" href="#">
          <i class="fab fa-youtube"></i>
        </a>
      </div>
      <div class="text-gray-300 text-center sm:text-right">
        © 2025 TixMeUp. Semua hak dilindungi undang-undang.
      </div>
    </div>
  </footer>
