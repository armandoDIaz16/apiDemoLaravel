/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 5.7.17-log : Database - laravelnotas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`laravelnotas` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `laravelnotas`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `frutas` */

DROP TABLE IF EXISTS `frutas`;

CREATE TABLE `frutas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_fruta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `frutas` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(5,'2014_10_12_000000_create_users_table',1),
(6,'2014_10_12_100000_create_password_resets_table',1),
(7,'2019_08_19_000000_create_failed_jobs_table',1),
(8,'2019_10_08_170828_frutas',1),
(9,'2019_10_08_173414_pruebasql',2);

/*Table structure for table `notes` */

DROP TABLE IF EXISTS `notes`;

CREATE TABLE `notes` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `notes` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `pruebasql` */

DROP TABLE IF EXISTS `pruebasql`;

CREATE TABLE `pruebasql` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `description` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

/*Data for the table `pruebasql` */

insert  into `pruebasql`(`id`,`description`,`created_at`,`updated_at`) values 
(1,'esta es la description0',NULL,NULL),
(2,'esta es la description1',NULL,NULL),
(3,'esta es la description2',NULL,NULL),
(4,'esta es la description3',NULL,NULL),
(5,'esta es la description4',NULL,NULL),
(6,'esta es la description5',NULL,NULL),
(7,'esta es la description6',NULL,NULL),
(8,'esta es la description7',NULL,NULL),
(9,'esta es la description8',NULL,NULL),
(10,'esta es la description9',NULL,NULL),
(11,'esta es la description10',NULL,NULL),
(12,'esta es la description11',NULL,NULL),
(13,'esta es la description12',NULL,NULL),
(14,'esta es la description13',NULL,NULL),
(15,'esta es la description14',NULL,NULL),
(16,'esta es la description15',NULL,NULL),
(17,'esta es la description16',NULL,NULL),
(18,'esta es la description17',NULL,NULL),
(19,'esta es la description18',NULL,NULL),
(20,'esta es la description19',NULL,NULL),
(21,'esta es la description20',NULL,NULL),
(22,'esta es la description21',NULL,NULL),
(23,'esta es la description22',NULL,NULL),
(24,'esta es la description23',NULL,NULL),
(25,'esta es la description24',NULL,NULL),
(26,'esta es la description25',NULL,NULL),
(27,'esta es la description26',NULL,NULL),
(28,'esta es la description27',NULL,NULL),
(29,'esta es la description28',NULL,NULL),
(30,'esta es la description29',NULL,NULL),
(31,'esta es la description30',NULL,NULL),
(32,'esta es la description31',NULL,NULL),
(33,'esta es la description32',NULL,NULL),
(34,'esta es la description33',NULL,NULL),
(35,'esta es la description34',NULL,NULL),
(36,'esta es la description35',NULL,NULL),
(37,'esta es la description36',NULL,NULL),
(38,'esta es la description37',NULL,NULL),
(39,'esta es la description38',NULL,NULL),
(40,'esta es la description39',NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
