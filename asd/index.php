<?php
include('../komutlar.php');
use Shopier\Exceptions\NotRendererClassException;
use Shopier\Exceptions\RendererClassNotFoundException;
use Shopier\Exceptions\RequiredParameterException;
use Shopier\Models\Address;
use Shopier\Models\Buyer;
use Shopier\Renderers\AutoSubmitFormRenderer;
use Shopier\Renderers\ButtonRenderer;
use Shopier\Enums\ProductType;
use Shopier\Shopier;

require 'vendor/autoload.php';

define('API_KEY', 'facb675d0f3b780e0c9e38a2b2735557');
define('API_SECRET', '4c326368a4ccfb48634146b4ca6a58ad');

$shopier = new Shopier(API_KEY, API_SECRET);

// Satın alan kişi bilgileri
$buyer = new Buyer([
    'id' => $_POST['user_id'],
    'name' => $_POST['user_isim'],
    'surname' => $_POST['user_soyisim'],
    'email' => $_POST['user_eposta'],
    'phone' => $_POST['user_tel']
]);

// Fatura ve kargo adresi birlikte tanımlama
// Ayrı ayrı da tanımlabilir
$address = new Address([
    'address' => 'Kızılay Mh.',
    'city' => 'Ankara',
    'country' => 'Turkey',
    'postcode' => '06100',
]);

// shopier parametlerini al
$params = $shopier->getParams();

// Satın alan kişi bilgisini ekle
$params->setBuyer($buyer);

// Fatura ve kargo adresini aynı şekilde ekle
$params->setAddress($address);

// Sipariş numarsı ve sipariş tutarını ekle
 $deger1 = $_POST['tutar'];

$shopier->setOrderData('52003', $deger1);

// Sipariş edilen ürünü ekle
$shopier->setProductData('Cüzdan Bakiyesi', ProductType::DOWNLOADABLE_VIRTUAL);

try {


        $kod = md5(rand(9999,999999999));
        $ayarkaydet=$db->prepare("INSERT INTO bolfps_bakiye SET
               bolfps_yukleyen=:bolfps_yukleyen,
      				 		bolfps_miktar=:bolfps_miktar,
                  	bolfps_odenen=:bolfps_odenen,
                      	bolfps_kod=:bolfps_kod
      		");

      	$insert=$ayarkaydet->execute(array(
              'bolfps_yukleyen' => $_POST['ogrenci_id'],
      	'bolfps_miktar' => $_POST['tutar'],
        'bolfps_odenen' => $deger1,
          'bolfps_kod' => $kod

      		));

          $ayarkaydet2=$db->prepare("UPDATE bolfps_user SET
                 user_bakiye=:user_bakiye
            WHERE user_id={$_POST['user_id']}");

          $update=$ayarkaydet2->execute(array(
                'user_bakiye' => $deger1
            ));



      	if ($insert) {
          $_SESSION['bakiyekod']=$kod;
          $_SESSION['bakiyeidog']=$_POST['ogrenci_id'];
          $renderer = $shopier->createRenderer(AutoSubmitFormRenderer::class);


          $shopier->goWith($renderer);
      	} else {

    header("Location:../cuzdanog.php?sorun=ok");
      	}


} catch (RequiredParameterException $e) {
    // Zorunlu parametlerden bir ve daha fazlası eksik
} catch (NotRendererClassException $e) {
    // $shopier->createRenderer(...) metodunda verilen class adı AbstracRenderer sınıfından türetilmemiş !
} catch (RendererClassNotFoundException $e) {
    // $shopier->createRenderer(...) metodunda verilen class bulunamadı !
}
 ?>
