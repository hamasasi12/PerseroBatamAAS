<?php

namespace App\Http\Controllers;

use App\Models\Perbaikan;
use Illuminate\Http\Request;

class PerbaikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perbaikan = Perbaikan::all();
        return view('pages.permintaan_perbaikan', compact('perbaikan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.form-perbaikan');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'no_permintaan' => 'required',
        'pic_permintaan' => 'required',
        'departemen' => 'required',
        'tanggal_permintaan' => 'required',
        'deskripsi_permintaan' => 'required'
        ]);
        Perbaikan::create($request->all());
            return redirect()->route('Perbaikan.index')->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $perbaikan = Perbaikan::findOrFail($id);
        return view('pages.edit-data-perbaikan', compact('perbaikan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $perbaikan = Perbaikan::findOrFail($id);
        $perbaikan->update($request->all());
        return redirect()->route('Perbaikan.index')->with('success', 'Data Berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $perbaikan = Perbaikan::findOrFail($id);
        $perbaikan->delete();
        return back()->with('info', 'Data telah dihapus');
    }
}
