
    <?php 
        $id = $_GET['id'];
        $sql = mysqli_query($db, "SELECT * FROM buku where id_buku ='$id'");
        $buku= $sql -> fetch_array();
    ?>
<div class="bgGrid">
    <div class="m-2">
    <h4>Ubah Data Buku</h4>
<hr></hr>
    <form method="POST">
    <label for="id_anggota" class="form-label">ID Buku</label>
        <input type="text" name="id" id="id" class="form-control" value="<?php echo $buku['id_buku'];?>" readonly>
        <label for="nama" class="form-label">Judul</label>
        <input type="text" name="judul" id="judul" class="form-control"value="<?php echo $buku['judul'];?>">
        <label for="nama" class="form-label">Pengarang</label>
        <input type="text" name="pengarang" id="pengarang" class="form-control" value="<?php echo $buku['pengarang'];?>">
        <label for="nama" class="form-label">Penerbit</label>
        <input type="text" name="penerbit" id="penerbit" class="form-control" value="<?php echo $buku['penerbit'];?>">
        <label for="nama" class="form-label">ISBN</label>
        <input type="text" name="isbn" id="isbn" class="form-control" value="<?php echo $buku['isbn'];?>">
        <label for="tahun" class="form-label">Tahun</label>
        <select name="tahun" class="form-select">
        <option value="" selected=selected>Tahun</option>
        <?php
            for($i=date('Y'); $i>=date('Y')-32; $i-=1){ ?>
                <option value="<?php echo $i?>" <?php if($i == $buku['tahun']){ echo "selected";}?>><?php echo $i?></option>
            <?php }
        ?>
        </select>
        <label for="rak">Rak Buku</label>
        <select name="rak" id="rak" class="form-select">
            <?php 
                $sql = mysqli_query($db, "SELECT * FROM rak");
                while ($data = $sql -> fetch_array() ) { ?>   
                    <option value="<?php echo $data['id_rak'];?>" <?php if($data['id_rak']==$buku['id_rak']){echo "selected ";}?>><?php echo $data['rak'];?></option>
            <?php }
            ?>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-tambah">
        <a href="?halaman=buku" class="btn btn-danger" style="margin-top: -20px;">Batal</a>
    </form>
    <?php
    if (isset($_POST['simpan'])){
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
        $isbn = $_POST['isbn'];
        $tahun = $_POST['tahun'];
        $rak = $_POST['rak'];
        $sql = mysqli_query($db,"UPDATE `buku` SET `judul`='$judul',`pengarang`='$pengarang',`penerbit`='$penerbit',`isbn`='$isbn',`tahun`='$tahun',`id_rak`='$rak' WHERE id_buku ='$id' ");
            if ($sql) { ?>
             <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Data Berhasil Disimpan',
                    timer: 2500
                }).then(function() {
                    window.location.href='?halaman=buku';
                });
                
            </script>
            <?php }
            else { ?>
                <script>
                Swal.fire({
                    icon: 'warning',
                    title: 'Gagal menyimpan Data!',
                })
                </script>
            <?php }
        
        }
    ?>    
    </div>
</div>

 

 