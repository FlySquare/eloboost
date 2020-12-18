<?php include 'komutlar.php'; ?>
<!DOCTYPE html>
<html lang="tr">

<!-- Mirrored from www.eloboosturkiye.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Dec 2020 12:37:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<meta name="google-site-verification" content="wthJJ3vAUvl4Aipo-_s0E-wkhz1UyxIJJoHoNeZAet4" />
		<title><?php echo $ayarcek['ayar_title']; ?></title>
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
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<style>
		.mySlides {display:none}
		.w3-left, .w3-right, .w3-badge {cursor:pointer}
		.w3-badge {height:13px;width:13px;padding:0}
		</style>
		<!-- IDea core CSS file -->
		<link href="frontend/css/style.css?v=1.1" rel="stylesheet">

		<!-- Color Scheme (In order to change the color scheme, replace the red.css with the color scheme that you prefer)-->
		<link href="frontend/css/skins/red.css" rel="stylesheet">

		<!-- Custom css -->
		<link href="frontend/css/custom.css?v=1.4" rel="stylesheet">


		<style>
    .title{
        font-size: 1.5em; font-weight: bolder;
    }
    #more {display: none;}
    #devamiB {display: none;}
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

			            <!-- banner start -->
			<!-- ================ -->
			<div class="banner">

				<!-- slideshow start -->
				<!-- ================ -->
				<div class="slideshow">

					<!-- slider revolution start -->
					<!-- ================ -->








					<div class="w3-content w3-display-container" style="max-width:800px">
					  <img class="mySlides" src="<?php echo $ayarcek['slider_1']; ?>" style="width:100%">
					  <img class="mySlides" src="<?php echo $ayarcek['slider_2']; ?>" style="width:100%">
					  <img class="mySlides" src="<?php echo $ayarcek['slider_3']; ?>" style="width:100%">
					  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
					    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
					    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
					    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
					    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
					    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
					  </div>
					</div>

					<script>
					var slideIndex = 1;
					showDivs(slideIndex);

					function plusDivs(n) {
					  showDivs(slideIndex += n);
					}

					function currentDiv(n) {
					  showDivs(slideIndex = n);
					}

					function showDivs(n) {
					  var i;
					  var x = document.getElementsByClassName("mySlides");
					  var dots = document.getElementsByClassName("demo");
					  if (n > x.length) {slideIndex = 1}
					  if (n < 1) {slideIndex = x.length}
					  for (i = 0; i < x.length; i++) {
					    x[i].style.display = "none";
					  }
					  for (i = 0; i < dots.length; i++) {
					    dots[i].className = dots[i].className.replace(" w3-white", "");
					  }
					  x[slideIndex-1].style.display = "block";
					  dots[slideIndex-1].className += " w3-white";
					}
					</script>












					<!-- slider revolution end -->

				</div>
				<!-- slideshow end -->

			</div>
			<!-- banner end -->

			<!-- page-top start-->
			<!-- ================ -->
			<div class="page-top object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="text-center title">LOL Elo Boost Hizmetleri</h1>
							<div class="separator"></div>
							<p class="text-center">Uygun fiyatlarımızla Türkiye'nin en iyi, en hızlı ve kaliteli boosting hizmetini sağlıyoruz.</p>
							<div class="row grid-space-10">
								<div class="col-sm-4">
									<div class="box-style-2">
										<div class="icon-container default-bg">
											<i class="fa fa-shield "></i>
										</div>
										<div class="body">
											<b>Hesap Güvenliği</b>
											<p>Hesabınızın güvenliğini %100 garanti ediyoruz.</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="box-style-2">
										<div class="icon-container default-bg">
											<i class="fa fa-space-shuttle"></i>
										</div>
										<div class="body">
											<b>Hızlı Teslimat</b>
											<p>Boost işlemlerinizi saatler içinde tamamlıyoruz.</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="box-style-2">
										<div class="icon-container default-bg">
											<i class="fa fa-money"></i>
										</div>
										<div class="body">
											<b>En Uygun Fiyatlar</b>
											<p>Türkiye'deki en iyi fiyat garantisi veriyoruz.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row grid-space-10">
								<div class="col-sm-4">
									<div class="box-style-2">
										<div class="icon-container default-bg">
											<i class="fa fa-product-hunt"></i>
										</div>
										<div class="body">
											<b>Profesyonel Oyuncular</b>
											<p>Bütün boosting hizmetleri profesyonel oyuncular tarafından yapılmaktadır.</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="box-style-2">
										<div class="icon-container default-bg">
											<i class="fa fa-check"></i>
										</div>
										<div class="body">
											<b>Deneyim & Kalite</b>
											<p>5 Yıldan fazla deneyimle kaliteli hizmet garantisi veriyoruz.</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="box-style-2">
										<div class="icon-container default-bg">
											<i class="fa fa-comments"></i>
										</div>
										<div class="body">
											<b>7/24 Destek</b>
											<p>7/24 Destek imkanıyla anlık olarak bütün sorularınızı yanıtlıyor, sorunlarınıza çözüm üretiyoruz.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
						    <p>
							    Riot Games şirketinin piyasa değeri 21 milyar dolar ve <b>League of Legends</b> oyunu aylık aktif 30 milyon oyuncuya sahiptir. Milyonlarca oyuncu sezon sonunu iyi bir lig içerisinde bitirmek için elinden geleni yapıyor. Fakat bazen bu yeterli olmuyor işte bu noktada <b>eloboost</b> hizmetini size güvenilir ve kaliteli bir şekilde sunuyoruz. LoL Elo Boost Türkiye sayesinde zamanınızı ve emeğinizi harcamadan hızlı bir şekilde hedeflediğiniz lige ulaşmanızı sağlayacak bir hizmetlere ulaşırsınız.
							</p>
							<span id="more">
							<h2 class="title">Eloboost Hizmetinin Önemi</h2>
							<p>LoL oyuncuları yüksek lige ulaşmak için saatlerini harcarlar. Sezon bitimine az bir zaman kala harcadıkları saatler daha fazla artar. Sürekli maç atan oyuncular liglerinden çıkamazlarsa, kazandıklarında gelen lig puanı düşer ve böylece hesaplarını kasmakta zorlanırlar. Türkiye’nin en iyi <b>LoL Elo boost</b> hizmeti sunan bir firma olarak, sizin zamanınızı harcamadan hedeflenen liginize kısa sürede ulaşmanızı sağlıyoruz.
