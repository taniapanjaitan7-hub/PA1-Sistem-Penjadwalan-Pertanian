<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Sistem Penjadwalan Pertanian')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f7f5;
        }

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 260px;
            height: 100vh;
            background: #14532d;
            padding: 25px 15px;
            color: white;
            overflow-y: auto;
        }

        .brand {
            text-align: center;
            margin-bottom: 30px;
        }

        .brand h2 {
            font-size: 22px;
        }

        .brand p {
            margin-top: 7px;
            font-size: 12px;
            color: #bbf7d0;
        }

        .menu a {
            display: block;
            text-decoration: none;
            color: white;
            padding: 12px 15px;
            margin-bottom: 7px;
            border-radius: 8px;
        }

        .menu a:hover {
            background: #166534;
        }

        .menu a.active {
            background: white;
            color: #166534;
            font-weight: bold;
        }

        .main {
            margin-left: 260px;
            min-height: 100vh;
        }

        .topbar {
            background: white;
            padding: 20px 30px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .topbar h2 {
            color: #166534;
        }

        .content {
            padding: 30px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.07);
            margin-bottom: 25px;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            background: #16a34a;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 7px;
            cursor: pointer;
        }

        .btn:hover {
            background: #15803d;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #166534;
            color: white;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 7px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .success {
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 7px;
            background: #dcfce7;
            color: #166534;
        }
    </style>
</head>

<body>

<div class="sidebar">

    <div class="brand">
        <h2>🌱 Pertanian</h2>
        <p>Sistem Penjadwalan Pertanian</p>
    </div>

    <div class="menu">

        <a href="{{ route('dashboard') }}"
           class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
            🏠 Dashboard
        </a>

        <a href="{{ route('about') }}"
           class="{{ request()->routeIs('about') ? 'active' : '' }}">
            ℹ️ About Us
        </a>

        <a href="{{ route('jadwal.index') }}"
           class="{{ request()->routeIs('jadwal.*') ? 'active' : '' }}">
            📅 Jadwal Pertanian
        </a>

        <a href="{{ route('krt') }}"
           class="{{ request()->routeIs('krt') ? 'active' : '' }}">
            🌾 KRT
        </a>

        <a href="{{ route('lahan.index') }}"
           class="{{ request()->routeIs('lahan.*') ? 'active' : '' }}">
            🏞️ Lahan
        </a>

        <a href="{{ route('tanaman') }}">
            🌿 Tanaman
        </a>

        <a href="{{ route('pengeluaran') }}">
            💸 Pengeluaran
        </a>

        <a href="{{ route('pendapatan') }}">
            💰 Pendapatan
        </a>

        <a href="{{ route('panen') }}">
            📊 Laporan Panen
        </a>

        <a href="{{ route('tutorial') }}">
            📖 Tutorial Perawatan
        </a>

        <a href="{{ route('alat') }}">
            🛠️ Alat & Bahan
        </a>

    </div>

</div>


<div class="main">

    <div class="topbar">
        <h2>@yield('page-title')</h2>
    </div>

    <div class="content">
        @yield('content')
    </div>

</div>

</body>
</html>