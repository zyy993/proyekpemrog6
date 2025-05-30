<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   TixMeUp - Taylor Swift The Eras Tour
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
 <body class="bg-white text-gray-900">
  <header class="bg-[#0B1460] flex items-center justify-between px-4 sm:px-6 md:px-10 py-3">
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
      <button aria-label="My Tickets" class="ml-4 flex items-center space-x-1 bg-[#1E2A78] hover:bg-[#2a3a9e] text-white text-sm font-semibold py-1.5 px-4 rounded-md">
    <span>
     My Tickets
    </span>
    <i class="fas fa-chevron-down text-xs">
    </i>
   </button>
    </div>
  </header>
  <main class="max-w-7xl mx-auto p-4 sm:p-6 md:p-10">
   <div class="flex flex-col lg:flex-row gap-6">
    <!-- Left side with image and tabs -->
    <section class="flex-[1.8] rounded-xl overflow-hidden border border-gray-200 shadow-sm">
     <img alt="Taylor Swift portrait with red background, hand covering mouth, text overlay 'b*ck the patriarchy' in white cursive" class="w-full object-cover aspect-[16/9]" height="400" src="https://storage.googleapis.com/a1aa/image/81c9fddb-bef9-499c-61a6-5683da8ecb61.jpg" width="600"/>
     <div class="flex border-t border-gray-200 bg-white">
      <button aria-current="false" class="flex-1 py-3 text-center font-semibold text-gray-400" type="button">
       Deskripsi
      </button>
      <button aria-current="true" class="flex-1 py-3 text-center font-semibold border-b-4 border-[#0B1460] text-[#0B1460]" type="button">
       Tiket
      </button>
     </div>
    </section>
    <!-- Right side with event details -->
    <section class="flex-4 bg-white rounded-xl border border-gray-200 p-6 shadow-sm">
  <h1 class="font-bold text-lg leading-tight mb-10 underline">
    Taylor Swift | The Eras Tour
  </h1>
  <div class="space-y-5 text-gray-700 text-sm">
    <div class="font-bold flex items-center space-x-3">
      <i class="far fa-calendar-alt text-gray-400 w-5"></i>
      <span class="text-lg">September 9, 2025</span>
    </div>
    <div class="font-bold flex items-center space-x-3">
      <i class="fas fa-map-marker-alt text-gray-400 w-5"></i>
      <span class="text-lg">Gelora Bung Karno Stadium, Jakarta</span>
    </div>
    <div class="font-bold flex items-center space-x-3">
      <i class="far fa-clock text-gray-400 w-5"></i>
      <span class="text-lg">Gate open at 5:00 PM | Show starts at 7:00 PM</span>
    </div>

    <!-- Garis Pemisah -->
    <hr class="my-9 border-t-2 border-gray-300" />

   <div class="mt-14 flex items-center space-x-4">
  <!-- Lingkaran -->
  <div class="w-20 h-20 rounded-full bg-gray-300 flex-shrink-0 mt-8">
  </div>
  <!-- Teks -->
  <div class="text-xl text-gray-500 mt-8">
    Diselenggarakan oleh
    <br />
    <span class="font-bold text-gray-700">
      Egi Imutt
    </span>
  </div>
</div>

  </div>
</section>

   </div>
   <!-- Tickets list -->
   <section class="mt-6 space-y-4 max-w-md mx-auto lg:mx-0">
    <!-- Ticket item 1 -->
<article class="border border-gray-300 rounded-xl flex overflow-hidden relative">
  <img alt="Taylor Swift wearing red outfit..." class="w-28 h-20 object-cover rounded-l-xl" src="https://storage.googleapis.com/a1aa/image/0a4b78d3-ae50-43fa-a7b6-645d363582b4.jpg" />

  <div class="flex-1 p-3 flex flex-col justify-between">
    <div>
      <h2 class="font-semibold text-sm text-[#1A1A1A]">Taylor Swift | The Eras Tour</h2>
      <ul class="text-xs text-[#4B4B4B] mt-1 space-y-1">
        <li class="flex items-center gap-1">
          <i class="fas fa-map-marker-alt text-[#4B4B4B] text-[10px]"></i>
          <span>Gelora Bung Karno Stadium, Jakarta</span>
        </li>
        <li class="flex items-center gap-1">
          <i class="fas fa-clock text-[#4B4B4B] text-[10px]"></i>
          <span>Gates open at 5:00 PM | Show starts at 7:00 PM</span>
        </li>
      </ul>
      <a class="text-xs text-[#1A2EBF] mt-1 inline-block hover:underline" href="#">* Terms and conditions apply</a>
    </div>
