-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2021 at 10:23 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kyc_dashbord`
--

-- --------------------------------------------------------

--
-- Table structure for table `kyc_table`
--

CREATE TABLE `kyc_table` (
  `kyc_id` int(11) NOT NULL,
  `kyc_type` set('self','shg','mfg','jlg','or') NOT NULL,
  `status` set('approve','reject','pending','seek_con') NOT NULL,
  `member_name` varchar(30) NOT NULL,
  `gender` set('male','female','transgender','mixed','') NOT NULL,
  `marital_status` set('married','unmarried','others','') NOT NULL,
  `caste` set('st','sc','obc','general','minority') NOT NULL,
  `religion` set('hindu','muslim','christian','others') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kyc_table`
--

INSERT INTO `kyc_table` (`kyc_id`, `kyc_type`, `status`, `member_name`, `gender`, `marital_status`, `caste`, `religion`, `created_at`) VALUES
(1, 'self', 'approve', 'sunil', 'male', 'unmarried', 'sc', 'hindu', '2021-09-25 21:56:14'),
(2, 'shg', 'reject', 'asim', 'male', 'married', 'st', 'hindu', '2021-09-25 21:56:14'),
(3, 'jlg', 'pending', 'bhaskar', 'male', 'unmarried', 'obc', 'muslim', '2021-09-01 21:56:14'),
(4, 'or', 'seek_con', 'jamal', 'female', 'unmarried', 'general', 'hindu', '2021-09-25 21:56:14'),
(5, 'mfg', 'reject', 'kuntal', 'male', 'married', 'sc', 'muslim', '2021-09-25 21:56:14'),
(6, 'self', 'approve', 'anima', 'female', 'unmarried', 'general', 'muslim', '2021-09-15 21:56:14'),
(7, 'jlg', 'reject', 'afsara', 'female', 'married', 'sc', 'muslim', '2021-09-25 21:56:14'),
(8, 'mfg', 'approve', 'jalam', 'female', 'unmarried', 'general', 'hindu', '2021-09-25 21:56:14'),
(9, 'or', 'reject', 'ram', 'female', 'unmarried', 'obc', 'christian', '2021-09-25 21:56:14'),
(10, 'shg', 'pending', 'sam', 'male', 'married', 'general', 'muslim', '2021-09-25 21:56:14'),
(11, 'or', 'approve', 'jodu', 'female', 'married', 'minority', 'others', '2021-09-25 21:56:14'),
(12, 'mfg', 'approve', 'sunil1', 'transgender', 'married', 'obc', 'christian', '2021-09-25 21:56:14'),
(13, 'shg', 'reject', 'sunil2', 'female', 'married', 'sc', 'hindu', '2021-09-25 21:56:14'),
(14, 'self', 'reject', 'sunil3', 'male', 'unmarried', 'obc', 'muslim', '2021-09-25 21:56:14'),
(15, 'self', 'pending', 'sunil3', 'male', 'married', 'general', 'christian', '2021-09-25 21:56:14'),
(16, 'or', 'approve', 'sunil5', 'male', 'married', 'obc', 'hindu', '2021-09-25 21:56:14'),
(17, 'jlg', 'reject', 'sunil6', 'male', 'unmarried', 'sc', 'hindu', '2021-09-25 21:56:14'),
(18, 'or', 'approve', 'sunil7', 'male', 'married', 'obc', 'muslim', '2021-09-25 21:56:14'),
(19, 'mfg', 'pending', 'sunil8', 'female', 'unmarried', 'sc', 'hindu', '2021-09-25 21:56:14'),
(20, 'jlg', 'approve', 'sunil9', 'female', 'married', 'sc', 'muslim', '2021-09-25 21:56:14'),
(21, 'self', 'reject', 'sunil10', 'male', 'unmarried', 'obc', 'hindu', '2021-09-25 21:56:14'),
(22, 'shg', 'approve', 'sunil11', 'male', 'married', 'general', 'christian', '2021-09-25 21:56:14'),
(23, 'shg', 'reject', 'sunil12', 'male', 'unmarried', 'obc', 'muslim', '2021-09-25 21:56:14'),
(24, 'or', 'approve', 'sunil13', 'female', 'married', 'general', 'others', '2021-09-15 21:56:14'),
(25, 'jlg', 'reject', 'sunil14', 'transgender', 'married', 'obc', 'hindu', '2021-09-25 21:56:14'),
(26, 'or', 'approve', 'sunil15', 'female', 'others', 'obc', 'hindu', '2021-09-25 21:56:14'),
(27, 'self', 'reject', 'sunil16', 'male', 'others', 'sc', 'others', '2021-09-25 21:56:14'),
(28, 'shg', 'approve', 'sunil17', 'female', 'unmarried', 'obc', 'muslim', '2021-09-25 21:56:14'),
(29, 'mfg', 'approve', 'sunil18', 'male', 'married', 'general', 'christian', '2021-09-25 21:56:14'),
(30, 'jlg', 'reject', 'sunil19', 'male', 'unmarried', 'sc', 'muslim', '2021-09-25 21:56:14'),
(31, 'or', 'approve', 'sunil20', 'male', 'others', 'obc', 'hindu', '2021-09-25 21:56:14'),
(32, 'self', 'reject', 'sunil21', 'male', 'married', 'general', 'muslim', '2021-09-25 21:56:14'),
(33, 'shg', 'approve', 'sunil22', 'female', 'others', 'obc', 'hindu', '2021-09-25 21:56:14'),
(34, 'mfg', 'approve', 'sunil23', 'male', 'married', 'sc', 'hindu', '2021-02-09 21:56:14'),
(35, 'or', 'reject', 'sunil24', 'female', 'unmarried', 'obc', 'muslim', '2021-09-25 21:56:14'),
(36, 'jlg', 'approve', 'sunil25', 'male', 'married', 'general', 'hindu', '2021-09-25 21:56:14'),
(37, 'mfg', 'pending', 'sunil26', 'female', 'unmarried', 'obc', 'muslim', '2021-09-25 21:56:14'),
(38, 'self', 'approve', 'sunil27', 'transgender', 'married', 'sc', 'hindu', '2021-09-25 21:56:14'),
(39, 'or', 'reject', 'sunil28', 'male', 'married', 'sc', 'hindu', '2021-09-25 21:56:14'),
(40, 'jlg', 'seek_con', 'sunil29', 'female', 'unmarried', 'obc', 'christian', '2021-09-25 21:56:14'),
(41, 'shg', 'reject', 'sunil30', 'male', 'married', 'general', 'muslim', '2021-09-25 21:56:14'),
(42, 'or', 'approve', 'sunil31', 'female', 'others', 'sc', 'hindu', '2021-09-25 21:56:14'),
(43, 'or', 'reject', 'sunil32', 'male', 'unmarried', 'obc', 'hindu', '2021-09-25 21:56:14'),
(44, 'mfg', 'approve', 'sunil33', 'female', 'others', 'obc', 'others', '2021-09-25 21:56:14'),
(45, 'shg', 'approve', 'sunil34', 'male', 'others', 'general', 'muslim', '2021-09-25 21:56:14'),
(46, 'jlg', 'reject', 'sunil35', 'male', 'unmarried', 'obc', 'hindu', '2021-09-25 21:56:14'),
(47, 'self', 'approve', 'sunil36', 'male', 'married', 'sc', 'hindu', '2021-09-25 21:56:14'),
(48, 'self', 'seek_con', 'sunil37', 'transgender', 'married', 'sc', 'hindu', '2021-09-25 21:56:14'),
(49, 'or', 'reject', 'sunil38', 'male', 'unmarried', 'obc', 'muslim', '2021-09-25 21:56:14'),
(50, 'shg', 'pending', 'sunil39', 'male', 'married', 'general', 'christian', '2021-09-25 21:56:14'),
(51, 'shg', 'approve', 'sunil40', 'female', 'others', 'obc', 'hindu', '2021-09-25 21:56:14'),
(52, 'jlg', 'reject', 'sunil41', 'male', 'unmarried', 'sc', 'muslim', '2021-09-25 21:56:14'),
(53, 'mfg', 'approve', 'sunil42', 'female', 'others', 'obc', 'hindu', '2021-09-25 21:56:14'),
(54, 'self', 'reject', 'sunil43', 'male', 'unmarried', 'general', 'hindu', '2021-09-25 21:56:14'),
(55, 'or', 'approve', 'sunil44', 'male', 'others', 'sc', 'muslim', '2021-09-25 21:56:14'),
(56, 'jlg', 'pending', 'sunil45', 'male', 'unmarried', 'obc', 'hindu', '2021-09-25 21:56:14'),
(57, 'mfg', 'pending', 'sunil46', 'male', 'married', 'general', 'others', '2021-09-25 21:56:14'),
(58, 'shg', 'approve', 'sunil47', 'female', 'unmarried', 'obc', 'muslim', '2021-09-25 21:56:14'),
(59, 'jlg', 'approve', 'sunil48', 'transgender', 'married', 'sc', 'christian', '2021-09-25 21:56:14'),
(60, 'or', 'reject', 'sunil49', 'male', 'unmarried', 'obc', 'hindu', '2021-09-25 21:56:14'),
(61, 'self', 'approve', 'sunil50', 'male', 'others', 'sc', 'muslim', '2021-09-25 21:56:14'),
(62, 'mfg', 'approve', 'sunil51', 'transgender', 'unmarried', 'sc', 'others', '2021-09-25 21:56:14'),
(63, 'jlg', 'approve', 'sunil52', 'male', 'others', 'general', 'hindu', '2021-09-25 21:56:14'),
(64, 'or', 'reject', 'sunil53', 'male', 'unmarried', 'obc', 'muslim', '2021-09-25 21:56:14'),
(65, 'shg', 'approve', 'sunil54', 'male', 'unmarried', 'sc', 'christian', '2021-09-25 21:56:14'),
(66, 'mfg', 'approve', 'sunil55', 'female', 'married', 'sc', 'muslim', '2021-09-25 21:56:14'),
(67, 'jlg', 'reject', 'sunil56', 'male', 'married', 'obc', 'others', '2021-09-25 21:56:14'),
(68, 'or', 'approve', 'sunil57', 'male', 'unmarried', 'general', 'muslim', '2021-09-25 21:56:14'),
(69, 'mfg', 'approve', 'sunil58', 'male', 'others', 'sc', 'hindu', '2021-09-25 21:56:14'),
(70, 'self', 'approve', 'sunil59', 'male', 'married', 'obc', 'hindu', '2021-09-25 21:56:14'),
(71, 'or', 'reject', 'sunil60', 'male', 'unmarried', 'sc', 'hindu', '2021-09-25 21:56:14'),
(72, 'or', 'approve', 'sunil61', 'female', 'others', 'obc', 'muslim', '2021-09-25 21:56:14'),
(73, 'or', 'approve', 'sunil62', 'male', 'others', 'general', 'others', '2021-09-25 21:56:14'),
(74, 'or', 'approve', 'sunil63', 'male', 'unmarried', 'sc', 'muslim', '2021-09-25 21:56:14'),
(75, 'mfg', 'reject', 'sunil64', 'female', 'unmarried', 'obc', 'hindu', '2021-09-25 21:56:14'),
(76, 'jlg', 'approve', 'sunil65', 'transgender', 'married', 'sc', 'muslim', '2021-09-25 21:56:14'),
(77, 'shg', 'pending', 'sunil66', 'transgender', 'married', 'general', 'hindu', '2021-09-25 21:56:14'),
(78, 'self', 'approve', 'sunil67', 'male', 'others', 'obc', 'others', '2021-09-25 21:56:14'),
(79, 'self', 'approve', 'sunil68', 'female', 'unmarried', 'sc', 'muslim', '2021-09-25 21:56:14'),
(80, 'self', 'reject', 'sunil69', 'male', 'married', 'sc', 'hindu', '2021-09-25 21:56:14'),
(81, 'or', 'approve', 'sunil70', 'male', 'unmarried', 'obc', 'muslim', '2021-09-25 21:56:14'),
(82, 'shg', 'approve', 'sunil71', 'female', 'married', 'sc', 'hindu', '2021-09-25 21:56:14'),
(83, 'jlg', 'reject', 'sunil72', 'transgender', 'unmarried', 'obc', 'muslim', '2021-09-25 21:56:14'),
(84, 'mfg', 'approve', 'sunil73', 'female', 'married', 'general', 'others', '2021-09-25 21:56:14'),
(85, 'self', 'approve', 'sunil74', 'transgender', 'married', 'sc', 'christian', '2021-09-25 21:56:14'),
(86, 'self', 'approve', 'sunil75', 'female', 'unmarried', 'obc', 'hindu', '2021-09-25 21:56:14'),
(87, 'self', 'approve', 'sunil76', 'male', 'married', 'sc', 'muslim', '2021-09-25 21:56:14'),
(88, 'self', 'pending', 'sunil77', 'male', 'married', 'obc', 'others', '2021-09-25 21:56:14'),
(89, 'or', 'approve', 'sunil78', 'male', 'unmarried', 'sc', 'muslim', '2021-09-25 21:56:14'),
(90, 'shg', 'reject', 'sunil79', 'female', 'others', 'general', 'hindu', '2021-09-25 21:56:14'),
(91, 'shg', 'approve', 'sunil80', 'transgender', 'others', 'sc', 'christian', '2021-09-25 21:56:14'),
(92, 'or', 'approve', 'sunil81', 'female', 'unmarried', 'sc', 'muslim', '2021-09-25 21:56:14'),
(93, 'or', 'approve', 'sunil82', 'male', 'others', 'general', 'hindu', '2021-09-25 21:56:14'),
(94, 'shg', 'approve', 'sunil83', 'transgender', 'others', 'obc', 'hindu', '2021-09-25 21:56:14'),
(95, 'mfg', 'reject', 'sunil84', 'male', 'married', 'sc', 'muslim', '2021-09-25 21:56:14'),
(96, 'self', 'approve', 'sunil85', 'female', 'others', 'general', 'hindu', '2021-09-25 21:56:14'),
(97, 'jlg', 'approve', 'sunil86', 'male', 'unmarried', 'obc', 'hindu', '2021-09-25 21:56:14'),
(98, 'mfg', 'approve', 'sunil87', 'female', 'married', 'sc', 'hindu', '2021-09-25 21:56:14'),
(99, 'jlg', 'seek_con', 'sunil88', 'male', 'unmarried', 'general', 'others', '2021-09-25 21:56:14'),
(100, 'mfg', 'approve', 'sunil89', 'female', 'others', 'sc', 'muslim', '2021-09-25 21:56:14'),
(101, 'shg', 'approve', 'sunil90', 'transgender', 'unmarried', 'obc', 'muslim', '2021-09-25 21:56:14'),
(102, 'or', 'approve', 'sunil91', 'transgender', 'married', 'sc', 'christian', '2021-09-25 21:56:14'),
(103, 'jlg', 'approve', 'sunil93', 'female', 'unmarried', 'general', 'muslim', '2021-09-25 21:56:14'),
(104, 'self', 'reject', 'sunil94', 'male', 'married', 'sc', 'hindu', '2021-09-25 21:56:14'),
(105, 'self', 'approve', 'sunil95', 'male', 'others', 'general', 'hindu', '2021-09-25 21:56:14'),
(106, 'or', 'approve', 'sunil96', 'female', 'unmarried', 'obc', 'christian', '2021-09-25 21:56:14'),
(107, 'shg', 'approve', 'sunil97', 'male', 'married', 'sc', 'hindu', '2021-09-25 21:56:14'),
(108, 'mfg', 'approve', 'sunil98', 'female', 'married', 'obc', 'muslim', '2021-09-25 21:56:14'),
(109, 'jlg', 'approve', 'sunil99', 'male', 'unmarried', 'general', 'hindu', '2021-09-25 21:56:14'),
(110, 'mfg', 'pending', 'sunil100', 'male', 'others', 'minority', 'muslim', '2021-09-25 21:56:14'),
(111, 'jlg', 'approve', 'sunil101', 'female', 'unmarried', 'obc', 'christian', '2021-09-25 21:56:14'),
(112, 'or', 'pending', 'sunil102', 'transgender', 'married', 'sc', 'muslim', '2021-09-25 21:56:14'),
(113, 'shg', 'approve', 'sunil103', 'female', 'married', 'sc', 'hindu', '2021-09-25 21:56:14'),
(114, 'jlg', 'approve', 'sunil104', 'male', 'married', 'sc', 'hindu', '2021-09-25 21:56:14'),
(115, 'or', 'approve', 'sunil105', 'female', 'unmarried', 'sc', 'muslim', '2021-09-25 21:56:14'),
(116, 'or', 'approve', 'sunil106', 'male', 'others', 'sc', 'hindu', '2021-09-25 21:56:14'),
(117, 'or', 'reject', 'sunil107', 'female', 'unmarried', 'obc', 'hindu', '2021-09-25 21:56:14'),
(118, 'or', 'approve', 'sunil108', 'transgender', 'others', 'minority', 'muslim', '2021-09-25 21:56:14'),
(119, 'jlg', 'approve', 'sunil109', 'male', 'unmarried', 'obc', 'christian', '2021-09-25 21:56:14'),
(120, 'mfg', 'approve', 'sunil110', 'female', 'others', 'sc', 'hindu', '2021-09-25 21:56:14'),
(121, 'self', 'approve', 'sunil111', 'transgender', 'married', 'obc', 'others', '2021-09-25 21:56:14'),
(122, 'self', 'approve', 'sunil112', 'female', 'married', 'minority', 'others', '2021-09-25 21:56:14'),
(123, 'self', 'approve', 'sunil113', 'male', 'married', 'obc', 'christian', '2021-09-25 21:56:14'),
(124, 'or', 'approve', 'sunil114', 'male', 'married', 'sc', 'hindu', '2021-09-25 21:56:14'),
(125, 'jlg', 'approve', 'sunil115', 'female', 'married', 'minority', 'muslim', '2021-09-25 21:56:14'),
(126, 'or', 'reject', 'sunil116', 'male', 'married', 'sc', 'hindu', '2021-09-25 21:56:14'),
(127, 'shg', 'approve', 'sunil117', 'female', 'unmarried', 'minority', 'muslim', '2021-09-25 21:56:14'),
(128, 'mfg', 'reject', 'sunil118', 'transgender', 'married', 'obc', 'hindu', '2021-09-25 21:56:14'),
(129, 'jlg', 'reject', 'sunil119', 'female', 'unmarried', 'sc', 'muslim', '2021-09-25 21:56:14'),
(130, 'jlg', 'approve', 'sunil120', 'male', 'married', 'minority', 'hindu', '2021-09-25 21:56:14'),
(131, 'jlg', 'approve', 'sunil121', 'transgender', 'unmarried', 'obc', 'muslim', '2021-09-25 21:56:14'),
(132, 'jlg', 'reject', 'sunil122', 'female', 'others', 'sc', 'hindu', '2021-09-25 21:56:14'),
(133, 'mfg', 'approve', 'sunil123', 'male', 'others', 'obc', 'hindu', '2021-09-25 21:56:14'),
(134, 'jlg', 'approve', 'sunil124', 'female', 'married', 'minority', 'others', '2021-09-25 21:56:14'),
(135, 'or', 'approve', 'sunil125', 'male', 'unmarried', 'sc', 'muslim', '2021-09-25 21:56:14'),
(136, 'or', 'approve', 'sunil126', 'female', 'others', 'minority', 'others', '2021-09-25 21:56:14'),
(137, 'or', 'approve', 'sunil127', 'male', 'married', 'sc', 'hindu', '2021-09-25 21:56:14'),
(138, 'shg', 'approve', 'sunil128', 'male', 'unmarried', 'minority', 'muslim', '2021-09-25 21:56:14'),
(139, 'shg', 'approve', 'sunil129', 'female', 'married', 'obc', 'hindu', '2021-09-25 21:56:14'),
(140, 'mfg', 'approve', 'sunil130', 'female', 'married', 'sc', 'muslim', '2021-09-25 21:56:14'),
(141, 'jlg', 'approve', 'sunil131', 'transgender', 'unmarried', 'sc', 'muslim', '2021-09-23 21:56:14'),
(142, 'shg', 'reject', 'sunil132', 'male', 'unmarried', 'minority', 'hindu', '2021-09-25 21:56:14'),
(143, 'shg', 'seek_con', 'sunil133', 'male', 'married', 'sc', 'christian', '2021-09-25 21:56:14'),
(144, 'shg', 'approve', 'sunil134', 'transgender', 'married', 'minority', 'hindu', '2021-09-25 21:56:14'),
(145, 'or', 'approve', 'sunil135', 'female', 'unmarried', 'sc', 'muslim', '2021-09-25 21:56:14'),
(146, 'or', 'approve', 'sunil136', 'male', 'others', 'obc', 'hindu', '2021-09-25 21:56:14'),
(147, 'or', 'approve', 'sunil137', 'male', 'unmarried', 'minority', 'muslim', '2021-09-25 21:56:14'),
(148, 'jlg', 'approve', 'sunil138', 'female', 'married', 'sc', 'others', '2021-09-25 21:56:14'),
(149, 'shg', 'seek_con', 'sunil139', 'male', 'married', 'minority', 'muslim', '2021-09-25 21:56:14'),
(150, 'jlg', 'approve', 'sunil140', 'male', 'unmarried', 'sc', 'christian', '2021-09-25 21:56:14'),
(151, 'or', 'reject', 'sunil141', 'male', 'others', 'sc', 'hindu', '2021-09-25 21:56:14'),
(152, 'shg', 'approve', 'sunil142', 'female', 'married', 'sc', 'hindu', '2021-09-25 21:56:14'),
(153, 'shg', 'pending', 'sunil143', 'male', 'unmarried', 'minority', 'hindu', '2021-09-25 21:56:14'),
(154, 'shg', 'approve', 'sunil144', 'female', 'married', 'obc', 'hindu', '2021-09-25 21:56:14'),
(155, 'or', 'pending', 'sunil145', 'male', 'unmarried', 'obc', 'hindu', '2021-09-25 21:56:14'),
(156, 'or', 'approve', 'sunil146', 'transgender', 'married', 'obc', 'muslim', '2021-09-25 21:56:14'),
(157, 'self', 'approve', 'sunil147', 'female', 'married', 'minority', 'others', '2021-09-25 21:56:14'),
(158, 'self', 'reject', 'sunil148', 'male', 'unmarried', 'obc', 'muslim', '2021-09-25 21:56:14'),
(159, 'mfg', 'approve', 'sunil149', 'male', 'married', 'obc', 'hindu', '2021-09-25 21:56:14'),
(160, 'jlg', 'approve', 'sunil150', 'female', 'others', 'obc', 'others', '2021-09-25 21:56:14'),
(161, 'or', 'reject', 'sunil151', 'male', 'married', 'minority', 'hindu', '2021-09-25 21:56:14'),
(162, 'self', 'reject', 'sunil152', 'male', 'married', 'sc', 'christian', '2021-09-25 21:56:14'),
(163, 'jlg', 'seek_con', 'sunil153', 'male', 'others', 'obc', 'hindu', '2021-09-25 21:56:14'),
(164, 'jlg', 'approve', 'sunil154', 'female', 'unmarried', 'sc', 'others', '2021-09-25 21:56:14'),
(165, 'shg', 'approve', 'sunil155', 'female', 'married', 'minority', 'hindu', '2021-09-25 21:56:14'),
(166, 'or', 'seek_con', 'sunil156', 'male', 'unmarried', 'obc', 'muslim', '2021-09-25 21:56:14'),
(167, 'jlg', 'approve', 'sunil157', 'female', 'unmarried', 'obc', 'muslim', '2021-09-25 21:56:14'),
(168, 'mfg', 'approve', 'sunil158', 'male', 'unmarried', 'obc', 'muslim', '2021-09-25 21:56:14'),
(169, 'jlg', 'seek_con', 'sunil159', 'female', 'married', 'obc', 'hindu', '2021-09-25 21:56:14'),
(170, 'mfg', 'approve', 'sunil160', 'male', 'unmarried', 'obc', 'muslim', '2021-09-25 21:56:14'),
(171, 'jlg', 'approve', 'sunil161', 'male', 'married', 'minority', 'hindu', '2021-09-25 21:56:14'),
(172, 'self', 'pending', 'sunil162', 'female', 'married', 'sc', 'muslim', '2021-09-25 21:56:14'),
(173, 'self', 'approve', 'sunil163', 'male', 'others', 'sc', 'hindu', '2021-09-25 21:56:14'),
(174, 'or', 'approve', 'sunil164', 'male', 'married', 'minority', 'hindu', '2021-09-25 21:56:14'),
(175, 'shg', 'reject', 'sunil165', 'male', 'married', 'sc', 'hindu', '2021-09-25 21:56:14'),
(176, 'shg', 'reject', 'sunil166', 'transgender', 'married', 'obc', 'hindu', '2021-09-25 21:56:14'),
(177, 'shg', 'reject', 'sunil167', 'male', 'married', 'minority', 'hindu', '2021-09-25 21:56:14'),
(178, 'mfg', 'approve', 'sunil168', 'male', 'unmarried', 'sc', 'christian', '2021-09-25 21:56:14'),
(179, 'mfg', 'approve', 'sunil169', 'female', 'unmarried', 'sc', 'christian', '2021-09-25 21:56:14'),
(180, 'shg', 'reject', 'sunil170', 'male', 'unmarried', 'sc', 'others', '2021-09-25 21:56:14'),
(181, 'jlg', 'approve', 'sunil171', 'female', 'unmarried', 'sc', 'others', '2021-09-25 21:56:14'),
(182, 'jlg', 'reject', 'sunil172', 'male', 'others', 'minority', 'others', '2021-09-25 21:56:14'),
(183, 'shg', 'approve', 'sunil173', 'female', 'married', 'sc', 'hindu', '2021-09-25 21:56:14'),
(184, 'self', 'approve', 'sunil174', 'female', 'married', 'sc', 'hindu', '2021-09-25 21:56:14'),
(185, 'self', 'approve', 'sunil175', 'female', 'married', 'sc', 'hindu', '2021-09-25 21:56:14'),
(186, 'mfg', 'pending', 'noman', 'mixed', 'others', 'obc', 'christian', '2021-09-26 21:10:24'),
(187, 'mfg', 'seek_con', 'sofia', 'transgender', 'unmarried', 'general', 'others', '2021-09-26 21:10:24'),
(188, 'shg', 'seek_con', 'jumla', 'mixed', 'others', 'general', 'christian', '2021-09-26 21:18:14'),
(189, 'mfg', 'reject', 'chadar_chona', 'mixed', 'others', 'general', 'others', '2021-09-26 21:18:14'),
(190, 'shg', 'pending', 'name1', 'transgender', 'unmarried', 'obc', 'muslim', '2020-09-09 13:53:26'),
(191, 'shg', 'reject', '', 'female', 'married', 'general', 'christian', '2019-09-04 13:53:26'),
(192, 'shg', 'pending', 'name2', 'transgender', 'unmarried', 'obc', 'christian', '2018-09-12 13:54:40'),
(193, 'shg', 'approve', 'name3', 'female', 'unmarried', 'general', 'muslim', '2020-09-09 13:54:40'),
(194, 'mfg', 'pending', 'name4', 'transgender', 'married', 'obc', 'others', '2017-09-06 13:54:40'),
(195, 'self', 'pending', 'name5', 'transgender', 'others', 'general', 'christian', '2016-09-08 13:54:40'),
(196, 'mfg', 'pending', '', 'female', 'married', 'sc', 'christian', '2015-09-17 13:54:40'),
(197, 'shg', 'pending', '', 'transgender', 'married', 'sc', 'muslim', '2014-09-11 13:54:40'),
(198, 'mfg', 'pending', 'name1', 'female', 'married', 'sc', 'muslim', '2020-09-16 13:05:32'),
(199, 'shg', 'reject', 'name2', 'transgender', 'unmarried', 'obc', 'christian', '2020-09-17 13:05:32'),
(200, 'jlg', 'pending', 'name3', 'transgender', 'others', 'general', 'christian', '2021-09-15 13:05:32'),
(201, 'shg', 'seek_con', 'name4', 'mixed', 'others', 'obc', 'muslim', '2021-09-15 13:05:32'),
(202, 'shg', 'reject', '', 'female', 'married', 'st', 'hindu', '2013-09-18 13:09:28'),
(203, 'jlg', 'pending', '', 'female', 'unmarried', 'sc', 'muslim', '2021-09-30 13:09:59'),
(204, 'shg', 'reject', 'name1', 'female', 'married', 'sc', 'hindu', '2020-09-17 22:29:04'),
(205, 'shg', 'pending', 'name2', 'transgender', 'unmarried', 'sc', 'muslim', '2020-09-09 22:29:04'),
(206, 'self', 'approve', '', 'female', 'married', 'general', 'christian', '2020-09-16 22:29:04'),
(207, 'shg', 'reject', '', 'female', 'others', 'general', 'christian', '2020-09-16 22:29:04'),
(208, 'shg', 'pending', '', 'transgender', 'others', 'general', 'others', '2020-09-16 22:29:04'),
(209, 'shg', 'approve', '', 'transgender', 'married', 'st', 'muslim', '2020-09-09 22:29:04'),
(210, 'mfg', 'pending', '', 'female', 'others', 'general', 'christian', '2020-09-30 22:29:04'),
(211, 'mfg', 'pending', '', 'female', 'married', 'sc', 'others', '2020-09-02 22:29:04'),
(212, 'jlg', 'pending', '', 'female', 'married', 'obc', 'hindu', '2020-09-09 22:29:04'),
(213, 'mfg', 'reject', '', 'male', 'married', 'obc', 'hindu', '2020-09-15 22:29:04'),
(214, 'mfg', 'pending', '', 'male', 'married', 'obc', 'hindu', '2020-09-07 22:29:04'),
(215, 'shg', 'pending', '', 'male', 'others', 'sc', 'muslim', '2021-09-30 22:34:33'),
(216, 'mfg', 'pending', '', 'transgender', 'unmarried', 'general', 'others', '2019-09-11 22:29:04'),
(217, 'shg', 'approve', '', 'female', 'unmarried', 'sc', 'muslim', '2019-09-18 22:29:04'),
(218, 'shg', 'pending', '', 'mixed', 'others', 'general', 'christian', '2019-09-11 22:29:04'),
(219, 'mfg', 'pending', '', 'transgender', 'unmarried', 'obc', 'hindu', '2018-09-13 22:29:04'),
(220, 'self', 'reject', '', 'female', 'married', 'sc', 'others', '2021-09-02 22:29:04'),
(221, 'shg', 'reject', '', 'female', 'married', 'sc', 'hindu', '2020-09-10 22:29:04'),
(222, 'self', 'reject', '', 'female', 'unmarried', 'general', 'muslim', '2020-09-16 22:29:04'),
(223, 'shg', 'reject', '', 'transgender', 'married', 'sc', 'hindu', '2020-09-12 22:29:04'),
(224, 'self', 'approve', 'sudo', 'female', 'married', 'sc', 'hindu', '2012-09-13 22:35:01'),
(225, 'self', 'approve', 'alpha', 'mixed', 'others', 'st', 'hindu', '2011-09-23 22:35:01'),
(226, 'self', 'approve', 'alpha', 'female', 'married', 'sc', 'hindu', '2021-10-01 00:46:37'),
(227, 'mfg', 'pending', '', 'female', 'married', 'obc', 'others', '2021-10-01 00:46:37'),
(228, 'shg', 'reject', '', 'female', 'unmarried', 'sc', 'hindu', '2021-10-01 00:46:37'),
(229, 'jlg', 'reject', '', 'female', 'married', 'obc', 'christian', '2021-10-01 00:46:37'),
(230, 'or', 'pending', '', 'transgender', 'others', 'sc', 'christian', '2021-10-01 00:46:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kyc_table`
--
ALTER TABLE `kyc_table`
  ADD PRIMARY KEY (`kyc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kyc_table`
--
ALTER TABLE `kyc_table`
  MODIFY `kyc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
