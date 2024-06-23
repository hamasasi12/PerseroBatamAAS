<?php

namespace App\Http\Controllers;

use App\Models\TambahDataHardware;
use Illuminate\Http\Request;

class HardwareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hardware = TambahDataHardware::all();
        return view('pages.hardware', compact('hardware'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.form-hardware');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_inventaris' =>'required',
            'tahun' =>'required',
            'jenis' =>'required',
            'merek' =>'required',
            'proc' =>'required',
            'ram' =>'required',
            'hdd' =>'required',
            'ip' =>'required',
            'user' =>'required',
            'unit' =>'required',
            'lokasi' =>'required',
            'status' =>'required',
            'windows' =>'required',
            'office' =>'required',
            'garansi' =>'required',
        ]);
            TambahDataHardware::create($request->all());
            return redirect()->route('TambahDataHardware.index')->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hardware = TambahDataHardware::findOrFail($id);
        return view('pages.form-hardware-perbaikan', compact('hardware'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hardware = TambahDataHardware::findOrFail($id);
        $hardware->update($request->all());
        return redirect()->route('TambahDataHardware.index')->with('success', 'Data Berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hardware = TambahDataHardware::findOrFail($id);
        $hardware->delete();
        return back()->with('info', 'Data telah dihapus');
    }
}
