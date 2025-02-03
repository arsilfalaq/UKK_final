<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @yield('styles')
    <style>
        /* Styling Sidebar */
        .sidebar {
            background-color: rgb(0, 128, 255);
            padding-top: 20px;
            height: 100vh;
            overflow-y: auto;
        }
        .sidebar .nav-link {
            color: white;
            font-size: 1.1rem;
            padding: 12px 25px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .sidebar .nav-link:hover {
            background-color: rgb(87, 73, 74);
        }
        .sidebar .nav-link.active {
            background-color: rgb(255, 0, 0);
        }

        /* Styling Navbar */
        .navbar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: rgb(245, 245, 245);
            border-bottom: 2px solid rgb(230, 230, 230);
        }
        .navbar .navbar-brand {
            font-weight: bold;
            color: rgb(0, 128, 255);
        }
        .navbar .navbar-nav .nav-link {
            color: rgb(100, 100, 100);
            transition: color 0.3s;
        }
        .navbar .navbar-nav .nav-link:hover {
            color: rgb(0, 128, 255);
        }

        /* Styling Main Content */
        .main-content {
            padding: 30px;
            background: linear-gradient(to bottom right, #f9f9f9, #e9e9e9);
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            height: calc(100vh - 56px); /* Tinggi Navbar */
            overflow-y: auto;
        }
        .main-content h1 {
            font-size: 2rem;
            font-weight: bold;
            color: rgb(0, 128, 255);
            margin-bottom: 20px;
        }
        .main-content .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            transition: transform 0.2s;
        }
        .main-content .card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 sidebar">
            <ul class="nav flex-column">
                <!-- Sidebar for Admin -->
                @if(auth()->check() && auth()->user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                            <i class="fas fa-tachometer-alt"></i> Admin Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('kategori_asset.index', 'kategori_asset.create', 'kategori_asset.edit') ? 'active' : '' }}" href="{{ route('kategori_asset.index') }}">
                                <i class="fas fa-cogs"></i> Kategori Asset
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('sub_kategori_asset.index', 'sub_kategori_asset.create', 'sub_kategori_asset.edit') ? 'active' : '' }}" href="{{ route('sub_kategori_asset.index') }}">
                                <i class="fas fa-cogs"></i> Sub Kategori Asset
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('merk.index', 'merk.create', 'merk.edit') ? 'active' : '' }}" href="{{ route('merk.index') }}">
                                <i class="fas fa-box"></i> Merk
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('satuan.index', 'satuan.create', 'satuan.edit') ? 'active' : '' }}" href="{{ route('satuan.index') }}">
                                <i class="fas fa-weight-hanging"></i> Satuan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('depresiasi.index', 'depresiasi.create', 'depresiasi.edit') ? 'active' : '' }}" href="{{ route('depresiasi.index') }}">
                                <i class="fas fa-calendar-alt"></i> Depresiasi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('master_barang.index', 'master_barang.create', 'master_barang.edit') ? 'active' : '' }}" href="{{ route('master_barang.index') }}">
                                <i class="fas fa-archive"></i> Master Barang
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('distributor.index', 'distributor.create', 'distributor.edit') ? 'active' : '' }}" href="{{ route('distributor.index') }}">
                                <i class="fas fa-truck"></i> Distributor
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('pengadaan.index', 'pengadaan.create', 'pengadaan.edit') ? 'active' : '' }}" href="{{ route('pengadaan.index') }}">
                                <i class="fas fa-cart-plus"></i> Pengadaan
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('lokasi.index', 'lokasi.create', 'lokasi.edit') ? 'active' : '' }}" href="{{ route('lokasi.index') }}">
                                <i class="fas fa-map-marker-alt"></i> Lokasi
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('mutasi_lokasi.index', 'mutasi_lokasi.create', 'mutasi_lokasi.edit') ? 'active' : '' }}" href="{{ route('mutasi_lokasi.index') }}">
                                <i class="fas fa-exchange-alt"></i> Mutasi Lokasi
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('opname.index', 'opname.create', 'opname.edit') ? 'active' : '' }}" href="{{ route('opname.index') }}">
                                <i class="fas fa-check-circle"></i> Opname
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('hitung_depresiasi.index', 'hitung_depresiasi.create', 'hitung_depresiasi.edit') ? 'active' : '' }}" href="{{ route('hitung_depresiasi.index') }}">
                                <i class="fas fa-calculator"></i> Hitung Depresiasi
                            </a>
                        </li>
                @endif

                <!-- Sidebar for User -->
                @if(auth()->check() && auth()->user()->role == 'user')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('user.dashboard') ? 'active' : '' }}" href="{{ route('user.dashboard') }}">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('user.kategori_asset') ? 'active' : '' }}" href="{{ route('user.kategori_asset') }}">
                            <i class="fas fa-list"></i> Kategori Asset
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('user.sub_kategori_asset') ? 'active' : '' }}" href="{{ route('user.sub_kategori_asset') }}">
                            <i class="fas fa-sitemap"></i> Sub Kategori Asset
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('user.merk') ? 'active' : '' }}" href="{{ route('user.merk') }}">
                            <i class="fas fa-tag"></i> Merk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('user.satuan') ? 'active' : '' }}" href="{{ route('user.satuan') }}">
                            <i class="fas fa-ruler"></i> Satuan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('user.depresiasi') ? 'active' : '' }}" href="{{ route('user.depresiasi') }}">
                            <i class="fas fa-chart-line"></i> Depresiasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('user.master_barang') ? 'active' : '' }}" href="{{ route('user.master_barang') }}">
                            <i class="fas fa-box"></i> Master Barang
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('user.distributor') ? 'active' : '' }}" href="{{ route('user.distributor') }}">
                            <i class="fas fa-truck"></i> Distributor
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('user.pengadaan') ? 'active' : '' }}" href="{{ route('user.pengadaan') }}">
                            <i class="fas fa-shopping-cart"></i> Pengadaan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('user.lokasi') ? 'active' : '' }}" href="{{ route('user.lokasi') }}">
                            <i class="fas fa-map-marker-alt"></i> Lokasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('user.mutasi_lokasi') ? 'active' : '' }}" href="{{ route('user.mutasi_lokasi') }}">
                            <i class="fas fa-exchange-alt"></i> Mutasi Lokasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('user.hitung_depresiasi') ? 'active' : '' }}" href="{{ route('user.hitung_depresiasi') }}">
                            <i class="fas fa-calculator"></i> Hitung Depresiasi
                        </a>
                    </li>
                @endif

                <!-- Logout -->
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link text-white">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-md-10">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button class="dropdown-item" type="submit">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@yield('scripts')
</body>
</html>
