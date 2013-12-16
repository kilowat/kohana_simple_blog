CREATE DATABASE  IF NOT EXISTS `simple` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `simple`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: simple
-- ------------------------------------------------------
-- Server version	5.6.11

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `message` text,
  `date` int(11) DEFAULT NULL,
  `news_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_news_idx` (`news_id`),
  CONSTRAINT `id_news` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (37,'john smit','bla bla bla\n',1386881583,5),(38,'john smit','bla bla bla\n',1386881693,5),(39,'john smit','bla bla bla\n',1386881695,5),(40,'john smit','bla bla bla\n',1386881697,5),(41,'r','r',1386923638,5),(42,'r','r',1386925387,5),(43,'r','r',1386925587,5),(44,'r','r',1386925589,5),(45,'r','r',1386925593,5),(46,'r','r',1386925596,5),(47,'r','r',1386925596,5),(48,'r','r',1386925597,5),(49,'r','r',1386925598,5),(50,'r','r',1386925599,5),(51,'r','r',1386925603,5),(52,'r','r',1386925603,5),(53,'r','r',1386925695,5),(54,'r','r',1386925737,5),(55,'r','r',1386925739,5),(56,'r','r',1386925739,5),(57,'r','r',1386925739,5),(58,'r','r',1386925741,5),(59,'r','r',1386925743,5),(60,'r','r',1386925743,5),(61,'r','r',1386925746,5),(62,'r','r',1386925748,5),(63,'r','r',1386925748,5),(64,'r','r',1386925750,5),(65,'r','r',1386925751,5),(66,'r','r',1386925752,5),(67,'r','r',1386925753,5),(68,'r','r',1386925802,5),(69,'r','r',1386925805,5),(70,'r','r',1386925807,5);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-12-16 10:45:32
