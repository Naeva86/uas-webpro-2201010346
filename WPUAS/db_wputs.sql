-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 02:04 PM
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
-- Database: `db_wputs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbkeluar`
--

CREATE TABLE `tbkeluar` (
  `id` int(11) NOT NULL,
  `nama_barangk` varchar(255) DEFAULT NULL,
  `jenisk` varchar(255) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL,
  `tgl_keluar` varchar(50) DEFAULT NULL,
  `idkeluar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbkeluar`
--
INSERT INTO `tbkeluar` (`id`, `nama_barangk`, `jenisk`, `jumlah`, `tgl_keluar`, `idkeluar`) VALUES
(0, 'Rinso Cair 150ml', 'deterjen', '50', '2023-07-02', '191c98dbd0062f57110f3bd255f590f8'),
(1, 'Daia Bubuk', 'deterjen', '25', '2023-07-03', '191c98dbd0062f57110f3bd255f590f4'),
(2, 'SO KLIN pemutih 100ml', 'pemutih', '23', '2023-07-05', '191c98dbd0062f57110f3bd255f590f5');

-- --------------------------------------------------------

--
-- Table structure for table `tbmsk`
--

CREATE TABLE `tbmsk` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(35) DEFAULT NULL,
  `jenis` varchar(35) DEFAULT NULL,
  `stok` varchar(35) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `total_harga` varchar(255) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `idmasuk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbmsk`
--

INSERT INTO `tbmsk` (`id`, `nama_barang`, `jenis`, `stok`, `harga`, `total_harga`, `tgl_masuk`, `idmasuk`) VALUES
(0, 'Rinso Cair 150ml', 'deterjen', '50', '1000', '50000', '2023-07-01', '191c98dbd0062f57110f3bd255f590f8'),
(1, 'Daia Bubuk', 'deterjen', '25', '1000', '25000', '2023-07-02', '191c98dbd0062f57110f3bd255f590f9'),
(2, 'SO KLIN pemutih 100ml', 'pemutih', '23', '5000', '1150000', '2023-07-03', '191c98dbd0062f57110f3bd255f590f7');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `passkey` varchar(255) DEFAULT NULL,
  `iduser` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id`, `nama`, `email`, `username`, `passkey`, `iduser`) VALUES
(1, 'I Putu Ananda Mahayana', 'ananda@gmail.com', 'Ananda86', '12345', 'b13e5927365e6ef380aa27e5f5dc645c'),
(2, 'I Kadek Suarsa', 'suarsa@gmail.com', 'Suarsa02', '62345', 'c13e5927365e6ef380aa27e5f5dc645d'),
(3, 'Ni Ketut Suarsi', 'suarsi@gmail.com', 'Suarsi46', '72345', 'e13e5927365e6ef380aa27e5f5dc645f');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
