@extends('layouts.app')

@section('title','Katalog Produk')

@section('content')
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-extrabold text-center mb-12">Katalog Produk</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

      <!-- Sushi -->
      <div class="relative group">
        <div class="flex justify-center -mb-16 z-10 relative">
          <img src="{{ asset('images/sushi.svg') }}" 
            alt="Sushi" 
            class="w-32 sm:w-40 md:w-48 lg:w-56 xl:w-64 transition-transform duration-500 group-hover:scale-110 drop-shadow-2xl">
        </div>
        <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-lg p-6 pt-24 text-center transition group-hover:shadow-2xl">
          <h4 class="font-bold text-lg md:text-xl">Sushi Mini</h4>
          <p class="text-sm md:text-base text-gray-700">Sushi ala Jepang dengan harga terjangkau dan bahan premium.</p>
          <a href="https://wa.me/6285227017999?text=Halo%20kak,%20saya%20mau%20pesan%20Sushi%20Premium" 
             target="_blank" 
             class="inline-block mt-4 px-6 py-3 rounded-full bg-orange-500 text-white font-semibold hover:bg-orange-600 transition">
            Beli Sekarang
          </a>
        </div>
      </div>

      <!-- Kebab -->
      <div class="relative group">
        <div class="flex justify-center -mb-16 z-10 relative">
          <img src="{{ asset('images/kebab.svg') }}" 
            alt="Kebab" 
            class="w-32 sm:w-40 md:w-48 lg:w-56 xl:w-64 transition-transform duration-500 group-hover:scale-110 drop-shadow-2xl">
        </div>
        <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-lg p-6 pt-24 text-center transition group-hover:shadow-2xl">
          <h4 class="font-bold text-lg md:text-xl">Kebab</h4>
          <p class="text-sm md:text-base text-gray-700">Gurih dengan isian sosis, timun, tomat, selada dan mayonise.</p>
          <a href="https://wa.me/6285227017999?text=Halo%20kak,%20saya%20mau%20pesan%20Kebab%20Spesial" 
             target="_blank" 
             class="inline-block mt-4 px-6 py-3 rounded-full bg-orange-500 text-white font-semibold hover:bg-orange-600 transition">
            Beli Sekarang
          </a>
        </div>
      </div>

      <!-- Brownies -->
        <div class="relative group">
        <div class="flex justify-center -mb-16 z-10 relative">
            <img src="{{ asset('images/brownies.svg') }}" 
            alt="Brownies" 
            class="w-32 sm:w-40 md:w-48 lg:w-56 xl:w-64 transition-transform duration-500 group-hover:scale-110 drop-shadow-2xl">
        </div>
        <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-lg p-6 pt-24 text-center transition group-hover:shadow-2xl">
            <h4 class="font-bold text-lg md:text-xl">Brownies</h4>
            <p class="text-sm md:text-base text-gray-700">Brownies coklat yang rasanya manis, lembut, dan lumer di mulut.</p>
            <a href="https://wa.me/6285227017999?text=Halo%20kak,%20saya%20mau%20pesan%20Brownies%20Premium" 
            target="_blank" 
            class="inline-block mt-4 px-6 py-3 rounded-full bg-orange-500 text-white font-semibold hover:bg-orange-600 transition">
            Beli Sekarang
            </a>
        </div>
        </div>
    </div>
  </div>
</section>
@endsection
