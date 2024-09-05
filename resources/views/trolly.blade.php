<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Keranjang Berwarna</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-bold-straight/css/uicons-bold-straight.css'>
    <style>
    <style>
        .cart-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
        }
        .cart-item {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .cart-summary {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            background-color: #f1f1f1;
        }
        .cart-summary h3 {
            color: #007bff;
        }
        .btn-checkout {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-checkout:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#" style="font-weight: bold; font-size: 25px">LittleHugs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/trolly"><i class="fi fi-rr-shopping-cart" style="margin-top: 10px"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fav"><i class="fi fi-br-heart"></i></a>
                    </li>
                </ul>
            </div>
            {{-- <a href="/berjualan" class="btn btn-primary btn-lg" style="color: white; margin-left: 10px; height: 40px; font-size: small;">Mulai Berjualan</a> --}}
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/account"><i class="fi fi-bs-user"></i> Account</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/bahasa"><i class="fi fi-rr-globe" style="margin-left: 10px"> IND</i></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">TROLLY</h1>
        
        <div class="row">
            <!-- Daftar Item Keranjang -->
            <div class="col-md-8">
                <div class="list-group">
                    <div class="list-group-item d-flex justify-content-between align-items-center cart-item">
                        <img src="https://via.placeholder.com/80" alt="Item 1" class="me-3">
                        <div class="d-flex flex-column">
                            <h5 class="mb-1">Nama Item 1</h5>
                            <p class="mb-1">Deskripsi singkat item 1.</p>
                            <small>Ukuran: M</small>
                        </div>
                        <span class="badge bg-success rounded-pill">$20.00</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center cart-item">
                        <img src="https://via.placeholder.com/80" alt="Item 2" class="me-3">
                        <div class="d-flex flex-column">
                            <h5 class="mb-1">Nama Item 2</h5>
                            <p class="mb-1">Deskripsi singkat item 2.</p>
                            <small>Ukuran: L</small>
                        </div>
                        <span class="badge bg-warning text-dark rounded-pill">$35.00</span>
                    </div>
                </div>
            </div>

            <!-- Ringkasan Keranjang -->
            <div class="col-md-4">
                <div class="cart-summary">
                    <h3>Ringkasan</h3>
                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between mb-2">
                            <span>Subtotal:</span>
                            <strong>$55.00</strong>
                        </li>
                        <li class="d-flex justify-content-between mb-2">
                            <span>Pengiriman:</span>
                            <strong>Gratis</strong>
                        </li>
                        <li class="d-flex justify-content-between mb-2">
                            <span>Total:</span>
                            <strong>$55.00</strong>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-checkout w-100 mt-3 text-white">Checkout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
