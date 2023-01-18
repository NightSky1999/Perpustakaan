<?php
    $sql = mysqli_query($db, "SELECT * FROM pengaturan");
    $cek = $sql -> fetch_array();
    $periode = $cek['keterlambatan'];
	$pinjam = date("Y-m-d");
	$tuju_hari = mktime(0,0,0,date("n"),date("j")+$periode,date("Y"));
	$kembali = date("Y-m-d", $tuju_hari);
?>
<div>
<div class="bgGrid">
    <div class="m-2">
    <h4>Peminjaman Buku</h4>
<hr></hr>
    <form method="POST">
    <label for="id_anggota" class="form-label">ID Buku</label>
        <input type="text" name="id_buku" id="id_buku" class="form-control">
        <label for="nama" class="form-label">ID Anggota</label>
        <input type="text" name="id_anggota" id="id_anggota" class="form-control">
        <label class="form-label">Tanggal Pinjam</label>
        <input class="form-control" type="text" name="pinjam" value="<?php echo $pinjam; ?>" readonly />
        <label class="form-label">Tanggal Kembali</label>
        <input class="form-control" type="text" name="kembali" value="<?php echo $kembali; ?>" readonly />
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-tambah">
        <a href="?halaman=buku" class="btn btn-danger" style="margin-top: -20px;">Batal</a>
    </form>
    <?php
    if (isset($_POST['simpan'])){
        $id_anggota = $_POST['id_anggota'];
        $id_Buku = $_POST['id_buku'];
        $sql = mysqli_query($db,"INSERT INTO `peminjaman`(`id_buku`, `id_anggota`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES ('$id_Buku','$id_anggota','$pinjam','$kembali','P')");
            if ($sql) { ?>
             <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Data Berhasil Diupdate',
                    timer: 2500
                }).then(function() {
                    window.location.href='?halaman=peminjaman';
                });
                
            </script>
            <?php }
            else { ?>
                <script>
                Swal.fire({
                    icon: 'warning',
                    title: 'Gagal!',
                })
                </script>
            <?php }
        
        }
    ?>    
    </div>
</div>

 