<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Penumpang;
use Illuminate\Support\Facades\Storage;

class PenumpangController extends Controller
{

    public function index()
    {
        $penumpangs = Penumpang::all();

        return view('penumpang.index', compact('penumpangs'));
    }

    public function create()
    {
        return view('penumpang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_penumpang' => 'required|string|max:255',
            'tanggal_lahir_penumpang' => 'required|date',
            'no_telepon_penumpang' => 'required|string|max:20',
            'email_penumpang' => 'required|email|unique:penumpangs,email_penumpang',
            'foto_penumpang' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan format dan ukuran yang diinginkan
        ]);

        $penumpang = new Penumpang([
            'nama_penumpang' => $request->input('nama_penumpang'),
            'tanggal_lahir_penumpang' => $request->input('tanggal_lahir_penumpang'),
            'no_telepon_penumpang' => $request->input('no_telepon_penumpang'),
            'email_penumpang' => $request->input('email_penumpang'),
        ]);

        // Proses menyimpan file gambar penumpang
        // if ($request->hasFile('foto_penumpang')) {
        //     $fotoPenumpangPath = $request->file('foto_penumpang')->store('uploads/foto_penumpang');
        //     $penumpang->foto_penumpang = $fotoPenumpangPath;
        // }

        // $penumpang->save();

        if ($request->hasFile('foto_penumpang')) {
            $foto_penumpang = $request->file('foto_penumpang');
            $nama_foto_penumpang = time() . '.' . $foto_penumpang->getClientOriginalExtension();
            $foto_penumpang->move(public_path('uploads/foto_penumpang'), $nama_foto_penumpang);
        } else {
            $nama_foto_penumpang = null;
        }
        $penumpang->save();

        return redirect()->route('penumpang.index')->with('success', 'Data penumpang berhasil ditambahkan');
    }
}
