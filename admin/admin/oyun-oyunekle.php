<?php
include 'komutlar.php';

 ?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Oyun Ekle | <?php echo $ayarcek['ayar_title']; ?></title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

  <script src="js/sweetalert2.all.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11 -->
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
</head>
<?php
 ?>

<body id="page-top">
<?php if ($_GET['yenioyun'] == "no") {
  ?>
  <script type="text/javascript">
  Swal.fire('Hata!', 'Lütfen daha sonra tekrar deneyiniz!', 'error')
  </script>
  <?php
}elseif ($_GET['yenioyun'] == "ok") {
  ?>
  <script type="text/javascript">
  Swal.fire('Başarılı!', 'İsteğiniz başarıyla gerçekleşti!', 'success')
  </script>
  <?php
} ?>
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include 'solblok.php'; ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php include 'header.php'; ?>
        <!-- Topbar -->

        <!-- İçerik Alanı / Container Fluid-->
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Oyun Ekle</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Anasayfa</a></li>
              <li class="breadcrumb-item">Oyun</li>
              <li class="breadcrumb-item active" aria-current="page">Oyun Ekle</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Oyun Ekle</h6>
                  <a href="oyun-oyunlar"><button type="button" class="btn btn-primary">Oyunlar</button></a>

                </div>
                <div class="card-body">
                  <form action="../../db/islem.php" method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Oyun Fotoğraf</label>
                      <input type="text" required class="form-control" name="oyunlar_foto" placeholder="Oyun fotoğrafını ekleyiniz.">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Oyun Başlık</label>
                      <input type="text" class="form-control" name="oyunlar_baslik" placeholder="Oyun başlığını Giriniz.">
                    </div>



                    <div class="form-group">
                      <label for="exampleInputEmail1">Oyun Açıklaması</label>
                      <textarea class="form-control" name="oyunlar_aciklama" ></textarea>
                    </div>


                    <button type="submit" name="oyunekle" class="btn btn-primary">Ekle</button>
                    <a href="oyun-oyunlar"><button type="button" class="btn btn-danger">Geri</button></a>

                  </form>
                </div>
              </div>

              <!-- Form Sizing -->


              <!-- Horizontal Form -->

            </div>


          </div>
          <!--Row-->




        </div>
        <!---Container Fluid-->
        <!---İçerik Alanı / Container Fluid-->
      </div>
      <!-- Footer -->
    <?php include 'footer.php'; ?>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <script>
                                   CKEDITOR.replace( 'oyunlar_aciklama' );
                               </script>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
</body>

</html>
