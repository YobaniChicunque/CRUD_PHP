/*
SQLyog Enterprise v13.1.1 (64 bit)
MySQL - 10.4.20-MariaDB : Database - prueba
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`prueba` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `prueba`;

/*Table structure for table `contactos` */

DROP TABLE IF EXISTS `contactos`;

CREATE TABLE `contactos` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

/*Data for the table `contactos` */

insert  into `contactos`(`id`,`name`,`phone`,`email`,`address`,`country`) values 
(1,'edison Walter','123','ut.erat@google.net','Ap #972-9813 Pellentesque St.','Norway'),
(2,'Sandra Campos','1-787-698-3519','nulla.in@google.org','mocoa','Sweden'),
(3,'Lacy Lyons','1-443-222-8165','nec.mauris@hotmail.edu','159-2376 Velit Av.','South Korea'),
(4,'Todd Flores','1-404-591-4724','amet@icloud.edu','Ap #416-1184 Nam Ave','Sweden'),
(5,'Janna Cannon','(955) 977-2128','lacus.quisque@hotmail.couk','Ap #887-7953 Metus St.','India'),
(6,'Aphrodite Richard','1-621-167-4118','accumsan.laoreet@outlook.com','P.O. Box 128, 6810 Odio Street','Nigeria'),
(7,'Lewis Patrick','(726) 127-8738','risus.morbi@hotmail.org','974-1727 A Rd.','Chile'),
(8,'Tanek Kim','(334) 223-7365','sit.amet.metus@yahoo.ca','P.O. Box 554, 9909 Posuere Avenue','Nigeria'),
(9,'Rylee Joyner','1-224-298-5343','eu.lacus.quisque@icloud.couk','879 Nisl Avenue','Brazil'),
(10,'Teegan Santos','(421) 346-4176','magna.nam.ligula@hotmail.ca','Ap #610-7597 Vulputate Avenue','Indonesia'),
(11,'Shelley Ellis','1-453-777-3107','quis@aol.ca','Ap #882-3991 Velit Avenue','Canada'),
(12,'Abraham Franklin','(214) 567-6278','aliquam.arcu@yahoo.edu','Ap #111-1236 Erat Rd.','Poland'),
(13,'Zane Hampton','(668) 339-0620','justo.sit@icloud.net','508-8112 Ad Road','Ireland'),
(14,'Jermaine Reilly','1-207-279-6158','eu.arcu.morbi@icloud.net','4664 Massa Avenue','Netherlands'),
(15,'Ray Hunter','1-781-424-8192','eu@hotmail.couk','209-3801 Aliquam St.','Mexico'),
(16,'Salvador Rush','1-871-794-6742','praesent.interdum@icloud.ca','Ap #577-3702 At Street','Russian Federation'),
(17,'Montana Foreman','1-438-466-6044','maecenas@protonmail.ca','P.O. Box 372, 3840 Tortor, Rd.','Sweden'),
(18,'Lesley Sweet','(485) 802-8017','congue.a.aliquet@yahoo.com','Ap #828-642 Ullamcorper, St.','Poland'),
(19,'Hilda Snider','1-768-263-5285','aliquam.eros.turpis@yahoo.couk','364-6422 Mollis. St.','Netherlands'),
(20,'Plato Hoffman','(959) 392-4328','enim.diam@google.net','4921 Sit Av.','France'),
(21,'Demetrius Edwards','1-841-336-7916','cubilia.curae@yahoo.edu','220-3118 Duis Rd.','Vietnam'),
(22,'Kato Puckett','(577) 367-3342','sollicitudin@aol.ca','Ap #854-9628 Elit Rd.','Sweden'),
(23,'Gay Cooke','(426) 441-4652','et.ultrices.posuere@yahoo.couk','Ap #194-6267 Nibh Rd.','Brazil'),
(24,'Hannah Warren','(695) 923-3989','a@icloud.edu','1380 Et Ave','China'),
(25,'Winter Anderson','(768) 240-6815','arcu@hotmail.net','Ap #543-8909 Lorem Rd.','Netherlands'),
(26,'Beau Glass','1-603-510-6233','nascetur.ridiculus@protonmail.ca','122-7473 Egestas Avenue','Spain'),
(27,'Chelsea Mendoza','(889) 755-7754','primis@google.com','Ap #559-4529 Sed Avenue','Russian Federation'),
(28,'Emmanuel Mcconnell','1-471-735-3837','donec.luctus@yahoo.couk','Ap #593-8521 Nunc Rd.','Ireland'),
(29,'Caleb Mercado','1-545-263-9405','bibendum.sed.est@outlook.ca','181-3445 Dictum. St.','Russian Federation'),
(30,'Mufutau Hart','1-204-188-1211','sit.amet.orci@yahoo.org','668-3766 Molestie Avenue','India');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
