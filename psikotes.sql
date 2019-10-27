-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2019 pada 13.19
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
(54541253, 'Test User', '1992-04-28', '089604422219', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `psikotes`
--

CREATE TABLE `psikotes` (
  `id_psikotes` varchar(30) NOT NULL,
  `nomor_peserta` int(30) NOT NULL,
  `tgl_tes` date NOT NULL,
  `score_total` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `psikotes`
--

INSERT INTO `psikotes` (`id_psikotes`, `nomor_peserta`, `tgl_tes`, `score_total`) VALUES
('P021019163310', 123, '2019-10-02', 0),
('P211019091803', 54541253, '2019-10-21', 0);

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
(30, 27, 'P211019091803', 'tes_1', 1);

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
(56, 'tes_4', '{\"option_1\":\"A\",\"option_2\":\"B\",\"option_3\":\"G\"}', 'G');

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
  MODIFY `id_score` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

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
