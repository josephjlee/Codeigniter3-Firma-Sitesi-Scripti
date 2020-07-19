-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Haz 2019, 05:31:11
-- Sunucu sürümü: 10.1.40-MariaDB
-- PHP Sürümü: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bal`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `email_settings`
--

CREATE TABLE `email_settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `protocol` varchar(10) DEFAULT NULL,
  `host` varchar(100) DEFAULT NULL,
  `port` varchar(10) DEFAULT '',
  `user` varchar(100) DEFAULT '',
  `password` varchar(100) DEFAULT '',
  `from` varchar(100) DEFAULT '',
  `to` varchar(100) DEFAULT '',
  `user_name` varchar(100) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `email_settings`
--

INSERT INTO `email_settings` (`id`, `protocol`, `host`, `port`, `user`, `password`, `from`, `to`, `user_name`, `isActive`, `createdAt`) VALUES
(1, 'smtp', 'smtp.mailtrap.io', '465', '4c2803aa5b391b', 'be4f6c33ce3ac7', 'ytoluyag@gmail.com', 'baba@gmail.com', 'Balci Baba', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `files`
--

CREATE TABLE `files` (
  `id` int(11) UNSIGNED NOT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `rank` int(255) DEFAULT NULL,
  `isActive` tinyint(255) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `files`
--

INSERT INTO `files` (`id`, `gallery_id`, `url`, `rank`, `isActive`, `createdAt`) VALUES
(2, 5, 'teklif-mektubu.docx', 0, 1, '2019-06-08 15:37:37'),
(3, 5, 'testworddoc.doc', 0, 1, '2019-06-09 01:05:58'),
(4, 5, 'sample.doc', 0, 1, '2019-06-09 01:06:03');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `gallery_name` varchar(100) DEFAULT NULL,
  `gallery_type` varchar(50) DEFAULT NULL,
  `folder_name` varchar(50) DEFAULT NULL,
  `rank` int(11) NOT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `url`, `gallery_name`, `gallery_type`, `folder_name`, `rank`, `isActive`, `createdAt`) VALUES
(2, 'Mortal Kombat', 'mortal-kombat', NULL, 'video', '', 0, 1, '2019-06-05 14:45:37'),
(5, 'dosya', 'dosya', NULL, 'file', 'dosya', 0, 1, '2019-06-08 15:17:13'),
(6, 'yeni sistem testi', 'yeni-sistem-testi', NULL, 'image', 'yeni-sistem-testi', 0, 1, '2019-06-08 15:34:42'),
(7, 'mahmut tuncer', 'mahmut-tuncer', NULL, 'image', 'mahmut-tuncer', 0, 1, '2019-06-08 16:33:22');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `images`
--

CREATE TABLE `images` (
  `id` int(11) UNSIGNED NOT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `rank` int(255) DEFAULT NULL,
  `isActive` tinyint(255) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `images`
--

INSERT INTO `images` (`id`, `gallery_id`, `url`, `rank`, `isActive`, `createdAt`) VALUES
(4, 6, 'dj-wallpapers-hd-free-download.jpg', 0, 1, '2019-06-08 15:36:14'),
(5, 6, 'bruno-kelzer-1117009-unsplash.jpg', 0, 1, '2019-06-08 15:47:26'),
(8, 6, 'santiago-esquivel-355737-unsplash.jpg', 0, 1, '2019-06-08 16:46:30');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `popups`
--

CREATE TABLE `popups` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext,
  `page` varchar(50) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `popup_unique_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `popups`
--

INSERT INTO `popups` (`id`, `title`, `description`, `page`, `isActive`, `createdAt`, `popup_unique_id`) VALUES
(1, 'Merhaba', '<p>Türkiye\'nin en büyük online arı yetiştirme sitesine hoş geldiniz.</p><ul><li>1</li><li>2</li><li>3</li></ul>', 'home_v', 1, '2019-06-08 01:08:57', '123456'),
(2, 'Üniversitemiz Kütüphanesi Ramazan Bayramı Tatili Duyurusu', '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 15px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style: none; font-family: Ubuntu, sans-serif; color: rgb(85, 85, 85); text-align: justify;\">Üniversitemizin değerli mensuplarının dikkatine;</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 15px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style: none; font-family: Ubuntu, sans-serif; color: rgb(85, 85, 85); text-align: justify;\">Ramazan Bayramı tatili nedeniyle Üniversitemiz&nbsp;Kütüphanesi&nbsp;31 Mayıs 2019 saat 18:00\'dan, 10 Haziran 2019 saat 08:30\'a kadar kapalıdır.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 15px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style: none; font-family: Ubuntu, sans-serif; color: rgb(85, 85, 85); text-align: justify;\">Bilgilerinize sunulur.</p>', 'about_v', 1, '2019-06-08 01:23:47', '655555'),
(4, '2019 Yılı Öğretmenler Günü Genelgesi Yayınlandı', '<p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/-DsRcM0cYPI\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><span style=\"color: rgb(33, 37, 41); font-family: Arial; font-size: 16px; text-align: justify;\"><br></span></p><p><span style=\"color: rgb(33, 37, 41); font-family: Arial; font-size: 16px; text-align: justify;\">2019 yılında Bakanlığımız koordinesinde yapılacak Öğretmenler Günü kutlama ve etkinliklerine ilişkin \"Öğretmenler Günü Genelgesi\" yayınlandı.</span><br></p>', 'contact_v', 1, '2019-06-08 01:50:45', '5cfaf8555c59a');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `bal_turu` varchar(255) NOT NULL,
  `paketleme` varchar(255) NOT NULL,
  `gramaj` varchar(255) NOT NULL,
  `uretim_yili` varchar(255) NOT NULL,
  `mensei` varchar(255) NOT NULL,
  `kullanim_alani` varchar(255) NOT NULL,
  `paket_ebatlari` varchar(255) NOT NULL,
  `koli_ebatlari` varchar(255) NOT NULL,
  `adet` varchar(255) NOT NULL,
  `fiyat` varchar(455) NOT NULL,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `url`, `title`, `description`, `bal_turu`, `paketleme`, `gramaj`, `uretim_yili`, `mensei`, `kullanim_alani`, `paket_ebatlari`, `koli_ebatlari`, `adet`, `fiyat`, `rank`, `isActive`, `createdAt`) VALUES
(1, 'akasya-bali', 'Akasya balı', '<p style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Üretildiği bölge:</span> Artvin yöresi</p><p style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">Artvin yöresi doğal bitki örtüsü ormanlarındaki Akasya ağacının çiçek özlerinin toplanmasıyla oluşuyor. Doğal koşullar göz önüne alındığında kendine has aromasıyla çok özgün bir bal. Kaçkar Akasya balı, diğer ballar arasında en iyi bal çünkü yerleşim alanlarına en az 10 km uzaklıktaki akasya ormanları içerisinde yer alan karakovanlardan elde ediliyor.</p><p style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Faydaları:</span> Bu bal çeşidi özellikle sinir sistemini koruyucu ve güçlendirici özelliğiyle bilinir. Ağız yaralarının tedavisi, akciğer hastalıklarının iyileştirilmesi, bağırsak iltihabının, bel ağrılarının, cilt lekelerinin giderilmesi, hafızanın güçlendirilmesi ve kanın temizlenmesinde büyük faydası mevcut.</p><p style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Fiyatı:</span> Kilogram fiyatı ortalama 100 TL.</p>', 'delix', 'Kavonozox', '1234x', '2014x', 'kırıkhanx', 'genelx', '32x23x', '65x23x', '12x', '65,68', 0, 1, '2019-06-11 16:02:57'),
(2, 'anzer-bali', 'Anzer balı', '<p style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Üretildiği bölge:</span>&nbsp;Ayder yaylası, Rize.</p><p style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">Rize’nin Ayder yaylasında üretilen bu bal oldukça ünlü ve eşsiz bir özelliğe sahip. Yapılan araştırmalara göre bu yaylada 450 – 500 çiçek çeşidi bulunuyor ve bunların içerisindeki 80-90 endemik çiçek sadece bu bölgede yer alıyor. Haziran ayının son haftasında arılar çiçeklerle buluşuyor ve ağustos ayının ortasına dek ballarını tamamlıyor. Yaylanın iklim şartlarına göre ağustos ayının birinci ya da ikinci haftasında başlayan hasat işlemiyle ballar kovanlardan alınıyor. Anzer’de ağaç yetişmediği için Anzer balında yalnızca bu yaylada yetişen endemik çiçeklerin polenleri bulunuyor. Bu nedenle balın sahte olup olmadığını anlamak için polen analizi yapılmakta. Ankara Hacettepe Üniversitesi’nde analiz edilerek balın garantisinin tescil edildiğini de belirtelim.</p><p style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">Herhangi bir katkı maddesi bulunmayan ballar, ısıl işlem görmeden sağılır. Sıcaklığın 40 derecenin üzerine çıkması durumunda bal içerisindeki enzimler ve polenler etkisiz hale geleceğinden Anzer balı soğuk sağım tekniğiyle üretiliyor.</p><p style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Faydaları:</span>&nbsp;Kahvaltılık bir bal olduğunu söyleyemeyeceğimiz Anzer balı, genellikle hastalıklara şifa niyetiyle tüketiliyor. Özellikle çabuk enerjiye dönüşen bir hazır gıda olduğu için sporculara güç vermek ve yorgunluklarını hafifletmek için kullanılır. Faydaları sayılamayacak kadar fazla olan Anzer balı, birçok hastalık, yara ve ağrının tedavisinde de oldukça etkili. Besin değerleri oldukça yüksek ve kaliteli bir bal olduğu için abartılı bir şekilde kullanılmamalı.</p><p style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Fiyatı:</span>&nbsp;2019 senesi için kilogram fiyatı 900 TL.</p>', 'meli', '', '', '', '', '', '', '', '', '', 0, 1, '2019-06-11 16:04:13'),
(3, 'aycicek-bali', 'Ayçiçek balı', '<p style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Üretildiği bölge:</span>&nbsp;Trakya bölgesi.</p><p style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">Ayçiçeği Trakya bölgesinde yoğun olarak yetiştirilen bir bitki türü. Arılar bu çiçekten nektar alırken bitkinin tozlaşmasına katkıda bulunur ve döllenmesini sağlar. Bu şekilde ürün kalitesine katkı sağlamış olur. Kovandan alındığında altın sarısı renginde olan bu bal, kendine özgü bir tada sahiptir. Ayçiçek balı çok çabuk kristalize olur, yani şekerlenir. Elde edilmesi ucuz ve kolay olduğu için arıcılar tarafından genellikle kovanlarda kış yiyeceği olarak kullanılır. Çiçek balıyla karıştırılıp satıldığı ve helva işleminde de kullanılır.</p><p style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Faydaları:</span>&nbsp;Doğal bir ateş düşürücü olan ayçiçek balı, bağışıklık sistemini güçlendirmesinin yanında akciğer ve birçok kanser çeşidinin tedavisine de yardımcı olur. Vücuda zindelik verdiği için günlük olarak tüketebilirsiniz.</p><p style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Fiyatı:</span>&nbsp;Toptan teneke fiyatı ortalama 270-280 TL.</p>', 'celi', '', '', '', '', '', '', '', '', '', 0, 1, '2019-06-11 16:04:59'),
(4, 'cam-bali', 'Çam balı', '<p style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Üretildiği bölge:</span>&nbsp;Türkiye geneli.</p><p style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\">Dünya çam balı üretiminin yüzde 90’ı ülkemizde yapılıyor. Çam balının en önemli özelliği, kıvamı bozulmadan veya donmadan yıllarca saklanabilmesi. Üretimi ise bir hayli ilginç: Çam ağaçlarında yaşayan ve “basra” olarak bilinen canlıların salgıladığı tatlı maddeler bal arıları tarafından toplanır ve değiştirilir. Bu balın oluşumu iki aşamada gerçekleşir. Bu bal çeşidi, diğer balların aksine arıların çiçeklerden topladığı nektarlardan değil, çam ağaçları üzerinde oluşan reçineleri işleyerek elde ettiği salgı balıdır. Yoğun olarak Ege ve Akdeniz bölgelerinde üretilir. İlkbahar – sonbahar aralığında işlenen bu bal, koyu bulanık kahverengi renktedir. Keskin bir tadı ve çam ağacına özgü rayihası vardır.</p><p style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Faydaları:</span>&nbsp;Besin değeri biraz düşük olsa da boğaz rahatsızlıklarına çok iyi gelir. Şekerlenmeye karşı dayanıklı olması ve önleyici özelliği ile tıpta ve gıda sektöründe birçok üründe doğal bir katkı maddesi olarak kullanılmaktadır.</p><p style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto; vertical-align: baseline; text-rendering: optimizelegibility; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Fiyatı:</span>&nbsp;Ortalama 50 TL’den başlıyor.</p>', 'keli', '', '', '', '', '', '', '', '', '', 0, 1, '2019-06-11 16:05:34'),
(5, 'dj', 'dj', '<p>dj</p>', 'zeli', '', '', '', '', '', '', '', '', '', 0, 1, '2019-06-11 16:11:53'),
(6, 'mj', 'mj', '<p>mj</p>', 'amk', '', '', '', '', '', '', '', '', '', 0, 1, '2019-06-11 16:12:00'),
(7, 'cj', 'cj', '<p>cj</p>', 'kamk', '', '', '', '', '', '', '', '', '', 0, 1, '2019-06-11 16:12:05'),
(8, 'haso', 'haso', '<p>haso</p>', 'samk', '', '', '', '', '', '', '', '', '', 0, 1, '2019-06-11 16:12:33'),
(9, 'bunun-basligi-nerde-amk', 'bunun başlıgı nerde amk', '<h2 style=\"font-family: Enriqueta, serif; font-weight: 400; line-height: 1.1; color: rgb(61, 61, 61); margin-top: 20px; margin-bottom: 10px; font-size: 20px;\"><span style=\"color: rgb(0, 0, 0);\"><span style=\"font-family: Arial;\">İzmir Arıcılar Birliği \'nden Çiçek Balı,  Egenia ile sofralarınıza geliyor.</span></span></h2><h2 style=\"font-family: Enriqueta, serif; font-weight: 400; line-height: 1.1; color: rgb(61, 61, 61); margin-top: 20px; margin-bottom: 10px; font-size: 20px;\"><span style=\"color: rgb(0, 0, 0);\"><span style=\"font-family: Arial;\">Kendileri için ve çocukları için enerji deposu sağlıklı kahvaltılık arayanlara duyurulur...</span></span></h2><h2 style=\"font-family: Enriqueta, serif; font-weight: 400; line-height: 1.1; color: rgb(61, 61, 61); margin-top: 20px; margin-bottom: 10px; font-size: 20px;\">Egenia ile afiyet olsun...</h2><h2 style=\"font-family: Enriqueta, serif; font-weight: 400; line-height: 1.1; color: rgb(61, 61, 61); margin-top: 20px; margin-bottom: 10px; font-size: 20px;\"> </h2><h2 style=\"font-family: Enriqueta, serif; font-weight: 400; line-height: 1.1; color: rgb(61, 61, 61); margin-top: 20px; margin-bottom: 10px; font-size: 20px;\"><span style=\"color: rgb(0, 0, 0);\">Net Ağırlık: 460 gr ve 850 gr </span></h2><h2 class=\"p\" style=\"font-family: Enriqueta, serif; font-weight: 400; line-height: 1.1; color: rgb(61, 61, 61); margin-top: 20px; margin-bottom: 10px; font-size: 20px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"> </h2><h2 class=\"p\" style=\"font-family: Enriqueta, serif; font-weight: 400; line-height: 1.1; color: rgb(61, 61, 61); margin-top: 20px; margin-bottom: 10px; font-size: 20px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"color: rgb(0, 0, 0);\"><span style=\"font-family: Arial; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">NOT: B</span><span style=\"font-family: Arial; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ir yaşından küçük bebeklere bal yedirilmemesi gerektiğini</span><span style=\"font-family: Arial; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">, </span><span style=\"font-family: Arial; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">şeker hastalarının bal tüketirken çok dikkatli olması gerektiğini </span><span style=\"font-family: Arial; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ve alerjisi olanların tüketirken dikkatli olması gerektiğini </span><span style=\"font-family: Arial; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">hatırlatalım.</span><span style=\"font-family: Arial; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"> </span></span></h2>', 'çiçek balı', 'Kavonoz', '460-850', '2019', 'izmir', 'genel', '9 x 9 x 15 cm | Desi = 0,40', '35 x 25 x 15 cm | Desi = 4,66', '12', '', 0, 1, '2019-06-13 03:47:14'),
(10, 'ananda-formenx', 'ananda formenx', '<p>formen baba alskdlaskdlaskd</p>', 'asdsaxx', 'asdsadxxx', 'asdsaxx', 'asdxxx', 'asdsaxxx', 'asdsadxxx', 'asasdsaxx', 'asdsadxx', 'asdsadxxx', '', 0, 1, '2019-06-13 05:09:25');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(11) DEFAULT NULL,
  `isCover` tinyint(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `img_url`, `rank`, `isActive`, `isCover`, `createdAt`) VALUES
(1, 6, 'ieajgo.jpeg', 2, 1, 0, '2019-06-02 05:15:03'),
(2, 6, '426319.jpg', 0, 0, 0, '2019-06-02 05:15:03'),
(4, 6, 'stretched-1920-1080-885397.jpg', 1, 1, 1, '2019-06-02 05:15:03'),
(11, 8, 'stretched-1920-1080-8853972.jpg', 0, 1, 1, '2019-06-05 18:56:02'),
(13, 13, 'mahmut-tuncer-fe7088.jpg', 0, 1, 1, '2019-06-09 16:11:13'),
(14, 1, 'akasya-bali.jpg', 0, 1, 1, '2019-06-11 16:03:45'),
(15, 2, 'anzer.jpg', 0, 1, 1, '2019-06-11 16:04:32'),
(16, 3, 'aycicek-bali.jpg', 0, 1, 1, '2019-06-11 16:05:16'),
(17, 4, 'cam-bali-2.jpg', 0, 1, 1, '2019-06-11 16:06:44'),
(18, 1, 'anzer1.jpg', 0, 1, 0, '2019-06-11 16:09:59'),
(19, 1, 'akasya-bali1.jpg', 0, 1, 0, '2019-06-11 16:09:59'),
(20, 1, 'bee-icon-png-1.png', 0, 1, 0, '2019-06-11 16:10:00'),
(21, 1, 'aycicek-bali1.jpg', 0, 1, 0, '2019-06-11 16:10:00'),
(22, 1, 'bees-png-90262.jpg', 0, 1, 0, '2019-06-11 16:10:00'),
(23, 1, 'bruno-kelzer-1117009-unsplash.jpg', 0, 1, 0, '2019-06-11 16:10:00'),
(24, 1, 'cam-bali-21.jpg', 0, 1, 0, '2019-06-11 16:10:00'),
(25, 1, 'image.jpg', 0, 1, 0, '2019-06-11 16:10:00'),
(26, 1, 'mahmut-tuncer-fe7088.jpg', 0, 1, 0, '2019-06-11 16:10:00'),
(27, 1, 'santiago-esquivel-355737-unsplash.jpg', 0, 1, 0, '2019-06-11 16:10:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `about_us` longtext,
  `mission` longtext,
  `vision` longtext,
  `logo` varchar(255) DEFAULT NULL,
  `mobile_logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `phone_1` varchar(15) DEFAULT NULL,
  `phone_2` varchar(15) DEFAULT NULL,
  `fax_1` varchar(15) DEFAULT NULL,
  `fax_2` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `company_name`, `address`, `about_us`, `mission`, `vision`, `logo`, `mobile_logo`, `favicon`, `phone_1`, `phone_2`, `fax_1`, `fax_2`, `email`, `facebook`, `twitter`, `instagram`, `linkedin`, `createdAt`, `updatedAt`) VALUES
(1, 'Balcı Oğlu', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <span style=\"color: rgb(102, 102, 102); font-family: Arial, sans-serif; font-size: 16px; text-align: justify;\">Hürriyet Bulvarı, M. Münir Birsel Plaza B Blok, No: 18 Kat: 3 Konak/İZMİR</span>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Yıllardan gelen gıda sektöründeki tecrübelerimiz ile Kars & Alioğlu ticaret farkını yaşamalısınız, gerek Kars’ da gerekse Türkiye’ nin her bölgesinde ki müşterilerimizin memnuniyeti ve bize olan güvenleri bizi tercih etmeniz için yeterli olacaktır. Dilediğiniz taktirde referanslarımız ile görüşmenize aracı olabiliriz.\r\n\r\nTamamen doğal ve Organik yöntemlerle elde edilen ürünlerimizi  havale  kredi kartı yonetmıyle uygun bütçeli anlaşmalı korgo firmaları aracılığı ile aynı gün kargo ederek size  dogal ve taze bir şekilde  damak tadınıza  sunmaktır                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                asdasd                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                asdsad                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', 'balci-oglu.png', 'balci-oglu.png', 'balci-oglu.jpg', '0232 441 96 72', '22222', '0232 425 81 08', '44444', 'ytoluyag@gmail.com', 'a', 's', 'https://www.instagram.com/baba.py/', 'w', '2019-06-05 11:20:55', '2019-06-09 05:20:32');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slides`
--

CREATE TABLE `slides` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `allowButton` tinyint(4) DEFAULT NULL,
  `img_url` varchar(255) NOT NULL,
  `button_url` varchar(255) DEFAULT NULL,
  `button_caption` varchar(25) DEFAULT NULL,
  `animation_type` varchar(255) DEFAULT NULL,
  `animation_time` int(11) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `slides`
--

INSERT INTO `slides` (`id`, `title`, `description`, `allowButton`, `img_url`, `button_url`, `button_caption`, `animation_type`, `animation_time`, `rank`, `isActive`, `createdAt`) VALUES
(1, 'videosınıf yayında', '<p><span style=\"font-family: \"Open Sans\", Arial, sans-serif; text-align: justify;\">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown print', 0, 'view-bigben.jpg', '', '', NULL, NULL, 1, 1, '2019-06-07 15:31:46'),
(2, 'baba linux yeni sürümü yayımlandı', '<p>muhteşem yerli milli linux dağıtımı yayında efendim</p>', 1, 'videosinif-proje.png', 'https://babalinux.blogspot.com/', 'Son Sürümü İndir', NULL, NULL, 0, 1, '2019-06-07 15:45:53'),
(3, 'Santiago Esquivel', '<div class=\"_36ib3 _4y7Gs\" style=\"padding: 4px; display: flex; align-items: center;\"><h3 class=\"_3Gbbu _1aofb\" style=\"margin-bottom: 0px;\">Say thanks</h3><div class=\"J3_TU\" style=\"margin-left: auto;\"><a title=\"Share on Facebook\" href=\"https://www.facebook', 0, 'santiago-esquivel-355737-unsplash.jpg', '', '', NULL, NULL, 2, 1, '2019-06-07 16:06:50');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `user_name`, `full_name`, `email`, `password`, `isActive`, `createdAt`) VALUES
(1, 'osmancos', 'Osman Yandan Bakan', 'dj@veli.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, '2019-06-03 23:15:29'),
(2, 'yuceltoluyag', 'yücel toluyağ', 'baba@baba.com', 'aa296a38561e42ccadc049efe7421615', 1, '2019-06-03 23:44:37');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `videos`
--

CREATE TABLE `videos` (
  `id` int(11) UNSIGNED NOT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `rank` int(255) DEFAULT NULL,
  `isActive` tinyint(255) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `videos`
--

INSERT INTO `videos` (`id`, `gallery_id`, `url`, `rank`, `isActive`, `createdAt`) VALUES
(1, 13, 'https://www.youtube.com/embed/7P91UTnDqBU', 0, 1, '2019-06-03 17:57:47'),
(2, 2, '6zRA2nHwkdE', 0, 1, '2019-06-08 15:20:53'),
(3, 2, 'fYOXs7pjirA', 0, 1, '2019-06-08 22:58:42'),
(4, 2, 'ZdcuXlulTlA', 0, 1, '2019-06-09 00:54:57');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `email_settings`
--
ALTER TABLE `email_settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `popups`
--
ALTER TABLE `popups`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `email_settings`
--
ALTER TABLE `email_settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `popups`
--
ALTER TABLE `popups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
