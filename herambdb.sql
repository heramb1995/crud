-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 07:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `herambdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `auth_id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`auth_id`, `username`, `password`) VALUES
(1, 'heramb', 'hmb95');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `content` text NOT NULL,
  `category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `created_on`, `content`, `category`) VALUES
(11, '2020-12-19 17:28:34', 'Devonta Smith received substantial criticism for his decision to stay for his senior year and not join Jerry Jeudy and Henry Ruggs III in the NFL Draft, but his gamble on himself has already paid off ten fold and will only benefit him further when he is drafted in the top-15 of this year\'s draft.', 'sports'),
(12, '2020-12-19 17:28:34', 'Even before Kyle Trask and Mac Jones face off in the SEC Championship game tomorrow night, I can confidently write today that the Heisman trophy race has been decided.\r\n\r\nYes that is correct. The fight for the \'MVP\' of college football has now come to a premature conclusion and there is no further need to discuss whether it will be Alabama\'s Mac Jones or Florida\'s Kyle Trask joining the most exclusive fraternity in the United States.', 'sports'),
(13, '2020-12-19 17:28:59', 'Well, Nick Saban and his staff have moved past those issues and have built one of the best team\'s in Saban\'s 13-year tenure here in 2020.\r\n\r\nSorry Gator fans, but Trask\'s statistical achievements this season alone cannot cancel out the fact that Florida lost to both Texas A&M and LSU at home. On the flip side, Alabama beat A&M by 24 and won by nearly 40 in Baton Rouge.\r\n\r\nThat is complete and utter domination.', 'sports'),
(14, '2020-12-19 17:30:23', 'When it comes to learning, the folks behind these blogs are likely a good number of years and a good number of languages ahead of you. And they’ve made a whole lot of mistakes as well and so are now in a position to dish out some really important firsthand insights and tips. Don’t waste this opportunity: Gain from their personal experiences. You don’t have to reinvent the wheel yourself because there are people who took the language journey ahead of you.', 'language'),
(15, '2020-12-19 17:30:23', 'You shouldn’t necessarily take everything experienced learners tell you hook-line-and-sinker. In fact, most of the folks behind these blogs would probably be the first ones to tell you that there’s no one best way, no foolproof method to fluency. They’re just telling you what worked for them and what didn’t.', 'language'),
(16, '2020-12-19 17:30:54', 'We all take different roads to the same destination. And learning a new language is as much about learning about yourself as it is about learning new ways of talking. You have to decide which insights, tips and tricks from these posts resonate with you. You can’t read blogs and consider them dogma. You have to make your own decisions. You have to actively participate in your learning.', 'language'),
(17, '2020-12-19 17:32:38', 'As I sit by the door, taking in the cool breeze of the after rains, I cannot help but remember it all. I remember the adrenaline rush of planning for a trip and enjoying the harvest of my plan during the trip. I remember the failures, the errors which occurred within these painstakingly made plans. I remember each detail so carefully of my travelling during last couple of years that I cannot help but reminiscence all my past travel journeys intertwined with the unique moments experienced in each tripping. ', 'travel'),
(18, '2020-12-19 17:32:38', 'I was scheduled to return back to Wuxi station by 5 PM in order to reach Suzhou by 5.30 PM, collect my luggage from my hotel and leave for Shanghai airport. My flight was scheduled for 9.30 PM. Little did I know that the bus timings are not so frequent from Turtle Head Isle to Wuxi station. It was 5 PM when I actually got the bus and 6 PM by the time I reached Wuxi station. Ideally, if you miss your train you can still book another one within the same price. As luck would have it, there were no seats available on the next 3 trains within one hour. Panic and terror had started to seep in', 'travel'),
(19, '2020-12-19 17:33:36', 'Never underestimate the power of music blogs in a marketplace where an almost unlimited number of voices are screaming for attention. We look at the Top 25 of the 200 most influential music blogs of 2019, whether you\'re trying to find new music to listen to or get your music \'discovered\'.', 'music');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`auth_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `auth_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
