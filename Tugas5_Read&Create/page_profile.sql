-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Okt 2020 pada 13.31
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `page_profile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keterampilan`
--

CREATE TABLE `keterampilan` (
  `keterampilan1` varchar(255) NOT NULL,
  `keterampilan2` varchar(255) NOT NULL,
  `keterampilan3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keterampilan`
--

INSERT INTO `keterampilan` (`keterampilan1`, `keterampilan2`, `keterampilan3`) VALUES
('C PROGRAMMING', 'JAVA PROGRAMMING', 'ADOBE PHOTOSHOP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak_saya`
--

CREATE TABLE `kontak_saya` (
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak_saya`
--

INSERT INTO `kontak_saya` (`telepon`, `email`, `lokasi`) VALUES
('087854857434', 'elangputra87@gmail.com', 'Jl.KENANGA <br> RT06 RW 04 <br> DS. KEBOAN SIKEP <br> GEDANGAN SIDOARJO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama`
--

CREATE TABLE `nama` (
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nama`
--

INSERT INTO `nama` (`nama_depan`, `nama_belakang`) VALUES
('', ''),
('Elang Eka', 'Marga Putra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_pendidikan`
--

CREATE TABLE `riwayat_pendidikan` (
  `tahun_pendidikan` varchar(255) NOT NULL,
  `nama_pendidikan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_pendidikan`
--

INSERT INTO `riwayat_pendidikan` (`tahun_pendidikan`, `nama_pendidikan`) VALUES
('2006 - 2012', 'SDN KEBOAN SIKEP 2'),
('2012 - 2015', 'SMP NEGERI 2 SEDATI'),
('2015 - 2018', 'SMA HANGTUAH 2 SDIOARJO'),
('2018 - SEKARANG', 'UPN \"VETERAN\" JAWA TIMUR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang_saya`
--

CREATE TABLE `tentang_saya` (
  `tentang_saya` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tentang_saya`
--

INSERT INTO `tentang_saya` (`tentang_saya`) VALUES
('Saya Elang Eka Marga Putra, <br> umur 20 tahun lahir 8 Desember <br> 1999 tinggal di Sidoarjo, <br> saya kuliah di UPN <br> Veteran Jawa Timur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
