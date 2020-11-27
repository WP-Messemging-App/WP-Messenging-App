-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 11:20 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mychat`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_profile` varchar(255) NOT NULL,
  `user_country` text NOT NULL,
  `user_gender` text NOT NULL,
  `forgotten_answer` varchar(100) NOT NULL,
  `log_in` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_profile`, `user_country`, `user_gender`, `forgotten_answer`, `log_in`) VALUES
(1, 'Surai', '123456789', 'nursuraida.01@ftu.ac.th', 'images/Ftu_logo.png.44', 'Thailand', 'Female', 'lisa', 'Online'),
(2, 'Atifah', '0936037033', 'atifah_chapakiya@gmail.com', 'images/profile2.png', 'Korea', 'Female', '', 'Online'),
(3, 'mariam', '1111111111', 'sahar.amoudi@gmail.com', 'images/profile1.png', 'UK', 'Male', '', 'Online'),
(4, 'Anas', 'qweZXC87', 'anas@anas.com', 'images/profile1.png', 'Malaysia', 'Male', '', 'Offline'),
(5, 'Ammi', '987654321', 'ammi@gmail.com', 'images/muslimah.jpg.70', 'UK', 'Female', '', 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `users_chat`
--

CREATE TABLE `users_chat` (
  `msg_id` int(11) NOT NULL,
  `sender_username` varchar(100) NOT NULL,
  `receiver_username` varchar(100) NOT NULL,
  `msg_content` varchar(255) NOT NULL,
  `msg_status` text NOT NULL,
  `msg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_chat`
--

INSERT INTO `users_chat` (`msg_id`, `sender_username`, `receiver_username`, `msg_content`, `msg_status`, `msg_date`) VALUES
(10, 'mariam', 'mariam', '55555', 'read', '2020-11-05 06:12:41'),
(12, 'mariam', 'mariam', 'blahhhhhh', 'read', '2020-11-05 06:14:44'),
(14, 'Anas', 'Atifah', 'Hello', 'read', '2020-11-05 07:21:54'),
(16, 'Atifah', 'Anas', 'Hi', 'unread', '2020-11-05 07:23:45'),
(17, 'Atifah', 'Atifah', 'Hello', 'read', '2020-11-05 07:23:49'),
(18, 'Atifah', 'Anas', 'Hi', 'unread', '2020-11-05 07:24:06'),
(19, 'Atifah', 'rohimah', 'Hi', 'read', '2020-11-05 07:32:23'),
(21, 'rohimah', 'Atifah', 'wa.slam', 'read', '2020-11-05 07:33:15'),
(29, 'rohimah', 'Atifah', 'l', 'unread', '2020-11-22 06:20:39'),
(30, 'rohimah', 'Atifah', 'l', 'unread', '2020-11-22 06:20:52'),
(31, 'rohimah', 'rohimah', 'hi', 'read', '2020-11-22 12:35:02'),
(32, 'rohimah', 'Atifah', 'o', 'unread', '2020-11-22 12:35:15'),
(33, 'rohimah', 'Atifah', 'o', 'unread', '2020-11-22 12:35:21'),
(34, 'rohimah', 'mariam', 'hi', 'unread', '2020-11-22 12:37:16'),
(35, 'rohimah', 'mariam', 'hi', 'unread', '2020-11-22 12:37:23'),
(36, 'rohimah', 'mariam', 'hi', 'unread', '2020-11-22 14:07:27'),
(37, 'Rohimah', 'Atifah', 'hey', 'unread', '2020-11-22 15:35:42'),
(38, 'Atifah', 'Rohimah', 'how are you?', 'read', '2020-11-22 15:35:42'),
(39, 'Rohimah', 'Atifah', 'hey', 'unread', '2020-11-22 15:37:49'),
(40, 'Atifah', 'Rohimah', 'how are you?', 'read', '2020-11-22 15:37:49'),
(41, 'rohimah', 'Atifah', 'hhi', 'unread', '2020-11-22 15:46:59'),
(42, 'rohimah', 'Atifah', 'hhi', 'unread', '2020-11-22 15:47:06'),
(43, 'rohimah', 'Atifah', 'I can do it', 'unread', '2020-11-22 15:47:39'),
(44, 'rohimah', 'Atifah', 'I can do it', 'unread', '2020-11-22 15:47:44'),
(45, 'rohimah', 'Atifah', 'khg', 'unread', '2020-11-22 16:32:28'),
(46, 'rohimah', 'Atifah', 'khg', 'unread', '2020-11-22 16:32:34'),
(47, 'Surai', 'Atifah', 'hi', 'unread', '2020-11-24 02:39:49'),
(48, 'Surai', 'Atifah', 'hi', 'unread', '2020-11-24 02:39:56'),
(49, 'Surai', 'Atifah', 'hi', 'unread', '2020-11-24 02:56:07'),
(50, 'Surai', 'Atifah', 'ki', 'unread', '2020-11-26 05:47:20'),
(51, 'Surai', 'Atifah', 'ki', 'unread', '2020-11-26 05:47:24'),
(52, 'Surai', 'Atifah', 'mi', 'unread', '2020-11-26 08:12:27'),
(53, 'Surai', 'Atifah', 'hv', 'unread', '2020-11-26 08:12:37'),
(54, 'Surai', 'Atifah', 'knkjb', 'unread', '2020-11-26 08:12:49'),
(55, 'Surai', 'Atifah', 'mnkkb', 'unread', '2020-11-26 08:12:55'),
(56, 'Surai', 'Atifah', 'mnkkb', 'unread', '2020-11-26 08:14:15'),
(57, 'Surai', 'Atifah', 'k', 'unread', '2020-11-26 08:14:27'),
(58, 'Surai', 'Surai', 'jgf', 'read', '2020-11-26 08:14:48'),
(59, 'Surai', 'Surai', 'uy', 'read', '2020-11-26 08:14:53'),
(60, 'Surai', 'Surai', 'pp', 'read', '2020-11-26 08:15:01'),
(61, 'Surai', 'Surai', 'p', 'read', '2020-11-26 08:15:06'),
(62, 'Surai', 'Surai', 'p', 'read', '2020-11-26 13:46:00'),
(63, 'Surai', 'Surai', 'l', 'read', '2020-11-26 13:47:31'),
(64, 'Surai', 'Surai', 'p', 'read', '2020-11-26 13:48:16'),
(65, 'Surai', 'Surai', 'llllllllllllll', 'read', '2020-11-26 13:55:15'),
(66, 'Surai', 'Atifah', 'hi', 'unread', '2020-11-26 13:56:19'),
(67, 'Surai', 'Atifah', 'hiiiiiiii', 'unread', '2020-11-26 13:57:29'),
(68, 'Surai', 'Atifah', 'you knowM', 'unread', '2020-11-26 13:58:19'),
(69, 'Surai', 'Atifah', 'meow', 'unread', '2020-11-26 13:58:30'),
(70, 'Surai', 'Atifah', 'hey', 'unread', '2020-11-26 13:59:11'),
(71, 'Surai', 'Atifah', 'boom', 'unread', '2020-11-26 13:59:19'),
(72, 'Surai', 'Atifah', 'cry', 'unread', '2020-11-26 13:59:27'),
(73, 'Surai', 'Atifah', 'cry', 'unread', '2020-11-26 13:59:31'),
(74, 'Surai', 'Atifah', 'again', 'unread', '2020-11-26 13:59:35'),
(75, 'Surai', 'Atifah', 'pls', 'unread', '2020-11-26 13:59:41'),
(76, 'Surai', 'Atifah', 'help', 'unread', '2020-11-26 13:59:45'),
(77, 'Surai', 'Atifah', 'me', 'unread', '2020-11-26 13:59:48'),
(78, 'Surai', 'Atifah', 'า', 'unread', '2020-11-26 14:18:38'),
(79, 'Surai', 'Atifah', 'ี้เด', 'unread', '2020-11-26 14:18:44'),
(80, 'Surai', 'Atifah', 'oooo', 'unread', '2020-11-26 14:18:52'),
(81, 'Surai', 'Atifah', 'oooo', 'unread', '2020-11-26 14:18:56'),
(82, 'Surai', 'Atifah', 'oo', 'unread', '2020-11-26 14:19:02'),
(83, 'Surai', 'Atifah', 'oo', 'unread', '2020-11-26 14:19:06'),
(84, 'Surai', 'Surai', 'llll', 'read', '2020-11-26 14:21:42'),
(85, 'Surai', 'Surai', 'lkk', 'read', '2020-11-26 14:21:45'),
(86, 'Surai', 'Surai', 'Rohimah', 'read', '2020-11-26 14:22:08'),
(87, 'Surai', 'Surai', 'Atifah', 'read', '2020-11-26 14:22:19'),
(88, 'Surai', 'Surai', 'Nursuraida', 'read', '2020-11-26 14:22:26'),
(89, 'Surai', 'Surai', 'why is not re', 'read', '2020-11-26 14:22:42'),
(90, 'Surai', 'Surai', 'oo', 'read', '2020-11-26 14:29:22'),
(91, 'Surai', 'Surai', 'ssssssss', 'read', '2020-11-26 14:30:04'),
(92, 'Surai', 'Surai', 'yyy', 'read', '2020-11-26 14:30:14'),
(93, 'Surai', 'Surai', 'kkkkkk', 'read', '2020-11-26 14:31:57'),
(94, 'Surai', 'Surai', 'ppppp', 'read', '2020-11-26 14:32:07'),
(95, 'Surai', 'Surai', 'ppppp', 'read', '2020-11-26 14:39:58'),
(96, 'Ammi', 'Surai', 'Hi', 'read', '2020-11-26 16:40:06'),
(97, 'Ammi', 'Surai', 'hi', 'read', '2020-11-26 16:44:38'),
(98, 'Ammi', 'Surai', 'hi', 'read', '2020-11-26 16:44:42'),
(99, 'Ammi', 'Surai', 'may', 'read', '2020-11-26 16:44:49'),
(100, 'Ammi', 'Surai', 'may', 'read', '2020-11-26 16:44:54'),
(101, 'Surai', 'Ammi', 'hi', 'unread', '2020-11-26 16:52:32'),
(102, 'Surai', 'Ammi', 'hi', 'unread', '2020-11-26 16:52:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_chat`
--
ALTER TABLE `users_chat`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_chat`
--
ALTER TABLE `users_chat`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
