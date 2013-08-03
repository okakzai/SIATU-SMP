-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 27. Juli 2013 jam 02:30
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siatusmp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensiguru`
--

CREATE TABLE IF NOT EXISTS `absensiguru` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `guruid` int(11) NOT NULL,
  `ket` varchar(7) COLLATE latin1_general_ci NOT NULL,
  `date` date NOT NULL,
  `bln` int(3) NOT NULL,
  `thn` int(5) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `absensiguru`
--

INSERT INTO `absensiguru` (`no`, `hari`, `guruid`, `ket`, `date`, `bln`, `thn`) VALUES
(1, 'Jumat ', 1, '2', '2012-06-01', 6, 2012),
(2, 'Jumat ', 11, '1', '2012-06-01', 6, 2012),
(3, 'Sabtu ', 6, '1', '2012-06-16', 6, 2012),
(4, 'Sabtu ', 4, '2', '2012-06-16', 6, 2012),
(5, 'Sabtu ', 9, '3', '2012-06-16', 6, 2012),
(6, 'Sabtu ', 11, '2', '2012-06-16', 6, 2012);

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensisiswa`
--

CREATE TABLE IF NOT EXISTS `absensisiswa` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `date` date DEFAULT NULL,
  `tgl` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `bln` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `thn` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) DEFAULT NULL,
  `nis` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `ket` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=22 ;

--
-- Dumping data untuk tabel `absensisiswa`
--

