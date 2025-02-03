@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Pengadaan</h2>

    <!-- Menampilkan pesan sukses jika ada -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tombol untuk menambah pengadaan -->
    <a href="{{ route('pengadaan.create') }}" class="btn btn-primary mb-3">Tambah Pengadaan</a>

    <!-- Tabel Pengadaan -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Pengadaan</th>
                <th>Master Barang</th>
                <th>Depresiasi</th>
                <th>Merk</th>
                <th>Satuan</th>
                <th>Sub Kategori Asset</th>
                <th>Distributor</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $pengadaan)
            <tr>
            <td>{{ $loop->iteration }}</td>
                    <td>{{ $pengadaan->kode_pengadaan }}</td>
                    <td>{{ $pengadaan->masterBarang->nama_barang ?? '-' }}</td>
                    <td>{{ $pengadaan->depresiasi->lama_depresiasi ?? '-'  }}</td>
                    <td>{{ $pengadaan->merk->merk ?? '-' }}</td>
                    <td>{{ $pengadaan->satuan->satuan ?? '-' }}</td>
                    <td>{{ $pengadaan->subKategoriAsset->sub_kategori_asset ?? '-' }}</td>
                    <td>{{ $pengadaan->distributor->nama_distributor ?? '-' }}</td>
                    <td>
                        <a href="{{ route('pengadaan.edit', $pengadaan->id_pengadaan) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('pengadaan.depresiasi', $pengadaan->id_pengadaan) }}" class="btn btn-sm btn-info">Depresiasi</a>
                        <form action="{{ route('pengadaan.destroy', $pengadaan->id_pengadaan) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