<!-- Bagian bawah: jumlah tiket + tombol -->
    <div class="flex flex-col items-end gap-2 mt-2">
      <!-- Counter -->
<div class="flex items-center gap-2">
  <button id="decrement" type="button" class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold">−</button>
  <span id="quantity" class="w-4 text-center text-sm font-semibold select-none">1</span>
  <button id="increment" type="button" class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold">+</button>
</div>
      <!-- Tombol Buy -->
      <button class="bg-[#1A2EBF] text-white text-xs font-semibold rounded px-3 py-1" type="button">Buy Now</button>
    </div>
  </div>
  <div class="absolute top-0 right-0 bg-[#1A2EBF] text-white text-[10px] font-semibold px-2 py-0.5 rounded-bl-lg select-none">VVIP</div>
</article>

<!-- Script untuk tombol -->
<script>
  const quantityEl = document.getElementById("quantity");
  const quantityLabel = document.getElementById("quantityLabel");
  const decrementBtn = document.getElementById("decrement");
  const incrementBtn = document.getElementById("increment");

  let quantity = 1;

  decrementBtn.addEventListener("click", () => {
    if (quantity > 1) {
      quantity--;
      quantityEl.textContent = quantity;
      quantityLabel.textContent = quantity;
    }
  });

  incrementBtn.addEventListener("click", () => {
    quantity++;
    quantityEl.textContent = quantity;
    quantityLabel.textContent = quantity;
  });
</script>
    <!-- Ticket item 2 -->
<article class="border border-gray-300 rounded-xl flex overflow-hidden relative">
  <img alt="Taylor Swift ticket" class="w-28 h-20 object-cover rounded-l-xl" height="90" src="https://storage.googleapis.com/a1aa/image/0a4b78d3-ae50-43fa-a7b6-645d363582b4.jpg" width="120"/>
  <div class="flex-1 p-3 flex flex-col justify-between">
    <div>
      <h2 class="font-semibold text-sm text-[#1A1A1A]">Taylor Swift | The Eras Tour</h2>
      <ul class="text-xs text-[#4B4B4B] mt-1 space-y-1">
        <li class="flex items-center gap-1">
          <i class="fas fa-map-marker-alt text-[#4B4B4B] text-[10px]"></i>
          <span>Gelora Bung Karno Stadium, Jakarta</span>
        </li>
        <li class="flex items-center gap-1">
          <i class="fas fa-clock text-[#4B4B4B] text-[10px]"></i>
          <span>Gates open at 5:00 PM | Show starts at 7:00 PM</span>
        </li>
      </ul>
      <a class="text-xs text-[#1A2EBF] mt-1 inline-block hover:underline" href="#">* Terms and conditions apply</a>
    </div>
    <div class="flex flex-col items-end gap-2 mt-2">
      <div class="flex items-center gap-2">
        <button type="button" class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold decrement">−</button>
        <span class="quantity w-4 text-center text-sm font-semibold select-none">1</span>
        <button type="button" class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold increment">+</button>
      </div>
      <button class="bg-[#1A2EBF] text-white text-xs font-semibold rounded px-3 py-1" type="button">Buy Now</button>
    </div>
  </div>
  <div class="absolute top-0 right-0 bg-[#1A2EBF] text-white text-[10px] font-semibold px-2 py-0.5 rounded-bl-lg select-none">ZONE B</div>

  <script>
    (() => {
      const article = document.currentScript.parentElement;
      const incrementBtn = article.querySelector('.increment');
      const decrementBtn = article.querySelector('.decrement');
      const quantitySpan = article.querySelector('.quantity');

      incrementBtn.addEventListener('click', () => {
        let currentQty = parseInt(quantitySpan.textContent);
        quantitySpan.textContent = currentQty + 1;
      });

      decrementBtn.addEventListener('click', () => {
        let currentQty = parseInt(quantitySpan.textContent);
        if (currentQty > 1) {
          quantitySpan.textContent = currentQty - 1;
        }
      });
    })();
  </script>
