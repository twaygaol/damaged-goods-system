@extends('layouts.admin')

@section('title')
Data Masyarakat
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Data Guru 
    </h2>


    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }} </li>
            @endforeach
          </ul>
        </div>
        @endif
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-800 uppercase border-b dark:border-gray-700 bg-gray-100 dark:text-gray-800 dark:bg-gray-200">
              <th class="px-4 py-3">Nama Guru</th>
              <th class="px-4 py-3">NUPTK</th>
              <th class="px-4 py-3">Wali Kelas</th>
              <th class="px-4 py-3">No. Hp</th>
              <th class="px-4 py-3">Email</th>
              <th class="px-4 py-3">Aksi</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @forelse ($data as $masyarakat)
            <tr class="text-gray-700 dark:text-gray-100">
              <td class="px-4 py-3 text-sm">
                {{ $masyarakat->name }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $masyarakat->nik }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $masyarakat->kelas }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $masyarakat->phone }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $masyarakat->email }}
              </td>
              <td class="px-4 py-3">
                <div class="flex items-center space-x-4 text-sm">
                    <form action="{{ route('masyarakat.destroy', $masyarakat->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-700 dark:hover:text-red-400" onclick="return confirm('Anda yakin ingin menghapus artikel ini?')">Hapus</button>
                    </form>
                </div>
                </td>
            </tr>
            @empty
            <tr>
              <td colspan="7" class="text-center text-gray-400">
                Data Kosong
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>

    </div>

  </div>
</main>
@endsection