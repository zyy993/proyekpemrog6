<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>TixMeUp - Taylor Swift The Eras Tour</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
        <span>My Tickets</span>
        <i class="fas fa-chevron-down text-xs"></i>
      </button>
    </div>
  </header>
  <main class="max-w-7xl mx-auto p-4 sm:p-6 md:p-10">
   <div class="flex flex-col lg:flex-row gap-6">
    <!-- Left side with image only -->
    <section class="flex-[1.8] rounded-xl overflow-hidden border border-gray-200 shadow-sm">
     <img alt="Taylor Swift portrait with red background, hand covering mouth, text overlay 'b*ck the patriarchy' in white cursive" class="w-full object-cover aspect-[16/9]" height="400" src="{{ asset('img/oppa.jpg') }}" width="600"/>
    </section>

    <!-- Right side with event details -->
    <section class="flex-4 bg-white rounded-xl border border-gray-200 p-6 shadow-sm">
      <h1 class="font-bold text-lg leading-tight mb-10 underline">
        NCT DREAM | Dream the Future
      </h1>
      <div class="space-y-5 text-gray-700 text-sm">
        <div class="font-bold flex items-center space-x-3">
          <i class="far fa-calendar-alt text-gray-400 w-5"></i>
          <span class="text-lg">September 27, 2025</span>
        </div>
        <div class="font-bold flex items-center space-x-3">
          <i class="fas fa-map-marker-alt text-gray-400 w-5"></i>
          <span class="text-lg">ICE BSD City Hall 5-6, Jakarta</span>
        </div>
        <div class="font-bold flex items-center space-x-3">
          <i class="far fa-clock text-gray-400 w-5"></i>
          <span class="text-lg">Gates open at 6:00 PM | Show starts at 8:00 PM</span>
        </div>
        <hr class="my-9 border-t-2 border-gray-300" />
       <div class="mt-14 flex items-center space-x-4">
     <img height="100" src="{{ asset('img/PK Ent.png') }}" width="100"/>

        <div class="text-xl text-gray-500 mt-1">
          Diselenggarakan oleh
          <br />
          <span class="font-bold text-gray-700">PK Entertaiment</span>
        </div>
       </div>
      </div>
    </section>
   </div>

   <!-- Tabs & Content outside the image card, full width -->
   <section class="mt-8 max-w-7xl mx-auto rounded-xl border border-gray-200 bg-white shadow-sm">
     <!-- Tabs -->
     <div class="flex border-b border-gray-200">
      <button id="tab-deskripsi" class="flex-1 py-3 text-center font-semibold border-b-4 border-[#0B1460] text-[#0B1460]" type="button" aria-current="true">
       Deskripsi
      </button>
      <button id="tab-tiket" class="flex-1 py-3 text-center font-semibold text-gray-400" type="button" aria-current="false">
       Tiket
      </button>
     </div>

     <!-- Konten tab -->
     <div id="content-deskripsi" class="p-6 text-gray-900">
      <h2 class="font-extrabold text-base mb-2 underline">NCT DREAM  : DREAM THE FUTURE – Live in Jakarta 2025</h2>
      <p class="mb-4 font-bold">
        Rasakan energi penuh semangat dari NCT DREAM dalam konser spektakuler mereka tahun ini – THE DREAM SHOW 4: DREAM THE FUTURE akhirnya hadir di Jakarta!
      </p>
      <p class="mb-4">
        Setelah sukses mencetak sejarah di berbagai kota dunia, NCT DREAM kembali dengan pertunjukan yang lebih megah, lebih emosional, dan lebih futuristik. Konser ini bukan hanya perayaan perjalanan musik mereka, tapi juga ajakan untuk melangkah ke masa depan bersama—dalam satu mimpi besar yang tak akan terlupakan.
      </p>
      <p class="mb-4">
        Bersiaplah tenggelam dalam dunia penuh imajinasi dan musikalitas tinggi bersama Mark, Renjun, Jeno, Haechan, Jaemin, Chenle, dan Jisung! Tur ini akan membawamu menjelajahi sisi baru dari NCT DREAM—lebih dewasa, lebih kuat, dan lebih mengguncang dari sebelumnya.
      </p>
      <p class="mb-4">
        Dari nostalgia Chewing Gum, semangat membara di Boom, getaran emosional di Dive Into You, hingga hits terbaru yang memantapkan posisi mereka sebagai ikon global, konser ini akan menjadi pengalaman luar biasa bagi setiap NCTzen yang hadir.
      </p>
      <p class="mb-4">
        Disajikan dengan tata panggung megah, visual sinematik, koreografi dinamis, serta momen-momen spesial yang bikin merinding—THE DREAM SHOW 4 bukan hanya konser, tapi perayaan mimpi, masa muda, dan masa depan yang gemilang.
      </p>
        <p class="mb-4">
        Siapkan outfit terbaikmu, ajak sesama Czennie, dan bersiaplah berteriak, bernyanyi, dan merasakan keajaiban dari NCT DREAM secara langsung.
        Jakarta akan jadi saksi dari masa depan mimpi-mimpi itu—dan kamu adalah bagian penting dari kisahnya.
      </p>
      <h3 class="font-semibold text-base mt-8 mb-3">Syarat dan Ketentuan :</h3>
      <p class="mb-3">1. Tiket hanya tersedia melalui platform penjualan resmi yang telah ditentukan oleh promotor.</p>
      <p class="mb-3">2. Semua pembelian bersifat final. Tidak ada pengembalian dana (refund) atau penukaran tiket kecuali dalam kondisi konser dibatalkan oleh pihak penyelenggara.</p>
      <p class="mb-3">3. Harga tiket belum termasuk pajak dan biaya layanan.</p>
      <p class="mb-3">4. Tiket akan dikirim dalam format digital (e-ticket) melalui email atau aplikasi resmi.</p>
      <p class="mb-3">5. Penonton wajib menunjukkan e-ticket serta identitas resmi (KTP/Passport/SIM) yang sesuai dengan data pemesanan.</p>
      <p class="mb-3">6. Pintu masuk akan dibuka mulai pukul 16.00 WIB dan ditutup saat konser dimulai.</p>
      <p class="mb-3">7. Dilarang membawa senjata tajam, minuman keras, narkoba, kembang api, laser pointer, drone, dan benda berbahaya lainnya.</p>
      <p class="mb-3">8. Tidak diperbolehkan membawa makanan dan minuman dari luar ke dalam area konser.</p>
      <p class="mb-3">9. Dilarang melakukan tindakan yang mengganggu kenyamanan dan keamanan penonton lain.</p>
      <p class="mb-3">10. Penyelenggara berhak untuk mengubah jadwal, artis pendukung, atau susunan acara dengan pemberitahuan sebelumnya.</p>
     </div>

     <div id="content-tiket" class="hidden p-6 text-gray-900">