Türkiye’nin önde gelen <b>eloboost</b> hizmetimiz sayesinde uygun fiyatlarla profesyonel oyuncularımız ranked maçlarınızı hızlı bir şekilde lig atlatacaktır. Mümkün olan en yüksek performansı sergileyen uzman boosterlerimiz sayesinde müşteriyi memnun ederek gerekli hizmeti ise sitemiz tarafından sağlıyoruz.
LOL elo boost hizmeti sayesinde düşük win rate sahip hesaplarınız yüksek win rate seviyesine ulaşıyor ve maç sonu gelen lig puanı artıyor. Riot Games iyi oynayan oyuncuları hak ettikleri lige hızlı bir şekilde ulaştırmak için dereceli sistemlerinde seri win rate dediğimiz bir kavramı uyguluyor. Bir oyuncu art arda maç kazanıyorsa bir anda 2 lig atlayabilecek duruma izin veriyor. Böylece uzman boosterlerimiz hesabınıza art arda maç kazandırarak hedeflediğiniz lige daha çabuk ulaştırıyor. <b>League of Legends Elo Boost hizmeti</b> sayesinde zamanınızı harcamadan hızlı bir şekilde hesabınızı kasıyoruz.</p>
                            <h2 class="title">Neden Eloboost Yaptırmalıyım?</h2>
                            <p>Dürüst olalım <b>LOL</b> oyunu çok fazla zaman istiyor. Düşük bir ligden çıkmak bile günlerinizi alabiliyor. Bir işte çalışıyorsanız LoL’e vakit ayırmanız çok zor olacaktır. İyi oynasanız dahi hak ettiğiniz lige sahip olamayabilirsiniz ve sürekli maç kaybetmekten yorulup pes etme ihtimaliniz de vardır.
