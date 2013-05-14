-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2012 at 10:22 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `whs_intranet`
--

-- --------------------------------------------------------

--
-- Table structure for table `contentsections`
--

CREATE TABLE IF NOT EXISTS `contentsections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `display` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `contentsections`
--


-- --------------------------------------------------------

--
-- Table structure for table `links`
--
if exists `links` drop table `links`
go

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` text NOT NULL,
  `text` text NOT NULL,
  `title` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_by` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `src`, `text`, `title`, `created_at`, `updated_at`, `order_by`) VALUES
(30, 'http://wanganuihigh.ultranet.school.nz/', 'Ultranet', 'Ultranet', '2012-11-14 12:05:25', '2012-12-02 04:44:53', 1),
(29, 'http://latin/daily/Daily%20Notices.pdf', 'Daily Notices', 'Daily Notices', '2012-11-14 12:05:08', '2012-12-02 04:44:25', 1),
(32, 'http://latin/intranet/', 'Staff Help Pages', 'Staff Help Pages', '2012-11-14 12:25:28', '2012-12-02 04:44:53', 1),
(33, 'http://latin/intranet/index.php/kamar.html', 'Kamar Help', 'Kamar Help', '2012-11-14 12:25:47', '2012-12-02 04:44:53', 1),
(1, '/', 'home', 'home', '0000-00-00 00:00:00', '2012-12-02 04:51:06', 0),
(31, 'http://print-server:9191/app', 'PaperCut Login', 'PaperCut Login', '2012-11-14 12:25:13', '2012-12-02 04:44:53', 1),
(34, 'http://www.wanganui-high.school.nz/', 'WHS Website', 'WHS Website', '2012-11-14 12:26:05', '2012-12-02 04:44:53', 1),
(35, 'http://latin/webportal/staff/e-tv.html', 'e TV', 'e TV', '2012-11-14 12:26:13', '2012-12-02 04:44:53', 1),
(36, 'http://latin/webportal/student.html', 'Student Portal', 'Student Portal', '2012-11-14 12:26:22', '2012-12-02 04:44:53', 1),
(45, '/page', 'View All Pages', 'View All Pages', '2012-12-02 17:53:43', '2012-12-02 04:54:56', 0),
(46, '/news', 'View all news', 'View all news', '2012-12-02 17:54:03', '2012-12-02 04:54:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `body` text NOT NULL,
  `slug` text NOT NULL,
  `important` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `show_staff` tinyint(1) NOT NULL DEFAULT '1',
  `show_students` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `author`, `body`, `slug`, `important`, `created_at`, `updated_at`, `show_staff`, `show_students`) VALUES
(65, 'first post', 'qweq', '<p>qwewewewqww wqw</p>\r\n\r\n<p>dfgdfgdfg</p>\r\n', 'first-post', 1, '2012-12-01 18:38:08', '2012-12-01 13:51:26', 1, 0),
(66, 'second post', 'sean', '<p>this is the second post</p>\r\n', 'second-post', 1, '2012-12-01 19:27:20', '2012-12-01 07:43:37', 1, 0),
(67, 'sdfsdfsdf', 'sdfsdfsdf', '<p>dfsgvzsfdsfsdf</p>\r\n', 'sdfsdfsdf', 1, '2012-12-02 14:00:30', '2012-12-02 01:00:30', 1, 0),
(68, 'Sean''s news items', 'Sean', '<p>a page about dogs,</p>\r\n\r\n<p>that is about cats</p>\r\n\r\n<p><a href="/page/view/about-dogs">/page/view/about-dogs</a></p>\r\n', 'seans-news-items', 0, '2012-12-02 14:08:23', '2012-12-02 04:29:23', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `slug` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `body`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'about printing and photoc', '<h1>Printing and Photocopying 2012</h1>\r\n\r\n<h2>We are issuing students with a Wanganui High School Photo ID / Library and Printing card, which can be used in the following ways:</h2>\r\n\r\n<ul>\r\n	<li>Library card -Issuing books at the school library (using the barcode on the front)</li>\r\n	<li>Photocopy/Scanning card - For photocopying and scanning, using the magnetic swipe card</li>\r\n	<li>For &quot;Follow Me&quot; printing - this is a system where a student sends a document to be printed but it will not actually be printed until the student swipes their card at the printer (avoiding potential confusion or loss of printed material)</li>\r\n	<li>ID card - for ID purposes inside and outside school.</li>\r\n</ul>\r\n\r\n<hr />\r\n<h2>Printing Quota</h2>\r\n\r\n<ul>\r\n	<li>Students should be aware that all of their printing and photocopying will be logged to their printing account - You should have $5.00 quota already, but additional amounts will be added for some students at two other times later in the year. Your subject teachers will be able to advise you about this.</li>\r\n	<li>If you run out of quota you can buy a top up card ($2/$5/$10) from the librarians.</li>\r\n</ul>\r\n\r\n<hr />\r\n<h2>Printing Costs (cents/page):</h2>\r\n\r\n<table id="printing_table">\r\n	<tbody>\r\n		<tr>\r\n			<td class="heading">&nbsp;</td>\r\n			<td class="heading">B/W</td>\r\n			<td class="heading">Colour</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="heading">A4</td>\r\n			<td>6</td>\r\n			<td>24</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="heading">A3</td>\r\n			<td>18</td>\r\n			<td>30</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Students can see how much remaining allocation they have available whenever they log on to the school&#39;s network. Look for the PaperCut Icon on your desktop</p>\r\n\r\n<hr />\r\n<h2>Printing Credit Allocation:</h2>\r\n\r\n<div id="print-credit-allocation">\r\n<h3>Stage One - Start of Year / New Student</h3>\r\n\r\n<p>Students recieve $5</p>\r\n\r\n<h3>Stage Two - Periodical Increases</h3>\r\n\r\n<p>All students who take a combination of subjects that require a large amount of printing will get at fixed points during the year, a top up determined by the actual subjects they take.</p>\r\n\r\n<blockquote>\r\n<p>The current top up dates are:<br />\r\n<span>1st April, 1st June, 1st August, 1st October </span></p>\r\n</blockquote>\r\n<br />\r\n<br />\r\n<p>Each high end use subject is given an overall score based on multiples of $5.</p>\r\n\r\n<blockquote>\r\n<p><span>e.g. A score of 1 applies to faily light use in subjects like Computing Practical, which would recieve a credit of $5 over the year,<br />\r\nwhereas a score of 9 applies to the heaviest use subject (Photography 3),which would recieve a credit of $45 over the year </span></p>\r\n</blockquote>\r\n<br />\r\n<br />\r\n<p>Each Students course is then analysed and the combined score determines the final print credit allocation.</p>\r\n\r\n<h2>Subject Code and Score for subjects with additional printing requirements</h2>\r\n\r\n<table id="print-scores">\r\n	<caption>&nbsp;</caption>\r\n	<thead>\r\n		<tr>\r\n			<td class="heading">Subject Code</td>\r\n			<td class="heading">Score</td>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>ARD2</td>\r\n			<td>3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ARD3</td>\r\n			<td>6</td>\r\n		</tr>\r\n		<tr>\r\n			<td>CBU3</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>CIM2</td>\r\n			<td>2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>COP1</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>CSC3</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>CWB1</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>DGT0</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>DGT1</td>\r\n			<td>3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>GRA1</td>\r\n			<td>2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>GRA2</td>\r\n			<td>3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>GRA3</td>\r\n			<td>4</td>\r\n		</tr>\r\n		<tr>\r\n			<td>PHO2</td>\r\n			<td>2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>PHO3</td>\r\n			<td>9</td>\r\n		</tr>\r\n		<tr>\r\n			<td>TEC1</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>TEC2</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>TEC3</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>TTD1</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>TTD2</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>TTD3</td>\r\n			<td>1</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n<br />\r\n<p>Credit allocation can be described as:</p>\r\n\r\n<blockquote>\r\n<p><span>Total Print Credit Per Year = 5 + Sum( SubjectCode[Score] ) * 5</span></p>\r\n</blockquote>\r\n</div>\r\n\r\n<hr />\r\n<h2>Lost cards</h2>\r\n\r\n<p>Unfortunately, if a student loses their student ID card there will be a $10 replacement cost.</p>\r\n', 'about-printing-and-photocopying', '2012-11-30 12:02:02', '2012-11-30 09:32:58'),
(4, 'e TV - Recorded tv programmes', '<h1>e TV - Recorded tv programmes</h1>\r\n\r\n<p>WHS has signed up to eTV, a service that provides us with online access to recorded tv programs.</p>\r\n\r\n<p>Missing TV7?&nbsp; Then you&#39;ll be happy to know that this is one of the channels they&#39;ve sourced their content from.</p>\r\n\r\n<p>Sign in and browse the content, but <b><u>DO NOT</u></b> download or stream the programs online while you are at school.</p>\r\n\r\n<p>This places a lot of stress on our internet connection and slows access for the entire school.</p>\r\n\r\n<p>Instead, take a note of the programs you intend to use at school and email the list to <a href="mailto:goldsbury.s@wanganuihigh.school.nz">Sue Goldsbury</a>.&nbsp; She will download them, convert to clickview format, and house them on our network so that anyone can access them.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The e TV site can be found here: <a href="http://www.etv.org.nz/login.php">http://www.etv.org.nz/login.php</a><br />\r\n<br />\r\n<u>Login Details</u><br />\r\n<b>School / Kura / College:</b> Wanganui High Scool<br />\r\n<b>Username:</b>&nbsp; <i>whs staff</i><br />\r\n<b>Password:</b>&nbsp; <i>whsstaff</i></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'e-tv-recorded-tv-programmes', '2012-11-30 12:43:15', '2012-12-02 01:16:49'),
(8, 'about dogs', '<p>here is cats</p>\r\n', 'about-dogs', '2012-11-30 23:12:46', '2012-11-30 10:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quote` text NOT NULL,
  `author` text NOT NULL,
  `date` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `quote`, `author`, `date`, `created_at`, `updated_at`) VALUES
