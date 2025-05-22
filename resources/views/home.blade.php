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
      <img alt="TixMeUp logo with hand gesture icon in white on blue background" class="w-8 h-8" height="32" src="{{ asset('img/logo.png') }}" width="32"/>
      <span class="text-white font-semibold text-lg select-none">TixMeUp</span>
    </div>
    <div class="hidden sm:flex flex-1 max-w-[480px] mx-6">
      <div class="relative w-full">
        <input class="w-full rounded-full bg-[#00108b] placeholder-white text-white pl-10 pr-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-white" placeholder="Search by artist or event" type="text"/>
        <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-white text-sm"></i>
      </div>
    </div>
    <div class="flex items-center space-x-3 min-w-[180px] justify-end">
      <button class="text-white border border-white rounded-full px-5 py-1 text-sm hover:bg-white hover:text-[#00108b] transition">Sign In</button>
      <button class="text-white border border-white rounded-full px-5 py-1 text-sm hover:bg-white hover:text-[#00108b] transition">Sign Up</button>
      <button class="text-white text-xl sm:hidden">
        <i class="fas fa-bars"></i>
      </button>
      <button class="text-white text-xl hidden sm:block">
        <i class="fas fa-chevron-down"></i>
      </button>
    </div>
  </nav>
  <!-- Carousel -->
  <div class="relative border-b border-[#00108b]">
    <img alt="Black and white photo of four women posing with red BLACKPINK text overlay" class="w-full object-cover max-h-[250px]" height="250" src="{{ asset('img/home.jpg') }}" width="1200"/>
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
        <!-- Card 1 -->
        <div class="min-w-[370px] bg-white border border-gray-200 rounded-lg shadow-sm flex-shrink-0">
          <img alt="Hello Monster – Baby Monster" class="rounded-t-lg object-cover w-full h-[140px]" height="140" src="https://storage.googleapis.com/a1aa/image/32583742-d3f6-4896-7ed6-5f3a9222f18b.jpg" width="280"/>
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
        <!-- Card 2 -->
        <div class="min-w-[370px] bg-white border border-gray-200 rounded-lg shadow-sm flex-shrink-0">
          <img alt="Hello Monster – Baby Monster" class="rounded-t-lg object-cover w-full h-[140px]" height="140" src="https://storage.googleapis.com/a1aa/image/e9ac53a9-b517-4976-ebbf-a81b1f2552b6.jpg" width="280"/>
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
          <img alt="Hello Monster – Baby Monster" class="rounded-t-lg object-cover w-full h-[140px]" height="140" src="https://storage.googleapis.com/a1aa/image/32583742-d3f6-4896-7ed6-5f3a9222f18b.jpg" width="280"/>
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
    <!-- ON THE HORIZON -->
    <section>
      <h2 class="text-3xl font-bold mb-4 select-none">ON THE HORIZON !!!</h2>
      <div class="flex items-center space-x-4 overflow-x-auto scrollbar-hide">
        <!-- Card 1 -->
        <div class="min-w-[370px] bg-white border border-gray-200 rounded-lg shadow-sm flex-shrink-0">
          <img alt="Hello Monster – Baby Monster" class="rounded-t-lg object-cover w-full h-[140px]" height="140" src="https://storage.googleapis.com/a1aa/image/32583742-d3f6-4896-7ed6-5f3a9222f18b.jpg" width="280"/>
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
        <!-- Card 2 -->
        <div class="min-w-[370px] bg-white border border-gray-200 rounded-lg shadow-sm flex-shrink-0">
          <img alt="Hello Monster – Baby Monster" class="rounded-t-lg object-cover w-full h-[140px]" height="140" src="https://storage.googleapis.com/a1aa/image/32583742-d3f6-4896-7ed6-5f3a9222f18b.jpg" width="280"/>
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
          <img alt="Hello Monster – Baby Monster" class="rounded-t-lg object-cover w-full h-[140px]" height="140" src="https://storage.googleapis.com/a1aa/image/32583742-d3f6-4896-7ed6-5f3a9222f18b.jpg" width="280"/>
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
    <img alt="Person in black suit and sunglasses looking at camera with white background" class="rounded-lg object-cover w-full h-[130px]" height="200" src="https://storage.googleapis.com/a1aa/image/98ace023-9b81-489d-93cc-e4dbb55db6a5.jpg" width="300"/>
    <img alt="Woman looking to side with green blurred background" class="rounded-lg object-cover w-full h-[130px]" height="200" src="https://storage.googleapis.com/a1aa/image/8f5b7cf8-1d7c-4ed6-82cf-94c25f1f7cab.jpg" width="300"/>
    <img alt="Smiling woman with long hair and hand near face in purple light" class="rounded-lg object-cover w-full h-[130px]" height="200" src="https://storage.googleapis.com/a1aa/image/293be790-a344-4f83-15f9-f0170a7055f1.jpg" width="300"/>
    <img alt="Man in brown jacket posing with yellow background" class="rounded-lg object-cover w-full h-[130px]" height="200" src="https://storage.googleapis.com/a1aa/image/374ea3f1-b81d-4b0a-6bde-0b2a7ef2ac50.jpg" width="300"/>
    <img alt="Group of four men in denim jackets posing with instruments" class="rounded-lg object-cover w-full h-[130px]" height="200" src="https://storage.googleapis.com/a1aa/image/d3bf9825-b54b-482e-8625-394ec1e931d5.jpg" width="300"/>
    <img alt="Man in black shirt posing with black and white background" class="rounded-lg object-cover w-full h-[130px]" height="200" src="https://storage.googleapis.com/a1aa/image/ee8bb162-4430-4186-1a6f-88694ac8d696.jpg" width="300"/>
    <img alt="Woman wearing black beret looking at camera with white background" class="rounded-lg object-cover w-full h-[130px]" height="200" src="https://storage.googleapis.com/a1aa/image/8e6cf2fb-7283-47aa-9b71-78ed08af5aa2.jpg" width="300"/>
    <img alt="Group of four men sitting on stage with crowd behind" class="rounded-lg object-cover w-full h-[130px]" height="200" src="https://storage.googleapis.com/a1aa/image/cf9f981a-22b2-48d1-09bf-f2e16bb06c98.jpg" width="300"/>
    <img alt="Group of five people posing and smiling with white background" class="rounded-lg object-cover w-full h-[130px]" height="200" src="https://storage.googleapis.com/a1aa/image/edf6fa74-5e9b-4bca-673d-2afbdbf3408b.jpg" width="300"/>
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
