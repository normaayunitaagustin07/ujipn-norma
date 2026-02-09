<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>sarpas pn || {{ $title }}</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/fontawesome/css/all.css">
</head>
<body>

<div class="dashboard">

@include('admin.layouts.sidebar')

    <!-- MAIN -->
    <div class="main">
     <div class="header">{{ $title }}</div>
        <div class="main-content">
            @yield('content')
        </div>

    </div>
</div>

<script src="/vendor/boostrap/js/boostrap.bundle.js"></script>
</body>
</html>