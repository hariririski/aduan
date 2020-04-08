-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Mar 2019 pada 16.20
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pengaduan` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`, `pengaduan`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Sofia Nelly, S.P', 1, 1),
('hariririski', '21232f297a57a5a743894a0e4a801fc3', 'Sofia Nelly, S.P', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengaduan`
--

CREATE TABLE `data_pengaduan` (
  `id_pelapor` int(100) NOT NULL,
  `id_pengaduan` varchar(255) NOT NULL,
  `nomor` varchar(100) DEFAULT NULL,
  `tanggal_pengaduan` date NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `nama_bukti1` varchar(100) DEFAULT NULL,
  `nama_bukti2` varchar(100) DEFAULT NULL,
  `nama_bukti3` varchar(100) DEFAULT NULL,
  `jenis_pengaduan` int(20) NOT NULL,
  `tindak lanjut` varchar(255) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  `nama_bukti4` varchar(100) DEFAULT NULL,
  `nama_bukti5` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pengaduan`
--

INSERT INTO `data_pengaduan` (`id_pelapor`, `id_pengaduan`, `nomor`, `tanggal_pengaduan`, `uraian`, `nama_bukti1`, `nama_bukti2`, `nama_bukti3`, `jenis_pengaduan`, `tindak lanjut`, `status`, `nama_bukti4`, `nama_bukti5`) VALUES
(1553156891, '15531568911', '1', '2019-03-21', 'Saya sudah memebuat surat selama setahun tadi tidak kunjung selesai dan daya di minta uang kepada petugas ukun tuk uang transportasi senilai 300.000 ribu', 'Buku Tanah', 'Sertifikat Tanah Rusak', '', 1, NULL, 0, NULL, NULL),
(1553156913, '15531569132', '2', '2019-03-21', 'Saya sudah memebuat surat selama setahun tadi tidak kunjung selesai dan daya di minta uang kepada petugas ukun tuk uang transportasi senilai 300.000 ribu', 'Kwitansi', '', '', 1, NULL, 0, NULL, NULL),
(1553521647, '15535216476', '6', '2019-03-25', 'Aku mAlu', 'aa', 'a', 'a', 4, NULL, 0, '', ''),
(1553521707, '15535217077', '7', '2019-03-25', 'a', 'aa', 'a', 'a', 1, NULL, 0, NULL, NULL),
(1553522338, '15535223388', '8', '2019-03-25', 'b', 'b', 'b', 'b', 1, NULL, 0, 'b', 'b'),
(1553522354, '15535223549', '9', '2019-03-25', 'b', 'b', 'b', 'b', 1, NULL, 0, 'b', 'b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_pengaduan`
--

CREATE TABLE `jenis_pengaduan` (
  `id_jenis_pengaduan` int(20) NOT NULL,
  `nama_jenis_pengaduan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_pengaduan`
--

INSERT INTO `jenis_pengaduan` (`id_jenis_pengaduan`, `nama_jenis_pengaduan`) VALUES
(1, 'Pelayanan Pertanahan'),
(2, 'Pelayanan Tata Ruang'),
(3, 'Pelanggaran disiplin Pegawai Negeri Sipil'),
(4, 'Sengketa dan Konflik Pertanahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelapor`
--

CREATE TABLE `pelapor` (
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `id_pelapor` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelapor`
--

INSERT INTO `pelapor` (`nama`, `alamat`, `email`, `pekerjaan`, `no_telepon`, `id_pelapor`) VALUES
('Hariririski', 'Jalan T. Hamzah Bendahara NO 31', 'hariririski@gmail.com', 'PNS', '082237653720', 1553156891),
('Hariririski', 'Jalan T. Hamzah Bendahara NO 31', 'hariririski@gmail.com', 'PNS', '082237653720', 1553156913),
('Handidi', 'Jalan Sudikamindan sudimanan', 'sudikaman @gmail.com', 'PNS', '09223333889812', 1553520750),
('Handidi', 'Jalan Sudikamindan sudimanan', 'sudikaman @gmail.com', 'PNS', '09223333889812', 1553521548),
('Handidi', 'Jalan Sudikamindan sudimanan', 'sudikaman @gmail.com', 'PNS', '09223333889812', 1553521602),
('Sup', 'a', 'a', 'a', 'a', 1553521647),
('a', 'a', 'a', 'a', 'a', 1553521707),
('b', 'b', 'b', 'b', 'b', 1553522338),
('b', 'b', 'b', 'b', 'b', 1553522354),
('a', 'a', 'a', 'a', 'a', 1553522355),
('a', 'a', 'a', 'a', 'a', 1553522356),
('Supreme', 'a', 'a', 'a', 'a', 1553522357),
('sumpreme', 'a', 'a', 'a', 'a', 1553522358),
('supreme', 'a', 'a', 'a', 'a', 1553522359);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `nama_kantor` varchar(100) NOT NULL,
  `nama_kepala` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `data_pengaduan`
--
ALTER TABLE `data_pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `jenis_pengaduan`
--
ALTER TABLE `jenis_pengaduan`
  ADD PRIMARY KEY (`id_jenis_pengaduan`);

--
-- Indexes for table `pelapor`
--
ALTER TABLE `pelapor`
  ADD PRIMARY KEY (`id_pelapor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_pengaduan`
--
ALTER TABLE `jenis_pengaduan`
  MODIFY `id_jenis_pengaduan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pelapor`
--
ALTER TABLE `pelapor`
  MODIFY `id_pelapor` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1553522360;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
