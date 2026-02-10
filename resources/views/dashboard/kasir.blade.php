@extends('layouts.master')
@section('title', 'Kasir Area')
@section('content')
  <div
    class="bg-gradient-to-r from-gray-800 to-gray-900 rounded-3xl p-10 text-white text-center shadow-xl relative overflow-hidden">
    <div class="absolute top-0 right-0 -mt-10 -mr-10 w-40 h-40 bg-white opacity-10 rounded-full blur-2xl"></div>
    <div class="absolute bottom-0 left-0 -mb-10 -ml-10 w-40 h-40 bg-orange-500 opacity-20 rounded-full blur-2xl"></div>
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Siap Berjualan?</h1>
    <p class="text-gray-300 mb-8 text-lg">Pastikan koneksi internet lancar dan stok uang kembalian tersedia.</p>
    <div class="flex flex-col md:flex-row justify-center gap-4">
      <a href="#"
        class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 px-8 rounded-full shadow-lg transition transform hover:scale-105 flex items-center justify-center gap-2">
        <i class="fa-solid fa-cart-shopping"></i>
        Buka Aplikasi Kasir
      </a>
      <a href="#"
        class="bg-white/10 hover:bg-white/20 backdrop-blur text-white font-semibold py-4 px-8 rounded-full border border-white/30 transition flex items-center justify-center gap-2">
        <i class="fa-solid fa-clock-rotate-left"></i>
        Riwayat Transaksi
      </a>
    </div>
  </div>
  <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm">
      <h4 class="font-bold text-gray-700 flex items-center gap-2">
        <i class="fa-solid fa-circle-info text-blue-500"></i> Info Stok
      </h4>
      <p class="text-sm text-gray-500 mt-2">Selalu cek stok fisik dengan stok di aplikasi minimal sehari sekali.</p>
    </div>
  </div>
@endsection

