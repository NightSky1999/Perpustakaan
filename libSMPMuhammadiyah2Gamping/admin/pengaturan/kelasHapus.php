<?php
	
	$id = $_GET ['id'];

	$db->query("DELETE FROM kelas WHERE id_kelas ='$id'");

?>
<script>
    Swal.fire({
        icon: 'success',
        title: 'Data Berhasil Dihapus',
        timer: 1000
    }).then(function() {
        window.location.href='?halaman=pengaturan';
    });
    
</script>
