<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   TixMeUp Seating
  </title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-white">
<!-- Header -->
    <header class="bg-[#0B1460] flex items-center justify-between px-4 sm:px-6 md:px-10 py-3">
        <div class="flex items-center space-x-2 min-w-[840px]">
            <img alt="TixMeUp logo with hand gesture icon in white on blue background" class="w-8 h-8" height="32" src="{{ asset('img/logo.png') }}" width="32"/>
            <span class="text-white font-semibold text-lg select-none">TixMeUp</span>
        </div>
        <div class="flex items-center space-x-3 min-w-[180px] justify-end">
            <button aria-label="My Tickets" class="ml-4 flex items-center space-x-1 bg-[#1E2A78] hover:bg-[#2a3a9e] text-white text-sm font-semibold py-1.5 px-4 rounded-md">
                <span>My Tickets</span>
            </button>
        </div>
    </header>
  <main class="max-w-5xl mx-auto mt-8 px-6 mb-16">
   <!-- Card container with overlay background -->
   <div class="relative rounded-lg shadow-lg overflow-hidden">
    <!-- Overlay background -->
    <div class="absolute inset-0 bg-black bg-opacity-20 pointer-events-none rounded-lg"></div>
    <!-- Content inside card -->
    <div class="relative bg-white p-8 rounded-lg">
      <!-- Stage -->
      <div class="bg-black text-white font-bold text-center py-16 text-lg rounded-tl-md rounded-tr-md w-1/2 mx-auto mb-3" style="font-family: Arial, sans-serif;">
       STAGE
      </div>
      <!-- Seating layout container -->
      <div class="flex justify-between gap-1.5">
       <!-- Left zones -->
       <div class="flex flex-col gap-1.5 w-1/3">
        <div class="bg-[#a00052] text-white font-bold text-sm text-center py-12 rounded-md" style="font-family: Arial, sans-serif;">
         ZONE A
        </div>
        <div class="bg-[#d6006f] text-white font-bold text-sm text-center py-12 rounded-md" style="font-family: Arial, sans-serif;">
         ZONE B
        </div>
        <div class="bg-[#e9c0c9] text-white font-bold text-sm text-center py-12 rounded-bl-lg" style="font-family: Arial, sans-serif;">
         ZONE D
        </div>
       </div>
       <!-- Center zones -->
       <div class="flex flex-col w-3/5 gap-1.5">
        <div class="bg-[#80003c] text-white font-bold text-sm text-center py-28 rounded-md" style="font-family: Arial, sans-serif;">
         VVIP
        </div>
        <div class="bg-[#d67ca0] text-white font-bold text-sm text-center py-12 rounded-b-md" style="font-family: Arial, sans-serif;">
         ZONE C
        </div>
       </div>
       <!-- Right zones -->
       <div class="flex flex-col gap-1.5 w-1/3">
        <div class="bg-[#a00052] text-white font-bold text-sm text-center py-12 rounded-md" style="font-family: Arial, sans-serif;">
         ZONE A
        </div>
        <div class="bg-[#d6006f] text-white font-bold text-sm text-center py-12 rounded-md" style="font-family: Arial, sans-serif;">
         ZONE B
        </div>
        <div class="bg-[#e9c0c9] text-white font-bold text-sm text-center py-12 rounded-br-lg" style="font-family: Arial, sans-serif;">
         ZONE D
        </div>
       </div>
      </div>
    </div>
   </div>
  </main>
  <!-- Footer -->
  <footer class="bg-[#0B1A8C] text-white px-6 py-8 select-none">
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs leading-relaxed">
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
 </body>
</html>
