<?php include "connection.php"; ?>
<html>
    <head>
        <title>SMP Muhammadiyah 2 Gamping</title>
        <script src="css/jquery-3.6.1.min.js"></script>
        <link rel="stylesheet" href="css/mycss.css">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <script src="bootstrap/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/datatables.min.css">
        <script src="css/datatables.min.js"></script>
        <link rel="stylesheet" href="css/font-awesome.css">
        <script src="css/sweetalert2.all.min.js"></script>
    </head>
    <body class="bodyBg">
    <!--banner-->
    <div class="container-fluid banner">
        <div class="row">
            <div class="col-12">
                <img src="img/logo.png" class="logo">
            </div>
        </div>
    </div>
    <!--runing text, date & time-->
    <div class="">
        <div class="row">
            <div class="col-auto user">
                <a href="admin/login.php" class="fa fa-user fa-2x ms-2 mt-1"></a>
            </div>
            <div class="col-8 runtext">
                <marquee>Selamat Datang Di Perpustakaan SMP 2 Muhammadiyah 2 Gamping... Silahkan Mengisi Daftar Kunjungan Terlebih Dahulu</marquee>
            </div>
            <div class="col time">
               <h5 class="fa fa-clock-o fa-2x" id="jam"></h5>
            </div>
            <div class="col date">
                <h5 class="fa fa-calendar fa-2x"><?php echo date('d-m-Y');?></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 bgGrid m-2">
                <h4 class="textTitle">Daftar Kunjungan</h4>
                <hr></hr>
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
            <div class="col-sm bgGrid m-2">
                <h4 class="textTitle">Absensi Kunjungan</h4>
                <hr></hr>
            <div class="mb-3">
                <form method="POST">
                    <label for="id" class="form-label">ID Anggota</label>
                    <input type="text" class="form-control" id="id" name="id" onkeyup="isi_otomatis()" required>
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select name="kelas" id="kelas" class="form-select">
                        <?php 
                            $sql = mysqli_query($db, "SELECT * FROM kelas");
                            while ($data = $sql -> fetch_array() ) {
                                echo "<option value=".$data['id'].">".$data['kelas']."</option>";      
                            }
                        ?>
                    </select>
                    <label for="nama" class="form-label">Keperluan</label>
                    <input type="text" class="form-control" id="kprl" name="keperluan" required>
                    <input type="submit" value="Kirim" name="kirim" class="btn btn-primary mt-2" id="kirim">
                    <button type="reset" class="btn btn-danger" style="margin-top: 10px;">Batal</button>
                </form>
            </div>
            </div>
            </form>
            </div>
        </div>
    </div>
    </body>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                searching:false,
                lengthMenu: [ 5, 10, 50, 75, 100 ]
            });
    })
    </script>

    <!--jam-->
    <script type="text/javascript">
        window.onload = function() { jam(); }
       
        function jam() {
            var e = document.getElementById('jam'),
            d = new Date(), h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());
       
            e.innerHTML = h +':'+ m +':'+ s;
       
            setTimeout('jam()', 1000);
        }
       
        function set(e) {
            e = e < 10 ? '0'+ e : e;
            return e;
        }
    </script>
</html>

<?php
if (isset($_POST['kirim'])){
$id = $_POST['id'];
$tgl = date('Y-m-d');
$jam = date('H:i:s');
$nama = $_POST['nama'];
$keperluan = $_POST['keperluan'];  
$sql = mysqli_query($db,"INSERT INTO `kunjungan`(`id_anggota`, `jam`, `tgl`, keperluan) VALUES ('$id','$jam','$tgl','$keperluan')");
if ($sql) {
?>
<script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Selamat datang <?php echo $nama;?>',
  showConfirmButton: false,
  timer: 1500
}).then(function(){
    window.location.href='index.php';
});
</script>
<?php } 
}
?>