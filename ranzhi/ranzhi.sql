-- MySQL dump 10.13  Distrib 5.6.46, for Linux (x86_64)
--
-- Host: localhost    Database: ranzhi
-- ------------------------------------------------------
-- Server version	5.6.46-log

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
-- Table structure for table `cash_balance`
--

DROP TABLE IF EXISTS `cash_balance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cash_balance` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `depositor` mediumint(8) unsigned NOT NULL,
  `date` date NOT NULL,
  `money` decimal(12,2) NOT NULL,
  `currency` char(30) NOT NULL,
  `createdBy` char(30) NOT NULL DEFAULT '',
  `createdDate` datetime NOT NULL,
  `editedBy` char(30) NOT NULL DEFAULT '',
  `editedDate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `depositor` (`depositor`,`date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cash_balance`
--

LOCK TABLES `cash_balance` WRITE;
/*!40000 ALTER TABLE `cash_balance` DISABLE KEYS */;
/*!40000 ALTER TABLE `cash_balance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cash_depositor`
--

DROP TABLE IF EXISTS `cash_depositor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cash_depositor` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `abbr` char(60) NOT NULL,
  `provider` char(100) NOT NULL,
  `title` char(100) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `account` char(90) NOT NULL,
  `bankcode` varchar(30) NOT NULL,
  `public` enum('0','1') NOT NULL,
  `type` enum('cash','bank','online') NOT NULL,
  `currency` char(30) NOT NULL,
  `status` enum('normal','disable') NOT NULL DEFAULT 'normal',
  `createdBy` char(30) NOT NULL DEFAULT '',
  `createdDate` datetime NOT NULL,
  `editedBy` char(30) NOT NULL DEFAULT '',
  `editedDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cash_depositor`
--

LOCK TABLES `cash_depositor` WRITE;
/*!40000 ALTER TABLE `cash_depositor` DISABLE KEYS */;
/*!40000 ALTER TABLE `cash_depositor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cash_trade`
--

DROP TABLE IF EXISTS `cash_trade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cash_trade` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `depositor` mediumint(8) unsigned NOT NULL,
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product` mediumint(8) unsigned NOT NULL,
  `trader` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order` mediumint(8) unsigned NOT NULL,
  `contract` mediumint(8) unsigned NOT NULL,
  `project` mediumint(8) unsigned NOT NULL,
  `investID` mediumint(8) unsigned NOT NULL,
  `loanID` mediumint(8) unsigned NOT NULL,
  `dept` mediumint(8) unsigned NOT NULL,
  `type` enum('in','out','transferin','transferout','invest','redeem','loan','repay') NOT NULL,
  `money` decimal(12,2) NOT NULL,
  `exchangeRate` decimal(12,4) NOT NULL DEFAULT '1.0000',
  `currency` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `deadline` date NOT NULL,
  `handlers` varchar(255) NOT NULL,
  `category` char(30) NOT NULL DEFAULT '0',
  `desc` text NOT NULL,
  `createdBy` char(30) NOT NULL DEFAULT '',
  `createdDate` datetime NOT NULL,
  `editedBy` char(30) NOT NULL DEFAULT '',
  `editedDate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `depositor` (`depositor`),
  KEY `parent` (`parent`),
  KEY `product` (`product`),
  KEY `trader` (`trader`),
  KEY `order` (`order`),
  KEY `contract` (`contract`),
  KEY `investID` (`investID`),
  KEY `loanID` (`loanID`),
  KEY `dept` (`dept`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cash_trade`
--

LOCK TABLES `cash_trade` WRITE;
/*!40000 ALTER TABLE `cash_trade` DISABLE KEYS */;
/*!40000 ALTER TABLE `cash_trade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_address`
--

DROP TABLE IF EXISTS `crm_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_address` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `objectType` char(30) NOT NULL,
  `objectID` mediumint(8) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `area` mediumint(8) unsigned NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `objectType` (`objectType`,`objectID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_address`
--

LOCK TABLES `crm_address` WRITE;
/*!40000 ALTER TABLE `crm_address` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_contact`
--

DROP TABLE IF EXISTS `crm_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_contact` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `realname` char(30) NOT NULL DEFAULT '',
  `nickname` char(30) NOT NULL,
  `resume` mediumint(8) unsigned NOT NULL,
  `origin` varchar(150) NOT NULL,
  `originAccount` varchar(255) NOT NULL,
  `status` enum('normal','wait','ignore') NOT NULL DEFAULT 'normal',
  `avatar` varchar(255) NOT NULL,
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `gender` enum('f','m','u') NOT NULL DEFAULT 'u',
  `email` char(50) NOT NULL DEFAULT '',
  `skype` char(50) NOT NULL,
  `qq` char(20) NOT NULL DEFAULT '',
  `yahoo` char(50) NOT NULL DEFAULT '',
  `gtalk` char(50) NOT NULL DEFAULT '',
  `wangwang` char(50) NOT NULL DEFAULT '',
  `site` varchar(100) NOT NULL,
  `mobile` char(11) NOT NULL DEFAULT '',
  `phone` char(20) NOT NULL DEFAULT '',
  `company` varchar(255) NOT NULL,
  `fax` char(20) NOT NULL DEFAULT '',
  `weibo` char(50) NOT NULL,
  `weixin` char(50) NOT NULL,
  `desc` text NOT NULL,
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedBy` char(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `contactedBy` char(30) NOT NULL,
  `contactedDate` datetime NOT NULL,
  `nextDate` date NOT NULL,
  `assignedTo` char(30) NOT NULL,
  `ignoredBy` char(30) NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `realname` (`realname`),
  KEY `nickname` (`nickname`),
  KEY `origin` (`origin`),
  KEY `birthday` (`birthday`),
  KEY `email` (`email`),
  KEY `qq` (`qq`),
  KEY `mobile` (`mobile`),
  KEY `phone` (`phone`),
  KEY `createdBy` (`createdBy`),
  KEY `contactedBy` (`contactedBy`),
  KEY `contactedDate` (`contactedDate`),
  KEY `nextDate` (`nextDate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_contact`
--

LOCK TABLES `crm_contact` WRITE;
/*!40000 ALTER TABLE `crm_contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_contract`
--

DROP TABLE IF EXISTS `crm_contract`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_contract` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `customer` mediumint(8) unsigned NOT NULL,
  `name` char(100) NOT NULL,
  `code` char(30) NOT NULL,
  `product` char(255) NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `items` text NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `delivery` char(30) NOT NULL,
  `return` char(30) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `status` enum('normal','closed','canceled') NOT NULL DEFAULT 'normal',
  `contact` mediumint(8) unsigned NOT NULL,
  `address` mediumint(8) unsigned NOT NULL,
  `handlers` varchar(255) NOT NULL,
  `signedBy` char(30) NOT NULL,
  `signedDate` date NOT NULL,
  `deliveredBy` char(30) NOT NULL,
  `deliveredDate` date NOT NULL,
  `returnedBy` char(30) NOT NULL,
  `returnedDate` date NOT NULL,
  `finishedBy` char(30) NOT NULL,
  `finishedDate` date NOT NULL,
  `canceledBy` char(30) NOT NULL,
  `canceledDate` date NOT NULL,
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedBy` char(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `contactedBy` char(30) NOT NULL,
  `contactedDate` datetime NOT NULL,
  `nextDate` date NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `customer` (`customer`),
  KEY `amount` (`amount`),
  KEY `delivery` (`delivery`),
  KEY `return` (`return`),
  KEY `begin` (`begin`),
  KEY `end` (`end`),
  KEY `status` (`status`),
  KEY `handlers` (`handlers`),
  KEY `contactedDate` (`contactedDate`),
  KEY `nextDate` (`nextDate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_contract`
--

LOCK TABLES `crm_contract` WRITE;
/*!40000 ALTER TABLE `crm_contract` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_contract` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_contractorder`
--

DROP TABLE IF EXISTS `crm_contractorder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_contractorder` (
  `contract` mediumint(8) unsigned NOT NULL,
  `order` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `contract` (`contract`,`order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_contractorder`
--

LOCK TABLES `crm_contractorder` WRITE;
/*!40000 ALTER TABLE `crm_contractorder` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_contractorder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_customer`
--

DROP TABLE IF EXISTS `crm_customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_customer` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL,
  `type` char(30) NOT NULL,
  `relation` enum('client','provider','partner') NOT NULL DEFAULT 'client',
  `source` varchar(20) NOT NULL,
  `sourceNote` varchar(255) NOT NULL,
  `size` tinyint(3) unsigned NOT NULL,
  `industry` mediumint(8) unsigned NOT NULL,
  `area` mediumint(8) unsigned NOT NULL,
  `status` char(30) NOT NULL,
  `level` char(10) NOT NULL,
  `intension` text NOT NULL,
  `site` varchar(100) NOT NULL,
  `weibo` char(50) NOT NULL,
  `weixin` char(50) NOT NULL,
  `category` mediumint(8) NOT NULL,
  `depositor` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `public` enum('0','1') NOT NULL DEFAULT '0',
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `assignedTo` char(30) NOT NULL,
  `assignedBy` char(30) NOT NULL,
  `assignedDate` datetime NOT NULL,
  `editedBy` char(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `contactedBy` char(30) NOT NULL,
  `contactedDate` datetime NOT NULL,
  `nextDate` date NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `industry` (`industry`),
  KEY `size` (`size`),
  KEY `name` (`name`),
  KEY `type` (`type`),
  KEY `relation` (`relation`),
  KEY `area` (`area`),
  KEY `status` (`status`),
  KEY `level` (`level`),
  KEY `category` (`category`),
  KEY `public` (`public`),
  KEY `assignedTo` (`assignedTo`),
  KEY `contactedDate` (`contactedDate`),
  KEY `nextDate` (`nextDate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_customer`
--

LOCK TABLES `crm_customer` WRITE;
/*!40000 ALTER TABLE `crm_customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_dating`
--

DROP TABLE IF EXISTS `crm_dating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_dating` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `objectType` varchar(30) NOT NULL,
  `objectID` mediumint(8) unsigned NOT NULL,
  `action` mediumint(8) unsigned NOT NULL,
  `contact` mediumint(8) unsigned NOT NULL,
  `account` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `desc` text NOT NULL,
  `status` enum('wait','done') NOT NULL DEFAULT 'wait',
  `createdBy` varchar(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedBy` varchar(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nextDate` (`status`,`objectType`,`objectID`,`date`,`account`,`contact`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_dating`
--

LOCK TABLES `crm_dating` WRITE;
/*!40000 ALTER TABLE `crm_dating` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_dating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_delivery`
--

DROP TABLE IF EXISTS `crm_delivery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_delivery` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `contract` mediumint(8) unsigned NOT NULL,
  `deliveredBy` char(30) NOT NULL,
  `deliveredDate` date NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contract` (`contract`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_delivery`
--

LOCK TABLES `crm_delivery` WRITE;
/*!40000 ALTER TABLE `crm_delivery` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_delivery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_order`
--

DROP TABLE IF EXISTS `crm_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_order` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` char(255) NOT NULL,
  `customer` mediumint(8) unsigned NOT NULL,
  `plan` decimal(12,2) NOT NULL,
  `real` decimal(12,2) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `status` enum('normal','signed','closed') NOT NULL DEFAULT 'normal',
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedBy` char(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `assignedTo` char(30) NOT NULL,
  `assignedBy` char(30) NOT NULL,
  `assignedDate` datetime NOT NULL,
  `signedBy` char(30) NOT NULL,
  `signedDate` date NOT NULL,
  `closedBy` char(30) NOT NULL,
  `closedDate` datetime NOT NULL,
  `closedReason` enum('','payed','failed','postponed') NOT NULL DEFAULT '',
  `activatedBy` char(30) NOT NULL,
  `activatedDate` datetime NOT NULL,
  `contactedBy` char(30) NOT NULL,
  `contactedDate` datetime NOT NULL,
  `nextDate` date NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `product` (`product`),
  KEY `customer` (`customer`),
  KEY `plan` (`plan`),
  KEY `real` (`real`),
  KEY `status` (`status`),
  KEY `createdBy` (`createdBy`),
  KEY `assignedTo` (`assignedTo`),
  KEY `closedBy` (`closedBy`),
  KEY `closedReason` (`closedReason`),
  KEY `contactedDate` (`contactedDate`),
  KEY `nextDate` (`nextDate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_order`
--

LOCK TABLES `crm_order` WRITE;
/*!40000 ALTER TABLE `crm_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_plan`
--

DROP TABLE IF EXISTS `crm_plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_plan` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `trade` mediumint(8) unsigned NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `contract` mediumint(8) unsigned NOT NULL,
  `returnedBy` char(30) NOT NULL,
  `returnedDate` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contract` (`contract`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_plan`
--

LOCK TABLES `crm_plan` WRITE;
/*!40000 ALTER TABLE `crm_plan` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_resume`
--

DROP TABLE IF EXISTS `crm_resume`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_resume` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `contact` mediumint(8) unsigned NOT NULL,
  `customer` mediumint(8) unsigned NOT NULL,
  `maker` enum('0','1') NOT NULL DEFAULT '0',
  `dept` char(100) NOT NULL,
  `title` char(100) NOT NULL,
  `address` mediumint(8) unsigned NOT NULL,
  `join` char(10) NOT NULL,
  `left` char(10) NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `contact` (`contact`),
  KEY `customer` (`customer`),
  KEY `left` (`left`),
  KEY `maker` (`maker`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_resume`
--

LOCK TABLES `crm_resume` WRITE;
/*!40000 ALTER TABLE `crm_resume` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_resume` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_salesgroup`
--

DROP TABLE IF EXISTS `crm_salesgroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_salesgroup` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `users` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_salesgroup`
--

LOCK TABLES `crm_salesgroup` WRITE;
/*!40000 ALTER TABLE `crm_salesgroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_salesgroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_salespriv`
--

DROP TABLE IF EXISTS `crm_salespriv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_salespriv` (
  `account` char(30) NOT NULL,
  `salesgroup` mediumint(8) unsigned NOT NULL,
  `priv` enum('view','edit') NOT NULL,
  KEY `account` (`account`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_salespriv`
--

LOCK TABLES `crm_salespriv` WRITE;
/*!40000 ALTER TABLE `crm_salespriv` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_salespriv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `im_chat`
--

DROP TABLE IF EXISTS `im_chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `im_chat` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `gid` char(40) NOT NULL DEFAULT '',
  `name` varchar(60) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT 'group',
  `admins` varchar(255) NOT NULL DEFAULT '',
  `committers` varchar(255) NOT NULL DEFAULT '',
  `subject` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `public` enum('0','1') NOT NULL DEFAULT '0',
  `createdBy` varchar(30) NOT NULL DEFAULT '',
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `editedBy` varchar(30) NOT NULL DEFAULT '',
  `editedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastActiveTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dismissDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `gid` (`gid`),
  KEY `name` (`name`),
  KEY `type` (`type`),
  KEY `public` (`public`),
  KEY `createdBy` (`createdBy`),
  KEY `editedBy` (`editedBy`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `im_chat`
--

LOCK TABLES `im_chat` WRITE;
/*!40000 ALTER TABLE `im_chat` DISABLE KEYS */;
/*!40000 ALTER TABLE `im_chat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `im_chatuser`
--

DROP TABLE IF EXISTS `im_chatuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `im_chatuser` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cgid` char(40) NOT NULL DEFAULT '',
  `user` mediumint(8) NOT NULL DEFAULT '0',
  `order` smallint(5) NOT NULL DEFAULT '0',
  `star` enum('0','1') NOT NULL DEFAULT '0',
  `hide` enum('0','1') NOT NULL DEFAULT '0',
  `mute` enum('0','1') NOT NULL DEFAULT '0',
  `join` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `quit` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `chatuser` (`cgid`,`user`),
  KEY `cgid` (`cgid`),
  KEY `user` (`user`),
  KEY `order` (`order`),
  KEY `star` (`star`),
  KEY `hide` (`hide`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `im_chatuser`
--

LOCK TABLES `im_chatuser` WRITE;
/*!40000 ALTER TABLE `im_chatuser` DISABLE KEYS */;
/*!40000 ALTER TABLE `im_chatuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `im_client`
--

DROP TABLE IF EXISTS `im_client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `im_client` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `version` char(10) NOT NULL DEFAULT '',
  `desc` varchar(100) NOT NULL DEFAULT '',
  `changeLog` text NOT NULL,
  `strategy` varchar(10) NOT NULL DEFAULT '',
  `downloads` text NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdBy` varchar(30) NOT NULL DEFAULT '',
  `editedDate` datetime NOT NULL,
  `editedBy` varchar(30) NOT NULL DEFAULT '',
  `status` enum('released','wait') NOT NULL DEFAULT 'wait',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `im_client`
--

LOCK TABLES `im_client` WRITE;
/*!40000 ALTER TABLE `im_client` DISABLE KEYS */;
/*!40000 ALTER TABLE `im_client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `im_message`
--

DROP TABLE IF EXISTS `im_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `im_message` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `gid` char(40) NOT NULL DEFAULT '',
  `cgid` char(40) NOT NULL DEFAULT '',
  `user` varchar(30) NOT NULL DEFAULT '',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `order` bigint(8) unsigned NOT NULL,
  `type` enum('normal','broadcast','notify') NOT NULL DEFAULT 'normal',
  `content` text NOT NULL,
  `contentType` enum('text','plain','emotion','image','file','object') NOT NULL DEFAULT 'text',
  `data` text NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mgid` (`gid`),
  KEY `mcgid` (`cgid`),
  KEY `muser` (`user`),
  KEY `mtype` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `im_message`
--

LOCK TABLES `im_message` WRITE;
/*!40000 ALTER TABLE `im_message` DISABLE KEYS */;
INSERT INTO `im_message` VALUES (1,'e649e3ba-7528-eacd-399e-a4e91f996dbe','notification','0','2019-12-30 10:16:38',0,'notify','待办#1 ','text','{\"title\":\"\\u5f85\\u529e\",\"subtitle\":\"\",\"url\":\"\",\"actions\":[],\"sender\":{\"id\":\"ranzhi\"},\"target\":[1]}','0'),(2,'3dffe005-d4df-6438-f07d-e348aee8d996','notification','0','2019-12-30 11:20:12',0,'notify','待办#1 ','text','{\"title\":\"\\u5f85\\u529e\",\"subtitle\":\"\",\"url\":\"\",\"actions\":[],\"sender\":{\"id\":\"ranzhi\"},\"target\":[1]}','0');
/*!40000 ALTER TABLE `im_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `im_messagestatus`
--

DROP TABLE IF EXISTS `im_messagestatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `im_messagestatus` (
  `user` mediumint(8) NOT NULL DEFAULT '0',
  `message` int(11) unsigned NOT NULL,
  `status` enum('waiting','sent','readed','deleted') NOT NULL DEFAULT 'waiting',
  UNIQUE KEY `user` (`user`,`message`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `im_messagestatus`
--

LOCK TABLES `im_messagestatus` WRITE;
/*!40000 ALTER TABLE `im_messagestatus` DISABLE KEYS */;
INSERT INTO `im_messagestatus` VALUES (1,1,'waiting'),(1,2,'waiting');
/*!40000 ALTER TABLE `im_messagestatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_attend`
--

DROP TABLE IF EXISTS `oa_attend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_attend` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `date` date NOT NULL,
  `signIn` time NOT NULL,
  `signOut` time NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(15) NOT NULL,
  `device` varchar(30) NOT NULL,
  `client` varchar(20) NOT NULL,
  `manualIn` time NOT NULL,
  `manualOut` time NOT NULL,
  `reason` varchar(30) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `reviewStatus` varchar(30) NOT NULL DEFAULT '',
  `reviewedBy` char(30) NOT NULL,
  `reviewedDate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `attend` (`date`,`account`),
  KEY `account` (`account`),
  KEY `date` (`date`),
  KEY `status` (`status`),
  KEY `reason` (`reason`),
  KEY `reviewStatus` (`reviewStatus`),
  KEY `reviewedBy` (`reviewedBy`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_attend`
--

LOCK TABLES `oa_attend` WRITE;
/*!40000 ALTER TABLE `oa_attend` DISABLE KEYS */;
INSERT INTO `oa_attend` VALUES (1,'jdf168','2019-12-27','16:56:35','00:00:00','both','113.97.57.8','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00'),(2,'owen','2019-12-27','17:06:19','17:08:40','both','113.97.57.8','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00'),(3,'jdf168','2019-12-30','09:27:32','00:00:00','both','113.97.56.23','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00'),(4,'puhongxing','2019-12-30','00:00:00','00:00:00','absent','','','','00:00:00','00:00:00','','','','','0000-00-00 00:00:00'),(5,'puhongxing','2019-12-31','00:00:00','00:00:00','absent','','','','00:00:00','00:00:00','','','','','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `oa_attend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_attendstat`
--

DROP TABLE IF EXISTS `oa_attendstat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_attendstat` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `month` char(10) NOT NULL DEFAULT '',
  `normal` decimal(12,2) NOT NULL DEFAULT '0.00',
  `late` decimal(12,2) NOT NULL DEFAULT '0.00',
  `early` decimal(12,2) NOT NULL DEFAULT '0.00',
  `absent` decimal(12,2) NOT NULL DEFAULT '0.00',
  `trip` decimal(12,2) NOT NULL DEFAULT '0.00',
  `egress` decimal(12,2) NOT NULL DEFAULT '0.00',
  `lieu` decimal(12,2) NOT NULL DEFAULT '0.00',
  `paidLeave` decimal(12,2) NOT NULL DEFAULT '0.00',
  `unpaidLeave` decimal(12,2) NOT NULL DEFAULT '0.00',
  `timeOvertime` decimal(12,2) NOT NULL DEFAULT '0.00',
  `restOvertime` decimal(12,2) NOT NULL DEFAULT '0.00',
  `holidayOvertime` decimal(12,2) NOT NULL DEFAULT '0.00',
  `deserve` decimal(12,2) NOT NULL DEFAULT '0.00',
  `actual` decimal(12,2) NOT NULL DEFAULT '0.00',
  `status` char(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `attend` (`month`,`account`),
  KEY `account` (`account`),
  KEY `month` (`month`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_attendstat`
--

LOCK TABLES `oa_attendstat` WRITE;
/*!40000 ALTER TABLE `oa_attendstat` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_attendstat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_doc`
--

DROP TABLE IF EXISTS `oa_doc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_doc` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL,
  `project` mediumint(8) unsigned NOT NULL,
  `lib` mediumint(8) unsigned NOT NULL,
  `module` mediumint(8) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL,
  `views` mediumint(8) unsigned NOT NULL,
  `createdBy` varchar(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedBy` varchar(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `version` smallint(5) unsigned NOT NULL DEFAULT '1',
  `private` enum('0','1') NOT NULL DEFAULT '0',
  `users` text NOT NULL,
  `groups` varchar(255) NOT NULL DEFAULT '',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_doc`
--

LOCK TABLES `oa_doc` WRITE;
/*!40000 ALTER TABLE `oa_doc` DISABLE KEYS */;
INSERT INTO `oa_doc` VALUES (1,0,0,1,0,'1','','text',0,'puhongxing','2019-12-30 13:59:13','','0000-00-00 00:00:00',1,'0',',jdf168,lijie,',',6,','0');
/*!40000 ALTER TABLE `oa_doc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_doccontent`
--

DROP TABLE IF EXISTS `oa_doccontent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_doccontent` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `doc` mediumint(8) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `digest` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `files` text NOT NULL,
  `type` varchar(10) NOT NULL,
  `version` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `docVersion` (`doc`,`version`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_doccontent`
--

LOCK TABLES `oa_doccontent` WRITE;
/*!40000 ALTER TABLE `oa_doccontent` DISABLE KEYS */;
INSERT INTO `oa_doccontent` VALUES (1,1,'1','','','2,3','html',1);
/*!40000 ALTER TABLE `oa_doccontent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_doclib`
--

DROP TABLE IF EXISTS `oa_doclib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_doclib` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `project` mediumint(8) unsigned NOT NULL,
  `name` varchar(60) NOT NULL,
  `private` enum('0','1') NOT NULL DEFAULT '0',
  `users` text NOT NULL,
  `groups` varchar(255) NOT NULL DEFAULT '',
  `main` enum('0','1') NOT NULL DEFAULT '0',
  `order` tinyint(5) unsigned NOT NULL,
  `createdBy` varchar(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedBy` varchar(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_doclib`
--

LOCK TABLES `oa_doclib` WRITE;
/*!40000 ALTER TABLE `oa_doclib` DISABLE KEYS */;
INSERT INTO `oa_doclib` VALUES (1,0,'私密','0','',',6,','0',0,'puhongxing','2019-12-30 13:58:22','','0000-00-00 00:00:00','0'),(2,1,'项目主库','0',',puhongxing,','18,17,16,6,7,20','1',0,'puhongxing','2019-12-30 15:26:26','','0000-00-00 00:00:00','1');
/*!40000 ALTER TABLE `oa_doclib` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_holiday`
--

DROP TABLE IF EXISTS `oa_holiday`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_holiday` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `type` enum('holiday','working') NOT NULL DEFAULT 'holiday',
  `desc` text NOT NULL,
  `year` char(4) NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `year` (`year`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_holiday`
--

LOCK TABLES `oa_holiday` WRITE;
/*!40000 ALTER TABLE `oa_holiday` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_holiday` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_leave`
--

DROP TABLE IF EXISTS `oa_leave`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_leave` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `year` char(4) NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `start` time NOT NULL,
  `finish` time NOT NULL,
  `hours` float unsigned NOT NULL,
  `backDate` datetime NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT '',
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `reviewedBy` char(30) NOT NULL,
  `reviewedDate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `year` (`year`),
  KEY `type` (`type`),
  KEY `status` (`status`),
  KEY `createdBy` (`createdBy`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_leave`
--

LOCK TABLES `oa_leave` WRITE;
/*!40000 ALTER TABLE `oa_leave` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_leave` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_lieu`
--

DROP TABLE IF EXISTS `oa_lieu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_lieu` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `year` char(4) NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `start` time NOT NULL,
  `finish` time NOT NULL,
  `hours` float unsigned NOT NULL,
  `overtime` char(255) NOT NULL,
  `trip` char(255) NOT NULL,
  `desc` text NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT '',
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `reviewedBy` char(30) NOT NULL,
  `reviewedDate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `year` (`year`),
  KEY `status` (`status`),
  KEY `createdBy` (`createdBy`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_lieu`
--

LOCK TABLES `oa_lieu` WRITE;
/*!40000 ALTER TABLE `oa_lieu` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_lieu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_overtime`
--

DROP TABLE IF EXISTS `oa_overtime`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_overtime` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `year` char(4) NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `start` time NOT NULL,
  `finish` time NOT NULL,
  `hours` float unsigned NOT NULL,
  `leave` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT '',
  `rejectReason` varchar(100) NOT NULL,
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `reviewedBy` char(30) NOT NULL,
  `reviewedDate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `year` (`year`),
  KEY `type` (`type`),
  KEY `status` (`status`),
  KEY `createdBy` (`createdBy`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_overtime`
--

LOCK TABLES `oa_overtime` WRITE;
/*!40000 ALTER TABLE `oa_overtime` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_overtime` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_project`
--

DROP TABLE IF EXISTS `oa_project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_project` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `desc` text NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedBy` char(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `status` enum('doing','finished','suspend') NOT NULL DEFAULT 'doing',
  `whitelist` varchar(255) NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_project`
--

LOCK TABLES `oa_project` WRITE;
/*!40000 ALTER TABLE `oa_project` DISABLE KEYS */;
INSERT INTO `oa_project` VALUES (1,'网站建设','1','2019-12-31','2020-02-01','puhongxing','2019-12-30 15:26:26','','0000-00-00 00:00:00','doing','18,17,16,6,7,20','1');
/*!40000 ALTER TABLE `oa_project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_refund`
--

DROP TABLE IF EXISTS `oa_refund`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_refund` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `customer` mediumint(8) unsigned NOT NULL,
  `order` mediumint(8) unsigned NOT NULL,
  `contract` mediumint(8) unsigned NOT NULL,
  `project` mediumint(8) unsigned NOT NULL,
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `dept` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` char(150) NOT NULL,
  `payee` varchar(30) NOT NULL,
  `category` char(30) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `money` decimal(12,2) NOT NULL,
  `invoice` decimal(12,2) NOT NULL,
  `currency` varchar(30) NOT NULL,
  `desc` text NOT NULL,
  `related` char(200) NOT NULL DEFAULT '',
  `status` char(30) NOT NULL DEFAULT 'wait',
  `createdBy` char(30) NOT NULL DEFAULT '',
  `createdDate` datetime NOT NULL,
  `editedBy` char(30) NOT NULL DEFAULT '',
  `editedDate` datetime NOT NULL,
  `firstReviewer` char(30) NOT NULL DEFAULT '',
  `firstReviewDate` datetime NOT NULL,
  `secondReviewer` char(30) NOT NULL DEFAULT '',
  `secondReviewDate` datetime NOT NULL,
  `refundBy` char(30) NOT NULL DEFAULT '',
  `refundDate` datetime NOT NULL,
  `reason` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `createdBy` (`createdBy`),
  KEY `firstReviewer` (`firstReviewer`),
  KEY `secondReviewer` (`secondReviewer`),
  KEY `refundBy` (`refundBy`),
  KEY `category` (`category`),
  KEY `date` (`date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_refund`
--

LOCK TABLES `oa_refund` WRITE;
/*!40000 ALTER TABLE `oa_refund` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_refund` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_todo`
--

DROP TABLE IF EXISTS `oa_todo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_todo` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `date` date NOT NULL,
  `begin` smallint(4) unsigned zerofill NOT NULL,
  `end` smallint(4) unsigned zerofill NOT NULL,
  `type` char(20) NOT NULL,
  `idvalue` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `pri` tinyint(3) unsigned NOT NULL,
  `name` char(150) NOT NULL,
  `desc` text NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT '',
  `private` tinyint(1) NOT NULL,
  `assignedTo` varchar(30) NOT NULL DEFAULT '',
  `assignedBy` varchar(30) NOT NULL DEFAULT '',
  `assignedDate` datetime NOT NULL,
  `finishedBy` varchar(30) NOT NULL DEFAULT '',
  `finishedDate` datetime NOT NULL,
  `closedBy` varchar(30) NOT NULL DEFAULT '',
  `closedDate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`account`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_todo`
--

LOCK TABLES `oa_todo` WRITE;
/*!40000 ALTER TABLE `oa_todo` DISABLE KEYS */;
INSERT INTO `oa_todo` VALUES (1,'owen','2019-12-30',1020,1050,'task',0,3,'','11223','wait',0,'fdq','owen','2019-12-30 11:18:17','','0000-00-00 00:00:00','','0000-00-00 00:00:00'),(2,'fdq','2019-12-31',1120,1150,'order',0,1,'','123','wait',0,'puhongxing','owen','2019-12-30 11:17:24','','0000-00-00 00:00:00','','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `oa_todo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_trip`
--

DROP TABLE IF EXISTS `oa_trip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_trip` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('trip','egress') NOT NULL DEFAULT 'trip',
  `customers` varchar(20) NOT NULL,
  `name` char(30) NOT NULL,
  `desc` text NOT NULL,
  `year` char(4) NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `start` time NOT NULL,
  `finish` time NOT NULL,
  `from` char(50) NOT NULL,
  `to` char(50) NOT NULL,
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `year` (`year`),
  KEY `createdBy` (`createdBy`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_trip`
--

LOCK TABLES `oa_trip` WRITE;
/*!40000 ALTER TABLE `oa_trip` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_trip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_action`
--

DROP TABLE IF EXISTS `sys_action`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_action` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `customer` mediumint(8) unsigned DEFAULT NULL,
  `contact` mediumint(8) unsigned DEFAULT NULL,
  `objectType` varchar(30) NOT NULL DEFAULT '',
  `objectID` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `actor` varchar(30) NOT NULL DEFAULT '',
  `action` varchar(30) NOT NULL DEFAULT '',
  `date` datetime NOT NULL,
  `comment` text NOT NULL,
  `extra` varchar(255) NOT NULL,
  `read` enum('0','1') NOT NULL DEFAULT '0',
  `reader` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer` (`customer`),
  KEY `contact` (`contact`),
  KEY `objectType` (`objectType`),
  KEY `objectID` (`objectID`),
  KEY `date` (`date`)
) ENGINE=MyISAM AUTO_INCREMENT=177 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_action`
--

LOCK TABLES `sys_action` WRITE;
/*!40000 ALTER TABLE `sys_action` DISABLE KEYS */;
INSERT INTO `sys_action` VALUES (157,0,0,'user',42,'jdf168','created','2019-12-30 15:12:35','','','0',''),(158,0,0,'user',43,'jdf168','created','2019-12-30 15:13:43','','','0',''),(159,0,0,'user',44,'jdf168','created','2019-12-30 15:14:13','','','0',''),(160,0,0,'user',45,'jdf168','created','2019-12-30 15:14:59','','','0',''),(161,0,0,'user',46,'jdf168','created','2019-12-30 15:15:37','','','0',''),(162,0,0,'user',47,'jdf168','created','2019-12-30 15:20:50','','','0',''),(163,0,0,'user',1,'jdf168','logout','2019-12-30 15:21:42','','','0',''),(164,0,0,'user',4,'puhongxing','login','2019-12-30 15:22:19','','','0',''),(165,0,0,'project',1,'puhongxing','created','2019-12-30 15:26:26','','','0',''),(166,0,0,'user',1,'jdf168','login','2019-12-31 13:57:08','','','0',''),(167,0,0,'user',21,'liujing','login','2020-01-02 17:39:22','','','0',''),(168,0,0,'user',21,'liujing','logout','2020-01-02 17:45:01','','','0',''),(169,0,0,'user',1,'jdf168','login','2020-01-02 17:45:08','','','0',''),(170,0,0,'user',21,'liujing','login','2020-01-06 09:23:15','','','0',''),(171,0,0,'user',21,'liujing','logout','2020-01-06 09:29:19','','','0',''),(172,0,0,'user',4,'puhongxing','login','2020-01-06 09:29:42','','','0',''),(173,0,0,'user',4,'puhongxing','logout','2020-01-06 09:30:29','','','0',''),(174,0,0,'user',1,'jdf168','login','2020-01-06 09:30:35','','','0',''),(175,0,0,'project',1,'jdf168','deleted','2020-01-06 09:31:06','','1','0',''),(176,0,0,'user',1,'jdf168','login','2020-01-07 09:20:22','','','0','');
/*!40000 ALTER TABLE `sys_action` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_article`
--

DROP TABLE IF EXISTS `sys_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_article` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `summary` text NOT NULL,
  `content` text NOT NULL,
  `original` enum('1','0') NOT NULL,
  `copySite` varchar(60) NOT NULL,
  `copyURL` varchar(255) NOT NULL,
  `author` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'normal',
  `type` varchar(30) NOT NULL,
  `views` mediumint(5) unsigned NOT NULL DEFAULT '0',
  `sticky` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL,
  `private` enum('0','1') NOT NULL DEFAULT '0',
  `users` text NOT NULL,
  `groups` varchar(255) NOT NULL DEFAULT '',
  `readers` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order` (`order`),
  KEY `views` (`views`),
  KEY `sticky` (`sticky`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_article`
--

LOCK TABLES `sys_article` WRITE;
/*!40000 ALTER TABLE `sys_article` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_block`
--

DROP TABLE IF EXISTS `sys_block`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_block` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `app` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `source` varchar(20) NOT NULL,
  `block` varchar(20) NOT NULL,
  `params` text NOT NULL,
  `order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `grid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `hidden` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `accountAppOrder` (`account`,`app`,`order`),
  KEY `account` (`account`,`app`)
) ENGINE=MyISAM AUTO_INCREMENT=165 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_block`
--

LOCK TABLES `sys_block` WRITE;
/*!40000 ALTER TABLE `sys_block` DISABLE KEYS */;
INSERT INTO `sys_block` VALUES (2,'jdf168','sys','最新动态','','dynamic','',2,6,0,0),(34,'jdf168','sys','系统公告','oa','announce','{\"color\":\"danger\",\"num\":\"15\"}',3,4,0,0),(4,'jdf168','sys','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',4,4,0,0),(5,'jdf168','sys','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',5,4,0,0),(6,'jdf168','sys','付款账户','cash','depositor','[]',6,4,0,0),(7,'jdf168','sys','最新博客','team','blog','{\"num\":15}',7,4,0,0),(8,'jdf168','sys','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',8,4,0,0),(9,'jdf168','oa','日历','oa','attend','',1,6,0,0),(10,'jdf168','oa','系统公告','oa','announce','{\"num\":15}',2,4,0,0),(11,'jdf168','proj','指派给我的任务','proj','task','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":[],\"type\":\"assignedTo\"}',3,4,0,0),(12,'jdf168','proj','项目列表','proj','project','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":\"doing\"}',4,4,0,0),(13,'jdf168','crm','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',1,4,241,0),(14,'jdf168','crm','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',2,4,0,0),(15,'jdf168','crm','本周联系','crm','customer','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"thisweek\"}',3,4,0,0),(19,'jdf168','cash','付款账户','cash','depositor','{\"color\":\"default\"}',1,4,0,0),(17,'jdf168','cash','账目','cash','trade','{\"num\":15,\"orderBy\":\"id_desc\"}',2,4,0,0),(18,'jdf168','cash','供应商','cash','provider','{\"num\":15,\"orderBy\":\"id_desc\"}',3,4,0,0),(20,'jdf168','team','最新博客','team','blog','{\"num\":15}',1,4,0,0),(21,'jdf168','team','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',2,4,0,0),(22,'jdf168','team','置顶帖子','team','thread','{\"num\":15,\"type\":\"stick\"}',3,4,0,0),(23,'owen','sys','日历','oa','attend','',1,6,0,0),(24,'owen','sys','最新动态','','dynamic','',2,6,0,0),(25,'owen','sys','系统公告','oa','announce','{\"num\":15}',3,4,0,0),(26,'owen','sys','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',4,4,0,0),(27,'owen','sys','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',5,4,0,0),(28,'owen','sys','付款账户','cash','depositor','[]',6,4,0,0),(29,'owen','sys','最新博客','team','blog','{\"num\":15}',7,4,0,0),(30,'owen','sys','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',8,4,0,0),(33,'jdf168','sys','日历','oa','attend','{\"color\":\"success\"}',9,4,0,0),(35,'jdf168','xxb','状态监控','xxb','status','',1,6,0,0),(36,'jdf168','xxb','系统统计','xxb','statistics','',2,6,0,0),(37,'caiwu1','sys','日历','oa','attend','',1,6,0,0),(38,'caiwu1','sys','最新动态','','dynamic','',2,6,0,0),(39,'caiwu1','sys','系统公告','oa','announce','{\"num\":15}',3,4,0,0),(40,'caiwu1','sys','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',4,4,0,0),(41,'caiwu1','sys','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',5,4,0,0),(42,'caiwu1','sys','付款账户','cash','depositor','[]',6,4,0,0),(43,'caiwu1','sys','最新博客','team','blog','{\"num\":15}',7,4,0,0),(44,'caiwu1','sys','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',8,4,0,0),(47,'puhongxing','sys','日历','oa','attend','',1,6,0,0),(121,'lijie','sys','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',4,4,0,0),(49,'puhongxing','sys','系统公告','oa','announce','{\"num\":15}',3,4,0,0),(50,'puhongxing','sys','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',4,4,0,0),(51,'puhongxing','sys','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',5,4,0,0),(52,'puhongxing','sys','付款账户','cash','depositor','[]',6,4,0,0),(53,'puhongxing','sys','最新博客','team','blog','{\"num\":15}',7,4,0,0),(54,'puhongxing','sys','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',8,4,0,0),(55,'puhongxing','proj','指派给我的任务','proj','task','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":[],\"type\":\"assignedTo\"}',3,4,0,0),(56,'puhongxing','proj','项目列表','proj','project','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":\"doing\"}',4,4,0,0),(57,'puhongxing','oa','日历','oa','attend','',1,6,0,0),(58,'puhongxing','oa','系统公告','oa','announce','{\"num\":15}',2,4,0,0),(59,'panguocheng','sys','日历','oa','attend','',1,6,0,0),(61,'panguocheng','sys','系统公告','oa','announce','{\"num\":15}',3,4,0,0),(62,'panguocheng','sys','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',4,4,0,0),(63,'panguocheng','sys','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',5,4,0,0),(64,'panguocheng','sys','付款账户','cash','depositor','[]',6,4,0,0),(65,'panguocheng','sys','最新博客','team','blog','{\"num\":15}',7,4,0,0),(66,'panguocheng','sys','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',8,4,0,0),(67,'panguocheng','proj','指派给我的任务','proj','task','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":[],\"type\":\"assignedTo\"}',3,4,0,0),(68,'panguocheng','proj','项目列表','proj','project','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":\"doing\"}',4,4,0,0),(69,'panguocheng','oa','日历','oa','attend','',1,6,0,0),(70,'panguocheng','oa','系统公告','oa','announce','{\"num\":15}',2,4,0,0),(60,'panguocheng','sys','最新动态','','dynamic','{}',2,6,247,0),(71,'fdq','sys','日历','oa','attend','',1,6,0,0),(72,'fdq','sys','最新动态','','dynamic','',2,6,0,0),(73,'fdq','sys','系统公告','oa','announce','{\"num\":15}',3,4,0,0),(74,'fdq','sys','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',4,4,0,0),(75,'fdq','sys','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',5,4,0,0),(76,'fdq','sys','付款账户','cash','depositor','[]',6,4,0,0),(77,'fdq','sys','最新博客','team','blog','{\"num\":15}',7,4,0,0),(78,'fdq','sys','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',8,4,0,0),(79,'xhj','sys','日历','oa','attend','',1,6,0,0),(80,'xhj','sys','最新动态','','dynamic','',2,6,0,0),(81,'xhj','sys','系统公告','oa','announce','{\"num\":15}',3,4,0,0),(82,'xhj','sys','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',4,4,0,0),(83,'xhj','sys','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',5,4,0,0),(84,'xhj','sys','付款账户','cash','depositor','[]',6,4,0,0),(85,'xhj','sys','最新博客','team','blog','{\"num\":15}',7,4,0,0),(86,'xhj','sys','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',8,4,0,0),(87,'xhj','proj','指派给我的任务','proj','task','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":[],\"type\":\"assignedTo\"}',3,4,0,0),(88,'xhj','proj','项目列表','proj','project','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":\"doing\"}',4,4,0,0),(89,'xhj','cash','付款账户','cash','depositor','[]',1,4,0,0),(90,'xhj','cash','账目','cash','trade','{\"num\":15,\"orderBy\":\"id_desc\"}',2,4,0,0),(91,'xhj','cash','供应商','cash','provider','{\"num\":15,\"orderBy\":\"id_desc\"}',3,4,0,0),(92,'xhj','cash','','cash','report','{\"color\":\"default\",\"type\":\"in\",\"groupBy\":\"category\",\"currency\":\"rmb\"}',4,4,0,0),(93,'fdq','proj','指派给我的任务','proj','task','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":[],\"type\":\"assignedTo\"}',3,4,0,0),(94,'fdq','proj','项目列表','proj','project','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":\"doing\"}',4,4,0,0),(95,'fdq','oa','日历','oa','attend','',1,6,0,0),(96,'fdq','oa','系统公告','oa','announce','{\"num\":15}',2,4,0,0),(97,'fdq','proj','','proj','task','{\"color\":\"default\",\"type\":\"assignedTo\",\"num\":\"15\",\"orderBy\":\"id_desc\",\"status\":[\"\"]}',5,4,0,0),(98,'master','sys','日历','oa','attend','',1,6,0,0),(99,'master','sys','最新动态','','dynamic','',2,6,0,0),(100,'master','sys','系统公告','oa','announce','{\"num\":15}',3,4,0,0),(101,'master','sys','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',4,4,0,0),(102,'master','sys','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',5,4,0,0),(103,'master','sys','付款账户','cash','depositor','[]',6,4,0,0),(104,'master','sys','最新博客','team','blog','{\"num\":15}',7,4,0,0),(105,'master','sys','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',8,4,0,0),(106,'master','cash','付款账户','cash','depositor','[]',1,4,0,0),(107,'master','cash','账目','cash','trade','{\"num\":15,\"orderBy\":\"id_desc\"}',2,4,0,0),(108,'master','cash','供应商','cash','provider','{\"num\":15,\"orderBy\":\"id_desc\"}',3,4,0,0),(109,'master','oa','日历','oa','attend','',1,6,0,0),(110,'master','oa','系统公告','oa','announce','{\"num\":15}',2,4,0,0),(111,'master','proj','指派给我的任务','proj','task','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":[],\"type\":\"assignedTo\"}',3,4,0,0),(112,'master','proj','项目列表','proj','project','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":\"doing\"}',4,4,0,0),(113,'master','crm','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',1,4,0,0),(114,'master','crm','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',2,4,0,0),(115,'master','crm','本周联系','crm','customer','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"thisweek\"}',3,4,0,0),(118,'lijie','sys','日历','oa','attend','',1,6,0,0),(119,'lijie','sys','最新动态','','dynamic','',2,6,0,0),(120,'lijie','sys','系统公告','oa','announce','{\"num\":15}',3,4,0,0),(122,'lijie','sys','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',5,4,0,0),(123,'lijie','sys','付款账户','cash','depositor','[]',6,4,0,0),(124,'lijie','sys','最新博客','team','blog','{\"num\":15}',7,4,0,0),(125,'lijie','sys','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',8,4,0,0),(126,'lijie','oa','日历','oa','attend','',1,6,0,0),(127,'lijie','oa','系统公告','oa','announce','{\"num\":15}',2,4,0,0),(128,'lifei','sys','日历','oa','attend','',1,6,0,0),(129,'lifei','sys','最新动态','','dynamic','',2,6,0,0),(130,'lifei','sys','系统公告','oa','announce','{\"num\":15}',3,4,0,0),(131,'lifei','sys','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',4,4,0,0),(132,'lifei','sys','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',5,4,0,0),(133,'lifei','sys','付款账户','cash','depositor','[]',6,4,0,0),(134,'lifei','sys','最新博客','team','blog','{\"num\":15}',7,4,0,0),(135,'lifei','sys','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',8,4,0,0),(136,'wanghequn','sys','日历','oa','attend','',1,6,0,0),(137,'wanghequn','sys','最新动态','','dynamic','',2,6,0,0),(138,'wanghequn','sys','系统公告','oa','announce','{\"num\":15}',3,4,0,0),(139,'wanghequn','sys','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',4,4,0,0),(140,'wanghequn','sys','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',5,4,0,0),(141,'wanghequn','sys','付款账户','cash','depositor','[]',6,4,0,0),(142,'wanghequn','sys','最新博客','team','blog','{\"num\":15}',7,4,0,0),(143,'wanghequn','sys','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',8,4,0,0),(144,'wanghequn','team','最新博客','team','blog','{\"num\":15}',1,4,0,0),(145,'wanghequn','team','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',2,4,0,0),(146,'wanghequn','team','置顶帖子','team','thread','{\"num\":15,\"type\":\"stick\"}',3,4,0,0),(147,'wanghequn','crm','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',1,4,0,0),(148,'wanghequn','crm','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',2,4,0,0),(149,'wanghequn','crm','本周联系','crm','customer','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"thisweek\"}',3,4,0,0),(150,'liujing','sys','日历','oa','attend','',1,6,0,0),(151,'liujing','sys','最新动态','','dynamic','',2,6,0,0),(152,'liujing','sys','系统公告','oa','announce','{\"num\":15}',3,4,0,0),(153,'liujing','sys','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',4,4,0,0),(154,'liujing','sys','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',5,4,0,0),(155,'liujing','sys','付款账户','cash','depositor','[]',6,4,0,0),(156,'liujing','sys','最新博客','team','blog','{\"num\":15}',7,4,0,0),(157,'liujing','sys','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',8,4,0,0),(158,'liujing','cash','付款账户','cash','depositor','[]',1,4,0,0),(159,'liujing','cash','账目','cash','trade','{\"num\":15,\"orderBy\":\"id_desc\"}',2,4,0,0),(160,'liujing','cash','供应商','cash','provider','{\"num\":15,\"orderBy\":\"id_desc\"}',3,4,0,0),(161,'liujing','proj','指派给我的任务','proj','task','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":[],\"type\":\"assignedTo\"}',3,4,0,0),(162,'liujing','proj','项目列表','proj','project','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":\"doing\"}',4,4,0,0),(163,'liujing','oa','日历','oa','attend','',1,6,0,0),(164,'liujing','oa','系统公告','oa','announce','{\"num\":15}',2,4,0,0);
/*!40000 ALTER TABLE `sys_block` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_category`
--

DROP TABLE IF EXISTS `sys_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_category` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL DEFAULT '',
  `alias` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `root` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `path` char(255) NOT NULL DEFAULT '',
  `grade` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL DEFAULT '0',
  `type` char(30) NOT NULL,
  `readonly` enum('0','1') NOT NULL DEFAULT '0',
  `moderators` varchar(255) NOT NULL,
  `threads` smallint(5) NOT NULL,
  `posts` smallint(5) NOT NULL,
  `postedBy` varchar(30) NOT NULL,
  `postedDate` datetime NOT NULL,
  `postID` mediumint(8) unsigned NOT NULL,
  `replyID` mediumint(8) unsigned NOT NULL,
  `users` text NOT NULL,
  `rights` varchar(255) NOT NULL,
  `refund` enum('0','1') NOT NULL DEFAULT '0',
  `major` enum('0','1','2','3','4','5','6','7','8') NOT NULL DEFAULT '0',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `order` (`order`),
  KEY `parent` (`parent`),
  KEY `path` (`path`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_category`
--

LOCK TABLES `sys_category` WRITE;
/*!40000 ALTER TABLE `sys_category` DISABLE KEYS */;
INSERT INTO `sys_category` VALUES (1,'主营业务收入','','','',0,0,',1,',1,1,'in','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','0','1','0'),(2,'非主营业务收入','','','',0,0,',2,',1,2,'in','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','0','2','0'),(3,'主营业务成本','','','',0,0,',3,',1,3,'out','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','0','3','0'),(4,'非主营业务成本','','','',0,0,',4,',1,4,'out','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','0','4','0'),(5,'理财盈利','','','',0,2,',2,5,',2,5,'in','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','0','5','0'),(6,'理财亏损','','','',0,4,',4,6,',2,6,'out','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','0','6','0'),(7,'手续费','','','',0,4,',4,7,',2,7,'out','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','0','7','0'),(8,'借贷利息','','','',0,4,',4,8,',2,8,'out','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','0','8','0'),(9,'信息技术部','','','',0,0,',9,',1,80,'dept','0','',0,0,'jdf168','2019-12-27 17:03:11',0,0,'','','0','0','0'),(10,'财务部','','','',0,0,',10,',1,10,'dept','0','',0,0,'jdf168','2019-12-27 17:03:11',0,0,'','','0','0','0'),(11,'客服部','','','',0,0,',11,',1,20,'dept','0','',0,0,'jdf168','2019-12-27 17:39:46',0,0,'','','0','0','0'),(12,'市场一部','','','',0,0,',12,',1,30,'dept','0','',0,0,'jdf168','2019-12-27 17:39:46',0,0,'','','0','0','0'),(13,'市场二部','','','',0,0,',13,',1,40,'dept','0','',0,0,'jdf168','2019-12-27 17:39:46',0,0,'','','0','0','0'),(14,'产品部','','','',0,0,',14,',1,50,'dept','0','',0,0,'jdf168','2019-12-27 17:39:46',0,0,'','','0','0','0'),(15,'商务部','','','',0,0,',15,',1,60,'dept','0','',0,0,'jdf168','2019-12-27 17:39:46',0,0,'','','0','0','0'),(16,'技术部','','','',0,0,',16,',1,70,'dept','0','',0,0,'jdf168','2019-12-27 17:40:00',0,0,'','','0','0','0'),(17,'董事长','','','',0,0,',17,',1,90,'dept','0','',0,0,'jdf168','2019-12-30 10:38:58',0,0,'','','0','0','0'),(18,'总裁','','','',0,0,',18,',1,100,'dept','0','',0,0,'jdf168','2019-12-30 10:38:58',0,0,'','','0','0','0'),(19,'总经理','','','',0,0,',19,',1,110,'dept','0','',0,0,'jdf168','2019-12-30 10:38:58',0,0,'','','0','0','0'),(20,'副总经理','','','',0,0,',20,',1,120,'dept','0','',0,0,'jdf168','2019-12-30 10:38:58',0,0,'','','0','0','0'),(21,'科隆总经理','','','',0,0,',21,',1,130,'dept','0','',0,0,'jdf168','2019-12-30 10:38:58',0,0,'','','0','0','0'),(22,'总经办主任','','','',0,0,',22,',1,140,'dept','0','',0,0,'jdf168','2019-12-30 10:39:22',0,0,'','','0','0','0'),(23,'法律顾问','','','',0,0,',23,',1,150,'dept','0','',0,0,'jdf168','2019-12-30 10:39:22',0,0,'','','0','0','0');
/*!40000 ALTER TABLE `sys_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_config`
--

DROP TABLE IF EXISTS `sys_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_config` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `owner` char(30) NOT NULL DEFAULT '',
  `app` varchar(30) NOT NULL DEFAULT 'sys',
  `module` varchar(30) NOT NULL,
  `section` char(30) NOT NULL DEFAULT '',
  `key` char(30) DEFAULT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`owner`,`app`,`module`,`section`,`key`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_config`
--

LOCK TABLES `sys_config` WRITE;
/*!40000 ALTER TABLE `sys_config` DISABLE KEYS */;
INSERT INTO `sys_config` VALUES (1,'system','sys','xuanxuan','global','version','2.5.5'),(2,'system','sys','common','xuanxuan','key','178eb0d4b3cdf42db0f69e50a8911f4b'),(3,'system','sys','common','global','version','5.2'),(4,'jdf168','sys','common','','blockInited','1'),(5,'system','sys','cron','run','status','running'),(6,'jdf168','oa','common','','blockInited','1'),(7,'jdf168','proj','common','','blockInited','1'),(8,'jdf168','crm','common','','blockInited','1'),(9,'jdf168','cash','common','','blockInited','1'),(15,'system','oa','attend','readers','2019-12-30','jdf168'),(11,'jdf168','team','common','','blockInited','1'),(114,'system','sys','group','','unUpdatedAccounts',',wxx,wcp,lihong,caiwu1,,xieliping,yanghuan,yeyingfang,xiahongjuan,chenzhaolian,linmingyang,suweinan,sunhonghua,wuhuanhuan,wenxinxin,liufenglin,liuyong,pengxiaoqian,wangchunping,wangqing,xiaokexi,chencuifang,chenshuling,huangjinyan,luqizhong,qinmengli,wudengke,yangdandan,yanjiali,zhongcailing,zhujiang,huangjiping,zhufeng,chenyiye,ningziyan,,'),(13,'owen','sys','common','','blockInited','1'),(23,'caiwu1','sys','common','','blockInited','1'),(16,'system','oa','setting','','modules','leave,makeup,overtime,lieu,trip,egress,refund'),(17,'jdf168','xxb','common','','blockInited','1'),(75,'jdf168','sys','common','','customApp','{\"1\":{\"id\":1,\"order\":10},\"2\":{\"id\":2,\"order\":20},\"3\":{\"id\":3,\"order\":30},\"4\":{\"id\":4,\"order\":40},\"5\":{\"id\":5,\"order\":50},\"6\":{\"id\":6,\"order\":60},\"dashboard\":{\"id\":\"dashboard\",\"visible\":1,\"order\":0},\"superadmin\":{\"id\":\"superadmin\",\"order\":99999970},\"allapps\":{\"id\":\"allapps\",\"order\":99999990},\"home\":{\"id\":\"home\",\"order\":90}}'),(30,'system','sys','common','company','name','维润赛润生物技术（深圳）有限公司'),(31,'system','sys','common','company','content','<p style=\"font-family:&quot;color:#282828;font-size:16px;\">\n	维润赛润生物技术（深圳）有限公司成立于2015年，是目前德国维润赛润研发有限公司在全球唯一的控股子公司，是中国德国商会会员单位，主要负责亚太地区（包括中国大陆）维润赛润产品的市场推广、技术服务和商务合作等全面事务。\n</p>\n<p style=\"font-family:&quot;color:#282828;font-size:16px;\">\n	Virion \\ Serion成立于1978年，经过40多年的发展，已发展成一家知名且受人尊敬的体外诊断制造商，拥有病毒、细菌、真菌和寄生虫等诊断产品，是全球最大的传染病诊断试剂供应商之一。同时基于在高质量抗原方面的技术积累及成功经验，Virion \\ Serion已成为诊断原材料的主要供应商之一。\n</p>\n<p style=\"font-family:&quot;color:#282828;font-size:16px;\">\n	公司所有生产过程、服务和产品均依据欧盟指令98/79/EC，并在DIN EN ISO 13485质量管理体系下进行管理，确保并保持产品和服务的最高质量。\n</p>'),(32,'system','sys','common','company','uid','5e09638232b94'),(33,'puhongxing','sys','common','','blockInited','1'),(36,'puhongxing','proj','common','','blockInited','1'),(37,'puhongxing','oa','common','','blockInited','1'),(41,'panguocheng','sys','common','','blockInited','1'),(45,'panguocheng','proj','common','','blockInited','1'),(46,'panguocheng','oa','common','','blockInited','1'),(47,'fdq','sys','common','','blockInited','1'),(56,'xhj','sys','common','','blockInited','1'),(57,'xhj','proj','common','','blockInited','1'),(58,'xhj','cash','common','','blockInited','1'),(64,'fdq','proj','common','','blockInited','1'),(65,'fdq','oa','common','','blockInited','1'),(70,'master','sys','common','','blockInited','1'),(71,'master','cash','common','','blockInited','1'),(72,'master','oa','common','','blockInited','1'),(73,'master','proj','common','','blockInited','1'),(74,'master','crm','common','','blockInited','1'),(93,'lijie','sys','common','','blockInited','1'),(94,'lijie','oa','common','','blockInited','1'),(96,'lifei','sys','common','','blockInited','1'),(101,'wanghequn','sys','common','','blockInited','1'),(102,'wanghequn','team','common','','blockInited','1'),(103,'wanghequn','crm','common','','blockInited','1'),(109,'liujing','sys','common','','blockInited','1'),(110,'liujing','cash','common','','blockInited','1'),(111,'liujing','proj','common','','blockInited','1'),(112,'liujing','oa','common','','blockInited','1');
/*!40000 ALTER TABLE `sys_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_cron`
--

DROP TABLE IF EXISTS `sys_cron`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_cron` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `m` varchar(20) NOT NULL,
  `h` varchar(20) NOT NULL,
  `dom` varchar(20) NOT NULL,
  `mon` varchar(20) NOT NULL,
  `dow` varchar(20) NOT NULL,
  `command` text NOT NULL,
  `remark` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `buildin` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(20) NOT NULL,
  `lastTime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_cron`
--

LOCK TABLES `sys_cron` WRITE;
/*!40000 ALTER TABLE `sys_cron` DISABLE KEYS */;
INSERT INTO `sys_cron` VALUES (1,'*','*','*','*','*','','监控定时任务','ranzhi',1,'normal','2020-01-07 09:21:22'),(2,'1','1','*','*','*','appName=sys&moduleName=backup&methodName=backup&reload=0','定时备份任务','ranzhi',1,'normal','2019-12-27 16:56:35'),(3,'1','1','*','*','*','appName=sys&moduleName=backup&methodName=batchdelete&saveDays=30','删除30天前的备份','ranzhi',1,'normal','2019-12-27 16:56:35'),(4,'1','7','*','*','*','appName=sys&moduleName=report&methodName=remind','每日提醒','ranzhi',1,'normal','2019-12-27 16:56:35'),(5,'*/1','*','*','*','*','appName=sys&moduleName=queue&methodName=getqueue','出队列','ranzhi',0,'normal','2020-01-07 09:21:22'),(6,'*/10','*','*','*','*','appName=sys&moduleName=queue&methodName=additional','检查是否添加待办','ranzhi',0,'normal','2020-01-06 09:30:42');
/*!40000 ALTER TABLE `sys_cron` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_entry`
--

DROP TABLE IF EXISTS `sys_entry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_entry` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `abbr` char(6) NOT NULL,
  `code` varchar(20) NOT NULL,
  `buildin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `version` varchar(20) NOT NULL,
  `platform` varchar(255) NOT NULL DEFAULT 'ranzhi',
  `package` int(11) NOT NULL DEFAULT '0',
  `integration` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `open` varchar(20) NOT NULL,
  `key` char(32) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `login` varchar(255) NOT NULL,
  `logout` varchar(255) NOT NULL,
  `block` varchar(255) NOT NULL,
  `control` varchar(10) NOT NULL DEFAULT 'simple',
  `size` varchar(50) NOT NULL DEFAULT 'max',
  `position` varchar(10) NOT NULL DEFAULT 'default',
  `visible` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `order` tinyint(5) unsigned NOT NULL DEFAULT '0',
  `zentao` enum('0','1') NOT NULL DEFAULT '0',
  `category` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `status` enum('online','offline') NOT NULL DEFAULT 'online',
  `sso` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_entry`
--

LOCK TABLES `sys_entry` WRITE;
/*!40000 ALTER TABLE `sys_entry` DISABLE KEYS */;
INSERT INTO `sys_entry` VALUES (1,'客户管理','客户','crm',1,'','ranzhi',0,1,'iframe','epet8b8ae1g89rxzquf4ubv37ul5tite','*','theme/default/images/ips/app-crm.png','../crm','','','simple','max','default',1,10,'0',0,'online','0'),(2,'日常办公','办公','oa',1,'','ranzhi',0,1,'iframe','1a673c4c3c85fadcf0333e0a4596d220','*','theme/default/images/ips/app-oa.png','../oa','','','simple','max','default',1,20,'0',0,'online','0'),(3,'项目','项目','proj',1,'','ranzhi',0,1,'iframe','a910d9d1dd03c9dd99cecb3ca31ea600','*','theme/default/images/ips/app-proj.png','../proj','','','simple','max','default',1,30,'0',0,'online','0'),(4,'文档','文档','doc',1,'','ranzhi',0,1,'iframe','76ff605479df34f1d239730efa68d562','*','theme/default/images/ips/app-doc.png','../doc','','','simple','max','default',1,40,'0',0,'online','0'),(5,'现金记账','记账','cash',1,'','ranzhi',0,1,'iframe','438d85f2c2b04372662c63ebfb1c4c2f','*','theme/default/images/ips/app-cash.png','../cash','','','simple','max','default',1,50,'0',0,'online','0'),(6,'团队','团队','team',1,'','ranzhi',0,1,'iframe','6c46d9fe76a1afa1cd61f946f1072d1e','*','theme/default/images/ips/app-team.png','../team','','','simple','max','default',1,60,'0',0,'online','0'),(7,'sso','sso','sso',1,'1.0.0','xuanxuan',1,1,'iframe','7a171c33d02d172fc0f1cf4cb93edfd6','*','','http://xuan.im','','','none','max','default',0,0,'0',0,'online','1');
/*!40000 ALTER TABLE `sys_entry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_file`
--

DROP TABLE IF EXISTS `sys_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_file` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `pathname` char(100) NOT NULL,
  `title` char(90) NOT NULL,
  `extension` char(30) NOT NULL,
  `size` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `objectType` char(30) NOT NULL,
  `objectID` mediumint(8) unsigned NOT NULL,
  `createdBy` char(30) NOT NULL DEFAULT '',
  `createdDate` datetime NOT NULL,
  `editor` enum('1','0') NOT NULL DEFAULT '0',
  `primary` enum('1','0') DEFAULT '0',
  `public` enum('1','0') NOT NULL DEFAULT '1',
  `downloads` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `extra` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `object` (`objectType`,`objectID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_file`
--

LOCK TABLES `sys_file` WRITE;
/*!40000 ALTER TABLE `sys_file` DISABLE KEYS */;
INSERT INTO `sys_file` VALUES (1,'201810/f_8db2fa542a1e087d63d45d8bc1185361.zip','sso','zip',89674,'entry',7,'','2019-12-27 16:56:26','0','0','1',0,''),(2,'201912/f_833cc8c4673af0203622a7758f2cd44d.txt','ECap.exe','txt',585728,'doc',1,'puhongxing','2019-12-30 13:59:13','0','0','1',0,''),(3,'201912/f_631b7b0a02eb1837bbefd6872a957356.png','car','png',27602,'doc',1,'puhongxing','2019-12-30 13:59:13','0','0','1',0,'');
/*!40000 ALTER TABLE `sys_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_group`
--

DROP TABLE IF EXISTS `sys_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL,
  `desc` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_group`
--

LOCK TABLES `sys_group` WRITE;
/*!40000 ALTER TABLE `sys_group` DISABLE KEYS */;
INSERT INTO `sys_group` VALUES (1,'管理员','管理员拥有前台所有权限'),(18,'市场总监',''),(17,'副总经理',''),(16,'法律顾问',''),(5,'普通用户','默认的普通账号权限'),(6,'信息技术部',''),(7,'财务部',''),(8,'客服部',''),(9,'市场一部',''),(10,'市场二部',''),(11,'产品部',''),(15,'总经办主任',''),(13,'商务部',''),(14,'技术部',''),(19,'总裁',''),(20,'董事长','');
/*!40000 ALTER TABLE `sys_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_grouppriv`
--

DROP TABLE IF EXISTS `sys_grouppriv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_grouppriv` (
  `group` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `module` char(30) NOT NULL DEFAULT '',
  `method` char(30) NOT NULL DEFAULT '',
  UNIQUE KEY `group` (`group`,`module`,`method`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_grouppriv`
--

LOCK TABLES `sys_grouppriv` WRITE;
/*!40000 ALTER TABLE `sys_grouppriv` DISABLE KEYS */;
INSERT INTO `sys_grouppriv` VALUES (1,'action','deleteAllDating'),(1,'action','finishAllDating'),(1,'address','browse'),(1,'address','create'),(1,'address','delete'),(1,'address','edit'),(1,'announce','browse'),(1,'announce','create'),(1,'announce','delete'),(1,'announce','edit'),(1,'announce','view'),(1,'apppriv','cash'),(1,'apppriv','crm'),(1,'apppriv','doc'),(1,'apppriv','oa'),(1,'apppriv','proj'),(1,'apppriv','superadmin'),(1,'apppriv','team'),(1,'attend','batchReview'),(1,'attend','browseReview'),(1,'attend','company'),(1,'attend','department'),(1,'attend','detail'),(1,'attend','export'),(1,'attend','exportDetail'),(1,'attend','exportStat'),(1,'attend','personalSettings'),(1,'attend','review'),(1,'attend','saveStat'),(1,'attend','setManager'),(1,'attend','settings'),(1,'attend','stat'),(1,'balance','browse'),(1,'balance','create'),(1,'balance','delete'),(1,'balance','edit'),(1,'blog','create'),(1,'blog','delete'),(1,'blog','edit'),(1,'blog','index'),(1,'blog','view'),(1,'company','index'),(1,'contact','browse'),(1,'contact','create'),(1,'contact','delete'),(1,'contact','edit'),(1,'contact','export'),(1,'contact','exportTemplate'),(1,'contact','import'),(1,'contact','showImport'),(1,'contact','vcard'),(1,'contact','view'),(1,'contract','browse'),(1,'contract','cancel'),(1,'contract','confirmTeam'),(1,'contract','create'),(1,'contract','delete'),(1,'contract','deleteDelivery'),(1,'contract','deleteReturn'),(1,'contract','delivery'),(1,'contract','edit'),(1,'contract','editDelivery'),(1,'contract','editReturn'),(1,'contract','export'),(1,'contract','finish'),(1,'contract','manageTeam'),(1,'contract','receive'),(1,'contract','view'),(1,'crm','manageAll'),(1,'cron','create'),(1,'cron','delete'),(1,'cron','edit'),(1,'cron','index'),(1,'cron','toggle'),(1,'cron','turnon'),(1,'customer','assign'),(1,'customer','batchAssign'),(1,'customer','browse'),(1,'customer','contact'),(1,'customer','contract'),(1,'customer','create'),(1,'customer','delete'),(1,'customer','edit'),(1,'customer','export'),(1,'customer','linkContact'),(1,'customer','merge'),(1,'customer','order'),(1,'customer','view'),(1,'depositor','activate'),(1,'depositor','browse'),(1,'depositor','check'),(1,'depositor','create'),(1,'depositor','delete'),(1,'depositor','edit'),(1,'depositor','export'),(1,'depositor','forbid'),(1,'depositor','savebalance'),(1,'doc','allLibs'),(1,'doc','browse'),(1,'doc','create'),(1,'doc','createLib'),(1,'doc','delete'),(1,'doc','deleteLib'),(1,'doc','edit'),(1,'doc','editLib'),(1,'doc','index'),(1,'doc','projectLibs'),(1,'doc','showFiles'),(1,'doc','sort'),(1,'doc','view'),(1,'egress','company'),(1,'egress','department'),(1,'file','delete'),(1,'file','download'),(1,'file','edit'),(1,'file','upload'),(1,'forum','admin'),(1,'forum','board'),(1,'forum','index'),(1,'forum','update'),(1,'holiday','create'),(1,'holiday','delete'),(1,'holiday','edit'),(1,'leads','apply'),(1,'leads','assign'),(1,'leads','assignToNull'),(1,'leads','browse'),(1,'leads','create'),(1,'leads','delete'),(1,'leads','edit'),(1,'leads','ignore'),(1,'leads','setting'),(1,'leads','transform'),(1,'leads','view'),(1,'leave','batchReview'),(1,'leave','browseReview'),(1,'leave','company'),(1,'leave','export'),(1,'leave','personalAnnual'),(1,'leave','review'),(1,'leave','setReviewer'),(1,'lieu','batchReview'),(1,'lieu','browseReview'),(1,'lieu','company'),(1,'lieu','review'),(1,'lieu','setReviewer'),(1,'makeup','batchReview'),(1,'makeup','browseReview'),(1,'makeup','company'),(1,'makeup','export'),(1,'makeup','review'),(1,'makeup','setReviewer'),(1,'my','company'),(1,'order','activate'),(1,'order','assign'),(1,'order','browse'),(1,'order','close'),(1,'order','contact'),(1,'order','create'),(1,'order','delete'),(1,'order','edit'),(1,'order','export'),(1,'order','view'),(1,'overtime','batchReview'),(1,'overtime','browseReview'),(1,'overtime','company'),(1,'overtime','export'),(1,'overtime','review'),(1,'overtime','setReviewer'),(1,'product','browse'),(1,'product','create'),(1,'product','delete'),(1,'product','edit'),(1,'product','view'),(1,'provider','browse'),(1,'provider','contact'),(1,'provider','create'),(1,'provider','delete'),(1,'provider','edit'),(1,'provider','linkContact'),(1,'provider','view'),(1,'refund','browseReview'),(1,'refund','company'),(1,'refund','export'),(1,'refund','reimburse'),(1,'refund','review'),(1,'refund','setCategory'),(1,'refund','setDepositor'),(1,'refund','setRefundBy'),(1,'refund','setReviewer'),(1,'refund','todo'),(1,'report','browse'),(1,'resume','browse'),(1,'resume','create'),(1,'resume','delete'),(1,'resume','edit'),(1,'resume','leave'),(1,'sales','admin'),(1,'sales','browse'),(1,'sales','create'),(1,'sales','delete'),(1,'sales','edit'),(1,'schema','browse'),(1,'schema','create'),(1,'schema','delete'),(1,'schema','edit'),(1,'schema','view'),(1,'setting','customerPool'),(1,'setting','lang'),(1,'setting','modules'),(1,'setting','reset'),(1,'task','deleteAll'),(1,'task','editAll'),(1,'task','viewAll'),(1,'thread','delete'),(1,'thread','deleteFile'),(1,'thread','edit'),(1,'thread','post'),(1,'thread','stick'),(1,'thread','switchStatus'),(1,'thread','transfer'),(1,'thread','view'),(1,'trade','batchCreate'),(1,'trade','batchEdit'),(1,'trade','browse'),(1,'trade','compare'),(1,'trade','create'),(1,'trade','delete'),(1,'trade','detail'),(1,'trade','edit'),(1,'trade','export'),(1,'trade','export2Excel'),(1,'trade','import'),(1,'trade','invest'),(1,'trade','loan'),(1,'trade','report'),(1,'trade','setReportUnit'),(1,'trade','showImport'),(1,'trade','tradeSetting'),(1,'trade','transfer'),(1,'trade','view'),(1,'tree','browse'),(1,'tree','children'),(1,'tree','delete'),(1,'tree','edit'),(1,'tree','merge'),(1,'trip','company'),(1,'trip','department'),(1,'user','active'),(1,'user','admin'),(1,'user','colleague'),(1,'user','create'),(1,'user','delete'),(1,'user','edit'),(1,'user','forbid'),(5,'announce','browse'),(5,'announce','create'),(5,'announce','edit'),(5,'announce','view'),(5,'apppriv','doc'),(5,'apppriv','oa'),(5,'apppriv','proj'),(5,'blog','create'),(5,'blog','edit'),(5,'blog','index'),(5,'blog','view'),(5,'company','index'),(5,'doc','allLibs'),(5,'doc','browse'),(5,'doc','create'),(5,'doc','createLib'),(5,'doc','edit'),(5,'doc','editLib'),(5,'doc','index'),(5,'doc','projectLibs'),(5,'doc','showFiles'),(5,'doc','sort'),(5,'doc','view'),(5,'file','delete'),(5,'file','download'),(5,'file','edit'),(5,'file','upload'),(5,'forum','admin'),(5,'forum','board'),(5,'forum','index'),(5,'thread','edit'),(5,'thread','post'),(5,'thread','stick'),(5,'thread','switchStatus'),(5,'thread','transfer'),(5,'thread','view'),(5,'user','colleague'),(6,'announce','browse'),(6,'announce','create'),(6,'announce','delete'),(6,'announce','edit'),(6,'announce','view'),(6,'apppriv','doc'),(6,'apppriv','oa'),(6,'apppriv','proj'),(6,'doc','browse'),(6,'doc','create'),(6,'doc','createLib'),(6,'doc','index'),(6,'file','download'),(6,'file','upload'),(6,'my','company'),(7,'announce','browse'),(7,'announce','view'),(7,'apppriv','cash'),(7,'apppriv','doc'),(7,'apppriv','oa'),(7,'apppriv','proj'),(7,'balance','browse'),(7,'balance','create'),(7,'balance','delete'),(7,'balance','edit'),(7,'depositor','activate'),(7,'depositor','browse'),(7,'depositor','check'),(7,'depositor','create'),(7,'depositor','delete'),(7,'depositor','edit'),(7,'depositor','export'),(7,'depositor','forbid'),(7,'depositor','savebalance'),(7,'doc','create'),(7,'doc','createLib'),(7,'doc','index'),(7,'file','download'),(7,'file','upload'),(7,'holiday','create'),(7,'holiday','delete'),(7,'holiday','edit'),(7,'my','company'),(7,'provider','browse'),(7,'provider','contact'),(7,'provider','create'),(7,'provider','edit'),(7,'provider','linkContact'),(7,'provider','view'),(7,'refund','browseReview'),(7,'refund','company'),(7,'refund','export'),(7,'refund','reimburse'),(7,'refund','review'),(7,'refund','setCategory'),(7,'refund','setDepositor'),(7,'refund','setRefundBy'),(7,'refund','setReviewer'),(7,'refund','todo'),(7,'report','browse'),(7,'schema','browse'),(7,'schema','create'),(7,'schema','edit'),(7,'schema','view'),(7,'setting','lang'),(7,'setting','reset'),(7,'trade','batchCreate'),(7,'trade','batchEdit'),(7,'trade','browse'),(7,'trade','compare'),(7,'trade','create'),(7,'trade','delete'),(7,'trade','detail'),(7,'trade','edit'),(7,'trade','export'),(7,'trade','export2Excel'),(7,'trade','import'),(7,'trade','invest'),(7,'trade','loan'),(7,'trade','report'),(7,'trade','showImport'),(7,'trade','transfer'),(7,'trade','view'),(8,'announce','browse'),(8,'announce','create'),(8,'announce','view'),(8,'apppriv','doc'),(8,'apppriv','oa'),(8,'apppriv','proj'),(8,'doc','allLibs'),(8,'doc','browse'),(8,'doc','create'),(8,'doc','createLib'),(8,'doc','index'),(8,'doc','projectLibs'),(8,'doc','showFiles'),(8,'doc','sort'),(8,'doc','view'),(8,'file','download'),(8,'file','upload'),(8,'my','company'),(8,'report','browse'),(9,'announce','browse'),(9,'announce','create'),(9,'announce','view'),(9,'apppriv','doc'),(9,'apppriv','oa'),(9,'apppriv','proj'),(9,'doc','create'),(9,'doc','createLib'),(9,'egress','department'),(9,'file','download'),(9,'file','upload'),(9,'my','company'),(9,'trip','department'),(10,'announce','browse'),(10,'announce','create'),(10,'announce','view'),(10,'apppriv','doc'),(10,'apppriv','oa'),(10,'apppriv','proj'),(10,'doc','create'),(10,'doc','createLib'),(10,'file','download'),(10,'file','upload'),(10,'my','company'),(11,'announce','browse'),(11,'announce','create'),(11,'announce','delete'),(11,'announce','edit'),(11,'announce','view'),(11,'apppriv','doc'),(11,'apppriv','oa'),(11,'apppriv','proj'),(11,'doc','browse'),(11,'doc','create'),(11,'doc','createLib'),(11,'doc','delete'),(11,'doc','deleteLib'),(11,'doc','edit'),(11,'doc','editLib'),(11,'doc','index'),(11,'doc','projectLibs'),(11,'doc','sort'),(11,'doc','view'),(11,'file','download'),(11,'file','upload'),(11,'my','company'),(13,'announce','browse'),(13,'announce','create'),(13,'announce','view'),(13,'apppriv','doc'),(13,'apppriv','oa'),(13,'apppriv','proj'),(13,'doc','create'),(13,'doc','createLib'),(13,'file','download'),(13,'file','upload'),(13,'my','company'),(14,'announce','browse'),(14,'announce','create'),(14,'announce','view'),(14,'apppriv','doc'),(14,'apppriv','oa'),(14,'apppriv','proj'),(14,'doc','create'),(14,'doc','createLib'),(14,'doc','index'),(14,'file','download'),(14,'file','upload'),(15,'action','deleteAllDating'),(15,'action','finishAllDating'),(15,'address','browse'),(15,'address','create'),(15,'address','delete'),(15,'address','edit'),(15,'apppriv','crm'),(15,'apppriv','doc'),(15,'apppriv','proj'),(15,'apppriv','superadmin'),(15,'apppriv','team'),(15,'company','index'),(15,'contact','browse'),(15,'contact','create'),(15,'contact','delete'),(15,'contact','edit'),(15,'contact','export'),(15,'contact','exportTemplate'),(15,'contact','import'),(15,'contact','showImport'),(15,'contact','vcard'),(15,'contact','view'),(15,'contract','browse'),(15,'contract','cancel'),(15,'contract','confirmTeam'),(15,'contract','create'),(15,'contract','delete'),(15,'contract','deleteDelivery'),(15,'contract','deleteReturn'),(15,'contract','delivery'),(15,'contract','edit'),(15,'contract','editDelivery'),(15,'contract','editReturn'),(15,'contract','export'),(15,'contract','finish'),(15,'contract','manageTeam'),(15,'contract','receive'),(15,'contract','view'),(15,'cron','create'),(15,'cron','delete'),(15,'cron','edit'),(15,'cron','index'),(15,'cron','toggle'),(15,'cron','turnon'),(15,'customer','assign'),(15,'customer','batchAssign'),(15,'customer','browse'),(15,'customer','contact'),(15,'customer','contract'),(15,'customer','create'),(15,'customer','delete'),(15,'customer','edit'),(15,'customer','export'),(15,'customer','linkContact'),(15,'customer','merge'),(15,'customer','order'),(15,'customer','view'),(15,'doc','allLibs'),(15,'doc','browse'),(15,'doc','create'),(15,'doc','createLib'),(15,'doc','delete'),(15,'doc','deleteLib'),(15,'doc','edit'),(15,'doc','editLib'),(15,'doc','index'),(15,'doc','projectLibs'),(15,'doc','showFiles'),(15,'doc','sort'),(15,'doc','view'),(15,'file','delete'),(15,'file','download'),(15,'file','edit'),(15,'file','upload'),(15,'forum','board'),(15,'forum','index'),(15,'leads','apply'),(15,'leads','assign'),(15,'leads','assignedToNull'),(15,'leads','browse'),(15,'leads','create'),(15,'leads','delete'),(15,'leads','edit'),(15,'leads','ignore'),(15,'leads','setting'),(15,'leads','transform'),(15,'leads','view'),(15,'my','company'),(15,'order','activate'),(15,'order','assign'),(15,'order','browse'),(15,'order','close'),(15,'order','contact'),(15,'order','create'),(15,'order','delete'),(15,'order','edit'),(15,'order','export'),(15,'order','view'),(15,'product','browse'),(15,'product','create'),(15,'product','delete'),(15,'product','edit'),(15,'product','view'),(15,'provider','browse'),(15,'provider','contact'),(15,'provider','create'),(15,'provider','delete'),(15,'provider','edit'),(15,'provider','linkContact'),(15,'provider','view'),(15,'report','browse'),(15,'resume','browse'),(15,'resume','create'),(15,'resume','delete'),(15,'resume','edit'),(15,'resume','leave'),(15,'sales','admin'),(15,'sales','browse'),(15,'sales','create'),(15,'sales','delete'),(15,'sales','edit'),(15,'setting','customerPool'),(15,'setting','lang'),(15,'setting','modules'),(15,'setting','reset'),(15,'task','deleteAll'),(15,'task','editAll'),(15,'task','viewAll'),(15,'thread','delete'),(15,'thread','deleteFile'),(15,'thread','edit'),(15,'thread','post'),(15,'thread','stick'),(15,'thread','view'),(15,'tree','browse'),(15,'tree','children'),(15,'tree','delete'),(15,'tree','edit'),(15,'tree','merge'),(15,'user','active'),(15,'user','admin'),(15,'user','colleague'),(15,'user','create'),(15,'user','delete'),(15,'user','edit'),(15,'user','forbid');
/*!40000 ALTER TABLE `sys_grouppriv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_history`
--

DROP TABLE IF EXISTS `sys_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_history` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `action` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `field` varchar(30) NOT NULL DEFAULT '',
  `old` text NOT NULL,
  `new` text NOT NULL,
  `diff` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `action` (`action`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_history`
--

LOCK TABLES `sys_history` WRITE;
/*!40000 ALTER TABLE `sys_history` DISABLE KEYS */;
INSERT INTO `sys_history` VALUES (1,76,'assignedTo','owen','puhongxing',''),(2,76,'date','20191231','2019-12-31',''),(3,76,'assignedBy','fdq','owen',''),(4,77,'assignedTo','jdf168','fdq',''),(5,77,'date','20191230','2019-12-30','');
/*!40000 ALTER TABLE `sys_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_lang`
--

DROP TABLE IF EXISTS `sys_lang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_lang` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `lang` varchar(30) NOT NULL,
  `app` varchar(30) NOT NULL DEFAULT 'sys',
  `module` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL,
  `key` varchar(60) NOT NULL,
  `value` text NOT NULL,
  `system` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `lang` (`app`,`lang`,`module`,`section`,`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_lang`
--

LOCK TABLES `sys_lang` WRITE;
/*!40000 ALTER TABLE `sys_lang` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_lang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_message`
--

DROP TABLE IF EXISTS `sys_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_message` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` char(20) NOT NULL,
  `objectType` varchar(30) NOT NULL DEFAULT '',
  `objectID` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `account` char(30) DEFAULT NULL,
  `from` char(30) NOT NULL,
  `to` char(30) NOT NULL,
  `date` datetime NOT NULL,
  `content` text NOT NULL,
  `status` char(20) NOT NULL,
  `readed` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `object` (`objectType`,`objectID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_message`
--

LOCK TABLES `sys_message` WRITE;
/*!40000 ALTER TABLE `sys_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_package`
--

DROP TABLE IF EXISTS `sys_package`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_package` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `code` varchar(30) NOT NULL,
  `version` varchar(50) NOT NULL,
  `author` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `license` text NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'extension',
  `site` varchar(150) NOT NULL,
  `ranzhiCompatible` varchar(100) NOT NULL,
  `installedTime` datetime NOT NULL,
  `depends` varchar(100) NOT NULL,
  `dirs` text NOT NULL,
  `files` text NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `name` (`name`),
  KEY `addedTime` (`installedTime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_package`
--

LOCK TABLES `sys_package` WRITE;
/*!40000 ALTER TABLE `sys_package` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_package` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_product`
--

DROP TABLE IF EXISTS `sys_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_product` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `category` mediumint(8) unsigned NOT NULL,
  `subject` mediumint(8) unsigned NOT NULL,
  `name` varchar(150) NOT NULL,
  `code` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `order` smallint(5) NOT NULL,
  `status` varchar(10) NOT NULL,
  `desc` text NOT NULL,
  `createdBy` varchar(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedBy` varchar(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `type` (`type`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_product`
--

LOCK TABLES `sys_product` WRITE;
/*!40000 ALTER TABLE `sys_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_queue`
--

DROP TABLE IF EXISTS `sys_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_queue` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `objectID` mediumint(8) unsigned NOT NULL,
  `action` mediumint(9) NOT NULL,
  `toList` varchar(255) NOT NULL,
  `ccList` text NOT NULL,
  `subject` varchar(255) DEFAULT '',
  `data` text,
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `sendTime` datetime NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'wait',
  `failReason` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_queue`
--

LOCK TABLES `sys_queue` WRITE;
/*!40000 ALTER TABLE `sys_queue` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_queue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_relation`
--

DROP TABLE IF EXISTS `sys_relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_relation` (
  `type` char(20) NOT NULL,
  `id` mediumint(8) NOT NULL,
  `category` mediumint(8) NOT NULL,
  UNIQUE KEY `relation` (`type`,`id`,`category`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_relation`
--

LOCK TABLES `sys_relation` WRITE;
/*!40000 ALTER TABLE `sys_relation` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_schema`
--

DROP TABLE IF EXISTS `sys_schema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_schema` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category` char(10) NOT NULL,
  `trader` char(10) NOT NULL,
  `type` char(10) NOT NULL,
  `money` char(10) NOT NULL,
  `desc` char(10) NOT NULL,
  `date` char(10) NOT NULL,
  `fee` char(10) NOT NULL,
  `dept` char(10) NOT NULL,
  `product` char(10) NOT NULL,
  `handlers` char(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_schema`
--

LOCK TABLES `sys_schema` WRITE;
/*!40000 ALTER TABLE `sys_schema` DISABLE KEYS */;
INSERT INTO `sys_schema` VALUES (1,'支付宝','','H','K','J','I,O','D','M','','',''),(2,'中信银行简版','','C','','E,D','G,H','A','','','','');
/*!40000 ALTER TABLE `sys_schema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sso`
--

DROP TABLE IF EXISTS `sys_sso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sso` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `sid` char(32) NOT NULL,
  `entry` mediumint(8) unsigned NOT NULL,
  `token` char(32) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sid` (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sso`
--

LOCK TABLES `sys_sso` WRITE;
/*!40000 ALTER TABLE `sys_sso` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_tag`
--

DROP TABLE IF EXISTS `sys_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_tag` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(50) NOT NULL,
  `rank` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tag` (`tag`),
  KEY `rank` (`rank`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_tag`
--

LOCK TABLES `sys_tag` WRITE;
/*!40000 ALTER TABLE `sys_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_task`
--

DROP TABLE IF EXISTS `sys_task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_task` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `project` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `customer` mediumint(8) unsigned NOT NULL,
  `order` mediumint(8) unsigned NOT NULL,
  `category` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `pri` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `estimate` decimal(12,1) unsigned NOT NULL,
  `consumed` decimal(12,1) unsigned NOT NULL,
  `left` decimal(12,1) unsigned NOT NULL,
  `deadline` date NOT NULL,
  `status` enum('wait','doing','done','cancel','closed') NOT NULL DEFAULT 'wait',
  `statusCustom` tinyint(3) unsigned NOT NULL,
  `mailto` varchar(255) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `createdBy` varchar(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `assignedTo` varchar(30) NOT NULL,
  `assignedDate` datetime NOT NULL,
  `estStarted` date NOT NULL,
  `realStarted` date NOT NULL,
  `finishedBy` varchar(30) NOT NULL,
  `finishedDate` datetime NOT NULL,
  `canceledBy` varchar(30) NOT NULL,
  `canceledDate` datetime NOT NULL,
  `closedBy` varchar(30) NOT NULL,
  `closedDate` datetime NOT NULL,
  `closedReason` varchar(30) NOT NULL,
  `editedBy` varchar(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `key` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `statusOrder` (`statusCustom`),
  KEY `assignedTo` (`assignedTo`),
  KEY `createdBy` (`createdBy`),
  KEY `finishedBy` (`finishedBy`),
  KEY `closedBy` (`closedBy`),
  KEY `closedReason` (`closedReason`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_task`
--

LOCK TABLES `sys_task` WRITE;
/*!40000 ALTER TABLE `sys_task` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_team`
--

DROP TABLE IF EXISTS `sys_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_team` (
  `type` char(30) NOT NULL,
  `id` mediumint(8) NOT NULL DEFAULT '0',
  `account` char(30) NOT NULL DEFAULT '',
  `role` char(30) NOT NULL DEFAULT '',
  `join` date NOT NULL DEFAULT '0000-00-00',
  `days` smallint(5) unsigned NOT NULL,
  `hours` float unsigned NOT NULL,
  `estimate` decimal(12,1) unsigned NOT NULL,
  `consumed` decimal(12,1) unsigned NOT NULL,
  `left` decimal(12,1) unsigned NOT NULL,
  `order` tinyint(3) unsigned NOT NULL,
  `contribution` decimal(6,2) unsigned NOT NULL,
  `status` enum('wait','accept','reject') NOT NULL DEFAULT 'wait',
  PRIMARY KEY (`type`,`id`,`account`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_team`
--

LOCK TABLES `sys_team` WRITE;
/*!40000 ALTER TABLE `sys_team` DISABLE KEYS */;
INSERT INTO `sys_team` VALUES ('project',1,'puhongxing','manager','2019-12-30',0,0,0.0,0.0,0.0,0,0.00,'wait');
/*!40000 ALTER TABLE `sys_team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_user`
--

DROP TABLE IF EXISTS `sys_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_user` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `dept` mediumint(8) unsigned NOT NULL,
  `account` char(30) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `realname` char(30) NOT NULL DEFAULT '',
  `role` char(30) NOT NULL,
  `nickname` char(60) NOT NULL DEFAULT '',
  `admin` enum('no','common','super') NOT NULL DEFAULT 'no',
  `avatar` varchar(255) NOT NULL DEFAULT '',
  `birthday` date NOT NULL,
  `gender` enum('f','m','u') NOT NULL DEFAULT 'u',
  `email` char(90) NOT NULL DEFAULT '',
  `skype` char(90) NOT NULL,
  `qq` char(20) NOT NULL DEFAULT '',
  `weixin` char(50) NOT NULL,
  `yahoo` char(90) NOT NULL DEFAULT '',
  `gtalk` char(90) NOT NULL DEFAULT '',
  `wangwang` char(90) NOT NULL DEFAULT '',
  `site` varchar(100) NOT NULL,
  `mobile` char(11) NOT NULL DEFAULT '',
  `phone` char(20) NOT NULL DEFAULT '',
  `address` char(120) NOT NULL DEFAULT '',
  `zipcode` char(10) NOT NULL DEFAULT '',
  `visits` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(50) NOT NULL DEFAULT '',
  `last` datetime NOT NULL,
  `ping` datetime NOT NULL,
  `fails` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `join` datetime NOT NULL,
  `locked` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL,
  `clientStatus` enum('online','away','busy','offline') NOT NULL DEFAULT 'offline',
  `clientLang` varchar(10) NOT NULL DEFAULT 'zh-cn',
  PRIMARY KEY (`id`),
  UNIQUE KEY `account` (`account`),
  KEY `admin` (`admin`),
  KEY `accountPassword` (`account`,`password`),
  KEY `dept` (`dept`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_user`
--

LOCK TABLES `sys_user` WRITE;
/*!40000 ALTER TABLE `sys_user` DISABLE KEYS */;
INSERT INTO `sys_user` VALUES (1,9,'jdf168','0d78a143520572e1ceeb3ffeff8e2204','杨见文','support','','super','','0000-00-00','m','1222@qq.com','','','','','','','','','','','',25,'113.97.58.26','2020-01-07 09:20:22','2020-01-07 09:41:23',0,'2019-12-27 16:56:26','0000-00-00 00:00:00','0','offline','zh-cn'),(2,9,'owen','802911e1c1ec365d8922f12fe0f17095','杨见文','supportmgr','','no','','0000-00-00','m','jfowen1288@qq.com','','','','','','','','','','','',4,'113.97.56.23','2019-12-30 11:26:14','2019-12-30 11:26:15',0,'2019-12-27 17:04:18','0000-00-00 00:00:00','1','offline','zh-cn'),(3,10,'caiwu1','c73ec415609e195a89961671b653743a','caiwu1','','','no','','0000-00-00','m','2@q.com','','','','','','','','','','','',2,'113.97.56.23','2019-12-30 10:26:36','2019-12-30 10:26:37',0,'2019-12-30 10:22:28','0000-00-00 00:00:00','1','offline','zh-cn'),(4,11,'puhongxing','6563552d0b5d4de9a5f52291e04e1dc0','卜红星','service','','no','','0000-00-00','m','1@q.com','','','','','','','','','','','',7,'113.97.58.26','2020-01-06 09:29:42','2020-01-06 09:29:42',0,'2019-12-30 10:41:58','0000-00-00 00:00:00','0','offline','zh-cn'),(5,12,'panguocheng','e34090d106d5590cd428df5eeae20ccb','潘国成','salemgr','','no','','0000-00-00','m','2@qq.com','','','','','','','','','','','',2,'113.97.56.23','2019-12-30 11:01:29','2019-12-30 11:01:29',0,'2019-12-30 10:59:32','0000-00-00 00:00:00','0','offline','zh-cn'),(6,13,'fdq','f054aeb411ef797758efab26b8d95759','冯鼎钦','others','','no','','0000-00-00','u','132@qq.com','','','','','','','','','','','',3,'113.97.56.23','2019-12-30 11:18:31','2019-12-30 11:18:32',0,'2019-12-30 11:04:14','0000-00-00 00:00:00','1','offline','zh-cn'),(7,14,'wxx','1b7e86902f0008dc4c14d934b6f81f25','温欣欣','','','no','','0000-00-00','m','1234@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:05:11','0000-00-00 00:00:00','1','offline','zh-cn'),(8,10,'xhj','8f5af0bab17b93aca376655d6aee99e4','夏红娟','others','','no','','0000-00-00','f','123456@qq.com','','','','','','','','','','','',3,'113.97.56.23','2019-12-30 11:14:12','2019-12-30 11:14:12',0,'2019-12-30 11:05:56','0000-00-00 00:00:00','1','offline','zh-cn'),(9,15,'wcp','befb4f77f6e565d44f6012d880fb9ae3','王春萍','others','','no','','0000-00-00','f','12344@q.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:06:53','0000-00-00 00:00:00','1','offline','zh-cn'),(10,16,'lihong','3f81f928f37ee058489fea3a16f3bf56','黎虹','others','','no','','0000-00-00','f','111@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:07:27','0000-00-00 00:00:00','0','offline','zh-cn'),(11,16,'master','d853c50e962acb59a6fc514057af077f','杨见文','others','','no','','0000-00-00','m','359364121@qq.com','','','','','','','','','','','',1,'113.97.56.23','2019-12-30 11:30:37','2019-12-30 11:32:38',0,'2019-12-30 11:28:29','0000-00-00 00:00:00','1','offline','zh-cn'),(12,11,'lifei','fbd59523c70ecd2797322a189280cce1','李飞','service','','no','','0000-00-00','u','lf@qq.com','','','','','','','','','','','',1,'113.97.56.23','2019-12-30 14:02:08','2019-12-30 14:02:08',0,'2019-12-30 11:38:48','0000-00-00 00:00:00','0','offline','zh-cn'),(13,11,'linmingyang','33c289bc8caee608b71d12a769b3ffdc','林明养','service','','no','','0000-00-00','u','linmingyang@11.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:39:34','0000-00-00 00:00:00','0','offline','zh-cn'),(14,11,'chenzhaolian','ec002b3ae634ae672c2aca010a98f9ef','程招炼','service','','no','','0000-00-00','u','11@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:40:23','0000-00-00 00:00:00','0','offline','zh-cn'),(15,11,'suweinan','fe7aaedcad95a22274ad8abb7cda6402','苏伟南','service','','no','','0000-00-00','u','112@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:40:57','0000-00-00 00:00:00','0','offline','zh-cn'),(16,13,'sunhonghua','dcfd989954e90a9eeee3796e8769fae2','孙鸿华','market','','no','','0000-00-00','m','sunhonghua@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:41:32','0000-00-00 00:00:00','0','offline','zh-cn'),(17,14,'wuhuanhuan','660711d316cdbeef128ee49ecb9e400e','吴欢欢','dev','','no','','0000-00-00','f','wuhuanhuan@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:42:20','0000-00-00 00:00:00','0','offline','zh-cn'),(18,10,'yeyingfang','8062b231f8379802a6234bfdd36e23cd','叶纺英','others','','no','','0000-00-00','f','yeyingfang@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:43:10','0000-00-00 00:00:00','0','offline','zh-cn'),(19,10,'yanghuan','848faa0ccdfd3cc7c2c210bbd5dadeb9','杨欢','others','','no','','0000-00-00','m','yanghuan@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:43:54','0000-00-00 00:00:00','0','offline','zh-cn'),(20,10,'xieliping','fd8ed880f9d17745ef0ed60543bc8333','谢丽萍','others','','no','','0000-00-00','f','xieliping@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:44:38','0000-00-00 00:00:00','0','offline','zh-cn'),(21,10,'liujing','70b3e64719247640eb5ab1b3235d57df','刘静','others','','no','','0000-00-00','f','liujing@qq.com','','','','','','','','','','','',2,'113.97.58.26','2020-01-06 09:23:15','2020-01-06 09:29:15',0,'2019-12-30 11:45:09','0000-00-00 00:00:00','0','offline','zh-cn'),(22,15,'wangchunping','1856a3a18511628a2a5c016bfe206ed1','王春萍','others','','no','','0000-00-00','f','wangchunping@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:45:47','0000-00-00 00:00:00','0','offline','zh-cn'),(23,15,'pengxiaoqian','4ecd4bae7c74d5a0417428c9883d45b5','彭筱茜','others','','no','','0000-00-00','f','pengxiaoqian@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:46:36','0000-00-00 00:00:00','0','offline','zh-cn'),(24,15,'liuyong','bfa54e157249b16f6f99f5854065f13c','刘勇','others','','no','','0000-00-00','m','liuyong@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:47:07','0000-00-00 00:00:00','0','offline','zh-cn'),(25,15,'xiaokexi','1ac24842a6b016de4f9f6730205ef767','肖克袭','others','','no','','0000-00-00','m','xiaokexi@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:47:39','0000-00-00 00:00:00','0','offline','zh-cn'),(26,15,'liufenglin','a20349a94b9b77d29fecbb3bfc4c0569','刘峰林','others','','no','','0000-00-00','m','liufenglin@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:48:10','0000-00-00 00:00:00','0','offline','zh-cn'),(27,15,'wangqing','92d0208e14813dba74d4fb385b1e895b','王晴','others','','no','','0000-00-00','f','wangqing@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:48:35','0000-00-00 00:00:00','0','offline','zh-cn'),(28,16,'yangdandan','21d608736366d710256fe8e30327e8a1','杨丹丹','support','','no','','0000-00-00','f','yangdandan@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:49:09','0000-00-00 00:00:00','0','offline','zh-cn'),(29,16,'wudengke','524554395cc7d69210ead297a3808ce7','伍登科','support','','no','','0000-00-00','m','wudengke@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:49:36','0000-00-00 00:00:00','0','offline','zh-cn'),(30,16,'qinmengli','20f39c66fc0678824e81d47bd2d4cf15','覃蒙莉','support','','no','','0000-00-00','f','qinmengli@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:50:27','0000-00-00 00:00:00','0','offline','zh-cn'),(31,16,'zhongcailing','06673174a3ae0971bcf02e3f3c9123d4','钟彩玲','support','','no','','0000-00-00','f','zhongcailing@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:50:54','0000-00-00 00:00:00','0','offline','zh-cn'),(32,16,'huangjinyan','a5534fd390672a03d3174391ede56bf5','黄金艳','support','','no','','0000-00-00','f','huangjinyan@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:51:21','0000-00-00 00:00:00','0','offline','zh-cn'),(33,16,'yanjiali','63c4ae0d362899c137c6dc998180bd55','严家丽','support','','no','','0000-00-00','f','yanjiali@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:51:47','0000-00-00 00:00:00','0','offline','zh-cn'),(34,16,'luqizhong','bd22300efb394ca2f5f80f8cb9680828','卢麒钟','support','','no','','0000-00-00','m','luqizhong@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:52:16','0000-00-00 00:00:00','0','offline','zh-cn'),(35,16,'chencuifang','118a8e77c5d9dc8253097771d65d95f5','陈翠芳','support','','no','','0000-00-00','f','chencuifang@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:52:41','0000-00-00 00:00:00','0','offline','zh-cn'),(36,16,'chenshuling','276fcc4bdf922c1005e18cc8df11b457','陈淑琳','support','','no','','0000-00-00','f','chenshuling@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 11:53:06','0000-00-00 00:00:00','0','offline','zh-cn'),(37,9,'lijie','d719ba335f186b8fb03356b388cb1a75','李杰','support','','no','','0000-00-00','m','lijie@qq.com','','','','','','','','','','','',2,'113.97.56.23','2019-12-30 14:00:36','2019-12-30 14:01:39',0,'2019-12-30 11:53:31','0000-00-00 00:00:00','0','offline','zh-cn'),(38,10,'xiahongjuan','6a720982b554f0580b03977b6572c963','夏红娟','others','','no','','0000-00-00','f','xiahongjuan@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 13:42:15','0000-00-00 00:00:00','0','offline','zh-cn'),(39,14,'wenxinxin','80990a78a821a8fbf1df70f07df85183','温欣欣','others','','no','','0000-00-00','m','wenxinxin@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 13:46:05','0000-00-00 00:00:00','0','offline','zh-cn'),(40,16,'yangjianwne','3113245abb83d24c4f8be443da88f503','杨见文','support','','no','','0000-00-00','m','1@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 13:48:28','0000-00-00 00:00:00','1','offline','zh-cn'),(41,22,'wanghequn','94a832c7d6756d384a514b253013ae80','王赫群','top','','no','','0000-00-00','m','alex.wang@virion-serion.net','','','13537778661','','','','','13537778661','','123','',1,'113.97.56.23','2019-12-30 14:55:52','2019-12-30 15:01:52',0,'2019-12-30 14:48:12','0000-00-00 00:00:00','0','offline','zh-cn'),(42,23,'zhujiang','16be2928ed19be8fe69bf43bcdfcdbba','朱江','others','','no','','0000-00-00','m','zhujiang@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 15:12:35','0000-00-00 00:00:00','0','offline','zh-cn'),(43,21,'weijianheng','00d1e8e394ac01d7f236a11305ecf89f','韦建恒','top','','no','','0000-00-00','m','weijianheng@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 15:13:43','0000-00-00 00:00:00','0','offline','zh-cn'),(44,20,'zhufeng','6ebe2bb52eadc75b6c1f08b41c832f74','朱峰','top','','no','','0000-00-00','m','zhufeng@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 15:14:13','0000-00-00 00:00:00','0','offline','zh-cn'),(45,20,'huangjiping','79b3510bae877e424521f2c3aa2074ce','黄吉萍','top','','no','','0000-00-00','f','huangjiping@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 15:14:59','0000-00-00 00:00:00','0','offline','zh-cn'),(46,18,'ningziyan','8216f8a845c895a9102489fbe9a9718e','宁紫妍','top','','no','','0000-00-00','f','ningziyan@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 15:15:37','0000-00-00 00:00:00','0','offline','zh-cn'),(47,20,'chenyiye','a3b94cf95dbc114de3f7486d2d65f300','陈怡桦','top','','no','','0000-00-00','f','chenyiye@qq.com','','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2019-12-30 15:20:50','0000-00-00 00:00:00','0','offline','zh-cn');
/*!40000 ALTER TABLE `sys_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_usercontact`
--

DROP TABLE IF EXISTS `sys_usercontact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_usercontact` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `member` text NOT NULL,
  `public` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `account` (`account`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_usercontact`
--

LOCK TABLES `sys_usercontact` WRITE;
/*!40000 ALTER TABLE `sys_usercontact` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_usercontact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_usergroup`
--

DROP TABLE IF EXISTS `sys_usergroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_usergroup` (
  `account` char(30) NOT NULL DEFAULT '',
  `group` mediumint(8) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `account` (`account`,`group`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_usergroup`
--

LOCK TABLES `sys_usergroup` WRITE;
/*!40000 ALTER TABLE `sys_usergroup` DISABLE KEYS */;
INSERT INTO `sys_usergroup` VALUES ('chencuifang',14),('chenshuling',14),('chenyiye',18),('chenzhaolian',8),('huangjinyan',14),('huangjiping',17),('jdf168',6),('lifei',8),('lihong',14),('lijie',6),('linmingyang',8),('liufenglin',13),('liujing',7),('liuyong',13),('luqizhong',14),('master',1),('ningziyan',19),('panguocheng',9),('pengxiaoqian',13),('puhongxing',8),('qinmengli',14),('sunhonghua',10),('suweinan',8),('wangchunping',13),('wanghequn',15),('wangqing',13),('wenxinxin',11),('wudengke',14),('wuhuanhuan',10),('wuhuanhuan',11),('xiahongjuan',7),('xiaokexi',13),('xieliping',7),('yangdandan',14),('yanghuan',7),('yanjiali',14),('yeyingfang',7),('zhongcailing',14),('zhufeng',17),('zhujiang',16);
/*!40000 ALTER TABLE `sys_usergroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_userquery`
--

DROP TABLE IF EXISTS `sys_userquery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_userquery` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `module` varchar(30) NOT NULL,
  `title` varchar(90) NOT NULL,
  `form` text NOT NULL,
  `sql` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `account` (`account`),
  KEY `module` (`module`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_userquery`
--

LOCK TABLES `sys_userquery` WRITE;
/*!40000 ALTER TABLE `sys_userquery` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_userquery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_reply`
--

DROP TABLE IF EXISTS `team_reply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_reply` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `thread` mediumint(8) unsigned NOT NULL,
  `content` text NOT NULL,
  `author` char(30) NOT NULL,
  `editor` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `hidden` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `thread` (`thread`),
  KEY `author` (`author`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_reply`
--

LOCK TABLES `team_reply` WRITE;
/*!40000 ALTER TABLE `team_reply` DISABLE KEYS */;
/*!40000 ALTER TABLE `team_reply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_thread`
--

DROP TABLE IF EXISTS `team_thread`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_thread` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `board` mediumint(8) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `readonly` tinyint(1) NOT NULL DEFAULT '0',
  `views` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `stick` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `replies` mediumint(8) unsigned NOT NULL,
  `repliedBy` varchar(30) NOT NULL,
  `repliedDate` datetime NOT NULL,
  `replyID` mediumint(8) unsigned NOT NULL,
  `hidden` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `category` (`board`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_thread`
--

LOCK TABLES `team_thread` WRITE;
/*!40000 ALTER TABLE `team_thread` DISABLE KEYS */;
/*!40000 ALTER TABLE `team_thread` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-07  9:41:29
