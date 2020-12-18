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
  <title>Ürün Ekle | <?php echo $ayarcek['ayar_title']; ?></title>
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
            <h1 class="h3 mb-0 text-gray-800">Ürün Ekle</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Anasayfa</a></li>
              <li class="breadcrumb-item">Mağaza</li>
              <li class="breadcrumb-item active" aria-current="page">Ürün Ekle</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Ürün Ekle</h6>
                  <a href="magaza-urunler"><button type="button" class="btn btn-primary">Ürünler</button></a>

                </div>
                <div class="card-body">
                  <form action="../../db/islem.php" method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Ürün Fotoğraf</label>
                      <input type="text" required class="form-control" name="urun_foto" placeholder="Haber fotoğrafını ekleyiniz.">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Ürün Başlık</label>
                      <input type="text" required class="form-control" name="urun_baslik" placeholder="Haber başlığını Giriniz.">
                    </div>

                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Sunucu</label>
                    <select required name="urun_sunucu" class="form-control" id="exampleFormControlSelect1">

                      <?php
while ($haberkategoricek = $sunucusor->fetch(PDO::FETCH_ASSOC)) {
  ?>
<option value="<?php echo $haberkategoricek['sunucu_id']; ?>"><?php echo $haberkategoricek['sunucu_isim']; ?></option>
  <?php
}
                       ?>

                      </select>
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Sunucu Kategori</label>
                    <select required name="urun_sunucukategori" class="form-control" id="exampleFormControlSelect1">

                      <?php
while ($haberkategoricek = $sunucusor->fetch(PDO::FETCH_ASSOC)) {
  ?>
<option value="<?php echo $haberkategoricek['sunucu_id']; ?>"><?php echo $haberkategoricek['sunucu_isim']; ?></option>
  <?php
}
                       ?>

                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Ürün Stok</label>
                      <input type="number" required max="9999" min="1" class="form-control" name="urun_stok" placeholder="Haber başlığını Giriniz.">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Ürün Etiket(Virgül ile ayırınız!)</label>
                      <input type="text" required class="form-control" name="urun_etiket" placeholder="Haber başlığını Giriniz.">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Ürün Fiyat</label>
                      <input type="number" required class="form-control" max="9999" min="1" name="urun_indirimsizfiyat" placeholder="Haber başlığını Giriniz.">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Varsa İndirimli Fiyatı Giriniz!(Boş bırakabilirsiniz)</label>
                      <input type="number" class="form-control" max="9999" min="1" name="urun_fiyat" placeholder="Haber başlığını Giriniz.">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Ürün Komut</label>
                      <input type="text" required class="form-control" name="urun_komut" placeholder="Haber başlığını Giriniz.">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Ürün Komut 2</label>
                      <input type="text" required class="form-control" name="urun_komut2" placeholder="Haber başlığını Giriniz.">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Ürün Açıklama</label>
                      <textarea required class="form-control" name="urun_genelaciklama" ></textarea>
                    </div>



                    <button type="submit" name="urunekle" class="btn btn-primary">Ekle</button>
                    <a href="magaza-urunler"><button type="button" class="btn btn-danger">Geri</button></a>

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
                                   CKEDITOR.replace( 'urun_genelaciklama' );
                               </script>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
</body>

</html>
