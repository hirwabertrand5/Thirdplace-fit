-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 04:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thirdplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'belyse', '$2y$10$0g4PpFx8DCLTI0XgJxQepO4kdrpl49PQTX0pjZEqjbKWxWtAQVD4u');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone_number`, `message`) VALUES
(6, 'hirwa', 'ishimwepierre09@gmail.com', '0781567890', 'kiFszdfgfb');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback_text` text NOT NULL,
  `emoji` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback_text`, `emoji`, `created_at`) VALUES
(7, 'Christia', 'Christian10@gmail.com', 'The trainers at this gym are incredibly knowledgeable and supportive. I\'ve seen significant improvements in my fitness level since joining.', '😃', '2023-09-16 23:30:03'),
(8, 'yves', 'yvesoffial2012@gmail.com', 'The equipment is top-notch and well-maintained. I never have to wait to use the machines I need.', '😃', '2023-09-16 23:30:59'),
(9, 'Umutoni', 'mutoni1@gmail.com', 'I love the sense of community at this gym. It\'s motivating to see others working hard and achieving their fitness goals.', '😃', '2023-09-16 23:32:06');

-- --------------------------------------------------------

--
-- Table structure for table `rate_and_review`
--

CREATE TABLE `rate_and_review` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `review_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rate_and_review`
--

INSERT INTO `rate_and_review` (`review_id`, `user_id`, `rating`, `review_text`, `created_at`) VALUES
(1, 2, 4, 'Thirdplace Fitness has been an incredible gym experience for me. The trainers are highly knowledgeable and motivating, and the variety of equipment and classes makes it easy to stay committed to my fitness goals. I highly recommend Thirdplace Fitness for anyone looking to improve their fitness and overall well-being.', '2023-09-19 01:41:37'),
(2, 3, 5, 'I absolutely love the gym at Thirdplace Fitness! The facilities are top-notch, and the trainers are incredibly knowledgeable and supportive. It\'s been a game-changer for my fitness journey', '2023-09-19 01:47:21');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `service_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_name`, `description`, `service_image`) VALUES
(1, 'Aerobics', 'In Thirdplace Fitness we have Aerobics. Aerobic exercise is a physical activity that uses your body\'s large muscle groups, is rhythmic and repetitive. It increases your heart rate and how much oxygen your body uses. Examples of aerobic exercises include walking, cycling and swimming.', 'service_images/aerobics.jpg'),
(2, 'Aqua Gym', 'Aqua aerobics in the pool. Sport swimming fitness workout. The aquagym exercising is consisted of repeating low-impact movements under the water. This forces the body to work twice as hard as making the same moves on land. It is because of this movement that many benefits arise.', 'service_images/aquagym.jpg'),
(3, 'Body Building', 'At Thirdplace Fitness Gym, we offer a comprehensive bodybuilding service designed to help our clients achieve their fitness goals and sculpt their dream physiques. Our bodybuilding program is tailored to cater to individuals of all fitness levels, from beginners looking to build a solid foundation to experienced bodybuilders striving for peak performance.', 'service_images/s-1.jpg'),
(4, 'Sauna Massage', 'Thirdplace Fitness offers an indulgent and rejuvenating service to its clients through its luxurious Sauna Massage experience. This unique service combines the relaxing benefits of sauna therapy with the therapeutic effects of massage, creating a holistic wellness experience like no other.\r\n\r\nClients at Thirdplace Fitness can unwind and detoxify in the state-of-the-art sauna facility, which provides a tranquil environment for relaxation and stress relief. The sauna promotes the elimination of toxins from the body, enhances circulation, and soothes sore muscles.', 'service_images/sauna massage.jpg'),
(5, 'steam room', 'At Thirdplace Fitness, we are committed to providing our clients with a comprehensive fitness and wellness experience, and our state-of-the-art steam room is a valuable addition to our services. Our steam room offers a range of benefits, including relaxation, stress relief, and improved physical well-being.', 'service_images/steam room.jpg'),
(6, 'Swimming Pool', 'Thirdplace Fitness offers a top-notch swimming pool service to its clients. Our state-of-the-art pool is a refreshing oasis for fitness enthusiasts looking to swim laps, cool down, or simply relax after a workout. With crystal-clear water and a welcoming atmosphere, our pool provides a perfect balance of fitness and relaxation. Whether you\'re a serious swimmer or just looking to unwind, Thirdplace Fitness ensures a refreshing aquatic experience for all our valued members. Dive into fitness and relaxation at our premium swimming pool.', 'service_images/g.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `profile_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `email`, `password`, `address`, `phone_number`, `profile_picture`) VALUES
(2, 'Ernest ', 'sugirart243', 'sugirart243@gmail.com', '$2y$10$tl3CWovmuw.9URRTTQLwdeMNwq.tbLezR3328c3EtrGJ1.lzQySHm', 'Kigali, Nyamirambo', '0965964652', 'profile_pictures/aquagym.jpg'),
(3, 'umwari Fiona', 'fiona10', 'fionaumwari@gmail.com', '$2y$10$amhxsSeA4Jgp5iUj1bTl0esxoMohedAaXOC9jifgJRRJ0fkCiuGfu', 'Kigali,Reber', '07817254135', 'profile_pictures/aquagym.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate_and_review`
--
ALTER TABLE `rate_and_review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rate_and_review`
--
ALTER TABLE `rate_and_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rate_and_review`
--
ALTER TABLE `rate_and_review`
  ADD CONSTRAINT `rate_and_review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
