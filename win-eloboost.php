<?php include 'komutlar.php';


?>
<!DOCTYPE html>
<html lang="tr">
	<head>
		<meta charset="utf-8">
		<meta name="google-site-verification" content="wthJJ3vAUvl4Aipo-_s0E-wkhz1UyxIJJoHoNeZAet4" />
		<title><?php echo "Win Boost - ".$ayarcek['ayar_title']; ?></title>
						<meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
						<meta name="keywords"
		content="eloboost, lol boost, tr serveri boost, west boost, lol koçluk, hesap satışı, lol elo boost, lol boost, lol hesap, smurf hesap, lol boost, smurf, ucuz, kaliteli, profesyonel , hızlı, teslim, eloboost, elo, boost, boss, poro, league of legends, hızlı, boost"/>
		<meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">
		<?php echo $ayarcek['ayar_tawkto']; ?>
		<!-- Favicon -->
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
    <base href="<?php echo $ayarcek['ayar_baseurl']; ?>">

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

		<!-- IDea core CSS file -->
		<link href="/frontend/css/style.css?v=1.1" rel="stylesheet">

		<!-- Color Scheme (In order to change the color scheme, replace the red.css with the color scheme that you prefer)-->
		<link href="/frontend/css/skins/red.css" rel="stylesheet">

		<!-- Custom css -->
		<link href="/frontend/css/custom.css?v=1.4" rel="stylesheet">



	<style>

	.f5 {
        font-size: 16px;
        text-transform: uppercase;
        font-weight: 700;
        display: block;
        line-height: 1.2;
        color: #343434;
        margin-top: 10px;
        margin-bottom: 10px;
    }

	.f2{
            font-size: 15px;
            padding: 0px;
            margin: 0px;
            display: inline;
            color: #343434;
    }

	h1{
	    font-size: 1.5em;
	}
	.f4{
	    font-size: 1.2em;
	    display: block;
	    font-weight: 700;
	    color: #343434;
        line-height: 1.2;
        margin-top: 10px;
        margin-bottom: 10px;
	}
		.required:before { content:"* "; color: red; }

		/*  bhoechie tab */
		div.bhoechie-tab-container{
			margin-bottom: 5px;
			z-index: 10;
			background-color: #ffffff;
			padding: 0 !important;
			border-radius: 4px;
			-moz-border-radius: 4px;
			border:1px solid #ddd;
			-webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
			box-shadow: 0 6px 12px rgba(0,0,0,.175);
			-moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
			background-clip: padding-box;
			opacity: 0.97;
			filter: alpha(opacity=97);
		}
		div.bhoechie-tab-menu{
			padding-right: 0;
			padding-left: 0;
			padding-bottom: 0;
		}
		div.bhoechie-tab-menu div.list-group{
			margin-bottom: 0;
		}
		div.bhoechie-tab-menu div.list-group img{
			margin: 0;
			margin: auto;
			max-height: 86px;
		}
		.img-center{
			margin: 0;
			margin: auto;
		}
		.list-group-item{
			font-weight: bold;
		}
		div.bhoechie-tab-menu div.list-group>a{
			margin-bottom: 0;
		}
		div.bhoechie-tab-menu div.list-group>a .glyphicon,
		div.bhoechie-tab-menu div.list-group>a .fa {
			color: #00A0E3;
		}
		div.bhoechie-tab-menu div.list-group>a:first-child{
			border-top-right-radius: 0;
			-moz-border-top-right-radius: 0;
		}
		div.bhoechie-tab-menu div.list-group>a:last-child{
			border-bottom-right-radius: 0;
			-moz-border-bottom-right-radius: 0;
		}
		div.bhoechie-tab-menu div.list-group>a.active,
		div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
		div.bhoechie-tab-menu div.list-group>a.active .fa{
			background-color: #00A0E3;
			background-image: #00A0E3;
			color: #ffffff;
		}
		div.bhoechie-tab-menu div.list-group>a.active:after{
			content: '';
			position: absolute;
			left: 100%;
			top: 50%;
			margin-top: -13px;
			border-left: 0;
			border-bottom: 13px solid transparent;
			border-top: 13px solid transparent;
			border-left: 10px solid #00A0E3;
		}

		div.bhoechie-tab-content{
			background-color: #ffffff;
			/* border: 1px solid #eeeeee; */
			padding-left: 20px;
			padding-top: 10px;
		}

		div.bhoechie-tab div.bhoechie-tab-content:not(.active){
			display: none;
		}
		.boostB{
			margin-top: 3px;
			margin-bottom: 5px;
		}
	</style>
	</head>

	<!-- body classes:
			"boxed": boxed layout mode e.g. <body class="boxed">
			"pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1">
	-->
	<body onload="loadValues();" class="front">
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

			<!-- page-intro start

			<div class="page-intro">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ol class="breadcrumb">
                                <li><i class="fa fa-home pr-10"></i><a href="/">Anasayfa</a></li>
                                <li class="active">LoL Eloboost</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
 page-intro end -->

