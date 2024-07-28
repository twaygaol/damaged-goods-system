<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <style>
        img {
            height: 100px; /* Sesuaikan dengan ukuran yang Anda inginkan */
        }

        hr.solid {
            border-top: 2px solid #3B82F6;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="title text-center mb-5">
            <h2>Layanan Pengaduan Kerusakan Barang</h2>
            <h5>SMK 8 MEDAN</h5>
        </div>
        <hr class="solid">

        <div>
            <h6>Laporan Pengaduan</h6>
            <h6>{{ $pengaduan->created_at->format('l, d F Y') }}</h6>
        </div>
        <hr class="solid">
        
        <div class="mt-3 mb-3">
            <h6>Nama : {{ $pengaduan->name }}</h6>
            <h6>NIK : {{ $pengaduan->user_nik }}</h6>      
            <h6>No. Telepon : {{ $pengaduan->user->phone }}</h6>      
        </div>

        <table class="table table-bordered mt-3">
            <thead class="thead">
                <tr>
                    <th scope="col">Laporan Pengaduan</th>
                    <th scope="col">Poto</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $pengaduan->description }}</td>
                    <td>
                    @foreach($pengaduan->details as $detail)
                        @php
                            $path = storage_path('app/public/images/' . $detail->image);
                        @endphp
                        @if(file_exists($path))
                            <img class="h-32 w-350 object-cover" src="{{ $path }}" alt="Foto Pengaduan" loading="lazy" onerror="this.onerror=null;this.src='{{ storage_path('app/public/images/default.jpg') }}';" />
                        @else
                            <img class="h-32 w-350 object-cover" src="{{ storage_path('app/public/images/default.jpg') }}" alt="Foto Pengaduan" loading="lazy" />
                        @endif
                    @endforeach
                    </td>
                    <td>{{ $pengaduan->status }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
