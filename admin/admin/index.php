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

        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">League of Legends</h1>

          </div>

          <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
          <a href="eloboostsiparis">    <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Elo Boost Sipariş</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $urunsor2yaz['sayi']." TL"; ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> <?php echo $urunsay; ?></span>
                        <span>Toplam Sipariş Sayısı</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-money-bill-alt fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div></a>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
            <a href="duoboostsiparis">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Duo Boost Sipariş</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $urunsor3yaz['sayi2']." TL"; ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> <?php echo $urunsaydu; ?></span>
                        <span>Toplam Sipariş Sayısı</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i style="color:#3abaf4!important" class="fas fa-money-bill-alt fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
            <a href="ilk10macsiparis">  <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">İlk 10 Maç Sipariş</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $urunsor4yaz['sayi']." TL"; ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> <?php echo $urunsay10; ?></span>
                        <span>Toplam Sipariş Sayısı</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i style="color:#66bb6a!important" class="fas fa-money-bill-alt fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div></a>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
          <a href="winboostsiparis">    <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Win Boost Sipariş</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $urunsor5yaz['sayi']." TL"; ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> <?php echo $urunsaywin; ?></span>
                        <span>Toplam Sipariş Sayısı</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i style="color:#ffa426!important" class="fas fa-money-bill-alt fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div></a>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="challengersiparis"><div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Challenger Boost Sipariş</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $urunsor6yaz['sayi']." TL"; ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> <?php echo $urunsaychl; ?></span>
                        <span>Toplam Sipariş Sayısı</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i style="color:#b726ff!important" class="fas fa-money-bill-alt fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div></a>
            </div>

            <!-- Area Chart -->

            <!-- Pie Chart -->

            <!-- Invoice Example -->

            <!-- Message From Customer-->

          </div>
          <!--Row-->



          <!-- Modal Logout -->


        </div>
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Valorant</h1>

          </div>

          <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
          <a href="veloboostsiparis">    <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Elo Boost Sipariş</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $urunsor22yaz['sayi']." TL"; ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> <?php echo $urunsayv; ?></span>
                        <span>Toplam Sipariş Sayısı</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-money-bill-alt fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div></a>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
            <a href="vduoboostsiparis">  <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Duo Boost Sipariş</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $urunsor33yaz['sayi']." TL"; ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> <?php echo $urunsayduv; ?></span>
                        <span>Toplam Sipariş Sayısı</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i style="color:#3abaf4!important" class="fas fa-money-bill-alt fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div></a>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
            <a href="vilk5macsiparis">  <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">İlk 5 Maç Sipariş</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $urunsor44yaz['sayi']." TL"; ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> <?php echo $urunsay5v; ?></span>
                        <span>Toplam Sipariş Sayısı</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i style="color:#66bb6a!important" class="fas fa-money-bill-alt fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div></a>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
          <a href="vnormalmacsiparis">    <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Normal Sipariş</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $urunsor55yaz['sayi']." TL"; ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> <?php echo $urunsaynormv; ?></span>
                        <span>Toplam Sipariş Sayısı</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i style="color:#ffa426!important" class="fas fa-money-bill-alt fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div></a>
            </div>


            <!-- Area Chart -->

            <!-- Pie Chart -->

            <!-- Invoice Example -->

            <!-- Message From Customer-->

          </div>
          <!--Row-->



          <!-- Modal Logout -->


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
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
</body>

</html>
