-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 04:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kokeru`
--

-- --------------------------------------------------------

--
-- Table structure for table `cs`
--

CREATE TABLE `cs` (
  `id_cs` int(4) NOT NULL,
  `nama_cs` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` longtext NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs`
--

INSERT INTO `cs` (`id_cs`, `nama_cs`, `email`, `password`, `alamat`, `no_telp`) VALUES
(1, 'Bayu Susilo Aji', 'bayu@gmail.com', 'a430e06de5ce438d499c2e4063d60fd6', 'Jl. Konoha Timur 2 No. 11', '081356765553'),
(2, 'Bambang Ariyadi', 'bambang@gmail.com', 'a9711cbb2e3c2d5fc97a63e45bbe5076', 'Jl. Konoha barat 1 No.3', '081987678434'),
(3, 'Muchammad Sajiwo Santoso', 'carla123', '123carla', 'Jl. Merbabu Dalam 7 No.7', '081444555666'),
(4, 'Yanti Mustikawati', 'rehan123', '123rehan', 'Jl. Among Utara 3 No.1', '081555666777'),
(5, 'Satrio Widodo', 'raihana123', '123raihana', 'Jl. Luxvile Selatan 8 No.8', '089765434442'),
(6, 'Ranjani Ilyasviel Vorn', 'ranjani@gmail.com', 'ranjani123', 'Jl. Melati', '08139854743'),
(7, 'Kartika Dwi Ratnasari', 'kartika@gmail.com', '123kartika', 'Jl.Mawar', '08130539454'),
(8, 'Danang Suprianto', 'danang@gmail.com', 'danang@gmail.com', 'jl.Kembang', '0813853748231'),
(9, 'Agus Budi Cahyono', 'cahyono@gmail.com', 'cahyono123', 'Jl.Sinar Mas', '018248373534'),
(10, 'Andy Sitohang', 'andy@gmail.com', '123andy', 'Jl.Maydani', '0813753284235');

-- --------------------------------------------------------

--
-- Table structure for table `cs_ruang`
--

CREATE TABLE `cs_ruang` (
  `id_cs_ruang` int(4) NOT NULL,
  `id_ruang` int(4) NOT NULL,
  `nama_ruang` varchar(20) NOT NULL,
  `id_cs` int(4) NOT NULL,
  `nama_cs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_ruang`
--

INSERT INTO `cs_ruang` (`id_cs_ruang`, `id_ruang`, `nama_ruang`, `id_cs`, `nama_cs`) VALUES
(2, 2, 'A101', 9, 'Agus Budi Cahyono'),
(3, 1, 'A102', 10, 'Andy Sitohang'),
(4, 3, 'B203', 2, 'Bambang Ariyadi'),
(5, 8, 'B302', 1, 'Bayu Susilo Aji'),
(6, 4, 'C101', 8, 'Danang Suprianto'),
(7, 9, 'C201', 7, 'Kartika Dwi Ratnasari'),
(8, 5, 'D102', 3, 'Mucahammad Sajiwo Santoso'),
(9, 10, 'D202', 6, 'Ranjani Ilyasviel Vorn'),
(10, 6, 'E102', 5, 'Satrio Widodo'),
(11, 11, 'E302', 4, 'Yanti Mustikawati');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(10) NOT NULL,
  `nama_ruang` varchar(20) NOT NULL,
  `nama_cs` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `nama_ruang`, `nama_cs`, `status`, `tanggal`) VALUES
(91, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-30'),
(92, 'A102', 'Andy Sitohang', 'Sudah Dibersihkan', '2020-12-30'),
(93, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-30'),
(94, 'B302', 'Bayu Susilo A', 'Sudah Dibersihkan', '2020-12-30'),
(95, 'C101', 'Danang Suprianto', 'Belum Dibersihkan', '2020-12-30'),
(96, 'C201', 'Kartika Dwi R', 'Sudah Dibersihkan', '2020-12-30'),
(97, 'D102', 'M Sajiwo Santoso', 'Belum Dibersihkan', '2020-12-30'),
(98, 'D202', 'Ranjani Ilyasviel V', 'Sudah Dibersihkan', '2020-12-30'),
(99, 'E102', 'Satrio Widodo', 'Belum Dibersihkan', '2020-12-30'),
(100, 'E302', 'Yanti Mustikawati', 'Sudah Dibersihkan', '2020-12-30'),
(121, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-29'),
(122, 'A102', 'Andy Sitohang', 'Sudah Dibersihkan', '2020-12-29'),
(123, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-29'),
(124, 'B302', 'Bayu Susilo A', 'Sudah Dibersihkan', '2020-12-29'),
(125, 'C101', 'Danang Suprianto', 'Belum Dibersihkan', '2020-12-29'),
(126, 'C201', 'Kartika Dwi R', 'Sudah Dibersihkan', '2020-12-29'),
(127, 'D102', 'M Sajiwo Santoso', 'Belum Dibersihkan', '2020-12-29'),
(128, 'D202', 'Ranjani Ilyasviel V', 'Sudah Dibersihkan', '2020-12-29'),
(129, 'E102', 'Satrio Widodo', 'Belum Dibersihkan', '2020-12-29'),
(130, 'E302', 'Yanti Mustikawati', 'Sudah Dibersihkan', '2020-12-29'),
(136, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-28'),
(137, 'A102', 'Andy Sitohang', 'Belum Dibersihkan', '2020-12-28'),
(138, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-28'),
(139, 'B302', 'Bayu Susilo A', 'Belum Dibersihkan', '2020-12-28'),
(140, 'C101', 'Danang Suprianto', 'Sudah Dibersihkan', '2020-12-28'),
(141, 'C201', 'Kartika Dwi R', 'Belum Dibersihkan', '2020-12-28'),
(142, 'D102', 'M Sajiwo Santoso', 'Sudah Dibersihkan', '2020-12-28'),
(143, 'D202', 'Ranjani Ilyasviel V', 'Belum Dibersihkan', '2020-12-28'),
(144, 'E102', 'Satrio Widodo', 'Sudah Dibersihkan', '2020-12-28'),
(145, 'E302', 'Yanti Mustikawati', 'Belum Dibersihkan', '2020-12-28'),
(151, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-27'),
(152, 'A102', 'Andy Sitohang', 'Sudah Dibersihkan', '2020-12-27'),
(153, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-27'),
(154, 'B302', 'Bayu Susilo A', 'Sudah Dibersihkan', '2020-12-27'),
(155, 'C101', 'Danang Suprianto', 'Belum Dibersihkan', '2020-12-27'),
(156, 'C201', 'Kartika Dwi R', 'Sudah Dibersihkan', '2020-12-27'),
(157, 'D102', 'M Sajiwo Santoso', 'Belum Dibersihkan', '2020-12-27'),
(158, 'D202', 'Ranjani Ilyasviel V', 'Sudah Dibersihkan', '2020-12-27'),
(159, 'E102', 'Satrio Widodo', 'Belum Dibersihkan', '2020-12-27'),
(160, 'E302', 'Yanti Mustikawati', 'Sudah Dibersihkan', '2020-12-27'),
(166, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-26'),
(167, 'A102', 'Andy Sitohang', 'Belum Dibersihkan', '2020-12-26'),
(168, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-26'),
(169, 'B302', 'Bayu Susilo A', 'Belum Dibersihkan', '2020-12-26'),
(170, 'C101', 'Danang Suprianto', 'Sudah Dibersihkan', '2020-12-26'),
(171, 'C201', 'Kartika Dwi R', 'Belum Dibersihkan', '2020-12-26'),
(172, 'D102', 'M Sajiwo Santoso', 'Sudah Dibersihkan', '2020-12-26'),
(173, 'D202', 'Ranjani Ilyasviel V', 'Belum Dibersihkan', '2020-12-26'),
(174, 'E102', 'Satrio Widodo', 'Sudah Dibersihkan', '2020-12-26'),
(175, 'E302', 'Yanti Mustikawati', 'Belum Dibersihkan', '2020-12-26'),
(181, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-25'),
(182, 'A102', 'Andy Sitohang', 'Sudah Dibersihkan', '2020-12-25'),
(183, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-25'),
(184, 'B302', 'Bayu Susilo A', 'Sudah Dibersihkan', '2020-12-25'),
(185, 'C101', 'Danang Suprianto', 'Belum Dibersihkan', '2020-12-25'),
(186, 'C201', 'Kartika Dwi R', 'Sudah Dibersihkan', '2020-12-25'),
(187, 'D102', 'M Sajiwo Santoso', 'Belum Dibersihkan', '2020-12-25'),
(188, 'D202', 'Ranjani Ilyasviel V', 'Sudah Dibersihkan', '2020-12-25'),
(189, 'E102', 'Satrio Widodo', 'Belum Dibersihkan', '2020-12-25'),
(190, 'E302', 'Yanti Mustikawati', 'Sudah Dibersihkan', '2020-12-25'),
(211, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-24'),
(212, 'A102', 'Andy Sitohang', 'Sudah Dibersihkan', '2020-12-24'),
(213, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-24'),
(214, 'B302', 'Bayu Susilo A', 'Sudah Dibersihkan', '2020-12-24'),
(215, 'C101', 'Danang Suprianto', 'Belum Dibersihkan', '2020-12-24'),
(216, 'C201', 'Kartika Dwi R', 'Sudah Dibersihkan', '2020-12-24'),
(217, 'D102', 'M Sajiwo Santoso', 'Belum Dibersihkan', '2020-12-24'),
(218, 'D202', 'Ranjani Ilyasviel V', 'Sudah Dibersihkan', '2020-12-24'),
(219, 'E102', 'Satrio Widodo', 'Belum Dibersihkan', '2020-12-24'),
(220, 'E302', 'Yanti Mustikawati', 'Sudah Dibersihkan', '2020-12-24'),
(226, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-23'),
(227, 'A102', 'Andy Sitohang', 'Belum Dibersihkan', '2020-12-23'),
(228, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-23'),
(229, 'B302', 'Bayu Susilo A', 'Belum Dibersihkan', '2020-12-23'),
(230, 'C101', 'Danang Suprianto', 'Sudah Dibersihkan', '2020-12-23'),
(231, 'C201', 'Kartika Dwi R', 'Belum Dibersihkan', '2020-12-23'),
(232, 'D102', 'M Sajiwo Santoso', 'Sudah Dibersihkan', '2020-12-23'),
(233, 'D202', 'Ranjani Ilyasviel V', 'Belum Dibersihkan', '2020-12-23'),
(234, 'E102', 'Satrio Widodo', 'Sudah Dibersihkan', '2020-12-23'),
(235, 'E302', 'Yanti Mustikawati', 'Belum Dibersihkan', '2020-12-23'),
(241, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-22'),
(242, 'A102', 'Andy Sitohang', 'Sudah Dibersihkan', '2020-12-22'),
(243, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-22'),
(244, 'B302', 'Bayu Susilo A', 'Sudah Dibersihkan', '2020-12-22'),
(245, 'C101', 'Danang Suprianto', 'Belum Dibersihkan', '2020-12-22'),
(246, 'C201', 'Kartika Dwi R', 'Sudah Dibersihkan', '2020-12-22'),
(247, 'D102', 'M Sajiwo Santoso', 'Belum Dibersihkan', '2020-12-22'),
(248, 'D202', 'Ranjani Ilyasviel V', 'Sudah Dibersihkan', '2020-12-22'),
(249, 'E102', 'Satrio Widodo', 'Belum Dibersihkan', '2020-12-22'),
(250, 'E302', 'Yanti Mustikawati', 'Sudah Dibersihkan', '2020-12-22'),
(256, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-21'),
(257, 'A102', 'Andy Sitohang', 'Belum Dibersihkan', '2020-12-21'),
(258, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-21'),
(259, 'B302', 'Bayu Susilo A', 'Belum Dibersihkan', '2020-12-21'),
(260, 'C101', 'Danang Suprianto', 'Sudah Dibersihkan', '2020-12-21'),
(261, 'C201', 'Kartika Dwi R', 'Belum Dibersihkan', '2020-12-21'),
(262, 'D102', 'M Sajiwo Santoso', 'Sudah Dibersihkan', '2020-12-21'),
(263, 'D202', 'Ranjani Ilyasviel V', 'Belum Dibersihkan', '2020-12-21'),
(264, 'E102', 'Satrio Widodo', 'Sudah Dibersihkan', '2020-12-21'),
(265, 'E302', 'Yanti Mustikawati', 'Belum Dibersihkan', '2020-12-21'),
(271, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-20'),
(272, 'A102', 'Andy Sitohang', 'Sudah Dibersihkan', '2020-12-20'),
(273, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-20'),
(274, 'B302', 'Bayu Susilo A', 'Sudah Dibersihkan', '2020-12-20'),
(275, 'C101', 'Danang Suprianto', 'Belum Dibersihkan', '2020-12-20'),
(276, 'C201', 'Kartika Dwi R', 'Sudah Dibersihkan', '2020-12-20'),
(277, 'D102', 'M Sajiwo Santoso', 'Belum Dibersihkan', '2020-12-20'),
(278, 'D202', 'Ranjani Ilyasviel V', 'Sudah Dibersihkan', '2020-12-20'),
(279, 'E102', 'Satrio Widodo', 'Belum Dibersihkan', '2020-12-20'),
(280, 'E302', 'Yanti Mustikawati', 'Sudah Dibersihkan', '2020-12-20'),
(286, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-19'),
(287, 'A102', 'Andy Sitohang', 'Belum Dibersihkan', '2020-12-19'),
(288, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-19'),
(289, 'B302', 'Bayu Susilo A', 'Belum Dibersihkan', '2020-12-19'),
(290, 'C101', 'Danang Suprianto', 'Sudah Dibersihkan', '2020-12-19'),
(291, 'C201', 'Kartika Dwi R', 'Belum Dibersihkan', '2020-12-19'),
(292, 'D102', 'M Sajiwo Santoso', 'Sudah Dibersihkan', '2020-12-19'),
(293, 'D202', 'Ranjani Ilyasviel V', 'Belum Dibersihkan', '2020-12-19'),
(294, 'E102', 'Satrio Widodo', 'Sudah Dibersihkan', '2020-12-19'),
(295, 'E302', 'Yanti Mustikawati', 'Belum Dibersihkan', '2020-12-19'),
(301, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-18'),
(302, 'A102', 'Andy Sitohang', 'Sudah Dibersihkan', '2020-12-18'),
(303, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-18'),
(304, 'B302', 'Bayu Susilo A', 'Sudah Dibersihkan', '2020-12-18'),
(305, 'C101', 'Danang Suprianto', 'Belum Dibersihkan', '2020-12-18'),
(306, 'C201', 'Kartika Dwi R', 'Sudah Dibersihkan', '2020-12-18'),
(307, 'D102', 'M Sajiwo Santoso', 'Belum Dibersihkan', '2020-12-18'),
(308, 'D202', 'Ranjani Ilyasviel V', 'Sudah Dibersihkan', '2020-12-18'),
(309, 'E102', 'Satrio Widodo', 'Belum Dibersihkan', '2020-12-18'),
(310, 'E302', 'Yanti Mustikawati', 'Sudah Dibersihkan', '2020-12-18'),
(316, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-17'),
(317, 'A102', 'Andy Sitohang', 'Belum Dibersihkan', '2020-12-17'),
(318, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-17'),
(319, 'B302', 'Bayu Susilo A', 'Belum Dibersihkan', '2020-12-17'),
(320, 'C101', 'Danang Suprianto', 'Sudah Dibersihkan', '2020-12-17'),
(321, 'C201', 'Kartika Dwi R', 'Belum Dibersihkan', '2020-12-17'),
(322, 'D102', 'M Sajiwo Santoso', 'Sudah Dibersihkan', '2020-12-17'),
(323, 'D202', 'Ranjani Ilyasviel V', 'Belum Dibersihkan', '2020-12-17'),
(324, 'E102', 'Satrio Widodo', 'Sudah Dibersihkan', '2020-12-17'),
(325, 'E302', 'Yanti Mustikawati', 'Belum Dibersihkan', '2020-12-17'),
(346, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-14'),
(347, 'A102', 'Andy Sitohang', 'Belum Dibersihkan', '2020-12-14'),
(348, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-14'),
(349, 'B302', 'Bayu Susilo A', 'Belum Dibersihkan', '2020-12-14'),
(350, 'C101', 'Danang Suprianto', 'Sudah Dibersihkan', '2020-12-14'),
(351, 'C201', 'Kartika Dwi R', 'Belum Dibersihkan', '2020-12-14'),
(352, 'D102', 'M Sajiwo Santoso', 'Sudah Dibersihkan', '2020-12-14'),
(353, 'D202', 'Ranjani Ilyasviel V', 'Belum Dibersihkan', '2020-12-14'),
(354, 'E102', 'Satrio Widodo', 'Sudah Dibersihkan', '2020-12-14'),
(355, 'E302', 'Yanti Mustikawati', 'Belum Dibersihkan', '2020-12-14'),
(361, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-13'),
(362, 'A102', 'Andy Sitohang', 'Sudah Dibersihkan', '2020-12-13'),
(363, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-13'),
(364, 'B302', 'Bayu Susilo A', 'Sudah Dibersihkan', '2020-12-13'),
(365, 'C101', 'Danang Suprianto', 'Belum Dibersihkan', '2020-12-13'),
(366, 'C201', 'Kartika Dwi R', 'Sudah Dibersihkan', '2020-12-13'),
(367, 'D102', 'M Sajiwo Santoso', 'Belum Dibersihkan', '2020-12-13'),
(368, 'D202', 'Ranjani Ilyasviel V', 'Sudah Dibersihkan', '2020-12-13'),
(369, 'E102', 'Satrio Widodo', 'Belum Dibersihkan', '2020-12-13'),
(370, 'E302', 'Yanti Mustikawati', 'Sudah Dibersihkan', '2020-12-13'),
(376, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-12'),
(377, 'A102', 'Andy Sitohang', 'Belum Dibersihkan', '2020-12-12'),
(378, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-12'),
(379, 'B302', 'Bayu Susilo A', 'Belum Dibersihkan', '2020-12-12'),
(380, 'C101', 'Danang Suprianto', 'Sudah Dibersihkan', '2020-12-12'),
(381, 'C201', 'Kartika Dwi R', 'Belum Dibersihkan', '2020-12-12'),
(382, 'D102', 'M Sajiwo Santoso', 'Sudah Dibersihkan', '2020-12-12'),
(383, 'D202', 'Ranjani Ilyasviel V', 'Belum Dibersihkan', '2020-12-12'),
(384, 'E102', 'Satrio Widodo', 'Sudah Dibersihkan', '2020-12-12'),
(385, 'E302', 'Yanti Mustikawati', 'Belum Dibersihkan', '2020-12-12'),
(406, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-11'),
(407, 'A102', 'Andy Sitohang', 'Belum Dibersihkan', '2020-12-11'),
(408, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-11'),
(409, 'B302', 'Bayu Susilo A', 'Belum Dibersihkan', '2020-12-11'),
(410, 'C101', 'Danang Suprianto', 'Sudah Dibersihkan', '2020-12-11'),
(411, 'C201', 'Kartika Dwi R', 'Belum Dibersihkan', '2020-12-11'),
(412, 'D102', 'M Sajiwo Santoso', 'Sudah Dibersihkan', '2020-12-11'),
(413, 'D202', 'Ranjani Ilyasviel V', 'Belum Dibersihkan', '2020-12-11'),
(414, 'E102', 'Satrio Widodo', 'Sudah Dibersihkan', '2020-12-11'),
(415, 'E302', 'Yanti Mustikawati', 'Belum Dibersihkan', '2020-12-11'),
(421, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-10'),
(422, 'A102', 'Andy Sitohang', 'Sudah Dibersihkan', '2020-12-10'),
(423, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-10'),
(424, 'B302', 'Bayu Susilo A', 'Sudah Dibersihkan', '2020-12-10'),
(425, 'C101', 'Danang Suprianto', 'Belum Dibersihkan', '2020-12-10'),
(426, 'C201', 'Kartika Dwi R', 'Sudah Dibersihkan', '2020-12-10'),
(427, 'D102', 'M Sajiwo Santoso', 'Belum Dibersihkan', '2020-12-10'),
(428, 'D202', 'Ranjani Ilyasviel V', 'Sudah Dibersihkan', '2020-12-10'),
(429, 'E102', 'Satrio Widodo', 'Belum Dibersihkan', '2020-12-10'),
(430, 'E302', 'Yanti Mustikawati', 'Sudah Dibersihkan', '2020-12-10'),
(436, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-09'),
(437, 'A102', 'Andy Sitohang', 'Belum Dibersihkan', '2020-12-09'),
(438, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-09'),
(439, 'B302', 'Bayu Susilo A', 'Belum Dibersihkan', '2020-12-09'),
(440, 'C101', 'Danang Suprianto', 'Sudah Dibersihkan', '2020-12-09'),
(441, 'C201', 'Kartika Dwi R', 'Belum Dibersihkan', '2020-12-09'),
(442, 'D102', 'M Sajiwo Santoso', 'Sudah Dibersihkan', '2020-12-09'),
(443, 'D202', 'Ranjani Ilyasviel V', 'Belum Dibersihkan', '2020-12-09'),
(444, 'E102', 'Satrio Widodo', 'Sudah Dibersihkan', '2020-12-09'),
(445, 'E302', 'Yanti Mustikawati', 'Belum Dibersihkan', '2020-12-09'),
(451, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-08'),
(452, 'A102', 'Andy Sitohang', 'Sudah Dibersihkan', '2020-12-08'),
(453, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-08'),
(454, 'B302', 'Bayu Susilo A', 'Sudah Dibersihkan', '2020-12-08'),
(455, 'C101', 'Danang Suprianto', 'Belum Dibersihkan', '2020-12-08'),
(456, 'C201', 'Kartika Dwi R', 'Sudah Dibersihkan', '2020-12-08'),
(457, 'D102', 'M Sajiwo Santoso', 'Belum Dibersihkan', '2020-12-08'),
(458, 'D202', 'Ranjani Ilyasviel V', 'Sudah Dibersihkan', '2020-12-08'),
(459, 'E102', 'Satrio Widodo', 'Belum Dibersihkan', '2020-12-08'),
(460, 'E302', 'Yanti Mustikawati', 'Sudah Dibersihkan', '2020-12-08'),
(466, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-07'),
(467, 'A102', 'Andy Sitohang', 'Belum Dibersihkan', '2020-12-07'),
(468, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-07'),
(469, 'B302', 'Bayu Susilo A', 'Belum Dibersihkan', '2020-12-07'),
(470, 'C101', 'Danang Suprianto', 'Sudah Dibersihkan', '2020-12-07'),
(471, 'C201', 'Kartika Dwi R', 'Belum Dibersihkan', '2020-12-07'),
(472, 'D102', 'M Sajiwo Santoso', 'Sudah Dibersihkan', '2020-12-07'),
(473, 'D202', 'Ranjani Ilyasviel V', 'Belum Dibersihkan', '2020-12-07'),
(474, 'E102', 'Satrio Widodo', 'Sudah Dibersihkan', '2020-12-07'),
(475, 'E302', 'Yanti Mustikawati', 'Belum Dibersihkan', '2020-12-07'),
(481, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-06'),
(482, 'A102', 'Andy Sitohang', 'Sudah Dibersihkan', '2020-12-06'),
(483, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-06'),
(484, 'B302', 'Bayu Susilo A', 'Sudah Dibersihkan', '2020-12-06'),
(485, 'C101', 'Danang Suprianto', 'Belum Dibersihkan', '2020-12-06'),
(486, 'C201', 'Kartika Dwi R', 'Sudah Dibersihkan', '2020-12-06'),
(487, 'D102', 'M Sajiwo Santoso', 'Belum Dibersihkan', '2020-12-06'),
(488, 'D202', 'Ranjani Ilyasviel V', 'Sudah Dibersihkan', '2020-12-06'),
(489, 'E102', 'Satrio Widodo', 'Belum Dibersihkan', '2020-12-06'),
(490, 'E302', 'Yanti Mustikawati', 'Sudah Dibersihkan', '2020-12-06'),
(496, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-05'),
(497, 'A102', 'Andy Sitohang', 'Belum Dibersihkan', '2020-12-05'),
(498, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-05'),
(499, 'B302', 'Bayu Susilo A', 'Belum Dibersihkan', '2020-12-05'),
(500, 'C101', 'Danang Suprianto', 'Sudah Dibersihkan', '2020-12-05'),
(501, 'C201', 'Kartika Dwi R', 'Belum Dibersihkan', '2020-12-05'),
(502, 'D102', 'M Sajiwo Santoso', 'Sudah Dibersihkan', '2020-12-05'),
(503, 'D202', 'Ranjani Ilyasviel V', 'Belum Dibersihkan', '2020-12-05'),
(504, 'E102', 'Satrio Widodo', 'Sudah Dibersihkan', '2020-12-05'),
(505, 'E302', 'Yanti Mustikawati', 'Belum Dibersihkan', '2020-12-05'),
(511, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-04'),
(512, 'A102', 'Andy Sitohang', 'Sudah Dibersihkan', '2020-12-04'),
(513, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-04'),
(514, 'B302', 'Bayu Susilo A', 'Sudah Dibersihkan', '2020-12-04'),
(515, 'C101', 'Danang Suprianto', 'Belum Dibersihkan', '2020-12-04'),
(516, 'C201', 'Kartika Dwi R', 'Sudah Dibersihkan', '2020-12-04'),
(517, 'D102', 'M Sajiwo Santoso', 'Belum Dibersihkan', '2020-12-04'),
(518, 'D202', 'Ranjani Ilyasviel V', 'Sudah Dibersihkan', '2020-12-04'),
(519, 'E102', 'Satrio Widodo', 'Belum Dibersihkan', '2020-12-04'),
(520, 'E302', 'Yanti Mustikawati', 'Sudah Dibersihkan', '2020-12-04'),
(526, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-03'),
(527, 'A102', 'Andy Sitohang', 'Belum Dibersihkan', '2020-12-03'),
(528, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-03'),
(529, 'B302', 'Bayu Susilo A', 'Belum Dibersihkan', '2020-12-03'),
(530, 'C101', 'Danang Suprianto', 'Sudah Dibersihkan', '2020-12-03'),
(531, 'C201', 'Kartika Dwi R', 'Belum Dibersihkan', '2020-12-03'),
(532, 'D102', 'M Sajiwo Santoso', 'Sudah Dibersihkan', '2020-12-03'),
(533, 'D202', 'Ranjani Ilyasviel V', 'Belum Dibersihkan', '2020-12-03'),
(534, 'E102', 'Satrio Widodo', 'Sudah Dibersihkan', '2020-12-03'),
(535, 'E302', 'Yanti Mustikawati', 'Belum Dibersihkan', '2020-12-03'),
(541, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-02'),
(542, 'A102', 'Andy Sitohang', 'Sudah Dibersihkan', '2020-12-02'),
(543, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-02'),
(544, 'B302', 'Bayu Susilo A', 'Sudah Dibersihkan', '2020-12-02'),
(545, 'C101', 'Danang Suprianto', 'Belum Dibersihkan', '2020-12-02'),
(546, 'C201', 'Kartika Dwi R', 'Sudah Dibersihkan', '2020-12-02'),
(547, 'D102', 'M Sajiwo Santoso', 'Belum Dibersihkan', '2020-12-02'),
(548, 'D202', 'Ranjani Ilyasviel V', 'Sudah Dibersihkan', '2020-12-02'),
(549, 'E102', 'Satrio Widodo', 'Belum Dibersihkan', '2020-12-02'),
(550, 'E302', 'Yanti Mustikawati', 'Sudah Dibersihkan', '2020-12-02'),
(566, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-15'),
(567, 'A102', 'Andy Sitohang', 'Belum Dibersihkan', '2020-12-15'),
(568, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-15'),
(569, 'B302', 'Bayu Susilo A', 'Belum Dibersihkan', '2020-12-15'),
(570, 'C101', 'Danang Suprianto', 'Sudah Dibersihkan', '2020-12-15'),
(571, 'C201', 'Kartika Dwi R', 'Belum Dibersihkan', '2020-12-15'),
(572, 'D102', 'M Sajiwo Santoso', 'Sudah Dibersihkan', '2020-12-15'),
(573, 'D202', 'Ranjani Ilyasviel V', 'Belum Dibersihkan', '2020-12-15'),
(574, 'E102', 'Satrio Widodo', 'Sudah Dibersihkan', '2020-12-15'),
(575, 'E302', 'Yanti Mustikawati', 'Belum Dibersihkan', '2020-12-15'),
(581, 'A101', 'Agus Budi C', 'Sudah Dibersihkan', '2020-12-01'),
(582, 'A102', 'Andy Sitohang', 'Sudah Dibersihkan', '2020-12-01'),
(583, 'B203', 'Bambang Ariyadi', 'Sudah Dibersihkan', '2020-12-01'),
(584, 'B302', 'Bayu Susilo A', 'Sudah Dibersihkan', '2020-12-01'),
(585, 'C101', 'Danang Suprianto', 'Belum Dibersihkan', '2020-12-01'),
(586, 'C201', 'Kartika Dwi R', 'Sudah Dibersihkan', '2020-12-01'),
(587, 'D102', 'M Sajiwo Santoso', 'Belum Dibersihkan', '2020-12-01'),
(588, 'D202', 'Ranjani Ilyasviel V', 'Sudah Dibersihkan', '2020-12-01'),
(589, 'E102', 'Satrio Widodo', 'Belum Dibersihkan', '2020-12-01'),
(590, 'E302', 'Yanti Mustikawati', 'Sudah Dibersihkan', '2020-12-01'),
(626, 'A101', 'Agus Budi C', 'Belum Dibersihkan', '2020-12-16'),
(627, 'A102', 'Andy Sitohang', 'Belum Dibersihkan', '2020-12-16'),
(628, 'B203', 'Bambang Ariyadi', 'Belum Dibersihkan', '2020-12-16'),
(629, 'B302', 'Bayu Susilo A', 'Belum Dibersihkan', '2020-12-16'),
(630, 'C101', 'Danang Suprianto', 'Belum Dibersihkan', '2020-12-16'),
(631, 'C201', 'Kartika Dwi R', 'Belum Dibersihkan', '2020-12-16'),
(632, 'D102', 'M Sajiwo Santoso', 'Belum Dibersihkan', '2020-12-16'),
(633, 'D202', 'Ranjani Ilyasviel V', 'Belum Dibersihkan', '2020-12-16'),
(634, 'E102', 'Satrio Widodo', 'Belum Dibersihkan', '2020-12-16'),
(635, 'E302', 'Yanti Mustikawati', 'Belum Dibersihkan', '2020-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `pengelola`
--

CREATE TABLE `pengelola` (
  `id_peng` int(4) NOT NULL,
  `nama_peng` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengelola`
