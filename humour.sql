-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2018 at 05:03 AM
-- Server version: 5.7.20-log
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `humour`
--
CREATE DATABASE IF NOT EXISTS `humour` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `humour`;

-- --------------------------------------------------------

--
-- Table structure for table `age`
--

DROP TABLE IF EXISTS `age`;
CREATE TABLE IF NOT EXISTS `age` (
  `ageID` int(1) NOT NULL,
  `ageRange` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`ageID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `age`
--

INSERT INTO `age` (`ageID`, `ageRange`) VALUES
(1, '12 or under'),
(2, '13-17'),
(3, '18-25'),
(4, '26-35'),
(5, '36-45'),
(6, '46-55'),
(7, '56+');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `countryID` int(6) NOT NULL AUTO_INCREMENT,
  `country` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`countryID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`countryID`, `country`) VALUES
(1, 'Andorra'),
(2, 'United Arab Emirates'),
(3, 'Afghanistan'),
(4, 'Antigua and Barbuda'),
(5, 'Anguilla'),
(6, 'Albania'),
(7, 'Armenia'),
(8, 'Angola'),
(9, 'Antarctica'),
(10, 'Argentina'),
(11, 'American Samoa'),
(12, 'Austria'),
(13, 'Australia'),
(14, 'Aruba'),
(15, 'Åland'),
(16, 'Azerbaijan'),
(17, 'Bosnia and Herzegovina'),
(18, 'Barbados'),
(19, 'Bangladesh'),
(20, 'Belgium'),
(21, 'Burkina Faso'),
(22, 'Bulgaria'),
(23, 'Bahrain'),
(24, 'Burundi'),
(25, 'Benin'),
(26, 'Saint Barthélemy'),
(27, 'Bermuda'),
(28, 'Brunei'),
(29, 'Bolivia'),
(30, 'Bonaire'),
(31, 'Brazil'),
(32, 'Bahamas'),
(33, 'Bhutan'),
(34, 'Bouvet Island'),
(35, 'Botswana'),
(36, 'Belarus'),
(37, 'Belize'),
(38, 'Canada'),
(39, 'Cocos [Keeling] Islands'),
(40, 'Democratic Republic of the Congo'),
(41, 'Central African Republic'),
(42, 'Republic of the Congo'),
(43, 'Switzerland'),
(44, 'Ivory Coast'),
(45, 'Cook Islands'),
(46, 'Chile'),
(47, 'Cameroon'),
(48, 'China'),
(49, 'Colombia'),
(50, 'Costa Rica'),
(51, 'Cuba'),
(52, 'Cape Verde'),
(53, 'Curacao'),
(54, 'Christmas Island'),
(55, 'Cyprus'),
(56, 'Czechia'),
(57, 'Germany'),
(58, 'Djibouti'),
(59, 'Denmark'),
(60, 'Dominica'),
(61, 'Dominican Republic'),
(62, 'Algeria'),
(63, 'Ecuador'),
(64, 'Estonia'),
(65, 'Egypt'),
(66, 'Western Sahara'),
(67, 'Eritrea'),
(68, 'Spain'),
(69, 'Ethiopia'),
(70, 'Finland'),
(71, 'Fiji'),
(72, 'Falkland Islands'),
(73, 'Micronesia'),
(74, 'Faroe Islands'),
(75, 'France'),
(76, 'Gabon'),
(77, 'United Kingdom'),
(78, 'Grenada'),
(79, 'Georgia'),
(80, 'French Guiana'),
(81, 'Guernsey'),
(82, 'Ghana'),
(83, 'Gibraltar'),
(84, 'Greenland'),
(85, 'Gambia'),
(86, 'Guinea'),
(87, 'Guadeloupe'),
(88, 'Equatorial Guinea'),
(89, 'Greece'),
(90, 'South Georgia and the South Sandwich Islands'),
(91, 'Guatemala'),
(92, 'Guam'),
(93, 'Guinea-Bissau'),
(94, 'Guyana'),
(95, 'Hong Kong'),
(96, 'Heard Island and McDonald Islands'),
(97, 'Honduras'),
(98, 'Croatia'),
(99, 'Haiti'),
(100, 'Hungary'),
(101, 'Indonesia'),
(102, 'Ireland'),
(103, 'Israel'),
(104, 'Isle of Man'),
(105, 'India'),
(106, 'British Indian Ocean Territory'),
(107, 'Iraq'),
(108, 'Iran'),
(109, 'Iceland'),
(110, 'Italy'),
(111, 'Jersey'),
(112, 'Jamaica'),
(113, 'Jordan'),
(114, 'Japan'),
(115, 'Kenya'),
(116, 'Kyrgyzstan'),
(117, 'Cambodia'),
(118, 'Kiribati'),
(119, 'Comoros'),
(120, 'Saint Kitts and Nevis'),
(121, 'North Korea'),
(122, 'South Korea'),
(123, 'Kuwait'),
(124, 'Cayman Islands'),
(125, 'Kazakhstan'),
(126, 'Laos'),
(127, 'Lebanon'),
(128, 'Saint Lucia'),
(129, 'Liechtenstein'),
(130, 'Sri Lanka'),
(131, 'Liberia'),
(132, 'Lesotho'),
(133, 'Lithuania'),
(134, 'Luxembourg'),
(135, 'Latvia'),
(136, 'Libya'),
(137, 'Morocco'),
(138, 'Monaco'),
(139, 'Moldova'),
(140, 'Montenegro'),
(141, 'Saint Martin'),
(142, 'Madagascar'),
(143, 'Marshall Islands'),
(144, 'Macedonia'),
(145, 'Mali'),
(146, 'Myanmar [Burma]'),
(147, 'Mongolia'),
(148, 'Macao'),
(149, 'Northern Mariana Islands'),
(150, 'Martinique'),
(151, 'Mauritania'),
(152, 'Montserrat'),
(153, 'Malta'),
(154, 'Mauritius'),
(155, 'Maldives'),
(156, 'Malawi'),
(157, 'Mexico'),
(158, 'Malaysia'),
(159, 'Mozambique'),
(160, 'Namibia'),
(161, 'New Caledonia'),
(162, 'Niger'),
(163, 'Norfolk Island'),
(164, 'Nigeria'),
(165, 'Nicaragua'),
(166, 'Netherlands'),
(167, 'Norway'),
(168, 'Nepal'),
(169, 'Nauru'),
(170, 'Niue'),
(171, 'New Zealand'),
(172, 'Oman'),
(173, 'Panama'),
(174, 'Peru'),
(175, 'French Polynesia'),
(176, 'Papua New Guinea'),
(177, 'Philippines'),
(178, 'Pakistan'),
(179, 'Poland'),
(180, 'Saint Pierre and Miquelon'),
(181, 'Pitcairn Islands'),
(182, 'Puerto Rico'),
(183, 'Palestine'),
(184, 'Portugal'),
(185, 'Palau'),
(186, 'Paraguay'),
(187, 'Qatar'),
(188, 'Réunion'),
(189, 'Romania'),
(190, 'Serbia'),
(191, 'Russia'),
(192, 'Rwanda'),
(193, 'Saudi Arabia'),
(194, 'Solomon Islands'),
(195, 'Seychelles'),
(196, 'Sudan'),
(197, 'Sweden'),
(198, 'Singapore'),
(199, 'Saint Helena'),
(200, 'Slovenia'),
(201, 'Svalbard and Jan Mayen'),
(202, 'Slovakia'),
(203, 'Sierra Leone'),
(204, 'San Marino'),
(205, 'Senegal'),
(206, 'Somalia'),
(207, 'Suriname'),
(208, 'South Sudan'),
(209, 'São Tomé and Príncipe'),
(210, 'El Salvador'),
(211, 'Sint Maarten'),
(212, 'Syria'),
(213, 'Swaziland'),
(214, 'Turks and Caicos Islands'),
(215, 'Chad'),
(216, 'French Southern Territories'),
(217, 'Togo'),
(218, 'Thailand'),
(219, 'Tajikistan'),
(220, 'Tokelau'),
(221, 'East Timor'),
(222, 'Turkmenistan'),
(223, 'Tunisia'),
(224, 'Tonga'),
(225, 'Turkey'),
(226, 'Trinidad and Tobago'),
(227, 'Tuvalu'),
(228, 'Taiwan'),
(229, 'Tanzania'),
(230, 'Ukraine'),
(231, 'Uganda'),
(232, 'U.S. Minor Outlying Islands'),
(233, 'United States'),
(234, 'Uruguay'),
(235, 'Uzbekistan'),
(236, 'Vatican City'),
(237, 'Saint Vincent and the Grenadines'),
(238, 'Venezuela'),
(239, 'British Virgin Islands'),
(240, 'U.S. Virgin Islands'),
(241, 'Vietnam'),
(242, 'Vanuatu'),
(243, 'Wallis and Futuna'),
(244, 'Samoa'),
(245, 'Kosovo'),
(246, 'Yemen'),
(247, 'Mayotte'),
(248, 'South Africa'),
(249, 'Zambia'),
(250, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE IF NOT EXISTS `education` (
  `eduID` int(2) NOT NULL,
  `education` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`eduID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`eduID`, `education`) VALUES
(1, 'Primary School'),
(2, 'Secondary School'),
(3, 'Post-Secondary'),
(4, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

DROP TABLE IF EXISTS `gender`;
CREATE TABLE IF NOT EXISTS `gender` (
  `genderID` int(1) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  PRIMARY KEY (`genderID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`genderID`, `gender`) VALUES
(1, 'M'),
(2, 'F'),
(3, 'O');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `genreID` int(3) NOT NULL AUTO_INCREMENT,
  `genre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`genreID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genreID`, `genre`) VALUES
(1, 'Dirty jokes'),
(2, 'Ethnic jokes'),
(3, 'Family friendly'),
(4, 'Humorous'),
(5, 'Kids'),
(6, 'NSFW jokes'),
(7, 'One liners'),
(8, 'Puns'),
(9, 'Quotation'),
(10, 'Religious jokes'),
(11, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `joke`
--

DROP TABLE IF EXISTS `joke`;
CREATE TABLE IF NOT EXISTS `joke` (
  `jokeID` varchar(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `jRatingID` varchar(5) NOT NULL,
  `jGenreID` varchar(6) NOT NULL,
  `jTypeID` int(10) NOT NULL,
  `jReportID` varchar(10) NOT NULL,
  `jAge` char(1) NOT NULL,
  `jokeDesc` text NOT NULL,
  `datePosted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`jokeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jokegenre`
--

DROP TABLE IF EXISTS `jokegenre`;
CREATE TABLE IF NOT EXISTS `jokegenre` (
  `jGenreID` varchar(6) NOT NULL,
  `genreID` int(3) NOT NULL,
  PRIMARY KEY (`jGenreID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jokerating`
--

DROP TABLE IF EXISTS `jokerating`;
CREATE TABLE IF NOT EXISTS `jokerating` (
  `jRatingID` varchar(5) NOT NULL,
  `userID` int(10) NOT NULL,
  `rating` int(5) NOT NULL,
  PRIMARY KEY (`jRatingID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jokereport`
--

DROP TABLE IF EXISTS `jokereport`;
CREATE TABLE IF NOT EXISTS `jokereport` (
  `jReportID` varchar(10) NOT NULL,
  `reportID` varchar(6) NOT NULL,
  PRIMARY KEY (`jReportID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `joketype`
--

DROP TABLE IF EXISTS `joketype`;
CREATE TABLE IF NOT EXISTS `joketype` (
  `jTypeID` int(10) NOT NULL AUTO_INCREMENT,
  `joketype` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`jTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `joketype`
--

INSERT INTO `joketype` (`jTypeID`, `joketype`) VALUES
(1, 'Animal jokes'),
(2, 'Bar jokes'),
(3, 'Beer jokes'),
(4, 'Blonde jokes'),
(5, 'Dad jokes'),
(6, 'Dark humor'),
(7, 'Fat'),
(8, 'Irony '),
(9, 'Jewish jokes'),
(10, 'Knock knock jokes'),
(11, 'Nun jokes'),
(12, 'Puzzle jokes'),
(13, 'Rabbi jokes'),
(14, 'Riddles'),
(15, 'Satire'),
(16, 'Stereotypes'),
(17, 'Word plays'),
(18, 'Yo mama');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

DROP TABLE IF EXISTS `participant`;
CREATE TABLE IF NOT EXISTS `participant` (
  `userID` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `passhash` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `countryID` int(6) NOT NULL,
  `ageID` int(1) NOT NULL,
  `eduID` int(2) NOT NULL,
  `genderID` int(1) NOT NULL,
  `active` char(1) NOT NULL,
  `dateStarted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `reportID` varchar(6) NOT NULL,
  `userID` int(10) NOT NULL,
  `reportdesc` text,
  `dateReported` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`reportID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `similarjokes`
--

DROP TABLE IF EXISTS `similarjokes`;
CREATE TABLE IF NOT EXISTS `similarjokes` (
  `sJokeID` varchar(6) NOT NULL,
  `jokeID` varchar(10) NOT NULL,
  `jRatingID` varchar(5) NOT NULL,
  `userID` int(10) NOT NULL,
  PRIMARY KEY (`sJokeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

DROP TABLE IF EXISTS `tokens`;
CREATE TABLE IF NOT EXISTS `tokens` (
  `tokenID` int(10) NOT NULL,
  `token` varchar(255) NOT NULL,
  PRIMARY KEY (`tokenID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
