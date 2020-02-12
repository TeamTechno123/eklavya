-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2020 at 06:00 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eklavya`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `achievement_id` int(11) NOT NULL,
  `achievement_title` varchar(500) NOT NULL,
  `achievement_type` varchar(250) DEFAULT NULL,
  `achievement_status` int(11) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`achievement_id`, `achievement_title`, `achievement_type`, `achievement_status`, `date`) VALUES
(1, 'up', 'Student', 1, '2020-02-08 07:53:45'),
(2, 'School Trip', 'School', 1, '2020-02-09 09:42:59'),
(4, 'yyy', 'Teacher', 1, '2020-02-08 10:03:42');

-- --------------------------------------------------------

--
-- Table structure for table `achievement_details`
--

CREATE TABLE `achievement_details` (
  `achievement_details_id` int(11) NOT NULL,
  `achievement_id` int(11) NOT NULL,
  `achievement_details_title` varchar(500) DEFAULT NULL,
  `achievement_details_name` varchar(250) DEFAULT NULL,
  `achievement_details_img` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `achievement_details`
--

INSERT INTO `achievement_details` (`achievement_details_id`, `achievement_id`, `achievement_details_title`, `achievement_details_name`, `achievement_details_img`) VALUES
(1, 2, 'School Trip', 'School Trip', 'achievement_2_1_1581241334.jpg'),
(15, 1, '1', '2', 'achievement_1_1_1581156070.jpg'),
(16, 1, '2', '3', 'achievement_1_2_1581156062.JPG'),
(17, 4, '4', '5', 'achievement_4_1_1581156223.JPG'),
(18, 4, '6', '7', 'achievement_4_2_1581156223.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(250) NOT NULL,
  `admin_email` varchar(150) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Techno', 'demo@mail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcement_id` int(20) NOT NULL,
  `announcement_no` int(11) NOT NULL,
  `announcement_date` varchar(100) DEFAULT NULL,
  `announcement_title` varchar(250) DEFAULT NULL,
  `announcement_image` varchar(250) DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT 0,
  `announcement_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `announcement_no`, `announcement_date`, `announcement_title`, `announcement_image`, `priority`, `announcement_status`) VALUES
(4, 1, '02-2-2020', 'CBSC 3', 'announcement_4_1581060999.jpg', 0, 1),
(5, 2, '03-2-2020', 'Public Advisory : Unauthorized use of CBSE name and logo on Social Media', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` bigint(20) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `company_address` varchar(350) NOT NULL,
  `company_city` varchar(150) NOT NULL,
  `company_state` varchar(150) NOT NULL,
  `company_district` varchar(150) NOT NULL,
  `company_statecode` bigint(20) NOT NULL,
  `company_pincode` varchar(20) DEFAULT NULL,
  `company_mob1` varchar(12) NOT NULL,
  `company_mob2` varchar(12) NOT NULL,
  `company_email` varchar(150) NOT NULL,
  `company_website` varchar(150) NOT NULL,
  `company_pan_no` varchar(12) NOT NULL,
  `company_gst_no` varchar(100) NOT NULL,
  `company_lic1` varchar(150) NOT NULL,
  `company_lic2` varchar(150) NOT NULL,
  `company_start_date` varchar(15) NOT NULL,
  `company_end_date` varchar(15) NOT NULL,
  `company_logo` varchar(200) NOT NULL,
  `company_seal` varchar(150) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_address`, `company_city`, `company_state`, `company_district`, `company_statecode`, `company_pincode`, `company_mob1`, `company_mob2`, `company_email`, `company_website`, `company_pan_no`, `company_gst_no`, `company_lic1`, `company_lic2`, `company_start_date`, `company_end_date`, `company_logo`, `company_seal`, `date`) VALUES
(1, 'Poltry Demo', 'fghfgh dfgh', 'Kolhapur', 'Maharashtra', 'Kolhaput', 0, '111222', '9876543210', '9998887770', 'demo@email.com', 'www.ppp.com', '111', '222', '333', '444', '01-01-2019', '01-01-2021', '', '', '2020-01-08 10:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `contact_mail`
--

CREATE TABLE `contact_mail` (
  `contact_mail_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `subject` text NOT NULL,
  `message` varchar(250) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_mail`
--

INSERT INTO `contact_mail` (`contact_mail_id`, `name`, `email`, `mobile`, `subject`, `message`, `date`) VALUES
(1, 'Datta Mane', 'demo@email.com', '9876543210', 'demo sub', 'dfgf dsfgdf sdfgdf sdfgsd sdfgdsg', '08-02-2020 06:04:07AM'),
(2, 'dfh', 'demo@email.com', '9876543210', 'dfgdfg', 'dfg sdfg', '08-02-2020 11:35:51AM');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_no` int(11) DEFAULT NULL,
  `gallery_date` varchar(100) DEFAULT NULL,
  `gallery_title` varchar(250) DEFAULT NULL,
  `gallery_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_no`, `gallery_date`, `gallery_title`, `gallery_status`) VALUES