<div class="mtab" role="tabpanel">
    <ul class="nav nav-tabs" role="tablist">
        <li class="mactive"><a href="lol-eloboost"><img src="/frontend/lol.png"> LOL BOOST</a></li>
        <li class=""><a href="valorant-eloboost"><img src="/frontend/valorant.png"> VALORANT BOOST</a></li>
   </ul>
</div>

<!-- section start -->
				<!-- ================ -->
				<div class="section">
					<div class="container">
						<div class="row">


							<div class="col-md-12 bhoechie-tab-container">

                <div class="col-md-2 bhoechie-tab-menu">
                  <div class="list-group">
                  <a href="lol-eloboost.php" class="list-group-item  text-center">
                    <img src="/frontend/images/lol/boost/eloboost.png"><p class="boostB">Elo Boost</p>
                  </a>
                  <a href="lolduo-eloboost.php" class="list-group-item  text-center">
                    <img src="/frontend/images/lol/boost/duo.png"><p class="boostB">Duo Boost</p>
                  </a>
                  <a href="ilk10mac-eloboost.php" class="list-group-item  text-center">
                    <img src="/frontend/images/lol/boost/yerlestirme.png"><p class="boostB">İlk 10 Maç</p>
                  </a>
                  <a href="win-eloboost.php" class="list-group-item active text-center">
                    <img src="/frontend/images/lol/boost/netwin.png"><p class="boostB">Win Boost</p>
                  </a>
                  <a href="challenger-eloboost.php" class="list-group-item text-center">
                    <img src="/frontend/images/lol/boost/challengerboost.png"><p class="boostB">Challenger Boost</p>
                  </a>

                  </div>
                </div>

								<!-- İNDİRİM -->
								<input type="hidden" class="form-control" id="indirim" value="30">

								<div class="col-md-9 bhoechie-tab">
									<!-- ELOBOOST 1 -->
									<div class="bhoechie-tab-content active">

										<h1 class="text-center"><strong>LOL Win Boost Hizmeti


</strong></h1>
										<span class="text-center f4">Maç Başı Boost


