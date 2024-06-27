@extends('layouts.dashboard-layout')
    @section('content')
    @section('main')
        
    
    <main id="main" class="main">
        <div class="pagetitle">
            <h1> Data Tindaklanjut Perbaikan</h1>
        </div>
        <!-- End Page Title -->

        <!-- main -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tindaklanjut Perbaikan</h5>
                            <div class="d-flex justify-content-between mb-3">
                                <a href="#" type="button" class="btn btn-rounded "><i class="bi bi-funnel"
                                    style="margin-right: 5px"></i></a>
                                    <a href="{{ route('Tindaklanjut.create') }}" type="button" class="btn btn-rounded btn-primary">
                                        <i class="bi bi-plus-square" style="margin-right: 5px"></i>Tambah
                                    </a>
                                </div>
                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Aset</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <th>Pic</th>
                                            <th>Tanggal Permintaan</th>
                                            <th>Modify</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tindaklanjut as $index => $item )
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->kode_asset }}</td>
                                            <td>{{ $item->keterangan }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $item->pic }}</td>
                                            <td>{{ $item->tanggal }}</td>
                                            <td>
                                                <i class="bi bi-eye"></i>
                                                <i class="bi bi-pencil-square"></i>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        @endsection