-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2021 at 02:42 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `sent_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `firstname`, `lastname`, `email`, `message`, `sent_at`) VALUES
(1, 'anun', 'azganun', 'anunazganun@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis molestie urna sollicitudin lectus efficitur, nec viverra sapien euismod. In imperdiet diam nec volutpat mollis. Sed id lectus felis. Donec rhoncus scelerisque ligula eu pulvinar. In dignissim pellentesque sapien vitae egestas. Phasellus nisl dui, sollicitudin nec mattis in, eleifend sit amet enim. Proin quis augue vitae felis molestie viverra. Fusce vel leo sed nunc elementum maximus. Praesent semper laoreet felis, ac varius sapien pellentesque sit amet. Nulla in lectus aliquet, interdum urna id, elementum elit. Mauris cursus quis mi non volutpat. Sed vitae augue enim. Nam est dui, ultricies in efficitur in, tempor ac lectus. Cras neque leo, tincidunt et nibh eget, bibendum euismod felis. Fusce lacinia quis ipsum sed varius. Aenean eu dignissim velit.\r\n\r\nUt sodales sagittis lobortis. Fusce nec elit sed sapien efficitur varius. Cras et ultrices libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc mollis ligula metus, in sollicitudin justo elementum vel. Donec sagittis tortor a gravida dignissim. Etiam quis dui non orci pharetra ultricies tristique id augue. Donec sit amet commodo turpis. Aenean ex lorem, ornare a fringilla ut, commodo ac ante. Duis ut sem enim.', '2021-02-16 00:00:00'),
(2, 'Inna', 'Isoyan', 'isoyan.inn@gmail.com', 'Feedback', '2021-02-18 16:59:58'),
(3, 'Inna', 'Isoyan', 'isoyan.inn@gmail.com', 'Feedback', '2021-02-18 17:00:17'),
(4, 'Unknown', 'unknown', 'unknown@mail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-02-18 17:11:20'),
(5, 'Fname', 'Lname', 'FLname@gmail.com', 'ed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui do lorem ipsum, quia dolor sit amet consectetur adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum[d] exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? [D]Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? [33] At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta ', '2021-02-18 17:15:25'),
(6, 'Inna', 'Isoyan', 'isoyan.inn@gmail.com', 'DELETE FROM `messages` WHERE 0DELETE FROM `messages` WHERE 0DELETE FROM `messages` WHERE 0DELETE FROM `messages` WHERE 0DELETE FROM `messages` WHERE 0', '2021-02-18 17:33:22'),
(7, 'Fname', 'fdjs', 'dslkklfd@jdfk', 'ska,sff', '2021-02-18 17:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;