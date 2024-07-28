<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pelaporan Kerusakan : Smk 8 Medan</title>
  
  <style>
    .thead {
      background-color: #3B82F6;
      color: #ffffff;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <div class="title text-center mb-5">
      <h2>Pelaporan Kerusakan Barang</h2>
      <h5 target="_blank">Smk Negeri 8 Medan</h5>
    </div>
    <table class="table table-bordered">
      <thead class="thead">
        <tr>
          <th scope="col">Nama Guru</th>
          <th scope="col">Pelaporan</th>
          <th scope="col">Poto</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach($pengaduan as $item)
        <tr>
          <td>{{ $item->name }}</td>
          <td>{{ $item->description }}</td>
          <td>
            @php
              $path = storage_path('app/public/images/' . $item->image);
            @endphp
            @if(file_exists($path))
              <img class="h-32 w-100 object-cover" src="{{ $path }}" alt="Foto Pengaduan" loading="lazy" onerror="this.onerror=null;this.src='{{ storage_path('app/public/images/default.jpg') }}';" />
            @else
              <img class="h-32 w-100 object-cover" src="{{ storage_path('app/public/images/default.jpg') }}" alt="Foto Pengaduan" loading="lazy" />
            @endif
          </td>
          <td>{{ $item->created_at->format('l, d F Y') }}</td>
          <td>{{ $item->status }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
