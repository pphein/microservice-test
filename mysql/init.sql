CREATE DATABASE IF NOT EXISTS `microservice`;
USE `microservice`;
CREATE TABLE `survey` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `age` int NOT NULL,
  `occupation` varchar(125) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci 