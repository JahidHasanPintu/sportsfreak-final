-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 06, 2022 at 03:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportsfreak`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `category`, `picture`, `description`, `created_at`) VALUES
(37, '‘When I left Test captaincy, only MS Dhoni messaged me’: Virat Kohli', 'Cricket', 'https://images.indianexpress.com/2019/12/kohli-dhoni-759.jpg', '“When I left Test captaincy I got message only from MS Dhoni and nobody else,” Virat Kohli has said. “Lot of people have my number but only he had called. There are some connections with are genuine and it has some security. If you want to give me suggestions, give me one-on-one.”\r\n\r\nVirat Kohli has never shied away from showing his appreciation of his former India MS Dhoni whether it is tweeting near midnight about his IPL innings or an even random Instagram post going into a big tournament.\r\n\r\n\r\nAnd now, the 33-year-old who resigned from his role of India’s Test captain earlier this year has told that Dhoni has also been the one to reach out to him even during his most difficult days.', '2022-09-06 11:28:11'),
(38, 'Rafael Nadal knocked out by Frances Tiafoe in last-16 thriller in New York', 'Tennis', 'https://e0.365dm.com/22/09/1600x900/skysports-rafa-rafael-nadal_5888993.jpg?20220905222941', 'Rafael Nadal’s hopes of winning a third Grand Slam title in 2022 were ended as American Frances Tiafoe produced a brilliant performance to win their US Open round of 16 duel in four sets.\r\n\r\nNadal, who was chasing a record-breaking 23rd Grand Slam title, appeared dejected after the defeat, saying he has “life to fix” and he “don’t know” when he’ll be back.\r\n\r\nThe Spaniard was clearly hampered by the abdominal pain that forced him to withdraw ahead of his Wimbledon semi-final in July but showed his trademark fighting spirit to create an exciting spectacle at Arthur Ashe Court.', '2022-09-06 11:33:25'),
(39, 'Nawaz savours all-rounder role Chasing 182 for victory', 'Cricket', 'https://images.thedailystar.net/sites/default/files/styles/big_202/public/images/2022/09/05/nawaz_0.jpg?itok=2W88bKzb&timestamp=1662393334', 'Mohammad Nawaz wants to be a \"proper all-rounder\" after his batting blitz set up a thrilling win for Pakistan against arch-rivals India in the Asia Cup Super Four.\r\n\r\nChasing 182 for victory, Pakistan achieved the target with one ball and five wickets to spare in Dubai after Mohammad Rizwan hit 71 and Nawaz made 42.\r\nNawaz, a left-arm spinner who usually bats at eight but was promoted to number four, joined Rizwan when the score was 63-2 and the two put on a key stand.\r\n\r\nThe 28-year-old Nawaz smashed six fours and two sixes in his 20-ball knock to put the chase on track.', '2022-09-06 11:39:37'),
(40, 'Verstappen claims special Dutch home win champion and runaway series leader', 'Formula 1', 'https://images.thedailystar.net/sites/default/files/styles/big_202/public/images/2022/09/05/verstappen_dutch_grand_prix.jpg?itok=YAWNTOgS&timestamp=1662315821', 'World champion and runaway series leader Max Verstappen stayed cool to ride his luck and claim a dramatic victory for Red Bull, as his rivals floundered with a series of tactical errors, in Sundays chaotic and unpredictable Dutch Grand Prix.', '2022-09-06 11:45:41'),
(41, 'Mbappe, PSG coach face backlash for inappropriate mockery', 'Football', 'https://images.thedailystar.net/sites/default/files/styles/big_202/public/images/2022/09/06/mbappe.jpg?itok=I5k0DYuj&timestamp=1662462789', 'rench football giants Paris Saint-Germain faced an angry backlash Tuesday after coach Christophe Galtier and star player Kylian Mbappe mocked a suggestion that they should take the train rather than private planes for short-haul travel.\r\n\r\nPSG notched up an easy 3-0 away victory against Nantes to stay top of Ligue 1 on their trip to the western French city, which is a modest 380 kilometres (240 miles) from Paris.\r\nThe Qatar-owned side boasted on social media that they had made the return trip with shirt sponsors Qatar Airways but their travel choices have come under increased scrutiny over the carbon footprint.\r\n\r\nParis-Nantes is less than two hours by TGV, said Alain Krakovitch, the head of state-owned railway company SNCFs TGV high-speed passenger trains, on Twitter.', '2022-09-06 11:48:31'),
(42, 'A timely decision that resonates with fans Rahims announcement to retire', 'Cricket', 'https://images.thedailystar.net/sites/default/files/styles/big_202/public/images/2022/08/30/mushfiqur_16.jpg?itok=8QzbmJTQ&timestamp=1661865983', 'Mushfiqur Rahims announcement to retire from the T20 format for Bangladesh yesterday was welcomed by the Tigers fans as a timely one.\r\n\r\nThere were mixed reactions from the Bangladeshi supporters on social media. However, the majority of them were seen praising Mushfiqurs decision.\r\nIn the recent past, the 35-year-old has found himself in the firing line for his dismal performances in the shortest format of the game, and the wicketkeeper-batter received ample criticism during the ongoing Asia Cup 2022, where he failed to make his presence felt with the bat and also remained ineffective behind the stumps.', '2022-09-06 11:51:29'),
(43, 'PSG criticised for opting journey by plane Paris-Nantes is in less than two hours ', 'Football', 'https://images.thedailystar.net/sites/default/files/styles/big_202/public/images/2022/09/05/psg.jpg?itok=V2vc1JAW&timestamp=1662385146', 'The PSG side notched up an easy 0-3 victory to stay top of Ligue 1 and another video emerged on social media of its stars looking happy and relaxed on the trip home.\r\n\r\nBut with the carbon footprint of sports stars now coming under increased scrutiny, the video was seized upon by Alain Krakovitch, the head of SNCFs TGV high-speed passenger trains.\r\n\r\n \r\n\r\nParis-Nantes is in less than two hours by TGV, he said on Twitter.\r\n\r\nI renew our proposal for a TGV offer adapted to your specific needs in line with our common interests -- safety, speed, services and eco-mobility, he added.', '2022-09-06 11:59:00'),
(44, 'Bangladesh U17s off to a flying start to SAFF U17 champion ship', 'Football', 'https://images.thedailystar.net/sites/default/files/styles/big_202/public/images/2022/09/05/bd_saff_u17.jpg?itok=TyfN6C4B&timestamp=1662398169', 'Bangladeshs bid to play the final of the SAFF U17 Championship got off to an impressive start when the boys in red and green handed a massive 5-1 defeat to hosts Sri Lanka at the Racecourse International Stadium in Colombo tonight.\r\n\r\nFollowing Indias 3-0 win over Bhutan Group B encounter in rainy conditions, Bangladesh also kick-started their campaign brilliantly on the rain-soaked pitch.', '2022-09-06 12:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'pintu', 'pintu@test.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'kamal', 'kamalhosain0173@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'fahim', 'fahim@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'sayem', 'sayem@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'rabbi', 'rabbi@out.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Parvez', 'parvez@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
