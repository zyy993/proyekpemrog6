<html lang="en">
 <head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>TixMeUp</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
   rel="stylesheet"
  />
  <style>
   /* Custom font for charts */
   .chart-text {
    font-family: Arial, sans-serif;
    font-size: 10px;
    fill: black;
    user-select: none;
   }
   .chart-title {
    font-family: Arial, sans-serif;
    font-size: 14px;
    font-weight: 600;
    fill: black;
    user-select: none;
    text-anchor: middle;
   }
   .chart-title-pink {
    font-family: Arial, sans-serif;
    font-size: 14px;
    font-weight: 700;
    fill: #ff69b4;
    user-select: none;
    text-anchor: middle;
   }
   .bar-label {
    font-family: Arial, sans-serif;
    font-size: 9px;
    fill: black;
    user-select: none;
    text-anchor: middle;
    line-height: 1.1;
   }
   .bar-value {
    font-family: Arial, sans-serif;
    font-size: 11px;
    fill: black;
    user-select: none;
    text-anchor: middle;
    font-weight: 600;
   }
   .axis-label {
    font-family: Arial, sans-serif;
    font-size: 11px;
    fill: black;
    user-select: none;
    text-anchor: middle;
    font-weight: 600;
   }
   .axis-label-vertical {
    font-family: Arial, sans-serif;
    font-size: 11px;
    fill: black;
    user-select: none;
    text-anchor: middle;
    font-weight: 600;
    writing-mode: tb;
   }
  </style>
 </head>
 <body class="bg-white text-black">
  <!-- Header -->
  <header class="bg-blue-900 flex items-center justify-between px-4 py-2">
   <div class="flex items-center space-x-2">
    <img
     alt="White hand peace sign icon on blue background"
     class="w-6 h-6"
     height="24"
     src="https://storage.googleapis.com/a1aa/image/dd516059-6b9c-461b-a91a-560b9cbce5e2.jpg"
     width="24"
    />
    <span class="text-white font-semibold text-lg select-none">TixMeUp</span>
   </div>
   <button aria-label="Menu" class="text-white text-xl">
    <i class="fas fa-caret-down"></i>
   </button>
  </header>
  <main class="max-w-4xl mx-auto p-4 space-y-8">
   <!-- Card for Jumlah Penonton -->
   <section class="border border-gray-300 rounded-lg p-6 shadow-sm">
    <svg
     aria-label="Bar chart showing concert attendance in Indonesia per event"
     class="block mx-auto"
     height="350"
     role="img"
     viewBox="0 0 700 350"
     width="100%"
     style="max-width: 700px"
    >
     <!-- Title -->
     <text class="chart-title" dominant-baseline="middle" x="350" y="30">
      Jumlah Penonton Konser di Indonesia per Event
     </text>
     <!-- Horizontal grid lines -->
     <line stroke="#ccc" stroke-width="1" x1="100" x2="650" y1="320" y2="320" />
     <line stroke="#ccc" stroke-width="1" x1="100" x2="650" y1="280" y2="280" />
     <line stroke="#ccc" stroke-width="1" x1="100" x2="650" y1="240" y2="240" />
     <line stroke="#ccc" stroke-width="1" x1="100" x2="650" y1="200" y2="200" />
     <line stroke="#ccc" stroke-width="1" x1="100" x2="650" y1="160" y2="160" />
     <line stroke="#ccc" stroke-width="1" x1="100" x2="650" y1="120" y2="120" />
     <line stroke="#ccc" stroke-width="1" x1="100" x2="650" y1="80" y2="80" />
     <line stroke="#ccc" stroke-width="1" x1="100" x2="650" y1="40" y2="40" />
     <!-- Y axis labels -->
     <text
      class="chart-text axis-label"
      dominant-baseline="middle"
      text-anchor="end"
      x="90"
      y="320"
     >
      0
     </text>
     <text
      class="chart-text axis-label"
      dominant-baseline="middle"
      text-anchor="end"
      x="90"
      y="280"
     >
      20,000
     </text>
     <text
      class="chart-text axis-label"
      dominant-baseline="middle"
      text-anchor="end"
      x="90"
      y="240"
     >
      40,000
     </text>
     <text
      class="chart-text axis-label"
      dominant-baseline="middle"
      text-anchor="end"
      x="90"
      y="200"
     >
      60,000
     </text>
     <text
      class="chart-text axis-label"
      dominant-baseline="middle"
      text-anchor="end"
      x="90"
      y="160"
     >
      80,000
     </text>
     <text
      class="chart-text axis-label"
      dominant-baseline="middle"
      text-anchor="end"
      x="90"
      y="120"
     >
      100,000
     </text>
     <text
      class="chart-text axis-label"
      dominant-baseline="middle"
      text-anchor="end"
      x="90"
      y="80"
     >
      120,000
     </text>
     <text
      class="chart-text axis-label"
      dominant-baseline="middle"
      text-anchor="end"
      x="90"
      y="40"
     >
      140,000
     </text>
     <!-- Y axis label vertical -->
     <text class="chart-text" dominant-baseline="middle" font-weight="600" text-anchor="middle" transform="rotate(-90 15 130)" x="15" y="130">
      Jumlah Penonton
     </text>
     <!-- Bars and labels with equal spacing -->
     <!-- Bar width and spacing -->
     <!-- Each bar group width: 80px, bar width: 50px, gap: 30px -->
     <!-- BLACKPINK -->
     <rect fill="#ff69b4" height="280" width="50" x="110" y="40" />
     <text class="bar-value" x="135" y="35">140,000</text>
     <text class="bar-label" x="135" y="340">BLACKPINK</text>
     <!-- EXO-SC -->
     <rect fill="#2563eb" height="30" width="50" x="190" y="290" />
     <text class="bar-value" x="215" y="285">15,000</text>
     <text class="bar-label" x="215" y="340">EXO-SC</text>
     <!-- IU -->
     <rect fill="#7c3aed" height="24" width="50" x="270" y="296" />
     <text class="bar-value" x="295" y="292">12,000</text>
     <text class="bar-label" x="295" y="340">IU</text>
     <!-- Ariana Grande -->
     <rect fill="#f97316" height="18" width="50" x="350" y="302" />
     <text class="bar-value" x="375" y="298">9,000</text>
     <text class="bar-label" x="375" y="340">Ariana Grande</text>
     <!-- G-Dragon -->
     <rect fill="#22c55e" height="33" width="50" x="430" y="287" />
     <text class="bar-value" x="455" y="283">16,500</text>
     <text class="bar-label" x="455" y="340">G-Dragon</text>
     <!-- SEVENTEEN -->
     <rect fill="#facc15" height="80" width="50" x="510" y="240" />
     <text class="bar-value" x="535" y="235">50,000</text>
     <text class="bar-label" x="535" y="340">SEVENTEEN</text>
     <!-- X axis label -->
     <text
      class="chart-title axis-label"
      dominant-baseline="middle"
      x="380"
      y="370"
     >
      Event Konser
     </text>
    </svg>
   </section>
   <!-- Card for Analisis -->
   <section class="border border-gray-300 rounded-lg p-6 shadow-sm">
    <h3 class="font-bold text-sm mb-2 text-center">
     Penjualan Tiket per Minggu - BLACKPINK
    </h3>
    <svg
     aria-label="Line chart showing ticket sales per week for BLACKPINK"
     class="block mx-auto mb-6"
     height="260"
     role="img"
     viewBox="0 0 700 260"
     width="100%"
     style="max-width: 700px"
    >
     <!-- Horizontal grid lines -->
     <line stroke="#ccc" stroke-width="1" x1="100" x2="650" y1="220" y2="220" />
     <line stroke="#ccc" stroke-width="1" x1="100" x2="650" y1="180" y2="180" />
     <line stroke="#ccc" stroke-width="1" x1="100" x2="650" y1="140" y2="140" />
     <line stroke="#ccc" stroke-width="1" x1="100" x2="650" y1="100" y2="100" />
     <line stroke="#ccc" stroke-width="1" x1="100" x2="650" y1="60" y2="60" />
     <line stroke="#ccc" stroke-width="1" x1="100" x2="650" y1="20" y2="20" />
     <!-- Y axis labels -->
     <text
      class="chart-text axis-label"
      dominant-baseline="middle"
      text-anchor="end"
      x="90"
      y="220"
     >
      0
     </text>
     <text
      class="chart-text axis-label"
      dominant-baseline="middle"
      text-anchor="end"
      x="90"
      y="180"
     >
      10,000
     </text>
     <text
      class="chart-text axis-label"
      dominant-baseline="middle"
      text-anchor="end"
      x="90"
      y="140"
     >
      20,000
     </text>
     <text
      class="chart-text axis-label"
      dominant-baseline="middle"
      text-anchor="end"
      x="90"
      y="100"
     >
      30,000
     </text>
     <text
      class="chart-text axis-label"
      dominant-baseline="middle"
      text-anchor="end"
      x="90"
      y="60"
     >
      40,000
     </text>
     <text
      class="chart-text axis-label"
      dominant-baseline="middle"
      text-anchor="end"
      x="90"
      y="20"
     >
      50,000
     </text>
     <!-- Y axis label vertical -->
     <text class="chart-text" dominant-baseline="middle" font-weight="600" text-anchor="middle" transform="rotate(-90 15 130)" x="15" y="130">
      Jumlah Tiket Terjual
     </text>
     <!-- X axis labels with equal spacing -->
     <text
      class="chart-text axis-label"
      dominant-baseline="middle"
      text-anchor="middle"
      x="140"
      y="240"
     >
      Minggu 1
     </text>
     <text
      class="chart-text axis-label"
      dominant-baseline="middle"
      text-anchor="middle"
      x="280"
      y="240"
     >
      Minggu 2
     </text>
     <text
      class="chart-text axis-label"
      dominant-baseline="middle"
      text-anchor="middle"
      x="420"
      y="240"
     >
      Minggu 3
     </text>
     <text
      class="chart-text axis-label"
      dominant-baseline="middle"
      text-anchor="middle"
      x="560"
      y="240"
     >
      Minggu 4
     </text>
     <!-- X axis label -->
     <text class="chart-title axis-label" dominant-baseline="middle" x="350" y="270">
      Minggu
     </text>
     <!-- Line with updated points for values 50000, 40000, 30000, 20000 -->
     <polyline
      fill="none"
      points="140,40 280,80 420,120 560,160"
      stroke="#ff69b4"
      stroke-width="2"
     />
     <!-- Points -->
     <circle cx="140" cy="40" fill="#ff69b4" r="4" />
     <circle cx="280" cy="80" fill="#ff69b4" r="4" />
     <circle cx="420" cy="120" fill="#ff69b4" r="4" />
     <circle cx="560" cy="160" fill="#ff69b4" r="4" />
    </svg>
    <hr class="border-t border-gray-300 mb-4" />
    <div class="text-sm">
     <p class="font-bold mb-1">Ticket</p>
     <p>Total Tiket Terjual: 140,000 tiket</p>