<section class="mt-6 space-y-4 max-w-full mx-auto lg:mx-0">
  <!-- Ticket item 1 -->
  <article
    class="border border-gray-300 rounded-xl flex overflow-hidden relative"
    style="width: 550px;"
  >
    <img
      alt="Taylor Swift wearing red outfit..."
      class="rounded-l-xl"
      src="{{ asset('img/oppa.jpg') }}"
      style="width: 100px; height: 100%; object-fit: cover;"
    />

    <div class="flex-1 p-3 flex flex-col justify-between">
      <div>
        <h2 class="font-semibold text-sm text-[#1A1A1A]">
          NCT DREAM |  The Future
        </h2>
        <ul class="text-xs text-[#4B4B4B] mt-1 space-y-1">
          <li class="flex items-center gap-1">
            <i class="fas fa-map-marker-alt text-[#4B4B4B] text-[10px]"></i>
            <span>ICE BSD City Hall 5-6, Jakarta</span>
          </li>
          <li class="flex items-center gap-1">
            <i class="fas fa-clock text-[#4B4B4B] text-[10px]"></i>
            <span>Gates open at 6:00 PM | Show starts at 8:00 PM</span>
          </li>
        </ul>
        <a
          class="text-xs text-[#1A2EBF] mt-1 inline-block hover:underline"
          href="#"
          >The concert will conclude on September 11, 2025.</a
        >
      </div>
      <!-- Bagian bawah: jumlah tiket + tombol -->
      <div
        class="flex flex-col items-end gap-2"
        style="margin-top: 0px; justify-content: flex-start;"
      >
        <!-- Counter -->
        <div class="flex items-center gap-2">
          <button
            id="decrement"
            type="button"
            class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold"
          >
            −
          </button>
          <span
            id="quantity"
            class="w-4 text-center text-sm font-semibold select-none"
            >1</span
          >
          <button
            id="increment"
            type="button"
            class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold"
          >
            +
          </button>
        </div>
        <!-- Tombol Buy -->
        <button
          class="bg-[#1A2EBF] text-white text-xs font-semibold rounded px-3 py-1"
          type="button"
        >
          Buy Now
        </button>
      </div>
    </div>
    <div
      class="absolute top-0 right-0 bg-[#1A2EBF] text-white text-[10px] font-semibold px-2 py-0.5 rounded-bl-lg select-none"
    >
      VVIP
    </div>
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
  <article
    class="border border-gray-300 rounded-xl flex overflow-hidden relative"
    style="width: 550px;"
  >
    <img
      alt="Taylor Swift ticket"
      class="rounded-l-xl"
