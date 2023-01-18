<div>
<div class="bgGrid">
    <div class="m-2">
    <h4>Tambah Data Rak Buku</h4>
<hr></hr>
    <form method="POST">
    <label for="id" class="form-label">Id Rak</label>
        <input type="text" name="id" id="id" class="form-control">
        <label for="rak" class="form-label">Nama Rak</label>
        <input type="text" name="rak" id="kelas" class="form-control">
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-tambah">
        <a href="?halaman=pengaturan" class="btn btn-danger" style="margin-top: -20px;">Batal</a>
    </form>
    <?php
    if (isset($_POST['simpan'])){
        $id = $_POST ['id'];
        $rak = $_POST ['rak'];
        $sql = mysqli_query($db,"INSERT INTO `rak`(`id_rak`, `rak`) VALUES ('$id','$rak')");
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

 