<?php include "../connection.php" ?>
<html>
    <head>
        <title>Halaman Login Admin</title>
    </head>
        <link rel="stylesheet" href="../css/mycss.css">
        <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
        <script src="../bootstrap/bootstrap.min.js"></script>
        <script src="../css/sweetalert2.all.min.js"></script>
        <script src="../css/sweetalert2.all.min.js"></script>
    <body class="login">
    <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" method="post">

            <div class="text-center">
              <img src="../img/download.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
                <center><h4>ADMIN</h4></center>
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="User Name" name="username">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" placeholder="password" name="password">
            </div>
            <div class="text-center">
              <input type="submit" value="Login" name="login" class="btn btn-primary">
              <a href="../index.php" class="btn btn-danger">Batal</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  </body>
</html>
<?php
  if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = mysqli_query($db, "SELECT * FROM admin WHERE username='$user' AND password ='$pass'");
    $data = $sql -> fetch_row();
    if ($data!=0) { ?>
     <script>
        Swal.fire({
          icon:'success',
          title:'Selamat Datang',
          showConfirmButton: false,
          timer: 1500
        }).then(function() {
                    window.location.href='admin.php?halaman=beranda';
                });
     </script>
    <?php }
    else { ?>
      <script>
        Swal.fire(
          'Gagal Masuk!',
          'username atau password salah',
          'warning'
        )
      </script>
    <?php }
  }
?>

