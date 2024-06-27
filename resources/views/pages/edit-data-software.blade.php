@extends('layouts.dashboard-layout')
    @section('content')
    @section('main')
        
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Tambah Aset Software</h1>
        </div>
        <!-- End Page Title -->
        
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Software</h5>
                            <form action="{{ url('update-data-software', $software->id) }}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="nomor_barang" class="col-sm-2 col-form-label">No Inventaris</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="no_inventaris" name="no_inventaris" value="{{ $software->no_inventaris }}" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nama_produk" class="col-sm-2 col-form-label">Tahun</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="tahun" name="tahun" value="{{ $software->tahun }}" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nomor_serial_produk" class="col-sm-2 col-form-label">Jenis Aplikasi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jenis_aplikasi" name="jenis_aplikasi" value="{{ $software->jenis_aplikasi }}"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jumlah_produk" class="col-sm-2 col-form-label">Nama Aplikasi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_aplikasi" name="nama_aplikasi" value="{{ $software->nama_aplikasi }}" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jumlah_produk" class="col-sm-2 col-form-label">Pengguna</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="pengguna" name="pengguna" value="{{ $software->pengguna }}"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jumlah_produk" class="col-sm-2 col-form-label">Divisi</label>
                                    <div class="col-sm-10">
                                        {{-- <input type="text" class="form-control" id="divisi" name="divisi" value="{{ $software->divisi }}"/> --}}
                                        <select class="form-control" id="divisi" name="divisi" required>
                                            <option value="{{ $software->divisi }}"  {{ $software->divisi }}>{{ $software->divisi }}</option>
                                            <option value="Akutansi dan Keuangan">Akutansi dan Keuangan</option>
                                            <option value="Operasi Batu Ampar">Operasi Batu Ampar</option>
                                            <option value="Operasi Hang Nadim">Operasi Hang Nadim</option>
                                            <option value="Pemasaran dan Pengambangan">Pemasaran dan Pengambangan</option>
                                            <option value="Sekretaris Perusahaan">Sekretaris Perusahaan</option>
                                            <option value="QHSE">QHSE</option>
                                            <option value="SPI">SPI</option>
                                            <option value="SDM dan Umum">SDM dan Umum</option>
                                            <option value="Terminal Peti Kemas Batu Ampar">Terminal Peti Kemas Batu Ampar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-md-flex justify-content-md-end mt-3">
                                    <button type="submit" class="btn"
                                    style="background-color: #525ceb; color: white">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection