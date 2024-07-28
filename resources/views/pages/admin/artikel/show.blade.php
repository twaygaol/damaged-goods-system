@extends('layouts.admin')

@section('title')
Detail Artikel
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Detail Artikel
    </h2>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="p-6 border-b border-gray-200 dark:bg-gray-800">
        <!-- Judul Artikel -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
          <div>
            <label for="judul" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Judul</label>
            <p class="mt-1 text-sm text-gray-900 dark:text-gray-300">{{ $artikel->judul }}</p>
          </div>
        </div>

        <!-- Deskripsi Artikel -->
        <div class="mt-6">
          <label for="deskripsi" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Deskripsi</label>
          <p class="mt-1 text-sm text-gray-900 dark:text-gray-300">{{ $artikel->description }}</p>
        </div>

        <!-- Gambar Artikel -->
        <div class="mt-6">
          <label for="gambar" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Gambar</label>
          @if($artikel->image)
          <img src="{{ asset('storage/images/' . $artikel->image) }}" alt="Gambar Artikel" class="mt-2 w-32 h-32 object-cover">
          @endif
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
