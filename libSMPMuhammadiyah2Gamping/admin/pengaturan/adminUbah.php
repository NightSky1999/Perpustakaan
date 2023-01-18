<div>
<div class="bgGrid">
    <div class="m-2">
    <h4>Tambah Data Admin Baru</h4>
    <?php 
        $id = $_GET['id'];
        $sql = mysqli_query($db,"SELECT * FROM admin WHERE id = '$id'");
        $data = $sql -> fetch_array();
    ?>
<hr></hr>
    <form method="POST">
    <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $data['nama']?>">
        <label for="nama" class="form-label">Username</label>
        <input type="text" name="username" id="username" class="form-control" value="<?php echo $data['username']?>">
        <label for="Kelas">Password</label>
        <input type="text" name="pass" id="pass" class="form-control" value="<?php echo $data['password']?>">
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-tambah">
        <a href="?halaman=pengaturan" class="btn btn-danger" style="margin-top: -20px;">Batal</a>
    </form>
    <?php
    if (isset($_POST['simpan'])){
        $nama = $_POST ['nama'];
        $user = $_POST ['username'];
        $pass = $_POST ['pass'];
        $sql = mysqli_query($db,"UPDATE `admin` set nama = '$nama', username = '$user', password = '$pass' WHERE id = '$id'");
            if ($sql) { ?>
             <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Data Berhasil Diubah',
                    timer: 2500
                }).then(function() {
                    window.location.href='?halaman=pengaturan';
                });
                
            </script>
            <?php }
            else { ?>
                <script>
                Swal.fire({
                    icon: 'warning',
                    title: 'Gagal Mengubah Data!',
                })
                </script>
            <?php }
        
        }
    ?>    
    </div>
</div>

 