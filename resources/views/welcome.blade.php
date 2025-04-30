<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Inventaris Modern</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(120deg, #4f7be0, #2d55a6);
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background: linear-gradient(90deg, #00264d, #00509e);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .navbar .navbar-brand {
            font-weight: bold;
            color: #fff;
            font-size: 1.5rem;
        }
        .navbar .nav-link {
            color: #fff;
            font-weight: 500;
            margin-left: 15px;
        }
        .navbar .nav-link:hover {
            color: #d1e8ff;
        }
        .hero-section {
            text-align: center;
            padding: 100px 20px;
            height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            box-shadow: inset 0 -50px 100px rgba(0, 0, 0, 0.3);
            border-bottom: 5px solid #004c9a;
        }
        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            line-height: 1.5;
        }
        .hero-section .btn {
            margin: 10px;
            padding: 12px 30px;
            font-size: 1rem;
            font-weight: bold;
            color: #fff;
            border: none;
            transition: all 0.3s ease;
        }
        .hero-section .btn-primary {
            background: #007bff;
        }
        .hero-section .btn-primary:hover {
            background: #0056b3;
        }
        .hero-section .btn-light {
            background: #f8f9fa;
            color: #0056b3;
        }
        .hero-section .btn-light:hover {
            background: #e2e6ea;
        }
        .about-section {
            padding: 60px 20px;
            background: #ffffff;
            color: #333;
            text-align: center;
        }
        .about-section h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .about-section p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }
        footer {
            background-color: #00264d;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        footer a {
            color: #4fb4ff;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Inventaris</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                   
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Selamat Datang di Sistem Inventaris Modern</h1>
        <p>Kelola aset dan stok Anda dengan mudah dan efisien dalam satu platform terintegrasi.</p>
        <div>
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            <a href="{{ route('register') }}" class="btn btn-light">Register</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <h2>Tentang Sistem Inventaris</h2>
            <p>
                Sistem inventaris modern dirancang untuk memberikan kemudahan dalam mengelola aset, stok barang, dan pelaporan
                secara terstruktur. Dengan fitur-fitur inovatif, Anda dapat memastikan bahwa semua data inventaris Anda
                tersimpan dengan aman dan mudah diakses kapan saja.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Inventaris Modern. All Rights Reserved. | <a href="#">Privacy Policy</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
