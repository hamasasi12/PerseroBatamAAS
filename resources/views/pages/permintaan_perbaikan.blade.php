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
                                    <a href="{{ route('form-perbaikan') }}" type="button" class="btn btn-rounded btn-primary">
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>REQ29022004</td>
                                            <td>Komputer Rusak Bro</td>
                                            <td>IT Support</td>
                                            <td>Admin IT</td>
                                            <td>29/02/2024</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    <tr>
                                        <td>4</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
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