src="{{ asset('img/oppa.jpg') }}"
      style="width: 100px; height: 100%; object-fit: cover;"
    />
    <div class="flex-1 p-3 flex flex-col justify-between">
      <div>
        <h2 class="font-semibold text-sm text-[#1A1A1A]">
          NCT DREAM |  The Future
        </h2>
        <ul class="text-xs text-[#4B4B4B] mt-1 space-y-1">
          <li class="flex items-center gap-1">
            <i class="fas fa-map-marker-alt text-[#4B4B4B] text-[10px]"></i>
            <span>ICE BSD City Hall 5-6, Jakarta</span>
          </li>
          <li class="flex items-center gap-1">
            <i class="fas fa-clock text-[#4B4B4B] text-[10px]"></i>
            <span>Gates open at 6:00 PM | Show starts at 8:00 PM</span>
          </li>
        </ul>
        <a
          class="text-xs text-[#1A2EBF] mt-1 inline-block hover:underline"
          href="#"
          >The concert will conclude on September 11, 2025.</a
        >
      </div>
      <div
        class="flex flex-col items-end gap-2"
        style="margin-top: 0px; justify-content: flex-start;"
      >
        <div class="flex items-center gap-2">
          <button
            type="button"
            class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold decrement"
          >
            −
          </button>
          <span class="quantity w-4 text-center text-sm font-semibold select-none"
            >1</span
          >
          <button
            type="button"
            class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold increment"
          >
            +
          </button>
        </div>
        <button
          class="bg-[#1A2EBF] text-white text-xs font-semibold rounded px-3 py-1"
          type="button"
        >
          Buy Now
        </button>
      </div>
    </div>
    <div
      class="absolute top-0 right-0 bg-[#1A2EBF] text-white text-[10px] font-semibold px-2 py-0.5 rounded-bl-lg select-none"
    >
      ZONE B
    </div>

    <script>
      (() => {
        const article = document.currentScript.parentElement;
        const incrementBtn = article.querySelector(".increment");
        const decrementBtn = article.querySelector(".decrement");
        const quantitySpan = article.querySelector(".quantity");

        incrementBtn.addEventListener("click", () => {
          let currentQty = parseInt(quantitySpan.textContent);
          quantitySpan.textContent = currentQty + 1;
        });

        decrementBtn.addEventListener("click", () => {
          let currentQty = parseInt(quantitySpan.textContent);
          if (currentQty > 1) {
            quantitySpan.textContent = currentQty - 1;
          }
        });
      })();
    </script>
  </article>
  <!-- Ticket item 3 -->
  <article
    class="border border-gray-300 rounded-xl flex overflow-hidden relative"
    style="width: 550px;"
  >
    <img
      alt="Taylor Swift ticket 3"
      class="rounded-l-xl"
      src="{{ asset('img/oppa.jpg') }}"
      style="width: 100px; height: 100%; object-fit: cover;"
    />
    <div class="flex-1 p-3 flex flex-col justify-between">
      <div>
        <h2 class="font-semibold text-sm text-[#1A1A1A]">
          NCT DREAM |  The Future
        </h2>
        <ul class="text-xs text-[#4B4B4B] mt-1 space-y-1">
          <li class="flex items-center gap-1">
            <i class="fas fa-map-marker-alt text-[#4B4B4B] text-[10px]"></i>
            <span>ICE BSD City Hall 5-6, Jakarta</span>
          </li>
          <li class="flex items-center gap-1">
            <i class="fas fa-clock text-[#4B4B4B] text-[10px]"></i>
            <span>Gates open at 6:00 PM | Show starts at 8:00 PM</span>
          </li>
        </ul>
        <a
          class="text-xs text-[#1A2EBF] mt-1 inline-block hover:underline"
          href="#"
          >The concert will conclude on September 11, 2025.</a
        >
      </div>
      <div
        class="flex flex-col items-end gap-2"
        style="margin-top: 0px; justify-content: flex-start;"
      >
        <div class="flex items-center gap-2">
          <button
            type="button"
            class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold decrement"
          >
            −
          </button>
          <span class="quantity w-4 text-center text-sm font-semibold select-none"
            >1</span
          >
          <button
            type="button"
            class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold increment"
          >
            +
          </button>
        </div>
        <button
          class="bg-[#1A2EBF] text-white text-xs font-semibold rounded px-3 py-1"
          type="button"
        >
          Buy Now
        </button>
      </div>
    </div>
    <div
      class="absolute top-0 right-0 bg-[#1A2EBF] text-white text-[10px] font-semibold px-2 py-0.5 rounded-bl-lg select-none"
    >
      ZONE D
    </div>

    <script>
      (() => {
        const article = document.currentScript.parentElement;
        const incrementBtn = article.querySelector(".increment");
        const decrementBtn = article.querySelector(".decrement");
        const quantitySpan = article.querySelector(".quantity");

        incrementBtn.addEventListener("click", () => {
          let currentQty = parseInt(quantitySpan.textContent);
          quantitySpan.textContent = currentQty + 1;
        });

        decrementBtn.addEventListener("click", () => {
          let currentQty = parseInt(quantitySpan.textContent);
          if (currentQty > 1) {
            quantitySpan.textContent = currentQty - 1;
          }
        });
      })();
    </script>
  </article>
