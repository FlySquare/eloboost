<?php include 'komutlar.php'; ?>

<!DOCTYPE html>
<html lang="tr">
	<head>
		<meta charset="utf-8">
		<meta name="google-site-verification" content="wthJJ3vAUvl4Aipo-_s0E-wkhz1UyxIJJoHoNeZAet4" />
		<title><?php echo "Satın Alınan İlk 5 Maç Boost - ".$ayarcek['ayar_title']; ?></title>
						<meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
						<meta name="keywords"
		content="eloboost, lol boost, tr serveri boost, west boost, lol koçluk, hesap satışı, lol elo boost, lol boost, lol hesap, smurf hesap, lol boost, smurf, ucuz, kaliteli, profesyonel , hızlı, teslim, eloboost, elo, boost, boss, poro, league of legends, hızlı, boost"/>
		<meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">
		<?php echo $ayarcek['ayar_tawkto']; ?>

		<!-- Favicon -->
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="/favicon.ico">

		<!-- Web Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">

		<!-- Bootstrap core CSS -->
		<link href="/frontend/bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="/frontend/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="/frontend/plugins/rs-plugin-5/css/settings.css" rel="stylesheet">
		<link href="/frontend/plugins/rs-plugin-5/css/layers.css" rel="stylesheet">
		<link href="/frontend/plugins/rs-plugin-5/css/navigation.css" rel="stylesheet">
		<link href="/frontend/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="/frontend/css/animations.css" rel="stylesheet">
		<link href="/frontend/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="/frontend/plugins/owl-carousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <base href="<?php echo $ayarcek['ayar_baseurl']; ?>">
		<!-- IDea core CSS file -->
		<link href="/frontend/css/style.css?v=1.1" rel="stylesheet">

		<!-- Color Scheme (In order to change the color scheme, replace the red.css with the color scheme that you prefer)-->
		<link href="/frontend/css/skins/red.css" rel="stylesheet">

		<!-- Custom css -->
		<link href="/frontend/css/custom.css?v=1.4" rel="stylesheet">


		<style>
	.img-center {
    margin: 0;
    margin: auto;
	max-height: 164px;
	}
	.wrimagecard{
	margin-top: 0;
    margin-bottom: 1.5rem;
    text-align: left;
    position: relative;
    background: #fff;
    box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
    border-radius: 4px;
    transition: all 0.3s ease;
	}
	.wrimagecard .fa{
		position: relative;
		font-size: 70px;
	}
	.wrimagecard-topimage_header{
	padding: 20px;
	}
	a.wrimagecard:hover, .wrimagecard-topimage:hover {
		box-shadow: 2px 4px 8px 0px rgba(46,61,73,0.2);
	}
	.wrimagecard-topimage a {
		width: 100%;
		height: 100%;
		display: block;
	}
	.wrimagecard-topimage_title {
		padding: 20px 24px;
		height: 80px;
		padding-bottom: 0.75rem;
		position: relative;
	}
	.wrimagecard-topimage a {
		border-bottom: none;
		text-decoration: none;
		color: #525c65;
		transition: color 0.3s ease;
	}
</style>
	</head>

	<!-- body classes:
			"boxed": boxed layout mode e.g. <body class="boxed">
			"pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1">
	-->
	<body class="front">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="fa fa-angle-up"></i></div>



		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">


			<!-- header-top start (Add "dark" class to .header-top in order to enable dark header-top e.g <div class="header-top dark">) -->
			<!-- ================ -->
			<?php include 'header.php'; ?>
			<!-- header end -->

			<!-- page-intro start-->
			<!-- ================ -->
			<div class="page-intro">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ol class="breadcrumb">
								<li><i class="fa fa-home pr-10"></i><a href="/">Anasayfa</a></li>
								<li><i class="fa fa-user-circle pr-10"></i><a href="/hesabim">Hesabım</a></li>
								<li><i class="fa fa-shopping-cart pr-10"></i><a href="satin-aldiklarim">Satın Aldıklarım</a></li>
                <li><i class="fa fa-cubes pr-10"></i><a href="satin-aldiklarim-valorant">Valorant Kategorileri</a></li>

								<li class="active">İlk 5 Maç</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
