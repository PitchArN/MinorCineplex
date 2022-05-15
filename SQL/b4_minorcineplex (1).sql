-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 05:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

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
(6, 'Me'),
(7, 'Jack Supparor'),
(8, 'Tom Sui'),
(9, 'Luis Peter'),
(10, 'Alexander Maharaj');

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

--
-- Dumping data for table `itemorder`
--

INSERT INTO `itemorder` (`OrderID`, `TimeDate`, `ItemID`, `MemberID`, `Quantity`, `StaffID`, `PurchaseType`) VALUES
(0, '2022-05-14 22:40:59', 1, 0, 10, 2, 'credit'),
(1, '2022-05-14 22:40:59', 2, 0, 100, 5, 'asd'),
(2, '2022-05-14 22:42:22', 2, 0, 20, 2, 'AD'),
(3, '2022-05-14 22:42:22', 2, 0, 71, 5, 'DFGDF');

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

--
-- Dumping data for table `itemstock`
--

INSERT INTO `itemstock` (`ItemID`, `ItemName`, `ProductType`, `ProductDetails`, `Price`, `ProID`, `Remain`) VALUES
(1, 'item11', 'popcorn', 'asdasdasdsda', 100, 10, 100),
(2, 'pop2', 'popcorn', 'adasas', 100, 50, 50);

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

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MemberID`, `MemberMail`, `MemberType`, `MemberName`, `RegisterDateTime`, `Password`, `ExpDate`, `DateOfBirth`, `MemberPoint`) VALUES
(0, 'guest@google', 'guest', 'guest', '2022-05-12 16:12:57', '123456789', '2032-05-31', '2022-05-01', 0);

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
(0, 'Kimetsu no Yaiba  District Arc', 212, '\nAs the fierce battle draws to an end, Tanjiro and Uzui behead Gyutaro just as Zenitsu and Inosuke behead Daki. But then, Gyutaro unleashes a devastating Blood Demon Art, burying the city in rubble. When Tanjiro awakens, he joins Nezuko and Zenitsu, only to find Inosuke and Uzui on the brink of death from Gyutaro’s poison...', 1, 'PG', 'https://img1.ak.crunchyroll.com/i/spire3/09211a5ab1a7a41cbd18c90b1c8f076b1641869179_full.jpg', 'https://www.youtube.com/embed/Jd_B6ox3qGc'),
(1, 'Sing 2', 212, 'With his theatrical company a local success, Buster Moon is dreaming of bigger things. Unfortunately, when a talent scout dismisses their work as inadequate for the big time, Buster is driven to prove her wrong. With that goal in mind, Buster inspires his players to gamble everything to sneak into a talent audition in Redshore City for the demanding entertainment mogul Jimmy Crystal. Against the odds, they catch his interest with some frantic creative improvisation and even more desperate lies like personally knowing the reclusive rock star, Clay Calloway, who has not been seen in 15 years. Now faced with a tight production window with only a vague story idea and dire consequences for failure, Buster and his friends must all stretch their talents put on a show against all odds. In that struggle, the gang\'s challenges seem insurmountable, but each of them finds new inspirations and friends where they least expect them to pursue an artistic dream worthy of them.', 1, 'PG', 'https://cdn.majorcineplex.com/uploads/movie/3170/thumb_3170.jpg?220320222200', 'https://www.youtube.com/embed/AAnkc01ITpw'),
(2, 'Your Name', 180, 'Your Name Adaptation by Makoto Gupai', 4, 'G', 'https://m.media-amazon.com/images/M/MV5BNGYyNmI3M2YtNzYzZS00OTViLTkxYjAtZDIyZmE1Y2U1ZmQ2XkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_.jpg', 'https://www.youtube.com/embed/mPsjLnEtJZI'),
(3, 'Fate/stay night: Heaven\'s Feel III ', 200, 'My Name Adaptation by Makoto Gupai', 0, 'G', 'https://www.metalbridges.com/wp-content/uploads/2020/08/fatestay-night-heavens-feel-iii-spring-song-4dx-1.jpg', 'https://www.youtube.com/embed/u-QsmHjvNek'),
(4, 'hisName', 150, 'Pirates Of the Carribbeans (2003)', 5, 'G', 'https://s.isanook.com/mv/0/ud/7/39617/pirates-of-the-caribbean-5-starts-shooting-in-puerto-rico-in-november-2.jpg', 'https://www.youtube.com/embed/naQr0uTrH_s'),
(5, '134645', 120, 'description', 3, 'PG-13', 'https://m.media-amazon.com/images/M/MV5BNGYyNmI3M2YtNzYzZS00OTViLTkxYjAtZDIyZmE1Y2U1ZmQ2XkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_.jpg', 'https://youtu.be/mPsjLnEtJZI'),
(6, 'tommorrowWar', 140, 'tmrW', 3, 'G', 'https://m.media-amazon.com/images/M/MV5BNTI2YTI0MWEtNGQ4OS00ODIzLWE1MWEtZGJiN2E3ZmM1OWI1XkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_FMjpg_UX1000_.jpg', 'https://www.youtube.com/embed/QPistcpGB8o');

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
(3, 6),
(4, 1),
(4, 7),
(5, 2),
(5, 3),
(5, 4),
(5, 5),
(6, 8),
(6, 9),
(6, 10);

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
(4, 'action'),
(4, 'advanture'),
(6, 'action');

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
(4, '2022-05-07 01:00:00', 'R2'),
(4, '2022-05-07 02:00:00', 'R4'),
(4, '2022-05-08 01:00:00', 'R4'),
(4, '2022-05-08 10:00:00', 'R3'),
(4, '2022-05-08 10:10:00', 'R3'),
(4, '2022-05-08 12:00:00', 'R3'),
(4, '2022-05-09 01:00:00', 'R3'),
(4, '2022-05-09 10:00:00', 'R2'),
(6, '2022-05-12 10:10:00', 'R3'),
(6, '2022-05-12 10:20:00', 'R3'),
(6, '2022-05-12 10:30:00', 'R1'),
(6, '2022-05-12 11:00:00', 'R3'),
(6, '2022-05-12 11:10:00', 'R3');

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

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`ProID`, `ProName`, `Prodetails`, `Protype`, `ProCondition`, `PointEarn`, `ProStartDate`, `ProEndDate`) VALUES
(10, 'Discount 10%', '-10%', 10, 'asdw', 0, '2022-05-11 17:05:53', '2022-05-31 17:05:53'),
(50, 'Discount 50%', '-50%', 50, 'adasdad', 0, '2022-05-10 17:05:53', '2022-05-31 17:05:53');

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
  `MovieID` int(11) NOT NULL,
  `StartDateTime` datetime NOT NULL,
  `SeatStyle` text NOT NULL,
  `Price` int(11) NOT NULL,
  `SeatStatus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat4room`
--

INSERT INTO `seat4room` (`SeatID`, `MovieID`, `StartDateTime`, `SeatStyle`, `Price`, `SeatStatus`) VALUES
('R1_0A', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_0C', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_0D', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_0E', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_0F', 6, '2022-05-12 10:30:00', 'PREMIUM', 200, 0),
('R1_0G', 6, '2022-05-12 10:30:00', 'PREMIUM', 200, 0),
('R1_1A', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_1B', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_1C', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_1D', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_1E', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_1F', 6, '2022-05-12 10:30:00', 'PREMIUM', 200, 0),
('R1_1G', 6, '2022-05-12 10:30:00', 'PREMIUM', 200, 0),
('R1_2A', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_2B', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_2C', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_2D', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_2E', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_2F', 6, '2022-05-12 10:30:00', 'PREMIUM', 200, 0),
('R1_2G', 6, '2022-05-12 10:30:00', 'PREMIUM', 200, 0),
('R1_3A', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_3B', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 1),
('R1_3C', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_3D', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 1),
('R1_3E', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_3F', 6, '2022-05-12 10:30:00', 'PREMIUM', 200, 0),
('R1_3G', 6, '2022-05-12 10:30:00', 'PREMIUM', 200, 0),
('R1_4A', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_4B', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 1),
('R1_4C', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 1),
('R1_4D', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 1),
('R1_4E', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_4F', 6, '2022-05-12 10:30:00', 'PREMIUM', 200, 0),
('R1_4G', 6, '2022-05-12 10:30:00', 'PREMIUM', 200, 0),
('R1_5A', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_5B', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_5C', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 1),
('R1_5D', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 1),
('R1_5E', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_5F', 6, '2022-05-12 10:30:00', 'PREMIUM', 200, 0),
('R1_5G', 6, '2022-05-12 10:30:00', 'PREMIUM', 200, 0),
('R1_6A', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_6B', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_6C', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 1),
('R1_6D', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 1),
('R1_6E', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_6F', 6, '2022-05-12 10:30:00', 'PREMIUM', 200, 0),
('R1_6G', 6, '2022-05-12 10:30:00', 'PREMIUM', 200, 0),
('R1_7A', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_7B', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 1),
('R1_7C', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_7D', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_7E', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_7F', 6, '2022-05-12 10:30:00', 'PREMIUM', 200, 0),
('R1_7G', 6, '2022-05-12 10:30:00', 'PREMIUM', 200, 0),
('R1_8A', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_8B', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_8C', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_8D', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_8E', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_8F', 6, '2022-05-12 10:30:00', 'PREMIUM', 200, 0),
('R1_8G', 6, '2022-05-12 10:30:00', 'PREMIUM', 200, 0),
('R1_9A', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_9B', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_9C', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_9D', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_9E', 6, '2022-05-12 10:30:00', 'NORMAL', 100, 0),
('R1_9F', 6, '2022-05-12 10:30:00', 'PREMIUM', 200, 0),
('R1_9G', 6, '2022-05-12 10:30:00', 'PREMIUM', 200, 0),
('R3_0A', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 1),
('R3_0A', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_0A', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_0A', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_0A', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_0C', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_0C', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_0C', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_0C', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_0C', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_0D', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_0D', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_0D', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_0D', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_0D', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_0E', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_0E', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_0E', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_0E', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_0E', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_0F', 4, '2022-05-08 10:10:00', 'PREMIUM', 200, 0),
('R3_0F', 6, '2022-05-12 10:10:00', 'PREMIUM', 200, 0),
('R3_0F', 6, '2022-05-12 10:20:00', 'PREMIUM', 200, 0),
('R3_0F', 6, '2022-05-12 11:00:00', 'PREMIUM', 200, 0),
('R3_0F', 6, '2022-05-12 11:10:00', 'PREMIUM', 200, 0),
('R3_0G', 4, '2022-05-08 10:10:00', 'PREMIUM', 200, 0),
('R3_0G', 6, '2022-05-12 10:10:00', 'PREMIUM', 200, 0),
('R3_0G', 6, '2022-05-12 10:20:00', 'PREMIUM', 200, 0),
('R3_0G', 6, '2022-05-12 11:00:00', 'PREMIUM', 200, 0),
('R3_0G', 6, '2022-05-12 11:10:00', 'PREMIUM', 200, 0),
('R3_1A', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 1),
('R3_1A', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_1A', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_1A', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_1A', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_1B', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_1B', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_1B', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_1B', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_1B', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_1C', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_1C', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_1C', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_1C', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_1C', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_1D', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_1D', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_1D', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_1D', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_1D', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_1E', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_1E', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_1E', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_1E', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_1E', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_1F', 4, '2022-05-08 10:10:00', 'PREMIUM', 200, 0),
('R3_1F', 6, '2022-05-12 10:10:00', 'PREMIUM', 200, 0),
('R3_1F', 6, '2022-05-12 10:20:00', 'PREMIUM', 200, 0),
('R3_1F', 6, '2022-05-12 11:00:00', 'PREMIUM', 200, 0),
('R3_1F', 6, '2022-05-12 11:10:00', 'PREMIUM', 200, 0),
('R3_1G', 4, '2022-05-08 10:10:00', 'PREMIUM', 200, 0),
('R3_1G', 6, '2022-05-12 10:10:00', 'PREMIUM', 200, 0),
('R3_1G', 6, '2022-05-12 10:20:00', 'PREMIUM', 200, 0),
('R3_1G', 6, '2022-05-12 11:00:00', 'PREMIUM', 200, 0),
('R3_1G', 6, '2022-05-12 11:10:00', 'PREMIUM', 200, 0),
('R3_2A', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 1),
('R3_2A', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_2A', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_2A', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_2A', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_2B', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_2B', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_2B', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_2B', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_2B', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_2C', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_2C', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_2C', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_2C', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_2C', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_2D', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_2D', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_2D', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_2D', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_2D', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_2E', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_2E', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_2E', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_2E', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_2E', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_2F', 4, '2022-05-08 10:10:00', 'PREMIUM', 200, 0),
('R3_2F', 6, '2022-05-12 10:10:00', 'PREMIUM', 200, 0),
('R3_2F', 6, '2022-05-12 10:20:00', 'PREMIUM', 200, 0),
('R3_2F', 6, '2022-05-12 11:00:00', 'PREMIUM', 200, 0),
('R3_2F', 6, '2022-05-12 11:10:00', 'PREMIUM', 200, 0),
('R3_2G', 4, '2022-05-08 10:10:00', 'PREMIUM', 200, 0),
('R3_2G', 6, '2022-05-12 10:10:00', 'PREMIUM', 200, 0),
('R3_2G', 6, '2022-05-12 10:20:00', 'PREMIUM', 200, 0),
('R3_2G', 6, '2022-05-12 11:00:00', 'PREMIUM', 200, 0),
('R3_2G', 6, '2022-05-12 11:10:00', 'PREMIUM', 200, 0),
('R3_3A', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 1),
('R3_3A', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_3A', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_3A', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_3A', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_3B', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_3B', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_3B', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_3B', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_3B', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_3C', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_3C', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_3C', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_3C', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_3C', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_3D', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_3D', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_3D', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_3D', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_3D', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_3E', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_3E', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_3E', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_3E', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_3E', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_3F', 4, '2022-05-08 10:10:00', 'PREMIUM', 200, 0),
('R3_3F', 6, '2022-05-12 10:10:00', 'PREMIUM', 200, 0),
('R3_3F', 6, '2022-05-12 10:20:00', 'PREMIUM', 200, 0),
('R3_3F', 6, '2022-05-12 11:00:00', 'PREMIUM', 200, 0),
('R3_3F', 6, '2022-05-12 11:10:00', 'PREMIUM', 200, 0),
('R3_3G', 4, '2022-05-08 10:10:00', 'PREMIUM', 200, 0),
('R3_3G', 6, '2022-05-12 10:10:00', 'PREMIUM', 200, 0),
('R3_3G', 6, '2022-05-12 10:20:00', 'PREMIUM', 200, 0),
('R3_3G', 6, '2022-05-12 11:00:00', 'PREMIUM', 200, 0),
('R3_3G', 6, '2022-05-12 11:10:00', 'PREMIUM', 200, 0),
('R3_4A', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 1),
('R3_4A', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_4A', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_4A', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_4A', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_4B', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 1),
('R3_4B', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_4B', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_4B', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_4B', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_4C', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_4C', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_4C', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_4C', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_4C', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_4D', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 1),
('R3_4D', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_4D', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_4D', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_4D', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_4E', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 1),
('R3_4E', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_4E', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_4E', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_4E', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_4F', 4, '2022-05-08 10:10:00', 'PREMIUM', 200, 0),
('R3_4F', 6, '2022-05-12 10:10:00', 'PREMIUM', 200, 0),
('R3_4F', 6, '2022-05-12 10:20:00', 'PREMIUM', 200, 0),
('R3_4F', 6, '2022-05-12 11:00:00', 'PREMIUM', 200, 0),
('R3_4F', 6, '2022-05-12 11:10:00', 'PREMIUM', 200, 0),
('R3_4G', 4, '2022-05-08 10:10:00', 'PREMIUM', 200, 0),
('R3_4G', 6, '2022-05-12 10:10:00', 'PREMIUM', 200, 0),
('R3_4G', 6, '2022-05-12 10:20:00', 'PREMIUM', 200, 0),
('R3_4G', 6, '2022-05-12 11:00:00', 'PREMIUM', 200, 0),
('R3_4G', 6, '2022-05-12 11:10:00', 'PREMIUM', 200, 0),
('R3_5A', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 1),
('R3_5A', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_5A', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_5A', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_5A', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_5B', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 1),
('R3_5B', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_5B', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_5B', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_5B', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_5C', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 1),
('R3_5C', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_5C', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_5C', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_5C', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_5D', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 1),
('R3_5D', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_5D', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_5D', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_5D', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_5E', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_5E', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_5E', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_5E', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_5E', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_5F', 4, '2022-05-08 10:10:00', 'PREMIUM', 200, 0),
('R3_5F', 6, '2022-05-12 10:10:00', 'PREMIUM', 200, 0),
('R3_5F', 6, '2022-05-12 10:20:00', 'PREMIUM', 200, 0),
('R3_5F', 6, '2022-05-12 11:00:00', 'PREMIUM', 200, 0),
('R3_5F', 6, '2022-05-12 11:10:00', 'PREMIUM', 200, 0),
('R3_5G', 4, '2022-05-08 10:10:00', 'PREMIUM', 200, 0),
('R3_5G', 6, '2022-05-12 10:10:00', 'PREMIUM', 200, 0),
('R3_5G', 6, '2022-05-12 10:20:00', 'PREMIUM', 200, 0),
('R3_5G', 6, '2022-05-12 11:00:00', 'PREMIUM', 200, 0),
('R3_5G', 6, '2022-05-12 11:10:00', 'PREMIUM', 200, 0),
('R3_6A', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_6A', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_6A', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_6A', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_6A', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_6B', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_6B', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_6B', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_6B', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_6B', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_6C', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 1),
('R3_6C', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_6C', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_6C', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_6C', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_6D', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 1),
('R3_6D', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_6D', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_6D', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_6D', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_6E', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 1),
('R3_6E', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_6E', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_6E', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_6E', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_6F', 4, '2022-05-08 10:10:00', 'PREMIUM', 200, 0),
('R3_6F', 6, '2022-05-12 10:10:00', 'PREMIUM', 200, 0),
('R3_6F', 6, '2022-05-12 10:20:00', 'PREMIUM', 200, 0),
('R3_6F', 6, '2022-05-12 11:00:00', 'PREMIUM', 200, 0),
('R3_6F', 6, '2022-05-12 11:10:00', 'PREMIUM', 200, 0),
('R3_6G', 4, '2022-05-08 10:10:00', 'PREMIUM', 200, 0),
('R3_6G', 6, '2022-05-12 10:10:00', 'PREMIUM', 200, 0),
('R3_6G', 6, '2022-05-12 10:20:00', 'PREMIUM', 200, 0),
('R3_6G', 6, '2022-05-12 11:00:00', 'PREMIUM', 200, 0),
('R3_6G', 6, '2022-05-12 11:10:00', 'PREMIUM', 200, 0),
('R3_7A', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_7A', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_7A', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_7A', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_7A', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_7B', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_7B', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_7B', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_7B', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_7B', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_7C', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_7C', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_7C', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_7C', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_7C', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_7D', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_7D', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_7D', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_7D', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_7D', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_7E', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_7E', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_7E', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_7E', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_7E', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_7F', 4, '2022-05-08 10:10:00', 'PREMIUM', 200, 0),
('R3_7F', 6, '2022-05-12 10:10:00', 'PREMIUM', 200, 0),
('R3_7F', 6, '2022-05-12 10:20:00', 'PREMIUM', 200, 0),
('R3_7F', 6, '2022-05-12 11:00:00', 'PREMIUM', 200, 0),
('R3_7F', 6, '2022-05-12 11:10:00', 'PREMIUM', 200, 0),
('R3_7G', 4, '2022-05-08 10:10:00', 'PREMIUM', 200, 0),
('R3_7G', 6, '2022-05-12 10:10:00', 'PREMIUM', 200, 0),
('R3_7G', 6, '2022-05-12 10:20:00', 'PREMIUM', 200, 0),
('R3_7G', 6, '2022-05-12 11:00:00', 'PREMIUM', 200, 0),
('R3_7G', 6, '2022-05-12 11:10:00', 'PREMIUM', 200, 0),
('R3_8A', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_8A', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_8A', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_8A', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_8A', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_8B', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 1),
('R3_8B', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_8B', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_8B', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_8B', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_8C', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_8C', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_8C', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_8C', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_8C', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_8D', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_8D', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_8D', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_8D', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_8D', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_8E', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_8E', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_8E', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_8E', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_8E', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_8F', 4, '2022-05-08 10:10:00', 'PREMIUM', 200, 0),
('R3_8F', 6, '2022-05-12 10:10:00', 'PREMIUM', 200, 0),
('R3_8F', 6, '2022-05-12 10:20:00', 'PREMIUM', 200, 0),
('R3_8F', 6, '2022-05-12 11:00:00', 'PREMIUM', 200, 0),
('R3_8F', 6, '2022-05-12 11:10:00', 'PREMIUM', 200, 0),
('R3_8G', 4, '2022-05-08 10:10:00', 'PREMIUM', 200, 0),
('R3_8G', 6, '2022-05-12 10:10:00', 'PREMIUM', 200, 0),
('R3_8G', 6, '2022-05-12 10:20:00', 'PREMIUM', 200, 0),
('R3_8G', 6, '2022-05-12 11:00:00', 'PREMIUM', 200, 0),
('R3_8G', 6, '2022-05-12 11:10:00', 'PREMIUM', 200, 0),
('R3_9A', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_9A', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_9A', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_9A', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_9A', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_9B', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 1),
('R3_9B', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_9B', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_9B', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_9B', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_9C', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_9C', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_9C', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_9C', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_9C', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_9D', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_9D', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_9D', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_9D', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_9D', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_9E', 4, '2022-05-08 10:10:00', 'NORMAL', 150, 0),
('R3_9E', 6, '2022-05-12 10:10:00', 'NORMAL', 100, 0),
('R3_9E', 6, '2022-05-12 10:20:00', 'NORMAL', 100, 0),
('R3_9E', 6, '2022-05-12 11:00:00', 'NORMAL', 100, 0),
('R3_9E', 6, '2022-05-12 11:10:00', 'NORMAL', 100, 0),
('R3_9F', 4, '2022-05-08 10:10:00', 'PREMIUM', 200, 0),
('R3_9F', 6, '2022-05-12 10:10:00', 'PREMIUM', 200, 0),
('R3_9F', 6, '2022-05-12 10:20:00', 'PREMIUM', 200, 0),
('R3_9F', 6, '2022-05-12 11:00:00', 'PREMIUM', 200, 0),
('R3_9F', 6, '2022-05-12 11:10:00', 'PREMIUM', 200, 0),
('R3_9G', 4, '2022-05-08 10:10:00', 'PREMIUM', 200, 0),
('R3_9G', 6, '2022-05-12 10:10:00', 'PREMIUM', 200, 0),
('R3_9G', 6, '2022-05-12 10:20:00', 'PREMIUM', 200, 0),
('R3_9G', 6, '2022-05-12 11:00:00', 'PREMIUM', 200, 0),
('R3_9G', 6, '2022-05-12 11:10:00', 'PREMIUM', 200, 0);

-- --------------------------------------------------------

--
-- Table structure for table `seatprice`
--

CREATE TABLE `seatprice` (
  `SeatID` varchar(7) NOT NULL,
  `SeatStyle` text NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffMail`, `StaffType`, `StaffName`, `StartDateTime`, `StaffPassword`, `StaffSalary`) VALUES
