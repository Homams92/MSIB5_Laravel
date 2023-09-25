<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class univ extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alamat = ' No.179 A, Jl belakang Jl. Pasir Kaliki No.179, Pamoyanan, Kec. Cicendo, Kota Bandung, Jawa Barat 40173';
        $tahun = '13 Februari 2008';

        $data['alamat']=$alamat;
        $data['tahun']=$tahun;

        return view('univ/univ',$data);
    }
}
