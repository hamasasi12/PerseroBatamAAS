<?php

namespace App\Http\Controllers;

use App\Models\TindakLanjut;
use Illuminate\Http\Request;

class TindakLanjutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tindaklanjut = TindakLanjut::all();
        return view('pages.tindaklanjut_perbaikan', compact('tindaklanjut'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.form-tindaklanjut');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'tanggal' => 'required',
           'pic' => 'required',
           'kode_asset' => 'required',
           'keterangan' => 'required',
           'status' => 'required',
            ]);

        TindakLanjut::create($request->all());
        return redirect()->route('Tindaklanjut.index')->with('success', 'Post created successfully.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
