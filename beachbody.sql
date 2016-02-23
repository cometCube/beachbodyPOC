-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: beachbody
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Table structure for table `application_logs`
--

DROP TABLE IF EXISTS `application_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `application_logs` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime NOT NULL,
  `message` varchar(1024) DEFAULT NULL,
  `priority` int(10) DEFAULT NULL,
  `fileobject` varchar(1024) DEFAULT NULL,
  `info` varchar(1024) DEFAULT NULL,
  `component` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `relatedobject` bigint(20) DEFAULT NULL,
  `relatedobjecttype` enum('object','document','asset') DEFAULT NULL,
  `maintenanceChecked` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `component` (`component`),
  KEY `timestamp` (`timestamp`),
  KEY `relatedobject` (`relatedobject`),
  KEY `priority` (`priority`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application_logs`
--

LOCK TABLES `application_logs` WRITE;
/*!40000 ALTER TABLE `application_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `application_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assets`
--

DROP TABLE IF EXISTS `assets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assets` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parentId` int(11) unsigned DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `filename` varchar(255) DEFAULT '',
  `path` varchar(765) CHARACTER SET ascii DEFAULT NULL,
  `mimetype` varchar(255) DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT NULL,
  `modificationDate` bigint(20) unsigned DEFAULT NULL,
  `userOwner` int(11) unsigned DEFAULT NULL,
  `userModification` int(11) unsigned DEFAULT NULL,
  `customSettings` text,
  `hasMetaData` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `fullpath` (`path`,`filename`),
  KEY `parentId` (`parentId`),
  KEY `filename` (`filename`),
  KEY `path` (`path`),
  KEY `modificationDate` (`modificationDate`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assets`
--

LOCK TABLES `assets` WRITE;
/*!40000 ALTER TABLE `assets` DISABLE KEYS */;
INSERT INTO `assets` VALUES (1,0,'folder','','/',NULL,1456140318,1456140318,1,1,NULL,0),(2,15,'image','tonyhorton_trainer_thumb_540x672_umumne.png','/trainers/','image/png',1456148458,1456148779,2,2,'a:3:{s:10:\"imageWidth\";i:540;s:11:\"imageHeight\";i:672;s:25:\"imageDimensionsCalculated\";b:1;}',0),(3,15,'image','autumncalabrese_trainer_thumb_540x672_ywzsch.png','/trainers/','image/png',1456148509,1456148755,2,2,'a:3:{s:10:\"imageWidth\";i:540;s:11:\"imageHeight\";i:672;s:25:\"imageDimensionsCalculated\";b:1;}',0),(4,15,'image','shaunt_trainer_thumb_540x672_o904mj.png','/trainers/','image/png',1456148531,1456148775,2,2,'a:3:{s:10:\"imageWidth\";i:540;s:11:\"imageHeight\";i:672;s:25:\"imageDimensionsCalculated\";b:1;}',0),(5,15,'image','chalenejohnson_trainer_thumb_540x672_s1tewm.png','/trainers/','image/png',1456148556,1456148759,2,2,'a:3:{s:10:\"imageWidth\";i:540;s:11:\"imageHeight\";i:672;s:25:\"imageDimensionsCalculated\";b:1;}',0),(6,15,'image','sagikalev_trainer_thumb_540x672_av9rr5.png','/trainers/','image/png',1456148572,1456148773,2,2,'a:3:{s:10:\"imageWidth\";i:540;s:11:\"imageHeight\";i:672;s:25:\"imageDimensionsCalculated\";b:1;}',0),(7,15,'image','homepage_trainers_jericho_20160119.png','/trainers/','image/png',1456148586,1456148763,2,2,'a:3:{s:10:\"imageWidth\";i:540;s:11:\"imageHeight\";i:672;s:25:\"imageDimensionsCalculated\";b:1;}',0),(8,15,'image','homepage_trainers_joel_20160119.png','/trainers/','image/png',1456148604,1456148764,2,2,'a:3:{s:10:\"imageWidth\";i:540;s:11:\"imageHeight\";i:672;s:25:\"imageDimensionsCalculated\";b:1;}',0),(9,15,'image','leandrocarvalho_trainer_thumb_540x672_q57ilk.png','/trainers/','image/png',1456148670,1456148768,2,2,'a:3:{s:10:\"imageWidth\";i:540;s:11:\"imageHeight\";i:672;s:25:\"imageDimensionsCalculated\";b:1;}',0),(10,15,'image','debbiesiebers_trainer_thumb_540x672_gf1c96.png','/trainers/','image/png',1456148683,1456148761,2,2,'a:3:{s:10:\"imageWidth\";i:540;s:11:\"imageHeight\";i:672;s:25:\"imageDimensionsCalculated\";b:1;}',0),(11,15,'image','bretthoebel_540x672_notype_aqygqn.png','/trainers/','image/png',1456148698,1456148757,2,2,'a:3:{s:10:\"imageWidth\";i:540;s:11:\"imageHeight\";i:672;s:25:\"imageDimensionsCalculated\";b:1;}',0),(12,15,'image','markcheng_540x672_notype_2_e8ma7b.png','/trainers/','image/png',1456148713,1456148770,2,2,'a:3:{s:10:\"imageWidth\";i:540;s:11:\"imageHeight\";i:672;s:25:\"imageDimensionsCalculated\";b:1;}',0),(13,15,'image','teigh_gillian_trainer_image_clean_540x672_mmq0zh.png','/trainers/','image/png',1456148728,1456148777,2,2,'a:3:{s:10:\"imageWidth\";i:540;s:11:\"imageHeight\";i:672;s:25:\"imageDimensionsCalculated\";b:1;}',0),(14,15,'image','kathysmith_trainer_image_clean_540x672_puseho.png','/trainers/','image/png',1456148741,1456148766,2,2,'a:3:{s:10:\"imageWidth\";i:540;s:11:\"imageHeight\";i:672;s:25:\"imageDimensionsCalculated\";b:1;}',0),(15,1,'folder','trainers','/',NULL,1456148752,1456148752,2,2,'a:0:{}',0),(16,1,'folder','programs','/',NULL,1456150760,1456150760,2,2,'a:0:{}',0),(17,16,'image','autumn_bodexclusives_boxart.jpg','/programs/','image/jpeg',1456150964,1456150964,2,2,'a:3:{s:10:\"imageWidth\";i:540;s:11:\"imageHeight\";i:672;s:25:\"imageDimensionsCalculated\";b:1;}',0),(18,16,'image','tony_bodexclusives_boxart.jpg','/programs/','image/jpeg',1456150998,1456150998,2,2,'a:3:{s:10:\"imageWidth\";i:540;s:11:\"imageHeight\";i:672;s:25:\"imageDimensionsCalculated\";b:1;}',0),(19,16,'image','sagi_bodexclusives_boxart.jpg','/programs/','image/jpeg',1456151041,1456151041,2,2,'a:3:{s:10:\"imageWidth\";i:540;s:11:\"imageHeight\";i:672;s:25:\"imageDimensionsCalculated\";b:1;}',0),(20,16,'image','san_boxart_20150308.jpg','/programs/','image/jpeg',1456151074,1456151074,2,2,'a:3:{s:10:\"imageWidth\";i:540;s:11:\"imageHeight\";i:672;s:25:\"imageDimensionsCalculated\";b:1;}',0),(21,16,'image','insanity_asylum_v1_program_boxart_540x672_emmmp1.jpg','/programs/','image/jpeg',1456151108,1456151108,2,2,'a:3:{s:10:\"imageWidth\";i:540;s:11:\"imageHeight\";i:672;s:25:\"imageDimensionsCalculated\";b:1;}',0),(22,16,'image','cz_program_boxart_20150715.jpg','/programs/','image/jpeg',1456202226,1456202226,2,2,'a:3:{s:10:\"imageWidth\";i:540;s:11:\"imageHeight\";i:672;s:25:\"imageDimensionsCalculated\";b:1;}',0);
/*!40000 ALTER TABLE `assets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assets_metadata`
--

DROP TABLE IF EXISTS `assets_metadata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assets_metadata` (
  `cid` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `type` enum('input','textarea','asset','document','object','date','select','checkbox') DEFAULT NULL,
  `data` text,
  KEY `cid` (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assets_metadata`
--

LOCK TABLES `assets_metadata` WRITE;
/*!40000 ALTER TABLE `assets_metadata` DISABLE KEYS */;
/*!40000 ALTER TABLE `assets_metadata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assets_metadata_predefined`
--

DROP TABLE IF EXISTS `assets_metadata_predefined`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assets_metadata_predefined` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `language` varchar(255) DEFAULT NULL,
  `type` enum('input','textarea','asset','document','object','date','select','checkbox') DEFAULT NULL,
  `data` text,
  `targetSubtype` enum('image','text','audio','video','document','archive','unknown') DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT '0',
  `modificationDate` bigint(20) unsigned DEFAULT '0',
  `config` text,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `language` (`language`),
  KEY `targetSubtype` (`targetSubtype`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assets_metadata_predefined`
--

LOCK TABLES `assets_metadata_predefined` WRITE;
/*!40000 ALTER TABLE `assets_metadata_predefined` DISABLE KEYS */;
/*!40000 ALTER TABLE `assets_metadata_predefined` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache` (
  `id` varchar(165) NOT NULL DEFAULT '',
  `data` longtext,
  `mtime` bigint(20) DEFAULT NULL,
  `expire` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_tags`
--

DROP TABLE IF EXISTS `cache_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache_tags` (
  `id` varchar(165) NOT NULL DEFAULT '',
  `tag` varchar(165) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`,`tag`),
  KEY `id` (`id`),
  KEY `tag` (`tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_tags`
--

LOCK TABLES `cache_tags` WRITE;
/*!40000 ALTER TABLE `cache_tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `creationDate` bigint(20) unsigned DEFAULT NULL,
  `modificationDate` bigint(20) unsigned DEFAULT NULL,
  `userOwner` int(11) unsigned DEFAULT NULL,
  `userModification` int(11) unsigned DEFAULT NULL,
  `allowInherit` tinyint(1) unsigned DEFAULT '0',
  `allowVariants` tinyint(1) unsigned DEFAULT '0',
  `parentClass` varchar(255) DEFAULT NULL,
  `useTraits` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `previewUrl` varchar(255) DEFAULT NULL,
  `propertyVisibility` text,
  `showVariants` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classes`
--

LOCK TABLES `classes` WRITE;
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
INSERT INTO `classes` VALUES (1,'trainer','Class to Add Trainers.',1456140801,1456202049,2,2,0,0,'','','','','a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}',0),(2,'program','',1456141327,1456205533,2,2,0,0,'','','','','a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}',0),(3,'workoutgroup','Workout Groups for Programs',1456142689,1456202074,2,2,0,0,'','','','','a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}',0),(4,'workout','Class for Workout.',1456142984,1456202061,2,2,0,0,'','','','','a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}',0);
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classificationstore_collectionrelations`
--

DROP TABLE IF EXISTS `classificationstore_collectionrelations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classificationstore_collectionrelations` (
  `colId` bigint(20) NOT NULL,
  `groupId` bigint(20) NOT NULL,
  PRIMARY KEY (`colId`,`groupId`),
  KEY `FK_classificationstore_collectionrelations_groups` (`groupId`),
  CONSTRAINT `FK_classificationstore_collectionrelations_groups` FOREIGN KEY (`groupId`) REFERENCES `classificationstore_groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classificationstore_collectionrelations`
--

LOCK TABLES `classificationstore_collectionrelations` WRITE;
/*!40000 ALTER TABLE `classificationstore_collectionrelations` DISABLE KEYS */;
/*!40000 ALTER TABLE `classificationstore_collectionrelations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classificationstore_collections`
--

DROP TABLE IF EXISTS `classificationstore_collections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classificationstore_collections` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT '0',
  `modificationDate` bigint(20) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classificationstore_collections`
--

LOCK TABLES `classificationstore_collections` WRITE;
/*!40000 ALTER TABLE `classificationstore_collections` DISABLE KEYS */;
/*!40000 ALTER TABLE `classificationstore_collections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classificationstore_groups`
--

DROP TABLE IF EXISTS `classificationstore_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classificationstore_groups` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parentId` bigint(20) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT '0',
  `modificationDate` bigint(20) unsigned DEFAULT '0',
  `sorter` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classificationstore_groups`
--

LOCK TABLES `classificationstore_groups` WRITE;
/*!40000 ALTER TABLE `classificationstore_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `classificationstore_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classificationstore_keys`
--

DROP TABLE IF EXISTS `classificationstore_keys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classificationstore_keys` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `type` enum('input','textarea','wysiwyg','checkbox','numeric','slider','select','multiselect','date','datetime','language','languagemultiselect','country','countrymultiselect','table') DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT '0',
  `modificationDate` bigint(20) unsigned DEFAULT '0',
  `definition` longtext,
  `enabled` tinyint(1) DEFAULT NULL,
  `sorter` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classificationstore_keys`
--

LOCK TABLES `classificationstore_keys` WRITE;
/*!40000 ALTER TABLE `classificationstore_keys` DISABLE KEYS */;
/*!40000 ALTER TABLE `classificationstore_keys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classificationstore_relations`
--

DROP TABLE IF EXISTS `classificationstore_relations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classificationstore_relations` (
  `groupId` bigint(20) NOT NULL,
  `keyId` bigint(20) NOT NULL,
  PRIMARY KEY (`groupId`,`keyId`),
  KEY `FK_classificationstore_relations_classificationstore_keys` (`keyId`),
  CONSTRAINT `FK_classificationstore_relations_classificationstore_groups` FOREIGN KEY (`groupId`) REFERENCES `classificationstore_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_classificationstore_relations_classificationstore_keys` FOREIGN KEY (`keyId`) REFERENCES `classificationstore_keys` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classificationstore_relations`
--

LOCK TABLES `classificationstore_relations` WRITE;
/*!40000 ALTER TABLE `classificationstore_relations` DISABLE KEYS */;
/*!40000 ALTER TABLE `classificationstore_relations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `custom_layouts`
--

DROP TABLE IF EXISTS `custom_layouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `custom_layouts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `classId` int(11) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `creationDate` bigint(20) unsigned DEFAULT NULL,
  `modificationDate` bigint(20) unsigned DEFAULT NULL,
  `userOwner` int(11) unsigned DEFAULT NULL,
  `userModification` int(11) unsigned DEFAULT NULL,
  `default` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`classId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `custom_layouts`
--

LOCK TABLES `custom_layouts` WRITE;
/*!40000 ALTER TABLE `custom_layouts` DISABLE KEYS */;
/*!40000 ALTER TABLE `custom_layouts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dependencies`
--

DROP TABLE IF EXISTS `dependencies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dependencies` (
  `sourcetype` enum('document','asset','object') NOT NULL DEFAULT 'document',
  `sourceid` int(11) unsigned NOT NULL DEFAULT '0',
  `targettype` enum('document','asset','object') NOT NULL DEFAULT 'document',
  `targetid` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`sourcetype`,`sourceid`,`targetid`,`targettype`),
  KEY `sourceid` (`sourceid`),
  KEY `targetid` (`targetid`),
  KEY `sourcetype` (`sourcetype`),
  KEY `targettype` (`targettype`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dependencies`
--

LOCK TABLES `dependencies` WRITE;
/*!40000 ALTER TABLE `dependencies` DISABLE KEYS */;
INSERT INTO `dependencies` VALUES ('object',3,'asset',2),('object',4,'asset',3),('object',5,'asset',4),('object',7,'object',5),('object',7,'asset',22);
/*!40000 ALTER TABLE `dependencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parentId` int(11) unsigned DEFAULT NULL,
  `type` enum('page','link','snippet','folder','hardlink','email') DEFAULT NULL,
  `key` varchar(255) DEFAULT '',
  `path` varchar(765) CHARACTER SET ascii DEFAULT NULL,
  `index` int(11) unsigned DEFAULT '0',
  `published` tinyint(1) unsigned DEFAULT '1',
  `creationDate` bigint(20) unsigned DEFAULT NULL,
  `modificationDate` bigint(20) unsigned DEFAULT NULL,
  `userOwner` int(11) unsigned DEFAULT NULL,
  `userModification` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fullpath` (`path`,`key`),
  KEY `parentId` (`parentId`),
  KEY `key` (`key`),
  KEY `path` (`path`),
  KEY `published` (`published`),
  KEY `modificationDate` (`modificationDate`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` VALUES (1,0,'page','','/',999999,1,1456140318,1456140318,1,1);
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents_doctypes`
--

DROP TABLE IF EXISTS `documents_doctypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents_doctypes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `module` varchar(255) DEFAULT NULL,
  `controller` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `template` varchar(255) DEFAULT NULL,
  `type` enum('page','snippet','email') DEFAULT NULL,
  `priority` int(3) DEFAULT '0',
  `creationDate` bigint(20) unsigned DEFAULT '0',
  `modificationDate` bigint(20) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `priority` (`priority`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents_doctypes`
--

LOCK TABLES `documents_doctypes` WRITE;
/*!40000 ALTER TABLE `documents_doctypes` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents_doctypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents_elements`
--

DROP TABLE IF EXISTS `documents_elements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents_elements` (
  `documentId` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(50) DEFAULT NULL,
  `data` longtext,
  PRIMARY KEY (`documentId`,`name`),
  KEY `documentId` (`documentId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents_elements`
--

LOCK TABLES `documents_elements` WRITE;
/*!40000 ALTER TABLE `documents_elements` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents_elements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents_email`
--

DROP TABLE IF EXISTS `documents_email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents_email` (
  `id` int(11) unsigned NOT NULL DEFAULT '0',
  `module` varchar(255) DEFAULT NULL,
  `controller` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `template` varchar(255) DEFAULT NULL,
  `to` varchar(255) DEFAULT NULL,
  `from` varchar(255) DEFAULT NULL,
  `cc` varchar(255) DEFAULT NULL,
  `bcc` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents_email`
--

LOCK TABLES `documents_email` WRITE;
/*!40000 ALTER TABLE `documents_email` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents_email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents_hardlink`
--

DROP TABLE IF EXISTS `documents_hardlink`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents_hardlink` (
  `id` int(11) NOT NULL DEFAULT '0',
  `sourceId` int(11) DEFAULT NULL,
  `propertiesFromSource` tinyint(1) DEFAULT NULL,
  `childsFromSource` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents_hardlink`
--

LOCK TABLES `documents_hardlink` WRITE;
/*!40000 ALTER TABLE `documents_hardlink` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents_hardlink` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents_link`
--

DROP TABLE IF EXISTS `documents_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents_link` (
  `id` int(11) unsigned NOT NULL DEFAULT '0',
  `internalType` enum('document','asset') DEFAULT NULL,
  `internal` int(11) unsigned DEFAULT NULL,
  `direct` varchar(1000) DEFAULT NULL,
  `linktype` enum('direct','internal') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents_link`
--

LOCK TABLES `documents_link` WRITE;
/*!40000 ALTER TABLE `documents_link` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents_page`
--

DROP TABLE IF EXISTS `documents_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents_page` (
  `id` int(11) unsigned NOT NULL DEFAULT '0',
  `module` varchar(255) DEFAULT NULL,
  `controller` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `template` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `metaData` text,
  `prettyUrl` varchar(255) DEFAULT NULL,
  `contentMasterDocumentId` int(11) DEFAULT NULL,
  `css` longtext,
  `personas` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `prettyUrl` (`prettyUrl`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents_page`
--

LOCK TABLES `documents_page` WRITE;
/*!40000 ALTER TABLE `documents_page` DISABLE KEYS */;
INSERT INTO `documents_page` VALUES (1,NULL,'','','','','','',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `documents_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents_snippet`
--

DROP TABLE IF EXISTS `documents_snippet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents_snippet` (
  `id` int(11) unsigned NOT NULL DEFAULT '0',
  `module` varchar(255) DEFAULT NULL,
  `controller` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `template` varchar(255) DEFAULT NULL,
  `contentMasterDocumentId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents_snippet`
--

LOCK TABLES `documents_snippet` WRITE;
/*!40000 ALTER TABLE `documents_snippet` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents_snippet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `edit_lock`
--

DROP TABLE IF EXISTS `edit_lock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `edit_lock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) unsigned NOT NULL DEFAULT '0',
  `ctype` enum('document','asset','object') DEFAULT NULL,
  `userId` int(11) unsigned NOT NULL DEFAULT '0',
  `sessionId` varchar(255) DEFAULT NULL,
  `date` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `ctype` (`ctype`),
  KEY `cidtype` (`cid`,`ctype`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `edit_lock`
--

LOCK TABLES `edit_lock` WRITE;
/*!40000 ALTER TABLE `edit_lock` DISABLE KEYS */;
INSERT INTO `edit_lock` VALUES (26,7,'object',2,'t3aq85lmp49dl8i1985pe7nf7f29mi7l',1456205536);
/*!40000 ALTER TABLE `edit_lock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_blacklist`
--

DROP TABLE IF EXISTS `email_blacklist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_blacklist` (
  `address` varchar(255) NOT NULL DEFAULT '',
  `creationDate` int(11) unsigned DEFAULT NULL,
  `modificationDate` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`address`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_blacklist`
--

LOCK TABLES `email_blacklist` WRITE;
/*!40000 ALTER TABLE `email_blacklist` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_blacklist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_log`
--

DROP TABLE IF EXISTS `email_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `documentId` int(11) DEFAULT NULL,
  `requestUri` varchar(500) DEFAULT NULL,
  `params` text,
  `from` varchar(500) DEFAULT NULL,
  `to` longtext,
  `cc` longtext,
  `bcc` longtext,
  `sentDate` bigint(20) DEFAULT NULL,
  `subject` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_log`
--

LOCK TABLES `email_log` WRITE;
/*!40000 ALTER TABLE `email_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `glossary`
--

DROP TABLE IF EXISTS `glossary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `glossary` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `language` varchar(10) DEFAULT NULL,
  `casesensitive` tinyint(1) DEFAULT NULL,
  `exactmatch` tinyint(1) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `abbr` varchar(255) DEFAULT NULL,
  `acronym` varchar(255) DEFAULT NULL,
  `site` int(11) unsigned DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT '0',
  `modificationDate` bigint(20) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `language` (`language`),
  KEY `site` (`site`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `glossary`
--

LOCK TABLES `glossary` WRITE;
/*!40000 ALTER TABLE `glossary` DISABLE KEYS */;
/*!40000 ALTER TABLE `glossary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `http_error_log`
--

DROP TABLE IF EXISTS `http_error_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `http_error_log` (
  `uri` varchar(3000) CHARACTER SET ascii DEFAULT NULL,
  `code` int(3) DEFAULT NULL,
  `parametersGet` longtext,
  `parametersPost` longtext,
  `cookies` longtext,
  `serverVars` longtext,
  `date` bigint(20) DEFAULT NULL,
  `count` bigint(20) DEFAULT NULL,
  KEY `uri` (`uri`(765)),
  KEY `code` (`code`),
  KEY `date` (`date`),
  KEY `count` (`count`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `http_error_log`
--

LOCK TABLES `http_error_log` WRITE;
/*!40000 ALTER TABLE `http_error_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `http_error_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keyvalue_groups`
--

DROP TABLE IF EXISTS `keyvalue_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `keyvalue_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT '0',
  `modificationDate` bigint(20) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keyvalue_groups`
--

LOCK TABLES `keyvalue_groups` WRITE;
/*!40000 ALTER TABLE `keyvalue_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `keyvalue_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keyvalue_keys`
--

DROP TABLE IF EXISTS `keyvalue_keys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `keyvalue_keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `type` enum('bool','number','select','text','translated','translatedSelect','range') DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `possiblevalues` text,
  `group` int(11) DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT '0',
  `modificationDate` bigint(20) unsigned DEFAULT '0',
  `translator` int(11) DEFAULT NULL,
  `mandatory` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `group` (`group`),
  CONSTRAINT `keyvalue_keys_ibfk_1` FOREIGN KEY (`group`) REFERENCES `keyvalue_groups` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keyvalue_keys`
--

LOCK TABLES `keyvalue_keys` WRITE;
/*!40000 ALTER TABLE `keyvalue_keys` DISABLE KEYS */;
/*!40000 ALTER TABLE `keyvalue_keys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keyvalue_translator_configuration`
--

DROP TABLE IF EXISTS `keyvalue_translator_configuration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `keyvalue_translator_configuration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `translator` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keyvalue_translator_configuration`
--

LOCK TABLES `keyvalue_translator_configuration` WRITE;
/*!40000 ALTER TABLE `keyvalue_translator_configuration` DISABLE KEYS */;
/*!40000 ALTER TABLE `keyvalue_translator_configuration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locks`
--

DROP TABLE IF EXISTS `locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locks` (
  `id` varchar(150) NOT NULL DEFAULT '',
  `date` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locks`
--

LOCK TABLES `locks` WRITE;
/*!40000 ALTER TABLE `locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `ctype` enum('asset','document','object') DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `ctype` (`ctype`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notes`
--

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notes_data`
--

DROP TABLE IF EXISTS `notes_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notes_data` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `type` enum('text','date','document','asset','object','bool') DEFAULT NULL,
  `data` text,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notes_data`
--

LOCK TABLES `notes_data` WRITE;
/*!40000 ALTER TABLE `notes_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `notes_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `object_1`
--

DROP TABLE IF EXISTS `object_1`;
/*!50001 DROP VIEW IF EXISTS `object_1`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `object_1` (
  `oo_id` tinyint NOT NULL,
  `oo_classId` tinyint NOT NULL,
  `oo_className` tinyint NOT NULL,
  `speciality` tinyint NOT NULL,
  `tfeatures` tinyint NOT NULL,
  `timgage` tinyint NOT NULL,
  `tactive` tinyint NOT NULL,
  `tname` tinyint NOT NULL,
  `o_id` tinyint NOT NULL,
  `o_parentId` tinyint NOT NULL,
  `o_type` tinyint NOT NULL,
  `o_key` tinyint NOT NULL,
  `o_path` tinyint NOT NULL,
  `o_index` tinyint NOT NULL,
  `o_published` tinyint NOT NULL,
  `o_creationDate` tinyint NOT NULL,
  `o_modificationDate` tinyint NOT NULL,
  `o_userOwner` tinyint NOT NULL,
  `o_userModification` tinyint NOT NULL,
  `o_classId` tinyint NOT NULL,
  `o_className` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `object_2`
--

DROP TABLE IF EXISTS `object_2`;
/*!50001 DROP VIEW IF EXISTS `object_2`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `object_2` (
  `oo_id` tinyint NOT NULL,
  `oo_classId` tinyint NOT NULL,
  `oo_className` tinyint NOT NULL,
  `trainerID` tinyint NOT NULL,
  `pname` tinyint NOT NULL,
  `pdesc` tinyint NOT NULL,
  `pimage` tinyint NOT NULL,
  `ptype` tinyint NOT NULL,
  `pfeatures` tinyint NOT NULL,
  `pactive` tinyint NOT NULL,
  `o_id` tinyint NOT NULL,
  `o_parentId` tinyint NOT NULL,
  `o_type` tinyint NOT NULL,
  `o_key` tinyint NOT NULL,
  `o_path` tinyint NOT NULL,
  `o_index` tinyint NOT NULL,
  `o_published` tinyint NOT NULL,
  `o_creationDate` tinyint NOT NULL,
  `o_modificationDate` tinyint NOT NULL,
  `o_userOwner` tinyint NOT NULL,
  `o_userModification` tinyint NOT NULL,
  `o_classId` tinyint NOT NULL,
  `o_className` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `object_3`
--

DROP TABLE IF EXISTS `object_3`;
/*!50001 DROP VIEW IF EXISTS `object_3`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `object_3` (
  `oo_id` tinyint NOT NULL,
  `oo_classId` tinyint NOT NULL,
  `oo_className` tinyint NOT NULL,
  `programID` tinyint NOT NULL,
  `wgname` tinyint NOT NULL,
  `wgactive` tinyint NOT NULL,
  `o_id` tinyint NOT NULL,
  `o_parentId` tinyint NOT NULL,
  `o_type` tinyint NOT NULL,
  `o_key` tinyint NOT NULL,
  `o_path` tinyint NOT NULL,
  `o_index` tinyint NOT NULL,
  `o_published` tinyint NOT NULL,
  `o_creationDate` tinyint NOT NULL,
  `o_modificationDate` tinyint NOT NULL,
  `o_userOwner` tinyint NOT NULL,
  `o_userModification` tinyint NOT NULL,
  `o_classId` tinyint NOT NULL,
  `o_className` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `object_4`
--

DROP TABLE IF EXISTS `object_4`;
/*!50001 DROP VIEW IF EXISTS `object_4`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `object_4` (
  `oo_id` tinyint NOT NULL,
  `oo_classId` tinyint NOT NULL,
  `oo_className` tinyint NOT NULL,
  `workoutgroupID` tinyint NOT NULL,
  `wname` tinyint NOT NULL,
  `wdesc` tinyint NOT NULL,
  `reqequipment` tinyint NOT NULL,
  `recequipment` tinyint NOT NULL,
  `wtime` tinyint NOT NULL,
  `wvideo` tinyint NOT NULL,
  `wactive` tinyint NOT NULL,
  `o_id` tinyint NOT NULL,
  `o_parentId` tinyint NOT NULL,
  `o_type` tinyint NOT NULL,
  `o_key` tinyint NOT NULL,
  `o_path` tinyint NOT NULL,
  `o_index` tinyint NOT NULL,
  `o_published` tinyint NOT NULL,
  `o_creationDate` tinyint NOT NULL,
  `o_modificationDate` tinyint NOT NULL,
  `o_userOwner` tinyint NOT NULL,
  `o_userModification` tinyint NOT NULL,
  `o_classId` tinyint NOT NULL,
  `o_className` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `object_query_1`
--

DROP TABLE IF EXISTS `object_query_1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `object_query_1` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '1',
  `oo_className` varchar(255) DEFAULT 'trainer',
  `speciality` longtext,
  `tfeatures` longtext,
  `timgage` int(11) DEFAULT NULL,
  `tactive` tinyint(1) DEFAULT NULL,
  `tname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `object_query_1`
--

LOCK TABLES `object_query_1` WRITE;
/*!40000 ALTER TABLE `object_query_1` DISABLE KEYS */;
INSERT INTO `object_query_1` VALUES (3,1,'trainer',NULL,NULL,2,1,'Tony Horton'),(4,1,'trainer',NULL,NULL,3,1,'Autumun Calabrese'),(5,1,'trainer',NULL,NULL,4,1,'Shaun T');
/*!40000 ALTER TABLE `object_query_1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `object_query_2`
--

DROP TABLE IF EXISTS `object_query_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `object_query_2` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '2',
  `oo_className` varchar(255) DEFAULT 'program',
  `trainerID` text,
  `pname` varchar(255) DEFAULT NULL,
  `pdesc` longtext,
  `pimage` int(11) DEFAULT NULL,
  `ptype` varchar(255) DEFAULT NULL,
  `pfeatures` longtext,
  `pactive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `object_query_2`
--

LOCK TABLES `object_query_2` WRITE;
/*!40000 ALTER TABLE `object_query_2` DISABLE KEYS */;
INSERT INTO `object_query_2` VALUES (7,2,'program',',5,','Cize The End Of Exercise','This is Premium Program. Add CIZE to your member library for only $29.95 USD. You will have unlimited streaming access to the program for as long as you’re a Beachbody on Demand member! Purchase not available for UK customers.',22,NULL,NULL,NULL);
/*!40000 ALTER TABLE `object_query_2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `object_query_3`
--

DROP TABLE IF EXISTS `object_query_3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `object_query_3` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '3',
  `oo_className` varchar(255) DEFAULT 'workoutgroup',
  `programID` text,
  `wgname` varchar(255) DEFAULT NULL,
  `wgactive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `object_query_3`
--

LOCK TABLES `object_query_3` WRITE;
/*!40000 ALTER TABLE `object_query_3` DISABLE KEYS */;
/*!40000 ALTER TABLE `object_query_3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `object_query_4`
--

DROP TABLE IF EXISTS `object_query_4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `object_query_4` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '4',
  `oo_className` varchar(255) DEFAULT 'workout',
  `workoutgroupID` text,
  `wname` varchar(255) DEFAULT NULL,
  `wdesc` longtext,
  `reqequipment` longtext,
  `recequipment` longtext,
  `wtime` varchar(5) DEFAULT NULL,
  `wvideo` text,
  `wactive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `object_query_4`
--

LOCK TABLES `object_query_4` WRITE;
/*!40000 ALTER TABLE `object_query_4` DISABLE KEYS */;
/*!40000 ALTER TABLE `object_query_4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `object_relations_1`
--

DROP TABLE IF EXISTS `object_relations_1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `object_relations_1` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `object_relations_1`
--

LOCK TABLES `object_relations_1` WRITE;
/*!40000 ALTER TABLE `object_relations_1` DISABLE KEYS */;
/*!40000 ALTER TABLE `object_relations_1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `object_relations_2`
--

DROP TABLE IF EXISTS `object_relations_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `object_relations_2` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `object_relations_2`
--

LOCK TABLES `object_relations_2` WRITE;
/*!40000 ALTER TABLE `object_relations_2` DISABLE KEYS */;
INSERT INTO `object_relations_2` VALUES (7,5,'object','trainerID',1,'object','','0');
/*!40000 ALTER TABLE `object_relations_2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `object_relations_3`
--

DROP TABLE IF EXISTS `object_relations_3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `object_relations_3` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `object_relations_3`
--

LOCK TABLES `object_relations_3` WRITE;
/*!40000 ALTER TABLE `object_relations_3` DISABLE KEYS */;
/*!40000 ALTER TABLE `object_relations_3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `object_relations_4`
--

DROP TABLE IF EXISTS `object_relations_4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `object_relations_4` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `object_relations_4`
--

LOCK TABLES `object_relations_4` WRITE;
/*!40000 ALTER TABLE `object_relations_4` DISABLE KEYS */;
/*!40000 ALTER TABLE `object_relations_4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `object_store_1`
--

DROP TABLE IF EXISTS `object_store_1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `object_store_1` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `speciality` longtext,
  `tfeatures` longtext,
  `timgage` int(11) DEFAULT NULL,
  `tactive` tinyint(1) DEFAULT NULL,
  `tname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `object_store_1`
--

LOCK TABLES `object_store_1` WRITE;
/*!40000 ALTER TABLE `object_store_1` DISABLE KEYS */;
INSERT INTO `object_store_1` VALUES (3,NULL,NULL,2,1,'Tony Horton'),(4,NULL,NULL,3,1,'Autumun Calabrese'),(5,NULL,NULL,4,1,'Shaun T');
/*!40000 ALTER TABLE `object_store_1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `object_store_2`
--

DROP TABLE IF EXISTS `object_store_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `object_store_2` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `pname` varchar(255) DEFAULT NULL,
  `pdesc` longtext,
  `pimage` int(11) DEFAULT NULL,
  `ptype` varchar(255) DEFAULT NULL,
  `pfeatures` longtext,
  `pactive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `object_store_2`
--

LOCK TABLES `object_store_2` WRITE;
/*!40000 ALTER TABLE `object_store_2` DISABLE KEYS */;
INSERT INTO `object_store_2` VALUES (7,'Cize The End Of Exercise','This is Premium Program. Add CIZE to your member library for only $29.95 USD. You will have unlimited streaming access to the program for as long as you’re a Beachbody on Demand member! Purchase not available for UK customers.',22,NULL,NULL,NULL);
/*!40000 ALTER TABLE `object_store_2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `object_store_3`
--

DROP TABLE IF EXISTS `object_store_3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `object_store_3` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `wgname` varchar(255) DEFAULT NULL,
  `wgactive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `object_store_3`
--

LOCK TABLES `object_store_3` WRITE;
/*!40000 ALTER TABLE `object_store_3` DISABLE KEYS */;
/*!40000 ALTER TABLE `object_store_3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `object_store_4`
--

DROP TABLE IF EXISTS `object_store_4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `object_store_4` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `wname` varchar(255) DEFAULT NULL,
  `wdesc` longtext,
  `reqequipment` longtext,
  `recequipment` longtext,
  `wtime` varchar(5) DEFAULT NULL,
  `wvideo` text,
  `wactive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `object_store_4`
--

LOCK TABLES `object_store_4` WRITE;
/*!40000 ALTER TABLE `object_store_4` DISABLE KEYS */;
/*!40000 ALTER TABLE `object_store_4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objects`
--

DROP TABLE IF EXISTS `objects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `objects` (
  `o_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `o_parentId` int(11) unsigned DEFAULT NULL,
  `o_type` enum('object','folder','variant') DEFAULT NULL,
  `o_key` varchar(255) DEFAULT '',
  `o_path` varchar(765) CHARACTER SET ascii DEFAULT NULL,
  `o_index` int(11) unsigned DEFAULT '0',
  `o_published` tinyint(1) unsigned DEFAULT '1',
  `o_creationDate` bigint(20) unsigned DEFAULT NULL,
  `o_modificationDate` bigint(20) unsigned DEFAULT NULL,
  `o_userOwner` int(11) unsigned DEFAULT NULL,
  `o_userModification` int(11) unsigned DEFAULT NULL,
  `o_classId` int(11) unsigned DEFAULT NULL,
  `o_className` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`),
  UNIQUE KEY `fullpath` (`o_path`,`o_key`),
  KEY `key` (`o_key`),
  KEY `path` (`o_path`),
  KEY `published` (`o_published`),
  KEY `parentId` (`o_parentId`),
  KEY `type` (`o_type`),
  KEY `o_modificationDate` (`o_modificationDate`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objects`
--

LOCK TABLES `objects` WRITE;
/*!40000 ALTER TABLE `objects` DISABLE KEYS */;
INSERT INTO `objects` VALUES (1,0,'folder','','/',999999,1,1456140319,1456140319,1,1,NULL,NULL),(2,1,'folder','trainers','/',NULL,1,1456148989,1456148989,2,2,NULL,NULL),(3,2,'object','tonyhorton','/trainers/',0,1,1456149017,1456150592,2,2,1,'trainer'),(4,2,'object','autumuncalabrese','/trainers/',0,1,1456150638,1456150660,2,2,1,'trainer'),(5,2,'object','shaunt','/trainers/',0,1,1456150698,1456150738,2,2,1,'trainer'),(6,1,'folder','programs','/',NULL,1,1456150749,1456150749,2,2,NULL,NULL),(7,6,'object','cize','/programs/',0,0,1456201517,1456202249,2,2,2,'program');
/*!40000 ALTER TABLE `objects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `properties` (
  `cid` int(11) unsigned NOT NULL DEFAULT '0',
  `ctype` enum('document','asset','object') NOT NULL DEFAULT 'document',
  `cpath` varchar(765) CHARACTER SET ascii DEFAULT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `type` enum('text','date','document','asset','object','bool','select') DEFAULT NULL,
  `data` text,
  `inheritable` tinyint(1) unsigned DEFAULT '1',
  PRIMARY KEY (`cid`,`ctype`,`name`),
  KEY `cpath` (`cpath`),
  KEY `inheritable` (`inheritable`),
  KEY `ctype` (`ctype`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties_predefined`
--

DROP TABLE IF EXISTS `properties_predefined`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `properties_predefined` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT '',
  `description` text,
  `key` varchar(255) DEFAULT NULL,
  `type` enum('text','document','asset','bool','select','object') DEFAULT NULL,
  `data` text,
  `config` text,
  `ctype` enum('document','asset','object') DEFAULT NULL,
  `inheritable` tinyint(1) unsigned DEFAULT '0',
  `creationDate` bigint(20) unsigned DEFAULT '0',
  `modificationDate` bigint(20) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `id` (`id`),
  KEY `key` (`key`),
  KEY `type` (`type`),
  KEY `ctype` (`ctype`),
  KEY `inheritable` (`inheritable`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties_predefined`
--

LOCK TABLES `properties_predefined` WRITE;
/*!40000 ALTER TABLE `properties_predefined` DISABLE KEYS */;
/*!40000 ALTER TABLE `properties_predefined` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recyclebin`
--

DROP TABLE IF EXISTS `recyclebin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recyclebin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) DEFAULT NULL,
  `subtype` varchar(20) DEFAULT NULL,
  `path` varchar(765) DEFAULT NULL,
  `amount` int(3) DEFAULT NULL,
  `date` bigint(20) DEFAULT NULL,
  `deletedby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recyclebin`
--

LOCK TABLES `recyclebin` WRITE;
/*!40000 ALTER TABLE `recyclebin` DISABLE KEYS */;
/*!40000 ALTER TABLE `recyclebin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `redirects`
--

DROP TABLE IF EXISTS `redirects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `redirects` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `source` varchar(255) DEFAULT NULL,
  `sourceEntireUrl` tinyint(1) DEFAULT NULL,
  `sourceSite` int(11) DEFAULT NULL,
  `passThroughParameters` tinyint(1) DEFAULT NULL,
  `target` varchar(255) DEFAULT NULL,
  `targetSite` int(11) DEFAULT NULL,
  `statusCode` varchar(3) DEFAULT NULL,
  `priority` int(2) DEFAULT '0',
  `expiry` bigint(20) DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT '0',
  `modificationDate` bigint(20) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `priority` (`priority`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `redirects`
--

LOCK TABLES `redirects` WRITE;
/*!40000 ALTER TABLE `redirects` DISABLE KEYS */;
/*!40000 ALTER TABLE `redirects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sanitycheck`
--

DROP TABLE IF EXISTS `sanitycheck`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sanitycheck` (
  `id` int(11) unsigned NOT NULL,
  `type` enum('document','asset','object') NOT NULL,
  PRIMARY KEY (`id`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sanitycheck`
--

LOCK TABLES `sanitycheck` WRITE;
/*!40000 ALTER TABLE `sanitycheck` DISABLE KEYS */;
/*!40000 ALTER TABLE `sanitycheck` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedule_tasks`
--

DROP TABLE IF EXISTS `schedule_tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schedule_tasks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(11) unsigned DEFAULT NULL,
  `ctype` enum('document','asset','object') DEFAULT NULL,
  `date` bigint(20) unsigned DEFAULT NULL,
  `action` enum('publish','unpublish','delete','publish-version') DEFAULT NULL,
  `version` bigint(20) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `ctype` (`ctype`),
  KEY `active` (`active`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedule_tasks`
--

LOCK TABLES `schedule_tasks` WRITE;
/*!40000 ALTER TABLE `schedule_tasks` DISABLE KEYS */;
/*!40000 ALTER TABLE `schedule_tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `search_backend_data`
--

DROP TABLE IF EXISTS `search_backend_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `search_backend_data` (
  `id` int(11) NOT NULL,
  `fullpath` varchar(765) CHARACTER SET ascii DEFAULT NULL,
  `maintype` varchar(8) NOT NULL DEFAULT '',
  `type` varchar(20) DEFAULT NULL,
  `subtype` varchar(255) DEFAULT NULL,
  `published` bigint(20) DEFAULT NULL,
  `creationDate` bigint(20) DEFAULT NULL,
  `modificationDate` bigint(20) DEFAULT NULL,
  `userOwner` int(11) DEFAULT NULL,
  `userModification` int(11) DEFAULT NULL,
  `data` longtext,
  `properties` text,
  PRIMARY KEY (`id`,`maintype`),
  KEY `id` (`id`),
  KEY `fullpath` (`fullpath`),
  KEY `maintype` (`maintype`),
  KEY `type` (`type`),
  KEY `subtype` (`subtype`),
  KEY `published` (`published`),
  FULLTEXT KEY `data` (`data`),
  FULLTEXT KEY `properties` (`properties`),
  FULLTEXT KEY `fulltext` (`data`,`properties`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `search_backend_data`
--

LOCK TABLES `search_backend_data` WRITE;
/*!40000 ALTER TABLE `search_backend_data` DISABLE KEYS */;
INSERT INTO `search_backend_data` VALUES (2,'/trainers/tonyhorton_trainer_thumb_540x672_umumne.png','asset','image','image',1,1456148458,1456148779,2,2,'ID: 2  \nPath: /trainers/tonyhorton_trainer_thumb_540x672_umumne.png  \ntonyhorton_trainer_thumb_540x672_umumne.png',''),(3,'/trainers/autumncalabrese_trainer_thumb_540x672_ywzsch.png','asset','image','image',1,1456148509,1456148755,2,2,'ID: 3  \nPath: /trainers/autumncalabrese_trainer_thumb_540x672_ywzsch.png  \nautumncalabrese_trainer_thumb_540x672_ywzsch.png',''),(4,'/trainers/shaunt_trainer_thumb_540x672_o904mj.png','asset','image','image',1,1456148531,1456148775,2,2,'ID: 4  \nPath: /trainers/shaunt_trainer_thumb_540x672_o904mj.png  \nshaunt_trainer_thumb_540x672_o904mj.png',''),(5,'/trainers/chalenejohnson_trainer_thumb_540x672_s1tewm.png','asset','image','image',1,1456148556,1456148759,2,2,'ID: 5  \nPath: /trainers/chalenejohnson_trainer_thumb_540x672_s1tewm.png  \nchalenejohnson_trainer_thumb_540x672_s1tewm.png',''),(6,'/trainers/sagikalev_trainer_thumb_540x672_av9rr5.png','asset','image','image',1,1456148572,1456148773,2,2,'ID: 6  \nPath: /trainers/sagikalev_trainer_thumb_540x672_av9rr5.png  \nsagikalev_trainer_thumb_540x672_av9rr5.png',''),(7,'/trainers/homepage_trainers_jericho_20160119.png','asset','image','image',1,1456148586,1456148763,2,2,'ID: 7  \nPath: /trainers/homepage_trainers_jericho_20160119.png  \nhomepage_trainers_jericho_20160119.png',''),(8,'/trainers/homepage_trainers_joel_20160119.png','asset','image','image',1,1456148604,1456148764,2,2,'ID: 8  \nPath: /trainers/homepage_trainers_joel_20160119.png  \nhomepage_trainers_joel_20160119.png',''),(9,'/trainers/leandrocarvalho_trainer_thumb_540x672_q57ilk.png','asset','image','image',1,1456148670,1456148768,2,2,'ID: 9  \nPath: /trainers/leandrocarvalho_trainer_thumb_540x672_q57ilk.png  \nleandrocarvalho_trainer_thumb_540x672_q57ilk.png',''),(10,'/trainers/debbiesiebers_trainer_thumb_540x672_gf1c96.png','asset','image','image',1,1456148683,1456148761,2,2,'ID: 10  \nPath: /trainers/debbiesiebers_trainer_thumb_540x672_gf1c96.png  \ndebbiesiebers_trainer_thumb_540x672_gf1c96.png',''),(11,'/trainers/bretthoebel_540x672_notype_aqygqn.png','asset','image','image',1,1456148698,1456148757,2,2,'ID: 11  \nPath: /trainers/bretthoebel_540x672_notype_aqygqn.png  \nbretthoebel_540x672_notype_aqygqn.png',''),(12,'/trainers/markcheng_540x672_notype_2_e8ma7b.png','asset','image','image',1,1456148713,1456148770,2,2,'ID: 12  \nPath: /trainers/markcheng_540x672_notype_2_e8ma7b.png  \nmarkcheng_540x672_notype_2_e8ma7b.png',''),(13,'/trainers/teigh_gillian_trainer_image_clean_540x672_mmq0zh.png','asset','image','image',1,1456148728,1456148777,2,2,'ID: 13  \nPath: /trainers/teigh_gillian_trainer_image_clean_540x672_mmq0zh.png  \nteigh_gillian_trainer_image_clean_540x672_mmq0zh.png',''),(14,'/trainers/kathysmith_trainer_image_clean_540x672_puseho.png','asset','image','image',1,1456148741,1456148766,2,2,'ID: 14  \nPath: /trainers/kathysmith_trainer_image_clean_540x672_puseho.png  \nkathysmith_trainer_image_clean_540x672_puseho.png',''),(15,'/trainers','asset','folder','folder',1,1456148752,1456148752,2,2,'ID: 15  \nPath: /trainers  \ntrainers',''),(2,'/trainers','object','folder','folder',1,1456148989,1456148989,2,2,'ID: 2  \nPath: /trainers  \ntrainers',''),(3,'/trainers/tonyhorton','object','object','trainer',1,1456149017,1456150592,2,2,'ID: 3  \nPath: /trainers/tonyhorton  \nTony Horton /trainers/tonyhorton_trainer_thumb_540x672_umumne.png 1 ',''),(4,'/trainers/autumuncalabrese','object','object','trainer',1,1456150638,1456150660,2,2,'ID: 4  \nPath: /trainers/autumuncalabrese  \nAutumun Calabrese /trainers/autumncalabrese_trainer_thumb_540x672_ywzsch.png 1 ',''),(5,'/trainers/shaunt','object','object','trainer',1,1456150698,1456150738,2,2,'ID: 5  \nPath: /trainers/shaunt  \nShaun T /trainers/shaunt_trainer_thumb_540x672_o904mj.png 1 ',''),(6,'/programs','object','folder','folder',1,1456150749,1456150749,2,2,'ID: 6  \nPath: /programs  \nprograms',''),(16,'/programs','asset','folder','folder',1,1456150760,1456150760,2,2,'ID: 16  \nPath: /programs  \nprograms',''),(17,'/programs/autumn_bodexclusives_boxart.jpg','asset','image','image',1,1456150964,1456150964,2,2,'ID: 17  \nPath: /programs/autumn_bodexclusives_boxart.jpg  \nautumn_bodexclusives_boxart.jpg',''),(18,'/programs/tony_bodexclusives_boxart.jpg','asset','image','image',1,1456150998,1456150998,2,2,'ID: 18  \nPath: /programs/tony_bodexclusives_boxart.jpg  \ntony_bodexclusives_boxart.jpg',''),(19,'/programs/sagi_bodexclusives_boxart.jpg','asset','image','image',1,1456151041,1456151041,2,2,'ID: 19  \nPath: /programs/sagi_bodexclusives_boxart.jpg  \nsagi_bodexclusives_boxart.jpg',''),(20,'/programs/san_boxart_20150308.jpg','asset','image','image',1,1456151074,1456151074,2,2,'ID: 20  \nPath: /programs/san_boxart_20150308.jpg  \nsan_boxart_20150308.jpg',''),(21,'/programs/insanity_asylum_v1_program_boxart_540x672_emmmp1.jpg','asset','image','image',1,1456151108,1456151108,2,2,'ID: 21  \nPath: /programs/insanity_asylum_v1_program_boxart_540x672_emmmp1.jpg  \ninsanity_asylum_v1_program_boxart_540x672_emmmp1.jpg',''),(7,'/programs/cize','object','object','program',0,1456201517,1456202249,2,2,'ID: 7  \nPath: /programs/cize  \n/trainers/shaunt Cize The End Of Exercise This is Premium Program. Add CIZE to your member library for only $29.95 USD. You will have unlimited streaming access to the program for as long as you’re a Beachbody on Demand member! Purchase not available for UK customers. /programs/cz_program_boxart_20150715.jpg ',''),(22,'/programs/cz_program_boxart_20150715.jpg','asset','image','image',1,1456202226,1456202226,2,2,'ID: 22  \nPath: /programs/cz_program_boxart_20150715.jpg  \ncz_program_boxart_20150715.jpg','');
/*!40000 ALTER TABLE `search_backend_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sites`
--

DROP TABLE IF EXISTS `sites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sites` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `mainDomain` varchar(255) DEFAULT NULL,
  `domains` text,
  `rootId` int(11) unsigned DEFAULT NULL,
  `errorDocument` varchar(255) DEFAULT NULL,
  `redirectToMainDomain` tinyint(1) DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT '0',
  `modificationDate` bigint(20) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `rootId` (`rootId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sites`
--

LOCK TABLES `sites` WRITE;
/*!40000 ALTER TABLE `sites` DISABLE KEYS */;
/*!40000 ALTER TABLE `sites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staticroutes`
--

DROP TABLE IF EXISTS `staticroutes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staticroutes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `pattern` varchar(255) DEFAULT NULL,
  `reverse` varchar(255) DEFAULT NULL,
  `module` varchar(255) DEFAULT NULL,
  `controller` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `variables` varchar(255) DEFAULT NULL,
  `defaults` varchar(255) DEFAULT NULL,
  `siteId` int(11) DEFAULT NULL,
  `priority` int(3) DEFAULT '0',
  `creationDate` bigint(20) unsigned DEFAULT '0',
  `modificationDate` bigint(20) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `priority` (`priority`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staticroutes`
--

LOCK TABLES `staticroutes` WRITE;
/*!40000 ALTER TABLE `staticroutes` DISABLE KEYS */;
/*!40000 ALTER TABLE `staticroutes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `targeting_personas`
--

DROP TABLE IF EXISTS `targeting_personas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `targeting_personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `conditions` longtext,
  `threshold` int(11) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `targeting_personas`
--

LOCK TABLES `targeting_personas` WRITE;
/*!40000 ALTER TABLE `targeting_personas` DISABLE KEYS */;
/*!40000 ALTER TABLE `targeting_personas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `targeting_rules`
--

DROP TABLE IF EXISTS `targeting_rules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `targeting_rules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `scope` varchar(50) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `conditions` longtext,
  `actions` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `targeting_rules`
--

LOCK TABLES `targeting_rules` WRITE;
/*!40000 ALTER TABLE `targeting_rules` DISABLE KEYS */;
/*!40000 ALTER TABLE `targeting_rules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tmp_store`
--

DROP TABLE IF EXISTS `tmp_store`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tmp_store` (
  `id` varchar(255) NOT NULL DEFAULT '',
  `tag` varchar(255) DEFAULT NULL,
  `data` longtext,
  `serialized` tinyint(2) NOT NULL DEFAULT '0',
  `date` int(10) DEFAULT NULL,
  `expiryDate` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tag` (`tag`),
  KEY `date` (`date`),
  KEY `expiryDate` (`expiryDate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmp_store`
--

LOCK TABLES `tmp_store` WRITE;
/*!40000 ALTER TABLE `tmp_store` DISABLE KEYS */;
/*!40000 ALTER TABLE `tmp_store` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tracking_events`
--

DROP TABLE IF EXISTS `tracking_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tracking_events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  `timestamp` bigint(20) unsigned DEFAULT NULL,
  `year` int(5) unsigned DEFAULT NULL,
  `month` int(2) unsigned DEFAULT NULL,
  `day` int(2) unsigned DEFAULT NULL,
  `dayOfWeek` int(1) unsigned DEFAULT NULL,
  `dayOfYear` int(3) unsigned DEFAULT NULL,
  `weekOfYear` int(2) unsigned DEFAULT NULL,
  `hour` int(2) unsigned DEFAULT NULL,
  `minute` int(2) unsigned DEFAULT NULL,
  `second` int(2) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `timestamp` (`timestamp`),
  KEY `year` (`year`),
  KEY `month` (`month`),
  KEY `day` (`day`),
  KEY `dayOfWeek` (`dayOfWeek`),
  KEY `dayOfYear` (`dayOfYear`),
  KEY `weekOfYear` (`weekOfYear`),
  KEY `hour` (`hour`),
  KEY `minute` (`minute`),
  KEY `second` (`second`),
  KEY `category` (`category`),
  KEY `action` (`action`),
  KEY `label` (`label`),
  KEY `data` (`data`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tracking_events`
--

LOCK TABLES `tracking_events` WRITE;
/*!40000 ALTER TABLE `tracking_events` DISABLE KEYS */;
/*!40000 ALTER TABLE `tracking_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations_admin`
--

DROP TABLE IF EXISTS `translations_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `translations_admin` (
  `key` varchar(255) NOT NULL DEFAULT '',
  `language` varchar(10) NOT NULL DEFAULT '',
  `text` text,
  `creationDate` bigint(20) unsigned DEFAULT NULL,
  `modificationDate` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`key`,`language`),
  KEY `language` (`language`),
  KEY `key` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations_admin`
--

LOCK TABLES `translations_admin` WRITE;
/*!40000 ALTER TABLE `translations_admin` DISABLE KEYS */;
INSERT INTO `translations_admin` VALUES ('master','ca','',1456149040,1456149040),('master','cs','',1456149040,1456149040),('master','de','',1456149040,1456149040),('master','en','',1456149040,1456149040),('master','es','',1456149040,1456149040),('master','fa','',1456149040,1456149040),('master','fr','',1456149040,1456149040),('master','it','',1456149040,1456149040),('master','ja','',1456149040,1456149040),('master','nl','',1456149040,1456149040),('master','pl','',1456149040,1456149040),('master','pt','',1456149040,1456149040),('master','pt_BR','',1456149040,1456149040),('master','ru','',1456149040,1456149040),('master','sk','',1456149040,1456149040),('master','sv','',1456149040,1456149040),('master','tr','',1456149040,1456149040),('master','uk','',1456149040,1456149040),('master','zh_Hans','',1456149040,1456149040),('master (admin mode)','ca','',1456149039,1456149039),('master (admin mode)','cs','',1456149039,1456149039),('master (admin mode)','de','',1456149039,1456149039),('master (admin mode)','en','',1456149039,1456149039),('master (admin mode)','es','',1456149039,1456149039),('master (admin mode)','fa','',1456149039,1456149039),('master (admin mode)','fr','',1456149039,1456149039),('master (admin mode)','it','',1456149039,1456149039),('master (admin mode)','ja','',1456149039,1456149039),('master (admin mode)','nl','',1456149039,1456149039),('master (admin mode)','pl','',1456149039,1456149039),('master (admin mode)','pt','',1456149039,1456149039),('master (admin mode)','pt_BR','',1456149039,1456149039),('master (admin mode)','ru','',1456149039,1456149039),('master (admin mode)','sk','',1456149039,1456149039),('master (admin mode)','sv','',1456149039,1456149039),('master (admin mode)','tr','',1456149039,1456149039),('master (admin mode)','uk','',1456149039,1456149039),('master (admin mode)','zh_Hans','',1456149039,1456149039),('program','ca','',1456141329,1456141329),('program','cs','',1456141329,1456141329),('program','de','',1456141329,1456141329),('program','en','',1456141329,1456141329),('program','es','',1456141329,1456141329),('program','fa','',1456141329,1456141329),('program','fr','',1456141329,1456141329),('program','it','',1456141329,1456141329),('program','ja','',1456141329,1456141329),('program','nl','',1456141329,1456141329),('program','pl','',1456141329,1456141329),('program','pt','',1456141329,1456141329),('program','pt_BR','',1456141329,1456141329),('program','ru','',1456141329,1456141329),('program','sk','',1456141329,1456141329),('program','sv','',1456141329,1456141329),('program','tr','',1456141329,1456141329),('program','uk','',1456141329,1456141329),('program','zh_Hans','',1456141329,1456141329),('program active','ca','',1456201544,1456201544),('program active','cs','',1456201544,1456201544),('program active','de','',1456201544,1456201544),('program active','en','',1456201544,1456201544),('program active','es','',1456201544,1456201544),('program active','fa','',1456201544,1456201544),('program active','fr','',1456201544,1456201544),('program active','it','',1456201544,1456201544),('program active','ja','',1456201544,1456201544),('program active','nl','',1456201544,1456201544),('program active','pl','',1456201544,1456201544),('program active','pt','',1456201544,1456201544),('program active','pt_BR','',1456201544,1456201544),('program active','ru','',1456201544,1456201544),('program active','sk','',1456201544,1456201544),('program active','sv','',1456201544,1456201544),('program active','tr','',1456201544,1456201544),('program active','uk','',1456201544,1456201544),('program active','zh_Hans','',1456201544,1456201544),('program description','ca','',1456201541,1456201541),('program description','cs','',1456201541,1456201541),('program description','de','',1456201541,1456201541),('program description','en','',1456201541,1456201541),('program description','es','',1456201541,1456201541),('program description','fa','',1456201541,1456201541),('program description','fr','',1456201541,1456201541),('program description','it','',1456201541,1456201541),('program description','ja','',1456201541,1456201541),('program description','nl','',1456201541,1456201541),('program description','pl','',1456201541,1456201541),('program description','pt','',1456201541,1456201541),('program description','pt_BR','',1456201541,1456201541),('program description','ru','',1456201541,1456201541),('program description','sk','',1456201541,1456201541),('program description','sv','',1456201541,1456201541),('program description','tr','',1456201541,1456201541),('program description','uk','',1456201541,1456201541),('program description','zh_Hans','',1456201541,1456201541),('program features','ca','',1456201543,1456201543),('program features','cs','',1456201543,1456201543),('program features','de','',1456201543,1456201543),('program features','en','',1456201543,1456201543),('program features','es','',1456201543,1456201543),('program features','fa','',1456201543,1456201543),('program features','fr','',1456201543,1456201543),('program features','it','',1456201543,1456201543),('program features','ja','',1456201543,1456201543),('program features','nl','',1456201543,1456201543),('program features','pl','',1456201543,1456201543),('program features','pt','',1456201543,1456201543),('program features','pt_BR','',1456201543,1456201543),('program features','ru','',1456201543,1456201543),('program features','sk','',1456201543,1456201543),('program features','sv','',1456201543,1456201543),('program features','tr','',1456201543,1456201543),('program features','uk','',1456201543,1456201543),('program features','zh_Hans','',1456201543,1456201543),('program image','ca','',1456201541,1456201541),('program image','cs','',1456201541,1456201541),('program image','de','',1456201541,1456201541),('program image','en','',1456201541,1456201541),('program image','es','',1456201541,1456201541),('program image','fa','',1456201541,1456201541),('program image','fr','',1456201541,1456201541),('program image','it','',1456201541,1456201541),('program image','ja','',1456201541,1456201541),('program image','nl','',1456201541,1456201541),('program image','pl','',1456201541,1456201541),('program image','pt','',1456201541,1456201541),('program image','pt_BR','',1456201541,1456201541),('program image','ru','',1456201541,1456201541),('program image','sk','',1456201541,1456201541),('program image','sv','',1456201541,1456201541),('program image','tr','',1456201541,1456201541),('program image','uk','',1456201541,1456201541),('program image','zh_Hans','',1456201541,1456201541),('program name','ca','',1456201540,1456201540),('program name','cs','',1456201540,1456201540),('program name','de','',1456201540,1456201540),('program name','en','',1456201540,1456201540),('program name','es','',1456201540,1456201540),('program name','fa','',1456201540,1456201540),('program name','fr','',1456201540,1456201540),('program name','it','',1456201540,1456201540),('program name','ja','',1456201540,1456201540),('program name','nl','',1456201540,1456201540),('program name','pl','',1456201540,1456201540),('program name','pt','',1456201540,1456201540),('program name','pt_BR','',1456201540,1456201540),('program name','ru','',1456201540,1456201540),('program name','sk','',1456201540,1456201540),('program name','sv','',1456201540,1456201540),('program name','tr','',1456201540,1456201540),('program name','uk','',1456201540,1456201540),('program name','zh_Hans','',1456201540,1456201540),('program type','ca','',1456201542,1456201542),('program type','cs','',1456201542,1456201542),('program type','de','',1456201542,1456201542),('program type','en','',1456201542,1456201542),('program type','es','',1456201542,1456201542),('program type','fa','',1456201542,1456201542),('program type','fr','',1456201542,1456201542),('program type','it','',1456201542,1456201542),('program type','ja','',1456201542,1456201542),('program type','nl','',1456201542,1456201542),('program type','pl','',1456201542,1456201542),('program type','pt','',1456201542,1456201542),('program type','pt_BR','',1456201542,1456201542),('program type','ru','',1456201542,1456201542),('program type','sk','',1456201542,1456201542),('program type','sv','',1456201542,1456201542),('program type','tr','',1456201542,1456201542),('program type','uk','',1456201542,1456201542),('program type','zh_Hans','',1456201542,1456201542),('speciality','ca','',1456149041,1456149041),('speciality','cs','',1456149041,1456149041),('speciality','de','',1456149041,1456149041),('speciality','en','',1456149041,1456149041),('speciality','es','',1456149041,1456149041),('speciality','fa','',1456149041,1456149041),('speciality','fr','',1456149041,1456149041),('speciality','it','',1456149041,1456149041),('speciality','ja','',1456149041,1456149041),('speciality','nl','',1456149041,1456149041),('speciality','pl','',1456149041,1456149041),('speciality','pt','',1456149041,1456149041),('speciality','pt_BR','',1456149041,1456149041),('speciality','ru','',1456149041,1456149041),('speciality','sk','',1456149041,1456149041),('speciality','sv','',1456149041,1456149041),('speciality','tr','',1456149041,1456149041),('speciality','uk','',1456149041,1456149041),('speciality','zh_Hans','',1456149041,1456149041),('trainer','ca','',1456140819,1456140819),('trainer','cs','',1456140819,1456140819),('trainer','de','',1456140819,1456140819),('trainer','en','',1456140819,1456140819),('trainer','es','',1456140819,1456140819),('trainer','fa','',1456140819,1456140819),('trainer','fr','',1456140819,1456140819),('trainer','it','',1456140819,1456140819),('trainer','ja','',1456140819,1456140819),('trainer','nl','',1456140819,1456140819),('trainer','pl','',1456140819,1456140819),('trainer','pt','',1456140819,1456140819),('trainer','pt_BR','',1456140819,1456140819),('trainer','ru','',1456140819,1456140819),('trainer','sk','',1456140819,1456140819),('trainer','sv','',1456140819,1456140819),('trainer','tr','',1456140819,1456140819),('trainer','uk','',1456140819,1456140819),('trainer','zh_Hans','',1456140819,1456140819),('trainer active','ca','',1456149043,1456149043),('trainer active','cs','',1456149043,1456149043),('trainer active','de','',1456149043,1456149043),('trainer active','en','',1456149043,1456149043),('trainer active','es','',1456149043,1456149043),('trainer active','fa','',1456149043,1456149043),('trainer active','fr','',1456149043,1456149043),('trainer active','it','',1456149043,1456149043),('trainer active','ja','',1456149043,1456149043),('trainer active','nl','',1456149043,1456149043),('trainer active','pl','',1456149043,1456149043),('trainer active','pt','',1456149043,1456149043),('trainer active','pt_BR','',1456149043,1456149043),('trainer active','ru','',1456149043,1456149043),('trainer active','sk','',1456149043,1456149043),('trainer active','sv','',1456149043,1456149043),('trainer active','tr','',1456149043,1456149043),('trainer active','uk','',1456149043,1456149043),('trainer active','zh_Hans','',1456149043,1456149043),('trainer features','ca','',1456149042,1456149042),('trainer features','cs','',1456149042,1456149042),('trainer features','de','',1456149042,1456149042),('trainer features','en','',1456149042,1456149042),('trainer features','es','',1456149042,1456149042),('trainer features','fa','',1456149042,1456149042),('trainer features','fr','',1456149042,1456149042),('trainer features','it','',1456149042,1456149042),('trainer features','ja','',1456149042,1456149042),('trainer features','nl','',1456149042,1456149042),('trainer features','pl','',1456149042,1456149042),('trainer features','pt','',1456149042,1456149042),('trainer features','pt_BR','',1456149042,1456149042),('trainer features','ru','',1456149042,1456149042),('trainer features','sk','',1456149042,1456149042),('trainer features','sv','',1456149042,1456149042),('trainer features','tr','',1456149042,1456149042),('trainer features','uk','',1456149042,1456149042),('trainer features','zh_Hans','',1456149042,1456149042),('trainer first name','ca','',1456150449,1456150449),('trainer first name','cs','',1456150449,1456150449),('trainer first name','de','',1456150449,1456150449),('trainer first name','en','',1456150449,1456150449),('trainer first name','es','',1456150449,1456150449),('trainer first name','fa','',1456150449,1456150449),('trainer first name','fr','',1456150449,1456150449),('trainer first name','it','',1456150449,1456150449),('trainer first name','ja','',1456150449,1456150449),('trainer first name','nl','',1456150449,1456150449),('trainer first name','pl','',1456150449,1456150449),('trainer first name','pt','',1456150449,1456150449),('trainer first name','pt_BR','',1456150449,1456150449),('trainer first name','ru','',1456150449,1456150449),('trainer first name','sk','',1456150449,1456150449),('trainer first name','sv','',1456150449,1456150449),('trainer first name','tr','',1456150449,1456150449),('trainer first name','uk','',1456150449,1456150449),('trainer first name','zh_Hans','',1456150449,1456150449),('trainer id for program','ca','',1456201539,1456201539),('trainer id for program','cs','',1456201539,1456201539),('trainer id for program','de','',1456201539,1456201539),('trainer id for program','en','',1456201539,1456201539),('trainer id for program','es','',1456201539,1456201539),('trainer id for program','fa','',1456201539,1456201539),('trainer id for program','fr','',1456201539,1456201539),('trainer id for program','it','',1456201539,1456201539),('trainer id for program','ja','',1456201539,1456201539),('trainer id for program','nl','',1456201539,1456201539),('trainer id for program','pl','',1456201539,1456201539),('trainer id for program','pt','',1456201539,1456201539),('trainer id for program','pt_BR','',1456201539,1456201539),('trainer id for program','ru','',1456201539,1456201539),('trainer id for program','sk','',1456201539,1456201539),('trainer id for program','sv','',1456201539,1456201539),('trainer id for program','tr','',1456201539,1456201539),('trainer id for program','uk','',1456201539,1456201539),('trainer id for program','zh_Hans','',1456201539,1456201539),('trainer image','ca','',1456149042,1456149042),('trainer image','cs','',1456149042,1456149042),('trainer image','de','',1456149042,1456149042),('trainer image','en','',1456149042,1456149042),('trainer image','es','',1456149042,1456149042),('trainer image','fa','',1456149042,1456149042),('trainer image','fr','',1456149042,1456149042),('trainer image','it','',1456149042,1456149042),('trainer image','ja','',1456149042,1456149042),('trainer image','nl','',1456149042,1456149042),('trainer image','pl','',1456149042,1456149042),('trainer image','pt','',1456149042,1456149042),('trainer image','pt_BR','',1456149042,1456149042),('trainer image','ru','',1456149042,1456149042),('trainer image','sk','',1456149042,1456149042),('trainer image','sv','',1456149042,1456149042),('trainer image','tr','',1456149042,1456149042),('trainer image','uk','',1456149042,1456149042),('trainer image','zh_Hans','',1456149042,1456149042),('trainer last name','ca','',1456150450,1456150450),('trainer last name','cs','',1456150450,1456150450),('trainer last name','de','',1456150450,1456150450),('trainer last name','en','',1456150450,1456150450),('trainer last name','es','',1456150450,1456150450),('trainer last name','fa','',1456150450,1456150450),('trainer last name','fr','',1456150450,1456150450),('trainer last name','it','',1456150450,1456150450),('trainer last name','ja','',1456150450,1456150450),('trainer last name','nl','',1456150450,1456150450),('trainer last name','pl','',1456150450,1456150450),('trainer last name','pt','',1456150450,1456150450),('trainer last name','pt_BR','',1456150450,1456150450),('trainer last name','ru','',1456150450,1456150450),('trainer last name','sk','',1456150450,1456150450),('trainer last name','sv','',1456150450,1456150450),('trainer last name','tr','',1456150450,1456150450),('trainer last name','uk','',1456150450,1456150450),('trainer last name','zh_Hans','',1456150450,1456150450),('trainer name','ca','',1456149040,1456149040),('trainer name','cs','',1456149040,1456149040),('trainer name','de','',1456149040,1456149040),('trainer name','en','',1456149040,1456149040),('trainer name','es','',1456149040,1456149040),('trainer name','fa','',1456149040,1456149040),('trainer name','fr','',1456149040,1456149040),('trainer name','it','',1456149040,1456149040),('trainer name','ja','',1456149040,1456149040),('trainer name','nl','',1456149040,1456149040),('trainer name','pl','',1456149040,1456149040),('trainer name','pt','',1456149040,1456149040),('trainer name','pt_BR','',1456149040,1456149040),('trainer name','ru','',1456149040,1456149040),('trainer name','sk','',1456149040,1456149040),('trainer name','sv','',1456149040,1456149040),('trainer name','tr','',1456149040,1456149040),('trainer name','uk','',1456149040,1456149040),('trainer name','zh_Hans','',1456149040,1456149040),('workout','ca','',1456143009,1456143009),('workout','cs','',1456143009,1456143009),('workout','de','',1456143009,1456143009),('workout','en','',1456143009,1456143009),('workout','es','',1456143009,1456143009),('workout','fa','',1456143009,1456143009),('workout','fr','',1456143009,1456143009),('workout','it','',1456143009,1456143009),('workout','ja','',1456143009,1456143009),('workout','nl','',1456143009,1456143009),('workout','pl','',1456143009,1456143009),('workout','pt','',1456143009,1456143009),('workout','pt_BR','',1456143009,1456143009),('workout','ru','',1456143009,1456143009),('workout','sk','',1456143009,1456143009),('workout','sv','',1456143009,1456143009),('workout','tr','',1456143009,1456143009),('workout','uk','',1456143009,1456143009),('workout','zh_Hans','',1456143009,1456143009),('workoutgroup','ca','',1456142709,1456142709),('workoutgroup','cs','',1456142709,1456142709),('workoutgroup','de','',1456142709,1456142709),('workoutgroup','en','',1456142709,1456142709),('workoutgroup','es','',1456142709,1456142709),('workoutgroup','fa','',1456142709,1456142709),('workoutgroup','fr','',1456142709,1456142709),('workoutgroup','it','',1456142709,1456142709),('workoutgroup','ja','',1456142709,1456142709),('workoutgroup','nl','',1456142709,1456142709),('workoutgroup','pl','',1456142709,1456142709),('workoutgroup','pt','',1456142709,1456142709),('workoutgroup','pt_BR','',1456142709,1456142709),('workoutgroup','ru','',1456142709,1456142709),('workoutgroup','sk','',1456142709,1456142709),('workoutgroup','sv','',1456142709,1456142709),('workoutgroup','tr','',1456142709,1456142709),('workoutgroup','uk','',1456142709,1456142709),('workoutgroup','zh_Hans','',1456142709,1456142709);
/*!40000 ALTER TABLE `translations_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations_website`
--

DROP TABLE IF EXISTS `translations_website`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `translations_website` (
  `key` varchar(255) NOT NULL DEFAULT '',
  `language` varchar(10) NOT NULL DEFAULT '',
  `text` text,
  `creationDate` bigint(20) unsigned DEFAULT NULL,
  `modificationDate` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`key`,`language`),
  KEY `language` (`language`),
  KEY `key` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations_website`
--

LOCK TABLES `translations_website` WRITE;
/*!40000 ALTER TABLE `translations_website` DISABLE KEYS */;
/*!40000 ALTER TABLE `translations_website` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tree_locks`
--

DROP TABLE IF EXISTS `tree_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tree_locks` (
  `id` int(11) NOT NULL DEFAULT '0',
  `type` enum('asset','document','object') NOT NULL DEFAULT 'asset',
  `locked` enum('self','propagate') DEFAULT NULL,
  PRIMARY KEY (`id`,`type`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `locked` (`locked`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tree_locks`
--

LOCK TABLES `tree_locks` WRITE;
/*!40000 ALTER TABLE `tree_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `tree_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parentId` int(11) unsigned DEFAULT NULL,
  `type` enum('user','userfolder','role','rolefolder') NOT NULL DEFAULT 'user',
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `admin` tinyint(1) unsigned DEFAULT '0',
  `active` tinyint(1) unsigned DEFAULT '1',
  `permissions` varchar(1000) DEFAULT NULL,
  `roles` varchar(1000) DEFAULT NULL,
  `welcomescreen` tinyint(1) DEFAULT NULL,
  `closeWarning` tinyint(1) DEFAULT NULL,
  `memorizeTabs` tinyint(1) DEFAULT NULL,
  `docTypes` varchar(255) DEFAULT NULL,
  `classes` varchar(255) DEFAULT NULL,
  `apiKey` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `type_name` (`type`,`name`),
  KEY `parentId` (`parentId`),
  KEY `name` (`name`),
  KEY `password` (`password`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (0,0,'user','system',NULL,NULL,NULL,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,0,'user','admin','$2y$10$27SIPnDWmy8puaCSLYNk4uAUKr8AM8upa/TFhVvGPywNH61WBXB66',NULL,NULL,NULL,'en',1,1,'','',0,1,1,'','',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_permission_definitions`
--

DROP TABLE IF EXISTS `users_permission_definitions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_permission_definitions` (
  `key` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_permission_definitions`
--

LOCK TABLES `users_permission_definitions` WRITE;
/*!40000 ALTER TABLE `users_permission_definitions` DISABLE KEYS */;
INSERT INTO `users_permission_definitions` VALUES ('application_logging'),('assets'),('backup'),('classes'),('clear_cache'),('clear_temp_files'),('dashboards'),('documents'),('document_style_editor'),('document_types'),('emails'),('glossary'),('http_errors'),('newsletter'),('notes_events'),('objects'),('plugins'),('predefined_properties'),('qr_codes'),('recyclebin'),('redirects'),('reports'),('robots.txt'),('routes'),('seemode'),('seo_document_editor'),('system_settings'),('tag_snippet_management'),('targeting'),('thumbnails'),('translations'),('users'),('website_settings');
/*!40000 ALTER TABLE `users_permission_definitions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_workspaces_asset`
--

DROP TABLE IF EXISTS `users_workspaces_asset`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_workspaces_asset` (
  `cid` int(11) unsigned NOT NULL DEFAULT '0',
  `cpath` varchar(765) CHARACTER SET ascii DEFAULT NULL,
  `userId` int(11) NOT NULL DEFAULT '0',
  `list` tinyint(1) DEFAULT '0',
  `view` tinyint(1) DEFAULT '0',
  `publish` tinyint(1) DEFAULT '0',
  `delete` tinyint(1) DEFAULT '0',
  `rename` tinyint(1) DEFAULT '0',
  `create` tinyint(1) DEFAULT '0',
  `settings` tinyint(1) DEFAULT '0',
  `versions` tinyint(1) DEFAULT '0',
  `properties` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`cid`,`userId`),
  KEY `cid` (`cid`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_workspaces_asset`
--

LOCK TABLES `users_workspaces_asset` WRITE;
/*!40000 ALTER TABLE `users_workspaces_asset` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_workspaces_asset` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_workspaces_document`
--

DROP TABLE IF EXISTS `users_workspaces_document`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_workspaces_document` (
  `cid` int(11) unsigned NOT NULL DEFAULT '0',
  `cpath` varchar(765) CHARACTER SET ascii DEFAULT NULL,
  `userId` int(11) NOT NULL DEFAULT '0',
  `list` tinyint(1) unsigned DEFAULT '0',
  `view` tinyint(1) unsigned DEFAULT '0',
  `save` tinyint(1) unsigned DEFAULT '0',
  `publish` tinyint(1) unsigned DEFAULT '0',
  `unpublish` tinyint(1) unsigned DEFAULT '0',
  `delete` tinyint(1) unsigned DEFAULT '0',
  `rename` tinyint(1) unsigned DEFAULT '0',
  `create` tinyint(1) unsigned DEFAULT '0',
  `settings` tinyint(1) unsigned DEFAULT '0',
  `versions` tinyint(1) unsigned DEFAULT '0',
  `properties` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`cid`,`userId`),
  KEY `cid` (`cid`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_workspaces_document`
--

LOCK TABLES `users_workspaces_document` WRITE;
/*!40000 ALTER TABLE `users_workspaces_document` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_workspaces_document` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_workspaces_object`
--

DROP TABLE IF EXISTS `users_workspaces_object`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_workspaces_object` (
  `cid` int(11) unsigned NOT NULL DEFAULT '0',
  `cpath` varchar(765) CHARACTER SET ascii DEFAULT NULL,
  `userId` int(11) NOT NULL DEFAULT '0',
  `list` tinyint(1) unsigned DEFAULT '0',
  `view` tinyint(1) unsigned DEFAULT '0',
  `save` tinyint(1) unsigned DEFAULT '0',
  `publish` tinyint(1) unsigned DEFAULT '0',
  `unpublish` tinyint(1) unsigned DEFAULT '0',
  `delete` tinyint(1) unsigned DEFAULT '0',
  `rename` tinyint(1) unsigned DEFAULT '0',
  `create` tinyint(1) unsigned DEFAULT '0',
  `settings` tinyint(1) unsigned DEFAULT '0',
  `versions` tinyint(1) unsigned DEFAULT '0',
  `properties` tinyint(1) unsigned DEFAULT '0',
  `lEdit` text,
  `lView` text,
  `layouts` text,
  PRIMARY KEY (`cid`,`userId`),
  KEY `cid` (`cid`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_workspaces_object`
--

LOCK TABLES `users_workspaces_object` WRITE;
/*!40000 ALTER TABLE `users_workspaces_object` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_workspaces_object` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uuids`
--

DROP TABLE IF EXISTS `uuids`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uuids` (
  `uuid` char(36) NOT NULL,
  `itemId` bigint(20) unsigned NOT NULL,
  `type` varchar(25) NOT NULL,
  `instanceIdentifier` varchar(50) NOT NULL,
  PRIMARY KEY (`itemId`,`type`,`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uuids`
--

LOCK TABLES `uuids` WRITE;
/*!40000 ALTER TABLE `uuids` DISABLE KEYS */;
/*!40000 ALTER TABLE `uuids` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `versions`
--

DROP TABLE IF EXISTS `versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `versions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(11) unsigned DEFAULT NULL,
  `ctype` enum('document','asset','object') DEFAULT NULL,
  `userId` int(11) unsigned DEFAULT NULL,
  `note` text,
  `date` bigint(1) unsigned DEFAULT NULL,
  `public` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `serialized` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `ctype` (`ctype`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `versions`
--

LOCK TABLES `versions` WRITE;
/*!40000 ALTER TABLE `versions` DISABLE KEYS */;
INSERT INTO `versions` VALUES (1,2,'asset',2,NULL,1456148458,0,1),(2,3,'asset',2,NULL,1456148509,0,1),(3,4,'asset',2,NULL,1456148531,0,1),(4,5,'asset',2,NULL,1456148556,0,1),(5,6,'asset',2,NULL,1456148572,0,1),(6,7,'asset',2,NULL,1456148586,0,1),(7,8,'asset',2,NULL,1456148604,0,1),(8,9,'asset',2,NULL,1456148670,0,1),(9,10,'asset',2,NULL,1456148683,0,1),(10,11,'asset',2,NULL,1456148698,0,1),(11,12,'asset',2,NULL,1456148713,0,1),(12,13,'asset',2,NULL,1456148728,0,1),(13,14,'asset',2,NULL,1456148741,0,1),(14,3,'asset',2,NULL,1456148755,0,1),(15,11,'asset',2,NULL,1456148757,0,1),(16,5,'asset',2,NULL,1456148759,0,1),(17,10,'asset',2,NULL,1456148761,0,1),(18,7,'asset',2,NULL,1456148763,0,1),(19,8,'asset',2,NULL,1456148764,0,1),(20,14,'asset',2,NULL,1456148766,0,1),(21,9,'asset',2,NULL,1456148768,0,1),(22,12,'asset',2,NULL,1456148770,0,1),(23,6,'asset',2,NULL,1456148773,0,1),(24,4,'asset',2,NULL,1456148775,0,1),(25,13,'asset',2,NULL,1456148777,0,1),(26,2,'asset',2,NULL,1456148779,0,1),(27,3,'object',2,NULL,1456149017,0,1),(28,3,'object',2,NULL,1456150592,0,1),(29,4,'object',2,NULL,1456150638,0,1),(30,4,'object',2,NULL,1456150660,0,1),(31,5,'object',2,NULL,1456150698,0,1),(32,5,'object',2,NULL,1456150711,0,1),(33,5,'object',2,NULL,1456150738,0,1),(34,17,'asset',2,NULL,1456150964,0,1),(35,18,'asset',2,NULL,1456150998,0,1),(36,19,'asset',2,NULL,1456151041,0,1),(37,20,'asset',2,NULL,1456151074,0,1),(38,21,'asset',2,NULL,1456151108,0,1),(39,7,'object',2,NULL,1456201518,0,1),(40,7,'object',2,NULL,1456201556,0,1),(41,7,'object',2,NULL,1456202019,0,1),(42,22,'asset',2,NULL,1456202226,0,1),(43,7,'object',2,NULL,1456202249,0,1);
/*!40000 ALTER TABLE `versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `website_settings`
--

DROP TABLE IF EXISTS `website_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `website_settings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `type` enum('text','document','asset','object','bool') DEFAULT NULL,
  `data` text,
  `siteId` int(11) unsigned DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT '0',
  `modificationDate` bigint(20) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `siteId` (`siteId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `website_settings`
--

LOCK TABLES `website_settings` WRITE;
/*!40000 ALTER TABLE `website_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `website_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `object_1`
--

/*!50001 DROP TABLE IF EXISTS `object_1`*/;
/*!50001 DROP VIEW IF EXISTS `object_1`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `object_1` AS select `object_query_1`.`oo_id` AS `oo_id`,`object_query_1`.`oo_classId` AS `oo_classId`,`object_query_1`.`oo_className` AS `oo_className`,`object_query_1`.`speciality` AS `speciality`,`object_query_1`.`tfeatures` AS `tfeatures`,`object_query_1`.`timgage` AS `timgage`,`object_query_1`.`tactive` AS `tactive`,`object_query_1`.`tname` AS `tname`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_1` join `objects` on((`objects`.`o_id` = `object_query_1`.`oo_id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `object_2`
--

/*!50001 DROP TABLE IF EXISTS `object_2`*/;
/*!50001 DROP VIEW IF EXISTS `object_2`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `object_2` AS select `object_query_2`.`oo_id` AS `oo_id`,`object_query_2`.`oo_classId` AS `oo_classId`,`object_query_2`.`oo_className` AS `oo_className`,`object_query_2`.`trainerID` AS `trainerID`,`object_query_2`.`pname` AS `pname`,`object_query_2`.`pdesc` AS `pdesc`,`object_query_2`.`pimage` AS `pimage`,`object_query_2`.`ptype` AS `ptype`,`object_query_2`.`pfeatures` AS `pfeatures`,`object_query_2`.`pactive` AS `pactive`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_2` join `objects` on((`objects`.`o_id` = `object_query_2`.`oo_id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `object_3`
--

/*!50001 DROP TABLE IF EXISTS `object_3`*/;
/*!50001 DROP VIEW IF EXISTS `object_3`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `object_3` AS select `object_query_3`.`oo_id` AS `oo_id`,`object_query_3`.`oo_classId` AS `oo_classId`,`object_query_3`.`oo_className` AS `oo_className`,`object_query_3`.`programID` AS `programID`,`object_query_3`.`wgname` AS `wgname`,`object_query_3`.`wgactive` AS `wgactive`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_3` join `objects` on((`objects`.`o_id` = `object_query_3`.`oo_id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `object_4`
--

/*!50001 DROP TABLE IF EXISTS `object_4`*/;
/*!50001 DROP VIEW IF EXISTS `object_4`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `object_4` AS select `object_query_4`.`oo_id` AS `oo_id`,`object_query_4`.`oo_classId` AS `oo_classId`,`object_query_4`.`oo_className` AS `oo_className`,`object_query_4`.`workoutgroupID` AS `workoutgroupID`,`object_query_4`.`wname` AS `wname`,`object_query_4`.`wdesc` AS `wdesc`,`object_query_4`.`reqequipment` AS `reqequipment`,`object_query_4`.`recequipment` AS `recequipment`,`object_query_4`.`wtime` AS `wtime`,`object_query_4`.`wvideo` AS `wvideo`,`object_query_4`.`wactive` AS `wactive`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_4` join `objects` on((`objects`.`o_id` = `object_query_4`.`oo_id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-23 11:23:54
