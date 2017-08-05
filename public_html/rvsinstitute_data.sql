-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2017 at 05:22 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rvsinstitute_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `AboutID` int(11) NOT NULL,
  `Abt_Name` varchar(64) DEFAULT NULL,
  `Abt_Address1` varchar(64) DEFAULT NULL,
  `Abt_Address2` varchar(64) DEFAULT NULL,
  `Abt_Address3` varchar(64) DEFAULT NULL,
  `CountryID` int(11) DEFAULT NULL,
  `StateID` int(11) DEFAULT NULL,
  `DistrictID` int(11) DEFAULT NULL,
  `Abt_City` varchar(32) DEFAULT NULL,
  `Abt_Pin` mediumint(6) DEFAULT NULL,
  `Abt_Mobile` bigint(10) DEFAULT NULL,
  `Abt_AltMobile` bigint(10) DEFAULT NULL,
  `Abt_EmailInfo` varchar(64) DEFAULT NULL,
  `Abt_EmailAdmin` varchar(64) DEFAULT NULL,
  `Abt_Website` varchar(64) DEFAULT NULL,
  `Abt_EstablishmentYear` smallint(4) DEFAULT NULL,
  `Abt_EstablishmentMonth` tinyint(2) DEFAULT NULL,
  `Abt_EstablishmentDate` tinyint(2) DEFAULT NULL,
  `Abt_Facebook` varchar(255) DEFAULT NULL,
  `Abt_Twitter` varchar(255) DEFAULT NULL,
  `Abt_Google` varchar(255) DEFAULT NULL,
  `Abt_Youtube` varchar(255) DEFAULT NULL,
  `Abt_Tagline` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`AboutID`, `Abt_Name`, `Abt_Address1`, `Abt_Address2`, `Abt_Address3`, `CountryID`, `StateID`, `DistrictID`, `Abt_City`, `Abt_Pin`, `Abt_Mobile`, `Abt_AltMobile`, `Abt_EmailInfo`, `Abt_EmailAdmin`, `Abt_Website`, `Abt_EstablishmentYear`, `Abt_EstablishmentMonth`, `Abt_EstablishmentDate`, `Abt_Facebook`, `Abt_Twitter`, `Abt_Google`, `Abt_Youtube`, `Abt_Tagline`) VALUES
(1, 'RVS Institute', 'Main Sangam Vihar Jagatpur Road', 'Near Yamuna Bio-Diversity Park', 'Street No. 12, Wazirabad Village', 103, 10, 131, 'Delhi', 110084, 9971201013, 9971303315, 'info@rvsinstitute.in', 'rvsir@rvsinstitute.in', 'http://www.rvsinstitute.in', 2009, 6, 5, 'https://www.facebook.com/rvsinstitute', NULL, 'https://plus.google.com/u/0/b/109171050435334448745/', 'https://www.youtube.com/channel/UClLKtKdeTb80su7m5oMw1xQ', '&#126; Values your trust');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `AdminName` varchar(100) DEFAULT NULL,
  `AdminUser` varchar(50) NOT NULL,
  `AdminPass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `AdminName`, `AdminUser`, `AdminPass`) VALUES
(1, 'Ranvijay', 'ranvijay', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `blocked`
--

CREATE TABLE `blocked` (
  `BlockedID` int(11) NOT NULL,
  `Blocked_Blocker` varchar(16) NOT NULL,
  `Blocked_Blockee` varchar(16) NOT NULL,
  `Blocked_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `CountryID` int(11) NOT NULL,
  `Country_Name` varchar(50) NOT NULL DEFAULT '',
  `Country_2Name` varchar(2) NOT NULL DEFAULT '',
  `Country_3Name` varchar(3) NOT NULL DEFAULT '',
  `Country_ISD` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`CountryID`, `Country_Name`, `Country_2Name`, `Country_3Name`, `Country_ISD`) VALUES
