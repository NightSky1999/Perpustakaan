<?php

//membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "libsmpm2gamping");

//variabel nim yang dikirimkan form.php
$id = $_GET['id'];

//mengambil data
$query = mysqli_query($koneksi, "select * from anggota where id='$id'");
$anggota = mysqli_fetch_array($query);
$data = array(
            'nama'      =>  @$anggota['nama'],
            'kelas'      =>  @$anggota['kelas']);

//tampil data
echo json_encode($data);
?>