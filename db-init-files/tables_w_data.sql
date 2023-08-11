-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table gnar.points_submission
DROP TABLE IF EXISTS `points_submission`;
CREATE TABLE IF NOT EXISTS `points_submission` (
  `ID` varchar(50) NOT NULL DEFAULT 'AUTO_INCREMENT',
  `UserID` int(11) DEFAULT NULL,
  `TimeStamp` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`ID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table gnar.points_submission: ~6 rows (approximately)
INSERT INTO `points_submission` (`ID`, `UserID`, `TimeStamp`) VALUES
	('1691751966', 2, '2023-08-11 11:41:48'),
	('1691751988', 2, '2023-08-11 11:51:49'),
	('1691751990', 1, '2023-08-11 11:50:06'),
	('1691752374658', 1, '2023-08-11 11:41:50'),
	('1691755246999', 3, '2023-08-11 12:00:46'),
	('1691760051772', 15, '2023-08-11 13:20:51');

-- Dumping structure for table gnar.points_submission_items
DROP TABLE IF EXISTS `points_submission_items`;
CREATE TABLE IF NOT EXISTS `points_submission_items` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `SubmissionID` varchar(50) DEFAULT NULL,
  `ScoreID` varchar(50) DEFAULT NULL,
  `Qty` int(11) NOT NULL DEFAULT 0,
  `Points` int(11) NOT NULL DEFAULT 0,
  `TimeStamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table gnar.points_submission_items: ~9 rows (approximately)
INSERT INTO `points_submission_items` (`ID`, `SubmissionID`, `ScoreID`, `Qty`, `Points`, `TimeStamp`) VALUES
	(1, '1691751966', '196', 2, 80, '2023-08-11 11:06:06'),
	(2, '1691751966', '201', 1, 40, '2023-08-11 11:06:06'),
	(3, '1691751966', '206', 1, 40, '2023-08-11 11:06:06'),
	(4, '1691751966', '209', 3, 120, '2023-08-11 11:06:06'),
	(5, '1691751988', '338', 2, 600, '2023-08-11 11:06:28'),
	(6, '1691751990', '338', 2, 600, '2023-08-11 11:06:30'),
	(7, '1691752374658', '180', 2, 20, '2023-08-11 11:12:54'),
	(8, '1691755246999', '225', 3, 270, '2023-08-11 12:00:47'),
	(9, '1691755246999', '339', 1, 3000, '2023-08-11 12:00:47'),
	(10, '1691760051772', '222', 2, 180, '2023-08-11 13:20:51');

-- Dumping structure for table gnar.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Club` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table gnar.users: ~42 rows (approximately)
INSERT INTO `users` (`ID`, `FirstName`, `LastName`, `Club`) VALUES
	(1, 'Marlon', 'Holloway', 'RUSS'),
	(2, 'Tim', 'Dale', 'RUSS'),
	(3, 'Ethan', 'Grollo', 'RUSS'),
	(4, 'Fletcher', 'Dobson Harper', 'RUSS'),
	(5, 'Daniel', 'Gershenzon', 'RUSS'),
	(6, 'Jack', 'Vukovic', 'RUSS'),
	(7, 'James', 'Chesterman', 'RUSS'),
	(8, 'Oliver', 'Schneider', 'RUSS'),
	(9, 'Angus', 'Mahoney', 'RUSS'),
	(10, 'Luke', 'Pattison', 'RUSS'),
	(11, 'Aiden', 'West', 'RUSS'),
	(12, 'Eli', 'Micallef', 'RUSS'),
	(13, 'Jensen', 'Luu', 'RUSS'),
	(14, 'Oliver', 'Burch', 'RUSS'),
	(15, 'James', 'Gold', 'RUSS'),
	(16, 'Alex', 'Garnder', 'RUSS'),
	(17, 'Tim', 'Holland', 'RUSS'),
	(18, 'Luke', 'Wesson', 'RUSS'),
	(19, 'Monica', 'Ising', 'RUSS'),
	(20, 'Sofya', 'Filippova', 'RUSS'),
	(21, 'Chloe', 'Peterson', 'RUSS'),
	(22, 'Mia', 'Avery', 'RUSS'),
	(23, 'Elizabeth', 'Stratford', 'RUSS'),
	(24, 'Megan', 'Holt', 'RUSS'),
	(25, 'Izzy', 'Fallet', 'RUSS'),
	(26, 'Mali', 'Chapman', 'RUSS'),
	(27, 'Emma', 'Weston', 'RUSS'),
	(28, 'Kristina', 'Kozynina', 'RUSS'),
	(29, 'Brooke', 'Ainsworth', 'RUSS'),
	(30, 'Juliette', 'Peace', 'RUSS'),
	(31, 'Kate', 'Landry', 'RUSS'),
	(32, 'Amelia', 'Dunn', 'RUSS'),
	(33, 'Maya', 'Patterson-Janes', 'RUSS'),
	(34, 'Naomi', 'Harpur', 'RUSS'),
	(35, 'Molly', 'Lardner', 'RUSS'),
	(36, 'Imogen', 'Matthews', 'RUSS'),
	(37, 'Sienna', 'Ranasinghe', 'RUSS'),
	(38, 'Sofya', 'Mikhaylova', 'RUSS'),
	(39, 'Ash', 'Ting', 'RUSS'),
	(40, 'Ted', 'Jowett', 'RUSS'),
	(41, 'Jayden', 'Urban', 'RUSS'),
	(42, 'Samson', 'Jowett', 'RUSS');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
