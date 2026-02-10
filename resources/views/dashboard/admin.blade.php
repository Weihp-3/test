@extends('layouts.master')
@section('title', 'Dashboard Admin')
@section('content')
  <div class="mb-8">
    <h1 class="text-2xl font-bold text-gray-800">👋 Selamat Datang, Admin!</h1>
    <p class="text-gray-500">Berikut adalah ringkasan aktivitas kantin hari ini.</p>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
      <div class="bg-blue-100 p-4 rounded-xl text-blue-600">
        <i class="fa-solid fa-box-open text-2xl"></i>
      </div>
      <div>
        <p class="text-gray-500 text-sm">Total Produk</p>
        <h3 class="text-2xl font-bold text-gray-800">120</h3>
      </div>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
      <div class="bg-green-100 p-4 rounded-xl text-green-600">
        <i class="fa-solid fa-money-bill-wave text-2xl"></i>
      </div>
      <div>
        <p class="text-gray-500 text-sm">Pendapatan Hari Ini</p>
        <h3 class="text-2xl font-bold text-gray-800">Rp 1.5jt</h3>
      </div>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
      <div class="bg-purple-100 p-4 rounded-xl text-purple-600">
        <i class="fa-solid fa-users text-2xl"></i>
      </div>
      <div>
        <p class="text-gray-500 text-sm">Siswa Jajan</p>
        <h3 class="text-2xl font-bold text-gray-800">45</h3>
      </div>
    </div>
  </div>
