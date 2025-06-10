<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   TixMeUp Notification
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Inter', sans-serif;
    }
  </style>
 </head>
 <body class="bg-white">
  <!-- Header -->
  <header class="bg-[#0B1460] flex items-center justify-between px-4 sm:px-6 md:px-10 py-3">
   <div class="flex items-center space-x-2 min-w-[840px]">
    <img alt="TixMeUp logo with hand gesture icon in white on blue background" class="w-8 h-8" height="32" src="{{ asset('img/logo.png') }}" width="32"/>
    <span class="text-white font-semibold text-lg select-none">
     TixMeUp
    </span>
   </div>
   <div class="flex items-center space-x-3 min-w-[180px] justify-end">
    <button aria-label="My Tickets" class="ml-4 flex items-center space-x-1 bg-[#1E2A78] hover:bg-[#2a3a9e] text-white text-sm font-semibold py-1.5 px-4 rounded-md">
     <span>
      My Tickets
     </span>
    </button>
   </div>
  </header>
  <main class="max-w-4xl mx-auto px-4 sm:px-6 md:px-10 py-6">
   <h1 class="text-center font-semibold text-black text-base mb-6 select-none">
    Notification
   </h1>
   <!-- Tabs -->
   <div class="flex space-x-3 mb-8 justify-center">
    <button class="bg-white border border-black text-black text-xs font-semibold rounded-full px-4 py-1.5 select-none" type="button">
     Semua
    </button>
    <button class="bg-white border border-black text-black text-xs font-semibold rounded-full px-4 py-1.5 select-none" type="button">
     Belum Dibaca
    </button>
    <button class="bg-[#B7C3D1] text-black text-xs font-semibold rounded-full px-4 py-1.5 select-none" type="button">
     Belum Dibalas
    </button>
   </div>
   <!-- Notification list -->
   <ul class="space-y-6">
    <!-- Item 6 -->
    <li class="flex justify-between items-start border-b border-black/10 pb-4">
     <div class="flex space-x-4 max-w-[calc(100%-72px)]">
      <img alt="User avatar placeholder blue circle" class="w-10 h-10 rounded-full flex-shrink-0" height="40" src="https://storage.googleapis.com/a1aa/image/f405a632-8d6f-4000-4dad-1f2d34fa498d.jpg" width="40"/>
      <div class="text-sm text-black">
       <p class="font-semibold leading-tight select-text">
        blackpink_fan_tired123
       </p>
       <p class="leading-tight select-text">
        Kenapa sih selalu rebutan tiket kayak gini tiap konser BLACKPINK? 🤔
       </p>
      </div>
     </div>
     <div class="flex flex-col items-center space-y-1 text-xs text-[#0B1E8A] select-none min-w-[48px]">
      <span>
       01/06
      </span>
     </div>
    </li>
   </ul>
  </main>
  <!-- Footer -->
  <footer class="bg-[#0B1A8C] text-white px-6 py-8 select-none">
   <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-3 gap-8 text-xs leading-relaxed">
    <!-- Navigasi Cepat -->
    <div>
     <p class="font-bold mb-2">
      Navigasi Cepat
     </p>
     <ul class="space-y-1">
      <li>
       Beranda
      </li>
      <li>
       Jadwal Konser
      </li>
      <li>
       Syarat &amp; ketentuan
      </li>
      <li>
       My Tickets
      </li>
      <li>
       FAQ
      </li>
     </ul>
    </div>
    <!-- Alamat -->
    <div>
     <p class="font-bold mb-2">
      Alamat
     </p>
     <p>
      TixMeUp Indonesia
      <br/>
      Gedung Kreativitas Nusantara Lt. 2,
      <br/>
      Jl. Kaliurang KM 9,3 No. 27A
      <br/>
      RT 003 / RW 002,
      <br/>
      Kelurahan Caturtunggal, Depok,
      <br/>
      Kabupaten Sleman, Daerah Istimewa
      <br/>
      Yogyakarta 55281, Indonesia
     </p>
    </div>
    <!-- Pembayaran -->
    <div>
     <p class="font-bold mb-2">
      Pembayaran
     </p>
     <p>
      Menerima Pembayaran
     </p>
     <div class="mt-2 grid grid-cols-3 gap-2 max-w-xs">
      <img alt="BCA bank logo blue and white" class="object-contain" height="30" src="{{ asset('img/footerBCA.jpg') }}" width="80"/>
      <img alt="BRI bank logo blue and white" class="object-contain" height="30" src="{{ asset('img/footerBRI.jpg') }}" width="80"/>
      <img alt="Mandiri bank logo blue and yellow" class="object-contain" height="30" src="{{ asset('img/footerMANDIRI.jpg') }}" width="80"/>
      <img alt="BSI bank logo green and white" class="object-contain" height="30" src="{{ asset('img/footerBSI.jpg') }}" width="80"/>
      <img alt="Gopay logo red and white" class="object-contain" height="30" src="{{ asset('img/footerCIMB.jpg') }}" width="80"/>
      <img alt="BNI bank logo orange and white" class="object-contain" height="30" src="{{ asset('img/footerBNI.jpg') }}" width="80"/>
     </div>
    </div>
   </div>
   <hr class="border-gray-600 my-6"/>
   <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between text-xs space-y-3 sm:space-y-0">
    <div class="flex items-center space-x-2 font-extrabold text-white">
     <img alt="TixMeUp logo hand sign in white on blue background" class="w-6 h-6" height="24" src="{{ asset('img/logo.png') }}" width="24"/>
     <span>
      TixMeUp
     </span>
    </div>
    <div class="flex space-x-4 text-white">
     <a aria-label="Facebook" class="hover:text-gray-300" href="#">
      <i class="fab fa-facebook-f">
      </i>
     </a>
     <a aria-label="Twitter" class="hover:text-gray-300" href="#">
      <i class="fab fa-twitter">
      </i>
     </a>
     <a aria-label="Instagram" class="hover:text-gray-300" href="#">
      <i class="fab fa-instagram">
      </i>
     </a>
     <a aria-label="YouTube" class="hover:text-gray-300" href="#">
      <i class="fab fa-youtube">
      </i>
     </a>
    </div>
    <div class="text-gray-300 text-center sm:text-right">
     © 2025 TixMeUp. Semua hak dilindungi undang-undang.
    </div>
   </div>
  </footer>
 </body>
</html>
