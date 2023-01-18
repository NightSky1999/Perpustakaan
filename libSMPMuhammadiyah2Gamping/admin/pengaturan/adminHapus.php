<?php
	
	$id = $_GET ['id'];

	$db->query("DELETE FROM admin WHERE id ='$id'");

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
