<?php

namespace App\Http\Controllers;

use App\Models\Dikerjakan;
use App\Models\selesai;
use Illuminate\Http\Request;
use App\Models\RequestUser;
use App\Models\User;

class DataDikerjakanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = Dikerjakan::latest()->get();
        $technicians = User::all();
        return view('pages.dikerjakan', compact('requests', 'technicians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $request = Dikerjakan::findOrFail($id); // Misalnya, ambil data request berdasarkan ID
        return view('pages.pekerjaan_selesai', compact('request'));
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

    public function moveToSelesai($id)
    {
        // Mengambil data permintaan berdasarkan ID
        $request = Dikerjakan::find($id);
        
        if ($request) {
            // Membuat entri baru di tabel dikerjakan
            $selesai = new selesai();
            $selesai->nup = $request->nup;
            $selesai->nama = $request->nama;
            $selesai->divisi = $request->divisi;
            $selesai->no_hp = $request->no_hp;
            $selesai->kategori_req = $request->kategori_req;
            $selesai->deskripsi_req = $request->deskripsi_req;
            $selesai->alasan_req = $request->alasan_req;
            $selesai->upload_gambar = $request->upload_gambar;
            $selesai->upload_file = $request->upload_file;
            $selesai->teknisi = $request->teknisi;
            $selesai->save();

            // Menghapus data dari tabel permintaan
            $request->delete();

            return redirect()->back()->with('success', 'Data berhasil dipindahkan ke tabel Selesai.');
        }
        return redirect()->back()->with('error', 'Data tidak ditemukan.');
    }
}