(1, 'Afghanistan', 'af', 'afg', 93),
(2, 'Aland Islands', 'ax', 'ala', NULL),
(3, 'Albania', 'al', 'alb', 355),
(4, 'Algeria', 'dz', 'dza', 213),
(5, 'American Samoa', 'as', 'asm', 684),
(6, 'Andorra', 'ad', 'and', 376),
(7, 'Angola', 'ao', 'ago', 244),
(8, 'Anguilla', 'ai', 'aia', 1),
(9, 'Antarctica', 'aq', '', NULL),
(10, 'Antigua and Barbuda', 'ag', 'atg', 1),
(11, 'Argentina', 'ar', 'arg', NULL),
(12, 'Armenia', 'am', 'arm', 374),
(13, 'Aruba', 'aw', 'abw', 297),
(14, 'Australia', 'au', 'aus', 61),
(15, 'Austria', 'at', 'aut', 43),
(16, 'Azerbaijan', 'az', 'aze', 994),
(17, 'Bahamas', 'bs', 'bhs', NULL),
(18, 'Bahrain', 'bh', 'bhr', NULL),
(19, 'Bangladesh', 'bd', 'bgd', NULL),
(20, 'Barbados', 'bb', 'brb', NULL),
(21, 'Belarus', 'by', 'blr', NULL),
(22, 'Belgium', 'be', 'bel', NULL),
(23, 'Belize', 'bz', 'blz', NULL),
(24, 'Benin', 'bj', 'ben', NULL),
(25, 'Bermuda', 'bm', 'bmu', NULL),
(26, 'Bhutan', 'bt', 'btn', NULL),
(27, 'Bolivia, Plurinational State of', 'bo', 'bol', NULL),
(28, 'Bonaire, Sint Eustatius and Saba', 'bq', 'bes', NULL),
(29, 'Bosnia and Herzegovina', 'ba', 'bih', NULL),
(30, 'Botswana', 'bw', 'bwa', NULL),
(31, 'Bouvet Island', 'bv', '', NULL),
(32, 'Brazil', 'br', 'bra', NULL),
(33, 'British Indian Ocean Territory', 'io', '', NULL),
(34, 'Brunei Darussalam', 'bn', 'brn', NULL),
(35, 'Bulgaria', 'bg', 'bgr', NULL),
(36, 'Burkina Faso', 'bf', 'bfa', NULL),
(37, 'Burundi', 'bi', 'bdi', NULL),
(38, 'Cambodia', 'kh', 'khm', NULL),
(39, 'Cameroon', 'cm', 'cmr', NULL),
(40, 'Canada', 'ca', 'can', NULL),
(41, 'Cape Verde', 'cv', 'cpv', NULL),
(42, 'Cayman Islands', 'ky', 'cym', NULL),
(43, 'Central African Republic', 'cf', 'caf', NULL),
(44, 'Chad', 'td', 'tcd', NULL),
(45, 'Chile', 'cl', 'chl', NULL),
(46, 'China', 'cn', 'chn', NULL),
(47, 'Christmas Island', 'cx', '', NULL),
(48, 'Cocos (Keeling) Islands', 'cc', '', NULL),
(49, 'Colombia', 'co', 'col', NULL),
(50, 'Comoros', 'km', 'com', NULL),
(51, 'Congo', 'cg', 'cog', NULL),
(52, 'Congo, The Democratic Republic of the', 'cd', 'cod', NULL),
(53, 'Cook Islands', 'ck', 'cok', NULL),
(54, 'Costa Rica', 'cr', 'cri', NULL),
(55, 'Cote d''Ivoire', 'ci', 'civ', NULL),
(56, 'Croatia', 'hr', 'hrv', NULL),
(57, 'Cuba', 'cu', 'cub', NULL),
(58, 'Curacao', 'cw', 'cuw', NULL),
(59, 'Cyprus', 'cy', 'cyp', NULL),
(60, 'Czech Republic', 'cz', 'cze', NULL),
(61, 'Denmark', 'dk', 'dnk', NULL),
(62, 'Djibouti', 'dj', 'dji', NULL),
(63, 'Dominica', 'dm', 'dma', NULL),
(64, 'Dominican Republic', 'do', 'dom', NULL),
(65, 'Ecuador', 'ec', 'ecu', NULL),
(66, 'Egypt', 'eg', 'egy', NULL),
(67, 'El Salvador', 'sv', 'slv', NULL),
(68, 'Equatorial Guinea', 'gq', 'gnq', NULL),
(69, 'Eritrea', 'er', 'eri', NULL),
(70, 'Estonia', 'ee', 'est', NULL),
(71, 'Ethiopia', 'et', 'eth', NULL),
(72, 'Falkland Islands (Malvinas)', 'fk', 'flk', NULL),
(73, 'Faroe Islands', 'fo', 'fro', NULL),
(74, 'Fiji', 'fj', 'fji', NULL),
(75, 'Finland', 'fi', 'fin', NULL),
(76, 'France', 'fr', 'fra', NULL),
(77, 'French Guiana', 'gf', 'guf', NULL),
(78, 'French Polynesia', 'pf', 'pyf', NULL),
(79, 'French Southern Territories', 'tf', '', NULL),
(80, 'Gabon', 'ga', 'gab', NULL),
(81, 'Gambia', 'gm', 'gmb', NULL),
(82, 'Georgia', 'ge', 'geo', NULL),
(83, 'Germany', 'de', 'deu', NULL),
(84, 'Ghana', 'gh', 'gha', NULL),
(85, 'Gibraltar', 'gi', 'gib', NULL),
(86, 'Greece', 'gr', 'grc', NULL),
(87, 'Greenland', 'gl', 'grl', NULL),
(88, 'Grenada', 'gd', 'grd', NULL),
(89, 'Guadeloupe', 'gp', 'glp', NULL),
(90, 'Guam', 'gu', 'gum', NULL),
(91, 'Guatemala', 'gt', 'gtm', NULL),
(92, 'Guernsey', 'gg', 'ggy', NULL),
(93, 'Guinea', 'gn', 'gin', NULL),
(94, 'Guinea-Bissau', 'gw', 'gnb', NULL),
(95, 'Guyana', 'gy', 'guy', NULL),
(96, 'Haiti', 'ht', 'hti', NULL),
(97, 'Heard Island and McDonald Islands', 'hm', '', NULL),
(98, 'Holy See (Vatican City State)', 'va', 'vat', NULL),
(99, 'Honduras', 'hn', 'hnd', NULL),
(100, 'Hong Kong', 'hk', 'hkg', NULL),
(101, 'Hungary', 'hu', 'hun', NULL),
(102, 'Iceland', 'is', 'isl', NULL),
(103, 'India', 'in', 'ind', 91),
(104, 'Indonesia', 'id', 'idn', NULL),
(105, 'Iran, Islamic Republic of', 'ir', 'irn', NULL),
(106, 'Iraq', 'iq', 'irq', NULL),
(107, 'Ireland', 'ie', 'irl', NULL),
(108, 'Isle of Man', 'im', 'imn', NULL),
(109, 'Israel', 'il', 'isr', NULL),
(110, 'Italy', 'it', 'ita', NULL),
(111, 'Jamaica', 'jm', 'jam', NULL),
(112, 'Japan', 'jp', 'jpn', NULL),
(113, 'Jersey', 'je', 'jey', NULL),
(114, 'Jordan', 'jo', 'jor', NULL),
(115, 'Kazakhstan', 'kz', 'kaz', NULL),
(116, 'Kenya', 'ke', 'ken', NULL),
(117, 'Kiribati', 'ki', 'kir', NULL),
(118, 'Korea, Democratic People''s Republic of', 'kp', 'prk', NULL),
(119, 'Korea, Republic of', 'kr', 'kor', NULL),
(120, 'Kuwait', 'kw', 'kwt', NULL),
(121, 'Kyrgyzstan', 'kg', 'kgz', NULL),
(122, 'Lao People''s Democratic Republic', 'la', 'lao', NULL),
(123, 'Latvia', 'lv', 'lva', NULL),
(124, 'Lebanon', 'lb', 'lbn', NULL),
(125, 'Lesotho', 'ls', 'lso', NULL),
(126, 'Liberia', 'lr', 'lbr', NULL),
(127, 'Libyan Arab Jamahiriya', 'ly', 'lby', NULL),
(128, 'Liechtenstein', 'li', 'lie', NULL),
(129, 'Lithuania', 'lt', 'ltu', NULL),
(130, 'Luxembourg', 'lu', 'lux', NULL),
(131, 'Macao', 'mo', 'mac', NULL),
(132, 'Macedonia, The former Yugoslav Republic of', 'mk', 'mkd', NULL),
(133, 'Madagascar', 'mg', 'mdg', NULL),
(134, 'Malawi', 'mw', 'mwi', NULL),
(135, 'Malaysia', 'my', 'mys', NULL),
(136, 'Maldives', 'mv', 'mdv', NULL),
(137, 'Mali', 'ml', 'mli', NULL),
(138, 'Malta', 'mt', 'mlt', NULL),
(139, 'Marshall Islands', 'mh', 'mhl', NULL),
(140, 'Martinique', 'mq', 'mtq', NULL),
(141, 'Mauritania', 'mr', 'mrt', NULL),
(142, 'Mauritius', 'mu', 'mus', NULL),
(143, 'Mayotte', 'yt', 'myt', NULL),
(144, 'Mexico', 'mx', 'mex', NULL),
(145, 'Micronesia, Federated States of', 'fm', 'fsm', NULL),
(146, 'Moldova, Republic of', 'md', 'mda', NULL),
(147, 'Monaco', 'mc', 'mco', NULL),
(148, 'Mongolia', 'mn', 'mng', NULL),
(149, 'Montenegro', 'me', 'mne', NULL),
(150, 'Montserrat', 'ms', 'msr', NULL),
(151, 'Morocco', 'ma', 'mar', NULL),
(152, 'Mozambique', 'mz', 'moz', NULL),
(153, 'Myanmar', 'mm', 'mmr', NULL),
(154, 'Namibia', 'na', 'nam', NULL),
(155, 'Nauru', 'nr', 'nru', NULL),
(156, 'Nepal', 'np', 'npl', NULL),
(157, 'Netherlands', 'nl', 'nld', NULL),
(158, 'New Caledonia', 'nc', 'ncl', NULL),
(159, 'New Zealand', 'nz', 'nzl', NULL),
(160, 'Nicaragua', 'ni', 'nic', NULL),
(161, 'Niger', 'ne', 'ner', NULL),
(162, 'Nigeria', 'ng', 'nga', NULL),
(163, 'Niue', 'nu', 'niu', NULL),
(164, 'Norfolk Island', 'nf', 'nfk', NULL),
(165, 'Northern Mariana Islands', 'mp', 'mnp', NULL),
(166, 'Norway', 'no', 'nor', NULL),
(167, 'Oman', 'om', 'omn', NULL),
(168, 'Pakistan', 'pk', 'pak', NULL),
(169, 'Palau', 'pw', 'plw', NULL),
(170, 'Palestinian Territory, Occupied', 'ps', 'pse', NULL),
(171, 'Panama', 'pa', 'pan', NULL),
(172, 'Papua New Guinea', 'pg', 'png', NULL),
(173, 'Paraguay', 'py', 'pry', NULL),
(174, 'Peru', 'pe', 'per', NULL),
(175, 'Philippines', 'ph', 'phl', NULL),
(176, 'Pitcairn', 'pn', 'pcn', NULL),
(177, 'Poland', 'pl', 'pol', NULL),
(178, 'Portugal', 'pt', 'prt', NULL),
(179, 'Puerto Rico', 'pr', 'pri', NULL),
(180, 'Qatar', 'qa', 'qat', NULL),
(181, 'Reunion', 're', 'reu', NULL),
(182, 'Romania', 'ro', 'rou', NULL),
(183, 'Russian Federation', 'ru', 'rus', NULL),
(184, 'Rwanda', 'rw', 'rwa', NULL),
(185, 'Saint Barthelemy', 'bl', 'blm', NULL),
(186, 'Saint Helena, Ascension and Tristan Da Cunha', 'sh', 'shn', NULL),
(187, 'Saint Kitts and Nevis', 'kn', 'kna', NULL),
(188, 'Saint Lucia', 'lc', 'lca', NULL),
(189, 'Saint Martin (French Part)', 'mf', 'maf', NULL),
(190, 'Saint Pierre and Miquelon', 'pm', 'spm', NULL),
(191, 'Saint Vincent and The Grenadines', 'vc', 'vct', NULL),
(192, 'Samoa', 'ws', 'wsm', NULL),
(193, 'San Marino', 'sm', 'smr', NULL),
(194, 'Sao Tome and Principe', 'st', 'stp', NULL),
(195, 'Saudi Arabia', 'sa', 'sau', NULL),
(196, 'Senegal', 'sn', 'sen', NULL),
(197, 'Serbia', 'rs', 'srb', NULL),
(198, 'Seychelles', 'sc', 'syc', NULL),
(199, 'Sierra Leone', 'sl', 'sle', NULL),
(200, 'Singapore', 'sg', 'sgp', NULL),
(201, 'Sint Maarten (Dutch Part)', 'sx', 'sxm', NULL),
(202, 'Slovakia', 'sk', 'svk', NULL),
(203, 'Slovenia', 'si', 'svn', NULL),
(204, 'Solomon Islands', 'sb', 'slb', NULL),
(205, 'Somalia', 'so', 'som', NULL),
(206, 'South Africa', 'za', 'zaf', NULL),
(207, 'South Georgia and The South Sandwich Islands', 'gs', '', NULL),
(208, 'South Sudan', 'ss', 'ssd', NULL),
(209, 'Spain', 'es', 'esp', NULL),
(210, 'Sri Lanka', 'lk', 'lka', NULL),
(211, 'Sudan', 'sd', 'sdn', NULL),
(212, 'Suriname', 'sr', 'sur', NULL),
(213, 'Svalbard and Jan Mayen', 'sj', 'sjm', NULL),
(214, 'Swaziland', 'sz', 'swz', NULL),
(215, 'Sweden', 'se', 'swe', NULL),
(216, 'Switzerland', 'ch', 'che', NULL),
(217, 'Syrian Arab Republic', 'sy', 'syr', NULL),
(218, 'Taiwan, Province of China', 'tw', '', NULL),
(219, 'Tajikistan', 'tj', 'tjk', NULL),
(220, 'Tanzania, United Republic of', 'tz', 'tza', NULL),
(221, 'Thailand', 'th', 'tha', NULL),
(222, 'Timor-Leste', 'tl', 'tls', NULL),
(223, 'Togo', 'tg', 'tgo', NULL),
(224, 'Tokelau', 'tk', 'tkl', NULL),
(225, 'Tonga', 'to', 'ton', NULL),
(226, 'Trinidad and Tobago', 'tt', 'tto', NULL),
(227, 'Tunisia', 'tn', 'tun', NULL),
(228, 'Turkey', 'tr', 'tur', NULL),
(229, 'Turkmenistan', 'tm', 'tkm', NULL),
(230, 'Turks and Caicos Islands', 'tc', 'tca', NULL),
(231, 'Tuvalu', 'tv', 'tuv', NULL),
(232, 'Uganda', 'ug', 'uga', NULL),
(233, 'Ukraine', 'ua', 'ukr', NULL),
(234, 'United Arab Emirates', 'ae', 'are', NULL),
(235, 'United Kingdom', 'gb', 'gbr', NULL),
(236, 'United States', 'us', 'usa', NULL),
(237, 'United States Minor Outlying Islands', 'um', '', NULL),
(238, 'Uruguay', 'uy', 'ury', NULL),
(239, 'Uzbekistan', 'uz', 'uzb', NULL),
(240, 'Vanuatu', 'vu', 'vut', NULL),
(241, 'Venezuela, Bolivarian Republic of', 've', 'ven', NULL),
(242, 'Viet Nam', 'vn', 'vnm', NULL),
(243, 'Virgin Islands, British', 'vg', 'vgb', NULL),
(244, 'Virgin Islands, U.S.', 'vi', 'vir', NULL),
(245, 'Wallis and Futuna', 'wf', 'wlf', NULL),
(246, 'Western Sahara', 'eh', 'esh', NULL),
(247, 'Yemen', 'ye', 'yem', NULL),
(248, 'Zambia', 'zm', 'zmb', NULL),
(249, 'Zimbabwe', 'zw', 'zwe', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseID` int(11) NOT NULL,
  `Course_Name` varchar(64) DEFAULT NULL,
  `Course_Code` varchar(6) DEFAULT NULL,
  `Active` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseID`, `Course_Name`, `Course_Code`, `Active`) VALUES
