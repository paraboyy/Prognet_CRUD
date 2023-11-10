<?php

namespace App\Http\Controllers;

use App\Models\Pekerja;
use Illuminate\Http\Request;

class PekerjaController extends Controller
{

    public function index()
    {
        $pekerja = Pekerja::all();
        return view('home', compact('pekerja'));
    }

    public function edit($id)
    {
        $pekerja = Pekerja::find($id);
        return view('edit', compact('pekerja'));
    }

    public function update(Request $request, $id)
    {
        $pekerja = Pekerja::find($id);
        $pekerja->update($request->all());
        return redirect('/');
    }

    public function destroy($id)
    {
        Pekerja::destroy($id);
        return redirect('/');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        Pekerja::create($request->all());

        return redirect('/')->with('success', 'Data pekerja berhasil ditambahkan!');
    }

}
