

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <style>
        .container {
            max-width: 600px;
            max-height: 600px;
            margin-top: 50px;
        }
        .form-group label {
            font-weight: bold;
        }
    </style>
</head>
<body style="background-color: white;">
    <div class="container" style="background-color: whitesmoke; border-radius: 20px;">
        <h2 class="text-center" style="font-size: 25px; font-weight: bold;">TAMBAH PRODUK</h2>

        <form action="/produk/create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="margin-top: 5px">
                <label for="productName">Nama Produk</label>
                <input type="text" class="form-control" id="productName" placeholder="Masukkan nama produk" value="{{old('nama_produk')}}" name="nama_produk">
            </div>
            <div class="form-group" style="margin-top: 5px">
                <label for="productPrice">Harga</label>
                <input type="number" class="form-control" id="productPrice" placeholder="Masukkan harga produk" value="{{old('harga')}}" name="harga">
            </div>
            <div class="form-group" style="margin-top: 5px">
                <label for="productPrice">Stok</label>
                <input type="number" class="form-control" id="quantity" placeholder="Masukkan stok produk" value="{{old('stok')}}" name="stok">
            </div>
            <div class="form-group" style="margin-top: 5px">
                <label for="productCategory">Kategori</label>
                <select class="form-control" id="category" value="{{old('kategori')}}" name="kategori">
                    <option value="" disabled selected>Pilih Kategori</option>
                    <option value="Perawatan">Perawatan</option>
                    <option value="Fashion">Fashion</option>
                    <option value="Aksesoris">Aksesoris</option>
                    <option value="Perlengkapan Mandi">Perlengkapan Mandi</option>
                </select>
            </div>
            {{-- <div class="form-group" style="margin-top: 5px">
                <label for="productDescription">Deskripsi Produk</label>
                <textarea class="form-control" id="productDescription" rows="4" placeholder="Masukkan deskripsi produk" required></textarea>
            </div> --}}
            <div class="form-group" style="margin-top: 5px">
                <label for="image">Foto</label>
                <input type="file" class="form-control-file" id="image" value="{{old('foto')}}" name="foto">
            </div>
            <button  type="submit" class="btn btn-secondary" style="margin-left: 40%; margin-top: 10px; max-height: 40px;">SIMPAN</button>
            {{-- <a href="/simpan" class="btn btn-secondary" style="margin-left: 40%; margin-top: 10px; max-height: 40px;">SIMPAN</a> --}}
        </form>
    </div>
</body>
</html>


