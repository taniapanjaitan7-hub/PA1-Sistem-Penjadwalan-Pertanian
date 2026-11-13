@extends('layouts.app')

@section('title', 'Jadwal Pertanian')

@section('page-title', 'Jadwal Pertanian')

@section('content')

@if(session('success'))
    <div class="success">
        {{ session('success') }}
    </div>
@endif


<div class="card">

    <h2 style="color:#166534; margin-bottom:20px;">
        📅 Tambah Jadwal Pertanian
    </h2>

    <form action="{{ route('jadwal.store') }}" method="POST">

        @csrf

        <div class="form-group">

            <label>Nama Kegiatan</label>

            <input
                type="text"
                name="nama_kegiatan"
                placeholder="Contoh: Penyiraman"
                required
            >

        </div>


        <div class="form-group">

            <label>Nama Tanaman</label>

            <input
                type="text"
                name="tanaman"
                placeholder="Contoh: Jagung"
                required
            >

        </div>


        <div class="form-group">

            <label>Tanggal</label>

            <input
                type="date"
                name="tanggal"
                required
            >

        </div>


        <div class="form-group">

            <label>Catatan</label>

            <textarea
                name="catatan"
                placeholder="Masukkan catatan kegiatan..."
            ></textarea>

        </div>


        <button type="submit" class="btn">
            + Simpan Jadwal
        </button>

    </form>

</div>


<div class="card">

    <h2 style="color:#166534; margin-bottom:20px;">
        📋 Daftar Jadwal
    </h2>

    <table>

        <thead>

            <tr>
                <th>No</th>
                <th>Kegiatan</th>
                <th>Tanaman</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>

        </thead>

        <tbody>

        @forelse($jadwals as $jadwal)

            <tr>

                <td>
                    {{ $loop->iteration }}
                </td>

                <td>
                    {{ $jadwal->nama_kegiatan }}
                </td>

                <td>
                    {{ $jadwal->tanaman }}
                </td>

                <td>
                    {{ $jadwal->tanggal }}
                </td>

                <td>
                    {{ $jadwal->status }}
                </td>

                <td>
                    {{ $jadwal->catatan ?? '-' }}
                </td>

                <td>

                    <form
                        action="{{ route('jadwal.destroy', $jadwal->id) }}"
                        method="POST"
                    >

                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            style="
                                background:#dc2626;
                                color:white;
                                border:none;
                                padding:7px 12px;
                                border-radius:6px;
                                cursor:pointer;
                            "
                            onclick="return confirm('Yakin ingin menghapus jadwal?')"
                        >
                            Hapus
                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="7" style="text-align:center;">
                    Belum ada jadwal pertanian.
                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection