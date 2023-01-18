<div class="row">
    <div class="col bgGrid m-2">
        <h5>Kunjungan Bulan ini</h5>
        <table class="table border-1" id="tablekunjung">
            <tbody>
                <?php
                    $limit = 1;
                    $sql = mysqli_query($db, "SELECT * FROM kelas");
                    while ($kelas = $sql ->fetch_array()) {
                        $id_kelas = $kelas['id_kelas']; 
                        $sql2 = mysqli_query($db, "SELECT kunjungan.id_anggota FROM kunjungan JOIN anggota on kunjungan.id_anggota=anggota.id WHERE anggota.id_kelas ='$id_kelas' AND MONTH(NOW()) = MONTH(kunjungan.tgl);");
                        $jumlah = mysqli_num_rows($sql2);
                        if ($limit == 1) {
                            echo "<tr>";
                        }?>
                        <td><?php echo $kelas['kelas']." : ".$jumlah?></td>
                    <?php if ($limit == 4) {
                        echo "</tr>";
                        $limit = 0;
                    }
                    $limit++;
                }
                ?>
                <tr><td colspan="4" class="bg-warning" style="font-weight: bold;">
                    <center>
                    <?php
                        $total = mysqli_num_rows(mysqli_query($db, "SELECT * FROM kunjungan"));
                        echo "Total : ".$total;
                    ?>
                    </center>
                </td></tr>
            </tbody>
        </table>
    </div>
    <div class="col bgGrid m-2">
        <h5>Peminjaman Bulan ini</h5>
        <table class="table border-1" id="tablekunjung">
            <tbody>
                <?php
                    $limit = 1;
                    $sql = mysqli_query($db, "SELECT * FROM rak");
                    while ($rak = $sql ->fetch_array()) {
                        $id_rak = $rak['id_rak']; 
                        $sql2 = mysqli_query($db, "SELECT peminjaman.id_buku, buku.id_rak FROM peminjaman JOIN buku on peminjaman.id_buku = buku.id_buku WHERE buku.id_rak ='$id_rak' AND MONTH(NOW()) = MONTH(peminjaman.tgl_pinjam) AND YEAR(NOW()) = YEAR(peminjaman.tgl_pinjam)");
                        $jumlah = mysqli_num_rows($sql2);
                        if ($limit == 1) {
                            echo "<tr>";
                        }?>
                        <td><?php echo $rak['rak']." : ".$jumlah?></td>
                    <?php if ($limit == 4) {
                        echo "</tr>";
                        $limit = 0;
                    }
                    $limit++;
                }
                ?>
                <tr><td colspan="4" class="bg-warning" style="font-weight: bold;">
                    <center>
                    <?php
                        $total = mysqli_num_rows(mysqli_query($db, "SELECT * FROM peminjaman"));
                        echo "Total : ".$total;
                    ?>
                    </center>
                </td></tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col bgGrid m-2">
        <h5>Kunjungan</h5>
        <form method="post">
            <input type="date" name="tgl1" id="tgl1"> -
            <input type="date" name="tgl2" id="tgl2">
            <input type="submit" value="Cari" class="btn btn-warning" name="cari">
        </form>
        <?php
            if (isset($_POST['cari'])){
                $tgl1 = $_POST['tgl1'];
                $tgl2 = $_POST['tgl2'];?>
                <form method="post">
            <input type="date" name="tgl1" id="tgl1" value="<?php echo $tgl1?>"> -
            <input type="date" name="tgl2" id="tgl2" value="<?php echo $tgl2?>">
            </form>
                <table class="table border-1" id="tablekunjung">
            <tbody>
                <?php
                    $limit = 1;
                    $sql = mysqli_query($db, "SELECT * FROM kelas");
                    while ($kelas = $sql ->fetch_array()) {
                        $id_kelas = $kelas['id_kelas']; 
                        $sql2 = mysqli_query($db, "SELECT kunjungan.id_anggota FROM kunjungan JOIN anggota on kunjungan.id_anggota=anggota.id WHERE anggota.id_kelas ='$id_kelas' AND kunjungan.tgl BETWEEN '$tgl1'AND'$tgl2'");
                        $jumlah = mysqli_num_rows($sql2);
                        if ($limit == 1) {
                            echo "<tr>";
                        }?>
                        <td><?php echo $kelas['kelas']." : ".$jumlah?></td>
                    <?php if ($limit == 4) {
                        echo "</tr>";
                        $limit = 0;
                    }
                    $limit++;
                }
                ?>
                <tr><td colspan="4" class="bg-warning" style="font-weight: bold;">
                    <center>
                    <?php
                        $total = mysqli_num_rows(mysqli_query($db, "SELECT * FROM kunjungan"));
                        echo "Total : ".$total;
                    ?>
                    </center>
                </td></tr>
            </tbody>
        </table>
           <?php }
        ?>
    </div>
    <div class="col bgGrid m-2">
        <h5>Peminjaman</h5>
        <form method="post">
            <input type="date" name="tgl1" id="tgl1"> -
            <input type="date" name="tgl2" id="tgl2">
            <input type="submit" value="Cari" class="btn btn-warning" name="cari2">
        </form>
        <?php
            if (isset($_POST['cari2'])){
                $tgl1 = $_POST['tgl1'];
                $tgl2 = $_POST['tgl2'];?>
                <form method="post">
            <input type="date" name="tgl1" id="tgl1" value="<?php echo $tgl1?>"> -
            <input type="date" name="tgl2" id="tgl2" value="<?php echo $tgl2?>">
            </form>
                <table class="table border-1" id="tablekunjung">
            <tbody>
                <?php
                    $limit = 1;
                    $sql = mysqli_query($db, "SELECT * FROM rak");
                    while ($kelas = $sql ->fetch_array()) {
                        $id_kelas = $kelas['id_rak']; 
                        $sql2 = mysqli_query($db, "SELECT peminjaman.id_buku, buku.id_rak FROM peminjaman JOIN buku on peminjaman.id_buku = buku.id_buku WHERE buku.id_rak ='$id_rak' AND peminjaman.tgl_pinjam BETWEEN '$tgl1'AND'$tgl2'");
                        $jumlah = mysqli_num_rows($sql2);
                        if ($limit == 1) {
                            echo "<tr>";
                        }?>
                        <td><?php echo $kelas['rak']." : ".$jumlah?></td>
                    <?php if ($limit == 4) {
                        echo "</tr>";
                        $limit = 0;
                    }
                    $limit++;
                }
                ?>
                <tr><td colspan="4" class="bg-warning" style="font-weight: bold;">
                    <center>
                    <?php
                        $total = mysqli_num_rows(mysqli_query($db, "SELECT * FROM kunjungan"));
                        echo "Total : ".$total;
                    ?>
                    </center>
                </td></tr>
            </tbody>
        </table>
           <?php }
        ?>
    </div>
</div>