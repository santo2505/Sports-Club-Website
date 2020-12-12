-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2020 at 04:37 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15569190_sportsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `abc`
--

CREATE TABLE `abc` (
  `f_name` varchar(55) NOT NULL,
  `u_name` varchar(56) NOT NULL,
  `u_pass` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abc`
--

INSERT INTO `abc` (`f_name`, `u_name`, `u_pass`) VALUES
('chirag pavesha', 'chirag', 'chirag'),
('chirag23', 'chirag123', 'chirag12'),
('Chirag1', 'Chirag2', 'Chirag3'),
('Chirag pavesha', 'Chiragpavesha', 'chirag@09'),
('Parth', 'parth', 'parth123'),
('Parth', 'parth123', 'parth123'),
('Pavesha1', 'Pavesha2', 'Pavesha'),
('Santoshi', 'santa123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `firstname` varchar(55) DEFAULT NULL,
  `lastname` varchar(56) NOT NULL,
  `email` varchar(56) NOT NULL,
  `contact` int(56) NOT NULL,
  `message` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `user_id` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `u_state` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `u_about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`user_id`, `pass`, `u_name`, `u_address`, `u_state`, `phone_no`, `u_email`, `sex`, `language`, `u_about`) VALUES
('68536574fee', 'fgefgerg', 'egrg rgrbfvrf', '4rhth trhtujdbfrb ', 'AL', '9687785857', 'chiragh@gmaial.com', 'Male', 'en', 'hguy65hds 45ghb  g5hyg'),
('dvdfv ', 'sv s', 'rgferf vgrgv ', 'rgev regvb ', 'AF', '58765/87', 'i687kuy8k@gmail.com', 'Male', 'en', 'hnmtytm yt jtyty y5y6'),
('erfdvg ', 'rvfs vfx', ' rgfrdgvr c rgv ', 'rgvsedwf', 'AF', 'grfgv b', 'rgevfc ', 'Male', 'en', ' bfrhgbed cfrtbh cbhbt '),
('htrhtb', 'hrhbn', 'hbngtb ', 'yukmuji', 'AS', '9687785857', 'chiragh@gmaial.com', 'Male', 'en', 'vdv5 5hg5hg55yh5ght5y 5y5y'),
('Papa', 'papa', 'Papa', '123-indaras', 'AL', '8000251515', 'surendrasabat@gmail.com', 'Male', 'en', 'excellent'),
('sachin', '123', 'sachin Sabat', '403-indraprasthB', 'DZ', '9375936488', 'sachinsabat@344', 'Male', '', 'Good'),
('santo123', '123', 'Santoshi Sabat', '403-indraprasth,swapnalok', 'DZ', '93759386499', 'sanal@gmail.com', 'Female', 'en', 'GOOD'),
('santoshi_2505', '123', 'Santoshi Sabat', '403-indraprasth', 'AF', '9375936488', 'santoshi@gmail.com', 'Female', 'en', 'good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abc`
--
ALTER TABLE `abc`
  ADD PRIMARY KEY (`u_name`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD UNIQUE KEY `firstname` (`firstname`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
