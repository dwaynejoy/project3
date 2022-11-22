-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 19, 2022 at 05:49 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hfx_proj_3`
--
CREATE DATABASE IF NOT EXISTS `db_hfx_proj_3` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `db_hfx_proj_3`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_ID` int NOT NULL AUTO_INCREMENT,
  `admin_User_Name` varchar(16) NOT NULL,
  `admin_L_Name` tinytext NOT NULL,
  `admin_F_Name` tinytext NOT NULL,
  `admin_Code` varchar(45) NOT NULL,
  `admin_Active` tinyint NOT NULL,
  `admin_Create_Date` tinytext NOT NULL,
  PRIMARY KEY (`admin_ID`),
  UNIQUE KEY `admin_ID_UNIQUE` (`admin_ID`),
  UNIQUE KEY `admin_User_Name_UNIQUE` (`admin_User_Name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_ID`, `admin_User_Name`, `admin_L_Name`, `admin_F_Name`, `admin_Code`, `admin_Active`, `admin_Create_Date`) VALUES
(1, 'devNerd1', 'Joy', 'Dwayne', 'Quietus97', 1, '2022-11-12 21:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookings`
--

DROP TABLE IF EXISTS `tbl_bookings`;
CREATE TABLE IF NOT EXISTS `tbl_bookings` (
  `bookings_ID` int NOT NULL AUTO_INCREMENT,
  `bookings_Email` longtext NOT NULL,
  `bookings_Trip_Date` date NOT NULL,
  `bookings_Date_Created` date NOT NULL,
  `bookings_Trip_ID` int NOT NULL,
  `bookings_Guest_ID` int NOT NULL,
  PRIMARY KEY (`bookings_ID`),
  UNIQUE KEY `bookings_ID_UNIQUE` (`bookings_ID`),
  KEY `bookings_FK_Trip_ID_idx` (`bookings_Trip_ID`),
  KEY `bookings_FK_Guest_ID_idx` (`bookings_Guest_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guest`
--

DROP TABLE IF EXISTS `tbl_guest`;
CREATE TABLE IF NOT EXISTS `tbl_guest` (
  `guest_ID` int NOT NULL AUTO_INCREMENT,
  `guest_F_Name` varchar(45) NOT NULL,
  `guest_L_Name` varchar(45) NOT NULL,
  `guest_Email` varchar(95) NOT NULL,
  `guest_Phone` varchar(14) NOT NULL,
  PRIMARY KEY (`guest_ID`),
  UNIQUE KEY `guest_ID_UNIQUE` (`guest_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_guest`
--

INSERT INTO `tbl_guest` (`guest_ID`, `guest_F_Name`, `guest_L_Name`, `guest_Email`, `guest_Phone`) VALUES
(1, 'Mini', 'Me', 'me@me.com', '902-999-9999'),
(2, 'Mini', 'Me', 'me@me.com', '902-999-9999');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trips`
--

DROP TABLE IF EXISTS `tbl_trips`;
CREATE TABLE IF NOT EXISTS `tbl_trips` (
  `trips_ID` int NOT NULL AUTO_INCREMENT,
  `trips_Heading` tinytext NOT NULL,
  `trips_Trip_Date` date NOT NULL,
  `trips_Duration` varchar(3) NOT NULL,
  `trips_Summary` longtext NOT NULL,
  `trips_Active` tinyint NOT NULL,
  `trips_Create_Date` date NOT NULL,
  `trips_Create_Admin` int NOT NULL,
  PRIMARY KEY (`trips_ID`),
  UNIQUE KEY `trips_ID_UNIQUE` (`trips_ID`),
  KEY `trips_FK_Create_Admin_idx` (`trips_Create_Admin`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_trips`
--

INSERT INTO `tbl_trips` (`trips_ID`, `trips_Heading`, `trips_Trip_Date`, `trips_Duration`, `trips_Summary`, `trips_Active`, `trips_Create_Date`, `trips_Create_Admin`) VALUES
(1, 'Halifax', '2017-04-12', '4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate, dolor vel semper dictum, lacus justo porta elit, eu pretium arcu metus quis turpis. Integer nulla nisl, tempor vel dapibus a, efficitur vel orci.', 1, '2022-11-18', 1),
(2, 'Sydney', '2017-05-10', '2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate, dolor vel semper dictum, lacus justo porta elit, eu pretium arcu metus quis turpis. Integer nulla nisl, tempor vel dapibus a, efficitur vel orci.', 1, '2022-11-18', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
