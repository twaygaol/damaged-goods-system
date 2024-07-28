@extends('layouts.admin')

@section('title')
Buat Artikel Baru
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Buat Artikel Baru
    </h2>

    <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Judul Artikel</span>
          <input
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            type="text" placeholder="Judul Artikel" value="{{ old('judul')}}" name="judul" required>
        </label>
        @error('judul')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Deskripsi Artikel</span>
          <textarea id="description" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="description" rows="5" required>{{ old('description') }}</textarea>
        </label>
        @error('description')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Gambar Artikel</span>
          <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image">
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        <button type="submit"
          class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
          Buat Artikel
        </button>
      </div>
    </form>
  </div>
</main>
@endsection
