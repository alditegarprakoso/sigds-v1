-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Mei 2016 pada 04.26
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gds`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('Admin1', 'root1'),
('Admin2', 'root2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran`
--

CREATE TABLE IF NOT EXISTS `pelanggaran` (
  `kode_pelanggaran` varchar(3) NOT NULL,
  `pelanggaran` varchar(500) NOT NULL,
  `point_pelanggaran` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggaran`
--

INSERT INTO `pelanggaran` (`kode_pelanggaran`, `pelanggaran`, `point_pelanggaran`) VALUES
('01', 'Tidak memakai atribut sekolah', -10),
('02', 'Terlambat masuk', -10),
('03', 'Memakai aksesoris', -5),
('04', 'Memakai jaket dan topi bebas', -5),
('05', 'Rambut tidak sesuai aturan', -10),
('06', 'tidak memakai helm (khusus yang membawa motor)', -10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran_siswa`
--

CREATE TABLE IF NOT EXISTS `pelanggaran_siswa` (
`id_ps` int(11) NOT NULL,
  `nisn` varchar(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `tanggal` date NOT NULL,
  `pelanggaran` varchar(500) NOT NULL,
  `point` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggaran_siswa`
--

INSERT INTO `pelanggaran_siswa` (`id_ps`, `nisn`, `nama`, `kelas`, `tanggal`, `pelanggaran`, `point`) VALUES
(3, '9993633926', 'Amalita Agustina', 'XI', '2016-05-25', 'Terlambat masuk', -10),
(14, '0010038556', 'Ahmad Sopian', 'X', '2016-05-26', 'Tidak memakai atribut sekolah', -10),
(15, '0010038556', 'Ahmad Sopian', 'X', '2016-05-26', 'Terlambat masuk', -10),
(16, '0010038556', 'Ahmad Sopian', 'X', '2016-05-26', 'Memakai aksesoris', -5),
(17, '0010038556', 'Ahmad Sopian', 'X', '2016-05-26', 'Memakai jaket dan topi bebas', -5),
(18, '0010038556', 'Ahmad Sopian', 'X', '2016-05-26', 'Rambut tidak sesuai aturan', -10),
(19, '0010038556', 'Ahmad Sopian', 'X', '2016-05-26', 'tidak memakai helm (khusus yang membawa motor)', -10),
(20, '0003033198', 'Anjani Mega Siyafitri', 'X', '2016-05-27', 'Tidak memakai atribut sekolah', -10),
(21, '0003033198', 'Anjani Mega Siyafitri', 'X', '2016-05-27', 'Terlambat masuk', -10),
(22, '000000000001', 'AHA', 'XII', '2016-05-27', 'Tidak memakai atribut sekolah', -10),
(23, '000000000001', 'AHA', 'XII', '2016-05-27', 'Terlambat masuk', -10),
(24, '000000000001', 'AHA', 'XII', '2016-05-27', 'Memakai aksesoris', -5),
(25, '000000000001', 'AHA', 'XII', '2016-05-27', 'Memakai jaket dan topi bebas', -5),
(26, '000000000001', 'AHA', 'XII', '2016-05-27', 'Rambut tidak sesuai aturan', -10),
(27, '000000000001', 'AHA', 'XII', '2016-05-27', 'tidak memakai helm (khusus yang membawa motor)', -10),
(28, '9993638750', 'Aldi Tegar P', 'XI', '2016-05-27', 'Tidak memakai atribut sekolah', -10),
(29, '9993638750', 'Aldi Tegar P', 'XI', '2016-05-27', 'Terlambat masuk', -10),
(30, '9993638750', 'Aldi Tegar P', 'XI', '2016-05-27', 'Memakai aksesoris', -5),
(31, '9993638750', 'Aldi Tegar P', 'XI', '2016-05-27', 'Memakai jaket dan topi bebas', -5),
(32, '9993638750', 'Aldi Tegar P', 'XI', '2016-05-27', 'Rambut tidak sesuai aturan', -10),
(33, '9993638750', 'Aldi Tegar P', 'XI', '2016-05-27', 'tidak memakai helm (khusus yang membawa motor)', -10),
(34, '9997292827', 'Arian Perdana', 'X', '2016-05-28', 'Tidak memakai atribut sekolah', -10),
(35, '9997292827', 'Arian Perdana', 'X', '2016-05-28', 'Terlambat masuk', -10),
(36, '9997292827', 'Arian Perdana', 'X', '2016-05-28', 'Memakai aksesoris', -5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `print`
--

CREATE TABLE IF NOT EXISTS `print` (
  `nisn` varchar(12) NOT NULL,
  `print` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `print`
--

INSERT INTO `print` (`nisn`, `print`) VALUES
('000000000001', 1),
('0010038556', 1),
('9991864275', 1),
('9993638750', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nisn` varchar(12) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kelas` varchar(3) NOT NULL,
  `jurusan` varchar(3) NOT NULL,
  `namaortu` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `point` int(3) NOT NULL DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama`, `kelas`, `jurusan`, `namaortu`, `alamat`, `nohp`, `point`) VALUES
('9983590491', 'Ahmad Safih', 'XII', 'TKR', 'Syamsul', 'Ciomas', '089612234567', 100),
('9983594480', 'Alpin Dwi Putra Paricki', 'XII', 'TKR', 'Saepudin', 'Ciapus', '085772340098', 100),
('9984690132', 'Chaikal Al''Qadar Syach', 'XII', 'TKR', 'Dedi Iskandar', 'Dramaga', '089667878898', 100),
('9974176740', 'Deni Agustiani', 'XII', 'TKR', 'Widodo', 'Sindang Barang', '082234454556', 100),
('9980102450', 'Eka Maulana', 'XII', 'TKR', 'Fahrudin', 'Ciomas', '085765466543', 100),
('9983578166', 'Elang Harijaya', 'XII', 'TKR', 'Anto', 'Ciomas', '087776556766', 100),
('9983476527', 'Faisal Asri', 'XII', 'TKR', 'Abdullah', 'Ciherang', '085777877878', 100),
('9983578898', 'Faizal Ramadhan', 'XII', 'TKR', 'Syamsudin', 'Dramaga', '087777667677', 100),
('9984013873', 'Ferdi Fadillah', 'XII', 'TKR', 'Asep Zaelani', 'Ciomas Permai', '089677878998', 100),
('9973683683', 'Fikri Pahlevi', 'XII', 'TKR', 'Abdul Khoir', 'Bogor', '085776877674', 100),
('9984013766', 'Garda Abdul Djafar', 'XII', 'TKR', 'Susanto', 'Ciomas', '089657788772', 100),
('9983410797', 'Ibnu Maulana', 'XII', 'TKR', 'Bagas', 'Ciapus', '089657765667', 100),
('9974094997', 'Idang Abdul Hakam Nashirin', 'XII', 'TKR', 'Rianto', 'Sindang Barang', '085765454223', 100),
('9973717996', 'Isro Maulana', 'XII', 'TKR', 'Susanti', 'Laladon Indah', '089677878889', 100),
('9983578748', 'Luthfi Himawan', 'XII', 'TKR', 'Jaelani', 'Ciherang', '089576566554', 100),
('9964298937', 'Mohammad Eki Maulana', 'XII', 'TKR', 'Rendi', 'Ciomas', '087767887544', 100),
('9973652199', 'Muhamad Aldiansyah', 'XII', 'TKR', 'Marbun', 'Ciomas Permai', '082234544561', 100),
('9983578214', 'Muhamad Fajri Yusuf', 'XII', 'TKR', 'Dedi Renaldi', 'Ciomas', '089776777666', 100),
('9983418174', 'Muhamad Rendi Mardiansyah', 'XII', 'TKR', 'Andini Putri', 'Dramaga', '089677877321', 100),
('9983066287', 'Adnin Rifandi Sutanto Putra', 'XI', 'RPL', 'Sutanto', 'Cibanteng', '089677876656', 100),
('9983578920', 'Ahmad Maulana N', 'XI', 'RPL', 'Nasution', 'Bojong', '085776768878', 100),
('9993638750', 'Aldi Tegar P', 'XI', 'RPL', 'Dede', 'Ciomas', '089788999799', 50),
('9983098167', 'Alfin Eka Pratama', 'XI', 'RPL', 'Jajang', 'Dramaga', '085776543233', 100),
('9993638862', 'Aliamat Parinduri', 'XI', 'RPL', 'Susan', 'Ciomas', '089677877889', 100),
('9993633926', 'Amalita Agustina', 'XI', 'RPL', 'Susilo', 'Ciherang', '085776545567', 90),
('9993633927', 'Apriliyanti', 'XI', 'RPL', 'Andi', 'Bojong menteng', '089677878855', 100),
('111207185', 'Berliana', 'XI', 'RPL', 'herto', 'Ciomas', '085776784322', 100),
('9984079870', 'Dewi Puji Rahayu', 'XI', 'RPL', 'Deni', 'Bogor', '082237787833', 100),
('9983578742', 'Erdiansyah', 'XI', 'RPL', 'Yeyen ', 'Ciomas', '089677871234', 100),
('0010038556', 'Ahmad Sopian', 'XI', 'RPL', 'Antoni rahman', 'Ciomas', '087767668877', 100),
('0003033198', 'Anjani Mega Siyafitri', 'X', 'RPL', 'Rahman', 'Dramaga', '087778988788', 80),
('9997292827', 'Arian Perdana', 'X', 'RPL', 'Susilaawati', 'Dramaga', '089699565185', 75),
('0006913972', 'Bunga Febri Aswari', 'X', 'RPL', 'Andini Putri', 'Ciomas', '089677879998', 100),
('0006532161', 'Dimas Anda Pringga', 'X', 'RPL', 'Weni', 'Ciomas', '082212232334', 100),
('0002552482', 'Dita Atamia', 'X', 'RPL', 'Dedi ', 'Ciomas', '089677543217', 100),
('0002598172', 'Gema Pratama Hekmatyar', 'X', 'RPL', 'Retno', 'Ciomas PErmai', '085765666577', 100),
('9991864275', 'Hadi Aristiawan', 'XI', 'RPL', 'Sulaiman R', 'Dramaga', '087776564321', 100),
('9983492292', 'Ika Kartika Sari', 'XI', 'RPL', 'M.Ridwan', 'Dramaga', '089676565549', 100),
('0002788644', 'Iman Ahmad Bahtiar', 'XI', 'RPL', 'Ferdiansyah', 'Sindang Barang', '087765666566', 100),
('000000000001', 'AHA', 'XII', 'RPL', 'AHA SA', 'Ciomas', '085811555961', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
 ADD PRIMARY KEY (`kode_pelanggaran`);

--
-- Indexes for table `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
 ADD PRIMARY KEY (`id_ps`);

--
-- Indexes for table `print`
--
ALTER TABLE `print`
 ADD PRIMARY KEY (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
MODIFY `id_ps` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