<p>Total Nilai Penjualan: Rp 56,000,000,000 (asumsi rata-rata harga tiket Rp 400,000)</p>
<p>Persentase Tiket Terjual: 100% (kapasitas penuh)</p>
<p>Tingkat Penjualan: Sangat Tinggi (ludes dalam waktu singkat)</p>
    </div>
     <hr class="border-t border-gray-300 mb-4" />
    <div class="text-sm">
     <p class="font-bold mb-1">Penjualan</p>
     <p>VIP: 15,000 tiket (Rp 9,000,000,000)</p>
<p>Regular: 85,000 tiket (Rp 34,000,000,000)</p>
<p>Standing: 40,000 tiket (Rp 13,000,000,000)</p>
<p>Tingkat Penjualan: Sangat Tinggi (ludes dalam waktu singkat)</p>
<p>   </p>
<p>Online: 90,000 tiket (Rp 36,000,000,000)
</p>
<p>Outlet: 50,000 tiket (Rp 20,000,000,000)</p>
<p>   </p>
<p>Presale: 40,000 tiket (Rp 16,000,000,000)</p>
<p>General Sale: 100,000 tiket (Rp 40,000,000,000)</p>
    </div>
         <hr class="border-t border-gray-300 mb-4" />
    <div class="text-sm">
     <p class="font-bold mb-1">Analisis Tambahan</p>
     <p>-Grafik penjualan menunjukkan lonjakan signifikan saat presale.</p>
<p>-Wilayah penjualan terbanyak: Jakarta, Surabaya, Bandung.</p>
<p>-Jenis tiket terlaris: Regular</p>
<p>-Catatan: Ada promosi early bird di presale dan kerjasama dengan e-commerce besar.</p>
<p>-Penjualan tiket konser BLACKPINK sangat sukses, memenuhi kapasitas dengan cepat.
</p>
<p>-Rekomendasi: Perlu tingkatkan kapasitas venue dan integrasi penjualan online yang lebih baik.</p>
    </div>
   </section>
  </main>
 </body>
</html>
