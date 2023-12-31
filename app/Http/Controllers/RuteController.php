<?php

namespace App\Http\Controllers;
use App\Models\Rute;
use Illuminate\Http\Request;

class RuteController extends Controller
{
    public function create()
    {
        return view('rute.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titik_jemput' => 'required',
            'tujuan' => 'required',
        ]);

        Rute::create($request->all());
        session()->flash('success', 'Data berhasil disubmit!');
        return redirect('/rute/create');
    }

    public function edit($id)
    {
        $rute = Rute::findOrFail($id);
        return view('rute.edit', compact('rute'));
    }


    public function update(Request $request, $id)
    {
    // Validasi data
    $request->validate([
        'titik_jemput' => 'required',
        'tujuan' => 'required',
        // ... Validasi untuk field-field lainnya ...
    ]);

        // Update data rute berdasarkan ID
        $rute = Rute::findOrFail($id);
        $rute->update($request->all());
        session()->flash('success', 'Data rute berhasil diubah!');
        return redirect('/rute/create');

    }

    public function destroy($id)
    {
    // Hapus data rute berdasarkan ID
    $rute = Rute::findOrFail($id);
    $rute->delete();

    session()->flash('success', 'Data rute berhasil dihapus!');
    return redirect('/rute/create');

    }

    public function index()
    {
        $rutes = Rute::all();
        return view('rute.create', ['rutes' => $rutes]);
    }
}
