<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use App\Models\PertanyaanSekolah;
use Illuminate\Http\Request;

class RespondenController extends Controller
{
    function formsurveysekolah()
    {
        return view('responden.formSurveySekolah');
    }

    public function inputpertanyaansekolah(Request $request)
    {
        PertanyaanSekolah::create([
            // BAGIAN 1
            'pertanyaan1' => $request->input('pertanyaan1'),
            'pertanyaan2' => $request->input('pertanyaan2'),
            'pertanyaan3' => $request->input('pertanyaan3'),

            // BAGIAN 2
            'pertanyaan4' => $request->input('pertanyaan4'),
            'pertanyaan5' => $request->input('pertanyaan5'),
            'pertanyaan6' => $request->input('pertanyaan6'),
            'pertanyaan7' => $request->input('pertanyaan7'),
            'pertanyaan8' => $request->input('pertanyaan8'),
            'pertanyaan9' => $request->input('pertanyaan9'),
            'pertanyaan10' => $request->input('pertanyaan10'),
            'pertanyaan11' => $request->input('pertanyaan11'),
            'pertanyaan12' => $request->input('pertanyaan12'),
            'pertanyaan13' => $request->input('pertanyaan13'),
            'pertanyaan14' => $request->input('pertanyaan14'),
            'pertanyaan15' => $request->input('pertanyaan15'),
        ]);
        return redirect()
            ->route('dashboard')
            ->with(['success' => 'Data Berhasil Disimpan!']); 
    }

    function detailrespondensekolah(Request $request, $id)
    {
        $dataPertanyaan2 = PertanyaanSekolah::all();
        // dd($dataPertanyaan2);
        return view('responden.detail_respondenSekolah',compact('dataPertanyaan2'));
        
    }

}
