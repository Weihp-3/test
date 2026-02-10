@extends('layouts.master')


@section('title', 'Area Siswa')


@section('content')
  <div class="max-w-2xl mx-auto">
    <div
      class="bg-gradient-to-br from-blue-600 to-indigo-700 rounded-3xl p-8 text-white shadow-2xl relative overflow-hidden transform hover:scale-[1.01] transition-all duration-300">


      <div class="absolute top-0 right-0 -mr-10 -mt-10 w-64 h-64 bg-white opacity-10 rounded-full blur-3xl"></div>


      <div class="relative z-10 flex flex-col md:flex-row justify-between items-center gap-8">
        <div class="text-center md:text-left">
          <p class="text-blue-200 text-sm uppercase tracking-wider mb-1">Kartu Pelajar Digital</p>
          <h2 class="text-3xl font-bold mb-1">{{ Auth::user()->name }}</h2>
          <p class="font-mono text-blue-100 opacity-80">{{ Auth::user()->nisn }}</p>


          <div class="mt-8">
            <p class="text-sm text-blue-200 mb-1">Sisa Saldo Anda</p>
            <h1 class="text-4xl font-bold">Rp {{ number_format(Auth::user()->balance, 0, ',', '.') }}</h1>
          </div>
        </div>


        <div class="bg-white p-4 rounded-xl shadow-lg">
          <div class="w-32 h-32 bg-gray-100 flex flex-col items-center justify-center text-gray-400 rounded">
            <i class="fa-solid fa-qrcode text-3xl mb-2"></i>
            <span class="text-[10px]">Area QR Code</span>
          </div>
        </div>
      </div>
    </div>


    <div class="mt-8 bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
      <h3 class="font-bold text-gray-800 mb-4 flex items-center gap-2">
        <i class="fa-solid fa-history text-gray-400"></i> Aktivitas Terakhir
      </h3>
      <div class="text-center py-8 text-gray-400">
        <i class="fa-solid fa-basket-shopping text-4xl mb-3 opacity-30"></i>
        <p>Belum ada transaksi pembelian.</p>
      </div>
    </div>
  </div>
@endsection
