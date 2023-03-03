<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 | Home</title>
    {{-- CSS Only --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    {{-- Navbar section Start --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#"><span style="color: gold">blade</span>Templating.</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Product</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      {{-- Navbar section End --}}
    
    <div class="container">
    <h1>Halaman Home</h1>
    <h2>Selamat Datang, <span style="color: darkolivegreen">{{ $name }}.</h2>
    <h2> Anda sebagai <span style="color: blue">{{ $role }}</span>!.</span></h2>

    <button class="btn btn-primary">Submit</button><br>

    {{-- if statement start --}}

    {{-- @if ($role == 'admin')
      <a href="">Ke Halaman admin</a>
    @elseif ($role == 'staf')
      <a href="">Ke halaman gudang</a>
      @else
      <a href="">Ke Halaman lain</a>
    @endif --}}

    {{-- if statement end --}}

    {{-- @switch($role)
      @case($role == 'admin')
        <a href="">Ke Halaman admin</a>
        @break
      @case($role == 'staf')
        <a href="">Ke Halaman gudang</a>
        @break
      @default
    @endswitch --}}

    {{-- @for ($i=0; $i<5;$i++)
      {{$i}} <br>
    @endfor --}}

    {{-- @foreach ( $buah as $data )
      {{ $data }} <br>
    @endforeach --}}

    <table class="table">
      <tr>
        <th>No</th>
        <th>Nama Buah</th>
      </tr>
      @foreach ( $buah as $data )
      <tr>
        {{-- menampilkan penomoran dimulai dari angka 1 --}}
        <td>{{ $loop->iteration}}</td> 
        {{-- isi dari data array --}}
        <td>{{ $data }}</td>
      </tr>
      @endforeach
    </table>


    </div>

    {{-- JS Bundle --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>