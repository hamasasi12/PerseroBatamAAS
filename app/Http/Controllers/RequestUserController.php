<?php

namespace App\Http\Controllers;

use App\Models\RequestUser;
use App\Models\User;
use Illuminate\Http\Request;

class RequestUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $request = RequestUser::latest()->get();
        // $users = User::all();
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
            'upload_gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'upload_file' => 'nullable|mimes:pdf|max:10000',
        ]);

        $input = $request->all();

        if ($image = $request->file('upload_gambar')) {
            $destinationPath = 'uploads/images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['upload_gambar'] = "$destinationPath$profileImage";
        }

        if ($file = $request->file('upload_file')) {
            $destinationPath = 'uploads/files/';
            $profileFile = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileFile);
            $input['upload_file'] = "$destinationPath$profileFile";
        }

        RequestUser::create($input);

        return redirect()->route('welcome')
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

