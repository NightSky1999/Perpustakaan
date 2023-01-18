<div>
    <?php 
        $id = $_GET['id'];
        $sql = mysqli_query($db, "SELECT * FROM anggota where id ='$id'");
        $anggota = $sql -> fetch_array();
    ?>
<div class="bgGrid">
    <div class="m-2">
    <h4>Ubah Data Anggota</h4>
<hr></hr>
    <form method="POST">
    <label for="id_anggota" class="form-label">ID Anggota</label>
        <input type="text" name="id_anggota" id="id_anggota" class="form-control" value="<?php echo $anggota['id'];?>" readonly>
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $anggota['nama'];?>">
        <label for="Kelas">Kelas</label>
        <select name="kelas" id="kelas" class="form-select">
            <?php 
                $sql = mysqli_query($db, "SELECT * FROM kelas");
                while ($data = $sql -> fetch_array() ) { ?>   
                    <option value="<?php echo $data['id_kelas'];?>" <?php if($data['id_kelas']==$anggota['id_kelas']){echo "selected ";}?>><?php echo $data['kelas'];?></option>
            <?php }
            ?>
        </select>
        <label for="jk" class="form-label">Jenis Kelamin</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jk" id="L" value="L" <?php if($anggota['jk']=='L'){echo "checked ";}?>>
            <label class="form-check-label" for="L">Laki-laki</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jk" id="P" value="P" <?php if($anggota['jk']=='P'){echo "checked ";}?>>
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
            $sql = mysqli_query($db,"UPDATE `anggota` SET `nama`='$nama',`jk`='$jk',`id_kelas`='$kelas' WHERE id = '$id'");
            if ($sql) { ?>
             <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Data Berhasil Disimpan',
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
    ?>    
    </div>
</div>

 