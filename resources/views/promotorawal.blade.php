<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>TixMeUp</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Pacifico&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }
    .font-pacifico {
      font-family: 'Pacifico', cursive;
    }
  </style>
</head>
<body class="bg-white text-gray-900">

  <!-- Header -->
  <header class="bg-[#0B1460] flex items-center justify-between px-4 sm:px-6 md:px-10 py-3">
    <div class="flex items-center space-x-2 min-w-[840px]">
      <img src="https://via.placeholder.com/32" alt="Logo" class="w-8 h-8" />
      <span class="text-white font-semibold text-lg select-none">TixMeUp</span>
    </div>
    <div class="flex items-center space-x-3 min-w-[180px] justify-end">
      <button id="myEventsBtnHeader" aria-label="My Tickets" class="ml-4 flex items-center space-x-1 bg-[#1E2A78] hover:bg-[#2a3a9e] text-white text-sm font-semibold py-1.5 px-4 rounded-md">
        <span>My Events</span>
      </button>
    </div>
  </header>

  <!-- Carousel -->
  <div class="relative border-b border-[#00108b]">
    <img src="https://via.placeholder.com/1200x250" alt="Banner" class="w-full object-cover max-h-[250px]" />
    <button class="absolute top-1/2 left-2 -translate-y-1/2 bg-white bg-opacity-50 rounded-full p-2 text-2xl text-[#00108b]">
      <i class="fas fa-chevron-left"></i>
    </button>
    <button class="absolute top-1/2 right-2 -translate-y-1/2 bg-white bg-opacity-50 rounded-full p-2 text-2xl text-[#00108b]">
      <i class="fas fa-chevron-right"></i>
    </button>
  </div>

  <!-- Event Filter Buttons -->
  <section class="max-w-7xl mx-auto mt-6 px-4 flex space-x-4">
    <button id="allEventsBtn" class="border border-gray-900 rounded-full px-4 py-1.5 text-sm font-semibold text-gray-900 hover:bg-gray-100" type="button">
      All events
    </button>
    <button id="myEventsBtn" class="border border-gray-900 rounded-full px-4 py-1.5 text-sm font-semibold text-gray-900 hover:bg-gray-100" type="button">
      My Events
    </button>
  </section>

  <!-- Event Cards Grid -->
  <section id="eventsGrid" class="max-w-7xl mx-auto mt-6 px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Event cards will be injected here via JavaScript -->
  </section>

  <!-- Add Event Button -->
  <section class="max-w-7xl mx-auto mt-6 px-4 flex justify-end">
    <button class="border border-gray-900 rounded-full px-6 py-1.5 text-sm font-semibold italic text-gray-900 hover:bg-gray-100" type="button">
      add events ...
    </button>
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


  <!-- JavaScript Logic -->
  <script>
    const eventsGrid = document.getElementById('eventsGrid');
    const allEventsBtn = document.getElementById('allEventsBtn');
    const myEventsBtn = document.getElementById('myEventsBtn');
    const myEventsBtnHeader = document.getElementById('myEventsBtnHeader');

    const createCard = (title, time, location, image) => `
      <article class="border border-gray-300 rounded-lg overflow-hidden shadow-sm flex flex-col">
        <img src="${image}" alt="${title}" class="w-full h-40 object-cover" />
        <div class="p-3 flex flex-col flex-grow">
          <h3 class="text-xs font-bold uppercase text-center mb-2">${title}</h3>
          <div class="flex justify-between items-center text-xs text-gray-500 mb-1 px-1">
            <div>
              <div class="flex items-center space-x-1"><i class="far fa-clock"></i><span>${time}</span></div>
              <div class="flex items-center space-x-1"><i class="fas fa-map-marker-alt"></i><span>${location}</span></div>
            </div>
            <button class="bg-blue-700 text-white text-xs px-3 py-1 rounded hover:bg-blue-800" type="button">More Info</button>
          </div>
        </div>
      </article>
    `;

    const allEvents = [
      createCard('BLACKPINK | DEADLINE', '25.11.10 06.00 PM', 'Jakarta', 'https://storage.googleapis.com/a1aa/image/ac1fd20d-4a46-499f-bb31-cf37f1131787.jpg'),
      createCard('Prambanan JAZZ 2025', '17.08.25 07.00 PM', 'Yogyakarta', 'https://storage.googleapis.com/a1aa/image/1db0d2c4-ba79-4a70-47a2-660bee7349f0.jpg'),
      createCard('NCT DREAM TOUR', '10.02.25 08.00 PM', 'Seoul', 'https://storage.googleapis.com/a1aa/image/dbe0f70d-8fea-4653-7209-09ffe57570e2.jpg'),
      createCard('KOMIKCON FEST 2025', '05.09.25 01.00 PM', 'Bandung', 'https://via.placeholder.com/400x200?text=Komikcon'),
      createCard('DWP FESTIVAL', '31.12.25 10.00 PM', 'Jakarta', 'https://via.placeholder.com/400x200?text=DWP'),
      createCard('JogjaROCKarta', '20.11.25 07.00 PM', 'Yogyakarta', 'https://via.placeholder.com/400x200?text=JogjaRock')
    ];

    const myEvents = [
      createCard('BLACKPINK | DEADLINE', '25.11.10 06.00 PM', 'Jakarta', 'https://storage.googleapis.com/a1aa/image/ac1fd20d-4a46-499f-bb31-cf37f1131787.jpg'),
      createCard('Prambanan JAZZ 2025', '17.08.25 07.00 PM', 'Yogyakarta', 'https://storage.googleapis.com/a1aa/image/1db0d2c4-ba79-4a70-47a2-660bee7349f0.jpg')
    ];

    function renderEvents(events) {
      eventsGrid.innerHTML = events.join('');
    }

    allEventsBtn.addEventListener('click', () => renderEvents(allEvents));
    myEventsBtn.addEventListener('click', () => renderEvents(myEvents));
    myEventsBtnHeader.addEventListener('click', () => renderEvents(myEvents));

    // Default load all events
    renderEvents(allEvents);
  </script>

</body>
</html>
