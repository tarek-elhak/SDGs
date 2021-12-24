-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 02:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `firstname`, `lastname`, `email`, `password`, `photo`) VALUES
(1, 'Diaa', 'Mamdouh', 'diaa.mamdouh1080@gmail.com', 'b105e9cab739fbf2fb8887d6d5182eff', 'd.jpg'),
(72, 'sherif', 'mohamed', 'sherif.515@gmail.com', 'b105e9cab739fbf2fb8887d6d5182eff', 's.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `goal`
--

CREATE TABLE `goal` (
  `goal_id` int(11) NOT NULL,
  `goal_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goal`
--

INSERT INTO `goal` (`goal_id`, `goal_name`) VALUES
(1, 'No Poverty'),
(2, 'Zero Hunger'),
(3, 'Good Health And Well-Being'),
(4, 'Quality Education'),
(5, 'Gender Equality '),
(6, 'Clean Water And Sanitation'),
(7, 'Affordable and Clean Energy'),
(8, 'Decent Work and Economic Growth'),
(9, 'Industry, Innovation and Infrastructure'),
(10, 'Reduced Inequality'),
(11, 'Sustainable Cities and Communities'),
(12, 'Responsible Consumption and Production'),
(13, 'Climate Action'),
(14, 'Life Below Water'),
(15, 'Life on Land'),
(16, 'Peace and Justice Strong Instituation'),
(17, 'Partnerships to achieve the Goal');

-- --------------------------------------------------------

--
-- Table structure for table `indicator`
--

CREATE TABLE `indicator` (
  `indicator_id` int(11) NOT NULL,
  `indicator_name` varchar(255) NOT NULL,
  `indicator_weight` double NOT NULL,
  `goal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `indicator`
--

INSERT INTO `indicator` (`indicator_id`, `indicator_name`, `indicator_weight`, `goal_id`) VALUES
(1, 'ind_1.1.1', 0.8, 1),
(2, 'ind_1.2.1', 0, 1),
(3, 'ind_1.2.2', 0, 1),
(4, 'ind_1.3.1', 0, 1),
(5, 'ind_1.4.1', 0.2, 1),
(6, 'ind_1.4.2', 0, 1),
(7, 'ind_1.5.1', 0, 1),
(8, 'ind_2.1.1', 0.8, 2),
(9, 'ind_2.1.2', 0, 2),
(10, 'ind_2.2.1', 0, 2),
(11, 'ind_2.2.2', 0, 2),
(12, 'ind_2.3.1', 0, 2),
(13, 'ind_2.3.2', 0, 2),
(14, 'ind_2.4.1', 0, 2),
(15, 'ind_2.5.1', 0, 2),
(16, 'ind_2.5.2', 0, 2),
(17, 'ind_2.a.1', 0.2, 2),
(18, 'ind_2.a.2', 0, 2),
(19, 'ind_2.b.1', 0, 2),
(20, 'ind_2.c.1', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_name` varchar(50) NOT NULL,
  `population` float DEFAULT NULL,
  `IPL` float DEFAULT NULL,
  `electricity_access` float DEFAULT NULL,
  `prevalence_of_undernourishment` float DEFAULT NULL,
  `agriculture` float DEFAULT NULL,
  `births_attended_by_skilled_health` float DEFAULT NULL,
  `Basic_and_safely_managed_sanitation_services` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_name`, `population`, `IPL`, `electricity_access`, `prevalence_of_undernourishment`, `agriculture`, `births_attended_by_skilled_health`, `Basic_and_safely_managed_sanitation_services`) VALUES
('Ecuador', 17084400, 21.5, 100, 7.9, 9.2439, 96, 88),
('Egypt', 98423600, 32.5, 100, 4.5, 11.225, 92, 94);

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `stat_id` int(11) NOT NULL,
  `goal` varchar(255) NOT NULL,
  `location` varchar(225) NOT NULL,
  `value` float NOT NULL,
  `chart` varchar(255) NOT NULL,
  `goal_color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `website_information`
--

CREATE TABLE `website_information` (
  `element_id` int(11) NOT NULL,
  `element_type` varchar(255) NOT NULL,
  `element_content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `website_information`
--

INSERT INTO `website_information` (`element_id`, `element_type`, `element_content`) VALUES
(1, 'title', 'PROGRESS TRACKER '),
(2, 'logo', '2.PNG'),
(3, 'get started', 'Start your experience with the sustainable development goals NOW !'),
(4, 'philosophy', 'The Partnership for SDGs online platform welcomes registration of partnerships and voluntary commitments undertaken by Governments, intergovernmental organizations, major groups and other stakeholders that are aligned with SMART deliverables - Specific, Measurable, Achievable, Resource-based, and Time-bound – and that aim to drive the implementation of the 17 Sustainable Development Goals of the 2030 Agenda.'),
(5, 'goal1', 'End Poverty For All'),
(6, 'goal2', 'End hunger, achieve food security and improved nutrition and promote sustainable agriculture'),
(7, 'goal3', 'Ensure healthy lives and promote well-being for all at all ages'),
(8, 'goal4', 'Ensure inclusive and equitable quality education and promote lifelong learning opportunities for all'),
(9, 'goal5', 'Achieve gender equality and empower all women and girls'),
(10, 'goal6', 'Ensure availability and sustainable management of water and sanitation for all'),
(11, 'goal7', 'Ensure access to affordable, reliable, sustainable and modern energy for all'),
(12, 'goal8', 'Promote sustained, inclusive and sustainable economic growth, full and productive employment and decent work for all'),
(13, 'goal9', 'Build resilient infrastructure, promote inclusive and sustainable industrialization and foster innovation'),
(14, 'goal10', 'Reduce inequality within and among countries'),
(15, 'goal11', 'Make cities and human settlements inclusive, safe, resilient and sustainable'),
(16, 'goal12', 'Ensure sustainable consumption and production patterns'),
(17, 'goal13', 'Take urgent action to combat climate change and its impacts'),
(18, 'goal14', 'Conserve and sustainably use the oceans, seas and marine resources for sustainable development'),
(19, 'goal15', 'Protect, restore and promote sustainable use of terrestrial ecosystems, sustainably manage forests, combat desertification, and halt and reverse land degradation and halt biodiversity loss'),
(20, 'goal16', 'Promote peaceful and inclusive societies for sustainable development, provide access to justice for all and build effective, accountable and inclusive institutions.'),
(21, 'goal17', 'Strengthen the means of implementation and revitalize the global partnership for sustainable development');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `goal`
--
ALTER TABLE `goal`
  ADD PRIMARY KEY (`goal_id`);

--
-- Indexes for table `indicator`
--
ALTER TABLE `indicator`
  ADD PRIMARY KEY (`indicator_id`),
  ADD KEY `goal_id` (`goal_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_name`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`stat_id`);

--
-- Indexes for table `website_information`
--
ALTER TABLE `website_information`
  ADD PRIMARY KEY (`element_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `indicator`
--
ALTER TABLE `indicator`
  MODIFY `indicator_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `stat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `website_information`
--
ALTER TABLE `website_information`
  MODIFY `element_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `indicator`
--
ALTER TABLE `indicator`
  ADD CONSTRAINT `indicator_ibfk_1` FOREIGN KEY (`goal_id`) REFERENCES `goal` (`goal_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
