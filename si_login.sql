-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20230110.d1e616d68c
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2023 pada 04.05
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_arsip`
--

CREATE TABLE `tb_arsip` (
  `id` int(4) NOT NULL,
  `id_surat` int(4) NOT NULL,
  `kategori` varchar(6) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_arsip`
--

INSERT INTO `tb_arsip` (`id`, `id_surat`, `kategori`, `tanggal`) VALUES
(2, 2, 'Keluar', '2022-12-26'),
(3, 3, 'Masuk', '2022-12-26'),
(4, 4, 'Masuk', '2023-01-07'),
(5, 5, 'Masuk', '2023-01-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id` int(3) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_informasi`
--

INSERT INTO `tb_informasi` (`id`, `nama`, `deskripsi`, `tanggal`) VALUES
(1, 'Bantuan PKH 2023', 'Bantuan PKH warga Desa Cipancarf akan segera turun, harap kepada semua penerima untuk mempersipakan berkas', '2002-12-26'),
(2, 'Bansos JABAR', 'Bantuan sosisal dari pemerintahan jawa barat aka n segera turun pantau terus website kami SI CIPANCAR', '2022-12-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_loginadmin`
--

CREATE TABLE `tb_loginadmin` (
  `id` int(3) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `user_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_loginadmin`
--

INSERT INTO `tb_loginadmin` (`id`, `name`, `user_name`, `password`) VALUES
(1, 'Rizwan', 'rizwanalamsyah', '202cb962ac59'),
(2, 'denz', 'denz', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_masyarakat`
--

CREATE TABLE `tb_masyarakat` (
  `id` int(4) NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 NOT NULL,
  `NIK` varchar(255) CHARACTER SET latin1 NOT NULL,
  `no_KK` varchar(255) CHARACTER SET latin1 NOT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 NOT NULL,
  `no_telepon` varchar(255) CHARACTER SET latin1 NOT NULL,
  `j_kelamin` varchar(255) CHARACTER SET latin1 NOT NULL,
  `status` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pekerjaan` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_masyarakat`
--

INSERT INTO `tb_masyarakat` (`id`, `nama`, `NIK`, `no_KK`, `alamat`, `no_telepon`, `j_kelamin`, `status`, `pekerjaan`, `password`) VALUES
(1, 'Raden', '20576021', '20576021', 'pangkalan', '0876652345', 'Laki-laki', 'Menikah', 'Petani', '827ccb0e'),
(4, 'rizwan ganteng', '21176654411', '21987654321', 'lembang saat', '08977634565', 'Laki-laki', 'Belum Menikah', 'Peternak', '202cb962ac59075b964b07152d234b70'),
(5, 'haikal', '987654321', '123457689', 'hujung', '08767766443', 'Laki-laki', 'Pelajar', 'Belum bekerja', '202cb962ac59075b964b07152d234b70'),
(6, 'Raden agogo', '1122334455', '2233445511', 'pangkalan', '0876654321', 'Laki-laki', 'Mahasiswa', 'Belum bekerja', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'rizki', '020902', '098876', 'hujung', '08455678', 'Laki-laki', 'Belum Menikah', 'Pekerja Kantoran', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemasaran`
--

CREATE TABLE `tb_pemasaran` (
  `id` int(3) NOT NULL,
  `NIK` varchar(17) NOT NULL,
  `Nama_Bisnis` varchar(35) NOT NULL,
  `Deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pemasaran`
--

INSERT INTO `tb_pemasaran` (`id`, `NIK`, `Nama_Bisnis`, `Deskripsi`) VALUES
(4, '20576022', 'Bakso Ema Galak', 'bakso paling enak dan beradrenalin'),
(8, '209787654', 'seblak ngiler pisan', 'Menjual berbabagai macam seblak,  lokasi Kp. Hujung RT 001/ Rw 006 dekat Mesjid jami hujung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_struktur`
--

CREATE TABLE `tb_struktur` (
  `id` int(3) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `j_kelamin` varchar(9) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jabatan` varchar(35) NOT NULL,
  `status` varchar(13) NOT NULL,
  `masa_jabatan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_struktur`
--

INSERT INTO `tb_struktur` (`id`, `nama`, `j_kelamin`, `alamat`, `no_telepon`, `email`, `jabatan`, `status`, `masa_jabatan`) VALUES
(2, 'rizwan ganteng', 'Laki-laki', 'Kp. Hujung RT 001/RW 006', '086775446576', 'denzalamsyah1999@gmail.com', 'Kepala', 'belum Menikah', '2050-01-01'),
(3, 'haikal', 'Laki-laki', 'pangkalan RT 002/RW 005', '0876658976', 'adendadok52@gmail.com', 'Kaur Keuangan', 'belum Menikah', '2026-12-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat`
--

CREATE TABLE `tb_surat` (
  `id` int(4) NOT NULL,
  `nama_surat` varchar(35) NOT NULL,
  `tanggal` date NOT NULL,
  `NIK_pembuat` varchar(17) NOT NULL,
  `tujuan_surat` varchar(35) NOT NULL,
  `nama_pengirim` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_surat`
--

INSERT INTO `tb_surat` (`id`, `nama_surat`, `tanggal`, `NIK_pembuat`, `tujuan_surat`, `nama_pengirim`) VALUES
(2, 'SKTM', '2022-12-21', '20576021', 'dinas sosial kab. Garut', 'Rizwan Alamsyah'),
(3, 'Rujukan KTP', '2022-12-26', '200988765432', 'Kantor Kecamatan Leles', 'Asep Solihin'),
(4, 'SKTM', '2023-01-07', '200988765430', 'dinas sosial kab. Garut', 'Elin Haryati'),
(5, 'Rujukan KTP', '2023-01-07', '9876543231', 'Kantor Kecamatan Leles', 'dadang '),
(7, 'SKTM', '2023-02-09', '20576021', 'dinas sosial kab. Garut', 'dahum abdul');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_arsip`
--
ALTER TABLE `tb_arsip`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_surat` (`id_surat`);

--
-- Indeks untuk tabel `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_loginadmin`
--
ALTER TABLE `tb_loginadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_masyarakat`
--
ALTER TABLE `tb_masyarakat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NIK` (`NIK`);

--
-- Indeks untuk tabel `tb_pemasaran`
--
ALTER TABLE `tb_pemasaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NIK` (`NIK`);

--
-- Indeks untuk tabel `tb_struktur`
--
ALTER TABLE `tb_struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_arsip`
--
ALTER TABLE `tb_arsip`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_loginadmin`
--
ALTER TABLE `tb_loginadmin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_masyarakat`
--
ALTER TABLE `tb_masyarakat`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_pemasaran`
--
ALTER TABLE `tb_pemasaran`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_struktur`
--
ALTER TABLE `tb_struktur`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_arsip`
--
ALTER TABLE `tb_arsip`
  ADD CONSTRAINT `tb_arsip_ibfk_1` FOREIGN KEY (`id_surat`) REFERENCES `tb_surat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
