@extends('layouts.app')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard')

@section('content')

<style>
    .hero {
        background: linear-gradient(135deg, #166534, #22c55e);
        color: white;
        padding: 35px;
        border-radius: 15px;
        margin-bottom: 30px;
    }

    .hero h1 {
        margin-bottom: 10px;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 20px;
    }

    .dashboard-card {
        background: white;
        padding: 22px;
        border-radius: 12px;
        box-shadow: 0 3px 12px rgba(0,0,0,0.08);
    }

    .dashboard-card h3 {
        color: #166534;
        margin-bottom: 10px;
    }

    .dashboard-card p {
        color: #666;
        line-height: 1.6;
        min-height: 50px;
    }
</style>


<div class="hero">

    <h1>🌱 Sistem Penjadwalan Pertanian</h1>

    <p>
        Kelola kegiatan pertanian dengan lebih mudah,
        terstruktur, dan efisien.
    </p>

</div>


<div class="grid">

    <div class="dashboard-card">
        <h3>📅 Jadwal Pertanian</h3>
        <p>Mengelola jadwal kegiatan pertanian.</p>

        <a href="{{ route('jadwal.index') }}" class="btn">
            Lihat Jadwal
        </a>
    </div>


    <div class="dashboard-card">
        <h3>🌾 KRT</h3>
        <p>Mengelola Kelompok Rencana Tanam.</p>

        <a href="{{ route('krt') }}" class="btn">
            Kelola KRT
        </a>
    </div>


    <div class="dashboard-card">
        <h3>🏞️ Data Lahan</h3>
        <p>Mengelola informasi lahan pertanian.</p>

        <a href="{{ route('lahan.index') }}" class="btn">
            Kelola Lahan
        </a>
    </div>


    <div class="dashboard-card">
        <h3>🌿 Data Tanaman</h3>
        <p>Mengelola tanaman yang sedang dibudidayakan.</p>

        <a href="{{ route('tanaman') }}" class="btn">
            Kelola Tanaman
        </a>
    </div>


    <div class="dashboard-card">
        <h3>💸 Pengeluaran</h3>
        <p>Mencatat biaya kegiatan pertanian.</p>

        <a href="{{ route('pengeluaran') }}" class="btn">
            Lihat Pengeluaran
        </a>
    </div>


    <div class="dashboard-card">
        <h3>💰 Pendapatan</h3>
        <p>Mencatat pendapatan dari hasil pertanian.</p>

        <a href="{{ route('pendapatan') }}" class="btn">
            Lihat Pendapatan
        </a>
    </div>


    <div class="dashboard-card">
        <h3>📊 Laporan Panen</h3>
        <p>Mencatat dan melihat hasil panen.</p>

        <a href="{{ route('panen') }}" class="btn">
            Lihat Laporan
        </a>
    </div>


    <div class="dashboard-card">
        <h3>📖 Tutorial</h3>
        <p>Informasi perawatan tanaman.</p>

        <a href="{{ route('tutorial') }}" class="btn">
            Lihat Tutorial
        </a>
    </div>


    <div class="dashboard-card">
        <h3>🛠️ Alat & Bahan</h3>
        <p>Mengelola kebutuhan alat dan bahan pertanian.</p>

        <a href="{{ route('alat') }}" class="btn">
            Kelola
        </a>
    </div>

</div>

@endsection