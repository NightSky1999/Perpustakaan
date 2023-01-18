<?php
$id = $_GET['id'];
$sql = mysqli_query($db, "UPDATE peminjaman SET status = 'K' WHERE id_peminjaman = '$id'");
if ($sql) { ?>
    <script>
       Swal.fire({
           icon: 'success',
           title: 'Buku Dikembalikan',
           timer: 1000
       }).then(function() {
           window.location.href='?halaman=peminjaman';
       });
       
   </script>
   <?php }
   else { ?>
       <script>
       Swal.fire({
           icon: 'warning',
           title: 'Gagal!',
       })
       </script>
   <?php }
?>