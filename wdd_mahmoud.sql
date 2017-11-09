-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2016 at 03:19 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdd_mahmoud`
--

-- --------------------------------------------------------

--
-- Table structure for table `memberinfo`
--

CREATE TABLE `memberinfo` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memberinfo`
--

INSERT INTO `memberinfo` (`username`, `password`, `type`) VALUES
('El_Dopa18', 'pass', 1),
('JavaMan', 'test', 1),
('Sami', 'blah', 0),
('SamSam', 'test', 0),
('tarintino101', 'samjackson4eva', 0),
('test', 'test', 0),
('user', 'pass', 1);

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `title_id` int(5) NOT NULL AUTO_INCREMENT=42,
  `image` varchar(255) NOT NULL,
  `embed` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `title_name` varchar(75) NOT NULL,
  `director` varchar(50) NOT NULL,
  `Creator` varchar(50) NOT NULL,
  `writer` varchar(50) NOT NULL,
  `stars` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `genre` varchar(50) NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`title_id`, `image`, `embed`, `description`, `title_name`, `director`, `Creator`, `writer`, `stars`, `release_date`, `genre`, `type`) VALUES
(7, 'Django.jpeg', 'eUdM9vrCbow', 'With the help of a German bounty hunter, a freed slave sets out to rescue his wife from a brutal Mississippi plantation owner.', 'Django Unchained', 'Quentiin Tarantino', '', 'Quentin Tarantino', 'Jaime Foxx, Christoph Waltz, Leonardo DiCaprio', '2012-12-25', 'Western, Action', 1),
(8, 'SingStreet.jpeg', 'C_YqJ_aimkM', 'In 1985, a Dublin teenager forms a rock ''n'' roll band to win the heart of an aspiring model.', 'Sing Street', 'John  Carney', '', 'John Carney', 'Ferdia Walsh-Peelo, Aidan Gillen, Maria Doyle Kenn', '0000-00-00', 'Drama', 1),
(14, 'GOT.jpeg', 'EI0ib1NErqg', 'While a civil war brews between several noble families in Westeros, the children of the former rulers of the land attempt to rise up to power. Meanwhile a forgotten race, bent on destruction, return after thousands of years in the North.', 'Game of Thrones', '', 'David Benioff, D.B Weiss', '', 'Emilia Clarke, Peter Dinklage, Kit Harington', '2011-01-01', 'Fantasy', 2),
(15, 'BCS.jpg', 'HN4oydykJFc', 'The trials and tribulations of criminal lawyer, Jimmy McGill, in the time leading up to establishing his strip-mall law office in Albuquerque, New Mexico.', 'Better Call Saul', '', 'Vince Gilligan, Peter Gould', '', 'Bob Odenkirk, Jonathan Banks, Rhea Seehorn ', '2015-02-15', 'Drama', 2),
(17, 'StarWarsFA.jpg', 'sGbxmsDFVnE', 'Three decades after the defeat of the Galactic Empire, a new threat arises. The First Order attempts to rule the galaxy and only a ragtag group of heroes can stop them, along with the help of the Resistance.', 'Star Wars: Episode VII - The Force Awakens', 'J.J Abrams', '', 'J.J Abrams', 'Daisy Ridley, John Boyega, Oscar Isaac ', '2015-12-18', 'Action, Adventure, Comedy', 1),
(18, 'MadMaxFR.jpg', 'hEJnMQG9ev8', 'A woman rebels against a tyrannical ruler in postapocalyptic Australia in search for her home-land with the help of a group of female prisoners, a psychotic worshipper, and a drifter named Max.', 'Mad Max: Fury Road', 'George Miller', '', 'George Miller', 'Tom Hardy, Charlize Theron, Nicholas Hoult', '2015-05-15', 'Action', 1),
(19, 'TwinPeaks.jpg', 'R8Z2Atm-RbY', 'An idiosyncratic FBI agent investigates the murder of a young woman in the even more idiosyncratic town of Twin Peaks.', 'Twin Peaks', '', 'Mark Frost, David Lynch', '', ' Kyle MacLachlan, Michael Ontkean, MÃ¤dchen Amick', '1990-02-24', 'Mystery', 2),
(20, 'Fargo.jpg', 'UKIIJ3Zn_1E', 'Various chronicles of deception, intrigue and murder in and around frozen Minnesota. Yet all of these tales mysteriously lead back one way or another to Fargo, North Dakota', 'Fargo', '', 'Ethan Cohen', '', ' Billy Bob Thornton, Martin Freeman, Allison Tolma', '2014-03-15', 'Crime', 2),
(21, 'deadpool.jpg', 'ONHBaC-pfsk', 'A former Special Forces operative turned mercenary is subjected to a rogue experiment that leaves him with accelerated healing powers, adopting the alter ego Deadpool.', 'Deadpool', 'Tim Miller', '', 'Rhett Reese, Paul We', 'Ryan Reynolds, Morena Baccarin, T.J. Miller', '2016-02-12', 'Action, Adventure, C', 1),
(22, 'Lost.jpg', 'KTu8iDynwNc', 'The survivors of a plane crash are forced to work together in order to survive on a seemingly deserted tropical island.', 'Lost', '', 'J.J Abrams, Jeffrey Lieber, Damon Lindelof', '', 'Naveen Andrews, Matthew Fox, Jorge Garcia', '2004-09-22', 'Adventure, Drama, Fa', 2),
(29, 'furious7.jpg', 'yISKeT6sDOg', 'Deckard Shaw seeks revenge against Dominic Toretto and his family for his comatose brother.', 'Furious 7', 'James Wan', '', 'Chris Morgan, Gary S', 'Vin Diesel, Paul Walker, Dwayne Johnson ', '2015-04-03', 'Action, Thriller, Crime', 1),
(31, 'Bourne.jpg', 'ZT2ZxjUjSo0', 'Jason Bourne dodges a ruthless CIA official and his agents from a new assassination program while searching for the origins of his life as a trained killer.', 'The Bourne Ultimatum', 'Paul Greengrass', '', 'Tony Gilroy,Scott Z.', 'Matt Damon, Edgar RamÃ­rez, Joan Allen', '2007-08-03', 'Action, Thriller', 1),
(32, 'Inception.jpg', 'YoHD9XEInc0', 'A thief, who steals corporate secrets through use of dream-sharing technology, is given the inverse task of planting an idea into the mind of a CEO.', 'Inception', 'Christopher Nolan', '', 'Christopher Nolan', 'Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Pag', '2010-07-16', 'Action, Mystery, Sci-fi', 1),
(33, 'HatefulEight.jpg', 'gnRbXn4-Yis', 'In the dead of a Wyoming winter, a bounty hunter and his prisoner find shelter in a cabin currently inhabited by a collection of nefarious characters.', 'The Hateful Eight', 'Quentiin Tarantino', '', 'Quentin Tarantino', 'Samuel L. Jackson, Kurt Russell, Jennifer Jason Le', '2015-12-30', 'Crime, Drama, Mystery', 1),
(38, 'CivilWar.jpg', 'dKrVegVI0Us', 'Political interference in the Avengers'' activities causes a rift between former allies Captain America and Iron Man.', '\r\nCaptain America: Civil War', 'Anthony Russo, Joe Russo', '', ' Christopher Markus (screenplay), Stephen McFeely ', 'Chris Evans, Robert Downey Jr., Scarlett Johansson', '2016-04-29', 'Action, Adventure, Sci-Fi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_titles`
--

CREATE TABLE `user_titles` (
  `username` varchar(30) NOT NULL,
  `title_id` int(5) NOT NULL,
  `date_borrowed` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `user_titles`
--

INSERT INTO `user_titles` (`username`, `title_id`, `date_borrowed`) VALUES
('El_Dopa18', 7, '2016-05-04 18:43:34.490371'),
('El_Dopa18', 14, '2016-05-04 21:14:04.160332'),
('El_Dopa18', 15, '2016-05-04 18:44:01.251216'),
('JavaMan', 19, '2016-05-04 21:07:56.579532');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `memberinfo`
--
ALTER TABLE `memberinfo`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`title_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `titles`
--
/*ALTER TABLE `titles`
  MODIFY `title_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;*/
--
-- AUTO_INCREMENT for table `user_titles`
--
ALTER TABLE `user_titles`
  MODIFY `title_id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
