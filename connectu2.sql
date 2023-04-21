-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: net1255
-- Generation Time: Apr 19, 2023 at 02:47 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fr910229`
--
CREATE DATABASE IF NOT EXISTS `fr910229` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fr910229`;

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
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

INSERT INTO `clubs` (`id`, `club_name`, `club_president`, `club_email`, `club_phone`, `club_username`, `club_password`, `has_spotlight`, `club_profile_img`, `club_profile_bio`, `club_tags`) VALUES
(1, 'Campus Activities Board', 'Isabella Monte', 'cab@ucf.edu', '407-555-5555', 'cabby', 'cab4ever', b'1', 'Images/clubs/cab.jpeg', 'Our mission at UCF\'s Campus Activities Board (CAB) is to foster a sense of community on campus by hosting unique events that effectively cater to our diverse student body and to the Orlando community.', 'social, entertainment'),
(2, 'UCF Athletics', 'Aaron Carter', 'mbb@ucf.edu', '407-888-8888', 'mbb_champs', 'mbb1963', b'0', 'Images/clubs/knights-basketball.png', 'UCF features world-class athletic programs and facilities that are home to one of the biggest and most energetic fan bases in the country, Knight Nation. \n\nFor schedules, tickets, stats, and more, visit UCFKnights.com. \n#ChargeOn', 'sports'),
(3, 'Emo/Alt Club', 'Jorge Lopez', 'president@emoalt.org', '407-330-4170', 'emodreamer', 'soin2u', b'1', 'Images/clubs/emo-alt.jpg', 'Emo/Alt club is a club focused on the appreciation of alternative music and culture with a focus on emo subculture. Everyone is welcome to join regardless of their knowledge or prior experiences with these genres! We provide a nonjudgemental space where students can exchange opinions and ideas while having sense of belonging. Students will be provided with opportunities for personal development through leadership opportunities, social events that foster friendships, volunteering events that develop altruism, and study groups that positively contribute to UCF’s student retention. EMO will seek to develop and nourish the alternative community within UCF and the surrounding area.\r\n\r\n<br><br>- Come out and meet other people with similar interests as you or learn about a new style of music!\r\n\r\n<br><br>- Our general meetings are on Thursdays at 6pm with other events being posted regularly.', 'social, music'),
(4, 'Late Knights', 'Nick Carter', 'lk@ucf.edu', '407-823-0000', 'apollo', 'theboyismine', b'0', 'Images/clubs/late-knights.jpg', 'The goal of Late Knights is to provide UCF students with a place to enjoy themselves during the night that is fun, safe, and on-campus. Late Knights host Weekly Small Scale Events and Monthly Large Scale Events. Our events range from pool parties and movie knights to giveaways and competitions. We feature free food, prizes, and entertainment.', 'social, entertainment, main'),
(5, 'Knights of the RoundTable', 'Layton Cameron', 'kort@ucf.edu', '407-823-0000', 'korted', '12345', b'0', 'Images/clubs/KRT.jpg', 'Knights of the RoundTable is an advisory council that serves as an educational and administrative resource to all student organizations and as a network between the organizations and the UCF community.', 'workshop, main'),
(6, 'Black Student Union', 'Layla Thomas', 'bsu@ucf.edu', '407-823-0000', 'BSUalways', '099877', b'1', 'Images/clubs/BSU.jpg', 'We are the Black Student Union at the University of Central Florida. Our purpose is to serve as the official voice for the black community at the University. ', 'social, cultural'),
(7, 'Anime Spot', 'Gary Lewis', 'anime@ucf.edu', '407-823-0000', 'animated', '675888', b'0', 'Images/clubs/anime-spot.jpg', 'We are one of the largest and most active Registered Student Organizations at UCF! We hold a variety of events from themed viewing and activity nights, to pool days, to even miniature conventions. Whether you are looking to find new anime, try new creative events such as art or cosplay, or just meet new people, we offer something for everyone. Our goal is not just to be another anime club, but to be a central hub for all anime and manga fans at the University of Central Florida. We look forward to seeing you at our next event!', 'social'),
(8, 'Girls Who Code at UCF', 'Ashley Jordan', 'gwc@ucf.edu', '407-823-0000', 'girly', 'noboysallowed', b'1', 'Images/clubs/girl-who-code.jpg', 'Girls Who Code at UCF is dedicated to closing the gender gap in technology and computer science. Our goal is to inspire more girls to learn coding and pursue a career in the computer science field.', 'social, stem, workshop, technology'),
(10, 'Caribbean Students Association', 'Samantha Ruiz', 'csa@ucf.edu', '407-823-0000', 'islandVibes', 'thebestvibe', b'0', 'Images/clubs/csa.jpg', 'The Caribbean Students Association at the University of Central Florida (CSA at UCF) has a short and colorful history. In April 1985, the idea for a Caribbean Club was concieved and acted upon by a few dedicated students, who spent many days trying to solicit enough signatures to officially activate the organization. The Caribbean Club, as it was called, served as a \\\"home away from home\\\" for the many Caribbean students at UCF. The club was formed with the purpose of fostering a cultural bridge between the Caribbean and the United States.', 'social, cultural'),
(11, 'Latin Rhythm', 'Brendan Hale', 'lrpc@ucf.edu', '407-823-0000', 'latinflavor', '324234', b'1', 'Images/clubs/latinrhythm.jpg', 'At Latin Rhythm we look to help students learn more about culture through dance. We teach from the basics to advanced dancing in Casino style Salsa and Bachata! It is the best salsa dancing organization at UCF that offers fun classes and great ways to meet new people!', 'social, entertainment, arts, music, cultural'),
(12, 'Every Nation Campus', 'Eric Adams', 'enc@enc.org', '407-823-0000', 'trustandfaith', 'john316', b'0', 'Images/profile/default-profile-pic-inverted.jpg', 'Every Nation Campus (ENC) is a church-based campus ministry that exists in over 80 nations around the world. We are multicultural, multiethnic, and we exist to honor God, love life, and make disciples. We have weekly services with a message and worship, life groups all throughout the week, and fun hangouts all year long!', 'social, spiritual, cultural'),
(13, 'Rosen Life', 'Gina Archer', 'rosen@ucf.edu', '407-823-0000', 'pineapple', 'roro407', b'0', 'Images/profile/default-profile-pic-inverted.jpg', 'Rosen Life strives to further the sense of UCF spirit and community at the Rosen College campus. This includes, but is not limited to, surveying student opinions, advocating for Rosen College student needs, representing Rosen College students within the Student Government Association, and hosting events and providing programming at special events!', 'social, rosen, entertainment'),
(14, 'Downtown Student Life', 'Andre McKnight', 'dsl@ucf.edu', '407-823-0000', 'downtownlivin', '4647464', b'0', 'Images/profile/default-profile-pic-inverted.jpg', 'Downtown Student Life is the programming board for the UCF\\/Valencia Downtown Campus in the heart of Orlando!', 'social, entertainment, downtown');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
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

