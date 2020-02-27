/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 5.6.17 : Database - nodejs
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`nodejs` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `nodejs`;

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `events` */

insert  into `events`(`id`,`title`,`start_event`,`end_event`) values 
(1,'Meeting with Mike','2020-02-12 12:00:00','2020-02-14 13:00:00'),
(4,'Meeting with Mike','2020-02-29 15:30:00','2020-03-03 16:30:00'),
(5,'Deadline Projek','2020-02-27 13:54:49','2020-03-03 13:54:56'),
(6,'Tes FullCalendar','2020-02-27 00:00:00','2020-02-28 00:00:00'),
(7,'Tes','2020-02-20 00:00:00','2020-02-23 00:00:00');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `fullname` varchar(20) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`fullname`,`password`) values 
(1,'steve','Steve Harvey','$2a$10$YEcSCczuuFyT3n.qac0Osu8uJ7PBhXBXlVLCxEtY4wGrJrKmGQiXi');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
