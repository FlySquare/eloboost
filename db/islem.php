winboost<?php
ob_start();
session_start();
include 'db.php';
function seo($s) {
						 $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',');
						 $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','');
						 $s = str_replace($tr,$eng,$s);
						 $s = strtolower($s);
						 $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
						 $s = preg_replace('/\s+/', '-', $s);
						 $s = preg_replace('|-+|', '-', $s);
						 $s = preg_replace('/#/', '', $s);
						 $s = str_replace('.', '', $s);
						 $s = trim($s, '-');
						 return $s;
						}
            if (isset($_POST['login'])) {

            $user_username=htmlspecialchars($_POST['user_username']);
            $user_sifre=md5($_POST['user_sifre']);

            $kullanicisor=$db->prepare("SELECT * FROM bolfps_user where BINARY user_username=:mail and user_sifre=:password");
              $kullanicisor->execute(array(
                'mail' => $user_username,
                'password' => $user_sifre

                ));
                $kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
               $say=$kullanicisor->rowCount();
               if ($say >= 1) {

                  $_SESSION['user_username']=$user_username;
                 header("Location:../index.php");
                 exit;



               } else {

                 header("Location:../giris.php?durum=no");

                 exit;
               }


        }

if (isset($_POST['uruneklekategoricek'])) {
	    $sunucuid2 = $_POST['urun_sunucu'];
			Header("Location: ../admin/admin/magazaurunekle?sunucu_id=$sunucuid2");
}
if (isset($_POST['uruneklekategoricek5'])) {
	    $sunucuid32w = $_POST['urunkupon_sunucuid'];
				$urun_id = $_POST['urunkupon_id'];
			Header("Location: ../admin/admin/hediyeler-duzenle.php?urunkupon_id=$urun_id&sunucu_id=$sunucuid32w");
}
if (isset($_POST['uruneklekategoricek3'])) {
	    $sunucuidt = $_POST['urunkupon_sunucuid'];
			Header("Location: ../admin/admin/hediyeekle?urunkupon_sunucuid=$sunucuidt");
}
if (isset($_POST['sunucuurunsor'])) {
	    $sunucuid3 = $_POST['marketgecmis_sunucuid'];
			Header("Location: ../admin/admin/magazaesyagonder?urun_sunucu=$sunucuid3");
}
if (isset($_POST['uruneklekategoricek2'])) {
	    $sunucuid32 = $_POST['urun_sunucu'];
			$urun_id = $_POST['urun_id'];
			Header("Location: ../admin/admin/magazaurun-duzenle.php?urun_id=$urun_id&sunucu_id=$sunucuid32");
}







