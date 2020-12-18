<?php
ob_start();
session_start();
error_reporting(0);
 if ($_SESSION['user_adminname']){
   header("Location:index.php");
 } ?>


<!DOCTYPE html>
<html lang="tr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="img/logo/logo.png" rel="icon">
  <title>BolFps Yönetici Girişi</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Giriş Yap</h1>
                  </div>
                  <form action="../../db/islem.php" method="post" class="user">
                    <div class="form-group">
                      <input type="text" class="form-control" name="user_username" aria-describedby="emailHelp"
                        placeholder="Kullanıcı Adınızı Giriniz">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="user_sifre" placeholder="Şifreniz">
                    </div>

                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-block" name="admingiris" value="Giriş Yap">
                    </div>

                  </form>

                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>
