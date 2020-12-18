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
$urunsay=$urunsor->rowCount();

$urunsor2=$db->prepare("SELECT SUM(eloboostsiparis_fiyat) AS sayi FROM bolfps_eloboostsiparis");
$urunsor2->execute();
$urunsor2yaz= $urunsor2->fetch(PDO::FETCH_ASSOC);

$urunsor4=$db->prepare("SELECT SUM(ilk10macsiparis_fiyat) AS sayi FROM bolfps_ilk10macsiparis");
$urunsor4->execute();
$urunsor4yaz= $urunsor4->fetch(PDO::FETCH_ASSOC);

$urunsor5=$db->prepare("SELECT SUM(winboostsiparis_fiyat) AS sayi FROM bolfps_winboostsiparis");
$urunsor5->execute();
$urunsor5yaz= $urunsor5->fetch(PDO::FETCH_ASSOC);

$urunsor6=$db->prepare("SELECT SUM(challengerboostsiparis_fiyat) AS sayi FROM bolfps_challengerboostsiparis");
$urunsor6->execute();
$urunsor6yaz= $urunsor6->fetch(PDO::FETCH_ASSOC);


















$urunsor22=$db->prepare("SELECT SUM(valorantelosiparis_fiyat) AS sayi FROM bolfps_valorantelosiparis");
$urunsor22->execute();
$urunsor22yaz= $urunsor22->fetch(PDO::FETCH_ASSOC);

$urunsor33=$db->prepare("SELECT SUM(valorantduoboostsiparis_fiyat) AS sayi FROM bolfps_valorantduoboostsiparis");
$urunsor33->execute();
$urunsor33yaz= $urunsor33->fetch(PDO::FETCH_ASSOC);

$urunsor44=$db->prepare("SELECT SUM(ilk5macsiparis_fiyat) AS sayi FROM bolfps_ilk5macsiparis");
$urunsor44->execute();
$urunsor44yaz= $urunsor44->fetch(PDO::FETCH_ASSOC);

$urunsor55=$db->prepare("SELECT SUM(normalmacsiparis_fiyat) AS sayi FROM bolfps_normalmacsiparis");
$urunsor55->execute();
$urunsor55yaz= $urunsor55->fetch(PDO::FETCH_ASSOC);























$urunsor3=$db->prepare("SELECT SUM(duoboostsiparis_fiyat) AS sayi2 FROM bolfps_duoboostsiparis");
$urunsor3->execute();
$urunsor3yaz= $urunsor3->fetch(PDO::FETCH_ASSOC);

$urunsorv=$db->prepare("SELECT * FROM bolfps_valorantelosiparis ORDER BY valorantelosiparis_id DESC");
$urunsorv->execute();
$urunsayv=$urunsorv->rowCount();

$urunsorduo=$db->prepare("SELECT * FROM bolfps_duoboostsiparis ORDER BY duoboostsiparis_id DESC");
$urunsorduo->execute();
$urunsaydu=$urunsorduo->rowCount();

$urunsorduov=$db->prepare("SELECT * FROM bolfps_valorantduoboostsiparis ORDER BY valorantduoboostsiparis_id DESC");
$urunsorduov->execute();
$urunsayduv=$urunsorduov->rowCount();

$urunsor10=$db->prepare("SELECT * FROM bolfps_ilk10macsiparis ORDER BY ilk10macsiparis_id DESC");
$urunsor10->execute();
$urunsay10=$urunsor10->rowCount();


$urunsor5=$db->prepare("SELECT * FROM bolfps_ilk5macsiparis ORDER BY ilk5macsiparis_id DESC");
$urunsor5->execute();
$urunsay5v=$urunsor5->rowCount();

$urunsorn=$db->prepare("SELECT * FROM bolfps_normalmacsiparis ORDER BY normalmacsiparis_id DESC");
$urunsorn->execute();
$urunsaynormv=$urunsorn->rowCount();


$usersor=$db->prepare("SELECT * FROM bolfps_user ORDER BY user_id DESC");
$usersor->execute();

$urunsorwin=$db->prepare("SELECT * FROM bolfps_winboostsiparis ORDER BY winboostsiparis_id DESC");
$urunsorwin->execute();
$urunsaywin=$urunsorwin->rowCount();

$urunsorchallenger=$db->prepare("SELECT * FROM bolfps_challengerboostsiparis ORDER BY challengerboostsiparis_id DESC");
$urunsorchallenger->execute();
$urunsaychl=$urunsorchallenger->rowCount();



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
