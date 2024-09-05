@extends('template-edit')
{{-- @section('content') --}}
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header text-center" style="background-color: rgb(255, 62, 94); color: white">
                    EDIT PRODUK
                </div>
                <div class="card-body">
                    <form action="/produk/edit/{{$produk->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group pt-2">
                            <label for="productName">Nama Produk</label>
                            <input type="text" class="form-control" id="productName" placeholder="Masukkan nama produk" name="nama_produk" value="{{$produk->nama_produk}}"> 
                        </div>
                        <div class="form-group pt-2">
                            <label for="price">Harga</label>
                            <input type="number" class="form-control" id="price" placeholder="Masukkan harga produk" name="harga" value="{{$produk->harga}}">
                        </div>
                        <div class="form-group pt-2">
                            <label for="quantity">Stok</label>
                            <input type="number" class="form-control" id="quantity" placeholder="Masukkan stok produk" name="stok" value="{{$produk->stok}}">
                        </div>
                        <div class="form-group" style="margin-top: 5px">
                            <label for="productCategory">Kategori</label>
                            <select class="form-control" id="category" value="{{$produk->kategori}}" name="kategori">
                                <option value="" disabled selected>Pilih Kategori</option>
                                <option value="Perawatan">Perawatan</option>
                                <option value="Fashion">Fashion</option>
                                <option value="Aksesoris">Aksesoris</option>
                                <option value="Perlengkapan Mandi">Perlengkapan Mandi</option>
                            </select>
                        </div>
                        <div class="form-group pt-2">
                            <label for="image">Foto</label>
                            <input type="file" class="form-control-file" id="image" name="foto" value="{{$produk->foto}}">
                        </div>
                        <button type="submit" class="btn btn-danger w-100 btn-block mt-5">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
{{-- @endsection --}}
