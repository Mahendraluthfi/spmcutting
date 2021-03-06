-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2021 pada 05.00
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spmcutting`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `line`
--

CREATE TABLE `line` (
  `idline` int(11) NOT NULL,
  `line` int(11) NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `stack` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `line`
--

INSERT INTO `line` (`idline`, `line`, `min`, `max`, `stack`, `qty`, `last_update`) VALUES
(1, 1, 4, 8, 12, 950, '2021-06-16'),
(2, 2, 4, 8, 8, 1201, '2021-06-16'),
(3, 3, 4, 8, 3, 200, '2021-06-16'),
(4, 4, 4, 8, 4, 0, '2021-06-16'),
(5, 5, 4, 8, 5, 0, '2021-06-16'),
(6, 6, 4, 8, 6, 0, '2021-06-16'),
(7, 7, 4, 8, 7, 0, '2021-06-16'),
(8, 8, 4, 8, 8, 0, '2021-06-16'),
(9, 9, 4, 8, 9, 0, '2021-06-16'),
(10, 10, 4, 8, 10, 0, '2021-06-16'),
(11, 11, 4, 8, 11, 0, '2021-06-16'),
(12, 12, 4, 8, 12, 0, '2021-06-16'),
(13, 13, 4, 8, 0, 0, '2021-06-16'),
(14, 14, 4, 8, 6, 0, '2021-06-16'),
(15, 15, 4, 8, 8, 0, '2021-06-16'),
(16, 16, 4, 8, 6, 0, '2021-06-16'),
(17, 17, 4, 8, 3, 100, '2021-06-16'),
(18, 18, 4, 8, 6, 0, '2021-06-16'),
(21, 21, 4, 8, 6, 0, '2021-06-16'),
(22, 22, 4, 8, 6, 0, '2021-06-16'),
(25, 25, 4, 8, 6, 0, '2021-06-16'),
(26, 26, 4, 8, 5, 0, '2021-06-16'),
(27, 27, 4, 8, 8, 0, '2021-06-16'),
(28, 28, 4, 8, 6, 0, '2021-06-16'),
(29, 29, 4, 8, 6, 0, '2021-06-16'),
(30, 30, 4, 8, 8, 0, '2021-06-16'),
(31, 31, 4, 8, 6, 0, '2021-06-16'),
(32, 32, 4, 8, 2, 0, '2021-06-16'),
(33, 33, 4, 8, 8, 0, '2021-06-16'),
(34, 34, 4, 8, 0, 0, '2021-06-16'),
(35, 35, 4, 8, 6, 0, '2021-06-16'),
(36, 36, 4, 8, 6, 0, '2021-06-16'),
(37, 37, 4, 8, 6, 0, '2021-06-16'),
(38, 38, 4, 8, 6, 0, '2021-06-16'),
(39, 39, 4, 8, 6, 0, '2021-06-16'),
(40, 40, 4, 8, 6, 0, '2021-06-16'),
(41, 41, 4, 8, 6, 0, '2021-06-16'),
(42, 42, 4, 8, 6, 0, '2021-06-16'),
(43, 43, 4, 8, 4, 0, '2021-06-16'),
(44, 44, 4, 8, 8, 0, '2021-06-16'),
(45, 45, 4, 8, 6, 0, '2021-06-16'),
(46, 46, 4, 8, 6, 0, '2021-06-16'),
(47, 47, 4, 8, 6, 0, '2021-06-16'),
(48, 48, 4, 8, 6, 0, '2021-06-16'),
(49, 49, 4, 8, 6, 0, '2021-06-16'),
(50, 50, 4, 8, 6, 0, '2021-06-16'),
(51, 51, 4, 8, 6, 0, '2021-06-16'),
(52, 52, 4, 8, 6, 0, '2021-06-16'),
(53, 53, 4, 8, 6, 0, '2021-06-16'),
(54, 54, 4, 8, 6, 0, '2021-06-16'),
(55, 55, 4, 8, 6, 0, '2021-06-16'),
(56, 56, 4, 8, 6, 0, '2021-06-16'),
(57, 57, 4, 8, 6, 0, '2021-06-16'),
(58, 58, 4, 8, 6, 0, '2021-06-16'),
(59, 59, 4, 8, 6, 0, '2021-06-16'),
(60, 60, 4, 8, 6, 0, '2021-06-16'),
(61, 61, 4, 8, 5, 0, '2021-06-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `idline` int(11) NOT NULL,
  `function` varchar(10) NOT NULL,
  `receive` int(11) NOT NULL,
  `send` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `idline`, `function`, `receive`, `send`, `user`, `timestamp`) VALUES
(13, 1, 'IN_200', 200, 0, 'naka', '2021-06-09 02:29:41'),
(14, 1, 'OUT_50', 0, 50, 'naka', '2021-06-09 02:32:21'),
(19, 2, 'IN_500', 500, 0, 'Naka', '2021-06-09 07:18:01'),
(20, 2, 'OUT_145', 0, 145, 'Naka', '2021-06-09 07:18:14'),
(21, 1, 'IN_350', 350, 0, 'Naka', '2021-06-09 07:52:31'),
(22, 2, 'IN_0', 0, 0, 'Naka', '2021-06-09 08:05:23'),
(23, 3, 'IN_1200', 1200, 0, 'Naka', '2021-06-09 08:59:13'),
(24, 3, 'OUT_350', 0, 350, 'Naka', '2021-06-09 08:59:38'),
(25, 1, 'IN_1200', 1200, 0, 'Naka', '2021-06-11 03:09:41'),
(26, 1, 'OUT_150', 0, 150, 'Naka', '2021-06-11 03:10:14'),
(27, 3, 'IN_250', 250, 0, 'Naka', '2021-06-11 04:00:34'),
(28, 1, 'OUT_200', 0, 200, 'Naka', '2021-06-15 10:09:39'),
(29, 1, 'OUT_200', 0, 200, 'Naka', '2021-06-15 10:09:53'),
(30, 1, 'OUT_0', 0, 0, 'Naka', '2021-06-16 01:31:20'),
(31, 3, 'IN_200', 200, 0, 'Naka', '2021-06-16 08:38:44'),
(32, 1, 'IN_100', 100, 0, 'Naka', '2021-06-16 09:44:33'),
(33, 17, 'IN_100', 100, 0, 'Naka', '2021-06-16 09:45:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setup`
--

