<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MakananController extends Controller
{
    public function tampil()
    {
//        $makanan = 'Bakso';
//        $minuman = 'Es Tea';
//        $makanan = [
//            ['nama' => 'Bakso', "harga" => 5000],
//
//            ['nama' => 'Mie ayam', "harga" => 5000]
//        ];

        $biodata = [
            'nama' => 'Febrian Alif Hermawan',
            'nim' => '21103041086',
            'kuliah'=>'University Wahit Hasyim Semarang',
            'alamat' => 'Jl.Jetis Kalisegoro Rt1/Rw1',
            'hobis' => ['Mancing', 'Memasak', 'Motor Motoran',],
            'cita' => 'Menjadi Hamba Allah',
        ];

        return view('welcome',
            ['biodata' => $biodata
//'makanan' => $makanan,
//'minuman' => $minuman
            ]);
    }
}
