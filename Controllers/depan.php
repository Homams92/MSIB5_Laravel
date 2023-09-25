<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class depan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $name = 'humam';
        $lahir = 'bandung';
        $univ = 'IWU';

        $data['name']=$name;
        $data['lahir']=$lahir;
        $data['univ']=$univ;
        return view('halamandepan/depan', $data);
    }
}