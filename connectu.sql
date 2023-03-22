-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2023 at 02:39 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `connectu`
--

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE DATEBASE connectu;

CREATE DATEBASE connectu;
CREATE TABLE connectu.clubs (
  `id` int(11) NOT NULL,
  `club_name` varchar(255) NOT NULL,
  `club_president` varchar(255) NOT NULL,
  `club_email` varchar(255) NOT NULL,
  `club_phone` varchar(255) NOT NULL,
  `club_username` varchar(255) NOT NULL,
  `club_password` varchar(255) NOT NULL,
  `has_spotlight` bit(1) NOT NULL,
  `club_profile_img` varchar(255) NOT NULL,
  `club_profile_bio` varchar(1000) NOT NULL,
  `club_tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clubs`
--

INSERT INTO connectu.clubs (`id`, `club_name`, `club_president`, `club_email`, `club_phone`, `club_username`, `club_password`, `has_spotlight`, `club_profile_img`, `club_profile_bio`, `club_tags`) VALUES
(1, 'Campus Activities Board', 'Nick Maguire', 'cab@ucf.edu', '407-555-5555', 'cabby', 'cab4ever', b'1', 'Images/clubs/cab.jpeg', 'Our mission at UCF\'s Campus Activities Board (CAB) is to foster a sense of community on campus by hosting unique events that effectively cater to our diverse student body and to the Orlando community.', 'social, entertainment'),
(2, 'Men\'s Basketball', 'Aaron Carter', 'mbb@ucf.edu', '407-888-8888', 'mbb_champs', 'mbb1963', b'0', 'Images/clubs/knights-basketball.png', 'UCF features world-class athletic programs and facilities that are home to one of the biggest and most energetic fan bases in the country, Knight Nation. \r\n\r\nFor schedules, tickets, stats, and more, visit <a href=\"https://ucfknights.com/\">UCFKnights.com</a>. \r\n\r\n#ChargeOn', 'sports'),
(3, 'Emo/Alt Club', 'Jorge Lopez', 'president@emoalt.org', '407-330-4170', 'emodreamer', 'soin2u', b'1', 'Images/clubs/emo-alt.jpg', 'Emo/Alt club is a club focused on the appreciation of alternative music and culture with a focus on emo subculture. Everyone is welcome to join regardless of their knowledge or prior experiences with these genres! We provide a nonjudgemental space where students can exchange opinions and ideas while having sense of belonging. Students will be provided with opportunities for personal development through leadership opportunities, social events that foster friendships, volunteering events that develop altruism, and study groups that positively contribute to UCF’s student retention. EMO will seek to develop and nourish the alternative community within UCF and the surrounding area.\r\n\r\n<br><br>- Come out and meet other people with similar interests as you or learn about a new style of music!\r\n\r\n<br><br>- Our general meetings are on Thursdays at 6pm with other events being posted regularly.', 'social, music');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE connectu.events (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_start_date` varchar(255) NOT NULL,
  `event_start_time` varchar(255) NOT NULL,
  `event_end_date` varchar(255) NOT NULL,
  `event_end_time` varchar(255) NOT NULL,
  `event_location` varchar(255) NOT NULL,
  `event_desc` text NOT NULL,
  `event_img` varchar(255) NOT NULL,
  `event_tags` text NOT NULL,
  `event_organization` varchar(255) NOT NULL,
  `is_promoted` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO connectu.events (`id`, `event_name`, `event_start_date`, `event_start_time`, `event_end_date`, `event_end_time`, `event_location`, `event_desc`, `event_img`, `event_tags`, `event_organization`, `is_promoted`) VALUES
(1, 'UCFest Movie Knight', 'Mon, Mar. 20', '8 PM', 'Mon, Mar. 20', '11 PM', 'Addition Financial Arena', '💥 Come kick-off our INCREDIBLE UCFest week with our showing of Marvel Studios’ Thor: Love & Thunder! Doors will open at 7PM and the movie will begin at 8PM. This event is only open to UCF Students, who get in free with a valid UCFID. We look forward to seeing you all there to kick off our MARVEL-ous UCFest week! 💥', 'Images/events/ucfest.png', '', 'Campus Activities Board', b'1'),
(2, 'Men\'s Basketball Game: UCF vs SMU', 'Sun, Jan 8', '2 PM', 'Sun, Jan 8', '', 'Addition Financial Arena', 'Come out and support our Knights as we take on the SMU Mustangs! <a href=\"https://ucfknights.com/sports/2021/2/1/Ticket%20Home%20Page.aspx\">Get Tickets!</a>', 'Images/events/ucfvssmu.png', '', 'Men\'s Basketball', b'0'),
(3, 'Emo/Alt GBM', 'Thu, Feb 16', '6 PM', 'Thu, Feb 16', '7 PM', 'BA1 215', 'We welcome everyone regardless of their knowledge of emo/alt genres and cultures.', 'Images/clubs/emo-alt.jpg', 'music, social', 'Emo/Alt Club', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE connectu.students (
  `id` int(11) NOT NULL,
  `student_fname` varchar(255) NOT NULL,
  `student_lname` varchar(255) NOT NULL,
  `student_gradyear` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_username` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `student_desc` varchar(255) NOT NULL,
  `student_profile_img` varchar(255) NOT NULL,
  `student_favorite_clubs` text NOT NULL,
  `student_favorite_events` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO connectu.students (`id`, `student_fname`, `student_lname`, `student_gradyear`, `student_email`, `student_username`, `student_password`, `student_desc`, `student_profile_img`, `student_favorite_clubs`, `student_favorite_events`) VALUES
(1, 'Isabella', 'Monte', 'Fall 2024', 'isabella.monte@knights.ucf.edu', 'bellonte', 'og1234', 'Class of 24\' | President of Campus Activities Board', 'Images/profile/alex-starnes-WYE2UhXsU1Y-unsplash.jpg', 'Campus Activities Board, Men\\\'s Basketball', 'Men\\\'s Basketball Game: UCF vs SMU, UCFest Movie Knight'),
(13, 'uniqua', 'backyardigan', 'spring 2038', 'uniqua@email.com', 'unique', '1234', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clubs`
--
ALTER TABLE connectu.clubs
  ADD PRIMARY KEY (`id`);
ALTER TABLE connectu.clubs ADD FULLTEXT KEY `club_tags` (`club_tags`);
ALTER TABLE connectu.clubs ADD FULLTEXT KEY `club_name` (`club_name`);

--
-- Indexes for table `events`
--
ALTER TABLE connectu.events
  ADD PRIMARY KEY (`id`);
ALTER TABLE connectu.events ADD FULLTEXT KEY `event_tags` (`event_tags`);
ALTER TABLE connectu.events ADD FULLTEXT KEY `event_name` (`event_name`);

--
-- Indexes for table `students`
--
ALTER TABLE connectu.students
  ADD PRIMARY KEY (`id`);
ALTER TABLE connectu.students ADD FULLTEXT KEY `student_favorite_clubs` (`student_favorite_clubs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE connectu.clubs
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE connectu.events
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE connectu.students
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
