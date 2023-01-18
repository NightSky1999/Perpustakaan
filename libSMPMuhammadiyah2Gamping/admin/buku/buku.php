<div class="bgGrid">
    <div class="m-2">
    <a href="?halaman=bukuTambah" class="btn btn-primary btn-tambah">Tambah Buku</a>
    <table class="table" id="example">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Buku</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>ISBN</th>
                <th>Rak</th>
                <th>Tahun</th>
                <th witdh="19%">Aksi</th>
            </tr>
        </thead>
        <tbody>
                <?php
                $no = 1;
                    $sql = mysqli_query($db, "SELECT buku.*, rak.rak FROM buku join rak on buku.id_rak=rak.id_rak");
                    while ($data = $sql -> fetch_array()) {?>
                        <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $data['id_buku'];?></td>
                            <td><?php echo $data['judul'];?></td>
                            <td><?php echo $data['pengarang'];?></td>
                            <td><?php echo $data['penerbit'];?></td>
                            <td><?php echo $data['isbn'];?></td>
                            <td><?php echo $data['rak'];?></td>
                            <td><?php echo $data['tahun'];?></td>
                            <td>
                                <a href="?halaman=bukuUbah&id=<?php echo $data['id_buku'];?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                                <a onclick="return confirm('Anda ingin menghapus?')" href="?halaman=bukuHapus&id=<?php echo $data['id_buku']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>      
                    <?php }
                ?>
        </tbody>
    </table>
</div>
</div>