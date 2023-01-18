
<div class="row">
    <div class="col bgGrid m-1">
        <h5>Admin</h5>
        <hr></hr>
        <a href="?halaman=adminTambah" class="btn btn-primary btn-sm">Tambah Admin</a>
        <table class="table table-sm" id="tableAdmin">
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th witdh="19%">Aksi</th>
            </thead>
            <tbody>
                <?php
                    $sql = mysqli_query($db,"SELECT * FROM admin");
                    $no = 1;
                    while($data = $sql -> fetch_array()){
                ?>
                <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $data['nama']?></td>
                <td><?php echo $data['username']?></td>
                <td><?php echo $data['password']?></td>
                <td>
                <a href="?halaman=adminUbah&id=<?php echo $data['id'];?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                <a onclick="return confirm('Anda ingin menghapus?')" href="?halaman=adminHapus&id=<?php echo $data['id']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>
                </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <div class="col bgGrid m-1">
        <h5>Kelas</h5>
        <hr></hr>
        <a href="?halaman=kelasTambah" class="btn btn-primary btn-sm">Tambah Kelas</a>
        <table class="table table-sm" id="tableKelas">
            <thead>
                <th>No</th>
                <th>ID Kelas</th>
                <th>Kelas</th>
                <th witdh="19%">Aksi</th>
            </thead>
            <tbody>
                <?php
                    $sql = mysqli_query($db,"SELECT * FROM kelas");
                    $no = 1;
                    while($data = $sql -> fetch_array()){
                ?>
                <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $data['id_kelas']?></td>
                <td><?php echo $data['kelas']?></td>
                <td>
                <a href="?halaman=kelasUbah&id=<?php echo $data['id_kelas'];?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                <a onclick="return confirm('Anda ingin menghapus?')" href="?halaman=kelasHapus&id=<?php echo $data['id_kelas']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>
                </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col bgGrid m-1">
        <h5>Denda dan jangka Waktu Peminjaman</h5>
        <hr></hr>
        <table class="table table-sm">
            <thead>
                <th>Denda</th>
                <th>jangka Waktu Peminjaman</th>
                <th witdh="19%">AKsi</th>
            </thead>
            <tbody>
                <?php
                    $sql = mysqli_query($db,"SELECT * FROM pengaturan");
                    $data = $sql -> fetch_array();
                ?>
                <td><?php echo $data['denda']?></td>
                <td><?php echo $data['keterlambatan']?></td>
                <td>
                <a href="?halaman=denda&id=<?php echo $data['id'];?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                </td>
            </tbody>
        </table>
    </div>
    <div class="col bgGrid m-1">
        <h5>Rak Buku</h5>
        <hr></hr>
        <a href="?halaman=rakTambah" class="btn btn-primary">Tambah Rak</a>
        <table class="table table-sm" id="tableRak">
            <thead>
                <th>No</th>
                <th>ID Rak</th>
                <th>Nama Rak</th>
                <th witdh="19%">Aksi</th>
            </thead>
            <tbody>
                <?php
                    $sql = mysqli_query($db,"SELECT * FROM rak");
                    $no = 1;
                    while($data = $sql -> fetch_array()){
                ?>
                <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $data['id_rak']?></td>
                <td><?php echo $data['rak']?></td>
                <td>
                <a href="?halaman=rakUbah&id=<?php echo $data['id_rak'];?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                <a onclick="return confirm('Anda ingin menghapus?')" href="?halaman=rakHapus&id=<?php echo $data['id_rak']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>
                </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>