<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>My Tickets</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    rel="stylesheet"
  />
  <style>
    /* Container */
    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 40px;
    }

    /* Header Title */
    .header-title {
      text-align: center;
      margin-bottom: 40px;
    }

    .header-title h1 {
      font-size: 2.5rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 20px;
    }

    /* Ticket Section */
    .tickets {
      display: flex;
      flex-direction: column; /* Stack the cards vertically */
      gap: 30px;
      justify-content: center;
      margin-top: 20px;
    }

    .ticket {
      background-color: #f1f1f1;
      width: 100%; /* Allow the cards to take up full width */
      max-width: 800px; /* Max width for large screens */
      border-radius: 12px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      text-align: left;
      padding: 20px;
      position: relative;
      margin: 0 auto;
    }

    .ticket img {
      width: 100%; /* Make the image take up full width */
      height: auto; /* Maintain aspect ratio */
      object-fit: cover;
      border-radius: 8px;
    }

    .ticket .ticket-info {
      margin-top: 15px;
    }

    .ticket h2 {
      font-size: 1.8rem;
      font-weight: 700;
      color: #000;
      margin-bottom: 5px;
    }

    .ticket p {
      font-size: 1rem;
      color: #777;
      margin-bottom: 10px;
    }

    /* Ticket number section */
    .ticket .ticket-id {
      position: absolute;
      bottom: 20px;
      right: 20px;
      font-size: 0.85rem;
      font-weight: 500;
      color: #333;
    }

    .ticket .barcode {
      font-size: 0.8rem;
      color: #777;
      font-family: "Courier", monospace;
    }

    /* Styling for ticket details */
    .ticket-details {
      margin-top: 15px;
      font-size: 0.9rem;
      color: #555;
    }

    .ticket-details span {
      font-weight: 600;
    }

    /* Small adjustments for responsiveness */
    @media (max-width: 768px) {
      .ticket img {
        width: 100%; /* Make the image take full width on smaller screens */
        margin-right: 0;
      }

      .ticket {
        width: 100%; /* Make the ticket cards take up full width on small screens */
        max-width: none;
      }
    }
  </style>
</head>
<body class="flex flex-col min-h-screen">
    <!-- Header -->
  <header class="bg-[#0B1460] flex items-center justify-between px-4 sm:px-6 md:px-10 py-3">
    <div class="flex items-center space-x-2 min-w-[840px]">
      <img alt="TixMeUp logo with hand gesture icon in white on blue background" class="w-8 h-8" height="32" src="{{ asset('img/logo.png') }}" width="32"/>
      <span class="text-white font-semibold text-lg select-none">TixMeUp</span>
    </div>
    <div class="flex items-center space-x-3 min-w-[180px] justify-end">
      <button aria-label="My Tickets" class="ml-4 flex items-center space-x-1 bg-[#1E2A78] hover:bg-[#2a3a9e] text-white text-sm font-semibold py-1.5 px-4 rounded-md">
    <span>
     My Tickets
    </span>
   </button>
    </div>
  </header>
  <!-- Main Content -->
  <main class="container flex-grow">
    <!-- Header Title -->
    <div class="header-title">
      <h1>My Tickets</h1>
    </div>

    <!-- Tickets Section -->
    <section class="tickets">
      <!-- Taylor Swift Ticket -->
      <div class="ticket">
        <img
          src="{{ asset('img/tickettaylor.png') }}"
          alt="Taylor Swift Concert"
          loading="lazy"
        />
      </div>

      <!-- BlackPink Ticket -->
      <div class="ticket">
        <img
          src="{{ asset('img/ticketbp.png') }}"
          alt="BlackPink Concert"
          loading="lazy"
        />
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-[#0B1A8C] text-white px-6 py-8 select-none mt-auto">
    <div
      class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-3 gap-8 text-xs leading-relaxed"
    >
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
