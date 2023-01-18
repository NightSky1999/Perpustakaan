<?php include "../connection.php";?>
<html>
    <head>
        <title>SMP Muhammadiyah 2 Gamping</title>
        <script src="../css/jquery-3.6.1.min.js"></script>
        <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
        <script src="../bootstrap/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/datatables.min.css">
        <script src="../css/datatables.min.js"></script>
        <link rel="stylesheet" href="../css/font-awesome.css">
        <script src="../css/sweetalert2.all.min.js"></script>
        <link rel="stylesheet" href="../css/mycss.css">
    </head>
    <body class="bodyBg">
    <!--banner-->
    <div class="container-fluid banner">
        <div class="row">
            <div class="col-12">
                <img src="../img/logo.png" class="logo">
            </div>
        </div>
        <div class="row">
            <div class="col-auto admin">
                <h3 class="adminText">ADMIN</h3>
            </div>
            <div class="col-7 runtext">
                <marquee>Selamat Datang Di Perpustakaan SMP 2 Muhammadiyah 2 Gamping... Silahkan Mengisi Daftar Kunjungan Terlebih Dahulu</marquee>
            </div>
            <div class="col time">
               <h5 class="fa fa-clock-o fa-2x" id="jam"></h5>
            </div>
            <div class="col date">
                <h5 class="fa fa-calendar fa-2x"><?php echo date('d-m-Y');?></h5>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-auto" style="background-color: #023047;">
                <ul class="sidebar1">
                    <li><a href="?halaman=beranda">Beranda</a></li>
                    <li><a href="?halaman=anggota">Anggota</a></li>
                    <li><a href="?halaman=buku">Buku</a></li>
                    <li><a href="?halaman=peminjaman">Peminjaman</a></li>
                    <li><a href="?halaman=laporan">Laporan</a></li>
                    <li><a href="?halaman=pengaturan">Pengaturan</a></li>
                    <li><a href="../index.php">Logout</a></li>
                </ul>
            </div>
            <div class="col">
            <?php
                $page = "";
                $page = $_GET['halaman'];
                //anggota
                if ($page == "anggota") {
                    include "anggota/anggota.php";
                }
                elseif ($page == "anggotaTambah") {
                    include "anggota/tambah.php";
                }
                elseif ($page == "anggotaUbah") {
                    include "anggota/edit.php";
                }
                elseif ($page == "anggotaHapus") {
                    include "anggota/hapus.php";
                }
                //buku
                elseif ($page == "buku") {
                    include "buku/buku.php";
                }
                elseif ($page=="bukuTambah") {
                    include "buku/tambah.php";
                }
                elseif ($page=="bukuHapus") {
                    include "buku/hapus.php";
                }
                elseif ($page=="bukuUbah") {
                    include "buku/edit.php";
                }
                 //peminjaman
                elseif ($page == "peminjaman") {
                    include "peminjaman/peminjaman.php";
                }
                elseif ($page == "peminjamanTambah") {
                    include "peminjaman/tambah.php";
                }
                elseif ($page == "peminjamanKembali") {
                    include "peminjaman/kembali.php";
                }

                //pengaturan
                elseif ($page=="pengaturan") {
                    include "pengaturan/pengaturan.php";
                }
                elseif ($page == "denda") {
                    include "pengaturan/denda.php";
                }
                //admin
                elseif ($page=="adminTambah") {
                    include "pengaturan/adminTambah.php";
                }
                elseif ($page=="adminHapus") {
                    include "pengaturan/adminHapus.php";
                }
                elseif ($page=="adminUbah") {
                    include "pengaturan/adminUbah.php";
                }

                //kelas
                elseif ($page=="kelasTambah") {
                    include "pengaturan/kelasTambah.php";
                }
                elseif ($page=="kelasHapus") {
                    include "pengaturan/kelasHapus.php";
                }
                elseif ($page=="kelasUbah") {
                    include "pengaturan/kelasEdit.php";
                }

                //rak
                elseif ($page=="rakTambah") {
                    include "pengaturan/rakTambah.php";
                }
                elseif ($page=="rakHapus") {
                    include "pengaturan/rakHapus.php";
                }
                elseif ($page=="rakUbah") {
                    include "pengaturan/rakUbah.php";
                }

                //laporan
                elseif ($page=='laporan') {
                    include "laporan/laporan.php";
                }

                elseif ($page =="beranda"){
                    include "beranda.php";
                }
            ?>
            </div>
        </div>
    </div>
   </body>
   <script>
        $(document).ready( function () {
            $('#example').DataTable();
        } );
        $(document).ready( function () {
            $('#tableKelas').DataTable({
                lengthMenu: [ 4]
            });
        } );
        $(document).ready( function () {
            $('#tableRak').DataTable({
                lengthMenu: [ 4]
            });
        } );
        $(document).ready( function () {
            $('#tableAdmin').DataTable({
                lengthMenu: [ 4]
            });
        } );
    </script>
     <!--jam-->
     <script type="text/javascript">
        window.onload = function() { jam(); }
       
        function jam() {
            var e = document.getElementById('jam'),
            d = new Date(), h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());
       
            e.innerHTML = h +':'+ m +':'+ s;
       
            setTimeout('jam()', 1000);
        }
       
        function set(e) {
            e = e < 10 ? '0'+ e : e;
            return e;
        }
    </script>
</html>
