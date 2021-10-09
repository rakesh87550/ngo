-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2021 at 03:57 PM
-- Server version: 10.3.27-MariaDB-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `incredi7_weforyou`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_password` varchar(10) NOT NULL,
  `admin_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`, `admin_role`) VALUES
(1, 'kali', 'kali123', 0),
(2, 'Pinki', 'pinki@111', 0);

-- --------------------------------------------------------

--
-- Table structure for table `banner_slider`
--

CREATE TABLE `banner_slider` (
  `id` int(11) NOT NULL,
  `banner_title` varchar(100) NOT NULL,
  `banner_content` varchar(250) NOT NULL,
  `banner_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner_slider`
--

INSERT INTO `banner_slider` (`id`, `banner_title`, `banner_content`, `banner_img`) VALUES
(3, 'Food Distribution', 'নাম প্রকাশে অনিচ্ছুক এক ব্যক্তি আজকে রাতে কিছু শিশুদের খাবারের ব্যবস্থা করেছিলেন। ওনার এই চিন্তাধারাকে প্রনাম জানাই।', 'food-distribution.jpeg'),
(5, 'Covid Yodha Savmanna', 'Covid Yodha Savmanna Award Picture.', 'award-pic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_inquiry`
--

CREATE TABLE `contact_inquiry` (
  `c_id` int(11) NOT NULL,
  `c_name` text NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_phone` bigint(15) NOT NULL,
  `c_subject` varchar(100) NOT NULL,
  `c_massage` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_inquiry`
--

INSERT INTO `contact_inquiry` (`c_id`, `c_name`, `c_email`, `c_phone`, `c_subject`, `c_massage`) VALUES
(2, 'Sujoy Sinha', 'ssujoy123@gm.in', 2147483647, 'Fund Raiser', 'Sujoy Sinha As Fund Raiser.'),
(3, 'Ajay Singh Deol', 'adeol456@gm.co', 1541782903, 'Actor', 'I am an Actor.'),
(5, 'Dharam Singh', 'Sdharam@gmail.in', 958471203, 'Fund Raiser', 'I want to join your team.');

-- --------------------------------------------------------

--
-- Table structure for table `event_list`
--

CREATE TABLE `event_list` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(100) NOT NULL,
  `event_place` varchar(100) NOT NULL,
  `event_date` date NOT NULL,
  `event_content` varchar(1000) NOT NULL,
  `event_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_list`
--

INSERT INTO `event_list` (`event_id`, `event_title`, `event_place`, `event_date`, `event_content`, `event_img`) VALUES
(1, 'Corona Vaccination', 'Matigara', '2021-07-06', 'ভ্যাক্সিনেসন সেন্টারে আমরা। কাজের গতি বাড়াতে আজকেও এবং বেশি সংখ্যক মানুষের কাছে ভ্যাকসিন পৌছে দিতে নার্স দিদিদের সাহায্যার্থে আমাদের স্বল্প প্রয়াস। \r\nভ্যাক্সিনেসন সেন্টারে আমরা। কাজের গতি বাড়াতে আজকেও এবং বেশি সংখ্যক মানুষের কাছে ভ্যাকসিন পৌছে দিতে নার্স দিদিদের সাহায্যার্থে আমাদের স্বল্প প্রয়াস। ', 'vaccination.jpg'),
(3, 'নারী শক্তি = ধৈর্য্য শক্তি। ', 'Mathabhanga', '2021-06-26', 'আগে শুনেছি তবে ভ্যাক্সিনেসন সেন্টারে প্রত্যহ প্রমান পাচ্ছি। \r\nএত ভিড় তবু এদের মুখে হাসির অভাব নেই। এরা যেন ক্লান্তি কি সেটা বোঝেই না। \r\nনার্স দিদি , বোনদের আমাদের We for You #Organization এর তরফ থেকে শতকোটি প্রনাম। ওনাদের পরিশ্রম অনুমেয় ছিল, তবে আজ অনুভূতির সাথে মিলিত। \r\nHappy to Help এবং আমাদের We for You Organization এর সকল বন্ধুদের এই নিরলস , নিঃস্বার্থ প্রচেষ্টাকে নমন করি।   🙏🙏🙏 এভাবেই বেচে থাকুক মানবতা। একে অপরের সাথে কাধে কাধ মিলিয়ে এগিয়ে চলুক আমাদের শহর, আমাদের প্রিয় #মাথাভাঙ্গা । ', 'doctors-day.jpg'),
(4, 'নারী শক্তি = ধৈর্য্য শক্তি। ', 'Mathabhanga', '2021-06-26', 'আগে শুনেছি তবে ভ্যাক্সিনেসন সেন্টারে প্রত্যহ প্রমান পাচ্ছি। \r\nএত ভিড় তবু এদের মুখে হাসির অভাব নেই। এরা যেন ক্লান্তি কি সেটা বোঝেই না। \r\nনার্স দিদি , বোনদের আমাদের We for You #Organization এর তরফ থেকে শতকোটি প্রনাম। ওনাদের পরিশ্রম অনুমেয় ছিল, তবে আজ অনুভূতির সাথে মিলিত। \r\nHappy to Help এবং আমাদের We for You Organization এর সকল বন্ধুদের এই নিরলস , নিঃস্বার্থ প্রচেষ্টাকে নমন করি।   🙏🙏🙏 এভাবেই বেচে থাকুক মানবতা। একে অপরের সাথে কাধে কাধ মিলিয়ে এগিয়ে চলুক আমাদের শহর, আমাদের প্রিয় #মাথাভাঙ্গা । ', 'doctors-day.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image_gallery`
--

CREATE TABLE `image_gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_title` varchar(100) NOT NULL,
  `gallery_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_gallery`
--

INSERT INTO `image_gallery` (`gallery_id`, `gallery_title`, `gallery_img`) VALUES
(2, 'Corona Vaccination', 'vaccination.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member_list`
--

CREATE TABLE `member_list` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `member_title` varchar(100) NOT NULL,
  `member_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_list`
--

INSERT INTO `member_list` (`member_id`, `member_name`, `member_title`, `member_img`) VALUES
(2, 'Dilip Kumar', 'Team Member', 'person2.jpg'),
(4, 'Suman Ghosh', 'Head of Management', 'person1.jpg'),
(5, 'Rashi Poddar', 'CHief Executive Officer', 'person3.jpg'),
(6, 'Malang Adhikari', 'Team Member', 'person4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news_date` date NOT NULL,
  `news_place` varchar(100) NOT NULL,
  `news_type` text NOT NULL,
  `news_content` varchar(1000) NOT NULL,
  `news_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_date`, `news_place`, `news_type`, `news_content`, `news_img`) VALUES
(2, 'অসহায় পরিবার গুলোকে খাবার দিলেন উই ফর ইউ স্বেচ্ছাসেবী সংগঠন', '2021-06-30', 'Mathabhanga', 'latest', 'মাথাভাঙ্গা ৬ নং ওয়ার্ডের বাসিন্দা #বিশ্বজিৎ #তরফদার (#বাবুসোনা) প্রতিমাসে একদিন করে আমাদের We for You Organization এর #আহার #পরিষেবার মাধ্যমে প্রয়োজনীয়দের মুখে  খাবার তুলে দেবার দায়িত্ব ভার নিয়েছেন। \r\nওনাকে জানাই অসংখ্য ধন্যবাদ এবং ওনার মহানুভবতাকে কুর্নিশ জানাই।', 'food-distribution.jpg'),
(3, 'আহার_পরিষেবা', '2021-07-05', 'Balurghat', 'popular', 'সুশোভন সাহার মা স্বর্গীয় পপি সাহার মৃত্যু বার্ষিকিতে আজ কিছু শিশুদের এবং দুস্থদের রাতের খাবারের ব্যাবস্থা করেছিল ভাই শুসভন। \r\nভগবান যাতে ভাইকে শক্তি দেয় মাতৃহীন জীবন কাটাতে এই প্রার্থনা করি।', 'food-distribution.jpeg'),
(4, 'Happy National Doctors Day 2021 Doctors are living God', '0000-00-00', 'Mathabhanga', 'latest', 'আজকে নেশনাল ডক্টরস ডে উপলক্ষে আমাদের We for You #Organization এর বন্ধুরা গিয়েছিলাম আমাদের উপদেষ্টা Dr. #Sanatan #Ghosh Sir এবং Mathabhanga SD Hospital এ। হাসপাতালে উপস্থিত #ভগবানদের সাথে কাটানো খানিক সময় আমাদের কাছে আশির্বাদ সরূপ। পৃথিবীর সমস্ত ডক্টর রূপের দেবদূতদের প্রনাম জানাই।', 'doctors-day.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery`
--

CREATE TABLE `video_gallery` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(100) NOT NULL,
  `video_location` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_gallery`
--

INSERT INTO `video_gallery` (`video_id`, `video_title`, `video_location`) VALUES
(1, 'Video 01', 'charity.mp4'),
(2, 'Food Donate', 'julia-m-cameron.mp4'),
(3, 'mikhail', 'mikhail.mp4'),
(4, 'Rodnae Production', 'rodnae-productions.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `banner_slider`
--
ALTER TABLE `banner_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_inquiry`
--
ALTER TABLE `contact_inquiry`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `event_list`
--
ALTER TABLE `event_list`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `image_gallery`
--
ALTER TABLE `image_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `member_list`
--
ALTER TABLE `member_list`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `video_gallery`
--
ALTER TABLE `video_gallery`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner_slider`
--
ALTER TABLE `banner_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_inquiry`
--
ALTER TABLE `contact_inquiry`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event_list`
--
ALTER TABLE `event_list`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `image_gallery`
--
ALTER TABLE `image_gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member_list`
--
ALTER TABLE `member_list`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video_gallery`
--
ALTER TABLE `video_gallery`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
