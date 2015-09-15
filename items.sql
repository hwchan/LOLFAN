
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2015 at 09:40 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a2655726_Stielt`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Name` char(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Damage` int(2) NOT NULL DEFAULT '0',
  `Crit` int(2) NOT NULL DEFAULT '0',
  `Atkspeed` int(2) NOT NULL DEFAULT '0',
  `Ap` int(3) NOT NULL DEFAULT '0',
  `Cdr` int(2) NOT NULL DEFAULT '0',
  `Mana` int(3) NOT NULL DEFAULT '0',
  `Health` int(3) NOT NULL DEFAULT '0',
  `Armour` int(3) NOT NULL DEFAULT '0',
  `Mr` int(2) NOT NULL DEFAULT '0',
  `Price` int(4) NOT NULL DEFAULT '0',
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` VALUES('Blade of the Ruined King', 25, 0, 40, 0, 0, 0, 0, 0, 50, 3200, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Infinity Edge', 80, 20, 0, 0, 0, 0, 0, 0, 0, 3800, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Abyssal Scepter', 0, 0, 0, 70, 0, 0, 0, 0, 0, 2440, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Athene''s Unholy Grail', 0, 0, 40, 60, 20, 50, 0, 0, 0, 2700, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('BF Sword', 50, 0, 0, 0, 0, 0, 0, 0, 0, 1550, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Berserker Greaves', 0, 0, 25, 0, 0, 0, 0, 0, 0, 1000, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Bilgewater Cutlass', 25, 0, 0, 0, 0, 0, 0, 0, 0, 1400, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Doran''s Blade', 7, 0, 0, 0, 0, 0, 70, 0, 0, 440, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Frozen Heart', 0, 0, 0, 0, 20, 400, 0, 100, 0, 2450, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Giants Belt', 3800, 0, 0, 0, 0, 0, 380, 0, 0, 1000, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Hextech Gunblade', 40, 0, 0, 80, 0, 0, 0, 0, 0, 3400, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Hextech Revolver', 0, 0, 0, 40, 0, 0, 0, 0, 0, 1200, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Iceborn Gauntlet', 0, 0, 0, 30, 10, 0, 0, 60, 0, 2900, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Last Whisper', 40, 0, 0, 0, 0, 0, 0, 0, 0, 2300, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Liandry''s Torment', 0, 0, 0, 50, 0, 0, 500, 0, 0, 2900, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Lichbane', 0, 0, 0, 80, 0, 0, 0, 0, 0, 3000, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Locket of The Iron Solari', 0, 0, 0, 0, 10, 0, 400, 0, 20, 2800, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Manamune', 25, 0, 0, 0, 0, 250, 0, 0, 0, 2200, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Maw of Malmortius', 60, 0, 0, 0, 0, 0, 0, 0, 40, 3200, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Mikael''s Crucible', 0, 0, 0, 0, 10, 100, 0, 0, 40, 2450, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Morellonomicon', 0, 0, 0, 80, 20, 100, 0, 0, 0, 2300, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Needlessly Large Rod', 0, 0, 0, 80, 0, 0, 0, 0, 0, 2600, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Negatron Cloak', 0, 0, 0, 0, 0, 0, 0, 0, 45, 850, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Ninja Tabi', 0, 0, 0, 0, 0, 0, 0, 25, 0, 1000, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Phage', 20, 0, 0, 0, 0, 0, 200, 0, 0, 1325, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Phantom Dancer', 0, 35, 20, 0, 0, 0, 0, 0, 0, 2800, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Rabadon''s Deathcap', 0, 0, 0, 120, 0, 0, 0, 0, 0, 3300, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Randuin''s Omen', 0, 0, 0, 0, 0, 0, 500, 70, 0, 2850, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Ravenous Hydra', 75, 0, 0, 0, 0, 0, 0, 0, 0, 3300, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Rod of Ages', 0, 0, 0, 60, 0, 0, 450, 0, 0, 2800, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Runaan''s Hurricane', 0, 0, 70, 0, 0, 0, 0, 0, 0, 2400, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Rylai''s Crystal Scepter', 0, 0, 0, 100, 0, 0, 400, 0, 0, 2900, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Sheen', 0, 0, 0, 25, 0, 0, 0, 0, 0, 1200, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Sorcerer''s Shoes', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1100, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Spirit Visage', 0, 0, 0, 0, 0, 0, 400, 0, 55, 2750, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Sunfire Cape', 0, 0, 0, 0, 0, 0, 450, 45, 0, 2600, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('The Black Cleaver', 50, 0, 0, 0, 10, 0, 200, 0, 0, 3000, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('The Bloodthirster', 80, 0, 0, 0, 0, 0, 0, 0, 0, 3500, '2015-03-16 13:16:31');
INSERT INTO `items` VALUES('The Brutalizer', 25, 0, 0, 0, 25, 0, 0, 0, 0, 1337, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Thornmail', 0, 0, 0, 0, 0, 0, 0, 100, 0, 2100, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Trinity Force', 30, 10, 30, 30, 0, 200, 250, 0, 0, 3703, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Vampiric Scepter', 10, 0, 0, 0, 0, 0, 0, 0, 0, 800, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Void Staff', 0, 0, 0, 70, 0, 0, 0, 0, 0, 2295, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Warmog''s Armor', 0, 0, 0, 0, 0, 0, 800, 0, 0, 2500, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Zeal', 0, 10, 20, 0, 0, 0, 0, 0, 0, 1100, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Zephyr', 25, 0, 50, 0, 10, 0, 0, 0, 0, 2850, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('Zhonya''s Hourglass', 0, 0, 0, 120, 0, 0, 0, 50, 0, 3300, '2015-03-16 13:14:52');
