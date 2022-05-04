-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 12:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b4_minorcineplex`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `ActorID` int(11) NOT NULL,
  `ActorName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`ActorID`, `ActorName`) VALUES
(0, 'I am first Actor'),
(1, 'Mister Blurr'),
(2, 'MisterBlue'),
(3, 'Miss Brown'),
(4, 'Miss Black'),
(5, 'Mikoto Gupai'),
(6, 'Me');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `Genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`Genre`) VALUES
('action'),
('advanture'),
('comedy'),
('drama'),
('fantasy'),
('horror'),
('mystery'),
('romance'),
('SCI-FI');

-- --------------------------------------------------------

--
-- Table structure for table `itemorder`
--

CREATE TABLE `itemorder` (
  `OrderID` int(11) NOT NULL,
  `TimeDate` datetime NOT NULL DEFAULT current_timestamp(),
  `ItemID` int(11) NOT NULL,
  `MemberID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `StaffID` int(11) NOT NULL,
  `PurchaseType` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `itemstock`
--

CREATE TABLE `itemstock` (
  `ItemID` int(11) NOT NULL,
  `ItemName` text NOT NULL,
  `ProductType` text NOT NULL,
  `ProductDetails` text NOT NULL,
  `Price` int(11) NOT NULL,
  `ProID` int(11) DEFAULT NULL,
  `Remain` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `MemberID` int(11) NOT NULL,
  `MemberMail` text NOT NULL,
  `MemberType` text NOT NULL,
  `MemberName` text NOT NULL,
  `RegisterDateTime` datetime DEFAULT current_timestamp(),
  `Password` text NOT NULL,
  `ExpDate` date NOT NULL,
  `DateOfBirth` date NOT NULL,
  `MemberPoint` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `MovieID` int(11) NOT NULL,
  `MovieName` text NOT NULL,
  `Length` int(11) NOT NULL,
  `Details` text NOT NULL,
  `Rating` int(11) DEFAULT NULL,
  `RateAges` text NOT NULL,
  `Poster` text NOT NULL,
  `TrailerURL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`MovieID`, `MovieName`, `Length`, `Details`, `Rating`, `RateAges`, `Poster`, `TrailerURL`) VALUES
(0, 'Kimetzu no yaiba', 212, 'asda', 1, 'PG', 'minorcineplex.ci.th', 'minorcineplex.co.th'),
(1, 'Sing 2', 212, 'Sing 2', 1, 'PG', 'minorcineplex.ci.th', 'minorcineplex.co.th'),
(2, 'Your Namae', 180, 'Your Name Adaptation by Makoto Gupai', 4, 'G', 'https://m.media-amazon.com/images/M/MV5BNGYyNmI3M2YtNzYzZS00OTViLTkxYjAtZDIyZmE1Y2U1ZmQ2XkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_.jpg', 'https://www.youtube.com/embed/mPsjLnEtJZI'),
(3, 'My Namae', 200, 'My Name Adaptation by Makoto Gupai', 0, 'G', 'https://m.media-amazon.com/images/M/MV5BNGYyNmI3M2YtNzYzZS00OTViLTkxYjAtZDIyZmE1Y2U1ZmQ2XkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_.jpg', 'https://www.youtube.com/embed/mPsjLnEtJZI');

-- --------------------------------------------------------

--
-- Table structure for table `movieactor`
--

CREATE TABLE `movieactor` (
  `MovieID` int(11) NOT NULL,
  `ActorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movieactor`
--

INSERT INTO `movieactor` (`MovieID`, `ActorID`) VALUES
(0, 0),
(1, 0),
(1, 1),
(1, 3),
(1, 4),
(2, 1),
(2, 5),
(3, 1),
(3, 5),
(3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `moviegenre`
--

CREATE TABLE `moviegenre` (
  `MovieID` int(11) NOT NULL,
  `Genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moviegenre`
--

INSERT INTO `moviegenre` (`MovieID`, `Genre`) VALUES
(0, 'advanture'),
(0, 'drama'),
(0, 'fantasy'),
(0, 'horror'),
(1, 'advanture'),
(1, 'drama'),
(1, 'fantasy'),
(1, 'horror'),
(2, 'drama'),
(2, 'fantasy'),
(3, 'drama'),
(3, 'fantasy'),
(3, 'horror');

-- --------------------------------------------------------

--
-- Table structure for table `movietime`
--

CREATE TABLE `movietime` (
  `MovieID` int(11) NOT NULL,
  `StartDateTime` datetime NOT NULL,
  `SeatID` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movietime`
--

INSERT INTO `movietime` (`MovieID`, `StartDateTime`, `SeatID`) VALUES
(3, '2022-04-30 10:20:00', 'R4'),
(3, '2022-04-30 11:00:00', 'R1'),
(3, '2022-05-01 10:30:00', 'R3');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `ProID` int(11) NOT NULL,
  `ProName` text NOT NULL,
  `Prodetails` text NOT NULL,
  `Protype` int(11) NOT NULL,
  `ProCondition` text NOT NULL,
  `PointEarn` int(11) NOT NULL,
  `ProStartDate` datetime NOT NULL,
  `ProEndDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rateage`
--

CREATE TABLE `rateage` (
  `Rate` varchar(10) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rateage`
--

INSERT INTO `rateage` (`Rate`, `description`) VALUES
('G', 'General Audiences'),
('NR', 'Not Rated'),
('PG', 'Parental Guidance Suggested'),
('PG-13', 'Parental Strongly Cautioned'),
('R', 'Restricted');

-- --------------------------------------------------------

--
-- Table structure for table `seat4room`
--

CREATE TABLE `seat4room` (
  `SeatID` varchar(7) NOT NULL,
  `SeatStyle` text NOT NULL,
  `Price` int(11) NOT NULL,
  `SeatStatus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat4room`
--

INSERT INTO `seat4room` (`SeatID`, `SeatStyle`, `Price`, `SeatStatus`) VALUES
('R1', 'test', 100, 0),
('R2', 'test', 100, 0),
('R3', 'test', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(11) NOT NULL,
  `StaffMail` text NOT NULL,
  `StaffType` text NOT NULL,
  `StaffName` text NOT NULL,
  `StartDateTime` datetime DEFAULT current_timestamp(),
  `StaffPassword` text NOT NULL,
  `StaffSalary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staffcheck`
--

CREATE TABLE `staffcheck` (
  `StaffID` int(11) NOT NULL,
  `WorkDay` date NOT NULL DEFAULT curdate(),
  `timecheck` time NOT NULL DEFAULT current_timestamp(),
  `checktype` text NOT NULL,
  `ontime` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staffwork`
--

CREATE TABLE `staffwork` (
  `StaffID` int(11) NOT NULL,
  `WorkDay` date NOT NULL,
  `WorkStartTime` time NOT NULL,
  `WorkEndTime` time NOT NULL,
  `WorkType` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticketproduct`
--

CREATE TABLE `ticketproduct` (
  `TicketProductID` int(11) NOT NULL,
  `SeatID` varchar(7) NOT NULL,
  `ProID` int(11) DEFAULT NULL,
  `StartDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_order`
--

CREATE TABLE `ticket_order` (
  `TicketOrderID` int(11) NOT NULL,
  `TimeDate` datetime NOT NULL DEFAULT current_timestamp(),
  `TicketProductID` int(11) NOT NULL,
  `MemberID` int(11) NOT NULL,
  `StaffID` int(11) NOT NULL,
  `PurchaseType` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`ActorID`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`Genre`);

--
-- Indexes for table `itemorder`
--
ALTER TABLE `itemorder`
  ADD PRIMARY KEY (`OrderID`,`TimeDate`,`ItemID`),
  ADD KEY `ItemID` (`ItemID`,`MemberID`,`StaffID`),
  ADD KEY `MemberID` (`MemberID`),
  ADD KEY `StaffID` (`StaffID`);

--
-- Indexes for table `itemstock`
--
ALTER TABLE `itemstock`
  ADD PRIMARY KEY (`ItemID`),
  ADD KEY `ProID` (`ProID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`MemberID`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`MovieID`);

--
-- Indexes for table `movieactor`
--
ALTER TABLE `movieactor`
  ADD PRIMARY KEY (`MovieID`,`ActorID`),
  ADD KEY `MovieID` (`MovieID`),
  ADD KEY `ActorID` (`ActorID`);

--
-- Indexes for table `moviegenre`
--
ALTER TABLE `moviegenre`
  ADD PRIMARY KEY (`MovieID`,`Genre`),
  ADD KEY `MovieID` (`MovieID`),
  ADD KEY `Genre` (`Genre`);

--
-- Indexes for table `movietime`
--
ALTER TABLE `movietime`
  ADD PRIMARY KEY (`MovieID`,`StartDateTime`,`SeatID`),
  ADD KEY `MovieID` (`MovieID`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`ProID`);

--
-- Indexes for table `rateage`
--
ALTER TABLE `rateage`
  ADD PRIMARY KEY (`Rate`);

--
-- Indexes for table `seat4room`
--
ALTER TABLE `seat4room`
  ADD PRIMARY KEY (`SeatID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- Indexes for table `staffcheck`
--
ALTER TABLE `staffcheck`
  ADD PRIMARY KEY (`StaffID`,`WorkDay`,`timecheck`),
  ADD KEY `StaffID` (`StaffID`);

--
-- Indexes for table `staffwork`
--
ALTER TABLE `staffwork`
  ADD PRIMARY KEY (`StaffID`,`WorkDay`),
  ADD KEY `StaffID` (`StaffID`);

--
-- Indexes for table `ticketproduct`
--
ALTER TABLE `ticketproduct`
  ADD PRIMARY KEY (`TicketProductID`),
  ADD KEY `SeatID` (`SeatID`,`ProID`,`StartDateTime`),
  ADD KEY `StartDateTime` (`StartDateTime`),
  ADD KEY `ProID` (`ProID`);

--
-- Indexes for table `ticket_order`
--
ALTER TABLE `ticket_order`
  ADD PRIMARY KEY (`TicketOrderID`,`TimeDate`,`TicketProductID`),
  ADD KEY `TicketProductID` (`TicketProductID`,`MemberID`,`StaffID`),
  ADD KEY `MemberID` (`MemberID`),
  ADD KEY `StaffID` (`StaffID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `itemorder`
--
ALTER TABLE `itemorder`
  ADD CONSTRAINT `itemorder_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`),
  ADD CONSTRAINT `itemorder_ibfk_2` FOREIGN KEY (`ItemID`) REFERENCES `itemstock` (`ItemID`),
  ADD CONSTRAINT `itemorder_ibfk_3` FOREIGN KEY (`StaffID`) REFERENCES `staff` (`StaffID`);

--
-- Constraints for table `itemstock`
--
ALTER TABLE `itemstock`
  ADD CONSTRAINT `itemstock_ibfk_1` FOREIGN KEY (`ProID`) REFERENCES `promotion` (`ProID`);

--
-- Constraints for table `movieactor`
--
ALTER TABLE `movieactor`
  ADD CONSTRAINT `movieactor_ibfk_1` FOREIGN KEY (`MovieID`) REFERENCES `movie` (`MovieID`),
  ADD CONSTRAINT `movieactor_ibfk_2` FOREIGN KEY (`ActorID`) REFERENCES `actor` (`ActorID`);

--
-- Constraints for table `moviegenre`
--
ALTER TABLE `moviegenre`
  ADD CONSTRAINT `moviegenre_ibfk_1` FOREIGN KEY (`Genre`) REFERENCES `genre` (`Genre`),
  ADD CONSTRAINT `moviegenre_ibfk_2` FOREIGN KEY (`MovieID`) REFERENCES `movie` (`MovieID`);

--
-- Constraints for table `movietime`
--
ALTER TABLE `movietime`
  ADD CONSTRAINT `movietime_ibfk_1` FOREIGN KEY (`MovieID`) REFERENCES `movie` (`MovieID`);

--
-- Constraints for table `staffcheck`
--
ALTER TABLE `staffcheck`
  ADD CONSTRAINT `staffcheck_ibfk_1` FOREIGN KEY (`StaffID`) REFERENCES `staff` (`StaffID`);

--
-- Constraints for table `staffwork`
--
ALTER TABLE `staffwork`
  ADD CONSTRAINT `staffwork_ibfk_1` FOREIGN KEY (`StaffID`) REFERENCES `staff` (`StaffID`);

--
-- Constraints for table `ticket_order`
--
ALTER TABLE `ticket_order`
  ADD CONSTRAINT `ticket_order_ibfk_1` FOREIGN KEY (`TicketProductID`) REFERENCES `ticketproduct` (`TicketProductID`),
  ADD CONSTRAINT `ticket_order_ibfk_2` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`),
  ADD CONSTRAINT `ticket_order_ibfk_3` FOREIGN KEY (`StaffID`) REFERENCES `staff` (`StaffID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
