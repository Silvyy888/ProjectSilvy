<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    //
    public function create(){
        return view('produk-create');
    }

    public function show(){
        // $data['produk'] = Produk::all();
        $data['produk'] = Produk::orderby('nama_produk','asc')->get();
        $data['total'] = $data['produk']->count();

        return view('dshbrdproduk', $data);
    }

    public function search(Request $request){
        $data['produk'] = Produk::where('nama_produk',$request->cari)->orWhere('kategori',$request->cari)->get();
        $data['total'] = $data['produk']->count();

        return view('dshbrdproduk',$data);
    }
    
    // public function createproduk(){
    //     return view('dshbrdproduk');
    // }
    // public function simpan(){
    //     return view('dshbrdproduk');
    // }

    public function add(Request $request){
        $validateData = $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'kategori' => 'required',        
            'foto' => 'image'
        ]);
        $fileName = '';
        if($request->file('foto')){
            $extfile = $request -> file('foto')->getClientOriginalExtension();
            $fileName = time(). ".".$extfile;
            $request->file('foto')->storeAs('foto',$fileName);
        }
        $produk = Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategori' => $request->kategori,           
            'foto' => $fileName
        ]);
        if($produk){
            Session::flash('pesan','Data berhasil ditambahkan');
        }else{
            Session::flash('pesan','Data gagal ditambahkan');
        }
        
        return redirect('produk');
    }

    public function edit(Request $request){
        $data['produk'] = Produk::all();
        $data['produk'] = Produk::find($request->id);
        return view('produk-edit',$data);
    }

    public function update(Request $request){
        // $produk = Produk::find($request->id);

        // Storage::delete($produk->foto);
        
        $fileName = '';
        if($request->file('foto')){
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time(). ".".$extfile;
            $request->file('foto')->storeAs('foto',$fileName);
        }

        // $update = 
        $update = Produk::where('id',$request->id)->update([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategori' => $request->kategori,
            'foto' => $fileName
        ]);
        if($update){
            Session::flash('pesan','Data berhasil diubah');
        }else{
            Session::flash('pesan','Data gagal diubah');
        }
        return redirect('produk');
    }

    public function delete(Request $request)
    {
        $produk = Produk::find($request->id);
        $delete = Produk::where('id', $request->id)->delete();
        if ($delete) {
            if($produk->foto) {
                Storage::delete('foto/' .$produk->foto);
            }
            Session::flash('pesan', 'Data berhasil dihapus');
        }else{
            Session::flash('pesan', 'Data gagal dihapus');
        }
        return redirect('produk');
    }
}
