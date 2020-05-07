/*
SQLyog Community v12.09 (64 bit)
MySQL - 10.4.11-MariaDB : Database - db_mid_test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_mid_test` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_mid_test`;

/*Table structure for table `tb_pengangguran` */

DROP TABLE IF EXISTS `tb_pengangguran`;

CREATE TABLE `tb_pengangguran` (
  `id_pengangguran` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pekerjaan_terakhir` varchar(25) NOT NULL,
  PRIMARY KEY (`id_pengangguran`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_pengangguran` */

insert  into `tb_pengangguran`(`id_pengangguran`,`nama`,`umur`,`alamat`,`pekerjaan_terakhir`) values (1,'Rafatar',5,'jalan kebenaran, nomor 4 jakarta utara','kuli bangunan'),(2,'janei',32,'pinggir kota denpasar utara, nomor 8','pekerja spa komersial'),(3,'karen',17,'jalan kesembuhan','tukang bedah rumah'),(8,'alan',25,'jalan kesombongan','tukang kebun');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
