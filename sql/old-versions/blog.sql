-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 08:22 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `addUser` (IN `first` INT, IN `second` INT, IN `user` INT, IN `pass` INT, IN `mail` INT, IN `ro` INT, IN `country1` INT)  NO SQL
begin
insert into user(first_name, surname, username, password, email, role, country_id ) values (( first), (second), (user), ( pass), (mail), (ro), (select id from country where country1=country));
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_comment` (IN `email` VARCHAR(50), IN `postid` INT, IN `content` VARCHAR(250))  NO SQL
BEGIN
insert into comment (user_id, post_id, content)
values((select id from user where email=user.Email),(postid),(content));
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_post` (IN `userID` INT, IN `post_title` VARCHAR(50) CHARSET latin1, IN `body` VARCHAR(200) CHARSET latin1, IN `category1` VARCHAR(50) CHARSET latin1, IN `pic_name` VARCHAR(50) CHARSET latin1)  NO SQL
BEGIN
insert into image (image_name)
values(pic_name);

begin
insert into post (user_id, title, body, category_id, image_id)
values((userID),(post_title),(body), (select id from category where category1=category.categories),(SELECT id from image where pic_name=image_name));


end;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_post` (IN `id` VARCHAR(50) CHARSET latin1)  NO SQL
BEGIN
DELETE FROM post
WHERE id=id;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetUserbyName` (IN `userFirst_name` VARCHAR(50) CHARSET latin1)  BEGIN
SELECT * 
FROM user
WHERE userFirst_name = first_name;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `read_all_posts` ()  NO SQL
begin
SELECT title from post;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `read_post` (IN `postID` INT)  NO SQL
BEGIN
select title, body, image_name 
from post 
inner join image on post.image_id=image.id
where postID=post.id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `totalLikes` (IN `postID` INT)  NO SQL
begin 
update liketotal
set totalcount = (SELECT count(*) from post_like where postID=post_id)
where postID=Post_id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdatePassword` (IN `userEmail` VARCHAR(50) CHARSET latin1, IN `oldPassword` VARCHAR(10) CHARSET latin1, IN `newPassword` VARCHAR(10) CHARSET latin1)  BEGIN
UPDATE user SET PASSWORD = newPassword
WHERE userEmail = email and oldPassword = password;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_comment` (IN `postID` INT)  NO SQL
BEGIN
SELECT content FROM COMMENT WHERE post_id=postID;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categories` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categories`) VALUES
(1, 'Destination'),
(2, 'Eco-travel'),
(3, 'Family-travel'),
(4, 'INSPIRATION'),
(5, 'Practical-tips');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `content` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `post_id`, `content`, `date`) VALUES
(1, 8, 88, 'hello', '2019-04-23 17:13:28'),
(2, 8, 88, 'why not! kids are amazing', '2019-04-23 19:00:43'),
(3, 8, 88, 'i agree', '2019-04-23 19:03:06');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country`) VALUES
(1, 'USA'),
(2, 'UK');

-- --------------------------------------------------------

--
-- Table structure for table `liketotal`
--

CREATE TABLE `liketotal` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `totalCount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liketotal`
--

INSERT INTO `liketotal` (`id`, `post_id`, `totalCount`) VALUES
(1, 88, 4),
(2, 89, 3),
(3, 92, 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `body` text COLLATE latin1_general_ci NOT NULL,
  `published` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `title`, `body`, `published`, `created_at`, `updated_at`, `category_id`, `image`) VALUES
(88, 8, 'Don&#39;t travel with kids!', '<p><img src=\"views/js/plugin/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" />&nbsp;Travelling with kids is a nightmare so don\'t do it</p>', NULL, '2019-04-23 15:57:09', NULL, NULL, NULL),
(89, 8, 'Harry Potter', '<p>This post is about Harry Potter...&nbsp;</p>', NULL, '2019-04-23 16:01:16', NULL, NULL, NULL),
(90, NULL, 'issi', '<p>mmmm</p>', NULL, '2019-04-23 21:28:41', NULL, NULL, NULL),
(91, NULL, 'issi', '<p>mmmm</p>', NULL, '2019-04-23 22:07:09', NULL, NULL, NULL),
(92, 8, 'Beach', '<p>Beach Beach Beach&nbsp;Beach Beach Beach</p>\r\n<p>Beach Beach Beach&nbsp;Beach Beach Beach</p>\r\n<p>Beach Beach Beach&nbsp;Beach Beach Beach</p>\r\n<p>Beach Beach Beach&nbsp;Beach Beach Beach</p>\r\n<p>Beach Beach Beach&nbsp;Beach Beach Beach</p>\r\n<p>Beach Beach Beach&nbsp;Beach Beach Beach</p>', NULL, '2019-04-23 22:57:57', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

CREATE TABLE `post_like` (
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `like_count` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `post_like`
--

INSERT INTO `post_like` (`post_id`, `user_id`, `like_count`, `id`) VALUES
(88, 8, 1, 1),
(88, 8, 1, 2),
(88, 8, 1, 3),
(88, 8, 1, 4),
(89, 8, 1, 5),
(89, 8, 1, 6),
(89, 8, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `surname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `role` enum('Admin','User','','') CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `image` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `surname`, `username`, `email`, `role`, `password`, `created_at`, `updated_at`, `country_id`, `image`) VALUES
(8, 'admin', 'admin', 'admin', 'admin@mail.com', 'Admin', 'admin', '2019-04-20 23:04:20', NULL, 1, NULL),
(48, 'Ghena', 'shaban', 'ghena1', 'mail.com', 'User', '123', '2019-04-23 19:06:35', NULL, 2, NULL),
(49, 'Issi', 'Draper', 'issi', 'issi@email.com', 'User', 'issi', '2019-04-23 19:37:37', NULL, NULL, NULL),
(50, 'Tess', 'Draper', 'tess', 'issi@email.com', 'User', 'issi', '2019-04-23 19:39:32', NULL, NULL, NULL),
(54, 'Judith', 'Chalmers', 'judy', 'judy@hols.com', 'User', 'judy', '2019-04-23 23:21:47', NULL, NULL, NULL),
(55, 'Judith', 'Chalmers', 'judy', 'judy@hols.com', 'User', 'judy', '2019-04-23 23:22:20', NULL, NULL, NULL),
(56, 'bob', 'bob', 'bob', 'bob', 'User', '111', '2019-04-23 23:29:55', NULL, NULL, NULL),
(57, 'bob', 'bob', 'bob', 'bob', 'User', '111', '2019-04-23 23:48:46', NULL, NULL, NULL),
(58, 'Isabel', 'Draper', 'issi', 'isabel.draper.edwards@gmail.com', 'User', '1234', '2019-04-24 00:30:55', NULL, 2, NULL),
(59, 'Isabel', 'Draper', 'issi', 'isabel.draper.edwards@gmail.com', 'User', '1234', '2019-04-24 00:32:01', NULL, 2, NULL),
(60, 'issi', 'issi', 'issi', 'issi', 'User', '1234', '2019-04-24 00:32:30', NULL, 2, NULL),
(61, 'issi', 'issi', 'issi', 'issi', 'User', '1234', '2019-04-24 00:54:03', NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `post_id` int(11) NOT NULL,
  `view_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `liketotal`
--
ALTER TABLE `liketotal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `image_id` (`image`);

--
-- Indexes for table `post_like`
--
ALTER TABLE `post_like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD KEY `post_id` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `liketotal`
--
ALTER TABLE `liketotal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `post_like`
--
ALTER TABLE `post_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);

--
-- Constraints for table `liketotal`
--
ALTER TABLE `liketotal`
  ADD CONSTRAINT `liketotal_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `post_like`
--
ALTER TABLE `post_like`
  ADD CONSTRAINT `post_like_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `post_like_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);

--
-- Constraints for table `views`
--
ALTER TABLE `views`
  ADD CONSTRAINT `views_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
