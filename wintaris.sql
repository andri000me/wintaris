/*
SQLyog Enterprise v12.4.1 (64 bit)
MySQL - 10.1.36-MariaDB : Database - wintaris
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`wintaris` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `wintaris`;

/*Table structure for table `tbl_barang` */

DROP TABLE IF EXISTS `tbl_barang`;

CREATE TABLE `tbl_barang` (
  `barang_id` int(6) NOT NULL AUTO_INCREMENT,
  `barang_kode` varchar(8) NOT NULL,
  `barang_nama` varchar(30) NOT NULL,
  `barang_spesifikasi` varchar(35) DEFAULT NULL,
  `barang_lokasi` varchar(40) NOT NULL,
  `barang_kategori` varchar(25) NOT NULL,
  `barang_jml` int(5) NOT NULL,
  `barang_tgl_masuk` date NOT NULL,
  `barang_kondisi` varchar(20) NOT NULL,
  `barang_sumber` varchar(25) DEFAULT NULL,
  `barang_foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`barang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_barang` */

insert  into `tbl_barang`(`barang_id`,`barang_kode`,`barang_nama`,`barang_spesifikasi`,`barang_lokasi`,`barang_kategori`,`barang_jml`,`barang_tgl_masuk`,`barang_kondisi`,`barang_sumber`,`barang_foto`) values 
(8,'383599','ACER V3','HD: 500GB\"\"','LK05','Elektronik',17,'2018-08-24','Baru','Wildan Fuady','');

/*Table structure for table `tbl_jaminan_peminjaman` */

DROP TABLE IF EXISTS `tbl_jaminan_peminjaman`;

CREATE TABLE `tbl_jaminan_peminjaman` (
  `jaminan_id` int(13) NOT NULL AUTO_INCREMENT,
  `jaminan_nama` varchar(50) NOT NULL,
  PRIMARY KEY (`jaminan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_jaminan_peminjaman` */

insert  into `tbl_jaminan_peminjaman`(`jaminan_id`,`jaminan_nama`) values 
(1,'Kartu Pelajar'),
(2,'Handphone'),
(3,'STNK Motor'),
(4,'BPKB Motor'),
(5,'STNK Mobil'),
(9,'Lain-lain');

/*Table structure for table `tbl_keperluan_peminjaman` */

DROP TABLE IF EXISTS `tbl_keperluan_peminjaman`;

CREATE TABLE `tbl_keperluan_peminjaman` (
  `keperluan_id` int(13) NOT NULL AUTO_INCREMENT,
  `keperluan_nama` text NOT NULL,
  PRIMARY KEY (`keperluan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_keperluan_peminjaman` */

insert  into `tbl_keperluan_peminjaman`(`keperluan_id`,`keperluan_nama`) values 
(6,'Kegiatan Sekolah\r\n'),
(7,'Kegiatan Kantor'),
(8,'Lain-lain');

/*Table structure for table `tbl_pemakaian_barang` */

DROP TABLE IF EXISTS `tbl_pemakaian_barang`;

CREATE TABLE `tbl_pemakaian_barang` (
  `pemakaian_id` int(17) NOT NULL AUTO_INCREMENT,
  `pemakaian_kode` varchar(17) NOT NULL,
  `pemakaian_tgl` date NOT NULL,
  `barang_kode` varchar(17) NOT NULL,
  `pemakaian_jml` int(13) NOT NULL,
  `pemakaian_keperluan` text,
  `pemakaian_deskripsi` text,
  PRIMARY KEY (`pemakaian_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pemakaian_barang` */

/*Table structure for table `tbl_peminjaman_barang` */

DROP TABLE IF EXISTS `tbl_peminjaman_barang`;

CREATE TABLE `tbl_peminjaman_barang` (
  `peminjaman_id` int(13) NOT NULL AUTO_INCREMENT,
  `peminjaman_kode` int(6) NOT NULL,
  `peminjaman_tgl` date NOT NULL,
  `barang_kode` int(8) NOT NULL,
  `peminjaman_jml` int(7) NOT NULL,
  `peminjaman_peminjam` varchar(35) NOT NULL,
  `peminjaman_tgl_kembali` date NOT NULL,
  `peminjaman_jaminan` varchar(50) NOT NULL,
  `peminjaman_keperluan` text NOT NULL,
  `peminjaman_status` varchar(30) NOT NULL,
  PRIMARY KEY (`peminjaman_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_peminjaman_barang` */

/*Table structure for table `tbl_pinjaman_barang` */

DROP TABLE IF EXISTS `tbl_pinjaman_barang`;

CREATE TABLE `tbl_pinjaman_barang` (
  `pinjaman_id` int(17) NOT NULL AUTO_INCREMENT,
  `pinjaman_nama` varchar(50) NOT NULL,
  `pinjaman_jml` int(13) NOT NULL,
  `pinjaman_tgl_masuk` date NOT NULL,
  `pinjaman_pemberi` varchar(50) NOT NULL,
  `pinjaman_deskripsi` text,
  PRIMARY KEY (`pinjaman_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pinjaman_barang` */

insert  into `tbl_pinjaman_barang`(`pinjaman_id`,`pinjaman_nama`,`pinjaman_jml`,`pinjaman_tgl_masuk`,`pinjaman_pemberi`,`pinjaman_deskripsi`) values 
(1,'Acer LYA',2,'2018-09-07','Wildan Fuady','Hehehehe'),
(2,'Acer LG',2,'2018-09-06','Khadijah','kcdnckdc');

/*Table structure for table `tbl_profil` */

DROP TABLE IF EXISTS `tbl_profil`;

CREATE TABLE `tbl_profil` (
  `profil_kode` int(1) NOT NULL AUTO_INCREMENT,
  `profil_nama` varchar(100) DEFAULT NULL,
  `profil_email` varchar(75) DEFAULT NULL,
  `profil_alamat` text,
  `profil_telp` varchar(13) DEFAULT NULL,
  `profil_logo` varchar(100) DEFAULT NULL,
  `profil_misi` text,
  `profil_visi` text,
  PRIMARY KEY (`profil_kode`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_profil` */

insert  into `tbl_profil`(`profil_kode`,`profil_nama`,`profil_email`,`profil_alamat`,`profil_telp`,`profil_logo`,`profil_misi`,`profil_visi`) values 
(1,'Perpustakaan SMK Citra Negara','perpus.cn@gmail.com','Jl. Raya Tanah Baru No 34, Kecamatan Sawangan, Kota Depok','021-34567657',NULL,'<p>- Membudayakan literasi<br />\r\n- Membiasakan literasi<br />\r\n- dan memasyarakatkan literasi</p>\r\n','<p>Menjadi pelopor literasi di lingkungan sekolah beserta sekitarnya</p>\r\n');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_nama` varchar(100) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_status` varchar(15) DEFAULT NULL,
  `user_level` varchar(20) DEFAULT NULL,
  `user_foto` varchar(100) DEFAULT NULL,
  `as` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`user_id`,`user_nama`,`username`,`password`,`user_email`,`user_status`,`user_level`,`user_foto`,`as`) values 
(2,'Administrator','admin','21232f297a57a5a743894a0e4a801fc3','admin@admin.com','aktif','45',NULL,'admin_wintaris');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
