-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 04:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `legaldefense`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `pass`, `name`) VALUES
(1, 'nimraumair@legaldefense.com', 'nimraumair@legaldefense.com', 'nimraumair'),
(2, 'admin@legaldefense.com', 'admin@legaldefense.com', 'umair maqsood');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `details` text NOT NULL,
  `code` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `name`, `details`, `code`) VALUES
(2, 'Divorce', 'This case relates to Divorce', '304'),
(6, 'Murder', 'This case relates to murder', '320'),
(10, 'Tax litigation', 'This case relates to tax collection', '345'),
(13, 'Civil ', 'This case is about civil Law', '234');

-- --------------------------------------------------------

--
-- Table structure for table `courts`
--

CREATE TABLE `courts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courts`
--

INSERT INTO `courts` (`id`, `name`, `details`) VALUES
(1, 'ISB High Court', 'Islamabad is the capital city of Pakistan, and is federally administered as part of the Islamabad Capital Territory. Built as a planned city in the 1960s to replace ...'),
(2, 'Supreme Court', 'The Supreme Court of Pakistan is the highest appellate court of the country and court of last resort. It is the final arbiter of the law and the Constitution. Its orders/decisions are binding on all other courts in the country. All executive and judicial authorities are bound to act in aid of the Supreme Court.'),
(6, 'Session Court', 'rer'),
(7, 'Civil Court', 'Civil cases');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_items`
--

CREATE TABLE `portfolio_items` (
  `item_id` int(255) NOT NULL,
  `item_title` varchar(255) NOT NULL,
  `item_author_name` varchar(255) NOT NULL,
  `item_author_id` int(255) NOT NULL,
  `item_desc` text NOT NULL,
  `item_date` date NOT NULL,
  `item_pics` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_items`
--

INSERT INTO `portfolio_items` (`item_id`, `item_title`, `item_author_name`, `item_author_id`, `item_desc`, `item_date`, `item_pics`, `client_name`) VALUES
(2, 'IC-301', 'Kat', 34, 'Murder case... Recently i have solved a case that is the person which is my best friend but i didnt give any nepotism to my friend...', '2021-06-27', '20201025_140854.jpg', 'David '),
(3, '1101', 'nimra', 41, 'Divorce', '2021-08-09', 'test suit.JPG', 'Laiba');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`, `details`) VALUES
(1, 'Islamabad', 'Islamabad is the capital city of Pakistan, and is federally administered as part of the Islamabad Capital Territory. Built as a planned city in the 1960s to replace ...'),
(5, 'Rawalpindi', 'It is the good city'),
(8, 'Karachi', 'City of lights');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `lawyer_id` int(255) NOT NULL,
  `checkreview` varchar(255) NOT NULL,
  `lawyer_feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`user_id`, `user_name`, `user_image`, `feedback`, `lawyer_id`, `checkreview`, `lawyer_feedback`) VALUES
(1, 'roma', 'none', 'good lawyer', 290, 'thanks for commenting', 'may you be blessed.'),
(42, 'amna', '', 'Very good lawyer', 41, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(77) NOT NULL,
  `user_password` varchar(55) NOT NULL,
  `user_name` text NOT NULL,
  `user_pbcno` varchar(15) NOT NULL,
  `user_position` text NOT NULL,
  `user_status` varchar(77) NOT NULL DEFAULT 'Not Verified',
  `user_uni` text NOT NULL,
  `user_dob` date NOT NULL,
  `user_profile_image` varchar(77) NOT NULL,
  `user_cover_image` varchar(77) NOT NULL,
  `user_phone` varchar(77) NOT NULL,
  `user_city` varchar(66) NOT NULL,
  `user_gender` varchar(55) NOT NULL,
  `user_court` varchar(77) NOT NULL,
  `user_degree` varchar(77) NOT NULL,
  `user_total_cases` int(9) NOT NULL,
  `user_won_cases` int(9) NOT NULL,
  `user_lost_cases` int(9) NOT NULL,
  `user_description` text NOT NULL,
  `expertise` text NOT NULL,
  `user_type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `user_name`, `user_pbcno`, `user_position`, `user_status`, `user_uni`, `user_dob`, `user_profile_image`, `user_cover_image`, `user_phone`, `user_city`, `user_gender`, `user_court`, `user_degree`, `user_total_cases`, `user_won_cases`, `user_lost_cases`, `user_description`, `expertise`, `user_type`) VALUES
(35, 'arslan@gmail.com', '1234', 'Arslan', '5678U', 'Burecurate', 'Verified', 'Pmas arid university', '2021-05-19', '', '', '0334657890', 'Islamabad', 'Male', 'ISB High Court', 'LLB ', 34, 32, 2, 'I am multitalented lawyer', 'Divorce, Murder, Dowry', 'L'),
(38, 'tanzil@legaldefense.com', '123123', 'tanzil', '90', 'Advocate', 'Not Verified', 'Pmas arid university', '2021-06-28', '', '', '03358676513', 'Islamabad', 'Male', 'ISB High Court', 'LLB ', 34, 30, 4, 'Hey i m tanzil...', 'Tax litigation, Dowry, Murder', 'L'),
(40, 'nimra.faiz29@gmail.com', '1234', 'Nimra Fatima', '2929', 'Advocate', 'Not Verified', '', '2021-08-11', '', '', '03346566828', 'Islamabad', 'Male', '', '', 0, 0, 0, '', '', 'L'),
(41, 'nimra@gmail.com', '1234', 'nimra', '3456', 'Advocate', 'Verified', 'Pmas', '2001-08-02', '', '', '0445665444', 'Islamabad', 'Female', 'ISB High Court', 'LLB', 12, 12, 0, 'Hey i am lawyer....', 'Divorce', 'L'),
(42, 'amna@gmail.com', '1234', 'amna', '', '', 'Not Verified', '', '0000-00-00', '', '', '0445786544', '', 'Female', '', '', 0, 0, 0, '', '', 'C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courts`
--
ALTER TABLE `courts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_items`
--
ALTER TABLE `portfolio_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `courts`
--
ALTER TABLE `courts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `portfolio_items`
--
ALTER TABLE `portfolio_items`
  MODIFY `item_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
