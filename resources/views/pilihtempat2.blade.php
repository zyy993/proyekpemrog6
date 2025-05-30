<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>TixMeUp Seating</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .seat {
            cursor: pointer;
            transition: background-color 0.3s; /* Smooth transition for color change */
        }
        .selected {
            background-color: #4CAF50; /* Green */
        }
        .disabled {
            background-color: #ccc; /* Gray */
            cursor: not-allowed;
        }
        .button-disabled {
            opacity: 0.5; /* Reduced opacity for disabled state */
        }
    </style>
    <script>
        function selectSeat(seat) {
            // If the seat is already selected, do nothing
            if (seat.classList.contains('selected')) {
                return;
            }

            // Remove 'selected' class from all seats and reset their colors
            const selectedSeats = document.querySelectorAll('.selected');
            selectedSeats.forEach(s => {
                s.classList.remove('selected');
                s.style.backgroundColor = ''; // Reset color to original
                // Reset the corresponding opposite seat
                const oppositeSeat = document.querySelector(`.seat[data-seat-name="${s.getAttribute('data-seat-name')}"]:not([data-side="${s.getAttribute('data-side')}"])`);
                if (oppositeSeat) {
                    oppositeSeat.classList.remove('selected');
                    oppositeSeat.style.backgroundColor = ''; // Reset color
                }
            });

            // Add 'selected' class to the clicked seat
            seat.classList.add('selected');
            seat.style.backgroundColor = '#4CAF50'; // Change to green or any color you prefer

            // Check if the selected seat is in Zone A, B, or D and select the opposite
            const seatName = seat.getAttribute('data-seat-name');
            const side = seat.getAttribute('data-side');
            if (seatName === 'ZONE A' || seatName === 'ZONE B' || seatName === 'ZONE D') {
                const oppositeSide = side === 'left' ? 'right' : 'left';
                const oppositeSeat = document.querySelector(`.seat[data-seat-name="${seatName}"][data-side="${oppositeSide}"]`);
                if (oppositeSeat) {
                    oppositeSeat.classList.add('selected');
                    oppositeSeat.style.backgroundColor = '#4CAF50'; // Change to green or any color you prefer
                }
            }

            // Enable the Select Seat button
            const selectSeatButton = document.getElementById('selectSeatButton');
            selectSeatButton.classList.remove('disabled', 'button-disabled');
            selectSeatButton.disabled = false; // Enable button
            selectSeatButton.style.opacity = 1; // Set opacity to 100%
        }

        function confirmSelection() {
            const selectedSeats = document.querySelectorAll('.selected');
            if (selectedSeats.length > 0) {
                const seatNames = Array.from(selectedSeats).map(seat => seat.getAttribute('data-seat-name')).join(', ');
                const confirmation = confirm(`You have selected ${seatNames}. Do you want to proceed?`);
                if (confirmation) {
                    alert('Seat confirmed!');
                } else {
                    // Deselect all selected seats and reset their colors
                    selectedSeats.forEach(seat => {
                        seat.classList.remove('selected'); // Deselect
                        seat.style.backgroundColor = ''; // Reset color
                    });
                    const selectSeatButton = document.getElementById('selectSeatButton');
                    selectSeatButton.classList.add('disabled', 'button-disabled');
                    selectSeatButton.disabled = true; // Disable button again
                    selectSeatButton.style.opacity = 0.5; // Set opacity to 50%
                }
            } else {
                alert('Please select a seat first.');
            }
        }
    </script>
</head>
<body class="bg-white">
    <!-- Header -->
    <header class="bg-[#0B1460] flex items-center justify-between px-4 sm:px-6 md:px-10 py-3">
        <div class="flex items-center space-x-2 min-w-[840px]">
            <img alt="TixMeUp logo" class="w-8 h-8" height="32" src="{{ asset('img/logo.png') }}" width="32"/>
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
                        <div class="bg-[#a00052] text-white font-bold text-sm text-center py-12 rounded-md seat" data-seat-name="ZONE A" data-side="left" onclick="selectSeat(this)">
                            ZONE A
                        </div>
                        <div class="bg-[#d6006f] text-white font-bold text-sm text-center py-12 rounded-md seat" data-seat-name="ZONE B" data-side="left" onclick="selectSeat(this)">
                            ZONE B
                        </div>
                        <div class="bg-[#e9c0c9] text-white font-bold text-sm text-center py-12 rounded-bl-lg seat" data-seat-name="ZONE D" data-side="left" onclick="selectSeat(this)">
                            ZONE D
                        </div>
                    </div>
                    <!-- Center zones -->
                    <div class="flex flex-col w-3/5 gap-1.5">
                        <div class="bg-[#80003c] text-white font-bold text-sm text-center py-28 rounded-md seat" data-seat-name="VVIP" onclick="selectSeat(this)">
                            VVIP
                        </div>
                        <div class="bg-[#d67ca0] text-white font-bold text-sm text-center py-12 rounded-b-md seat" data-seat-name="ZONE C" onclick="selectSeat(this)">
                            ZONE C
                        </div>
                    </div>
                    <!-- Right zones -->
                    <div class="flex flex-col gap-1.5 w-1/3">
                        <div class="bg-[#a00052] text-white font-bold text-sm text-center py-12 rounded-md seat" data-seat-name="ZONE A" data-side="right" onclick="selectSeat(this)">
                            ZONE A
                        </div>
                        <div class="bg-[#d6006f] text-white font-bold text-sm text-center py-12 rounded-md seat" data-seat-name="ZONE B" data-side="right" onclick="selectSeat(this)">
                            ZONE B
                        </div>
                        <div class="bg-[#e9c0c9] text-white font-bold text-sm text-center py-12 rounded-br-lg seat" data-seat-name="ZONE D" data-side="right" onclick="selectSeat(this)">
                            ZONE D
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Select Seat Button -->
        <div class="mt-4 text-center">
            <button id="selectSeatButton" onclick="confirmSelection()" class="bg-blue-500 text-white py-2 px-4 rounded button-disabled" disabled>Select Seat</button>
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
                    <img alt="BCA bank logo" class="object-contain" height="30" src="{{ asset('img/footerBCA.jpg') }}" width="80"/>
                    <img alt="BRI bank logo" class="object-contain" height="30" src="{{ asset('img/footerBRI.jpg') }}" width="80"/>
                    <img alt="Mandiri bank logo" class="object-contain" height="30" src="{{ asset('img/footerMANDIRI.jpg') }}" width="80"/>
                    <img alt="BSI bank logo" class="object-contain" height="30" src="{{ asset('img/footerBSI.jpg') }}" width="80"/>
                    <img alt="Gopay logo" class="object-contain" height="30" src="{{ asset('img/footerCIMB.jpg') }}" width="80"/>
                    <img alt="BNI bank logo" class="object-contain" height="30" src="{{ asset('img/footerBNI.jpg') }}" width="80"/>
                </div>
            </div>
        </div>
        <hr class="border-gray-600 my-6"/>
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between text-xs space-y-3 sm:space-y-0">
            <div class="flex items-center space-x-2 font-extrabold text-white">
                <img alt="TixMeUp logo" class="w-6 h-6" height="24" src="{{ asset('img/logo.png') }}" width="24"/>
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
