<!DOCTYPE html>
<html lang="id">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Kantin Digital</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-50">
  <div class="min-h-screen flex">
    <div class="hidden lg:block w-1/2 relative bg-gray-900">
      <img      src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
        alt="Healthy Food" class="absolute inset-0 w-full h-full object-cover opacity-60">
      <div class="absolute inset-0 flex flex-col justify-center px-12 text-white z-10">
        <div class="mb-6">
          <div class="bg-orange-500 w-12 h-12 flex items-center justify-center rounded-xl shadow-lg mb-4">
            <i class="fa-solid fa-burger text-2xl"></i>
          </div>
          <h2 class="text-4xl font-bold mb-4">Nutrisi Baik untuk<br>Prestasi Terbaik.</h2>
          <p class="text-gray-200 text-lg leading-relaxed">
            Sistem kantin digital mempermudah transaksi siswa, guru, dan staff sekolah. Cepat, Higienis, dan Cashless.
          </p>
        </div>
        <div class="mt-8 flex items-center gap-4">
          <div class="flex -space-x-4">
            <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=12"
              alt="User">
            <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=32"
              alt="User">
            <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=53"
              alt="User">
          </div>
          <p class="text-sm font-medium text-gray-300">Bergabung dengan 500+ Siswa</p>
        </div>
      </div>
    </div>
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-white">
      <div class="w-full max-w-md space-y-8">
        <div class="text-center">
          <a href="/" class="inline-flex items-center gap-2 mb-6 group">
            <div
              class="bg-orange-100 text-orange-500 w-8 h-8 flex items-center justify-center rounded-lg group-hover:bg-orange-500 group-hover:text-white transition">
              <i class="fa-solid fa-arrow-left"></i>
            </div>
            <span class="text-gray-500 font-medium text-sm group-hover:text-orange-500 transition">Kembali ke
              Beranda</span>
          </a>
          <h2 class="text-3xl font-bold text-gray-900">Selamat Datang 👋</h2>
          <p class="mt-2 text-gray-500">Silakan masukkan email dan password Anda.</p>
        </div>
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
          @csrf
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Sekolah</label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                <i class="fa-solid fa-envelope"></i>
              </div>
              <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                class="pl-10 block w-full rounded-xl border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500 py-3 transition"
                placeholder="nama@sekolah.sch.id">
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>
          <div>
            <div class="flex justify-between items-center mb-1">
              <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
              @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}"
                  class="text-sm font-medium text-orange-500 hover:text-orange-600 hover:underline">
                  Lupa Password?
                </a>
              @endif
            </div>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                <i class="fa-solid fa-lock"></i>
              </div>
              <input id="password" type="password" name="password" required
                class="pl-10 block w-full rounded-xl border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500 py-3 transition"
                placeholder="••••••••">
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>
          <div class="flex items-center">
            <input id="remember_me" type="checkbox" name="remember"
              class="h-4 w-4 text-orange-500 focus:ring-orange-500 border-gray-300 rounded">
            <label for="remember_me" class="ml-2 block text-sm text-gray-700">Ingat Saya</label>
          </div>
          <button type="submit"
            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-bold text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 transition transform hover:-translate-y-0.5">
            Masuk Sekarang
          </button>
          <div class="relative my-6">
            <div class="absolute inset-0 flex items-center">
              <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center text-sm">
              <span class="px-2 bg-white text-gray-500">atau</span>
            </div>
          </div>
          <div class="text-center">
            <p class="text-sm text-gray-600">
              Belum punya akun?
              <a href="{{ route('register') }}" class="font-bold text-orange-500 hover:text-orange-600 hover:underline">
                Daftar sebagai Siswa
              </a>
            </p>
          </div>
        </form>
      </div>
      <div class="absolute bottom-4 text-center text-xs text-gray-400">
        &copy; {{ date('Y') }} Kantin Digital. All rights reserved.
      </div>
    </div>
  </div>
</body>
</html>