</article>
    <!-- Ticket item 3 -->
    <article class="border border-gray-300 rounded-xl flex overflow-hidden relative">
  <img alt="Taylor Swift ticket 3" class="w-28 h-20 object-cover rounded-l-xl" height="90" src="https://storage.googleapis.com/a1aa/image/0a4b78d3-ae50-43fa-a7b6-645d363582b4.jpg" width="120"/>
  <div class="flex-1 p-3 flex flex-col justify-between">
    <div>
      <h2 class="font-semibold text-sm text-[#1A1A1A]">Taylor Swift | The Eras Tour</h2>
      <ul class="text-xs text-[#4B4B4B] mt-1 space-y-1">
        <li class="flex items-center gap-1">
          <i class="fas fa-map-marker-alt text-[#4B4B4B] text-[10px]"></i>
          <span>Gelora Bung Karno Stadium, Jakarta</span>
        </li>
        <li class="flex items-center gap-1">
          <i class="fas fa-clock text-[#4B4B4B] text-[10px]"></i>
          <span>Gates open at 5:00 PM | Show starts at 7:00 PM</span>
        </li>
      </ul>
      <a class="text-xs text-[#1A2EBF] mt-1 inline-block hover:underline" href="#">* Terms and conditions apply</a>
    </div>
    <div class="flex flex-col items-end gap-2 mt-2">
      <div class="flex items-center gap-2">
        <button type="button" class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold decrement">−</button>
        <span class="quantity w-4 text-center text-sm font-semibold select-none">1</span>
        <button type="button" class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold increment">+</button>
      </div>
      <button class="bg-[#1A2EBF] text-white text-xs font-semibold rounded px-3 py-1" type="button">Buy Now</button>
    </div>
  </div>
  <div class="absolute top-0 right-0 bg-[#1A2EBF] text-white text-[10px] font-semibold px-2 py-0.5 rounded-bl-lg select-none">ZONE D</div>

  <script>
    (() => {
      const article = document.currentScript.parentElement;
      const incrementBtn = article.querySelector('.increment');
      const decrementBtn = article.querySelector('.decrement');
      const quantitySpan = article.querySelector('.quantity');

      incrementBtn.addEventListener('click', () => {
        let currentQty = parseInt(quantitySpan.textContent);
        quantitySpan.textContent = currentQty + 1;
      });

      decrementBtn.addEventListener('click', () => {
        let currentQty = parseInt(quantitySpan.textContent);
        if (currentQty > 1) {
          quantitySpan.textContent = currentQty - 1;
        }
      });
    })();
  </script>
</article>
   </section>
    <!-- Tickets list sold out -->
<section class="mt-6 space-y-4 max-w-md mx-auto lg:mx-0">
    <!-- Ticket item 1 -->
    <article class="border border-gray-300 rounded-xl flex overflow-hidden relative opacity-50 pointer-events-none select-none">
  <img alt="Sold Out Ticket" class="w-28 h-20 object-cover rounded-l-xl" src="https://storage.googleapis.com/a1aa/image/0a4b78d3-ae50-43fa-a7b6-645d363582b4.jpg" />

  <div class="flex-1 p-3 flex flex-col justify-between">
    <div>
      <h2 class="font-semibold text-sm text-[#1A1A1A]">Taylor Swift | The Eras Tour</h2>
      <ul class="text-xs text-[#4B4B4B] mt-1 space-y-1">
        <li class="flex items-center gap-1">
          <i class="fas fa-map-marker-alt text-[#4B4B4B] text-[10px]"></i>
          <span>Gelora Bung Karno Stadium, Jakarta</span>
        </li>
        <li class="flex items-center gap-1">
          <i class="fas fa-clock text-[#4B4B4B] text-[10px]"></i>
          <span>Gates open at 5:00 PM | Show starts at 7:00 PM</span>
        </li>
      </ul>
      <a class="text-xs text-[#1A2EBF] mt-1 inline-block hover:underline pointer-events-auto" href="#">* Terms and conditions apply</a>
    </div>
    <div class="flex flex-col items-end gap-2 mt-2">
      <div class="flex items-center gap-2">
        <button type="button" class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold" disabled>−</button>
        <span class="w-4 text-center text-sm font-semibold select-none">0</span>
        <button type="button" class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold" disabled>+</button>
      </div>
      <button class="bg-gray-500 text-white text-xs font-semibold rounded px-3 py-1 cursor-not-allowed" type="button" disabled>Sold Out</button>
    </div>
  </div>
  <div class="absolute top-0 right-0 bg-gray-500 text-white text-[10px] font-semibold px-2 py-0.5 rounded-bl-lg select-none">ZONE A</div>
