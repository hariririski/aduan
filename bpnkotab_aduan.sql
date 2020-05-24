-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2020 at 03:10 AM
-- Server version: 10.3.22-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpnkotab_aduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`, `status`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Sofia Nelly, S.P', 1, 1),
('hariririski', '21232f297a57a5a743894a0e4a801fc3', 'Hariririski, A.Md', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `id_bidang` int(100) NOT NULL,
  `nama_bidang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`id_bidang`, `nama_bidang`) VALUES
(1, 'TU'),
(2, 'Infrastruktur Pertananahan'),
(3, 'Hubungan Hukum Pertanahan');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengaduan`
--

CREATE TABLE `data_pengaduan` (
  `id_pelapor` int(100) NOT NULL,
  `id_pengaduan` varchar(255) NOT NULL,
  `nomor` varchar(100) DEFAULT NULL,
  `tanggal_pengaduan` date NOT NULL,
  `uraian` longtext NOT NULL,
  `ktp` varchar(100) DEFAULT NULL,
  `bukti1` varchar(100) DEFAULT NULL,
  `bukti2` varchar(100) DEFAULT NULL,
  `jenis_pengaduan` int(20) NOT NULL,
  `tindak_lanjut` longtext DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `id_media_pelaporan` int(20) DEFAULT NULL,
  `penerima` varchar(100) DEFAULT NULL,
  `id_bidang` int(100) DEFAULT NULL,
  `nama_bukti1` varchar(100) NOT NULL,
  `nama_bukti2` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `tanggal_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengaduan`
--

INSERT INTO `data_pengaduan` (`id_pelapor`, `id_pengaduan`, `nomor`, `tanggal_pengaduan`, `uraian`, `ktp`, `bukti1`, `bukti2`, `jenis_pengaduan`, `tindak_lanjut`, `status`, `id_media_pelaporan`, `penerima`, `id_bidang`, `nama_bukti1`, `nama_bukti2`, `nik`, `tanggal_selesai`) VALUES
(1553653634, '15536536340', '3', '2019-03-27', '   INDIKASI ADA KESALAHAN DALAM PENULISAN HASIL PENGUKURAN', NULL, NULL, NULL, 1, ' PERBAIKAN GAMBAR', 1, 1, 'Sofia Nelly, S.P', NULL, 'GAMBAR UKUR ', 'SERTIFIKAT TANAH', '0', '0000-00-00'),
(1553657211, '15536572110', '2', '2019-03-27', '   PELEPASAN SEBAGIAN HAK UNTUK PEMBUATAN PARIT, SERTIPIKAT TANAH ATAS NAMA NURHAYATI AHMAD SELAKU ISTRI BELIAU', NULL, NULL, NULL, 1, ' PELEPASAN TANAH UNTUK JALAN', 1, 1, '', NULL, 'SERTIPIKAT TANAH', 'SURAT UKUR', '0', '0000-00-00'),
(1553659142, '15536591420', '1', '2019-03-27', '   KEPEMILIKAN TANAH', NULL, NULL, NULL, 1, ' buat surat keterangan pendaftaran tanah (SKPT)', 1, 1, '', NULL, 'SURAT KETERANGAN KEUCHIK', '', '0', '0000-00-00'),
(1553744864, '15537448640', '5', '2019-03-28', '   KONSULTASI MENGENAI TANAH', NULL, NULL, NULL, 1, 'PENGADU HANYA BERKONSULTASI.\r\n\r\nPENGADUAN TERSEBUT TIDAK DAPAT DILANJUTKAN\r\n\r\nKARENA TANAH TERSEBUT SUDAH DIKLAIM OLEH TNI.', 1, 1, 'Sofia Nelly, S.P', NULL, 'GAMBAR UKUR', '', '0', '0000-00-00'),
(1553759924, '15537599240', '4', '2019-03-28', '  PENGECEKAN KEMBALI HM, KARENA MENURUT PENGAKUAN PETUGAS UKUR SUDAH ADA HMNYA NO. 2481', NULL, NULL, NULL, 1, ' PERMOHONAN SERTIPIKAT PERTAMA KALI.\r\n SALAH POSISI YANG DIDAFTARKAN OLEH NOTARIS NURDHANI.', 1, 1, 'Sofia Nelly, S.P', NULL, 'AKTA JUAL BELI', '', '0', '0000-00-00'),
(1553833578, '15538335780', '6', '2019-03-29', '       PENGECEKAN KEMBALI LUAS DAN BATAS TANAH PENGADU', NULL, NULL, NULL, 1, '- pengukuran ulang sesuai batas setifikat\r\n\r\n- permohonan pengembalian bbatas', 1, 1, 'Sofia Nelly, S.P', NULL, 'SERTIPIKAT TANAH', 'PETA SITUASI TANAH', '0', '0000-00-00'),
(1554090682, '15540906827', '7', '2019-04-01', ' KONSULTASI SERTIPIKAT AJUDIKASI', NULL, NULL, NULL, 1, ' PENGECEKAN SERTIPIKAT AJUDIKASI DESA JEULINGKE', 1, 1, 'Sofia Nelly, S.P', NULL, 'SERTIPIKAT TANAH', '', '0', '0000-00-00'),
(1554696891, '15546968918', '8', '2019-04-08', 'KONSULTASI DENGAN BAPAK KAKAN', NULL, NULL, NULL, 1, 'telah dipertemukan dengan kepala kantor pertanahan untuk berkonsultasi terkait dengan pelayanan pertanahan.', 1, 1, 'Sofia Nelly, S.P', 1, '-', '', '0', '2020-04-30'),
(1554780458, '15547804589', '9', '2019-04-09', ' KONSULTASI TENTANG SENGKETA TANAH', NULL, NULL, NULL, 1, '- sampaikan surat resmi untuk sengketa\r\n- gugat PTUN untuk pembuktian sertipikat berkenaan dengan keabsahan status sisa tanah lebih dari akta', 1, 1, NULL, NULL, 'SURAT PUTUSAN PENGADILAN', '', '0', '0000-00-00'),
(1554798764, '155479876410', '10', '2019-04-09', ' KONSULTASI TENTANG TANAH', NULL, NULL, NULL, 1, ' sudah dilakukan mediasi karena double sertifikat', 1, 1, 'Sofia Nelly, S.P', NULL, 'SERTIPIKAT TANDA BUKTI HAK', '', '0', '0000-00-00'),
(1554872030, '155487203010', '11', '2019-04-10', ' INDIKASI ADANYA KESALAHAN DALAM PENULISAN HASIL PENGUKURAN', NULL, NULL, NULL, 1, '- periksa arsip GU\r\n\r\n- lakukan perbaikan jika ada kesalahan\r\n\r\n- pengukuran ulang dan pemetaan batas dengan DI.201A jiika diperlukan saja', 1, 1, 'Sofia Nelly, S.P', NULL, 'SERTIPIKAT TANDA BUKTI HAK', '', '0', '0000-00-00'),
(1555315359, '155531535910', '12', '2019-04-15', ' INDIKASI ADA KESALAHAN DALAM GAMBAR UKUR', NULL, NULL, NULL, 1, ' lakukan pengukuran ulang dan pemetaan batas dengan berita acara 201 A', 1, 1, 'Sofia Nelly, S.P', NULL, 'SURAT PERNYATAAN FISIK BIDANG TANAH', '', '0', '0000-00-00'),
(1556072403, '155607240310', '10', '2019-04-24', ' Melakukan Mengecekan Sertipikat yang telah di daftarkan Sebelum Tsunami', NULL, NULL, NULL, 1, ' Data yuridis tidak ditemukan dan sudah diikutkan sebagai peserta PTSL', 1, 1, 'Sofia Nelly, S.P', NULL, '', '', '0', '0000-00-00'),
(1560848274, '156084827410', '10', '2019-06-18', 'REVISI SERTIPIKAT', NULL, NULL, NULL, 1, '1. disarankan untuk selisih  luas antara M. 33 dengan dengan hasil pengukuran baru untuk didaftarkan sebagai dertipikat baru, bukan revisi luas.\r\n\r\n2.bahwa proses penerbitan M.33 tidak terjadi secara semerta-merta, sehingga selisih luas ukuran harus diper', 1, 1, NULL, 2, 'SERTIPIKAT TANAH', 'SURAT KETERANGAN AHLI WARIS', '0', '0000-00-00'),
(1562120224, '156212022410', '10', '2019-07-03', ' LUAS TANAHNYA BERKURANG', NULL, NULL, NULL, 4, 'Disarankan untuk dilakukan mediasi dengan terlebih dahulu pemohon mengirimkan surat permohonan mediasi ke Kantor Pertanahan Kota Banda Aceh disertai dengan alat bukti kepemilikan dan surat-surat lain.', 1, 1, 'Sofia Nelly, S.P', NULL, 'GAMBAR SITUASI ', 'SKPT', '0', '0000-00-00'),
(1567673329, '156767332910', '10', '2019-09-05', '   PENGADU MERASA KEBERATAN DENGAN GAMBAR SITUASI YANG DIKELUARKAN OLEH BPN KOTA BANDA ACEH', NULL, NULL, NULL, 1, '   ', 1, 1, 'Sofia Nelly, S.P', NULL, 'FOTOKOPI SERTIFIKAT HM NO 216/ SEUTUI, A.N TJUT IRSYADEN, DKK', 'GAMBAR SITUASI', '0', '0000-00-00'),
(1567739596, '156773959610', '16', '2019-09-06', ' PENGADU MERASA LUAS TANAH YANG TERCANTUM DI SERTIPIKAT KURANG SESUAI', NULL, NULL, NULL, 1, ' ', 1, 1, 'Sofia Nelly, S.P', NULL, 'SERTIPIKAT', '', '0', '0000-00-00'),
(1569468369, '156946836910', '17', '2019-09-26', ' AHLI WARIS MERASA TIDAK PERNAH MEWAKAFKAN TANAHNYA A.N ALM. TGK MUHAMMAD IDRIS', NULL, NULL, NULL, 1, ' ', 1, 1, 'Sofia Nelly, S.P', NULL, 'PBB 2019', 'SURAT PERNYATAAN WARIS', '0', '0000-00-00'),
(1572399248, '157239924810', '18', '2019-10-30', ' ADANYA KEKELIRUAN DALAM PENGGAMBARAN LETAK TANAH DI SERTIFIKAT', NULL, NULL, NULL, 1, ' ', 1, 1, 'Sofia Nelly, S.P', NULL, 'SERTIFIKAT ASLI', '', '0', '0000-00-00'),
(1572840175, '157284017510', '20', '2019-11-04', '   PENGADU MENGAKU MEMILIKI TANAH DI LAMPOH DAYA, NAMUN SEKARANG TANAH TERSEBUT \r\n\r\nSUDAH BERSERTIFIKAT DAN  SUDAH ADA BANGUNAN YANG DIBANGUN OLEH DEVELOPER.\r\n', NULL, NULL, NULL, 4, ' keterangan dari pengadu bahwa terjadi penyerobotan tanahnya, namun pengadu tidak dapat \r\n\r\nmemperlihatkan bukti kepemilikannya, oleh karena itu petugas menyarankan untuk menyertakan\r\n\r\nbukti kepemilikan terlebih dahulu. pengadu mengatakan pernah mempunya', 1, 1, 'Sofia Nelly, S.P', NULL, '-', '', '0', '0000-00-00'),
(1582100483, '158210048310', '01', '2020-02-19', ' PEMOHON INGIN MELAKUKAN CEK BERSIH SERTIPIKAT, TETAPI SAAT DILAKUKAN PLOTTING DAN VALIDASI TERJADI PEMEKARAN WILAYAH SEHINGGA DATA SERTIPIKAT TERMASUK NOMOR SERTIPIKAT,DESA, SURAT UKUR HINGGA NIB HARUS DIUBAH SESUAI DENGAN KONDISI SAAT INI.', NULL, NULL, NULL, 1, ' SERTIPIKAT TERSEBUT SUDAH DIUBAH DESA,, NOMOR SERTIPIKAT,,SURAT UKUR HINGGA NIB NYA.', 1, 1, 'Sofia Nelly, S.P', NULL, 'SERTIPIKAT', 'FOTO KOPI KTP PEMOHON', '0', '0000-00-00'),
(1582256328, '158225632810', '02', '2020-02-21', '  SERTIFIKAT A.N SUMARDI DENGAN M. 00244 GEUCEU KOMPLEK, YANG AKAN DIHIBAHKAN \r\n\r\nUNTUK ANAK KANDUNG, PAK SUMARDI MEMILIK 2 ANAK DAN 1 ISTERI, ANAK PERTAMANYA DAN \r\n\r\nISTERINYA SUDAH MENINGGAL, DAN TANAH DENGAN SHM NO. 00244 AKAN DIHIBAHKAN KE\r\n\r\nANAK KED', NULL, NULL, NULL, 1, ' DILAMPIRKAN KARTU KELUARGA UNTUK MELIHAT SIAPA SAJA ANGGOTA KELUARGA \r\n\r\nYANG TERSISA ', 1, 1, 'Sofia Nelly, S.P', NULL, 'SERTIPIKAT', 'KTP', '0', '0000-00-00'),
(1582258273, '158225827310', '03', '2020-02-21', '  PENGADU MENYAMPAIKAN BAHWA ADA INDIKASI DOUBLE SERTIFIKAT TERHADAP TANAH\r\n\r\nWAKAF YANG DIKELOLANYA UNTUK PEYATIMAN\r\n\r\n', NULL, NULL, NULL, 1, '1. PELEPASAN SEBAGIAN HAK YANG DILAKUKAN OLEH AHLI WARIS\r\n\r\n2. MELAKUKAN PENETAPAN AHLI WARIS DI MAHKAMAH  SYARIYAH', 1, 1, 'Sofia Nelly, S.P', NULL, 'SERTIFIKAT', '', '0', '0000-00-00'),
(1582258752, '158225875210', '04', '2020-02-21', ' PENGADU INGIN MELAKUKAN UKUR ULANG KARENA PENGADU MERASA LUAS YANG TERETERA \r\n\r\nDI SERTIFIKAT KURANG DARI LUAS YANG SEBENARNYA.', NULL, NULL, NULL, 1, ' ', 1, 1, 'Sofia Nelly, S.P', NULL, 'SERTIPIKAT', '', '0', '0000-00-00'),
(1582274007, '158227400710', '05', '2020-02-21', '   PENGADU INGIN MENANYAKAN KEJELASAN KENAPA TANAHNYA YANG SUDAH DIDAFTAR BELUM \r\n\r\nJUGA DILAKUKAN PENGUKURAN, SEBELUMNYA DIJELASKAN OLEH PETUGAS UKUR \r\n\r\nBAHWASANYA TIDAK DILAKUKAN PENGUKURAN KARENA TANAH TERSEBUT MERUPAKAN \r\n\r\nTANAH NEGARA.\r\n\r\n', NULL, NULL, NULL, 1, '   ', 1, 1, NULL, NULL, 'SPORADIK TANAH', 'FOTOKOPI SERTIFIKAT TANAH DI SAMPING TANAH YANG DIMAKSUD', '0', '0000-00-00'),
(1582622072, '158262207210', '06', '2020-02-25', '  PENGADU MERASA BERKAS PTSLNYA DI TAHUN 2019 TERLALU LAMA SELESAI, PADAHAL \r\n\r\nSERTIFIKAT TERSEBUT MAU DIJUAL UNTUK PELUNASAN HUTANG DAN MAU DIHIBAHKAN \r\n\r\nUNTUK ANAKNYA.\r\n', NULL, NULL, NULL, 1, ' BERKAS AKAN SEGERA DISELESAIKAN JIKA MEMANG TIDAK DITEMUKAN ADANYA KENDALA', 1, 1, 'Sofia Nelly, S.P', NULL, '', '', '0', '0000-00-00'),
(1582703889, '158270388910', '07', '2020-02-26', '  PENGADU MERASA KHAWATIR TANAHNYA MENGALAMI OVERLAP KARENA PADA SAAT \r\n\r\nPENGUKURAN TANAH DI SEKITAR TANAHNYA, PENGADU TIDAK DILIBATKAN', NULL, NULL, NULL, 1, 'SUDAH DILAKUKAN PENGECEKAN DI PETA, HASILNYA MENUNJUKKAN TIDAK ADA OVERLAP BATAS.', 1, 1, NULL, NULL, 'SERTIPIKAT', '', '0', '0000-00-00'),
(1582773529, '158277352910', '08', '2020-02-27', ' PENGADU MENYAMPAIKAN BAHWA NAMA YANG TERTERA DI SERTIFIKAT SEDIKIT BERBEDA \r\n\r\nDENGAN  NAMA YANG TERTERA DI KTP,. \r\n', NULL, NULL, NULL, 1, ' ', 1, 1, 'Sofia Nelly, S.P', NULL, 'KTP', 'SERTIPIKAT', '0', '0000-00-00'),
(1582776301, '158277630110', '09', '2020-02-27', ' pemohon menyampaikan bahwa tanah yang sebelumnya masuk ke wilayah Gampong \r\n\r\nLamgugob,saat ini masuk ke wilayaha Gampong Peurada.', NULL, NULL, NULL, 1, ' ', 1, 1, 'Sofia Nelly, S.P', NULL, 'SURAT KETERANGAN PINDAH DESA', 'FOTOKOPI SERTIPIKAT', '0', '0000-00-00'),
(1582777657, '158277765710', '10', '2020-02-27', 'PEMOHON INGIN MELAKUKAN CEK BERSIH, NAMUN TERKENDALA KARENA ADANYA BLOKIR \r\n\r\nPADA SERTIFIKAT TERSEBUT. SHM NO. 28, GAMPONG PIE A.N CUT KEUMALA SARI.', NULL, NULL, NULL, 1, 'sudah dicek dan ditanya kepada pelapor dan disampaikan oleh pelapor bahwa sengketanya sudah selesai.', 1, 1, 'Sofia Nelly, S.P', 3, 'FOTOKOPI SERTIPIKAT', '', '0', '2020-04-30'),
(1583117534, '158311753410', '10', '2020-03-02', 'PEMOHON MENYAMPAIKAN BAHWA ADA KESALAHAN UKURAN/ LUAS DAN LETAK TANAH\r\n\r\nPADA SERTIFIKAT HAK MILIK NO. 10030 ALUE NAGA, A.N RUSNIATI. MJ.\r\n\r\n', NULL, NULL, NULL, 1, NULL, 0, 1, 'Sofia Nelly, S.P', NULL, 'SERTIPIKAT', 'SURAT KUASA', '0', '0000-00-00'),
(1583984642, '158398464210', '11', '2020-03-12', ' PEMOHON MERUPAKAN AHLI WARIS DARI PEMBELI SEBAGIAN TANAH DENGAN SERTIFIKAT HAK\r\n\r\nMILIK 2 A.N IBNU UMAR DI NEUSU ACEH.\r\n\r\nBERDASARKAN INFORMASI DARI PENGADU, DISAMPAIKAN OLEH PEMEGANG \r\n\r\nSERTIFIKAT TANAH TERSEBUT BAHWA SERTIFIKATNYA TELAH HILANG.\r\n\r\nMOH', NULL, NULL, NULL, 1, ' ', 1, 1, 'Sofia Nelly, S.P', NULL, 'SURAT KETERANGAN JUAL BELI', 'SURAT KEPUTUSAN MAHKAMAH ', '0', '0000-00-00'),
(1584001319, '158400131910', '12', '2020-03-12', ' PENGADU MERASA ADA KESALAHAN GAMBAR PADA SERTIFIKAT HM 02557 ATEUK JAWO, ATAS NAMA MARIAMAH', NULL, NULL, NULL, 1, ' ', 1, 1, 'Sofia Nelly, S.P', NULL, 'SERTIPIKAT', '', '0', '0000-00-00'),
(1587276738, '158727673814', '14/2020', '2020-04-19', 'apakah masyarakat bisa melakukan pengecekan sertipikat online?', NULL, NULL, NULL, 1, 'Walaikum Salam\r\n<br>\r\nPengecekan Sertifikat ada Bebepa Jenis :\r\n<br>\r\n1. Penyecekan Sertifikat Milik Pribadi Dengan Aplikasi Sentuh Tanahku  pada menu INFO SERTIFIKAT yang dapat download di play store dengan link \r\n<a href=\"https://play.google.com/store/apps/details?id=id.go.bpn.sentuh\"  target=\"_blank\" >https://play.google.com/store/apps/details?id=id.go.bpn.sentuh</a> \r\ndan untuk proses pendaftaran dapat dilihat di \r\n<a href=\"https://www.atrbpn.go.id/Layanan-Publik/APLIKASI-SENTUH-TANAHKU/Panduan-Sentuh-Tanahku\" target=\"_blank\" >https://www.atrbpn.go.id/Layanan-Publik/APLIKASI-SENTUH-TANAHKU/Panduan-Sentuh-Tanahku</a>\r\n<br>\r\n2. Pengecekan berkas proses pensertifikatan dapat di cek juga di aplikasi sentuh tanahku dengan menu INFO BERKAS\r\n<br>\r\n3. Untuk Pengecekan Lainnya Harus Melalui Kantor Pertanahan sesuai dengan lokasi Tanah Anda\r\n<br>\r\nterima kasih', 1, 2, 'Sofia Nelly, S.P', 2, '', '', '2147483647', '2020-04-20'),
(1587324557, '158732455715', '15/2019', '2019-11-09', 'Selamat pagi, mohon dibantu berkas tanah saya belum selesai sejak januari 2019, saya sudah bolak balik ke kantor tersebut tapi hanya diberi janji saja, terakhir saya ke kantor sekitar 8 juli 2019 juga hanya diberi janji, tapi belum ada kabar sampai sekarang\r\n\r\nNomor berkas : 887\r\nKantor pertanahan kota banda aceh', NULL, NULL, NULL, 1, 'Mohon Maaf Atas Ketidak Nyamanannya.\r\nSebelumnya sertipikat telah selesai tapi pemohon menyanggah karena gambar pada sertipikat menurut pemohon tidak sesuai..\r\nTpi proses memperbaharui gambar mengalami miskominikasi sehingga permasalhan berlarut larut...\r', 1, 4, 'Hariririski, A.Md', 3, '', '', '0', '2019-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `no` int(20) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `artikel` longtext NOT NULL,
  `id_informasi` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`no`, `judul`, `artikel`, `id_informasi`, `tanggal`, `foto`) VALUES
(1, 'Sertifikat atau Sertipikat', 'Taukah kamu Kementerian Agraria dan Tata Ruang /\nBadan Pertanahan Nasional tidak menggunakan\nistilah \"SERTIFIKAT\" sebagaimana yang tertera di\nKamus Besar Bahasa Indonesia (KBBI).\n\nDalam PP No. 24 Tahun 1997 tentang pendaftaran tanah,\nTertulis: \"Sertipikat Adalah Surat Tanda Bukti untuk\nhak atas tanah, hak pengelolaan, tanah wakaf,\nhak milik atas satuan rumah susun dan hak tanggungan\nyang sudah dibukukan dalam buku tanah.\"\n\nItulah mengapa pada dokumen hak atas tanah\ntertulis \"SERTIPIKAT\"', 1, '2020-04-12 12:28:35', '01.png');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_informasi`
--

