-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2023 at 10:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccination`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `image`, `role_id`) VALUES
(9, 'admin', '$2y$10$HxAZg4dz9JNEaiRVL2a2f.4MuT3J8mD5JPOgwg2Bs1pTU.hOkWtu2', 'user_img/goko.jpg', 2),
(10, 'new_admin', '$2y$10$od2sRfSePVTiFUuU.mPvb.hiMoDTMWBHR.duakRoBUCl9KZyM9mpG', 'user_img/goko.jpg', 1),
(11, 'admin', '$2y$10$wDTeHSdcOG1ocJUZ5xynVO8BWxXmoV6zeEem384Ka6i26gsVnny1m', 'user_img/person_2.jpg', 1),
(12, 'abc', '$2y$10$.QnT7nOPgkrMn14dT6CL8OTUgP21VKx.W1oIec0y7S7CfncA0aD7u', 'user_img/illustration.png', 1),
(13, 'shariq', '$2y$10$G8ErswTwb/NzMWzxDLbC4u6VX77iT0gdaFoZQxB7iCcGLeLr4I2Wq', 'user_img/person_1.jpg', 1),
(14, 'shaheer', '$2y$10$P0X21XQ3yRtI.FVBWX/zv.rLGmjxrpVKQDoaFeG4eEpl6TNVDvHv2', 'user_img/hero_1.jpg', 1),
(15, 'hospital', '$2y$10$FiaQ4LES0ubAFidBp1YvrObIpSmbu.iCNTmTWqD5beDHdgXOgiN6a', 'user_img/h3.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `birth_certificate` varchar(255) NOT NULL,
  `child_image` varchar(255) NOT NULL,
  `vaccine_id` int(11) NOT NULL,
  `disability_id` int(11) NOT NULL,
  `problem_id` int(11) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL,
  `vaccinated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `first_name`, `last_name`, `father_name`, `mother_name`, `age`, `place_of_birth`, `date_of_birth`, `birth_certificate`, `child_image`, `vaccine_id`, `disability_id`, `problem_id`, `hospital`, `Time`, `status`, `vaccinated`) VALUES
(82, 'abc', 'abc', 'abc', 'abc', '18', 'karachi', '26-Jan-1999', '4240125720281', 'child_images/testimonial-2.jpg', 3, 2, 1, 'Jinnah', '2023-09-06 18:58:08', 0, 0),
(83, '1', '1', '1', '1', '18', 'Quia elit voluptatu', '08-10-2023', '4240125720281', 'child_images/sodapdf-converted (1).png', 3, 2, 2, 'Jinnah', '2023-09-06 19:51:42', 1, 1),
(84, '2', '2', '2', '2', '2', 'karachi', '26-Jan-1999', '4240125720281', 'child_images/photo-1612423284934-2850a4ea6b0f.jpg', 3, 2, 1, 'saifi', '2023-09-06 19:44:50', 2, 0),
(85, '11', '11', '11', '11', '18', 'karachi', '11', '11', 'child_images/testimonial-1.jpg', 2, 2, 1, 'saifi', '2023-09-06 19:44:32', 1, 0),
(86, 'aa', 'aa', 'aa', 'aa', '18', 'karachi', '26-Jan-1999', '4240125720281', 'child_images/testimonial-1.jpg', 2, 1, 1, 'zia', '2023-09-06 19:51:06', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `a_id` int(11) NOT NULL,
  `avalible` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`a_id`, `avalible`) VALUES
(1, 'Yes'),
(2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email`, `subject`, `message`) VALUES
(1, 'Uma', 'Fields', 'ritehokes@mailinator.com', 'Id in sit velit sin', 'Ut sed sed temporibu');

-- --------------------------------------------------------

--
-- Table structure for table `disability`
--

CREATE TABLE `disability` (
  `id` int(11) NOT NULL,
  `disability` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `disability`
--

INSERT INTO `disability` (`id`, `disability`) VALUES
(1, 'Yes'),
(2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `h_id` int(11) NOT NULL,
  `h_image` varchar(255) NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `h_loc` varchar(255) NOT NULL,
  `vac_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`h_id`, `h_image`, `h_name`, `h_loc`, `vac_id`) VALUES
(41, 'hospital_images/h1.jpg', 'Jinnah', 'abc', 1),
(42, 'hospital_images/h1.jpg', 'saifi', 'five', 1),
(43, 'hospital_images/sodapdf-converted (1).png', 'zia', 'musa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `vaccine_name` varchar(255) NOT NULL,
  `up_date` date NOT NULL,
  `availability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `vaccine_name`, `up_date`, `availability`) VALUES
(6, 'xam', '2023-09-18', 1),
(7, 'shaheer', '2023-09-12', 2);

-- --------------------------------------------------------

--
-- Table structure for table `other_problem`
--

CREATE TABLE `other_problem` (
  `id` int(11) NOT NULL,
  `problem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other_problem`
--

INSERT INTO `other_problem` (`id`, `problem`) VALUES
(1, 'No'),
(2, 'Yes we will disuse when we meet ');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'hospital');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `first_name`, `last_name`, `email`, `password`, `image`) VALUES
(4, 'hammad', 'khan', 'hammad@gmail.com', '$2y$10$5ZIcsGLvB3xSrPCTLeE9ROnAPSs6cSBJ94d6G1BArsPCnyUY6Mpae', 'signup_pics/goko.jpg'),
(5, 'shaheer', 'ismail', 'shaheerking168@gmail.com', '$2y$10$b4KORsk8o8jeVoajS6A68ePhB.haSk5049ItO8yG0q6Fnf6Di..2O', 'signup_pics/me.jpg'),
(6, 'UMAR', 'ASHRAF', 'umar476584@gmail.com', '$2y$10$KAfQXJhRRbOI4udo3Z.hq.mhxY7bvR2fQ0M8SieQXgMnDVQaKqEAK', 'signup_pics/goko.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `vac_id` int(11) NOT NULL,
  `vaccine` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`vac_id`, `vaccine`) VALUES
(1, 'pfizer'),
(2, 'weth'),
(3, 'Monotocxi'),
(4, 'hezal'),
(5, 'covid vac');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vaccine_id` (`vaccine_id`),
  ADD KEY `disability_id` (`disability_id`),
  ADD KEY `problem_id` (`problem_id`);

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disability`
--
ALTER TABLE `disability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`h_id`),
  ADD KEY `vac_id` (`vac_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `availability` (`availability`);

--
-- Indexes for table `other_problem`
--
ALTER TABLE `other_problem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`vac_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `disability`
--
ALTER TABLE `disability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `other_problem`
--
ALTER TABLE `other_problem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `vac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD CONSTRAINT `admin_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`disability_id`) REFERENCES `disability` (`id`),
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`problem_id`) REFERENCES `other_problem` (`id`);

--
-- Constraints for table `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `hospital_ibfk_1` FOREIGN KEY (`vac_id`) REFERENCES `vaccine` (`vac_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`availability`) REFERENCES `availability` (`a_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
