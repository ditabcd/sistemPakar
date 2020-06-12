-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 09:17 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sistempakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_diagnosa`
--

CREATE TABLE `tb_detail_diagnosa` (
  `id_detail_diagnosa` int(11) NOT NULL,
  `fk_gejala` varchar(5) NOT NULL,
  `nilai` int(1) NOT NULL,
  `fk_diagnosa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_diagnosa`
--

INSERT INTO `tb_detail_diagnosa` (`id_detail_diagnosa`, `fk_gejala`, `nilai`, `fk_diagnosa`) VALUES
(77, 'G001', 2, 35),
(78, 'G002', 2, 35),
(79, 'G003', 3, 35),
(80, 'G004', 2, 35),
(81, 'G005', 2, 35),
(82, 'G006', 1, 35),
(83, 'G007', 3, 35),
(84, 'G008', 3, 35),
(85, 'G009', 1, 35),
(86, 'G010', 2, 35),
(87, 'G011', 1, 35),
(88, 'G012', 2, 35),
(89, 'G013', 3, 35),
(90, 'G014', 1, 35),
(91, 'G015', 1, 35),
(92, 'G016', 1, 35),
(93, 'G017', 1, 35),
(94, 'G018', 2, 35),
(95, 'G019', 2, 35),
(248, 'G001', 2, 44),
(249, 'G002', 3, 44),
(250, 'G003', 3, 44),
(251, 'G004', 3, 44),
(252, 'G005', 3, 44),
(253, 'G006', 2, 44),
(254, 'G007', 2, 44),
(255, 'G008', 2, 44),
(256, 'G009', 2, 44),
(257, 'G010', 3, 44),
(258, 'G011', 2, 44),
(259, 'G012', 2, 44),
(260, 'G013', 2, 44),
(261, 'G014', 2, 44),
(262, 'G015', 2, 44),
(263, 'G016', 3, 44),
(264, 'G017', 3, 44),
(265, 'G018', 3, 44),
(266, 'G019', 2, 44);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_diagnosa_bc`
--

