<!-- dalam create.blade.php -->

@extends('layouts.app') <!-- pastikan template layout sesuai dengan proyek Anda -->

@section('content')
    <div class="container bg-dark text-light p-4">
        <h1 class="text-center mb-4">Tambah Data Pekerja</h1>

        <div class="text-right mb-3">
            <a href="{{ url('/') }}" class="btn btn-success">Kembali</a>
        </div>

        <form action="{{ url('/pekerja') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" name="jabatan" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
