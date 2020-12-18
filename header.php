<?php include 'komutlar.php'; ?>
<?php if (isset($_SESSION['user_username'])) {
?>
<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-xs-1 col-sm-1">



						</div>
						<div class="col-xs-11 col-sm-11">

							<!-- header-top-second start -->
							<!-- ================ -->
							<div id="header-top-second"  class="clearfix">

								<!-- header top dropdowns start -->
								<!-- ================ -->
								<div class="header-top-dropdown">
									<div class="btn-group dropdown">
										<button type="button" class="btn" onclick="window.location.href='/sikca-sorulan-sorular'"><i class="fa fa-question-circle"></i> S.S.S</button>
									</div>
																																							<div class="btn-group dropdown">
											<button type="button" class="btn" onclick="window.location.href='/hesabim'"><i class="fa fa-user-circle"></i> <?php echo $girisyapanusercek['user_username']; ?></button>
										</div>
										<div class="btn-group dropdown">
											<button type="button" class="btn" onclick="window.location.href='bakiye-hareketleri'"><i class="fa fa-turkish-lira"></i><?php echo $girisyapanusercek['user_bakiye']; ?></button>
										</div>

										<div class="btn-group dropdown">
											<button type="button" class="btn-success" onclick="window.location.href='bakiye-yukle.php'"><i class="fa fa-plus"></i>Bakiye Yükle</button>
										</div>

										<div class="btn-group dropdown">
											<button type="button" class="btn" onclick="window.location.href='cikis.php'"><i class="fa fa-sign-out"></i> Çıkış Yap</button>
										</div>

								</div>
								<!--  header top dropdowns end -->

							</div>
							<!-- header-top-second end -->

						</div>
					</div>
				</div>
			</div>
			<!-- header-top end -->
<?php
}else {
  ?>
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-xs-1 col-sm-1">



        </div>
        <div class="col-xs-11 col-sm-11">

          <!-- header-top-second start -->
          <!-- ================ -->
          <div id="header-top-second"  class="clearfix">

            <!-- header top dropdowns start -->
            <!-- ================ -->
            <div class="header-top-dropdown">
              <div class="btn-group dropdown">
                <button type="button" class="btn" onclick="window.location.href='sikca-sorulan-sorular.php'"><i class="fa fa-question-circle"></i> S.S.S</button>
              </div>
                                  <div class="btn-group dropdown">
                  <button type="button" class="btn" onclick="window.location.href='giris.php'"><i class="fa fa-sign-in"></i> Giriş Yap</button>
                </div>
                <div class="btn-group dropdown">
                  <button type="button" class="btn" onclick="window.location.href='kayit-ol.php'"><i class="fa fa-user"></i> Kayıt Ol</button>
                </div>

            </div>
            <!--  header top dropdowns end -->

          </div>
          <!-- header-top-second end -->

        </div>
      </div>
    </div>
  </div>
  <?php
} ?>
<!-- header-top end -->

<!-- header start classes:
  fixed: fixed navigation mode (sticky menu) e.g. <header class="header fixed clearfix">
   dark: dark header version e.g. <header class="header dark clearfix">
================ -->
<header class="header clearfix">
  <div class="container">
    <div class="row">
      <div class="col-md-3">

        <!-- header-left start -->
        <!-- ================ -->
        <div class="header-left clearfix">

          <!-- logo -->
          <div class="logo">
            <a href="index.php"><img id="logo" src="frontend/images/logo.png" alt="eloboostürkiye"></a>
          </div>

          <!-- name-and-slogan -->
          <div class="site-slogan">
            Türkiye'nin en iyi boosting hizmeti
          </div>

        </div>
        <!-- header-left end -->

      </div>
      <div class="col-md-9" style="padding-left:0px;">

        <!-- header-right start -->
        <!-- ================ -->
        <div class="header-right clearfix">

          <!-- main-navigation start -->
          <!-- ================ -->
          <div class="main-navigation animated">

            <!-- navbar start -->
            <!-- ================ -->
            <nav class="navbar navbar-default">
              <div class="container-fluid">

                <!-- Toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Menü</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling  /team-fight-tactics-->
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Anasayfa</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">LoL HİZMETLERİ</a>
                      <ul class="dropdown-menu">
                        <li><a href="lol-eloboost.php">LOL Boost <span class="default-bg badge">FIRSAT!</span></a></li>

                      </ul>
                    </li>

										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">vALORANT HİZMETLERİ</a>
											<ul class="dropdown-menu">
												<li><a href="valorant-eloboost.php">VALORANT Boost <span class="default-bg badge">FIRSAT!</span></a></li>

											</ul>
										</li>

                  

                    <li class=""><a href="musteri-yorumlari.php">MÜŞTERİ Yorumları</a></li>
                  </ul>
                </div>

              </div>
            </nav>
            <!-- navbar end -->

          </div>
          <!-- main-navigation end -->

        </div>
        <!-- header-right end -->

      </div>
    </div>
  </div>
</header>
