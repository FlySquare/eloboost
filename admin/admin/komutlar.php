<?php
$url = $_SERVER['REQUEST_URI'];
if ($url == "/komutlar" || $url == "/komutlar.php" || $url == "komutlar" || $url == "komutlar.php") {
	Header("Location: /");
}
ob_start();
session_start();
error_reporting(0);
date_default_timezone_set('Europe/Istanbul');
include('../../db/db.php');



$ayarsor=$db->prepare("SELECT * FROM bolfps_ayar where ayar_id=:id");
$ayarsor->execute(array(
	'id'=>1
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$girisyapanuser=$db->prepare("SELECT * FROM bolfps_admin where user_username=:username");
$girisyapanuser->execute(array(
	'username'=>$_SESSION['user_adminname']
));
$girisyapanusercek=$girisyapanuser->fetch(PDO::FETCH_ASSOC);
$say=$girisyapanuser->rowCount();

if($say == 0){
    header("Location:login.php");
    exit;
}
$habersor=$db->prepare("SELECT * FROM bolfps_haber ORDER BY haber_id DESC");
$habersor->execute();

$yorumsor=$db->prepare("SELECT * FROM bolfps_yorum ORDER BY yorum_id DESC");
$yorumsor->execute();

$oyunsor=$db->prepare("SELECT * FROM bolfps_oyunlar ORDER BY oyun_id DESC");
$oyunsor->execute();

$urunsor=$db->prepare("SELECT * FROM bolfps_eloboostsiparis ORDER BY eloboostsiparis_id DESC");
$urunsor->execute();

$urunsorv=$db->prepare("SELECT * FROM bolfps_valorantelosiparis ORDER BY valorantelosiparis_id DESC");
$urunsorv->execute();

$urunsorduo=$db->prepare("SELECT * FROM bolfps_duoboostsiparis ORDER BY duoboostsiparis_id DESC");
$urunsorduo->execute();

$urunsorduov=$db->prepare("SELECT * FROM bolfps_valorantduoboostsiparis ORDER BY valorantduoboostsiparis_id DESC");
$urunsorduov->execute();

$urunsor10=$db->prepare("SELECT * FROM bolfps_ilk10macsiparis ORDER BY ilk10macsiparis_id DESC");
$urunsor10->execute();

$urunsor5=$db->prepare("SELECT * FROM bolfps_ilk5macsiparis ORDER BY ilk5macsiparis_id DESC");
$urunsor5->execute();

$urunsorn=$db->prepare("SELECT * FROM bolfps_normalmacsiparis ORDER BY normalmacsiparis_id DESC");
$urunsorn->execute();

$usersor=$db->prepare("SELECT * FROM bolfps_user ORDER BY user_id DESC");
$usersor->execute();

$urunsorwin=$db->prepare("SELECT * FROM bolfps_winboostsiparis ORDER BY winboostsiparis_id DESC");
$urunsorwin->execute();

$urunsorchallenger=$db->prepare("SELECT * FROM bolfps_challengerboostsiparis ORDER BY challengerboostsiparis_id DESC");
$urunsorchallenger->execute();


$sunucusor=$db->prepare("SELECT * FROM bolfps_sunucu ORDER BY sunucu_id DESC");
$sunucusor->execute();



$haberkategorisor=$db->prepare("SELECT * FROM bolfps_haberkategori ORDER BY haberkategori_id DESC");
$haberkategorisor->execute();

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


 ?>
