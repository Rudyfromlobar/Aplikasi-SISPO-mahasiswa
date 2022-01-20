-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Jan 2022 pada 13.15
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_si`
--

CREATE TABLE `jadwal_si` (
  `id_jadwal_si` int(5) NOT NULL,
  `hari` text NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `matakuliah` varchar(40) NOT NULL,
  `waktu` text NOT NULL,
  `tempat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_si`
--

INSERT INTO `jadwal_si` (`id_jadwal_si`, `hari`, `dosen`, `matakuliah`, `waktu`, `tempat`) VALUES
(1, 'senin', 'jihadul akbar', 'web', '12.30', 'lab 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_ti`
--

CREATE TABLE `jadwal_ti` (
  `id_jadwal` int(5) NOT NULL,
  `hari` text NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `waktu` text NOT NULL,
  `tempat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nipd` char(10) NOT NULL,
  `nm_pd` varchar(50) DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `tmpt_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `id_prodi` int(5) DEFAULT NULL,
  `nidn` char(13) DEFAULT NULL,
  `kelas` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nipd`, `nm_pd`, `jk`, `nik`, `tmpt_lahir`, `tgl_lahir`, `id_prodi`, `nidn`, `kelas`) VALUES
('SI17200001', 'Abdul Hamid', 'L', '5202111809020000', 'Lendang Bao', '2001-09-18', 57201, '0812038403', 0),
('SI17200002', 'Abdurrahman Tedi Kurniawan', 'L', '5202072602990000', 'Lempuan', '1999-02-26', 57201, '0826098703', 2),
('SI17200003', 'Aditya Maulana Akbar', 'L', '5202090912990000', 'Denpasar', '1999-12-09', 57201, '0812038403', 1),
('SI17200004', 'Aenul Hayat', 'P', '5202024606020000', 'Jurang Tangi', '2002-06-06', 57201, '0826098703', 2),
('SI17200005', 'Amrina Rosada', 'P', '5202035802020000', 'Kembang Kerang', '2002-02-18', 57201, '0812038403', 1),
('SI17200006', 'Anisa Sholeha', 'P', '5202096105020010', 'Montong Bulok', '2002-05-21', 57201, '0826098703', 2),
('SI17200007', 'Annisak', 'P', '5202015701020010', 'Kalisade', '2002-01-17', 57201, '0812038403', 1),
('SI17200008', 'Aprinia Munawarah', 'P', '5202055204020000', 'Penujak', '2001-04-04', 57201, '0826098703', 2),
('SI17200009', 'Ayu Lestari', 'P', '5202014606020010', 'Leneng', '2003-07-13', 57201, '0812038403', 1),
('SI17200010', 'Baiq Laras Hati', 'P', '7324094309030000', 'Lombok Tengah', '2003-09-03', 57201, '0826098703', 2),
('SI17200011', 'Baiq Lia Indriani', 'P', '5202104404990010', 'Jorong', '1999-04-04', 57201, '0812038403', 1),
('SI17200012', 'Baiq Wulandari', 'P', '5202106601020000', 'Jorong', '2002-01-26', 57201, '0826098703', 2),
('SI17200013', 'Baiq Indri Astuti', 'P', '5202106104010000', 'Jorong', '2001-04-21', 57201, '0812038403', 1),
('SI17200014', 'Danil Sparingga', 'L', '5202070107020220', 'Maliklo', '2001-02-26', 57201, '0826098703', 2),
('SI17200015', 'Dian Nitami', 'P', '5202086302010010', 'Banteng Keselet', '2001-05-20', 57201, '0812038403', 1),
('SI17200016', 'Didi Haryadi', 'L', '5202101607800000', 'Batunyala', '1980-07-16', 57201, '0826098703', 2),
('SI17200017', 'Dina Fadila', 'P', '5202015702000010', 'Pekan Baru', '2000-02-17', 57201, '0812038403', 1),
('SI17200018', 'Efa Kumala Dewi', 'P', '5202054603020000', 'Selanglet', '2002-12-30', 57201, '0826098703', 2),
('SI17200019', 'Hariadi', 'L', '5202041207020010', 'Rebuk Ii', '2001-06-30', 57201, '0812038403', 1),
('SI17200020', 'Helmiati Safitri', 'P', '5202036503030000', 'Surabaya', '2003-03-26', 57201, '0826098703', 2),
('SI17200021', 'Heny Hardiana', 'P', '5202017112020010', 'Renteng', '2002-04-15', 57201, '0812038403', 1),
('SI17200022', 'Junaidi', 'L', '5203201001020010', 'Pengoros', '2002-01-10', 57201, '0826098703', 2),
('SI17200023', 'Laili Septia', 'P', '5202016309020000', 'Gerintuk', '2002-09-19', 57201, '0812038403', 1),
('SI17200024', 'Lina Astika Dewi', 'P', '5202014507990010', 'Praya', '1999-04-24', 57201, '0826098703', 2),
('SI17200025', 'M. Amirudin', 'L', '5202112705020000', 'Aik Kerit', '2000-02-06', 57201, '0812038403', 1),
('SI17200026', 'Mansur', 'L', '5202101808910000', 'Montong belae', '1991-08-18', 57201, '0826098703', 2),
('SI17200027', 'Madie Wire Hakim', 'L', '5202042412000000', 'Rebuk Ii', '2000-06-03', 57201, '0812038403', 1),
('SI17200028', 'Maryam', 'P', '5202035911000000', 'Barabali', '2000-09-19', 57201, '0826098703', 2),
('SI17200029', 'Mashuri', 'L', '5202103112860180', 'Karang Baru Timur', '1986-12-31', 57201, '0812038403', 1),
('SI17200030', 'Maulana Abdul Rozak', 'L', '5202010401000000', 'Praya', '2000-01-01', 57201, '0826098703', 1),
('SI17200031', 'Maulida Yuliani', 'P', '5202105707000000', 'Lendang Ree', '2000-07-10', 57201, '0812038403', 1),
('SI17200032', 'Mia Aditia Putri', 'P', '5202055905020000', 'Penujak', '2002-05-19', 57201, '0826098703', 2),
('SI17200033', 'Muh. Alpan', 'L', '5202010405020010', 'Leneng', '2002-05-14', 57201, '0812038403', 1),
('SI17200034', 'Muhamad Azril Rahman', 'L', '5202010808010010', 'Bayan', '2001-08-08', 57201, '0826098703', 2),
('SI17200035', 'Muhamad Iskandar', 'L', '5202113112020010', 'Beberik', '2002-12-31', 57201, '0812038403', 1),
('SI17200036', 'Munzani', 'L', '5202120107010280', 'Kumbak', '2001-05-06', 57201, '0826098703', 2),
('SI17200037', 'Muhamad Zahid', 'L', '5202013005010000', 'Telaga Waru', '1991-05-30', 57201, '0812038403', 1),
('SI17200038', 'Mursalin', 'L', '5202022206010000', 'Sukarara', '2001-06-22', 57201, '0826098703', 2),
('SI17200039', 'Novita Susiana Ikhwani', 'P', '5202035211000010', 'Mertak Kesambik Daye', '2000-12-12', 57201, '0812038403', 1),
('SI17200040', 'Nurlaili Septiani', 'P', '5202016809010000', 'Leneng', '2001-09-28', 57201, '0826098703', 2),
('SI17200041', 'Rahmat Hidayat', 'L', '5202011002020010', 'Renteng', '2002-02-10', 57201, '0812038403', 1),
('SI17200042', 'Raudah', 'P', '5202095509010000', 'Nyeredep', '2001-09-15', 57201, '0826098703', 2),
('SI17200043', 'Rohati', 'P', '5202054107010010', 'Setanggor', '2002-07-25', 57201, '0812038403', 1),
('SI17200044', 'Rosana Ulpa', 'P', '5202105010020000', 'Pepekat', '2002-10-02', 57201, '0826098703', 2),
('SI17200045', 'Septemi Susanti', 'P', '5202026209010000', 'Gemel', '2001-09-22', 57201, '0812038403', 1),
('SI17200046', 'Siska Yuni Rusniatun', 'P', '5202045709010000', 'Rojet', '2001-06-17', 57201, '0826098703', 2),
('SI17200047', 'Siti Aisah', 'P', '5202014107040250', 'Gerunung', '2001-10-07', 57201, '0812038403', 1),
('SI17200048', 'Transusanti', 'P', '5207046304020000', 'Pada Suka', '2002-05-02', 57201, '0826098703', 2),
('SI17200049', 'Uyunun Lusiana', 'P', '5202085107000000', 'Banteng Keselet', '2000-07-11', 57201, '0812038403', 1),
('SI17200050', 'Yusroaini', 'P', '5202014212990000', 'Salbi', '1999-12-02', 57201, '0826098703', 2),
('SI17200051', 'Risa Meilenia Ananda Putri', 'P', '5202074107000390', 'Kerembong', '2000-12-31', 57201, '0812038403', 1),
('SI17200052', 'Baiq Devi Andika Sari', 'P', '5202094404000000', 'Montong Batu', '2000-04-04', 57201, '0826098703', 2),
('SI17200053', ' Kiki Haerani', 'P', '5202026302000000', ' Bangket Tengak ', '2002-03-23', 57201, '0826098703', 1),
('TI17200001', 'Adam Nizar', 'L', '5202031212020010', 'Mertak Mas', '2001-06-12', 55201, '0831128326', 0),
('TI17200002', 'Ahmad Kurniawan', 'L', '5205060107020270', 'Dompu', '2002-07-01', 55201, '0801018603', 2),
('TI17200003', 'Ahmad Maulana Hadinata', 'L', '5202093110010000', 'Penyaye', '2001-10-31', 55201, '0831128326', 1),
('TI17200004', 'Alamullah Istiqlal', 'L', '5201152208020000', 'Kumbung', '2002-08-22', 55201, '0801018603', 2),
('TI17200005', 'Alkahfin', 'L', '5202102104020000', 'Dakung', '2002-04-21', 55201, '0831128326', 1),
('TI17200006', 'Arjunaldi', 'L', '5202091410000000', 'Balai Atas', '2000-10-04', 55201, '0801018603', 2),
('TI17200007', 'Baiq Umi Kalsum', 'P', '5202016808000000', 'Perbawa', '2000-06-28', 55201, '0831128326', 1),
('TI17200008', 'Baiq Evi Pratiwi', 'P', '5202016507000000', 'Praya', '2000-07-25', 55201, '0801018603', 2),
('TI17200009', 'Baiq Widiatul Safitri', 'P', '5202016712000000', 'Perbawa', '2000-12-27', 55201, '0831128326', 1),
('TI17200010', 'Bq Istival Amelia', 'P', '5202015107020010', 'Polak Langke', '2002-07-11', 55201, '0801018603', 2),
('TI17200011', 'Cici Tri Wulandari', 'P', '5202096412010000', 'Ontok', '2001-12-24', 55201, '0831128326', 1),
('TI17200012', 'Gilang Pratama', 'L', '5202060350100000', 'Ganti', '2001-05-03', 55201, '0801018603', 2),
('TI17200013', 'Hanan Sayudi', 'L', '5205063004020000', 'Aik Ampat', '2002-04-30', 55201, '0831128326', 1),
('TI17200014', 'Ida Fatitah', 'P', '5202114107040360', 'Rumpang', '2001-07-01', 55201, '0801018603', 2),
('TI17200015', 'Ihza Dirgantara Aji', 'L', '5202072002000000', 'Petoak', '2000-02-22', 55201, '0831128326', 1),
('TI17200016', 'Izzatullah Farhan', 'L', '5204050111010000', 'Alas', '2001-11-01', 55201, '0801018603', 2),
('TI17200017', 'L. Tatang Arif Ilhami', 'L', '5202010802010000', 'Praya', '2000-12-08', 55201, '0831128326', 1),
('TI17200018', 'Lalu Rifki Wiranata', 'L', '5202012212950000', 'Praya', '1995-12-22', 55201, '0801018603', 2),
('TI17200019', 'Suherman Apriadi', 'L', '5202040804020000', 'Lingkok Tengak', '2002-04-08', 55201, '0831128326', 1),
('TI17200020', 'Bq. Elna Azmi Safitri', 'P', '5202105210000000', 'Beraim', '2000-11-18', 55201, '0801018603', 2),
('TI17200021', 'Lalu Haerul Fahmi', 'L', '5202101702020000', 'Beraim Daye', '2002-02-17', 55201, '0831128326', 1),
('TI17200022', 'M. Ansori', 'L', '5202010107980300', 'Rancak', '1998-12-21', 55201, '0801018603', 2),
('TI17200023', 'M. Gunawan Ridho Pribadi', 'L', '5202061302020000', 'Ketewon', '2002-02-13', 55201, '0831128326', 1),
('TI17200024', 'M. Saipul Fahmi', 'L', '5202050107990050', 'Aik Kerit', '1999-04-15', 55201, '0801018603', 2),
('TI17200025', 'M. Zulwawan', 'L', '5202020205010010', 'Lingkung Daye', '2001-05-02', 55201, '0831128326', 1),
('TI17200026', 'Marzuki Darusman', 'L', '5202090107980510', 'Lanji', '1998-07-01', 55201, '0801018603', 2),
('TI17200027', 'Mega Lestari', 'P', '5202014101020010', 'Dangah', '2002-01-01', 55201, '0831128326', 1),
('TI17200028', 'Melani', 'P', '5202074303010000', 'Kesambik', '2001-03-03', 55201, '0801018603', 2),
('TI17200029', 'Muhamad Saiful', 'L', '5202100907910000', 'Pegading', '1991-07-09', 55201, '0831128326', 1),
('TI17200030', 'Muhamad Yusuf', 'L', '5202010903010010', 'Praya', '2001-03-09', 55201, '0801018603', 2),
('TI17200031', 'Muhammad Fathurrahman', 'L', '5202012008010000', 'Manggong', '2001-08-20', 55201, '0831128326', 1),
('TI17200032', 'Muhammad Sadri', 'L', '5202091704020000', 'Montong Bulok', '2002-04-17', 55201, '0801018603', 2),
('TI17200033', 'Muliana', 'P', '5202046012010000', 'Selemang', '2001-12-20', 55201, '0831128326', 1),
('TI17200034', 'Murizal', 'L', '5202071608000000', 'Montong', '2000-03-02', 55201, '0801018603', 2),
('TI17200035', 'Novi Ardila', 'P', '5202104505000000', 'Irian Jaya', '2000-12-14', 55201, '0831128326', 1),
('TI17200036', 'Nurul ''Aini', 'P', '5202074107070180', 'Kesambik', '2002-07-01', 55201, '0801018603', 2),
('TI17200037', 'Nur Sopiana Laili', 'P', '5202014107010210', 'Bunsalak', '2001-11-16', 55201, '0831128326', 1),
('TI17200038', 'Ovin Satriawan', 'L', '5202092905990000', 'Balai Atas', '1999-05-29', 55201, '0801018603', 2),
('TI17200039', 'Putri Nirmalasari', 'P', '5202074107030120', 'Petoak', '2002-12-23', 55201, '0831128326', 1),
('TI17200040', 'Ramdani Hurdi', 'L', '5202075611020000', 'Paok Dandak', '2002-11-10', 55201, '0801018603', 2),
('TI17200041', 'Rery Ayu Restami', 'P', '5202014703020000', 'Praya', '2020-03-07', 55201, '0831128326', 1),
('TI17200042', 'Ria Rizkina', 'L', '5202095808010000', 'Montong Teker', '2001-08-18', 55201, '0801018603', 2),
('TI17200043', 'Riki Purnama Galeh Saputra', 'L', '5202070107060200', 'Prako', '1996-07-29', 55201, '0831128326', 1),
('TI17200044', 'Riska Indah Cahyanti', 'P', '5101015105010010', 'Banyubiru', '2001-05-11', 55201, '0801018603', 2),
('TI17200045', 'Rizal Mahendra', 'L', '5202101309010000', 'Manjak', '2001-09-13', 55201, '0831128326', 1),
('TI17200046', 'Roni Pratama', 'L', '5202060812020000', 'Ganti 2', '2002-12-08', 55201, '0801018603', 2),
('TI17200047', 'Rudi Irawan', 'L', '5201011902000000', 'Bantir', '2001-12-31', 55201, '0831128326', 1),
('TI17200048', 'Saepul Bahri', 'L', '5202071111010000', 'Melar', '2001-11-11', 55201, '0801018603', 2),
('TI17200049', 'Safwan Hafiz', 'L', '5202022110010010', 'Pengenjek', '2001-10-21', 55201, '0831128326', 1),
('TI17200050', 'Syahwin Hadi', 'L', '6302060108970010', 'Loteng', '1997-07-01', 55201, '0801018603', 2),
('TI17200051', 'Syamsul Bahri', 'L', '5202040603010010', 'Tongo', '2001-03-06', 55201, '0831128326', 1),
('TI17200052', 'Syari''Ah', 'P', '5202114305020000', 'Rumpang', '2002-05-03', 55201, '0801018603', 2),
('TI17200053', 'Tedi Irawan', 'L', '5202020609020000', 'Montong Praje Timur', '2002-09-06', 55201, '0831128326', 1),
('TI17200054', 'Walidi Wahyu Pratama', 'L', '5202022602980000', 'Lombok tengah', '1998-02-26', 55201, '0801018603', 2),
('TI17200055', 'Warizal Ilwi', 'L', '5202072204010000', 'Lingkuk Buak Timuk', '2001-04-22', 55201, '0831128326', 1),
('TI17200056', 'Zaenuri Alfian Rahman', 'L', '5202090610010000', 'Bakan', '2001-10-06', 55201, '0801018603', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai-si`
--

CREATE TABLE `nilai-si` (
  `id_nilai_si` int(10) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `kode_mk` varchar(10) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `quis` varchar(10) NOT NULL,
  `tugas` varchar(10) NOT NULL,
  `uts` varchar(10) NOT NULL,
  `uas` varchar(10) NOT NULL,
  `akhir` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai-ti`
--

CREATE TABLE `nilai-ti` (
  `id_nilai` int(10) NOT NULL,
  `matakuliah` varchar(30) NOT NULL,
  `kode_mk` varchar(10) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `quis` varchar(10) NOT NULL,
  `tugas` varchar(10) NOT NULL,
  `uts` varchar(10) NOT NULL,
  `uas` varchar(10) NOT NULL,
  `akhir` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_si`
--
ALTER TABLE `jadwal_si`
  ADD PRIMARY KEY (`id_jadwal_si`);

--
-- Indexes for table `jadwal_ti`
--
ALTER TABLE `jadwal_ti`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nipd`),
  ADD KEY `fk_prodi_id` (`id_prodi`),
  ADD KEY `fk_dosen_nidn` (`nidn`);

--
-- Indexes for table `nilai-si`
--
ALTER TABLE `nilai-si`
  ADD PRIMARY KEY (`id_nilai_si`);

--
-- Indexes for table `nilai-ti`
--
ALTER TABLE `nilai-ti`
  ADD PRIMARY KEY (`id_nilai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_si`
--
ALTER TABLE `jadwal_si`
  MODIFY `id_jadwal_si` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jadwal_ti`
--
ALTER TABLE `jadwal_ti`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilai-si`
--
ALTER TABLE `nilai-si`
  MODIFY `id_nilai_si` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilai-ti`
--
ALTER TABLE `nilai-ti`
  MODIFY `id_nilai` int(10) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `fk_dosen_nidn` FOREIGN KEY (`nidn`) REFERENCES `dosen` (`nidn`),
  ADD CONSTRAINT `fk_prodi_id` FOREIGN KEY (`id_prodi`) REFERENCES `program_studi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
