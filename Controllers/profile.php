<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profile extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $name = 'Rafi Humam Nugraha';
        $umur = '21thn';
        $sodara = '2 bersaudara';

        $data['name']=$name;
        $data['umur']=$umur;
        $data['sodara']=$sodara;
        return view('halamanprofile/profile',$data);
    }

}
