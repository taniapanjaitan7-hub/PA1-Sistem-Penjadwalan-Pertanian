<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::orderBy('tanggal', 'asc')->get();

        return view('jadwal.index', compact('jadwals'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'tanaman' => 'required',
            'tanggal' => 'required|date',
            'catatan' => 'nullable',
        ]);

        Jadwal::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'tanaman' => $request->tanaman,
            'tanggal' => $request->tanggal,
            'status' => 'Dijadwalkan',
            'catatan' => $request->catatan,
        ]);

        return redirect()
            ->route('jadwal.index')
            ->with('success', 'Jadwal berhasil ditambahkan.');
    }

    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();

        return redirect()
            ->route('jadwal.index')
            ->with('success', 'Jadwal berhasil dihapus.');
    }
}