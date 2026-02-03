<!-- index.html -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard Siswa</title>
  <link rel="stylesheet" href="/css/dashboard.css">
  <link rel="stylesheet" href="/vendor/fontawesome/css/all.css">
  <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>

    <div class="main-content">
  <div class="navbar">
  <div class="title"><i class="fa-solid fa-bars"></i> Dashboard Siswa</div>

  <div class="user-menu">
    <div class="user-info" onclick="toggleDropdown()">
      <span class="username">
        {{ auth()->user()->username }}
      </span>
      <span class="arrow"> <i class="fa-solid fa-caret-down"></i> </span>
    </div>

    <div class="dropdown" id="dropdownMenu">
      <a href=""> <i class="fa-solid fa-user"></i> Profile</a>

      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-btn"> <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
      </form>
    </div>
  </div>
</div>

@yield('content')

 
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
     <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>