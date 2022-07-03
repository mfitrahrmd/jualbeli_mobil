-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 10:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s1creative_2021_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(1) NOT NULL COMMENT '1 = admin, 2 = pimpinan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`) VALUES
(0, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'pimpinan', '90973652b88fe07d05a4304f0a945de8', 2);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(25) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `potongan` float DEFAULT NULL,
  `kategori` varchar(255) NOT NULL,
  `stok` int(10) NOT NULL,
  `kode_barang` varchar(15) NOT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `tipe` enum('lama','baru') NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_produk`, `harga`, `potongan`, `kategori`, `stok`, `kode_barang`, `tahun`, `tipe`, `deskripsi`, `gambar`) VALUES
(4, 'CRV', '400000000', 0, 'Mobil Honda', 1, '001', '2021', 'baru', 'Mobil Keluaran Baru                 \r\n                         \r\n                        ', 'crv.jpg'),
(5, 'Calya', '410000000', 0, 'Mobil Honda', 1, '002', '2020', 'lama', '                            \r\n                        ', 'calya.jpg'),
(6, 'Accord', '500000000', 0, 'Mobil Toyota', 1, '003', '2022', 'lama', '                            \r\n                        ', '5d318173b258c.jpeg'),
(7, 'Brio', '500000000', 0, 'Mobil Honda', 0, '004', '2014', 'baru', '                            \r\n                        ', 'honda-brio-satya_169.png'),
(9, 'Innova', '700000000', 0, 'Mobil Honda', 1, '005', '2015', 'lama', '                            \r\n                        ', 'toyota_innova_toyota_inova_g_at_diesel_2012_7700122641564061911.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `barang_hadiah`
--

CREATE TABLE `barang_hadiah` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `stok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_hadiah`
--

INSERT INTO `barang_hadiah` (`id`, `nama_barang`, `stok`) VALUES
(1, 'Oli Shell Helix', 15);

-- --------------------------------------------------------

--
-- Table structure for table `jual`
--

CREATE TABLE `jual` (
  `IDJual` int(5) NOT NULL,
  `kode_barang` varchar(22) DEFAULT NULL,
  `qty` int(3) DEFAULT NULL,
  `Tgl` date DEFAULT NULL,
  `id` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jual`
--

INSERT INTO `jual` (`IDJual`, `kode_barang`, `qty`, `Tgl`, `id`) VALUES
(1, '002', 1, '2022-06-19', '1'),
(2, '002', 1, '2022-06-19', '2'),
(3, '004', 1, '2022-06-19', '3');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(2) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `name`, `email`, `message`) VALUES
(01, 'weae', 'aa@fa', 'dewaew'),
(02, 'wea', 'yusufnurikhsan30@gmail.com', 'ewa');

-- --------------------------------------------------------

--
-- Table structure for table `undian`
--

CREATE TABLE `undian` (
  `id` int(11) NOT NULL,
  `id_hadiah` varchar(50) NOT NULL,
  `id_user` int(2) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `undian`
--

INSERT INTO `undian` (`id`, `id_hadiah`, `id_user`, `tanggal`) VALUES
(1, '1', 10, '2022-07-04'),
(2, '1', 11, '2022-07-04'),
(3, '1', 10, '2022-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tgl_lahir` varchar(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nik`, `nama`, `alamat`, `tgl_lahir`, `username`, `email`, `password`, `phone`) VALUES
(6, 0, 'aryaaaa', 'Ktp Palembangg', '', 'arya', 'arya@gmail.comg', 'b6d767d2f8ed5d21a44b0e5886680cb9', '0852670530524'),
(7, 0, 'pia', 'sosial km 5', '', 'pia', 'pianurdhini@gmail.com', '63b573a282e7ac5a0a97cd7bc36fc528', '082175162600'),
(8, 0, 'Yusuf', 'Jl. Dr. M. Hatta No.261, Sukaraya, Kec. Baturaja Timur, Kabupaten Ogan Komering Ulu, Sumatera Selatan', '', 'et122', 'yusufnurikhsan30@gmail.com', '25d55ad283aa400af464c76d713c07ad', '089654754502'),
(10, 0, 'Uchiha Rama', 'Kyoto', '', 'rama', 'rama@gmail.com', '202cb962ac59075b964b07152d234b70', '089522778783'),
(11, 3151541, 'AA', 'dsadsa', '2022-06-01', 'info@asfasolution.com', 'daprian1622@yahoo.com', '60479356311160cee0084ce52a3b148d', '1423132131232');

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi`
--

CREATE TABLE `verifikasi` (
  `id` int(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `qty` int(12) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `Tgl` date NOT NULL,
  `Bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verifikasi`
--

INSERT INTO `verifikasi` (`id`, `nama`, `nama_produk`, `status`, `metode`, `waktu`, `qty`, `kode_barang`, `harga`, `Tgl`, `Bukti`) VALUES
(1, 'et122', 'Calya', 'Diterima', 'Cash', '2 Hari', 1, '002', '410000000', '0000-00-00', ''),
(2, 'rama', 'Calya', 'Diterima', 'Cash', '2 Hari', 1, '002', '410000000', '0000-00-00', 'photo6134196996978880571.jpg'),
(3, 'rama', 'Brio', 'Diterima', 'Cash', '2 Hari', 1, '004', '500000000', '0000-00-00', 'WhatsApp Image 2021-09-05 at 11.24.34 PM (2).jpeg'),
(8, 'rama', 'CRV', 'Menunggu Persetujuan', 'Cash', '2 Hari', 1, '001', '400000000', '0000-00-00', ''),
(9, 'et122', 'CRV', 'Menunggu Persetujuan', 'Cash', '2 Hari', 1, '001', '400000000', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_barang` (`kode_barang`),
  ADD UNIQUE KEY `nama_produk` (`nama_produk`,`harga`,`kategori`);

--
-- Indexes for table `barang_hadiah`
--
ALTER TABLE `barang_hadiah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jual`
--
ALTER TABLE `jual`
  ADD PRIMARY KEY (`IDJual`),
  ADD UNIQUE KEY `kode_barang` (`kode_barang`,`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `undian`
--
ALTER TABLE `undian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `nama` (`nama`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `barang_hadiah`
--
ALTER TABLE `barang_hadiah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jual`
--
ALTER TABLE `jual`
  MODIFY `IDJual` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `undian`
--
ALTER TABLE `undian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `verifikasi`
--
ALTER TABLE `verifikasi`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
