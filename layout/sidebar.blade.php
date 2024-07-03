<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="dashboard.html">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Manajemen Layanan Teknis & IT</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <!-- ======= Solve ======= -->
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#solve-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-wrench"></i><span>Solve</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="solve-nav" class="nav-content collapse" data-bs-parent="#tables-nav">
                        <li>
                            <a href="/permintaan_masuk">
                                <i class="bi bi-circle"></i><span>Permintaan Masuk</span>
                            </a>
                        </li>
                        <li>
                            <a href="/dikerjakan">
                                <i class="bi bi-circle"></i><span>Dikerjakan</span>
                            </a>
                        </li>
                        <li>
                            <a href="/history_pekerjaan">
                                <i class="bi bi-circle"></i><span>History Pekerjaan</span>
                            </a>
                        </li>
                        <li>
                            <a href="/pekerjaan_selesai">
                                <i class="bi bi-circle"></i><span>Pekerjaan Selesai</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- ======= End Solve ======= -->
                <!-- ======= Inventory ======= -->
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#solve-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-box-seam"></i><span>Inventory</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="solve-nav" class="nav-content collapse" data-bs-parent="#tables-nav">
                        <li>
                            <a href="/hardware">
                                <i class="bi bi-circle"></i><span>Tambah Data Aset (Hardware)</span>
                            </a>
                        </li>
                        <li>
                            <a href="/software">
                                <i class="bi bi-circle"></i><span>Tambah Data Aset (Software)</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- ======= End Inventory ======= -->
                <!-- ======= Maintenace ======= -->
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#solve-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-tools"></i><span>Maintenance</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="solve-nav" class="nav-content collapse" data-bs-parent="#tables-nav">
                        <li>
                            <a href="/permintaan_perbaikan">
                                <i class="bi bi-circle"></i><span>Permintaan Perbaikan</span>
                            </a>
                        </li>
                        <li>
                            <a href="/tindaklanjut_perbaikan">
                                <i class="bi bi-circle"></i><span>Tindaklanjut Perbaikan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- ======= End Maintenace ======= -->

            </ul>
        </li>

        <!-- ======= Tambah User ======= -->
        <li class="nav-item">
            <a class="nav-link" href="tambah_user.html">
                <i class="bi bi-person-plus"></i>
                <span>Tambah User</span>
            </a>
        </li>
        <!-- ======= End Tambah User ======= -->




        <!-- End Dashboard Nav -->
    </ul>
</aside>