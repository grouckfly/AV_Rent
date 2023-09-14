-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 06:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `jk_admin` varchar(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `jk_admin`, `username`, `password`, `alamat`, `no_telepon`, `level`) VALUES
(1, 'paka', 'laki-laki  ', 'paka', 'paka123', 'Jl.Kenangan', '0812345678', 'SUPER'),
(10, 'widiwan', 'Perempuan    ', 'widi', 'widi123', 'jl.kebohongan', '08123854754', 'Petugas'),
(11, 'Rusdi icikiwir', 'Laki-Laki', 'rusdi', 'rusdi123', 'Jl. kenangan', '0876590754', 'Petugas');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_sewa_l` int(11) NOT NULL,
  `id_mobil_l` int(11) NOT NULL,
  `nama_sewa_l` varchar(150) NOT NULL,
  `ktp_l` varchar(50) NOT NULL,
  `jk_l` varchar(50) NOT NULL,
  `alamat_l` varchar(100) NOT NULL,
  `tlp_sewa_l` varchar(20) NOT NULL,
  `tgl_booking_l` date NOT NULL,
  `tgl_sewa_l` date NOT NULL,
  `tgl_kembali_l` date NOT NULL,
  `lama_l` int(11) NOT NULL,
  `denda_l` double NOT NULL,
  `harga_total_l` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_sewa_l`, `id_mobil_l`, `nama_sewa_l`, `ktp_l`, `jk_l`, `alamat_l`, `tlp_sewa_l`, `tgl_booking_l`, `tgl_sewa_l`, `tgl_kembali_l`, `lama_l`, `denda_l`, `harga_total_l`) VALUES
