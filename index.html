<?php 
// Hapus session agar tidak ada redirect login
// session_start(); 
require_once 'config/koneksi.php'; 

// Simulasi login sebagai pengunjung
$_SESSION['login']['nama'] = 'Pengunjung'; 

$page = @$_GET['p'];
$aksi = @$_GET['aksi'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>
        <?php
        if ($page == 'buku') {
            echo ($aksi == 'tambah') ? "Tambah Buku" : (($aksi == 'ubah') ? "Ubah Buku" : "Halaman Buku");
        } elseif ($page == 'anggota') {
            echo ($aksi == 'tambah') ? "Tambah Anggota" : (($aksi == 'ubah') ? "Ubah Anggota" : "Halaman Anggota");
        } elseif ($page == 'transaksi') {
            echo ($aksi == 'tambah') ? "Tambah Transaksi" : "Halaman Transaksi";
        } else {
            echo "About Me"; // Mengubah judul menjadi "About Me"
        }
        ?>
    </title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="js/fontawesomeall.min.js" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Genkichi</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle"><i class="fas fa-bars"></i></button>
          <!-- <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown">
                    <i class="fas fa-user fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Logout</a> Logout-nya nonaktif karena login dimatikan 
                </div>
            </li>
        </ul> -->
    </nav>  
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashbord
                        </a>
                        <div class="sb-sidenav-menu-heading">Data</div>
                        <a class="nav-link" href="?p=anggota">
                            <div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
                            Data Anggota
                        </a>
                     <!--   <a class="nav-link" href="?p=buku">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            Data Buku
                        </a> -->
                        <!-- <a class="nav-link" href="?p=transaksi">
                            <div class="sb-nav-link-icon"><i class="fa fa-handshake"></i></div>
                            Transaksi
                        </a> -->
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Pengunjung
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <marquee behavior="scroll" class="btn btn-dark">
                    Selamat Datang <b><?= $_SESSION['login']['nama']; ?></b> di Aplikasi Genkichi
                </marquee>
                <div class="container-fluid">
                    <?php 
                    if ($page == '') { 
                        echo '<h1 class="mt-4">Dashbord</h1>';
                        echo '<ol class="breadcrumb mb-4"><li class="breadcrumb-item active">Welcome Member Genkichi</li></ol>';
                        echo '<p>Selamat datang di Aplikasi kami. Di sini, kamu bisa mengetahui lebih banyak tentang saya dan aplikasi ini.<br
                        Aplikasi ini khusus dirancang hanya untuk member Genkichi untuk mengisi data yang sudah di sediakan di menu "Anggota".<br>
                        Terima Kasih buat yang udah meluangkan waktunya buat melengkapin data</p>';
                    } elseif ($page == 'buku') {
                        if ($aksi == '') {
                            require_once 'page/buku/buku.php';
                        } elseif ($aksi == 'tambah') {
                            require_once 'page/buku/tambah.php';
                        } elseif ($aksi == 'ubah') {
                            require_once 'page/buku/ubah.php';
                        } elseif ($aksi == 'hapus') {
                            require_once 'page/buku/hapus.php';
                        }
                    } elseif ($page == 'anggota') {
                        if ($aksi == '') {
                            require_once 'page/anggota/anggota.php';
                        } elseif ($aksi == 'tambah') {
                            require_once 'page/anggota/tambah.php';
                        } elseif ($aksi == 'ubah') {
                            require_once 'page/anggota/ubah.php';
                        } elseif ($aksi == 'hapus') {
                            require_once 'page/anggota/hapus.php';
                        }
                    } elseif ($page == 'transaksi') {
                        if ($aksi == '') {
                            require_once 'page/transaksi/transaksi.php';
                        } elseif ($aksi == 'tambah') {
                            require_once 'page/transaksi/tambah.php';
                        } elseif ($aksi == 'kembali') {
                            require_once 'page/transaksi/kembali.php';
                        } elseif ($aksi == 'perpanjang') {
                            require_once 'page/transaksi/perpanjang.php';
                        }
                    } 
                    ?>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">
                            Copyright &copy; Data Genkichi
                            |<!-- Repost by <a href="#" target="_blank"></a> -->
                        </div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>
</html> 
