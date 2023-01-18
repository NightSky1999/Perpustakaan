<div>
<div class="bgGrid">
    <div class="m-2">
    <h4>Tambah Data Admin Baru</h4>
<hr></hr>
    <form method="POST">
    <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control">
        <label for="nama" class="form-label">Username</label>
        <input type="text" name="username" id="username" class="form-control">
        <label for="Kelas">Password</label>
        <input type="text" name="pass" id="pass" class="form-control">
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-tambah">
        <a href="?halaman=pengaturan" class="btn btn-danger" style="margin-top: -20px;">Batal</a>
    </form>
    <?php
    if (isset($_POST['simpan'])){
        $nama = $_POST ['nama'];
        $user = $_POST ['username'];
        $pass = $_POST ['pass'];
        $sql = mysqli_query($db,"INSERT INTO `admin`(`nama`, `username`, `password`) VALUES ('$nama','$user','$pass')");
            if ($sql) { ?>
             <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Data Berhasil Ditambahkan',
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
                    title: 'Gagal Menambahkan Data!',
                })
                </script>
            <?php }
        
        }
    ?>    
    </div>
</div>

 