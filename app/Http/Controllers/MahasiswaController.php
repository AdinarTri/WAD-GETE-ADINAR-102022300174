<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $mahasiswa =[
            'nama'=>'Adinar Tri',
            'nim'=>'102022300174',
            'email'=>'recontol39@gmail.com',
            'jurusan'=>'S1 Sistem Informasi',
            'fakultas'=>'Rekayasa Industri'
        ];
        return view('profil',['mahasiswa' => $mahasiswa]);
    }
}
