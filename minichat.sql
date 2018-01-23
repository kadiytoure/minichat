DROP DATABASE IF EXISTS `minichat`;
CREATE DATABASE `minichat` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
DROP USER 'minichat_user'@'localhost';
CREATE USER 'kadiy'@'localhost' IDENTIFIED BY 'kadiy';
GRANT ALL PRIVILEGES ON `ktoure_minichat`.* TO 'ktoure'@'localhost';
USE `minichat`;
CREATE TABLE `chat` (
    `id` INT AUTO_INCREMENT PRIMARY KEY, 
    `pseudo` VARCHAR (255), 
    `message` VARCHAR (255));
);