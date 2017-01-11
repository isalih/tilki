-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 11 Ara 2013, 15:09:27
-- Sunucu sürümü: 5.1.71
-- PHP Sürümü: 5.4.16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `admin_binarysh`
--
CREATE DATABASE `admin_binarysh` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `admin_binarysh`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `basliklar`
--

CREATE TABLE IF NOT EXISTS `basliklar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` text NOT NULL,
  `aktif` int(11) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `basliklar`
--

INSERT INTO `basliklar` (`id`, `baslik`, `aktif`, `time`) VALUES
(1, 'google', 1, '2013-12-10 20:56:24'),
(2, 'microsoft', 1, '2013-12-11 15:04:14'),
(3, 'apple', 1, '2013-12-11 15:05:12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyurular`
--

CREATE TABLE IF NOT EXISTS `duyurular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `duyuru` text NOT NULL,
  `aktif` int(11) NOT NULL,
  `baslikid` int(11) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Tablo döküm verisi `duyurular`
--

INSERT INTO `duyurular` (`id`, `duyuru`, `aktif`, `baslikid`, `time`) VALUES
(20, 'AdSense ve AdWords hizmetleri mevcuttur biri reklam yayınlama diğeri reklam verme hizmeti', 1, 1, '2013-12-10 20:56:03'),
(19, 'android adında mobil cihazlar için işletim sistemi var.', 1, 1, '2013-12-10 20:55:36'),
(18, 'son bir kaç senedir sadece arama motoru olmayıp bir çok işe imza atmış şirket yapısı', 1, 1, '2013-12-10 20:55:20'),
(17, 'Google bir arama motorudur.', 1, 1, '2013-12-10 20:55:01'),
(16, 'yakın zaman içerisinde neden ise windows mobile işine girmiş olan şirket', 1, 2, '2013-12-10 20:54:14'),
(13, 'Bill Gates Tarafından kurulan bir yazılım şirketidir.', 1, 2, '2013-12-10 20:52:44'),
(14, 'resmi site adı www.microsoft.com olup türkiye adresi www.microsoft.com.tr', 1, 2, '2013-12-10 20:53:03'),
(15, 'Windows adında bir masa üstü işletim sisteminin yapımcısı olan şirket', 1, 2, '2013-12-10 20:53:37'),
(21, '300 bini aşkın çalışanı olan büyük şirket kendileri', 1, 1, '2013-12-10 20:56:24'),
(22, 'steve jobs şirketidir', 1, 3, '2013-12-10 20:56:40'),
(23, 'iphone , ipad , imac gibi i ile başlayan ve bütün nesle örnek olan cihazların üreticisi', 1, 3, '2013-12-10 20:58:00'),
(24, 'Apple yazılımlardan çok teknolojik cihazlara önem vermiştir şuan kullandığımız bilgisayarların örnek aldığı tek kuruluş', 1, 3, '2013-12-10 20:58:42'),
(25, 'ibm ''n desteklediği firma', 1, 3, '2013-12-10 20:58:52'),
(26, 'uygulamalardan çok para kazanmış şirket', 1, 3, '2013-12-10 21:00:01'),
(27, 'en büyük markalardan birileridir kendileri', 1, 3, '2013-12-10 21:00:11'),
(28, 'son 10 yıldır kendilerini iyicene gösteren şirket', 1, 3, '2013-12-10 21:00:20'),
(29, 'genel olarak ürünleri maddi durumu iyi olan kesimlere hitap eder gel gelelim bizim türkiye için böyle bir durum geçerli değildir. herkes zengin', 1, 3, '2013-12-10 21:00:49'),
(30, 'türkiyeden her 10 kişiden 7 sinin elinde iphone görebilirsiniz gel gelelim hiç biri bu ürünü apple ürettiğini bilmez', 1, 3, '2013-12-10 21:01:20'),
(31, 'yakın zaman içerisinden kurucusu steve jobs hakkı rahmetine kavuşmuştur.', 1, 3, '2013-12-10 21:01:37'),
(32, 'filminden anladığım kadarı ile kurucusu SJ ''n çok takıntılı olduğunu ve en ufak hatayı kabullenemediğini düşündüğüm kuruluş', 1, 3, '2013-12-10 21:02:31'),
(33, 'sloganı iyidir aslında her ne ise işte', 1, 3, '2013-12-10 21:03:06'),
(38, 'bana<br />\n<br />\n           Gelecek ten bahset %20 şekilde', 1, 2, '2013-12-11 15:04:14'),
(37, 'Biziç %100 garantili işlerimiz var ', 1, 2, '2013-12-11 15:03:57'),
(36, 'yakın  zaman  içerisinden  kurucusu  steve  jobs  hakkı  rahmetine  kavuşmuştur.  %1001 test türkçe', 1, 3, '2013-12-11 15:02:02'),
(39, 'çok güzel olmuş ''''garantili %2000 garantisi', 1, 3, '2013-12-11 15:05:12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