(1, '<p>You can teach <strong>a student a lesson for a day; but if you can teach him to learn </strong>by creating curiosity, he will continue the learning process as long as he lives.</p>\r\n', 'Clay P. Bedford', '', '0000-00-00 00:00:00', '2012-11-08 01:21:49'),
(4, 'Few of us get anything without working for it.', 'William Feather', '', '0000-00-00 00:00:00', '2012-11-04 09:29:31'),
(5, 'Live as if you were to die tomorrow. Learn as if you were to live forever.', 'Mahatma Gandhi', '', '0000-00-00 00:00:00', '2012-11-04 09:30:12'),
(6, 'I have never let my schooling interfere with my education.', 'Mark Twain', '', '0000-00-00 00:00:00', '2012-11-04 09:30:12'),
(7, 'Education is the most powerful weapon which you can use to change the world.', 'Nelson Mandela', '', '0000-00-00 00:00:00', '2012-11-04 09:30:44'),
(8, 'Whatever the cost of our libraries, the price is cheap compared to that of an ignorant nation.', 'Walter Cronkite', '', '0000-00-00 00:00:00', '2012-11-04 09:30:44'),
(9, 'Education: the path from cocky ignorance to miserable uncertainty.', 'Mark Twain', '', '0000-00-00 00:00:00', '2012-11-04 09:31:17'),
(10, 'Intelligence plus character-that is the goal of true education.', 'Martin Luther King Jr.', '', '0000-00-00 00:00:00', '2012-11-04 09:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `id`) VALUES
('admin', '$2a$08$Y9akurTPyJVaLAFY19nGhuzDq.QAL2bfrafBafCRaCxY9fVJqHzOq', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
