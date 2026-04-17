<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index ()
    {
        return "ini adalah halaman mahasiswa.";
    } 
    
    public function tes(){
        return view("tes");
    }
}
