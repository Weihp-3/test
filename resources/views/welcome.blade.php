<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kantin Digital Sekolah</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  @else
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              sans: ['Poppins', 'sans-serif']
            },
            colors: {
              brand: {
                500: '#F97316',
                600: '#EA580C'
              }
            } // Warna Oranye Custom
          }
        }
      }
    </script>
  @endif


  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }


    .blob {
      position: absolute;
      filter: blur(40px);
      z-index: -1;
      opacity: 0.4;
    }


    .float-anim {
      animation: float 6s ease-in-out infinite;
    }


    @keyframes float {
      0% {
        transform: translateY(0px);
      }


      50% {
        transform: translateY(-20px);
      }


      100% {
        transform: translateY(0px);
      }
    }
  </style>
</head>
<body class="antialiased bg-gray-50 text-gray-800 selection:bg-orange-500 selection:text-white">
  <nav class="absolute w-full z-50 top-0 py-6">
    <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
      <div class="flex items-center gap-2">
        <div class="bg-orange-500 text-white w-10 h-10 flex items-center justify-center rounded-xl shadow-lg">
          <i class="fa-solid fa-burger text-xl"></i>
        </div>
        <span class="text-2xl font-bold tracking-tight text-gray-900">Kantin<span
            class="text-orange-500">App</span></span>
      </div>


      <div class="flex items-center gap-4">
        @if (Route::has('login'))
          @auth
            <a href="{{ url('/dashboard') }}"
              class="font-semibold text-gray-600 hover:text-orange-500 transition">Dashboard</a>
          @else
            <a href="{{ route('login') }}"
              class="hidden md:inline-block font-semibold text-gray-600 hover:text-orange-500 transition">Masuk</a>


            @if (Route::has('register'))
              <a href="{{ route('register') }}"
                class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-6 rounded-full shadow-lg hover:shadow-orange-500/30 transition transform hover:-translate-y-1">
                Daftar Sekarang
              </a>
            @endif
          @endauth
        @endif
      </div>
    </div>
  </nav>
  <div class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <div class="blob bg-purple-300 w-96 h-96 rounded-full top-0 left-0 -translate-x-1/2 -translate-y-1/2"></div>
    <div class="blob bg-orange-300 w-96 h-96 rounded-full bottom-0 right-0 translate-x-1/2 translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center pt-20">
      <div class="text-center md:text-left z-10">
        <div
          class="inline-block bg-orange-100 text-orange-600 px-4 py-1 rounded-full text-sm font-bold mb-4 border border-orange-200">
          🚀 Kantin Masa Depan
        </div>
        <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 leading-tight mb-6">
          Jajan <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-600">Lebih
            Cepat</span>, Tanpa Antre Lama.
        </h1>
        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
          Sistem pemesanan digital untuk sekolah modern. Pesan makanan, bayar pakai QR Code NISN, dan pantau gizi siswa
          dalam satu aplikasi.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
          <a href="{{ route('register') }}"
            class="bg-gray-900 text-white text-lg font-bold py-4 px-8 rounded-xl shadow-xl hover:bg-gray-800 transition flex items-center justify-center gap-2">
            <i class="fa-solid fa-user-plus"></i> Buat Akun Siswa
          </a>
          <a href="{{ route('login') }}"
            class="bg-white text-gray-900 border border-gray-200 text-lg font-bold py-4 px-8 rounded-xl hover:bg-gray-50 transition flex items-center justify-center gap-2">
            <i class="fa-solid fa-arrow-right-to-bracket"></i> Login Kasir
          </a>
        </div>
        <div class="mt-10 flex items-center justify-center md:justify-start gap-8 text-gray-500 text-sm font-semibold">
          <div class="flex items-center gap-2">
            <i class="fa-solid fa-check-circle text-green-500"></i> Cashless
          </div>
          <div class="flex items-center gap-2">
            <i class="fa-solid fa-check-circle text-green-500"></i> Real-time Stok
          </div>
          <div class="flex items-center gap-2">
            <i class="fa-solid fa-check-circle text-green-500"></i> Aman
          </div>
        </div>
      </div>
      <div class="relative z-10 hidden md:block">
        <div class="absolute inset-0 bg-gradient-to-tr from-orange-100 to-white rounded-full opacity-50 blur-xl"></div>
        <div class="relative float-anim">
          <div class="absolute -top-10 -right-10 bg-white p-4 rounded-2xl shadow-2xl transform rotate-6 z-20 w-48">
            <div class="h-32 bg-gray-900 rounded-xl flex items-center justify-center">
              <i class="fa-solid fa-qrcode text-white text-5xl"></i>
            </div>
            <div class="mt-3 text-center font-bold text-gray-800">Scan & Bayar</div>
          </div>
          <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
            alt="Delicious Burger"
            class="rounded-[3rem] shadow-2xl border-4 border-white object-cover w-full h-[500px] transform -rotate-2 hover:rotate-0 transition duration-500">
          <div
            class="absolute bottom-10 -left-10 bg-white p-4 pr-8 rounded-2xl shadow-xl flex items-center gap-4 z-30 animate-bounce"
            style="animation-duration: 3s;">
            <div class="bg-green-100 p-3 rounded-full text-green-600">
              <i class="fa-solid fa-wallet text-xl"></i>
            </div>
            <div>
              <p class="text-xs text-gray-500">Sisa Saldo</p>
              <p class="text-lg font-bold text-gray-800">Rp 50.000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="py-20 bg-white relative">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Mengapa Pakai Kantin Digital?</h2>
        <div class="h-1 w-20 bg-orange-500 mx-auto rounded-full"></div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div
          class="p-8 rounded-3xl bg-gray-50 border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition duration-300">
          <div class="w-14 h-14 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center text-2xl mb-6">
            <i class="fa-solid fa-mobile-screen"></i>
          </div>
          <h3 class="text-xl font-bold mb-3 text-gray-800">Transaksi Cepat</h3>
          <p class="text-gray-600">Tidak perlu repot bawa uang tunai. Cukup scan kartu pelajar atau input NISN,
            transaksi selesai dalam 3 detik.</p>
        </div>
        <div
          class="p-8 rounded-3xl bg-gray-50 border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition duration-300">
          <div
            class="w-14 h-14 bg-orange-100 text-orange-600 rounded-2xl flex items-center justify-center text-2xl mb-6">
            <i class="fa-solid fa-bowl-food"></i>
          </div>
          <h3 class="text-xl font-bold mb-3 text-gray-800">Menu Higienis</h3>
          <p class="text-gray-600">Semua menu terdata dengan stok real-time. Siswa bisa melihat menu favorit sebelum jam
            istirahat tiba.</p>
        </div>
        <div
          class="p-8 rounded-3xl bg-gray-50 border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition duration-300">
          <div class="w-14 h-14 bg-green-100 text-green-600 rounded-2xl flex items-center justify-center text-2xl mb-6">
            <i class="fa-solid fa-chart-line"></i>
          </div>
          <h3 class="text-xl font-bold mb-3 text-gray-800">Laporan Keuangan</h3>
          <p class="text-gray-600">Admin dan Kasir dapat memantau omset penjualan harian secara otomatis tanpa hitung
            manual.</p>
        </div>
      </div>
    </div>
  </section>
  <footer class="bg-gray-900 text-white py-12 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center">
      <div class="mb-4 md:mb-0">
        <span class="text-2xl font-bold">Kantin<span class="text-orange-500">App</span></span>
        <p class="text-gray-400 text-sm mt-2">© {{ date('Y') }} Project RPL Sekolah.</p>
      </div>
      <div class="flex gap-6">
        <a href="#" class="text-gray-400 hover:text-white transition"><i
            class="fa-brands fa-github text-xl"></i></a>
        <a href="#" class="text-gray-400 hover:text-white transition"><i
            class="fa-brands fa-instagram text-xl"></i></a>
      </div>
    </div>
  </footer>
</body>
</html>