</span>
										<div class="row" style="margin-bottom: 10px;">
											<div class="col-md-12 text-center">
											    <span class="label label-primary">Tahmini Başlangıç Süresi: 48 Saat</span>
											</div>
										</div>

                    <form action="db/islem.php" method="post" id="placement_form">
            <div class="form-group">
              <div class="input-group-prepend">
                <label class="" for="last_rank">Liginiz</label>
              </div>
              <select class="form-control" name="last_rank" id="last_rank" v-model="last_rank">
                <option disabled value="0">Lig Seciniz</option>
                <option v-bind:value="1">Demir</option>
                <option v-bind:value="2">Bronz</option>
                <option v-bind:value="3">Gümüş</option>
                <option v-bind:value="4">Altın</option>
                <option v-bind:value="5">Platin</option>
                <option v-bind:value="6">Elmas</option>
              </select>
            </div>
						<div class="form-group">
							<div class="input-group-prepend">
								<label class="input-group-text" for="lcurrent_rank">Mevcut Aşamanız</label>
							</div>
							<select class="form-control" name="duo_boost" id="duo_boost" v-model="duo_boost" required>
								<option disabled value="0">Aşama Seçiniz</option>
								<option v-bind:value="4">4</option>
								<option v-bind:value="3">3</option>
								<option v-bind:value="2">2</option>
								<option v-bind:value="1">1</option>
							</select>
						</div>

            <div class="form-group">
              <div class="input-group-prepend">
                <label  for="matches">Toplam Maç</label>
              </div>
              <select class="form-control" name="matches" id="matches" v-model="matches">
                <option disabled value="0">Maç Sayısı Seçiniz</option>
                <option v-for="item in [...Array(5).keys()].map(x => ++x)" :value="item">{{item}}</option>
              </select>
            </div>

            <div class="form-group">
              <div class="input-group-prepend">
                <label class="" for="lcurrent_rank">Sunucu</label>
              </div>
              <select class="form-control" class="eloboost-form" name="server" id="server" v-model="server" required>
                <option disabled value="0">Seçiniz</option>
                <option v-bind:value="1">TR</option>
                <option v-bind:value="1.5">EUW (+%50 Ücret)</option>
              </select>
            </div>




            <?php
            if ($eloboostfiyatcek['olelofiyat_indirimdurum'] == "1") {
              ?>
              <div class="d-flex justify-content-center">
                <center><h4 id="boost_order">
                  Ücret: <span style="text-decoration: line-through">₺{{pre_discount_order}}</span>
                  <span id="sonpara" style="color: #1bbd36">₺{{after_discount_order}}</span>
                </h4></center>
              </div>
              <?php
            }else {
              ?>
              <div class="d-flex justify-content-center">
                <center><h4 id="boost_order">
                  Ücret: <span style="color: #1bbd36;">₺{{pre_discount_order}}</span>

                </h4></center>
              </div>
              <?php
            }
             ?>
            <br />
            <div class="form-group">
               <label >Hesap Kullanıcı Adı:</label>
               <input type="text" name="hesapadi" required class="form-control">
             </div>
             <div class="form-group">
               <label >Hesap Şifresi:</label>
               <input type="password" name="hesapsifre" required class="form-control">
             </div>



						<div class="d-flex justify-content-center">
					<?php if (isset($_SESSION['user_username'])): ?>
						<center>  <button name="winboostsatinal" type="submit" class="btn btn-success"

							>
								<i  class="bx bx-right-arrow-alt"></i>
								<a style="color: white">Satın Al</a>
							</button></center>
					<?php else: ?>
						<center> <a href="giris"><input type="button" 	class="btn btn-success" name="" value="Satın almak için giriş yapınız"></a> </center>
					<?php endif; ?>
						</div>

            <input type="hidden" name="sonfiyat" id="sonfiyat" value="">
            <input type="hidden" name="user_id"  value="<?php echo $girisyapanusercek['user_id']; ?>">
            <input type="hidden" name="sonlig" id="sonlig" value="">
            <input type="hidden" name="toplammac" id="toplammac" value="">
            <input type="hidden" name="duoboost" id="duoboost" value="">

            <input type="hidden" name="sunucu" id="sunucu" value="">

          </form>


									</div>

									<!-- DUO BOOST 3-->


									<!-- İLK 10 MAÇ 2 -->


									<!-- WIN BOOST 5 -->


									<!-- CHALLENGER BOOST 4 -->


								</div>
					  		</div>
						</div>
						<div class="separator"></div>
						<div class="row">
							League of Legends oynaması tamamen ücretsiz olan moba türünde bir bilgisayar oyunudur. Uzun yıllar moba oyun sektöründe açık ara lider olan ve günümüzde milyonlarca kişinin aktif olarak oynadığı oyunlar arasında yerini alan <b>League of Legends bu alanda</b> başarısını sürdürmektedir. Yüzlerce farklı karakter ile oynanabilen oyunda asıl amaç rakiplerin kulelerini indirerek maçlarda galip gelmektir. Bunu yaparken de oyun içi market ile yüzlerce farklı eşyayı stratejik olarak kullanmak gerekmektedir. Her karakterin kendine ve rakiplerine göre eşyaları bulunmaktadır. Bir yandan stratejik olarak büyük bir önemi olan oyunun bir de <b>TFT versiyonu</b> mevcuttur.
							Oyun ücretsiz olmakla beraber birçok oyunda olduğu gibi ücretli mağazasını da içermektedir. Mağaza içerisinde karakterlerin kostümlerini satın alarak farklı temalardaki şablonlarla oyunda yer alabilirsiniz. Herhangi bir avantajı olmayan sadece görünüş açısından değişiklik yaratan bu kostümlerden günümüzde yüzlercesi oyun içi mağaza da mevcut. Bu alanda oyun içerisinde iki farklı para birimi mevcut. Biri “<b>Mavi Öz</b>“ denilen oyun içi yapılan etkinliklere göre artan ve yine oyun içi karakter alımında kullanılan paradır. Bir diğeri ise “<b>Riot Puanı</b>“ olarak bilinen gerçek para ile satın alınan ve oyun içerisinde kostüm elde edebileceğiniz, sandık alabileceğiniz ve çeşitli aktivitelerde kullanabileceğiniz paradır.
							<h2>League of Legends Nasıl Oynanır ?</h2>
							League of Legends oyunu hem klavye hem de fare ile oynanmaktadır. Fare daha çok ilerleme ve yön verme konusunda yardımcı olurken saldırı ve menzilde de işe yaramaktadır. Klavyeye hakim olmanın büyük ölçü de etkisinin olduğu <b>League of Legends karakterleri</b> oyunda Q , W , E, R , F ve G tuşları ile yönlendirilmektedir. Her karakterin kendisine göre 4 farklı önemli özelliği bulunmaktadır. Özellikleri stratejik anlamda hem oyuncuların hem de takımların maçlarda önemli ölçü de etki edecek düzeydedir.
							<h2>League of Legends Sistem Gereksinimleri</h2>
							<b>League of Legends oyunu</b> ücretsiz olmakla beraber birçok düşük sistemli bilgisayarda aktif olarak oynanabilmektedir. Yüksek oyuncu sayısının temel nedenleri arasında da her türlü bilgisayar sistemine hitap etmesi büyük oranda etkili oluyor. Güncel olarak <b>League of Legends sistem gereksinimleri</b> arasında 12 GB depolama alanı yer almaktadır. 2 GB dahili ram, 1920 x 1200’e kadar ekran çözünürlüğü, DirectX 9.0 veya üzeri bir ekran sistemi ayrıca windows 7 ve üzeri işletim sistemine ihtiyaç duyulmaktadır. İşlemci olarak 3.0 GHz hızında herhangi bir işlemci yeterli olacaktır. Pek çok yeni nesil oyuna göre geniş kitleye sahip olan League of Legends oyunu günümüzde liderliğini korumaya devam ediyor.
							<h2>League of Legends Rankları nedir ?</h2>
							League of Legends’ta rekabet ortamını sağlayan bir rank sistemi bulunmaktadır. Oyun içerisinde demir rankı ile başlayan ve Challanger’a kadar yükselen bir rank şablonu bulunmaktadır. Oyuncuların düzeyinde ki kişilerle eşleşmesi ve belli başlı yükselmeler ile sıralama da nasıl bir oyuncu olduğunu gösteren rank sistemi oyunun en önemli özellikleri arasında bulunuyor. <b>League of Legends rankları</b> mevsimlere göre güncellenmektedir.
							<h2>LOL Elo Boost Nedir ?</h2>
							League of Legends oyunu için verilen <b>ELO boost hizmeti</b> kısa sürede rank yükseltmeye yarayan bir sistemdir. Her geçen gün artan Elo Boost hesapları farklı teknikler uygulanarak banlanma riskini de en aza indirmektedir. ELO Boost’un yararları genelde rank atlamakta zorluk çeken kişileri kısa sürede üst ranklara yükseltmektir. Düşük ranklarda iyi oyuncular olsa bile takımında ki kişilerden dolayı alt ranklar da kalabilmektedir. Bunun önüne <b>LOL Elo Boost hizmeti</b> ile kolayca geçilebilmektedir.
							Oyun içerisinde yapılan boostlar için farklı teknik detayları eklemekte mümkün. Belli başlı karakterlerin seviyesini yükseltmek, rankları belli seviyeye yükseltmek, belli bir puana ulaşmak gibi pek çok teknik özelliği de ayarlamak mümkün. League of Legends ELO Boost ile oyun zevkini yukarı çıkarmak artık çok kolay. Aynı şekilde hesabı yüksek bir seviye yapıp satmak isteyenler içinde bir fırsat olmaktadır.
						</div>
					</div>
				</div>
				<!-- section end -->

								<!-- ELO BOOST -->






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

		<!-- ELO BOOST -->
