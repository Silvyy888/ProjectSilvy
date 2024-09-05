<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // UNTUK LOGIN USER
    public function login(){
        return view(view:'beranda');
    }
    public function auth(Request $request){
        $validasi = $request->validate(rules:[
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($validasi)){
            return redirect('beranda')->with('pesan', 'login anda berhasil');
        }
        return redirect()->back()->with('pesan','Login anda gagal');

    }

    // UNTUK ADMIN
    public function admin(){
        return view('admin');
    }
    public function dftradmin(){
        return view(view: 'dshbrdadmin');
    }
    public function authentication(Request $request){
        $validasi = $request->validate(rules:[
            'name_toko' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($validasi)) {
            return redirect('dshbrdadmin')->with('pesan', 'Pendaftaran Berhasil');
        }
        return redirect()->back()->with('pesan', 'Pendaftaran Gagal');
    }


    public function index(){
        return view('home');
    }
    public function beranda(){
        return view('beranda');
    }

    // UNTUK PAGE DASHBOARD
    public function dshbrd(){
        return view('dshbrdadmin');
    }
    public function dshbrdproduk(){
        return view('dshbrdproduk');
    }
    public function dshbrdpesanan(){
        return view('dshbrdpesanan');
    }
    public function dshbrdlogout(){
        return view('beranda');
    }
    public function dshbrdsetting(){
        return view('setting');
    }


    public function daftar(){
        return view(view:'login');
    }
    public function account(){
        return view('account');
    }
    public function trolly(){
        return view('trolly');
    }
    public function checkout(){
        return view('co');
    }
    public function hmproduct(){
        return view('homeproduct');
    }

    // public function create(){
    //     return view('produk-create');
    // }

    function logout(){
        Auth::logout();
        return redirect('/login');
    }

}
