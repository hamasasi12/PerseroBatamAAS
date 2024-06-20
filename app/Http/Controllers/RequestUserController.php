<?php

namespace App\Http\Controllers;
use App\Models\RequestUser;

use Illuminate\Http\Request;

class RequestUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $request = RequestUser::latest()->get();
        return view('pages.permintaan-masuk', compact('request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pages.request-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nup' => 'required',
            'nama' => 'required',
            'divisi' => 'required',
            'no_hp' => 'required',
            'kategori_req' => 'required',
            'deskripsi_req' => 'required',
            'alasan_req' => 'required',
        ]);

        RequestUser::create($request->all());

        return redirect()->route('request-user')
            ->with('success', 'Request user baru berhasil ditambahkan.');
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

    public function req()
    {
        return view('pages.request-user');
    }
}
