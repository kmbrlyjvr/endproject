# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 192.168.10.10 (MySQL 5.7.27-0ubuntu0.18.04.1)
# Database: sinta
# Generation Time: 2020-02-02 22:57:25 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table blog
# ------------------------------------------------------------

DROP TABLE IF EXISTS `blog`;

CREATE TABLE `blog` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bigtext` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagetwo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagethree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagefour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `softdelete` tinyint(1) NOT NULL DEFAULT '0',
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;

INSERT INTO `blog` (`id`, `title`, `text`, `bigtext`, `hero`, `imagetwo`, `imagethree`, `imagefour`, `softdelete`, `is_published`, `created_at`, `updated_at`)
VALUES
	(2,'ALEALI MAY 2018','Aleali — pronounced uh.lay.ee, as she politely informs all on Instagram — is the world most famous female sneakerhead (well, since 90s-era Mel C). Her track record includes being the second woman to collaborate with Jordan in its 34-year history, the first woman ever to design Jordan sneakers in both men and women  sizes and being a stylist to the likes of Kendrick Lamar and Tinashe. But what makes Aleali so enticing is her story of humble beginnings. California born, Aleali May first entered the fashion industry whilst studying at Columbia College Chicago. At just 19 years old, she secured a part-time job at Louis Vuitton and was later hired by RSVP gallery — a Chicago-based boutique created by Virgil Abloh and Don C. Fast-forward seven years and the fashion triple threat (ambitiously juggling careers as a stylist, model and designer) is now lucky enough to count Virgil as a friend.\r\n                            Just like Micheal Jordan himself, Aleali May is a poster girl for the power of a success-driven mindset. She oozes determination, has great zeal for sneaker culture and is confident enough to speak her mind. Spearheading a generation of women who are as engrossed by streetwear as their male counterparts; just one stalk of May’s Insta feed is enough to convince even the most sceptical that sneakers are as much as a women’s game as they are a man’s.                                                                                     \r\n                            We caught up with ‘Her Airness’ (on the beach, as you do) to talk influences, achievements and all things Air Jordan.','\"Blending streetwear and high-end fashion gives a lot of kids inspiration that it’s not just one side or the other, you can do both.\"','blog/2/dPEcinTUyuVapQFHMkLvDjDGNIPzIfak97vwpqE5.jpeg','blog/2/SjImKytlfdPDwaEp26cJaAoTRaUOfLjz4xIYmsTs.jpeg','blog/2/LDXL2K6hWYNAEf2pu85BuIsGZO5Y0dkiruNpA8yx.jpeg','blog/2/sHzQyNEthZX6wkfpIMMaifvS37SmTytPhF90LHLq.jpeg',0,1,'2020-02-02 12:08:07','2020-02-02 12:08:07');

/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table item
# ------------------------------------------------------------

DROP TABLE IF EXISTS `item`;

CREATE TABLE `item` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `price` double(8,2) DEFAULT NULL,
  `svg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;

INSERT INTO `item` (`id`, `title`, `text`, `price`, `svg`, `created_at`, `updated_at`)
VALUES
	(1,'Ryerson 001','trouser',140.00,'trouser','2020-02-01 21:25:43','2020-02-01 21:25:43'),
	(2,'Ryerson 002','utility',180.00,'utility','2020-02-01 21:25:43','2020-02-01 21:25:43'),
	(3,'Ryerson 003','overall',200.00,'overall','2020-02-01 21:25:43','2020-02-01 21:25:43');

/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_user_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2019_11_02_124201_create_item_table',1),
	(4,'2019_12_10_132147_create_orders_table',1),
	(5,'2020_01_17_165002_create_blog_table',1),
	(6,'2020_01_23_192619_create_shippingcost_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `item_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `config` json DEFAULT NULL,
  `total` double(8,2) DEFAULT NULL,
  `shipping` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;

INSERT INTO `orders` (`id`, `user_id`, `payment`, `payment_id`, `item_title`, `address`, `status`, `config`, `total`, `shipping`, `created_at`, `updated_at`)
VALUES
	(1,1,'Visa',NULL,NULL,'Neubaugasse 56','Pending',X'7B2273697A65223A2022536D616C6C222C202274797065223A20227574696C697479222C20227368697070696E67223A20322C20226C6F676F436F6C6F72223A202223663366316130222C2022636F6C6F725069636B6572223A206E756C6C2C2022706F636B6574436F6C6F72223A202223366535303364222C20226F766572616C6C436F6C6F72223A202223636562376136222C202274726F75736572436F6C6F72223A202223363134613435222C20227574696C697479436F6C6F72223A202223636562376136227D',NULL,NULL,'2020-02-02 10:57:24','2020-02-02 10:57:24');

/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table shippingcost
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shippingcost`;

CREATE TABLE `shippingcost` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `shippingcost` WRITE;
/*!40000 ALTER TABLE `shippingcost` DISABLE KEYS */;

INSERT INTO `shippingcost` (`id`, `country`, `price`, `created_at`, `updated_at`)
VALUES
	(1,'Philippines',0.00,'2020-02-01 21:25:43','2020-02-01 21:25:43'),
	(2,'Austria',20.00,'2020-02-01 21:25:43','2020-02-01 21:25:43'),
	(3,'United Kingdom',15.00,'2020-02-01 21:25:43','2020-02-01 21:25:43'),
	(4,'Norway',15.00,'2020-02-01 21:25:43','2020-02-01 21:25:43'),
	(5,'United States',30.00,'2020-02-01 21:25:43','2020-02-01 21:25:43');

/*!40000 ALTER TABLE `shippingcost` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id`, `name`, `email`, `password`, `address`, `zip`, `country`, `user_group`, `created_at`, `updated_at`)
VALUES
	(1,'Kimberly Javier','kmbrly@gmail.com','$2y$10$1WQO/vbjv7duWepviEPZrO4CCk1QpEDdHu6AKSlpCY9ApfRKjNvOu','Neubaugasse 56','1060 Vienna','Austria','1','2020-02-01 21:25:43','2020-02-01 21:25:43');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
