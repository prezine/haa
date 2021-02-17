-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2021 at 03:40 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `haa`
--

-- --------------------------------------------------------

--
-- Table structure for table `haa_category`
--

CREATE TABLE `haa_category` (
  `categoryID` int(11) NOT NULL,
  `category_name` varchar(150) DEFAULT NULL,
  `category_desc` text,
  `dateCreated` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `haa_photos`
--

CREATE TABLE `haa_photos` (
  `photoID` int(11) NOT NULL,
  `projectID` int(11) DEFAULT NULL,
  `image_url` varchar(200) DEFAULT NULL,
  `dateAdded` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `haa_projects`
--

CREATE TABLE `haa_projects` (
  `projectID` int(11) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `project_desc` text NOT NULL,
  `project_image` varchar(300) NOT NULL,
  `project_category` varchar(100) NOT NULL,
  `dateCreated` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `haa_users`
--

CREATE TABLE `haa_users` (
  `userID` int(11) NOT NULL,
  `name` varchar(90) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `is_approved` int(11) DEFAULT NULL,
  `dateAdded` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `haa_category`
--
ALTER TABLE `haa_category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `haa_photos`
--
ALTER TABLE `haa_photos`
  ADD PRIMARY KEY (`photoID`);

--
-- Indexes for table `haa_projects`
--
ALTER TABLE `haa_projects`
  ADD PRIMARY KEY (`projectID`);

--
-- Indexes for table `haa_users`
--
ALTER TABLE `haa_users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `haa_category`
--
ALTER TABLE `haa_category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `haa_photos`
--
ALTER TABLE `haa_photos`
  MODIFY `photoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `haa_projects`
--
ALTER TABLE `haa_projects`
  MODIFY `projectID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `haa_users`
--
ALTER TABLE `haa_users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;
