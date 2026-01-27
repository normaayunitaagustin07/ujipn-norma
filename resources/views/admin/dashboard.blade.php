<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/dashboard.css">
</head>
<body>

<div class="dashboard">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>Admin</h2>
        <ul>
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-house"></i> Dashboard</a></li>
            <li><a href="{{ route('admin.siswa') }}"><i class="fa-solid fa-users"></i> Kelola Siswa</a></li>
            <li><a href="{{ route('admin.kategori') }}"><i class="fa-solid fa-folder"></i> Kelola Kategori</a></li>
            <li><a href="{{ route('admin.aspirasi') }}"><i class="fa-solid fa-database"></i> Data Aspirasi</a></li>
            <li><a href="{{ route('admin.laporan') }}"><i class="fa-solid fa-file"></i> Laporan</a></li>
        </ul>
    </div>

    <!-- MAIN -->
    <div class="main">

        <div class="header">Admin Dashboard</div>

        <!-- INFO BOX -->
        <div class="cards">
            <div class="card blue">
                <h3>120</h3>
                <p>Total Aspirasi</p>
            </div>
            <div class="card orange">
                <h3>30</h3>
                <p>Menunggu</p>
            </div>
            <div class="card teal">
                <h3>45</h3>
                <p>Diproses</p>
            </div>
            <div class="card green">
                <h3>45</h3>
                <p>Selesai</p>
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

    </div>
</div>

</body>
</html>