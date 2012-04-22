# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: memefriend.db.8550815.hostedresource.com (MySQL 5.0.92-log)
# Database: memefriend
# Generation Time: 2012-02-01 04:27:47 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table facebook_images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `facebook_images`;

CREATE TABLE `facebook_images` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `path` varchar(30) default NULL,
  `user` varchar(100) default NULL,
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `meme_path` varchar(50) default NULL,
  `reported` int(1) NOT NULL default '0',
  `popularity` int(10) NOT NULL default '0',
  `approved` int(1) NOT NULL default '0',
  `meme_name` varchar(200) default NULL,
  `private` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `facebook_images` WRITE;
/*!40000 ALTER TABLE `facebook_images` DISABLE KEYS */;

INSERT INTO `facebook_images` (`id`, `path`, `user`, `timestamp`, `meme_path`, `reported`, `popularity`, `approved`, `meme_name`, `private`)
VALUES
	(1,'photos/1320031498.jpg','511495152','2011-10-30 21:24:58','memes/1320031668.png',0,1,1,'Brotherly Love',0),
	(78,'photos/1320269447.jpg','100002093517200','2011-11-02 14:30:47','memes/1320269524.png',0,2,1,'Look at me Casey',0),
	(4,'photos/1320032968.jpg','1228706436','2011-10-30 21:49:28','memes/1320033053.png',0,5,1,'',0),
	(5,'photos/1320032993.jpg','9402310','2011-10-30 21:49:53','memes/1320033029.png',0,0,1,'',0),
	(6,'photos/1320033089.jpg','1228706436','2011-10-30 21:51:29','memes/1320033116.png',0,0,1,'',0),
	(7,'photos/1320033154.jpg','1228706436','2011-10-30 21:52:34','memes/1320033182.png',0,0,1,'',0),
	(8,'photos/1320033232.jpg','1228706436','2011-10-30 21:53:52','memes/1320033318.png',0,3,1,'',0),
	(10,'photos/1320036667.jpg','699568940','2011-10-30 22:51:07','memes/1320036732.png',0,2,1,'',0),
	(77,'photos/1320269347.jpg','100002093517200','2011-11-02 14:29:07','memes/1320269391.png',0,1,1,'',0),
	(17,'photos/1320040580.jpg','100003014124057','2011-10-30 23:56:20','memes/1320040661.png',0,1,1,'',0),
	(18,'photos/1320042842.jpg','511495152','2011-10-31 00:34:02','memes/1320042904.png',0,1,1,'Sensitive Sally',0),
	(76,'photos/1320269214.jpg','100002093517200','2011-11-02 14:26:54','memes/1320269303.png',0,1,1,'',0),
	(74,'photos/1320262126.jpg','511495152','2011-11-02 12:28:46','memes/1320262231.png',0,1,1,'The Ref',0),
	(25,'photos/1320079643.jpg','1586801583','2011-10-31 09:47:23','memes/1320079772.png',0,0,1,'',0),
	(72,'photos/1320261877.jpg','632975563','2011-11-02 12:24:37','memes/1320262004.png',0,7,1,'Out of Place City Kid',0),
	(28,'photos/1320086039.jpg','632975563','2011-10-31 11:33:59','memes/1320086166.png',0,0,1,'Oblivious Indoorsman',0),
	(71,'photos/1320253690.jpg','1586801583','2011-11-02 10:08:10','memes/1320253838.png',0,0,1,'',0),
	(70,'photos/1320253242.jpg','1377928601','2011-11-02 10:00:42','memes/1320253478.png',0,1,1,'',0),
	(57,'photos/1320178298.jpg','1091289284','2011-11-01 13:11:38','memes/1320178330.png',0,0,1,'',0),
	(56,'photos/1320177703.jpg','1091289284','2011-11-01 13:01:43','memes/1320177734.png',0,0,1,'',0),
	(44,'photos/1320088736.jpg','1377928601','2011-10-31 12:18:56','memes/1320089387.png',0,1,1,'',0),
	(45,'photos/1320089089.jpg','1377928601','2011-10-31 12:24:49','memes/1320089143.png',0,6,1,'',0),
	(46,'photos/1320089743.jpg','1447519080','2011-10-31 12:35:43','memes/1320089775.png',0,-1,1,'',0),
	(47,'photos/1320090404.jpg','1510571853','2011-10-31 12:46:44','memes/1320090598.png',0,27,1,'',0),
	(52,'photos/1320132970.jpg','1528830060','2011-11-01 00:36:10','memes/1320133109.png',0,0,1,'',0),
	(66,'photos/1320251763.jpg','1377928601','2011-11-02 09:36:03','memes/1320251970.png',0,6,1,'',0),
	(48,'photos/1320100253.jpg','1447519080','2011-10-31 15:30:53','memes/1320100287.png',0,0,1,'',0),
	(51,'photos/1320132493.jpg','1586801583','2011-11-01 00:28:13','memes/1320132708.png',0,0,1,'',0),
	(383,'photos/1322610225.jpg','511495152','2011-11-29 16:48:43','memes/1322610523.png',0,0,1,'Charlie Kelly',0),
	(79,'photos/1320269561.jpg','100002093517200','2011-11-02 14:32:41','memes/1320269632.png',0,6,1,'',0),
	(83,'photos/1320270053.jpg','100002093517200','2011-11-02 14:40:53','memes/1320270167.png',0,0,1,'',0),
	(84,'photos/1320270206.jpg','100002093517200','2011-11-02 14:43:26','memes/1320270409.png',0,0,1,'',0),
	(85,'photos/1320283698.jpg','1447519080','2011-11-02 18:28:18','memes/1320283829.png',0,0,1,'',0),
	(118,'photos/1320293641.jpg','1091289284','2011-11-02 21:14:01','memes/1320294129.png',0,0,1,'',0),
	(87,'photos/1320290059.jpg','1528830060','2011-11-02 20:14:19','memes/1320290181.png',0,0,1,'',0),
	(88,'photos/1320290191.jpg','1528830060','2011-11-02 20:16:31','memes/1320290238.png',0,2,1,'',0),
	(90,'photos/1320290478.jpg','1228706436','2011-11-02 20:21:18','memes/1320290509.png',0,16,1,'',0),
	(91,'photos/1320290519.jpg','1228706436','2011-11-02 20:21:59','memes/1320290544.png',0,0,1,'',0),
	(92,'photos/1320290562.jpg','1171899535','2011-11-02 20:22:42','memes/1320290971.png',0,3,1,'',0),
	(94,'photos/1320290753.jpg','1228706436','2011-11-02 20:25:53','memes/1320290765.png',0,0,1,'',0),
	(95,'photos/1320290792.jpg','1228706436','2011-11-02 20:26:32','memes/1320290809.png',0,2,1,'',0),
	(96,'photos/1320290855.jpg','1228706436','2011-11-02 20:27:35','memes/1320290905.png',0,0,1,'',0),
	(99,'photos/1320291013.jpg','1228706436','2011-11-02 20:30:13','memes/1320291042.png',0,0,1,'',0),
	(100,'photos/1320291078.jpg','1171899535','2011-11-02 20:31:18','memes/1320291264.png',0,0,1,'',0),
	(101,'photos/1320291094.jpg','1228706436','2011-11-02 20:31:34','memes/1320291129.png',0,0,1,'',0),
	(103,'photos/1320291166.jpg','1228706436','2011-11-02 20:32:46','memes/1320291182.png',0,1,1,'',0),
	(104,'photos/1320291204.jpg','1228706436','2011-11-02 20:33:24','memes/1320291231.png',0,19,1,'Crow-Magnum',0),
	(112,'photos/1320291937.jpg','1171899535','2011-11-02 20:45:37','memes/1320292030.png',0,2,1,'',0),
	(106,'photos/1320291332.jpg','1228706436','2011-11-02 20:35:32','memes/1320291377.png',0,0,1,'',0),
	(108,'photos/1320291483.jpg','1539990026','2011-11-02 20:38:03','memes/1320291527.png',0,1,1,'',0),
	(109,'photos/1320291527.jpg','1171899535','2011-11-02 20:38:47','memes/1320291834.png',0,1,1,'',0),
	(111,'photos/1320291682.jpg','1539990026','2011-11-02 20:41:22','memes/1320291743.png',0,-1,1,'',0),
	(113,'photos/1320292088.jpg','1171899535','2011-11-02 20:48:08','memes/1320292385.png',0,0,1,'',0),
	(115,'photos/1320292756.jpg','1539990026','2011-11-02 20:59:16','memes/1320292819.png',0,0,1,'',0),
	(116,'photos/1320293061.jpg','100002093517200','2011-11-02 21:04:21','memes/1320293285.png',0,1,1,'',0),
	(117,'photos/1320293367.jpg','100002093517200','2011-11-02 21:09:27','memes/1320293554.png',0,0,1,'',0),
	(121,'photos/1320293898.jpg','100002093517200','2011-11-02 21:18:18','memes/1320294000.png',0,0,1,'',0),
	(122,'photos/1320293902.jpg','1539990026','2011-11-02 21:18:22','memes/1320293970.png',0,0,1,'',0),
	(123,'photos/1320294089.jpg','1539990026','2011-11-02 21:21:29','memes/1320294152.png',0,0,1,'',0),
	(125,'photos/1320294575.jpg','1091289284','2011-11-02 21:29:35','memes/1320294658.png',0,1,1,'',0),
	(126,'photos/1320295054.jpg','1091289284','2011-11-02 21:37:34','memes/1320295092.png',0,2,1,'',0),
	(128,'photos/1320297575.jpg','100002093517200','2011-11-02 22:19:35','memes/1320297663.png',0,0,1,'',0),
	(129,'photos/1320297807.jpg','100002093517200','2011-11-02 22:23:27','memes/1320298045.png',0,0,1,'',0),
	(135,'photos/1320356968.jpg','1407540040','2011-11-03 14:49:28','memes/1320357031.png',0,6,1,'',0),
	(138,'photos/1320372460.jpg','40104129','2011-11-03 19:07:40','memes/1320372617.png',0,0,1,'',0),
	(139,'photos/1320372730.jpg','40104129','2011-11-03 19:12:10','memes/1320372758.png',0,9,1,'',0),
	(143,'photos/1320380119.jpg','1539990026','2011-11-03 21:15:19','memes/1320380201.png',0,1,1,'',0),
	(144,'photos/1320380846.jpg','1377928601','2011-11-03 21:27:26','memes/1320380890.png',0,0,1,'',0),
	(147,'photos/1320385945.jpg','632975563','2011-11-03 22:52:25','memes/1320386060.png',0,0,1,'Busted A** Ride',0),
	(331,'photos/1321588454.jpg','632975563','2011-11-17 20:54:14',NULL,0,0,1,'',0),
	(160,'photos/1320445318.jpg','511495152','2011-11-04 15:21:58','memes/1320445389.png',0,1,1,'Gonz Too Far',0),
	(162,'photos/1320450747.jpg','632975563','2011-11-04 16:52:27','memes/1320450803.png',0,-1,1,'See All Sammy',0),
	(173,'photos/1320459761.jpg','1377928601','2011-11-04 19:22:41','memes/1320459801.png',0,21,1,'',0),
	(172,'photos/1320459699.jpg','1377928601','2011-11-04 19:21:39','memes/1320459724.png',0,1,1,'',0),
	(167,'photos/1320455443.jpg','1228706436','2011-11-04 18:10:43','memes/1320455485.png',0,-1,1,'',0),
	(168,'photos/1320455535.jpg','1228706436','2011-11-04 18:12:15','memes/1320455570.png',0,-1,1,'',0),
	(169,'photos/1320455653.jpg','1228706436','2011-11-04 18:14:13','memes/1320455707.png',0,3,1,'',0),
	(170,'photos/1320455747.jpg','1228706436','2011-11-04 18:15:47','memes/1320455840.png',0,0,1,'',0),
	(179,'photos/1320472855.jpg','511495152','2011-11-04 23:00:55','memes/1320472923.png',0,4,1,'Wigger College Student',0),
	(181,'photos/1320510736.jpg','1377928601','2011-11-05 09:32:16','memes/1320510764.png',0,4,1,'Sample Name',0),
	(183,'photos/1320527527.jpg','632975563','2011-11-05 14:12:07','memes/1320527558.png',0,2,1,'Your Majesty',0),
	(186,'photos/1320530602.jpg','511495152','2011-11-05 15:03:22','memes/1320530661.png',0,0,1,'Carolton 2012',0),
	(188,'photos/1320535828.jpg','632975563','2011-11-05 16:30:28','memes/1320535889.png',0,3,1,'Knit Knight',0),
	(190,'photos/1320558447.jpg','1586801583','2011-11-05 22:47:27','memes/1320558880.png',0,5,1,'',0),
	(191,'photos/1320571823.jpg','1523850059','2011-11-06 02:30:23','memes/1320572000.png',0,-4,1,'',0),
	(193,'photos/1320609139.jpg','1377928601','2011-11-06 12:52:19','memes/1320609168.png',0,8,1,'',0),
	(195,'photos/1320609848.jpg','1377928601','2011-11-06 13:04:08','memes/1320609868.png',0,1,1,'',0),
	(196,'photos/1320610260.jpg','1377928601','2011-11-06 13:11:00','memes/1320610292.png',0,28,1,'',0),
	(197,'photos/1320626272.jpg','511495152','2011-11-06 17:37:52','memes/1320626372.png',0,4,1,'Rapist Mike',0),
	(199,'photos/1320633458.jpg','1377928601','2011-11-06 19:37:38','memes/1320633525.png',0,-5,1,'',0),
	(200,'photos/1320633636.jpg','1377928601','2011-11-06 19:40:36','memes/1320633682.png',0,2,1,'',0),
	(203,'photos/1320635486.jpg','1377928601','2011-11-06 20:11:26','memes/1320635514.png',0,5,1,'',0),
	(202,'photos/1320634581.jpg','632975563','2011-11-06 19:56:21','memes/1320634630.png',0,-3,1,'Disapproving Daddy',0),
	(205,'photos/1320637570.jpg','511495152','2011-11-06 20:46:10','memes/1320637654.png',0,3,1,'Gonz Too Far',0),
	(206,'photos/1320637675.jpg','511495152','2011-11-06 20:47:55','memes/1320637715.png',0,0,1,'Gonz Too Far',0),
	(207,'photos/1320642464.jpg','632975563','2011-11-06 22:07:44','memes/1320642772.png',0,0,1,'Adventurous Andy',0),
	(208,'photos/1320643138.jpg','632975563','2011-11-06 22:18:58','memes/1320643212.png',0,16,1,'Adventurous Andy',0),
	(209,'photos/1320643730.jpg','1091289284','2011-11-06 22:28:50','memes/1320643804.png',0,0,1,'Adventurous Andy',0),
	(210,'photos/1320647251.jpg','1091289284','2011-11-06 23:27:31','memes/1320647339.png',0,5,1,'',0),
	(213,'photos/1320706549.jpg','100002093517200','2011-11-07 15:55:49','memes/1320706744.png',0,1,1,'',0),
	(216,'photos/1320707442.jpg','100002093517200','2011-11-07 16:10:42','memes/1320707503.png',0,1,1,'',0),
	(220,'photos/1320762194.jpg','1539990026','2011-11-08 07:23:14','memes/1320762258.png',0,-6,1,'',0),
	(221,'photos/1320771117.jpg','1091289284','2011-11-08 09:51:57','memes/1320771189.png',0,-2,1,'',0),
	(222,'photos/1320788790.jpg','1586801583','2011-11-08 14:46:30','memes/1320789326.png',0,11,1,'',0),
	(224,'photos/1320803189.jpg','602603370','2011-11-08 18:46:29','memes/1320803332.png',0,-7,1,'',0),
	(228,'photos/1320807583.jpg','1530270723','2011-11-08 19:59:43','memes/1320807634.png',0,3,1,'',0),
	(231,'photos/1320809286.jpg','1530270723','2011-11-08 20:28:06','memes/1320809405.png',0,23,1,'',0),
	(232,'photos/1320810367.jpg','100002360870119','2011-11-08 20:46:07','memes/1320810629.png',0,2,1,'',0),
	(236,'photos/1320882417.jpg','511495152','2011-11-09 16:46:57','memes/1320882543.png',0,-7,1,'The Procrastinator',0),
	(238,'photos/1320891014.jpg','1465585468','2011-11-09 19:10:14','memes/1320891294.png',0,2,1,'',0),
	(239,'photos/1320891396.jpg','1465585468','2011-11-09 19:16:36','memes/1320891486.png',0,0,1,'',0),
	(240,'photos/1320891556.jpg','1465585468','2011-11-09 19:19:16','memes/1320891884.png',0,3,1,'',0),
	(241,'photos/1320891912.jpg','1465585468','2011-11-09 19:25:12','memes/1320892110.png',0,6,1,'',0),
	(242,'photos/1320892510.jpg','1465585468','2011-11-09 19:35:10','memes/1320892626.png',0,5,1,'',0),
	(243,'photos/1320893688.jpg','1465585468','2011-11-09 19:54:48','memes/1320893744.png',0,0,1,'',0),
	(246,'photos/1320894157.jpg','1465585468','2011-11-09 20:02:37','memes/1320894234.png',0,0,1,'',0),
	(247,'photos/1320901432.jpg','1377928601','2011-11-09 22:03:52','memes/1320901479.png',0,20,1,'',0),
	(248,'photos/1320954310.jpg','1549020182','2011-11-10 12:45:10','memes/1320954391.png',0,3,1,'',0),
	(249,'photos/1320976504.jpg','512823448','2011-11-10 18:55:04','memes/1320976684.png',0,1,1,'',0),
	(268,'photos/1321067480.jpg','632975563','2011-11-11 20:11:21','memes/1321067530.png',0,1,1,'Knit Knight',0),
	(263,'photos/1321055367.jpg','511495152','2011-11-11 16:49:27','memes/1321055462.png',1,3,1,'Honest Hitchhiker',0),
	(332,'photos/1321588455.jpg','632975563','2011-11-17 20:54:15',NULL,0,0,1,'',0),
	(267,'photos/1321067217.jpg','632975563','2011-11-11 20:06:58','memes/1321067261.png',0,0,1,'Jimmy\'s Contradictions',0),
	(269,'photos/1321072369.jpg','1091289284','2011-11-11 21:32:49','memes/1321072406.png',0,2,1,'',0),
	(272,'photos/1321139080.jpg','511495152','2011-11-12 16:04:40','memes/1321139158.png',0,1,1,'Honest Hitchhiker',0),
	(325,'photos/1320291204.jpg','511495152','2011-11-16 18:22:05','memes/1321492925.png',0,0,1,'Crow-Magnum',0),
	(337,'photos/1321606880.jpg','511495152','2011-11-18 02:11:31','memes/1321607491.png',0,0,1,'Suburban Cowboy',0),
	(326,'photos/1321494524.jpg','511495152','2011-11-16 18:48:44','memes/1321494664.png',0,1,1,'Brown Bag Brooky',0),
	(323,'photos/1320251763.jpg','632975563','2011-11-16 18:10:48','memes/1321492248.png',0,1,1,'Freshmen',0),
	(336,'photos/1321606880.jpg','511495152','2011-11-18 02:01:20','memes/1321606989.png',0,0,1,'Suburban Cowboy',0),
	(321,'photos/1320291204.jpg','632975563','2011-11-16 17:50:11','memes/1321491011.png',0,0,1,'Crow-Magnum',0),
	(335,'photos/1321606650.jpg','511495152','2011-11-18 01:57:30','memes/1321606735.png',0,0,1,'WI state of mind',0),
	(330,'photos/1321550845.JPG','632975563','2011-11-17 10:27:25',NULL,0,0,1,'',0),
	(329,'photos/1321550507.JPG','632975563','2011-11-17 10:21:48',NULL,0,0,1,'',0),
	(333,'photos/1321589514.jpg','632975563','2011-11-17 21:11:54',NULL,0,0,1,'',0),
	(334,'photos/1321604302.jpg','511495152','2011-11-18 01:18:22','memes/1321604441.png',0,0,1,'Dom Geographic',0),
	(327,'photos/1321505745.jpg','76904100','2011-11-16 21:55:45','memes/1321505892.png',0,0,1,'',0),
	(338,'photos/1321606880.jpg','511495152','2011-11-18 02:13:03','memes/1321607582.png',0,0,1,'Suburban Cowboy',0),
	(339,'photos/1321606880.jpg','511495152','2011-11-18 02:13:54','memes/1321607634.png',0,0,1,'Suburban Cowboy',0),
	(340,'photos/1321606880.jpg','511495152','2011-11-18 02:18:35','memes/1321607915.png',0,0,1,'Suburban Cowboy',0),
	(341,'photos/1321613915.jpg','632975563','2011-11-18 03:58:35',NULL,0,0,1,'',0),
	(342,'photos/1321614001.jpg','632975563','2011-11-18 04:00:01',NULL,0,0,1,'',0),
	(343,'photos/1321614081.jpg','632975563','2011-11-18 04:01:21',NULL,0,0,1,'',0),
	(344,'photos/1321614517.jpg','632975563','2011-11-18 04:08:37',NULL,0,0,1,'',0),
	(345,'photos/1321614761.jpg','632975563','2011-11-18 04:12:41',NULL,0,0,1,'',0),
	(265,'photos/1321066585.jpg','632975563','2011-11-11 19:56:25','memes/1321066931.png',0,9,1,'Professional Gentlemen',0),
	(346,'photos/1321632794.jpg','511495152','2011-11-18 09:13:14','memes/1321633248.png',0,0,1,'fishin is a habit',0),
	(347,'photos/1321643794.jpg','632975563','2011-11-18 12:16:34',NULL,0,0,1,'',0),
	(348,'photos/1321644062.jpg','632975563','2011-11-18 12:21:02',NULL,0,0,1,'',0),
	(352,'photos/1321759986.jpg','1586801583','2011-11-19 20:33:06',NULL,0,0,1,'',0),
	(353,'photos/1321494524.jpg','511495152','2011-11-22 14:34:39','memes/1321997679.png',0,2,1,'Brown Bag Brooky',0),
	(354,'photos/1322279298.jpg','1586801583','2011-11-25 20:48:18','memes/1322279343.png',0,2,1,'',0),
	(355,'photos/1322279590.jpg','1586801583','2011-11-25 20:53:10','memes/1322279709.png',0,0,1,'',0),
	(356,'photos/1322279907.jpg','1045906092','2011-11-25 20:58:27',NULL,0,0,1,'',0),
	(357,'photos/1322280024.jpg','1045906092','2011-11-25 21:00:24',NULL,0,0,1,'',0),
	(358,'photos/1322280301.jpg','1045906092','2011-11-25 21:05:01',NULL,0,0,1,'',0),
	(286,'photos/1321155496.jpg','1528830060','2011-11-12 20:38:15','memes/1321155519.png',0,3,1,'',0),
	(287,'photos/1321161461.jpg','1377928601','2011-11-12 22:17:41','memes/1321161493.png',0,4,1,'',0),
	(289,'photos/1321179422.jpg','220500361','2011-11-13 03:17:02','memes/1321179485.png',0,0,1,'',0),
	(290,'photos/1321179603.jpg','220500361','2011-11-13 03:20:03','memes/1321179801.png',0,0,1,'',0),
	(291,'photos/1321180437.jpg','1091289284','2011-11-13 03:33:57','memes/1321180561.png',0,1,1,'',0),
	(292,'photos/1321180556.jpg','220500361','2011-11-13 03:35:56','memes/1321180635.png',0,6,1,'',0),
	(293,'photos/1321180690.jpg','220500361','2011-11-13 03:38:10','memes/1321180739.png',0,1,1,'',0),
	(301,'photos/1321327042.jpg','632975563','2011-11-14 20:17:23','memes/1321327491.png',0,-3,1,'Cowboy Dan',0),
	(302,'photos/1321327530.jpg','632975563','2011-11-14 20:25:30','memes/1321327657.png',0,0,1,'Underwear Math Major',0),
	(305,'photos/1321340489.jpg','511495152','2011-11-15 00:01:29','memes/1321340639.png',0,-6,1,'Suburban Cowboy',0),
	(306,'photos/1321340809.jpg','511495152','2011-11-15 00:06:50','memes/1321340942.png',0,4,1,'Gonz Too Far',0),
	(324,'photos/1322192160.jpg','576817077','2011-11-24 20:36:00','memes/1322192176.png',0,0,1,'',0),
	(364,'photos/1322450231.jpg','1586801583','2011-11-27 20:17:11',NULL,0,0,0,NULL,0),
	(369,'photos/1322457414.jpg','511495152','2011-11-27 22:16:54','memes/1322457484.png',0,0,1,'First World Problems',0),
	(363,'photos/1322440243.jpg','511495152','2011-11-27 17:30:43',NULL,0,0,0,NULL,0),
	(360,'photos/1322437629.jpg','511495152','2011-11-27 16:47:09','memes/1322437712.png',0,0,1,'Best Day Ever',0),
	(359,'photos/1322423237.jpg','1114260740','2011-11-27 12:47:17','memes/1322423291.png',0,2,1,'Crack baby USA',0),
	(362,'photos/1322439668.jpg','511495152','2011-11-27 17:21:08','memes/1322439744.png',0,0,1,'Literate Canine',0),
	(365,'photos/1322450397.jpg','552381281','2011-11-27 20:19:57',NULL,0,0,0,NULL,0),
	(361,'photos/1322438146.jpg','511495152','2011-11-27 16:55:46','memes/1322438208.png',0,0,1,'',0),
	(368,'photos/1322456867.jpg','511495152','2011-11-27 22:07:47',NULL,0,0,0,NULL,0),
	(367,'photos/1322455865.jpg','511495152','2011-11-27 21:52:41','memes/1322455961.png',0,-1,1,'why?',0),
	(370,'photos/1322458104.jpg','511495152','2011-11-27 22:28:24',NULL,0,0,0,NULL,0),
	(371,'photos/1322457414.jpg','511495152','2011-11-27 22:39:43','memes/1322458783.png',0,0,1,'First World Problems',0),
	(372,'photos/1322460024.png','511495152','2011-11-27 23:00:24','memes/1322460134.png',0,0,1,'Ancient Aliens',0),
	(373,'photos/1322460024.png','511495152','2011-11-27 23:05:10','memes/1322460310.png',0,0,1,'Ancient Aliens',0),
	(382,'photos/1322610225.jpg','511495152','2011-11-29 16:43:45','memes/1322610370.png',0,0,1,'Charlie Kelly',0),
	(375,'photos/1322439668.jpg','511495152','2011-11-27 23:11:20','memes/1322460680.png',0,0,1,'Literate Canine',0),
	(376,'photos/1322498087.jpg','511495152','2011-11-28 09:34:47','memes/1322498250.png',0,0,1,'Neat Nerd Ned',0),
	(377,'photos/1322498787.jpg','511495152','2011-11-28 09:46:27','memes/1322498817.png',0,0,1,'',0),
	(378,'photos/1322523984.jpg','1586801583','2011-11-28 16:46:24','memes/1322524084.png',0,2,1,'',0),
	(379,'photos/1322531068.jpg','1586801583','2011-11-28 18:44:28','memes/1322537038.png',0,7,1,'',0),
	(420,'photos/1322457414.jpg','511495152','2011-12-02 19:47:31','memes/1322880451.png',0,0,1,'First World Problems',0),
	(380,'photos/1321067217.jpg','100000811650515','2011-11-29 07:28:31','memes/1322576911.png',0,0,1,'Jimmy\'s Contradictions',0),
	(381,'photos/1322531068.jpg','100000811650515','2011-11-29 07:29:53','memes/1322576993.png',0,0,1,'',0),
	(384,'photos/1322616650.jpg','511495152','2011-11-29 18:30:50','memes/1322616748.png',0,0,1,'Scumbag Boss',0),
	(385,'photos/1322616650.jpg','511495152','2011-11-29 18:34:26','memes/1322616866.png',0,0,1,'Scumbag Boss',0),
	(386,'photos/1322616650.jpg','511495152','2011-11-29 18:43:02','memes/1322617382.png',0,0,1,'Scumbag Boss',0),
	(387,'photos/1322618142.jpg','632975563','2011-11-29 18:55:42',NULL,0,0,0,NULL,0),
	(388,'photos/1322618765.jpg','511495152','2011-11-29 19:06:05','memes/1322618864.png',0,1,1,'The Most Interesting Man In The world',0),
	(389,'photos/1322618765.jpg','511495152','2011-11-29 19:10:26','memes/1322619025.png',0,0,1,'The Most Interesting Man In The world',0),
	(392,'photos/1322628618.jpg','632975563','2011-11-29 21:50:18',NULL,0,0,0,NULL,0),
	(391,'photos/1322618765.jpg','511495152','2011-11-29 19:12:52','memes/1322619172.png',0,0,1,'The Most Interesting Man In The world',0),
	(393,'photos/1322628925.jpg','632975563','2011-11-29 21:55:25',NULL,0,0,0,NULL,0),
	(394,'photos/1322628941.jpg','632975563','2011-11-29 21:55:41',NULL,0,0,0,NULL,0),
	(395,'photos/1322629063.jpg','632975563','2011-11-29 21:57:43',NULL,0,0,0,NULL,0),
	(396,'photos/1322629874.jpg','511495152','2011-11-29 22:11:14',NULL,0,0,0,NULL,0),
	(397,'photos/1322629947.jpg','511495152','2011-11-29 22:12:27',NULL,0,0,0,NULL,0),
	(398,'photos/1322630009.jpg','511495152','2011-11-29 22:13:29',NULL,0,0,0,NULL,0),
	(399,'photos/1322630163.jpg','1586801583','2011-11-29 22:16:03','memes/1322630223.png',0,7,1,'Trash Andy',0),
	(400,'photos/1322630354.jpg','1586801583','2011-11-29 22:19:15',NULL,0,0,0,NULL,0),
	(403,'photos/1322711908.jpg','511495152','2011-11-30 20:58:28','memes/1322712120.png',0,0,1,'Jack Donaghy',0),
	(402,'photos/1322678263.jpg','511495152','2011-11-30 11:37:43',NULL,0,0,0,NULL,0),
	(404,'photos/1322531068.jpg','632975563','2011-11-30 21:06:06','memes/1322712366.png',0,0,1,'',0),
	(407,'photos/1322711908.jpg','511495152','2011-11-30 21:12:17','memes/1322712737.png',0,0,1,'Jack Donaghy',0),
	(406,'photos/1322711908.jpg','511495152','2011-11-30 21:07:21','memes/1322712441.png',0,0,1,'Jack Donaghy',0),
	(408,'photos/1322711908.jpg','511495152','2011-11-30 21:24:33','memes/1322713473.png',0,0,1,'Jack Donaghy',0),
	(409,'photos/1322759685.jpg','511495152','2011-12-01 10:14:45','memes/1322759751.png',0,0,1,'Charlie Kelly',0),
	(410,'photos/1322759908.gif','632975563','2011-12-01 10:18:28',NULL,0,0,0,NULL,0),
	(411,'photos/1322759685.jpg','511495152','2011-12-01 10:30:05','memes/1322760605.png',0,0,1,'Charlie Kelly',0),
	(412,'photos/1322761329.jpg','511495152','2011-12-01 10:42:09',NULL,0,0,0,NULL,0),
	(413,'photos/1322761372.jpg','511495152','2011-12-01 10:42:52','memes/1322761485.png',0,6,1,'Barry Zuckerkorn',0),
	(414,'photos/1322768410.jpg','632975563','2011-12-01 12:40:10','memes/1322768474.png',0,0,1,'Baby Mob Boss',0),
	(415,'photos/1322769079.jpg','632975563','2011-12-01 12:51:19',NULL,0,0,0,NULL,0),
	(416,'photos/1322769252.gif','632975563','2011-12-01 12:54:12',NULL,0,0,0,NULL,0),
	(417,'photos/1322759685.jpg','511495152','2011-12-01 17:29:51','memes/1322785791.png',0,0,1,'Charlie Kelly',0),
	(418,'photos/1322850545.jpg','1586801583','2011-12-02 11:29:05','memes/1322850971.png',0,4,1,'Slimey Smiley',0),
	(419,'photos/1322859035.jpg','632975563','2011-12-02 13:50:35',NULL,0,0,0,NULL,0),
	(422,'photos/1322945646.jpg','100000938622760','2011-12-03 13:54:06',NULL,0,0,0,NULL,0),
	(423,'photos/1322945685.jpg','100000938622760','2011-12-03 13:54:45',NULL,0,0,0,NULL,0),
	(424,'photos/1322955253.jpg','511495152','2011-12-03 16:34:13','memes/1322955328.png',0,0,1,'College',0),
	(425,'photos/1322955253.jpg','511495152','2011-12-03 16:36:09','memes/1322955369.png',1,0,1,'College',0),
	(426,'photos/1322965962.jpg','511495152','2011-12-03 19:32:42','memes/1322966017.png',0,0,1,'Engineering Student',0),
	(427,'photos/1322965962.jpg','511495152','2011-12-03 19:34:26','memes/1322966066.png',0,0,1,'Engineering Student',0),
	(428,'photos/1322965962.jpg','511495152','2011-12-03 19:35:24','memes/1322966124.png',0,0,1,'Engineering Student',0),
	(429,'photos/1322965962.jpg','511495152','2011-12-03 19:36:44','memes/1322966204.png',0,0,1,'Engineering Student',0),
	(430,'photos/1322965962.jpg','511495152','2011-12-03 19:37:23','memes/1322966243.png',0,0,1,'Engineering Student',0),
	(433,'photos/1322971951.jpg','511495152','2011-12-03 21:12:31','memes/1322972233.png',0,0,1,'J Roc',0),
	(432,'photos/1322966683.jpg','511495152','2011-12-03 21:04:13','memes/1322971453.png',0,0,1,'Bennett',0),
	(434,'photos/1322966683.jpg','632975563','2011-12-03 21:16:45','memes/1322972205.png',0,0,1,'Bennett',0),
	(435,'photos/1322971951.jpg','511495152','2011-12-03 21:26:48','memes/1322972808.png',0,0,1,'J Roc',0),
	(436,'photos/1322974672.jpg','511495152','2011-12-03 21:57:52','memes/1322974754.png',0,0,1,'Crazy Physics Teacher',0),
	(437,'photos/1322975507.jpg','511495152','2011-12-03 22:11:47','memes/1322975524.png',0,0,1,'',0),
	(438,'photos/1322975507.jpg','511495152','2011-12-03 22:13:46','memes/1322975626.png',0,0,1,'',0),
	(439,'photos/1323023919.jpg','632975563','2011-12-04 11:38:39','memes/1323023996.png',0,0,1,'Football Fwiends',0),
	(440,'photos/1322457414.jpg','511495152','2011-12-04 15:07:10','memes/1323036430.png',0,-1,1,'First World Problems',0),
	(441,'photos/1322457414.jpg','511495152','2011-12-04 15:08:21','memes/1323036501.png',0,0,1,'First World Problems',0),
	(442,'photos/1323070943.jpg','511495152','2011-12-05 00:42:23','memes/1323070992.png',0,0,1,'',0),
	(443,'photos/1323073362.jpg','511495152','2011-12-05 01:22:43','memes/1323073419.png',0,0,1,'Christopher Walken',0),
	(444,'photos/1323103468.jpg','511495152','2011-12-05 09:44:28','memes/1323103550.png',0,0,1,'Klaus Heissler',0),
	(445,'photos/1323104064.png','511495152','2011-12-05 09:54:24',NULL,0,0,0,NULL,0),
	(446,'photos/1323104152.jpg','511495152','2011-12-05 09:55:52','memes/1323104304.png',0,0,1,'Klaus Heissler',0),
	(449,'photos/1323147300.jpg','632975563','2011-12-05 21:55:00','memes/1323147515.png',0,0,1,'How Dave Gets Drunk',0),
	(448,'photos/1323073362.jpg','632975563','2011-12-05 17:55:08','memes/1323132908.png',0,0,1,'Christopher Walken',0),
	(450,'photos/1323149731.png','632975563','2011-12-05 22:35:31','memes/1323149786.png',0,0,1,'Like a boss reporter',0),
	(451,'photos/1323150340.jpg','632975563','2011-12-05 22:45:40','memes/1323150379.png',0,-1,1,'Dangerous Driver',0),
	(452,'photos/1323150440.jpg','632975563','2011-12-05 22:47:20','memes/1323150493.png',0,6,1,'wrong way to do things',0),
	(455,'photos/1323305632.jpg','76904100','2011-12-07 17:53:52','memes/1323305733.png',0,6,1,'Every Day',0),
	(456,'photos/1323305632.jpg','76904100','2011-12-07 19:10:56','memes/1323310256.png',0,-2,0,'Every Day',0),
	(457,'photos/1323391999.jpg','576817077','2011-12-08 17:53:19','memes/1323392023.png',0,0,1,'Turned on?',0),
	(458,'photos/1323392148.jpg','576817077','2011-12-08 17:55:48',NULL,0,0,0,NULL,0),
	(459,'photos/1323392164.jpg','576817077','2011-12-08 17:56:04',NULL,0,0,0,NULL,0),
	(460,'photos/1323392246.jpg','576817077','2011-12-08 17:57:26',NULL,0,0,0,NULL,0),
	(461,'photos/1323392344.jpg','576817077','2011-12-08 17:59:04','memes/1323392398.png',0,1,1,'The Line',0),
	(462,'photos/1323392574.jpg','576817077','2011-12-08 18:02:54','memes/1323392592.png',0,1,1,'So high meow',0),
	(463,'photos/1323392833.jpg','576817077','2011-12-08 18:07:14','memes/1323392860.png',0,1,1,'Do what now?',0),
	(464,'photos/1323393043.jpg','576817077','2011-12-08 18:10:43','memes/1323393062.png',0,-1,1,'Welcome to my crib SON!',0),
	(465,'photos/1323467113.jpg','1145214748','2011-12-09 14:45:13',NULL,0,0,0,NULL,0),
	(466,'photos/1323552065.jpg','76904100','2011-12-10 14:21:05','memes/1323552114.png',0,0,1,'Blurry Drunk',0),
	(467,'photos/1323773639.jpg','100000140701405','2011-12-13 03:53:59','memes/1323773793.png',0,-5,1,'MEMES',0),
	(468,'photos/1323773830.jpg','100000140701405','2011-12-13 03:57:10',NULL,0,0,0,NULL,0),
	(469,'photos/1323905085.jpg','1586801583','2011-12-14 16:24:46','memes/1323905229.png',0,2,1,'',0),
	(470,'photos/1323949254.jpg','100000886052273','2011-12-15 04:40:54',NULL,0,0,0,NULL,0),
	(471,'photos/1323951488.jpg','100000886052273','2011-12-15 05:18:08',NULL,0,0,0,NULL,0),
	(472,'photos/1323956667.jpg','632975563','2011-12-15 06:44:27',NULL,0,0,0,NULL,0),
	(473,'photos/1323990248.jpg','632975563','2011-12-15 16:04:08','memes/1323990357.png',0,0,1,'The Conductor',0),
	(474,'photos/1324000237.jpg','100000886052273','2011-12-15 18:50:37','memes/1324000560.png',0,0,1,'me gusta',0),
	(475,'photos/1324240046.jpg','511495152','2011-12-18 13:27:26','memes/1324240120.png',0,-3,1,'',0),
	(476,'photos/1324243379.jpg','511495152','2011-12-18 14:22:59','memes/1324243461.png',0,0,1,'Mr. Rogers',0),
	(477,'photos/1324277419.jpg','511495152','2011-12-18 23:50:19',NULL,0,0,0,NULL,0),
	(480,'photos/1324364413.jpg','511495152','2011-12-20 00:17:39','memes/1324365459.png',0,0,1,'Fab Cat',0),
	(479,'photos/1324364413.jpg','511495152','2011-12-20 00:02:03','memes/1324364523.png',0,0,1,'Fab Cat',0),
	(481,'photos/1322460024.png','511495152','2011-12-21 19:32:41','memes/1324521161.png',0,0,1,'Ancient Aliens',0),
	(482,'photos/1322460024.png','511495152','2011-12-21 20:35:14','memes/1324524914.png',0,1,1,'Ancient Aliens',0),
	(483,'photos/1324605607.jpg','511495152','2011-12-22 19:00:07',NULL,0,0,0,NULL,0),
	(484,'photos/1324613948.jpg','1580311068','2011-12-22 21:19:09','memes/1324614047.png',0,0,1,'\\\"Cocaine\\\'s one hell of a drug\\\"',0),
	(485,'photos/1324613948.jpg','1580311068','2011-12-22 21:27:23','memes/1324614443.png',0,0,1,'\\\\',0),
	(486,'photos/1324774212.png','511495152','2011-12-24 17:50:12','memes/1324774249.png',0,0,1,'All The Things',0),
	(487,'photos/1324774466.jpg','511495152','2011-12-24 17:54:26','memes/1324774627.png',0,0,1,'Santa',0),
	(488,'photos/1325819827.jpg','100002091575822','2012-01-05 20:17:07',NULL,0,0,0,NULL,0),
	(489,'photos/1325829324.jpg','511495152','2012-01-05 22:55:24',NULL,0,0,0,NULL,0),
	(490,'photos/1325829381.jpg','511495152','2012-01-05 22:56:21','memes/1325829644.png',0,0,1,'Simple Jack',0),
	(491,'photos/1325832982.jpg','511495152','2012-01-05 23:56:22','memes/1325833082.png',0,1,1,'circus de falatio',0),
	(492,'photos/1325902134.jpg','100002091575822','2012-01-06 19:08:54','memes/1325902274.png',0,0,1,'',0),
	(493,'photos/1326038912.jpg','40104129','2012-01-08 09:08:32',NULL,0,0,0,NULL,0),
	(494,'photos/1326039038.jpg','40104129','2012-01-08 09:10:38',NULL,0,0,0,NULL,0),
	(495,'photos/1326039069.jpg','40104129','2012-01-08 09:11:09','memes/1326039184.png',0,0,1,'',0),
	(496,'photos/1326039275.jpg','40104129','2012-01-08 09:14:35',NULL,0,0,0,NULL,0),
	(497,'photos/1326039455.jpg','40104129','2012-01-08 09:17:35',NULL,0,0,0,NULL,0),
	(498,'photos/1326039813.jpg','40104129','2012-01-08 09:23:33','memes/1326039896.png',0,0,1,'',0),
	(499,'photos/1326822005.jpg','632975563','2012-01-17 10:40:05',NULL,0,0,0,NULL,0),
	(500,'photos/1327607177.jpg','511495152','2012-01-26 12:46:17','memes/1327607248.png',0,0,1,'',0);

/*!40000 ALTER TABLE `facebook_images` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;