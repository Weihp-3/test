<!DOCTYPE html>
<html lang="id">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Kantin Digital')</title>


  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


  @vite(['resources/css/app.css', 'resources/js/app.js'])


  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>


<body class="bg-gray-50 text-gray-800 antialiased">


  <nav
    class="fixed w-full z-50 top-0 bg-white/90 backdrop-blur-md shadow-sm border-b border-gray-100 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">


        <div class="flex-shrink-0 flex items-center gap-2">
          <div class="bg-orange-500 text-white p-2 rounded-lg">
            <i class="fa-solid fa-burger"></i>
          </div>
          <span class="font-bold text-xl tracking-tight text-gray-800">Kantin<span
              class="text-orange-500">App</span></span>
        </div>


        <div class="hidden md:flex items-center space-x-6">
          <div class="text-right leading-tight">
            <div class="text-sm font-bold text-gray-700">{{ Auth::user()->name }}</div>
            <div class="text-xs text-orange-500 uppercase font-semibold tracking-wider">{{ Auth::user()->role }}</div>
          </div>


          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
              class="bg-gray-100 hover:bg-red-50 text-gray-600 hover:text-red-500 p-2 rounded-full transition duration-300"
              title="Keluar">
              <i class="fa-solid fa-right-from-bracket"></i>
            </button>
          </form>
        </div>


        <div class="flex items-center md:hidden">
          <button id="mobile-menu-btn" class="text-gray-500 hover:text-orange-500 focus:outline-none">
            <i class="fa-solid fa-bars text-2xl"></i>
          </button>
        </div>
      </div>
    </div>


    <div id="mobile-menu" class="hidden md:hidden bg-white border-t p-4">
      <div class="mb-4 border-b pb-2">
        <p class="font-bold">{{ Auth::user()->name }}</p>
        <p class="text-xs text-orange-500">{{ ucfirst(Auth::user()->role) }}</p>
      </div>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="w-full text-left text-red-500 font-semibold py-2">
          <i class="fa-solid fa-right-from-bracket mr-2"></i> Keluar Aplikasi
        </button>
      </form>
    </div>
  </nav>


  <main class="pt-24 pb-12 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="animate-fade-in-up">
        @yield('content')
      </div>
    </div>
  </main>


  <footer class="bg-white border-t border-gray-200 mt-auto py-6">
    <div class="max-w-7xl mx-auto px-4 text-center text-sm text-gray-500">
      <p>&copy; {{ date('Y') }} Kantin Digital Sekolah. <span class="hidden sm:inline">Dibuat dengan ❤️ oleh Kelas
          XI RPL.</span></p>
    </div>
  </footer>


  <script>
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');


    btn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>
</body>


</html>

