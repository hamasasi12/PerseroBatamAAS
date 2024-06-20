@extends('layouts.dashboard-layout')

@section('content')
@section('main')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Permintaan Masuk</h1>
    </div>
    <!-- End Page Title -->

    <!-- main -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Request</h5>
                        <a href="#" type="button" class="btn btn-rounded btn-danger mb-3">Print</a>

                        <!-- Table with stripped rows -->
                        <div class="table-responsive-lg">
                            <table class="table datatable table-striped table-bordered table-responsive-lg ">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>No Pengaduan</th>
                                        <th>Deskripsi</th>
                                        <th>Teknisi</th>
                                        <th>User</th>
                                        <th>File</th>
                                        {{-- <th>Dari Divisi</th> --}}
                                        <th>Ke Divisi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($request as $index => $item)
                                    <tr>
                                        {{-- NO --}}
                                        <td>{{ $index + 1 }}</td>
                                        {{-- NO PENGADUAN --}}
                                        <td>{{ $item->created_at }}<br/><a href="form-inventaris.html" type="button" class="btn btn-rounded btn-danger mb-2">Belum Ditangani <br>Selama :  </a></td>
                                        {{-- DETAIL --}}
                                        <td>
                                            <button type="button" class="btn btn-rounded btn-primary mb-3" data-toggle="modal" data-target="#detailModal{{ $item->id }}">Detail</button>
                                        </td>
                                        {{-- TEKNISI --}}
                                        <td class="text-danger">Belum Dipilih</td>
                                        {{-- USER --}}
                                        <td>
                                            <div style="line-height: 0.5">
                                                <p class="font-weight-bold"><i class="bi bi-person-fill"></i> {{ $item->nama }}</p>
                                                <p style="color: blue">{{ $item->nup }}</p>
                                                <p style="color: rgb(255, 81, 0)"><i class="bi bi-telephone-fill"></i> {{ $item->no_hp }}</p>

                                                <p>{{ $item->divisi }}</p>
                                            </div>
                                        </td>
                                        {{-- <td>{{ $item->user }}</td> --}}
                                        {{-- FILE GAMBAR --}}
                                        <td><a href="form-inventaris.html" type="button" class="btn btn-success mb-3 bi bi-image-fill"></a></td>
                                        {{-- DARI DIVISI --}}
                                        {{-- <td><a href="form-inventaris.html" type="button" class="btn btn-rounded btn-primary mb-3">{{ $item->divisi }}</a></td> --}}
                                        {{-- KE DIVISI --}}
                                        <td><a href="form-inventaris.html" type="button" class="btn btn-rounded btn-primary mb-3">Pemasaran</a></td>
                                        {{-- ACTION --}}
                                        <td><a href="form-inventaris.html" type="button" class="btn btn-success mb-3"><i class="bi bi-arrow-right" style="margin-right: 5px"></i>Kerjakan!</a><td>
                                    </tr>

                                    <!-- Detail Modal -->
                                    <div class="modal fade" id="detailModal{{ $item->id }}" tabindex="-1" aria-labelledby="detailModalLabel{{ $item->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="detailModalLabel{{ $item->id }}">Detail Permintaan Masuk</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>NUP              : {{ $item->nup }}</p>
                                                    <p>Nama             : {{ $item->nama }}</p>
                                                    <p>Divisi           : {{ $item->divisi }}</p>
                                                    <p>No HP            : {{ $item->no_hp }}</p>
                                                    <p>Kategori Request : {{ $item->kategori_req }}</p>
                                                    <p>Deskripsi        : {{ $item->deskripsi_req }}</p>
                                                    <p>Alasan           : {{ $item->alasan_req }}</p>
                                                    <!-- Tambahkan detail lain sesuai kebutuhan -->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Detail Modal -->
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End #main -->
@endsection
@endsection

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    .table thead {
        background-color: rgb(252, 9, 9);
    }
    .table thead th {
        color: black;
    }
</style>
