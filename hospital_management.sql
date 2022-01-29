-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 03:56 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_signup`
--

CREATE TABLE `admin_signup` (
  `srlo` int(10) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_signup`
--

INSERT INTO `admin_signup` (`srlo`, `emailid`, `password`) VALUES
(1, 'debarghyasarma@gmail.com', 'tunan1215');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `slno.` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `symptoms` text NOT NULL,
  `doctor` text NOT NULL,
  `approve` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`slno.`, `email`, `name`, `symptoms`, `doctor`, `approve`) VALUES
(2, 'kapil@gmail.com', 'Kapil Sharma', 'heart disease', 'Vinay Singh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_register`
--

CREATE TABLE `doctor_register` (
  `rno` int(10) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `specilization` text NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `image` blob NOT NULL,
  `approve` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_register`
--

INSERT INTO `doctor_register` (`rno`, `firstname`, `lastname`, `email`, `password`, `specilization`, `mobile`, `address`, `image`, `approve`) VALUES
(32, 'Ramesh', 'Kumar', 'ramesh@gmail.com', 'f38bc26b154b5bdaae09ec1b8cc17f0a', 'Neurologist', '9999999999', 'Patna', 0x696d616765, 1),
(33, 'Vinay', 'Singh', 'vinay12@gmail.com', '32c9ba626bf9cec3bf64b2eb3afaea4f', 'Cardiologist', '9853532636', 'Jaipur', 0x696d616765, 1),
(34, 'Mahesh', 'Jaiswal', 'mahesh123@gmail.com', 'eeddbf12d395d653cf44798a240be86e', 'Psychiatrist', '9887776543', 'Bhopal', 0x696d616765, 1),
(35, 'Sanjana', 'Kapoor', 'sanjanakapoor111@gmail.com', 'cd9fcc12838e3e1abb00ac5d213d5a50', 'Psychiatrist', '9999988888', 'Amritsar', 0x696d616765, 1),
(36, 'Arun', 'Sharma', 'arunsharma123@gmail.com', 'e0d82314baee64fd7cbadee3109eb0a4', 'Gastroenterologist', '9999977777', 'Mumbai', 0x696d616765, 1),
(37, 'Johhny', 'Sins', 'johhy@gmail.com', '241e5eff19059b64f9fc1be85dd17b53', 'Dermatologist', '9944444444', 'NewYork', 0x696d616765, 1),
(38, 'Sandeep', 'Tripathy', 'sandeeptripathy@gmail.com', 'a54e7d1cea1e6b21ee311cb1afe4764f', 'Pathologist', '5555522222', 'Mirzapur', 0x696d616765, 1),
(39, 'Dinesh', 'Aggarwal', 'dinesh12@gmail.com', '09979716bad4c5f1b710ea26453afa12', 'Dentist', '3434444444', 'Jodhpur', 0x696d616765, 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient_register`
--

CREATE TABLE `patient_register` (
  `pid` int(10) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `symptoms` text NOT NULL,
  `doctor_assigned` text NOT NULL,
  `image` blob NOT NULL,
  `approve` int(1) NOT NULL,
  `discharge` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_register`
--

INSERT INTO `patient_register` (`pid`, `firstname`, `lastname`, `email`, `password`, `address`, `mobile`, `symptoms`, `doctor_assigned`, `image`, `approve`, `discharge`) VALUES
(14, 'Kapil', 'Sharma', 'kapil@gmail.com', '90e48bfdd4e4a93b562e4bcd840d5ac7', 'Chandigarh', '7575775757', 'nerve pain', 'Ramesh Kumar', 0x696d616765, 1, 1),
(15, 'Sumit', 'Anand', 'sumitanand@gmail.com', '8d079ae3e20226ca992d4b8b28ebd32b', 'Gaya', '9090909090', 'bleeding gum', 'Dinesh Aggarwal', 0x696d616765, 1, 1),
(16, 'Gauri', 'Kumari', 'gauri12@gmail.com', '5320177fa307b9416148e38eeb20281a', 'Chennai', '8888833333', 'extreme anxiety', 'Sanjana Kapoor', 0x696d616765, 1, 0),
(17, 'Suraj', 'Das', 'suraj123@gmail.com', '41d228c96e86c4e9578c59001dc714cf', 'Bangalore', '4444466666', 'cracked skin', 'Johhny Sins', 0x696d616765, 1, 0),
(18, 'Guru', 'Govind', 'gurugovid@gmail.com', '18ecd8d47ddddda54520f8e9f8faa0e6', 'Jabalpur', '7577799999', 'nerve pain', 'Ramesh Kumar', 0x696d616765, 1, 0),
(19, 'Ashish', 'Verma', 'ashishverma12@gmail.com', 'f62d65228d1c22f973369bc08f1bea2b', 'Indore', '8989898989', 'stomach ache', 'Arun Sharma', 0x696d616765, 0, 0),
(20, 'Drake', 'Parker', 'drake12@gmail.com', '2767d5874d2a2df567bb0e498722db7c', 'London', '4545454545', 'bleeding gum', 'Dinesh Aggarwal', 0x696d616765, 1, 0),
(21, 'Swastika', 'Mishra', 'swastika@gmail.com', '13d0f0933894167d0f1a1cca8b798098', 'Raipur', '5535353535', 'extreme anxiety', 'Sanjana Kapoor', 0x696d616765, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_signup`
--
ALTER TABLE `admin_signup`
  ADD PRIMARY KEY (`srlo`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`slno.`);

--
-- Indexes for table `doctor_register`
--
ALTER TABLE `doctor_register`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `patient_register`
--
ALTER TABLE `patient_register`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_signup`
--
ALTER TABLE `admin_signup`
  MODIFY `srlo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `slno.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doctor_register`
--
ALTER TABLE `doctor_register`
  MODIFY `rno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `patient_register`
--
ALTER TABLE `patient_register`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
