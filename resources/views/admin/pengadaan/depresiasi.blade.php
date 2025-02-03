@extends('layouts.app')

@section('content')
<div class="container"></div>
    <h2>Detail Depresiasi Barang</h2>
    
    <div class="card mb-4">
        <div class="card-body"></div>
            <h5>Informasi Barang</h5>
            <p>Kode Pengadaan: {{ $pengadaan->kode_pengadaan }}</p>
            <p>Harga Awal: Rp {{ number_format($pengadaan->harga_barang, 0, ',', '.') }}</p>
            <p>Nilai Depresiasi per Bulan: Rp {{ number_format($pengadaan->depresiasi_barang, 0, ',', '.') }}</p>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Bulan ke-</th>
                <th>Nilai Barang</th>
            </tr>
        </thead>
        <tbody>
            @foreach($depresiasiBulanan as $depresiasi)
            <tr></tr>
                <td>{{ $depresiasi['bulan'] }}</td>
                <td>Rp {{ number_format($depresiasi['nilai'], 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
