@extends('admin.layouts.templates')

@section('content')
<!-- INFO BOX -->
            <div class="cards">
                <div class="card blue">
                    <h3>Total Aspirasi</h3>
                    <p>{{ $total_aspirasi }}</p>
                </div>
                <div class="card orange">
                    <h3>Menunggu</h3>
                    <p>{{ $aspirasi_menunggu }}</p>
                </div>
                <div class="card teal">
                    <h3>Diproses</h3>
                    <p>{{ $aspirasi_diproses }}</p>
                </div>
                <div class="card green">
                    <h3>Selesai</h3>
                    <p>{{ $aspirasi_selesai }}</p>
                </div>
            </div>

            <!-- TABLE -->
            <div class="table-box">
                <h3>Aspirasi Terbaru</h3>
                <table>
                    <tr>
                        <th>Nama Siswa</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <td>Budi</td>
                        <td>Bersih Emplas Rusak</td>
                        <td>Ruang Kelas</td>
                        <td><span class="status pending">Menunggu</span></td>
                        <td><button>Lihat</button></td>
                    </tr>
                    <tr>
                        <td>Mira</td>
                        <td>Alat Listrik Rusak</td>
                        <td>Toilet</td>
                        <td><span class="status process">Diproses</span></td>
                        <td><button>Lihat</button></td>
                    </tr>
                    <tr>
                        <td>Andi</td>
                        <td>Perbaikan APMS</td>
                        <td>Laboratorium</td>
                        <td><span class="status done">Selesai</span></td>
                        <td><button>Lihat</button></td>
                    </tr>
                </table>
            </div>
@endsection