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
  <title>Sunucular | <?php echo $ayarcek['ayar_title']; ?></title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

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

        <!-- Container Fluid-->



        <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Sunucular</h1>
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="./">Anasayfa</a></li>
                      <li class="breadcrumb-item">Sunucu</li>

                      <li class="breadcrumb-item active">Sunucular</li>

                    </ol>
                  </div>

                  <!-- Row -->
                  <div class="row">
                    <!-- Datatables -->

                    <!-- DataTable with Hover -->
                    <div class="col-lg-12">
                      <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="m-0 font-weight-bold text-primary">Sunucular</h6>
                          <a href="sunucu-sunucuekle"><button type="button" class="btn btn-primary">Sunucu Ekle</button></a>

                        </div>
                        <div class="table-responsive p-3">
                          <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                              <tr>
                                <th>#Id</th>
                                <th>İsim</th>

                                <th>İp:Port</th>
                                <th>Konsol Port:Şifre</th>

                                <th>Tarih</th>
                                <th></th>
                                <th></th>

                              </tr>
                            </thead>
                            <tfoot>
                              <tr>
                                <th>#Id</th>
                                <th>İsim</th>

                                <th>İp:Port</th>
                                <th>Konsol Port:Şifre</th>

                                <th>Tarih</th>
                                <th></th>
                                <th></th>
                              </tr>
                            </tfoot>
                            <tbody>

                              <?php while ($sunucucek=$sunucusor->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <tr>
                                  <td><?php echo "#".$sunucucek['sunucu_id ']; ?></td>
                                  <td><?php echo $sunucucek['sunucu_isim']; ?></td>

                                  <td><?php echo $sunucucek['sunucu_ip']; ?> : <?php echo $sunucucek['sunucu_port']; ?></td>
                                  <td><?php echo $sunucucek['sunucu_konsolport']; ?> : <?php echo $sunucucek['sunucu_konsolsifre']; ?></td>
                                  <td><?php echo $sunucucek['sunucu_tarih']; ?></td>
                                  <td><a href="../../db/islem.php?sunucu_id =<?php echo $sunucucek['sunucu_id ']; ?>"><button type="submit" class="btn btn-primary">Düzenle</button></a></td>
                                  <td><a href="../../db/islem.php?sunucu_id =<?php echo $sunucucek['sunucu_id ']; ?>&sunucusil=ok"><button type="submit" class="btn btn-danger">Sil</button></a></td>

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
