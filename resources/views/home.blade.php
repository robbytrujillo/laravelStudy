    @extends('layouts.mainLayout')

    @section('title', 'Home')

    @section('content')

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
    {{-- karena lebih dari satu baris pake endsection --}}
    @endsection
