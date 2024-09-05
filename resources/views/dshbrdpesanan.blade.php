<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pesanan</title>
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
            <a class="navbar-brand" href="#" style="font-weight: bold">PRODUK PESANAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <div class="col-md-4">
            <form action="/search" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="cari" class="form-control" placeholder="Search">
                    <button class="btn btn-primary" type="submit">Go</button>
                </div>
            </form>
        </div>

            <!-- Tabel Data Produk -->
            <div class="row" style="margin-top: 30px">
                <div class="col-md-12">
                    <h4>Daftar Pesanan</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Status</th>                               
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($produk as $key => $item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->nama_produk}}</td>
                                <td>{{$item->harga}}</td>
                                <td>{{$item->stok}}</td>
                                <td>{{$item->kategori}}</td>
                                <td><img src="{{ asset('storage/foto/'.$item->foto) }}" alt="" style="width: 50px; height: 50px"></td>
                            </tr>
                            @endforeach --}}
                       </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- Footer -->
    <footer class="footer" sty>
        <p class="mb-0">&copy; 2024 E-Commerce Peralatan Bayi. Semua Hak Dilindungi.</p>
    </footer> --}}

</body>
</html>
