@extends('layouts.masyarakat')

@section('title')
Dashboard
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-200">
      Detail Pelaporan
    </h2>


    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        @foreach($item->details as $ite)
        <div
          class="text-gray-800 text-sm font-semibold px-4 py-4 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 dark:text-gray-400 ">

          <h2>Nama : {{ $ite->name }}</h2>
          <h2 class="mt-4">Ruangan Kelas : {{$item->user->kelas}}</h2>
          <h2 class="mt-4">NIK : {{ $ite->user_nik }}</h2>
          <h2 class="mt-4">No Telepon : {{ $item->user->phone }}</h2>
          <h2 class="mt-4">Tanggal : {{ $ite->created_at->format('l, d F Y - H:i:s') }}</h2>
          <h2 class="mt-4">Status : 
            @if($item->status =='Belum di Proses')
            <span
                  class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-md dark:text-red-100 dark:bg-red-700">
                  {{ $item->status }}
            </span>
            @elseif ($item->status =='Sedang di Proses')
            <span
                  class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-md dark:text-white dark:bg-orange-600">
                  {{ $item->status }}
            </span>
            @else
            <span
                  class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-md dark:bg-green-700 dark:text-green-100">
                  {{ $item->status }}
                </span>
            @endif
          </h2>
          <h2 class="mt-4">
          <span class="py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-md dark:bg-green-700 dark:text-green-100">  
            Pihak yang menangani : {{ $tanggapan ? $tanggapan->pihak : 'Belum ada tanggapan' }}
          </span>
          </h2>
        </div>

        <div class="px-4 py-3 mb-8 flex text-gray-800 bg-white rounded-lg shadow-md dark:bg-gray-800">
          <div class="relative  mr-3  md:block ">
          <img width="500" height="50%" class=" object-cover" src="{{ asset('storage/images/' . $item->image) }}" alt="Foto Pengaduan" loading="lazy" onerror="this.onerror=null;this.src='{{ asset('storage/images/default.jpg') }}';" />
          </div>
          <div class="text-center flex-1 dark:text-gray-400">
            <h1 class="mb-8 font-semibold">Keterangan</h1>
            <p class="text-gray-800 dark:text-gray-400">
              {{ $item->description}}
            </p>
          </div>
        </div>
        @endforeach
        <div class="px-4 py-3 mb-8 flex bg-white rounded-lg shadow-md dark:text-gray-400 dark:bg-gray-800">
          <div class="text-center flex-1">
            <h1 class="mb-8 font-semibold">Tanggapan</h1>
            <p class="text-gray-800 dark:text-gray-400">
              {{ $tanggapan ? $tanggapan->tanggapan : 'Belum ada tanggapan' }}
            </p>
            @if($tanggapan && $tanggapan->updated_at)
              <p class="text-sm text-gray-500 mt-2">Tanggapan di perbaharui pada : {{ \Carbon\Carbon::parse($tanggapan->updated_at)->format('d M Y H:i') }}</p>
            @endif
          </div>
        </div>
      </div>
    </div>

</main>
@endsection