@extends('layouts.admin')

@section('title')
Daftar Artikel
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Daftar Artikel
    </h2>

    <!-- Tambahkan tombol untuk membuat artikel baru -->
    <div class="mb-4">
      <a href="{{ route('artikel.create') }}" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
        Tambah Artikel
      </a>
    </div>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-4 py-3">Judul</th>
              <th class="px-4 py-3">Gambar</th> <!-- Tambah kolom untuk gambar -->
              <th class="px-4 py-3">Aksi</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            <!-- Loop melalui daftar artikel -->
            @foreach($artikels as $artikel)
            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                  <div>
                    <p class="font-semibold">{{ $artikel->judul }}</p>
                  </div>
                </div>
              </td>

              <td class="px-4 py-3 items-center">
                <div class="flex items-center text-sm">
                  <!-- Avatar with inset shadow -->
                  <div class="relative hidden mr-3  md:block">
                    <img class=" h-32 w-35 " src="{{ asset('storage/images/' . $artikel->image) }}"alt="" loading="lazy" />
                  </div>
                </div>
              </td>
              <td class="px-4 py-3">
                <div class="flex items-center space-x-4 text-sm">
                    <a href="{{ route('artikel.edit', $artikel->id) }}" class="text-purple-600 hover:text-purple-700 dark:hover:text-purple-400">
                    Edit
                    </a>
                    <a href="{{ route('artikel.show', $artikel->id) }}" class="text-blue-600 hover:text-blue-700 dark:hover:text-blue-400">
                    Show
                    </a>
                    <form action="{{ route('artikel.destroy', $artikel->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-700 dark:hover:text-red-400" onclick="return confirm('Anda yakin ingin menghapus artikel ini?')">Hapus</button>
                    </form>
                </div>
                </td>

            @endforeach
          </tbody>
        </table>
        <!-- Tampilkan tombol Previous dan Next -->
        <div class="px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
          {{ $artikels->links() }}
        </div>

        <div class="mt-4">
    <nav class="flex justify-between">
        <div class="w-0 flex-1 flex">
            @if ($artikels->onFirstPage())
                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    <i class="fas fa-angle-left mr-1"></i>
                    Previous
                </span>
            @else
                <a href="{{ $artikels->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    <i class="fas fa-angle-left mr-1"></i>
                    Previous
                </a>
            @endif
        </div>
        <div class="w-0 flex-1 flex justify-end">
            @if ($artikels->hasMorePages())
                <a href="{{ $artikels->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    Next
                    <i class="fas fa-angle-right ml-1"></i>
                </a>
            @else
                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    Next
                    <i class="fas fa-angle-right ml-1"></i>
                </span>
            @endif
        </div>
    </nav>
</div>

      </div>
    </div>
  </div>
</main>
@endsection
