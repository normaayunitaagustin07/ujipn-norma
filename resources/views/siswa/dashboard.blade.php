<!-- index.html -->
<!DOCTYPE html>
<html lang="id">
<head> 
  <meta charset="UTF-8" />
  <title>Dashboard Siswa</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="/css/dashboard.css">
</head>
<body>

  <div class="navbar">
    <div> <i class="fa-solid fa-bars"></i> Dasboard Siswa </div>

   <div class="user-menu">
    <div class="user-info" onclick="toggleDropdown()">
      <span class="username">
        {{ auth()->user()->username }}
      </span>
      <span class="arrow"><i class="fa-solid fa-caret-down"></i></span>
    </div>

    <div class="dropdown" id="dropdownMenu">
      <a href=""><i class="fa-solid fa-user"></i> Profile</a>

      <form action="{{ route('logout') }}" method="get">
        @csrf
        <button type="submit" class="logout-btn"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
      </form>
    </div>
  </div>
</div>

  <div class="container">
    <h2>Selamat datang
        <span>{{ auth()->user()->nama }} ({{ auth()->user()->siswa->kelas }})</span></h2>

    <div class="cards">
      <div class="card total">Total Aspirasi<br><h1>{{ $total_aspirasi }}</h1></div>
      <div class="card menunggu">Menunggu<br><h1>{{ $aspirasi_menunggu }}</h1></div>
      <div class="card diproses">Diproses<br><h1>{{ $aspirasi_diproses }}</h1></div>
      <div class="card selesai">Selesai<br><h1>{{ $aspirasi_selesai }}</h1></div>
    </div>

    <button href="#" class="btn"> + Ajukan Aspirasi </button>

    <h3>Riwayat Aspirasi</h3>
    <table>
      <tr>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Detail Aduan</th>
        <th>Tanggal</th>
        <th>Status</th>
      </tr>
      @foreach ($aspirasi as $item)
        <tr>
        <td>{{ $item->judul }}</td>
        <td>{{ $item->kategori->nama_kategri }}</td>
        <td>{{ $item->$isi }}</td>
        <td>{{ $sistem->created_id->format('d-M-Y')}}</td>
        <td><span class="badge b-{{ $item->status }}" style="text-transform: capitalize">{{ $item->status }}</span></td>
      </tr>
      @endforeach
    </table>
  </div>

  <script>
function toggleDropdown() {
  const dropdown = document.getElementById('dropdownMenu');
  dropdown.style.display =
    dropdown.style.display === 'block' ? 'none' : 'block';
}

window.onclick = function(e) {
  if (!e.target.closest('.user-menu')) {
    document.getElementById('dropdownMenu').style.display = 'none';
  }
}
</script>

</body>
</html>