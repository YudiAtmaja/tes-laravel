<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\Kategori as ModelsKategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $data = Kategori::all();
        return view('kategori', compact('data'));
        // return view('kategori');
    }

    public function tambahkategori()
    {
        return view('tambahkategori');
    }

    public function insertkategori(Request $request)
    {
        Kategori::create($request->all());
        return redirect()->route('kategori');
    }

    public function tampilkategori($id)
    {
        $data = Kategori::find($id);
        return view('tampilkategori', compact('data'));
    }

    public function updatekategori(Request $request, $id)
    {
        $data = Kategori::find($id);
        $data->update($request->all());
        return redirect()->route('kategori');
    }

    public function delete($id)
    {
        $data = Kategori::find($id);
        $data->delete();
        return redirect()->route('kategori');
    }
}