if (isset($_POST['winboostsatinal'])) {
	$sonfiyat = $_POST['sonfiyat'];

	$sonlig = $_POST['sonlig'];
	$toplammac = $_POST['toplammac'];
	$sunucu = $_POST['sunucu'];
	$mevcutasama= $_POST['duoboost'];

	$userid = $_POST['user_id'];
	$hesapadi = $_POST['hesapadi'];
	$hesapsifre = $_POST['hesapsifre'];
	$satinalanuser=$db->prepare("SELECT * FROM bolfps_user where user_id=:id");
	$satinalanuser->execute(array(
	 'id'=>$userid
	));
	$satinalanusercek=$satinalanuser->fetch(PDO::FETCH_ASSOC);
	$userkredi = $satinalanusercek['user_bakiye'];
	if ($userkredi >= $sonfiyat) {
		$userkredi = $userkredi - $sonfiyat;
		$ayarkaydet=$db->prepare("UPDATE bolfps_user SET
													 user_bakiye=:user_bakiye
													 WHERE user_id={$userid}");
												 $update=$ayarkaydet->execute(array(
													 'user_bakiye' => $userkredi
													 ));
													 if ($update) {

													$query = $db->prepare("INSERT INTO bolfps_winboostsiparis SET

														winboostsiparis_sonlig =:winboostsiparis_sonlig,
														winboostsiparis_toplammac =:winboostsiparis_toplammac,
														winboostsiparis_sunucu=:winboostsiparis_sunucu,
														winboostsiparis_mevcutasama =:winboostsiparis_mevcutasama,
														winboostsiparis_fiyat =:winboostsiparis_fiyat,
														winboostsiparis_userid	 =:winboostsiparis_userid,
														winboostsiparis_hesapad=:winboostsiparis_hesapad,
														winboostsiparis_hesapsifre =:winboostsiparis_hesapsifre,
														winboostsiparis_durum =:winboostsiparis_durum

														");
														$insert = $query->execute(array(

															'winboostsiparis_sonlig' => $sonlig,
															'winboostsiparis_toplammac' => $toplammac,
															'winboostsiparis_sunucu' => $sunucu,
														 'winboostsiparis_mevcutasama' => $mevcutasama,
														 'winboostsiparis_fiyat' => $sonfiyat,
														 'winboostsiparis_userid' => $userid,
														 'winboostsiparis_hesapad' => $hesapadi,
														 'winboostsiparis_hesapsifre' => $hesapsifre,
														 'winboostsiparis_durum' => "0"

														));
														if ( $insert ){
															$last_id = $db->lastInsertId();
															Header("Location: ../win-eloboost.php?durum=ok");
														}

												} else {
													Header("Location: ../win-eloboost.php?durum=no");
												}

}else {
 Header("Location: ../win-eloboost.php?bakiye=no");
}

}










if (isset($_POST['normalmacsat'])) {
	$sonfiyat = $_POST['sonfiyat'];


	$toplammac = $_POST['toplammac'];
	$sunucu = $_POST['sunucu'];
	$karakter= $_POST['karakter'];

	$userid = $_POST['user_id'];
	$hesapadi = $_POST['hesapadi'];
	$hesapsifre = $_POST['hesapsifre'];
	$satinalanuser=$db->prepare("SELECT * FROM bolfps_user where user_id=:id");
	$satinalanuser->execute(array(
	 'id'=>$userid
	));
	$satinalanusercek=$satinalanuser->fetch(PDO::FETCH_ASSOC);
	$userkredi = $satinalanusercek['user_bakiye'];
	if ($userkredi >= $sonfiyat) {
		$userkredi = $userkredi - $sonfiyat;
		$ayarkaydet=$db->prepare("UPDATE bolfps_user SET
													 user_bakiye=:user_bakiye
													 WHERE user_id={$userid}");
												 $update=$ayarkaydet->execute(array(
													 'user_bakiye' => $userkredi
													 ));
													 if ($update) {

													$query = $db->prepare("INSERT INTO bolfps_normalmacsiparis SET

														normalmacsiparis_toplammac =:normalmacsiparis_toplammac,
														normalmacsiparis_sunucu=:normalmacsiparis_sunucu,
														normalmacsiparis_karakter =:normalmacsiparis_karakter,
														normalmacsiparis_fiyat =:normalmacsiparis_fiyat,
														normalmacsiparis_userid	=:normalmacsiparis_userid,
														normalmacsiparis_hesapad=:normalmacsiparis_hesapad,
														normalmacsiparis_hesapsifre =:normalmacsiparis_hesapsifre,
														normalmacsiparis_durum =:normalmacsiparis_durum

														");
														$insert = $query->execute(array(

															'normalmacsiparis_toplammac' => $toplammac,
															'normalmacsiparis_sunucu' => $sunucu,
														 'normalmacsiparis_karakter' => $karakter,
														 'normalmacsiparis_fiyat' => $sonfiyat,
														 'normalmacsiparis_userid' => $userid,
														 'normalmacsiparis_hesapad' => $hesapadi,
														 'normalmacsiparis_hesapsifre' => $hesapsifre,
														 'normalmacsiparis_durum' => "0"

														));
														if ( $insert ){
															$last_id = $db->lastInsertId();
															Header("Location: ../valorant-normalmac.php?durum=ok");
														}

												} else {
													Header("Location: ../valorant-normalmac.php?durum=no");
												}

}else {
 Header("Location: ../valorant-normalmac.php?bakiye=no");
}

}









if (isset($_POST['challengerboostal'])) {
	$sonfiyat = $_POST['sonfiyat'];

	$suankipuan = $_POST['suankipuan'];
	$istediginizpuan = $_POST['istediginizpuan'];
	$sunucu = $_POST['sunucu'];
	$macbasipuan= $_POST['macbasipuan'];
	$koridor = $_POST['koridor'];
	$macbasinagelenpuan= $_POST['macbasinagelenpuan'];
	$derecelituru= $_POST['derecelituru'];

	$userid = $_POST['user_id'];
	$hesapadi = $_POST['hesapadi'];
	$hesapsifre = $_POST['hesapsifre'];
	$satinalanuser=$db->prepare("SELECT * FROM bolfps_user where user_id=:id");
	$satinalanuser->execute(array(
	 'id'=>$userid
	));
	$satinalanusercek=$satinalanuser->fetch(PDO::FETCH_ASSOC);
	$userkredi = $satinalanusercek['user_bakiye'];
	if ($userkredi >= $sonfiyat) {
		$userkredi = $userkredi - $sonfiyat;
		$ayarkaydet=$db->prepare("UPDATE bolfps_user SET
													 user_bakiye=:user_bakiye
													 WHERE user_id={$userid}");
												 $update=$ayarkaydet->execute(array(
													 'user_bakiye' => $userkredi
													 ));
													 if ($update) {

													$query = $db->prepare("INSERT INTO bolfps_challengerboostsiparis SET

														challengerboostsiparis_suankipuan =:challengerboostsiparis_suankipuan,
														challengerboostsiparis_istediginizpuan =:challengerboostsiparis_istediginizpuan,
														challengerboostsiparis_sunucu=:challengerboostsiparis_sunucu,
														challengerboostsiparis_koridor =:challengerboostsiparis_koridor,
														challengerboostsiparis_derecelitur =:challengerboostsiparis_derecelitur,
														challengerboostsiparis_macbasipuan	 =:challengerboostsiparis_macbasipuan,
														challengerboostsiparis_fiyat=:challengerboostsiparis_fiyat,
														challengerboostsiparis_userid =:challengerboostsiparis_userid,
														challengerboostsiparis_hesapad =:challengerboostsiparis_hesapad,
														challengerboostsiparis_hesapsifre=:challengerboostsiparis_hesapsifre,
														challengerboostsiparis_durum =:challengerboostsiparis_durum

														");
														$insert = $query->execute(array(

															'challengerboostsiparis_suankipuan' => $suankipuan,
															'challengerboostsiparis_istediginizpuan' => $istediginizpuan,
															'challengerboostsiparis_sunucu' => $sunucu,
														 'challengerboostsiparis_koridor' => $koridor,
														 'challengerboostsiparis_derecelitur' => $derecelituru,
														 'challengerboostsiparis_macbasipuan' => $macbasinagelenpuan,
														 'challengerboostsiparis_fiyat' => $sonfiyat,
														 'challengerboostsiparis_userid' => $userid,
														 'challengerboostsiparis_hesapad' => $hesapadi,
														 'challengerboostsiparis_hesapsifre' => $hesapsifre,
														'challengerboostsiparis_durum' => "0"

														));
														if ( $insert ){
															$last_id = $db->lastInsertId();
															Header("Location: ../challenger-eloboost.php?durum=ok");
														}

												} else {
													Header("Location: ../challenger-eloboost.php?durum=no");
												}

}else {
 Header("Location: ../challenger-eloboost.php?bakiye=no");
}

}




























if (isset($_POST['ilk10macsatinal'])) {
	$sonfiyat = $_POST['sonfiyat'];

	$sonlig = $_POST['sonlig'];
	$toplammac = $_POST['toplammac'];
	$sunucu = $_POST['sunucu'];
	$duoboost= $_POST['duoboost'];

	$userid = $_POST['user_id'];
	$hesapadi = $_POST['hesapadi'];
	$hesapsifre = $_POST['hesapsifre'];
	$satinalanuser=$db->prepare("SELECT * FROM bolfps_user where user_id=:id");
	$satinalanuser->execute(array(
	 'id'=>$userid
	));
	$satinalanusercek=$satinalanuser->fetch(PDO::FETCH_ASSOC);
	$userkredi = $satinalanusercek['user_bakiye'];
	if ($userkredi >= $sonfiyat) {
		$userkredi = $userkredi - $sonfiyat;
		$ayarkaydet=$db->prepare("UPDATE bolfps_user SET
													 user_bakiye=:user_bakiye
													 WHERE user_id={$userid}");
												 $update=$ayarkaydet->execute(array(
													 'user_bakiye' => $userkredi
													 ));
													 if ($update) {

													$query = $db->prepare("INSERT INTO bolfps_ilk10macsiparis SET

														ilk10macsiparis_sonlig =:ilk10macsiparis_sonlig,
														ilk10macsiparis_toplammac =:ilk10macsiparis_toplammac,
														ilk10macsiparis_sunucu=:ilk10macsiparis_sunucu,
														ilk10macsiparis_duoboost =:ilk10macsiparis_duoboost,
														ilk10macsiparis_fiyat =:ilk10macsiparis_fiyat,
														ilk10macsiparis_userid	 =:ilk10macsiparis_userid,
														ilk10macsiparis_hesapad=:ilk10macsiparis_hesapad,
														ilk10macsiparis_hesapsifre =:ilk10macsiparis_hesapsifre,
														ilk10macsiparis_durum =:ilk10macsiparis_durum

														");
														$insert = $query->execute(array(

															'ilk10macsiparis_sonlig' => $sonlig,
															'ilk10macsiparis_toplammac' => $toplammac,
															'ilk10macsiparis_sunucu' => $sunucu,
														 'ilk10macsiparis_duoboost' => $duoboost,
														 'ilk10macsiparis_fiyat' => $sonfiyat,
														 'ilk10macsiparis_userid' => $userid,
														 'ilk10macsiparis_hesapad' => $hesapadi,
														 'ilk10macsiparis_hesapsifre' => $hesapsifre,
														 'ilk10macsiparis_durum' => "0"

														));
														if ( $insert ){
															$last_id = $db->lastInsertId();
															Header("Location: ../ilk10mac-eloboost.php?durum=ok");
														}

												} else {
													Header("Location: ../ilk10mac-eloboost.php?durum=no");
												}

}else {
 Header("Location: ../ilk10mac-eloboost.php?bakiye=no");
}

}







if (isset($_POST['ilk5macsatinal'])) {
	$sonfiyat = $_POST['sonfiyat'];

	$sonlig = $_POST['sonlig'];
	$toplammac = $_POST['toplammac'];
	$sunucu = $_POST['sunucu'];
	$karakter = $_POST['karakter'];


	$userid = $_POST['user_id'];
	$hesapadi = $_POST['hesapadi'];
	$hesapsifre = $_POST['hesapsifre'];
	$satinalanuser=$db->prepare("SELECT * FROM bolfps_user where user_id=:id");
	$satinalanuser->execute(array(
	 'id'=>$userid
	));
	$satinalanusercek=$satinalanuser->fetch(PDO::FETCH_ASSOC);
	$userkredi = $satinalanusercek['user_bakiye'];
	if ($userkredi >= $sonfiyat) {
		$userkredi = $userkredi - $sonfiyat;
		$ayarkaydet=$db->prepare("UPDATE bolfps_user SET
													 user_bakiye=:user_bakiye
													 WHERE user_id={$userid}");
												 $update=$ayarkaydet->execute(array(
													 'user_bakiye' => $userkredi
													 ));
													 if ($update) {

													$query = $db->prepare("INSERT INTO bolfps_ilk5macsiparis SET

														ilk5macsiparis_sonlig =:ilk5macsiparis_sonlig,
														ilk5macsiparis_toplammac =:ilk5macsiparis_toplammac,
														ilk5macsiparis_sunucu=:ilk5macsiparis_sunucu,
														ilk5macsiparis_fiyat =:ilk5macsiparis_fiyat,
														ilk5macsiparis_userid	 =:ilk5macsiparis_userid,
														ilk5macsiparis_hesapad=:ilk5macsiparis_hesapad,
														ilk5macsiparis_hesapsifre =:ilk5macsiparis_hesapsifre,
														ilk5macsiparis_karakter =:ilk5macsiparis_karakter,
														ilk5macsiparis_durum =:ilk5macsiparis_durum

														");
														$insert = $query->execute(array(

															'ilk5macsiparis_sonlig' => $sonlig,
															'ilk5macsiparis_toplammac' => $toplammac,
															'ilk5macsiparis_sunucu' => "TR",
														 'ilk5macsiparis_fiyat' => $sonfiyat,
														 'ilk5macsiparis_userid' => $userid,
														 'ilk5macsiparis_hesapad' => $hesapadi,
														 'ilk5macsiparis_hesapsifre' => $hesapsifre,
														 'ilk5macsiparis_karakter' => $karakter,
														 'ilk5macsiparis_durum' => "0"

														));
														if ( $insert ){
															$last_id = $db->lastInsertId();
															Header("Location: ../valorant-ilk5mac.php?durum=ok");
														}

												} else {
													Header("Location: ../valorant-ilk5mac.php?durum=no");
												}

}else {
 Header("Location: ../valorant-ilk5mac.php?bakiye=no");
}

}









if (isset($_POST['valoranteloboost'])) {
	 $sonfiyat = $_POST['sonfiyat'];
	 $mevcutlig = $_POST['mevcutlig'];
	 $mevcutasama = $_POST['mevcutasama'];
	 $hedeflig = $_POST['hedeflig'];
	 $hedefasama = $_POST['hedefasama'];
	 $karakter = $_POST['karakter'];
	 $sunucu = $_POST['sunucu'];

	 $userid = $_POST['user_id'];
	 $hesapadi = $_POST['hesapadi'];
	 $hesapsifre = $_POST['hesapsifre'];
	 $satinalanuser=$db->prepare("SELECT * FROM bolfps_user where user_id=:id");
   $satinalanuser->execute(array(
   	'id'=>$userid
   ));
   $satinalanusercek=$satinalanuser->fetch(PDO::FETCH_ASSOC);
	 $userkredi = $satinalanusercek['user_bakiye'];
	 if ($userkredi >= $sonfiyat) {
		 $userkredi = $userkredi - $sonfiyat;
		 $ayarkaydet=$db->prepare("UPDATE bolfps_user SET
                            user_bakiye=:user_bakiye
                            WHERE user_id={$userid}");
                          $update=$ayarkaydet->execute(array(
                            'user_bakiye' => $userkredi
                            ));
														if ($update) {

													 $query = $db->prepare("INSERT INTO bolfps_valorantelosiparis SET
														valorantelosiparis_mevcutlig=:valorantelosiparis_mevcutlig,
														valorantelosiparis_mevcutasama=:valorantelosiparis_mevcutasama,
														valorantelosiparis_hedeflig=:valorantelosiparis_hedeflig,
														valorantelosiparis_hedefasama=:valorantelosiparis_hedefasama,
														valorantelosiparis_karakter=:valorantelosiparis_karakter,
														valorantelosiparis_sunucu=:valorantelosiparis_sunucu,

														valorantelosiparis_fiyat=:valorantelosiparis_fiyat,
														valorantelosiparis_userid=:valorantelosiparis_userid,
														valorantelosiparis_hesapad=:valorantelosiparis_hesapad,
														valorantelosiparis_hesapsifre=:valorantelosiparis_hesapsifre,
														 valorantelosiparis_durum=:valorantelosiparis_durum

														 ");
														 $insert = $query->execute(array(
															 'valorantelosiparis_mevcutlig' => $mevcutlig,
															 'valorantelosiparis_mevcutasama' => $mevcutasama,
															 'valorantelosiparis_hedeflig' => $hedeflig,
															 'valorantelosiparis_hedefasama' => $hedefasama,
															 'valorantelosiparis_karakter' => $karakter,
															 'valorantelosiparis_sunucu' => "TR",

															'valorantelosiparis_fiyat' => $sonfiyat,
															'valorantelosiparis_userid' => $userid,
															'valorantelosiparis_hesapad' => $hesapadi,
															'valorantelosiparis_hesapsifre' => $hesapsifre,
															'valorantelosiparis_durum' => "0"

														 ));
														 if ( $insert ){
															 $last_id = $db->lastInsertId();
															 Header("Location: ../valorant-eloboost.php?durum=ok");
														 }

												 } else {
													 Header("Location: ../valorant-eloboost.php?durum=no");
												 }

 }else {
 	Header("Location: ../valorant-eloboost.php?bakiye=no");
 }

}








if (isset($_POST['valorantduoboost'])) {
	 $sonfiyat = $_POST['sonfiyat'];
	 $mevcutlig = $_POST['mevcutlig'];
	 $mevcutasama = $_POST['mevcutasama'];
	 $hedeflig = $_POST['hedeflig'];
	 $hedefasama = $_POST['hedefasama'];
	 $karakter = $_POST['karakter'];
	 $sunucu = $_POST['sunucu'];

	 $userid = $_POST['user_id'];
	 $hesapadi = $_POST['hesapadi'];

	 $satinalanuser=$db->prepare("SELECT * FROM bolfps_user where user_id=:id");
   $satinalanuser->execute(array(
   	'id'=>$userid
   ));
   $satinalanusercek=$satinalanuser->fetch(PDO::FETCH_ASSOC);
	 $userkredi = $satinalanusercek['user_bakiye'];
	 if ($userkredi >= $sonfiyat) {
		 $userkredi = $userkredi - $sonfiyat;
		 $ayarkaydet=$db->prepare("UPDATE bolfps_user SET
                            user_bakiye=:user_bakiye
                            WHERE user_id={$userid}");
                          $update=$ayarkaydet->execute(array(
                            'user_bakiye' => $userkredi
                            ));
														if ($update) {

													 $query = $db->prepare("INSERT INTO bolfps_valorantduoboostsiparis SET
														valorantduoboostsiparis_mevcutlig=:valorantduoboostsiparis_mevcutlig,
														valorantduoboostsiparis_mevcutasama=:valorantduoboostsiparis_mevcutasama,
														valorantduoboostsiparis_hedeflig=:valorantduoboostsiparis_hedeflig,
														valorantduoboostsiparis_hedefasama=:valorantduoboostsiparis_hedefasama,
														valorantduoboostsiparis_karakter=:valorantduoboostsiparis_karakter,
														valorantduoboostsiparis_sunucu=:valorantduoboostsiparis_sunucu,

														valorantduoboostsiparis_fiyat=:valorantduoboostsiparis_fiyat,
														valorantduoboostsiparis_userid=:valorantduoboostsiparis_userid,
														valorantduoboostsiparis_hesapad=:valorantduoboostsiparis_hesapad,
														 valorantduoboostsiparis_durum=:valorantduoboostsiparis_durum

														 ");
														 $insert = $query->execute(array(
															 'valorantduoboostsiparis_mevcutlig' => $mevcutlig,
															 'valorantduoboostsiparis_mevcutasama' => $mevcutasama,
															 'valorantduoboostsiparis_hedeflig' => $hedeflig,
															 'valorantduoboostsiparis_hedefasama' => $hedefasama,
															 'valorantduoboostsiparis_karakter' => $karakter,
															 'valorantduoboostsiparis_sunucu' => "TR",

															'valorantduoboostsiparis_fiyat' => $sonfiyat,
															'valorantduoboostsiparis_userid' => $userid,
															'valorantduoboostsiparis_hesapad' => $hesapadi,
															'valorantduoboostsiparis_durum' => "0"

														 ));
														 if ( $insert ){
															 $last_id = $db->lastInsertId();
															 Header("Location: ../valorant-duoboost.php?durum=ok");
														 }

												 } else {
													 Header("Location: ../valorant-duoboost.php?durum=no");
												 }

 }else {
 	Header("Location: ../valorant-duoboost.php?bakiye=no");
 }

}
















if (isset($_POST['eloboostal'])) {
	 $sonfiyat = $_POST['sonfiyat'];
	 $mevcutlig = $_POST['mevcutlig'];
	 $mevcutasama = $_POST['mevcutasama'];
	 $hedeflig = $_POST['hedeflig'];
	 $hedefasama = $_POST['hedefasama'];
	 $macbasilp = $_POST['macbasilp'];
	 $sunucu = $_POST['sunucu'];
	 $derecelituru= $_POST['derecelituru'];
	 $userid = $_POST['user_id'];
	 $hesapadi = $_POST['hesapadi'];
	 $hesapsifre = $_POST['hesapsifre'];
	 $satinalanuser=$db->prepare("SELECT * FROM bolfps_user where user_id=:id");
   $satinalanuser->execute(array(
   	'id'=>$userid
   ));
   $satinalanusercek=$satinalanuser->fetch(PDO::FETCH_ASSOC);
	 $userkredi = $satinalanusercek['user_bakiye'];
	 if ($userkredi >= $sonfiyat) {
		 $userkredi = $userkredi - $sonfiyat;
		 $ayarkaydet=$db->prepare("UPDATE bolfps_user SET
                            user_bakiye=:user_bakiye
                            WHERE user_id={$userid}");
                          $update=$ayarkaydet->execute(array(
                            'user_bakiye' => $userkredi
                            ));
														if ($update) {

													 $query = $db->prepare("INSERT INTO bolfps_eloboostsiparis SET
														 eloboostsiparis_mevcutlig=:eloboostsiparis_mevcutlig,
														 eloboostsiparis_mevcutasama=:eloboostsiparis_mevcutasama,
														 eloboostsiparis_hedeflig =:eloboostsiparis_hedeflig,
														 eloboostsiparis_hedefasama =:eloboostsiparis_hedefasama,
														 eloboostsiparis_macbasilp =:eloboostsiparis_macbasilp,
														 eloboostsiparis_sunucu=:eloboostsiparis_sunucu,
														 eloboostsiparis_derecelitur =:eloboostsiparis_derecelitur,
														 eloboostsiparis_fiyat =:eloboostsiparis_fiyat,
														 eloboostsiparis_userid	 =:eloboostsiparis_userid,
														 eloboostsiparis_hesapad=:eloboostsiparis_hesapad,
														 eloboostsiparis_hesapsifre =:eloboostsiparis_hesapsifre,
														 eloboostsiparis_durum =:eloboostsiparis_durum

														 ");
														 $insert = $query->execute(array(
															 'eloboostsiparis_mevcutlig' => $mevcutlig,
															 'eloboostsiparis_mevcutasama' => $mevcutasama,
															 'eloboostsiparis_hedeflig' => $hedeflig,
															 'eloboostsiparis_hedefasama' => $hedefasama,
															 'eloboostsiparis_macbasilp' => $macbasilp,
															 'eloboostsiparis_sunucu' => $sunucu,
															'eloboostsiparis_derecelitur' => $derecelituru,
															'eloboostsiparis_fiyat' => $sonfiyat,
															'eloboostsiparis_userid' => $userid,
															'eloboostsiparis_hesapad' => $hesapadi,
															'eloboostsiparis_hesapsifre' => $hesapsifre,
															'eloboostsiparis_durum' => "0"

														 ));
														 if ( $insert ){
															 $last_id = $db->lastInsertId();
															 Header("Location: ../lol-eloboost.php?durum=ok");
														 }

												 } else {
													 Header("Location: ../lol-eloboost.php?durum=no");
												 }

 }else {
 	Header("Location: ../lol-eloboost.php?bakiye=no");
 }

}







if (isset($_POST['duoboostal'])) {
	 $sonfiyat = $_POST['sonfiyat'];
	 $mevcutlig = $_POST['mevcutlig'];
	 $mevcutasama = $_POST['mevcutasama'];
	 $hedeflig = $_POST['hedeflig'];
	 $hedefasama = $_POST['hedefasama'];
	 $macbasilp = $_POST['macbasilp'];
	 $sunucu = $_POST['sunucu'];
	 $derecelituru= $_POST['derecelituru'];
	 $userid = $_POST['user_id'];
$hesapadi = $_POST['hesapadi'];
	 $satinalanuser=$db->prepare("SELECT * FROM bolfps_user where user_id=:id");
   $satinalanuser->execute(array(
   	'id'=>$userid
   ));
   $satinalanusercek=$satinalanuser->fetch(PDO::FETCH_ASSOC);
	 $userkredi = $satinalanusercek['user_bakiye'];
	 if ($userkredi >= $sonfiyat) {
		 $userkredi = $userkredi - $sonfiyat;
		 $ayarkaydet=$db->prepare("UPDATE bolfps_user SET
                            user_bakiye=:user_bakiye
                            WHERE user_id={$userid}");
                          $update=$ayarkaydet->execute(array(
                            'user_bakiye' => $userkredi
                            ));
														if ($update) {

													 $query = $db->prepare("INSERT INTO bolfps_duoboostsiparis SET
														 duoboostsiparis_mevcutlig=:duoboostsiparis_mevcutlig,
														 duoboostsiparis_mevcutasama=:duoboostsiparis_mevcutasama,
														 duoboostsiparis_hedeflig =:duoboostsiparis_hedeflig,
														 duoboostsiparis_hedefasama =:duoboostsiparis_hedefasama,
														 duoboostsiparis_macbasilp =:duoboostsiparis_macbasilp,
														 duoboostsiparis_sunucu=:duoboostsiparis_sunucu,
														 duoboostsiparis_derecelitur =:duoboostsiparis_derecelitur,
														 duoboostsiparis_fiyat =:duoboostsiparis_fiyat,
														 duoboostsiparis_userid	 =:duoboostsiparis_userid,
														 duoboostsiparis_hesapadi	 =:duoboostsiparis_hesapadi,

														 duoboostsiparis_durum =:duoboostsiparis_durum

														 ");
														 $insert = $query->execute(array(
															 'duoboostsiparis_mevcutlig' => $mevcutlig,
															 'duoboostsiparis_mevcutasama' => $mevcutasama,
															 'duoboostsiparis_hedeflig' => $hedeflig,
															 'duoboostsiparis_hedefasama' => $hedefasama,
															 'duoboostsiparis_macbasilp' => $macbasilp,
															 'duoboostsiparis_sunucu' => $sunucu,
															'duoboostsiparis_derecelitur' => $derecelituru,
															'duoboostsiparis_fiyat' => $sonfiyat,
															'duoboostsiparis_userid' => $userid,
															'duoboostsiparis_hesapadi' => $hesapadi,

															'duoboostsiparis_durum' => "0"

														 ));
														 if ( $insert ){
															 $last_id = $db->lastInsertId();
															 Header("Location: ../lolduo-eloboost.php?durum=ok");
														 }

												 } else {
													 Header("Location: ../lolduo-eloboost.php?durum=no");
												 }

 }else {
 	Header("Location: ../lolduo-eloboost.php?bakiye=no");
 }

}

























if (isset($_POST['usersifredegis'])) {
  $suankisifre=md5($_POST['suankisifre']);
 $yenisifre=md5($_POST['yenisifre']);
 $yenisifretekrar=md5($_POST['yenisifretekrar']);
 $uzman_id=$_POST['uzman_id'];

$ayarsor=$db->prepare("SELECT * FROM bolfps_user where user_id=:id");
$ayarsor->execute(array(
	'id'=>$_POST['user_id']
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


if ($ayarcek['user_sifre'] == $suankisifre) {

	if ($yenisifre == $yenisifretekrar) {
		$ayarkaydet=$db->prepare("UPDATE bolfps_user SET
					 user_sifre=:user_sifre
			WHERE user_id={$_POST['user_id']}");

		$update=$ayarkaydet->execute(array(
					'user_sifre' => $yenisifre
			));


		if ($update) {

			header("Location:../sifre-degistir?sifredegisti=ok");

		} else {

			header("Location:../sifre-degistir?sifredegisti=no");
		}
	}else {
			header("Location:../sifre-degistir?sifrelerfarkli=yes");
	}

}else{

Header("Location:../sifre-degistir?eskisifre=no");
}
}
































				if (isset($_POST['userkayit'])) {
						if ($_POST['password'] == $_POST['password2']) {

										 $uzman_mail=htmlspecialchars($_POST['email']);
										$uzman_isim=htmlspecialchars($_POST['isim']);
									 $uzman_soyisim=htmlspecialchars($_POST['soyisim']);
									 $uzman_tel=htmlspecialchars($_POST['telefon']);
									 $uzman_username=htmlspecialchars($_POST['username']);
										$uzman_pass=$_POST['password'];
									 $pass = md5($uzman_pass);

										$uzmansor=$db->prepare("SELECT * FROM  bolfps_user where BINARY user_eposta=:id or user_username=:name");
										$uzmansor->execute(array(
											'id'=>$uzman_mail,
											'name'=>$uzman_username
										));
										 $say=$uzmansor->rowCount();

										if ($say==0) {
											$uzmanekle=$db->prepare("INSERT INTO bolfps_user SET
												user_username=:user_username,
												user_eposta=:user_eposta,
												user_sifre=:user_sifre,
												user_isim=:user_isim,
												user_soyisim=:user_soyisim,
												user_tel=:user_tel
											");
											$insert=$uzmanekle->execute(array(
												'user_username' => $uzman_username,
												'user_eposta' => $uzman_mail,
												'user_sifre' => $pass,
												'user_isim' => $uzman_isim,
												'user_soyisim' => $uzman_soyisim,
												'user_tel' => $uzman_tel
												));
											if ($insert) {
												$_SESSION['user_username']=$uzman_username;

												Header("Location:../index.php");
											} else {
												Header("Location:../kayit-ol.php?eklendi=no");
											}
										} else {
											header("Location:../kayit-ol.php?bukullanicivar=no");
											exit;
										}
						}else {
							Header("Location:../kayit-ol.php?sifretekrar=no");
						exit;
						}
					}







if (isset($_POST['searchAccount'])) {
	Header("Location:../oyuncubak/".seo($_POST["search"]));
}






					if (isset($_POST['usersearch'])) {
						$gelen=$_POST['usersearch'];
						$cek = $db->query("SELECT * FROM site_user WHERE user_username LIKE '$gelen'",PDO::FETCH_ASSOC);
						if($cek->rowCount()){
						foreach($cek as $kayit){
						Header("Location:../profil.php?searchuser=$gelen");
						}
						}


					}


					if (isset($_POST['kayitol'])) {
						$username = $_POST['user_username'];
						$usermail = $_POST['user_eposta'];
						$userad = $_POST['user_ad'];
						$userpas = $_POST['user_sifre'];
					  if ($username == null || $usermail == null || $userad == null || $userpas == null) {
							header("Location:../kayit-ol.php?bilgiler=no");
					  }else {
							$kontrol = $db->prepare("SELECT * FROM site_user WHERE user_username=?");//E-Posta ile daha önce kayıt olunmuşmu?
								 $kontrol->execute(array($username));
								 $kontrolmail = $db->prepare("SELECT * FROM site_user WHERE user_eposta=?");//E-Posta ile daha önce kayıt olunmuşmu?
										$kontrolmail->execute(array($usermail));
								 if($kontrol->rowCount()){
									 header("Location:../kayit-ol.php?username=no");
								 }elseif($kontrolmail->rowCount()){
									 header("Location:../kayit-ol.php?usermail=no");
								 } else {

						 		 $ayarekle=$db->prepare("INSERT INTO site_user SET
							 user_ad=:user_ad,
							 user_eposta=:user_eposta,
							 user_username=:user_username,
							 user_yas=:user_yas,
							 user_discord=:user_discord,
							 user_kredi=:user_kredi,
							 user_sifre=:user_sifre
							 ");

						 $insert=$ayarekle->execute(array(
							 'user_ad' => $_POST['user_ad'],
							 'user_eposta' => $_POST['user_eposta'],
							 'user_username' => $_POST['user_username'],
							 'user_yas' => $_POST['user_yas'],
							 'user_discord' => $_POST['user_discord'],
							 'user_kredi' => $_POST['user_kredi'],
							 'user_sifre' => md5($_POST['user_sifre'])
							 ));
							 if ($insert) {
								 Header("Location:../kayit-ol.php?kayit=ok");
							 } else {
								 Header("Location:../kayit-ol.php?kayit=no");
							 }

								 }
					  }

					}

					if (isset($_POST['genelayarkaydet'])) {

						//Tablo güncelleme işlemi kodları...
						$ayarkaydet=$db->prepare("UPDATE site_ayar SET
					         ayar_title=:ayar_title,
							ayar_keywords=:ayar_keywords,
							ayar_description=:ayar_description,
							ayar_facebook=:ayar_facebook,
							ayar_twitter=:ayar_twitter,
							ayar_instagram=:ayar_instagram,
				 ayar_youtube=:ayar_youtube,
				 ayar_discord=:ayar_discord,
				 ayar_mail=:ayar_mail,
				 ayar_tel=:ayar_tel,
				 ayar_whatsapp=:ayar_whatsapp,
		site_hakkimizda=:site_hakkimizda,
		ayar_logomobil=:ayar_logomobil,
		ayar_favicon=:ayar_favicon
							WHERE ayar_id=1");

						$update=$ayarkaydet->execute(array(
					        'ayar_title' => $_POST['ayar_title'],
							'ayar_keywords' => $_POST['ayar_keywords'],
							'ayar_description' => $_POST['ayar_description'],
							'ayar_facebook' => $_POST['ayar_facebook'],
							'ayar_twitter' => $_POST['ayar_twitter'],
							'ayar_instagram' => $_POST['ayar_instagram'],
					'ayar_youtube' => $_POST['ayar_youtube'],
					'ayar_discord' => $_POST['ayar_discord'],
					'ayar_mail' => $_POST['ayar_mail'],
					'ayar_tel' => $_POST['ayar_tel'],
					'ayar_whatsapp' => $_POST['ayar_whatsapp'],
			'site_hakkimizda' => $_POST['site_hakkimizda'],
			'ayar_logomobil' => $_POST['ayar_logomobil'],
			'ayar_favicon' => $_POST['ayar_favicon']
							));


						if ($update) {

							header("Location:../admin/admin/genel-ayarlar.php?durum=ok");

						} else {

							header("Location:../admin/admin/genel-ayarlar.php?durum=ok");
						}

					}
					if (isset($_POST['sistemayarlarikaydet'])) {

						//Tablo güncelleme işlemi kodları...
						$ayarkaydet=$db->prepare("UPDATE site_server SET
									 server_name=:server_name,
							server_ip=:server_ip
							WHERE server_id=1");

						$update=$ayarkaydet->execute(array(
									'server_name' => $_POST['server_name'],
							'server_ip' => $_POST['server_ip']
							));


						if ($update) {

							header("Location:../admin/admin/sistem-ayarlari.php?durum=ok");

						} else {

							header("Location:../admin/admin/sistem-ayarlari.php?durum=ok");
						}

					}















					if (isset($_POST['usersifreyenile'])) {

						$uzman_mail = $_POST['user_eposta'];
						$kod = rand(0,99999999999999999);
						$sorgu44=$db->prepare("SELECT COUNT(*) FROM bolfps_user where user_eposta =?");
						$sorgu44->execute(array($uzman_mail));
						 $say44 = $sorgu44->fetchColumn();

							if ($say44>0) {

							$ayarkaydet=$db->prepare("UPDATE bolfps_user SET
						         user_sifrekod=:user_sifrekod,
										 user_sifreistek=:user_sifreistek
								WHERE user_eposta='$uzman_mail'");

							$update=$ayarkaydet->execute(array(
						        'user_sifrekod' => $kod,
										 'user_sifreistek' => "1"
								));


							if ($update) {


														include "../mailler/PHPMailerAutoload.php";
									require '../mailler/class.phpmailer.php';
										$mail = new PHPMailer();


										// Enable verbose debug output
										$mail->isSMTP();                                            // Send using SMTP
										$mail->Host       = 'smtp.gmail.com';               // Set the SMTP server to send through
										$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
										$mail->Username   = 'boostnpeace@gmail.com';                     // SMTP username
										$mail->Password   = 'qazwsx60';                               // SMTP password
										$mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
										$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
										$mail->SetFrom($mail->Username, 'BoosTNPeace.Com Şifre Yenileme');
										$mail->addAddress($uzman_mail, "Değerli Kullanıcımız");     // Add a recipient
										$mail->CharSet = 'UTF-8';

										$mail->isHTML(true);                                  // Set email format to HTML
										$mail->Subject = 'Şifre yenileme isteği';
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
										<td class="container-padding header" style="font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: bold; padding-bottom: 12px; color: #df4726; padding-left: 24px; padding-right: 24px;" align="left">BoosTNPeace.Com Şifre Değiştirme</td>
										</tr>
										<tr>
										<td class="container-padding content" style="background-color: #ffffff; padding: 12px 24px 12px 24px;" align="left"><br />
										<div class="title" style="font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 600; color: #374550;">Aşağıdaki Linke Tıklayarak Hesabının şifreni değiştirebilirsin.</div>
										<br />
										<div class="body-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: left; color: #333333;">Eğer şifre değiştirme isteğini gönderen sen değil isen bu iletiyi dikkate alma. Eğer rahatısz edici bir şey farkettiysen bizimle iletişime geçebilirsin. <br /><br /> Yeni Şifre Linki: <a href="http://localhost/yenisifre.php?eposta='.$uzman_mail.'&kod='.$kod.'">http://localhost/yenisifre.php?eposta='.$uzman_mail.'&kod='.$kod.'</a> <br /><br /></div>
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
											echo 'Message has been sent';

										header("Location:../giris.php?lostpassword=mailgitti");

							} else {

								echo "sifre kod yazılamadı";
							}
						}else {
							Header("Location: ../giris.php?lostpassword=yanlismail");
						}



					}









































					if (isset($_POST['apiayarkaydet'])) {

						//Tablo güncelleme işlemi kodları...
						$ayarkaydet=$db->prepare("UPDATE site_ayar SET
							ayar_analystic=:ayar_analystic,
							ayar_maps=:ayar_maps,
							ayar_zoppim=:ayar_zoppim,
					        ayar_smtpport=:ayar_smtpport,
							ayar_smtppassword=:ayar_smtppassword,
							ayar_smtphost=:ayar_smtphost
							WHERE ayar_id=1");

						$update=$ayarkaydet->execute(array(

							'ayar_analystic' => $_POST['ayar_analystic'],
							'ayar_maps' => $_POST['ayar_maps'],
					        'ayar_zoppim' => $_POST['ayar_zoppim'],
					        'ayar_smtpport' => $_POST['ayar_smtpport'],
							'ayar_smtppassword' => $_POST['ayar_smtppassword'],
							'ayar_smtphost' => $_POST['ayar_smtphost']
							));


						if ($update) {

							header("Location:../admin/admin/apiayar.php?durum=ok");

						} else {

							header("Location:../admin/admin/apiayar.php?durum=no");
						}

					}
					if (isset($_POST['hakkimizdaayarkaydet'])) {

						//Tablo güncelleme işlemi kodları...
						$ayarkaydet=$db->prepare("UPDATE site_hakkimizda SET
							hakkimizda_baslik=:hakkimizda_baslik,
							hakkimizda_icerik=:hakkimizda_icerik
							WHERE hakkimizda_id=1");

						$update=$ayarkaydet->execute(array(

							'hakkimizda_baslik' => $_POST['hakkimizda_baslik'],
							'hakkimizda_icerik' => $_POST['hakkimizda_icerik']
							));


						if ($update) {

							header("Location:../admin/admin/hakkimizdaayar.php?durum=ok");

						} else {

							header("Location:../admin/admin/hakkimizdaayar.php?durum=no");
						}

					}



					if (isset($_POST['admingiris'])) {

					$admin_mail=$_POST['user_username'];
					$admin_sifre=md5($_POST['user_sifre']);

					$kullanicisor=$db->prepare("SELECT * FROM bolfps_admin where user_username=:mail and user_sifre=:password");
						$kullanicisor->execute(array(
							'mail' => $admin_mail,
							'password' => $admin_sifre

							));

						echo $say=$kullanicisor->rowCount();

						if ($say==1) {

							$_SESSION['user_adminname']=$admin_mail;
							header("Location:../admin/admin/index");
							exit;



						} else {

							header("Location:../admin/admin/login.php?durum=no");
							exit;
						}

					}
						if (isset($_POST['kullanicigiris'])) {

							$user_username=htmlspecialchars($_POST['user_username']);
							$user_sifre=md5($_POST['user_sifre']);

							$kullanicisor=$db->prepare("SELECT * FROM site_user where user_username=:mail and user_sifre=:password");
								$kullanicisor->execute(array(
									'mail' => $user_username,
									'password' => $user_sifre

									));

								 $say=$kullanicisor->rowCount();

								if ($say==1) {

									 $_SESSION['user_username']=$user_username;
									header("Location:../profil.php?durum=yes");
									exit;



								} else {

									header("Location:../index.php?durum=no");
									exit;
								}

					}
					if (isset($_POST['kullaniciduzenle'])) {

						$users_id=$_POST['users_id'];

						$ayarkaydet=$db->prepare("UPDATE site_user SET
							user_ad=:user_ad,
							user_eposta=:user_eposta,
							user_username=:user_username,
							user_yas=:user_yas,
							user_discord=:user_discord,
							user_kredi=:user_kredi
							WHERE users_id={$_POST['users_id']}");

						$update=$ayarkaydet->execute(array(
							'user_ad' => $_POST['user_ad'],
							'user_eposta' => $_POST['user_eposta'],
							'user_username' => $_POST['user_username'],
							'user_yas' => $_POST['user_yas'],
							'user_discord' => $_POST['user_discord'],
							'user_kredi' => $_POST['user_kredi']
							));


						if ($update) {

							Header("Location:../admin/admin/kullanici-duzenle.php?users_id=$users_id&durum=ok");

						} else {

							Header("Location:../admin/admin/kullanici-duzenle.php?users_id=$users_id&durum=no");
						}

					}

					if (isset($_POST['ayard'])) {

						$admin_id=$_POST['ayar_id'];

						$ayarkaydet=$db->prepare("UPDATE bolfps_ayar SET
							slider_1=:slider_1,
							slider_2=:slider_2,
							slider_3=:slider_3
							WHERE ayar_id={$_POST['ayar_id']}");

						$update=$ayarkaydet->execute(array(
							'slider_1' => $_POST['slider_1'],
							'slider_2' => $_POST['slider_2'],
							'slider_3' => $_POST['slider_3']
							));


						if ($update) {

							Header("Location:../admin/admin/slider-sliderlar.php?ayar_id=$admin_id&durum=ok");

						} else {

							Header("Location:../admin/admin/slider-sliderlar.php?ayar_id=$admin_id&durum=no");
						}

					}



					if ($_GET['useradminyap']=="ok") {
						$adminolanuser=$db->prepare("SELECT * FROM site_user where users_id=:id");
						$adminolanuser->execute(array(
							'id'=>$_GET['users_id']
						));
						$adminolanusercek=$adminolanuser->fetch(PDO::FETCH_ASSOC);
						$ayarkaydet=$db->prepare("UPDATE site_user SET
							user_onay=:user_onay,
							user_admin=:user_admin,
								user_yetki=:user_yetki
							WHERE users_id={$_GET['users_id']}");

						$update=$ayarkaydet->execute(array(
							'user_onay' => "1",
							'user_admin' => "1",
							'user_yetki' => "1"
							));
						if ($update) {
							header("Location:../admin/admin/yetkilihesaplar.php?eklenme=ok");
							$ayarekle=$db->prepare("INSERT INTO site_admin SET
								admin_isim=:admin_isim,
									admin_mail=:admin_mail,
										admin_sifre=:admin_sifre,
												admin_rutbe=:admin_rutbe
								");

							$insert=$ayarekle->execute(array(
								'admin_isim' => $adminolanusercek['user_username'],
								'admin_mail' => $adminolanusercek['user_eposta'],
								'admin_sifre' => $adminolanusercek['user_sifre'],
									'admin_rutbe' => "Yönetici"
								));


						} else {
							header("Location:../admin/admin/yetkilihesaplar.php?eklenme=no");
						}
					}

					if ($_GET['odemeyontemisil']=="ok") {

						$sil=$db->prepare("DELETE from site_odemeyontemi where odemeyontemi_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['odemeyontemi_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/odeme-yontemleri?sil=ok");
						} else {
							header("location:../admin/admin/odeme-yontemleri?sil=no");
						}
					}


					if ($_GET['haberyorumsil']=="ok") {

						$sil=$db->prepare("DELETE from bolfps_yorum where yorum_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['yorum_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/haber-yorumlar?durum=ok");
						} else {
							header("location:../admin/admin/odeme-yorumlar?durum=no");
						}
					}


					if ($_GET['haberaktifet']=="ok") {

						$ayarkaydet2=$db->prepare("UPDATE bolfps_yorum SET
							yorum_durum=:yorum_durum
							WHERE yorum_id={$_GET['yorum_id']}");

						$update=$ayarkaydet2->execute(array(
							'yorum_durum' => "aktif"
							));
						if ($update) {
							header("location:../admin/admin/haber-yorumlar?durum=ok");
						} else {
							header("location:../admin/admin/haber-yorumlar?durum=no");
						}
					}

					if ($_GET['haberpasifet']=="ok") {

						$ayarkaydet2=$db->prepare("UPDATE bolfps_yorum SET
							yorum_durum=:yorum_durum
							WHERE yorum_id={$_GET['yorum_id']}");

						$update=$ayarkaydet2->execute(array(
							'yorum_durum' => "pasif"
							));
						if ($update) {
							header("location:../admin/admin/haber-yorumlar?durum=ok");
						} else {
							header("location:../admin/admin/haber-yorumlar?durum=no");
						}
					}



					if ($_GET['destekkategorisil']=="ok") {

						$sil=$db->prepare("DELETE from site_destekkategori where destekkategori_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['destekkategori_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/destek-kategoriler?sil=ok");
						} else {
							header("location:../admin/admin/destek-kategoriler?sil=no");
						}
					}

					if ($_GET['desteksil']=="ok") {

						$sil=$db->prepare("DELETE from site_destek where destek_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['destek_id']
							));
							$sil2=$db->prepare("DELETE from site_desteksohbet where desteksohbet_destekid=:id");
							$kontrol2=$sil2->execute(array(
								'id' => $_GET['destek_id']
								));
						if ($kontrol) {
							header("location:../admin/admin/destek-tumu?sil=ok");
						} else {
							header("location:../admin/admin/destek-tumu?sil=no");
						}
					}
					if ($_GET['destekkapat']=="ok") {

						$ayarkaydet2=$db->prepare("UPDATE site_destek SET
							destek_durum=:destek_durum
							WHERE destek_id={$_GET['destek_id']}");

						$update=$ayarkaydet2->execute(array(
							'destek_durum' => "3"
							));
						if ($kontrol) {
							header("location:../admin/admin/destek-tumu?kapat=ok");
						} else {
							header("location:../admin/admin/destek-tumu?kapat=no");
						}
					}

					if ($_GET['dosyasil']=="ok") {

						$sil=$db->prepare("DELETE from site_dosyaindirme where dosyaindirme_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['dosyaindirme_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/dosyalar.php?sil=ok");
						} else {
							header("location:../admin/admin/dosyalar.php?sil=no");
						}
					}

					if ($_GET['kayanyazisil']=="ok") {

						$sil=$db->prepare("DELETE from site_kayanyazi where kayanyazi_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['kayanyazi_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/duyurular.php?sil=ok");
						} else {
							header("location:../admin/admin/duyurular.php?sil=no");
						}
					}
					if ($_GET['sayfasil']=="ok") {

						$sil=$db->prepare("DELETE from site_sayfa where sayfa_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['sayfa_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/sayfalar.php?sil=ok");
						} else {
							header("location:../admin/admin/sayfalar.php?sil=no");
						}
					}

					if ($_GET['sosyalmedyasil']=="ok") {

						$sil=$db->prepare("DELETE from site_sosyalmedya where sosyalmedya_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['sosyalmedya_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/socialmedia.php?sil=ok");
						} else {
							header("location:../admin/admin/socialmedia.php?sil=no");
						}
					}	if ($_GET['urunkupongecmissil']=="ok") {

							$sil=$db->prepare("DELETE from site_urunkupongecmis where urunkupongecmis_id=:id");
							$kontrol=$sil->execute(array(
								'id' => $_GET['urunkupongecmis_id']
								));
							if ($kontrol) {
								header("location:../admin/admin/hediyegecmisi.php?sil=ok");
							} else {
								header("location:../admin/admin/hediyegecmisi.php?sil=no");
							}
						}
					if ($_GET['urunkuponsil']=="ok") {

						$sil=$db->prepare("DELETE from site_urunkupon where urunkupon_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['urunkupon_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/hediyeler.php?sil=ok");
						} else {
							header("location:../admin/admin/hediyeler.php?sil=no");
						}
					}
					if ($_GET['marketgecmissil']=="ok") {

						$sil=$db->prepare("DELETE from site_marketgecmis where marketgecmis_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['marketgecmis_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/magazagecmisi.php?sil=ok");
						} else {
							header("location:../admin/admin/magazagecmisi.php?sil=no");
						}
					}
					if ($_GET['krediyuklemegecmissil']=="ok") {

						$sil=$db->prepare("DELETE from site_krediyuklemegecmis where krediyuklemegecmis_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['krediyuklemegecmis_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/magazakrediyuklemegecmisi.php?sil=ok");
						} else {
							header("location:../admin/admin/magazakrediyuklemegecmisi.php?sil=no");
						}
					}
					if ($_GET['hediyekodgecmisil']=="ok") {

						$sil=$db->prepare("DELETE from site_hediyekodgecmis where hediyekodgecmis_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['hediyekodgecmis_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/magazakupongecmisi.php?sil=ok");
						} else {
							header("location:../admin/admin/magazakupongecmisi.php?sil=no");
						}
					}
					if ($_GET['depogecmissil']=="ok") {

						$sil=$db->prepare("DELETE from site_depogecmis where depogecmis_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['depogecmis_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/magazasandikgecmisi.php?sil=ok");
						} else {
							header("location:../admin/admin/magazasandikgecmisi.php?sil=no");
						}
					}
					if ($_GET['marketkategorisil']=="ok") {

						$sil=$db->prepare("DELETE from site_marketkategori where marketkategori_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['marketkategori_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/magazakategoriler.php?sil=ok");
						} else {
							header("location:../admin/admin/magazakategoriler.php?sil=no");
						}
					}
					if ($_GET['sunucusil']=="ok") {

						$sil=$db->prepare("DELETE from site_sunucu where sunucu_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['sunucu_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/sunucular.php?sil=ok");
						} else {
							header("location:../admin/admin/sunucular.php?sil=no");
						}
					}
					if ($_GET['oyunlarsil']=="ok") {

						$sil=$db->prepare("DELETE from bolfps_oyunlar where oyun_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['oyun_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/oyun-oyunlar?durum=ok");
						} else {
							header("location:../admin/admin/oyun-oyunlar?durum=no");
						}
					}
					if ($_GET['haberkategorisil']=="ok") {

						$sil=$db->prepare("DELETE from bolfps_haberkategori where haberkategori_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['haberkategori_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/haber-kategoriler?durum=ok");
						} else {
							header("location:../admin/admin/haber-kategoriler?durum=no");
						}
					}
					if ($_GET['menusil']=="ok") {

						$sil=$db->prepare("DELETE from site_menu where menu_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['menu_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/menuler.php?sil=ok");
						} else {
							header("location:../admin/admin/menuler.php?sil=no");
						}
					}
					if ($_GET['bankasil']=="ok") {

						$sil=$db->prepare("DELETE from site_eft where eft_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['eft_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/eftodeme.php?sil=ok");
						} else {
							header("location:../admin/admin/eftodeme.php?sil=no");
						}
					}


					if ($_GET['deposil']=="ok") {

						$sil=$db->prepare("DELETE from site_depo where depo_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['depo_id']
							));
						if ($kontrol) {
							header("location:../depom.php?sil=ok");
						} else {
							header("location:../depom.php?sil=no");
						}
					}
					if ($_GET['ininalsil']=="ok") {

						$sil=$db->prepare("DELETE from site_ininal where ininal_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['ininal_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/ininalodeme.php?sil=ok");
						} else {
							header("location:../admin/admin/ininalodeme.php?sil=no");
						}
					}
					if ($_GET['sunucusil']=="ok") {

						$sil=$db->prepare("DELETE from site_sunucu where sunucu_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['sunucu_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/sunucular.php?sil=ok");
						} else {
							header("location:../admin/admin/sunucular.php?sil=no");
						}
					}
					if ($_GET['marketgecmis']=="ok") {

						$sil=$db->prepare("DELETE from site_marketgecmis where marketgecmis_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['marketgecmis_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/magaza-gecmis.php?sil=ok");
						} else {
							header("location:../admin/admin/magaza-gecmis.php?sil=no");
						}
					}
					if ($_GET['hediyekodsil']=="ok") {

						$sil=$db->prepare("DELETE from site_hediyekod where hediyekod_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['hediyekod_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/magazakuponlar.php?sil=ok");
						} else {
							header("location:../admin/admin/magazakuponlar.php?sil=no");
						}
					}

					if ($_GET['usersil']=="ok") {

						$sil=$db->prepare("DELETE from bolfps_user where user_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['user_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/hesaplar.php?sil=ok");
						} else {
							header("location:../admin/admin/hesaplar.php?sil=no");
						}
					}
					if ($_GET['slidersil']=="ok") {

						$sil=$db->prepare("DELETE from site_slider where slider_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['slider_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/sliderlar.php?slider_id=ok");
						} else {
							header("location:../admin/admin/sliderlar.php?slider_id=no");
						}
					}
					if ($_GET['urunsil']=="ok") {

						$sil=$db->prepare("DELETE from bolfps_eloboostsiparis where eloboostsiparis_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['eloboostsiparis_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/eloboostsiparis.php?urun_id=ok");
						} else {
							header("location:../admin/admin/eloboostsiparis.php?urun_id=no");
						}
					}
					if ($_GET['urunsiln']=="ok") {

						$sil=$db->prepare("DELETE from bolfps_normalmacsiparis where normalmacsiparis_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['normalmacsiparis_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/vnormalmacsiparis.php?urun_id=ok");
						} else {
							header("location:../admin/admin/vnormalmacsiparis.php?urun_id=no");
						}
					}
					if ($_GET['urunsilduov']=="ok") {

						$sil=$db->prepare("DELETE from bolfps_valorantduoboostsiparis where valorantduoboostsiparis_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['valorantduoboostsiparis_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/vduoboostsiparis.php?urun_id=ok");
						} else {
							header("location:../admin/admin/vduoboostsiparis.php?urun_id=no");
						}
					}
					if ($_GET['urunsilv']=="ok") {

						$sil=$db->prepare("DELETE from bolfps_valorantelosiparis where valorantelosiparis_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['valorantelosiparis_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/veloboostsiparis.php?urun_id=ok");
						} else {
							header("location:../admin/admin/veloboostsiparis.php?urun_id=no");
						}
					}
					if ($_GET['urunsilchallenger']=="ok") {

						$sil=$db->prepare("DELETE from bolfps_challengerboostsiparis where challengerboostsiparis_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['challengerboostsiparis_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/challengersiparis.php?urun_id=ok");
						} else {
							header("location:../admin/admin/challengersiparis.php?urun_id=no");
						}
					}
					if ($_GET['urunsilwin']=="ok") {

						$sil=$db->prepare("DELETE from bolfps_winboostsiparis where winboostsiparis_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['winboostsiparis_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/winboostsiparis.php?urun_id=ok");
						} else {
							header("location:../admin/admin/winboostsiparis.php?urun_id=no");
						}
					}
					if ($_GET['urunsil10']=="ok") {

						$sil=$db->prepare("DELETE from bolfps_ilk10macsiparis where ilk10macsiparis_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['ilk10macsiparis_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/ilk10macsiparis.php?urun_id=ok");
						} else {
							header("location:../admin/admin/ilk10macsiparis.php?urun_id=no");
						}
					}
					if ($_GET['urunsil5']=="ok") {

						$sil=$db->prepare("DELETE from bolfps_ilk5macsiparis where ilk5macsiparis_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['ilk5macsiparis_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/vilk5macsiparis.php?urun_id=ok");
						} else {
							header("location:../admin/admin/vilk5macsiparis.php?urun_id=no");
						}
					}
					if ($_GET['urunsilduo']=="ok") {

						$sil=$db->prepare("DELETE from bolfps_duoboostsiparis where duoboostsiparis_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['duoboostsiparis_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/duoboostsiparis.php?urun_id=ok");
						} else {
							header("location:../admin/admin/duoboostsiparis.php?urun_id=no");
						}
					}
					if ($_GET['habersil']=="ok") {

						$sil=$db->prepare("DELETE from bolfps_haber where haber_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['haber_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/haber-haberler?durum=ok");
						} else {
							header("location:../admin/admin/haber-haberler?durum=no");
						}
					}
					if ($_GET['adminsil']=="ok") {

						$sil=$db->prepare("DELETE from site_admin where admin_id=:id");
						$kontrol=$sil->execute(array(
							'id' => $_GET['admin_id']
							));
						if ($kontrol) {
							header("location:../admin/admin/adminler.php?admin_id=ok");
						} else {
							header("location:../admin/admin/adminler.php?admin_id=no");
						}
					}

					if (isset($_POST['haberkategoriduzenle'])) {

						$haber_id=$_POST['haberkategori_id'];

						$ayarkaydet=$db->prepare("UPDATE bolfps_haberkategori SET
							haberkategori_isim=:haberkategori_isim
							WHERE haberkategori_id={$_POST['haberkategori_id']}");

						$update=$ayarkaydet->execute(array(
							'haberkategori_isim' => $_POST['haberkategori_isim']
							));


						if ($update) {

							Header("Location:../admin/admin/haber-kategoriduzenle?haberkategori_id=$haber_id&durum=ok");

						} else {

							Header("Location:../admin/admin/haber-kategoriduzenle?haberkategori_id=$haber_id&durum=no");
						}

					}





					if (isset($_POST['desteksil'])) {

						$haber_id=$_POST['destek_id'];

						$ayarkaydet=$db->prepare("UPDATE site_destek SET
							destek_profildensil=:destek_profildensil
							WHERE destek_id={$_POST['destek_id']}");

						$update=$ayarkaydet->execute(array(
							'destek_profildensil' => "1"
							));


						if ($update) {
							$ayarkaydet2=$db->prepare("UPDATE site_destek SET
								destek_durum=:destek_durum
								WHERE destek_id={$_POST['destek_id']}");

							$update=$ayarkaydet2->execute(array(
								'destek_durum' => "3"
								));
							Header("Location:../destek?durum=sil");

						} else {

							Header("Location:../destek?durum=sil");
						}

					}




					if (isset($_POST['destekkategoriduzenle'])) {

						$haber_id=$_POST['destekkategori_id'];

						$ayarkaydet=$db->prepare("UPDATE site_destekkategori SET
							destekkategori_isim=:destekkategori_isim
							WHERE destekkategori_id={$_POST['destekkategori_id']}");

						$update=$ayarkaydet->execute(array(
							'destekkategori_isim' => $_POST['destekkategori_isim']
							));


						if ($update) {

							Header("Location:../admin/admin/destek-kategoriler.php?durum=ok");

						} else {

							Header("Location:../admin/admin/destek-kategoriler.php?durum=no");
						}

					}




					if (isset($_POST['magazakategoriduzenle'])) {

						$haber_id=$_POST['marketkategori_id'];

						$ayarkaydet=$db->prepare("UPDATE site_marketkategori SET
							marketkategori_isim=:marketkategori_isim,
								marketkategori_foto=:marketkategori_foto,
									marketkategori_sunucu=:marketkategori_sunucu
							WHERE marketkategori_id={$_POST['marketkategori_id']}");

						$update=$ayarkaydet->execute(array(
							'marketkategori_isim' => $_POST['marketkategori_isim'],
							'marketkategori_foto' => $_POST['marketkategori_foto'],
							'marketkategori_sunucu' => $_POST['marketkategori_sunucu']
							));


						if ($update) {

							Header("Location:../admin/admin/magazakategoriler.php?durum=ok");

						} else {

							Header("Location:../admin/admin/magazakategoriler.php?durum=no");
						}

					}
					if (isset($_POST['magazakategoriekle'])) {

						$ayarekle=$db->prepare("INSERT INTO site_marketkategori SET
							marketkategori_isim=:marketkategori_isim,
								marketkategori_foto=:marketkategori_foto,
									marketkategori_sunucu=:marketkategori_sunucu
							");

						$insert=$ayarekle->execute(array(
							'marketkategori_isim' => $_POST['marketkategori_isim'],
							'marketkategori_foto' => $_POST['marketkategori_foto'],
							'marketkategori_sunucu' => $_POST['marketkategori_sunucu']
							));



						if ($insert) {

							Header("Location:../admin/admin/magazakategoriler.php?durum=ok");

						} else {

							Header("Location:../admin/admin/magazakategoriler.php?durum=no");
						}

					}




					if (isset($_POST['destekkategoriekle'])) {

						$ayarekle=$db->prepare("INSERT INTO site_destekkategori SET
							destekkategori_isim=:destekkategori_isim
							");

						$insert=$ayarekle->execute(array(
							'destekkategori_isim' => $_POST['destekkategori_isim']
							));



						if ($insert) {

							Header("Location:../admin/admin/destek-kategoriler?durum=ok");

						} else {

							Header("Location:../admin/admin/destek-kategoriler?durum=no");
						}

					}







					if (isset($_POST['haberduzenle'])) {

						$haber_id=$_POST['haber_id'];

						$ayarkaydet=$db->prepare("UPDATE bolfps_haber SET
							haber_foto=:haber_foto,
							haber_baslik=:haber_baslik,
							haber_kategori=:haber_kategori,

							haber_icerik=:haber_icerik
							WHERE haber_id={$_POST['haber_id']}");

						$update=$ayarkaydet->execute(array(
							'haber_foto' => $_POST['haber_foto'],
							'haber_baslik' => $_POST['haber_baslik'],
							'haber_kategori' => $_POST['haber_kategori'],

							'haber_icerik' => $_POST['haber_icerik']
							));


						if ($update) {

							Header("Location:../admin/admin/haber-haberduzenle?haber_id=$haber_id&durum=ok");

						} else {

							Header("Location:../admin/admin/haber-haberduzenle?haber_id=$haber_id&durum=no");
						}

					}


					if (isset($_POST['temagenelrenkkaydet'])) {



						$ayarkaydet=$db->prepare("UPDATE site_temagenel SET
							temagenel_renk=:temagenel_renk
							WHERE temagenel_id={$_POST['temagenel_id']}");

						$update=$ayarkaydet->execute(array(
							'temagenel_renk' => $_POST['temagenel_renk']
							));
						if ($update) {
							Header("Location:../admin/admin/tema-renk?durum=ok");
						} else {
							Header("Location:../admin/admin/tema-renk?durum=no");
						}
					}

					if (isset($_POST['temagenelcsskaydet'])) {



						$ayarkaydet=$db->prepare("UPDATE site_temagenel SET
							temagenel_css=:temagenel_css
							WHERE temagenel_id={$_POST['temagenel_id']}");

						$update=$ayarkaydet->execute(array(
							'temagenel_css' => $_POST['temagenel_css']
							));
						if ($update) {
							Header("Location:../admin/admin/tema-css?durum=ok");
						} else {
							Header("Location:../admin/admin/tema-css?durum=no");
						}
					}

					if (isset($_POST['temagenelkaydet'])) {



						$ayarkaydet=$db->prepare("UPDATE site_temagenel SET
							temagenel_duyurubandi =: temagenel_duyurubandi,
							temagenel_slider =: temagenel_slider,
							temagenel_slideronlineband =: temagenel_slideronlineband,
							temagenel_sidebar =: temagenel_sidebartemagenel_sidebar,
							temagenel_discordwidget =: temagenel_discordwidget,
							temagenel_discordtema =: temagenel_discordtema,
							temagenel_discordsunucuid =: temagenel_discordsunucuid,
							temagenel_haberkarttipi =: temagenel_haberkarttipi,
							temagenel_headerlogo =: temagenel_headerlogo,
							temagenel_headerarkaplan =: temagenel_headerarkaplan
							WHERE temagenel_id={$_POST['temagenel_id']}");

						$update=$ayarkaydet->execute(array(
							'temagenel_duyurubandi' => $_POST['temagenel_duyurubandi'],
							'temagenel_slider' => $_POST['temagenel_slider'],
							'temagenel_slideronlineband' => $_POST['temagenel_slideronlineband'],
							'temagenel_sidebar' => $_POST['temagenel_sidebar'],
							'temagenel_discordwidget' => $_POST['temagenel_discordwidget'],
								'temagenel_discordtema' => $_POST['temagenel_discordtema'],
									'temagenel_discordsunucuid' => $_POST['temagenel_discordsunucuid'],
										'temagenel_haberkarttipi' => $_POST['temagenel_haberkarttipi'],
											'temagenel_headerlogo' => $_POST['temagenel_headerlogo'],
												'temagenel_headerarkaplan' => $_POST['temagenel_headerarkaplan']
							));
						if ($update) {
							Header("Location:../admin/admin/tema-genel?durum=ok");
						} else {
							Header("Location:../admin/admin/tema-genel?durum=no");
						}
					}

					if (isset($_POST['duyuruduzenle'])) {

						$haber_id=$_POST['kayanyazi_id'];

						$ayarkaydet=$db->prepare("UPDATE site_kayanyazi SET
							kayanyazi_text=:kayanyazi_text,
							kayanyazi_link=:kayanyazi_link,
							kayanyazi_yenisekme=:kayanyazi_yenisekme
							WHERE kayanyazi_id={$_POST['kayanyazi_id']}");

						$update=$ayarkaydet->execute(array(
							'kayanyazi_text' => $_POST['kayanyazi_text'],
							'kayanyazi_link' => $_POST['kayanyazi_link'],
							'kayanyazi_yenisekme' => $_POST['kayanyazi_yenisekme']
							));


						if ($update) {

							Header("Location:../admin/admin/duyurular?durum=ok");

						} else {

							Header("Location:../admin/admin/duyurular?durum=no");
						}

					}



					if (isset($_POST['odemeyontemiekle'])) {



						$ayarkaydet=$db->prepare("INSERT INTO site_odemeyontemi SET
							odemeyontemi_basik=:odemeyontemi_basik,
							odemeyontemi_altyapi=:odemeyontemi_altyapi,
							odemeyontemi_tur=:odemeyontemi_tur
						");

						$insert=$ayarkaydet->execute(array(
							'odemeyontemi_basik' => $_POST['odemeyontemi_basik'],
							'odemeyontemi_altyapi' => $_POST['odemeyontemi_altyapi'],
							'odemeyontemi_tur' => $_POST['odemeyontemi_tur']
							));


						if ($insert) {

							Header("Location:../admin/admin/odeme-yontemleri?durum=ok");

						} else {

							Header("Location:../admin/admin/odeme-yontemleri?durum=no");
						}

					}














					if (isset($_POST['destekicerikmesajgonder'])) {



						$ayarkaydet=$db->prepare("INSERT INTO site_desteksohbet SET
							desteksohbet_destekid=:desteksohbet_destekid,
							desteksohbet_mesaj=:desteksohbet_mesaj,
							desteksohbet_gonderenid=:desteksohbet_gonderenid
						");

						$insert=$ayarkaydet->execute(array(
							'desteksohbet_destekid' => $_POST['destekid'],
							'desteksohbet_mesaj' => $_POST['mesaj'],
							'desteksohbet_gonderenid' => $_POST['user']
							));


						if ($insert) {

							$ayarkaydet2=$db->prepare("UPDATE site_destek SET
								destek_durum=:destek_durum
								WHERE destek_id={$_POST['destekid']}");

							$update=$ayarkaydet2->execute(array(
								'destek_durum' => "1"
								));

							Header("Location:../destegin/icerigi/".$_POST['destekid']);

						} else {

							Header("Location:../destegin/icerigi/".$_POST['destekid']."?hata_ok");
						}

					}




					if (isset($_POST['destekadminyanityaz'])) {


								$ayarkaydet=$db->prepare("INSERT INTO site_desteksohbet SET
									desteksohbet_destekid=:desteksohbet_destekid,
									desteksohbet_mesaj=:desteksohbet_mesaj,
									desteksohbet_gonderenid=:desteksohbet_gonderenid,
										desteksohbet_admin=:desteksohbet_admin
								");

								$insert=$ayarkaydet->execute(array(
									'desteksohbet_destekid' => $_POST['destekid'],
									'desteksohbet_mesaj' => $_POST['yanit'],
									'desteksohbet_gonderenid' => "00",
									'desteksohbet_admin' => "1"
									));


								if ($insert) {

									$ayarkaydet2=$db->prepare("UPDATE site_destek SET
										destek_durum=:destek_durum
										WHERE destek_id={$_POST['destekid']}");

									$update=$ayarkaydet2->execute(array(
										'destek_durum' => "2"
										));

									Header("Location:../admin/admin/destekgoruntule.php?destek_id=".$_POST['destekid']);

								} else {

									Header("Location:../admin/admin/destekgoruntule.php?destek_id=".$_POST['destekid']."?hata_ok");
								}
					}




















					if (isset($_POST['odemeyontemiduzenle'])) {

						$haber_id=$_POST['odemeyontemi_id'];

						$ayarkaydet=$db->prepare("UPDATE site_odemeyontemi SET
							odemeyontemi_basik=:odemeyontemi_basik,
							odemeyontemi_altyapi=:odemeyontemi_altyapi,
							odemeyontemi_tur=:odemeyontemi_tur
							WHERE odemeyontemi_id={$_POST['odemeyontemi_id']}");

						$update=$ayarkaydet->execute(array(
							'odemeyontemi_basik' => $_POST['odemeyontemi_basik'],
							'odemeyontemi_altyapi' => $_POST['odemeyontemi_altyapi'],
							'odemeyontemi_tur' => $_POST['odemeyontemi_tur']
							));


						if ($update) {

							Header("Location:../admin/admin/odeme-yontemleri?durum=ok");

						} else {

							Header("Location:../admin/admin/odeme-yontemleri?durum=no");
						}

					}

					if (isset($_POST['dosyaduzenle'])) {

						$haber_id=$_POST['dosyaindirme_id'];

						$ayarkaydet=$db->prepare("UPDATE site_dosyaindirme SET
							dosyaindirme_adi=:dosyaindirme_adi,
							dosyaindirme_indirmeurl=:dosyaindirme_indirmeurl,
							dosyaindirme_dosyaaciklama=:dosyaindirme_dosyaaciklama
							WHERE dosyaindirme_id={$_POST['dosyaindirme_id']}");

						$update=$ayarkaydet->execute(array(
							'dosyaindirme_adi' => $_POST['dosyaindirme_adi'],
							'dosyaindirme_indirmeurl' => $_POST['dosyaindirme_indirmeurl'],
							'dosyaindirme_dosyaaciklama' => $_POST['editor1']
							));


						if ($update) {

							Header("Location:../admin/admin/dosyalar.php?durum=ok");

						} else {

							Header("Location:../admin/admin/dosyalar.php?durum=no");
						}

					}

					if (isset($_POST['sunucuduzenle'])) {

						$haber_id=$_POST['sunucu_id'];

						$ayarkaydet=$db->prepare("UPDATE site_sunucu SET
							sunucu_ip=:sunucu_ip,
							sunucu_port=:sunucu_port,
							sunucu_konsolport=:sunucu_konsolport,
							sunucu_konsolsifre=:sunucu_konsolsifre,
							sunucu_isim=:sunucu_isim,
							sunucu_resim=:sunucu_resim
							WHERE sunucu_id={$_POST['sunucu_id']}");

						$update=$ayarkaydet->execute(array(
							'sunucu_ip' => $_POST['sunucu_ip'],
							'sunucu_port' => $_POST['sunucu_port'],
							'sunucu_konsolport' => $_POST['sunucu_konsolport'],
							'sunucu_konsolsifre' => $_POST['sunucu_konsolsifre'],
							'sunucu_isim' => $_POST['sunucu_isim'],
							'sunucu_resim' => $_POST['sunucu_resim']
							));


						if ($update) {

							Header("Location:../admin/admin/sunucular.php?sunucu_id=$haber_id&durum=ok");

						} else {

							Header("Location:../admin/admin/sunucular.php?sunucu_id=$haber_id&durum=no");
						}

					}














										if (isset($_POST['eloboostfiyatduzenle'])) {

											$haber_id=$_POST['valorantelofiyat_id'];

											$ayarkaydet=$db->prepare("UPDATE bolfps_lvalorantelofiyat SET
												valorantelofiyat_demir=:valorantelofiyat_demir,
												valorantelofiyat_bronz=:valorantelofiyat_bronz,
												valorantelofiyat_gumus=:valorantelofiyat_gumus,
												valorantelofiyat_altin=:valorantelofiyat_altin,
												valorantelofiyat_platin=:valorantelofiyat_platin,
												valorantelofiyat_elmas=:valorantelofiyat_elmas,
													valorantelofiyat_olumsuzluk=:valorantelofiyat_olumsuzluk,
														valorantelofiyat_isiyan=:valorantelofiyat_isiyan,
															valorantelofiyat_indirimdurum=:valorantelofiyat_indirimdurum,
																valorantelofiyat_indirim=:valorantelofiyat_indirim
												WHERE valorantelofiyat_id={$_POST['valorantelofiyat_id']}");

											$update=$ayarkaydet->execute(array(
												'valorantelofiyat_demir' => $_POST['valorantelofiyat_demir'],
												'valorantelofiyat_bronz' => $_POST['valorantelofiyat_bronz'],
												'valorantelofiyat_gumus' => $_POST['valorantelofiyat_gumus'],
												'valorantelofiyat_altin' => $_POST['valorantelofiyat_altin'],
												'valorantelofiyat_platin' => $_POST['valorantelofiyat_platin'],
												'valorantelofiyat_elmas' => $_POST['valorantelofiyat_elmas'],
												'valorantelofiyat_olumsuzluk' => $_POST['valorantelofiyat_olumsuzluk'],
												'valorantelofiyat_isiyan' => $_POST['valorantelofiyat_isiyan'],
												'valorantelofiyat_indirimdurum' => $_POST['valorantelofiyat_indirimdurum'],
												'valorantelofiyat_indirim' => $_POST['valorantelofiyat_indirim']

												));


											if ($update) {

												Header("Location:../admin/admin/veloboostfiyat?durum=ok");

											} else {

												Header("Location:../admin/admin/veloboostfiyat?durum=no");
											}

										}







										if (isset($_POST['challengerboostfiyatduzenle'])) {

											$haber_id=$_POST['winboost_id'];

											$ayarkaydet=$db->prepare("UPDATE bolfps_challengerboostfiyat SET
												challengerboostfiyat_elofiyat=:challengerboostfiyat_elofiyat,
							challengerboostfiyat_indirimdurum=:challengerboostfiyat_indirimdurum,
								challengerboostfiyat_indirim=:challengerboostfiyat_indirim

												WHERE challengerboostfiyat_id={$_POST['challengerboostfiyat_id']}");

											$update=$ayarkaydet->execute(array(
												'challengerboostfiyat_elofiyat' => $_POST['challengerboostfiyat_elofiyat'],
												'challengerboostfiyat_indirimdurum' => $_POST['challengerboostfiyat_indirimdurum'],

												'challengerboostfiyat_indirim' => $_POST['challengerboostfiyat_indirim']


												));


											if ($update) {

												Header("Location:../admin/admin/challengerfiyat?durum=ok");

											} else {

												Header("Location:../admin/admin/challengerfiyat?durum=no");
											}

										}




										if (isset($_POST['winboostduzenle'])) {

											$haber_id=$_POST['winboost_id'];

											$ayarkaydet=$db->prepare("UPDATE bolfps_winboost SET
												winboost_demir=:winboost_demir,
												winboost_bronz=:winboost_bronz,
												winboost_gumus=:winboost_gumus,
												winboost_altin=:winboost_altin,
												winboost_platin=:winboost_platin,
												winboost_elmas=:winboost_elmas,

															winboost_ustalik=:winboost_ustalik,
																winboost_indirimdurum=:winboost_indirimdurum,
																winboost_indirim=:winboost_indirim

												WHERE winboost_id={$_POST['winboost_id']}");

											$update=$ayarkaydet->execute(array(
												'winboost_demir' => $_POST['winboost_demir'],
												'winboost_bronz' => $_POST['winboost_bronz'],
												'winboost_gumus' => $_POST['winboost_gumus'],
												'winboost_altin' => $_POST['winboost_altin'],
												'winboost_platin' => $_POST['winboost_platin'],
												'winboost_elmas' => $_POST['winboost_elmas'],

												'winboost_ustalik' => $_POST['winboost_ustalik'],
												'winboost_indirimdurum' => $_POST['winboost_indirimdurum'],
												'winboost_indirim' => $_POST['winboost_indirim']


												));


											if ($update) {

												Header("Location:../admin/admin/winboostfiyat?durum=ok");

											} else {

												Header("Location:../admin/admin/winboostfiyat?durum=no");
											}

										}



										if (isset($_POST['valoduofiyat'])) {

											$haber_id=$_POST['valorantduoboostfiyat_id'];

											$ayarkaydet=$db->prepare("UPDATE bolfps_valorantduoboostfiyat SET
												valorantduoboostfiyat_demir=:valorantduoboostfiyat_demir,
												valorantduoboostfiyat_bronz=:valorantduoboostfiyat_bronz,
												valorantduoboostfiyat_gumus=:valorantduoboostfiyat_gumus,
												valorantduoboostfiyat_altin=:valorantduoboostfiyat_altin,
												valorantduoboostfiyat_platin=:valorantduoboostfiyat_platin,
												valorantduoboostfiyat_elmas=:valorantduoboostfiyat_elmas,
												valorantduoboostfiyat_olumsuzluk=:valorantduoboostfiyat_olumsuzluk,
												valorantduoboostfiyat_isiyan=:valorantduoboostfiyat_isiyan,

																valorantduoboostfiyat_indirimdurum=:valorantduoboostfiyat_indirimdurum,
																valorantduoboostfiyat_indirim=:valorantduoboostfiyat_indirim

												WHERE valorantduoboostfiyat_id={$_POST['valorantduoboostfiyat_id']}");

											$update=$ayarkaydet->execute(array(
												'valorantduoboostfiyat_demir' => $_POST['valorantduoboostfiyat_demir'],
												'valorantduoboostfiyat_bronz' => $_POST['valorantduoboostfiyat_bronz'],
												'valorantduoboostfiyat_gumus' => $_POST['valorantduoboostfiyat_gumus'],
												'valorantduoboostfiyat_altin' => $_POST['valorantduoboostfiyat_altin'],
												'valorantduoboostfiyat_platin' => $_POST['valorantduoboostfiyat_platin'],
												'valorantduoboostfiyat_elmas' => $_POST['valorantduoboostfiyat_elmas'],
												'valorantduoboostfiyat_olumsuzluk' => $_POST['valorantduoboostfiyat_olumsuzluk'],
												'valorantduoboostfiyat_isiyan' => $_POST['valorantduoboostfiyat_isiyan'],


												'valorantduoboostfiyat_indirimdurum' => $_POST['valorantduoboostfiyat_indirimdurum'],
												'valorantduoboostfiyat_indirim' => $_POST['valorantduoboostfiyat_indirim']


												));


											if ($update) {

												Header("Location:../admin/admin/vduoboostfiyat?durum=ok");

											} else {

												Header("Location:../admin/admin/vduoboostfiyat?durum=no");
											}

										}

										if (isset($_POST['ilk5fiyat'])) {

											$haber_id=$_POST['ilk5macfiyat_id'];

											$ayarkaydet=$db->prepare("UPDATE bolfps_ilk5macfiyat SET
												ilk5macfiyat_demir=:ilk5macfiyat_demir,
												ilk5macfiyat_bronz=:ilk5macfiyat_bronz,
												ilk5macfiyat_gumus=:ilk5macfiyat_gumus,
												ilk5macfiyat_altin=:ilk5macfiyat_altin,
												ilk5macfiyat_platin=:ilk5macfiyat_platin,
												ilk5macfiyat_elmas=:ilk5macfiyat_elmas,
												ilk5macfiyat_olumsuzluk=:ilk5macfiyat_olumsuzluk,
												ilk5macfiyat_isiyan=:ilk5macfiyat_isiyan,

																ilk5macfiyat_indirimdurum=:ilk5macfiyat_indirimdurum,
																ilk5macfiyat_indirim=:ilk5macfiyat_indirim

												WHERE ilk5macfiyat_id={$_POST['ilk5macfiyat_id']}");

											$update=$ayarkaydet->execute(array(
												'ilk5macfiyat_demir' => $_POST['ilk5macfiyat_demir'],
												'ilk5macfiyat_bronz' => $_POST['ilk5macfiyat_bronz'],
												'ilk5macfiyat_gumus' => $_POST['ilk5macfiyat_gumus'],
												'ilk5macfiyat_altin' => $_POST['ilk5macfiyat_altin'],
												'ilk5macfiyat_platin' => $_POST['ilk5macfiyat_platin'],
												'ilk5macfiyat_elmas' => $_POST['ilk5macfiyat_elmas'],
												'ilk5macfiyat_olumsuzluk' => $_POST['ilk5macfiyat_olumsuzluk'],
												'ilk5macfiyat_isiyan' => $_POST['ilk5macfiyat_isiyan'],


												'ilk5macfiyat_indirimdurum' => $_POST['ilk5macfiyat_indirimdurum'],
												'ilk5macfiyat_indirim' => $_POST['ilk5macfiyat_indirim']


												));


											if ($update) {

												Header("Location:../admin/admin/vilk5macfiyat?durum=ok");

											} else {

												Header("Location:../admin/admin/vilk5macfiyat?durum=no");
											}

										}




















																														if (isset($_POST['ilk10macfiyatduzenle'])) {

																															$haber_id=$_POST['ilk10macfiyat_id'];

																															$ayarkaydet=$db->prepare("UPDATE bolfps_ilk10macfiyat SET
																																ilk10macfiyat_demir=:ilk10macfiyat_demir,
																																ilk10macfiyat_bronz=:ilk10macfiyat_bronz,
																																ilk10macfiyat_gumus=:ilk10macfiyat_gumus,
																																ilk10macfiyat_altin=:ilk10macfiyat_altin,
																																ilk10macfiyat_platin=:ilk10macfiyat_platin,
																																ilk10macfiyat_elmas=:ilk10macfiyat_elmas,

																																			ilk10macfiyat_ustalik=:ilk10macfiyat_ustalik,
																																				ilk10macfiyat_indirimdurum=:ilk10macfiyat_indirimdurum,
																																				ilk10macfiyat_indirim=:ilk10macfiyat_indirim

																																WHERE ilk10macfiyat_id={$_POST['ilk10macfiyat_id']}");

																															$update=$ayarkaydet->execute(array(
																																'ilk10macfiyat_demir' => $_POST['ilk10macfiyat_demir'],
																																'ilk10macfiyat_bronz' => $_POST['ilk10macfiyat_bronz'],
																																'ilk10macfiyat_gumus' => $_POST['ilk10macfiyat_gumus'],
																																'ilk10macfiyat_altin' => $_POST['ilk10macfiyat_altin'],
																																'ilk10macfiyat_platin' => $_POST['ilk10macfiyat_platin'],
																																'ilk10macfiyat_elmas' => $_POST['ilk10macfiyat_elmas'],

																																'ilk10macfiyat_ustalik' => $_POST['ilk10macfiyat_ustalik'],
																																'ilk10macfiyat_indirimdurum' => $_POST['ilk10macfiyat_indirimdurum'],
																																'ilk10macfiyat_indirim' => $_POST['ilk10macfiyat_indirim']


																																));


																															if ($update) {

																																Header("Location:../admin/admin/ilk10macfiyat?durum=ok");

																															} else {

																																Header("Location:../admin/admin/ilk10macfiyat?durum=no");
																															}

																														}


																				if (isset($_POST['eloboostfiyatduzenlev'])) {

																					$haber_id=$_POST['olelofiyat_id'];

																					$ayarkaydet=$db->prepare("UPDATE bolfps_lolelofiyat SET
																						olelofiyat_demir=:olelofiyat_demir,
																						olelofiyat_bronz=:olelofiyat_bronz,
																						olelofiyat_gumus=:olelofiyat_gumus,
																						olelofiyat_altin=:olelofiyat_altin,
																						olelofiyat_platin=:olelofiyat_platin,
																						olelofiyat_elmas=:olelofiyat_elmas,

																									lolelofiyat_ustalik=:lolelofiyat_ustalik,
																										olelofiyat_indirimdurum=:olelofiyat_indirimdurum,
																										olelofiyat_indirim=:olelofiyat_indirim

																						WHERE olelofiyat_id={$_POST['olelofiyat_id']}");

																					$update=$ayarkaydet->execute(array(
																						'olelofiyat_demir' => $_POST['olelofiyat_demir'],
																						'olelofiyat_bronz' => $_POST['olelofiyat_bronz'],
																						'olelofiyat_gumus' => $_POST['olelofiyat_gumus'],
																						'olelofiyat_altin' => $_POST['olelofiyat_altin'],
																						'olelofiyat_platin' => $_POST['olelofiyat_platin'],
																						'olelofiyat_elmas' => $_POST['olelofiyat_elmas'],

																						'lolelofiyat_ustalik' => $_POST['lolelofiyat_ustalik'],
																						'olelofiyat_indirimdurum' => $_POST['olelofiyat_indirimdurum'],
																						'olelofiyat_indirim' => $_POST['olelofiyat_indirim']


																						));


																					if ($update) {

																						Header("Location:../admin/admin/eloboostfiyat?durum=ok");

																					} else {

																						Header("Location:../admin/admin/eloboostfiyat?durum=no");
																					}

																				}

																				if (isset($_POST['lduoboostfiyat'])) {

																					$haber_id=$_POST['lolduofiyat_id'];

																					$ayarkaydet=$db->prepare("UPDATE bolfps_lolduofiyat SET
																						lolduofiyat_demir=:lolduofiyat_demir,
																						lolduofiyat_bronz=:lolduofiyat_bronz,
																						lolduofiyat_gumus=:lolduofiyat_gumus,
																						lolduofiyat_altin=:lolduofiyat_altin,
																						lolduofiyat_platin=:lolduofiyat_platin,
																						lolduofiyat_elmas=:lolduofiyat_elmas,

																									lolduofiyat_ustalik=:lolduofiyat_ustalik,
																										lolduofiyat_indirimdurum=:lolduofiyat_indirimdurum,
																										lolduofiyat_indirim=:lolduofiyat_indirim

																						WHERE lolduofiyat_id={$_POST['lolduofiyat_id']}");

																					$update=$ayarkaydet->execute(array(
																						'lolduofiyat_demir' => $_POST['lolduofiyat_demir'],
																						'lolduofiyat_bronz' => $_POST['lolduofiyat_bronz'],
																						'lolduofiyat_gumus' => $_POST['lolduofiyat_gumus'],
																						'lolduofiyat_altin' => $_POST['lolduofiyat_altin'],
																						'lolduofiyat_platin' => $_POST['lolduofiyat_platin'],
																						'lolduofiyat_elmas' => $_POST['lolduofiyat_elmas'],

																						'lolduofiyat_ustalik' => $_POST['lolduofiyat_ustalik'],
																						'lolduofiyat_indirimdurum' => $_POST['lolduofiyat_indirimdurum'],
																						'lolduofiyat_indirim' => $_POST['lolduofiyat_indirim']


																						));


																					if ($update) {

																						Header("Location:../admin/admin/duoboostfiyat?durum=ok");

																					} else {

																						Header("Location:../admin/admin/duoboostfiyat?durum=no");
																					}

																				}



					if (isset($_POST['eloboostsiparisduzenle'])) {

						$haber_id=$_POST['eloboostsiparis_id'];

						$ayarkaydet=$db->prepare("UPDATE bolfps_eloboostsiparis SET
							eloboostsiparis_durum=:eloboostsiparis_durum
							WHERE eloboostsiparis_id={$_POST['eloboostsiparis_id']}");

						$update=$ayarkaydet->execute(array(
							'eloboostsiparis_durum' => $_POST['eloboostsiparis_durum']
							));


						if ($update) {

							Header("Location:../admin/admin/eloboostsiparisg.php?eloboostsiparis_id=$haber_id&durum=ok");

						} else {

							Header("Location:../admin/admin/eloboostsiparisg?eloboostsiparis_id=$haber_id&durum=no");
						}

					}
					if (isset($_POST['normalmacsiparisduzenle'])) {

						$haber_id=$_POST['normalmacsiparis_id'];

						$ayarkaydet=$db->prepare("UPDATE bolfps_normalmacsiparis SET
							normalmacsiparis_durum=:normalmacsiparis_durum
							WHERE normalmacsiparis_id={$_POST['normalmacsiparis_id']}");

						$update=$ayarkaydet->execute(array(
							'normalmacsiparis_durum' => $_POST['normalmacsiparis_durum']
							));


						if ($update) {

							Header("Location:../admin/admin/normalmacsiparisg.php?normalmacsiparis_id=$haber_id&durum=ok");

						} else {

							Header("Location:../admin/admin/normalmacsiparisg?normalmacsiparis_id=$haber_id&durum=no");
						}

					}
					if (isset($_POST['valorantelosiparisduzenle'])) {

						$haber_id=$_POST['valorantelosiparis_id'];

						$ayarkaydet=$db->prepare("UPDATE bolfps_valorantelosiparis SET
							valorantelosiparis_durum=:valorantelosiparis_durum
							WHERE valorantelosiparis_id={$_POST['valorantelosiparis_id']}");

						$update=$ayarkaydet->execute(array(
							'valorantelosiparis_durum' => $_POST['valorantelosiparis_durum']
							));


						if ($update) {

							Header("Location:../admin/admin/valorantelosiparisg.php?valorantelosiparis_id=$haber_id&durum=ok");

						} else {

							Header("Location:../admin/admin/valorantelosiparisg?valorantelosiparis_id=$haber_id&durum=no");
						}

					}
					if (isset($_POST['valorantduoboostsiparisduzenle'])) {

						$haber_id=$_POST['valorantduoboostsiparis_id'];

						$ayarkaydet=$db->prepare("UPDATE bolfps_valorantduoboostsiparis SET
							valorantduoboostsiparis_durum=:valorantduoboostsiparis_durum
							WHERE valorantduoboostsiparis_id={$_POST['valorantduoboostsiparis_id']}");

						$update=$ayarkaydet->execute(array(
							'valorantduoboostsiparis_durum' => $_POST['valorantduoboostsiparis_durum']
							));


						if ($update) {

							Header("Location:../admin/admin/valorantduoboostsiparisg.php?valorantduoboostsiparis_id=$haber_id&durum=ok");

						} else {

							Header("Location:../admin/admin/valorantduoboostsiparisg?valorantduoboostsiparis_id=$haber_id&durum=no");
						}

					}
					if (isset($_POST['challengerboostsiparis_id'])) {

						$haber_id=$_POST['challengerboostsiparis_id'];

						$ayarkaydet=$db->prepare("UPDATE bolfps_challengerboostsiparis SET
							challengerboostsiparis_durum=:challengerboostsiparis_durum
							WHERE challengerboostsiparis_id={$_POST['challengerboostsiparis_id']}");

						$update=$ayarkaydet->execute(array(
							'challengerboostsiparis_durum' => $_POST['challengerboostsiparis_durum']
							));


						if ($update) {

							Header("Location:../admin/admin/challengerboostsiparisg.php?challengerboostsiparis_id=$haber_id&durum=ok");

						} else {

							Header("Location:../admin/admin/challengerboostsiparisg?challengerboostsiparis_id=$haber_id&durum=no");
						}

					}
					if (isset($_POST['ilk10siparisduzenle'])) {

						$haber_id=$_POST['ilk10macsiparis_id'];

						$ayarkaydet=$db->prepare("UPDATE bolfps_ilk10macsiparis SET
							ilk10macsiparis_durum=:ilk10macsiparis_durum
							WHERE ilk10macsiparis_id={$_POST['ilk10macsiparis_id']}");

						$update=$ayarkaydet->execute(array(
							'ilk10macsiparis_durum' => $_POST['ilk10macsiparis_durum']
							));


						if ($update) {

							Header("Location:../admin/admin/ilk10macsiparisg.php?ilk10macsiparis_id=$haber_id&durum=ok");

						} else {

							Header("Location:../admin/admin/ilk10macsiparisg?ilk10macsiparis_id=$haber_id&durum=no");
						}

					}
					if (isset($_POST['ilk5siparisduzenle'])) {

						$haber_id=$_POST['ilk5macsiparis_id'];

						$ayarkaydet=$db->prepare("UPDATE bolfps_ilk5macsiparis SET
							ilk5macsiparis_durum=:ilk5macsiparis_durum
							WHERE ilk5macsiparis_id={$_POST['ilk5macsiparis_id']}");

						$update=$ayarkaydet->execute(array(
							'ilk5macsiparis_durum' => $_POST['ilk5macsiparis_durum']
							));


						if ($update) {

							Header("Location:../admin/admin/ilk5macsiparisg.php?ilk5macsiparis_id=$haber_id&durum=ok");

						} else {

							Header("Location:../admin/admin/ilk5macsiparisg?ilk5macsiparis_id=$haber_id&durum=no");
						}

					}
					if (isset($_POST['duoboostsiparisduzenle'])) {

						$haber_id=$_POST['duoboostsiparis_id'];

						$ayarkaydet=$db->prepare("UPDATE bolfps_duoboostsiparis SET
							duoboostsiparis_durum=:duoboostsiparis_durum
							WHERE duoboostsiparis_id={$_POST['duoboostsiparis_id']}");

						$update=$ayarkaydet->execute(array(
							'duoboostsiparis_durum' => $_POST['duoboostsiparis_durum']
							));


						if ($update) {

							Header("Location:../admin/admin/duoboostsiparisg.php?duoboostsiparis_id=$haber_id&durum=ok");

						} else {

							Header("Location:../admin/admin/duoboostsiparisg?duoboostsiparis_id=$haber_id&durum=no");
						}

					}
					if (isset($_POST['winboostsiparisduzenle'])) {

						$haber_id=$_POST['winboostsiparis_id'];

						$ayarkaydet=$db->prepare("UPDATE bolfps_winboostsiparis SET
							winboostsiparis_durum=:winboostsiparis_durum
							WHERE winboostsiparis_id={$_POST['winboostsiparis_id']}");

						$update=$ayarkaydet->execute(array(
							'winboostsiparis_durum' => $_POST['winboostsiparis_durum']
							));


						if ($update) {

							Header("Location:../admin/admin/winboostsiparisg.php?winboostsiparis_id=$haber_id&durum=ok");

						} else {

							Header("Location:../admin/admin/winboostsiparisg?winboostsiparis_id=$haber_id&durum=no");
						}

					}
					if (isset($_POST['urunduzenle'])) {

						$urun_id=$_POST['urun_id'];

						$ayarkaydet=$db->prepare("UPDATE site_urun SET
							urun_foto=:urun_foto,
							urun_baslik=:urun_baslik,
							urun_sunucu=:urun_sunucu,
							urun_stok=:urun_stok,
							urun_etiket=:urun_etiket,
							urun_fiyat=:urun_fiyat,
							urun_sunucukategori=:urun_sunucukategori,
								urun_komut=:urun_komut,
								urun_komut2=:urun_komut2,
							urun_ozellikler=:editor1,
							urun_indirimsizfiyat=:urun_indirimsizfiyat,
							urun_genelaciklama=:editor2
							WHERE urun_id={$_POST['urun_id']}");

						$update=$ayarkaydet->execute(array(
							'urun_foto' => $_POST['urun_foto'],
							'urun_baslik' => $_POST['urun_baslik'],
							'urun_sunucu' => $_POST['urun_sunucu'],
							'urun_stok' => $_POST['urun_stok'],
							'urun_etiket' => $_POST['urun_etiket'],
							'urun_fiyat' => $_POST['urun_fiyat'],
									'urun_sunucukategori' => $_POST['urun_sunucukategori'],
								'urun_komut' => $_POST['urun_komut'],
									'urun_komut2' => $_POST['urun_komut2'],
							'editor1' => $_POST['editor1'],
								'urun_indirimsizfiyat' => $_POST['urun_indirimsizfiyat'],
							'editor2' => $_POST['editor2']
							));


						if ($update) {

							Header("Location:../admin/admin/magazaurunler.php?durum=ok");

						} else {

							Header("Location:../admin/admin/magazaurunler.php?durum=no");
						}

					}

					if (isset($_POST['hediyeduzenle'])) {

						$urun_id=$_POST['urunkupon_id'];

						$ayarkaydet=$db->prepare("UPDATE site_urunkupon SET
							urunkupon_ad=:urunkupon_ad,
							urunkupon_sunucuid=:urunkupon_sunucuid,
							urunkupon_urunid=:urunkupon_urunid,
							urunkupon_adet=:urunkupon_adet,
							urunkupon_kalanadet=:urunkupon_kalanadet
							WHERE urunkupon_id={$_POST['urunkupon_id']}");

						$update=$ayarkaydet->execute(array(
							'urunkupon_ad' => $_POST['urunkupon_ad'],
							'urunkupon_sunucuid' => $_POST['urunkupon_sunucuid'],
							'urunkupon_urunid' => $_POST['urunkupon_urunid'],
							'urunkupon_adet' => $_POST['urunkupon_adet'],
							'urunkupon_kalanadet' => $_POST['urunkupon_kalanadet']
							));


						if ($update) {

							Header("Location:../admin/admin/hediyeler.php?durum=ok");

						} else {

							Header("Location:../admin/admin/hediyeler.php?durum=no");
						}

					}


					if (isset($_POST['bankaekle'])) {

						$ayarekle=$db->prepare("INSERT INTO site_eft SET
							eft_bankaadi=:eft_bankaadi,
							eft_ibanno=:eft_ibanno,
							eft_hesapsahip=:eft_hesapsahip,
							eft_subeno=:eft_subeno,
							eft_durum=:eft_durum
							");

						$insert=$ayarekle->execute(array(
							'eft_bankaadi' => $_POST['eft_bankaadi'],
							'eft_ibanno' => $_POST['eft_ibanno'],
							'eft_hesapsahip' => $_POST['eft_hesapsahip'],
							'eft_subeno' => $_POST['eft_subeno'],
							'eft_durum' => $_POST['eft_durum']
							));



						if ($insert) {

							Header("Location:../admin/admin/eftodeme.php?yenibanka=ok");

						} else {

							Header("Location:../admin/admin/eftodeme.php?yenibanka=no");
						}

					}




					if (isset($_POST['urunekle'])) {

						$ayarekle=$db->prepare("INSERT INTO site_urun SET
							urun_foto=:urun_foto,
							urun_baslik=:urun_baslik,
							urun_sunucu=:urun_sunucu,
							urun_stok=:urun_stok,
							urun_etiket=:urun_etiket,
							urun_fiyat=:urun_fiyat,
							urun_sunucukategori=:urun_sunucukategori,
								urun_komut=:urun_komut,
								urun_komut2=:urun_komut2,
							urun_ozellikler=:editor1,
							urun_indirimsizfiyat=:urun_indirimsizfiyat,
							urun_genelaciklama=:editor2
							");

						$insert=$ayarekle->execute(array(
							'urun_foto' => $_POST['urun_foto'],
							'urun_baslik' => $_POST['urun_baslik'],
							'urun_sunucu' => $_POST['urun_sunucu'],
							'urun_stok' => $_POST['urun_stok'],
							'urun_etiket' => $_POST['urun_etiket'],
							'urun_fiyat' => $_POST['urun_fiyat'],
									'urun_sunucukategori' => $_POST['urun_sunucukategori'],
								'urun_komut' => $_POST['urun_komut'],
									'urun_komut2' => $_POST['urun_komut2'],
							'editor1' => $_POST['editor1'],
								'urun_indirimsizfiyat' => $_POST['urun_indirimsizfiyat'],
							'editor2' => $_POST['editor2']
							));



						if ($insert) {

							Header("Location:../admin/admin/magazaurunler.php?yeniurun=ok");

						} else {

							Header("Location:../admin/admin/magazaurunler.php?yeniurun=no");
						}

					}

					if (isset($_POST['hediyekuponekle'])) {

						$ayarekle=$db->prepare("INSERT INTO site_urunkupon SET
							urunkupon_ad=:urunkupon_ad,
							urunkupon_sunucuid=:urunkupon_sunucuid,
							urunkupon_urunid=:urunkupon_urunid,
							urunkupon_adet=:urunkupon_adet,
							urunkupon_kalanadet=:urunkupon_kalanadet
							");

						$insert=$ayarekle->execute(array(
							'urunkupon_ad' => $_POST['urunkupon_ad'],
							'urunkupon_sunucuid' => $_POST['urunkupon_sunucuid'],
							'urunkupon_urunid' => $_POST['urunkupon_urunid'],
							'urunkupon_adet' => $_POST['urunkupon_adet'],
							'urunkupon_kalanadet' => $_POST['urunkupon_adet']
							));



						if ($insert) {

							Header("Location:../admin/admin/hediyeler.php?yenihediye=ok");

						} else {

							Header("Location:../admin/admin/hediyeler.php?yenihediye=no");
						}

					}

					if (isset($_POST['kullaniciekle'])) {

						$ayarekle=$db->prepare("INSERT INTO site_user SET
							user_ad=:user_ad,
							user_eposta=:user_eposta,
							user_username=:user_username,
							user_yas=:user_yas,
							user_discord=:user_discord,
							user_skype=:user_skype,
							user_kredi=:user_kredi,
							user_sifre=:user_sifre
							");

						$insert=$ayarekle->execute(array(
							'user_ad' => $_POST['user_ad'],
							'user_eposta' => $_POST['user_eposta'],
							'user_username' => $_POST['user_username'],
							'user_yas' => $_POST['user_yas'],
							'user_discord' => $_POST['user_discord'],
								'user_skype' => $_POST['user_skype'],
							'user_kredi' => $_POST['user_kredi'],
							'user_sifre' => md5($_POST['user_sifre'])
							));



						if ($insert) {

							Header("Location:../admin/admin/hesaplar.php?eklendi=ok");

						} else {

							Header("Location:../admin/admin/hesaplar.php?eklendi=no");
						}

					}

					if (isset($_POST['adminekle'])) {

						$ayarekle=$db->prepare("INSERT INTO site_admin SET
							admin_foto=:admin_foto,
							admin_isim=:admin_isim,
							admin_mail=:admin_mail,
							admin_rutbe=:admin_rutbe,
							admin_sifre=:admin_sifre
						");

						$insert=$ayarekle->execute(array(
							'admin_foto' => $_POST['admin_foto'],
							'admin_isim' => $_POST['admin_isim'],
							'admin_mail' => $_POST['admin_mail'],
							'admin_rutbe' => $_POST['admin_rutbe'],
							'admin_sifre' => md5($_POST['admin_sifre'])
							));



						if ($insert) {

							Header("Location:../admin/admin/adminler.php?eklendi=ok");

						} else {

							Header("Location:../admin/admin/adminler.php?eklendi=no");
						}

					}

					if (isset($_POST['sliderduzenle'])) {

						$slider_id=$_POST['slider_id'];

						$ayarkaydet=$db->prepare("UPDATE site_slider SET
							slider_foto=:slider_foto,
							slider_baslik=:slider_baslik,
							slider_icerik=:slider_icerik,
							slider_url=:slider_url
							WHERE slider_id={$_POST['slider_id']}");

						$update=$ayarkaydet->execute(array(
							'slider_foto' => $_POST['slider_foto'],
							'slider_baslik' => $_POST['slider_baslik'],
							'slider_icerik' => $_POST['slider_icerik'],
							'slider_url' => $_POST['slider_url']
							));


						if ($update) {

							Header("Location:../admin/admin/sliderlar?durum=ok");

						} else {

							Header("Location:../admin/admin/sliderlar?durum=no");
						}

					}

					if (isset($_POST['sliderekle'])) {

						$slidersor2=$db->prepare("SELECT * FROM site_slider ORDER BY slider_id DESC LIMIT 1");
						$slidersor2->execute();
						$slidersor2cek=$slidersor2->fetch(PDO::FETCH_ASSOC);
						$eklenecekdata;
						if ($slidersor2cek['slider_data'] == "") {
							$eklenecekdata = 0;
						}elseif ($slidersor2cek['slider_data'] != "") {
							$data = $slidersor2cek['slider_data'];

							$eklenecekdata = $data + 1;
						}

						$ayarekle=$db->prepare("INSERT INTO site_slider SET
							slider_foto=:slider_foto,
							slider_baslik=:slider_baslik,
							slider_icerik=:slider_icerik,
										slider_url=:slider_url,
										slider_data=:slider_data
							");

						$insert=$ayarekle->execute(array(
							'slider_foto' => $_POST['slider_foto'],
							'slider_baslik' => $_POST['slider_baslik'],
							'slider_icerik' => $_POST['slider_icerik'],
							'slider_url' => $_POST['slider_url'],
							'slider_data' => $eklenecekdata
							));



						if ($insert) {

							Header("Location:../admin/admin/sliderlar.php?eklendi=ok");

						} else {

							Header("Location:../admin/admin/sliderlar.php?eklendi=no");
						}

					}

					if (isset($_POST['menuduzenle'])) {

						$menu_id=$_POST['menu_id'];

						$ayarkaydet=$db->prepare("UPDATE site_menu SET
							menu_icon=:menu_icon,
							menu_isim=:menu_isim,
							menu_link=:menu_link
							WHERE menu_id={$_POST['menu_id']}");

						$update=$ayarkaydet->execute(array(
							'menu_icon' => $_POST['menu_icon'],
							'menu_isim' => $_POST['menu_isim'],
							'menu_link' => $_POST['menu_link']
							));


						if ($update) {

							Header("Location:../admin/admin/menu-duzenle.php?menu_id=$menu_id&durum=ok");

						} else {

							Header("Location:../admin/admin/menu-duzenle.php?menu_id=$menu_id&durum=no");
						}

					}

					if (isset($_POST['menuekle'])) {

						$ayarekle=$db->prepare("INSERT INTO site_menu SET
							menu_icon=:menu_icon,
							menu_isim=:menu_isim,
							menu_link=:menu_link
						");

						$insert=$ayarekle->execute(array(
							'menu_icon' => $_POST['menu_icon'],
							'menu_isim' => $_POST['menu_isim'],
							'menu_link' => $_POST['menu_link']
							));



						if ($insert) {

							Header("Location:../admin/admin/menuler.php?eklendi=ok");

						} else {

							Header("Location:../admin/admin/menuler.php?eklendi=no");
						}

					}



					if (isset($_POST['destekkaydet'])) {

						$ayarekle=$db->prepare("INSERT INTO site_destek SET
							destek_email=:destek_email,
							destek_adsoyad=:destek_adsoyad,
							destek_icerik=:destek_icerik
							");

						$insert=$ayarekle->execute(array(
							'destek_email' => $_POST['destek_email'],
							'destek_adsoyad' => $_POST['destek_adsoyad'],
							'destek_icerik' => $_POST['destek_icerik']
							));



						if ($insert) {

							Header("Location:../index.php?destekiletildi=ok");

						} else {

							Header("Location:../index.php?destekiletildi=no");
						}

					}



					if (isset($_POST['bakiyekuponguncelle'])) {


						$menu_id=$_POST['hediyekod_id'];

						//Tablo güncelleme işlemi kodları...
						$ayarkaydet=$db->prepare("UPDATE site_hediyekod SET
					         hediyekod_kod=:hediyekod_kod,
							hediyekod_hediyemiktar=:hediyekod_hediyemiktar,
							hediyekod_durum=:hediyekod_durum
							WHERE hediyekod_id={$_POST['hediyekod_id']}");

						$update=$ayarkaydet->execute(array(
					        'hediyekod_kod' => $_POST['hediyekod_kod'],
							'hediyekod_hediyemiktar' => $_POST['hediyekod_hediyemiktar'],
							'hediyekod_durum' => $_POST['hediyekod_durum']
							));


						if ($update) {

							header("Location:../admin/admin/magazakuponlar.php?bakiyekuponduzenle=ok");

						} else {

							header("Location:../admin/admin/magazakuponlar.php?bakiyekuponduzenle=no");
						}

					}

					if (isset($_POST['urunkuponguncelle'])) {


						$menu_id=$_POST['hediyekod_id'];

						//Tablo güncelleme işlemi kodları...
						$ayarkaydet=$db->prepare("UPDATE site_hediyekod SET
					         hediyekod_kod=:hediyekod_kod,
							hediyekod_hediyemiktar=:hediyekod_hediyemiktar,
							hediyekod_durum=:hediyekod_durum
							WHERE hediyekod_id={$_POST['hediyekod_id']}");

						$update=$ayarkaydet->execute(array(
					        'hediyekod_kod' => $_POST['hediyekod_kod'],
							'hediyekod_hediyemiktar' => $_POST['hediyekod_hediyemiktar'],
							'hediyekod_durum' => $_POST['hediyekod_durum']
							));


						if ($update) {

							header("Location:../admin/admin/urunkupon-duzenle.php?hediyekod_id=$menu_id&urunkuponguncelle=ok");

						} else {

							header("Location:../admin/admin/urunkupon-duzenle.php?hediyekod_id=$menu_id&urunkuponguncelle=no");
						}

					}



					if (isset($_POST['bankaguncelle'])) {


						$menu_id=$_POST['eft_id'];

						//Tablo güncelleme işlemi kodları...
						$ayarkaydet=$db->prepare("UPDATE site_eft SET
					         eft_bankaadi=:eft_bankaadi,
									 eft_ibanno=:eft_ibanno,
									 eft_hesapsahip=:eft_hesapsahip,
									 eft_subeno=:eft_subeno,
									 eft_durum=:eft_durum
									 WHERE eft_id={$_POST['eft_id']}");

									 $update=$ayarkaydet->execute(array(
					        'eft_bankaadi' => $_POST['eft_bankaadi'],
									'eft_ibanno' => $_POST['eft_ibanno'],
									'eft_hesapsahip' => $_POST['eft_hesapsahip'],
									'eft_subeno' => $_POST['eft_subeno'],
									'eft_durum' => $_POST['eft_durum']
							));


						if ($update) {

							header("Location:../admin/admin/eft-duzenle.php?eft_id=$menu_id&bankaduzenle=ok");

						} else {

							header("Location:../admin/admin/eft-duzenle.php?eft_id=$menu_id&bankaduzenle=no");
						}

					}



					if (isset($_POST['ininalguncelle'])) {


						$menu_id=$_POST['ininal_id'];

						//Tablo güncelleme işlemi kodları...
						$ayarkaydet=$db->prepare("UPDATE site_ininal SET
					         ininal_barkodno=:ininal_barkodno,
							ininal_durum=:ininal_durum
							WHERE ininal_id={$_POST['ininal_id']}");

						$update=$ayarkaydet->execute(array(
					        'ininal_barkodno' => $_POST['ininal_barkodno'],
							'ininal_durum' => $_POST['ininal_durum']
							));


						if ($update) {

							header("Location:../admin/admin/ininal-duzenle.php?ininal_id=$menu_id&ininalduzenle=ok");

						} else {

							header("Location:../admin/admin/ininal-duzenle.php?ininal_id=$menu_id&ininalduzenle=no");
						}

					}


					if (isset($_POST['bakiyekuponekle'])) {

						$ayarkaydet=$db->prepare("INSERT INTO site_hediyekod SET
									 hediyekod_kod=:hediyekod_kod,
							hediyekod_hediyemiktar=:hediyekod_hediyemiktar,
							hediyekod_durum=:hediyekod_durum
							");

						$insert=$ayarkaydet->execute(array(
									'hediyekod_kod' => $_POST['hediyekod_kod'],
							'hediyekod_hediyemiktar' => $_POST['hediyekod_hediyemiktar'],
							'hediyekod_durum' => $_POST['hediyekod_durum']
							));



						if ($insert) {

							Header("Location:../admin/admin/magazakuponlar.php?yenikupon=ok");

						} else {

							Header("Location:../admin/admin/magazakuponlar.php?yenikupon=no");
						}

					}







					if (isset($_POST['ininalekle'])) {

						$ayarkaydet=$db->prepare("INSERT INTO site_ininal SET
									 ininal_barkodno=:ininal_barkodno,
							ininal_durum=:ininal_durum
							");

						$insert=$ayarkaydet->execute(array(
									'ininal_barkodno' => $_POST['ininal_barkodno'],
							'ininal_durum' => $_POST['ininal_durum']
							));



						if ($insert) {

							Header("Location:../admin/admin/ininalodeme.php?yenikupon=ok");

						} else {

							Header("Location:../admin/admin/ininalodeme.php?yenikupon=no");
						}

					}



					if (isset($_POST['sunucuekle'])) {

						$ayarekle=$db->prepare("INSERT INTO site_sunucu SET
							sunucu_isim=:sunucu_isim,
							sunucu_ip=:sunucu_ip,
							sunucu_port=:sunucu_port,
							sunucu_konsolport=:sunucu_konsolport,
							sunucu_konsolsifre=:sunucu_konsolsifre
							");

						$insert=$ayarekle->execute(array(
							'sunucu_isim' => $_POST['sunucu_isim'],
							'sunucu_ip' => $_POST['sunucu_ip'],
							'sunucu_port' => $_POST['sunucu_port'],
							'sunucu_konsolport' => $_POST['sunucu_konsolport'],
							'sunucu_konsolsifre' => $_POST['sunucu_konsolsifre']
							));



						if ($insert) {

							Header("Location:../admin/admin/sunucu-sunucuekle.php?yenisunucu=ok");

						} else {

							Header("Location:../admin/admin/sunucu-sunucuekle.php?yenisunucu=no");
						}

					}


					if (isset($_POST['sunucuguncelle'])) {


						$menu_id=$_POST['sunucu_id'];

						//Tablo güncelleme işlemi kodları...
						$ayarekle=$db->prepare("UPDATE site_sunucu SET
							sunucu_isim=:sunucu_isim,
							sunucu_ip=:sunucu_ip,
							sunucu_port=:sunucu_port,
							sunucu_konsolport=:sunucu_konsolport,
							sunucu_konsolsifre=:sunucu_konsolsifre
							WHERE sunucu_id={$_POST['sunucu_id']}");

						$update=$ayarekle->execute(array(
							'sunucu_isim' => $_POST['sunucu_isim'],
							'sunucu_ip' => $_POST['sunucu_ip'],
							'sunucu_port' => $_POST['sunucu_port'],
							'sunucu_konsolport' => $_POST['sunucu_konsolport'],
							'sunucu_konsolsifre' => $_POST['sunucu_konsolsifre']
							));


						if ($update) {

							header("Location:../admin/admin/sunucu-duzenle.php?sunucu_id=$menu_id&sunucuduzenle=ok");

						} else {

							header("Location:../admin/admin/sunucu-duzenle.php?sunucu_id=$menu_id&sunucuduzenle=no");
						}

					}

					if (isset($_POST['haberekle'])) {

						$ayarekle=$db->prepare("INSERT INTO bolfps_haber SET
							haber_foto=:haber_foto,
							haber_baslik=:haber_baslik,
							haber_kategori=:haber_kategori,
							haber_sahip=:haber_sahip,
							haber_icerik=:haber_icerik
							");

						$insert=$ayarekle->execute(array(
							'haber_foto' => $_POST['haber_foto'],
							'haber_baslik' => $_POST['haber_baslik'],
							'haber_kategori' => $_POST['haber_kategori'],
							'haber_sahip' => $_POST['haber_sahip'],
							'haber_icerik' => $_POST['haber_icerik']
							));



						if ($insert) {

							Header("Location:../admin/admin/haber-haberler.php?durum=ok");

						} else {

							Header("Location:../admin/admin/haber-haberler.php?durum=no");
						}

					}












					if (isset($_POST['yorumgonder'])) {
						$haberyorumsor=$db->prepare("SELECT * FROM site_haber where haber_id=:id");
						$haberyorumsor->execute(array(
							'id'=>$_POST['yorum_blogid']
						));
						$haberyorumcek=$haberyorumsor->fetch(PDO::FETCH_ASSOC);
if (!$_POST['yorum_icerik'] == "") {



							$ayarekle=$db->prepare("INSERT INTO site_yorum SET
								yorum_username=:yorum_username,
								yorum_icerik=:yorum_icerik,
								yorum_durum=:yorum_durum,
								yorum_blogid=:yorum_blogid
								");

							$insert=$ayarekle->execute(array(
								'yorum_username' => $_POST['yorum_username'],
								'yorum_icerik' => $_POST['yorum_icerik'],
								'yorum_durum' => 0,
								'yorum_blogid' => $_POST['yorum_blogid']
								));



							if ($insert) {

								Header("Location: ../haber/".seo($haberyorumcek["haber_baslik"]).'/'.$haberyorumcek["haber_id"]."?yorum=ok");

							} else {

								Header("Location: ../haber/".seo($haberyorumcek["haber_baslik"]).'/'.$haberyorumcek["haber_id"]."?yorum=no");
							}
}else {
	Header("Location: ../haber/".seo($haberyorumcek["haber_baslik"]).'/'.$haberyorumcek["haber_id"]."?yorum=bos");

}

					}

































					if (isset($_POST['dosyaekle'])) {

						$ayarekle=$db->prepare("INSERT INTO site_dosyaindirme SET
							dosyaindirme_adi=:dosyaindirme_adi,
							dosyaindirme_indirmeurl=:dosyaindirme_indirmeurl,
							dosyaindirme_dosyaaciklama=:dosyaindirme_dosyaaciklama
							");

						$insert=$ayarekle->execute(array(
							'dosyaindirme_adi' => $_POST['dosyaindirme_adi'],
							'dosyaindirme_indirmeurl' => $_POST['dosyaindirme_indirmeurl'],
							'dosyaindirme_dosyaaciklama' => $_POST['editor1']
							));



						if ($insert) {

							Header("Location:../admin/admin/dosyalar.php?yenidosya=ok");

						} else {

							Header("Location:../admin/admin/dosyalar.php?yenidosya=no");
						}

					}

					if (isset($_POST['duyuruekle'])) {

						$ayarekle=$db->prepare("INSERT INTO site_kayanyazi SET
							kayanyazi_text=:kayanyazi_text,
							kayanyazi_link=:kayanyazi_link,
							kayanyazi_yenisekme=:kayanyazi_yenisekme
							");

						$insert=$ayarekle->execute(array(
							'kayanyazi_text' => $_POST['kayanyazi_text'],
							'kayanyazi_link' => $_POST['kayanyazi_link'],
							'kayanyazi_yenisekme' => $_POST['kayanyazi_yenisekme']
							));



						if ($insert) {

							Header("Location:../admin/admin/duyurular.php?yeniduyuru=ok");

						} else {

							Header("Location:../admin/admin/duyurular.php?yeniduyuru=no");
						}

					}


										if (isset($_POST['sayfaekle'])) {

											$ayarekle=$db->prepare("INSERT INTO site_sayfa SET
												sayfa_baslik=:sayfa_baslik,
												sayfa_icerik=:sayfa_icerik
												");

											$insert=$ayarekle->execute(array(
												'sayfa_baslik' => $_POST['sayfa_baslik'],
												'sayfa_icerik' => $_POST['editor1']
												));



											if ($insert) {

												Header("Location:../admin/admin/sayfalar.php?yenisayfa=ok");

											} else {

												Header("Location:../admin/admin/sayfalar.php?yenisayfa=no");
											}

										}

					if (isset($_POST['kredigonder'])) {
						$usernamesor=$db->prepare("SELECT * FROM site_user where user_username=:id");
						$usernamesor->execute(array(
							'id'=>$_POST['kredigecmis_userid']
						));
						$usernamecek=$usernamesor->fetch(PDO::FETCH_ASSOC);
						$usertoplamkredi = $usernamecek['user_kredi'] +  $_POST['kredigecmis_odeme'];
						$ayarkaydet=$db->prepare("UPDATE site_user SET
							user_kredi=:user_kredi
							WHERE users_id={$usernamecek['users_id']}");

						$update=$ayarkaydet->execute(array(
							'user_kredi' => $usertoplamkredi
							));



						if ($update) {

							$ayarekle2=$db->prepare("INSERT INTO site_kredigecmis SET
								kredigecmis_odeme=:kredigecmis_odeme,
								kredigecmis_tur=:kredigecmis_tur,
								kredigecmis_userid=:kredigecmis_userid
								");

							$insert2=$ayarekle2->execute(array(
								'kredigecmis_odeme' => $_POST['kredigecmis_odeme'],
								'kredigecmis_tur' => $_POST['kredigecmis_tur'],
								'kredigecmis_userid' => $usernamecek['users_id']
								));

								if ($insert2) {
									Header("Location:../admin/admin/magazakredigonder.php?gonderildi=ok");

								}else {
									Header("Location:../admin/admin/magazakredigonder.php?gonderildi=no");

								}

						} else {

							Header("Location:../admin/admin/magazakredigonder.php?hata=no");
						}

					}






					if (isset($_POST['esyagonder'])) {
						$usernamesor=$db->prepare("SELECT * FROM site_user where user_username=:id");
						$usernamesor->execute(array(
							'id'=>$_POST['marketgecmis_userid']
						));
						$usernamecek=$usernamesor->fetch(PDO::FETCH_ASSOC);

						$urunnamesor=$db->prepare("SELECT * FROM site_urun where urun_id=:id");
						$urunnamesor->execute(array(
							'id'=>$_POST['urun_id']
						));
						$urunnamecek=$urunnamesor->fetch(PDO::FETCH_ASSOC);

						$ayarekle=$db->prepare("INSERT INTO site_depo SET
							depo_urunbaslik=:depo_urunbaslik,
							depo_userid=:depo_userid,
							depo_sunucuid=:depo_sunucuid
							");

						$insert=$ayarekle->execute(array(
							'depo_urunbaslik' => $urunnamecek['urun_baslik'],
							'depo_userid' => $usernamecek['users_id'],
							'depo_sunucuid' => $urunnamecek['urun_sunucu'],

							));



						if ($insert) {

							$ayarekle2=$db->prepare("INSERT INTO site_marketgecmis SET
								marketgecmis_urunbaslik=:marketgecmis_urunbaslik,
								marketgecmis_userid=:marketgecmis_userid,
								marketgecmis_sunucuid=:marketgecmis_sunucuid,
									marketgecmis_fiyat=:marketgecmis_fiyat
								");

							$insert2=$ayarekle2->execute(array(
								'marketgecmis_urunbaslik' => $urunnamecek['urun_baslik'],
								'marketgecmis_userid' => $usernamecek['users_id'],
								'marketgecmis_sunucuid' => $urunnamecek['urun_sunucu'],
									'marketgecmis_fiyat' => $urunnamecek['urun_fiyat']
								));

								if ($insert2) {
									Header("Location:../admin/admin/magazaesyagonder.php?gonderildi=ok");

								}else {
									Header("Location:../admin/admin/magazaesyagonder.php?gonderildi=no");

								}

						} else {

							Header("Location:../admin/admin/magazaesyagonder.php?hata=no");
						}

					}















					if (isset($_POST['oyunekle'])) {

						$ayarekle=$db->prepare("INSERT INTO bolfps_oyunlar SET
							oyunlar_baslik=:oyunlar_baslik,
							oyunlar_foto=:oyunlar_foto,
							oyunlar_aciklama=:oyunlar_aciklama
							");

						$insert=$ayarekle->execute(array(
							'oyunlar_baslik' => $_POST['oyunlar_baslik'],
							'oyunlar_foto' => $_POST['oyunlar_foto'],
							'oyunlar_aciklama' => $_POST['oyunlar_aciklama']
							));



						if ($insert) {

							Header("Location:../admin/admin/oyun-oyunekle.php?yenioyun=ok");

						} else {

							Header("Location:../admin/admin/oyun-oyunekle.php?yenioyun=no");
						}

					}

					if (isset($_POST['haberkategoriekle'])) {

						$ayarekle=$db->prepare("INSERT INTO bolfps_haberkategori SET
							haberkategori_isim=:haberkategori_isim
							");

						$insert=$ayarekle->execute(array(
							'haberkategori_isim' => $_POST['haberkategori_isim']
							));



						if ($insert) {

							Header("Location:../admin/admin/haber-kategoriler.php?durum=ok");

						} else {

							Header("Location:../admin/admin/haber-kategoriler.php?durum=no");
						}

					}

					if (isset($_POST['socialmediaduzenle'])) {

						$socialmedia_id=$_POST['sosyalmedya_id'];

						$ayarkaydet=$db->prepare("UPDATE site_sosyalmedya SET
							sosyalmedya_icon=:sosyalmedya_icon,
							sosyalmedya_isim=:sosyalmedya_isim,
							sosyalmedya_link=:sosyalmedya_link
							WHERE sosyalmedya_id={$_POST['sosyalmedya_id']}");

						$update=$ayarkaydet->execute(array(
							'sosyalmedya_icon' => $_POST['sosyalmedya_icon'],
							'sosyalmedya_isim' => $_POST['sosyalmedya_isim'],
							'sosyalmedya_link' => $_POST['sosyalmedya_link']
							));


						if ($update) {

							Header("Location:../admin/admin/socialmedia-duzenle.php?sosyalmedya_id=$socialmedia_id&durum=ok");

						} else {

							Header("Location:../admin/admin/socialmedia-duzenle.php?sosyalmedya_id=$socialmedia_id&durum=no");
						}

					}


					if (isset($_POST['sayfaduzenle'])) {

						$socialmedia_id=$_POST['sayfa_id'];

						$ayarkaydet=$db->prepare("UPDATE site_sayfa SET
							sayfa_baslik=:sayfa_baslik,
							sayfa_icerik=:sayfa_icerik
							WHERE sayfa_id={$_POST['sayfa_id']}");

						$update=$ayarkaydet->execute(array(
							'sayfa_baslik' => $_POST['sayfa_baslik'],
							'sayfa_icerik' => $_POST['editor1']
							));


						if ($update) {

							Header("Location:../admin/admin/sayfalar?durum=ok");

						} else {

							Header("Location:../admin/admin/sayfalar?durum=no");
						}

					}








 ?>
