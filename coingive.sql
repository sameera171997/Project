-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 26, 2018 at 01:43 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coingive`
--

-- --------------------------------------------------------

--
-- Table structure for table `CAMPAIGN`
--

CREATE TABLE `CAMPAIGN` (
  `CAM_ID` int(4) NOT NULL,
  `TARGET` int(5) NOT NULL,
  `C_ID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `CAMPAIGN`
--

INSERT INTO `CAMPAIGN` (`CAM_ID`, `TARGET`, `C_ID`) VALUES
(1, 1000, 2),
(2, 1500, 1),
(3, 8000, 7),
(4, 4300, 11),
(5, 3400, 10),
(6, 4800, 12),
(7, 5000, 18),
(8, 4500, 11),
(9, 5500, 19),
(10, 5200, 14),
(11, 6000, 17),
(12, 5800, 16),
(13, 5900, 15),
(14, 6100, 11),
(15, 5200, 12),
(16, 5100, 13),
(17, 5800, 14),
(18, 5900, 9),
(19, 6900, 8),
(20, 6900, 5);

-- --------------------------------------------------------

--
-- Table structure for table `CHARITY`
--

CREATE TABLE `CHARITY` (
  `C_ID` int(4) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `POSTCODE` int(4) NOT NULL,
  `C_WALLET` varchar(100) NOT NULL,
  `Description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `CHARITY`
--

INSERT INTO `CHARITY` (`C_ID`, `NAME`, `EMAIL`, `PASSWORD`, `POSTCODE`, `C_WALLET`, `Description`) VALUES
(1, 'Salvos', 'salvos@gmail.com', 'salvos', 3177, '12345', 'Zaroor'),
(2, 'OP', 'op@gmail.com', 'op', 3127, '123456', 'Hello it is a structure based charity'),
(3, 'Same', 'sam@gmail.com', 'sameera', 3298, 'jdfjdfkf', NULL),
(4, 'Kamal Foundations', 'kamalF@gmail.com', 'kamal', 3899, 'ddhdhdhd', NULL),
(5, 'OP Darwin', 'op.Darwin@gmail.com', 'opdarwin', 2345, 'sksks', NULL),
(7, 'OP Sunshine', 'opsunshine@op.com', 'sunshineop', 3189, 'shhhhh', NULL),
(8, 'Salvos Sunshine', 'sunshinesal@salvos.c', 'sunshine', 3332, 'kjjfjfkfklf', NULL),
(9, 'KKT HELP', 'dhana@kkthelp.com', 'dhanu', 6789, 'KKT', 'HI'),
(10, 'Kct Help', 'aish@kctHelp.com', 'fiangi', 4455, 'hvkhhjhv', NULL),
(11, 'OP Derimmut', 'opderimut@op.com', 'sunshineop', 3180, 'shhhh3h', NULL),
(12, 'Salvos Derimut', 'derimmut@salvos.com', 'derimut', 3334, 'kj1jfjfkfklf', NULL),
(13, 'Salvos Bundoora', 'bundoora@salvos.com', 'bundoora', 3304, 'kj1j2fjfkfklf', NULL),
(14, 'Church IIT', 'demon@churchIIT.com', 'Taylors', 3314, '2Bkj1jfjfkfklf', NULL),
(15, 'Doveton Savers', 'mainesht@dovetonsave', 'doveton', 3534, 'kj1jfjfkfklf6', 'Doveton Savers is the best place to buy stff as eavh goes to seperate chrity'),
(16, 'Cranboune Help', 'suman@ch.com', 'prawn', 3181, 'shh3hh3h', NULL),
(17, 'Pakenam Help', 'MAnie@ph.com', 'packy', 2334, 'Cwallet', 'bbbbbbbbbbbb'),
(18, 'Thomastown Charity', 'tom@th.com', 'thomas', 3404, 'kjw1j2fjfkfklf', NULL),
(19, 'St Kilda IIT', 'STK@churchIIT.com', 'Taylors44', 3340, '2Bkfj1jfjfkfklf', 'Yohu'),
(20, 'Cranbourne Savers', 'cast@cranbournesaver', 'crane', 3594, 'kj1jfjdfkfklf6', 'Cranbourne savers are good'),
(21, 'salvo', 's@gmail.com', 'sal', 2134, 'eerreeee', NULL),
(22, 'Sam', 'sa13', 'ss', 22, '2222', NULL),
(23, 'SAMEERA M GOUTHAM', 'sameera17797@gmail.c', 'jjjjj', 3177, 'hydhdydd', 'Hello Sam'),
(24, 'SAMEERA M GOUTHAM', 'sameera117797@gmail.', 'Sameera', 3177, 'hydhdyddcc', NULL),
(25, 'SAMEERA M GOUTHAM', 'sameera1217797@gmail', 'Sameerd', 3177, 'hydhdyddccre', NULL),
(26, 'nameeeee', 'fsdf', '', 0, '234233', NULL),
(27, 'A Pakenaham', 'pakenham@gmail.com', 'pakehnam', 2345, '1F1tAaz5x1HUXrCNLbtMDqcw6o5GNn4xqX', 'We are Pakehnam ');

-- --------------------------------------------------------

--
-- Table structure for table `CONTACT`
--

CREATE TABLE `CONTACT` (
  `NAME` varchar(20) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `MESSEGE` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CONTACT`
--

INSERT INTO `CONTACT` (`NAME`, `EMAIL`, `MESSEGE`) VALUES
('', '', ''),
('', '', ''),
('Sameera', 'sameera17797@gmail.c', 'Sameera'),
('Sameera', 'same@gmail.com', 'Hi I am working'),
('Kunda', 'kunda@gmail.com', 'kunda ia getting marreied'),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `DONOR`
--

CREATE TABLE `DONOR` (
  `D_ID` int(4) NOT NULL,
  `NAME` varchar(80) CHARACTER SET ucs2 NOT NULL,
  `EMAIL` varchar(80) CHARACTER SET ucs2 NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `D_WALLET` varchar(20) CHARACTER SET ucs2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DONOR`
--

INSERT INTO `DONOR` (`D_ID`, `NAME`, `EMAIL`, `PASSWORD`, `D_WALLET`) VALUES
(1, 'Kamal', 'Kamal@gmail.com', 'kamal', 'daerds'),
(2, 'Hardik', 'hardik@gmail.com', 'hardik', 'fgrewss'),
(3, 'Kamal', 'kamal@gmail.co', 'kamal', '112234de'),
(4, 'Talha', 'talha@gmail.com', 'talha', 'gfhfhkk'),
(5, 'Sahere', 'sahere@gmail.com', 'sahare', 'gcgcnbb'),
(6, 'Ajeetha', 'ajjek@gmail.com', 'ajax', 'qqqqqqqq'),
(7, 'Karthik', 'Karthik@gmail.com', 'karthik', '1g1fhtfhkk'),
(8, 'Praveen', 'praveen@gmail.com', 'praveen', 'gcg2cnbdb234'),
(9, 'Ghat', 'Ghat@gmail.com', 'Ghat', 'gcgcn3u6bdb'),
(10, 'Manasa', 'manasa@gmail.com', 'manasa', 'g654cgcnbdb'),
(11, 'Vaidehi', 'vaidehi@gmail.com', 'vaidehi', 'gcgcnbdb4gt'),
(12, 'vishnu', 'vishnu@gmail.com', 'vishnu', 'huy9gcgcn6bdb'),
(13, 'vibhu', 'Vibhu@gmail.com', 'vibhu', 'gcgcn34b1db'),
(14, 'Amin', 'amin@gmail.com', 'amin', 'gc789gcnbd45b'),
(15, 'Halka', 'Halka@gmail.com', 'Halka', 'g5cgcnbd321b'),
(16, 'Bevarsi', 'Bevar223si@gmail.com', 'bevarsi', 'gcgce3nbdb23'),
(17, 'Nayi', 'Nayi@gmail.com', 'Nayi', 'gcgcnbdb345'),
(18, 'Munde', 'Munde@gmail.com', 'munde', 'gww3cgcnbdb'),
(19, 'Kachada', 'kachada@gmail.com', 'kachada', 'gcgcnbdeetryrb'),
(20, 'Kacha', 'Kacha@gmail.com', 'Kacha', 'gcgcnbww3db');

-- --------------------------------------------------------

--
-- Table structure for table `PAYMENT`
--

CREATE TABLE `PAYMENT` (
  `PAY_ID` int(4) NOT NULL,
  `PAY_TYPE` char(1) NOT NULL DEFAULT 'C',
  `D_ID` int(4) NOT NULL,
  `C_ID` int(4) NOT NULL,
  `C_WALLET` varchar(20) NOT NULL,
  `D_WALLET` varchar(20) NOT NULL,
  `TOTAL_COIN` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `PAYMENT`
--

INSERT INTO `PAYMENT` (`PAY_ID`, `PAY_TYPE`, `D_ID`, `C_ID`, `C_WALLET`, `D_WALLET`, `TOTAL_COIN`) VALUES
(1, 'C', 1, 1, '12345', 'daerds', 6),
(2, 'C', 2, 2, '123456', 'fgrewss', 2),
(3, 'C', 2, 2, '123456', 'fgrewss', 3),
(4, 'C', 6, 14, '2Bkj1jfjfkfklf', 'qqqqqqqq', 67),
(5, 'C', 14, 16, 'shh3hh3h', 'gc789gcnbd45b', 3),
(6, 'C', 16, 20, 'kj1jfjdfkfklf6', 'gcgce3nbdb23', 4),
(7, 'C', 15, 4, 'ddhdhdhd', 'g5cgcnbd321b', 4),
(8, 'C', 9, 15, 'kj1jfjfkfklf6', 'gcgcn3u6bdb', 5),
(9, 'C', 3, 9, 'iiifjejjde', '112234de', 3),
(10, 'C', 12, 18, 'kjw1j2fjfkfklf', 'huy9gcgcn6bdb', 4),
(11, 'C', 19, 11, 'shhhh3h', 'gcgcnbdeetryrb', 6),
(12, 'C', 7, 7, 'shhhhh', '1g1fhtfhkk', 3),
(13, 'C', 8, 12, 'kj1jfjfkfklf', 'gcg2cnbdb234', 4),
(14, 'C', 1, 4, 'ddhdhdhd', '112234de', 3),
(15, 'C', 17, 1, '12345', 'gcgcnbdb345', 3),
(16, 'C', 5, 7, 'shhhhh', 'gcgcnbb', 5),
(17, 'C', 1, 15, 'kj1jfjfkfklf6', 'daerds', 3),
(18, 'C', 13, 17, 'kj1jfj43fkfklf', 'gcgcn34b1db', 7),
(19, 'C', 4, 3, 'jdfjdfkf', 'gfhfhkk', 3),
(20, 'C', 15, 4, 'ddhdhdhd', 'g5cgcnbd321b', 5);

-- --------------------------------------------------------

--
-- Table structure for table `VOLUNTEER`
--

CREATE TABLE `VOLUNTEER` (
  `V_ID` int(4) NOT NULL,
  `NAME` varchar(80) NOT NULL,
  `ADDRESS` varchar(80) NOT NULL,
  `POSTCODE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CAMPAIGN`
--
ALTER TABLE `CAMPAIGN`
  ADD PRIMARY KEY (`CAM_ID`),
  ADD KEY `campaign_ibfk_1` (`C_ID`);

--
-- Indexes for table `CHARITY`
--
ALTER TABLE `CHARITY`
  ADD PRIMARY KEY (`C_ID`),
  ADD UNIQUE KEY `C_WALLET` (`C_WALLET`);

--
-- Indexes for table `DONOR`
--
ALTER TABLE `DONOR`
  ADD PRIMARY KEY (`D_ID`),
  ADD UNIQUE KEY `D_WALLET` (`D_WALLET`);

--
-- Indexes for table `PAYMENT`
--
ALTER TABLE `PAYMENT`
  ADD PRIMARY KEY (`PAY_ID`),
  ADD KEY `C_ID` (`C_ID`),
  ADD KEY `D_ID` (`D_ID`),
  ADD KEY `C_WALLET` (`C_WALLET`),
  ADD KEY `D_WALLET` (`D_WALLET`);

--
-- Indexes for table `VOLUNTEER`
--
ALTER TABLE `VOLUNTEER`
  ADD PRIMARY KEY (`V_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CAMPAIGN`
--
ALTER TABLE `CAMPAIGN`
  MODIFY `CAM_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `CHARITY`
--
ALTER TABLE `CHARITY`
  MODIFY `C_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `DONOR`
--
ALTER TABLE `DONOR`
  MODIFY `D_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `PAYMENT`
--
ALTER TABLE `PAYMENT`
  MODIFY `PAY_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
