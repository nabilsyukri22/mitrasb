<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index()
    {
        return view('mitra.daftar', [
            'title' => 'Daftar',
        ]);    
    }

    public function store(Request $request)
    {
        $request->validate([
        'nama_lengkap' => 'required',
        'jenis_kelamin' => 'required',
        'nik' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'umur' => 'required',
        'status_perkawinan' => 'required',
        'domisili' => 'required',
        'kelurahan' => 'required',
        'pendidikan' => 'required',
        'nowa' => 'required',
        'email' => 'required',
        'pekerjaan' => 'required',
        'motor' => 'required',
        'hp' => 'required',
        'zoom' => 'required',
        'spek_hp' => 'required',
        'pas_foto' => 'required',
        'ktp' => 'required',
        ]);

        dd('berhasil'); 
        // return request()->all();
    }
    
}