(1, 'asb@eng', 'Popcorn', 'Steve Seam', '2022-05-12 16:10:52', '123456789', 999),
(2, 'stff@mali.com', 'Manager', 'stff', '2022-05-13 14:14:45', '123456789', 15000),
(3, 'stff@mali.com', 'Manager', 'stff', '2022-05-13 14:54:15', '123456789', 15000),
(4, 'tien@style.sss', 'Manager', 'TienStyle', '2022-05-13 22:04:12', 'TienStyle', 50000),
(5, 'stff@mali.com', 'Manager', 'TienStyle', '2022-05-13 22:12:07', 'asdasd', 1242),
(6, 'sasdastff@mali.com', 'MovieStaff', 'TienStyle', '2022-05-15 00:55:40', '123456795', 50000);

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

--
-- Dumping data for table `staffcheck`
--

INSERT INTO `staffcheck` (`StaffID`, `WorkDay`, `timecheck`, `checktype`, `ontime`) VALUES
(1, '2022-05-11', '25:04:13', 'out', 1),
(1, '2022-05-14', '21:01:00', 'IN', 0),
(1, '2022-05-14', '21:04:00', 'IN', 1),
(2, '2022-05-19', '00:00:00', 'in', 1),
(3, '0000-00-00', '00:00:00', 'out', 1),
(3, '2022-05-14', '28:01:37', 'out', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staffwork`
--

CREATE TABLE `staffwork` (
  `StaffID` int(11) NOT NULL,
  `WorkDay` varchar(20) NOT NULL,
  `WorkStartTime` time NOT NULL,
  `WorkEndTime` time NOT NULL,
  `WorkType` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffwork`
--

INSERT INTO `staffwork` (`StaffID`, `WorkDay`, `WorkStartTime`, `WorkEndTime`, `WorkType`) VALUES
(4, 'Sun', '27:30:14', '99:59:59', '213'),
(5, 'Thu', '13:00:00', '17:00:00', 'Manage'),
(5, 'Wed', '09:00:00', '18:00:00', 'Manage'),
(6, 'Sat', '13:00:00', '17:00:00', 'SalesPopcorn'),
(6, 'Sun', '17:00:00', '01:00:00', 'SalesPopcorn'),
(6, 'Thu', '09:00:00', '18:00:00', 'SalesPopcorn'),
(6, 'Tue', '17:00:00', '21:00:00', 'SalesPopcorn'),
(6, 'Wed', '13:00:00', '17:00:00', 'SalesPopcorn');

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

--
-- Dumping data for table `ticketproduct`
--

INSERT INTO `ticketproduct` (`TicketProductID`, `SeatID`, `ProID`, `StartDateTime`) VALUES
(69, 'R1_3B', 50, '2022-05-12 10:30:00'),
(70, 'R1_3D', 0, '2022-05-12 10:30:00'),
(68, 'R1_4B', 50, '2022-05-12 10:30:00'),
(67, 'R1_4C', 50, '2022-05-12 10:30:00'),
(71, 'R1_4D', 0, '2022-05-12 10:30:00'),
(66, 'R1_5C', 50, '2022-05-12 10:30:00'),
(72, 'R1_5D', 0, '2022-05-12 10:30:00'),
(81, 'R1_6C', 10, '2022-05-12 10:30:00'),
(73, 'R1_6D', 0, '2022-05-12 10:30:00'),
(82, 'R1_7B', 10, '2022-05-12 10:30:00'),
(44, 'R3_0A', 0, '2022-05-08 10:00:00'),
(46, 'R3_0A', 0, '2022-05-08 10:00:00'),
(45, 'R3_1A', 0, '2022-05-08 10:00:00'),
(47, 'R3_1A', 0, '2022-05-08 10:00:00'),
(50, 'R3_2A', 0, '2022-05-08 10:10:00'),
(51, 'R3_3A', 0, '2022-05-08 10:10:00'),
(0, 'R3_3B', 0, '2022-05-08 10:00:00'),
(2, 'R3_3B', 0, '2022-05-08 10:00:00'),
(4, 'R3_3B', 0, '2022-05-08 10:00:00'),
(6, 'R3_3B', 0, '2022-05-08 10:00:00'),
(8, 'R3_3B', 0, '2022-05-08 10:00:00'),
(10, 'R3_3B', 0, '2022-05-08 10:00:00'),
(12, 'R3_3B', 0, '2022-05-08 10:00:00'),
(14, 'R3_3B', 0, '2022-05-08 10:00:00'),
(16, 'R3_3B', 0, '2022-05-08 10:00:00'),
(18, 'R3_3B', 0, '2022-05-08 10:00:00'),
(20, 'R3_3B', 0, '2022-05-08 10:00:00'),
(22, 'R3_3B', 0, '2022-05-08 10:00:00'),
(52, 'R3_4A', 0, '2022-05-08 10:10:00'),
(54, 'R3_4A', 0, '2022-05-08 10:10:00'),
(56, 'R3_4A', 0, '2022-05-08 10:10:00'),
(58, 'R3_4A', 0, '2022-05-08 10:10:00'),
(60, 'R3_4A', 0, '2022-05-08 10:10:00'),
(80, 'R3_4D', 0, '2022-05-08 10:10:00'),
(75, 'R3_4E', 0, '2022-05-08 10:10:00'),
(53, 'R3_5A', 0, '2022-05-08 10:10:00'),
(55, 'R3_5A', 0, '2022-05-08 10:10:00'),
(57, 'R3_5A', 0, '2022-05-08 10:10:00'),
(59, 'R3_5A', 0, '2022-05-08 10:10:00'),
(61, 'R3_5A', 0, '2022-05-08 10:10:00'),
(1, 'R3_5B', 0, '2022-05-08 10:00:00'),
(3, 'R3_5B', 0, '2022-05-08 10:00:00'),
(5, 'R3_5B', 0, '2022-05-08 10:00:00'),
(7, 'R3_5B', 0, '2022-05-08 10:00:00'),
(9, 'R3_5B', 0, '2022-05-08 10:00:00'),
(11, 'R3_5B', 0, '2022-05-08 10:00:00'),
(13, 'R3_5B', 0, '2022-05-08 10:00:00'),
(15, 'R3_5B', 0, '2022-05-08 10:00:00'),
(17, 'R3_5B', 0, '2022-05-08 10:00:00'),
(19, 'R3_5B', 0, '2022-05-08 10:00:00'),
(21, 'R3_5B', 0, '2022-05-08 10:00:00'),
(23, 'R3_5B', 0, '2022-05-08 10:00:00'),
(76, 'R3_5C', 0, '2022-05-08 10:10:00'),
(79, 'R3_5D', 0, '2022-05-08 10:10:00'),
(77, 'R3_6C', 0, '2022-05-08 10:10:00'),
(78, 'R3_6D', 0, '2022-05-08 10:10:00'),
(74, 'R3_6E', 0, '2022-05-08 10:10:00'),
(62, 'R3_8B', 0, '2022-05-08 10:10:00'),
(63, 'R3_9B', 0, '2022-05-08 10:10:00');

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
-- Dumping data for table `ticket_order`
--

INSERT INTO `ticket_order` (`TicketOrderID`, `TimeDate`, `TicketProductID`, `MemberID`, `StaffID`, `PurchaseType`) VALUES
(1652346789, '2022-05-12 11:13:09', 58, 0, 1, 'Online'),
(1652346789, '2022-05-12 11:13:09', 59, 0, 1, 'Online'),
(1652347320, '2022-05-12 11:22:00', 60, 0, 1, 'Online'),
(1652347320, '2022-05-12 11:22:00', 61, 0, 0, 'Online'),
(1652347441, '2022-05-12 11:24:01', 62, 0, 0, 'Online'),
(1652347441, '2022-05-12 11:24:01', 63, 0, 0, 'Online');

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
  ADD PRIMARY KEY (`SeatID`,`MovieID`,`StartDateTime`);

--
-- Indexes for table `seatprice`
--
ALTER TABLE `seatprice`
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
  ADD PRIMARY KEY (`StaffID`,`WorkDay`,`timecheck`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
