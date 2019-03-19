-- MySQL dump 10.13  Distrib 8.0.15, for macos10.14 (x86_64)
--
-- Host: localhost    Database: lesson-6
-- ------------------------------------------------------
-- Server version	8.0.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `comment` text NOT NULL,
  `date_published` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (1,'Артём','Всё отлично: продали тур, съездили великолепно! Рекомендую.','2019-03-19 09:02:55'),(2,'Мария','Были на Хайнане, первый раз ездили за границу. Спасибо китайцам, что сделали доступным приемлемый по цене отдых в тропиках! Виза не нужна!','2019-03-19 09:06:06'),(5,'Сергей','Почему Мальдивы такие дорогие?! Я был на Филиппинах, там гораздо интереснее и в два раза дешевле!','2019-03-19 09:23:37'),(9,'Наталья','Сергей, а что вы хотели? Мальдивы — это лакшери-отдых, а ваша ЮВА для бухих студентов из Австралии','2019-03-19 09:32:52'),(10,'Сергей','А вы, я посмотрю, цените отдых только у бассейна с бокалом Голубой лагуны и слугой с опахалом? А как же проникнуться настоящей жизнью той страны, куда приехали: посетить деревни, поесть местной еды, залезть на самую высокую точку острова?','2019-03-19 09:36:09'),(11,'Наталья','Сергей, я, знаете ли и сафари люблю, и бёрдвотчинг, и на китов ездили смотреть, и на рыбалку на яхте — так что, поверьте, вкусила все прелести «активного» отдыха, поэтому заслужила несколько дней под зонтиком и интересной книжкой','2019-03-19 09:37:43'),(12,'Сергей','Ну вы и сноб, Наталья! По таким, как вы, и складывается впечатление о зажравшихся русских туристах!','2019-03-19 09:39:10'),(13,'Наталья','А вы, судя по всему, Сергей — тотальный нищеброд!!!!!!!!11111','2019-03-19 09:51:03');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-19 12:59:29
