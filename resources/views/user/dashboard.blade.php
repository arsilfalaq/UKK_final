@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Dashboard User</h1>
        <p class="text-center">Lihat informasi data dan aset melalui menu di bawah ini.</p>
        
        <div class="row mt-4">
            <!-- Kategori Aset -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kategori Aset</h5>
                        <p class="card-text">Lihat daftar kategori aset yang tersedia.</p>
                        <a href="{{ route('user.kategori_asset') }}" class="btn btn-info">Lihat Data</a>
                    </div>
                </div>
            </div>

            <!-- Sub Kategori Aset -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sub Kategori Aset</h5>
                        <p class="card-text">Lihat daftar sub kategori aset.</p>
                        <a href="{{ route('user.sub_kategori_asset') }}" class="btn btn-info">Lihat Data</a>
                    </div>
                </div>
            </div>

            <!-- Merk -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Merk</h5>
                        <p class="card-text">Lihat daftar merk yang tersedia.</p>
                        <a href="{{ route('user.merk') }}" class="btn btn-info">Lihat Data</a>
                    </div>
                </div>
            </div>

            <!-- Satuan -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Satuan</h5>
                        <p class="card-text">Lihat daftar satuan yang tersedia.</p>
                        <a href="{{ route('user.satuan') }}" class="btn btn-info">Lihat Data</a>
                    </div>
                </div>
            </div>

            <!-- Depresiasi -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Depresiasi</h5>
                        <p class="card-text">Lihat data depresiasi aset.</p>
                        <a href="{{ route('user.depresiasi') }}" class="btn btn-info">Lihat Data</a>
                    </div>
                </div>
            </div>

            <!-- Master Barang -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Master Barang</h5>
                        <p class="card-text">Lihat daftar master barang.</p>
                        <a href="{{ route('user.master_barang') }}" class="btn btn-info">Lihat Data</a>
                    </div>
                </div>
            </div>

            <!-- Distributor -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Distributor</h5>
                        <p class="card-text">Lihat data distributor.</p>
                        <a href="{{ route('user.distributor') }}" class="btn btn-info">Lihat Data</a>
                    </div>
                </div>
            </div>

            <!-- Pengadaan -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pengadaan</h5>
                        <p class="card-text">Lihat data pengadaan aset.</p>
                        <a href="{{ route('user.pengadaan') }}" class="btn btn-info">Lihat Data</a>
                    </div>
                </div>
            </div>

            <!-- Lokasi -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lokasi</h5>
                        <p class="card-text">Lihat data lokasi aset.</p>
                        <a href="{{ route('user.lokasi') }}" class="btn btn-info">Lihat Data</a>
                    </div>
                </div>
            </div>

            <!-- Mutasi Lokasi -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mutasi Lokasi</h5>
                        <p class="card-text">Lihat data mutasi lokasi aset.</p>
                        <a href="{{ route('user.mutasi_lokasi') }}" class="btn btn-info">Lihat Data</a>
                    </div>
                </div>
            </div>

            <!-- Hitung Depresiasi -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Hitung Depresiasi</h5>
                        <p class="card-text">Lihat perhitungan depresiasi aset.</p>
                        <a href="{{ route('user.hitung_depresiasi') }}" class="btn btn-info">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