</section>
<section class="mt-6 space-y-4 max-w-full mx-auto lg:mx-0">
  <!-- Tickets list sold out -->
  <section class="mt-6 space-y-4 max-w-full mx-auto lg:mx-0">
    <!-- Ticket item 1 -->
    <article
      class="border border-gray-300 rounded-xl flex overflow-hidden relative opacity-50 pointer-events-none select-none"
      style="width: 550px;"
    >
      <img
        alt="Sold Out Ticket"
        class="rounded-l-xl"
        src="{{ asset('img/oppa.jpg') }}"
        style="width: 100px; height: 100%; object-fit: cover;"
      />

      <div class="flex-1 p-3 flex flex-col justify-between">
        <div>
          <h2 class="font-semibold text-sm text-[#1A1A1A]">
            NCT DREAM |  The Future
          </h2>
          <ul class="text-xs text-[#4B4B4B] mt-1 space-y-1">
            <li class="flex items-center gap-1">
              <i class="fas fa-map-marker-alt text-[#4B4B4B] text-[10px]"></i>
              <span>ICE BSD City Hall 5-6, Jakarta</span>
            </li>
            <li class="flex items-center gap-1">
              <i class="fas fa-clock text-[#4B4B4B] text-[10px]"></i>
              <span>Gates open at 6:00 PM | Show starts at 8:00 PM</span>
            </li>
          </ul>
          <a
            class="text-xs text-[#1A2EBF] mt-1 inline-block hover:underline pointer-events-auto"
            href="#"
            >The concert will conclude on September 11, 2025.</a
          >
        </div>
        <div class="flex flex-col items-end gap-2 mt-2">
          <div class="flex items-center gap-2">
            <button
              type="button"
              class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold"
              disabled
            >
              −
            </button>
            <span class="w-4 text-center text-sm font-semibold select-none"
              >0</span
            >
            <button
              type="button"
              class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold"
              disabled
            >
              +
            </button>
          </div>
          <button
            class="bg-gray-500 text-white text-xs font-semibold rounded px-3 py-1 cursor-not-allowed"
            type="button"
            disabled
          >
            Sold Out
          </button>
        </div>
      </div>
      <div
        class="absolute top-0 right-0 bg-gray-500 text-white text-[10px] font-semibold px-2 py-0.5 rounded-bl-lg select-none"
      >
        ZONE A
      </div>
    </article>
    <!-- Ticket item 2 -->
    <article
      class="border border-gray-300 rounded-xl flex overflow-hidden relative opacity-50 pointer-events-none select-none"
      style="width: 550px;"
    >
      <img
        alt="Sold Out Ticket"
        class="rounded-l-xl"
        src="{{ asset('img/oppa.jpg') }}"
        style="width: 100px; height: 100%; object-fit: cover;"
      />

      <div class="flex-1 p-3 flex flex-col justify-between">
        <div>
          <h2 class="font-semibold text-sm text-[#1A1A1A]">
            NCT DREAM |  The Future
          </h2>
          <ul class="text-xs text-[#4B4B4B] mt-1 space-y-1">
            <li class="flex items-center gap-1">
              <i class="fas fa-map-marker-alt text-[#4B4B4B] text-[10px]"></i>
              <span>ICE BSD City Hall 5-6, Jakarta</span>
            </li>
            <li class="flex items-center gap-1">
              <i class="fas fa-clock text-[#4B4B4B] text-[10px]"></i>
              <span>Gates open at 6:00 PM | Show starts at 8:00 PM</span>
            </li>
          </ul>
          <a
            class="text-xs text-[#1A2EBF] mt-1 inline-block hover:underline pointer-events-auto"
            href="#"
            >The concert will conclude on September 11, 2025.</a
          >
        </div>
        <div class="flex flex-col items-end gap-2 mt-2">
          <div class="flex items-center gap-2">
            <button
              type="button"
              class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold"
              disabled
            >
              −
            </button>
            <span class="w-4 text-center text-sm font-semibold select-none"
              >0</span
            >
            <button
              type="button"
              class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold"
              disabled
            >
              +
            </button>
          </div>
          <button
            class="bg-gray-500 text-white text-xs font-semibold rounded px-3 py-1 cursor-not-allowed"
            type="button"
            disabled
          >
            Sold Out
          </button>
        </div>
      </div>
      <div
        class="absolute top-0 right-0 bg-gray-500 text-white text-[10px] font-semibold px-2 py-0.5 rounded-bl-lg select-none"
      >
        ZONE C
      </div>
    </article>
    <!-- Ticket item 3 -->
    <article
      class="border border-gray-300 rounded-xl flex overflow-hidden relative opacity-50 pointer-events-none select-none"
      style="width: 550px;"
    >
      <img
        alt="Sold Out Ticket"
        class="rounded-l-xl"
        src="{{ asset('img/oppa.jpg') }}"
        style="width: 100px; height: 100%; object-fit: cover;"
      />

      <div class="flex-1 p-3 flex flex-col justify-between">
        <div>
          <h2 class="font-semibold text-sm text-[#1A1A1A]">
            NCT DREAM |  The Future
          </h2>
          <ul class="text-xs text-[#4B4B4B] mt-1 space-y-1">
            <li class="flex items-center gap-1">
              <i class="fas fa-map-marker-alt text-[#4B4B4B] text-[10px]"></i>
              <span>ICE BSD City Hall 5-6, Jakarta</span>
            </li>
            <li class="flex items-center gap-1">
              <i class="fas fa-clock text-[#4B4B4B] text-[10px]"></i>
              <span>Gates open at 6:00 PM | Show starts at 8:00 PM</span>
            </li>
          </ul>
          <a
            class="text-xs text-[#1A2EBF] mt-1 inline-block hover:underline pointer-events-auto"
            href="#"
            >The concert will conclude on September 11, 2025.</a
          >
        </div>
        <div class="flex flex-col items-end gap-2 mt-2">
          <div class="flex items-center gap-2">
            <button
              type="button"
              class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold"
              disabled
            >
              −
            </button>
            <span class="w-4 text-center text-sm font-semibold select-none"
              >0</span
            >
            <button
              type="button"
              class="w-5 h-5 flex items-center justify-center border border-black rounded-full text-sm font-bold"
              disabled
            >
              +
            </button>
          </div>
          <button
            class="bg-gray-500 text-white text-xs font-semibold rounded px-3 py-1 cursor-not-allowed"
            type="button"
            disabled
          >
            Sold Out
          </button>
        </div>
      </div>
      <div
        class="absolute top-0 right-0 bg-gray-500 text-white text-[10px] font-semibold px-2 py-0.5 rounded-bl-lg select-none"
      >
        Sold Out
      </div>
    </article>
  </section>
