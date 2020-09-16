<?php

namespace App\Http\Controllers;

use App\Picture;
use App\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::paginate(15);
        return view('admin.pesanan', compact('pesanan'));
    }
    public function create($id)
    {
        $data_mobil = Picture::find($id);
        return view ('frontend.pesan', compact('data_mobil'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'mobil' => 'required',
            'nomor_hp' => 'required|min:11',
            'alamat' => 'required',
            'tanggal_pesan' => 'required',
            'selesai_pesan' => 'required'
        ]);
        Pesanan::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'mobil' =>$request->mobil,
            'nomor_hp' =>$request->nomor_hp,
            'alamat' =>$request->alamat,
            'tanggal_pesan' =>$request->tanggal_pesan,
            'selesai_pesan' =>$request->selesai_pesan
        ]);
        return redirect('/redirect');
    }
    public function delete2($id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->delete();

        return redirect()->back();
    }
}
