<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FormController extends Controller
{
    //fungsi menampilkan form register
    public function register()
    {
        return view('form.register');
    }

    // menampilan form hitung luas persegi panjang
    public function formLuas()
    {
        return view('form.hitung');
    }

    // Request $request biar untuk bisa menerima suatu inputan
    public function postData(Request $request)
    {
        $username = $request->username; //$request->username ini dapat dari inputan form yg name nya = username
        $password = Hash::make($request->password); //$request->username ini dapat dari inputan form yg name nya = password

        // saat function postData dijalankan, tampilan view output
        return view('form.output', compact('username','password') ); //compact berfungsi untuk mengirimkan data ke view
    }

    // function hitung luas
    public function hitungLuas(Request $request) {

        $panjang = $request->panjang;
        $lebar = request('lebar'); // request() => function utk menerima inputan dari form / api / dsb

        $luas = $panjang * $lebar;

        return view('welcome', [ // mengirim data ke view hasil.blade.php dengan array
            'panjang' => $panjang,
            'lebar' => $lebar,
            'luas' => $luas
        ] );

    }

    
}
