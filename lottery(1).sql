-- phpMyAdmin SQL Dump
-- version 4.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2013 at 03:29 AM
-- Server version: 5.5.33-0+wheezy1
-- PHP Version: 5.4.4-14+deb7u7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lottery`
--

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_content`
--

CREATE TABLE IF NOT EXISTS `dynamic_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `short_id` varchar(8) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `dynamic_content`
--

INSERT INTO `dynamic_content` (`id`, `short_id`, `text`) VALUES
(1, 'slogan', 'The Lottery for the best cryptocurrency around!<br> Bet 1 DOGE, <span class="important">win a million!</span>'),
(2, 'head', 'The <b>DogeCoin lottery</b> is now in beta'),
(3, 'bet_addr', 'D7UzqkodZ9tWtWknefNsABuUq4McZAuJgZ'),
(4, 'donation', 'D6hGApfB7YFGyzG9cnV9njHS664LtSf1B2'),
(5, 'about', '		<div class="page-other">\r\n		<h2>What is this?</h2>\r\n		This is a lottery that is played using the virtual currency of dogecoins. It has rules similar to the real game of lottery, only it''s not completely random (You cannot have random numbers in computers. They are emulated). The rules are explained clearly in the bottom of this page.\r\n		<h2>What is dogecoin?</h2>\r\n		<small><i>Source:<span class="attention"><a href="http://en.wikipedia.org/wiki/Dogecoin">Wikipedia</a></span></i></small><br>\r\n		Dogecoin (code: DOGE, symbol: D), is a Litecoin-derived cryptocurrency that uses the Shiba Inu dog character from the ''Doge'' Internet meme as its mascot.<br>\r\n		To put it in simple terms, dogecoin is a virtual currency. You can mine it, exchanging CPU/GPU power for money.\r\n		<h2>How can I know I''m not being scammed?</h2>\r\n		I can''t prove that I will not steal your money. However, my algorhitm is open-source. You can find it at the top of the page. <b>However</b> that doesn''t guarantee you that I won''t steal your doges. I am trying to make the whole process as transparent as possible, this is why there is  a public ''lottery log'', that shows the address(that you cannot be identified by), and how much it has won.\r\n		<h2>I accidentally bet 1.1 DOGE, can I have 0.1 doge back?</h2>\r\n		Originally (on the testing stages of this lottery), refunds were automatically made. However, that is no longer possible, due to a recent change to the way taxes are calculated, so the transaction fee is bigger than the transaction itself. Sorry :(\r\n<a id="info"></a>\r\n		<h2>How are winners picked?</h2>\r\n		First, all transactions since the last draw are taken. Then, the excess (after the decimal point) is removed from each transaction. For each doge there is, one entry is added to a list (for example, if you have paid 50 doges, you will get 50 entries. Then, an entry is picked, 3 times, each for a smaller price. Then, the prices are sent where they belong.\r\n		<br>\r\n		If you are interested, you can review the source code of the program.\r\n		<h2>Why is the website so ugly :(</h2>\r\n		I''m just a lonely programmer. If you are interested in helping me with a better design, feel free to contact me :).\r\n		</div>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