(1, 'Class 1', 'STD01', '0'),
(2, 'Class 2', 'STD02', '0'),
(3, 'Class 3', 'STD03', '0'),
(4, 'Class 4', 'STD04', '0'),
(5, 'Class 5', 'STD05', '0'),
(6, 'Class 6', 'STD06', '0'),
(7, 'Class 7', 'STD07', '0'),
(8, 'Class 8', 'STD08', '1'),
(9, 'Class 9', 'STD09', '1'),
(10, 'Class 10', 'STD10', '1'),
(11, 'Class 11', 'STD11', '1'),
(12, 'Class 12', 'STD12', '1'),
(13, 'Pre-Nursery', 'PRE01', '0'),
(14, 'Nursery', 'NUR01', '0'),
(15, 'Lower Kindergarten', 'LKG01', '0'),
(16, 'Upper Kindergarten', 'UKG01', '0'),
(17, 'Kindergarten', 'KGS01', '0'),
(18, 'Basic Computer Course', 'COMBC', '1'),
(19, 'Computer Competence Course', 'COMCC', '0'),
(20, 'Computer Typing English', 'COMTE', '1'),
(21, 'Computer Typing Hindi', 'COMTH', '1'),
(22, 'English Communication Skill General', 'ECSGN', '1'),
(23, 'English Communication Skill Training Course', 'ECSTC', '1');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `DistrictID` int(8) NOT NULL DEFAULT '0',
  `StateID` int(8) DEFAULT NULL,
  `Dist_Name` varchar(100) DEFAULT NULL,
  `Dist_Longitute` float(8,3) DEFAULT NULL,
  `Dist_Latitude` float(8,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`DistrictID`, `StateID`, `Dist_Name`, `Dist_Longitute`, `Dist_Latitude`) VALUES
