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
    
    // public function index()
    // {
    //     $allowedUrl = 'http://127.0.0.1:8000/ga/admin';
    //     $referer = request()->headers->get('referer');

    //     // Pengecekan apakah referer sama dengan URL yang diizinkan
    //     if ($referer !== $allowedUrl) {
    //         return response()->json(['message' => 'Unauthorized. Only allowed from specified URL.'], 403);
        
    //     }

    //     // Jika referer sesuai, dapatkan data karyawan dari API HRD
    //     $response = Http::get('http://127.0.0.1:8001/api/karyawan');
    //     $karyawan = $response->json(); // Ambil data karyawan dari respons API

    //     // Sekarang $karyawan berisi data karyawan dari HRD
    //     return view('ga.index', ['karyawan' => $karyawan]);
    // }
}
