<div class="bgGrid">
    <div class="m-2">
    <a href="?halaman=anggotaTambah" class="btn btn-primary btn-tambah">Tambah Anggota</a>
    <table class="table table-sm" id="example">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Anggota</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Kelas</th>
                <th width="19%">Aksi</th>
            </tr>
        </thead>
        <tbody>
                <?php
                $no = 1;
                    $sql = mysqli_query($db, "SELECT anggota.*, kelas.kelas FROM anggota JOIN kelas ON anggota.id_kelas = kelas.id_kelas");
                    while ($data = $sql -> fetch_array()) {
                        if ($data['jk']=='L') {
                            $jk = "Laki-laki";
                        } else {
                            $jk = "Perempuan";
                        } ?>
                        <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $data['id'];?></td>
                            <td><?php echo $data['nama'];?></td>
                            <td><?php echo $jk;?></td>
                            <td><?php echo $data['kelas'];?></td>
                            <td>
                                <a href="?halaman=anggotaUbah&id=<?php echo $data['id'];?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                                <a onclick="return confirm('Anda ingin menghapus?')" href="?halaman=anggotaHapus&id=<?php echo $data['id']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>      
                    <?php }
                ?>
        </tbody>
    </table>
    </div>
</div>