(1, 1, 'North Andaman', NULL, NULL),
(2, 1, 'South Andaman', NULL, NULL),
(3, 1, 'Nicobar', NULL, NULL),
(4, 2, 'Adilabad', NULL, NULL),
(5, 2, 'Anantapur', NULL, NULL),
(6, 2, 'Chittoor', NULL, NULL),
(7, 2, 'East Godavari', NULL, NULL),
(8, 2, 'Guntur', NULL, NULL),
(9, 2, 'Hyderabad', NULL, NULL),
(10, 2, 'Karimnagar', NULL, NULL),
(11, 2, 'Khammam', NULL, NULL),
(12, 2, 'Krishna', NULL, NULL),
(13, 2, 'Kurnool', NULL, NULL),
(14, 2, 'Mahbubnagar', NULL, NULL),
(15, 2, 'Medak', NULL, NULL),
(16, 2, 'Nalgonda', NULL, NULL),
(17, 2, 'Nizamabad', NULL, NULL),
(18, 2, 'Prakasam', NULL, NULL),
(19, 2, 'Ranga Reddy', NULL, NULL),
(20, 2, 'Srikakulam', NULL, NULL),
(21, 2, 'Sri Potti Sri Ramulu Nellore', NULL, NULL),
(22, 2, 'Vishakhapatnam', NULL, NULL),
(23, 2, 'Vizianagaram', NULL, NULL),
(24, 2, 'Warangal', NULL, NULL),
(25, 2, 'West Godavari', NULL, NULL),
(26, 2, 'Cudappah', NULL, NULL),
(27, 3, 'Anjaw', NULL, NULL),
(28, 3, 'Changlang', NULL, NULL),
(29, 3, 'East Siang', NULL, NULL),
(30, 3, 'East Kameng', NULL, NULL),
(31, 3, 'Kurung Kumey', NULL, NULL),
(32, 3, 'Lohit', NULL, NULL),
(33, 3, 'Lower Dibang Valley', NULL, NULL),
(34, 3, 'Lower Subansiri', NULL, NULL),
(35, 3, 'Papum Pare', NULL, NULL),
(36, 3, 'Tawang', NULL, NULL),
(37, 3, 'Tirap', NULL, NULL),
(38, 3, 'Dibang Valley', NULL, NULL),
(39, 3, 'Upper Siang', NULL, NULL),
(40, 3, 'Upper Subansiri', NULL, NULL),
(41, 3, 'West Kameng', NULL, NULL),
(42, 3, 'West Siang', NULL, NULL),
(43, 4, 'Baksa', NULL, NULL),
(44, 4, 'Barpeta', NULL, NULL),
(45, 4, 'Bongaigaon', NULL, NULL),
(46, 4, 'Cachar', NULL, NULL),
(47, 4, 'Chirang', NULL, NULL),
(48, 4, 'Darrang', NULL, NULL),
(49, 4, 'Dhemaji', NULL, NULL),
(50, 4, 'Dima Hasao', NULL, NULL),
(51, 4, 'Dhubri', NULL, NULL),
(52, 4, 'Dibrugarh', NULL, NULL),
(53, 4, 'Goalpara', NULL, NULL),
(54, 4, 'Golaghat', NULL, NULL),
(55, 4, 'Hailakandi', NULL, NULL),
(56, 4, 'Jorhat', NULL, NULL),
(57, 4, 'Kamrup', NULL, NULL),
(58, 4, 'Kamrup Metropolitan', NULL, NULL),
(59, 4, 'Karbi Anglong', NULL, NULL),
(60, 4, 'Karimganj', NULL, NULL),
(61, 4, 'Kokrajhar', NULL, NULL),
(62, 4, 'Lakhimpur', NULL, NULL),
(63, 4, 'Morigaon', NULL, NULL),
(64, 4, 'Nagaon', NULL, NULL),
(65, 4, 'Nalbari', NULL, NULL),
(66, 4, 'Sivasagar', NULL, NULL),
(67, 4, 'Sonitpur', NULL, NULL),
(68, 4, 'Tinsukia', NULL, NULL),
(69, 4, 'Udalguri', NULL, NULL),
(70, 5, 'Araria', NULL, NULL),
(71, 5, 'Arwal', NULL, NULL),
(72, 5, 'Aurangabad', NULL, NULL),
(73, 5, 'Banka', NULL, NULL),
(74, 5, 'Begusarai', NULL, NULL),
(75, 5, 'Bhagalpur', NULL, NULL),
(76, 5, 'Bhojpur', NULL, NULL),
(77, 5, 'Buxar', NULL, NULL),
(78, 5, 'Darbhanga', NULL, NULL),
(79, 5, 'East Champaran', NULL, NULL),
(80, 5, 'Gaya', NULL, NULL),
(81, 5, 'Gopalganj', NULL, NULL),
(82, 5, 'Jamui', NULL, NULL),
(83, 5, 'Jehanabad', NULL, NULL),
(84, 5, 'Kaimur', NULL, NULL),
(85, 5, 'Katihar', NULL, NULL),
(86, 5, 'Khagaria', NULL, NULL),
(87, 5, 'Kishanganj', NULL, NULL),
(88, 5, 'Lakhisarai', NULL, NULL),
(89, 5, 'Madhepura', NULL, NULL),
(90, 5, 'Madhubani', NULL, NULL),
(91, 5, 'Munger', NULL, NULL),
(92, 5, 'Muzaffarpur', NULL, NULL),
(93, 5, 'Nalanda', NULL, NULL),
(94, 5, 'Nawada', NULL, NULL),
(95, 5, 'Patna', NULL, NULL),
(96, 5, 'Purnia', NULL, NULL),
(97, 5, 'Rohtas', NULL, NULL),
(98, 5, 'Saharsa', NULL, NULL),
(99, 5, 'Samastipur', NULL, NULL),
(100, 5, 'Saran', NULL, NULL),
(101, 5, 'Sheikhpura', NULL, NULL),
(102, 5, 'Sheohar', NULL, NULL),
(103, 5, 'Sitamarhi', NULL, NULL),
(104, 5, 'Siwan', NULL, NULL),
(105, 5, 'Supaul', NULL, NULL),
(106, 6, 'Chandigarh', NULL, NULL),
(107, 7, 'Bastar', NULL, NULL),
(108, 7, 'Bijapur', NULL, NULL),
(109, 7, 'Bilaspur', NULL, NULL),
(110, 7, 'Dantewada', NULL, NULL),
(111, 7, 'Dhamtari', NULL, NULL),
(112, 7, 'Durg', NULL, NULL),
(113, 7, 'Jashpur', NULL, NULL),
(114, 7, 'Janjgir-Champa', NULL, NULL),
(115, 7, 'Korba', NULL, NULL),
(116, 7, 'Koriya', NULL, NULL),
(117, 7, 'Kanker', NULL, NULL),
(118, 7, 'Kabirdham (formerly Kawardha)', NULL, NULL),
(119, 7, 'Mahasamund', NULL, NULL),
(120, 7, 'Narayanpur', NULL, NULL),
(121, 7, 'Raigarh', NULL, NULL),
(122, 7, 'Rajnandgaon', NULL, NULL),
(123, 7, 'Raipur', NULL, NULL),
(124, 7, 'Surguja', NULL, NULL),
(125, 8, 'Dadra and Nagar Haveli', NULL, NULL),
(126, 9, 'Daman', NULL, NULL),
(127, 9, 'Diu', NULL, NULL),
(128, 10, 'Central Delhi', NULL, NULL),
(129, 10, 'East Delhi', NULL, NULL),
(130, 10, 'New Delhi', NULL, NULL),
(131, 10, 'North Delhi', NULL, NULL),
(132, 10, 'North East Delhi', NULL, NULL),
(133, 10, 'North West Delhi', NULL, NULL),
(134, 10, 'South Delhi', NULL, NULL),
(135, 10, 'South West Delhi', NULL, NULL),
(136, 10, 'West Delhi', NULL, NULL),
(137, 11, 'North Goa', NULL, NULL),
(138, 11, 'South Goa', NULL, NULL),
(139, 12, 'Ahmedabad', NULL, NULL),
(140, 12, 'Amreli district', NULL, NULL),
(141, 12, 'Anand', NULL, NULL),
(142, 12, 'Banaskantha', NULL, NULL),
(143, 12, 'Bharuch', NULL, NULL),
(144, 12, 'Bhavnagar', NULL, NULL),
(145, 12, 'Dahod', NULL, NULL),
(146, 12, 'The Dangs', NULL, NULL),
(147, 12, 'Gandhinagar', NULL, NULL),
(148, 12, 'Jamnagar', NULL, NULL),
(149, 12, 'Junagadh', NULL, NULL),
(150, 12, 'Kutch', NULL, NULL),
(151, 12, 'Kheda', NULL, NULL),
(152, 12, 'Mehsana', NULL, NULL),
(153, 12, 'Narmada', NULL, NULL),
(154, 12, 'Navsari', NULL, NULL),
(155, 12, 'Patan', NULL, NULL),
(156, 12, 'Panchmahal', NULL, NULL),
(157, 12, 'Porbandar', NULL, NULL),
(158, 12, 'Rajkot', NULL, NULL),
(159, 12, 'Sabarkantha', NULL, NULL),
(160, 12, 'Surendranagar', NULL, NULL),
(161, 12, 'Surat', NULL, NULL),
(162, 12, 'Tapi', NULL, NULL),
(163, 12, 'Vadodara', NULL, NULL),
(164, 12, 'Valsad', NULL, NULL),
(165, 13, 'Ambala', NULL, NULL),
(166, 13, 'Bhiwani', NULL, NULL),
(167, 13, 'Faridabad', NULL, NULL),
(168, 13, 'Fatehabad', NULL, NULL),
(169, 13, 'Gurgaon', NULL, NULL),
(170, 13, 'Hissar', NULL, NULL),
(171, 13, 'Jhajjar', NULL, NULL),
(172, 13, 'Jind', NULL, NULL),
(173, 13, 'Karnal', NULL, NULL),
(174, 13, 'Kaithal', NULL, NULL),
(175, 13, 'Kurukshetra', NULL, NULL),
(176, 13, 'Mahendragarh', NULL, NULL),
(177, 13, 'Mewat', NULL, NULL),
(178, 13, 'Palwal', NULL, NULL),
(179, 13, 'Panchkula', NULL, NULL),
(180, 13, 'Panipat', NULL, NULL),
(181, 13, 'Rewari', NULL, NULL),
(182, 13, 'Rohtak', NULL, NULL),
(183, 13, 'Sirsa', NULL, NULL),
(184, 13, 'Sonipat', NULL, NULL),
(185, 13, 'Yamuna Nagar', NULL, NULL),
(186, 14, 'Bilaspur', NULL, NULL),
(187, 14, 'Chamba', NULL, NULL),
(188, 14, 'Hamirpur', NULL, NULL),
(189, 14, 'Kangra', NULL, NULL),
(190, 14, 'Kinnaur', NULL, NULL),
(191, 14, 'Kullu', NULL, NULL),
(192, 14, 'Lahaul and Spiti', NULL, NULL),
(193, 14, 'Mandi', NULL, NULL),
(194, 14, 'Shimla', NULL, NULL),
(195, 14, 'Sirmaur', NULL, NULL),
(196, 14, 'Solan', NULL, NULL),
(197, 14, 'Una', NULL, NULL),
(198, 15, 'Anantnag', NULL, NULL),
(199, 15, 'Badgam', NULL, NULL),
(200, 15, 'Bandipora', NULL, NULL),
(201, 15, 'Baramulla', NULL, NULL),
(202, 15, 'Doda', NULL, NULL),
(203, 15, 'Ganderbal', NULL, NULL),
(204, 15, 'Jammu', NULL, NULL),
(205, 15, 'Kargil', NULL, NULL),
(206, 15, 'Kathua', NULL, NULL),
(207, 15, 'Kishtwar', NULL, NULL),
(208, 15, 'Kupwara', NULL, NULL),
(209, 15, 'Kulgam', NULL, NULL),
(210, 15, 'Leh', NULL, NULL),
(211, 15, 'Poonch', NULL, NULL),
(212, 15, 'Pulwama', NULL, NULL),
(213, 15, 'Rajouri', NULL, NULL),
(214, 15, 'Ramban', NULL, NULL),
(215, 15, 'Reasi', NULL, NULL),
(216, 15, 'Samba', NULL, NULL),
(217, 15, 'Shopian', NULL, NULL),
(218, 15, 'Srinagar', NULL, NULL),
(219, 15, 'Udhampur', NULL, NULL),
(220, 16, 'Bokaro', NULL, NULL),
(221, 16, 'Chatra', NULL, NULL),
(222, 16, 'Deoghar', NULL, NULL),
(223, 16, 'Dhanbad', NULL, NULL),
(224, 16, 'Dumka', NULL, NULL),
(225, 16, 'East Singhbhum', NULL, NULL),
(226, 16, 'Garhwa', NULL, NULL),
(227, 16, 'Giridih', NULL, NULL),
(228, 16, 'Godda', NULL, NULL),
(229, 16, 'Gumla', NULL, NULL),
(230, 16, 'Hazaribag', NULL, NULL),
(231, 16, 'Jamtara', NULL, NULL),
(232, 16, 'Khunti', NULL, NULL),
(233, 16, 'Koderma', NULL, NULL),
(234, 16, 'Latehar', NULL, NULL),
(235, 16, 'Lohardaga', NULL, NULL),
(236, 16, 'Pakur', NULL, NULL),
(237, 16, 'Palamu', NULL, NULL),
(238, 16, 'Ramgarh', NULL, NULL),
(239, 16, 'Ranchi', NULL, NULL),
(240, 16, 'Sahibganj', NULL, NULL),
(241, 16, 'Seraikela Kharsawan', NULL, NULL),
(242, 16, 'Simdega', NULL, NULL),
(243, 16, 'West Singhbhum', NULL, NULL),
(244, 17, 'Bagalkot', NULL, NULL),
(245, 17, 'Bangalore Rural', NULL, NULL),
(246, 17, 'Bangalore Urban', NULL, NULL),
(247, 17, 'Belgaum', NULL, NULL),
(248, 17, 'Bellary', NULL, NULL),
(249, 17, 'Bidar', NULL, NULL),
(250, 17, 'Bijapur', NULL, NULL),
(251, 17, 'Chamarajnagar', NULL, NULL),
(252, 17, 'Chikkamagaluru', NULL, NULL),
(253, 17, 'Chikkaballapur', NULL, NULL),
(254, 17, 'Chitradurga', NULL, NULL),
(255, 17, 'Davanagere', NULL, NULL),
(256, 17, 'Dharwad', NULL, NULL),
(257, 17, 'Dakshina Kannada', NULL, NULL),
(258, 17, 'Gadag', NULL, NULL),
(259, 17, 'Gulbarga', NULL, NULL),
(260, 17, 'Hassan', NULL, NULL),
(261, 17, 'Haveri district', NULL, NULL),
(262, 17, 'Kodagu', NULL, NULL),
(263, 17, 'Kolar', NULL, NULL),
(264, 17, 'Koppal', NULL, NULL),
(265, 17, 'Mandya', NULL, NULL),
(266, 17, 'Mysore', NULL, NULL),
(267, 17, 'Raichur', NULL, NULL),
(268, 17, 'Shimoga', NULL, NULL),
(269, 17, 'Tumkur', NULL, NULL),
(270, 17, 'Udupi', NULL, NULL),
(271, 17, 'Uttara Kannada', NULL, NULL),
(272, 17, 'Ramanagara', NULL, NULL),
(273, 17, 'Yadgir', NULL, NULL),
(274, 18, 'Alappuzha', NULL, NULL),
(275, 18, 'Ernakulam', NULL, NULL),
(276, 18, 'Idukki', NULL, NULL),
(277, 18, 'Kannur', NULL, NULL),
(278, 18, 'Kasaragod', NULL, NULL),
(279, 18, 'Kollam', NULL, NULL),
(280, 18, 'Kottayam', NULL, NULL),
(281, 18, 'Kozhikode', NULL, NULL),
(282, 18, 'Malappuram', NULL, NULL),
(283, 18, 'Palakkad', NULL, NULL),
(284, 18, 'Pathanamthitta', NULL, NULL),
(285, 18, 'Thrissur', NULL, NULL),
(286, 18, 'Thiruvananthapuram', NULL, NULL),
(287, 18, 'Wayanad', NULL, NULL),
(288, 19, 'Lakshadweep', NULL, NULL),
(289, 20, 'Agar', NULL, NULL),
(290, 20, 'Alirajpur', NULL, NULL),
(291, 20, 'Anuppur', NULL, NULL),
(292, 20, 'Ashok Nagar', NULL, NULL),
(293, 20, 'Balaghat', NULL, NULL),
(294, 20, 'Barwani', NULL, NULL),
(295, 20, 'Betul', NULL, NULL),
(296, 20, 'Bhind', NULL, NULL),
(297, 20, 'Bhopal', NULL, NULL),
(298, 20, 'Burhanpur', NULL, NULL),
(299, 20, 'Chhatarpur', NULL, NULL),
(300, 20, 'Chhindwara', NULL, NULL),
(301, 20, 'Damoh', NULL, NULL),
(302, 20, 'Datia', NULL, NULL),
(303, 20, 'Dewas', NULL, NULL),
(304, 20, 'Dhar', NULL, NULL),
(305, 20, 'Dindori', NULL, NULL),
(306, 20, 'Guna', NULL, NULL),
(307, 20, 'Gwalior', NULL, NULL),
(308, 20, 'Harda', NULL, NULL),
(309, 20, 'Hoshangabad', NULL, NULL),
(310, 20, 'Indore', NULL, NULL),
(311, 20, 'Jabalpur', NULL, NULL),
(312, 20, 'Jhabua', NULL, NULL),
(313, 20, 'Katni', NULL, NULL),
(314, 20, 'Khandwa (East Nimar)', NULL, NULL),
(315, 20, 'Khargone (West Nimar)', NULL, NULL),
(316, 20, 'Mandla', NULL, NULL),
(317, 20, 'Mandsaur', NULL, NULL),
(318, 20, 'Morena', NULL, NULL),
(319, 20, 'Narsinghpur', NULL, NULL),
(320, 20, 'Neemuch', NULL, NULL),
(321, 20, 'Panna', NULL, NULL),
(322, 20, 'Raisen', NULL, NULL),
(323, 20, 'Rajgarh', NULL, NULL),
(324, 20, 'Ratlam', NULL, NULL),
(325, 20, 'Rewa', NULL, NULL),
(326, 20, 'Sagar', NULL, NULL),
(327, 20, 'Satna', NULL, NULL),
(328, 20, 'Sehore', NULL, NULL),
(329, 20, 'Seoni', NULL, NULL),
(330, 20, 'Shahdol', NULL, NULL),
(331, 20, 'Shajapur', NULL, NULL),
(332, 20, 'Sheopur', NULL, NULL),
(333, 20, 'Shivpuri', NULL, NULL),
(334, 20, 'Sidhi', NULL, NULL),
(335, 20, 'Singrauli', NULL, NULL),
(336, 20, 'Tikamgarh', NULL, NULL),
(337, 20, 'Ujjain', NULL, NULL),
(338, 20, 'Umaria', NULL, NULL),
(339, 20, 'Vidisha', NULL, NULL),
(340, 21, 'Ahmednagar', NULL, NULL),
(341, 21, 'Akola', NULL, NULL),
(342, 21, 'Amravati', NULL, NULL),
(343, 21, 'Aurangabad', NULL, NULL),
(344, 21, 'Beed', NULL, NULL),
(345, 21, 'Bhandara', NULL, NULL),
(346, 21, 'Buldhana', NULL, NULL),
(347, 21, 'Chandrapur', NULL, NULL),
(348, 21, 'Dhule', NULL, NULL),
(349, 21, 'Gadchiroli', NULL, NULL),
(350, 21, 'Gondia', NULL, NULL),
(351, 21, 'Hingoli', NULL, NULL),
(352, 21, 'Jalgaon', NULL, NULL),
(353, 21, 'Jalna', NULL, NULL),
(354, 21, 'Kolhapur', NULL, NULL),
(355, 21, 'Latur', NULL, NULL),
(356, 21, 'Mumbai City', NULL, NULL),
(357, 21, 'Mumbai suburban', NULL, NULL),
(358, 21, 'Nanded', NULL, NULL),
(359, 21, 'Nandurbar', NULL, NULL),
(360, 21, 'Nagpur', NULL, NULL),
(361, 21, 'Nashik', NULL, NULL),
(362, 21, 'Osmanabad', NULL, NULL),
(363, 21, 'Parbhani', NULL, NULL),
(364, 21, 'Pune', NULL, NULL),
(365, 21, 'Raigad', NULL, NULL),
(366, 21, 'Ratnagiri', NULL, NULL),
(367, 21, 'Sangli', NULL, NULL),
(368, 21, 'Satara', NULL, NULL),
(369, 21, 'Sindhudurg', NULL, NULL),
(370, 21, 'Solapur', NULL, NULL),
(371, 21, 'Thane', NULL, NULL),
(372, 21, 'Wardha', NULL, NULL),
(373, 21, 'Washim', NULL, NULL),
(374, 21, 'Yavatmal', NULL, NULL),
(375, 22, 'Bishnupur', NULL, NULL),
(376, 22, 'Churachandpur', NULL, NULL),
(377, 22, 'Chandel', NULL, NULL),
(378, 22, 'Imphal East', NULL, NULL),
(379, 22, 'Senapati', NULL, NULL),
(380, 22, 'Tamenglong', NULL, NULL),
(381, 22, 'Thoubal', NULL, NULL),
(382, 22, 'Ukhrul', NULL, NULL),
(383, 22, 'Imphal West', NULL, NULL),
(384, 23, 'East Garo Hills', NULL, NULL),
(385, 23, 'East Khasi Hills', NULL, NULL),
(386, 23, 'Jaintia Hills', NULL, NULL),
(387, 23, 'Ri Bhoi', NULL, NULL),
(388, 23, 'South Garo Hills', NULL, NULL),
(389, 23, 'West Garo Hills', NULL, NULL),
(390, 23, 'West Khasi Hills', NULL, NULL),
(391, 24, 'Aizawl', NULL, NULL),
(392, 24, 'Champhai', NULL, NULL),
(393, 24, 'Kolasib', NULL, NULL),
(394, 24, 'Lawngtlai', NULL, NULL),
(395, 24, 'Lunglei', NULL, NULL),
(396, 24, 'Mamit', NULL, NULL),
(397, 24, 'Saiha', NULL, NULL),
(398, 24, 'Serchhip', NULL, NULL),
(399, 25, 'Dimapur', NULL, NULL),
(400, 25, 'Kiphire', NULL, NULL),
(401, 25, 'Kohima', NULL, NULL),
(402, 25, 'Longleng', NULL, NULL),
(403, 25, 'Mokokchung', NULL, NULL),
(404, 25, 'Mon', NULL, NULL),
(405, 25, 'Peren', NULL, NULL),
(406, 25, 'Phek', NULL, NULL),
(407, 25, 'Tuensang', NULL, NULL),
(408, 25, 'Wokha', NULL, NULL),
(409, 25, 'Zunheboto', NULL, NULL),
(410, 26, 'Angul', NULL, NULL),
(411, 26, 'Boudh (Bauda)', NULL, NULL),
(412, 26, 'Bhadrak', NULL, NULL),
(413, 26, 'Balangir', NULL, NULL),
(414, 26, 'Bargarh (Baragarh)', NULL, NULL),
(415, 26, 'Balasore', NULL, NULL),
(416, 26, 'Cuttack', NULL, NULL),
(417, 26, 'Debagarh (Deogarh)', NULL, NULL),
(418, 26, 'Dhenkanal', NULL, NULL),
(419, 26, 'Ganjam', NULL, NULL),
(420, 26, 'Gajapati', NULL, NULL),
(421, 26, 'Jharsuguda', NULL, NULL),
(422, 26, 'Jajpur', NULL, NULL),
(423, 26, 'Jagatsinghpur', NULL, NULL),
(424, 26, 'Khordha', NULL, NULL),
(425, 26, 'Kendujhar (Keonjhar)', NULL, NULL),
(426, 26, 'Kalahandi', NULL, NULL),
(427, 26, 'Kandhamal', NULL, NULL),
(428, 26, 'Koraput', NULL, NULL),
(429, 26, 'Kendrapara', NULL, NULL),
(430, 26, 'Malkangiri', NULL, NULL),
(431, 26, 'Mayurbhanj', NULL, NULL),
(432, 26, 'Nabarangpur', NULL, NULL),
(433, 26, 'Nuapada', NULL, NULL),
(434, 26, 'Nayagarh', NULL, NULL),
(435, 26, 'Puri', NULL, NULL),
(436, 26, 'Rayagada', NULL, NULL),
(437, 26, 'Sambalpur', NULL, NULL),
(438, 26, 'Subarnapur (Sonepur)', NULL, NULL),
(439, 26, 'Sundergarh', NULL, NULL),
(440, 27, 'Karaikal', NULL, NULL),
(441, 27, 'Mahe', NULL, NULL),
(442, 27, 'Pondicherry', NULL, NULL),
(443, 27, 'Yanam', NULL, NULL),
(444, 28, 'Amritsar', NULL, NULL),
(445, 28, 'Barnala', NULL, NULL),
(446, 28, 'Bathinda', NULL, NULL),
(447, 28, 'Firozpur', NULL, NULL),
(448, 28, 'Faridkot', NULL, NULL),
(449, 28, 'Fatehgarh Sahib', NULL, NULL),
(450, 28, 'Fazilka[6]', NULL, NULL),
(451, 28, 'Gurdaspur', NULL, NULL),
(452, 28, 'Hoshiarpur', NULL, NULL),
(453, 28, 'Jalandhar', NULL, NULL),
(454, 28, 'Kapurthala', NULL, NULL),
(455, 28, 'Ludhiana', NULL, NULL),
(456, 28, 'Mansa', NULL, NULL),
(457, 28, 'Moga', NULL, NULL),
(458, 28, 'Sri Muktsar Sahib', NULL, NULL),
(459, 28, 'Pathankot', NULL, NULL),
(460, 28, 'Patiala', NULL, NULL),
(461, 28, 'Rupnagar', NULL, NULL),
(462, 28, 'Ajitgarh (Mohali)', NULL, NULL),
(463, 28, 'Sangrur', NULL, NULL),
(464, 28, 'Shahid Bhagat Singh Nagar', NULL, NULL),
(465, 28, 'Tarn Taran', NULL, NULL),
(466, 29, 'Ajmer', NULL, NULL),
(467, 29, 'Alwar', NULL, NULL),
(468, 29, 'Bikaner', NULL, NULL),
(469, 29, 'Barmer', NULL, NULL),
(470, 29, 'Banswara', NULL, NULL),
(471, 29, 'Bharatpur', NULL, NULL),
(472, 29, 'Baran', NULL, NULL),
(473, 29, 'Bundi', NULL, NULL),
(474, 29, 'Bhilwara', NULL, NULL),
(475, 29, 'Churu', NULL, NULL),
(476, 29, 'Chittorgarh', NULL, NULL),
(477, 29, 'Dausa', NULL, NULL),
(478, 29, 'Dholpur', NULL, NULL),
(479, 29, 'Dungapur', NULL, NULL),
(480, 29, 'Ganganagar', NULL, NULL),
(481, 29, 'Hanumangarh', NULL, NULL),
(482, 29, 'Jhunjhunu', NULL, NULL),
(483, 29, 'Jalore', NULL, NULL),
(484, 29, 'Jodhpur', NULL, NULL),
(485, 29, 'Jaipur', NULL, NULL),
(486, 29, 'Jaisalmer', NULL, NULL),
(487, 29, 'Jhalawar', NULL, NULL),
(488, 29, 'Karauli', NULL, NULL),
(489, 29, 'Kota', NULL, NULL),
(490, 29, 'Nagaur', NULL, NULL),
(491, 29, 'Pali', NULL, NULL),
(492, 29, 'Pratapgarh', NULL, NULL),
(493, 29, 'Rajsamand', NULL, NULL),
(494, 29, 'Sikar', NULL, NULL),
(495, 29, 'Sawai Madhopur', NULL, NULL),
(496, 29, 'Sirohi', NULL, NULL),
(497, 29, 'Tonk', NULL, NULL),
(498, 29, 'Udaipur', NULL, NULL),
(499, 30, 'East Sikkim', NULL, NULL),
(500, 30, 'North Sikkim', NULL, NULL),
(501, 30, 'South Sikkim', NULL, NULL),
(502, 30, 'West Sikkim', NULL, NULL),
(503, 31, 'Ariyalur', NULL, NULL),
(504, 31, 'Chennai', NULL, NULL),
(505, 31, 'Coimbatore', NULL, NULL),
(506, 31, 'Cuddalore', NULL, NULL),
(507, 31, 'Dharmapuri', NULL, NULL),
(508, 31, 'Dindigul', NULL, NULL),
(509, 31, 'Erode', NULL, NULL),
(510, 31, 'Kanchipuram', NULL, NULL),
(511, 31, 'Kanyakumari', NULL, NULL),
(512, 31, 'Karur', NULL, NULL),
(513, 31, 'Krishnagiri', NULL, NULL),
(514, 31, 'Madurai', NULL, NULL),
(515, 31, 'Nagapattinam', NULL, NULL),
(516, 31, 'Nilgiris', NULL, NULL),
(517, 31, 'Namakkal', NULL, NULL),
(518, 31, 'Perambalur', NULL, NULL),
(519, 31, 'Pudukkottai', NULL, NULL),
(520, 31, 'Ramanathapuram', NULL, NULL),
(521, 31, 'Salem', NULL, NULL),
(522, 31, 'Sivaganga', NULL, NULL),
(523, 31, 'Tirupur', NULL, NULL),
(524, 31, 'Tiruchirappalli', NULL, NULL),
(525, 31, 'Theni', NULL, NULL),
(526, 31, 'Tirunelveli', NULL, NULL),
(527, 31, 'Thanjavur', NULL, NULL),
(528, 31, 'Thoothukudi', NULL, NULL),
(529, 31, 'Tiruvallur', NULL, NULL),
(530, 31, 'Tiruvarur', NULL, NULL),
(531, 31, 'Tiruvannamalai', NULL, NULL),
(532, 31, 'Vellore', NULL, NULL),
(533, 31, 'Viluppuram', NULL, NULL),
(534, 31, 'Virudhunagar', NULL, NULL),
(535, 32, 'Dhalai', NULL, NULL),
(536, 32, 'North Tripura', NULL, NULL),
(537, 32, 'South Tripura', NULL, NULL),
(538, 32, 'Khowai[7]', NULL, NULL),
(539, 32, 'West Tripura', NULL, NULL),
(540, 33, 'Agra', NULL, NULL),
(541, 33, 'Aligarh', NULL, NULL),
(542, 33, 'Allahabad', NULL, NULL),
(543, 33, 'Ambedkar Nagar', NULL, NULL),
(544, 33, 'Auraiya', NULL, NULL),
(545, 33, 'Azamgarh', NULL, NULL),
(546, 33, 'Bagpat', NULL, NULL),
(547, 33, 'Bahraich', NULL, NULL),
(548, 33, 'Ballia', NULL, NULL),
(549, 33, 'Balrampur', NULL, NULL),
(550, 33, 'Banda', NULL, NULL),
(551, 33, 'Barabanki', NULL, NULL),
(552, 33, 'Bareilly', NULL, NULL),
(553, 33, 'Basti', NULL, NULL),
(554, 33, 'Bijnor', NULL, NULL),
(555, 33, 'Budaun', NULL, NULL),
(556, 33, 'Bulandshahr', NULL, NULL),
(557, 33, 'Chandauli', NULL, NULL),
(558, 33, 'Chhatrapati Shahuji Maharaj Nagar[8]', NULL, NULL),
(559, 33, 'Chitrakoot', NULL, NULL),
(560, 33, 'Deoria', NULL, NULL),
(561, 33, 'Etah', NULL, NULL),
(562, 33, 'Etawah', NULL, NULL),
(563, 33, 'Faizabad', NULL, NULL),
(564, 33, 'Farrukhabad', NULL, NULL),
(565, 33, 'Fatehpur', NULL, NULL),
(566, 33, 'Firozabad', NULL, NULL),
(567, 33, 'Gautam Buddh Nagar', NULL, NULL),
(568, 33, 'Ghaziabad', NULL, NULL),
(569, 33, 'Ghazipur', NULL, NULL),
(570, 33, 'Gonda', NULL, NULL),
(571, 33, 'Gorakhpur', NULL, NULL),
(572, 33, 'Hamirpur', NULL, NULL),
(573, 33, 'Hardoi', NULL, NULL),
(574, 33, 'Hathras', NULL, NULL),
(575, 33, 'Jalaun', NULL, NULL),
(576, 33, 'Jaunpur district', NULL, NULL),
(577, 33, 'Jhansi', NULL, NULL),
(578, 33, 'Jyotiba Phule Nagar', NULL, NULL),
(579, 33, 'Kannauj', NULL, NULL),
(580, 33, 'Kanpur', NULL, NULL),
(581, 33, 'Kanshi Ram Nagar', NULL, NULL),
(582, 33, 'Kaushambi', NULL, NULL),
(583, 33, 'Kushinagar', NULL, NULL),
(584, 33, 'Lakhimpur Kheri', NULL, NULL),
(585, 33, 'Lalitpur', NULL, NULL),
(586, 33, 'Lucknow', NULL, NULL),
(587, 33, 'Maharajganj', NULL, NULL),
(588, 33, 'Mahoba', NULL, NULL),
(589, 33, 'Mainpuri', NULL, NULL),
(590, 33, 'Mathura', NULL, NULL),
(591, 33, 'Mau', NULL, NULL),
(592, 33, 'Meerut', NULL, NULL),
(593, 33, 'Mirzapur', NULL, NULL),
(594, 33, 'Moradabad', NULL, NULL),
(595, 33, 'Muzaffarnagar', NULL, NULL),
(596, 33, 'Panchsheel Nagar district (Hapur)', NULL, NULL),
(597, 33, 'Pilibhit', NULL, NULL),
(598, 33, 'Pratapgarh', NULL, NULL),
(599, 33, 'Raebareli', NULL, NULL),
(600, 33, 'Ramabai Nagar (Kanpur Dehat)', NULL, NULL),
(601, 33, 'Rampur', NULL, NULL),
(602, 33, 'Saharanpur', NULL, NULL),
(603, 33, 'Sant Kabir Nagar', NULL, NULL),
(604, 33, 'Sant Ravidas Nagar', NULL, NULL),
(605, 33, 'Shahjahanpur', NULL, NULL),
(606, 33, 'Shamli[9]', NULL, NULL),
(607, 33, 'Shravasti', NULL, NULL),
(608, 33, 'Siddharthnagar', NULL, NULL),
(609, 33, 'Sitapur', NULL, NULL),
(610, 33, 'Sonbhadra', NULL, NULL),
(611, 33, 'Sultanpur', NULL, NULL),
(612, 33, 'Unnao', NULL, NULL),
(613, 33, 'Varanasi', NULL, NULL),
(614, 34, 'Almora', NULL, NULL),
(615, 34, 'Bageshwar', NULL, NULL),
(616, 34, 'Chamoli', NULL, NULL),
(617, 34, 'Champawat', NULL, NULL),
(618, 34, 'Dehradun', NULL, NULL),
(619, 34, 'Haridwar', NULL, NULL),
(620, 34, 'Nainital', NULL, NULL),
(621, 34, 'Pauri Garhwal', NULL, NULL),
(622, 34, 'Pithoragarh', NULL, NULL),
(623, 34, 'Rudraprayag', NULL, NULL),
(624, 34, 'Tehri Garhwal', NULL, NULL),
(625, 34, 'Udham Singh Nagar', NULL, NULL),
(626, 34, 'Uttarkashi', NULL, NULL),
(627, 35, 'Bankura', NULL, NULL),
(628, 35, 'Bardhaman', NULL, NULL),
(629, 35, 'Birbhum', NULL, NULL),
(630, 35, 'Cooch Behar', NULL, NULL),
(631, 35, 'Dakshin Dinajpur', NULL, NULL),
(632, 35, 'Darjeeling', NULL, NULL),
(633, 35, 'Hooghly', NULL, NULL),
(634, 35, 'Howrah', NULL, NULL),
(635, 35, 'Jalpaiguri', NULL, NULL),
(636, 35, 'Kolkata', NULL, NULL),
(637, 35, 'Maldah', NULL, NULL),
(638, 35, 'Murshidabad', NULL, NULL),
(639, 35, 'Nadia', NULL, NULL),
(640, 35, 'North 24 Parganas', NULL, NULL),
(641, 35, 'Paschim Medinipur', NULL, NULL),
(642, 35, 'Purba Medinipur', NULL, NULL),
(643, 35, 'Purulia', NULL, NULL),
(644, 35, 'South 24 Parganas', NULL, NULL),
(645, 35, 'Uttar Dinajpur', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `EnquiryID` int(11) NOT NULL,
  `Enq_Title` varchar(4) NOT NULL,
  `Enq_FirstName` varchar(32) NOT NULL,
  `Enq_MiddleName` varchar(32) DEFAULT NULL,
  `Enq_LastName` varchar(32) DEFAULT NULL,
  `Enq_Mobile` bigint(10) NOT NULL,
  `Enq_AltMobile` bigint(10) DEFAULT NULL,
  `Enq_Course` varchar(32) DEFAULT NULL,
  `Enq_Feedback` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE `friend` (
  `FriendID` int(11) NOT NULL,
  `Friend_Sender` varchar(16) NOT NULL,
  `Friend_Receiver` varchar(16) NOT NULL,
  `Friend_Date` datetime NOT NULL,
  `Friend_Accepted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `NotificationID` int(11) NOT NULL,
  `Notes_UserName` varchar(16) DEFAULT NULL,
  `Notes_Initiator` varchar(16) DEFAULT NULL,
  `Notes_App` varchar(255) DEFAULT NULL,
  `Notes_Detail` varchar(255) DEFAULT NULL,
  `Notes_Read` enum('0','1') DEFAULT NULL,
  `Note_Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `PhotoID` int(11) NOT NULL,
  `Photo_User` varchar(16) DEFAULT NULL,
  `Photo_Gallery` varchar(16) DEFAULT NULL,
  `Photo_Name` varchar(255) NOT NULL,
  `Photo_Description` varchar(255) DEFAULT NULL,
  `Photo_Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `Registered_ID` int(11) NOT NULL,
  `Reg_FirstName` varchar(32) NOT NULL,
  `Reg_MiddleName` varchar(32) DEFAULT NULL,
  `Reg_LastName` varchar(32) DEFAULT NULL,
  `Reg_Course` varchar(32) NOT NULL,
  `Reg_Mobile` bigint(12) DEFAULT NULL,
  `Reg_Date` int(11) NOT NULL,
  `Reg_Month` int(11) NOT NULL,
  `Reg_Year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `SectionID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `Sec_Name` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `StateID` int(8) NOT NULL,
  `CountryID` int(11) NOT NULL,
  `State_Name` varchar(100) NOT NULL,
  `State_Code` varchar(4) NOT NULL,
  `State_Longitute` float(8,5) DEFAULT NULL,
  `State_Latitude` float(8,5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`StateID`, `CountryID`, `State_Name`, `State_Code`, `State_Longitute`, `State_Latitude`) VALUES
(1, 103, 'Andaman and Nicobar', 'AN', NULL, NULL),
(2, 103, 'Andhra Pradesh', 'AP', NULL, NULL),
(3, 103, 'Arunachal Pradesh', 'AR', NULL, NULL),
(4, 103, 'Assam', 'AS', NULL, NULL),
(5, 103, 'Bihar', 'BR', NULL, NULL),
(6, 103, 'Chandigarh', 'CH', NULL, NULL),
(7, 103, 'Chhattisgarh', 'CG', NULL, NULL),
(8, 103, 'Dadra and Nagar Haveli', 'DN', NULL, NULL),
(9, 103, 'Daman and Diu', 'DD', NULL, NULL),
(10, 103, 'Delhi', 'DL', NULL, NULL),
(11, 103, 'Goa', 'GA', NULL, NULL),
(12, 103, 'Gujarat', 'GJ', NULL, NULL),
(13, 103, 'Haryana', 'HR', NULL, NULL),
(14, 103, 'Himachal Pradesh', 'HP', NULL, NULL),
(15, 103, 'Jammu and Kashmir', 'JK', NULL, NULL),
(16, 103, 'Jharkhand', 'JH', NULL, NULL),
(17, 103, 'Karnataka', 'KA', NULL, NULL),
(18, 103, 'Kerala', 'KL', NULL, NULL),
(19, 103, 'Lakshdweep', 'LD', NULL, NULL),
(20, 103, 'Madhya Pradesh', 'MP', NULL, NULL),
(21, 103, 'Maharashtra', 'MH', NULL, NULL),
(22, 103, 'Manipur', 'MN', NULL, NULL),
(23, 103, 'Meghalaya', 'ML', NULL, NULL),
(24, 103, 'Mizoram', 'MZ', NULL, NULL),
(25, 103, 'Nagaland', 'NL', NULL, NULL),
(26, 103, 'Odisha', 'OD', NULL, NULL),
(27, 103, 'Puducherry', 'PY', NULL, NULL),
(28, 103, 'Punjab', 'PB', NULL, NULL),
(29, 103, 'Rajasthan', 'RJ', NULL, NULL),
(30, 103, 'Sikkim', 'SK', NULL, NULL),
(31, 103, 'Tamil Nadu', 'TN', NULL, NULL),
(32, 103, 'Tripura', 'TR', NULL, NULL),
(33, 103, 'Uttar Pradesh', 'UP', NULL, NULL),
(34, 103, 'Uttarakhand', 'UK', NULL, NULL),
(35, 103, 'West Bengal', 'WB', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `StatusID` int(11) NOT NULL,
  `OSID` int(11) NOT NULL,
  `Status_AccountName` varchar(16) NOT NULL,
  `Status_Author` varchar(16) NOT NULL,
  `Status_Type` enum('a','b','c') NOT NULL,
  `Status_Data` text NOT NULL,
  `Status_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentID` int(11) NOT NULL,
  `Stu_UserName` varchar(32) NOT NULL,
  `Stu_Titile` varchar(5) DEFAULT NULL,
  `Stu_FirstName` varchar(32) NOT NULL,
  `Stu_MiddleName` varchar(32) DEFAULT NULL,
  `Stu_LastName` varchar(32) DEFAULT NULL,
  `Stu_FatherName` varchar(64) DEFAULT NULL,
  `Stu_MotherName` varchar(64) DEFAULT NULL,
  `Stu_StreetAddress1` varchar(64) DEFAULT NULL,
  `Stu_StreetAddress2` varchar(64) DEFAULT NULL,
  `Stu_StreetAddress3` varchar(64) DEFAULT NULL,
  `Stu_City` varchar(32) DEFAULT NULL,
  `StateID` int(11) NOT NULL,
  `Stu_Pin` int(8) DEFAULT NULL,
  `Stu_Mobile` bigint(10) DEFAULT NULL,
  `Stu_AltMobile` bigint(10) DEFAULT NULL,
  `Stu_Email` varchar(64) DEFAULT NULL,
  `Stu_AdmissionDate` int(4) DEFAULT NULL,
  `Stu_AdmissionMonth` int(4) DEFAULT NULL,
  `Stu_AdmissionYear` int(6) DEFAULT NULL,
  `CourseID` varchar(6) NOT NULL,
  `DiscountID` int(11) DEFAULT NULL,
  `Stu_Avatar` varchar(255) DEFAULT NULL,
  `Stu_Password` varchar(255) DEFAULT NULL,
  `Stu_Gender` enum('M','F','T') DEFAULT NULL,
  `CountryID` int(11) NOT NULL,
  `DistrictID` int(11) NOT NULL,
  `Stu_NotesCheck` datetime NOT NULL,
  `Stu_Activated` enum('0','1') DEFAULT NULL,
  `Stu_Level` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `Stu_IP` varchar(255) NOT NULL,
  `Stu_RegDate` datetime NOT NULL,
  `Stu_LastLogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentID`, `Stu_UserName`, `Stu_Titile`, `Stu_FirstName`, `Stu_MiddleName`, `Stu_LastName`, `Stu_FatherName`, `Stu_MotherName`, `Stu_StreetAddress1`, `Stu_StreetAddress2`, `Stu_StreetAddress3`, `Stu_City`, `StateID`, `Stu_Pin`, `Stu_Mobile`, `Stu_AltMobile`, `Stu_Email`, `Stu_AdmissionDate`, `Stu_AdmissionMonth`, `Stu_AdmissionYear`, `CourseID`, `DiscountID`, `Stu_Avatar`, `Stu_Password`, `Stu_Gender`, `CountryID`, `DistrictID`, `Stu_NotesCheck`, `Stu_Activated`, `Stu_Level`, `Stu_IP`, `Stu_RegDate`, `Stu_LastLogin`) VALUES
(1, 'karankaushik', 'Mr.', 'Karan', NULL, 'Kaushik', 'Dinesh Kaushik', 'Meena Sharma', 'Gali No. 17', 'Near Samadhi', 'Jagatpur Ext.', NULL, 0, 110084, 8800505970, 8800405911, NULL, 3, 4, 2016, 'STD09', 0, NULL, NULL, 'M', 103, 0, '0000-00-00 00:00:00', '0', '0', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'gauravmathur', 'Mr.', 'Gaurav', NULL, 'Mathur', 'Viresh Singh', 'Madhu', 'Gali No. 5', 'Sangam Vihar', NULL, NULL, 0, 110084, 9818335461, 9953497744, NULL, 15, 8, 2016, 'STD09', 0, NULL, NULL, 'M', 103, 0, '0000-00-00 00:00:00', '0', '0', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'harshkaushik', 'Mr.', 'Harsh', NULL, 'Kaushik', 'Dinesh Kaushik', 'Meena Sharma', 'Gali No. 17', 'Near Samadhi', 'Jagatpur Ext', NULL, 0, 110084, 8800505970, 7557558746, NULL, 3, 4, 2016, 'STD10', 0, NULL, NULL, 'M', 103, 0, '0000-00-00 00:00:00', '0', '0', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'harshgaur', 'Mr.', 'Harsh', NULL, 'Guar', 'Mukesh Kumar', 'Poonam Sharma', 'Khasra No. 101/2', 'Main Jagatpur Road', 'Wazirabad Village', NULL, 0, 110084, 9811898281, 9873078281, 'mukesh.gaur@yahoo.com', 1, 8, 2016, 'STD10', 0, NULL, NULL, 'M', 103, 0, '0000-00-00 00:00:00', '0', '0', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'lakshyabalyan', 'Mr.', 'Lakshya', NULL, 'Balyan', 'Dinesh Balyan', 'Archana Balyan', 'G 11/421, Gali No. 12', 'Shiv Mandir Wali Gali', 'Wazirabad Village', NULL, 0, 110084, 8447101616, 9999293421, NULL, 3, 10, 2016, 'STD10', 0, NULL, NULL, 'M', 103, 0, '0000-00-00 00:00:00', '0', '0', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'ritikkumargupta', 'Mr.', 'Ritik', 'Kumar', 'Gupta', 'Munna Shah', 'Pushpa Devi', 'House No. 174, Gali No. 8', 'Near Shiv Chauk', 'Wazirabad Village', NULL, 0, 110084, 9650980516, 9958801976, 'roshanritik2014@gmail.com', 8, 9, 2016, 'STD11', 0, NULL, NULL, 'M', 103, 0, '0000-00-00 00:00:00', '0', '0', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SubjectID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `Sub_Name` varchar(64) DEFAULT NULL,
  `Sub_Code` smallint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`AboutID`),
  ADD KEY `fk_about_CountryID_country` (`CountryID`),
  ADD KEY `fk_about_StateID_state` (`StateID`),
  ADD KEY `fk_about_DistrictID_district` (`DistrictID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `blocked`
--
ALTER TABLE `blocked`
  ADD PRIMARY KEY (`BlockedID`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`CountryID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`DistrictID`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`EnquiryID`);

--
-- Indexes for table `friend`
--
ALTER TABLE `friend`
  ADD PRIMARY KEY (`FriendID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`NotificationID`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`PhotoID`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`Registered_ID`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`SectionID`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`StateID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`StatusID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentID`),
  ADD UNIQUE KEY `Stu_UserName` (`Stu_UserName`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SubjectID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `AboutID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blocked`
--
ALTER TABLE `blocked`
  MODIFY `BlockedID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `CountryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `EnquiryID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `friend`
--
ALTER TABLE `friend`
  MODIFY `FriendID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `NotificationID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `PhotoID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `Registered_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `SectionID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `StateID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `StatusID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `SubjectID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `about`
--
ALTER TABLE `about`
  ADD CONSTRAINT `fk_about_CountryID_country` FOREIGN KEY (`CountryID`) REFERENCES `country` (`CountryID`),
  ADD CONSTRAINT `fk_about_DistrictID_district` FOREIGN KEY (`DistrictID`) REFERENCES `district` (`DistrictID`),
  ADD CONSTRAINT `fk_about_StateID_state` FOREIGN KEY (`StateID`) REFERENCES `state` (`StateID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
