<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Peralatan Bayi</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-bold-straight/css/uicons-bold-straight.css'>
    <style>
.hero {
    /* background: url('https://via.placeholder.com/1900x600') no-repeat center center; */
    background-color: pink;
    background-size: cover;
    color: #fff;
}

.hero h1 {
    font-size: 3rem;
}

.hero p {
    font-size: 1.25rem;
}

.card-img-top {
    height: 200px;
    object-fit: cover;
}

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#" style="font-weight: bold; font-size: 25px">LittleHugs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/hmproduct">Produk</a>
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
            <a href="/masuk/daftar" class="btn btn-secondary btn-lg" style="height: 40px; font-size: small;">Masuk/Daftar</a><a href="/berjualan" class="btn btn-primary btn-lg" style="color: white; margin-left: 10px; height: 40px; font-size: small;">Mulai Berjualan</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/bahasa"><i class="fi fi-rr-globe" style="margin-left: 10px"> IND</i></a>
                </li>
            </ul>
            {{-- <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/account"><i class="fi fi-bs-user"></i> Account</a>
                </li>
            </ul> --}}
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero text-white text-center py-5" style="background-color: rgb(255, 62, 94)">
        <div class="container">
            <h1 class="display-4">Selamat Datang di Little Hugs</h1>
            <p class="lead">Temukan berbagai peralatan bayi berkualitas dengan harga terbaik.</p>
            <form class="d-flex" style="margin-left: 300px; width: 40%">
                <input class="form-control me-2" type="text" style="font-style: oblique; border-radius: 20px; margin-left: 10px;" placeholder="Search...">
                <i class="fi fi-rr-search" style="margin-left: -35px; margin-top: 10px;" ></i>
            </form>
        </div>
    </header>

    <!-- Produk Section -->
    <section id="produk" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Produk Terbaru</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpqO02-RrvRHGTQzv1f9JvMj4V7f9LyhDDow&s" class="card-img-top" alt="Botol Susu">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center">Botol Susu</h5>
                            <p class="card-text" style="text-align: center">Rp 56.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR--ziR1zY8_OT2x2VavRl0Nz50c4rEvlM4BA&s" class="card-img-top" alt="Gendongan Bayi">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center">Stroller Bayi</h5>
                            <p class="card-text" style="text-align: center">Rp 1.500.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrl_lRhKjq1xsnHK6A07xkuqJZ9k_GtHU5IQ&s" class="card-img-top" alt="Popok">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center">Tempat Tidur Bayi</h5>
                            <p class="card-text" style="text-align: center">Rp 2.000.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYK4hQsCR5y9J4v3Ti8pga4r_kNaRAeB6Lug&s" class="card-img-top" alt="Botol Susu">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center">Blanket</h5>
                            <p class="card-text" style="text-align: center">Rp 52.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="Botol Susu">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center">Topi</h5>
                            <p class="card-text" style="text-align: center">Rp 82.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgx7XEJ7-OeDmNbTfEuATsGq4rwaks53n1_g&s" class="card-img-top" alt="Botol Susu">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center">Tepukan Bayi</h5>
                            <p class="card-text" style="text-align: center">Rp 18.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="container">
        <h2 class="text-center mb-4">Temukan Promo Menarik</h2>
        <img style="height: 50vh" src="data:image/jpeg;base64,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" class="card-img-top" alt="">
    </div> --}}

    <!-- Footer -->
    <footer class="text-center py-3" style="background-color: rgb(255, 62, 94); margin-top: 50px">
        <div class="container">
            <h1 style="color: white; font-size: 35px; margin-left: -90%; margin-top: 20px">BABY</h1>
            <h1 style="color: white; font-size: 35px; margin-left: -80%">EQUIPMENT</h1>
            <p>&copy; 2024 Peralatan Bayi. Semua hak cipta dilindungi.</p>
        </div>
    </footer>

</body>
</html>