(35, 19, 'Agus', '14712345678', 'Laki-Laki', 'Jl.Kenangan', '0812345678', '2023-02-10', '2023-02-11', '2024-02-12', 1, 100000, 2100000),
(36, 21, 'Agus', '67676767', 'Laki-Laki', 'Jl.Kenangan', '0812345678', '2023-02-01', '2023-02-15', '2023-02-17', 2, 0, 1600000),
(37, 25, 'sucipto', '4512365765', 'Laki-Laki', 'jl.genjer genjer', '0867459861', '2022-12-08', '2022-12-09', '2022-12-11', 2, 0, 1930000),
(38, 26, 'mika', '87154187638', 'Perempuan', 'jl.pembohong', '089965661371', '2023-01-01', '2023-01-01', '2023-01-04', 3, 50000, 3800000),
(40, 20, 'eimi', '678146187', 'Perempuan', 'jl.nippon', '085812347654', '2023-02-11', '2023-02-17', '2023-02-19', 2, 100000, 3100000),
(41, 30, 'masbro', '1470001879734', 'Laki-Laki', 'jl.kebenaran', '081266654389', '2023-02-11', '2023-02-24', '2023-02-26', 2, 0, 2700000),
(48, 28, 'zaki', '12309875125', 'Laki-Laki', 'jl.tanya sendiri', '085286371278', '2023-02-11', '2023-02-12', '2023-02-13', 1, 0, 235000),
(49, 22, 'satrio', '09172656181298', 'Laki-Laki', 'jl.mengkudu', '086612346445', '2023-02-12', '2023-02-16', '2023-02-18', 2, 0, 1200000),
(55, 23, 'dennis', '2137650871289', 'Laki-Laki', 'jl.ketintang', '08775123774', '2023-02-12', '2023-02-13', '2023-02-14', 1, 50000, 400000),
(57, 25, 'supri', '12874918', 'Laki-Laki', 'jl.bogor', '089612541823', '2023-02-08', '2023-02-11', '2023-02-12', 1, 0, 965000),
(60, 22, 'agus', '123', 'Laki-Laki', 'jl.kenangna', '0812345676', '2023-02-16', '2023-02-16', '2023-02-20', 4, 0, 2400000),
(61, 29, 'mira', '7878651234127', 'Perempuan', 'jl.serah dia', '087899995432', '2023-02-10', '2023-02-11', '2023-02-13', 2, 150000, 570000),
(62, 19, 'Gunawan', '1234567891234', 'Laki-Laki', 'Jl.Kertajati', '089944327612', '2023-02-16', '2023-02-17', '2023-02-18', 1, 0, 2000000),
(63, 23, 'admin', '0088776655', 'Laki-Laki', 'admin', 'admin', '2023-06-23', '2023-06-24', '2023-06-26', 2, 0, 700000);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `no_polisi` varchar(12) NOT NULL,
  `merk` varchar(90) NOT NULL,
  `foto_mobil` varchar(50) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `harga` double NOT NULL,
  `seat` varchar(50) NOT NULL,
  `spek` varchar(100) NOT NULL,
  `s_mobil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `no_polisi`, `merk`, `foto_mobil`, `tahun`, `harga`, `seat`, `spek`, `s_mobil`) VALUES
(19, 'AG 1234 XC', 'Audi RSQ8', 'audi_rs-q8.jpg', '2021', 2000000, '5', '4000CC - Twin Turbo V8 - DCT - Bensin', 'tersedia'),
(20, 'BH 151 TT', 'Aston Martin Vantage', 'aston-martin_vantage.jpg', '2022', 1500000, '2', '4000CC - Twin Turbo V8 - DCT - Bensin', 'tersedia'),
(21, 'B 1234 XA', 'BMW M2', '2021-bmw-m2.jpg', '2021', 800000, '4', '3000CC - Twin Turbo Inline 6 - DCT - Bensin', 'tersedia'),
(22, 'KT 1234 XY', 'Toyota Kijang Innova', 'New-Innova.jpg', '2021', 600000, '7', '2000CC - Inline 4 - Manual - Bensin', 'tersedia'),
(23, 'L 2212 BC', 'Toyota Avanza', 'avanza g type_2.jpg', '2022', 350000, '7', '1500CC - Inline 4 - Manual - Bensin', 'tersedia'),
(24, 'B 4 COT', 'Mclaren 720s', 'mclaren_720s.jpg', '2022', 3000000, '2', '4000CC - Twin Turbo V8 - DCT - Bensin', 'tersedia'),
(25, 'S 1234 XJ', 'Lexus LC 500', 'lexus-lc-500.jpg', '2022', 965000, '4', '5000CC - V8 - DCT - Bensin', 'tersedia'),
(26, 'B 34 ST', 'Lamborghini Urus', 'lamborghini-urus-1.jpg', '2022', 1250000, '5', '4000CC - Twin Turbo V8 - DCT - Bensin', 'tersedia'),
(27, 'DK 2341 XR', 'Mercedes Benz AMG GTR', 'mercy-amg-gtr.jpg', '2021', 2850000, '2', '4000CC - Twin Turbo V8 - DCT - Bensin', 'tersedia'),
(28, 'KT 2314 XK', 'Honda Brio RS', 'Honda-Brio.jpg', '2022', 235000, '4', '1200CC - Turbo Inline 4 - Manual - Bensin', 'tersedia'),
(29, 'BG 2211 LP', 'Toyota Agya GR Sport', 'agya-2022.jpg', '2022', 210000, '4', '1200CC - Inline 4 - Matic - Bensin', 'tersedia'),
(30, 'P 6234 OL', 'Lexus LFA', 'lexus-lfa-1.jpg', '2013', 1350000, '2', '4800CC - V10 - DCT - Bensin', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id_sewa` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `nama_sewa` varchar(90) NOT NULL,
  `ktp` varchar(25) NOT NULL,
  `jk_sewa` varchar(20) NOT NULL,
  `alamat` varchar(90) NOT NULL,
  `tlp_sewa` varchar(12) NOT NULL,
  `tgl_booking` date NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `lama` int(11) NOT NULL,
  `harga_total` double NOT NULL,
  `s_pembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sewa_selesai`
--

CREATE TABLE `sewa_selesai` (
  `id_sewa_s` int(11) NOT NULL,
  `id_mobil_s` int(11) NOT NULL,
  `nama_sewa_s` varchar(150) NOT NULL,
  `ktp_s` varchar(100) NOT NULL,
  `jk_s` varchar(50) NOT NULL,
  `alamat_s` varchar(50) NOT NULL,
  `tlp_sewa_s` varchar(50) NOT NULL,
  `tgl_booking_s` date NOT NULL,
  `tgl_awal_s` date NOT NULL,
  `tgl_akhir_s` date NOT NULL,
  `lama_s` varchar(20) NOT NULL,
  `denda` double NOT NULL,
  `harga_s` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_sewa_l`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- Indexes for table `sewa_selesai`
--
ALTER TABLE `sewa_selesai`
  ADD PRIMARY KEY (`id_sewa_s`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_sewa_l` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT for table `sewa_selesai`
--
ALTER TABLE `sewa_selesai`
  MODIFY `id_sewa_s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
