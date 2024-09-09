<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    function barang()
    {
        $data = Barang::all();
        // $data = ModelsItem::where('condition','Mulus no minus')->get();
        return view('user.barang', compact('data'));
    } 

    function form()
    {
        return view('user.tambah_barang');
    }

    public function inputbarang(Request $request)
    {
        Barang::create([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'condition' => $request->input('condition'),
            'quantity' => $request->input('quantity'),
        ]);
        return redirect()
            ->route('barang')
            ->with(['success' => 'Data Berhasil Disimpan!']); 
    }

    function deletebarang(Request $request, $id)
    {
        $barang = Barang::find($id);
        if (!$barang) {
            return redirect()->back()->with('error', 'Item tidak ditemukan.');
        }
        $barang->delete();
        return redirect()->back()->with('success', 'Item berhasil dihapus.'); 
        
    }

    function updatebarang(Request $request, $id)
    {
        $data = Barang::findOrFail($id);
        return view('user.update_barang',compact('data'));
    }

    public function suksesupdate(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->update([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'condition' => $request->input('condition'),
            'quantity' => $request->input('quantity'),
        ]);
        return redirect()
            ->route('barang')
            ->with(['success' => 'Data Berhasil Disimpan!']); 
    }

}
