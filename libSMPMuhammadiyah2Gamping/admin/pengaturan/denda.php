<div>
    <?php 
        $id = $_GET['id'];
        $sql = mysqli_query($db, "SELECT * FROM pengaturan where id ='$id'");
        $data = $sql -> fetch_array();
    ?>
<div class="bgGrid">
    <div class="m-2">
    <h4>Ubah Data</h4>
<hr></hr>
    <form method="POST">
    <label for="denda" class="form-label">Denda</label>
        <input type="text" name="denda" id="denda" class="form-control" value="<?php echo $data['denda'];?>">
        <label for="periode" class="form-label">Jangka Waktu Peminjaman</label>
        <input type="text" name="periode" id="periode" class="form-control" value="<?php echo $data['keterlambatan'];?>">
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-tambah">
        <a href="?halaman=pengaturan" class="btn btn-danger" style="margin-top: -20px;">Batal</a>
    </form>
    <?php
    if (isset($_POST['simpan'])){
        $denda = $_POST ['denda'];
        $periode = $_POST ['periode'];
        $sql = mysqli_query($db,"UPDATE `pengaturan` SET `denda`='$denda',`keterlambatan`='$periode' WHERE id = '$id'");
            if ($sql) { ?>
             <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Data Berhasil Disimpan',
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

 