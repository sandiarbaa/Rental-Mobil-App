<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        $mobils = Mobil::paginate(2);
        return view('mobils.index', compact('mobils'));
    }

    public function create()
    {
        return view('mobils.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required',
            'model' => 'required',
            'tahun' => 'required|digits:4|integer|min:1900|max:' . (date('Y')),
            'harga_beli' => 'required|numeric',
        ]);

        Mobil::create($request->all());

        return redirect()->route('mobils.index')->with('success', 'Mobil berhasil ditambahkan.');
    }

    public function show(Mobil $mobil)
    {
        return view('mobils.show', compact('mobil'));
    }

    public function edit(Mobil $mobil)
    {
        return view('mobils.edit', compact('mobil'));
    }

    public function update(Request $request, Mobil $mobil)
    {
        $request->validate([
            'merk' => 'required',
            'model' => 'required',
            'tahun' => 'required|digits:4|integer|min:1900|max:' . (date('Y')),
            'harga_beli' => 'required|numeric',
        ]);

        $mobil->update($request->all());

        return redirect()->route('mobils.index')->with('success', 'Mobil berhasil diperbarui.');
    }

    public function destroy(Mobil $mobil)
    {
        $mobil->delete();

        return redirect()->route('mobils.index')->with('success', 'Mobil berhasil dihapus.');
    }
}