INSERT INTO `events` (`id`, `event_name`, `event_start_date`, `event_start_time`, `event_end_date`, `event_end_time`, `event_location`, `event_desc`, `event_img`, `event_tags`, `event_organization`, `is_promoted`) VALUES
(1, 'UCFest Movie Knight', 'Mon, Mar. 20', '8 PM', 'Mon, Mar. 20', '11 PM', 'Addition Financial Arena', '💥 Come kick-off our INCREDIBLE UCFest week with our showing of Marvel Studios’ Thor: Love & Thunder! Doors will open at 7PM and the movie will begin at 8PM. This event is only open to UCF Students, who get in free with a valid UCFID. We look forward to seeing you all there to kick off our MARVEL-ous UCFest week! 💥', 'Images/events/ucfest.png', 'entertainment, social', 'Campus Activities Board', b'1'),
(2, 'Mens Basketball Game: UCF vs SMU', 'Sun, Jan 8', '2 PM', '', '', 'Addition Financial Arena', 'Come out and support our Knights as we take on the SMU Mustangs! <a href=\"https://ucfknights.com/sports/2021/2/1/Ticket%20Home%20Page.aspx\">Get Tickets!</a>', 'Images/events/ucfvssmu.png', 'sports', 'UCF Athletics', b'0'),
(3, 'Emo/Alt GBM', 'Thu, Feb 16', '6 PM', 'Thu, Feb 16', '7 PM', 'BA1 215', 'We welcome everyone regardless of their knowledge of emo/alt genres and cultures.', 'Images/clubs/emo-alt.jpg', 'music, social, gbm', 'Emo/Alt Club', b'0'),
(10, 'Get Involved Session', 'Tue, Apr 4', '4 PM', 'Tue, Apr 4', '5 PM', 'Key West Ballroom', 'Do you want to join the Campus Activities Board? Attend our Get Involved Session to learn about CABs 7 unique committees you can become a member of and assist with our event planning process! ', 'Images/events/default-event-img.png', 'career development, ', 'Campus Activities Board', b'1'),
(13, 'Mens Basketball Game: UCF vs Memphis', 'Wed, Jan 11', '7 PM', '', '', 'Addition Financial Arena', 'Come out and support our Knights as we take on the Memphis Tigers! <a href=\"https://ucfknights.com/sports/2021/2/1/Ticket%20Home%20Page.aspx\">Get Tickets</a>', 'Images/events/ucfvsmemphis.png', 'sports, main', 'UCF Athletics', b'0'),
(14, 'Mens Basketball Game: UCF vs Houston', 'Wed, Jan 25', '7 PM', '', '', 'Addition Financial Arena', 'Come out and support our Knights as we take on the Houston Cougars! <a href=\"https://ucfknights.com/sports/2021/2/1/Ticket%20Home%20Page.aspx\">Get Tickets</a>', 'Images/events/ucfvsuh.png', 'sports, main', 'UCF Athletics', b'0'),
(15, 'Mens Basketball Game: UCF vs Temple', 'Sat, Jan 28', '12 PM', '', '', 'Addition Financial Arena', 'Come out and support our Knights as we take on the Temple Owls! <a href=\"https://ucfknights.com/sports/2021/2/1/Ticket%20Home%20Page.aspx\">Get Tickets</a>', 'Images/events/ucfvstemple.png', 'sports, main', 'UCF Athletics', b'0'),
(16, 'Mens Basketball Game: UCF vs Tulsa', 'Sat, Feb 2', '12 PM', '', '', 'Addition Financial Arena', 'Come out and support our Knights as we take on the Tulsa Hurricane! <a href=\"https://ucfknights.com/sports/2021/2/1/Ticket%20Home%20Page.aspx\">Get Tickets</a>', 'Images/events/ucfvstusla.png', 'sports, main', 'UCF Athletics', b'0'),
(18, 'UCFest Concert Knight', 'Thu, Mar 23', '8 PM', '', '', 'Addition Financial Arena', 'Come rock out with this year’s UCFest Concert Knight headliner Chris Brown (@chrisbrownofficial) and supporting acts Joshua Bassett (@joshuatbassett) and FLO (@flolikethis)!', 'Images/events/ucfest.png', 'concert, music, entertainment', 'Campus Activities Board', b'0'),
(19, 'CAB Presents: The Lorax', 'Thu, Apr 20', '7 PM', '', '', 'Memory Mall', 'It is not about what it is, it is about what it can become. Celebrate Earth Day with us on Memory Mall on April 20th by decorating planters while watching the Lorax! The event starts at 7 PM and the first 50 people to attend the event will receive a unique succulent!', 'Images/events/cablorax.png\r\n', 'social, film and media, arts, entertainment', 'Campus Activities Board', b'0'),
(20, 'Late Knights: Glow Knights, Charge On', 'Fri, Feb 10', '7 PM', 'Fri, Feb 10', '11 PM', 'Memory Mall', 'Taking over Memory Mall, Glow Knights will host an 18 hole glow in the dark putt putt golf course, an LED dance floor, and glow in the dark arcade games!\r\n<br><br>\r\nAnd as always,<br>\r\nGlow Knights, Charge on!', 'Images/events/glowknight.jpg', 'social, entertainment, music, main', 'Late Knights', b'1'),
(21, 'UCF Jeopardy', 'Mon, Apr 17', '6 PM', 'Mon, Apr 17', '8 PM', 'Student Union Starbucks', 'Come out and enjoy a game of UCF Jeopardy, where you\'ll be quizzed and tested on your UCF Knowledge. Are you a proud UCF Knight? Come and show it at our event!!!', 'Images/events/default-event-img.png', 'academic, social, main', 'Late Knights', b'0'),
(22, 'Involvement Week: Club Showcase', 'Mon, Jan 23', '10 AM', 'Mon, Jan 23', '1 PM', 'Pegasus Ballroom', 'Knights of the RoundTable presents Involvement Week! Involvement Week is a week where registered student organizations (RSOs) come together to showcase their amazing organizations. If you are looking to join a sports club, cultural organization, Greek life, gain professional development, or join a club for fun, this event is for YOU! This event is free for all students to see what the Knight Nation has to offer. This week-long event will highlight different types of RSOs each day. We are expecting hundreds of students to come out to get involved. This year, Involvement Week will be held in the Student Union and will feature FREE food, a live DJ, prizes, and more! ', 'Images/events/default-event-img.png', 'food, music, social, main', 'Knights of the RoundTable', b'0'),
(23, 'BSU Spring Convocation', 'Wed, Jan 18', '7 PM', 'Wed, Jan 18', '10 PM', 'Pegasus Ballroom', 'Come out to the BSU Convocation! One of the biggest events of the year! We will have performances, popcorn, prizes, and music. Join us to learn more about multicultural RSOs and learn more about BSU!', 'Images/events/default-event-img.png', 'social, music, food, entertainment, cultural', 'Black Student Union', b'1'),
(24, 'Black History Month: Happier Together', 'Fri, Feb 3', '5 PM', 'Fri, Feb 3', '7 PM', 'Live Oak Ballroom', 'Join the Multicultural Student Center for our Black History Month Opening Celebration! Come out and celebrate with us as we showcase cultural performances, speakers, student performances, a photo booth, and more.', 'Images/events/default-event-img.png', 'social, cultural, music, entertainment, food, main', 'Black Student Union', b'0'),
(25, 'Downtown Student Life Presents: Chill Out ', 'Thu, Apr 27', '12 PM', 'Thu, Apr 27', '3 PM', 'UCF Downtown CMB Plaza', 'Kickoff Finals season with some popsicles and de-stress activities. We will be learning about healthy practices and resources available to students as we prepare for finals. #DowntownStudentLife', 'Images/events/default-event-img.png', 'downtown, food, music, entertainment', 'Downtown Student Life', b'0'),
(26, 'Downtown Live', 'Tue, Feb 28', '11 AM', 'Tue, Feb 28', '2 PM', 'UCF Downtown CMB Plaza', 'Come join us for Downtown Live: our long-awaited Spirit Day event! There will be food, music, and many more festival-themed activities.', 'Images/events/default-event-img.png', 'downtown, food, music, entertainment', 'Downtown Student Life', b'0'),
(27, 'Rosen Life Presents: Taste of Hospitality', 'Fri, Apr 14', '11:30 AM', 'Fri, Apr 14', '1:30 PM', 'Rosen College of Hospitality Management Courtyard', 'Join us at this years Taste of Hospitality as we are serving dishes inspired by theme parks and hotels!', 'Images/events/default-event-img.png', 'rosen, food', 'Rosen Life', b'0'),
(28, 'ENC Campus Night', 'Wed, Feb 5', '7 PM', 'Wed, Feb 5', '9 PM', 'Student Union Cape Florida Ballroom', 'Join us for games, live music, and an encouraging speaker! Follow us at ENC_UCF on Instagram for more info!', 'Images/events/default-event-img.png', 'social, spiritual', 'Every Nation Campus', b'0'),
(29, 'ENC Lake Claire Hangout', 'Wed, Apr 5', '5:30 PM', 'Wed, Apr 5', '7:30 PM', 'Lake Claire Recreational Area', 'Looking for some community and a fun night out? Come join us out at Lake Claire every Friday at 5:30 PM until the semester ends!', 'Images/events/default-event-img.png', 'social, spiritual', 'Every Nation Campus', b'0'),
(30, 'Latin Rhythm Salsa Class', 'Tue, Apr 11', '9 PM', 'Tue, Apr 11', '11 PM', 'Student Union Key West Ballroom', 'Join us for our salsa class! Everyone is welcome to come for dancing, socializing, and overall fun! No need to bring a partner! Just come ready to learn and have fun!', 'Images/events/default-event-img.png', 'social, music, arts', 'Latin Rhythm', b'0'),
(31, 'Latin Rhythm Bachata Class', 'Tue, Apr 18', '9 PM', 'Tue, Apr 18', '11 PM', 'Student Union Key West Ballroom', 'Join us for our bachata class! Everyone is welcome to come for dancing, socializing, and overall fun! No need to bring a partner! Just come ready to learn and have fun!', 'Images/events/default-event-img.png', 'social, music, arts', 'Latin Rhythm', b'1'),
(32, 'CSA Fashion Show', 'Thu, Mar 3', '7 PM', 'Thu, Mar 3', '10 PM', 'Thu, Mar 3', 'Watch as your favorite members strut their stuff on the runway!', 'Images/events/default-event-img.png', 'cultural, entertainment', 'Caribbean Students Association', b'0'),
(33, 'Emo/Alt Karaoke', 'Mon, Apr 17', '7:30 PM', '', '', 'Garage B', 'Join us for our karaoke event! Sing solo, duetted, or in a group if you\'d like. Listeners are welcome as well. What song(s) are you doing?', 'Images/events/emokaraoke.png', 'music', 'Emo/Alt Club', b'1'),
(34, 'First General Body Meeting', 'Tue, Jan 17', '4:30 PM', 'Tue, Jan 17', '5:30 PM', 'NSC 115', 'We are a brand new student organization on campus. Join us to connect with other women interested in CS. No coding experience is required! Anyone who supports our mission is welcome to join.', 'Images/events/gwcgbm.png', 'social, gbm, stem, technology', 'Girls Who Code at UCF', b'1'),
(35, 'Geek Knight', 'Sun, Jan 11', '6 PM', 'Sun, Jan 11', '10 PM', 'Pegasus Ballroom', 'Come on out for a night of games, food, and fun as you meet some of the best RSOs on campus. Gaming Knights, Anime Spot, D20 Knights, Art Club, and more will be attending, so make this Spring the semester where you get involved! ', 'Images/events/geekknightevent.jpg', 'food, music, social', 'Anime Spot', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
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

INSERT INTO `students` (`id`, `student_fname`, `student_lname`, `student_gradyear`, `student_email`, `student_username`, `student_password`, `student_desc`, `student_profile_img`, `student_favorite_clubs`, `student_favorite_events`) VALUES
(1, 'Isabella', 'Monte', 'Fall 2024', 'isabella.monte@knights.ucf.edu', 'bellonte', 'og1234', 'Class of 24\' | President of Campus Activities Board', 'Images/profile/alex-starnes-WYE2UhXsU1Y-unsplash.jpg', 'Campus Activities Board, UCF Athletics', 'Mens Basketball Game: UCF vs SMU, UCFest Movie Knight , Emo/Alt GBM'),
(13, 'uniqua', 'backyardigan', 'spring 2038', 'uniqua@email.com', 'unique', '1234', '', '', '', ''),
(15, 'Fridjinah', 'Francois', 'Spring 2023', 'jinah@knights.ucf.edu', 'jinah', 'dabest', '', 'Images/profile/default-profile-pic.jpg', '', ' , Get Involved Session , UCFest Movie Knight , Emo/Alt GBM , Mens Basketball Game: UCF vs SMU'),
(16, 'Fridjinah', 'Francois', 'Spring 2023', 'jinah@knights.ucf.edu', 'jinah', 'dabest', '', 'Images/profile/default-profile-pic.jpg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `clubs` ADD FULLTEXT KEY `club_tags` (`club_tags`);
ALTER TABLE `clubs` ADD FULLTEXT KEY `club_name` (`club_name`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `events` ADD FULLTEXT KEY `event_tags` (`event_tags`);
ALTER TABLE `events` ADD FULLTEXT KEY `event_name` (`event_name`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `students` ADD FULLTEXT KEY `student_favorite_clubs` (`student_favorite_clubs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
