<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;

class DataMobilController extends Controller
{
    public function index()
    {
        $data_mobil = Picture::paginate(3);
        return view('admin.dashboard', compact('data_mobil'))  ;
    }
    
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_mobil' => 'required',
            'harga_sewa' => 'required',
            'keterangan' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
            $file = $request->file('file');

            $nama_file = time()."_".$file->getClientOriginalName();

            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload,$nama_file);

            Picture::create([
                'nama_mobil' => $request->nama_mobil,
                'harga_sewa' => $request->harga_sewa,
                'keterangan' => $request->keterangan,
                'file' => $nama_file
            ]);
        return redirect('/dashboard');
    }

    public function edit($id)
    {
        $data_mobil = Picture::find($id);
        return view ('admin.edit', compact('data_mobil'));
    }
    public function upload($id, Request $request)
    {
        $this->validate($request, [
            'nama_mobil' => 'required',
            'harga_sewa' => 'required',
            'keterangan' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]); 

        $file = $request->file('file');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        $data_mobil = Picture::find($id);
        $data_mobil->nama_mobil = $request->nama_mobil;
        $data_mobil->harga_sewa = $request->harga_sewa;
        $data_mobil->keterangan = $request->keterangan;
        $data_mobil->file = $request->nama_file;
        $data_mobil->save();
        return redirect ('/dashboard');
    }
    public function delete ($id)
    {
        $data_mobil = Picture::find($id);
        $data_mobil->delete();

        return redirect ('/dashboard');
    }
    public function index2()
    {
        $data_mobil = Picture::paginate(3);
        return view('frontend.mobil', compact('data_mobil'));
    }
    public function index3($id)
    {
        $data_mobil = Picture::find($id);
        return view('frontend.detail', compact('data_mobil'));
    }
    public function index4()
    {
        return Picture::all();
    }
}
