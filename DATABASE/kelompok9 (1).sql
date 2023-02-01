-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 03:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelompok9`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `tanggal_berita` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isi` mediumtext NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id_detail` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `idKonsumen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`id_detail`, `id_produk`, `idKonsumen`) VALUES
(1, 20, 2),
(2, 20, 2),
(3, 20, 2),
(4, 20, 2),
(5, 20, 2),
(6, 20, 2),
(7, 20, 2),
(8, 20, 2),
(9, 20, 2),
(10, 20, 2),
(11, 20, 2),
(12, 20, 2),
(13, 20, 2),
(14, 20, 2),
(15, 20, 2),
(16, 20, 2),
(17, 20, 2),
(18, 20, 2),
(19, 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_toko` text NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `berat` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `tanggal_produk` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deskripsi` mediumtext NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_toko`, `kategori`, `nama_produk`, `jumlah`, `berat`, `harga`, `kota`, `tanggal_produk`, `deskripsi`, `gambar`) VALUES
(20, 'Toko Pati', 'madu asli', 'madu 100ml', '20', 150, 120000, 'Jakarta', '2022-01-03 22:28:26', 'madu dengan kualitas yang baik dan aman, kapasitas 100ml (botol kaca)', 'madu2.jpeg'),
(21, 'Toko Pati', 'madu asli', 'madu 75ml', '15', 65, 65000, 'Jakarta', '2022-01-03 22:30:03', 'madu dengan kualitas yang baik dan aman, kapasitas 65ml (botol kaca)', 'madu1.jpeg'),
(22, 'Toko Pati', 'madu asli', 'madu sarang', '10', 120, 130000, 'Jakarta', '2022-01-03 22:37:57', 'Madu dengan kualitas yang baik dan aman, berat 120gr (toples)', 'madu32.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `retur`
--

CREATE TABLE `retur` (
  `id_retur` int(11) NOT NULL,
  `nama_barang` varchar(150) NOT NULL,
  `tanggal_retur` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tanggal_beli` datetime NOT NULL,
  `alasan` mediumtext NOT NULL,
  `bukti` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `retur`
--

INSERT INTO `retur` (`id_retur`, `nama_barang`, `tanggal_retur`, `tanggal_beli`, `alasan`, `bukti`) VALUES
(2, 'Air jordan  1 Mid Igloo Island Green', '2021-11-18 08:09:42', '0000-00-00 00:00:00', 'Pembelian dengan keinginan', 'Air_jordan_1_Mid_Igloo_Island_Green.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `id_saldo` int(11) NOT NULL,
  `id_member` int(11) NOT NULL DEFAULT 1,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jumlah` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saldo`
--

INSERT INTO `saldo` (`id_saldo`, `id_member`, `tanggal`, `jumlah`) VALUES
(1, 2, '2021-11-18 14:12:43', 14000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `idAdmin` int(2) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`idAdmin`, `userName`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biaya_kirim`
--

CREATE TABLE `tbl_biaya_kirim` (
  `idBiayaKirim` int(5) NOT NULL,
  `idKurir` int(3) NOT NULL,
  `idKotaAsal` int(4) NOT NULL,
  `idKotaTujuan` int(5) NOT NULL,
  `biaya` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_biaya_kirim`
--

INSERT INTO `tbl_biaya_kirim` (`idBiayaKirim`, `idKurir`, `idKotaAsal`, `idKotaTujuan`, `biaya`) VALUES
(8, 1, 3, 7, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `idkat` int(5) NOT NULL,
  `namakat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`idkat`, `namakat`) VALUES
(5, 'Madu Kaliandra'),
(6, 'Madu Hutan Sumatera'),
(7, 'Madu Hutan Sumbawa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kota`
--

CREATE TABLE `tbl_kota` (
  `idKota` int(4) NOT NULL,
  `namaKota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kota`
--

INSERT INTO `tbl_kota` (`idKota`, `namaKota`) VALUES
(3, 'Jogja '),
(7, 'Brebes'),
(8, 'Balik Papan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kurir`
--

CREATE TABLE `tbl_kurir` (
  `idKurir` int(2) NOT NULL,
  `namaKurir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kurir`
--

INSERT INTO `tbl_kurir` (`idKurir`, `namaKurir`) VALUES
(1, 'Test'),
(2, 'tarjo'),
(3, 'DODOT ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `idKonsumen` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `namaKonsumen` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `idKota` int(4) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` int(20) NOT NULL,
  `statusAktif` enum('Y','N') NOT NULL,
  `level` enum('member','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`idKonsumen`, `username`, `password`, `namaKonsumen`, `alamat`, `idKota`, `email`, `telepon`, `statusAktif`, `level`) VALUES
(1, 'dicky', 'dicky', 'dicky', 'gerokgak, buleleng, bali', 12, 'dicky@gmail.com', 123123123, 'Y', 'member'),
(2, 'reza', 'reza', 'Reza', 'Brebes', 0, 'Reza123@gmail.com', 2147483647, 'Y', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `idOrder` int(5) NOT NULL,
  `idKonsumen` int(5) NOT NULL,
  `tglOrder` date NOT NULL,
  `statusOrder` enum('Belum Bayar','Dikemas','Dikirim','Diterima','Selesai','Dibatalkan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`idOrder`, `idKonsumen`, `tglOrder`, `statusOrder`) VALUES
(1, 1, '2021-07-09', 'Belum Bayar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_produk` (`id_produk`) USING BTREE,
  ADD KEY `id_user` (`idKonsumen`) USING BTREE;

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `retur`
--
ALTER TABLE `retur`
  ADD PRIMARY KEY (`id_retur`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id_saldo`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `tbl_biaya_kirim`
--
ALTER TABLE `tbl_biaya_kirim`
  ADD PRIMARY KEY (`idBiayaKirim`),
  ADD KEY `idKotaAsal` (`idKotaAsal`),
  ADD KEY `idKotaTujuan` (`idKotaTujuan`),
  ADD KEY `idKurir` (`idKurir`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`idkat`);

--
-- Indexes for table `tbl_kota`
--
ALTER TABLE `tbl_kota`
  ADD PRIMARY KEY (`idKota`);

--
-- Indexes for table `tbl_kurir`
--
ALTER TABLE `tbl_kurir`
  ADD PRIMARY KEY (`idKurir`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`idKonsumen`),
  ADD KEY `idKota` (`idKota`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`idOrder`),
  ADD KEY `idKonsumen` (`idKonsumen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `retur`
--
ALTER TABLE `retur`
  MODIFY `id_retur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id_saldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `idAdmin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_biaya_kirim`
--
ALTER TABLE `tbl_biaya_kirim`
  MODIFY `idBiayaKirim` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `idkat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_kota`
--
ALTER TABLE `tbl_kota`
  MODIFY `idKota` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_kurir`
--
ALTER TABLE `tbl_kurir`
  MODIFY `idKurir` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `idKonsumen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `idOrder` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `detail_order_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `detail_order_ibfk_2` FOREIGN KEY (`idKonsumen`) REFERENCES `tbl_member` (`idKonsumen`);

--
-- Constraints for table `tbl_biaya_kirim`
--
ALTER TABLE `tbl_biaya_kirim`
  ADD CONSTRAINT `tbl_biaya_kirim_ibfk_1` FOREIGN KEY (`idKurir`) REFERENCES `tbl_kurir` (`idKurir`),
  ADD CONSTRAINT `tbl_biaya_kirim_ibfk_2` FOREIGN KEY (`idKotaAsal`) REFERENCES `tbl_kota` (`idKota`),
  ADD CONSTRAINT `tbl_biaya_kirim_ibfk_3` FOREIGN KEY (`idKotaTujuan`) REFERENCES `tbl_kota` (`idKota`);

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`idKonsumen`) REFERENCES `tbl_member` (`idKonsumen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
