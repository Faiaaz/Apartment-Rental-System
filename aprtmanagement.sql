-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 08, 2018 at 06:02 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `aprtmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `member_id` int(13) NOT NULL,
  `username` varchar(90) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`member_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `available_flats`
--

CREATE TABLE `available_flats` (
  `owner_id` int(22) NOT NULL,
  `owner_username` varchar(80) NOT NULL,
  `flat_city` varchar(25) NOT NULL,
  `flat_location` varchar(80) NOT NULL,
  `flat_rent` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flat_details`
--

CREATE TABLE `flat_details` (
  `id` int(13) NOT NULL,
  `username` varchar(90) NOT NULL,
  `flat_city` varchar(20) NOT NULL,
  `flat_location` varchar(130) NOT NULL,
  `desire_rent` int(13) NOT NULL,
  `flat_size` varchar(20) NOT NULL,
  `num_of_rooms` int(5) NOT NULL,
  `additional_info` varchar(255) NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(13) NOT NULL,
  `username` varchar(90) NOT NULL,
  `first_name` varchar(80) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `password` varchar(120) NOT NULL,
  `contact_no` varchar(17) NOT NULL,
  `city` varchar(18) NOT NULL,
  `location` varchar(70) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `join_date` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `username`, `first_name`, `last_name`, `password`, `contact_no`, `city`, `location`, `gender`, `join_date`) VALUES
(1, 'salman', 'Salman', 'rahman', '123', '43764378', 'dhaka', 'Uttara', 'Male', '00:20:18'),
(2, 'fahim', 'fahmim', 'Ahmed', '123', '01858723528', 'dhaka', 'USA', 'Male', '00:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$g7NSXYb6BfMPCRka4OjB4uA5Lzy3GzbDxFDI7Mg4GbxKSzWKw0hxS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_flats`
--
ALTER TABLE `available_flats`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `flat_details`
--
ALTER TABLE `flat_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_flats`
--
ALTER TABLE `available_flats`
  MODIFY `owner_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `flat_details`
--
ALTER TABLE `flat_details`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;