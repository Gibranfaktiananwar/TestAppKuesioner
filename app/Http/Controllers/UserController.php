<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use App\Models\PertanyaanSekolah;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function dashboard() 
    {
        $dataPertanyaan = PertanyaanSekolah::all();
        return view('user.dashboard', compact('dataPertanyaan'));
    }
}
