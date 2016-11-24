-- MySQL dump 10.13  Distrib 5.6.33, for osx10.9 (x86_64)
--
-- Host: localhost    Database: Castro
-- ------------------------------------------------------
-- Server version	5.6.33

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
-- Current Database: `Castro`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `Castro` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `Castro`;

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts` (
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `total` int(11) DEFAULT '0',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts`
--

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` VALUES ('computer','21abb4bd519369d615d5155de2efb586d02de051005d1937bf9749dc41f6a5b8','hi','','','',0),('Joana','21abb4bd519369d615d5155de2efb586d02de051005d1937bf9749dc41f6a5b8',NULL,NULL,NULL,NULL,NULL),('kayeeee','21abb4bd519369d615d5155de2efb586d02de051005d1937bf9749dc41f6a5b8',NULL,NULL,NULL,NULL,NULL),('kirsten','21abb4bd519369d615d5155de2efb586d02de051005d1937bf9749dc41f6a5b8','Kaye','Castro','1234','email',0),('kirstenc','21abb4bd519369d615d5155de2efb586d02de051005d1937bf9749dc41f6a5b8','Kirsten','Castro','09267543457','kirstenfcastro@gmail.com',0),('kirstens','21abb4bd519369d615d5155de2efb586d02de051005d1937bf9749dc41f6a5b8',NULL,NULL,NULL,NULL,NULL),('kirten','21abb4bd519369d615d5155de2efb586d02de051005d1937bf9749dc41f6a5b8','','','','',0),('liaaaa','21abb4bd519369d615d5155de2efb586d02de051005d1937bf9749dc41f6a5b8','','','','',0),('margarette','21abb4bd519369d615d5155de2efb586d02de051005d1937bf9749dc41f6a5b8',NULL,NULL,NULL,NULL,NULL),('toffeenut','21abb4bd519369d615d5155de2efb586d02de051005d1937bf9749dc41f6a5b8',NULL,NULL,NULL,NULL,NULL),('username','21abb4bd519369d615d5155de2efb586d02de051005d1937bf9749dc41f6a5b8',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `branch` (
  `bid` int(11) NOT NULL,
  `bname` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branch`
--

LOCK TABLES `branch` WRITE;
/*!40000 ALTER TABLE `branch` DISABLE KEYS */;
/*!40000 ALTER TABLE `branch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `collections`
--

DROP TABLE IF EXISTS `collections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `collections` (
  `collection` varchar(30) NOT NULL,
  PRIMARY KEY (`collection`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collections`
--

LOCK TABLES `collections` WRITE;
/*!40000 ALTER TABLE `collections` DISABLE KEYS */;
INSERT INTO `collections` VALUES ('Animation'),('Disney'),('Heroes'),('Marvel'),('Television');
/*!40000 ALTER TABLE `collections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pops`
--

DROP TABLE IF EXISTS `pops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pops` (
  `popid` int(11) NOT NULL AUTO_INCREMENT,
  `popnum` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `collection` varchar(30) NOT NULL,
  `showname` varchar(30) NOT NULL,
  PRIMARY KEY (`popid`) USING BTREE,
  KEY `collection_index` (`collection`,`showname`),
  CONSTRAINT `pops_ibfk_1` FOREIGN KEY (`collection`, `showname`) REFERENCES `shows` (`collection`, `showname`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1020 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pops`
--

LOCK TABLES `pops` WRITE;
/*!40000 ALTER TABLE `pops` DISABLE KEYS */;
INSERT INTO `pops` VALUES (1000,95,'Black Widow','Marvel','Avengers: Age of Ultron'),(1001,222,'Fourth Doctor','Television','Doctor Who'),(1002,294,'Ninth Doctor','Television','Doctor Who'),(1003,395,'Tenth Doctor with Hand','Television','Doctor Who'),(1004,221,'Tenth Doctor','Television','Doctor Who'),(1005,356,'Eleventh Doctor / Mr. Clever','Television','Doctor Who'),(1006,220,'Eleventh Doctor','Television','Doctor Who'),(1007,357,'Twelfth Doctor with Guitar','Television','Doctor Who'),(1008,225,'Adipose','Television','Doctor Who'),(1009,224,'Cyberman','Television','Doctor Who'),(1010,223,'Dalek','Television','Doctor Who'),(1011,359,'Davros','Television','Doctor Who'),(1012,297,'Jack Harness','Television','Doctor Who'),(1013,296,'River Song','Television','Doctor Who'),(1014,295,'Rose Tyler','Television','Doctor Who'),(1015,298,'Sarah Jane','Television','Doctor Who'),(1016,299,'The Silence','Television','Doctor Who'),(1017,227,'Tardis','Television','Doctor Who'),(1018,358,'War Doctor','Television','Doctor Who'),(1019,226,'Weeping Angel','Television','Doctor Who');
/*!40000 ALTER TABLE `pops` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `res_guests`
--

DROP TABLE IF EXISTS `res_guests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `res_guests` (
  `refid` int(11) NOT NULL,
  `resid` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`refid`,`resid`),
  KEY `resid` (`resid`),
  CONSTRAINT `res_guests_ibfk_1` FOREIGN KEY (`resid`) REFERENCES `reservations` (`resid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `res_guests`
--

LOCK TABLES `res_guests` WRITE;
/*!40000 ALTER TABLE `res_guests` DISABLE KEYS */;
/*!40000 ALTER TABLE `res_guests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservations` (
  `resid` int(11) NOT NULL,
  `popid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`resid`,`popid`,`bid`),
  KEY `popid` (`popid`,`bid`),
  CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`popid`, `bid`) REFERENCES `sample`.`pops_inbranch` (`popid`, `bid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shows`
--

DROP TABLE IF EXISTS `shows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shows` (
  `collection` varchar(30) NOT NULL,
  `showname` varchar(30) NOT NULL,
  PRIMARY KEY (`collection`,`showname`),
  CONSTRAINT `shows_ibfk_1` FOREIGN KEY (`collection`) REFERENCES `collections` (`collection`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shows`
--

LOCK TABLES `shows` WRITE;
/*!40000 ALTER TABLE `shows` DISABLE KEYS */;
INSERT INTO `shows` VALUES ('Marvel','Avengers: Age of Ultron'),('Marvel','Captain America: Civil War'),('Television','Doctor Who'),('Television','Sherlock'),('Television','Supernatural');
/*!40000 ALTER TABLE `shows` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-24 20:38:42
