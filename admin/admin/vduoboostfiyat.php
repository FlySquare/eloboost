<?php
include 'komutlar.php';
$habersor=$db->prepare("SELECT * FROM bolfps_valorantduoboostfiyat where valorantduoboostfiyat_id=:id");
$habersor->execute(array(
  'id'=> "2"
));
$habercek=$habersor->fetch(PDO::FETCH_ASSOC);
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
  <title><?php echo $ayarcek['ayar_title']; ?></title>
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
  <?php if ($_GET['durum'] == "no") {
    ?>
    <script type="text/javascript">
    Swal.fire('Hata!', 'Lütfen daha sonra tekrar deneyiniz!', 'error')
    </script>
    <?php
  }elseif ($_GET['durum'] == "ok") {
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

          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Fiyat Düzenle</h6>

                </div>
                <div class="card-body">
                  <form action="../../db/islem.php" method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Demir</label>
                      <input type="text" class="form-control"  name="valorantduoboostfiyat_demir" value="<?php echo
$habercek['valorantduoboostfiyat_demir'];
                       ?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Bronz</label>
                      <input type="text" class="form-control"  name="valorantduoboostfiyat_bronz" value="<?php echo
  $habercek['valorantduoboostfiyat_bronz'];
                       ?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Gümüş</label>
                      <input type="text" class="form-control"  name="valorantduoboostfiyat_gumus" value="<?php echo
$habercek['valorantduoboostfiyat_gumus'];
                       ?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Altin</label>
                      <input type="text" class="form-control"  name="valorantduoboostfiyat_altin" value="<?php echo
$habercek['valorantduoboostfiyat_altin'];
                       ?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Platin</label>
                      <input type="text" class="form-control"  name="valorantduoboostfiyat_platin" value="<?php echo
$habercek['valorantduoboostfiyat_platin'];
                       ?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Elmas</label>
                      <input type="text" class="form-control"  name="valorantduoboostfiyat_elmas" value="<?php echo
$habercek['valorantduoboostfiyat_elmas'];
                       ?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Ölümsüzlük</label>
                      <input type="text" class="form-control"  name="valorantduoboostfiyat_olumsuzluk" value="<?php echo
                  $habercek['valorantduoboostfiyat_olumsuzluk'];
                       ?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Işıyan</label>
                      <input type="text" class="form-control"  name="valorantduoboostfiyat_isiyan" value="<?php echo
                  $habercek['valorantduoboostfiyat_isiyan'];
                       ?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">İndirim Var Mı?(0-Hayır / 1-Evet)</label>
                      <input type="text" class="form-control"  name="valorantduoboostfiyat_indirimdurum" value="<?php echo
$habercek['valorantduoboostfiyat_indirimdurum'];
                       ?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">İndirim Yüzdesi(Örn: %20 için yazılması gereken = 1.2)</label>
                      <input type="text" class="form-control"  name="valorantduoboostfiyat_indirim" value="<?php echo
$habercek['valorantduoboostfiyat_indirim'];
                       ?>" >
                    </div>





                    <input type="hidden" name="valorantduoboostfiyat_id" value="<?php echo $habercek['valorantduoboostfiyat_id']; ?>">

                    <button type="submit" name="valoduofiyat" class="btn btn-primary">Güncelle</button>

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