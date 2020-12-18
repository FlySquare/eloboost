<?php
include 'komutlar.php';
$habersor=$db->prepare("SELECT * FROM bolfps_valorantelosiparis where valorantelosiparis_id=:id");
$habersor->execute(array(
  'id'=> $_GET['valorantelosiparis_id']
));
$habercek=$habersor->fetch(PDO::FETCH_ASSOC);
    $habersay = $habersor->rowCount();
    if(!$_GET['valorantelosiparis_id'] || $habersay<1){
         Header("Location:oyun-oyunlar");
       }
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
            <h1 class="h3 mb-0 text-gray-800">Sipariş Düzenle</h1>

          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Sipariş Düzenle</h6>

                </div>
                <div class="card-body">
                  <form action="../../db/islem.php" method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Mevut Lig/Aşama</label>
                      <input type="text" class="form-control" readonly="yes" name="oyunlar_foto" value="<?php

                        if ($habercek['valorantelosiparis_mevcutlig'] == 1) {
                          $lig = "Demir";

                        }elseif ($habercek['valorantelosiparis_mevcutlig'] == 2) {
                          $lig = "Bronz";

                        }elseif ($habercek['valorantelosiparis_mevcutlig'] == 3) {
                          $lig = "Gümüş";

                        }elseif ($habercek['valorantelosiparis_mevcutlig'] == 4) {
                          $lig = "Altın";

                        }elseif ($habercek['valorantelosiparis_mevcutlig'] == 5) {
                          $lig = "Platin";

                        }elseif ($habercek['valorantelosiparis_mevcutlig'] == 6) {
                          $lig = "Elmas";

                        }
                       echo $lig." / ".$habercek['valorantelosiparis_mevcutasama'];
                       ?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">İstenilen Lig/Aşama</label>
                      <input readonly="yes" type="text" class="form-control" name="oyunlar_baslik" value="<?php

                        if ($habercek['valorantelosiparis_hedeflig'] == 1) {
                          $lig = "Demir";

                        }elseif ($habercek['valorantelosiparis_hedeflig'] == 2) {
                          $lig = "Bronz";

                        }elseif ($habercek['valorantelosiparis_hedeflig'] == 3) {
                          $lig = "Gümüş";

                        }elseif ($habercek['valorantelosiparis_hedeflig'] == 4) {
                          $lig = "Altın";

                        }elseif ($habercek['valorantelosiparis_hedeflig'] == 5) {
                          $lig = "Platin";

                        }elseif ($habercek['valorantelosiparis_hedeflig'] == 6) {
                          $lig = "Elmas";

                        }
                       echo $lig." / ".$habercek['valorantelosiparis_hedefasama'];
                       ?>" placeholder="Oyun başlığını Giriniz.">
                    </div>
                
                    <div class="form-group">
                      <label for="exampleInputEmail1">Sunucu</label>
                      <input readonly="yes" type="text" class="form-control" name="oyunlar_baslik" value="<?php
                       echo $habercek['valorantelosiparis_sunucu']; ?>" placeholder="Oyun başlığını Giriniz.">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Fiyat</label>
                      <input readonly="yes" type="text" class="form-control" name="oyunlar_baslik" value="<?php echo $habercek['valorantelosiparis_fiyat']; ?>&#8378;" placeholder="Oyun başlığını Giriniz.">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Sipariş Sahip Kullanıcı Adı</label>
                      <input readonly="yes" readonly="yes" type="text" class="form-control" name="oyunlar_foto" value="<?php
                      $kategorisor2=$db->prepare("SELECT * FROM bolfps_user where user_id=:id");
                      $kategorisor2->execute(array(
                       'id'=>$habercek['valorantelosiparis_userid']
                      ));
                      $kategoricek2=$kategorisor2->fetch(PDO::FETCH_ASSOC);

                              echo $kategoricek2['user_username'];

                       ?>" placeholder="Oyun fotoğrafını ekleyiniz.">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Hesap Adı</label>
                      <input readonly="yes" readonly="yes" type="text" class="form-control" name="oyunlar_baslik" value="<?php echo $habercek['valorantelosiparis_hesapad']; ?>" placeholder="Oyun başlığını Giriniz.">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Hesap Şifresi</label>
                      <input readonly="yes" type="text" class="form-control" name="oyunlar_foto" value="<?php echo $habercek['valorantelosiparis_hesapsifre']; ?>" placeholder="Oyun fotoğrafını ekleyiniz.">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tarih</label>
                      <input readonly="yes" type="text" class="form-control" name="oyunlar_baslik" value="<?php echo $habercek['valorantelosiparis_tarih']; ?>" placeholder="Oyun başlığını Giriniz.">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Durum (0-Bekliyor / 1-İşleme Alındı / 2-Tamamlandı / 3-İptal Edildi )</label>
                      <input  type="text" class="form-control" name="valorantelosiparis_durum" value="" placeholder="<?php
                      if ($habercek['valorantelosiparis_durum'] == "0") {
                        echo "Şuanki Sipariş Durumu: Bekliyor";
                      }elseif ($habercek['valorantelosiparis_durum'] == "1") {
                        echo "Şuanki Sipariş Durumu: İşleme Alındı";
                      }elseif ($habercek['valorantelosiparis_durum'] == "2") {
                        echo "Şuanki Sipariş Durumu: Tamamlandı";
                      }elseif ($habercek['valorantelosiparis_durum'] == "3") {
                        echo "Şuanki Sipariş Durumu: İptal Edildi";
                      }
                       ?>" >
                    </div>




                    <input type="hidden" name="valorantelosiparis_id" value="<?php echo $habercek['valorantelosiparis_id']; ?>">

                    <button type="submit" name="valorantelosiparisduzenle" class="btn btn-primary">Güncelle</button>

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
