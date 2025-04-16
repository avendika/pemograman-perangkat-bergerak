<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('jurusan.crud', compact('jurusan'));
    }

    public function create()
    {
        return view('jurusan.create');
    }

    public function show($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('jurusan.show', compact('jurusan'));
    }

    public function edit($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('jurusan.edit', compact('jurusan'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'konten' => 'nullable|string',
        ]);

        Jurusan::create($request->all());
        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'konten' => 'nullable|string',
        ]);

        $jurusan = Jurusan::findOrFail($id);
        $jurusan->update($request->all());
        return redirect()->route('jurusan.crud')->with('success', 'Jurusan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();
        
        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil dihapus!');
    }

    // search-------------------------------------------------


}
