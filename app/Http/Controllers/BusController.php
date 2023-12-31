<?php

namespace App\Http\Controllers;


use App\Models\Bus;
use App\Models\Rute;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index()
    {
        $buses = Bus::all();

        return view('bus.index', compact('buses'));
    }


    public function create()
    {
        $rutes = Rute::all();
        return view('bus.create', ['rutes' => $rutes]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'merk_mobil' => 'required',
            'model_mobil' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $nama_foto = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('uploads/foto_buses'), $nama_foto);
        } else {
            $nama_foto = null;
        }

        Bus::create([
            'nama_perusahaan' => $request->input('nama_perusahaan'),
            'merk_mobil' => $request->input('merk_mobil'),
            'model_mobil' => $request->input('model_mobil'),
            'foto' => $nama_foto,
        ]);
        session()->flash('success', 'Data berhasil disubmit!');
        return redirect('/bus/create');
    }

    public function destroy($id)
    {
        $Bus = Bus::findOrFail($id);
        $Bus->delete();

        session()->flash('success', 'Data berhasil dihapus!');
        return redirect('/bus/create');
    }
}
