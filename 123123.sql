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
  `id` int DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `05.01` int DEFAULT NULL,
  `08.02` int DEFAULT NULL,
  `09.02` int DEFAULT NULL,
  `23.02` int DEFAULT NULL,
  `01.03` int DEFAULT NULL,
  `25.03` int DEFAULT NULL,
  `02.04` int DEFAULT NULL,
  `20.04` int DEFAULT NULL,
  `27.05` int DEFAULT NULL,
  `13.06` int DEFAULT NULL,
  `12.07` int DEFAULT NULL,
  `30.08` int DEFAULT NULL,
  `09.09` int DEFAULT NULL,
  `07.12` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы TestTaskDB.algebra: ~0 rows (приблизительно)

-- Дамп структуры для таблица TestTaskDB.Biology
CREATE TABLE IF NOT EXISTS `Biology` (
  `id` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `14.01` int DEFAULT NULL,
  `18.01` int DEFAULT NULL,
  `25.01` int DEFAULT NULL,
  `12.02` int DEFAULT NULL,
  `25.03` int DEFAULT NULL,
  `13.05` int DEFAULT NULL,
  `20.05` int DEFAULT NULL,
  `29.05` int DEFAULT NULL,
  `25.06` int DEFAULT NULL,
  `17.07` int DEFAULT NULL,
  `30.08` int DEFAULT NULL,
  `10.09` int DEFAULT NULL,
  `18.09` int DEFAULT NULL,
  `12.10` int DEFAULT NULL,
  `09.11` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы TestTaskDB.Biology: ~0 rows (приблизительно)

-- Дамп структуры для таблица TestTaskDB.Chemistry
CREATE TABLE IF NOT EXISTS `Chemistry` (
  `id` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `07.01` int DEFAULT NULL,
  `28.01` int DEFAULT NULL,
  `23.02` int DEFAULT NULL,
  `07.03` int DEFAULT NULL,
  `13.03` int DEFAULT NULL,
  `29.03` int DEFAULT NULL,
  `07.04` int DEFAULT NULL,
  `10.04` int DEFAULT NULL,
  `22.04` int DEFAULT NULL,
  `19.07` int DEFAULT NULL,
  `21.07` int DEFAULT NULL,
  `12.09` int DEFAULT NULL,
  `27.10` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы TestTaskDB.Chemistry: ~0 rows (приблизительно)

-- Дамп структуры для таблица TestTaskDB.History
CREATE TABLE IF NOT EXISTS `History` (
  `id` int NOT NULL,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы TestTaskDB.History: ~0 rows (приблизительно)

-- Дамп структуры для таблица TestTaskDB.rus
CREATE TABLE IF NOT EXISTS `rus` (
  `id` int DEFAULT NULL,
  `id_users` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы TestTaskDB.rus: ~0 rows (приблизительно)

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы TestTaskDB.users: ~5 rows (приблизительно)
INSERT INTO `users` (`id`, `username`, `password`, `status`, `surname`, `firstname`, `patronymic`, `dob`, `algebra`, `russian_language`, `Biology`, `Chemistry`, `History`) VALUES
	(1, 'direktor', '$2y$10$o0YFaVXIdNDg/nRLmVxNROF6hOS2QONfK0y.C8PaKcRuGnlzZdVQ6', 'admin', '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
	(4, 'ilnur', '$2y$10$CR9I9velbReqFfXodS2bZ.tkWmjvVuizMvJ/M4CoCrLjcqde4.D42', 'student', 'Салахов', 'Илнур', 'Рамисович', '2002-09-23', 0, 0, 0, 0, 0),
	(7, 'alex', '$2y$10$WW1B7oWkWo7DHxoGCbOqrObc6.3nQ7nVBVsKdVl.ReynR7DRRyQCm', 'student', 'Калинин', 'Александр', 'Константинович', '2001-08-10', 0, 0, 0, 0, 0),
	(8, 'polina', '$2y$10$rcQyGHhaO3c6y69BjgNaCeB/48b6j3/5C6qLKOJY0x1drujpSqL7u', 'student', 'Андреева', 'Полина', '', '2001-05-09', 0, 0, 0, 0, 0),
	(9, 'sasha', '$2y$10$4.arXdDHe8QByjZ92ZyOPu7zBVseZ2.1LT9w5rQiMr.jWui42cshO', 'student', 'shelemetev', 'sasha', 'olegovich', '2004-02-19', 0, 0, 0, 0, 0),
	(15, 'teacher', '$2y$10$6j9nc6Vkwoui8F354Gz57.csp59rI4ehIJtM9g0FOWn79bu7ZxpcK', 'teacher', 'teacher', 'teacher', 'teacher', '2024-06-17', 1, 1, 0, 0, 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
