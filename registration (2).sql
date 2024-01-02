-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 06:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `amount`
--

CREATE TABLE `amount` (
  `amount_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `amount` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `amount`
--

INSERT INTO `amount` (`amount_id`, `course_id`, `amount`, `status`) VALUES
(8, 6, '5000', 1),
(9, 7, '4000', 1),
(10, 8, '10000', 1),
(11, 9, '1000', 1),
(12, 18, '20000', 1),
(13, 19, '15000', 1),
(14, 20, '100000', 1),
(15, 21, '6000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `status`) VALUES
(6, 'php', 1),
(7, 'html', 1),
(8, 'REACT', 1),
(9, 'laravel', 1),
(18, 'devil', 1),
(19, 'django', 1),
(20, 'rrr', 1),
(21, 'sss', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `priority` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `mail`, `priority`, `phone`) VALUES
(12, 'chris12', 'chris123', 'christovarghese555@gmail.com', '2', '7306218158'),
(13, 'kutt', 'kutt', 'kut@gmail.com', '2', '7306218158'),
(14, 'chaathan', 'chaathan', 'chaathan@gmail.com', '2', '7306218158'),
(15, 'vijayakumar', '1234', 'vijayakumar@gmail.com', '2', '4356476877'),
(16, 'zntra', '5453', 'zntra@gmail.com', '1', '7306218158'),
(17, 'athulya a', '12345', 'athu@gmail.com', '2', '1365286056'),
(18, 'archana', 'kashi', 'archanaammuz555@gmal.com', '2', '8714520652'),
(19, 'arch', 'eckaku', 'abc@gmail.com', '2', '1234567895'),
(20, 'kiran', '123', 'christovarghese555@gmail.com', '2', '7306218158'),
(21, 'jincy', '7777', 'christovarghese555@gmail.com', '2', '48674531'),
(22, 'sreeja', '1111', 'sree@gmail.com', '2', '8465115515');

-- --------------------------------------------------------

--
-- Table structure for table `payed`
--

CREATE TABLE `payed` (
  `payed_id` int(11) NOT NULL,
  `P_course` varchar(50) NOT NULL,
  `p_amount` varchar(50) NOT NULL,
  `p_student` varchar(40) NOT NULL,
  `p_status` int(11) NOT NULL DEFAULT 0,
  `p_count` int(11) NOT NULL,
  `P_cash` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payed`
--

INSERT INTO `payed` (`payed_id`, `P_course`, `p_amount`, `p_student`, `p_status`, `p_count`, `P_cash`) VALUES
(9, '9', '11', '73', 2, 5, 200),
(10, '9', '11', '73', 2, 4, 250),
(11, '9', '11', '81', 2, 10, 100),
(12, '8', '10', '82', 2, 5, 2000),
(13, '21', '15', '84', 2, 3, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `payed_status`
--

CREATE TABLE `payed_status` (
  `s_id` int(11) NOT NULL,
  `s_count` int(11) NOT NULL,
  `s_pay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendings`
--

CREATE TABLE `pendings` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `nam_pending` varchar(30) NOT NULL,
  `user_enquiry` varchar(30) NOT NULL,
  `enquiry` varchar(60) NOT NULL,
  `date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendings`
--

INSERT INTO `pendings` (`id`, `rid`, `nam_pending`, `user_enquiry`, `enquiry`, `date`) VALUES
(1, 67, '', 'zntra', '3.hfgqjkbv ihofiv', '26/11/22,00'),
(2, 67, '', 'zntra', 'hoihihijjn', '26/11/22,00'),
(3, 67, '', 'zntra', 'rugjblf4', '26/11/22,00'),
(4, 69, '', 'zntra', 'tufygjuk', '28/11/22,23'),
(5, 82, '', 'zntra', 'madi', '30/11/22,06'),
(6, 85, '', 'zntra', 'TTTTTT', '01/12/22,05'),
(7, 85, '', 'zntra', 'HJGFQLEKHRGQ\r\n GOIVWRELKIJE WR\r\nGJKJERGHLK3QJ;GL', '01/12/22,05'),
(8, 75, '', 'zntra', 'kj', '01/12/22,05'),
(9, 74, '', 'zntra', 'BHMM', '01/12/22,06');

-- --------------------------------------------------------

--
-- Table structure for table `reg_form`
--

CREATE TABLE `reg_form` (
  `id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `course` varchar(40) NOT NULL,
  `date of joining` date NOT NULL,
  `instituion` varchar(40) NOT NULL,
  `contact person name` varchar(30) NOT NULL,
  `cp contact` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `place` varchar(40) NOT NULL,
  `signature` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `photo` text NOT NULL,
  `pen` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 99 COMMENT 'payed or not',
  `courses` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_form`
--

INSERT INTO `reg_form` (`id`, `email`, `contact`, `address`, `course`, `date of joining`, `instituion`, `contact person name`, `cp contact`, `date`, `place`, `signature`, `name`, `photo`, `pen`, `status`, `courses`) VALUES
(28, 'christovarghese555@gmail.com', '7306218158', '', 'qvr', '0465-03-06', 'gbdngfm', 'edmjhk', '314625677', '0000-00-00', '', '', 'christo', '', 2, 99, ''),
(29, 'kashi123@gmail.com', '7643219807', '', 'abc', '2022-06-21', 'tech world', 'Christo', '754097124', '0000-00-00', '', '', 'Kashi C', '', 1, 99, ''),
(30, 'drute@gmail.com', '0987654335', '', 'wertyu', '0345-05-31', 'sdfghj', 'wertyu', '8765465432', '0000-00-00', '', '', 'Asdfghj', '', 2, 99, ''),
(32, 'sedrftgyuh@gmail.com', '1234567890', '', 'wertyukl', '5678-04-23', 'qwertyuop', 'asdfghjkl', '1234567890', '0000-00-00', '', '', 'ssedrftugyuhoijk', '', 1, 99, ''),
(33, 'sgyuh@gmail.com', '1234997890', '', 'weyukl', '5678-04-07', 'qweyuop', 'asdfgkl', '1234597890', '0000-00-00', '', '', 'ssedr', '', 2, 99, ''),
(34, 'sgyjkguuh@gmail.com', '1230797890', '', 'weyuklvraz', '0000-00-00', 'qweyusop', 'asdfgkadl', '1234553890', '0000-00-00', '', '', 'ssedrjhc u', '', 0, 99, ''),
(35, 'nbzduhguuh@gmail.com', '7654079789', '', 'weyusjbxvraz', '0000-00-00', 'qcjhsuchsop', 'asscgkadl', '1234507890', '0000-00-00', '', '', 'ohjfaxyoa', '', 0, 99, ''),
(36, 'nbzduasxA@gmail.com', '7654079878', '', 'ouytrfvbnjbxvraz', '8765-09-07', 'qcjftyuj', 'hgfcvbkadl', '1298765789', '0000-00-00', '', '', 'agxyaga', '', 2, 99, ''),
(37, 'nasxA@gmail.com', '7654079878', '', 'ouytrfvbnjbxvraz', '8765-09-07', 'qcjftyuj', 'hgfcvbkadl', '1298765789', '0000-00-00', '', '', 'ujkjhgft', '', 2, 99, ''),
(38, 'hghdseysd@gmail.com', '9876543234', '', 'kuytredsdcgh', '0065-07-08', 'wsdfvhnm', 'werfghjnm', '6543214567', '0000-00-00', '', '', 'hmfkuyrghg', '', 2, 99, ''),
(39, 'christovarghese555@gmail.com', '7306218158', '', 'dsahdfk/bvjfnk cglhm;', '7809-08-07', 'zxn .,', 'kbjnl,.', '3345678909', '0000-00-00', '', '', 'erkj/dbnf ', '', 0, 99, ''),
(40, 'christovarghese555@gmail.com', '7306218158', 'lalalalalallalala', 'dsbfn', '0000-00-00', 'wefgrhd', 'Zcxvz', '1324256458', '0000-00-00', '', '', 'bn b,m,', '', 0, 99, ''),
(41, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', '', '0543-02-05', '', '', '7306218158', '0000-00-00', '', 'profile-10102216653992571.jpg', 'chris', 'testimonial-2.jpg', 0, 99, ''),
(43, 'fghjbv@gmail.com', '2345678907', 'daesrtymjhfgbcvn ', 'drtedgc', '2001-03-11', 'wertyusdfg', 'wertyujn', '2345678906', '0000-00-00', '', 'profile-10102216654032551.jpg', 'wertsdfg', 'te.jpg', 0, 99, ''),
(44, 'zsrfv@gmal.com', '123456789', 'sdfghjm,', 'drtyukl', '2001-12-31', 'wertyu', 'sdfgh', '0987654327', '0000-00-00', '', 'profile-10102216654033371.jpg', 'aewretyrtuyou', 'te.jpg', 0, 99, ''),
(45, 'dfgh@gmail.com', '1234567890', 'fhjyhmg,k', 'cxhtr', '4567-03-12', 'sdfghj', 'b dngjy', '098765432', '0000-00-00', '', 'profile-10102216654033831.jpg', 'qwertyuio', 'te.jpg', 0, 99, ''),
(46, 'jgxnftdr@gmail.com', '1234567890', 'gbesxjkg', 'f y6jrfkh', '4567-03-12', 'zdrthr', ' vcbcngz', '8645678909', '0000-00-00', '', 'profile-10102216654034511.jpg', 'cbgtrhj', 'te.jpg', 2, 99, ''),
(47, 'cvsa@gmail.com', '9876543276', 'dt kguliyg', 'vhckjb', '0765-08-09', 'ch,guxr', 'cgxjgf,uyj', '1234567890', '0000-00-00', '', 'profile-10102216654035141.jpg', 'bxrhjh', 'te.jpg', 0, 99, ''),
(48, 'xggf@gmail.com', '1234567890', 'xfdgc ', 'bnhffluyg', '4567-03-12', 'gfcjyrt', 'hgfkyu', '1234567890', '0000-00-00', '', 'profile-10102216654035791.jpg', 'fxfhk gnb', 'te.jpg', 0, 99, ''),
(49, 'xdjct@gmail.com', '234567890', 'cjgfy,f', 'ftrvhcd', '0123-03-12', 'xhrvj', 'nftfhbj', '2345788897', '0000-00-00', '', 'profile-10102216654036361.jpg', 'xdjkghgugjjoj', 'te.jpg', 0, 99, ''),
(50, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', 'mca', '5656-05-31', 'gial', 'all', '7306218158', '0000-00-00', '', 'profile-11102216654635591.jpg', 'christy', 'profile-11102216654635591.jpg', 0, 99, ''),
(51, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', 'ertehrjf', '0578-07-06', 'ghjbg', 'ghhn', '7306218158', '0000-00-00', '', 'profile-11102216654710171.jpg', 'athulya', 'profile-11102216654710171.jpg', 0, 99, ''),
(52, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', 'xnx gn', '0000-00-00', 'cxvcbv', ' vbv', '7306218158', '0000-00-00', '', 'profile-11102216654710641.jpg', 'tyrujufy', 'profile-11102216654710641.jpg', 0, 99, ''),
(53, 'arohi@gmail.com', '7645321345', 'ABC (H), Kanjikuzhi po ,kottayam', 'Software Testter', '2001-08-23', 'xyz', 'Kishoor', '9865432156', '0000-00-00', '', 'profile-11102216654798191.jpg', 'Arohi Kishoor', 'profile-11102216654798191.jpg', 2, 99, ''),
(55, 'sree@gmail.com', '8765457886', 'Pallarikkat(h),Chirrakkadav po,Ponkunnnam', 'Testing', '2006-12-29', 'XYZ', 'Anil', '9753557898', '0000-00-00', '', 'profile-11102216654810921.jpg', 'Sreekuttan', 'profile-11102216654810921.jpg', 0, 99, ''),
(56, 'anoj@gmail.com', '7546709862', 'Kuttenchira(H) ,Madapally po, kottayam', 'soft eng', '2001-04-25', 'PQR', 'Archana', '9805433256', '0000-00-00', '', 'profile-11102216654812241.jpg', 'Anoj A', 'profile-11102216654812241.jpg', 0, 99, ''),
(57, 'Kj@gmail.com', '7865358998', 'Kuttenchira(H),Madapally po,  Chngsry', 'Tester', '2005-09-08', 'ABC', 'Aneesh', '8714521065', '0000-00-00', '', 'profile-11102216654813741.jpg', 'Kripa J', 'profile-11102216654813741.jpg', 0, 99, ''),
(58, 'chaathan@gmail.com', '7306218158', 'KUTTENCHIRA', 'peace', '9999-09-09', 'koatta', 'kuttychaaathan', '7306218158', '0000-00-00', '', '', 'chaathan', 'profile-14102216657226281.jpg', 0, 99, ''),
(59, 'chaathan@gmail.com', '7306218158', 'KUTTENCHIRA', 'peace', '9999-09-09', 'koatta', 'kuttychaaathan', '7306218158', '0000-00-00', '', '', 'chaa', '', 0, 99, ''),
(60, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', 'angular', '0000-00-00', 'tisser', 'ftveyhdbks', '7306218158', '0000-00-00', '', '', 'christo', 'profile-17102216659806281.jpg', 0, 99, ''),
(61, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', 'fewqre', '9999-09-08', 'XBF', 'dvb vb', '5486978979', '0000-00-00', '', '', 'sfjsn ghfhgjh', '', 1, 99, ''),
(63, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', 'qvr', '0006-08-06', 'deqrwev', '54wysh', '7306218158', '0000-00-00', '', 'profile-20102216662674121.jpg', 'tkLNrm.,bf', 'te.jpg', 0, 99, ''),
(64, '', '2654655555', '', '', '0000-00-00', '', '', '5455555555', '0000-00-00', '', '', '', '', 0, 99, ''),
(65, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', 'victory', '1656-05-04', 'self', 'chaathan', '77816768', '0000-00-00', '', '', 'adimaa', 'profile-23112216692359321.jpg', 1, 99, ''),
(66, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', '<br />\r\n<b>Warning</b>:  Undefined varia', '2022-12-10', ',b. h yj y', ' hnmjhmtmjmjjmmj', '7306218158', '0000-00-00', '', '', 'ngv t', 'profile-25112216693360801.jpg', 0, 99, ''),
(67, 'kjbebkbgj@gmail.com', '4768086595', 'bgm,ng  ,nmbnnbgnm,hbgerhbl', 'html', '7987-08-07', 'bgm,ng', 'klbn', '5545433589', '0000-00-00', '', '', ' hlM', 'profile-25112216693367421.jpg', 0, 99, ''),
(68, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', '2', '0789-05-06', 'bvwcn', 'hvcc', '7306218158', '0000-00-00', '', '', 'ewkhgc', 'profile-25112216694138981.jpg', 0, 99, ''),
(69, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', '<br />\r\n<b>Warning</b>:  Trying to acces', '7897-05-06', 'hbckqw', 'ndcvc', '5676879088', '0000-00-00', '', '', 'vkbjql', 'profile-26112216694200271.jpg', 0, 99, ''),
(70, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', '7', '0000-00-00', 'ehg', 'eyju', '5647588888', '0000-00-00', '', '', 'cccccccccccc', 'profile-26112216694204901.jpg', 0, 99, ''),
(71, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', '11', '0000-00-00', 'ertyu', 'rgdhj', '3456787900', '0000-00-00', '', '', 'cat', 'profile-26112216694222471.jpg', 2, 0, ''),
(72, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', '11', '0000-00-00', 'fhgedvc.msn', 'avdcbdbm,', '3454657867', '0000-00-00', '', '', 'fox', 'profile-26112216694222781.jpg', 0, 3, ''),
(73, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', '11', '0000-00-00', 'gffhvjbj,vcma ', 'nfnvbk/', '4657869708', '0000-00-00', '', '', 'lion', 'profile-26112216694223131.jpg', 0, 5, ''),
(74, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', '11', '0000-00-00', 'fdgvjhc', 'dfjghckj', '980988976', '0000-00-00', '', '', 'polar bear', 'profile-26112216694223531.jpg', 0, 0, ''),
(75, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', '11', '0000-00-00', 'gcvhbj', 'gnvmn', '4354675687', '0000-00-00', '', '', 'mew', 'profile-26112216694227681.jpg', 0, 0, ''),
(76, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', '11', '6768-05-04', 'dvcba ', 'djhcvd', '4578697987', '0000-00-00', '', '', 'bat', 'profile-26112216694236401.jpg', 0, 1, ''),
(77, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', '8', '8970-07-06', 'vc nb', 'bdfbg', '4536546785', '0000-00-00', '', '', 'ant', 'profile-26112216694243581.jpg', 0, 10, ''),
(78, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', '9', '0000-00-00', 'hecdgvnmf', 'vcasmnv', '4567865762', '0000-00-00', '', '', 'tom', 'profile-26112216694244101.jpg', 0, 0, ''),
(79, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', '12', '2026-04-07', 'pnkm', 'chaathan', '4546578679', '0000-00-00', '', '', 'kaashi', 'profile-29112216696809381.jpg', 0, 4, ''),
(80, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', '11', '0000-00-00', 'ygfujthbn', 'jhgrjkf', '4567687980', '0000-00-00', '', '', 'ammu', 'profile-30112216697652911.jpg', 0, 10, ''),
(81, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', '11', '6787-05-04', 'gcvhjkbj', 'fxcgvhbnbhj', '3456765878', '0000-00-00', '', '', 'anoj', 'profile-30112216697654841.jpg', 0, 9, ''),
(82, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', '10', '0000-00-00', 'vchvv', 'dbwe', '3456758697', '0000-00-00', '', '', 'kashi ecku', 'profile-30112216697680511.jpg', 1, 1, ''),
(83, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', '14', '8980-07-06', 'gnavxh', 'bvsnm', '5465687978', '0000-00-00', '', '', 'uyqgw', 'profile-30112216698307031.jpg', 0, 99, ''),
(84, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', '15', '0000-00-00', 'try', 'thy', '4354677686', '0000-00-00', '', '', 'hgg', 'profile-30112216698447681.jpg', 1, 0, ''),
(85, 'christovarghese555@gmail.com', '7306218158', 'KUTTENCHIRA', '13', '3674-06-07', 'deqrwev', 'chaathan', '7306218158', '0000-00-00', '', '', 'chris', 'profile-01122216698493431.jpg', 0, 99, 'django');

-- --------------------------------------------------------

--
-- Table structure for table `value`
--

CREATE TABLE `value` (
  `id` int(11) NOT NULL,
  `n_name` varchar(50) NOT NULL,
  `num` varchar(10) NOT NULL,
  `sa` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `value`
--

INSERT INTO `value` (`id`, `n_name`, `num`, `sa`) VALUES
(1, '', '1', 0),
(2, '', '1', 0),
(3, 'aaaaaaaaaa', '1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amount`
--
ALTER TABLE `amount`
  ADD PRIMARY KEY (`amount_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payed`
--
ALTER TABLE `payed`
  ADD PRIMARY KEY (`payed_id`);

--
-- Indexes for table `payed_status`
--
ALTER TABLE `payed_status`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `pendings`
--
ALTER TABLE `pendings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_form`
--
ALTER TABLE `reg_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `value`
--
ALTER TABLE `value`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amount`
--
ALTER TABLE `amount`
  MODIFY `amount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `payed`
--
ALTER TABLE `payed`
  MODIFY `payed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payed_status`
--
ALTER TABLE `payed_status`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendings`
--
ALTER TABLE `pendings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reg_form`
--
ALTER TABLE `reg_form`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `value`
--
ALTER TABLE `value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
