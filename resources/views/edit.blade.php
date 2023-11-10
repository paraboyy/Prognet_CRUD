<!-- dalam edit.blade.php -->

@extends('layouts.app') <!-- pastikan template layout sesuai dengan proyek Anda -->

@section('content')
    <div class="container bg-dark text-light p-4">
        <h1 class="text-center mb-4">Edit Data Pekerja</h1>

        <form action="{{ url('/pekerja/' . $pekerja->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" class="form-control" value="{{ $pekerja->nama }}" required>
            </div>

            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" name="jabatan" class="form-control" value="{{ $pekerja->jabatan }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
