-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2017 at 09:52 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kemas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `nama_admin`, `passwd`) VALUES
('001', NULL, 'ihsan', 'ihsan'),
('123', NULL, 'haha', 'haha');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `id` int(1) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `no_kp` varchar(255) DEFAULT NULL,
  `tarikhlahir` date DEFAULT NULL,
  `warganegara` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `ambilan` varchar(255) DEFAULT NULL,
  `notel` varchar(255) DEFAULT NULL,
  `jantina` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `keturunan` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `tempatlahir` varchar(255) DEFAULT NULL,
  `tinggi` varchar(255) DEFAULT NULL,
  `berat` varchar(255) DEFAULT NULL,
  `nama_keluarga` varchar(255) DEFAULT NULL,
  `pangkat` varchar(255) DEFAULT NULL,
  `alamat_keluarga` varchar(255) DEFAULT NULL,
  `tempatlahir_keluarga` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `namakerja` varchar(255) DEFAULT NULL,
  `alamatkerja` varchar(255) DEFAULT NULL,
  `tahun_spm` varchar(255) DEFAULT NULL,
  `keputusan_spm` varchar(255) DEFAULT NULL,
  `namasek_spm` varchar(255) DEFAULT NULL,
  `tahun_dip` varchar(255) DEFAULT NULL,
  `cgpa_dip` varchar(255) DEFAULT NULL,
  `bidang_dip` varchar(255) DEFAULT NULL,
  `universiti_dip` varchar(255) DEFAULT NULL,
  `tahun_tinggi` varchar(255) DEFAULT NULL,
  `cgpa_tinggi` varchar(255) DEFAULT NULL,
  `bidang_tinggi` varchar(255) DEFAULT NULL,
  `universiti_tinggi` varchar(255) DEFAULT NULL,
  `nama_sukan` varchar(255) DEFAULT NULL,
  `jawatan` varchar(255) DEFAULT NULL,
  `pencapaian` varchar(255) DEFAULT NULL,
  `tempoh` varchar(255) DEFAULT NULL,
  `syarat` varchar(255) DEFAULT NULL,
  `status_admin` varchar(255) DEFAULT 'Dalam proses',
  `iv_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`id`, `username`, `nama`, `no_kp`, `tarikhlahir`, `warganegara`, `alamat`, `ambilan`, `notel`, `jantina`, `status`, `keturunan`, `agama`, `tempatlahir`, `tinggi`, `berat`, `nama_keluarga`, `pangkat`, `alamat_keluarga`, `tempatlahir_keluarga`, `pekerjaan`, `namakerja`, `alamatkerja`, `tahun_spm`, `keputusan_spm`, `namasek_spm`, `tahun_dip`, `cgpa_dip`, `bidang_dip`, `universiti_dip`, `tahun_tinggi`, `cgpa_tinggi`, `bidang_tinggi`, `universiti_tinggi`, `nama_sukan`, `jawatan`, `pencapaian`, `tempoh`, `syarat`, `status_admin`, `iv_date`) VALUES
(1, 'kaitoackerman', 'hawa hanani', '123123', '0001-01-01', 'Ya', 'hahahahahaha', '2014', '123123123', 'Lelaki', 'Bujang', 'Melayu', 'Islam', 'asd', '1', '1', 'hmmm', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'Setuju', 'Ditolak', '2017-09-06'),
(2, 'hasanah', 'siti hasanah binti mazlan', '970802145920', '1997-08-02', 'Ya', 'taman desa cheras', '2015', '0183922370', 'Perempuan', 'Bujang', 'Bumiputra', 'Islam', 'kl', '156', '47', 'mazlan bin hassan', 'bapa', 'taman desa cheras', 'kl', 'pilot', 'pilot', 'awan', '2012', '12A', 'smip', '2015', '4.00', 'dcs', 'kuis', '2015', '4.88', 'bcs', 'kuis', 'bola sepak', 'ahli', 'juara peringkat sekolah', '2', 'Setuju', 'Ditolak', '2017-09-13'),
(3, 'khalilah', 'Siti nur Khalilah binti Mazlan', '800712145637', '0002-02-22', 'Ya', 'kl', '2016', '0123632149', 'Perempuan', 'Berkahwin', 'Bumiputra', 'Islam', 'kl', '158', '60', 'mazlan bin hassan', 'bapa', 'kl', 'kl', 'sv', 'sv', 'kl', '2012', '12B', 'smksa', '2014', '4.00', 'twq', 'kuis', '2015', '3.8', 'twq', 'kuis', 'ping pong', 'ahli', 'tiada', '1', 'Setuju', 'Diterima', '2017-09-29'),
(4, 'zainab', 'zainab', '872637483736', '0001-11-11', 'Bukan', 'kl', '2016', '0192865018', 'Lelaki', 'Bujang', 'Melayu', 'Islam', '', '123', '23', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Terima', NULL),
(18, 'lala', 'lala', '123', '2017-09-11', 'Ya', 'johor', '2015', '123', 'Perempuan', 'Bujang', 'Melayu', 'Islam', 'langat', '12312', '12', 'mazlan', 'Bapa', 'kl', 'Pahang', '', '', '', '1212', '', '', '121', '', '', '', '123', '', '', '', '', '', '', '1', 'Tidak Setuju', 'Dalam proses', NULL),
(19, 'hanani', 'nani', '123', '2017-09-04', 'Ya', 'kl', '2016', '123', 'Lelaki', 'Bujang', 'Bumiputra', 'Islam', 'kl', '123', '90', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Diterima', NULL),
(20, 'popo', 'popo', '123', '0002-02-22', '', 'kl', '2017', '122', '', '', 'Melayu', 'Islam', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Dalam proses', NULL),
(21, 'LAILA', 'NUR LAILA', '970802132378', '1997-08-02', 'Ya', 'KUALA LUMPUR', '2017', '0129323195', 'Perempuan', 'Bujang', 'Melayu', 'Islam', 'KUALA LUMPUR', '160', '29', 'KHAIROL', 'Abang', 'SHAH ALAM', 'Sarawak', 'PENYAPU', 'PENYAPU', 'TEPI JALAN', '2013', '8A', 'SMKKA', '2019', '2.7', 'SDS', 'LKL', '298', '91891', 'JDK', 'LSKLL', 'SA', 'SD', 'AS', '2', 'Setuju', 'Diterima', '2017-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `nofon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nofon`, `email`, `passwd`) VALUES
('baba', '123', 'baba@123', 'baba'),
('hani', '123', 'hani@123', 'hani'),
('hasanah', '0183922370', 'hasanah@gmail.com', 'hasanah'),
('hihi', '123', 'hihi@gmail.com', 'hihi'),
('jaja', '122', 'jaja@gmail.com', 'jaja'),
('joyah', '123', 'joyah@123', 'joyah'),
('jumbo', '12', 'jumbo@123', 'jumbo'),
('kaitoackerman', '123', 'haha@huhu', 'password?'),
('khalilah', '0123632149', 'khalilah@gmail.com', 'khalilah'),
('LAILA', '0183922370', 'laila@gmail.com', 'laila'),
('lala', '123', 'lala@123', 'lala'),
('love', '123', 'love@123', 'love'),
('mama', '12', 'mama@123', 'mama'),
('mazlan', '0187262538', 'mazlan@123', 'mazlan'),
('popo', '123', 'popo@123', 'popo'),
('salsabila', '0193477264', 'salsabila@123', 'salsabila'),
('siti', '123', 'siti@123', 'siti'),
('zainab', '0174653748', 'zainab@123.com', 'zainab');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
