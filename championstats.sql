
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2015 at 08:26 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a2655726_Stielt`
--

-- --------------------------------------------------------

--
-- Table structure for table `championstats`.
--

CREATE TABLE `championstats` (
  `Name` char(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Hitpoints` float(5,2) NOT NULL DEFAULT '0.00',
  `Hpinc` int(2) NOT NULL DEFAULT '0',
  `Mana` float(5,2) NOT NULL DEFAULT '0.00',
  `Mpinc` int(2) NOT NULL DEFAULT '0',
  `Attackdmg` float(5,3) NOT NULL DEFAULT '0.000',
  `ADinc` float(4,3) NOT NULL DEFAULT '0.000',
  `Attackspeed` float(4,3) NOT NULL DEFAULT '0.000',
  `Asinc` float(4,3) NOT NULL DEFAULT '0.000',
  `Armour` float(5,3) NOT NULL DEFAULT '0.000',
  `Arinc` float(3,2) NOT NULL DEFAULT '0.00',
  `Magicresist` float(3,1) NOT NULL DEFAULT '0.0',
  `Mrinc` float(3,2) NOT NULL DEFAULT '0.00',
  `Qbase` int(3) NOT NULL DEFAULT '0',
  `Qadscale` float(3,2) NOT NULL DEFAULT '0.00',
  `Qapscale` float(3,2) NOT NULL DEFAULT '0.00',
  `Qcd` int(2) NOT NULL DEFAULT '0',
  `Wbase` int(3) NOT NULL DEFAULT '0',
  `Wadscale` float(3,2) NOT NULL DEFAULT '0.00',
  `Wapscale` float(3,2) NOT NULL DEFAULT '0.00',
  `Wcd` int(2) NOT NULL DEFAULT '0',
  `Ebase` int(3) NOT NULL DEFAULT '0',
  `Eadscale` float(3,2) NOT NULL DEFAULT '0.00',
  `Eapscale` float(3,2) NOT NULL DEFAULT '0.00',
  `Ecd` int(2) NOT NULL DEFAULT '0',
  `Rbase` int(4) NOT NULL DEFAULT '0',
  `Radscale` float(3,2) NOT NULL DEFAULT '0.00',
  `Rapscale` float(3,2) NOT NULL DEFAULT '0.00',
  `Rcd` int(3) NOT NULL DEFAULT '0',
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `championstats`
--