<!-- page-intro end -->
<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- sidebar start -->
						<aside class="col-md-3">
							<div class="sidebar">
								<div class="clearfix">
									<nav>
										<ul class="nav nav-pills nav-stacked">
											<li class=""><a href="hesabim"><i class="fa fa-user-circle pr-10"></i>Hesabım</a></li>
											<li class="active"><a href="satin-aldiklarim"><i class="fa fa-shopping-cart pr-10"></i>SATIN ALDIKLARIM</a></li>
											<li class=""><a href="bakiye-yukle"><i class="fa fa-credit-card-alt pr-10"></i>BAKİYE YÜKLE</a></li>
											<li class=""><a href="bakiye-hareketleri"><i class="fa fa-list-alt pr-10"></i>BAKİYE HAREKETLERİ</a></li>

											<li class=""><a href="sifre-degistir"><i class="fa fa-key pr-10"></i>ŞİFRE DEĞİŞTİR</a></li>
										</ul>
									</nav>
								</div>
							</div>
						</aside>
<!-- sidebar end -->
						<!-- main start -->
						<!-- ================ -->
						<div class="col-md-9">

							<div class="row">

                <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>

      <th scope="col">Maç Sayısı</th>
      <th scope="col">Ajan</th>
      <th scope="col">Sunucu</th>
      <th scope="col">Toplam Fiyat</th>
      <th scope="col">Hesap Adı</th>
      <th scope="col">Tarih</th>
      <th scope="col">Durum</th>
    </tr>
  </thead>
  <tbody>
  <?php
while ($eloboostsipariscek=$normalmacsiparissor->fetch(PDO::FETCH_ASSOC)) {
  ?>
  <tr>
    <th scope="row"><?php echo "#".$eloboostsipariscek['normalmacsiparis_id']; ?></th>

    <td><?php

     echo $eloboostsipariscek['normalmacsiparis_toplammac']; ?></td>
    <td><?php

    echo $eloboostsipariscek['normalmacsiparis_karakter']; ?></td>
    <td><?php

     echo $eloboostsipariscek['normalmacsiparis_sunucu']; ?></td>

    <td><?php echo $eloboostsipariscek['normalmacsiparis_fiyat']; ?>&#8378;</td>
    <td><?php echo $eloboostsipariscek['normalmacsiparis_hesapad']; ?></td>
    <td><?php echo $eloboostsipariscek['normalmacsiparis_tarih']; ?></td>
    <td><?php
    if ($eloboostsipariscek['normalmacsiparis_durum'] == "0") {
      echo "Bekliyor";
    }elseif ($eloboostsipariscek['normalmacsiparis_durum'] == "1") {
      echo "İşleme Alındı";
    }elseif ($eloboostsipariscek['normalmacsiparis_durum'] == "2") {
      echo "Tamamlandı";
    }elseif ($eloboostsipariscek['normalmacsiparis_durum'] == "3") {
      echo "İptal Edildi";
    }
     ?></td>
  </tr>
  <?php
}
   ?>

  </tbody>
</table>

							</div>




						</div>
						<!-- main end -->



					</div>
				</div>
			</section>
			<!-- main-container end -->

			<!-- section start -->
			<!-- ================ -->
			<div class="section gray-bg text-muted footer-top clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<div class="owl-carousel clients">
								<div class="client">
									<img src="/frontend/images/odeme/paytr-logos.png" alt="">
								</div>
								<div class="client">
									<img src="/frontend/images/odeme/ssl-logo.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- section end -->


			<!-- footer start (Add "light" class to #footer in order to enable light footer) -->
			<!-- ================ -->
			<?php include 'footer.php'; ?>
			<!-- footer end -->

		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script src="/frontend/plugins/jquery.min.js"></script>
		<script src="/frontend/bootstrap/js/bootstrap.js"></script>

		<!-- jQuery REVOLUTION Slider  -->
		<script src="/frontend/plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js"></script>
		<script src="/frontend/plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Isotope javascript -->
		<script src="/frontend/plugins/isotope/imagesloaded.pkgd.min.js"></script>
		<script src="/frontend/plugins/isotope/isotope.pkgd.min.js"></script>

		<!-- Owl carousel javascript -->
		<script src="/frontend/plugins/owl-carousel/owl.carousel.js"></script>

		<!-- Magnific Popup javascript -->
		<script src="/frontend/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

		<!-- Appear javascript -->
		<script src="/frontend/plugins/appear/jquery.appear.js"></script>

		<!-- Count To javascript -->
		<script src="/frontend/plugins/countTo/jquery.countTo.js"></script>

		<!-- Initialization of Plugins -->
		<script src="/frontend/js/template.js"></script>

		<!-- Custom Scripts -->
		<script src="/frontend/js/custom.js"></script>

					<!-- Bildirim -->
			<script src="/frontend/js/bildirim.js"></script>



	</body>
</html>
