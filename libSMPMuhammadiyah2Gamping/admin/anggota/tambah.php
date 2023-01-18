<div>
<div class="bgGrid">
    <div class="m-2">
    <h4>Tambah Data Anggota Baru</h4>
<hr></hr>
    <form method="POST">
    <label for="id_anggota" class="form-label">ID Anggota</label>
        <input type="text" name="id_anggota" id="id_anggota" class="form-control">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control">
        <label for="Kelas">Kelas</label>
        <select name="kelas" id="kelas" class="form-select">
            <?php 
                $sql = mysqli_query($db, "SELECT * FROM kelas");
                while ($data = $sql -> fetch_array() ) {
                    echo "<option value='".$data['id_kelas']."'>".$data['kelas']."</option>";      
                }
            ?>
        </select>
        <label for="jk" class="form-label">Jenis Kelamin</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jk" id="L" value="L">
            <label class="form-check-label" for="L">Laki-laki</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jk" id="P" value="P">
            <label class="form-check-label" for="P">Perempuan</label>
        </div>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-tambah">
        <a href="?halaman=anggota" class="btn btn-danger" style="margin-top: -20px;">Batal</a>
    </form>
    <?php
    if (isset($_POST['simpan'])){
        $id = $_POST['id_anggota'];
        $nama = $_POST ['nama'];
        $jk = $_POST ['jk'];
        $kelas = $_POST ['kelas'];
        $sql = mysqli_query($db, "SELECT * FROM anggota WHERE id = '$id'");
        $cek = $sql -> fetch_row();
        if ($cek!=0) { ?>
             <script>
                Swal.fire({
                    icon: 'warning',
                    title: 'ID Telah digunakan!',
                    text: 'ID Anggota tidak boleh sama'
                })
                </script>
        <?php }
        else {
            $sql = mysqli_query($db,"INSERT INTO `anggota`(`id`, `nama`, `jk`, `id_kelas`) VALUES ('$id','$nama','$jk','$kelas')");
            if ($sql) { ?>
             <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Data Berhasil Ditambahkan',
                    timer: 2500
                }).then(function() {
                    window.location.href='?halaman=anggota';
                });
                
            </script>
            <?php }
            else { ?>
                <script>
                Swal.fire({
                    icon: 'warning',
                    title: 'Gagal Menambahkan Data!',
                })
                </script>
            <?php }
        
        }
     }
    ?>    
    </div>
</div>

 