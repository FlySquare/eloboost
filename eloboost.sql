-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 25, 2020 at 09:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eloboost`
--

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_admin`
--

CREATE TABLE `bolfps_admin` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `user_sifre` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `user_isim` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `user_soyisim` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `user_eposta` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `user_tel` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `user_tarih` timestamp NULL DEFAULT current_timestamp(),
  `user_bakiye` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL DEFAULT '0',
  `user_sifrekod` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `user_sifreistek` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT '0',
  `asdsda` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `bolfps_admin`
--

INSERT INTO `bolfps_admin` (`user_id`, `user_username`, `user_sifre`, `user_isim`, `user_soyisim`, `user_eposta`, `user_tel`, `user_tarih`, `user_bakiye`, `user_sifrekod`, `user_sifreistek`, `asdsda`) VALUES
(1, 'Abdullah Kılıç', '0cc175b9c0f1b6a831c399e269772661', 'Abdullah', 'Kılıç', 'asd', 'a', '2020-12-05 17:34:23', 'a', 'a', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_ayar`
--

CREATE TABLE `bolfps_ayar` (
  `ayar_id` int(1) NOT NULL,
  `ayar_description` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `ayar_author` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `ayar_tawkto` text COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `ayar_title` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `ayar_baseurl` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `ayar_logo` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `ayar_favicon` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `ayar_indirim` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `slider_1` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `slider_2` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `slider_3` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `bolfps_ayar`
--

INSERT INTO `bolfps_ayar` (`ayar_id`, `ayar_description`, `ayar_author`, `ayar_tawkto`, `ayar_title`, `ayar_baseurl`, `ayar_logo`, `ayar_favicon`, `ayar_indirim`, `slider_1`, `slider_2`, `slider_3`) VALUES
(1, 'Piyasada bulunan en nitelikli ve kapsamlı minecraft sunucu sitesi', 'BolFps', NULL, 'BolFps - En iyi sunucu web sitesi', 'http://localhost/', 'http://localhost/admin/admin/img/logo/logo2.png', 'http://localhost/admin/admin/img/logo/logo.png', NULL, 'https://uhdwallpapers.org/uploads/converted/20/01/14/the-mandalorian-5k-1920x1080_477555-mm-90.jpg', 'https://i.pinimg.com/originals/86/ff/b8/86ffb87572d657f335cd7cd828c70de3.jpg', 'https://images8.alphacoders.com/926/926492.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_bakiye`
--

CREATE TABLE `bolfps_bakiye` (
  `bolfps_id` int(11) NOT NULL,
  `bolfps_yukleyen` varchar(250) DEFAULT NULL,
  `bolfps_miktar` varchar(250) DEFAULT NULL,
  `bolfps_odenen` varchar(250) DEFAULT NULL,
  `bolfps_kod` varchar(250) DEFAULT NULL,
  `bolfps_tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolfps_bakiye`
--

INSERT INTO `bolfps_bakiye` (`bolfps_id`, `bolfps_yukleyen`, `bolfps_miktar`, `bolfps_odenen`, `bolfps_kod`, `bolfps_tarih`) VALUES
(1, NULL, '20', '20', '391e965d5ee270b6b1ddedf31782108b', '2020-12-05 23:47:06'),
(2, NULL, '20', '20', '9256c5b4a267db4e53d95840c6e6c585', '2020-12-05 23:47:40'),
(3, NULL, '70', '70', '4dc88c7af38d05b95dd53388b1383def', '2020-12-15 12:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_challengerboostfiyat`
--

CREATE TABLE `bolfps_challengerboostfiyat` (
  `challengerboostfiyat_id` int(11) NOT NULL,
  `challengerboostfiyat_elofiyat` varchar(250) DEFAULT NULL,
  `challengerboostfiyat_indirimdurum` varchar(250) DEFAULT NULL,
  `challengerboostfiyat_indirim` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolfps_challengerboostfiyat`
--

INSERT INTO `bolfps_challengerboostfiyat` (`challengerboostfiyat_id`, `challengerboostfiyat_elofiyat`, `challengerboostfiyat_indirimdurum`, `challengerboostfiyat_indirim`) VALUES
(1, '3', '0', '1.1');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_challengerboostsiparis`
--

CREATE TABLE `bolfps_challengerboostsiparis` (
  `challengerboostsiparis_id` int(11) NOT NULL,
  `challengerboostsiparis_suankipuan` varchar(250) DEFAULT NULL,
  `challengerboostsiparis_istediginizpuan` varchar(250) DEFAULT NULL,
  `challengerboostsiparis_koridor` varchar(250) DEFAULT NULL,
  `challengerboostsiparis_derecelitur` varchar(250) DEFAULT NULL,
  `challengerboostsiparis_sunucu` varchar(250) DEFAULT NULL,
  `challengerboostsiparis_macbasipuan` varchar(250) DEFAULT NULL,
  `challengerboostsiparis_fiyat` varchar(250) DEFAULT NULL,
  `challengerboostsiparis_userid` varchar(250) DEFAULT NULL,
  `challengerboostsiparis_hesapad` varchar(250) DEFAULT NULL,
  `challengerboostsiparis_hesapsifre` varchar(250) DEFAULT NULL,
  `challengerboostsiparis_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `challengerboostsiparis_durum` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolfps_challengerboostsiparis`
--

INSERT INTO `bolfps_challengerboostsiparis` (`challengerboostsiparis_id`, `challengerboostsiparis_suankipuan`, `challengerboostsiparis_istediginizpuan`, `challengerboostsiparis_koridor`, `challengerboostsiparis_derecelitur`, `challengerboostsiparis_sunucu`, `challengerboostsiparis_macbasipuan`, `challengerboostsiparis_fiyat`, `challengerboostsiparis_userid`, `challengerboostsiparis_hesapad`, `challengerboostsiparis_hesapsifre`, `challengerboostsiparis_tarih`, `challengerboostsiparis_durum`) VALUES
(9, '1', '26', '1', '1', '1', '1', '75', '3', 'ff', 'ff', '2020-12-12 01:13:29', '2');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_duoboostsiparis`
--

CREATE TABLE `bolfps_duoboostsiparis` (
  `duoboostsiparis_id` int(11) NOT NULL,
  `duoboostsiparis_mevcutlig` varchar(250) DEFAULT NULL,
  `duoboostsiparis_mevcutasama` varchar(250) DEFAULT NULL,
  `duoboostsiparis_hedeflig` varchar(250) DEFAULT NULL,
  `duoboostsiparis_hedefasama` varchar(250) DEFAULT NULL,
  `duoboostsiparis_macbasilp` varchar(250) DEFAULT NULL,
  `duoboostsiparis_sunucu` varchar(250) DEFAULT NULL,
  `duoboostsiparis_derecelitur` varchar(250) DEFAULT NULL,
  `duoboostsiparis_fiyat` varchar(250) DEFAULT NULL,
  `duoboostsiparis_userid` varchar(250) DEFAULT NULL,
  `duoboostsiparis_hesapadi` varchar(250) DEFAULT NULL,
  `duoboostsiparis_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `duoboostsiparis_durum` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolfps_duoboostsiparis`
--

INSERT INTO `bolfps_duoboostsiparis` (`duoboostsiparis_id`, `duoboostsiparis_mevcutlig`, `duoboostsiparis_mevcutasama`, `duoboostsiparis_hedeflig`, `duoboostsiparis_hedefasama`, `duoboostsiparis_macbasilp`, `duoboostsiparis_sunucu`, `duoboostsiparis_derecelitur`, `duoboostsiparis_fiyat`, `duoboostsiparis_userid`, `duoboostsiparis_hesapadi`, `duoboostsiparis_tarih`, `duoboostsiparis_durum`) VALUES
(4, '1', '1', '6', '1', '1', '1', '1', '1551', '3', 'gg', '2020-12-06 11:44:51', '1');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_eloboostsiparis`
--

CREATE TABLE `bolfps_eloboostsiparis` (
  `eloboostsiparis_id` int(11) NOT NULL,
  `eloboostsiparis_mevcutlig` varchar(250) DEFAULT NULL,
  `eloboostsiparis_mevcutasama` varchar(250) DEFAULT NULL,
  `eloboostsiparis_hedeflig` varchar(250) DEFAULT NULL,
  `eloboostsiparis_hedefasama` varchar(250) DEFAULT NULL,
  `eloboostsiparis_macbasilp` varchar(250) DEFAULT NULL,
  `eloboostsiparis_sunucu` varchar(250) DEFAULT NULL,
  `eloboostsiparis_derecelitur` varchar(250) DEFAULT NULL,
  `eloboostsiparis_fiyat` varchar(250) DEFAULT NULL,
  `eloboostsiparis_userid` varchar(250) DEFAULT NULL,
  `eloboostsiparis_hesapad` varchar(250) DEFAULT NULL,
  `eloboostsiparis_hesapsifre` varchar(250) DEFAULT NULL,
  `eloboostsiparis_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `eloboostsiparis_durum` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolfps_eloboostsiparis`
--

INSERT INTO `bolfps_eloboostsiparis` (`eloboostsiparis_id`, `eloboostsiparis_mevcutlig`, `eloboostsiparis_mevcutasama`, `eloboostsiparis_hedeflig`, `eloboostsiparis_hedefasama`, `eloboostsiparis_macbasilp`, `eloboostsiparis_sunucu`, `eloboostsiparis_derecelitur`, `eloboostsiparis_fiyat`, `eloboostsiparis_userid`, `eloboostsiparis_hesapad`, `eloboostsiparis_hesapsifre`, `eloboostsiparis_tarih`, `eloboostsiparis_durum`) VALUES
(1, '2', '4', '2', '3', '1.2', '1', '1', '35', '3', 'ff', 'ff', '2020-12-06 10:34:03', '1');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_haber`
--

CREATE TABLE `bolfps_haber` (
  `haber_id` int(11) NOT NULL,
  `haber_foto` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `haber_baslik` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `haber_kategori` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `haber_sahip` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `haber_icerik` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `haber_okunma` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT '0',
  `haber_yorumdurum` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT 'aktif',
  `haber_yorumsayi` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT '0',
  `haber_tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `bolfps_haber`
--

INSERT INTO `bolfps_haber` (`haber_id`, `haber_foto`, `haber_baslik`, `haber_kategori`, `haber_sahip`, `haber_icerik`, `haber_okunma`, `haber_yorumdurum`, `haber_yorumsayi`, `haber_tarih`) VALUES
(1, 'https://avatars3.githubusercontent.com/u/47474804?s=48&v=4', 'Lorem ipsum dolor sit ametxxx', '3', 's', '<p>s</p>\r\n', '1', 'acik', '1', '2020-10-28 10:51:13'),
(5, 'https://avatars3.githubusercontent.com/u/47474804?s=48&v=4', 'Lorem ipsum dolor sit amet', '3', NULL, '<p>s</p>\r\n', '0', 'aktif', '0', '2020-11-01 08:04:51'),
(6, 'https://avatars3.githubusercontent.com/u/47474804?s=48&v=4', 'Lorem ipsum dolor sit amet', '2', NULL, '<p>s</p>\r\n', '0', 'aktif', '0', '2020-11-01 08:04:58'),
(7, 'https://avatars3.githubusercontent.com/u/47474804?s=48&v=4', 'Lorem ipsum dolor sit ametssss', '3', NULL, '<p>s</p>\r\n', '0', 'aktif', '0', '2020-11-01 08:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_haberkategori`
--

CREATE TABLE `bolfps_haberkategori` (
  `haberkategori_id` int(11) NOT NULL,
  `haberkategori_isim` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `haberkategori_tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `bolfps_haberkategori`
--

INSERT INTO `bolfps_haberkategori` (`haberkategori_id`, `haberkategori_isim`, `haberkategori_tarih`) VALUES
(1, 'Güncellemeler', '2020-10-30 22:09:20'),
(2, 'Çekilişler', '2020-10-30 22:09:20'),
(4, 'Market Haber', '2020-11-01 12:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_lolduofiyat`
--

CREATE TABLE `bolfps_lolduofiyat` (
  `lolduofiyat_id` int(11) NOT NULL,
  `lolduofiyat_demir` varchar(250) DEFAULT NULL,
  `lolduofiyat_bronz` varchar(250) DEFAULT NULL,
  `lolduofiyat_gumus` varchar(250) DEFAULT NULL,
  `lolduofiyat_altin` varchar(250) DEFAULT NULL,
  `lolduofiyat_platin` varchar(250) DEFAULT NULL,
  `lolduofiyat_elmas` varchar(250) DEFAULT NULL,
  `lolduofiyat_ustalik` varchar(250) DEFAULT NULL,
  `lolduofiyat_indirimdurum` varchar(250) DEFAULT NULL,
  `lolduofiyat_indirim` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolfps_lolduofiyat`
--

INSERT INTO `bolfps_lolduofiyat` (`lolduofiyat_id`, `lolduofiyat_demir`, `lolduofiyat_bronz`, `lolduofiyat_gumus`, `lolduofiyat_altin`, `lolduofiyat_platin`, `lolduofiyat_elmas`, `lolduofiyat_ustalik`, `lolduofiyat_indirimdurum`, `lolduofiyat_indirim`) VALUES
(1, '45', '52', '60', '67', '98', '180', NULL, '0', '0.1');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_lolelofiyat`
--

CREATE TABLE `bolfps_lolelofiyat` (
  `olelofiyat_id` int(11) NOT NULL,
  `olelofiyat_demir` varchar(250) DEFAULT NULL,
  `olelofiyat_bronz` varchar(250) DEFAULT NULL,
  `olelofiyat_gumus` varchar(250) DEFAULT NULL,
  `olelofiyat_altin` varchar(250) DEFAULT NULL,
  `olelofiyat_platin` varchar(250) DEFAULT NULL,
  `olelofiyat_elmas` varchar(250) DEFAULT NULL,
  `lolelofiyat_ustalik` varchar(250) DEFAULT NULL,
  `olelofiyat_indirimdurum` varchar(250) DEFAULT NULL,
  `olelofiyat_indirim` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolfps_lolelofiyat`
--

INSERT INTO `bolfps_lolelofiyat` (`olelofiyat_id`, `olelofiyat_demir`, `olelofiyat_bronz`, `olelofiyat_gumus`, `olelofiyat_altin`, `olelofiyat_platin`, `olelofiyat_elmas`, `lolelofiyat_ustalik`, `olelofiyat_indirimdurum`, `olelofiyat_indirim`) VALUES
(1, '30', '35', '40', '45', '65', '150', NULL, '0', '0.1');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_lvalorantelofiyat`
--

CREATE TABLE `bolfps_lvalorantelofiyat` (
  `valorantelofiyat_id` int(11) NOT NULL,
  `valorantelofiyat_demir` varchar(250) DEFAULT NULL,
  `valorantelofiyat_bronz` varchar(250) DEFAULT NULL,
  `valorantelofiyat_gumus` varchar(250) DEFAULT NULL,
  `valorantelofiyat_altin` varchar(250) DEFAULT NULL,
  `valorantelofiyat_platin` varchar(250) DEFAULT NULL,
  `valorantelofiyat_elmas` varchar(250) DEFAULT NULL,
  `valorantelofiyat_olumsuzluk` varchar(250) DEFAULT NULL,
  `valorantelofiyat_isiyan` varchar(250) DEFAULT NULL,
  `valorantelofiyat_indirimdurum` varchar(250) DEFAULT NULL,
  `valorantelofiyat_indirim` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolfps_lvalorantelofiyat`
--

INSERT INTO `bolfps_lvalorantelofiyat` (`valorantelofiyat_id`, `valorantelofiyat_demir`, `valorantelofiyat_bronz`, `valorantelofiyat_gumus`, `valorantelofiyat_altin`, `valorantelofiyat_platin`, `valorantelofiyat_elmas`, `valorantelofiyat_olumsuzluk`, `valorantelofiyat_isiyan`, `valorantelofiyat_indirimdurum`, `valorantelofiyat_indirim`) VALUES
(2, '10', '15', '20', '25', '30', '35', '40', '45', '0', '1.2');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_normalmacsiparis`
--

CREATE TABLE `bolfps_normalmacsiparis` (
  `normalmacsiparis_id` int(11) NOT NULL,
  `normalmacsiparis_toplammac` varchar(250) DEFAULT NULL,
  `normalmacsiparis_sunucu` varchar(250) DEFAULT NULL,
  `normalmacsiparis_karakter` varchar(250) DEFAULT NULL,
  `normalmacsiparis_fiyat` varchar(250) DEFAULT NULL,
  `normalmacsiparis_userid` varchar(250) DEFAULT NULL,
  `normalmacsiparis_hesapad` varchar(250) DEFAULT NULL,
  `normalmacsiparis_hesapsifre` varchar(250) DEFAULT NULL,
  `normalmacsiparis_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `normalmacsiparis_durum` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolfps_normalmacsiparis`
--

INSERT INTO `bolfps_normalmacsiparis` (`normalmacsiparis_id`, `normalmacsiparis_toplammac`, `normalmacsiparis_sunucu`, `normalmacsiparis_karakter`, `normalmacsiparis_fiyat`, `normalmacsiparis_userid`, `normalmacsiparis_hesapad`, `normalmacsiparis_hesapsifre`, `normalmacsiparis_tarih`, `normalmacsiparis_durum`) VALUES
(18, '2', '', 'Farketmez', '10', '3', 's', 's', '2020-12-15 13:32:54', ''),
(19, '5', '1', 'Cypher', '50', '3', '22', '22', '2020-12-15 13:35:35', '0');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_oyunlar`
--

CREATE TABLE `bolfps_oyunlar` (
  `oyun_id` int(11) NOT NULL,
  `oyunlar_baslik` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `oyunlar_foto` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `oyunlar_aciklama` text COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `oyunlar_tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `bolfps_oyunlar`
--

INSERT INTO `bolfps_oyunlar` (`oyun_id`, `oyunlar_baslik`, `oyunlar_foto`, `oyunlar_aciklama`, `oyunlar_tarih`) VALUES
(1, 'What is Lorem Ipsum?xxxxw', 'https://wallpapercave.com/wp/NjGW245.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2020-11-01 07:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_sunucu`
--

CREATE TABLE `bolfps_sunucu` (
  `sunucu_id` int(11) NOT NULL,
  `sunucu_isim` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sunucu_ip` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sunucu_port` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sunucu_konsolport` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sunucu_konsolsifre` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sunucu_tarih` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `bolfps_sunucu`
--

INSERT INTO `bolfps_sunucu` (`sunucu_id`, `sunucu_isim`, `sunucu_ip`, `sunucu_port`, `sunucu_konsolport`, `sunucu_konsolsifre`, `sunucu_tarih`) VALUES
(1, 'BedWars', '192.168.1.1', '8080', '5245', 'acumk', '2020-11-01 07:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_urun`
--

CREATE TABLE `bolfps_urun` (
  `urun_id` int(11) NOT NULL,
  `urun_foto` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `urun_baslik` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `urun_sunucu` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `urun_stok` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `urun_etiket` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `urun_fiyat` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `urun_sunucukategori` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `urun_komut` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `urun_komut2` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `urun_ozellikler` text COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `urun_indirimsizfiyat` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `urun_genelaciklama` text COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `urun_tarih` timestamp NULL DEFAULT current_timestamp(),
  `urun_okunma` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `bolfps_urun`
--

INSERT INTO `bolfps_urun` (`urun_id`, `urun_foto`, `urun_baslik`, `urun_sunucu`, `urun_stok`, `urun_etiket`, `urun_fiyat`, `urun_sunucukategori`, `urun_komut`, `urun_komut2`, `urun_ozellikler`, `urun_indirimsizfiyat`, `urun_genelaciklama`, `urun_tarih`, `urun_okunma`) VALUES
(1, 'https://premium.leaderos.com.tr/apps/main/public/assets/img/store/products/7d5d2974a383b4a96a0d0743f24f0fc5.jpg', 'Diamond Kılıç\r\n', '1', '13', 'kilic,urun', '10', '2', NULL, NULL, 'Enchli PvP Diamond kılıcı ile rakiplerinizden üstün olun!\r\n\r\n', '50', 'Enchli PvP Diamond kılıcı ile rakiplerinizden üstün olun!\r\n\r\n', '2020-11-10 09:08:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_user`
--

CREATE TABLE `bolfps_user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `user_sifre` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `user_isim` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `user_soyisim` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `user_eposta` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `user_tel` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `user_tarih` timestamp NULL DEFAULT current_timestamp(),
  `user_bakiye` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL DEFAULT '0',
  `user_sifrekod` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `user_sifreistek` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `bolfps_user`
--

INSERT INTO `bolfps_user` (`user_id`, `user_username`, `user_sifre`, `user_isim`, `user_soyisim`, `user_eposta`, `user_tel`, `user_tarih`, `user_bakiye`, `user_sifrekod`, `user_sifreistek`) VALUES
(3, 'FlySquare', '0cc175b9c0f1b6a831c399e269772661', 'Umut', 'Arda', 'umutkonurinso@gmail.com', '05307993607', '2020-12-04 13:37:04', '4314', '45217403484850239', '0');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_valorantduoboostfiyat`
--

CREATE TABLE `bolfps_valorantduoboostfiyat` (
  `valorantduoboostfiyat_id` int(11) NOT NULL,
  `valorantduoboostfiyat_demir` varchar(250) DEFAULT NULL,
  `valorantduoboostfiyat_bronz` varchar(250) DEFAULT NULL,
  `valorantduoboostfiyat_gumus` varchar(250) DEFAULT NULL,
  `valorantduoboostfiyat_altin` varchar(250) DEFAULT NULL,
  `valorantduoboostfiyat_platin` varchar(250) DEFAULT NULL,
  `valorantduoboostfiyat_elmas` varchar(250) DEFAULT NULL,
  `valorantduoboostfiyat_olumsuzluk` varchar(250) DEFAULT NULL,
  `valorantduoboostfiyat_isiyan` varchar(250) DEFAULT NULL,
  `valorantduoboostfiyat_indirimdurum` varchar(250) DEFAULT NULL,
  `valorantduoboostfiyat_indirim` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolfps_valorantduoboostfiyat`
--

INSERT INTO `bolfps_valorantduoboostfiyat` (`valorantduoboostfiyat_id`, `valorantduoboostfiyat_demir`, `valorantduoboostfiyat_bronz`, `valorantduoboostfiyat_gumus`, `valorantduoboostfiyat_altin`, `valorantduoboostfiyat_platin`, `valorantduoboostfiyat_elmas`, `valorantduoboostfiyat_olumsuzluk`, `valorantduoboostfiyat_isiyan`, `valorantduoboostfiyat_indirimdurum`, `valorantduoboostfiyat_indirim`) VALUES
(2, '10', '15', '20', '25', '30', '35', '40', '50', '0', '1.2');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_valorantduoboostsiparis`
--

CREATE TABLE `bolfps_valorantduoboostsiparis` (
  `valorantduoboostsiparis_id` int(11) NOT NULL,
  `valorantduoboostsiparis_mevcutlig` varchar(250) DEFAULT NULL,
  `valorantduoboostsiparis_mevcutasama` varchar(250) DEFAULT NULL,
  `valorantduoboostsiparis_hedeflig` varchar(250) DEFAULT NULL,
  `valorantduoboostsiparis_hedefasama` varchar(250) DEFAULT NULL,
  `valorantduoboostsiparis_sunucu` varchar(250) DEFAULT NULL,
  `valorantduoboostsiparis_karakter` varchar(250) DEFAULT NULL,
  `valorantduoboostsiparis_fiyat` varchar(250) DEFAULT NULL,
  `valorantduoboostsiparis_userid` varchar(250) DEFAULT NULL,
  `valorantduoboostsiparis_hesapad` varchar(250) DEFAULT NULL,
  `valorantduoboostsiparis_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `valorantduoboostsiparis_durum` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolfps_valorantduoboostsiparis`
--

INSERT INTO `bolfps_valorantduoboostsiparis` (`valorantduoboostsiparis_id`, `valorantduoboostsiparis_mevcutlig`, `valorantduoboostsiparis_mevcutasama`, `valorantduoboostsiparis_hedeflig`, `valorantduoboostsiparis_hedefasama`, `valorantduoboostsiparis_sunucu`, `valorantduoboostsiparis_karakter`, `valorantduoboostsiparis_fiyat`, `valorantduoboostsiparis_userid`, `valorantduoboostsiparis_hesapad`, `valorantduoboostsiparis_tarih`, `valorantduoboostsiparis_durum`) VALUES
(5, '2', '3', '2', '1', 'TR', 'Farketmez', '30', '3', 'pp', '2020-12-13 12:44:06', '');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_valorantelosiparis`
--

CREATE TABLE `bolfps_valorantelosiparis` (
  `valorantelosiparis_id` int(11) NOT NULL,
  `valorantelosiparis_mevcutlig` varchar(250) DEFAULT NULL,
  `valorantelosiparis_mevcutasama` varchar(250) DEFAULT NULL,
  `valorantelosiparis_hedeflig` varchar(250) DEFAULT NULL,
  `valorantelosiparis_hedefasama` varchar(250) DEFAULT NULL,
  `valorantelosiparis_sunucu` varchar(250) DEFAULT NULL,
  `valorantelosiparis_karakter` varchar(250) DEFAULT NULL,
  `valorantelosiparis_fiyat` varchar(250) DEFAULT NULL,
  `valorantelosiparis_userid` varchar(250) DEFAULT NULL,
  `valorantelosiparis_hesapad` varchar(250) DEFAULT NULL,
  `valorantelosiparis_hesapsifre` varchar(250) DEFAULT NULL,
  `valorantelosiparis_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `valorantelosiparis_durum` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolfps_valorantelosiparis`
--

INSERT INTO `bolfps_valorantelosiparis` (`valorantelosiparis_id`, `valorantelosiparis_mevcutlig`, `valorantelosiparis_mevcutasama`, `valorantelosiparis_hedeflig`, `valorantelosiparis_hedefasama`, `valorantelosiparis_sunucu`, `valorantelosiparis_karakter`, `valorantelosiparis_fiyat`, `valorantelosiparis_userid`, `valorantelosiparis_hesapad`, `valorantelosiparis_hesapsifre`, `valorantelosiparis_tarih`, `valorantelosiparis_durum`) VALUES
(4, '2', '3', '2', '1', 'TR', 'Farketmez', '30', '3', 'tt', 'tt', '2020-12-13 12:19:35', '0');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_winboost`
--

CREATE TABLE `bolfps_winboost` (
  `winboost_id` int(11) NOT NULL,
  `winboost_demir` varchar(250) DEFAULT NULL,
  `winboost_bronz` varchar(250) DEFAULT NULL,
  `winboost_gumus` varchar(250) DEFAULT NULL,
  `winboost_altin` varchar(250) DEFAULT NULL,
  `winboost_platin` varchar(250) DEFAULT NULL,
  `winboost_elmas` varchar(250) DEFAULT NULL,
  `winboost_ustalik` varchar(250) DEFAULT NULL,
  `winboost_indirimdurum` varchar(250) DEFAULT NULL,
  `winboost_indirim` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolfps_winboost`
--

INSERT INTO `bolfps_winboost` (`winboost_id`, `winboost_demir`, `winboost_bronz`, `winboost_gumus`, `winboost_altin`, `winboost_platin`, `winboost_elmas`, `winboost_ustalik`, `winboost_indirimdurum`, `winboost_indirim`) VALUES
(1, '6', '7', '8', '9', '13', '50', '25', '0', '0.1');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_winboostsiparis`
--

CREATE TABLE `bolfps_winboostsiparis` (
  `winboostsiparis_id` int(11) NOT NULL,
  `winboostsiparis_sonlig` varchar(250) DEFAULT NULL,
  `winboostsiparis_toplammac` varchar(250) DEFAULT NULL,
  `winboostsiparis_sunucu` varchar(250) DEFAULT NULL,
  `winboostsiparis_mevcutasama` varchar(250) DEFAULT NULL,
  `winboostsiparis_fiyat` varchar(250) DEFAULT NULL,
  `winboostsiparis_userid` varchar(250) DEFAULT NULL,
  `winboostsiparis_hesapad` varchar(250) DEFAULT NULL,
  `winboostsiparis_hesapsifre` varchar(250) DEFAULT NULL,
  `winboostsiparis_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `winboostsiparis_durum` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolfps_winboostsiparis`
--

INSERT INTO `bolfps_winboostsiparis` (`winboostsiparis_id`, `winboostsiparis_sonlig`, `winboostsiparis_toplammac`, `winboostsiparis_sunucu`, `winboostsiparis_mevcutasama`, `winboostsiparis_fiyat`, `winboostsiparis_userid`, `winboostsiparis_hesapad`, `winboostsiparis_hesapsifre`, `winboostsiparis_tarih`, `winboostsiparis_durum`) VALUES
(4, '6', '5', '1.5', '1', '425', '3', 'rr', 'rr', '2020-12-08 02:57:32', '0'),
(5, '1', '1', '1', '4', '6', '3', 'ff', 'ff', '2020-12-08 03:02:29', '0'),
(6, '1', '1', '1', '4', '6', '3', 'yy', 'yy', '2020-12-08 03:03:27', '0');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_yorum`
--

CREATE TABLE `bolfps_yorum` (
  `yorum_id` int(11) NOT NULL,
  `yorum_username` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `yorum_icerik` text COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `yorum_durum` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT 'pasif',
  `yorum_blogid` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `yorum_tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `bolfps_yorum`
--

INSERT INTO `bolfps_yorum` (`yorum_id`, `yorum_username`, `yorum_icerik`, `yorum_durum`, `yorum_blogid`, `yorum_tarih`) VALUES
(1, 'flysquare', 'bu haber çok iyi geldi', 'aktif', '1', '2020-10-30 22:56:59');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_ilk5macfiyat`
--

CREATE TABLE `bolfps_ilk5macfiyat` (
  `ilk5macfiyat_id` int(11) NOT NULL,
  `ilk5macfiyat_demir` varchar(250) DEFAULT NULL,
  `ilk5macfiyat_bronz` varchar(250) DEFAULT NULL,
  `ilk5macfiyat_gumus` varchar(250) DEFAULT NULL,
  `ilk5macfiyat_altin` varchar(250) DEFAULT NULL,
  `ilk5macfiyat_platin` varchar(250) DEFAULT NULL,
  `ilk5macfiyat_elmas` varchar(250) DEFAULT NULL,
  `ilk5macfiyat_olumsuzluk` varchar(250) DEFAULT NULL,
  `ilk5macfiyat_isiyan` varchar(250) DEFAULT NULL,
  `ilk5macfiyat_indirimdurum` varchar(250) DEFAULT NULL,
  `ilk5macfiyat_indirim` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolfps_ilk5macfiyat`
--

INSERT INTO `bolfps_ilk5macfiyat` (`ilk5macfiyat_id`, `ilk5macfiyat_demir`, `ilk5macfiyat_bronz`, `ilk5macfiyat_gumus`, `ilk5macfiyat_altin`, `ilk5macfiyat_platin`, `ilk5macfiyat_elmas`, `ilk5macfiyat_olumsuzluk`, `ilk5macfiyat_isiyan`, `ilk5macfiyat_indirimdurum`, `ilk5macfiyat_indirim`) VALUES
(1, '12', '12', '12', '12', '12', '20', '25', '20', '0', '0.1');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_ilk5macsiparis`
--

CREATE TABLE `bolfps_ilk5macsiparis` (
  `ilk5macsiparis_id` int(11) NOT NULL,
  `ilk5macsiparis_sonlig` varchar(250) DEFAULT NULL,
  `ilk5macsiparis_toplammac` varchar(250) DEFAULT NULL,
  `ilk5macsiparis_sunucu` varchar(250) DEFAULT NULL,
  `ilk5macsiparis_karakter` varchar(250) DEFAULT NULL,
  `ilk5macsiparis_fiyat` varchar(250) DEFAULT NULL,
  `ilk5macsiparis_userid` varchar(250) DEFAULT NULL,
  `ilk5macsiparis_hesapad` varchar(250) DEFAULT NULL,
  `ilk5macsiparis_hesapsifre` varchar(250) DEFAULT NULL,
  `ilk5macsiparis_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `ilk5macsiparis_durum` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolfps_ilk5macsiparis`
--

INSERT INTO `bolfps_ilk5macsiparis` (`ilk5macsiparis_id`, `ilk5macsiparis_sonlig`, `ilk5macsiparis_toplammac`, `ilk5macsiparis_sunucu`, `ilk5macsiparis_karakter`, `ilk5macsiparis_fiyat`, `ilk5macsiparis_userid`, `ilk5macsiparis_hesapad`, `ilk5macsiparis_hesapsifre`, `ilk5macsiparis_tarih`, `ilk5macsiparis_durum`) VALUES
(11, '7', '6', 'TR', '0', '150', '3', 'RE', 'RE', '2020-12-13 13:29:52', '');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_ilk10macfiyat`
--

CREATE TABLE `bolfps_ilk10macfiyat` (
  `ilk10macfiyat_id` int(11) NOT NULL,
  `ilk10macfiyat_demir` varchar(250) DEFAULT NULL,
  `ilk10macfiyat_bronz` varchar(250) DEFAULT NULL,
  `ilk10macfiyat_gumus` varchar(250) DEFAULT NULL,
  `ilk10macfiyat_altin` varchar(250) DEFAULT NULL,
  `ilk10macfiyat_platin` varchar(250) DEFAULT NULL,
  `ilk10macfiyat_elmas` varchar(250) DEFAULT NULL,
  `ilk10macfiyat_ustalik` varchar(250) DEFAULT NULL,
  `ilk10macfiyat_indirimdurum` varchar(250) DEFAULT NULL,
  `ilk10macfiyat_indirim` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolfps_ilk10macfiyat`
--

INSERT INTO `bolfps_ilk10macfiyat` (`ilk10macfiyat_id`, `ilk10macfiyat_demir`, `ilk10macfiyat_bronz`, `ilk10macfiyat_gumus`, `ilk10macfiyat_altin`, `ilk10macfiyat_platin`, `ilk10macfiyat_elmas`, `ilk10macfiyat_ustalik`, `ilk10macfiyat_indirimdurum`, `ilk10macfiyat_indirim`) VALUES
(1, '12', '12', '12', '12', '12', '20', '25', '0', '0.1');

-- --------------------------------------------------------

--
-- Table structure for table `bolfps_ilk10macsiparis`
--

CREATE TABLE `bolfps_ilk10macsiparis` (
  `ilk10macsiparis_id` int(11) NOT NULL,
  `ilk10macsiparis_sonlig` varchar(250) DEFAULT NULL,
  `ilk10macsiparis_toplammac` varchar(250) DEFAULT NULL,
  `ilk10macsiparis_sunucu` varchar(250) DEFAULT NULL,
  `ilk10macsiparis_duoboost` varchar(250) DEFAULT NULL,
  `ilk10macsiparis_fiyat` varchar(250) DEFAULT NULL,
  `ilk10macsiparis_userid` varchar(250) DEFAULT NULL,
  `ilk10macsiparis_hesapad` varchar(250) DEFAULT NULL,
  `ilk10macsiparis_hesapsifre` varchar(250) DEFAULT NULL,
  `ilk10macsiparis_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `ilk10macsiparis_durum` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolfps_ilk10macsiparis`
--

INSERT INTO `bolfps_ilk10macsiparis` (`ilk10macsiparis_id`, `ilk10macsiparis_sonlig`, `ilk10macsiparis_toplammac`, `ilk10macsiparis_sunucu`, `ilk10macsiparis_duoboost`, `ilk10macsiparis_fiyat`, `ilk10macsiparis_userid`, `ilk10macsiparis_hesapad`, `ilk10macsiparis_hesapsifre`, `ilk10macsiparis_tarih`, `ilk10macsiparis_durum`) VALUES
(2, '1', '1', '1', '1', '12', '3', 'ww', 'ww', '2020-12-06 22:03:06', '0'),
(4, '1', '1', '1', '4', '6', '3', 'ff', 'ff', '2020-12-08 02:52:48', '0'),
(5, '1', '1', '1', '4', '6', '3', 'xx', 'xx', '2020-12-08 02:53:13', '0'),
(6, '6', '5', '1.5', '1', '425', '3', 'rr', 'rr', '2020-12-08 02:57:32', '0'),
(7, '1', '1', '1', '4', '6', '3', 'ff', 'ff', '2020-12-08 03:02:29', '0'),
(8, '1', '1', '1', '1', '12', '3', 'xx', 'xx', '2020-12-08 03:03:54', '0'),
(9, '5', '5', '1.5', '1.5', '135', '3', 'tt', 'tt', '2020-12-12 14:29:49', '0'),
(10, '1', '1', '1', '1', '12', '3', 'cc', 'cc', '2020-12-12 14:30:09', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bolfps_admin`
--
ALTER TABLE `bolfps_admin`
  ADD PRIMARY KEY (`asdsda`);

--
-- Indexes for table `bolfps_bakiye`
--
ALTER TABLE `bolfps_bakiye`
  ADD PRIMARY KEY (`bolfps_id`);

--
-- Indexes for table `bolfps_challengerboostfiyat`
--
ALTER TABLE `bolfps_challengerboostfiyat`
  ADD PRIMARY KEY (`challengerboostfiyat_id`);

--
-- Indexes for table `bolfps_challengerboostsiparis`
--
ALTER TABLE `bolfps_challengerboostsiparis`
  ADD PRIMARY KEY (`challengerboostsiparis_id`);

--
-- Indexes for table `bolfps_duoboostsiparis`
--
ALTER TABLE `bolfps_duoboostsiparis`
  ADD PRIMARY KEY (`duoboostsiparis_id`);

--
-- Indexes for table `bolfps_eloboostsiparis`
--
ALTER TABLE `bolfps_eloboostsiparis`
  ADD PRIMARY KEY (`eloboostsiparis_id`);

--
-- Indexes for table `bolfps_haber`
--
ALTER TABLE `bolfps_haber`
  ADD PRIMARY KEY (`haber_id`);

--
-- Indexes for table `bolfps_haberkategori`
--
ALTER TABLE `bolfps_haberkategori`
  ADD PRIMARY KEY (`haberkategori_id`);

--
-- Indexes for table `bolfps_lolduofiyat`
--
ALTER TABLE `bolfps_lolduofiyat`
  ADD PRIMARY KEY (`lolduofiyat_id`);

--
-- Indexes for table `bolfps_lolelofiyat`
--
ALTER TABLE `bolfps_lolelofiyat`
  ADD PRIMARY KEY (`olelofiyat_id`);

--
-- Indexes for table `bolfps_lvalorantelofiyat`
--
ALTER TABLE `bolfps_lvalorantelofiyat`
  ADD PRIMARY KEY (`valorantelofiyat_id`);

--
-- Indexes for table `bolfps_normalmacsiparis`
--
ALTER TABLE `bolfps_normalmacsiparis`
  ADD PRIMARY KEY (`normalmacsiparis_id`);

--
-- Indexes for table `bolfps_oyunlar`
--
ALTER TABLE `bolfps_oyunlar`
  ADD PRIMARY KEY (`oyun_id`);

--
-- Indexes for table `bolfps_sunucu`
--
ALTER TABLE `bolfps_sunucu`
  ADD PRIMARY KEY (`sunucu_id`);

--
-- Indexes for table `bolfps_urun`
--
ALTER TABLE `bolfps_urun`
  ADD PRIMARY KEY (`urun_id`);

--
-- Indexes for table `bolfps_user`
--
ALTER TABLE `bolfps_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `bolfps_valorantduoboostfiyat`
--
ALTER TABLE `bolfps_valorantduoboostfiyat`
  ADD PRIMARY KEY (`valorantduoboostfiyat_id`);

--
-- Indexes for table `bolfps_valorantduoboostsiparis`
--
ALTER TABLE `bolfps_valorantduoboostsiparis`
  ADD PRIMARY KEY (`valorantduoboostsiparis_id`);

--
-- Indexes for table `bolfps_valorantelosiparis`
--
ALTER TABLE `bolfps_valorantelosiparis`
  ADD PRIMARY KEY (`valorantelosiparis_id`);

--
-- Indexes for table `bolfps_winboost`
--
ALTER TABLE `bolfps_winboost`
  ADD PRIMARY KEY (`winboost_id`);

--
-- Indexes for table `bolfps_winboostsiparis`
--
ALTER TABLE `bolfps_winboostsiparis`
  ADD PRIMARY KEY (`winboostsiparis_id`);

--
-- Indexes for table `bolfps_yorum`
--
ALTER TABLE `bolfps_yorum`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Indexes for table `bolfps_ilk5macfiyat`
--
ALTER TABLE `bolfps_ilk5macfiyat`
  ADD PRIMARY KEY (`ilk5macfiyat_id`);

--
-- Indexes for table `bolfps_ilk5macsiparis`
--
ALTER TABLE `bolfps_ilk5macsiparis`
  ADD PRIMARY KEY (`ilk5macsiparis_id`);

--
-- Indexes for table `bolfps_ilk10macfiyat`
--
ALTER TABLE `bolfps_ilk10macfiyat`
  ADD PRIMARY KEY (`ilk10macfiyat_id`);

--
-- Indexes for table `bolfps_ilk10macsiparis`
--
ALTER TABLE `bolfps_ilk10macsiparis`
  ADD PRIMARY KEY (`ilk10macsiparis_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bolfps_admin`
--
ALTER TABLE `bolfps_admin`
  MODIFY `asdsda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bolfps_bakiye`
--
ALTER TABLE `bolfps_bakiye`
  MODIFY `bolfps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bolfps_challengerboostfiyat`
--
ALTER TABLE `bolfps_challengerboostfiyat`
  MODIFY `challengerboostfiyat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bolfps_challengerboostsiparis`
--
ALTER TABLE `bolfps_challengerboostsiparis`
  MODIFY `challengerboostsiparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bolfps_duoboostsiparis`
--
ALTER TABLE `bolfps_duoboostsiparis`
  MODIFY `duoboostsiparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bolfps_eloboostsiparis`
--
ALTER TABLE `bolfps_eloboostsiparis`
  MODIFY `eloboostsiparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bolfps_haber`
--
ALTER TABLE `bolfps_haber`
  MODIFY `haber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bolfps_haberkategori`
--
ALTER TABLE `bolfps_haberkategori`
  MODIFY `haberkategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bolfps_lolduofiyat`
--
ALTER TABLE `bolfps_lolduofiyat`
  MODIFY `lolduofiyat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bolfps_lolelofiyat`
--
ALTER TABLE `bolfps_lolelofiyat`
  MODIFY `olelofiyat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bolfps_lvalorantelofiyat`
--
ALTER TABLE `bolfps_lvalorantelofiyat`
  MODIFY `valorantelofiyat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bolfps_normalmacsiparis`
--
ALTER TABLE `bolfps_normalmacsiparis`
  MODIFY `normalmacsiparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `bolfps_oyunlar`
--
ALTER TABLE `bolfps_oyunlar`
  MODIFY `oyun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bolfps_sunucu`
--
ALTER TABLE `bolfps_sunucu`
  MODIFY `sunucu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bolfps_urun`
--
ALTER TABLE `bolfps_urun`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bolfps_user`
--
ALTER TABLE `bolfps_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bolfps_valorantduoboostfiyat`
--
ALTER TABLE `bolfps_valorantduoboostfiyat`
  MODIFY `valorantduoboostfiyat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bolfps_valorantduoboostsiparis`
--
ALTER TABLE `bolfps_valorantduoboostsiparis`
  MODIFY `valorantduoboostsiparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bolfps_valorantelosiparis`
--
ALTER TABLE `bolfps_valorantelosiparis`
  MODIFY `valorantelosiparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bolfps_winboost`
--
ALTER TABLE `bolfps_winboost`
  MODIFY `winboost_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bolfps_winboostsiparis`
--
ALTER TABLE `bolfps_winboostsiparis`
  MODIFY `winboostsiparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bolfps_yorum`
--
ALTER TABLE `bolfps_yorum`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bolfps_ilk5macfiyat`
--
ALTER TABLE `bolfps_ilk5macfiyat`
  MODIFY `ilk5macfiyat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bolfps_ilk5macsiparis`
--
ALTER TABLE `bolfps_ilk5macsiparis`
  MODIFY `ilk5macsiparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bolfps_ilk10macfiyat`
--
ALTER TABLE `bolfps_ilk10macfiyat`
  MODIFY `ilk10macfiyat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bolfps_ilk10macsiparis`
--
ALTER TABLE `bolfps_ilk10macsiparis`
  MODIFY `ilk10macsiparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
