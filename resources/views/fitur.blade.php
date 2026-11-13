@extends('layouts.app')

@section('title', $judul)

@section('page-title', $judul)

@section('content')

<div class="card">

    <h2 style="color:#166534;">
        {{ $judul }}
    </h2>

    <br>

    <p>
        Halaman <strong>{{ $judul }}</strong> sudah tersedia.
    </p>

    <p style="margin-top:10px; color:#666;">
        Fitur pengelolaan data akan dikembangkan pada tahap berikutnya.
    </p>

</div>

@endsection