--

INSERT INTO `pengelola` (`id_peng`, `nama_peng`, `email`, `password`) VALUES
(1, 'Yudhakun', 'yudhakun@gmail.com', '123yudhakun'),
(2, 'Naruto', 'naruto@gmail.com', 'cf9ee5bcb36b4936dd7064ee9b2f139e'),
(3, 'Vanikun', 'vanikun@gmail.com', '123vanikun');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(4) NOT NULL,
  `nama_ruang` varchar(20) NOT NULL,
  `nama_gedung` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`, `nama_gedung`) VALUES
(1, 'A102', 'A'),
(2, 'A101', 'A'),
(3, 'B203', 'B'),
(4, 'C101', 'C'),
(5, 'D102', 'D'),
(6, 'E102', 'E'),
(8, 'B302', 'B'),
(9, 'C201', 'C'),
(10, 'D202', 'D'),
(11, 'E302', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `trx_cs_ruang`
--

CREATE TABLE `trx_cs_ruang` (
  `id_trx` int(4) NOT NULL,
  `id_cs_ruang` int(4) NOT NULL,
  `id_cs` int(4) NOT NULL,
  `nama_cs` varchar(50) NOT NULL,
  `id_ruang` int(4) NOT NULL,
  `nama_ruang` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti1` varchar(200) NOT NULL,
  `bukti2` varchar(200) NOT NULL,
  `bukti3` varchar(200) NOT NULL,
  `bukti4` varchar(200) NOT NULL,
  `bukti5` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trx_cs_ruang`
--

INSERT INTO `trx_cs_ruang` (`id_trx`, `id_cs_ruang`, `id_cs`, `nama_cs`, `id_ruang`, `nama_ruang`, `status`, `tanggal`, `bukti1`, `bukti2`, `bukti3`, `bukti4`, `bukti5`) VALUES
(1, 2, 9, 'Agus Budi C', 2, 'A101', 'Belum Dibersihkan', '2020-12-15', '', '', '', '', ''),
(2, 3, 10, 'Andy Sitohang', 1, 'A102', 'Belum Dibersihkan', '2020-12-15', '', '', '', '', ''),
(3, 4, 2, 'Bambang Ariyadi', 3, 'B203', 'Belum Dibersihkan', '2020-12-15', '', '', '', '', ''),
(4, 5, 1, 'Bayu Susilo A', 8, 'B302', 'Belum Dibersihkan', '2020-12-15', '', '', '', '', ''),
(5, 6, 8, 'Danang Suprianto', 4, 'C101', 'Belum Dibersihkan', '2020-12-15', '', '', '', '', ''),
(6, 7, 7, 'Kartika Dwi R', 9, 'C201', 'Belum Dibersihkan', '2020-12-15', '', '', '', '', ''),
(7, 8, 3, 'M Sajiwo Santoso', 5, 'D102', 'Belum Dibersihkan', '2020-12-15', '', '', '', '', ''),
(8, 9, 6, 'Ranjani Ilyasviel V', 10, 'D202', 'Belum Dibersihkan', '2020-12-15', '', '', '', '', ''),
(9, 10, 5, 'Satrio Widodo', 6, 'E102', 'Belum Dibersihkan', '2020-12-15', '', '', '', '', ''),
(10, 11, 4, 'Yanti Mustikawati', 11, 'E302', 'Belum Dibersihkan', '2020-12-15', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cs`
--
ALTER TABLE `cs`
  ADD PRIMARY KEY (`id_cs`),
  ADD UNIQUE KEY `FK` (`id_cs`);