</article>
    <!-- Ticket item 2 -->
    <article class="border border-gray-300 rounded-xl flex overflow-hidden relative opacity-50 pointer-events-none select-none">
  <img alt="Sold Out Ticket" class="w-28 h-20 object-cover rounded-l-xl" src="https://storage.googleapis.com/a1aa/image/0a4b78d3-ae50-43fa-a7b6-645d363582b4.jpg" />

  <div class="flex-1 p-3 flex flex-col justify-between">
    <div>
      <h2 class="font-semibold text-sm text-[#1A1A1A]">Taylor Swift | The Eras Tour</h2>
      <ul class="text-xs text-[#4B4B4B] mt-1 space-y-1">
        <li class="flex items-center gap-1">
          <i class="fas fa-map-marker-alt text-[#4B4B4B] text-[10px]"></i>
          <span>Gelora Bung Karno Stadium, Jakarta</span>
        </li>
        <li class="flex items-center gap-1">
          <i class="fas fa-clock text-[#4B4B4B] text-[10px]"></i>
          <span>Gates open at 5:00 PM | Show starts at 7:00 PM</span>
        </li>
      </ul>
      <a class="text-xs text-[#1A2EBF] mt-1 inline-block hover:underline pointer-events-auto" href="#">* Terms and conditions apply</a>
    </div>
    <div class="flex flex-col items-end gap-2 mt-2">
      <div class="flex items-center gap-2">
        <button type="button" class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold" disabled>−</button>
        <span class="w-4 text-center text-sm font-semibold select-none">0</span>
        <button type="button" class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold" disabled>+</button>
      </div>
      <button class="bg-gray-500 text-white text-xs font-semibold rounded px-3 py-1 cursor-not-allowed" type="button" disabled>Sold Out</button>
    </div>
  </div>
  <div class="absolute top-0 right-0 bg-gray-500 text-white text-[10px] font-semibold px-2 py-0.5 rounded-bl-lg select-none">ZONE C</div>
</article>
    <!-- Ticket item 3 -->
    <article class="border border-gray-300 rounded-xl flex overflow-hidden relative opacity-50 pointer-events-none select-none">
  <img alt="Sold Out Ticket" class="w-28 h-20 object-cover rounded-l-xl" src="https://storage.googleapis.com/a1aa/image/0a4b78d3-ae50-43fa-a7b6-645d363582b4.jpg" />

  <div class="flex-1 p-3 flex flex-col justify-between">
    <div>
      <h2 class="font-semibold text-sm text-[#1A1A1A]">Taylor Swift | The Eras Tour</h2>
      <ul class="text-xs text-[#4B4B4B] mt-1 space-y-1">
        <li class="flex items-center gap-1">
          <i class="fas fa-map-marker-alt text-[#4B4B4B] text-[10px]"></i>
          <span>Gelora Bung Karno Stadium, Jakarta</span>
        </li>
        <li class="flex items-center gap-1">
          <i class="fas fa-clock text-[#4B4B4B] text-[10px]"></i>
          <span>Gates open at 5:00 PM | Show starts at 7:00 PM</span>
        </li>
      </ul>
      <a class="text-xs text-[#1A2EBF] mt-1 inline-block hover:underline pointer-events-auto" href="#">* Terms and conditions apply</a>
    </div>
    <div class="flex flex-col items-end gap-2 mt-2">
      <div class="flex items-center gap-2">
        <button type="button" class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold" disabled>−</button>
        <span class="w-4 text-center text-sm font-semibold select-none">0</span>
        <button type="button" class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold" disabled>+</button>
      </div>
      <button class="bg-gray-500 text-white text-xs font-semibold rounded px-3 py-1 cursor-not-allowed" type="button" disabled>Sold Out</button>
    </div>
  </div>
  <div class="absolute top-0 right-0 bg-gray-500 text-white text-[10px] font-semibold px-2 py-0.5 rounded-bl-lg select-none">Sold Out</div>
</article>
</section>
  </main>
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
 </body>
</html>