Maç sırasında takımınızla çatışabilirsiniz veya takımınızdakiler üzerinize oynayıp oyununuzu bozabilirler. Bu durumlarda <b>elo boost</b> hizmeti devreye giriyor. Hızlı bir şekil de hesaplarınız istenilen lige ulaştırılıp teslim ediliyor.
League of Legends oyuncuları için LoL eloboost hizmetimiz sayesinde profesyonel ekibimiz ve uzman oyuncularımız ile amaçlanan hedefe mümkün olan en kısa sürede güvenli bir şekilde ilerliyoruz. Uygun fiyat politikamız ile müşterileri memnun ediyoruz. <b>Duo boost</b> hizmetimiz sayesinde uygun fiyatlarla uzman ekibimizdeki bir oyuncuyla beraber hızlı bir şekilde oyuna girebiliyorsunuz.</p>
						    <h2 class="title">Diğer Eloboost Sitelerinden Farkımız</h2>
						    <p>Temel farkımız profesyonel ekibimizin boosterlarıdır. <b>League of Legends Türkiye</b> sunucusunda yüksek liglere ulaşan booster ekibimizin üyeleri EU West ve EU NA sunuculara geçiş yaparak o sunuculardada yüksek liglere ulaşıp bize kendilerini kanıtlıyorlar. Boosterlerimiz müşterilerin hesaplarını titizlikle ve dikkatle hızlı bir şekilde istenilen lige kasıp sipariş teslimini gerçekleştiriyor. Diğer sitelerden bir diğer farkımız ise işimizi en yüksek kalitede sunmamızdır.
Siparişinizi sitemiz üzerinden takip ederek, aklınıza takılan sorularda  canlı destek üzerinden yardım alabilirsiniz. Siparişinizi hemen işleme alıp profesyonel oyuncularımız hızlı bir şekilde oyun atarak hem winratenizi yükseltecek hem de belirlenen hedefe çok hızlı bir şekilde boosting yapacaklar, elo boost yapılırken oynanacak her maçı uzman boosterlerimiz kendi hesaplarını kasıyorlarmış gibi oynayacaklardır. Duo boost hizmeti sayesinde uzman ekibimizdeki birisiyle beraber oyuna girip daha fazla keyif alarak lig atlayabilirsiniz.
</p>
                            <h2 class="title">Eloboost Yaptırmak Güvenli Midir?</h2>
                            <p>Riot Games haksız rekabeti önlemek için elinden geleni yapıyor ama biz yaptığımız işi en iyi ve en kaliteli yapan bir firmayız. Müşterilerimize çok değer veriyoruz, sipariş öncesi ve sonrası <b>7/24 canlı destek</b> sayesinde sorunlarınıza çözüm üretebiliyoruz.
