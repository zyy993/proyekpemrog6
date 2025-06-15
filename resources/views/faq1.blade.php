<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   TixMeUp FAQ
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
 <body class="bg-white text-black">
<!-- Navbar -->
<nav class="bg-[#00108b] flex items-center justify-between px-6 py-3">
    <div class="flex items-center space-x-2 min-w-[840px]">
        <img alt="TixMeUp logo with hand gesture icon in white on blue background" class="w-8 h-8" height="32"
            src="{{ asset('img/logo.png') }}" width="32" />
        <span class="text-white font-semibold text-lg select-none">TixMeUp</span>
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
        <li><a href="#" class="hover:underline">Logout</a></li>
    </ul>
</div>

<script>
    // JavaScript to toggle the visibility of Admin and Promotor options
    document.getElementById('toggleAdminPromotor').addEventListener('click', function() {
        const adminPromotorList = document.getElementById('adminPromotorList');
        adminPromotorList.classList.toggle('hidden'); // Toggle the 'hidden' class
    });
</script>

    </div>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const toggle = document.getElementById('sidebarToggle');
            const close = document.getElementById('closeSidebar');
            toggle.addEventListener('click', () => {
                sidebar.classList.remove('translate-x-full');
            });
            close.addEventListener('click', () => {
                sidebar.classList.add('translate-x-full');
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
  <!-- Main content -->
  <main class="max-w-4xl mx-auto px-4 sm:px-6 md:px-10 py-6">
   <section class="space-y-6" id="faq-section">
    <!-- FAQ items will be inserted here by JS -->
   </section>
   <!-- Live Chat Button (positioned above the footer) -->
<div class="flex justify-start px-4 mt-10">
  <button
    class="flex items-center space-x-2 bg-[#1E2A78] text-white px-4 py-2 rounded-full shadow-lg hover:bg-[#2a3a9e] text-sm"
    onclick="alert('Live Chat akan segera tersedia...')"
  >
    <i class="fas fa-comments text-lg"></i>
    <span>Live Chat</span>
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
  const faqs = [
    {
      question: "Tiketnya beli di mana nih yang resmi?",
      answer1: "Tiket cuma dijual di platform resmi yang udah ditunjuk promotor. Hati-hati ya, jangan beli dari calo atau link mencurigakan.",
      answer2: "Tickets are only available through the official ticketing platforms appointed by the promoter. Avoid buying from third parties or unverified links.",
      expanded: false,
    },
    {
      question: "Bisa milih tempat duduk nggak?",
      answer1: "Tergantung jenis tiketnya. Kalau tiket duduk (seating), kamu bisa pilih seat. Tapi kalau kategori festival/standing, ya bebas berdiri.",
      answer2: "It depends on the ticket category. For seating tickets, you can choose available seats. Festival/standing sections are free-standing.",
      expanded: false,
    },
    {
      question: "Kalau nggak jadi nonton, tiketnya bisa refund?",
      answer1: "Umumnya tidak bisa refund kecuali konser dibatalkan secara resmi oleh promotor. Jadi, pastikan jadwal kamu sebelum beli tiket, ya!",
      answer2: "Generally, tickets are non-refundable unless the event is officially canceled by the promoter. Please make sure of your schedule before purchasing.",
      expanded: false,
    },
    {
      question: "Kalau konser dibatalin, gimana refund-nya?",
      answer1: "Kalau konser dibatalkan, proses refund akan diumumkan lewat kanal resmi promotor dan platform tiket. Uangnya bakal dikembalikan sesuai metode pembayaran.",
      answer2: "If the event is canceled, the refund process will be announced via the promoters and ticketing platform’s official channels. The amount will be refunded using your original payment method.",
      expanded: false,
    },
    {
      question: "Udah bayar tapi tiketnya belum masuk email. Help!",
      answer1: "Sabar dulu 1×24 jam, terus cek folder spam/promosi. Kalau tetap nggak ada, langsung hubungi customer service platform tiket.",
      answer2: "Wait up to 24 hours and check your spam/promotions folder. Still nothing? Contact the ticketing platform’s customer service.",
      expanded: false,
    },
    {
      question: "Nama pemesan bisa diganti nggak sih?",
      answer1: "Sayangnya nggak bisa. Jadi pastiin datanya bener sebelum checkout ya!",
      answer2: "Unfortunately, no. Please double-check your details before completing the purchase.",
      expanded: false,
    },
  ];

  const faqSection = document.getElementById("faq-section");

  function createFaqItem(faq, index) {
    const article = document.createElement("article");
    article.className = "border-b border-black pb-4";

    const headerDiv = document.createElement("div");
    headerDiv.className = "flex justify-between items-center";

    const h2 = document.createElement("h2");
    h2.className = "font-semibold text-base leading-tight max-w-[75%]";
    h2.textContent = faq.question;

    const btnsDiv = document.createElement("div");
    btnsDiv.className = "flex items-center space-x-2";

    const toggleBtn = document.createElement("button");
    toggleBtn.type = "button";
    toggleBtn.className = "text-[#5a6f8f] hover:text-[#3f4f6f] p-1 rounded select-none";
    toggleBtn.setAttribute("aria-label", faq.expanded ? `Collapse FAQ: ${faq.question}` : `Expand FAQ: ${faq.question}`);
    toggleBtn.setAttribute("aria-expanded", faq.expanded);

    const toggleIcon = document.createElement("i");
    toggleIcon.className = faq.expanded ? "fas fa-chevron-up text-[14px]" : "fas fa-chevron-down text-[14px]";
    toggleBtn.appendChild(toggleIcon);

    let contentDiv;

    toggleBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      faq.expanded = !faq.expanded;
      toggleBtn.setAttribute("aria-expanded", faq.expanded);
      toggleBtn.setAttribute("aria-label", faq.expanded ? `Collapse FAQ: ${faq.question}` : `Expand FAQ: ${faq.question}`);
      if (faq.expanded) {
        contentDiv.classList.remove("hidden");
        toggleIcon.className = "fas fa-chevron-up text-[14px]";
      } else {
        contentDiv.classList.add("hidden");
        toggleIcon.className = "fas fa-chevron-down text-[14px]";
      }
    });

    btnsDiv.appendChild(toggleBtn);
    headerDiv.appendChild(h2);
    headerDiv.appendChild(btnsDiv);

    contentDiv = document.createElement("div");
    contentDiv.id = `faq-content-${index}`;
    contentDiv.className = faq.expanded ? "mt-2" : "hidden mt-2";

    const p1 = document.createElement("p");
    p1.className = "text-sm leading-snug"; // tidak ditebalkan
    p1.textContent = faq.answer1;

    const p2 = document.createElement("p");
    p2.className = "mt-1 text-xs italic leading-snug text-gray-700";
    p2.textContent = faq.answer2;

    contentDiv.appendChild(p1);
    contentDiv.appendChild(p2);

    article.appendChild(headerDiv);
    article.appendChild(contentDiv);

    return article;
  }

  function renderFaqs() {
    faqSection.innerHTML = "";
    faqs.forEach((faq, index) => {
      const faqItem = createFaqItem(faq, index);
      faqSection.appendChild(faqItem);
    });
  }

  renderFaqs();
</script>
 </body>
</html>
