<div>
<div class="bgGrid">
    <div class="m-2">
    <?php 
        $id = $_GET['id'];
        $sql = mysqli_query($db,"SELECT * FROM kelas WHERE id_kelas = '$id'");
        $data = $sql -> fetch_array();
    ?>
    <h4>Tambah Data Admin Baru</h4>
<hr></hr>
    <form method="POST">
    <label for="id" class="form-label">id_kelas</label>
        <input type="text" name="id" id="id" class="form-control" value="<?php echo $data['id_kelas']?>" readonly>
        <label for="kelas" class="form-label">Kelas</label>
        <input type="text" name="kelas" id="kelas" class="form-control" value="<?php echo $data['kelas']?>">
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-tambah">
        <a href="?halaman=pengaturan" class="btn btn-danger" style="margin-top: -20px;">Batal</a>
    </form>
    <?php
    if (isset($_POST['simpan'])){
        $kelas = $_POST ['kelas'];
        $sql = mysqli_query($db,"UPDATE `kelas` SET kelas ='$kelas' WHERE id_kelas = '$id'");
            if ($sql) { ?>
             <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Data Berhasil Ditambahkan',
                    timer: 1500
                }).then(function() {
                    window.location.href='?halaman=pengaturan';
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

 