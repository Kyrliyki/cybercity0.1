-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               8.0.30 - MySQL Community Server - GPL
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных TestTaskDB
CREATE DATABASE IF NOT EXISTS `TestTaskDB` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `TestTaskDB`;

-- Дамп структуры для таблица TestTaskDB.algebra
CREATE TABLE IF NOT EXISTS `algebra` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_users` int DEFAULT NULL,
  `05.01` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `09.02` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `23.02` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `08.02` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `01.03` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `25.03` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `02.04` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `20.04` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `27.05` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `13.06` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `12.07` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `30.08` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `09.09` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `07.12` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `17.07` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  KEY `Индекс 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Экспортируемые данные не выделены.

-- Дамп структуры для таблица TestTaskDB.Biology
CREATE TABLE IF NOT EXISTS `Biology` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_users` int DEFAULT NULL,
  `07.01` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `28.01` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `23.02` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `07.03` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `13.03` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `29.03` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `07.04` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `10.04` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `22.04` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `19.07` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `21.07` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `12.09` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `27.10` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `22.05` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `02.06` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Экспортируемые данные не выделены.

-- Дамп структуры для таблица TestTaskDB.Chemistry
CREATE TABLE IF NOT EXISTS `Chemistry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_users` int DEFAULT NULL,
  `14.01` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `18.01` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `25.01` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `12.02` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `25.03` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `13.05` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `20.05` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `29.05` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `25.06` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `17.07` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `30.08` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `10.09` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `18.09` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `12.10` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `09.11` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Экспортируемые данные не выделены.

-- Дамп структуры для таблица TestTaskDB.History
CREATE TABLE IF NOT EXISTS `History` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_users` int DEFAULT NULL,
  `03.01` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `05.01` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `20.01` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `14.02` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `20.03` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `10.05` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `02.06` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `15.07` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `26.07` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `01.08` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `28.08` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `26.10` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `09.11` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `06.12` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `18.12` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Экспортируемые данные не выделены.

-- Дамп структуры для таблица TestTaskDB.rus
CREATE TABLE IF NOT EXISTS `rus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_users` int DEFAULT NULL,
  `11.01` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `23.02` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `29.02` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `25.03` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `08.04` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `02.05` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `09.06` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `30.06` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `21.07` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `16.08` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `10.09` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `12.09` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `20.09` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `08.11` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `28.11` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  KEY `Индекс 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Экспортируемые данные не выделены.

-- Дамп структуры для таблица TestTaskDB.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronymic` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `algebra` int NOT NULL DEFAULT '0',
  `russian_language` int NOT NULL DEFAULT '0',
  `Biology` int NOT NULL DEFAULT '0',
  `Chemistry` int NOT NULL DEFAULT '0',
  `History` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Экспортируемые данные не выделены.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
