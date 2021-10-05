CREATE DATABASE  IF NOT EXISTS `unilab-portal` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `unilab-portal`;
-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: unilab-portal
-- ------------------------------------------------------
-- Server version	5.7.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `contactId` int(21) NOT NULL AUTO_INCREMENT,
  `userId` int(21) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phoneNo` bigint(21) NOT NULL,
  `orderId` int(21) NOT NULL DEFAULT '0' COMMENT 'If problem is not related to the order then order id = 0',
  `message` text NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`contactId`),
  KEY `userid_idx` (`userId`),
  KEY `orderid_idx` (`orderId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (3,2,'manilamain@123pharmacy.com',9123456789,2,'Hi, I have problem.','2021-09-30 15:28:33');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactreply`
--

DROP TABLE IF EXISTS `contactreply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contactreply` (
  `id` int(21) NOT NULL AUTO_INCREMENT,
  `contactId` int(21) NOT NULL,
  `userId` int(23) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactreply`
--

LOCK TABLES `contactreply` WRITE;
/*!40000 ALTER TABLE `contactreply` DISABLE KEYS */;
INSERT INTO `contactreply` VALUES (3,3,2,'Hello, here is the solution.','2021-09-30 15:38:19');
/*!40000 ALTER TABLE `contactreply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deliverydetails`
--

DROP TABLE IF EXISTS `deliverydetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `deliverydetails` (
  `id` int(21) NOT NULL AUTO_INCREMENT,
  `orderId` int(21) NOT NULL,
  `deliveryBoyName` varchar(35) NOT NULL,
  `deliveryBoyPhoneNo` bigint(25) NOT NULL,
  `deliveryTime` int(200) NOT NULL COMMENT 'Time in minutes',
  `dateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `orderId` (`orderId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deliverydetails`
--

LOCK TABLES `deliverydetails` WRITE;
/*!40000 ALTER TABLE `deliverydetails` DISABLE KEYS */;
INSERT INTO `deliverydetails` VALUES (2,2,'J Express',9123456789,10,'2021-09-30 15:36:07');
/*!40000 ALTER TABLE `deliverydetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `division`
--

DROP TABLE IF EXISTS `division`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `division` (
  `divisionId` int(12) NOT NULL AUTO_INCREMENT,
  `divisionName` varchar(255) NOT NULL,
  `divisionDesc` text NOT NULL,
  `divisionCreateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`divisionId`),
  FULLTEXT KEY `divisionName` (`divisionName`,`divisionDesc`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `division`
--

LOCK TABLES `division` WRITE;
/*!40000 ALTER TABLE `division` DISABLE KEYS */;
INSERT INTO `division` VALUES (2,'Biomedis','We know critical care can be life-saving. Biomedis provides renal, surgical, and critical care solutions to ensure optimal health and recovery when you need it.','2021-09-21 14:09:12'),(4,'Medichem','We know mental health requires supportive care. Medichem provides patients with relevant products, and commits to support patients, families, and their caregivers.','2021-09-21 14:10:20'),(6,'Pediatrica','We believe a childâ€™s early years is a crucial period for health. Pediatrica focuses on providing tailored solutions to ensure kidsâ€™ different needs are cared for.','2021-09-21 14:10:50'),(11,'Therapharma','We know you worry about chronic conditions. LRI-Therapharma provides trusted, quality, and affordable medicines for hypertension, diabetes, stroke, and more.','2021-09-21 14:11:58'),(12,'UAP','We want every Filipino to breathe freely. United American Pharmaceuticals (UAP) specializes in respiratory solutions to help people breathe and live the way they should.','2021-09-21 14:12:05'),(13,'ULCH','We empower Filipinos to lead healthier, happier lives. Through Unilab Consumer Health, we care for millions of Filipinos with trusted brands such as Biogesic, Enervon, Neozep, and Alaxan.','2021-09-21 14:12:15');
/*!40000 ALTER TABLE `division` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drugs`
--

DROP TABLE IF EXISTS `drugs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `drugs` (
  `drugsId` int(12) NOT NULL AUTO_INCREMENT,
  `drugsName` varchar(255) NOT NULL,
  `drugsPrice` float NOT NULL,
  `drugsDesc` varchar(45) DEFAULT NULL,
  `UOM` varchar(4) NOT NULL,
  `drugsdivisionId` int(12) NOT NULL,
  PRIMARY KEY (`drugsId`),
  FULLTEXT KEY `drugName` (`drugsName`,`drugsDesc`)
) ENGINE=InnoDB AUTO_INCREMENT=800544 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drugs`
--

LOCK TABLES `drugs` WRITE;
/*!40000 ALTER TABLE `drugs` DISABLE KEYS */;
INSERT INTO `drugs` VALUES (102706,'UHP Calactates 325 Tab 100',88,'Contents:\r\nCalcium lactate.','BOX',1),(102736,'UHP CALACTATE 650 TAB 100',144,'UHP CALACTATE 650 TAB 100','BOT',13),(104844,'DIATABS(R) CAP 4',29,'DIATABS(R) CAP 4','ENV',13),(104846,'DIATABS(R) CAP 100',716,'DIATABS(R) CAP 100','BOX',13),(104848,'DIATABS(R) CAP 500',3577,'DIATABS(R) CAP 500','BOX',13),(105023,'DUAVENT PULMONEB 500MCG',758,'DUAVENT PULMONEB 500MCG','BOX',12),(105803,'FERLIN DRP 15ML',106.04,NULL,'BOT',7),(105885,'FERROUS SULFATE TAB 100',132,'FERROUS SULFATE TAB 100','BOT',13),(106462,'ANDROS 100MG TAB 5',2876,'ANDROS 100MG TAB 5','BOX',2),(106522,'ANDROS 25MG TAB 5',1647,'ANDROS 25MG TAB 5','BOX',2),(106696,'HEMOSTAN 250MG CAP 100',2458,'HEMOSTAN 250MG CAP 100','BOX',2),(106706,'HEMOSTAN 500MG CAP 100',3501,'HEMOSTAN 500MG CAP 100','BOX',2),(106767,'HYTAZ 12.5MG TAB 200 SS PH',967,'HYTAZ 12.5MG TAB 200 SS PH','BOX',11),(106777,'HYTAZ 25MG TAB 200 SS PH',1218,'HYTAZ 25MG TAB 200 SS PH','BOX',11),(107571,'INOFLOX OTIC SOL. 5ML',346,'INOFLOX OTIC SOL. 5ML','BOX',2),(107673,'INOFLOX 200MG TAB 30',1950,'INOFLOX 200MG TAB 30','BOX',2),(107946,'KREMIL-S(REF) TAB 100',721,'KREMIL-S(REF) TAB 100','BOX',13),(110794,'KASTAIR 10MG TAB 28',1078,'KASTAIR 10MG TAB 28','BOX',12),(114295,'STAFLOXIN 250MG CAP 50',1098.23,NULL,'BOX',15),(115015,'THERABLOC 25MG TAB 60 SS PH',406,'THERABLOC 25MG TAB 60 SS PH','BOX',11),(115025,'THERABLOC 50MG TAB 60 SS PH',581,'THERABLOC 50MG TAB 60 SS PH','BOX',11),(115045,'THERABLOC 100MG TAB 60 SS PH',957,'THERABLOC 100MG TAB 60 SS PH','BOX',11),(117185,'VASCORIDE 10MG TAB 50 SS PH',1482,'VASCORIDE 10MG TAB 50 SS PH','BOX',11),(117853,'VIGOR-ACE CAP 30 SS PH',559,'VIGOR-ACE CAP 30 SS PH','BOT',12),(117855,'VIGOR-ACE CAP 75 SS PH',1398,'VIGOR-ACE CAP 75 SS PH','BOT',12),(121935,'HYDRITE (R) GRN 100',1422,'HYDRITE (R) GRN 100','BOX',6),(140053,'VANEULAR TAB 100 SS PH',1818,'VANEULAR TAB 100 SS PH','BOX',4),(140101,'REININ 100MG CAP 100',3346,'REININ 100MG CAP 100','BOX',4),(140102,'REININ 300MG CAP 100 ',3665,'REININ 300MG CAP 100 ','BOX',4),(140119,'H2BLOC 20MG TAB 50',1150.26,NULL,'BOX',9),(140581,'EXULTEN 50MG TAB 30',1533,'EXULTEN 50MG TAB 30','BOX',4),(140682,'AMIKACIDE 100X5 AMP 2ML',1069,'AMIKACIDE 100X5 AMP 2ML','BOX',12),(140683,'AMIKACIDE 250X5 AMP 2ML',2270,'AMIKACIDE 250X5 AMP 2ML','BOX',12),(140864,'HYDRITE REF APPLE GRN 4.1G',1490,'HYDRITE REF APPLE GRN 4.1G','BOX',6),(140866,'HYDRITE REF BANANA GRN 4.1G',1490,'HYDRITE REF BANANA GRN 4.1G','BOX',6),(140907,'MOTIVEST 20MG CAP 30',1381,'MOTIVEST 20MG CAP 30','BOX',4),(140978,'XELENT 125MG SUS 60ML SS PH',348,'XELENT 125MG SUS 60ML SS PH','BOT',6),(140979,'XELENT 125MG SUS 105ML SS PH',533,'XELENT 125MG SUS 105ML SS PH','BOT',6),(140980,'XELENT 250MG SUS 60ML SS PH',566,'XELENT 250MG SUS 60ML SS PH','BOT',6),(141746,'RENUVIE RISPERIDONE 1MG TAB 30',1562,'RENUVIE RISPERIDONE 1MG TAB 30','BOX',4),(152574,'ATHENA CHOCO 180 G  SS PH',123.805,NULL,'BOX',14),(152575,'ATHENA MILK 400G  SS PH',259.997,NULL,'BOX',14),(152576,'ATHENA MILK 180 G  SS PH',123.805,NULL,'BOX',14),(154117,'RM METRONIDAZOLE 500MG TAB 100',1078,NULL,'BOX',10),(156209,'TRISOPURE BBA 400',320.34,NULL,'BOT',3),(156227,'NATURAL STEVIA 2G PDR 40',158.76,NULL,'BOX',5),(157113,'AMOCLAV 250MG/62.5MG/5ML',219.62,NULL,'BOT',8);
/*!40000 ALTER TABLE `drugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderitems`
--

DROP TABLE IF EXISTS `orderitems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orderitems` (
  `id` int(21) NOT NULL AUTO_INCREMENT,
  `orderId` int(21) NOT NULL,
  `drugsId` int(21) NOT NULL,
  `itemQuantity` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderitems`
--

LOCK TABLES `orderitems` WRITE;
/*!40000 ALTER TABLE `orderitems` DISABLE KEYS */;
INSERT INTO `orderitems` VALUES (4,2,106462,1),(5,3,140053,1);
/*!40000 ALTER TABLE `orderitems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `orderId` int(21) NOT NULL AUTO_INCREMENT,
  `userId` int(21) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipCode` int(21) NOT NULL,
  `phoneNo` bigint(21) NOT NULL,
  `amount` int(200) NOT NULL,
  `paymentMode` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=cash on delivery, \r\n1=online ',
  `orderStatus` enum('0','1','2','3','4','5','6') NOT NULL DEFAULT '0' COMMENT '0=Order Placed.\r\n1=Order Confirmed.\r\n2=Preparing your Order.\r\n3=Your order is on the way!\r\n4=Order Delivered.\r\n5=Order Denied.\r\n6=Order Cancelled.',
  `orderDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`orderId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (2,2,'Manila St. cor Quezon Ave, Near Seaoil',1235,9123456789,2876,'0','4','2021-09-30 15:25:42'),(3,2,'Manila, PH, near House',1234,9268278064,1818,'0','0','2021-09-30 15:53:18');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sitedetail`
--

DROP TABLE IF EXISTS `sitedetail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sitedetail` (
  `tempId` int(11) NOT NULL AUTO_INCREMENT,
  `systemName` varchar(21) NOT NULL,
  `email` varchar(35) NOT NULL,
  `contact1` bigint(21) NOT NULL,
  `contact2` bigint(21) DEFAULT NULL COMMENT 'Optional',
  `address` text NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`tempId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sitedetail`
--

LOCK TABLES `sitedetail` WRITE;
/*!40000 ALTER TABLE `sitedetail` DISABLE KEYS */;
INSERT INTO `sitedetail` VALUES (1,'Unilab Portal','ameerojo@gmail.com',9954489617,6304468851,'Philippines','2021-03-23 19:56:25');
/*!40000 ALTER TABLE `sitedetail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(21) NOT NULL AUTO_INCREMENT,
  `username` varchar(21) NOT NULL,
  `firstName` varchar(21) NOT NULL,
  `lastName` varchar(21) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `userType` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=user\r\n1=admin',
  `password` varchar(255) NOT NULL,
  `joinDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin','admin','admin@gmail.com',1111111111,'1','$2y$10$AAfxRFOYbl7FdN17rN3fgeiPu/xQrx6MnvRGzqjVHlGqHAM4d9T1i','2021-04-11 11:40:58'),(2,'123','123 Pharmacy','Manila Main','manilamain@123pharmacy.com',9123456789,'0','$2y$10$I0TBNv4RDs7yEvGUVnK/o.4bYLQV2lfsga/u7s9bd8smnwof9Djdy','2021-09-21 09:06:36'),(3,'rose-1','Rose Pharmacy','Manila Main','henrysyns888@gmail.com',9123456789,'0','$2y$10$5LjJhtrT8tHBnLURTMzryeQlmB1vZz04dAO04..5RzY9zJWoKliQq','2021-09-30 15:31:53');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `viewcart`
--

DROP TABLE IF EXISTS `viewcart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `viewcart` (
  `cartItemId` int(11) NOT NULL AUTO_INCREMENT,
  `drugsId` int(11) NOT NULL,
  `itemQuantity` int(100) NOT NULL,
  `userId` int(11) NOT NULL,
  `addedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cartItemId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `viewcart`
--

LOCK TABLES `viewcart` WRITE;
/*!40000 ALTER TABLE `viewcart` DISABLE KEYS */;
/*!40000 ALTER TABLE `viewcart` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-30 16:03:00
