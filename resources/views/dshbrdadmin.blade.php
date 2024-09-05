<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard E-Commerce Peralatan Bayi</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <style>
        body {
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: rgb(255, 1, 86);
            color: #fff;
            padding-top: 20px;
        }
        .sidebar a {
            color: #fff;
            padding: 10px 15px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: rgb(255, 62, 94);
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .card-deck .card {
            margin-bottom: 20px;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }
        .chart-container {
            position: relative;
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center">NAMA TOKO</h4>
        <a href="/dsbrberanda">Beranda</a>
        <a href="/produk">Produk</a>
        <a href="/pesanan">Pesanan</a>
        {{-- <a href="#">Pengguna</a> --}}
        {{-- <a href="#">Laporan</a> --}}
        <a href="/dsbrdset">Pengaturan</a>
        <a href="/dsbrdlogout">LogOut</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar atas -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#" style="font-weight: bold">DASHBOARD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        

        <!-- Dashboard Content -->
        <div class="container mt-4">
            <div class="row">
                <!-- Card Statistik 1 -->
                <div class="col-md-3 mb-4">
                    <div class="card text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Total Penjualan</h5>
                            <p class="card-text">Rp0,000,000,000</p>
                        </div>
                    </div>
                </div>
                <!-- Card Statistik 2 -->
                <div class="col-md-3 mb-4">
                    <div class="card text-white bg-success">
                        <div class="card-body">
                            <h5 class="card-title">Total Produk Terjual</h5>
                            <p class="card-text">0,000</p>
                        </div>
                    </div>
                </div>
                <!-- Card Statistik 3 -->
                <div class="col-md-3 mb-4">
                    <div class="card text-white bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">Pesanan Terpending</h5>
                            <p class="card-text">00</p>
                        </div>
                    </div>
                </div>
                <!-- Card Statistik 4 -->
                <div class="col-md-3 mb-4">
                    <div class="card text-white" style="background-color: palevioletred">
                        <div class="card-body">
                            <h5 class="card-title">Produk Stok Habis</h5>
                            <p class="card-text">00</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <!-- Grafik Penjualan -->
            <div class="row">
                <div class="col-md-12 mb-4">
                    <h4>Grafik Penjualan Bulanan</h4>
                    <div class="chart-container">
                        <canvas id="salesChart"></canvas>
                    </div>
                </div>
            </div> --}}
            
    {{-- <!-- Footer -->
    <footer class="footer">
        <p class="mb-0">&copy; 2024 E-Commerce Peralatan Bayi. Semua Hak Dilindungi.</p>
    </footer> --}}

</body>
</html>