INSERT INTO `championstats` VALUES('Annie', 511.68, 76, 334.00, 50, 50.410, 2.625, 0.579, 1.360, 19.220, 4.00, 30.0, 0.00, 220, 0.00, 0.80, 4, 250, 0.00, 0.85, 8, 60, 0.00, 0.20, 10, 425, 0.00, 0.80, 80, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Fiddlesticks', 524.40, 80, 350.12, 59, 48.36, 2.625, 0.625, 2.110, 20.880, 3.50, 30.0, 0.00, 0, 0, 0, 0, 180, 0, 0.45, 6, 145, 0, 0.45, 11, 125, 0, 0.45, 130, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Katarina', 559.40, 80, 0, 0, 58.376, 3.200, 0.658, 2.740, 26.880, 3.50, 32.1, 1.25, 235, 0, 0.60, 8, 180, 0.60, 0.25, 4, 160, 0, 0.40, 6, 75, 0.375, 0.25, 45, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Orianna', 517.72, 79, 334, 50, 40.368, 2.600, 0.658, 3.50, 17.040, 3.00, 30.0, 0.00, 180, 0, 0.50, 3, 250, 0, 0.70, 9, 180, 0, 0.30, 9, 300, 0, 0.7, 90, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Ryze', 558.48, 86, 342.4, 55, 55.04, 3.000, 0.625, 2.112, 21.552, 3.90, 30.0, 0.00, 120, 0, 0.40, 3.5, 200, 0, 0.6, 14, 130, 0, 0.35, 14, 0, 0, 0, 50, '2015-03-16 01:46:35'); 
INSERT INTO `championstats` VALUES('Zed', 579.40, 80, 200, 0, 54.712, 3.400, 0.658, 3.100, 26.880, 3.50, 32.1, 1.25, 235, 1.00, 0, 6, 0, 0.25, 0, 14, 180, 0, 0.8, 4, 0, 1.00, 0.5, 80, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Yasuo', 517.76, 82, 60, 0, 55.376, 3.200, 0.658, 3.200, 24.712, 3.40, 30.0, 0, 100, 1.0, 0, 4, 0, 0, 0, 18, 140, 0, 0.6, 6, 400, 1.5, 0, 30, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Master yi', 598.56, 92, 250.56, 42, 60.04, 3.000, 0.679, 2.000, 24.040, 3.00, 32.1, 1.25, 165, 1.0, 0, 14, 0, 0, 0, 35, 30, 0.2, 0, 14, 0, 0, 0, 75, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Fizz', 558.48, 86, 267.2, 40, 58.04, 3.000, 0.658, 3.100, 22.412, 3.400, 32.1, 1.25, 70, 1.0, 0.3, 6, 60, 0, 0.4, 10, 270, 0, 0.75, 8, 450, 0, 1.00, 70, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Ahri', 514.4, 80, 334, 50, 53.04, 3.000, 0.668, 2.00, 20.88, 3.5, 30, 0, 140, 0, 0.35, 7, 224, 0, 0.64, 5, 200, 0, 0.5, 12, 450, 0, 0.9, 80, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Amumu', 625.64, 98, 100.00, 0, 53.384, 4.800, 0.638, 2.190, 23.544, 3.30, 32.1, 1.25, 280, 0.00, 0.70, 9, 84, 0.00, 0.20, 1, 175, 0.00, 0.50, 6, 350, 0.00, 0.80, 110, '2015-03-16 01:46:04');
INSERT INTO `championstats` VALUES('Cho''Gath', 574.4, 80, 272.2, 40, 61.156, 4.200, 0.625, 1.44, 28.88, 3.5, 32.1, 1.25, 305, 0, 1.0, 9, 275, 0, 0.7, 13, 80, 0, 0.3, 0.625, 650, 0, 0.7, 80, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Nasus', 561.2, 90, 275.6, 45, 59.18, 3.500, 0.638, 3.48, 24.88, 3.5, 32.1, 1.25, 110, 0, 0, 4, 0, 0, 0, 11, 430, 0, 1.2, 12, 75, 0, 0.15, 120, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Leona', 576.16, 80, 302.2, 40, 60.04, 3.000, 0.625, 2.9, 27.208, 3.1, 32.1, 1.25, 160, 0, 0.3, 7, 260, 0, 0.4, 14, 220, 0, 0.4, 9, 350, 0, 0.8, 60, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Malphite', 574.2, 90, 282.2, 40, 61.97, 3.375, 0.638, 3.4, 28.3, 3.75, 32.1, 1.25, 270, 0, 0.6, 8, 0, 0.62, 0, 14, 220, 0, 0.2, 7, 400, 0, 1.0, 100, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Gnar', 540, 65, 100, 0, 48, 3.000, 0.625, 0.5, 23, 2.5, 30, 0, 125, 1.15, 0, 10, 300, 0, 1.0, 0.625, 180, 0, 0, 12, 600, 0, 0.75, 80, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Jax', 592.8, 85, 288.8, 35, 61.97, 3.375, 0.638, 3.4, 27.04, 3.0, 32.1, 1.25, 230, 1.0, 0.6, 6, 180, 0, 0.6, 3, 300, 1.0, 0, 8, 220, 0, 0.7, 80, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Garen', 616.28, 96, 0, 0, 57.88, 3.500, 0.625, 2.9, 27.536, 2.7, 32.1, 1.25, 130, 0.4, 0, 8, 0,0,0,20, 38, 3.3, 0, 9, 525, 0, 0, 80, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Poppy', 559.08, 81, 235.4, 30, 61.97, 3.375, 0.638, 3.35, 28.72, 4, 30, 0, 375, 1.0, 0.6, 4, 35, 0, 0, 12, 425, 0, 0.8, 8, 40, 0, 0, 100, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Tryndamere', 625.64, 98, 100.00, 0, 61.376, 3.200, 0.670, 2.900, 24.108, 3.10, 32.1, 1.25, 0, 0.00, 0.00, 12, 0, 0.00, 0.00, 14, 190, 1.20, 1.00, 9, 0, 0.00, 0.00, 90, '2015-03-16 17:35:51');
INSERT INTO `championstats` VALUES('Draven', 557.76, 82, 310.56, 42, 50.38, 3.500, 0.679, 2.7, 25.544, 3.3, 30, 0, 0, 0.85, 0, 8, 0, 0, 0, 12, 210, 0.5, 0, 14, 750, 2.2, 0, 90, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Ezreal', 484.4, 80, 310.6, 45, 50.24, 3.000, 0.625, 2.8, 21.88, 3.5, 30, 0, 115, 1.1, 0.4, 4, 250, 0, 0.8, 9, 275, 0, 0.75, 11, 650, 1.0, 0.9, 80, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Lucian', 554.4, 80, 298.88, 41, 52.04, 3.000, 0.638, 3.3, 24.04, 3, 30, 0, 200, 1.2, 0, 5, 220, 0, 0.9, 10, 0, 0, 0, 14, 1980, 6.5, 3.3, 90, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Teemo', 515.76, 82, 267.2, 40, 47.54, 3.000, 0.690, 3.38, 24.3, 3.75, 30, 0, 260, 0, 0.8, 8, 0, 0, 0, 17, 170, 0, 0.7, 0.8, 450, 0, 0.5, 1, '2015-03-16 01:46:35');
INSERT INTO `championstats` VALUES('Vayne', 498.44, 83, 231.8, 35, 53.46, 3.250, 0.658, 4, 19.012, 3.4, 30, 0, 0, 0.5, 0, 2, 60, 0, 0, 0.5, 370, 1.0, 0, 12, 70, 0, 0, 70, '2015-03-16 01:46:35');