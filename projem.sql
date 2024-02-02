/*
Navicat MySQL Data Transfer

Source Server         : .
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : projem

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-02-02 23:18:26
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `anasayfa`
-- ----------------------------
DROP TABLE IF EXISTS `anasayfa`;
CREATE TABLE `anasayfa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` text COLLATE utf8_turkish_ci DEFAULT '',
  `acıklama` text COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of anasayfa
-- ----------------------------
INSERT INTO `anasayfa` VALUES ('1', 'Konfor ve sağlamlığı tercih edenler için', 'Öne çıkarılan ürünlerimiz.');

-- ----------------------------
-- Table structure for `blog`
-- ----------------------------
DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yorumlar` text COLLATE utf8_turkish_ci DEFAULT '',
  `isim` text COLLATE utf8_turkish_ci DEFAULT '',
  `resim` text COLLATE utf8_turkish_ci DEFAULT '\'\'',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of blog
-- ----------------------------
INSERT INTO `blog` VALUES ('1', 'Yılların getirdiği kalite çok belli.', 'İlker Yılmaz', 'person_1.jpg');
INSERT INTO `blog` VALUES ('2', 'Eşimle ilk evimizi acar mobilyadan dizdik. Aradığımız aile saadetini kurma fırsatını kalifiyeli personelleriyle bize sağladılar. Çok teşekkür ederiz.', 'Tola Löktas', 'person_2.jpg');

-- ----------------------------
-- Table structure for `genel_bilgiler`
-- ----------------------------
DROP TABLE IF EXISTS `genel_bilgiler`;
CREATE TABLE `genel_bilgiler` (
  `id` int(11) NOT NULL,
  `site_adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `hakkinda` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `baslık` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kullanici` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sifre` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of genel_bilgiler
-- ----------------------------
INSERT INTO `genel_bilgiler` VALUES ('0', 'Acar mobilya', 'Yaşam alanlarınızda keyifli bir hayat sürün', 'Mobilyanın Başkenti İnegölden', 'Bursa/İnegöl Mobilyum avm', '0379395889', 'admin', 'admin');

-- ----------------------------
-- Table structure for `hakkinda`
-- ----------------------------
DROP TABLE IF EXISTS `hakkinda`;
CREATE TABLE `hakkinda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `abaslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `aaciklama` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `bbaslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `baciklama` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `cbaslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `caciklama` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `dbaslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `daciklama` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ebaslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `eaciklama` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of hakkinda
-- ----------------------------
INSERT INTO `hakkinda` VALUES ('1', 'Hakkımızda', '1975 de İnegölde doğup büyüyen firmamız gururla hizmetinizde ', 'Neden Bizi Tercih Etmelisiniz', 'Acar Mobilya, ürün çeşitliliği, tasarım farklılıkları, kalite anlayışı ve satış sonrası hizmetleri ile her zaman yanınızda', 'Hızlı ve Ücretsiz Teslimat', 'Siparişleriniz özenle paketlenip en kısa sürede ücretsiz bir şekilde elinize ulaştırılır', 'Kolay Alışveriş', 'Temiz ve kullanıcı dostu arayüz ile kolay alışveriş imkanı', 'Canlı Destek', 'Hafta içi saat 9:00-01:00 - hafta sonu 10:00-12:00 arası canlı destek imkanı ', 'Kolay İade', 'Üründen memnun kalmamanız taktirde 5 gün içerisinde ücretsiz iade hakkı');

-- ----------------------------
-- Table structure for `iletisim`
-- ----------------------------
DROP TABLE IF EXISTS `iletisim`;
CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of iletisim
-- ----------------------------
INSERT INTO `iletisim` VALUES ('0', 'asdasd sokak mahmah mah.', '1233211230');

-- ----------------------------
-- Table structure for `musteriler`
-- ----------------------------
DROP TABLE IF EXISTS `musteriler`;
CREATE TABLE `musteriler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `e_mail` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `tel_no` bigint(11) unsigned NOT NULL,
  `sifre` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `uyelik_turu` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of musteriler
-- ----------------------------
INSERT INTO `musteriler` VALUES ('64', 'İlkay', 'Acar', 'admin@admin.com', '0', '66b65567cedbc743bda3417fb813b9', '2');
INSERT INTO `musteriler` VALUES ('65', 'asd', 'asd', 'ilkay.acar22@gmail.com', '12345678901', 'b2d788831e574923738e41c7f80b64', '1');
INSERT INTO `musteriler` VALUES ('66', 'asd', 'asd', 'asd@asd.com', '12345678901', '893805c367ede734f46870211c8117', '1');
INSERT INTO `musteriler` VALUES ('67', 'asd', 'asd', 'a@a.com', '12345678904', '558736e395e22b5f3a27cba635f0df', '1');
INSERT INTO `musteriler` VALUES ('68', 'elif', 'nur', 'elelifnurakin@hotmail.com', '12312312312', '70af8c061041caaee0c80bc65a90d2', '1');

-- ----------------------------
-- Table structure for `urunler`
-- ----------------------------
DROP TABLE IF EXISTS `urunler`;
CREATE TABLE `urunler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(255) COLLATE utf8_turkish_ci DEFAULT '',
  `konumu` varchar(255) COLLATE utf8_turkish_ci DEFAULT '',
  `fiyat` int(11) DEFAULT NULL,
  `kategori` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of urunler
-- ----------------------------
INSERT INTO `urunler` VALUES ('1', 'Avangard Koltuk', 'koltuklar/123.png', '6000', '1');
INSERT INTO `urunler` VALUES ('2', 'Modern Sandalye', 'sandalyeler/423.png', '750', '2');
INSERT INTO `urunler` VALUES ('3', 'Modern Koltuk Takımı', 'koltuklar/322.png', '11400', '1');
INSERT INTO `urunler` VALUES ('4', 'Modern Koltuk', 'koltuklar/321.png', '7000', '1');
INSERT INTO `urunler` VALUES ('5', 'Modern Sandalye', 'sandalyeler/501.png', '1600', '2');
INSERT INTO `urunler` VALUES ('6', 'Modern Sandalye', 'sandalyeler/502.png', '1750', '2');
INSERT INTO `urunler` VALUES ('7', 'Sandalye Takımı', 'sandalyeler/430.png', '3500', '2');
INSERT INTO `urunler` VALUES ('8', 'Klasik Sandalye', 'sandalyeler/421.png', '800', '2');
INSERT INTO `urunler` VALUES ('9', 'Tekli Koltuk', 'koltuklar/sofa.png', '1250', '1');
INSERT INTO `urunler` VALUES ('10', 'Klasik Sandalye', 'sandalyeler/420.png', '800', '2');
INSERT INTO `urunler` VALUES ('11', 'Klasik Sandalye', 'sandalyeler/422.png', '100', '2');
INSERT INTO `urunler` VALUES ('15', 'Ofis Sandalyesi', 'sandalyeler/424.png', '1000', '2');
INSERT INTO `urunler` VALUES ('16', 'Modern Koltuk', 'koltuklar/124.png', '6000', '1');
INSERT INTO `urunler` VALUES ('17', 'Modern Koltuk', 'koltuklar/couch.png', '7000', '1');
INSERT INTO `urunler` VALUES ('21', 'Modern Koltuk', 'koltuklar/125.png', '8000', '1');
INSERT INTO `urunler` VALUES ('22', 'Modern Koltuk', 'koltuklar/126.png', '7500', '1');
INSERT INTO `urunler` VALUES ('23', 'Modern Koltuk', 'koltuklar/127.png', '7000', '1');
INSERT INTO `urunler` VALUES ('24', 'Bahçe Sandalyesi', 'sandalyeler/425.png', '2500', '2');

-- ----------------------------
-- Table structure for `uyelik_turleri`
-- ----------------------------
DROP TABLE IF EXISTS `uyelik_turleri`;
CREATE TABLE `uyelik_turleri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kitap_sayisi` smallint(6) NOT NULL,
  `odunc_suresi` smallint(6) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of uyelik_turleri
-- ----------------------------
INSERT INTO `uyelik_turleri` VALUES ('1', 'Yeni Üye', '3', '30');
INSERT INTO `uyelik_turleri` VALUES ('2', 'admin', '10', '60');
INSERT INTO `uyelik_turleri` VALUES ('3', 'Üye', '5', '45');
