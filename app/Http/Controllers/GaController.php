<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class GaController extends Controller
{
    
    public function index()
    {

    $response = Http::get('http://127.0.0.1:8001/api/api/karyawan');
    $karyawan = $response->json();

    
    // Sekarang $karyawan berisi data karyawan dari HRD
    return view('ga.index', ['karyawan' => $karyawan]);

    }
    
   
}
