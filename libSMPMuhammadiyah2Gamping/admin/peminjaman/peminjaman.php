<div class="bgGrid">
    <div class="m-2">
    <a href="?halaman=peminjamanTambah" class="btn btn-primary btn-tambah">Tambah Peminjaman</a>
    <table class="table" id="example">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Buku</th>
                <th>Tgl. Peminjaman</th>
                <th>Tgl. Pengembalian</th>
                <th>Keterlambatan</th>
                <th>Denda</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
                $no = 1;
                $sql = mysqli_query($db, "SELECT * FROM pengaturan");
                $cek = $sql -> fetch_array();
                    $sql = mysqli_query($db, "SELECT peminjaman.*, anggota.nama, buku.judul FROM anggota JOIN peminjaman on anggota.id=peminjaman.id_anggota JOIN buku on peminjaman.id_buku=buku.id_buku WHERE status = 'P'");
                    while ($data = $sql -> fetch_array()) {?>
                        <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $data['nama'];?></td>
                            <td><?php echo $data['judul'];?></td>
                            <td><?php echo $data['tgl_pinjam'];?></td>
                            <td><?php echo $data['tgl_kembali'];?></td>
                            <td>
                            <?php
                                $tanggal_dateline = $data['tgl_kembali'];

                                $tgl_kembali=date('Y-m-d');
                                $lambat = terlambat($tanggal_dateline, $tgl_kembali);

                                $denda = $cek['denda'];
                                $denda *= $lambat;

                                if ($lambat>0) {
                                    echo "<font color='red'>$lambat hari </font>";
                                }else{
                                    echo $lambat . " hari";
                                }
                        	?>
                            </td>
                            <td><?php echo "Rp.".$denda?></td>
                            <td>
                                <a onclick="return confirm('apakah anda yakin?')" href="?halaman=peminjamanKembali&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-warning" ><i class="fa fa-reply"></i> Kembali</a>
                            </td>
                        </tr>      
                    <?php }
                ?>
        </tbody>
    </table>
</div>
</div>
<?php
function terlambat($tgl_dateline, $tgl_kembali) {

$tgl_dateline_pcs = explode ("-", $tgl_dateline);
$tgl_dateline_pcs = $tgl_dateline_pcs[2]."-".$tgl_dateline_pcs[1]."-".$tgl_dateline_pcs[0];

$tgl_kembali_pcs = explode ("-", $tgl_kembali);
$tgl_kembali_pcs = $tgl_kembali_pcs[2]."-".$tgl_kembali_pcs[1]."-".$tgl_kembali_pcs[0];

$selisih = strtotime ($tgl_kembali_pcs) - strtotime ($tgl_dateline_pcs);

$selisih = $selisih / 86400;

if ($selisih>=1) {
	$hasil_tgl = floor($selisih);
}
else {
	$hasil_tgl = 0;
}
return $hasil_tgl;
}
?>