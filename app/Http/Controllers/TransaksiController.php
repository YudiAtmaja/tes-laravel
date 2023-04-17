<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = Transaksi::all();
        return view('transaksi', compact('data'));
    }

    public function tambahtransaksimasuk()
    {
        $datas = Kategori::all();
        return view('tambahpemasukan', compact('datas'));
    }

    public function inserttransaksi(Request $request)
    {
        Transaksi::create($request->all());
        return redirect()->route('transaksi');
    }

    public function tampiltransaksi($id)
    {
        $data = Transaksi::find($id);
        $datas = Kategori::all();
        return view('tampiltransaksi', compact('data', 'datas'));
    }

    public function updatetransaksi(Request $request, $id)
    {
        $data = Transaksi::find($id);
        $data->update($request->id_kategori);
        return redirect()->route('transaksi');
    }

    public function deletetransaksi($id)
    {
        $data = Transaksi::find($id);
        $data->delete();
        return redirect()->route('transaksi');
    }
}