<script src="/frontend/js/lol/eloboost.js?v=1.4"></script>
<script>
	//Tool tip
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
	// Flash f-d
	$(".flash").change(function() {
    var checked = $(this).is(':checked');
    $(".flash").prop('checked',false);
    if(checked) {
        $(this).prop('checked',true);
    }
	});


	// Tab

function gonder(tur){
	switch(tur){
		// Eloboost
		case "eloboost":
			$('#hesapbilgileri').modal('toggle');
			var icerik = $('#eloboost, #hesapbilgileri').serialize();
					$.ajax({
                        type: "POST",
                        url: "/league-of-legends/eloboost/eloboost",
                        data: icerik, // Form elemanlarını serialize
                        beforeSend: function()
                        {

                        },
                        success: function(data)
                        {
							if(data>0){
								$("#hatabilgilendirme").hide();
								$("#bilgilendirme").hide();
								$("#basarilibilgilendirme").show();
								window.location.href = "/hesabim/satin-aldiklarim/eloboost/detay/"+data;
							}
							else{
								$("#hatabilgilendirme").show();
								$("#hatabilgi").text(data);
							}
                        },
                        error: function(xhr) {
                            //alert(xhr.responseText);
								$("#hatabilgilendirme").show();
								$("#bilgilendirme").hide();
                            $("#hatabilgi").text("Sipariş gönderilirken beklenmedik bir sorun oluştu.");
                        },
                    });
		break;
		// İlk 10 Maç
		case "ilk10mac":
			$('#2hesapbilgileri').modal('toggle');
			var icerik = $('#ilk10mac, #hesapbilgileri2').serialize();
					$.ajax({
                        type: "POST",
                        url: "/league-of-legends/eloboost/ilk-10-mac",
                        data: icerik, // Form elemanlarını serialize
                        beforeSend: function()
                        {

                        },
                        success: function(data)
                        {
							if(data>0){
								$("#2hatabilgilendirme").hide();
								$("#2bilgilendirme").hide();
								$("#2basarilibilgilendirme").show();
								window.location.href = "/hesabim/satin-aldiklarim/eloboost/ilk-10-mac/detay/"+data;
							}
							else{
								$("#2hatabilgilendirme").show();
								$("#2hatabilgi").text(data);
							}
                        },
                        error: function(xhr) {
                            //alert(xhr.responseText);
								$("#2hatabilgilendirme").show();
								$("#2bilgilendirme").hide();
                            $("#2hatabilgi").text("Sipariş gönderilirken beklenmedik bir sorun oluştu.");
                        },
                    });
		break;
		// Duo Boost
		case "duoboost":
			$('#3hesapbilgileri').modal('toggle');
			var icerik = $('#duoboost, #hesapbilgileri3').serialize();
					$.ajax({
                        type: "POST",
                        url: "/league-of-legends/eloboost/duo-boost",
                        data: icerik, // Form elemanlarını serialize
                        beforeSend: function()
                        {

                        },
                        success: function(data)
                        {
							if(data>0){
								$("#hatabilgilendirme3").hide();
								$("#bilgilendirme3").hide();
								$("#basarilibilgilendirme3").show();
								window.location.href = "/hesabim/satin-aldiklarim/eloboost/duo-boost/detay/"+data;
							}
							else{
								$("#hatabilgilendirme3").show();
								$("#hatabilgi3").text(data);
							}
                        },
                        error: function(xhr) {
                            //alert(xhr.responseText);
								$("#hatabilgilendirme3").show();
								$("#bilgilendirme3").hide();
                            $("#hatabilgi").text("Sipariş gönderilirken beklenmedik bir sorun oluştu.");
                        },
                    });
		break;
		// Challenger Boost
		case "challengerboost":
			$('#4hesapbilgileri').modal('toggle');
			var icerik = $('#challengerboost, #hesapbilgileri4').serialize();
					$.ajax({
                        type: "POST",
                        url: "/league-of-legends/eloboost/challenger-boost",
                        data: icerik, // Form elemanlarını serialize
                        beforeSend: function()
                        {

                        },
                        success: function(data)
                        {
							if(data>0){
								$("#4hatabilgilendirme").hide();
								$("#4bilgilendirme").hide();
								$("#4basarilibilgilendirme").show();
								window.location.href = "/hesabim/satin-aldiklarim/eloboost/challenger-boost/detay/"+data;
							}
							else{
								$("#4hatabilgilendirme").show();
								$("#4hatabilgi").text(data);
							}
                        },
                        error: function(xhr) {
                            alert(xhr.responseText);
								$("#4hatabilgilendirme").show();
								$("#4bilgilendirme").hide();
                            $("#4hatabilgi").text("Sipariş gönderilirken beklenmedik bir sorun oluştu.");
                        },
                    });
		break;
		// Win Boost
		case "winboost":
			$('#5hesapbilgileri').modal('toggle');
			var icerik = $('#winboost, #hesapbilgileri5').serialize();
					$.ajax({
                        type: "POST",
                        url: "/league-of-legends/eloboost/win-boost",
                        data: icerik, // Form elemanlarını serialize
                        beforeSend: function()
                        {

                        },
                        success: function(data)
                        {
							if(data>0){
								$("#5hatabilgilendirme").hide();
								$("#5bilgilendirme").hide();
								$("#5basarilibilgilendirme").show();
								window.location.href = "/hesabim/satin-aldiklarim/eloboost/win-boost/detay/"+data;
							}
							else{
								$("#5hatabilgilendirme").show();
								$("#5hatabilgi").text(data);
							}
                        },
                        error: function(xhr) {
                            alert(xhr.responseText);
								$("#5hatabilgilendirme").show();
								$("#5bilgilendirme").hide();
                            $("#5hatabilgi").text("Sipariş gönderilirken beklenmedik bir sorun oluştu.");
                        },
                    });
		break;
	}
}
</script>


		<!-- WIDGET -->
		<script>
			(function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
				t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
			})(window, document, '_gscq','script','//widgets.getsitecontrol.com/170270/script.js');
		</script>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <!-- <script src="http://157.230.100.123:2319/static/uluboost/eloboost_picker.js"></script> -->



  <script type="text/javascript">
  var app = new Vue({
el: "#placement_form",
data: {
  selectDivClass: "input-group form-group",
  selectClass: "custom-select",
  last_rank: 1,
  matches: 1,
  server: 1,
	koridor: 1,
  duo_boost: 4,
  priceList: { 1: <?php echo $winboostfiyatcek['winboost_demir']; ?>, 2: <?php echo $winboostfiyatcek['winboost_bronz']; ?>, 3: <?php echo $winboostfiyatcek['winboost_gumus']; ?>, 4: <?php echo $winboostfiyatcek['winboost_altin']; ?>, 5: <?php echo $winboostfiyatcek['winboost_platin']; ?>, 6: <?php echo $winboostfiyatcek['winboost_elmas']; ?>},

  pre_discount_order: 0,
  after_discount_order: 0,
},
methods: {
  calcOrder() {
    const price = this.priceList[this.last_rank];
    var order = price * this.matches;


    <?php
    if ($eloboostfiyatcek['olelofiyat_indirimdurum'] == "1") {
      ?>
			if (this.last_rank == 1 && this.duo_boost < 2) {

					this.after_discount_order = (this.pre_discount_order * 0.7+1).toFixed(0);

			}else if(this.last_rank == 2 && this.duo_boost < 2) {
				this.after_discount_order = (this.pre_discount_order * 0.7+1).toFixed(0);

			}else if(this.last_rank == 3 && this.duo_boost < 2) {
				this.after_discount_order = (this.pre_discount_order * 0.7+1).toFixed(0);

			}else if(this.last_rank == 4 && this.duo_boost < 2) {
				this.after_discount_order = (this.pre_discount_order * 0.7+1).toFixed(0);

			}else if(this.last_rank == 5 && this.duo_boost < 2) {
				this.after_discount_order = (this.pre_discount_order * 0.7+1).toFixed(0);

			}else if(this.last_rank == 6 && this.duo_boost == 3) {
				this.after_discount_order = (this.pre_discount_order * 0.7+1).toFixed(0);

			}else if(this.last_rank == 6 && this.duo_boost == 2) {
				this.after_discount_order = (this.pre_discount_order * 0.7+1).toFixed(0);

			}else if(this.last_rank == 6 && this.duo_boost == 1) {
				this.after_discount_order = (this.pre_discount_order * 0.7+1).toFixed(0);

			}else {
				this.after_discount_order = (this.pre_discount_order * 0.7+1).toFixed(0);

			}
      document.getElementById("sonfiyat").value = this.after_discount_order;

      <?php
    }else {
      ?>
      if (this.last_rank == 1 && this.duo_boost < 2) {
      	  this.pre_discount_order = (order * this.server * this.koridor +1).toFixed(0);

      }else if(this.last_rank == 2 && this.duo_boost < 2) {
				this.pre_discount_order = (order * this.server * this.koridor +1).toFixed(0);

      }else if(this.last_rank == 3 && this.duo_boost < 2) {
				this.pre_discount_order = (order * this.server * this.koridor +1).toFixed(0);

      }else if(this.last_rank == 4 && this.duo_boost < 2) {
				this.pre_discount_order = (order * this.server * this.koridor +4).toFixed(0);

      }else if(this.last_rank == 5 && this.duo_boost < 2) {
				this.pre_discount_order = (order * this.server * this.koridor +12).toFixed(0);

      }else if(this.last_rank == 6 && this.duo_boost == 3) {
				this.pre_discount_order = (order * this.server * this.koridor +10).toFixed(0);

      }else if(this.last_rank == 6 && this.duo_boost == 2) {
				this.pre_discount_order = (order * this.server * this.koridor +20).toFixed(0);

      }else if(this.last_rank == 6 && this.duo_boost == 1) {
				this.pre_discount_order = (order * this.server * this.koridor +50).toFixed(0);

      }else {
				this.pre_discount_order = (order * this.server * this.koridor).toFixed(0);

      }

      document.getElementById("sonfiyat").value = this.pre_discount_order;

      <?php
    }

     ?>

     					document.getElementById("sonlig").value = this.last_rank;

     					document.getElementById("toplammac").value = this.matches;

     					document.getElementById("sunucu").value = this.server;

     					document.getElementById("duoboost").value = this.duo_boost;

  },
},
computed: {
  placeSum() {
    return this.last_rank + this.matches + this.server + this.duo_boost;
  },
},
watch: {
  placeSum() {
    this.calcOrder();
  },
},
mounted() {
  this.calcOrder();
},
});
  </script>

    <!-- Template Main JS File -->
    <script src="https://uluboost.com/dist/js/main.js"></script>
	</body>
</html>
