-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 18, 2018 at 03:09 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gyanith`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodation`
--

CREATE TABLE `accomodation` (
  `gid` int(5) NOT NULL,
  `paid` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accomodation`
--

INSERT INTO `accomodation` (`gid`, `paid`) VALUES
(27, 0),
(28, 0),
(29, 0),
(30, 0),
(31, 0),
(42, 0),
(43, 0),
(44, 0),
(45, 0),
(47, 0),
(48, 0),
(49, 0),
(50, 0),
(51, 0),
(52, 0),
(53, 0);

-- --------------------------------------------------------

--
-- Table structure for table `campusambassador`
--

CREATE TABLE `campusambassador` (
  `gid` int(5) NOT NULL,
  `College` text NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campusambassador`
--

INSERT INTO `campusambassador` (`gid`, `College`, `count`) VALUES
(52, 'Er.Perumal Manimekalai College of Engineering', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `gid` int(5) NOT NULL,
  `Name` text NOT NULL,
  `College` text NOT NULL,
  `Gender` tinyint(1) NOT NULL,
  `ActiveTime` timestamp NULL DEFAULT NULL,
  `RegistrationTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Password` text NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Emailid` text NOT NULL,
  `Active` tinyint(1) NOT NULL DEFAULT '0',
  `Token` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`gid`, `Name`, `College`, `Gender`, `ActiveTime`, `RegistrationTime`, `Password`, `Phone`, `Emailid`, `Active`, `Token`) VALUES
(27, 'a a', 'A.C. College of Engineering and Technology', 1, NULL, '2018-02-15 15:43:49', '$2y$10$r1coAkf8wcYX40rhsW6R9.zEZzRG29EEkZP2cJ9R976PZMEyrm4Ae', 9445176716, 'a@b.c', 0, NULL),
(28, 'Diya rat', 'Achariya College of Engineering and Technology', 1, NULL, '2018-02-15 15:53:41', '$2y$10$5Wuqa80opnybwumjinvtf.5hNn5I.BGdhouPAamltciDPKYL/EIGq', 9445176716, 'diya@gmail.com', 0, NULL),
(29, 'maya arjun', 'ACCET Karaikudi', 1, NULL, '2018-02-15 16:03:55', '$2y$10$iYZe1sfx9l3eRWE4W2FUVO4UbtzztzbcuK7eRpw/RjtO1FkRK4Qzy', 9445176716, 'maya@gmail.com', 0, NULL),
(30, 'Abhirami Anbazhagan', 'A.M.S College of Engineering', 1, NULL, '2018-02-15 16:05:34', '$2y$10$WEUd./gBwQ5A9qVQwbpZzues.7OpK6v.2eOwGS3QdMY0OQlBoeona', 9445176716, 'vmkaabhirami@gmail.com', 0, NULL),
(31, 'a a', 'ACCET Karaikudi', 0, NULL, '2018-02-15 16:14:42', '$2y$10$IWIqJPijN1Fqi9cT6rJKju0mxuwOHS7IQaAZ/ztB4eIiX5pw84R36', 9445176716, 'new@g.c', 0, NULL),
(32, 'w w', 'Acharaya Nagarjuna University', 0, NULL, '2018-02-15 17:18:06', '$2y$10$qgQyWYclU1r7y6IBszbBMurJkKLNq8chpmwbpAZZJoTJdJgL669EC', 9445176716, 'w@g.c', 0, NULL),
(33, 'a a', '0', 0, NULL, '2018-02-15 17:35:17', '$2y$10$TtYmBWUC8X2CVFmYieYBHeAGkde4YE6sTGwzLMrOEsEvvcb7wZeqe', 9445176716, 'a@j.d', 0, NULL),
(34, ' ', 'Aarupadai Veedu Institute of Technology, Vinayaka Mission University', 0, NULL, '2018-02-15 17:35:27', '$2y$10$uB3ZSqomd.25cln6vbdUZe.ga2rjrTHNqjeFj09.R3LG7GS0I/4nG', 0, '', 0, NULL),
(35, 's s', '0', 0, NULL, '2018-02-15 17:43:04', '$2y$10$oBre21QN8kMQH3TZjRhf..n25jQY9xcCQCqJ5NWZcK6IhrHYtiXMi', 9445176716, 'e@g.d', 0, NULL),
(36, 'd d', 'Aarupadai Veedu Institute of Technology, Vinayaka Mission University', 0, NULL, '2018-02-15 17:44:28', '$2y$10$ql3evhq7hLT6hL002AH5Cu/ypW8gPPxf6hhaTjbdXhYDekImljxYC', 9445176716, 'w@g.r', 0, NULL),
(37, 'ds fsa', '0', 0, NULL, '2018-02-15 17:52:03', '$2y$10$BvQXcAgsRUeyf8/nqU6uRO/tGGX89C8gHlegvAd1gZFTikgWI6M0q', 9445176716, 'fa@g.d', 0, NULL),
(38, 'e e', '0', 0, NULL, '2018-02-15 17:53:12', '$2y$10$JzP.zTYRmETGQNAg53tvQ.fRQLGWk7x8SF2Ovn5opEGCyJyf4D0SC', 9445176716, 'e@r.f', 0, NULL),
(39, 'e h', '0', 0, NULL, '2018-02-15 17:54:13', '$2y$10$OFExFffJn2YUbjsjc5EiWOBbEsUa8vx6AfoCcGkSjgwLFmy4yqWKW', 9445176716, 'e@k.f', 0, NULL),
(40, 'w w', '0', 0, NULL, '2018-02-15 17:57:19', '$2y$10$6.Uoaz2p0.XCf6mSY0I8n.0A8NPEXIh85AIvuJ0N.K/hoXkq19qKy', 8903765907, 'w@l.m', 0, NULL),
(41, 's s', '0', 0, NULL, '2018-02-15 17:59:36', '$2y$10$BrFv7s4MXdHZcUYtn5gj9O.LgvJYysqhvtOh0tzpTXuhhAjuFcZxK', 8903765907, 's@k.r', 0, NULL),
(42, 'ratan man sig', 'ratan college', 0, NULL, '2018-02-15 18:01:40', '$2y$10$2h9wjzVA52bFFFTa1u.kxuYs8qzdlHT8ycF8twjo/y132B4dtiBW6', 8903765907, 'ratane@gm.c', 0, NULL),
(43, 'd e', 'Er.Perumal Manimekalai College of Engineering', 0, NULL, '2018-02-15 18:28:40', '$2y$10$SF73rcMKAzEmcvOYO63CXON24bcYdUGWcZJl.qY8/wNSNLyqtZua2', 8903765907, 'amba@g.ce', 0, NULL),
(44, 'hif d', 'Er.Perumal Manimekalai College of Engineering', 1, NULL, '2018-02-15 18:29:51', '$2y$10$fb9X.o/mS1GraHXASAenAOnBgCGNuF6CEG9NdAcrpVRAajmSvb02S', 9445176716, 'ref@g.e', 0, NULL),
(45, 'anu a', 'Er.Perumal Manimekalai College of Engineering', 0, NULL, '2018-02-15 18:39:36', '$2y$10$fjAH2ezebB8hw874nDct5.j6PzkxbNYWuX0rWmIDCiUpLmMuC5dRe', 9445176716, 'anu@gam.c', 0, NULL),
(46, 'q q', 'Er.Perumal Manimekalai College of Engineering', 0, NULL, '2018-02-16 01:24:55', '$2y$10$.Ibi7XyzLlkR3Zv9gn1Y5eE6QSFHQIKAaiSMUTzhiTOwKelx9g5fm', 8903765907, 'j@k.e', 0, NULL),
(47, 's s', 'Er.Perumal Manimekalai College of Engineering', 0, NULL, '2018-02-16 01:31:12', '$2y$10$oLEgd5YQrNAZa3Coj03BGOKs3OMcKMN49Fe1aa6PVwwITv8J/wXRK', 9445176716, 's@h.e', 0, NULL),
(48, 's ss', 'Er.Perumal Manimekalai College of Engineering', 0, NULL, '2018-02-16 01:37:09', '$2y$10$mmIvGwGExbEZV.nXQlUwoeGEWlBG2I1zIy6yDrw4t8TfUl1SF9rsi', 9445176716, 's@d.eq', 0, NULL),
(49, 'y z', 'Er.Perumal Manimekalai College of Engineering', 0, NULL, '2018-02-16 01:39:23', '$2y$10$59rOK6vgjozWVPCADjBKUe2/k7q9wRsxzWex9Edjeg8DZ8RiESa8e', 9445176716, 'p@l.k', 0, NULL),
(50, 'sundari a', 'Er.Perumal Manimekalai College of Engineering', 0, NULL, '2018-02-16 01:40:47', '$2y$10$DDiz10o9wNCDrk.k5e7X..13KxgwRC6GDPRu5.U8jNa7nS5aTbh6q', 9445176716, 'sundari@gmail.co', 0, NULL),
(51, 'sundaru s', 'Er.Perumal Manimekalai College of Engineering', 0, NULL, '2018-02-16 01:43:38', '$2y$10$n5EPn2mEwM8AzOYrdsFAQ.kT2tL/eF3vUJ4OXX2MkHoeZ1CAQUsFi', 9445176716, 'sundari@d.e', 0, NULL),
(52, 'anbazhagan a', 'Er.Perumal Manimekalai College of Engineering', 0, NULL, '2018-02-16 01:45:44', '$2y$10$p7tlPiEZ7aJTO6d/Fn38sOX1/zJrX/JvEv.qNIm/xJg81EFQxQdwa', 9445176716, 'anbu@gmail.com', 0, NULL),
(53, 'shanmu a', 'Er.Perumal Manimekalai College of Engineering', 0, NULL, '2018-02-16 01:48:20', '$2y$10$q1bb4Zj1pONIiSKYlK4gTuXiRB/qRquztxRFrPxqL8nbZ03SNW8Q.', 9445176716, 'shanmu@a.cd', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodation`
--
ALTER TABLE `accomodation`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `campusambassador`
--
ALTER TABLE `campusambassador`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`gid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `gid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campusambassador`
--
ALTER TABLE `campusambassador`
  ADD CONSTRAINT `campusambassador_ibfk_1` FOREIGN KEY (`gid`) REFERENCES `user` (`gid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
