<?php

namespace App\Http\Controllers;

use App\Models\selesai;
use App\Models\User;
use Illuminate\Http\Request;

class SelesaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = selesai::latest()->get();
        $technicians = User::all();
        return view('pages.pekerjaan_selesai', compact('requests', 'technicians'));
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
    public function show(selesai $selesai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(selesai $selesai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, selesai $selesai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(selesai $selesai)
    {
        //
    }
}
