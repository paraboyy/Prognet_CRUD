<!-- dalam home.blade.php -->

@extends('layouts.app') <!-- pastikan template layout sesuai dengan proyek Anda -->

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="container bg-dark text-light p-4">
        <h1 class="text-center mb-4">Data Pekerja</h1>

        <!-- Tombol untuk menambah data -->
        <div class="text-right mb-3">
            <a href="{{ url('/pekerja/create') }}" class="btn btn-success">Tambah Data</a>
        </div>

        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pekerja as $pegawai)
                    <tr>
                        <td>{{ $pegawai->nama }}</td>
                        <td>{{ $pegawai->jabatan }}</td>
                        <td>
                            <a href="{{ url('/pekerja/' . $pegawai->id . '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ url('/pekerja/' . $pegawai->id) }}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
