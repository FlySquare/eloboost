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
  <title><?php echo $ayarcek['ayar_title']; ?></title>
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

                  </div>

                  <!-- Row -->
                  <div class="row">
                    <!-- Datatables -->

                    <!-- DataTable with Hover -->
                    <div class="col-lg-12">
                      <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="m-0 font-weight-bold text-primary">Siparişler</h6>
                        </div>
                        <div class="table-responsive p-3">
                          <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                              <tr>
                                <th>#Id</th>
                                <th>Maç Sayısı</th>
                                <th>Sipariş Sahip</th>
                                <th>Tarih</th>
                                <th>Fiyat</th>
                                <th>Durum</th>
                                <th></th>
                                <th></th>
                              </tr>
                            </thead>
                            <tfoot>
                              <tr>
                                <th>#Id</th>
                                <th>Maç Sayısı</th>
                                <th>Sipariş Sahip</th>
                                <th>Tarih</th>
                                <th>Fiyat</th>
                                <th>Durum</th>
                                <th></th>
                                <th></th>

                              </tr>
                            </tfoot>
                            <tbody>

                              <?php while ($habercek=$urunsorn->fetch(PDO::FETCH_ASSOC)) {


                                ?>
                                <tr>
                                  <td><?php echo "#".$habercek['normalmacsiparis_id']; ?></td>
                                  <td><?php

                                   echo $habercek['normalmacsiparis_toplammac'];
                                   ?></td>

                                  <td><?php
                                  $kategorisor2=$db->prepare("SELECT * FROM bolfps_user where user_id=:id");
                                  $kategorisor2->execute(array(
                                   'id'=>$habercek['normalmacsiparis_userid']
                                  ));
                                  $kategoricek2=$kategorisor2->fetch(PDO::FETCH_ASSOC);

                                          echo $kategoricek2['user_username'];

                                   ?></td>
                                  <td><?php

                                  echo $habercek['normalmacsiparis_tarih'];

                                   ?></td>


                                  <td><?php echo $habercek['normalmacsiparis_fiyat']." ₺"; ?></td>
                                  <td><?php
                                  if ($habercek['normalmacsiparis_durum'] == "0") {
                                    echo "Bekliyor";
                                  }elseif ($habercek['normalmacsiparis_durum'] == "1") {
                                    echo "İşleme Alındı";
                                  }elseif ($habercek['normalmacsiparis_durum'] == "2") {
                                    echo "Tamamlandı";
                                  }elseif ($habercek['normalmacsiparis_durum'] == "3") {
                                    echo "İptal Edildi";
                                  }
                                   ?></td>


                                  <td><a href="normalmacsiparisg.php?normalmacsiparis_id=<?php echo $habercek['normalmacsiparis_id']; ?>"><button type="submit" class="btn btn-primary">Görüntüle</button></a></td>
                                  <td><a href="../../db/islem.php?normalmacsiparis_id=<?php echo $habercek['normalmacsiparis_id']; ?>&urunsiln=ok"><button type="submit" class="btn btn-danger">Sil</button></a></td>

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
