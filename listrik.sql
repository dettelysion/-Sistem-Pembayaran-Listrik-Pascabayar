-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 12 Jul 2025 pada 12.37
-- Versi server: 8.4.3
-- Versi PHP: 8.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `listrik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblogin`
--

CREATE TABLE `tblogin` (
  `KodeLogin` int NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `NamaLengkap` varchar(80) NOT NULL,
  `Level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblogin`
--

INSERT INTO `tblogin` (`KodeLogin`, `Username`, `Password`, `NamaLengkap`, `Level`) VALUES

(10, '10361', '10361', 'Kajika Sama', 'Pelanggan'),
(11, 'jakads', 'jakads', 'jakads', 'Petugas'),
(12, '10721', '10721', 'Nirwana Sari', 'Pelanggan'),
(14, '10369', '10369', 'Kadek Suartana', 'Pelanggan'),
(15, 'ketut', 'ketut', 'ketu sujarna', 'Petugas'),
(16, 'ketut2', 'ketut2', 'ketut pejana', 'Petugas'),
(17, '16073', '16073', 'Anindya Bulan', 'Pelanggan'),
(23, 'yoga', 'yoga', 'yoga aqila', 'Petugas'),
(24, 'naufal', 'admin', 'naufal', 'Admin'),
(25, 'vares', 'admin', 'vares', 'Petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpelanggan`
--

CREATE TABLE `tbpelanggan` (
  `KodePelanggan` int NOT NULL,
  `NoPelanggan` varchar(10) NOT NULL,
  `NoMeter` varchar(18) NOT NULL,
  `KodeTarif` int NOT NULL,
  `NamaLengkap` varchar(80) NOT NULL,
  `Telp` varchar(10) NOT NULL,
  `Alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpelanggan`
--

INSERT INTO `tbpelanggan` (`KodePelanggan`, `NoPelanggan`, `NoMeter`, `KodeTarif`, `NamaLengkap`, `Telp`, `Alamat`) VALUES
(7, '10361', '082134834564', 2, 'Kajika Sama', '0892345734', 'Mengwi'),
(8, '10721', '023485323544', 1, 'Nirwana Sari', '0873484553', 'Tulung Agung'),
(9, '10369', '004585763954', 2, 'Kadek Suartana', '0874354632', 'Jln Tukad Petanu'),
(10, '16073', '0087803415729', 6, 'Anindya Bulan', '0878034157', 'Ubud'),
(11, '1034', '1002', 1, 'helga', '0888811123', 'jakarta'),
(15, '10362', '100002020', 8, 'vares', '0888999555', 'jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpembayaran`
--

CREATE TABLE `tbpembayaran` (
  `KodePembayaran` int NOT NULL,
  `KodeTagihan` int NOT NULL,
  `TglBayar` date NOT NULL,
  `JumlahTagihan` double(10,0) NOT NULL,
  `BuktiPembayaran` varchar(100) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpembayaran`
--

INSERT INTO `tbpembayaran` (`KodePembayaran`, `KodeTagihan`, `TglBayar`, `JumlahTagihan`, `BuktiPembayaran`, `Status`) VALUES
(8, 36, '2019-02-14', 344500, 'bukti.png', 'Sudah'),
(9, 39, '2025-07-07', 344000, 'bukti.png', 'Belum'),
(10, 39, '2025-07-07', 344500, 'bukti.png', 'Belum'),
(11, 41, '2025-07-07', 288500, 'bukti.png', 'Belum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtagihan`
--

CREATE TABLE `tbtagihan` (
  `KodeTagihan` int NOT NULL,
  `NoTagihan` varchar(100) DEFAULT NULL,
  `NoPelanggan` varchar(10) NOT NULL,
  `TahunTagih` int NOT NULL,
  `BulanTagih` varchar(10) NOT NULL,
  `JumlahPemakaian` int NOT NULL,
  `TotalBayar` double(10,0) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbtagihan`
--

INSERT INTO `tbtagihan` (`KodeTagihan`, `NoTagihan`, `NoPelanggan`, `TahunTagih`, `BulanTagih`, `JumlahPemakaian`, `TotalBayar`, `Status`) VALUES
(32, 'M9GWU5', '10721', 2019, 'Januari', 90, 169500, 'Sudah'),
(34, 'H6FBJN', '10369', 2019, 'Januari', 100, 288500, 'Belum'),
(35, '53LSQB', '10369', 2019, 'Februari', 80, 232500, 'Belum'),
(36, 'R0ZIT1', '10361', 2019, 'Januari', 120, 344500, 'Sudah'),
(39, 'TPNS2I', '10361', 2019, 'Februari', 120, 344500, 'Sudah'),
(40, '5STY8L', '10361', 2019, 'Maret', 100, 288500, 'Belum'),
(41, 'WEP43Z', '10361', 2025, 'Januari', 100, 288500, 'Belum'),
(42, '10361-2025-Februari-8051', '10361', 2025, 'Februari', 80, 232500, 'Belum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtarif`
--

CREATE TABLE `tbtarif` (
  `KodeTarif` int NOT NULL,
  `Daya` int NOT NULL,
  `TarifPerKwh` int NOT NULL,
  `Beban` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbtarif`
--

INSERT INTO `tbtarif` (`KodeTarif`, `Daya`, `TarifPerKwh`, `Beban`) VALUES
(1, 100, 1800, 8500),
(2, 150, 2800, 8500),
(6, 350, 3400, 12000),
(8, 80, 1000, 5000),
(9, 450, 5000, 20000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`KodeLogin`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indeks untuk tabel `tbpelanggan`
--
ALTER TABLE `tbpelanggan`
  ADD PRIMARY KEY (`KodePelanggan`),
  ADD UNIQUE KEY `NoPelanggan` (`NoPelanggan`),
  ADD KEY `KodeTarif` (`KodeTarif`);

--
-- Indeks untuk tabel `tbpembayaran`
--
ALTER TABLE `tbpembayaran`
  ADD PRIMARY KEY (`KodePembayaran`),
  ADD KEY `KodeTagihan` (`KodeTagihan`);

--
-- Indeks untuk tabel `tbtagihan`
--
ALTER TABLE `tbtagihan`
  ADD PRIMARY KEY (`KodeTagihan`),
  ADD KEY `tbtagihan_ibfk_1` (`NoPelanggan`);

--
-- Indeks untuk tabel `tbtarif`
--
ALTER TABLE `tbtarif`
  ADD PRIMARY KEY (`KodeTarif`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `KodeLogin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tbpelanggan`
--
ALTER TABLE `tbpelanggan`
  MODIFY `KodePelanggan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbpembayaran`
--
ALTER TABLE `tbpembayaran`
  MODIFY `KodePembayaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbtagihan`
--
ALTER TABLE `tbtagihan`
  MODIFY `KodeTagihan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `tbtarif`
--
ALTER TABLE `tbtarif`
  MODIFY `KodeTarif` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbpelanggan`
--
ALTER TABLE `tbpelanggan`
  ADD CONSTRAINT `tbpelanggan_ibfk_1` FOREIGN KEY (`KodeTarif`) REFERENCES `tbtarif` (`KodeTarif`);

--
-- Ketidakleluasaan untuk tabel `tbpembayaran`
--
ALTER TABLE `tbpembayaran`
  ADD CONSTRAINT `tbpembayaran_ibfk_1` FOREIGN KEY (`KodeTagihan`) REFERENCES `tbtagihan` (`KodeTagihan`);

--
-- Ketidakleluasaan untuk tabel `tbtagihan`
--
ALTER TABLE `tbtagihan`
  ADD CONSTRAINT `tbtagihan_ibfk_1` FOREIGN KEY (`NoPelanggan`) REFERENCES `tbpelanggan` (`NoPelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