CREATE TABLE `tb_detail_diagnosa_bc` (
  `id_detail_diagnosa_bc` int(11) NOT NULL,
  `fk_gejala` varchar(5) NOT NULL,
  `nilai` tinyint(1) NOT NULL,
  `fk_diagnosa_bc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_training`
--

CREATE TABLE `tb_detail_training` (
  `id_detail_training` int(11) NOT NULL,
  `fk_training` int(11) NOT NULL,
  `fk_gejala` varchar(5) NOT NULL,
  `fk_nilai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_training`
--

INSERT INTO `tb_detail_training` (`id_detail_training`, `fk_training`, `fk_gejala`, `fk_nilai`) VALUES
(1, 1, 'G001', 1),
(2, 1, 'G002', 3),
(3, 1, 'G003', 3),
(4, 1, 'G004', 2),
(5, 1, 'G005', 2),
(6, 1, 'G006', 2),
(7, 1, 'G007', 1),
(8, 1, 'G008', 2),
(9, 1, 'G009', 1),
(10, 1, 'G010', 1),
(11, 1, 'G011', 1),
(12, 1, 'G012', 1),
(13, 1, 'G013', 2),
(14, 1, 'G014', 1),
(15, 1, 'G015', 1),
(16, 1, 'G016', 1),
(17, 1, 'G017', 1),
(18, 1, 'G018', 1),
(19, 1, 'G019', 1),
(20, 2, 'G001', 3),
(21, 2, 'G002', 2),
(22, 2, 'G003', 2),
(23, 2, 'G004', 1),
(24, 2, 'G005', 2),
(25, 2, 'G006', 1),
(26, 2, 'G007', 3),
(27, 2, 'G008', 2),
(28, 2, 'G009', 2),
(29, 2, 'G010', 2),
(30, 2, 'G011', 3),
(31, 2, 'G012', 2),
(32, 2, 'G013', 2),
(33, 2, 'G014', 2),
(34, 2, 'G015', 1),
(35, 2, 'G016', 1),
(36, 2, 'G017', 1),
(37, 2, 'G018', 1),
(38, 2, 'G019', 1),
(39, 3, 'G001', 2),
(40, 3, 'G002', 2),
(41, 3, 'G003', 2),
(42, 3, 'G004', 1),
(43, 3, 'G005', 3),
(44, 3, 'G006', 2),
(45, 3, 'G007', 3),
(46, 3, 'G008', 2),
(47, 3, 'G009', 1),
(48, 3, 'G010', 2),
(49, 3, 'G011', 1),
(50, 3, 'G012', 3),
(51, 3, 'G013', 3),
(52, 3, 'G014', 1),
(53, 3, 'G015', 2),
(54, 3, 'G016', 2),
(55, 3, 'G017', 2),
(56, 3, 'G018', 1),
(57, 3, 'G019', 2),
(58, 4, 'G001', 2),
(59, 4, 'G002', 2),
(60, 4, 'G003', 2),
(61, 4, 'G004', 2),
(62, 4, 'G005', 2),
(63, 4, 'G006', 1),
(64, 4, 'G007', 1),
(65, 4, 'G008', 2),
(66, 4, 'G009', 1),
(67, 4, 'G010', 2),
(68, 4, 'G011', 1),
(69, 4, 'G012', 1),
(70, 4, 'G013', 2),
(71, 4, 'G014', 1),
(72, 4, 'G015', 2),
(73, 4, 'G016', 1),
(74, 4, 'G017', 1),
(75, 4, 'G018', 1),
(76, 4, 'G019', 1),
(77, 5, 'G001', 2),
(78, 5, 'G002', 3),
(79, 5, 'G003', 3),
(80, 5, 'G004', 3),
(81, 5, 'G005', 2),
(82, 5, 'G006', 1),
(83, 5, 'G007', 2),
(84, 5, 'G008', 2),
(85, 5, 'G009', 2),
(86, 5, 'G010', 2),
(87, 5, 'G011', 1),
(88, 5, 'G012', 1),
(89, 5, 'G013', 2),
(90, 5, 'G014', 1),
(91, 5, 'G015', 1),
(92, 5, 'G016', 1),
(93, 5, 'G017', 1),
(94, 5, 'G018', 2),
(95, 5, 'G019', 1),
(96, 6, 'G001', 2),
(97, 6, 'G002', 3),
(98, 6, 'G003', 3),
(99, 6, 'G004', 3),
(100, 6, 'G005', 2),
(101, 6, 'G006', 2),
(102, 6, 'G007', 2),
(103, 6, 'G008', 2),
(104, 6, 'G009', 1),
(105, 6, 'G010', 2),
(106, 6, 'G011', 1),
(107, 6, 'G012', 2),
(108, 6, 'G013', 2),
(109, 6, 'G014', 2),
(110, 6, 'G015', 1),
(111, 6, 'G016', 1),
(112, 6, 'G017', 1),
(113, 6, 'G018', 1),
(114, 6, 'G019', 2),
(115, 7, 'G001', 2),
(116, 7, 'G002', 2),
(117, 7, 'G003', 3),
(118, 7, 'G004', 2),
(119, 7, 'G005', 1),
(120, 7, 'G006', 1),
(121, 7, 'G007', 1),
(122, 7, 'G008', 1),
(123, 7, 'G009', 2),
(124, 7, 'G010', 2),
(125, 7, 'G011', 1),
(126, 7, 'G012', 1),
(127, 7, 'G013', 2),
(128, 7, 'G014', 2),
(129, 7, 'G015', 1),
(130, 7, 'G016', 1),
(131, 7, 'G017', 1),
(132, 7, 'G018', 1),
(133, 7, 'G019', 1),
(134, 8, 'G001', 1),
(135, 8, 'G002', 1),
(136, 8, 'G003', 3),
(137, 8, 'G004', 3),
(138, 8, 'G005', 2),
(139, 8, 'G006', 1),
(140, 8, 'G007', 3),
(141, 8, 'G008', 1),
(142, 8, 'G009', 1),
(143, 8, 'G010', 2),
(144, 8, 'G011', 1),
(145, 8, 'G012', 1),
(146, 8, 'G013', 2),
(147, 8, 'G014', 1),
(148, 8, 'G015', 1),
(149, 8, 'G016', 1),
(150, 8, 'G017', 1),
(151, 8, 'G018', 1),
(152, 8, 'G019', 1),
(153, 9, 'G001', 1),
(154, 9, 'G002', 2),
(155, 9, 'G003', 3),
(156, 9, 'G004', 2),
(157, 9, 'G005', 2),
(158, 9, 'G006', 1),
(159, 9, 'G007', 2),
(160, 9, 'G008', 2),
(161, 9, 'G009', 1),
(162, 9, 'G010', 2),
(163, 9, 'G011', 2),
(164, 9, 'G012', 1),
(165, 9, 'G013', 3),
(166, 9, 'G014', 1),
(167, 9, 'G015', 1),
(168, 9, 'G016', 1),
(169, 9, 'G017', 1),
(170, 9, 'G018', 2),
(171, 9, 'G019', 1),
(172, 10, 'G001', 2),
(173, 10, 'G002', 2),
(174, 10, 'G003', 3),
(175, 10, 'G004', 1),
(176, 10, 'G005', 3),
(177, 10, 'G006', 1),
(178, 10, 'G007', 3),
(179, 10, 'G008', 2),
(180, 10, 'G009', 1),
(181, 10, 'G010', 2),
(182, 10, 'G011', 1),
(183, 10, 'G012', 1),
(184, 10, 'G013', 3),
(185, 10, 'G014', 2),
(186, 10, 'G015', 1),
(187, 10, 'G016', 1),
(188, 10, 'G017', 1),
(189, 10, 'G018', 1),
(190, 10, 'G019', 1),
(191, 11, 'G001', 1),
(192, 11, 'G002', 2),
(193, 11, 'G003', 1),
(194, 11, 'G004', 1),
(195, 11, 'G005', 2),
(196, 11, 'G006', 3),
(197, 11, 'G007', 3),
(198, 11, 'G008', 2),
(199, 11, 'G009', 1),
(200, 11, 'G010', 2),
(201, 11, 'G011', 1),
(202, 11, 'G012', 1),
(203, 11, 'G013', 2),
(204, 11, 'G014', 1),
(205, 11, 'G015', 1),
(206, 11, 'G016', 3),
(207, 11, 'G017', 3),
(208, 11, 'G018', 1),
(209, 11, 'G019', 1),
(210, 12, 'G001', 2),
(211, 12, 'G002', 1),
(212, 12, 'G003', 2),
(213, 12, 'G004', 2),
(214, 12, 'G005', 1),
(215, 12, 'G006', 2),
(216, 12, 'G007', 3),
(217, 12, 'G008', 3),
(218, 12, 'G009', 2),
(219, 12, 'G010', 2),
(220, 12, 'G011', 2),
(221, 12, 'G012', 1),
(222, 12, 'G013', 3),
(223, 12, 'G014', 2),
(224, 12, 'G015', 1),
(225, 12, 'G016', 2),
(226, 12, 'G017', 1),
(227, 12, 'G018', 1),
(228, 12, 'G019', 1),
(229, 13, 'G001', 2),
(230, 13, 'G002', 2),
(231, 13, 'G003', 2),
(232, 13, 'G004', 3),
(233, 13, 'G005', 2),
(234, 13, 'G006', 2),
(235, 13, 'G007', 2),
(236, 13, 'G008', 3),
(237, 13, 'G009', 2),
(238, 13, 'G010', 1),
(239, 13, 'G011', 2),
(240, 13, 'G012', 1),
(241, 13, 'G013', 2),
(242, 13, 'G014', 1),
(243, 13, 'G015', 2),
(244, 13, 'G016', 2),
(245, 13, 'G017', 1),
(246, 13, 'G018', 1),
(247, 13, 'G019', 1),
(248, 14, 'G001', 2),
(249, 14, 'G002', 1),
(250, 14, 'G003', 3),
(251, 14, 'G004', 2),
(252, 14, 'G005', 2),
(253, 14, 'G006', 1),
(254, 14, 'G007', 1),
(255, 14, 'G008', 2),
(256, 14, 'G009', 2),
(257, 14, 'G010', 1),
(258, 14, 'G011', 1),
(259, 14, 'G012', 3),
(260, 14, 'G013', 2),
(261, 14, 'G014', 2),
(262, 14, 'G015', 1),
(263, 14, 'G016', 1),
(264, 14, 'G017', 1),
(265, 14, 'G018', 1),
(266, 14, 'G019', 1),
(267, 15, 'G001', 1),
(268, 15, 'G002', 2),
(269, 15, 'G003', 3),
(270, 15, 'G004', 2),
(271, 15, 'G005', 2),
(272, 15, 'G006', 3),
(273, 15, 'G007', 3),
(274, 15, 'G008', 2),
(275, 15, 'G009', 1),
(276, 15, 'G010', 3),
(277, 15, 'G011', 1),
(278, 15, 'G012', 2),
(279, 15, 'G013', 3),
(280, 15, 'G014', 1),
(281, 15, 'G015', 1),
(282, 15, 'G016', 2),
(283, 15, 'G017', 2),
(284, 15, 'G018', 3),
(285, 15, 'G019', 1),
(286, 16, 'G001', 2),
(287, 16, 'G002', 1),
(288, 16, 'G003', 2),
(289, 16, 'G004', 2),
(290, 16, 'G005', 3),
(291, 16, 'G006', 3),
(292, 16, 'G007', 3),
(293, 16, 'G008', 1),
(294, 16, 'G009', 1),
(295, 16, 'G010', 3),
(296, 16, 'G011', 1),
(297, 16, 'G012', 3),
(298, 16, 'G013', 3),
(299, 16, 'G014', 1),
(300, 16, 'G015', 2),
(301, 16, 'G016', 2),
(302, 16, 'G017', 2),
(303, 16, 'G018', 1),
(304, 16, 'G019', 1),
(305, 17, 'G001', 1),
(306, 17, 'G002', 2),
(307, 17, 'G003', 1),
(308, 17, 'G004', 3),
(309, 17, 'G005', 2),
(310, 17, 'G006', 3),
(311, 17, 'G007', 1),
(312, 17, 'G008', 2),
(313, 17, 'G009', 1),
(314, 17, 'G010', 1),
(315, 17, 'G011', 2),
(316, 17, 'G012', 1),
(317, 17, 'G013', 2),
(318, 17, 'G014', 1),
(319, 17, 'G015', 2),
(320, 17, 'G016', 1),
(321, 17, 'G017', 2),
(322, 17, 'G018', 1),
(323, 17, 'G019', 3),
(324, 18, 'G001', 1),
(325, 18, 'G002', 2),
(326, 18, 'G003', 3),
(327, 18, 'G004', 2),
(328, 18, 'G005', 2),
(329, 18, 'G006', 1),
(330, 18, 'G007', 3),
(331, 18, 'G008', 3),
(332, 18, 'G009', 1),
(333, 18, 'G010', 3),
(334, 18, 'G011', 1),
(335, 18, 'G012', 1),
(336, 18, 'G013', 3),
(337, 18, 'G014', 1),
(338, 18, 'G015', 3),
(339, 18, 'G016', 1),
(340, 18, 'G017', 1),
(341, 18, 'G018', 3),
(342, 18, 'G019', 2),
(343, 19, 'G001', 2),
(344, 19, 'G002', 2),
(345, 19, 'G003', 2),
(346, 19, 'G004', 3),
(347, 19, 'G005', 2),
(348, 19, 'G006', 1),
(349, 19, 'G007', 3),
(350, 19, 'G008', 1),
(351, 19, 'G009', 1),
(352, 19, 'G010', 1),
(353, 19, 'G011', 2),
(354, 19, 'G012', 3),
(355, 19, 'G013', 3),
(356, 19, 'G014', 2),
(357, 19, 'G015', 1),
(358, 19, 'G016', 1),
(359, 19, 'G017', 1),
(360, 19, 'G018', 1),
(361, 19, 'G019', 1),
(362, 20, 'G001', 1),
(363, 20, 'G002', 2),
(364, 20, 'G003', 3),
(365, 20, 'G004', 3),
(366, 20, 'G005', 2),
(367, 20, 'G006', 1),
(368, 20, 'G007', 1),
(369, 20, 'G008', 2),
(370, 20, 'G009', 1),
(371, 20, 'G010', 2),
(372, 20, 'G011', 3),
(373, 20, 'G012', 3),
(374, 20, 'G013', 3),
(375, 20, 'G014', 1),
(376, 20, 'G015', 1),
(377, 20, 'G016', 1),
(378, 20, 'G017', 1),
(379, 20, 'G018', 1),
(380, 20, 'G019', 1),
(381, 21, 'G001', 2),
(382, 21, 'G002', 3),
(383, 21, 'G003', 1),
(384, 21, 'G004', 3),
(385, 21, 'G005', 1),
(386, 21, 'G006', 1),
(387, 21, 'G007', 3),
(388, 21, 'G008', 3),
(389, 21, 'G009', 1),
(390, 21, 'G010', 2),
(391, 21, 'G011', 1),
(392, 21, 'G012', 2),
(393, 21, 'G013', 3),
(394, 21, 'G014', 1),
(395, 21, 'G015', 3),
(396, 21, 'G016', 3),
(397, 21, 'G017', 3),
(398, 21, 'G018', 3),
(399, 21, 'G019', 3),
(400, 22, 'G001', 2),
(401, 22, 'G002', 2),
(402, 22, 'G003', 3),
(403, 22, 'G004', 2),
(404, 22, 'G005', 2),
(405, 22, 'G006', 2),
(406, 22, 'G007', 3),
(407, 22, 'G008', 3),
(408, 22, 'G009', 1),
(409, 22, 'G010', 1),
(410, 22, 'G011', 3),
(411, 22, 'G012', 1),
(412, 22, 'G013', 3),
(413, 22, 'G014', 1),
(414, 22, 'G015', 1),
(415, 22, 'G016', 1),
(416, 22, 'G017', 1),
(417, 22, 'G018', 3),
(418, 22, 'G019', 2),
(419, 23, 'G001', 2),
(420, 23, 'G002', 2),
(421, 23, 'G003', 3),
(422, 23, 'G004', 3),
(423, 23, 'G005', 2),
(424, 23, 'G006', 1),
(425, 23, 'G007', 2),
(426, 23, 'G008', 2),
(427, 23, 'G009', 1),
(428, 23, 'G010', 2),
(429, 23, 'G011', 1),
(430, 23, 'G012', 2),
(431, 23, 'G013', 2),
(432, 23, 'G014', 2),
(433, 23, 'G015', 1),
(434, 23, 'G016', 2),
(435, 23, 'G017', 1),
(436, 23, 'G018', 1),
(437, 23, 'G019', 1),
(438, 24, 'G001', 2),
(439, 24, 'G002', 3),
(440, 24, 'G003', 3),
(441, 24, 'G004', 2),
(442, 24, 'G005', 1),
(443, 24, 'G006', 3),
(444, 24, 'G007', 1),
(445, 24, 'G008', 2),
(446, 24, 'G009', 1),
(447, 24, 'G010', 1),
(448, 24, 'G011', 2),
(449, 24, 'G012', 1),
(450, 24, 'G013', 2),
(451, 24, 'G014', 1),
(452, 24, 'G015', 1),
(453, 24, 'G016', 3),
(454, 24, 'G017', 3),
(455, 24, 'G018', 3),
(456, 24, 'G019', 3),
(457, 25, 'G001', 2),
(458, 25, 'G002', 3),
(459, 25, 'G003', 3),
(460, 25, 'G004', 3),
(461, 25, 'G005', 2),
(462, 25, 'G006', 1),
(463, 25, 'G007', 2),
(464, 25, 'G008', 3),
(465, 25, 'G009', 1),
(466, 25, 'G010', 1),
(467, 25, 'G011', 2),
(468, 25, 'G012', 1),
(469, 25, 'G013', 3),
(470, 25, 'G014', 1),
(471, 25, 'G015', 1),
(472, 25, 'G016', 1),
(473, 25, 'G017', 1),
(474, 25, 'G018', 1),
(475, 25, 'G019', 1),
(476, 26, 'G001', 2),
(477, 26, 'G002', 2),
(478, 26, 'G003', 3),
(479, 26, 'G004', 3),
(480, 26, 'G005', 2),
(481, 26, 'G006', 1),
(482, 26, 'G007', 2),
(483, 26, 'G008', 2),
(484, 26, 'G009', 1),
(485, 26, 'G010', 2),
(486, 26, 'G011', 1),
(487, 26, 'G012', 1),
(488, 26, 'G013', 2),
(489, 26, 'G014', 2),
(490, 26, 'G015', 1),
(491, 26, 'G016', 1),
(492, 26, 'G017', 1),
(493, 26, 'G018', 1),
(494, 26, 'G019', 1),
(495, 27, 'G001', 2),
(496, 27, 'G002', 1),
(497, 27, 'G003', 3),
(498, 27, 'G004', 1),
(499, 27, 'G005', 2),
(500, 27, 'G006', 3),
(501, 27, 'G007', 3),
(502, 27, 'G008', 2),
(503, 27, 'G009', 1),
(504, 27, 'G010', 2),
(505, 27, 'G011', 3),
(506, 27, 'G012', 1),
(507, 27, 'G013', 3),
(508, 27, 'G014', 2),
(509, 27, 'G015', 1),
(510, 27, 'G016', 3),
(511, 27, 'G017', 3),
(512, 27, 'G018', 3),
(513, 27, 'G019', 3),
(514, 28, 'G001', 3),
(515, 28, 'G002', 2),
(516, 28, 'G003', 3),
(517, 28, 'G004', 2),
(518, 28, 'G005', 2),
(519, 28, 'G006', 3),
(520, 28, 'G007', 3),
(521, 28, 'G008', 1),
(522, 28, 'G009', 3),
(523, 28, 'G010', 3),
(524, 28, 'G011', 1),
(525, 28, 'G012', 1),
(526, 28, 'G013', 3),
(527, 28, 'G014', 1),
(528, 28, 'G015', 1),
(529, 28, 'G016', 3),
(530, 28, 'G017', 2),
(531, 28, 'G018', 1),
(532, 28, 'G019', 1),
(533, 29, 'G001', 2),
(534, 29, 'G002', 2),
(535, 29, 'G003', 3),
(536, 29, 'G004', 3),
(537, 29, 'G005', 2),
(538, 29, 'G006', 1),
(539, 29, 'G007', 1),
(540, 29, 'G008', 1),
(541, 29, 'G009', 1),
(542, 29, 'G010', 1),
(543, 29, 'G011', 1),
(544, 29, 'G012', 2),
(545, 29, 'G013', 1),
(546, 29, 'G014', 2),
(547, 29, 'G015', 1),
(548, 29, 'G016', 1),
(549, 29, 'G017', 1),
(550, 29, 'G018', 1),
(551, 29, 'G019', 1),
(552, 30, 'G001', 2),
(553, 30, 'G002', 2),
(554, 30, 'G003', 2),
(555, 30, 'G004', 2),
(556, 30, 'G005', 2),
(557, 30, 'G006', 1),
(558, 30, 'G007', 3),
(559, 30, 'G008', 1),
(560, 30, 'G009', 1),
(561, 30, 'G010', 2),
(562, 30, 'G011', 3),
(563, 30, 'G012', 1),
(564, 30, 'G013', 3),
(565, 30, 'G014', 1),
(566, 30, 'G015', 2),
(567, 30, 'G016', 1),
(568, 30, 'G017', 1),
(569, 30, 'G018', 1),
(570, 30, 'G019', 3),
(571, 31, 'G001', 2),
(572, 31, 'G002', 2),
(573, 31, 'G003', 3),
(574, 31, 'G004', 3),
(575, 31, 'G005', 2),
(576, 31, 'G006', 2),
(577, 31, 'G007', 1),
(578, 31, 'G008', 2),
(579, 31, 'G009', 1),
(580, 31, 'G010', 1),
(581, 31, 'G011', 3),
(582, 31, 'G012', 1),
(583, 31, 'G013', 1),
(584, 31, 'G014', 2),
(585, 31, 'G015', 1),
(586, 31, 'G016', 2),
(587, 31, 'G017', 1),
(588, 31, 'G018', 3),
(589, 31, 'G019', 1),
(590, 32, 'G001', 1),
(591, 32, 'G002', 2),
(592, 32, 'G003', 3),
(593, 32, 'G004', 2),
(594, 32, 'G005', 1),
(595, 32, 'G006', 1),
(596, 32, 'G007', 3),
(597, 32, 'G008', 2),
(598, 32, 'G009', 1),
(599, 32, 'G010', 3),
(600, 32, 'G011', 1),
(601, 32, 'G012', 2),
(602, 32, 'G013', 2),
(603, 32, 'G014', 1),
(604, 32, 'G015', 1),
(605, 32, 'G016', 1),
(606, 32, 'G017', 1),
(607, 32, 'G018', 1),
(608, 32, 'G019', 1),
(609, 33, 'G001', 2),
(610, 33, 'G002', 2),
(611, 33, 'G003', 3),
(612, 33, 'G004', 3),
(613, 33, 'G005', 2),
(614, 33, 'G006', 2),
(615, 33, 'G007', 3),
(616, 33, 'G008', 1),
(617, 33, 'G009', 1),
(618, 33, 'G010', 2),
(619, 33, 'G011', 1),
(620, 33, 'G012', 1),
(621, 33, 'G013', 3),
(622, 33, 'G014', 1),
(623, 33, 'G015', 1),
(624, 33, 'G016', 1),
(625, 33, 'G017', 1),
(626, 33, 'G018', 1),
(627, 33, 'G019', 1),
(628, 34, 'G001', 1),
(629, 34, 'G002', 2),
(630, 34, 'G003', 2),
(631, 34, 'G004', 2),
(632, 34, 'G005', 2),
(633, 34, 'G006', 2),
(634, 34, 'G007', 3),
(635, 34, 'G008', 3),
(636, 34, 'G009', 1),
(637, 34, 'G010', 2),
(638, 34, 'G011', 1),
(639, 34, 'G012', 1),
(640, 34, 'G013', 3),
(641, 34, 'G014', 1),
(642, 34, 'G015', 1),
(643, 34, 'G016', 1),
(644, 34, 'G017', 1),
(645, 34, 'G018', 2),
(646, 34, 'G019', 1),
(647, 35, 'G001', 2),
(648, 35, 'G002', 2),
(649, 35, 'G003', 1),
(650, 35, 'G004', 1),
(651, 35, 'G005', 2),
(652, 35, 'G006', 1),
(653, 35, 'G007', 1),
(654, 35, 'G008', 2),
(655, 35, 'G009', 3),
(656, 35, 'G010', 1),
(657, 35, 'G011', 3),
(658, 35, 'G012', 3),
(659, 35, 'G013', 1),
(660, 35, 'G014', 3),
(661, 35, 'G015', 1),
(662, 35, 'G016', 2),
(663, 35, 'G017', 2),
(664, 35, 'G018', 3),
(665, 35, 'G019', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_diagnosa`
--

CREATE TABLE `tb_diagnosa` (
  `id_diagnosa` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(3) DEFAULT NULL,
  `hasil_diagnosa_nbc` double NOT NULL,
  `fk_jeniskulit` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_diagnosa`
--

INSERT INTO `tb_diagnosa` (`id_diagnosa`, `tanggal`, `id_user`, `hasil_diagnosa_nbc`, `fk_jeniskulit`) VALUES
(35, '2020-05-21', NULL, 0.0000011551310308278, 'J004'),
(44, '2020-06-12', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_diagnosa_bc`
--

CREATE TABLE `tb_diagnosa_bc` (
  `id_diagnosa_bc` int(11) NOT NULL,
  `fk_diagnosa` int(11) NOT NULL,
  `fk_jeniskulit` varchar(4) NOT NULL,
  `hasil` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_diagnosa_bc`
--

INSERT INTO `tb_diagnosa_bc` (`id_diagnosa_bc`, `fk_diagnosa`, `fk_jeniskulit`, `hasil`) VALUES
(1, 35, 'J004', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` varchar(5) NOT NULL,
  `gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id_gejala`, `gejala`) VALUES
('G001', 'Tidak Berminyak'),
('G002', 'Segar dan halus'),
('G003', 'Bahan-bahan kosmetik mudah menempel di kulit'),
('G004', 'Terlihat sehat'),
('G005', 'Tidak berjerawat'),
('G006', 'Mudah mengalami masalah kosmetik'),
('G007', 'Pori-pori kulit besar terutama di aera hidung, dagu dan pipi'),
('G008', 'Kulit wajah terlihat mengkilat'),
('G009', 'Kulit terlihat kering sekali'),
('G010', 'Pori-pori halus'),
('G011', 'Tekstur kulit wajah tipis'),
('G012', 'Cepat menampakkan kerutan-kerutan'),
('G013', 'Sebagian wajah terlihat berminyak'),
('G014', 'Sebagian wajah terlihat kering'),
('G015', 'Susah mendapatkan polesan kosmetik yg sempurna'),
('G016', 'Mudah alergi'),
('G017', 'Mudah iritasi dan terluka'),
('G018', 'Kulit mudah terlihat kemerahan'),
('G019', 'Gatal jika terkena sinar matahari');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jeniskulit`
--

CREATE TABLE `tb_jeniskulit` (
  `id_jeniskulit` varchar(4) NOT NULL,
  `jenis_kulit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jeniskulit`
--

INSERT INTO `tb_jeniskulit` (`id_jeniskulit`, `jenis_kulit`) VALUES
('J001', 'Normal'),
('J002', 'Berminyak'),
('J003', 'Kering'),
('J004', 'Kombinasi'),
('J005', 'Sensitif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(3) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `level`) VALUES
(1, 'admin'),
(2, 'pengunjung');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rule`
--

CREATE TABLE `tb_rule` (
  `id_rule` int(11) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `hasil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rule`
--

INSERT INTO `tb_rule` (`id_rule`, `kondisi`, `hasil`) VALUES
(1, 'G001,G002', 'J001'),
(2, 'G003,G002', 'J001'),
(3, 'G004,G003', 'J001'),
(4, 'G006,G005', 'J001'),
(5, 'G007,G008', 'J002'),
(6, 'G008', 'J002'),
(7, 'G015', 'J002'),
(8, 'G009', 'J003'),
(9, 'G010,G011', 'J003'),
(10, 'G012,G019', 'J003'),
(11, 'G009', 'J003'),
(12, 'G007,G008', 'J004'),
(13, 'G013,G014', 'J004'),
(14, 'G007,G015', 'J004'),
(15, 'G019,G017', 'J005'),
(16, 'G018,G016', 'J005'),
(17, 'G017,G015', 'J005');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tips`
--

CREATE TABLE `tb_tips` (
  `id_tips` varchar(5) NOT NULL,
  `id_jeniskulit` varchar(5) NOT NULL,
  `deskripsi_tips` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_training`
--

CREATE TABLE `tb_training` (
  `id_training` int(11) NOT NULL,
  `id_pasien` varchar(20) NOT NULL,
  `jenis_kulit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_training`
--

INSERT INTO `tb_training` (`id_training`, `id_pasien`, `jenis_kulit`) VALUES
(1, 'P1', 'J001'),
(2, 'P2', 'J004'),
(3, 'P3', 'J002'),
(4, 'P4', 'J001'),
(5, 'P5', 'J001'),
(6, 'P6', 'J001'),
(7, 'P7', 'J001'),
(8, 'P8', 'J001'),
(9, 'P9', 'J004'),
(10, 'P10', 'J004'),
(11, 'P11', 'J005'),
(12, 'P12', 'J002'),
(13, 'P13', 'J001'),
(14, 'P14', 'J004'),
(15, 'P15', 'J005'),
(16, 'P16', 'J002'),
(17, 'P17', 'J003'),
(18, 'P18', 'J004'),
(19, 'P19', 'J004'),
(20, 'P20', 'J001'),
(21, 'P21', 'J005'),
(22, 'P22', 'J002'),
(23, 'P23', 'J001'),
(24, 'P24', 'J005'),
(25, 'P25', 'J001'),
(26, 'P26', 'J001'),
(27, 'P27', 'J005'),
(28, 'P28', 'J003'),
(29, 'P29', 'J001'),
(30, 'P30', 'J004'),
(31, 'P31', 'J001'),
(32, 'P32', 'J001'),
(33, 'P33', 'J001'),
(34, 'P34', 'J004'),
(35, 'P35', 'J003');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(3) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `id_level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `id_level`) VALUES
(1, 'dita', 'dita', 2),
(2, 'ditaw', 'ditaaa', 2),
(3, 'dita', 'd1t4', 2),
(4, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_diagnosa`
--
ALTER TABLE `tb_detail_diagnosa`
  ADD PRIMARY KEY (`id_detail_diagnosa`),
  ADD KEY `fk_diagnosa` (`fk_diagnosa`),
  ADD KEY `fk_gejala` (`fk_gejala`) USING BTREE;

--
-- Indexes for table `tb_detail_diagnosa_bc`
--
ALTER TABLE `tb_detail_diagnosa_bc`
  ADD PRIMARY KEY (`id_detail_diagnosa_bc`),
  ADD KEY `fk_diagnosa` (`fk_diagnosa_bc`),
  ADD KEY `fk_gejala` (`fk_gejala`) USING BTREE;

--
-- Indexes for table `tb_detail_training`
--
ALTER TABLE `tb_detail_training`
  ADD PRIMARY KEY (`id_detail_training`),
  ADD KEY `fk_training` (`fk_training`);

--
-- Indexes for table `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`),
  ADD KEY `fk_iduser` (`id_user`),
  ADD KEY `fk_penyakit` (`fk_jeniskulit`);

--
-- Indexes for table `tb_diagnosa_bc`
--
ALTER TABLE `tb_diagnosa_bc`
  ADD PRIMARY KEY (`id_diagnosa_bc`),
  ADD KEY `fk_diagnosa` (`fk_diagnosa`),
  ADD KEY `fk_penyakit` (`fk_jeniskulit`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `tb_jeniskulit`
--
ALTER TABLE `tb_jeniskulit`
  ADD PRIMARY KEY (`id_jeniskulit`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_rule`
--
ALTER TABLE `tb_rule`
  ADD PRIMARY KEY (`id_rule`);

--
-- Indexes for table `tb_tips`
--
ALTER TABLE `tb_tips`
  ADD PRIMARY KEY (`id_tips`),
  ADD KEY `fk_jeniskulit` (`id_jeniskulit`);

--
-- Indexes for table `tb_training`
--
ALTER TABLE `tb_training`
  ADD PRIMARY KEY (`id_training`),
  ADD KEY `fk_jenis_kulit` (`jenis_kulit`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_diagnosa`
--
ALTER TABLE `tb_detail_diagnosa`
  MODIFY `id_detail_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

--
-- AUTO_INCREMENT for table `tb_detail_diagnosa_bc`
--
ALTER TABLE `tb_detail_diagnosa_bc`
  MODIFY `id_detail_diagnosa_bc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  MODIFY `id_diagnosa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_diagnosa_bc`
--
ALTER TABLE `tb_diagnosa_bc`
  MODIFY `id_diagnosa_bc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_rule`
--
ALTER TABLE `tb_rule`
  MODIFY `id_rule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_training`
--
ALTER TABLE `tb_training`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_diagnosa`
--
ALTER TABLE `tb_detail_diagnosa`
  ADD CONSTRAINT `fk_diagnosa` FOREIGN KEY (`fk_diagnosa`) REFERENCES `tb_diagnosa` (`id_diagnosa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_gejala` FOREIGN KEY (`fk_gejala`) REFERENCES `tb_gejala` (`id_gejala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_detail_diagnosa_bc`
--
ALTER TABLE `tb_detail_diagnosa_bc`
  ADD CONSTRAINT `tb_detail_diagnosa_bc_ibfk_1` FOREIGN KEY (`fk_diagnosa_bc`) REFERENCES `tb_diagnosa_bc` (`id_diagnosa_bc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_diagnosa_bc_ibfk_2` FOREIGN KEY (`fk_gejala`) REFERENCES `tb_gejala` (`id_gejala`);

--
-- Constraints for table `tb_detail_training`
--
ALTER TABLE `tb_detail_training`
  ADD CONSTRAINT `fk_training` FOREIGN KEY (`fk_training`) REFERENCES `tb_training` (`id_training`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  ADD CONSTRAINT `fk_iduser` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_diagnosa_ibfk_1` FOREIGN KEY (`fk_jeniskulit`) REFERENCES `tb_jeniskulit` (`id_jeniskulit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_diagnosa_bc`
--
ALTER TABLE `tb_diagnosa_bc`
  ADD CONSTRAINT `tb_diagnosa_bc_ibfk_1` FOREIGN KEY (`fk_diagnosa`) REFERENCES `tb_diagnosa` (`id_diagnosa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_diagnosa_bc_ibfk_2` FOREIGN KEY (`fk_jeniskulit`) REFERENCES `tb_jeniskulit` (`id_jeniskulit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_tips`
--
ALTER TABLE `tb_tips`
  ADD CONSTRAINT `fk_jeniskulit` FOREIGN KEY (`id_jeniskulit`) REFERENCES `tb_jeniskulit` (`id_jeniskulit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_training`
--
ALTER TABLE `tb_training`
  ADD CONSTRAINT `fk_jenis_kulit` FOREIGN KEY (`jenis_kulit`) REFERENCES `tb_jeniskulit` (`id_jeniskulit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `fk_level` FOREIGN KEY (`id_level`) REFERENCES `tb_level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
