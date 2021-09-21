-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: vikrammills
-- ------------------------------------------------------
-- Server version	8.0.25-0ubuntu0.20.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'admin','admin@gmail.com',NULL,'password',NULL,NULL);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (3,'Rice','2021-09-14 05:51:24','2021-09-14 07:46:02'),(4,'Atta','2021-09-14 13:16:34','2021-09-14 13:16:34'),(5,'Suji','2021-09-14 13:16:44','2021-09-14 13:16:44'),(6,'Maida','2021-09-14 13:16:50','2021-09-14 13:16:50'),(7,'Dalia','2021-09-14 13:17:07','2021-09-14 13:17:07');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_12_14_000001_create_personal_access_tokens_table',1),(2,'2021_09_14_184330_create_admins_table',1),(3,'2021_09_14_184330_create_categories_table',1),(4,'2021_09_14_184330_create_customers_table',1),(5,'2021_09_14_184330_create_failed_jobs_table',1),(6,'2021_09_14_184330_create_password_resets_table',1),(7,'2021_09_14_184330_create_products_table',1),(8,'2021_09_14_184330_create_sessions_table',1),(9,'2021_09_14_184330_create_testimonials_table',1),(10,'2021_09_14_184330_create_users_table',1),(11,'2021_09_14_185402_create_orders_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int NOT NULL,
  `payment_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'1','prashant','pending',100,'address','address','phonePay',NULL,'2021-09-14 15:03:52','2021-09-14 15:03:52'),(2,'1','prashant Singh','return',100,'address','address','phonePay',NULL,'2021-09-14 15:03:52','2021-09-14 15:03:52');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
INSERT INTO `personal_access_tokens` VALUES (1,'App\\Models\\User',1,'MyApp','01c5d2d6671c9b438c5842bbdea79a638bd170ca1ebc2912fd2ae97c468663bd','[\"*\"]',NULL,'2021-09-11 07:55:27','2021-09-11 07:55:27'),(2,'App\\Models\\User',1,'MyApp','c951c1a38ee4a93aab7ff968ecd1b80116298d051478ef4a60c157b912b2d179','[\"*\"]',NULL,'2021-09-11 07:55:54','2021-09-11 07:55:54'),(3,'App\\Models\\User',1,'MyApp','b76dcb784c28925906244bce021f59aadfe839acebb790fa49d59f8b840b2428','[\"*\"]',NULL,'2021-09-11 07:57:12','2021-09-11 07:57:12'),(4,'App\\Models\\User',1,'MyApp','7ac89bf90063011add69d35dabbe6cc568741bfb79cbe6716ab6672735c4df41','[\"*\"]',NULL,'2021-09-11 07:57:27','2021-09-11 07:57:27'),(5,'App\\Models\\User',1,'MyApp','67f5ebe04d547e02a1f40ff7c1964b8d05e748a5581d24633b4d6b7ea3e0c200','[\"*\"]',NULL,'2021-09-11 07:58:13','2021-09-11 07:58:13'),(6,'App\\Models\\User',1,'MyApp','fabc29a19859928d98484efbbee628824e426ef00c0a52c650896fde96486ecb','[\"*\"]',NULL,'2021-09-11 08:00:32','2021-09-11 08:00:32'),(7,'App\\Models\\User',1,'MyApp','41d3b375aff5ad0f52c9b847d2d324ed0c7f9d99fede728480c79157ff759632','[\"*\"]',NULL,'2021-09-11 08:01:31','2021-09-11 08:01:31'),(8,'App\\Models\\User',1,'MyApp','8eb0a37224e0ce8b8ec0917ebcc857b3b8aa326c6e5bb811b7bd8c3bad073793','[\"*\"]',NULL,'2021-09-11 09:13:07','2021-09-11 09:13:07'),(9,'App\\Models\\User',1,'MyApp','1b5b0bbf1d12439c2187a7f7c68747e95890e46490a1824d51230e616cbd0b18','[\"*\"]',NULL,'2021-09-11 09:29:08','2021-09-11 09:29:08'),(10,'App\\Models\\User',1,'MyApp','03c99459f7f39f6559f246fedb7b29ae0b1cd71b8f49735d87dd4dea2ef355c6','[\"*\"]',NULL,'2021-09-11 09:47:39','2021-09-11 09:47:39'),(11,'App\\Models\\User',1,'MyApp','9bc5dee170f8e16d50f45b44db1495f0bd36d6a842aa3234f2ea2e17cc547d11','[\"*\"]',NULL,'2021-09-11 09:52:34','2021-09-11 09:52:34'),(12,'App\\Models\\User',1,'MyApp','30bd9ae0d4df9efefad483183e74d94447acb381828089476af31a235fb1d8db','[\"*\"]',NULL,'2021-09-11 09:55:23','2021-09-11 09:55:23'),(13,'App\\Models\\User',1,'MyApp','08f690c4bba976a499401f0c4e1cf66f72318a9e63a9f17c1e0f95504021ee87','[\"*\"]',NULL,'2021-09-11 09:56:35','2021-09-11 09:56:35'),(14,'App\\Models\\User',1,'MyApp','1b222e631f13ea1597014269d18b8d16088538762876f912eecfab9744286b0f','[\"*\"]',NULL,'2021-09-11 10:11:09','2021-09-11 10:11:09'),(15,'App\\Models\\User',5,'MyApp','58d7cd50b1fd028acd7b5995dfaae6c26a23c3e659c2c73bbac90ccfeb81bb72','[\"*\"]',NULL,'2021-09-11 10:11:49','2021-09-11 10:11:49'),(16,'App\\Models\\User',1,'MyApp','049b386a191ed9853da89b444d6774bcd22dd31788cf9087d24b796178f578b3','[\"*\"]',NULL,'2021-09-11 11:00:15','2021-09-11 11:00:15'),(17,'App\\Models\\User',1,'MyApp','c03c48f2604effc0ff3691e95f27764b92b3b5cc0c104831115e68e9ef98d7df','[\"*\"]',NULL,'2021-09-13 02:33:12','2021-09-13 02:33:12'),(18,'App\\Models\\User',7,'MyApp','cf5699359a2841e7ecb9799d84ff656c95dffea4c89aa830aac83cd0a266dbcf','[\"*\"]',NULL,'2021-09-13 02:49:49','2021-09-13 02:49:49'),(19,'App\\Models\\User',1,'MyApp','7612cfb210894237c61413ada0ab7220bd1b2d15486af1f3220ec03b039a04b4','[\"*\"]',NULL,'2021-09-13 02:51:06','2021-09-13 02:51:06'),(20,'App\\Models\\User',1,'MyApp','aa080381b0c6cfd05f02167922165638271947d253d2992ba76f287e8e0e8d62','[\"*\"]',NULL,'2021-09-13 02:57:40','2021-09-13 02:57:40'),(21,'App\\Models\\User',10,'MyApp','c1b121cbba18ad08ee929b0375a9c51310394b316076a5197b4ca8baef099f51','[\"*\"]',NULL,'2021-09-13 05:46:20','2021-09-13 05:46:20'),(22,'App\\Models\\User',1,'MyApp','52d7d191a2b1f825fcec33dde3882d8707c625793ec4ba1e39fdda66afd9806f','[\"*\"]',NULL,'2021-09-13 06:25:50','2021-09-13 06:25:50'),(23,'App\\Models\\User',1,'MyApp','f5464c0ea58bd16eb2787e6b12e8e5e5833298ea163f2c8fd0d97e3f2bdaecc1','[\"*\"]',NULL,'2021-09-13 06:36:22','2021-09-13 06:36:22'),(24,'App\\Models\\User',1,'MyApp','3cc55923899dc9e9c1ff63ab15da66c9aa9fd71cd8cb627508e808b20c17736c','[\"*\"]',NULL,'2021-09-13 06:39:44','2021-09-13 06:39:44'),(25,'App\\Models\\User',11,'MyApp','b9715e93373376133844a8eb0cad3440fba9eb87a4071a4ec02c3aa1a3d4f58a','[\"*\"]',NULL,'2021-09-14 07:42:51','2021-09-14 07:42:51');
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int DEFAULT NULL,
  `discount` int DEFAULT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `more_description` text COLLATE utf8mb4_unicode_ci,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (9,'Maida',400,50,'product4.webp','1 KG','<p style=\"outline: none; -webkit-font-smoothing: antialiased; margin-bottom: 1.5em; color: rgb(0, 0, 0); hyphens: auto; font-family: calibri, serif; font-size: 18px;\">Processing of <b>V</b>ikram Mills fresh wheat flour or Atta begins with picking the best-quality wheat grains. Numerous quality checks, washing, and filtration ensure the cleanest wheat before stone grinding it. Our wheat flour is neither too coarse nor too fine, representing the best consistency required for wheat flour. Maida content in wheat flour is zero,<b> a</b>nd Vikram roller flour mills atta can be easily differentiated by its taste, softness, sweet aroma, and fluffiness.</p><ul style=\"outline: none; -webkit-font-smoothing: antialiased; padding-left: 20px; color: rgb(0, 0, 0); font-family: calibri, serif; font-size: 18px;\"><li style=\"outline: none; -webkit-font-smoothing: antialiased; margin-top: 1px;\">Baked items like Cakes, Biscuits, Muffins, PanCakes, etc.</li><li style=\"outline: none; -webkit-font-smoothing: antialiased; margin-top: 1px;\">Snacks like Samosa, Bhajiya, Jalebi, Spaghetti, Vermicelli, Macaroni, Pasta, etc.</li></ul>',NULL,'3',10,'1','2021-09-14 13:24:22','2021-09-14 16:23:59'),(12,'Dalia',479,50,'product2.webp','1 KG','<p style=\"outline: none; -webkit-font-smoothing: antialiased; margin-bottom: 1.5em; color: rgb(0, 0, 0); hyphens: auto; font-family: calibri, serif; font-size: 18px;\">Processing of Vikram Mills fresh wheat flour or Atta begins with picking the best-quality wheat grains. Numerous quality checks, washing, and filtration ensure the cleanest wheat before stone grinding it. Our wheat flour is neither too coarse nor too fine, representing the best consistency required for wheat flour. Maida content in wheat flour is zero, and Vikram roller flour mills atta can be easily differentiated by its taste, softness, sweet aroma, and fluffiness.</p><ul style=\"outline: none; -webkit-font-smoothing: antialiased; padding-left: 20px; color: rgb(0, 0, 0); font-family: calibri, serif; font-size: 18px;\"><li style=\"outline: none; -webkit-font-smoothing: antialiased; margin-top: 1px;\">Baked items like Cakes, Biscuits, Muffins, PanCakes, etc.</li><li style=\"outline: none; -webkit-font-smoothing: antialiased; margin-top: 1px;\">Snacks like Samosa, Bhajiya, Jalebi, Spaghetti, Vermicelli, Macaroni, Pasta, etc.</li></ul>','<h3 class=\"animated fadeIn\" style=\"outline: none; -webkit-font-smoothing: antialiased; margin-bottom: 15px; font-weight: 700; line-height: 1.3; font-size: 24px; clear: both; font-family: var(--ltn__heading-font); animation-name: fadeIn; animation-duration: 1s; animation-fill-mode: both;\"><span style=\"outline: none; -webkit-font-smoothing: antialiased; font-weight: bolder;\">Vikram Roller Flour Mills Types of Wheat Flour</span></h3><p style=\"outline: none; -webkit-font-smoothing: antialiased; margin-bottom: 1.5em; color: rgb(0, 0, 0); hyphens: auto; font-family: calibri, serif; font-size: 18px;\">At Vikram Roller Flour Mills we produce two major types of wheat flour (Atta);</p><p style=\"outline: none; -webkit-font-smoothing: antialiased; margin-bottom: 1.5em; color: rgb(0, 0, 0); hyphens: auto; font-family: calibri, serif; font-size: 18px;\"><span style=\"outline: none; -webkit-font-smoothing: antialiased; font-weight: bolder;\">Chakki Atta</span></p><p style=\"outline: none; -webkit-font-smoothing: antialiased; margin-bottom: 1.5em; color: rgb(0, 0, 0); hyphens: auto; font-family: calibri, serif; font-size: 18px;\">Vikram Mills Chakki atta contains higher bran and fiber content and is perfect to be used for Chapatis, Naans, Paranthas, and Pooris.</p><p style=\"outline: none; -webkit-font-smoothing: antialiased; margin-bottom: 1.5em; color: rgb(0, 0, 0); hyphens: auto; font-family: calibri, serif; font-size: 18px;\"><span style=\"outline: none; -webkit-font-smoothing: antialiased; font-weight: bolder;\">Mill Atta</span></p><p style=\"outline: none; -webkit-font-smoothing: antialiased; margin-bottom: 1.5em; color: rgb(0, 0, 0); hyphens: auto; font-family: calibri, serif; font-size: 18px;\">Our&nbsp;Mill Atta contains a lesser amount of fiber and bran, making it easier to digest and light on the diet.</p><p style=\"outline: none; -webkit-font-smoothing: antialiased; margin-bottom: 1.5em; color: rgb(0, 0, 0); hyphens: auto; font-family: calibri, serif; font-size: 18px;\"><span style=\"outline: none; -webkit-font-smoothing: antialiased; font-weight: bolder;\">Both the type of flours come in Branded and Non-branded packaging.</span></p>','7',12,'0','2021-09-14 16:07:21','2021-09-14 16:07:21'),(14,'Tandoor Atta',200,20,'tanduri.png','50','<p style=\"outline: none; -webkit-font-smoothing: antialiased; margin-bottom: 1.5em; color: rgb(0, 0, 0); hyphens: auto; font-family: calibri, serif; font-size: 18px;\">Processing of Vikram Mills fresh wheat flour or Atta begins with picking the best-quality wheat grains. Numerous quality checks, washing, and filtration ensure the cleanest wheat before stone grinding it. Our wheat flour is neither too coarse nor too fine, representing the best consistency required for wheat flour. Maida content in wheat flour is zero, and Vikram roller flour mills atta can be easily differentiated by its taste, softness, sweet aroma, and fluffiness.</p><ul style=\"outline: none; -webkit-font-smoothing: antialiased; padding-left: 20px; color: rgb(0, 0, 0); font-family: calibri, serif; font-size: 18px;\"><li style=\"outline: none; -webkit-font-smoothing: antialiased; margin-top: 1px;\">Baked items like Cakes, Biscuits, Muffins, PanCakes, etc.</li><li style=\"outline: none; -webkit-font-smoothing: antialiased; margin-top: 1px;\">Snacks like Samosa, Bhajiya, Jalebi, Spaghetti, Vermicelli, Macaroni, Pasta, etc.</li></ul>','<p><div class=\"ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2\" style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; color: rgb(0, 0, 0); font-family: calibri, serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"tab-content\" style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; width: 1170px;\"><div class=\"tab-pane fade active show\" style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; transition: opacity 0.15s linear 0s; display: block; height: auto; max-width: 100%; visibility: visible; overflow: visible; opacity: 1;\"></div></div></div></p><div class=\"ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2\" style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; color: rgb(0, 0, 0); font-family: calibri, serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"tab-content\" style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; width: 1170px;\"><div class=\"tab-pane fade active show\" style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; transition: opacity 0.15s linear 0s; display: block; height: auto; max-width: 100%; visibility: visible; overflow: visible; opacity: 1;\"><div class=\"ltn__shop-details-tab-content-inner\" style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; border: 0px; padding: 30px 0px 0px; background-color: transparent;\"><h3 class=\"animated fadeIn\" style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; margin-top: 0px; margin-bottom: 15px; font-weight: 700; line-height: 1.3; font-size: 24px; color: var(--ltn__heading-color); clear: both; font-family: var(--ltn__heading-font); animation-name: fadeIn; animation-duration: 1s; animation-fill-mode: both;\"><strong style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; font-weight: bolder;\">Vikram Roller Flour Mills Types of Wheat Flour</strong></h3><p style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; margin-top: 0px; margin-bottom: 1.5em; color: var(--ltn__paragraph-color); hyphens: auto;\">At Vikram Roller Flour Mills we produce two major types of wheat flour (Atta);</p><p style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; margin-top: 0px; margin-bottom: 1.5em; color: var(--ltn__paragraph-color); hyphens: auto;\"><strong style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; font-weight: bolder;\">Chakki Atta</strong></p><p style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; margin-top: 0px; margin-bottom: 1.5em; color: var(--ltn__paragraph-color); hyphens: auto;\">Vikram Mills Chakki atta contains higher bran and fiber content and is perfect to be used for Chapatis, Naans, Paranthas, and Pooris.</p><p style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; margin-top: 0px; margin-bottom: 1.5em; color: var(--ltn__paragraph-color); hyphens: auto;\"><strong style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; font-weight: bolder;\">Mill Atta</strong></p><p style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; margin-top: 0px; margin-bottom: 1.5em; color: var(--ltn__paragraph-color); hyphens: auto;\">Our&nbsp;Mill Atta contains a lesser amount of fiber and bran, making it easier to digest and light on the diet.</p><p style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; margin-top: 0px; margin-bottom: 1.5em; color: var(--ltn__paragraph-color); hyphens: auto;\"><strong style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; font-weight: bolder;\">Both the type of flours come in Branded and Non-branded packaging.</strong></p></div></div></div></div>','3',10,'1','2021-09-14 16:17:19','2021-09-14 16:23:36'),(15,'Sooji',80,10,'product3.webp','1 KG','<p style=\"outline: none; -webkit-font-smoothing: antialiased; margin-bottom: 1.5em; color: rgb(0, 0, 0); hyphens: auto; font-family: calibri, serif; font-size: 18px;\">Processing of Vikram Mills fresh wheat flour or Atta begins with picking the best-quality wheat grains. Numerous quality checks, washing, and filtration ensure the cleanest wheat before stone grinding it. Our wheat flour is neither too coarse nor too fine, representing the best consistency required for wheat flour. Maida content in wheat flour is zero, and Vikram roller flour mills atta can be easily differentiated by its taste, softness, sweet aroma, and fluffiness.</p><ul style=\"outline: none; -webkit-font-smoothing: antialiased; padding-left: 20px; color: rgb(0, 0, 0); font-family: calibri, serif; font-size: 18px;\"><li style=\"outline: none; -webkit-font-smoothing: antialiased; margin-top: 1px;\">Baked items like Cakes, Biscuits, Muffins, PanCakes, etc.</li><li style=\"outline: none; -webkit-font-smoothing: antialiased; margin-top: 1px;\">Snacks like Samosa, Bhajiya, Jalebi, Spaghetti, Vermicelli, Macaroni, Pasta, etc.</li></ul>','<p><div class=\"ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2\" style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; color: rgb(0, 0, 0); font-family: calibri, serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"tab-content\" style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; width: 1170px;\"><div class=\"tab-pane fade active show\" style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; transition: opacity 0.15s linear 0s; display: block; height: auto; max-width: 100%; visibility: visible; overflow: visible; opacity: 1;\"></div></div></div></p><div class=\"ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2\" style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; color: rgb(0, 0, 0); font-family: calibri, serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"tab-content\" style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; width: 1170px;\"><div class=\"tab-pane fade active show\" style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; transition: opacity 0.15s linear 0s; display: block; height: auto; max-width: 100%; visibility: visible; overflow: visible; opacity: 1;\"><div class=\"ltn__shop-details-tab-content-inner\" style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; border: 0px; padding: 30px 0px 0px; background-color: transparent;\"><h3 class=\"animated fadeIn\" style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; margin-top: 0px; margin-bottom: 15px; font-weight: 700; line-height: 1.3; font-size: 24px; color: var(--ltn__heading-color); clear: both; font-family: var(--ltn__heading-font); animation-name: fadeIn; animation-duration: 1s; animation-fill-mode: both;\"><strong style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; font-weight: bolder;\">Vikram Roller Flour Mills Types of Wheat Flour</strong></h3><p style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; margin-top: 0px; margin-bottom: 1.5em; color: var(--ltn__paragraph-color); hyphens: auto;\">At Vikram Roller Flour Mills we produce two major types of wheat flour (Atta);</p><p style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; margin-top: 0px; margin-bottom: 1.5em; color: var(--ltn__paragraph-color); hyphens: auto;\"><strong style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; font-weight: bolder;\">Chakki Atta</strong></p><p style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; margin-top: 0px; margin-bottom: 1.5em; color: var(--ltn__paragraph-color); hyphens: auto;\">Vikram Mills Chakki atta contains higher bran and fiber content and is perfect to be used for Chapatis, Naans, Paranthas, and Pooris.</p><p style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; margin-top: 0px; margin-bottom: 1.5em; color: var(--ltn__paragraph-color); hyphens: auto;\"><strong style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; font-weight: bolder;\">Mill Atta</strong></p><p style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; margin-top: 0px; margin-bottom: 1.5em; color: var(--ltn__paragraph-color); hyphens: auto;\">Our&nbsp;Mill Atta contains a lesser amount of fiber and bran, making it easier to digest and light on the diet.</p><p style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; margin-top: 0px; margin-bottom: 1.5em; color: var(--ltn__paragraph-color); hyphens: auto;\"><strong style=\"box-sizing: border-box; outline: none; -webkit-font-smoothing: antialiased; font-weight: bolder;\">Both the type of flours come in Branded and Non-branded packaging.</strong></p></div></div></div></div>','5',15,'1','2021-09-14 16:25:09','2021-09-14 16:25:09');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('4q1IyC3ODiWE2ZsiK9FibZzuWfFfSpFywwKnVZZG',NULL,'127.0.0.1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiREVVU2huMnE2MEFZQ09GN3NtdTU1NzRDYjVieTJENkNWYjFma1VXcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9pbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NToiYWRtaW4iO086MTY6IkFwcFxNb2RlbHNcQWRtaW4iOjI4OntzOjEzOiIAKgBjb25uZWN0aW9uIjtzOjU6Im15c3FsIjtzOjg6IgAqAHRhYmxlIjtzOjY6ImFkbWlucyI7czoxMzoiACoAcHJpbWFyeUtleSI7czoyOiJpZCI7czoxMDoiACoAa2V5VHlwZSI7czozOiJpbnQiO3M6MTI6ImluY3JlbWVudGluZyI7YjoxO3M6NzoiACoAd2l0aCI7YTowOnt9czoxMjoiACoAd2l0aENvdW50IjthOjA6e31zOjE5OiJwcmV2ZW50c0xhenlMb2FkaW5nIjtiOjA7czoxMDoiACoAcGVyUGFnZSI7aToxNTtzOjY6ImV4aXN0cyI7YjoxO3M6MTg6Indhc1JlY2VudGx5Q3JlYXRlZCI7YjowO3M6MTM6IgAqAGF0dHJpYnV0ZXMiO2E6Nzp7czoyOiJpZCI7aToxO3M6NDoibmFtZSI7czo1OiJhZG1pbiI7czo1OiJlbWFpbCI7czoxNToiYWRtaW5AZ21haWwuY29tIjtzOjE3OiJlbWFpbF92ZXJpZmllZF9hdCI7TjtzOjg6InBhc3N3b3JkIjtzOjg6InBhc3N3b3JkIjtzOjEwOiJjcmVhdGVkX2F0IjtOO3M6MTA6InVwZGF0ZWRfYXQiO047fXM6MTE6IgAqAG9yaWdpbmFsIjthOjc6e3M6MjoiaWQiO2k6MTtzOjQ6Im5hbWUiO3M6NToiYWRtaW4iO3M6NToiZW1haWwiO3M6MTU6ImFkbWluQGdtYWlsLmNvbSI7czoxNzoiZW1haWxfdmVyaWZpZWRfYXQiO047czo4OiJwYXNzd29yZCI7czo4OiJwYXNzd29yZCI7czoxMDoiY3JlYXRlZF9hdCI7TjtzOjEwOiJ1cGRhdGVkX2F0IjtOO31zOjEwOiIAKgBjaGFuZ2VzIjthOjA6e31zOjg6IgAqAGNhc3RzIjthOjA6e31zOjE3OiIAKgBjbGFzc0Nhc3RDYWNoZSI7YTowOnt9czo4OiIAKgBkYXRlcyI7YTowOnt9czoxMzoiACoAZGF0ZUZvcm1hdCI7TjtzOjEwOiIAKgBhcHBlbmRzIjthOjA6e31zOjE5OiIAKgBkaXNwYXRjaGVzRXZlbnRzIjthOjA6e31zOjE0OiIAKgBvYnNlcnZhYmxlcyI7YTowOnt9czoxMjoiACoAcmVsYXRpb25zIjthOjA6e31zOjEwOiIAKgB0b3VjaGVzIjthOjA6e31zOjEwOiJ0aW1lc3RhbXBzIjtiOjE7czo5OiIAKgBoaWRkZW4iO2E6MDp7fXM6MTA6IgAqAHZpc2libGUiO2E6MDp7fXM6MTE6IgAqAGZpbGxhYmxlIjthOjA6e31zOjEwOiIAKgBndWFyZGVkIjthOjE6e2k6MDtzOjE6IioiO319fQ==',1631653019),('AJ8NVcUhFp3PVy2WaDWcskXKgUqoY6khZItqv9zv',NULL,'45.118.158.64','WhatsApp/2.2134.10 N','YTozOntzOjY6Il90b2tlbiI7czo0MDoieHlRVWVDd2FMNXpMUjBNOHBzc0FIS3o1UjZORk0zRlBVeVZ0SlN6RyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHA6Ly92aWtyYW1taWxscy53ZWJkZXZlbG9wbWVudGFnZW5jeS5pbi9hZG1pbi9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1631627406),('CYMEvjwHcGmtSJuJZvdRRgR2muYLu5nAlZ6OfLQC',NULL,'45.118.158.64','WhatsApp/2.2134.10 N','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWklwTXpja25icHpvSWtKUUtYUXl4bEh1MTRRUWxJSEpLWjJsQllUQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly92aWtyYW1taWxscy53ZWJkZXZlbG9wbWVudGFnZW5jeS5pbi9hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1631627398),('RKUaFSE86jvTvsAVQB7QNvpcKVnEvgoA0q2vpAiR',NULL,'106.223.52.210','Mozilla/5.0 (Linux; Android 9; Redmi Y2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Mobile Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoidXpaNHpraUlydXhLcXNyWHNwbVlyYndmTnpGNm9mYVFBdFNiOFpZUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHA6Ly92aWtyYW1taWxscy53ZWJkZXZlbG9wbWVudGFnZW5jeS5pbi9hZG1pbi9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1631635558),('rULdCCu6cNXxjZqgrJN26wm5JygNqA06mJICtlqI',NULL,'45.118.158.64','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZXRDMUp1ZXhhU0dkY2V6Q1BGY0lpZDVBTzNZY3h4dVBHeVQ1elhZdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly92aWtyYW1taWxscy53ZWJkZXZlbG9wbWVudGFnZW5jeS5pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1631636776),('S8lUPT4sfM83QLJWoG3lQQoB8zjbAWNFLLXl8TCe',NULL,'49.36.209.104','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoia2VobTZZT1RvamN2R1puRnZBWU5oTHN2UmFVWFpPYTZRR0VYa3FRRiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly92aWtyYW1taWxscy53ZWJkZXZlbG9wbWVudGFnZW5jeS5pbiI7fXM6NToiYWRtaW4iO086MTY6IkFwcFxNb2RlbHNcQWRtaW4iOjI4OntzOjEzOiIAKgBjb25uZWN0aW9uIjtzOjU6Im15c3FsIjtzOjg6IgAqAHRhYmxlIjtzOjY6ImFkbWlucyI7czoxMzoiACoAcHJpbWFyeUtleSI7czoyOiJpZCI7czoxMDoiACoAa2V5VHlwZSI7czozOiJpbnQiO3M6MTI6ImluY3JlbWVudGluZyI7YjoxO3M6NzoiACoAd2l0aCI7YTowOnt9czoxMjoiACoAd2l0aENvdW50IjthOjA6e31zOjE5OiJwcmV2ZW50c0xhenlMb2FkaW5nIjtiOjA7czoxMDoiACoAcGVyUGFnZSI7aToxNTtzOjY6ImV4aXN0cyI7YjoxO3M6MTg6Indhc1JlY2VudGx5Q3JlYXRlZCI7YjowO3M6MTM6IgAqAGF0dHJpYnV0ZXMiO2E6Nzp7czoyOiJpZCI7aToxO3M6NDoibmFtZSI7czo1OiJhZG1pbiI7czo1OiJlbWFpbCI7czoxNToiYWRtaW5AZ21haWwuY29tIjtzOjE3OiJlbWFpbF92ZXJpZmllZF9hdCI7TjtzOjg6InBhc3N3b3JkIjtzOjg6InBhc3N3b3JkIjtzOjEwOiJjcmVhdGVkX2F0IjtOO3M6MTA6InVwZGF0ZWRfYXQiO047fXM6MTE6IgAqAG9yaWdpbmFsIjthOjc6e3M6MjoiaWQiO2k6MTtzOjQ6Im5hbWUiO3M6NToiYWRtaW4iO3M6NToiZW1haWwiO3M6MTU6ImFkbWluQGdtYWlsLmNvbSI7czoxNzoiZW1haWxfdmVyaWZpZWRfYXQiO047czo4OiJwYXNzd29yZCI7czo4OiJwYXNzd29yZCI7czoxMDoiY3JlYXRlZF9hdCI7TjtzOjEwOiJ1cGRhdGVkX2F0IjtOO31zOjEwOiIAKgBjaGFuZ2VzIjthOjA6e31zOjg6IgAqAGNhc3RzIjthOjA6e31zOjE3OiIAKgBjbGFzc0Nhc3RDYWNoZSI7YTowOnt9czo4OiIAKgBkYXRlcyI7YTowOnt9czoxMzoiACoAZGF0ZUZvcm1hdCI7TjtzOjEwOiIAKgBhcHBlbmRzIjthOjA6e31zOjE5OiIAKgBkaXNwYXRjaGVzRXZlbnRzIjthOjA6e31zOjE0OiIAKgBvYnNlcnZhYmxlcyI7YTowOnt9czoxMjoiACoAcmVsYXRpb25zIjthOjA6e31zOjEwOiIAKgB0b3VjaGVzIjthOjA6e31zOjEwOiJ0aW1lc3RhbXBzIjtiOjE7czo5OiIAKgBoaWRkZW4iO2E6MDp7fXM6MTA6IgAqAHZpc2libGUiO2E6MDp7fXM6MTE6IgAqAGZpbGxhYmxlIjthOjA6e31zOjEwOiIAKgBndWFyZGVkIjthOjE6e2k6MDtzOjE6IioiO319fQ==',1631637234),('xJw6BsBLmojCAqMYnAp1W23SkPiK000AqbiARIYH',NULL,'45.118.158.64','WhatsApp/2.2134.10 N','YTozOntzOjY6Il90b2tlbiI7czo0MDoiM2k1MWRlYndMT0llVkxWZHc4Q2JOdERWdW5OcUlSOUhDRlMxNlc4OCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHA6Ly92aWtyYW1taWxscy53ZWJkZXZlbG9wbWVudGFnZW5jeS5pbi9hZG1pbi9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1631627399),('Y4N1BZWaZXVO0PX1qJIA6JcR9PncT8QpFN55fxn3',NULL,'45.118.158.64','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiajdkNUlBZTVlWk1vY09heEVhSENBZ2V5MjZYMkh0OHd5Wk1ESWlGNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly92aWtyYW1taWxscy53ZWJkZXZlbG9wbWVudGFnZW5jeS5pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1631640224),('zMs7OImokqRn1toJzbJk89HjrjXtwNLjEg2gjC77',NULL,'49.36.209.104','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWFRmaTRoUlB3T3JDamlodDZaQ1lLRm5CcGtRNWlwUmNTNERqNmdsVSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MTp7aTowO3M6Nzoic3VjY2VzcyI7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTc6Imh0dHA6Ly92aWtyYW1taWxscy53ZWJkZXZlbG9wbWVudGFnZW5jeS5pbi9hZG1pbi9wcm9kdWN0cyI7fXM6NToiYWRtaW4iO086MTY6IkFwcFxNb2RlbHNcQWRtaW4iOjI4OntzOjEzOiIAKgBjb25uZWN0aW9uIjtzOjU6Im15c3FsIjtzOjg6IgAqAHRhYmxlIjtzOjY6ImFkbWlucyI7czoxMzoiACoAcHJpbWFyeUtleSI7czoyOiJpZCI7czoxMDoiACoAa2V5VHlwZSI7czozOiJpbnQiO3M6MTI6ImluY3JlbWVudGluZyI7YjoxO3M6NzoiACoAd2l0aCI7YTowOnt9czoxMjoiACoAd2l0aENvdW50IjthOjA6e31zOjE5OiJwcmV2ZW50c0xhenlMb2FkaW5nIjtiOjA7czoxMDoiACoAcGVyUGFnZSI7aToxNTtzOjY6ImV4aXN0cyI7YjoxO3M6MTg6Indhc1JlY2VudGx5Q3JlYXRlZCI7YjowO3M6MTM6IgAqAGF0dHJpYnV0ZXMiO2E6Nzp7czoyOiJpZCI7aToxO3M6NDoibmFtZSI7czo1OiJhZG1pbiI7czo1OiJlbWFpbCI7czoxNToiYWRtaW5AZ21haWwuY29tIjtzOjE3OiJlbWFpbF92ZXJpZmllZF9hdCI7TjtzOjg6InBhc3N3b3JkIjtzOjg6InBhc3N3b3JkIjtzOjEwOiJjcmVhdGVkX2F0IjtOO3M6MTA6InVwZGF0ZWRfYXQiO047fXM6MTE6IgAqAG9yaWdpbmFsIjthOjc6e3M6MjoiaWQiO2k6MTtzOjQ6Im5hbWUiO3M6NToiYWRtaW4iO3M6NToiZW1haWwiO3M6MTU6ImFkbWluQGdtYWlsLmNvbSI7czoxNzoiZW1haWxfdmVyaWZpZWRfYXQiO047czo4OiJwYXNzd29yZCI7czo4OiJwYXNzd29yZCI7czoxMDoiY3JlYXRlZF9hdCI7TjtzOjEwOiJ1cGRhdGVkX2F0IjtOO31zOjEwOiIAKgBjaGFuZ2VzIjthOjA6e31zOjg6IgAqAGNhc3RzIjthOjA6e31zOjE3OiIAKgBjbGFzc0Nhc3RDYWNoZSI7YTowOnt9czo4OiIAKgBkYXRlcyI7YTowOnt9czoxMzoiACoAZGF0ZUZvcm1hdCI7TjtzOjEwOiIAKgBhcHBlbmRzIjthOjA6e31zOjE5OiIAKgBkaXNwYXRjaGVzRXZlbnRzIjthOjA6e31zOjE0OiIAKgBvYnNlcnZhYmxlcyI7YTowOnt9czoxMjoiACoAcmVsYXRpb25zIjthOjA6e31zOjEwOiIAKgB0b3VjaGVzIjthOjA6e31zOjEwOiJ0aW1lc3RhbXBzIjtiOjE7czo5OiIAKgBoaWRkZW4iO2E6MDp7fXM6MTA6IgAqAHZpc2libGUiO2E6MDp7fXM6MTE6IgAqAGZpbGxhYmxlIjthOjA6e31zOjEwOiIAKgBndWFyZGVkIjthOjE6e2k6MDtzOjE6IioiO319czo3OiJzdWNjZXNzIjtzOjI4OiJQcm9kdWN0IHVwZGF0ZWQgc3VjY2Vzc2Z1bGx5Ijt9',1631602969);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (3,'Lokesh','passpost-size-lokesh.png','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s','2021-09-14 13:48:55','2021-09-14 12:56:53'),(4,'Mayank Dewangan','lokesh2.png','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book','2021-09-14 15:05:29','2021-09-14 15:05:29'),(5,'Lokesh Kumar','lokesh.png','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type','2021-09-14 15:06:15','2021-09-14 15:06:15');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'prashant singh','prashantsingh2408@gmail.com',NULL,NULL,'5f4dcc3b5aa765d61d8327deb882cf99',NULL,NULL,NULL,NULL,NULL,'2021-09-11 04:30:22','2021-09-11 04:30:22'),(3,'prashant singh','prashant24082@gmail.com',NULL,NULL,'5f4dcc3b5aa765d61d8327deb882cf99',NULL,NULL,NULL,NULL,NULL,'2021-09-11 07:36:47','2021-09-11 07:36:47'),(4,'prashant2 prashant','prashantsingh24084@gmail.com',NULL,NULL,'5f4dcc3b5aa765d61d8327deb882cf99',NULL,NULL,NULL,NULL,NULL,'2021-09-11 07:41:05','2021-09-11 07:41:05'),(5,'prashant2 prashant','prashantsingh24082@gmail.com',NULL,NULL,'5f4dcc3b5aa765d61d8327deb882cf99',NULL,NULL,NULL,NULL,NULL,'2021-09-11 10:11:34','2021-09-11 10:11:34'),(6,'prashant3 singh3','prashantsingh24083@gmail.com',NULL,NULL,'5f4dcc3b5aa765d61d8327deb882cf99',NULL,NULL,NULL,NULL,NULL,'2021-09-13 02:34:24','2021-09-13 02:34:24'),(7,'prashant5 singh5','prashantsingh24085@gmail.com',NULL,NULL,'5f4dcc3b5aa765d61d8327deb882cf99',NULL,NULL,NULL,NULL,NULL,'2021-09-13 02:49:28','2021-09-13 02:49:28'),(8,'prashant7 singh7','prashantsingh24087@gmail.com',NULL,NULL,'83878c91171338902e0fe0fb97a8c47a',NULL,NULL,NULL,NULL,NULL,'2021-09-13 02:51:45','2021-09-13 02:51:45'),(9,'prashant8 singh8','prashantsingh24088@gmail.com',NULL,NULL,'292bec9112e8d0eaf67d895f020f2dab',NULL,NULL,NULL,NULL,NULL,'2021-09-13 02:57:12','2021-09-13 02:57:12'),(10,'prashant9 singh9','prashantsingh24089@gmail.com',NULL,NULL,'6445071763f7fa0b814c0317a19397da',NULL,NULL,NULL,NULL,NULL,'2021-09-13 05:45:33','2021-09-13 05:45:33'),(11,'Lokesh Dewangan','lokesh@pegalogics.com',NULL,NULL,'48e959d35feafde79e174747076efe8c',NULL,NULL,NULL,NULL,NULL,'2021-09-14 07:39:50','2021-09-14 07:39:50');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-15  2:37:37
