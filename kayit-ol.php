<?php include 'komutlar.php'; ?>

<!DOCTYPE html>
<html lang="tr">

<!-- Mirrored from www.eloboosturkiye.com/kayit-ol by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Dec 2020 12:37:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<meta name="google-site-verification" content="wthJJ3vAUvl4Aipo-_s0E-wkhz1UyxIJJoHoNeZAet4" />
			<title><?php echo "Kayıt Ol - ".$ayarcek['ayar_title']; ?></title>
							<meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
							<meta name="keywords"
			content="eloboost, lol boost, tr serveri boost, west boost, lol koçluk, hesap satışı, lol elo boost, lol boost, lol hesap, smurf hesap, lol boost, smurf, ucuz, kaliteli, profesyonel , hızlı, teslim, eloboost, elo, boost, boss, poro, league of legends, hızlı, boost"/>
			<meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">
			<?php echo $ayarcek['ayar_tawkto']; ?>

		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
<base href="<?php echo $ayarcek['ayar_baseurl']; ?>">
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">

		<!-- Web Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">

		<!-- Bootstrap core CSS -->
		<link href="frontend/bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="frontend/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="frontend/plugins/rs-plugin-5/css/settings.css" rel="stylesheet">
		<link href="frontend/plugins/rs-plugin-5/css/layers.css" rel="stylesheet">
		<link href="frontend/plugins/rs-plugin-5/css/navigation.css" rel="stylesheet">
		<link href="frontend/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="frontend/css/animations.css" rel="stylesheet">
		<link href="frontend/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="frontend/plugins/owl-carousel/assets/owl.theme.default.min.css" rel="stylesheet">

		<!-- IDea core CSS file -->
		<link href="frontend/css/style.css?v=1.1" rel="stylesheet">

		<!-- Color Scheme (In order to change the color scheme, replace the red.css with the color scheme that you prefer)-->
		<link href="frontend/css/skins/red.css" rel="stylesheet">

		<!-- Custom css -->
		<link href="frontend/css/custom.css?v=1.4" rel="stylesheet">


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

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
							<div class="form-block center-block">
								<h2 class="title">Kayıt Ol</h2>
								<hr>
								<form class="form-horizontal" method="POST" action="db/islem.php">
									<div class="form-group has-feedback ">
										<label for="isim" class="col-sm-3 control-label">İsim <span class="text-danger small">*</span></label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="isim" name="isim" placeholder="Adınız" value="" required>
											<i class="fa fa-pencil form-control-feedback"></i>
																					</div>
									</div>

									<div class="form-group has-feedback ">
										<label for="soyisim" class="col-sm-3 control-label">Soyisim <span class="text-danger small">*</span></label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="soyisim" name="soyisim" placeholder="Soyadınız" value="" required>
											<i class="fa fa-pencil form-control-feedback"></i>
																					</div>
									</div>
									<div class="form-group has-feedback ">
										<label for="kullaniciadi" class="col-sm-3 control-label">Kullanıcı Adı <span class="text-danger small">*</span></label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="kullaniciadi" name="username" placeholder="Kullanıcı adınız" value="" required>
											<i class="fa fa-user form-control-feedback"></i>
																					</div>
									</div>
									<div class="form-group has-feedback ">
										<label for="eposta" class="col-sm-3 control-label">E-posta <span class="text-danger small">*</span></label>
										<div class="col-sm-8">
											<input type="email" class="form-control" id="eposta" name="email" placeholder="E-posta adresiniz" value="" required>
											<i class="fa fa-envelope form-control-feedback"></i>
																					</div>
									</div>
									<div class="form-group has-feedback ">
											<label for="telefon" class="col-sm-3 control-label">Telefon <span class="text-danger small">*</span></label>
											<div class="col-sm-8">
												<input type="number" class="form-control" id="telefon" name="telefon" placeholder="Telefon numaranız" value="" required>
												<i class="fa fa-phone form-control-feedback"></i>
																							</div>
										</div>
                                    <div class="form-group has-feedback ">
										<label for="sifre" class="col-sm-3 control-label">Şifre <span class="text-danger small">*</span></label>
										<div class="col-sm-8">
											<input type="password" class="form-control" id="sifre" name="password" placeholder="Şifreniz" value="" required>
											<i class="fa fa-lock form-control-feedback"></i>
																					</div>
									</div>
									<div class="form-group has-feedback ">
										<label for="sifretekrar" class="col-sm-3 control-label">Şifre Tekrarı<span class="text-danger small">*</span></label>
										<div class="col-sm-8">
											<input type="password" class="form-control" id="sifretekrar" name="password2" placeholder="Şifrenizin tekrarı" value="" required>
											<i class="fa fa-lock form-control-feedback"></i>
																					</div>
									</div>
									<div class="form-group ">
										<div class="col-sm-offset-3 col-sm-8">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="onay" required> Tarafıma belirtilen <a href="uyelik-sozlesmesi.php" target="_blank">üyelik sözleşmesi</a> ve <a href="gizlilik-sozlesmesi.php" target="_blank">gizlilik sözleşmesi</a>ni kabul ediyorum.
												</label>
																							</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-8">

											<button name="userkayit" type="submit" class="btn btn-default">Kayıt Ol</button>
										</div>
									</div>
								</form>
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
									<img src="frontend/images/odeme/paytr-logos.png" alt="">
								</div>
								<div class="client">
									<img src="frontend/images/odeme/ssl-logo.png" alt="">
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
		<script src="frontend/plugins/jquery.min.js"></script>
		<script src="frontend/bootstrap/js/bootstrap.js"></script>

		<!-- jQuery REVOLUTION Slider  -->
		<script src="frontend/plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js"></script>
		<script src="frontend/plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Isotope javascript -->
		<script src="frontend/plugins/isotope/imagesloaded.pkgd.min.js"></script>
		<script src="frontend/plugins/isotope/isotope.pkgd.min.js"></script>

		<!-- Owl carousel javascript -->
		<script src="frontend/plugins/owl-carousel/owl.carousel.js"></script>

		<!-- Magnific Popup javascript -->
		<script src="frontend/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

		<!-- Appear javascript -->
		<script src="frontend/plugins/appear/jquery.appear.js"></script>

		<!-- Count To javascript -->
		<script src="frontend/plugins/countTo/jquery.countTo.js"></script>

		<!-- Initialization of Plugins -->
		<script src="frontend/js/template.js"></script>

		<!-- Custom Scripts -->
		<script src="frontend/js/custom.js"></script>


			<script src='../www.google.com/recaptcha/api.js'></script>


		<!-- WIDGET -->
		<script>
			(function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
				t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
			})(window, document, '_gscq','script','../widgets.getsitecontrol.com/170270/script.js');
		</script>



	</body>

<!-- Mirrored from www.eloboosturkiye.com/kayit-ol by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Dec 2020 12:37:37 GMT -->
</html>
