<?php
  $sql = mysqli_query($db, "SELECT * FROM kunjungan WHERE tgl=CURRENT_DATE");
  $kunjung = mysqli_num_rows($sql);
  $sql = mysqli_query($db, "SELECT * FROM peminjaman WHERE status ='P'");
  $pinjam = mysqli_num_rows($sql);
?>
<div class="row bgGrid p-3">
<div class="col-auto">
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <div class="card-body-icon"><i class="fa fa-users"></i></div>
    <h5 class="card-title">Jumlah Pengunjung Hari ini</h5>
    <div class="display-4"><?php echo $kunjung?></div>
  </div>
</div>
</div>
<div class="col">
<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <div class="card-body-icon"><i class="fa fa-book"></i></div>
    <h5 class="card-title">Jumlah Peminjaman Buku</h5>
    <div class="display-4"><?php echo $pinjam?></div>
  </div>
</div>
</div>
</div>
<div class="row bgGrid">
<table id="example" class="display table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Keperluan</th>
              <th>Jam Kunjung</th>
          </tr>
      </thead>
      <tbody>
          <?php
              $no = 1;
              $sql = mysqli_query($db,"SELECT anggota.nama, kelas.kelas, kunjungan.jam, kunjungan.keperluan FROM kunjungan JOIN anggota ON anggota.id = kunjungan.id_anggota JOIN kelas ON anggota.id_kelas = kelas.id_kelas WHERE kunjungan.tgl=CURRENT_DATE ORDER BY kunjungan.jam DESC");
              while($data = $sql ->fetch_array() ) { ?>
              <tr>
                  <td><?php echo $no++?></td>
                  <td><?php echo $data['nama'];?></td>
                  <td><?php echo $data['kelas'];?></td>
                  <td><?php echo $data['jam'];?></td>
                  <td><?php echo $data['keperluan'];?></td>
              </tr>
              <?php }
          ?>
      </tbody>
  </table>
</div>