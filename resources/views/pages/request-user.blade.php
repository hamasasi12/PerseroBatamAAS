<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title> Manajemen Layanan Teknis Dan IT</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/img/logo1.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('./assets1/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('./assets1/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('./assets1/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('./assets1/css/demo.css') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('./assets1/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('./assets1/vendor/css/pages/page-auth.css') }}" />
    <!-- Helpers -->
    <script src="{{ asset('./assets1/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('./assets1/js/config.js') }}"></script>
</head>

<body>
    <!-- Content -->
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
          <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
              <div class="card-body">
                <!-- Logo -->
                <div class="app-brand justify-content-center">
                  <a href="index.html" class="app-brand-link gap-2">
                    <span class="app-brand-logo demo">
                      <img src="{{ asset('./assets/img/logo1.png') }}" alt="" width="300" />
                    </span>
                    <!-- <span class="app-brand-text demo text-body fw-bolder">persero</span> -->
                  </a>
                </div>
                <!-- /Logo -->
                <!-- Main -->
                <main id="main" class="main">
                  <div class="pagetitle">
                    <h1 style="font-size: 24px;">Form Request User</h1>
                    <nav>
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Jika data yang dimunculkan pada form berdasarkan nup tidak sesuai, agar dapat diubah dengan data yang lebih valid. Karena data yang muncul berdasarkan pengajuan terakhir</a></li>
                      </ol>
                    </nav>
                  </div>
                  <!-- Tabel -->
                  <section class="section">
                    <div class="row justify-content-center">
                      <div class="col-50">
                        <div class="card">
                          <div class="card-body">

                            {{-- form --}}
                            <form action="{{ route('request-user') }}" method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="row mb-3">
                                <label for="nomor_barang" class="col-sm-10 col-form-label">NUP</label>
                                <div class="col-sm-20">
                                  <input type="text" class="form-control" name="nup" id="nup"/>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="nama_produk" class="col-sm-10 col-form-label">Nama</label>
                                <div class="col-sm-20">
                                  <input type="text" class="form-control" id="nama" name="nama" />
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="nomor_serial_produk" class="col-sm-10 col-form-label">Divisi</label>
                                <div class="col-sm-20">
                                  {{-- <input type="text" class="form-control" id="divisi" name="divisi" /> --}}
                                  <select class="form-control" id="divisi" name="divisi" >
                                    <option value="" disabled selected>--Pilih Salah Satu--</option>
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
                              <div class="row mb-3">
                                <label for="jumlah_produk" class="col-sm-10 col-form-label">No Hp</label>
                                <div class="col-sm-20">
                                  <input type="number" class="form-control" id="no_hp" name="no_hp" />
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="tanggal_masuk_produk" class="col-sm-10 col-form-label">Kategori Request</label>
                                <div class="col-sm-20">
                                    {{-- <input type="text" class="form-control" id="kategori_req" name="kategori_req" /> --}}
                                  <select class="form-control" id="kategori_req" name="kategori_req" >
                                    <option value="" disabled selected>--Pilih Salah Satu--</option>
                                    <option value="Oracle">Oracle</option>
                                    <option value="Kredit Note (KN)">Kredit Note (KN)</option>
                                    <option value="Jaringan Internet">Jaringan Internet</option>
                                    <option value="Laptop/Komputer/Printer">Laptop/Komputer/Printer</option>
                                    <option value="Software Computer/Sistem Operasi">Software Computer/Sistem Operasi</option>
                                    <option value="Aplikasi BTOS/BCTOS">Aplikasi BTOS/BCTOS</option>
                                    <option value="Aplikasi TMS">Aplikasi TMS</option>
                                    <option value="Aplikasi BACS">Aplikasi BACS</option>
                                    <option value="Keperluan Website">Keperluan Website</option>
                                    <option value="Request DMS">Request DMS</option>
                                    <option value="Akun Email">Akun Email</option>
                                    <option value="Akun VPN">Akun VPN</option>
                                </select>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="deskripsi_produk" class="col-sm-10 col-form-label">Jelaskan Lebih Rinci Requestnya</label>
                                <div class="col-sm-20">
                                  <textarea class="form-control" id="deskripsi_req" name="deskripsi_req" rows="3"></textarea>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="deskripsi_produk" class="col-sm-10 col-form-label">Alasan Request</label>
                                <div class="col-sm-20">
                                  <textarea class="form-control" id="alasan_req" name="alasan_req" rows="3"></textarea>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="gambar_barang" class="col-sm-10 col-form-label">Upload Gambar</label>
                                <div class="col-sm-20">
                                  <input class="form-control" type="file" id="upload_gambar" name="upload_gambar" accept=".jpg, .jpeg, .png" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="upload_file">Upload File (PDF):</label>
                                <input type="file" class="form-control" name="upload_file" id="upload_file" accept=".pdf">
                            </div>
                              <button type="submit" class="btn" style="background-color: #525ceb; color: white">Send</button>
                            </form
                            {{-- <div class="d-md-flex justify-content-md-end mt-3">
                              <button type="submit" class="btn" style="background-color: #525ceb; color: white">Send</button>
                            </div> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <!-- End Tabel -->
                </main>
                <!-- End Main -->
              </div>
            </div>
            <!-- /Register-->
          </div>
        </div>
      </div>
      

    <!-- / Content -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('./assets1/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset ('./assets1/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('./assets1/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('./assets1/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script src="{{ asset('./assets1/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('./assets1/js/main.js') }}"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>