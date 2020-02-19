-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Feb 2020 pada 08.33
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psikotes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `nomor_peserta` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `kelamin` enum('Laki-Laki','Perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`nomor_peserta`, `nama`, `tgl_lahir`, `nomor_telepon`, `kelamin`) VALUES
(123, 'Muhammad Rifqi', '1996-04-28', '089604422219', 'Laki-Laki'),
(1230, 'rifqo', '2019-11-18', '089604422219', 'Laki-Laki'),
(54541253, 'Test User', '1992-04-28', '089604422219', 'Laki-Laki'),
(123000000, 'rifqi', '1995-05-28', '089604422219', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `psikotes`
--

CREATE TABLE `psikotes` (
  `id_psikotes` varchar(30) NOT NULL,
  `nomor_peserta` int(30) NOT NULL,
  `tgl_tes` date NOT NULL,
  `benar` int(3) NOT NULL,
  `salah` int(3) NOT NULL,
  `score_total` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `psikotes`
--

INSERT INTO `psikotes` (`id_psikotes`, `nomor_peserta`, `tgl_tes`, `benar`, `salah`, `score_total`) VALUES
('P021019163310', 123, '2019-10-02', 0, 0, 0),
('P051219065647', 123000000, '2019-12-05', 0, 0, 0),
('P181119131929', 1230, '2019-11-18', 0, 0, 0),
('P211019091803', 54541253, '2019-10-21', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `score`
--

CREATE TABLE `score` (
  `id_score` int(15) NOT NULL,
  `id_soal` int(10) NOT NULL,
  `id_psikotes` varchar(30) NOT NULL,
  `nama_soal` varchar(15) NOT NULL,
  `score` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `score`
--

INSERT INTO `score` (`id_score`, `id_soal`, `id_psikotes`, `nama_soal`, `score`) VALUES
(1, 19, 'P021019163310', 'tes_1', 1),
(2, 24, 'P021019163310', 'tes_1', 1),
(3, 25, 'P021019163310', 'tes_1', 1),
(4, 26, 'P021019163310', 'tes_1', 1),
(5, 27, 'P021019163310', 'tes_1', 1),
(26, 19, 'P211019091803', 'tes_1', 1),
(27, 24, 'P211019091803', 'tes_1', 1),
(28, 25, 'P211019091803', 'tes_1', 1),
(29, 26, 'P211019091803', 'tes_1', 1),
(30, 27, 'P211019091803', 'tes_1', 1),
(31, 19, 'P181119131929', 'tes_1', 1),
(32, 24, 'P181119131929', 'tes_1', 0),
(33, 25, 'P181119131929', 'tes_1', 0),
(34, 26, 'P181119131929', 'tes_1', 0),
(35, 27, 'P181119131929', 'tes_1', 0),
(36, 29, 'P181119131929', 'tes_1', 0),
(37, 30, 'P181119131929', 'tes_1', 0),
(38, 31, 'P181119131929', 'tes_1', 1),
(39, 32, 'P181119131929', 'tes_1', 0),
(40, 33, 'P181119131929', 'tes_1', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(30) NOT NULL,
  `nama_soal` varchar(20) NOT NULL,
  `soal` text NOT NULL,
  `jawaban` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id_soal`, `nama_soal`, `soal`, `jawaban`) VALUES
(9, 'tes_2', '{\"soal\":\"<p>Adi lebih ringan dari Thomas<br \\/>\\r\\nBudi lebih berat dari Thomas<br \\/>\\r\\nSiapa yang terberat?<\\/p>\\r\\n\",\"option_1\":\"Adi\",\"option_2\":\"Thomas\",\"option_3\":\"Budi\"}', 'Budi'),
(10, 'tes_2', '{\"soal\":\"<p>Sari lebih lamban dari Unin<br \\/>\\r\\nUnin lebih lamban dari Yani<br \\/>\\r\\nSiapa yang tercepat?<\\/p>\\r\\n\",\"option_1\":\"Sari\",\"option_2\":\"Unin\",\"option_3\":\"Yani\"}', 'Yani'),
(16, 'tes_3', '{\"option_1\":\"3\",\"option_2\":\"18\",\"option_3\":\"10\"}', '18'),
(19, 'tes_1', '{\"soal_1\":\"K\",\"soal_2\":\"W\",\"soal_3\":\"M\",\"soal_4\":\"Q\",\"soal_5\":\"k\",\"soal_6\":\"w\",\"soal_7\":\"m\",\"soal_8\":\"q\"}', '4'),
(22, 'tes_4', '{\"option_1\":\"T\",\"option_2\":\"V\",\"option_3\":\"Y\"}', 'Y'),
(23, 'tes_5', '{\"option_1\":\"transform :rotate(180deg) scale(-1, 1)\",\"option_2\":\"transform :rotate(90deg) scale(1, -1)\",\"option_3\":\"transform :rotate(90deg) \",\"option_4\":\"transform :rotate(90deg) scale(1, -1)\",\"option_5\":\"transform :rotate(180deg) \",\"option_6\":\"transform :rotate(180deg) scale(-1, 1)\"}', '1'),
(24, 'tes_1', '{\"soal_1\":\"r\",\"soal_2\":\"t\",\"soal_3\":\"g\",\"soal_4\":\"j\",\"soal_5\":\"K\",\"soal_6\":\"P\",\"soal_7\":\"Q\",\"soal_8\":\"F\"}', '0'),
(25, 'tes_1', '{\"soal_1\":\"T\",\"soal_2\":\"J\",\"soal_3\":\"B\",\"soal_4\":\"Q\",\"soal_5\":\"d\",\"soal_6\":\"h\",\"soal_7\":\"m\",\"soal_8\":\"k\"}', '0'),
(26, 'tes_1', '{\"soal_1\":\"P\",\"soal_2\":\"M\",\"soal_3\":\"Q\",\"soal_4\":\"D\",\"soal_5\":\"j\",\"soal_6\":\"t\",\"soal_7\":\"f\",\"soal_8\":\"h\"}', '0'),
(27, 'tes_1', '{\"soal_1\":\"R\",\"soal_2\":\"Q\",\"soal_3\":\"F\",\"soal_4\":\"W\",\"soal_5\":\"r\",\"soal_6\":\"q\",\"soal_7\":\"f\",\"soal_8\":\"w\"}', '4'),
(28, 'tes_2', '{\"soal\":\"<p>Adi lebih muda dari Yalin<br \\/>\\r\\nAdi lebih tua dari Jarot<br \\/>\\r\\nSiapa yang termuda?<\\/p>\\r\\n\",\"option_1\":\"Adi\",\"option_2\":\"Yalin\",\"option_3\":\"Jarot\"}', 'Jarot'),
(29, 'tes_1', '{\"soal_1\":\"T\",\"soal_2\":\"B\",\"soal_3\":\"N\",\"soal_4\":\"R\",\"soal_5\":\"k\",\"soal_6\":\"b\",\"soal_7\":\"m\",\"soal_8\":\"j\"}', '1'),
(30, 'tes_1', '{\"soal_1\":\"k\",\"soal_2\":\"r\",\"soal_3\":\"h\",\"soal_4\":\"t\",\"soal_5\":\"K\",\"soal_6\":\"R\",\"soal_7\":\"H\",\"soal_8\":\"T\"}', '4'),
(31, 'tes_1', '{\"soal_1\":\"f\",\"soal_2\":\"t\",\"soal_3\":\"p\",\"soal_4\":\"r\",\"soal_5\":\"Q\",\"soal_6\":\"D\",\"soal_7\":\"P\",\"soal_8\":\"M\"}', '1'),
(32, 'tes_1', '{\"soal_1\":\"r\",\"soal_2\":\"q\",\"soal_3\":\"j\",\"soal_4\":\"g\",\"soal_5\":\"W\",\"soal_6\":\"N\",\"soal_7\":\"J\",\"soal_8\":\"T\"}', '1'),
(33, 'tes_1', '{\"soal_1\":\"h\",\"soal_2\":\"m\",\"soal_3\":\"w\",\"soal_4\":\"d\",\"soal_5\":\"B\",\"soal_6\":\"M\",\"soal_7\":\"N\",\"soal_8\":\"P\"}', '1'),
(34, 'tes_5', '{\"option_1\":\"transform :rotate(90deg) scale(-1, 1)\",\"option_2\":\"transform :rotate(90deg) scale(1, -1)\",\"option_3\":\"transform :rotate(180deg) \",\"option_4\":\"transform :rotate(0deg) scale(1, -1)\",\"option_5\":\"transform :rotate(0deg) scale(1, -1)\",\"option_6\":\"transform :rotate(90deg) scale(1, -1)\"}', '2'),
(35, 'tes_5', '{\"option_1\":\"transform :rotate(90deg) scale(1, -1)\",\"option_2\":\"transform :rotate(180deg) scale(-1, 1)\",\"option_3\":\"transform :rotate(90deg) \",\"option_4\":\"transform :rotate(180deg) \",\"option_5\":\"transform :rotate(90deg) scale(-1, 1)\",\"option_6\":\"transform :rotate(180deg) \"}', '2'),
(36, 'tes_2', '{\"soal\":\"<p>Erwan lebih pendek dari Faisal<br \\/>\\r\\nErwan lebih tinggi dari Yudi<br \\/>\\r\\nSiapa yang tertinggi?<\\/p>\\r\\n\",\"option_1\":\"Erwan\",\"option_2\":\"Faisal\",\"option_3\":\"Yudi\"}', 'Faisal'),
(37, 'tes_2', '{\"soal\":\"<p>Galuh lebih cerdas dari Ridwan<br \\/>\\r\\nGaluh lebih bodoh dari&nbsp; Jarot<br \\/>\\r\\nsiapa yang terbodoh?<\\/p>\\r\\n\",\"option_1\":\"Galuh\",\"option_2\":\"Ridwan\",\"option_3\":\"Jarot\"}', 'Ridwan'),
(38, 'tes_3', '{\"option_1\":\"13\",\"option_2\":\"20\",\"option_3\":\"25\"}', '13'),
(39, 'tes_3', '{\"option_1\":\"14\",\"option_2\":\"22\",\"option_3\":\"28\"}', '14'),
(40, 'tes_4', '{\"option_1\":\"G\",\"option_2\":\"J\",\"option_3\":\"N\"}', 'N'),
(41, 'tes_4', '{\"option_1\":\"G\",\"option_2\":\"L\",\"option_3\":\"N\"}', 'G'),
(42, 'tes_4', '{\"option_1\":\"D\",\"option_2\":\"I\",\"option_3\":\"L\"}', 'D'),
(43, 'tes_4', '{\"option_1\":\"L\",\"option_2\":\"O\",\"option_3\":\"S\"}', 'S'),
(44, 'tes_4', '{\"option_1\":\"R\",\"option_2\":\"W\",\"option_3\":\"Z\"}', 'R'),
(45, 'tes_4', '{\"option_1\":\"R\",\"option_2\":\"U\",\"option_3\":\"Y\"}', 'Y'),
(46, 'tes_4', '{\"option_1\":\"G\",\"option_2\":\"J\",\"option_3\":\"N\"}', 'N'),
(47, 'tes_3', '{\"option_1\":\"22\",\"option_2\":\"15\",\"option_3\":\"10\"}', '22'),
(48, 'tes_3', '{\"option_1\":\"19\",\"option_2\":\"25\",\"option_3\":\"12\"}', '12'),
(49, 'tes_3', '{\"option_1\":\"5\",\"option_2\":\"8\",\"option_3\":\"12\"}', '12'),
(50, 'tes_3', '{\"option_1\":\"13\",\"option_2\":\"24\",\"option_3\":\"19\"}', '13'),
(51, 'tes_3', '{\"option_1\":\"14\",\"option_2\":\"19\",\"option_3\":\"6\"}', '6'),
(52, 'tes_2', '{\"soal\":\"<p>Melly lebih cepat dari Dinda<br \\/>\\r\\nNinik lebih lamban dari Dinda<br \\/>\\r\\nSiapa yang terlamban?<\\/p>\\r\\n\",\"option_1\":\"Melly\",\"option_2\":\"Ninik\",\"option_3\":\"Dinda\"}', 'Ninik'),
(53, 'tes_2', '{\"soal\":\"<p>Agam lebih pintar dari Doni<br \\/>\\r\\nAgam lebih bodoh dari Adi<br \\/>\\r\\nSiapa yang terpintar?<\\/p>\\r\\n\",\"option_1\":\"Agam\",\"option_2\":\"Doni\",\"option_3\":\"Adi\"}', 'Adi'),
(54, 'tes_2', '{\"soal\":\"<p>Erna lebih cerdas dari Yuni<br \\/>\\r\\nYuni lebih cerdas dari Anisa<br \\/>\\r\\nSiapa yang tercerdas?<\\/p>\\r\\n\",\"option_1\":\"Erna\",\"option_2\":\"Yuni\",\"option_3\":\"Anisa\"}', 'Erna'),
(55, 'tes_5', '{\"option_1\":\"transform :rotate(90deg) scale(-1, 1)\",\"option_2\":\"transform :rotate(180deg) scale(-1, 1)\",\"option_3\":\"\",\"option_4\":\"\",\"option_5\":\"\",\"option_6\":\"\"}', '0'),
(56, 'tes_4', '{\"option_1\":\"M\",\"option_2\":\"P\",\"option_3\":\"R\"}', 'M'),
(57, 'tes_1', '{\"soal_1\":\"H\",\"soal_2\":\"R\",\"soal_3\":\"D\",\"soal_4\":\"G\",\"soal_5\":\"m\",\"soal_6\":\"r\",\"soal_7\":\"d\",\"soal_8\":\"g\"}', '3'),
(58, 'tes_1', '{\"soal_1\":\"D\",\"soal_2\":\"M\",\"soal_3\":\"W\",\"soal_4\":\"T\",\"soal_5\":\"q\",\"soal_6\":\"m\",\"soal_7\":\"w\",\"soal_8\":\"p\"}', '2'),
(59, 'tes_1', '{\"soal_1\":\"D\",\"soal_2\":\"Q\",\"soal_3\":\"N\",\"soal_4\":\"G\",\"soal_5\":\"p\",\"soal_6\":\"q\",\"soal_7\":\"r\",\"soal_8\":\"h\"}', '1'),
(60, 'tes_1', '{\"soal_1\":\"K\",\"soal_2\":\"D\",\"soal_3\":\"M\",\"soal_4\":\"F\",\"soal_5\":\"k\",\"soal_6\":\"d\",\"soal_7\":\"m\",\"soal_8\":\"f\"}', '4'),
(61, 'tes_1', '{\"soal_1\":\"N\",\"soal_2\":\"P\",\"soal_3\":\"D\",\"soal_4\":\"Q\",\"soal_5\":\"n\",\"soal_6\":\"p\",\"soal_7\":\"d\",\"soal_8\":\"t\"}', '3'),
(62, 'tes_1', '{\"soal_1\":\"r\",\"soal_2\":\"t\",\"soal_3\":\"m\",\"soal_4\":\"q\",\"soal_5\":\"R\",\"soal_6\":\"T\",\"soal_7\":\"M\",\"soal_8\":\"Q\"}', '4'),
(63, 'tes_1', '{\"soal_1\":\"j\",\"soal_2\":\"b\",\"soal_3\":\"h\",\"soal_4\":\"r\",\"soal_5\":\"M\",\"soal_6\":\"N\",\"soal_7\":\"G\",\"soal_8\":\"W\"}', '0'),
(64, 'tes_1', '{\"soal_1\":\"f\",\"soal_2\":\"t\",\"soal_3\":\"r\",\"soal_4\":\"k\",\"soal_5\":\"F\",\"soal_6\":\"T\",\"soal_7\":\"R\",\"soal_8\":\"K\"}', '4'),
(65, 'tes_1', '{\"soal_1\":\"H\",\"soal_2\":\"T\",\"soal_3\":\"K\",\"soal_4\":\"F\",\"soal_5\":\"w\",\"soal_6\":\"t\",\"soal_7\":\"k\",\"soal_8\":\"q\"}', '2'),
(66, 'tes_1', '{\"soal_1\":\"B\",\"soal_2\":\"T\",\"soal_3\":\"D\",\"soal_4\":\"F\",\"soal_5\":\"b\",\"soal_6\":\"t\",\"soal_7\":\"k\",\"soal_8\":\"f\"}', '3'),
(67, 'tes_1', '{\"soal_1\":\"K\",\"soal_2\":\"G\",\"soal_3\":\"T\",\"soal_4\":\"W\",\"soal_5\":\"k\",\"soal_6\":\"f\",\"soal_7\":\"d\",\"soal_8\":\"w\"}', '2'),
(68, 'tes_1', '{\"soal_1\":\"t\",\"soal_2\":\"h\",\"soal_3\":\"r\",\"soal_4\":\"b\",\"soal_5\":\"W\",\"soal_6\":\"K\",\"soal_7\":\"D\",\"soal_8\":\"B\"}', '1'),
(69, 'tes_1', '{\"soal_1\":\"N\",\"soal_2\":\"P\",\"soal_3\":\"G\",\"soal_4\":\"R\",\"soal_5\":\"m\",\"soal_6\":\"p\",\"soal_7\":\"g\",\"soal_8\":\"r\"}', '3'),
(70, 'tes_1', '{\"soal_1\":\"J\",\"soal_2\":\"R\",\"soal_3\":\"Q\",\"soal_4\":\"B\",\"soal_5\":\"n\",\"soal_6\":\"m\",\"soal_7\":\"w\",\"soal_8\":\"g\"}', '0'),
(71, 'tes_1', '{\"soal_1\":\"t\",\"soal_2\":\"p\",\"soal_3\":\"k\",\"soal_4\":\"m\",\"soal_5\":\"T\",\"soal_6\":\"P\",\"soal_7\":\"K\",\"soal_8\":\"R\"}', '3'),
(72, 'tes_1', '{\"soal_1\":\"h\",\"soal_2\":\"b\",\"soal_3\":\"r\",\"soal_4\":\"n\",\"soal_5\":\"H\",\"soal_6\":\"T\",\"soal_7\":\"K\",\"soal_8\":\"Q\"}', '1'),
(73, 'tes_1', '{\"soal_1\":\"M\",\"soal_2\":\"G\",\"soal_3\":\"J\",\"soal_4\":\"N\",\"soal_5\":\"h\",\"soal_6\":\"k\",\"soal_7\":\"t\",\"soal_8\":\"n\"}', '1'),
(74, 'tes_1', '{\"soal_1\":\"b\",\"soal_2\":\"p\",\"soal_3\":\"d\",\"soal_4\":\"m\",\"soal_5\":\"B\",\"soal_6\":\"P\",\"soal_7\":\"D\",\"soal_8\":\"M\"}', '4'),
(75, 'tes_1', '{\"soal_1\":\"N\",\"soal_2\":\"T\",\"soal_3\":\"P\",\"soal_4\":\"F\",\"soal_5\":\"h\",\"soal_6\":\"t\",\"soal_7\":\"r\",\"soal_8\":\"j\"}', '1'),
(76, 'tes_1', '{\"soal_1\":\"g\",\"soal_2\":\"d\",\"soal_3\":\"t\",\"soal_4\":\"w\",\"soal_5\":\"G\",\"soal_6\":\"D\",\"soal_7\":\"T\",\"soal_8\":\"W\"}', '4'),
(77, 'tes_1', '{\"soal_1\":\"J\",\"soal_2\":\"N\",\"soal_3\":\"W\",\"soal_4\":\"D\",\"soal_5\":\"g\",\"soal_6\":\"r\",\"soal_7\":\"k\",\"soal_8\":\"m\"}', '4'),
(78, 'tes_1', '{\"soal_1\":\"d\",\"soal_2\":\"w\",\"soal_3\":\"p\",\"soal_4\":\"b\",\"soal_5\":\"F\",\"soal_6\":\"N\",\"soal_7\":\"R\",\"soal_8\":\"M\"}', '0'),
(79, 'tes_1', '{\"soal_1\":\"d\",\"soal_2\":\"r\",\"soal_3\":\"k\",\"soal_4\":\"n\",\"soal_5\":\"D\",\"soal_6\":\"G\",\"soal_7\":\"B\",\"soal_8\":\"N\"}', '2'),
(80, 'tes_1', '{\"soal_1\":\"j\",\"soal_2\":\"h\",\"soal_3\":\"d\",\"soal_4\":\"q\",\"soal_5\":\"M\",\"soal_6\":\"T\",\"soal_7\":\"D\",\"soal_8\":\"Q\"}', '2'),
(81, 'tes_1', '{\"soal_1\":\"w\",\"soal_2\":\"t\",\"soal_3\":\"h\",\"soal_4\":\"f\",\"soal_5\":\"W\",\"soal_6\":\"Q\",\"soal_7\":\"D\",\"soal_8\":\"F\"}', '2'),
(82, 'tes_1', '{\"soal_1\":\"D\",\"soal_2\":\"B\",\"soal_3\":\"P\",\"soal_4\":\"K\",\"soal_5\":\"j\",\"soal_6\":\"b\",\"soal_7\":\"w\",\"soal_8\":\"k\"}', '2'),
(83, 'tes_1', '{\"soal_1\":\"q\",\"soal_2\":\"t\",\"soal_3\":\"k\",\"soal_4\":\"r\",\"soal_5\":\"H\",\"soal_6\":\"N\",\"soal_7\":\"P\",\"soal_8\":\"M\"}', '0'),
(84, 'tes_1', '{\"soal_1\":\"B\",\"soal_2\":\"Q\",\"soal_3\":\"G\",\"soal_4\":\"J\",\"soal_5\":\"b\",\"soal_6\":\"q\",\"soal_7\":\"g\",\"soal_8\":\"j\"}', '4'),
(85, 'tes_1', '{\"soal_1\":\"M\",\"soal_2\":\"F\",\"soal_3\":\"G\",\"soal_4\":\"H\",\"soal_5\":\"m\",\"soal_6\":\"n\",\"soal_7\":\"j\",\"soal_8\":\"w\"}', '1'),
(86, 'tes_1', '{\"soal_1\":\"n\",\"soal_2\":\"g\",\"soal_3\":\"j\",\"soal_4\":\"d\",\"soal_5\":\"N\",\"soal_6\":\"G\",\"soal_7\":\"J\",\"soal_8\":\"D\"}', '4'),
(87, 'tes_1', '{\"soal_1\":\"Q\",\"soal_2\":\"F\",\"soal_3\":\"D\",\"soal_4\":\"H\",\"soal_5\":\"w\",\"soal_6\":\"g\",\"soal_7\":\"m\",\"soal_8\":\"p\"}', '0'),
(88, 'tes_1', '{\"soal_1\":\"B\",\"soal_2\":\"W\",\"soal_3\":\"F\",\"soal_4\":\"M\",\"soal_5\":\"b\",\"soal_6\":\"w\",\"soal_7\":\"f\",\"soal_8\":\"q\"}', '3'),
(89, 'tes_1', '{\"soal_1\":\"k\",\"soal_2\":\"d\",\"soal_3\":\"r\",\"soal_4\":\"p\",\"soal_5\":\"K\",\"soal_6\":\"D\",\"soal_7\":\"R\",\"soal_8\":\"P\"}', '4'),
(90, 'tes_1', '{\"soal_1\":\"w\",\"soal_2\":\"p\",\"soal_3\":\"g\",\"soal_4\":\"h\",\"soal_5\":\"W\",\"soal_6\":\"K\",\"soal_7\":\"G\",\"soal_8\":\"R\"}', '2'),
(91, 'tes_1', '{\"soal_1\":\"d\",\"soal_2\":\"t\",\"soal_3\":\"h\",\"soal_4\":\"b\",\"soal_5\":\"G\",\"soal_6\":\"T\",\"soal_7\":\"N\",\"soal_8\":\"B\"}', '2'),
(92, 'tes_1', '{\"soal_1\":\"f\",\"soal_2\":\"k\",\"soal_3\":\"d\",\"soal_4\":\"g\",\"soal_5\":\"F\",\"soal_6\":\"R\",\"soal_7\":\"D\",\"soal_8\":\"G\"}', '3'),
(93, 'tes_1', '{\"soal_1\":\"w\",\"soal_2\":\"q\",\"soal_3\":\"n\",\"soal_4\":\"h\",\"soal_5\":\"W\",\"soal_6\":\"Q\",\"soal_7\":\"N\",\"soal_8\":\"H\"}', '4'),
(94, 'tes_1', '{\"soal_1\":\"d\",\"soal_2\":\"n\",\"soal_3\":\"h\",\"soal_4\":\"t\",\"soal_5\":\"D\",\"soal_6\":\"G\",\"soal_7\":\"W\",\"soal_8\":\"T\"}', '2'),
(95, 'tes_1', '{\"soal_1\":\"F\",\"soal_2\":\"P\",\"soal_3\":\"D\",\"soal_4\":\"Q\",\"soal_5\":\"b\",\"soal_6\":\"p\",\"soal_7\":\"d\",\"soal_8\":\"q\"}', '3'),
(96, 'tes_1', '{\"soal_1\":\"n\",\"soal_2\":\"k\",\"soal_3\":\"d\",\"soal_4\":\"g\",\"soal_5\":\"j\",\"soal_6\":\"M\",\"soal_7\":\"W\",\"soal_8\":\"Q\"}', '0'),
(97, 'tes_1', '{\"soal_1\":\"Q\",\"soal_2\":\"K\",\"soal_3\":\"D\",\"soal_4\":\"N\",\"soal_5\":\"q\",\"soal_6\":\"p\",\"soal_7\":\"d\",\"soal_8\":\"n\"}', '3'),
(98, 'tes_1', '{\"soal_1\":\"w\",\"soal_2\":\"q\",\"soal_3\":\"g\",\"soal_4\":\"d\",\"soal_5\":\"J\",\"soal_6\":\"R\",\"soal_7\":\"D\",\"soal_8\":\"P\"}', '1'),
(99, 'tes_1', '{\"soal_1\":\"W\",\"soal_2\":\"D\",\"soal_3\":\"B\",\"soal_4\":\"K\",\"soal_5\":\"p\",\"soal_6\":\"d\",\"soal_7\":\"j\",\"soal_8\":\"n\"}', '1'),
(100, 'tes_1', '{\"soal_1\":\"f\",\"soal_2\":\"t\",\"soal_3\":\"d\",\"soal_4\":\"j\",\"soal_5\":\"F\",\"soal_6\":\"T\",\"soal_7\":\"D\",\"soal_8\":\"B\"}', '3'),
(101, 'tes_1', '{\"soal_1\":\"W\",\"soal_2\":\"M\",\"soal_3\":\"K\",\"soal_4\":\"H\",\"soal_5\":\"b\",\"soal_6\":\"m\",\"soal_7\":\"p\",\"soal_8\":\"h\"}', '2'),
(102, 'tes_1', '{\"soal_1\":\"B\",\"soal_2\":\"Q\",\"soal_3\":\"W\",\"soal_4\":\"T\",\"soal_5\":\"b\",\"soal_6\":\"r\",\"soal_7\":\"g\",\"soal_8\":\"h\"}', '1'),
(103, 'tes_1', '{\"soal_1\":\"H\",\"soal_2\":\"R\",\"soal_3\":\"J\",\"soal_4\":\"K\",\"soal_5\":\"h\",\"soal_6\":\"p\",\"soal_7\":\"j\",\"soal_8\":\"k\"}', '3'),
(104, 'tes_1', '{\"soal_1\":\"f\",\"soal_2\":\"q\",\"soal_3\":\"h\",\"soal_4\":\"b\",\"soal_5\":\"F\",\"soal_6\":\"K\",\"soal_7\":\"P\",\"soal_8\":\"T\"}', '1'),
(105, 'tes_1', '{\"soal_1\":\"t\",\"soal_2\":\"g\",\"soal_3\":\"p\",\"soal_4\":\"b\",\"soal_5\":\"T\",\"soal_6\":\"G\",\"soal_7\":\"H\",\"soal_8\":\"W\"}', '2'),
(106, 'tes_1', '{\"soal_1\":\"T\",\"soal_2\":\"K\",\"soal_3\":\"W\",\"soal_4\":\"J\",\"soal_5\":\"t\",\"soal_6\":\"k\",\"soal_7\":\"m\",\"soal_8\":\"j\"}', '3'),
(107, 'tes_3', '{\"option_1\":\"21\",\"option_2\":\"7\",\"option_3\":\"13\"}', '21'),
(108, 'tes_3', '{\"option_1\":\"19\",\"option_2\":\"5\",\"option_3\":\"11\"}', '19'),
(109, 'tes_3', '{\"option_1\":\"29\",\"option_2\":\"23\",\"option_3\":\"15\"}', '15'),
(110, 'tes_3', '{\"option_1\":\"13\",\"option_2\":\"20\",\"option_3\":\"8\"}', '20'),
(111, 'tes_3', '{\"option_1\":\"29\",\"option_2\":\"14\",\"option_3\":\"22\"}', '14'),
(112, 'tes_3', '{\"option_1\":\"28\",\"option_2\":\"21\",\"option_3\":\"16\"}', '28'),
(113, 'tes_3', '{\"option_1\":\"6\",\"option_2\":\"21\",\"option_3\":\"13\"}', '21'),
(114, 'tes_3', '{\"option_1\":\"3\",\"option_2\":\"9\",\"option_3\":\"16\"}', '16'),
(115, 'tes_3', '{\"option_1\":\"4\",\"option_2\":\"15\",\"option_3\":\"9\"}', '15'),
(116, 'tes_3', '{\"option_1\":\"22\",\"option_2\":\"14\",\"option_3\":\"9\"}', '22'),
(117, 'tes_3', '{\"option_1\":\"24\",\"option_2\":\"19\",\"option_3\":\"13\"}', '13'),
(118, 'tes_3', '{\"option_1\":\"14\",\"option_2\":\"29\",\"option_3\":\"21\"}', '29'),
(119, 'tes_3', '{\"option_1\":\"24\",\"option_2\":\"16\",\"option_3\":\"11\"}', '24'),
(120, 'tes_3', '{\"option_1\":\"17\",\"option_2\":\"10\",\"option_3\":\"5\"}', '17'),
(121, 'tes_3', '{\"option_1\":\"16\",\"option_2\":\"2\",\"option_3\":\"8\"}', '16'),
(122, 'tes_3', '{\"option_1\":\"20\",\"option_2\":\"14\",\"option_3\":\"9\"}', '20'),
(123, 'tes_3', '{\"option_1\":\"5\",\"option_2\":\"12\",\"option_3\":\"18\"}', '5'),
(124, 'tes_3', '{\"option_1\":\"26\",\"option_2\":\"11\",\"option_3\":\"19\"}', '11'),
(125, 'tes_3', '{\"option_1\":\"16\",\"option_2\":\"28\",\"option_3\":\"23\"}', '16'),
(126, 'tes_3', '{\"option_1\":\"11\",\"option_2\":\"26\",\"option_3\":\"19\"}', '11'),
(127, 'tes_3', '{\"option_1\":\"23\",\"option_2\":\"28\",\"option_3\":\"16\"}', '16'),
(128, 'tes_3', '{\"option_1\":\"19\",\"option_2\":\"5\",\"option_3\":\"13\"}', '5'),
(129, 'tes_3', '{\"option_1\":\"15\",\"option_2\":\"21\",\"option_3\":\"28\"}', '28'),
(130, 'tes_3', '{\"option_1\":\"3\",\"option_2\":\"16\",\"option_3\":\"11\"}', '3'),
(131, 'tes_3', '{\"option_1\":\"22\",\"option_2\":\"15\",\"option_3\":\"7\"}', '7'),
(132, 'tes_3', '{\"option_1\":\"8\",\"option_2\":\"15\",\"option_3\":\"2\"}', '15'),
(133, 'tes_3', '{\"option_1\":\"21\",\"option_2\":\"6\",\"option_3\":\"14\"}', '6'),
(134, 'tes_3', '{\"option_1\":\"18\",\"option_2\":\"10\",\"option_3\":\"3\"}', '18'),
(135, 'tes_3', '{\"option_1\":\"11\",\"option_2\":\"22\",\"option_3\":\"17\"}', '11'),
(136, 'tes_3', '{\"option_1\":\"27\",\"option_2\":\"19\",\"option_3\":\"13\"}', '27'),
(137, 'tes_3', '{\"option_1\":\"22\",\"option_2\":\"14\",\"option_3\":\"28\"}', '14'),
(138, 'tes_3', '{\"option_1\":\"19\",\"option_2\":\"26\",\"option_3\":\"14\"}', '26'),
(139, 'tes_3', '{\"option_1\":\"17\",\"option_2\":\"22\",\"option_3\":\"21\"}', '17'),
(140, 'tes_3', '{\"option_1\":\"17\",\"option_2\":\"22\",\"option_3\":\"28\"}', '28'),
(141, 'tes_3', '{\"option_1\":\"22\",\"option_2\":\"17\",\"option_3\":\"10\"}', '10'),
(142, 'tes_3', '{\"option_1\":\"15\",\"option_2\":\"28\",\"option_3\":\"22\"}', '15'),
(143, 'tes_3', '{\"option_1\":\"7\",\"option_2\":\"12\",\"option_3\":\"18\"}', '18'),
(144, 'tes_3', '{\"option_1\":\"28\",\"option_2\":\"15\",\"option_3\":\"21\"}', '28'),
(145, 'tes_3', '{\"option_1\":\"23\",\"option_2\":\"15\",\"option_3\":\"28\"}', '15'),
(146, 'tes_3', '{\"option_1\":\"14\",\"option_2\":\"26\",\"option_3\":\"21\"}', '14'),
(147, 'tes_3', '{\"option_1\":\"16\",\"option_2\":\"11\",\"option_3\":\"22\"}', '22'),
(148, 'tes_3', '{\"option_1\":\"28\",\"option_2\":\"15\",\"option_3\":\"21\"}', '28'),
(149, 'tes_3', '{\"option_1\":\"29\",\"option_2\":\"17\",\"option_3\":\"24\"}', '17'),
(150, 'tes_3', '{\"option_1\":\"27\",\"option_2\":\"12\",\"option_3\":\"19\"}', '27'),
(151, 'tes_3', '{\"option_1\":\"10\",\"option_2\":\"2\",\"option_3\":\"15\"}', '2'),
(152, 'tes_3', '{\"option_1\":\"22\",\"option_2\":\"28\",\"option_3\":\"15\"}', '15'),
(153, 'tes_3', '{\"option_1\":\"14\",\"option_2\":\"19\",\"option_3\":\"27\"}', '27'),
(154, 'tes_3', '{\"option_1\":\"16\",\"option_2\":\"10\",\"option_3\":\"21\"}', '10'),
(155, 'tes_3', '{\"option_1\":\"10\",\"option_2\":\"2\",\"option_3\":\"15\"}', '2'),
(156, 'tes_3', '{\"option_1\":\"6\",\"option_2\":\"11\",\"option_3\":\"19\"}', '19'),
(157, 'tes_3', '{\"option_1\":\"12\",\"option_2\":\"25\",\"option_3\":\"17\"}', '25'),
(158, 'tes_3', '{\"option_1\":\"4\",\"option_2\":\"10\",\"option_3\":\"18\"}', '18'),
(159, 'tes_4', '{\"option_1\":\"O\",\"option_2\":\"T\",\"option_3\":\"V\"}', 'O'),
(160, 'tes_4', '{\"option_1\":\"O\",\"option_2\":\"Q\",\"option_3\":\"R\"}', 'O'),
(161, 'tes_4', '{\"option_1\":\"K\",\"option_2\":\"M\",\"option_3\":\"R\"}', 'R'),
(162, 'tes_4', '{\"option_1\":\"S\",\"option_2\":\"V\",\"option_3\":\"Z\"}', 'Z'),
(163, 'tes_4', '{\"option_1\":\"L\",\"option_2\":\"N\",\"option_3\":\"R\"}', 'R'),
(164, 'tes_4', '{\"option_1\":\"C\",\"option_2\":\"E\",\"option_3\":\"I\"}', 'I'),
(165, 'tes_4', '{\"option_1\":\"L\",\"option_2\":\"N\",\"option_3\":\"Q\"}', 'Q'),
(166, 'tes_4', '{\"option_1\":\"I\",\"option_2\":\"L\",\"option_3\":\"Q\"}', 'Q'),
(167, 'tes_4', '{\"option_1\":\"R\",\"option_2\":\"T\",\"option_3\":\"X\"}', 'X'),
(168, 'tes_4', '{\"option_1\":\"H\",\"option_2\":\"L\",\"option_3\":\"N\"}', 'H'),
(169, 'tes_4', '{\"option_1\":\"F\",\"option_2\":\"H\",\"option_3\":\"M\"}', 'M'),
(170, 'tes_4', '{\"option_1\":\"K\",\"option_2\":\"O\",\"option_3\":\"Q\"}', 'K'),
(171, 'tes_4', '{\"option_1\":\"O\",\"option_2\":\"S\",\"option_3\":\"X\"}', 'X'),
(172, 'tes_4', '{\"option_1\":\"H\",\"option_2\":\"L\",\"option_3\":\"O\"}', 'H'),
(173, 'tes_4', '{\"option_1\":\"S\",\"option_2\":\"W\",\"option_3\":\"Z\"}', 'S'),
(174, 'tes_4', '{\"option_1\":\"K\",\"option_2\":\"O\",\"option_3\":\"T\"}', 'T'),
(175, 'tes_4', '{\"option_1\":\"N\",\"option_2\":\"P\",\"option_3\":\"T\"}', 'T'),
(176, 'tes_4', '{\"option_1\":\"N\",\"option_2\":\"S\",\"option_3\":\"W\"}', 'N'),
(177, 'tes_4', '{\"option_1\":\"H\",\"option_2\":\"M\",\"option_3\":\"P\"}', 'H'),
(178, 'tes_4', '{\"option_1\":\"S\",\"option_2\":\"V\",\"option_3\":\"X\"}', 'S'),
(179, 'tes_4', '{\"option_1\":\"L\",\"option_2\":\"P\",\"option_3\":\"R\"}', 'L'),
(180, 'tes_4', '{\"option_1\":\"K\",\"option_2\":\"P\",\"option_3\":\"S\"}', 'K'),
(181, 'tes_4', '{\"option_1\":\"I\",\"option_2\":\"M\",\"option_3\":\"R\"}', 'R'),
(182, 'tes_4', '{\"option_1\":\"K\",\"option_2\":\"N\",\"option_3\":\"P\"}', 'K'),
(183, 'tes_4', '{\"option_1\":\"O\",\"option_2\":\"S\",\"option_3\":\"V\"}', 'O'),
(184, 'tes_4', '{\"option_1\":\"O\",\"option_2\":\"Q\",\"option_3\":\"T\"}', 'T'),
(185, 'tes_4', '{\"option_1\":\"O\",\"option_2\":\"T\",\"option_3\":\"X\"}', 'O'),
(186, 'tes_4', '{\"option_1\":\"M\",\"option_2\":\"P\",\"option_3\":\"U\"}', 'U'),
(187, 'tes_4', '{\"option_1\":\"H\",\"option_2\":\"K\",\"option_3\":\"P\"}', 'P'),
(188, 'tes_4', '{\"option_1\":\"E\",\"option_2\":\"G\",\"option_3\":\"J\"}', 'J'),
(189, 'tes_4', '{\"option_1\":\"S\",\"option_2\":\"X\",\"option_3\":\"Z\"}', 'S'),
(190, 'tes_4', '{\"option_1\":\"L\",\"option_2\":\"O\",\"option_3\":\"T\"}', 'T'),
(191, 'tes_4', '{\"option_1\":\"R\",\"option_2\":\"V\",\"option_3\":\"Y\"}', 'R'),
(192, 'tes_4', '{\"option_1\":\"R\",\"option_2\":\"U\",\"option_3\":\"W\"}', 'R'),
(193, 'tes_4', '{\"option_1\":\"J\",\"option_2\":\"M\",\"option_3\":\"Q\"}', 'Q'),
(194, 'tes_4', '{\"option_1\":\"C\",\"option_2\":\"E\",\"option_3\":\"H\"}', 'H'),
(195, 'tes_4', '{\"option_1\":\"D\",\"option_2\":\"I\",\"option_3\":\"L\"}', 'D'),
(196, 'tes_4', '{\"option_1\":\"D\",\"option_2\":\"I\",\"option_3\":\"N\"}', 'N'),
(197, 'tes_4', '{\"option_1\":\"H\",\"option_2\":\"M\",\"option_3\":\"P\"}', 'H'),
(198, 'tes_4', '{\"option_1\":\"F\",\"option_2\":\"K\",\"option_3\":\"O\"}', 'F'),
(199, 'tes_4', '{\"option_1\":\"K\",\"option_2\":\"P\",\"option_3\":\"S\"}', 'K'),
(200, 'tes_4', '{\"option_1\":\"U\",\"option_2\":\"X\",\"option_3\":\"Z\"}', 'U'),
(201, 'tes_4', '{\"option_1\":\"Q\",\"option_2\":\"V\",\"option_3\":\"Z\"}', 'Q'),
(202, 'tes_4', '{\"option_1\":\"E\",\"option_2\":\"H\",\"option_3\":\"M\"}', 'M'),
(203, 'tes_4', '{\"option_1\":\"I\",\"option_2\":\"M\",\"option_3\":\"P\"}', 'I'),
(204, 'tes_4', '{\"option_1\":\"N\",\"option_2\":\"R\",\"option_3\":\"W\"}', 'W'),
(205, 'tes_4', '{\"option_1\":\"P\",\"option_2\":\"T\",\"option_3\":\"Y\"}', 'Y'),
(206, 'tes_4', '{\"option_1\":\"R\",\"option_2\":\"U\",\"option_3\":\"Y\"}', 'Y'),
(207, 'tes_4', '{\"option_1\":\"E\",\"option_2\":\"I\",\"option_3\":\"K\"}', 'E'),
(208, 'tes_4', '{\"option_1\":\"P\",\"option_2\":\"U\",\"option_3\":\"W\"}', 'P'),
(209, 'tes_4', '{\"option_1\":\"R\",\"option_2\":\"W\",\"option_3\":\"Y\"}', 'R'),
(210, 'tes_4', '{\"option_1\":\"S\",\"option_2\":\"U\",\"option_3\":\"Y\"}', 'S'),
(211, 'tes_4', '{\"option_1\":\"J\",\"option_2\":\"M\",\"option_3\":\"Q\"}', 'Q'),
(212, 'tes_4', '{\"option_1\":\"T\",\"option_2\":\"V\",\"option_3\":\"Z\"}', 'Z'),
(213, 'tes_4', '{\"option_1\":\"Q\",\"option_2\":\"S\",\"option_3\":\"W\"}', 'W'),
(214, 'tes_4', '{\"option_1\":\"C\",\"option_2\":\"G\",\"option_3\":\"L\"}', 'L'),
(215, 'tes_4', '{\"option_1\":\"G\",\"option_2\":\"K\",\"option_3\":\"N\"}', 'G'),
(216, 'tes_4', '{\"option_1\":\"B\",\"option_2\":\"E\",\"option_3\":\"I\"}', 'I'),
(217, 'tes_4', '{\"option_1\":\"G\",\"option_2\":\"L\",\"option_3\":\"P\"}', 'G'),
(218, 'tes_4', '{\"option_1\":\"T\",\"option_2\":\"X\",\"option_3\":\"Z\"}', 'T'),
(219, 'tes_4', '{\"option_1\":\"I\",\"option_2\":\"N\",\"option_3\":\"Q\"}', 'I'),
(220, 'tes_4', '{\"option_1\":\"N\",\"option_2\":\"S\",\"option_3\":\"V\"}', 'N'),
(221, 'tes_4', '{\"option_1\":\"L\",\"option_2\":\"O\",\"option_3\":\"Q\"}', 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(2) NOT NULL,
  `user` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `user`, `nama`, `email`, `pass`) VALUES
(5, 'rifqi', 'Muhammad Rifqi', 'kirungugel@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`nomor_peserta`);

--
-- Indeks untuk tabel `psikotes`
--
ALTER TABLE `psikotes`
  ADD PRIMARY KEY (`id_psikotes`),
  ADD KEY `nomor_peserta` (`nomor_peserta`);

--
-- Indeks untuk tabel `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id_score`),
  ADD KEY `id_psikotes` (`id_psikotes`),
  ADD KEY `id_soal` (`id_soal`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `score`
--
ALTER TABLE `score`
  MODIFY `id_score` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `psikotes`
--
ALTER TABLE `psikotes`
  ADD CONSTRAINT `psikotes_ibfk_1` FOREIGN KEY (`nomor_peserta`) REFERENCES `peserta` (`nomor_peserta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `score_ibfk_1` FOREIGN KEY (`id_psikotes`) REFERENCES `psikotes` (`id_psikotes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `score_ibfk_2` FOREIGN KEY (`id_soal`) REFERENCES `soal` (`id_soal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
