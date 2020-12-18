<?php
include('db/db.php');

ob_start();
if(!isset($_SESSION))
   {
       session_start();
   }

   $url = $_SERVER['REQUEST_URI'];
   if ($url == "/komutlar" || $url == "/komutlar.php" || $url == "komutlar" || $url == "komutlar.php") {
   	Header("Location: /");
   }

if (isset($_SESSION['user_username'])) {
  $girisyapanuser=$db->prepare("SELECT * FROM bolfps_user where user_username=:id");
  $girisyapanuser->execute(array(
  	'id'=>$_SESSION['user_username']
  ));
  $girisyapanusercek=$girisyapanuser->fetch(PDO::FETCH_ASSOC);
  $girisyapanuserid = $girisyapanusercek['user_id'];
}else {
  $girisyapanuserid = "";
}


$ayarsor=$db->prepare("SELECT * FROM bolfps_ayar where ayar_id=:id");
$ayarsor->execute(array(
	'id'=>1
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
////
$eloboostfiyatsor=$db->prepare("SELECT * FROM bolfps_lolelofiyat where olelofiyat_id=:id");
$eloboostfiyatsor->execute(array(
	'id'=>1
));
$eloboostfiyatcek=$eloboostfiyatsor->fetch(PDO::FETCH_ASSOC);

$eloboostsiparissor=$db->prepare("SELECT * FROM bolfps_eloboostsiparis where eloboostsiparis_userid = $girisyapanuserid ORDER BY eloboostsiparis_id DESC");
$eloboostsiparissor->execute();
$eloboostsiparissay=$eloboostsiparissor->rowCount();
////


///
$duoboostfiyatsor=$db->prepare("SELECT * FROM bolfps_lolduofiyat where lolduofiyat_id=:id");
$duoboostfiyatsor->execute(array(
	'id'=>1
));
$duoboostfiyatcek=$duoboostfiyatsor->fetch(PDO::FETCH_ASSOC);

$duoboostsiparissor=$db->prepare("SELECT * FROM bolfps_duoboostsiparis where duoboostsiparis_userid = $girisyapanuserid ORDER BY duoboostsiparis_id DESC");
$duoboostsiparissor->execute();

$duoboostsiparissay =$duoboostsiparissor->rowCount();
///

///
$ilk10macfiyatsor=$db->prepare("SELECT * FROM bolfps_ilk10macfiyat where ilk10macfiyat_id=:id");
$ilk10macfiyatsor->execute(array(
	'id'=>1
));
$ilk10macfiyatcek=$ilk10macfiyatsor->fetch(PDO::FETCH_ASSOC);

$ilk10macsiparissor=$db->prepare("SELECT * FROM bolfps_ilk10macsiparis where ilk10macsiparis_userid = $girisyapanuserid ORDER BY ilk10macsiparis_id DESC");
$ilk10macsiparissor->execute();

$ilk10macsiparissay =$ilk10macsiparissor->rowCount();
///

///
$winboostfiyatsor=$db->prepare("SELECT * FROM bolfps_winboost where winboost_id=:id");
$winboostfiyatsor->execute(array(
	'id'=>1
));
$winboostfiyatcek=$winboostfiyatsor->fetch(PDO::FETCH_ASSOC);

$winboostsiparissor=$db->prepare("SELECT * FROM bolfps_winboostsiparis where winboostsiparis_userid = $girisyapanuserid ORDER BY winboostsiparis_id DESC");
$winboostsiparissor->execute();

$winboostsiparissay =$winboostsiparissor->rowCount();
///

//
$challengerboostfiyatsor=$db->prepare("SELECT * FROM bolfps_challengerboostfiyat where challengerboostfiyat_id=:id");
$challengerboostfiyatsor->execute(array(
	'id'=>1
));
$challengerboostfiyatcek=$challengerboostfiyatsor->fetch(PDO::FETCH_ASSOC);
$challengerboostsiparissor=$db->prepare("SELECT * FROM bolfps_challengerboostsiparis where challengerboostsiparis_userid = $girisyapanuserid ORDER BY challengerboostsiparis_id DESC");
$challengerboostsiparissor->execute();

$challengerboostsiparissay =$challengerboostsiparissor->rowCount();
//


////
$valorantelofiyatsor=$db->prepare("SELECT * FROM bolfps_lvalorantelofiyat where valorantelofiyat_id=:id");
$valorantelofiyatsor->execute(array(
	'id'=>2
));
$valorantelofiyatcek=$valorantelofiyatsor->fetch(PDO::FETCH_ASSOC);

$valorantelosiparissor=$db->prepare("SELECT * FROM bolfps_valorantelosiparis where valorantelosiparis_userid = $girisyapanuserid ORDER BY valorantelosiparis_id DESC");
$valorantelosiparissor->execute();
$valorantelosiparissay=$valorantelosiparissor->rowCount();
////

////
$valorantduoboostfiyatsor=$db->prepare("SELECT * FROM bolfps_valorantduoboostfiyat where valorantduoboostfiyat_id=:id");
$valorantduoboostfiyatsor->execute(array(
	'id'=>2
));
$valorantduoboostfiyatcek=$valorantduoboostfiyatsor->fetch(PDO::FETCH_ASSOC);

$valorantduoboostsiparissor=$db->prepare("SELECT * FROM bolfps_valorantduoboostsiparis where valorantduoboostsiparis_userid	 = $girisyapanuserid ORDER BY valorantduoboostsiparis_id DESC");
$valorantduoboostsiparissor->execute();
$valorantduoboostsiparissay=$valorantduoboostsiparissor->rowCount();
////











///
$ilk5macfiyatsor=$db->prepare("SELECT * FROM bolfps_ilk5macfiyat where ilk5macfiyat_id=:id");
$ilk5macfiyatsor->execute(array(
	'id'=>1
));
$ilk5macfiyatcek=$ilk5macfiyatsor->fetch(PDO::FETCH_ASSOC);

$ilk5macsiparissor=$db->prepare("SELECT * FROM bolfps_ilk5macsiparis where ilk5macsiparis_userid = $girisyapanuserid ORDER BY ilk5macsiparis_id DESC");
$ilk5macsiparissor->execute();

$ilk5macsiparissay =$ilk5macsiparissor->rowCount();
///




///
$normalmacfiyatsor=$db->prepare("SELECT * FROM bolfps_ilk5macfiyat where ilk5macfiyat_id=:id");
$normalmacfiyatsor->execute(array(
	'id'=>1
));
$normalmacfiyatcek=$normalmacfiyatsor->fetch(PDO::FETCH_ASSOC);

$normalmacsiparissor=$db->prepare("SELECT * FROM bolfps_normalmacsiparis where normalmacsiparis_userid = $girisyapanuserid ORDER BY normalmacsiparis_id DESC");
$normalmacsiparissor->execute();

$normalmacsiparissay =$normalmacsiparissor->rowCount();
///







 ?>
