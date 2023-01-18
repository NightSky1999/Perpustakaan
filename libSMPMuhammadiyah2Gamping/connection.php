<?php
    date_default_timezone_set("Asia/Jakarta");
    $db = mysqli_connect("localhost","root","","libsmpm2gamping");
    if (!$db) {
        echo "<script>alert('Gagal Menghubung ke Database')</script>";        
    }
?>