--
-- Indexes for table `cs_ruang`
--
ALTER TABLE `cs_ruang`
  ADD PRIMARY KEY (`id_cs_ruang`),
  ADD KEY `id_cs` (`id_cs`),
  ADD KEY `id_ruang` (`id_ruang`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `pengelola`
--
ALTER TABLE `pengelola`
  ADD PRIMARY KEY (`id_peng`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `trx_cs_ruang`
--
ALTER TABLE `trx_cs_ruang`
  ADD PRIMARY KEY (`id_trx`),
  ADD KEY `trx_cs-ruang_ibfk_1` (`id_cs_ruang`),
  ADD KEY `id_cs` (`id_cs`),
  ADD KEY `id_ruang` (`id_ruang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cs`
--
ALTER TABLE `cs`
  MODIFY `id_cs` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cs_ruang`
--
ALTER TABLE `cs_ruang`
  MODIFY `id_cs_ruang` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=641;

--
-- AUTO_INCREMENT for table `pengelola`
--
ALTER TABLE `pengelola`
  MODIFY `id_peng` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `trx_cs_ruang`
--
ALTER TABLE `trx_cs_ruang`
  MODIFY `id_trx` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cs_ruang`
--
ALTER TABLE `cs_ruang`
  ADD CONSTRAINT `cs_ruang_ibfk_1` FOREIGN KEY (`id_cs`) REFERENCES `cs` (`id_cs`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cs_ruang_ibfk_2` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ruang`
--
ALTER TABLE `ruang`
  ADD CONSTRAINT `ruang_ibfk_1` FOREIGN KEY (`id_ruang`) REFERENCES `trx_cs_ruang` (`id_ruang`);

--
-- Constraints for table `trx_cs_ruang`
--
ALTER TABLE `trx_cs_ruang`
  ADD CONSTRAINT `trx_cs_ruang_ibfk_1` FOREIGN KEY (`id_cs_ruang`) REFERENCES `cs_ruang` (`id_cs_ruang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `trx_cs_ruang_ibfk_2` FOREIGN KEY (`id_cs`) REFERENCES `cs_ruang` (`id_cs`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `trx_cs_ruang_ibfk_3` FOREIGN KEY (`id_ruang`) REFERENCES `cs_ruang` (`id_ruang`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