Düşük fiyat politikamız ile hesap garantisi sayesinde müşterilerimizi memnun ediyoruz. Özel programlarımız sayesinde hesaplarınıza yaşadığınız bölgedeki lokasyonlar ile bağlanıyoruz, böylece banlanma riski ortadan kalkıyor. Kesinlikle <b>profesyonel boosting</b> oyuncularımız hesaplarınızı herhangi bir 3. parti yazılımları ile kasmıyor ve buna asla izin vermiyoruz. Müşteri sipariş verdiği takdirde <b>ucuz elo boost</b> hizmeti devreye giriyor ve o hesabı kasacak uzman oyuncumuzu sipariş tamamlanana kadar izliyoruz. Böylece hem hesabınızı güvence altına alıyoruz hem de 7/24 canlı destek sağlayabiliyoruz.</p>
						    </span>
						    <button class="btn btn-sm btn-danger" onclick="devami()" id="devamiA">Devamını Oku</button>
						    <button class="btn btn-sm btn-danger" onclick="daralt()" id="devamiB">Daralt</button>
						</div>
					</div>
				</div>
			</div>
            <!-- page-top end -->

            <!-- main-container start -->
			<!-- ================ -->
			<section class="main-container default-bg">

				<!-- main start -->
				<!-- ================ -->
				<div class="main">
					<div class="container">
						<div class="call-to-action">
							<div class="row">
								<div class="col-md-4" style="justify-content: center;">
                                    <a href="lol-eloboost.php"><img class="resim-ortala-gray" src="frontend/images/hizmetler/lol.png" height="130" width="130"></a>
                                </div>
																<div class="col-md-4">
																		<a href="javascprit:void();"></a>
											</div>
                                <div class="col-md-4">
                                    <a href="valorant-eloboost.php"><img class="resim-ortala-gray" src="frontend/valorant.png" height="150" width="150"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- main end -->

			</section>
			<!-- main-container end -->



		<!-- section start -->
			<!-- ================ -->
			<div class="section parallax light-translucent-bg parallax-bg-3">
				<div class="container">
					<div class="owl-carousel content-slider">

													<div class="testimonial">
								<div class="container">
									<div class="row">
										<div class="col-md-8 col-md-offset-2">
											<div class="testimonial-image">
												<img src="frontend/images/like.png" class="img-circle">
											</div>
											<div class="testimonial-body">
												<b class="title">LOL HİZMETLERİ</b>
												<p>Cok hizli ve mukemmel teslimat gayet basarili</p>
												<div class="testimonial-info-1">03.12.2020 - 19:56 - <strong>b*****n</strong></div>
											</div>
										</div>
									</div>
								</div>
							</div>
													<div class="testimonial">
								<div class="container">
									<div class="row">
										<div class="col-md-8 col-md-offset-2">
											<div class="testimonial-image">
												<img src="frontend/images/like.png" class="img-circle">
											</div>
											<div class="testimonial-body">
												<b class="title">LOL HİZMETLERİ</b>
												<p>Güzel hizmet</p>
												<div class="testimonial-info-1">03.12.2020 - 18:59 - <strong>b*****6</strong></div>
											</div>
										</div>
									</div>
								</div>
							</div>
													<div class="testimonial">
								<div class="container">
									<div class="row">
										<div class="col-md-8 col-md-offset-2">
											<div class="testimonial-image">
												<img src="frontend/images/like.png" class="img-circle">
											</div>
											<div class="testimonial-body">
												<b class="title">LOL HİZMETLERİ</b>
												<p>fena</p>
												<div class="testimonial-info-1">01.12.2020 - 23:35 - <strong>l****a</strong></div>
											</div>
										</div>
									</div>
								</div>
							</div>
													<div class="testimonial">
								<div class="container">
									<div class="row">
										<div class="col-md-8 col-md-offset-2">
											<div class="testimonial-image">
												<img src="frontend/images/like.png" class="img-circle">
											</div>
											<div class="testimonial-body">
												<b class="title">LOL HİZMETLERİ</b>
												<p>çok iyi</p>
												<div class="testimonial-info-1">29.11.2020 - 22:32 - <strong>d******d</strong></div>
											</div>
										</div>
									</div>
								</div>
							</div>
													<div class="testimonial">
								<div class="container">
									<div class="row">
										<div class="col-md-8 col-md-offset-2">
											<div class="testimonial-image">
												<img src="frontend/images/like.png" class="img-circle">
											</div>
											<div class="testimonial-body">
												<b class="title">LOL HİZMETLERİ</b>
												<p>Ellerine sağlık</p>
												<div class="testimonial-info-1">29.11.2020 - 22:08 - <strong>l****a</strong></div>
											</div>
										</div>
									</div>
								</div>
							</div>
													<div class="testimonial">
								<div class="container">
									<div class="row">
										<div class="col-md-8 col-md-offset-2">
											<div class="testimonial-image">
												<img src="frontend/images/like.png" class="img-circle">
											</div>
											<div class="testimonial-body">
												<b class="title">LOL HİZMETLERİ</b>
												<p>Çok memnun kaldım eline sağlık boosterın</p>
												<div class="testimonial-info-1">29.11.2020 - 13:53 - <strong>s********2</strong></div>
											</div>
										</div>
									</div>
								</div>
							</div>
													<div class="testimonial">
								<div class="container">
									<div class="row">
										<div class="col-md-8 col-md-offset-2">
											<div class="testimonial-image">
												<img src="frontend/images/like.png" class="img-circle">
											</div>
											<div class="testimonial-body">
												<b class="title">LOL HİZMETLERİ</b>
												<p>Muazzam hizmet çok iyi</p>
												<div class="testimonial-info-1">29.11.2020 - 11:34 - <strong>d******d</strong></div>
											</div>
										</div>
									</div>
								</div>
							</div>
													<div class="testimonial">
								<div class="container">
									<div class="row">
										<div class="col-md-8 col-md-offset-2">
											<div class="testimonial-image">
												<img src="frontend/images/love.png" class="img-circle">
											</div>
											<div class="testimonial-body">
												<b class="title">LOL HİZMETLERİ</b>
												<p>10/10</p>
												<div class="testimonial-info-1">28.11.2020 - 15:41 - <strong>S*******3</strong></div>
											</div>
										</div>
									</div>
								</div>
							</div>
													<div class="testimonial">
								<div class="container">
									<div class="row">
										<div class="col-md-8 col-md-offset-2">
											<div class="testimonial-image">
												<img src="frontend/images/like.png" class="img-circle">
											</div>
											<div class="testimonial-body">
												<b class="title">LOL HİZMETLERİ</b>
												<p>gayet iyiyidi</p>
												<div class="testimonial-info-1">27.11.2020 - 08:37 - <strong>a*********o</strong></div>
											</div>
										</div>
									</div>
								</div>
							</div>
													<div class="testimonial">
								<div class="container">
									<div class="row">
										<div class="col-md-8 col-md-offset-2">
											<div class="testimonial-image">
												<img src="frontend/images/love.png" class="img-circle">
											</div>
											<div class="testimonial-body">
												<b class="title">LOL HİZMETLERİ</b>
												<p>Hızlı ve kaliteli</p>
												<div class="testimonial-info-1">26.11.2020 - 17:39 - <strong>d**********x</strong></div>
											</div>
										</div>
									</div>
								</div>
							</div>

                    </div>
				</div>
			</div>
			<!-- section end -->

			<!-- section start -->
			<!-- ================ -->
			<div class="parallax parallax-bg-3 dark-translucent-bg object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">

				<div class="container">
					<div class="stats row grid-space-10">
						<div class="col-md-3 col-sm-6">
							<div class="box-style-1">
								<b class="faketitle">Kayıtlı Üye</b>
								<i class="fa fa-users"></i>
								<span class="stat-num" data-to="25295" data-speed="3000">0</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="box-style-1">
								<b class="faketitle">Boost Hizmeti</b>
								<i class="fa fa-briefcase"></i>
								<span class="stat-num" data-to="20986" data-speed="3000">0</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="box-style-1">
								<b class="faketitle">Booster</b>
								<i class="fa fa-user-secret"></i>
								<span class="stat-num" data-to="96" data-speed="3000">0</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="box-style-1">
								<b class="faketitle">Unranked Hesap</b>
								<i class="fa fa-star-o"></i>
								<span class="stat-num" data-to="15947" data-speed="3000">0</span>
							</div>
						</div>
					</div>
				</div>

			</div>
            <!-- section end -->

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


		<script type="text/javascript">
function devami() {
  $('#more').slideToggle( "slow", function() {
    $('#devamiA').hide();
    $('#devamiB').show();
  })
}
function daralt() {
  $('#more').slideToggle( "slow", function() {
    $('#devamiA').show();
    $('#devamiB').hide();
  })
}
</script>


		<!-- WIDGET -->
		<script>
			(function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
				t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
			})(window, document, '_gscq','script','../widgets.getsitecontrol.com/170270/script.js');
		</script>

		<!--Start of Tawk.to Script-->

		<!--End of Tawk.to Script-->


	</body>

<!-- Mirrored from www.eloboosturkiye.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Dec 2020 12:37:27 GMT -->
</html>