(5, 1, '06-2-2020', 'Sports', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_photo`
--

CREATE TABLE `gallery_photo` (
  `gallery_photo_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `gallery_photo_name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_photo`
--

INSERT INTO `gallery_photo` (`gallery_photo_id`, `gallery_id`, `gallery_photo_name`) VALUES
(1, 5, 'gallery_photo_5_1_1580992942.JPG'),
(2, 5, 'gallery_photo_5_1_1580992942.JPG'),
(3, 5, 'gallery_photo_5_1_1580992942.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `notification_no` int(11) NOT NULL,
  `notification_date` varchar(20) NOT NULL,
  `notification_type` varchar(100) NOT NULL,
  `notification_title` text NOT NULL,
  `notification_image` varchar(250) NOT NULL,
  `notification_status` int(11) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `notification_no`, `notification_date`, `notification_type`, `notification_title`, `notification_image`, `notification_status`, `date`) VALUES
(1, 1, '08-2-2020', 'Notification', 'asdf', 'notification_1_1581062828.jpg', 1, '2020-02-07 08:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(250) DEFAULT NULL,
  `slider_img` varchar(250) DEFAULT NULL,
  `slider_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_title`, `slider_img`, `slider_status`) VALUES
(3, 'slider 3', 'slider_3_1581138112.JPG', 1),
(4, 'slider 2', 'slider_4_1581069509.jpg', 1),
(5, 'slider 1', 'slider_5_1581069518.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_type` varchar(250) NOT NULL,
  `staff_name` varchar(250) NOT NULL,
  `staff_qualification` varchar(250) NOT NULL,
  `staff_possition` varchar(250) NOT NULL,
  `staff_img` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_type`, `staff_name`, `staff_qualification`, `staff_possition`, `staff_img`, `date`) VALUES
(2, 'Teaching Staff', 'Mrs. Swami V. V.', 'M. A. B. Ed.', '', 'staff_2_1581162695.png', '2020-02-08 11:51:35'),
(3, 'Teaching Staff', 'Miss. Thorat S. P.', 'B. A. B. Ed.', '', 'staff_3_1581162742.png', '2020-02-08 11:52:22'),
(4, 'Teaching Staff', 'Miss Shaikh R. S.', 'B. Sc.', '', 'staff_4_1581162787.png', '2020-02-08 11:53:07'),
(5, 'Teaching Staff', 'Mr. Patil K. G.', 'DCE', '', 'staff_5_1581162819.png', '2020-02-08 11:53:39'),
(6, 'Office Staff', 'Mrs. Mulla R. I.', 'B. Com', 'Sr. Clerk', 'staff_6_1581163387.png', '2020-02-08 12:04:09'),
(7, 'Office Staff', 'Mrs. Toraskar M. M.', 'B. Com', 'Jr. Clerk', 'staff_7_1581163441.png', '2020-02-08 12:04:01'),
(8, 'Office Staff', 'Mrs. Patil S. B.', 'B.A.M.Lib', 'Librarian', 'staff_8_1581163499.png', '2020-02-08 12:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `branch_id` varchar(100) NOT NULL,
  `roll_id` int(11) NOT NULL DEFAULT 2,
  `user_name` varchar(250) NOT NULL,
  `user_lastname` varchar(100) NOT NULL,
  `user_city` varchar(150) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_mobile` varchar(12) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_otp` varchar(10) DEFAULT NULL,
  `user_status` varchar(20) NOT NULL DEFAULT 'active',
  `user_addedby` varchar(100) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `company_id`, `branch_id`, `roll_id`, `user_name`, `user_lastname`, `user_city`, `user_email`, `user_mobile`, `user_password`, `user_otp`, `user_status`, `user_addedby`, `user_date`, `is_admin`) VALUES
(1, 1, '', 1, 'Admin', '', 'Kolhapur', 'demo@mail.com', '9876543210', '123456', NULL, 'active', 'Admin', '2020-02-05 05:15:19', 1),
(6, 1, '', 2, 'Datta Mane', '', 'Kop', '', '9673454383', '123456', NULL, 'active', '1', '2020-01-08 12:39:59', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`achievement_id`);

--
-- Indexes for table `achievement_details`
--
ALTER TABLE `achievement_details`
  ADD PRIMARY KEY (`achievement_details_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `contact_mail`
--
ALTER TABLE `contact_mail`
  ADD PRIMARY KEY (`contact_mail_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `gallery_photo`
--
ALTER TABLE `gallery_photo`
  ADD PRIMARY KEY (`gallery_photo_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `achievement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `achievement_details`
--
ALTER TABLE `achievement_details`
  MODIFY `achievement_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_mail`
--
ALTER TABLE `contact_mail`
  MODIFY `contact_mail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery_photo`
--
ALTER TABLE `gallery_photo`
  MODIFY `gallery_photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
