@extends('layouts.dashboard-layout')
    @section('content')
    @section('main')
        
    
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data Permintaan Perbaikan</h1>
        </div>
        <!-- End Page Title -->
        
        <!-- main -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Permintaan Perbaikan</h5>
                            <div class="d-flex justify-content-between mb-3">
                                <a href="#" type="button" class="btn btn-rounded "><i class="bi bi-funnel"
                                    style="margin-right: 5px"></i></a>
                                    <a href="{{ route('Perbaikan.create') }}" type="button" class="btn btn-rounded btn-primary">
                                        <i class="bi bi-plus-square" style="margin-right: 5px"></i>Input Permintaan
                                    </a>
                                </div>
                                
                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Permintaan</th>
                                            <th>Deskripsi Permintaan</th>
                                            <th>Departemen</th>
                                            <th>Pic Permintaan</th>
                                            <th>Tanggal Permintaan</th>
                                            <th>Modify</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($perbaikan as $index => $item)
                                        <tr>
                                            <td>{{ $index +1 }}</td>
                                            <td>{{ $item->no_permintaan }}</td>
                                            <td>{{ $item->deskripsi_permintaan }}</td>
                                            <td>{{ $item->departemen }}</td>
                                            <td>{{ $item->pic_permintaan }}</td>
                                            <td>{{ $item->tanggal_permintaan }}</td>
                                            <td>
                                                <a href="{{ route('edit-data-perbaikan', $item->id) }}">edit</a>
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