@extends('layouts.admin')

@section('title')
Dashboard
@endsection

@section('content')
<main class="h-full overflow-y-auto">
  <div class="container px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Dashboard 
    </h2>

    <!-- Cards -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
      <!-- Card 1 (Blue) -->
      <div class="flex items-center p-4 bg-blue-600  rounded text-white">
        <div class="p-3 mr-4 text-blue-800 bg-blue-800 rounded-full dark:text-blue-800 dark:bg-blue-800">
          <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z"
              clip-rule="evenodd" />
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-blue-600 dark:text-black">
            Jumlah Pengaduan
          </p>
          <p class="text-lg font-semibold text-blue-700 dark:text-black">
            {{ $pengaduan }}
          </p>
        </div>
      </div>

      <!-- Card 2 (Red) -->
      <div class="flex items-center p-4 bg-red-600  rounded text-white">
        <div class="p-3 mr-4 text-white bg-red-200 rounded-full dark:text-red-100 dark:bg-red-700">
          <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z"
              clip-rule="evenodd" />
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-white dark:text-black">
            Belum di Proses
          </p>
          <p class="text-lg font-semibold text-white dark:text-black">
            {{ $pending }}
          </p>
        </div>
      </div>

      <!-- Card 3 (Green) -->
      <div class="flex items-center p-4 rounded-lg" style="background-color:green;">
        <div class="p-3 mr-4 text-white bg-green-200 rounded-full dark:text-green-100 dark:bg-green-500">
          <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path
              d="M8 5a1 1 0 100 2h5.586l-1.293 1.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L13.586 5H8zM12 15a1 1 0 100-2H6.414l1.293-1.293a1 1 0 10-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L6.414 15H12z" />
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-white dark:text-black">
            Sedang di Proses
          </p>
          <p class="text-lg font-semibold text-white dark:text-black">
            {{ $process }}
          </p>
        </div>
      </div>

      <!-- Card 4 (Green) -->
      <div class="flex items-center p-4 rounded-lg" style="background-color:green;">
        <div class="p-3 mr-4 text-white bg-green-600 rounded-full dark:text-green-100 dark:bg-green-500">
          <svg class="w-5 h-5" viewBox=" 0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
              clip-rule="evenodd" />
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-white dark:text-black">
            Selesai
          </p>
          <p class="text-lg font-semibold text-white dark:text-black">
            {{ $success }}
          </p>
        </div>
      </div>

      <!-- Card 5 (Blue) -->
      <div class="flex items-center p-4 rounded-lg" style="background-color:orange;">
        <div class="p-3 mr-4 text-blue-500 bg-blue-200 rounded-full dark:text-blue-100 dark:bg-blue-500">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
              d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
              clip-rule="evenodd"></path>
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-blue-600 dark:text-black">
          Jumlah Tanggapan
          </p>
          <p class="text-lg font-semibold text-blue-700 dark:text-black">
          {{ $tanggapan }}
          </p>
        </div>
      </div>
      <div class="flex items-center p-4 rounded-lg" style="background-color:gray;">
        <div class="p-3 mr-4 text-white bg-green-200 rounded-full dark:text-green-100 dark:bg-green-500">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
            </path>
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-white dark:text-gray-400">
            Jumlah User
          </p>
          <p class="text-lg font-semibold text-white dark:black">
            {{ $user }}
          </p>
        </div>
      </div>
    </div>
    <!-- Chart -->
    <div class="col-span-2">
      <div class="p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <canvas id="pengaduanChart"></canvas>
      </div>
  </div>
</main>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('pengaduanChart').getContext('2d');
    var pengaduanChart = new Chart(ctx, {
      type: 'bar', // You can change this to 'line', 'pie', etc.
      data: {
        labels: ['Jumlah Pengaduan', 'Belum di Proses', 'Sedang di Proses', 'Selesai'],
        datasets: [{
          label: 'Jumlah Pengaduan',
          data: [{{ $pengaduan }}, {{ $pending }}, {{ $process }}, {{ $success }}],
          backgroundColor: [
            'rgba(54, 162, 235, 1)', // Color for Jumlah Pengaduan
            'rgba(255, 99, 132, 1)', // Color for Belum di Proses
            'rgba(255, 159, 64, 1)', // Color for Sedang di Proses
            'rgba(75, 192, 192, 1)' // Color for Selesai
          ],
          borderColor: [
            'rgba(54, 162, 235, 1)',
            'rgba(255, 99, 132, 1)',
            'rgba(255, 159, 64, 1)',
            'rgba(75, 192, 192, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  });
</script>
@endsection