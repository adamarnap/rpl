-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 08:44 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

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
(18, 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total` bigint(20) NOT NULL,
  `tanggal_tempo` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tentang` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `idDetailOrder` int(10) NOT NULL,
  `idOrder` int(5) NOT NULL,
  `idProduk` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `tbl_konfirmasi`
--

CREATE TABLE `tbl_konfirmasi` (
  `idKonfirmasi` int(5) NOT NULL,
  `idOrder` int(5) NOT NULL,
  `buktiTransfer` varchar(100) NOT NULL,
  `validasi` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_presentasi`
--

CREATE TABLE `tbl_presentasi` (
  `id` int(20) DEFAULT NULL,
  `penilaian` varchar(200) NOT NULL,
  `penilaian2` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `rw` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `idProduk` int(5) NOT NULL,
  `idKat` int(5) NOT NULL,
  `idToko` int(5) NOT NULL,
  `namaProduk` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` int(5) NOT NULL,
  `berat` int(5) NOT NULL,
  `deskripsiProduk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saldo`
--

CREATE TABLE `tbl_saldo` (
  `idSaldo` int(5) NOT NULL,
  `idToko` int(5) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saran`
--

CREATE TABLE `tbl_saran` (
  `id` int(20) DEFAULT NULL,
  `penilaian` varchar(200) NOT NULL,
  `penilaian2` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `rw` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_saran`
--

INSERT INTO `tbl_saran` (`id`, `penilaian`, `penilaian2`, `keterangan`, `rw`) VALUES
(NULL, 'sangat baik', 'baik', 'hehe boi', ''),
(NULL, 'sangat baik', 'baik', 'bagus aplikasinya', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_toko`
--

CREATE TABLE `tbl_toko` (
  `idToko` int(5) NOT NULL,
  `idKonsumen` int(5) NOT NULL,
  `namaToko` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `statusAktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_toko`
--

INSERT INTO `tbl_toko` (`idToko`, `idKonsumen`, `namaToko`, `logo`, `deskripsi`, `statusAktif`) VALUES
(1, 2, 'Toko Pati', '', 'Jual beli madu asli dari pati', 'Y');

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
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

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
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`idDetailOrder`),
  ADD KEY `idOrder` (`idOrder`),
  ADD KEY `harga` (`harga`),
  ADD KEY `idProduk` (`idProduk`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`idkat`);

--
-- Indexes for table `tbl_konfirmasi`
--
ALTER TABLE `tbl_konfirmasi`
  ADD PRIMARY KEY (`idKonfirmasi`),
  ADD KEY `idOrder` (`idOrder`);

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
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`idProduk`),
  ADD KEY `idToko` (`idToko`),
  ADD KEY `idKat` (`idKat`) USING BTREE;

--
-- Indexes for table `tbl_saldo`
--
ALTER TABLE `tbl_saldo`
  ADD PRIMARY KEY (`idSaldo`),
  ADD KEY `idToko` (`idToko`);

--
-- Indexes for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  ADD PRIMARY KEY (`idToko`),
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
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `idDetailOrder` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `idkat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_konfirmasi`
--
ALTER TABLE `tbl_konfirmasi`
  MODIFY `idKonfirmasi` int(5) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `idProduk` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  MODIFY `idToko` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD CONSTRAINT `tbl_detail_order_ibfk_1` FOREIGN KEY (`idProduk`) REFERENCES `tbl_produk` (`idProduk`),
  ADD CONSTRAINT `tbl_detail_order_ibfk_2` FOREIGN KEY (`idOrder`) REFERENCES `tbl_order` (`idOrder`),
  ADD CONSTRAINT `tbl_detail_order_ibfk_3` FOREIGN KEY (`harga`) REFERENCES `tbl_kota` (`idKota`);

--
-- Constraints for table `tbl_konfirmasi`
--
ALTER TABLE `tbl_konfirmasi`
  ADD CONSTRAINT `tbl_konfirmasi_ibfk_1` FOREIGN KEY (`idOrder`) REFERENCES `tbl_order` (`idOrder`);

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`idKonsumen`) REFERENCES `tbl_member` (`idKonsumen`);

--
-- Constraints for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD CONSTRAINT `tbl_produk_ibfk_1` FOREIGN KEY (`idKat`) REFERENCES `tbl_kategori` (`idkat`),
  ADD CONSTRAINT `tbl_produk_ibfk_2` FOREIGN KEY (`idToko`) REFERENCES `tbl_toko` (`idToko`);

--
-- Constraints for table `tbl_saldo`
--
ALTER TABLE `tbl_saldo`
  ADD CONSTRAINT `tbl_saldo_ibfk_1` FOREIGN KEY (`idToko`) REFERENCES `tbl_toko` (`idToko`);

--
-- Constraints for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  ADD CONSTRAINT `tbl_toko_ibfk_1` FOREIGN KEY (`idKonsumen`) REFERENCES `tbl_member` (`idKonsumen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