CREATE TABLE `jenis_informasi` (
  `id_informasi` int(11) NOT NULL,
  `nama_jenis_informasi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_informasi`
--

INSERT INTO `jenis_informasi` (`id_informasi`, `nama_jenis_informasi`) VALUES
(1, 'Kamus'),
(2, 'Layanan Pertanahan'),
(3, 'Faq');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pengaduan`
--

CREATE TABLE `jenis_pengaduan` (
  `id_jenis_pengaduan` int(20) NOT NULL,
  `nama_jenis_pengaduan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pengaduan`
--

INSERT INTO `jenis_pengaduan` (`id_jenis_pengaduan`, `nama_jenis_pengaduan`) VALUES
(1, 'Pelayanan Pertanahan'),
(2, 'Pelayanan Tata Ruang'),
(3, 'Pelanggaran disiplin Pegawai Negeri Sipil'),
(4, 'Sengketa dan Konflik Pertanahan'),
(5, 'Belum Di tentukan'),
(6, 'informasi Pertanahan');

-- --------------------------------------------------------

--
-- Table structure for table `media_pelaporan`
--

CREATE TABLE `media_pelaporan` (
  `id_media_pelaporan` int(11) NOT NULL,
  `nama_media_pelaporan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media_pelaporan`
--

INSERT INTO `media_pelaporan` (`id_media_pelaporan`, `nama_media_pelaporan`) VALUES
(1, 'Kantor Pertanahan'),
(2, 'Aplikasi KIBAN'),
(3, 'Sodial Media'),
(4, 'Lapor.go.id');

-- --------------------------------------------------------

--
-- Table structure for table `pelapor`
--

CREATE TABLE `pelapor` (
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `no_telepon` varchar(30) NOT NULL,
  `id_pelapor` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelapor`
--

INSERT INTO `pelapor` (`nama`, `alamat`, `email`, `pekerjaan`, `no_telepon`, `id_pelapor`) VALUES
('Handidi', 'Jalan Sudikamindan sudimanan', 'sudikaman @gmail.com', 'PNS', '09223333889812', 1553520750),
('Handidi', 'Jalan Sudikamindan sudimanan', 'sudikaman @gmail.com', 'PNS', '09223333889812', 1553521548),
('Handidi', 'Jalan Sudikamindan sudimanan', 'sudikaman @gmail.com', 'PNS', '09223333889812', 1553521602),
('FENTY SARI SYAM', 'DUSUN TGK. CANTEK, KEL BAET, KEC BAITUSSALAM', '', 'MENGURUS RUMAH TANGGA', '+6285262710889', 1553653634),
('IDRIS DALAMY', 'JL SUKARNO HATTA LR TGK MEUNARAI NO 25, KEL GEUCEU MEUNARA, KEC JAYA BARU', '', 'PENSIUNAN', '+6281360610810', 1553657211),
('NURJANNAH', 'JURONG ULEE KRUENG, KEL. BALOHAN, KEC SUKAJAYA, KOTA SABANG', '', 'PEDAGANG', '-', 1553659142),
('DEDEK NOVITA', 'JL MUJAHIDIN LR MANGA NO. 6, KEL LAMBARO SKEP, KEC KUTA ALAM, KOTA BANDA ACEH', '', 'KARYAWAN HONORER', '+6281360003614', 1553744864),
('NANDA RAHMAD', 'DUSUN MUJAHIDIN, KEL MNS ASAN AB, KEC LHOKSUKON, KAB ACEH UTARA', '', 'PNS', '+6285261237378', 1553759924),
('ZULKIFLI M ALI', 'KOMP BUDHA SUCI, KEL PANTERIEK, KEC LUENG BATA, KOTA BANDA ACEH', '', 'WIRASWASTA', '+6281269160032', 1553833578),
('a', 'a', 'a', 'a', 'a', 1554016937),
('sutisna', 'hann', 'ajaja', 'nanan', 'ananan', 1554021406),
('TEUKU FAHRIZAL, ST', 'JL. TROPIKA 15 BLOK B. 1 NO 82 CIKARANG BARU, KEL SERTAJAYA, KEC CIKAANG TIMUR, KAB BEKASI, JAWA BARAT', '', 'KARYAWAN SWASTA', '+6281282333330', 1554090682),
('Hariri Riski', 'hariririski@gmail.com', 'hariririski@gmail.com', 'PNS', '082237653720', 1554561366),
('AINOL MARDIAH', 'JL KEBUN RAJA, KEL IE MASEN ULEE KARENG, KEC ULEE KARENG, KOTA BANDA ACEH', '', 'MENGURUS RUMAH TANGGA', '+6285277796574', 1554694590),
('AINOL MARDIAH', 'JLN. KEBUN RAJA, KEL IE MASEN ULEE KARENG, KEC ULEE KARENG, KOTA BANDA ACEH', '', 'MENGURUS RUMAH TANGGA', '-', 1554694968),
('AINOL MARDIAH', 'JLN. KEBUN RAJA, KEL IE MASEN ULEE KARENG, KEC ULEE KARENG, KOTA BANDA ACEH', '', 'MENGURUS RUMAH TANGGA', '-', 1554695140),
('DAHLIA', 'DUSUN TGK. DI-LEUE', '', 'MENGURUS RUMAH TANGGA', '+6282363336788', 1554696891),
('ARDHINA BAKRI', 'JL. TP ACEH LR DARUSSALAM,KEL MERDUATI, KEC  KUTA RAJA, KOTA BANDA ACEH', '', 'WIRASWASTA', '+6281262944598', 1554780458),
('ZAKARIA IBRAHIM', 'JL SUDIRMAN VI NO 6 DSN CEMPAKA PUTIH, KEL GEUCEU INIEM, KEC BANDA RAYA, KOTA BANDA ACEH', '', 'MEKANIK', '+6282276322949', 1554798764),
('LISTIANTO', 'PANDRAH KANDEH', '', 'BELUM/ TIDAK BEKERJA', '+6285277400977', 1554872030),
('MUHAMMAD AS', 'JL. ABADI DUSUN KAMBOJA, KEL LAMTEUMEN TIMUR, KEC JAYA BARU, KOTA BANDA ACEH', '', 'WIRASWASTA', '-', 1555315359),
('MUHAMMAD AS', 'JL. ABADI DUSUN KAMBOJA, KEL LAMTEUMEN TIMUR, KEC JAYA BARU, KOTA BANDA ACEH', '', 'WIRASWASTA', '-', 1555315508),
('Ir. Abdul Zaini Yusuf', 'Banda Aceh', '', '-', '081383831659', 1556072403),
('FAHRIL QAMAR', 'JL. UNMUHA NO . 75 A, DUSUN LAMPUUK JAYA, BATOH, LEUNG BATA', '', 'WIRASWASTA', '085277009585', 1560848274),
('SUFENDI SELIAN', 'JL S M RAJA, MULIA, KUTA ALAM', '', 'WIRASWASTA', '085260095167', 1562120224),
('CUT SANDRANITA', 'JL. MESJID TAQWA NO. 11. A SEUTUI BANDA ACEH', '', 'PNS', '085260699567', 1567673329),
('CUT ROSMAWAR', 'LR. CEMPAKA, NO. 8, ATEUK PAHLWAN', '', 'PENSIUNAN', '081383067038', 1567739596),
('AMRUL PRIBADI', 'JL. T. A. HAMZAH NO. 306, LK. IV, BINJAI UTARA', '', 'WIRASWASTA', '081376297755', 1569468369),
('ZULKARNAEN', 'JL ATEUK JAWO, BAITURRAHMAN', '', 'KARYAWAN SWASTA', '085260613145', 1572399248),
('ROHAYATI', 'JL. STA JOHANSYAH LR TR ABDULLAH', '-', 'IRT', '085277002299/ 082369', 1572840175),
('ANNISA HAFLANI', 'JL. RAMASETIA NO.78 , LAMPASEH KOTA', '-', 'PE', '085362346230', 1575964278),
('MANIDAR IBRAHIM', 'LR AKASIA NO 12 DUSUN PEURADA LAMGUGOB', '', 'PNS', '085227476430', 1582100483),
('SURYA DARMA', 'JL. RAWA SAKTI, PERUMNAS LINGKE, JEULINGKE', '-', 'PELAJAR/ MAHASISWA', '085207210091', 1582256328),
('MAMAN SURYAMAN', 'KP. CURUNG PONCOL, BABAKAN, TANGERANG SELATAN', '-', 'KARYAWAN SWASTA', '087871109022', 1582258273),
('RITA SAHARA', 'LHONG RAYA, BANDA RAYA', '-', 'IRT', '081360995502', 1582258752),
('USMAN', 'GAMPONG PIE, MEURAXA', '-', 'WIRASWASTA', '081377313063', 1582274007),
('BACHTIAR', '-', '-', '-', '081360414221', 1582622072),
('AHMAD HASAN', 'PINEUNG, SYIAH KUALA', '-', 'PNS', '0811680383', 1582703889),
('RAYUATI', 'JL. CINTA KASIH, PANTEURIK, LUENG BATA', '-', 'IRT', '082160297369', 1582773529),
('NURUN NAFIS ABD JALIL', 'GAMPONG PEURADA', '-', 'PELAJAR/ MAHASISWA', '081262111521', 1582776301),
('NELVITA YUNIASTANTI', 'BATOH, LUENG BATA', '', 'IRT', '081360230525', 1582777657),
('TEDI RIHANDI', 'DELIMA, TAMPAN, RIAU, KOTA PEKANBARU, RIAU', '-', 'KARYAWAN SWASTA', '085263436559', 1582862366),
('USMAN ABDULLAH', 'ALUE NAGA, SYIAH KUALA', '-', 'NELAYAN/ PERIKANAN', '085277239152', 1583117534),
('MULYANI', 'TANJONG SELAMAT, ACEH BESAR', '-', 'IRT', '08126936506', 1583984642),
('MARIAMAH', 'ATEUK MUNJENG ', '-', 'TUKANG JAHIT', '085260209526', 1584001319),
('Hariri Riski', 'Riski', '-', 'PNS', '082237653720', 1586703064),
('Hariri Riski', 'Riski', '-', 'PNS', '082237653720', 1586703230),
('Hariri Riski', 'Riski', '-', 'PNS', '082237653720', 1586706073),
('Hariri Riski', 'Riski', '-', 'PNS', '082237653720', 1586706289),
('Hariri Riski', 'Riski', '-', 'PNS', '082237653720', 1586706315),
('Hariri Riski', 'Riski', '-', 'PNS', '082237653720', 1586706318),
('Hariri Riski', 'Riski', '-', 'PNS', '082237653720', 1586706325),
('Hariri Riski', 'Riski', '-', 'PNS', '082237653720', 1586706337),
('Hariri Riski', 'Riski', '-', 'PNS', '082237653720', 1586706340),
('Eric Jones', 'Kadjbrwfn', '-', 'Tox I', '416-385-3200', 1586980922),
('Rheza', 'Kota Banda Aceh', '', 'PNs', '082228015858', 1587276738),
('Hariri Riski', 'Kuta alam', '-', 'PNS', '082237653720', 1587312961),
('Anonim', '-', '', '-', '0000000000', 1587324557),
('fgggg', 'Yyyy', '-', 'ffft', '055236665', 1587326334),
('Hariri Riski', 's', '-', '1', '082237653720', 1587326349),
('Eric Jones', 'Nvxsdw', '-', 'Zddybdawwt', '416-385-3200', 1588082629);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `nama_kantor` varchar(100) NOT NULL,
  `nama_kepala` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`nama_kantor`, `nama_kepala`, `nip`, `jabatan`) VALUES
('Kantor Pertanahan <BR>Kota Banda Aceh', 'Drs.SURIA BAKTI, M.Si', '196408071986031004', 'Kepala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `data_pengaduan`
--
ALTER TABLE `data_pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `jenis_informasi`
--
ALTER TABLE `jenis_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `jenis_pengaduan`
--
ALTER TABLE `jenis_pengaduan`
  ADD PRIMARY KEY (`id_jenis_pengaduan`);

--
-- Indexes for table `media_pelaporan`
--
ALTER TABLE `media_pelaporan`
  ADD PRIMARY KEY (`id_media_pelaporan`);

--
-- Indexes for table `pelapor`
--
ALTER TABLE `pelapor`
  ADD PRIMARY KEY (`id_pelapor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id_bidang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jenis_informasi`
--
ALTER TABLE `jenis_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_pengaduan`
--
ALTER TABLE `jenis_pengaduan`
  MODIFY `id_jenis_pengaduan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `media_pelaporan`
--
ALTER TABLE `media_pelaporan`
  MODIFY `id_media_pelaporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelapor`
--
ALTER TABLE `pelapor`
  MODIFY `id_pelapor` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1589433652;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
