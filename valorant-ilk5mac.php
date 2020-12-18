<?php include 'komutlar.php'; ?>

<!DOCTYPE html>
<html lang="tr">
	<head>
		<meta charset="utf-8">
		<meta name="google-site-verification" content="wthJJ3vAUvl4Aipo-_s0E-wkhz1UyxIJJoHoNeZAet4" />
		<title><?php echo "Valorant İlk 5 Maç Boost - ".$ayarcek['ayar_title']; ?></title>
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

		 /*image gallery*/
		 .nopad{
			padding: 0 !important;
   margin: 0 !important;
                }
		 .image-checkbox img{
			 height: 64px;
			 width: 64px;
		 }
		 .image-checkbox {
					border: 1px solid #3c3c41;
    				box-shadow: inset 0 0 2px 0 rgba(0,0,0,.8);
                    cursor: pointer;
                    box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    -webkit-box-sizing: border-box;
                    border: 4px solid transparent;
                    margin-bottom: 0;
                    outline: 0;
                }
                .image-checkbox input[type="checkbox"] {
                    display: none;
                }

                .image-checkbox-checked {
                    border-color: #00A0E3;
                }
                .image-checkbox .fa {
                    position: absolute;
                    color: #00A0E3;
                    background-color: #f0ad4e;
                    padding: 13px;
                    top: 0;
					right: 0;
					font-size: 17px;
                }
                .image-checkbox-checked .fa {
                    display: block !important;
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
      <li class=""><a href="lol-eloboost"><img src="/frontend/lol.png"> LOL BOOST</a></li>
      <li class="mactive"><a href="valorant-eloboost"><img src="/frontend/valorant.png"> VALORANT BOOST</a></li>
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
									<a href="valorant-eloboost" class="list-group-item  text-center">
									  <img src="/frontend/images/valorant/ranked.png"><p class="boostB">Elo Boost</p>
									</a>
									<a href="valorant-duoboost" class="list-group-item  text-center">
										<img src="/frontend/images/valorant/duo.png"><p class="boostB">Duo Boost</p>
									</a>
									<a href="valorant-ilk5mac" class="list-group-item active text-center">
										<img src="/frontend/images/valorant/unranked.png"><p class="boostB">İlk 5 Maç</p>
									</a>
									<a href="valorant-normalmac" class="list-group-item text-center">
										<img src="/frontend/images/valorant/win.png"><p class="boostB">Normal Maç</p>
									</a>


								  </div>
								</div>

								<!-- İNDİRİM -->
								<input type="hidden" class="form-control" id="indirim" value="30">

								<div class="col-md-9 bhoechie-tab">
									<!-- ELOBOOST 1 -->
									<div class="bhoechie-tab-content active">

										<h1 class="text-center"><strong>İlk 5 Maç Hizmeti
</strong></h1>
										<span class="text-center f4">Yerleştirme Maçları
</span>
										<div class="row" style="margin-top: 10px; margin-bottom: 10px;">
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
								<option disabled value="0">Lig Seçiniz</option>
								<option v-bind:value="1">Demir</option>
								<option v-bind:value="2">Bronz</option>
								<option v-bind:value="3">Gümüş</option>
								<option v-bind:value="4">Altın</option>
								<option v-bind:value="5">Platin</option>
								<option v-bind:value="6">Elmas</option>
								<option v-bind:value="7">Ölümsüzlük</option>
								<option v-bind:value="8">Işıyan</option>
              </select>
            </div>

            <div class="form-group">
              <div class="input-group-prepend">
                <label  for="matches">Toplam Maç</label>
              </div>
              <select class="form-control" name="matches" id="matches" v-model="matches">
                <option disabled value="0">Maç Sayısı Seçiniz</option>
                <option v-for="item in [...Array(10).keys()].map(x => ++x)" :value="item">{{item}}</option>
              </select>
            </div>

            <div class="form-group">
              <div class="input-group-prepend">
                <label class="" for="lcurrent_rank">Sunucu</label>
              </div>
              <select class="form-control" class="eloboost-form" name="server" id="server" v-model="server" required>
                <option disabled value="0">Seçiniz</option>
                <option v-bind:value="1">TR</option>

              </select>
            </div>

																	<div class="form-group">
																		<div class="input-group-prepend">
																			<label class="input-group-text">Ajan Seçimi (Ücretsiz)</label>
																		</div>
																		<select class="form-control" name="karakter" required>
																			<option value="Farketmez">Farketmez</option>
																			<option value="Breach">Breach</option>
																			<option value="Brimstone">Brimstone</option>
																			<option value="Cypher">Cypher</option>
																			<option value="Jett">Jett</option>
																			<option value="Omen">Omen</option>
																			<option value="Phoenix">Phoenix</option>
																			<option value="Raze">Raze</option>
																			<option value="Reyna">Reyna</option>
																			<option value="Sage">Sage</option>
																			<option value="Sova">Sova</option>
																			<option value="Viper">Viper</option>
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
						<center>  <button name="ilk5macsatinal" type="submit" class="btn btn-success"

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




								</div>
					  		</div>
						</div>
						<div class="separator"></div>
						<div class="row">
							Riot Games’in uzun yıllardır üzerine çalıştığı FPS oyunu <b>Valorant</b> 2020 yılında resmi olarak oyuncularla buluştu. Hem FPS oyunu olması hem de LOL gibi oyunda <b>valorant ajanları</b> olması da oyuna yeni bir heyecan yarattı. FPS türünde önemli bir adım atan Riot Games, <b>Valorant oyunu</b> ile sektöre giriş yaptı. Kısa sürede milyonlarca insanın oynadığı oyunlar arasında yerini alan Valorant orta düzeyde ki sistemlerde çalışmaktadır. Bu alanda oynaması kolay görünen fakat iki tür oyunun karışımı olarak lanse edilen Valorant birçok grafik dilimine uygun bir oyun olarak piyasaya çıktı.
							<b>Valorant</b>, farklı karakterlerden oluşan ve bunların her birine ait özellikleriyle oyunda stratejiyi hedefleyen FPS tarzı Riot Games oyunu olmaktadır. Bu alanda kısa sürede yükselen oyunun gerçekçiliğe yakın olması da sevilen yanları arasında yer almaktadır. Pek çok silahın bulunduğu oyun içi market ve oyun içi elde edilen skorlara göre her tur başı oyun parası bulunmaktadır. Bu paralar her tur başı güncellenmekle beraber sizlere yeni turda silah ve özellik seçme imkanı tanır. Bu alanda her karakterin kendine ait özelliklerinin olması da League of Legends’ı anımsatmıştır. Farklı karakterler ile oynayabildiğiniz ve oyun içi hem rekabetçi hem de normal modun olduğu oyun şu an için ilk versiyonu ile oyuncularla buluştu. Kısa sürede gelen olumlu dönüşler ile oyun mekanizmasında ciddi değişikliklerin de olacağı görülmektedir.
							<h2>Valorant Nasıl Oynanır?</h2>
							Genel FPS oyunlarında olduğu gibi hem klavye hem de fare ile oynanabilen Valorant ekstra olarak <b>League of Legends mekaniklerini</b> içeren birkaç sistem ile oynanabilir. Oyun içerisinde karakterlere ait özellikleri X, C ve V tuşları ile kullanabilirsiniz. Bu özellikler ile rakibe ve karakterine karşı hem savunma hem de saldırı mekanizmalarını test etmeniz mümkün. Oyun içerisinde FPS bilginizin olması yeterli olmamakla beraber bu alanda MOBA deneyimi de gerektiriyor. İki farklı oyun türünün birleşimi olan <b>Valorant oyunu</b> günümüzde sektörünün öncü oyunu olma yolunda hızla ilerlemekte. Oyun içerisinde B tuşu ile marketi açabilir ve burada her tur değişen oyun içi paranız ile silah ve karakter özelliklerini satın alabilirsiniz.
							<h2>Valorant Sistem Gereksinimleri</h2>
							Valorant’ın hızlı büyümesinde etkili olan bir diğer etken ise sistem gereksinimleridir. <b>Valorant minimum sistem gereksinimleri</b> bu alanda düşük performanslı bazı bilgisayarlara bile hitap edebilen düzeyde. İntel i3-370 M veya düzeyinde ki bir işlemci minimum olarak yeterli görülmekte. Bellek olarak 4 GB ram tercih edilmekte iken işletim sistemi tarafında Windows 7 ve üzeri 64 bit sistemlerin oyunu açabileceği bilinmektedir. Depolaması da birçok oyuna göre oldukça ideal düzeyde olmakla beraber 6.9 GB depolama alanının oyun için yeterli olacağı belirlendi. Ekran kartı kısmına gelindiğinde Intel HD 3000 veya düzeyinde ki bir ekran kartının yeterli olacağı görüşünde bilgi var.
							<h2>Valorant Elo Boost Hizmeti</h2>
							<b>Valorant oyunu</b> içerisinde de yer alan rank sistemi beraberinde boost hizmetini de getirmektedir. Pek çok oyuncunun aktif olarak tercih ettiği boost hizmeti bu alanda büyük ölçüde hesaplarınızı yükseltmektedir. Düşük düzeyde ki oyuncularla eşleşmemek ve hesabınızı yükseltmek için satın alabileceğiniz boost hizmetleri bu alanda diğer oyunlara göre bir tık daha güvenilir durumda. Oyunun yeni olması bu alanda en önemli etkenlerden biridir. Üstelik ajan seçimini de yapabileceğiniz <b>valorant elo boost</b> hizmeti ile hesaplarınızı kısa sürede istediğiniz düzeye yükseltmeniz hem ekonomik hem de çok kolay.
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
<script src="/frontend/js/valorant/eloboost.js?v=1.4"></script>
<script>
	// image gallery
                // init the state from the input
                $(".image-checkbox").each(function () {
                    if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
                        $(this).addClass('image-checkbox-checked');
                    } else {
                        $(this).removeClass('image-checkbox-checked');
                    }
                });

                // sync the state to the input
                $(".image-checkbox").on("click", function (e) {
                    $(this).toggleClass('image-checkbox-checked');
                    var $checkbox = $(this).find('input[type="checkbox"]');
                    $checkbox.prop("checked", !$checkbox.prop("checked"))

                    e.preventDefault();
                });
                //# sourceURL=pen.js
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
                        url: "/valorant/eloboost",
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
								window.location.href = "/hesabim/satin-aldiklarim/valorant/eloboost/detay/"+data;
							}
							else{
								$("#hatabilgilendirme").show();
								$("#hatabilgi").text(data);
							}
                        },
                        error: function(xhr) {
                            alert(xhr.responseText);
								$("#hatabilgilendirme").show();
								$("#bilgilendirme").hide();
                            $("#hatabilgi").text("Sipariş gönderilirken beklenmedik bir sorun oluştu.");
                        },
                    });
		break;
		// İlk 5 Maç
		case "ilk5mac":
			$('#2hesapbilgileri').modal('toggle');
			var icerik = $('#ilk5mac, #hesapbilgileri2').serialize();
					$.ajax({
                        type: "POST",
                        url: "/valorant/ilk-5-mac",
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
								window.location.href = "/hesabim/satin-aldiklarim/valorant/ilk-5-mac/detay/"+data;
							}
							else{
								$("#2hatabilgilendirme").show();
								$("#2hatabilgi").text(data);
							}
                        },
                        error: function(xhr) {
                            alert(xhr.responseText);
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
                        url: "/valorant/duo-boost",
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
								window.location.href = "/hesabim/satin-aldiklarim/valorant/duo-boost/detay/"+data;
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
		// Normal Maç
		case "normalmac":
			$('#6hesapbilgileri').modal('toggle');
			var icerik = $('#normalmac, #hesapbilgileri6').serialize();
					$.ajax({
                        type: "POST",
                        url: "/valorant/normal-mac",
                        data: icerik, // Form elemanlarını serialize
                        beforeSend: function()
                        {

                        },
                        success: function(data)
                        {
							if(data>0){
								$("#6hatabilgilendirme").hide();
								$("#6bilgilendirme").hide();
								$("#6basarilibilgilendirme").show();
								window.location.href = "/hesabim/satin-aldiklarim/valorant/normal-mac/detay/"+data;
							}
							else{
								$("#6hatabilgilendirme").show();
								$("#6hatabilgi").text(data);
							}
                        },
                        error: function(xhr) {
                            alert(xhr.responseText);
								$("#6hatabilgilendirme").show();
								$("#6bilgilendirme").hide();
                            $("#6hatabilgi").text("Sipariş gönderilirken beklenmedik bir sorun oluştu.");
                        },
                    });
		break;
	}
}
</script>
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
duo_boost: 1,
priceList: { 1: <?php echo $ilk5macfiyatcek['ilk5macfiyat_demir']; ?>, 2: <?php echo $ilk5macfiyatcek['ilk5macfiyat_bronz']; ?>, 3: <?php echo $ilk5macfiyatcek['ilk5macfiyat_gumus']; ?>, 4: <?php echo $ilk5macfiyatcek['ilk5macfiyat_altin']; ?>, 5: <?php echo $ilk5macfiyatcek['ilk5macfiyat_platin']; ?>, 6: <?php echo $ilk5macfiyatcek['ilk5macfiyat_elmas']; ?>,7: <?php echo $ilk5macfiyatcek['ilk5macfiyat_olumsuzluk']; ?>,8: <?php echo $ilk5macfiyatcek['ilk5macfiyat_isiyan']; ?>},

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
	this.after_discount_order = (this.pre_discount_order * 0.7).toFixed(0);
	document.getElementById("sonfiyat").value = this.after_discount_order;

	<?php
}else {
	?>
		this.pre_discount_order = (order * this.server * this.duo_boost).toFixed(0);
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
