<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
    TixMeUp Bill
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
    /* Custom font for the page */
    body {
      font-family: Arial, sans-serif;
    }
  </style>
</head>
<body class="bg-white">
<!-- Header -->
<header class="bg-[#0B1460] flex items-center justify-between px-4 sm:px-6 md:px-10 py-3">
  <div class="flex items-center space-x-2 min-w-[840px]">
    <img alt="TixMeUp logo with hand gesture icon in white on blue background" class="w-8 h-8" height="32" src="{{ asset('img/logo.png') }}" width="32"/>
    <span class="text-white font-semibold text-lg select-none">TixMeUp</span>
  </div>
  <div class="flex items-center space-x-3 min-w-[180px] justify-end">
    <button aria-label="Options" class="ml-4 flex items-center space-x-1 bg-[#1E2A78] hover:bg-[#2a3a9e] text-white text-sm font-semibold py-1.5 px-4 rounded-md">
      <i class="fas fa-chevron-down text-xs"></i>
    </button>
  </div>
</header>
  <main class="max-w-4xl mx-auto p-4">
    <div class="bg-white border border-[#0B1460] rounded-md shadow-md p-6 mb-6 select-none" style="font-family: Arial, sans-serif">
      <h1 class="text-center font-extrabold text-xl mb-6">
        Your Bill
      </h1>
      <section class="bg-[#0B1460] rounded-md p-6 mb-6 text-white">
        <div class="flex items-center mb-4">
          <img alt="TixMeUp logo, white stylized hand icon on blue background" class="w-8 h-8 mr-2" height="32" src="{{ asset('img/logo.png') }}" width="32"/>
          <span class="font-semibold text-base">
            TixMeUp
          </span>
        </div>
        <dl class="grid grid-cols-[auto_1fr] gap-x-2 gap-y-1 text-sm leading-tight">
          <dt class="font-semibold">
            Event
          </dt>
          <dd>
            : BLACKPINK | DEADLINE
          </dd>
          <dt class="font-semibold">
            Class/Package
          </dt>
          <dd>
            : VVIP,102
          </dd>
          <dt class="font-semibold">
            Price
          </dt>
          <dd>
            : IDR 4.410.250
          </dd>
          <dt class="font-semibold">
            Number of Ticket(s)
          </dt>
          <dd>
            : 1
          </dd>
          <dt class="font-semibold">
            Event Date
          </dt>
          <dd>
            : November 11, 2025
          </dd>
          <dt class="font-semibold">
            Event Time
          </dt>
          <dd>
            : 05:00 PM
          </dd>
          <dt class="font-semibold">
            Venue
          </dt>
          <dd>
            : Gelora Bung Karno Stadium, Jakarta
          </dd>
          <dt class="font-semibold">
            Promotor
          </dt>
          <dd>
            : iMe ID
          </dd>
        </dl>
      </section>
      <section class="bg-white border border-gray-300 rounded-md p-4" style="font-family: Arial, sans-serif">
        <h2 class="font-extrabold text-center mb-4 text-2xl text-gray-900">
          Attendee Info
        </h2>
        <form class="space-y-3 text-xs text-gray-700">
          <div class="flex items-center">
            <label class="w-28 font-semibold" for="fullname">
              Full Name
            </label>
            <span class="mr-2">:</span>
            <input class="flex-1 bg-gray-200 rounded border border-gray-200 px-2 py-1 text-xs text-gray-500 focus:outline-none focus:ring-1 focus:ring-blue-500" id="fullname" name="fullname" placeholder="Full Name" type="text"/>
          </div>
          <div class="flex items-center">
            <label class="w-28 font-semibold" for="email">
              Email
            </label>
            <span class="mr-2">:</span>
            <input class="flex-1 bg-gray-200 rounded border border-gray-200 px-2 py-1 text-xs text-gray-500 focus:outline-none focus:ring-1 focus:ring-blue-500" id="email" name="email" placeholder="Email" type="email"/>
          </div>
          <div class="flex items-center">
            <label class="w-28 font-semibold" for="phone">
              Phone Number
            </label>
            <span class="mr-2">:</span>
            <input class="flex-1 bg-gray-200 rounded border border-gray-200 px-2 py-1 text-xs text-gray-500 focus:outline-none focus:ring-1 focus:ring-blue-500" id="phone" name="phone" placeholder="Phone Number" type="tel"/>
          </div>
          <div class="flex items-center">
            <label class="w-28 font-semibold" for="address">
              Address
            </label>
            <span class="mr-2">:</span>
            <input class="flex-1 bg-gray-200 rounded border border-gray-200 px-2 py-1 text-xs text-gray-500 focus:outline-none focus:ring-1 focus:ring-blue-500" id="address" name="address" placeholder="Address" type="text"/>
          </div>
        </form>
      </section>
    </div>
    <!-- Payment Section -->
    <section class="max-w-3xl mx-auto flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
      <div class="relative w-full sm:w-72">
        <select
          aria-label="Bank selection"
          id="bankSelect"
          class="w-full appearance-none rounded border border-gray-300 bg-white py-2 pl-3 pr-10 text-xs text-gray-700 font-semibold"
        >
          <option value="">Bank selection</option>
          <option value="BCA">BCA</option>
          <option value="BRI">BRI</option>
          <option value="Mandiri">Mandiri</option>
          <option value="BSI">BSI</option>
          <option value="CIMB">CIMB</option>
          <option value="BNI">BNI</option>
        </select>
        <i
          aria-hidden="true"
          class="fas fa-chevron-down absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none"
        ></i>
      </div>
      <div
        class="w-full sm:w-auto flex flex-col text-xs font-semibold text-black border border-gray-300 rounded-lg overflow-hidden shadow-md"
        style="min-width: 220px;"
      >
        <div
          class="flex justify-between px-5 py-2 border-b border-gray-300 bg-white"
          style="height: 36px;"
        >
          <span class="text-gray-700">Ticket</span>
          <span class="text-gray-700">4.375.000</span>
        </div>
        <div
          class="flex justify-between px-5 py-2 border-b border-gray-300 bg-white"
          style="height: 36px;"
        >
          <span class="text-gray-700">TAX</span>
          <span class="text-gray-700">656.250</span>
        </div>
        <div
          class="flex justify-between px-5 py-2 bg-white font-bold text-black rounded-b-lg"
          style="height: 36px;"
        >
          <span>Complete</span>
          <span>5.031.000</span>
        </div>
      </div>
    </section>
    <!-- Make Payment Button -->
    <div class="max-w-3xl mx-auto flex justify-center">
      <button id="makePaymentBtn" class="bg-[#607a9f] text-white font-semibold rounded-md py-2 px-10 select-none" type="button">
        Make Payment
      </button>
    </div>
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
  <script>
    document.getElementById('makePaymentBtn').addEventListener('click', function() {
      const bankSelect = document.getElementById('bankSelect');
      const selectedBank = bankSelect.value;
      if (!selectedBank) {
        alert('Please select a bank before making payment.');
        return;
      }
      alert(`You have selected ${selectedBank} bank for payment.`);
    });
  </script>
</body>
</html>
