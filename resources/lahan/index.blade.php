@extends('layouts.app')

@section('title', 'Data Lahan')

@section('page-title', 'Data Lahan Pertanian')

@section('content')


@if(session('success'))

    <div class="success">
        {{ session('success') }}
    </div>

@endif


<div class="card">

    <h2 style="color:#166534; margin-bottom:20px;">
        🏞️ Tambah Data Lahan
    </h2>


    <form action="{{ route('lahan.store') }}" method="POST">

        @csrf


        <div class="form-group">

            <label>Nama Lahan</label>

            <input
                type="text"
                name="nama_lahan"
                placeholder="Contoh: Lahan Jagung A"
                required
            >

        </div>


        <div class="form-group">

            <label>Lokasi</label>

            <input
                type="text"
                name="lokasi"
                placeholder="Contoh: Laguboti"
                required
            >

        </div>


        <div class="form-group">

            <label>Luas Lahan</label>

            <input
                type="number"
                step="0.01"
                name="luas"
                placeholder="Contoh: 500"
                required
            >

        </div>


        <div class="form-group">

            <label>Satuan</label>

            <select name="satuan">

                <option value="m²">
                    Meter Persegi (m²)
                </option>

                <option value="ha">
                    Hektare (ha)
                </option>

            </select>

        </div>


        <div class="form-group">

            <label>Keterangan</label>

            <textarea
                name="keterangan"
                placeholder="Keterangan lahan..."
            ></textarea>

        </div>


        <button type="submit" class="btn">
            + Simpan Lahan
        </button>

    </form>

</div>


<div class="card">

    <h2 style="color:#166534; margin-bottom:20px;">
        📋 Daftar Lahan
    </h2>


    <table>

        <thead>

            <tr>
                <th>No</th>
                <th>Nama Lahan</th>
                <th>Lokasi</th>
                <th>Luas</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>

        </thead>


        <tbody>

        @forelse($lahans as $lahan)

            <tr>

                <td>
                    {{ $loop->iteration }}
                </td>

                <td>
                    {{ $lahan->nama_lahan }}
                </td>

                <td>
                    {{ $lahan->lokasi }}
                </td>

                <td>
                    {{ $lahan->luas }} {{ $lahan->satuan }}
                </td>

                <td>
                    {{ $lahan->keterangan ?? '-' }}
                </td>

                <td>

                    <form
                        action="{{ route('lahan.destroy', $lahan->id) }}"
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
                            onclick="return confirm('Yakin ingin menghapus data lahan?')"
                        >
                            Hapus
                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="6" style="text-align:center;">
                    Belum ada data lahan.
                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection