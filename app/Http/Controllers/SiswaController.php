<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Data Siswa',
            'siswa' => Siswa::all(),
        ];

        return view('admin.data-siswa', $data);
    }

    public function create()
    {
        
    }
}
