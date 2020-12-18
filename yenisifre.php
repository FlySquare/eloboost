<?php include 'komutlar.php';

?>
<!DOCTYPE html>
<html lang="tr">

<!-- Mirrored from www.eloboosturkiye.com/sifremi-unuttum by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Dec 2020 12:38:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<meta name="google-site-verification" content="wthJJ3vAUvl4Aipo-_s0E-wkhz1UyxIJJoHoNeZAet4" />
		<title>Eloboost Türkiye - Şifremi Unuttum
 </title>
		        <meta name="description" content="Türkiye'nin lider eloboost platformu! Bütün boost hizmetlerimiz profesyonel oyuncular tarafından yapılmaktadır.">
        		<meta name="keywords"
		content="eloboost, lol boost, tr serveri boost, west boost, lol koçluk, hesap satışı, lol elo boost, lol boost, lol hesap, smurf hesap, lol boost, smurf, ucuz, kaliteli, profesyonel , hızlı, teslim, eloboost, elo, boost, boss, poro, league of legends, hızlı, boost"/>
		<meta name="author" content="strawz">

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135691916-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-135691916-1');
          gtag('config', 'AW-759734528');
        </script>

		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<base href="<?php echo $ayarcek['ayar_baseurl']; ?>">

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
								<h2 class="title">Yeni Şifre Alma</h2>
								<hr>



							</div>
							<p class="text-center space-top">Verilerinizi korumak ve kimlik sahteciliğine karşı çaba gösteriyoruz. Bizi Anladığınız için teşekkür ederiz. <br> Yeni şifren mail adresine gönderildi</p>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>

      <?php
$eposta=$_GET['eposta'];
$kod = $_GET['kod'];

if (!$eposta || !$kod) {
Header("Location: /");
}else {

  $ayarsorgg=$db->prepare("SELECT * FROM bolfps_user where user_eposta=:id and user_sifrekod=:kod and user_sifreistek=:istek");
  $ayarsorgg->execute(array(
  	'id'=>$eposta,
    'kod'=>$kod,
    'istek'=>1
  ));
  $saygg = $ayarsorgg->rowCount();
  $ayarggcek=$ayarsorgg->fetch(PDO::FETCH_ASSOC);

if ($saygg == 0) {
Header("Location: /");
}else {
  $newpass = rand(0,999999999);
  $newpassmd5 = md5($newpass);

  $ayarkaydet=$db->prepare("UPDATE bolfps_user SET
         user_sifre=:user_sifre,
         user_sifreistek=:user_sifreistek
    WHERE user_eposta='$eposta' and user_sifrekod = '$kod' and user_sifreistek = '1'");

  $update=$ayarkaydet->execute(array(
        'user_sifre' => "$newpassmd5",
          'user_sifreistek' => "0"
    ));


  if ($update) {

    														include "mailler/PHPMailerAutoload.php";
    									require 'mailler/class.phpmailer.php';
    										$mail = new PHPMailer();


    										// Enable verbose debug output
    										$mail->isSMTP();                                            // Send using SMTP
    										$mail->Host       = 'smtp.gmail.com';               // Set the SMTP server to send through
    										$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    										$mail->Username   = 'boostnpeace@gmail.com';                     // SMTP username
    										$mail->Password   = 'qazwsx60';                               // SMTP password
    										$mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    										$mail->Port       = 587;                                        // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
          $mail->SetFrom($mail->Username, 'BoosTNPeace.Com Şifre Yenileme');
          $mail->addAddress($eposta, "Değerli Kullanıcımız");     // Add a recipient
          $mail->CharSet = 'UTF-8';

    			$mail->isHTML(true);                                  // Set email format to HTML
    		$mail->Subject = 'İşte Yeni Şifreniz';
    			$mail->Body    = '
    			<p>&nbsp;</p>
    			<!-- [if gte mso 9]><xml>
    			 <o:OfficeDocumentSettings>
    				<o:AllowPNG/>
    				<o:PixelsPerInch>96</o:PixelsPerInch>
    			 </o:OfficeDocumentSettings>
    			</xml><![endif]-->
    			<p></p>
    			<!-- fix outlook zooming on 120 DPI windows devices -->
    			<p></p>
    			<!-- So that mobile will display zoomed in -->
    			<p></p>
    			<!-- enable media queries for windows phone 8 -->
    			<p></p>
    			<!-- disable auto date linking in iOS 7-9 -->
    			<p></p>
    			<!-- disable auto telephone linking in iOS 7-9 -->
    			<p></p>
    			<!-- 100% background wrapper (grey background) -->
    			<table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#F0F0F0">
    			<tbody>
    			<tr>
    			<td style="background-color: #f0f0f0;" align="center" valign="top" bgcolor="#F0F0F0"><br /> <!-- 600px container (white background) -->
    			<table class="container" style="width: 600px; max-width: 600px;" border="0" width="600" cellspacing="0" cellpadding="0">
    			<tbody>
    			<tr>
          <td class="container-padding header" style="font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: bold; padding-bottom: 12px; color: #df4726; padding-left: 24px; padding-right: 24px;" align="left">BoosTNPeace.Com Şifren Değişti</td>
    			</tr>
    			<tr>
    			<td class="container-padding content" style="background-color: #ffffff; padding: 12px 24px 12px 24px;" align="left"><br />
    			<div class="title" style="font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 600; color: #374550;">Yeni şifren aşağıdaki gibi oldu. Bu şifreyle giriş yapabilir ve daha sonra değiştirebilirsin.</div>
    			<br />
    			<div class="body-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: left; color: #333333;">Eğer bu isteği sen yerine getirmediysen lütfen bizimle iletişime geç. <br /><br /> Yeni Şifren:'.$newpass.' <br /><br /></div>
    			</td>
    			</tr>
    			<tr>
          <td class="container-padding footer-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 16px; color: #aaaaaa; padding-left: 24px; padding-right: 24px;" align="left"><br /><br /> BoosTNPeace.Com <br /><br /><br /> <a style="color: #aaaaaa;" href="www.BoosTNPeace.com">www.BoosTNPeace.com</a><br /> <br /><br /></td>
    			</tr>
    			</tbody>
    			</table>
    			<!--/600px container --></td>
    			</tr>
    			</tbody>
    			</table>
    			<!--/100% background wrapper-->
    			';

    			$mail->send();


  } else {
    header("Location:../giris.php?yenisifre=no");

  }











}



}
 ?>




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

<!-- Mirrored from www.eloboosturkiye.com/sifremi-unuttum by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Dec 2020 12:38:03 GMT -->
</html>
