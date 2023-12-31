<?php

namespace App\Http\Controllers;
use App\Models\Supir;
use Illuminate\Http\Request;

class SupirController extends Controller
{
    public function create()
    {
        return view('supir.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nik' => 'required|unique:supirs,nik',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'kota_tempat_tinggal' => 'required',
        ]);

        Supir::create($request->all());
        session()->flash('success', 'Data supir berhasil ditambahkan!');
        return redirect('/supir/create');

    }

    public function edit($id)
    {
        $supir = Supir::findOrFail($id);
        return view('supir.edit', compact('supir'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nik' => 'required|unique:supirs,nik,' . $id,
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'kota_tempat_tinggal' => 'required',
        ]);

        $supir = Supir::findOrFail($id);
        $supir->update($request->all());
        session()->flash('success', 'Data supir berhasil diubah!');
        return redirect('/supir/create');
    }

    public function destroy($id)
    {
        $supir = Supir::findOrFail($id);
        $supir->delete();

        return redirect('/supir/create');
    }

    public function index()
    {
        $supirs = Supir::all();
        return view('supir.create', ['supirs' => $supirs]);
    }
}
