CREATE DATABASE  IF NOT EXISTS `check_this` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `check_this`;
-- MySQL dump 10.13  Distrib 5.6.19, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: check_this
-- ------------------------------------------------------
-- Server version	5.7.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `filestore`
--

DROP TABLE IF EXISTS `filestore`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `filestore` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CREATE TABLE filestore (\nid INT NOT NULL PRIMARY KEY AUTO_INCREMENT,\nfilename VARCHAR(255) NOT NULL,\nmimetype VARCHAR(50) NOT NULL,\ndescription VARCHAR(255) NOT NULL,\nfiledata MEDIUMBLOB\n) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB',
  `filename` varchar(255) NOT NULL,
  `mimetype` varchar(55) NOT NULL,
  `description` varchar(255) NOT NULL,
  `filedata` mediumblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filestore`
--

LOCK TABLES `filestore` WRITE;
/*!40000 ALTER TABLE `filestore` DISABLE KEYS */;
INSERT INTO `filestore` VALUES (1,'logins','application/octet-stream','test1','WordPress\nemail: d.fischergonc@gmail.com\nusername: fragediekrankenschwester\npass: _maracatu\n\nlocal\nemail: d.fischergonc@gmail.com\nusername: DanielaFG\npass: _maracatu@ela\n');
/*!40000 ALTER TABLE `filestore` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-26  2:21:18