</section>

  </main>

  <script>
    const tabDeskripsi = document.getElementById('tab-deskripsi');
    const tabTiket = document.getElementById('tab-tiket');
    const contentDeskripsi = document.getElementById('content-deskripsi');
    const contentTiket = document.getElementById('content-tiket');

    tabDeskripsi.addEventListener('click', () => {
      tabDeskripsi.classList.add('border-b-4', 'border-[#0B1460]', 'text-[#0B1460]');
      tabDeskripsi.classList.remove('text-gray-400');
      tabDeskripsi.setAttribute('aria-current', 'true');

      tabTiket.classList.remove('border-b-4', 'border-[#0B1460]', 'text-[#0B1460]');
      tabTiket.classList.add('text-gray-400');
      tabTiket.setAttribute('aria-current', 'false');

      contentDeskripsi.classList.remove('hidden');
      contentTiket.classList.add('hidden');
    });

    tabTiket.addEventListener('click', () => {
      tabTiket.classList.add('border-b-4', 'border-[#0B1460]', 'text-[#0B1460]');
      tabTiket.classList.remove('text-gray-400');
      tabTiket.setAttribute('aria-current', 'true');

      tabDeskripsi.classList.remove('border-b-4', 'border-[#0B1460]', 'text-[#0B1460]');
      tabDeskripsi.classList.add('text-gray-400');
      tabDeskripsi.setAttribute('aria-current', 'false');

      contentTiket.classList.remove('hidden');
      contentDeskripsi.classList.add('hidden');
    });
  </script>
 </body>
</html>
