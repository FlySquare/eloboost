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
  <title>Oyunlar | <?php echo $ayarcek['ayar_title']; ?></title>
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
                    <h1 class="h3 mb-0 text-gray-800">Oyunlar</h1>
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="./">Anasayfa</a></li>
                      <li class="breadcrumb-item">Oyun</li>

                      <li class="breadcrumb-item active">Oyunlar</li>

                    </ol>
                  </div>

                  <!-- Row -->
                  <div class="row">
                    <!-- Datatables -->

                    <!-- DataTable with Hover -->
                    <div class="col-lg-12">
                      <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="m-0 font-weight-bold text-primary">Oyunlar</h6>
                          <a href="oyun-oyunekle"><button type="button" class="btn btn-primary">Oyun Ekle</button></a>

                        </div>
                        <div class="table-responsive p-3">
                          <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                              <tr>
                                <th>#Id</th>
                                <th>Fotoğraf</th>
                                <th>Başlık</th>


                                <th>Tarih</th>
                                <th></th>
                                  <th></th>
                              </tr>
                            </thead>
                            <tfoot>
                              <tr>
                                <th>#Id</th>
                                <th>Fotoğraf</th>
                                <th>Başlık</th>

                                <th>Tarih</th>
                                <th></th>
                                <th></th>
                              </tr>
                            </tfoot>
                            <tbody>

                              <?php while ($oyuncek=$oyunsor->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <tr>
                                  <td><?php echo "#".$oyuncek['oyun_id']; ?></td>
                                  <td><img src="<?php echo $oyuncek['oyunlar_foto']; ?>" width="50%" alt=""></td>

                                  <td><?php echo substr($oyuncek['oyunlar_baslik'],0,20); ?>...</td>


                                  <td><?php echo $oyuncek['oyunlar_tarih']; ?></td>
                                  <td><a href="oyun-oyunduzenle?oyun_id=<?php echo $oyuncek['oyun_id']; ?>"><button type="submit" class="btn btn-primary">Düzenle</button></a></td>
                                  <td><a href="../../db/islem.php?oyun_id=<?php echo $oyuncek['oyun_id']; ?>&oyunlarsil=ok"><button type="submit" class="btn btn-danger">Sil</button></a></td>

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
