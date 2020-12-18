<?php
ob_start();
session_start();
use Shopier\Models\ShopierResponse;

require_once __DIR__ . '/bootstrap.php';

// $_POST içerisinde aşağıdaki şekilde veriler gelir
//[
//    'platform_order_id' => '10002',
//    'API_key' => '*****',
//    'status' => 'success',
//    'installment' => '0',
//    'payment_id' => '954344654',
//    'random_nr' => '123456',
//    'signature' => 'f3EjDlXoPICsKssHT9iv/5ddCXIwk1ZcItlYXDqyYHrNso=',
//];

$shopierResponse = ShopierResponse::fromPostData();

if (!$shopierResponse->hasValidSignature('4c326368a4ccfb48634146b4ca6a58ad')) {
    //TODO: Ödeme başarılı değil, hata mesajı göster

      header("Location: ../index.php?cuzdan=hata");
      exit;
}
include('../db/db.php');
if ($_SESSION['bakiyeiduz']) {
  $ayarsor=$db->prepare("SELECT * FROM site_uzman where uzman_id=:id");
  $ayarsor->execute(array(
  	'id'=>$_SESSION['bakiyeiduz']
  ));
  $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

  $eklenecekbakiye = $ayarcek['uzman_bakiye']+$ayarcek['uzman_bakiyegecici'];



  $ayarkaydet=$db->prepare("UPDATE site_uzman SET
         uzman_bakiye=:uzman_bakiye
    WHERE uzman_id={$_SESSION['bakiyeiduz']}");

  $update=$ayarkaydet->execute(array(
        'uzman_bakiye' => $eklenecekbakiye
    ));
  if ($update) {


    $ayarkaydet=$db->prepare("UPDATE site_bakiyeuz SET
           bakiye_durum=:bakiye_durum
      WHERE bakiye_kod={$_SESSION['bakiyekod']}");

    $update=$ayarkaydet->execute(array(
          'bakiye_durum' => "1"
      ));

    header("Location:../cuzdanuz?durum=ok");


  } else {

    header("Location:../cuzdanuz?durum=no");
  }
}elseif ($_SESSION['bakiyeidog']) {
  $ayarsor=$db->prepare("SELECT * FROM site_ogrenci where ogrenci_id=:id");
  $ayarsor->execute(array(
  	'id'=>$_SESSION['bakiyeidog']
  ));
  $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

  $eklenecekbakiye = $ayarcek['ogrenci_bakiye']+$ayarcek['ogrenci_bakiyegecici'];



  $ayarkaydet=$db->prepare("UPDATE site_ogrenci SET
         ogrenci_bakiye=:ogrenci_bakiye
    WHERE ogrenci_id={$_SESSION['bakiyeidog']}");

  $update=$ayarkaydet->execute(array(
        'ogrenci_bakiye' => $eklenecekbakiye
    ));
  if ($update) {


    $ayarkaydet=$db->prepare("UPDATE site_bakiye SET
           bakiye_durum=:bakiye_durum
      WHERE bakiye_kod={$_SESSION['bakiyekod']}");

    $update=$ayarkaydet->execute(array(
          'bakiye_durum' => "1"
      ));

    header("Location:../cuzdanog?durum=ok");


  } else {

    header("Location:../cuzdanog?durum=no");
  }
}
