<div>
<div class="bgGrid">
    <div class="m-2">
    <h4>Tambah Data Buku Baru</h4>
<hr></hr>
    <form method="POST">
    <label for="id_anggota" class="form-label">ID Buku</label>
        <input type="text" name="id" id="id" class="form-control">
        <label for="nama" class="form-label">Judul</label>
        <input type="text" name="judul" id="judul" class="form-control">
        <label for="nama" class="form-label">Pengarang</label>
        <input type="text" name="pengarang" id="pengarang" class="form-control">
        <label for="nama" class="form-label">Penerbit</label>
        <input type="text" name="penerbit" id="penerbit" class="form-control">
        <label for="nama" class="form-label">ISBN</label>
        <input type="text" name="isbn" id="isbn" class="form-control">
        <label for="tahun" class="form-label">Tahun</label>
        <select name="tahun" class="form-select">
        <option value="" selected=selected>Tahun</option>
        <?php
            for($i=date('Y'); $i>=date('Y')-32; $i-=1){
            echo"<option value='$i'> $i </option>";
            }
        ?>
        </select>
        <label for="rak">Rak Buku</label>
        <select name="rak" id="rak" class="form-select">
            <?php 
                $sql = mysqli_query($db, "SELECT * FROM rak");
                while ($data = $sql -> fetch_array() ) {
                    echo "<option value='".$data['id_rak']."'>".$data['rak']."</option>";      
                }
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
        $sql = mysqli_query($db,"INSERT INTO `buku`(`id_buku`, `judul`, `pengarang`, `penerbit`, `isbn`, `tahun`, `id_rak`) VALUES ('$id','$judul','$pengarang','$penerbit','$isbn','$tahun','$rak')");
            if ($sql) { ?>
             <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Data Berhasil Ditambahkan',
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
                    title: 'Gagal Menambahkan Data!',
                })
                </script>
            <?php }
        
        }
    ?>    
    </div>
</div>

 