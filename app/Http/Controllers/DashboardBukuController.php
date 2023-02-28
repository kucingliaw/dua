<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.buku.index', [
            'title' => 'Buku',
            'bukus' => Buku::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.buku.create', [
            'title' => 'Tambah Buku',
            'kategoris' => Kategori::all(),
            'penerbits' => Penerbit::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'kategori_id' => 'required',
            'penerbit_id' => 'required',
            'tahun_terbit' => 'required|max:4',
            'isbn' => 'required|max:255'
        ]);

        Buku::create($validatedData);
        return redirect('/dashboard/buku')->with('success', 'Buku berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        return view('dashboard.buku.show', [
            'title' => 'Detail Buku',
            'buku' => $buku
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        return view('dashboard.buku.edit', [
            'buku' => $buku,
            'title' => 'Edit Buku',
            'kategoris' => Kategori::all(),
            'penerbits' => Penerbit::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $rules = [
            'judul' => 'required|max:255',
            'kategori_id' => 'required',
            'penerbit_id' => 'required',
            'tahun_terbit' => 'required|max:4',
            'isbn' => 'required|max:255'
        ];

        $validatedData = $request->validate($rules);

        Buku::where('id', $buku->id)->update($validatedData);
        return redirect('/dashboard/buku')->with('success', 'Buku berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        Buku::destroy($buku->id);

        return redirect('/dashboard/buku')->with('success', 'Buku berhasil dihapus!');
    }
}
