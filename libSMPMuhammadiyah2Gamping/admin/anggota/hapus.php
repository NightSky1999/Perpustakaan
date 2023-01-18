<?php
	
	$id = $_GET ['id'];

	$db->query("DELETE FROM anggota WHERE id ='$id'");

?>
<script>
    Swal.fire({
        icon: 'success',
        title: 'Data Berhasil Dihapus',
        timer: 1000
    }).then(function() {
        window.location.href='?halaman=anggota';
    });
    
</script>