INSERT INTO `absensisiswa` (`no`, `hari`, `date`, `tgl`, `bln`, `thn`, `kelas`, `nis`, `nama`, `ket`) VALUES
(1, 'Rabu ', '2012-05-16', '16', '5', '2012', 1, '1926', 'Rendy Tri Andika', 'Izin'),
(2, 'Senin', '2012-04-23', '23', '4', '2012', 1, '1926', 'Rendy Tri Andika', 'Alpha'),
(3, 'Rabu ', '2012-05-16', '16', '5', '2012', 3, '1891', 'Annas Apritasari', 'Sakit'),
(4, 'Rabu ', '2012-05-16', '16', '5', '2012', 2, '1894', 'Nanda Ferdiana Indarno', 'Izin'),
(5, 'Jumat ', '2012-05-25', '25', '5', '2012', 1, '1941', 'Andika Setiawan', 'Sakit'),
(6, 'Rabu ', '2012-05-30', '30', '5', '2012', 2, '1908', 'Risky Septian', 'Izin'),
(7, 'Rabu ', '2012-05-30', '30', '5', '2012', 2, '1925', 'Rakhul Adi Rafdila', 'Alpha'),
(8, 'Rabu ', '2012-05-30', '30', '5', '2012', 1, '1941', 'Andika Setiawan', 'Alpha'),
(9, 'Rabu ', '2012-05-30', '30', '5', '2012', 1, '1940', 'Aditia Wahyu Kusuma', 'Izin'),
(10, 'Rabu ', '2012-05-30', '30', '5', '2012', 2, '1927', 'Rikhi Ristianto', 'Izin'),
(11, 'Rabu ', '2012-05-30', '30', '5', '2012', 6, '1832', 'Candra Megayanti', 'Alpha'),
(13, 'Rabu ', '2012-05-30', '30', '5', '2012', 4, '1879', 'Muhammad Setyo Fajar Rianto', 'Sakit'),
(14, 'Kamis ', '2012-05-31', '31', '5', '2012', 1, '1941', 'Andika Setiawan', 'Sakit'),
(15, 'Jumat ', '2012-06-01', '1', '6', '2012', 1, '1943', 'Chelisya Claudi Desemberia Lili Priyadi', 'Sakit'),
(16, 'Jumat ', '2012-06-01', '1', '6', '2012', 1, '1950', 'Ratih Widiasari', 'Izin'),
(17, 'Jumat ', '2012-06-01', '1', '6', '2012', 1, '1946', 'Inggrit Wening Pratitis', 'Sakit'),
(18, 'Sabtu ', '2012-06-02', '2', '6', '2012', 1, '1942', 'Atha Alfin Putra Suryanto', 'Sakit'),
(19, 'Sabtu ', '2012-06-02', '2', '6', '2012', 1, '1952', 'Romadan Nofianto', 'Sakit'),
(20, 'Sabtu ', '2012-06-02', '2', '6', '2012', 1, '1926', 'Rendy Tri Andika', 'Alpha'),
(21, 'Sabtu ', '2012-06-02', '2', '6', '2012', 5, '1852', 'Cacuk Saniar', 'Sakit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `userpass` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `userpass`, `foto`) VALUES
(1, 'arif', '21232f297a57a5a743894a0e4a801fc3', 'arif.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `guruid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `userpass` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(17) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `nip` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `matpel` varchar(17) COLLATE latin1_general_ci NOT NULL,
  `tgl` int(11) DEFAULT NULL,
  `bln` int(11) NOT NULL,
  `thn` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `agama` int(11) NOT NULL,
  `tempat_lahir` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(32) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`guruid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`guruid`, `username`, `userpass`, `password`, `nama`, `nip`, `matpel`, `tgl`, `bln`, `thn`, `gender`, `agama`, `tempat_lahir`, `alamat`) VALUES
(1, 'martini', '7f6412ea0b565ab3fb16195746cd6c97', 'martini', ' MARTINI, S.Pd ', '19541215 197601 2 001', 'IPA', 0, 0, 0, 0, 0, '', ''),
(2, 'sumarti', 'd3becf804a80fa4831800c2d2b444c8f', 'sumarti', ' SUMARTI, S.Pd ', '19580615 197803 2 012', 'IPS', 0, 0, 0, 0, 0, '', ''),
(3, 'lilik', 'ef90d17d3ee20a6c628fa4cdc4462e5a', 'lilik', ' LILIK MARDIATI, S.Pd ', '19650613 199003 2 005', 'PKN', 0, 0, 0, 0, 0, '', ''),
(4, 'aning', 'c1901c302bd7648bffa1bef0283fe8d4', 'aning', ' ANING R, S.Pd ', '19580601 197803 2 015', 'MAT', 0, 0, 0, 0, 0, '', ''),
(5, 'suparti', 'c708ca9e78cc77c808ab6f4b02338239', 'suparti', ' Hj. SUPARTI, S.Pd ', '19600712 198904 2 001', 'BIN', 0, 0, 0, 0, 0, '', ''),
(6, 'bibit', '314dc2c56b755f63359d1b43a6a2492d', 'bibit', ' BIBIT WINARTI, S.Pd ', '19590909 197907 2 004', 'SBK', 0, 0, 0, 0, 0, '', ''),
(7, 'partini', 'a7be41b19c9e8741a6ed67f41c6f36b3', 'partini', ' PARTINI, S.Pd ', '19590609 197907 2 003', 'BJW', 0, 0, 0, 0, 0, '', ''),
(8, 'sofrotun', '3d588ffaff7479d4526020b81422d8a8', 'sofrotun', ' Hj. SOFROTUN, S.Pd.I ', '19610310 198603 2 012', 'PA', 0, 0, 0, 0, 0, '', ''),
(9, 'purwito', 'b94415f8635883b7d3b75dc574a98224', 'purwito', 'EDHI PURWITO, S.Pd ', '19630518 198504 1 003', 'PJK', NULL, 0, 0, 0, 0, '', ''),
(10, 'ririn', 'b84a4059d1af6c8b50bb7a28290dbd63', 'ririn', 'RIRIN WAHYU PURBANDARI, S.Pd', '000', 'BING', NULL, 0, 0, 0, 0, '', ''),
(11, 'asikin', 'a7e39bbc5275c2f3bd00cdfefc3694b8', 'asikin', 'ARIF ASIKIN, A.Md ', '000', 'TIK', NULL, 0, 0, 0, 0, '', ''),
(12, 'kasmani', '4d928659055292266493e36f53dbd9bf', 'kasmani', 'KASMANI', '19650918 199303 1 006', 'BK', NULL, 0, 0, 0, 0, '', ''),
(13, 'zakiya', 'abc95ccafd8065bde02e91082aa06511', 'zakiya', 'zakiya', '', 'TBoga', NULL, 0, 0, 0, 0, '', ''),
(14, 'sela', 'd2fcd8918101a26b0f9fe1970f22a217', 'sela', 'sela', '', 'TBusana', NULL, 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
  `fotoid` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(17) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`fotoid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`fotoid`, `nama`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg'),
(10, '10.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mid1pr`
--

CREATE TABLE IF NOT EXISTS `mid1pr` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `mid1pr`
--

INSERT INTO `mid1pr` (`no`, `nis`, `kelas`, `matpel`, `nilai`) VALUES
(1, '1851', 4, 12, 'A'),
(2, '1851', 4, 2, '12'),
(3, '1851', 4, 4, '23'),
(4, '1851', 4, 5, '34'),
(5, '1851', 4, 6, '45'),
(6, '1851', 4, 7, '56'),
(7, '1851', 4, 9, '67'),
(8, '1851', 4, 3, '78'),
(9, '1851', 4, 11, 'C'),
(10, '1851', 4, 1, '90'),
(11, '1851', 4, 8, '33'),
(12, '1851', 4, 10, '77');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mid1tugas`
--

CREATE TABLE IF NOT EXISTS `mid1tugas` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `mid1tugas`
--

INSERT INTO `mid1tugas` (`no`, `nis`, `kelas`, `matpel`, `nilai`) VALUES
(1, '1831', 6, 1, '79');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mid1ujian`
--

CREATE TABLE IF NOT EXISTS `mid1ujian` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `mid1ujian`
--

INSERT INTO `mid1ujian` (`no`, `nis`, `kelas`, `matpel`, `nilai`) VALUES
(1, '1830', 6, 6, '89');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mid2pr`
--

CREATE TABLE IF NOT EXISTS `mid2pr` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `mid2pr`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `mid2tugas`
--

CREATE TABLE IF NOT EXISTS `mid2tugas` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `mid2tugas`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `mid2ujian`
--

CREATE TABLE IF NOT EXISTS `mid2ujian` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `mid2ujian`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `sem1pr`
--

CREATE TABLE IF NOT EXISTS `sem1pr` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `sem1pr`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `sem1tugas`
--

CREATE TABLE IF NOT EXISTS `sem1tugas` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `sem1tugas`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `sem1ujian`
--

CREATE TABLE IF NOT EXISTS `sem1ujian` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `sem1ujian`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `sem2pr`
--

CREATE TABLE IF NOT EXISTS `sem2pr` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `sem2pr`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `sem2tugas`
--

CREATE TABLE IF NOT EXISTS `sem2tugas` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `sem2tugas`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `sem2ujian`
--

CREATE TABLE IF NOT EXISTS `sem2ujian` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `matpel` int(2) NOT NULL,
  `nilai` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `sem2ujian`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `nisn` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `gender` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `unsd` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `ket` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `kerja_ayah` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `kerja_ibu` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `kelas` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=34 ;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`no`, `nis`, `nisn`, `nama`, `gender`, `tempat_lahir`, `tgl_lahir`, `agama`, `alamat`, `unsd`, `ket`, `nama_ayah`, `kerja_ayah`, `nama_ibu`, `kerja_ibu`, `kelas`, `foto`) VALUES
(1, '18853', '', 'ABIANA ELFARABI', 'P', '', NULL, '', '', '', '', '', '', '', '', '7A', ''),
(2, '18872', '', 'MEINKA DINDA HENDARDI', '', '', NULL, '', '', '', 'Pindah 27-12-2012 ke SMP 1 Pacitan', '', '', '', '', '7A', ''),
(3, '18885', '', 'ABDUL AZIS', 'L', '', NULL, '', '', '', '', '', '', '', '', '7B', ''),
(4, '18917', '', 'AGENDA PUSPITANING SABDA A.', 'P', '', NULL, '', '', '', '', '', '', '', '', '7C', ''),
(5, '18949', '', 'ADINDA LUPITASARI', 'P', '', NULL, '', '', '', '', '', '', '', '', '7D', ''),
(6, '18981', '', 'AJI FIRMAN CAHYA WARDHANA', 'L', '', NULL, '', '', '', '', '', '', '', '', '7E', ''),
(7, '19013', '', 'ABDILLAH FARHAN NOVANTO  ', 'L', '', NULL, '', '', '', '', '', '', '', '', '7F', ''),
(8, '19045', '', 'AFRIZAL AZRIEL PRATAMA    ', 'L', '', NULL, '', '', '', '', '', '', '', '', '7G', ''),
(9, '19076', '', 'ADITYA FEBY RINANTO      ', 'L', '', NULL, '', '', '', '', '', '', '', '', '7H', ''),
(10, '18820', '', 'AFABBY AJRIN A Y    ', 'L', '', NULL, '', '', '', '', '', '', '', '', '8A', ''),
(11, '18598', '', 'ADITYA VIRGHINA P C', 'P', '', NULL, '', '', '', '', '', '', '', '', '8B', ''),
(12, '18630', '', 'ADRI NUR MAHENDRA  ', 'L', '', NULL, '', '', '', '', '', '', '', '', '8C', ''),
(13, '18740', '', 'GHINA KAMILA        ', '', '', NULL, '', '', '', 'Pindah 28-12-2012 ke SMPN 2 Candi Sidoarjo', '', '', '', '', '8C', ''),
(14, '18661', '', 'ABIE BAYU NUGROHO  ', 'L', '', NULL, '', '', '', '', '', '', '', '', '8D', ''),
(15, '18757', '', 'ADDIN RIZQI HIDAYAT', 'L', '', NULL, '', '', '', '', '', '', '', '', '8E', ''),
(16, '18789', '', 'AGUNG TEGUH PRIBADI', 'L', '', NULL, '', '', '', '', '', '', '', '', '8F', ''),
(17, '18680', '', 'LALA FITRIANA      ', '', '', NULL, '', '', '', 'PINDAH SMP JAKARTA', '', '', '', '', '8F', ''),
(18, '18788', '', 'ADHIYANA DENY S    ', 'L', '', NULL, '', '', '', '', '', '', '', '', '8G', ''),
(19, '18697', '', 'CHINTYA YOLANDA SARI', '', '', NULL, '', '', '', 'Pindah 22-12-2012 ke SMPN Serang', '', '', '', '', '8G', ''),
(20, '18758', '', 'AGIE MILLA ARGANATA', 'P', '', NULL, '', '', '', '', '', '', '', '', '8H', ''),
(21, '18368', '', 'APRIDA NIKEN PALUPI', 'P', '', NULL, '', '', '', '', '', '', '', '', '9A', ''),
(22, '18375', '', 'ELVIRA BUDIPUSPITAWATI', 'P', '', NULL, '', '', '', '', '', '', '', '', '9B', ''),
(23, '18371', '', 'AZKA NISA SHAFIRA', 'P', '', NULL, '', '', '', '', '', '', '', '', '9C', ''),
(24, '18366', '', 'ADILLA NILA KRUSITA', 'P', '', NULL, '', '', '', '', '', '', '', '', '9D', ''),
(25, '18367', '', 'AN NISA SUBROTO', 'P', '', NULL, '', '', '', '', '', '', '', '', '9E', ''),
(26, '18376', '', 'FRANSISKA PRATISTA  L.', 'P', '', NULL, '', '', '', '', '', '', '', '', '9F', ''),
(27, '18369', '', 'APRILIA ANGGUN MIA ADI P.A.', 'P', '', NULL, '', '', '', '', '', '', '', '', '9G', ''),
(28, '18569', '', 'AHLAN LINGGAR BAYU SAPUTRO', '', '', NULL, '', '', '', 'PINDAH SMPN 2 GENENG', '', '', '', '', '9G', ''),
(29, '18385', '', 'RAMADHANI PUTRA PRASETIA', 'L', '', NULL, '', '', '', '', '', '', '', '', '9H', ''),
(33, '18414', '', 'Fatin', 'P', 'Jakarta', '1998-01-01', 'Islam', 'Ngawi', '98', '', 'Murdi', 'Penjahit', 'Enok', 'Pemijat', '7C', 'Woman.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `submatpel`
--

CREATE TABLE IF NOT EXISTS `submatpel` (
  `subid` int(11) NOT NULL,
  `subname` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `submatpel`
--

INSERT INTO `submatpel` (`subid`, `subname`) VALUES
(1, 'PA'),
(2, 'PKN'),
(3, 'BIN'),
(4, 'MAT'),
(5, 'IPA'),
(6, 'IPS'),
(7, 'SBK'),
(8, 'PJK'),
(9, 'BJW'),
(10, 'BING'),
(11, 'BK'),
(12, 'TIK'),
(13, 'TBoga'),
(14, 'TBusana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tes`
--

CREATE TABLE IF NOT EXISTS `tes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `tes`
--

