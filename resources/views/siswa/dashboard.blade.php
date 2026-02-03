@extends('siswa.layouts.templates')

@section('content')
 <div class="container">
    <h2>Selamat datang
    <span>{{ auth()->user()->nama }} ({{ auth()->user()->siswa->kelas }})</span>
    </h2>

    <div class="cards">
      <div class="card blue">Total Aspirasi<br><h1>{{ $total_aspirasi }}</h1></div>
      <div class="card orange">Menunggu<br><h1>{{ $aspirasi_menunggu }}</h1></div>
      <div class="card green">Diproses<br><h1>{{ $aspirasi_diproses }}</h1></div>
      <div class="card teal">Selesai<br><h1>{{ $aspirasi_selesai }}</h1></div>
    </div>
 </div>
  <a href="{{ route('siswa.tambah-aspirasi') }}" class="btn btm-primary"> + Ajukan Aspirasi</a>

  <h3>Riwayat Aspirasi</h3>
  <table>
    <tr>
      <th>Judul</th>
      <th>Kategori</th>
      <th>Detail Aduan</th>
      <th>Tanggal</th>
      <th>Status</th>
    </tr>
    @foreach ($aspirasi as $item )
    <tr>
      <td>{{ $item->judul }}</td>
      <td>{{ $item->kategori->nama_kategori }}</td>
      <td>{{ $item->isi }}</td>
      <td>{{ $item->created_at->format('d-M-Y') }}</td>
      <td><span class="badge b-{{ $item->status }}"  style="text-transform: capitalize">{{ $item->status }}</span></td>
    </tr>
    @endforeach
  </table>
  
@endsection