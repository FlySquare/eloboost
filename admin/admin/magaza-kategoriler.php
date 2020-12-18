<?php
include 'komutlar.php';
 ?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
  <meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">
  <link href="img/logo/logo.png" rel="icon">
  <title>Kategoriler | <?php echo $ayarcek['ayar_title']; ?></title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script src="js/sweetalert2.all.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11 -->
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
</head>

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

        <!-- Container Fluid-->



        <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Kategoriler</h1>
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="./">Anasayfa</a></li>
                      <li class="breadcrumb-item">Mağaza</li>

                      <li class="breadcrumb-item active">Kategoriler</li>

                    </ol>
                  </div>

                  <!-- Row -->
                  <div class="row">
                    <!-- Datatables -->

                    <!-- DataTable with Hover -->
                    <div class="col-lg-12">
                      <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="m-0 font-weight-bold text-primary">Kategoriler</h6>
                          <a href="haber-haberekle"><button type="button" class="btn btn-primary">Kategori Ekle</button></a>
                        </div>
                        <div class="table-responsive p-3">
                          <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                              <tr>
                                <th>#Id</th>
                                <th>Kategori Adı</th>

                                <th>Sunucu</th>
                                <th>Üst Kategori</th>
                            <th></th>
                                <th></th>
                                <th></th>

                              </tr>
                            </thead>
                            <tfoot>
                              <tr>
                                <th>#Id</th>
                                <th>Kategori Adı</th>

                                <th>Sunucu</th>
                                <th>Üst Kategori</th>
                            <th></th>
                                <th></th>
                                <th></th>

                              </tr>
                            </tfoot>
                            <tbody>

                              <?php while ($habercek=$habersor->fetch(PDO::FETCH_ASSOC)) {


                                ?>
                                <tr>
                                  <td><?php echo "#".$habercek['haber_id']; ?></td>
                                  <td><?php echo substr($habercek['haber_baslik'],0,20); ?>...</td>
                                  <td><?php
                                  $kategorisor=$db->prepare("SELECT * FROM bolfps_haberkategori where haberkategori_id=:id");
                                  $kategorisor->execute(array(
                                  	'id'=>$habercek['haber_kategori']
                                  ));
                                  $kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);
                                  $kategorisay = $kategorisor->rowCount();
                                    if ($kategorisay>0) {
                                          echo $kategoricek['haberkategori_isim'];
                                    }else {
                                      echo "Kategori Mevcut Değil!";
                                    }

                                   ?></td>
                                
                                  <td><?php echo $habercek['haber_tarih']; ?></td>
                                  <td><a href="haber-haberduzenle?haber_id=<?php echo $habercek['haber_id']; ?>"><button type="submit" class="btn btn-primary">Düzenle</button></a></td>
                                  <td><a href="../../db/islem.php?haber_id=<?php echo $habercek['haber_id']; ?>&habersil=ok"><button type="submit" class="btn btn-danger">Sil</button></a></td>
                                  <td><a href="../../db/islem.php?haber_id=<?php echo $habercek['haber_id']; ?>&habersil=ok"><button type="submit" class="btn btn-danger">Sil</button></a></td>

                                </tr>
                                <?php
                              } ?>

                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Row-->

                  <!-- Documentation Link -->


                  <!-- Modal Logout -->


                </div>
                <!---Container Fluid-->










        <!---Container Fluid-->
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

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script>
     $(document).ready(function () {
       $('#dataTableHover').DataTable(); // ID From dataTable with Hover
     });
   </script>
</body>

</html>