CREATE TABLE `setup` (
  `id` int(11) NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setup`
--

INSERT INTO `setup` (`id`, `min`, `max`) VALUES
(1, 4, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spm`
--

CREATE TABLE `spm` (
  `id` int(11) NOT NULL,
  `idline` int(11) NOT NULL,
  `date` date NOT NULL,
  `receive` int(11) NOT NULL,
  `send` int(11) NOT NULL,
  `margin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spm`
--

INSERT INTO `spm` (`id`, `idline`, `date`, `receive`, `send`, `margin`) VALUES
(1, 1, '2021-06-08', 0, 0, 0),
(2, 2, '2021-06-08', 0, 0, 0),
(3, 3, '2021-06-08', 0, 0, 0),
(4, 4, '2021-06-08', 0, 0, 0),
(5, 5, '2021-06-08', 0, 0, 0),
(6, 6, '2021-06-08', 0, 0, 0),
(7, 7, '2021-06-08', 0, 0, 0),
(8, 8, '2021-06-08', 0, 0, 0),
(9, 9, '2021-06-08', 0, 0, 0),
(10, 10, '2021-06-08', 0, 0, 0),
(11, 11, '2021-06-08', 0, 0, 0),
(12, 12, '2021-06-08', 0, 0, 0),
(13, 13, '2021-06-08', 0, 0, 0),
(14, 14, '2021-06-08', 0, 0, 0),
(15, 15, '2021-06-08', 0, 0, 0),
(16, 16, '2021-06-08', 0, 0, 0),
(17, 17, '2021-06-08', 0, 0, 0),
(18, 18, '2021-06-08', 0, 0, 0),
(19, 21, '2021-06-08', 0, 0, 0),
(20, 22, '2021-06-08', 0, 0, 0),
(21, 25, '2021-06-08', 0, 0, 0),
(22, 26, '2021-06-08', 0, 0, 0),
(23, 27, '2021-06-08', 0, 0, 0),
(24, 28, '2021-06-08', 0, 0, 0),
(25, 29, '2021-06-08', 0, 0, 0),
(26, 30, '2021-06-08', 0, 0, 0),
(27, 31, '2021-06-08', 0, 0, 0),
(28, 32, '2021-06-08', 0, 0, 0),
(29, 33, '2021-06-08', 0, 0, 0),
(30, 34, '2021-06-08', 0, 0, 0),
(31, 35, '2021-06-08', 0, 0, 0),
(32, 36, '2021-06-08', 0, 0, 0),
(33, 37, '2021-06-08', 0, 0, 0),
(34, 38, '2021-06-08', 0, 0, 0),
(35, 39, '2021-06-08', 0, 0, 0),
(36, 40, '2021-06-08', 0, 0, 0),
(37, 41, '2021-06-08', 0, 0, 0),
(38, 42, '2021-06-08', 0, 0, 0),
(39, 43, '2021-06-08', 0, 0, 0),
(40, 44, '2021-06-08', 0, 0, 0),
(41, 45, '2021-06-08', 0, 0, 0),
(42, 46, '2021-06-08', 0, 0, 0),
(43, 47, '2021-06-08', 0, 0, 0),
(44, 48, '2021-06-08', 0, 0, 0),
(45, 49, '2021-06-08', 0, 0, 0),
(46, 50, '2021-06-08', 0, 0, 0),
(47, 51, '2021-06-08', 0, 0, 0),
(48, 52, '2021-06-08', 0, 0, 0),
(49, 53, '2021-06-08', 0, 0, 0),
(50, 54, '2021-06-08', 0, 0, 0),
(51, 55, '2021-06-08', 0, 0, 0),
(52, 56, '2021-06-08', 0, 0, 0),
(53, 57, '2021-06-08', 0, 0, 0),
(54, 58, '2021-06-08', 0, 0, 0),
(55, 59, '2021-06-08', 0, 0, 0),
(56, 60, '2021-06-08', 0, 0, 0),
(58, 61, '2021-06-08', 0, 0, 0),
(59, 1, '2021-06-09', 550, 50, 0),
(60, 2, '2021-06-09', 500, 145, 0),
(61, 3, '2021-06-09', 1200, 350, 0),
(62, 4, '2021-06-09', 0, 0, 0),
(63, 5, '2021-06-09', 0, 0, 0),
(64, 6, '2021-06-09', 0, 0, 0),
(65, 7, '2021-06-09', 0, 0, 0),
(66, 8, '2021-06-09', 0, 0, 0),
(67, 9, '2021-06-09', 0, 0, 0),
(68, 10, '2021-06-09', 0, 0, 0),
(69, 11, '2021-06-09', 0, 0, 0),
(70, 12, '2021-06-09', 0, 0, 0),
(71, 13, '2021-06-09', 0, 0, 0),
(72, 14, '2021-06-09', 0, 0, 0),
(73, 15, '2021-06-09', 0, 0, 0),
(74, 16, '2021-06-09', 0, 0, 0),
(75, 17, '2021-06-09', 0, 0, 0),
(76, 18, '2021-06-09', 0, 0, 0),
(77, 21, '2021-06-09', 0, 0, 0),
(78, 22, '2021-06-09', 0, 0, 0),
(79, 25, '2021-06-09', 0, 0, 0),
(80, 26, '2021-06-09', 0, 0, 0),
(81, 27, '2021-06-09', 0, 0, 0),
(82, 28, '2021-06-09', 0, 0, 0),
(83, 29, '2021-06-09', 0, 0, 0),
(84, 30, '2021-06-09', 0, 0, 0),
(85, 31, '2021-06-09', 0, 0, 0),
(86, 32, '2021-06-09', 0, 0, 0),
(87, 33, '2021-06-09', 0, 0, 0),
(88, 34, '2021-06-09', 0, 0, 0),
(89, 35, '2021-06-09', 0, 0, 0),
(90, 36, '2021-06-09', 0, 0, 0),
(91, 37, '2021-06-09', 0, 0, 0),
(92, 38, '2021-06-09', 0, 0, 0),
(93, 39, '2021-06-09', 0, 0, 0),
(94, 40, '2021-06-09', 0, 0, 0),
(95, 41, '2021-06-09', 0, 0, 0),
(96, 42, '2021-06-09', 0, 0, 0),
(97, 43, '2021-06-09', 0, 0, 0),
(98, 44, '2021-06-09', 0, 0, 0),
(99, 45, '2021-06-09', 0, 0, 0),
(100, 46, '2021-06-09', 0, 0, 0),
(101, 47, '2021-06-09', 0, 0, 0),
(102, 48, '2021-06-09', 0, 0, 0),
(103, 49, '2021-06-09', 0, 0, 0),
(104, 50, '2021-06-09', 0, 0, 0),
(105, 51, '2021-06-09', 0, 0, 0),
(106, 52, '2021-06-09', 0, 0, 0),
(107, 53, '2021-06-09', 0, 0, 0),
(108, 54, '2021-06-09', 0, 0, 0),
(109, 55, '2021-06-09', 0, 0, 0),
(110, 56, '2021-06-09', 0, 0, 0),
(111, 57, '2021-06-09', 0, 0, 0),
(112, 58, '2021-06-09', 0, 0, 0),
(113, 59, '2021-06-09', 0, 0, 0),
(114, 60, '2021-06-09', 0, 0, 0),
(115, 61, '2021-06-09', 0, 0, 0),
(116, 1, '2021-06-10', 0, 0, 0),
(117, 2, '2021-06-10', 0, 0, 0),
(118, 3, '2021-06-10', 0, 0, 0),
(119, 4, '2021-06-10', 0, 0, 0),
(120, 5, '2021-06-10', 0, 0, 0),
(121, 6, '2021-06-10', 0, 0, 0),
(122, 7, '2021-06-10', 0, 0, 0),
(123, 8, '2021-06-10', 0, 0, 0),
(124, 9, '2021-06-10', 0, 0, 0),
(125, 10, '2021-06-10', 0, 0, 0),
(126, 11, '2021-06-10', 0, 0, 0),
(127, 12, '2021-06-10', 0, 0, 0),
(128, 13, '2021-06-10', 0, 0, 0),
(129, 14, '2021-06-10', 0, 0, 0),
(130, 15, '2021-06-10', 0, 0, 0),
(131, 16, '2021-06-10', 0, 0, 0),
(132, 17, '2021-06-10', 0, 0, 0),
(133, 18, '2021-06-10', 0, 0, 0),
(134, 21, '2021-06-10', 0, 0, 0),
(135, 22, '2021-06-10', 0, 0, 0),
(136, 25, '2021-06-10', 0, 0, 0),
(137, 26, '2021-06-10', 0, 0, 0),
(138, 27, '2021-06-10', 0, 0, 0),
(139, 28, '2021-06-10', 0, 0, 0),
(140, 29, '2021-06-10', 0, 0, 0),
(141, 30, '2021-06-10', 0, 0, 0),
(142, 31, '2021-06-10', 0, 0, 0),
(143, 32, '2021-06-10', 0, 0, 0),
(144, 33, '2021-06-10', 0, 0, 0),
(145, 34, '2021-06-10', 0, 0, 0),
(146, 35, '2021-06-10', 0, 0, 0),
(147, 36, '2021-06-10', 0, 0, 0),
(148, 37, '2021-06-10', 0, 0, 0),
(149, 38, '2021-06-10', 0, 0, 0),
(150, 39, '2021-06-10', 0, 0, 0),
(151, 40, '2021-06-10', 0, 0, 0),
(152, 41, '2021-06-10', 0, 0, 0),
(153, 42, '2021-06-10', 0, 0, 0),
(154, 43, '2021-06-10', 0, 0, 0),
(155, 44, '2021-06-10', 0, 0, 0),
(156, 45, '2021-06-10', 0, 0, 0),
(157, 46, '2021-06-10', 0, 0, 0),
(158, 47, '2021-06-10', 0, 0, 0),
(159, 48, '2021-06-10', 0, 0, 0),
(160, 49, '2021-06-10', 0, 0, 0),
(161, 50, '2021-06-10', 0, 0, 0),
(162, 51, '2021-06-10', 0, 0, 0),
(163, 52, '2021-06-10', 0, 0, 0),
(164, 53, '2021-06-10', 0, 0, 0),
(165, 54, '2021-06-10', 0, 0, 0),
(166, 55, '2021-06-10', 0, 0, 0),
(167, 56, '2021-06-10', 0, 0, 0),
(168, 57, '2021-06-10', 0, 0, 0),
(169, 58, '2021-06-10', 0, 0, 0),
(170, 59, '2021-06-10', 0, 0, 0),
(171, 60, '2021-06-10', 0, 0, 0),
(172, 61, '2021-06-10', 0, 0, 0),
(173, 1, '2021-06-11', 1200, 150, 0),
(174, 2, '2021-06-11', 0, 0, 0),
(175, 3, '2021-06-11', 250, 0, 0),
(176, 4, '2021-06-11', 0, 0, 0),
(177, 5, '2021-06-11', 0, 0, 0),
(178, 6, '2021-06-11', 0, 0, 0),
(179, 7, '2021-06-11', 0, 0, 0),
(180, 8, '2021-06-11', 0, 0, 0),
(181, 9, '2021-06-11', 0, 0, 0),
(182, 10, '2021-06-11', 0, 0, 0),
(183, 11, '2021-06-11', 0, 0, 0),
(184, 12, '2021-06-11', 0, 0, 0),
(185, 13, '2021-06-11', 0, 0, 0),
(186, 14, '2021-06-11', 0, 0, 0),
(187, 15, '2021-06-11', 0, 0, 0),
(188, 16, '2021-06-11', 0, 0, 0),
(189, 17, '2021-06-11', 0, 0, 0),
(190, 18, '2021-06-11', 0, 0, 0),
(191, 21, '2021-06-11', 0, 0, 0),
(192, 22, '2021-06-11', 0, 0, 0),
(193, 25, '2021-06-11', 0, 0, 0),
(194, 26, '2021-06-11', 0, 0, 0),
(195, 27, '2021-06-11', 0, 0, 0),
(196, 28, '2021-06-11', 0, 0, 0),
(197, 29, '2021-06-11', 0, 0, 0),
(198, 30, '2021-06-11', 0, 0, 0),
(199, 31, '2021-06-11', 0, 0, 0),
(200, 32, '2021-06-11', 0, 0, 0),
(201, 33, '2021-06-11', 0, 0, 0),
(202, 34, '2021-06-11', 0, 0, 0),
(203, 35, '2021-06-11', 0, 0, 0),
(204, 36, '2021-06-11', 0, 0, 0),
(205, 37, '2021-06-11', 0, 0, 0),
(206, 38, '2021-06-11', 0, 0, 0),
(207, 39, '2021-06-11', 0, 0, 0),
(208, 40, '2021-06-11', 0, 0, 0),
(209, 41, '2021-06-11', 0, 0, 0),
(210, 42, '2021-06-11', 0, 0, 0),
(211, 43, '2021-06-11', 0, 0, 0),
(212, 44, '2021-06-11', 0, 0, 0),
(213, 45, '2021-06-11', 0, 0, 0),
(214, 46, '2021-06-11', 0, 0, 0),
(215, 47, '2021-06-11', 0, 0, 0),
(216, 48, '2021-06-11', 0, 0, 0),
(217, 49, '2021-06-11', 0, 0, 0),
(218, 50, '2021-06-11', 0, 0, 0),
(219, 51, '2021-06-11', 0, 0, 0),
(220, 52, '2021-06-11', 0, 0, 0),
(221, 53, '2021-06-11', 0, 0, 0),
(222, 54, '2021-06-11', 0, 0, 0),
(223, 55, '2021-06-11', 0, 0, 0),
(224, 56, '2021-06-11', 0, 0, 0),
(225, 57, '2021-06-11', 0, 0, 0),
(226, 58, '2021-06-11', 0, 0, 0),
(227, 59, '2021-06-11', 0, 0, 0),
(228, 60, '2021-06-11', 0, 0, 0),
(229, 61, '2021-06-11', 0, 0, 0),
(230, 1, '2021-06-15', 0, 400, 0),
(231, 2, '2021-06-15', 0, 0, 0),
(232, 3, '2021-06-15', 0, 0, 0),
(233, 4, '2021-06-15', 0, 0, 0),
(234, 5, '2021-06-15', 0, 0, 0),
(235, 6, '2021-06-15', 0, 0, 0),
(236, 7, '2021-06-15', 0, 0, 0),
(237, 8, '2021-06-15', 0, 0, 0),
(238, 9, '2021-06-15', 0, 0, 0),
(239, 10, '2021-06-15', 0, 0, 0),
(240, 11, '2021-06-15', 0, 0, 0),
(241, 12, '2021-06-15', 0, 0, 0),
(242, 13, '2021-06-15', 0, 0, 0),
(243, 14, '2021-06-15', 0, 0, 0),
(244, 15, '2021-06-15', 0, 0, 0),
(245, 16, '2021-06-15', 0, 0, 0),
(246, 17, '2021-06-15', 0, 0, 0),
(247, 18, '2021-06-15', 0, 0, 0),
(248, 21, '2021-06-15', 0, 0, 0),
(249, 22, '2021-06-15', 0, 0, 0),
(250, 25, '2021-06-15', 0, 0, 0),
(251, 26, '2021-06-15', 0, 0, 0),
(252, 27, '2021-06-15', 0, 0, 0),
(253, 28, '2021-06-15', 0, 0, 0),
(254, 29, '2021-06-15', 0, 0, 0),
(255, 30, '2021-06-15', 0, 0, 0),
(256, 31, '2021-06-15', 0, 0, 0),
(257, 32, '2021-06-15', 0, 0, 0),
(258, 33, '2021-06-15', 0, 0, 0),
(259, 34, '2021-06-15', 0, 0, 0),
(260, 35, '2021-06-15', 0, 0, 0),
(261, 36, '2021-06-15', 0, 0, 0),
(262, 37, '2021-06-15', 0, 0, 0),
(263, 38, '2021-06-15', 0, 0, 0),
(264, 39, '2021-06-15', 0, 0, 0),
(265, 40, '2021-06-15', 0, 0, 0),
(266, 41, '2021-06-15', 0, 0, 0),
(267, 42, '2021-06-15', 0, 0, 0),
(268, 43, '2021-06-15', 0, 0, 0),
(269, 44, '2021-06-15', 0, 0, 0),
(270, 45, '2021-06-15', 0, 0, 0),
(271, 46, '2021-06-15', 0, 0, 0),
(272, 47, '2021-06-15', 0, 0, 0),
(273, 48, '2021-06-15', 0, 0, 0),
(274, 49, '2021-06-15', 0, 0, 0),
(275, 50, '2021-06-15', 0, 0, 0),
(276, 51, '2021-06-15', 0, 0, 0),
(277, 52, '2021-06-15', 0, 0, 0),
(278, 53, '2021-06-15', 0, 0, 0),
(279, 54, '2021-06-15', 0, 0, 0),
(280, 55, '2021-06-15', 0, 0, 0),
(281, 56, '2021-06-15', 0, 0, 0),
(282, 57, '2021-06-15', 0, 0, 0),
(283, 58, '2021-06-15', 0, 0, 0),
(284, 59, '2021-06-15', 0, 0, 0),
(285, 60, '2021-06-15', 0, 0, 0),
(286, 61, '2021-06-15', 0, 0, 0),
(287, 1, '2021-06-16', 100, 0, 0),
(288, 2, '2021-06-16', 0, 0, 0),
(289, 3, '2021-06-16', 200, 0, 0),
(290, 4, '2021-06-16', 0, 0, 0),
(291, 5, '2021-06-16', 0, 0, 0),
(292, 6, '2021-06-16', 0, 0, 0),
(293, 7, '2021-06-16', 0, 0, 0),
(294, 8, '2021-06-16', 0, 0, 0),
(295, 9, '2021-06-16', 0, 0, 0),
(296, 10, '2021-06-16', 0, 0, 0),
(297, 11, '2021-06-16', 0, 0, 0),
(298, 12, '2021-06-16', 0, 0, 0),
(299, 13, '2021-06-16', 0, 0, 0),
(300, 14, '2021-06-16', 0, 0, 0),
(301, 15, '2021-06-16', 0, 0, 0),
(302, 16, '2021-06-16', 0, 0, 0),
(303, 17, '2021-06-16', 100, 0, 0),
(304, 18, '2021-06-16', 0, 0, 0),
(305, 21, '2021-06-16', 0, 0, 0),
(306, 22, '2021-06-16', 0, 0, 0),
(307, 25, '2021-06-16', 0, 0, 0),
(308, 26, '2021-06-16', 0, 0, 0),
(309, 27, '2021-06-16', 0, 0, 0),
(310, 28, '2021-06-16', 0, 0, 0),
(311, 29, '2021-06-16', 0, 0, 0),
(312, 30, '2021-06-16', 0, 0, 0),
(313, 31, '2021-06-16', 0, 0, 0),
(314, 32, '2021-06-16', 0, 0, 0),
(315, 33, '2021-06-16', 0, 0, 0),
(316, 34, '2021-06-16', 0, 0, 0),
(317, 35, '2021-06-16', 0, 0, 0),
(318, 36, '2021-06-16', 0, 0, 0),
(319, 37, '2021-06-16', 0, 0, 0),
(320, 38, '2021-06-16', 0, 0, 0),
(321, 39, '2021-06-16', 0, 0, 0),
(322, 40, '2021-06-16', 0, 0, 0),
(323, 41, '2021-06-16', 0, 0, 0),
(324, 42, '2021-06-16', 0, 0, 0),
(325, 43, '2021-06-16', 0, 0, 0),
(326, 44, '2021-06-16', 0, 0, 0),
(327, 45, '2021-06-16', 0, 0, 0),
(328, 46, '2021-06-16', 0, 0, 0),
(329, 47, '2021-06-16', 0, 0, 0),
(330, 48, '2021-06-16', 0, 0, 0),
(331, 49, '2021-06-16', 0, 0, 0),
(332, 50, '2021-06-16', 0, 0, 0),
(333, 51, '2021-06-16', 0, 0, 0),
(334, 52, '2021-06-16', 0, 0, 0),
(335, 53, '2021-06-16', 0, 0, 0),
(336, 54, '2021-06-16', 0, 0, 0),
(337, 55, '2021-06-16', 0, 0, 0),
(338, 56, '2021-06-16', 0, 0, 0),
(339, 57, '2021-06-16', 0, 0, 0),
(340, 58, '2021-06-16', 0, 0, 0),
(341, 59, '2021-06-16', 0, 0, 0),
(342, 60, '2021-06-16', 0, 0, 0),
(343, 61, '2021-06-16', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `epf` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`epf`, `username`, `level`, `password`) VALUES
('1001', 'Produksi', 0, 'b8c37e33defde51cf91e1e03e51657da'),
('6458', 'Lukman', 0, '9d63484abb477c97640154d40595a3bb'),
('8497', 'Naka', 1, '4ef42b32bccc9485b10b8183507e5d82');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `line`
--
ALTER TABLE `line`
  ADD PRIMARY KEY (`idline`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `setup`
--
ALTER TABLE `setup`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `spm`
--
ALTER TABLE `spm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`epf`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `line`
--
ALTER TABLE `line`
  MODIFY `idline` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `spm`
--
ALTER TABLE `spm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=344;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
