@extends('layouts.admin')

@section('title')
Edit Artikel
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Edit Artikel
    </h2>

    <!-- Form untuk mengedit artikel -->
    <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="w-full rounded-lg shadow-xs overflow-hidden">
        <div class="p-6 border-b border-gray-200 dark:bg-gray-800">
          <!-- Judul Artikel -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div>
              <label for="judul" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Judul</label>
              <input type="text" name="judul" id="judul" value="{{ $artikel->judul }}" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
          </div>

          <!-- Deskripsi Artikel -->
          <div class="mt-6">
            <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Deskripsi</label>
            <textarea id="description" name="description" rows="3" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $artikel->description }}</textarea>
          </div>

          <!-- Gambar Artikel -->
          <div class="mt-6">
            <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Gambar</label>
            <input type="file" name="image" id="image" accept="image/*" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @if($artikel->image)
            <img src="{{ asset('storage/images/' . $artikel->image) }}" alt="Gambar Artikel" class="mt-2 w-32 h-32 object-cover">
            @endif
          </div>
        </div>
        <div class="px-4 py-3 bg-gray-50 dark:bg-gray-900 text-right sm:px-6">
          <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Simpan
          </button>
        </div>
      </div>
    </form>
  </div>
</main>
@endsection
