-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 13 Nov 2020 pada 10.15
-- Versi server: 10.2.34-MariaDB-cll-lve
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidq4229_sidesa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `DATA_AKTE`
--

CREATE TABLE `DATA_AKTE` (
  `id_akte` char(16) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('LAKI - LAKI','PEREMPUAN') NOT NULL,
  `waktu_kelahiran` time NOT NULL,
  `tempat_dilahirkan` enum('RS/RB','PUSKESMAS','POLINDES','RUMAH','LAINNYA') NOT NULL,
  `jenis_kelahiran` enum('TUNGGAL','KEMBAR2','KEMBAR3','KEMBAR4') NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `penolong_kelahiran` enum('DOKTER','PERAWAT','BIDAN UMUM','LAINNYA') NOT NULL,
  `berat_lahir` int(11) NOT NULL,
  `panjang_lahir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `DATA_AKTE`
--

INSERT INTO `DATA_AKTE` (`id_akte`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `waktu_kelahiran`, `tempat_dilahirkan`, `jenis_kelahiran`, `anak_ke`, `penolong_kelahiran`, `berat_lahir`, `panjang_lahir`) VALUES
('3343223222125540', 'PROBOLINGGO', '2020-01-11', 'LAKI - LAKI', '08:29:00', 'PUSKESMAS', 'TUNGGAL', 2, 'DOKTER', 3200, 78),
('3343223222125560', 'PROBOLINGGO', '2020-01-12', 'LAKI - LAKI', '09:29:00', 'POLINDES', 'KEMBAR2', 3, 'PERAWAT', 3201, 79),
('3343223222125580', 'PROBOLINGGO', '2020-01-13', 'LAKI - LAKI', '10:29:00', 'PUSKESMAS', 'KEMBAR2', 3, 'PERAWAT', 3202, 80),
('3343223222125600', 'PROBOLINGGO', '2020-01-14', 'PEREMPUAN', '11:29:00', 'POLINDES', 'TUNGGAL', 1, 'DOKTER', 3203, 81),
('3343223222125620', 'PROBOLINGGO', '2020-01-15', 'LAKI - LAKI', '12:29:00', 'PUSKESMAS', 'TUNGGAL', 1, 'PERAWAT', 3204, 82),
('3343223222125640', 'PROBOLINGGO', '2020-01-16', 'LAKI - LAKI', '13:29:00', 'POLINDES', 'TUNGGAL', 1, 'PERAWAT', 3205, 83),
('3343223222125660', 'PROBOLINGGO', '2020-01-17', 'PEREMPUAN', '14:29:00', 'PUSKESMAS', 'TUNGGAL', 1, 'DOKTER', 3206, 84),
('3343223222125680', 'PROBOLINGGO', '2020-01-18', 'LAKI - LAKI', '15:29:00', 'PUSKESMAS', 'KEMBAR2', 1, 'PERAWAT', 3207, 85),
('3343223222125700', 'PROBOLINGGO', '2020-01-19', 'PEREMPUAN', '16:29:00', 'POLINDES', 'KEMBAR2', 1, 'PERAWAT', 3208, 86),
('3343223222125720', 'PROBOLINGGO', '2020-01-20', 'LAKI - LAKI', '17:29:00', 'RUMAH', 'TUNGGAL', 1, 'DOKTER', 3209, 87),
('3343223222125740', 'PROBOLINGGO', '2020-01-21', 'PEREMPUAN', '18:29:00', 'PUSKESMAS', 'TUNGGAL', 2, 'PERAWAT', 3210, 88),
('3343223222125760', 'PROBOLINGGO', '2020-01-22', 'LAKI - LAKI', '19:29:00', 'RS/RB', 'TUNGGAL', 2, 'BIDAN UMUM', 3211, 89),
('3343223222125780', 'PROBOLINGGO', '2020-01-23', 'LAKI - LAKI', '20:29:00', 'PUSKESMAS', 'TUNGGAL', 1, 'DOKTER', 3212, 90),
('3343223222125800', 'PROBOLINGGO', '2020-01-24', 'PEREMPUAN', '21:29:00', 'POLINDES', 'TUNGGAL', 1, 'PERAWAT', 3213, 91),
('3343223222125820', 'PROBOLINGGO', '2020-01-25', 'LAKI - LAKI', '22:29:00', 'PUSKESMAS', 'KEMBAR2', 1, 'BIDAN UMUM', 3214, 92),
('3343223222125840', 'PROBOLINGGO', '2020-01-26', 'PEREMPUAN', '23:29:00', 'PUSKESMAS', 'TUNGGAL', 2, 'DOKTER', 3215, 93),
('3343223222125860', 'PROBOLINGGO', '2020-01-27', 'LAKI - LAKI', '00:29:00', 'POLINDES', 'TUNGGAL', 2, 'PERAWAT', 3216, 94),
('3343223222125880', 'PROBOLINGGO', '2020-01-28', 'LAKI - LAKI', '01:29:00', 'PUSKESMAS', 'TUNGGAL', 2, 'BIDAN UMUM', 3217, 95),
('3343223222125900', 'PROBOLINGGO', '2020-01-29', 'PEREMPUAN', '02:29:00', 'RS/RB', 'TUNGGAL', 2, 'DOKTER', 3218, 96),
('3343223222125920', 'PROBOLINGGO', '2020-01-30', 'LAKI - LAKI', '03:29:00', 'PUSKESMAS', 'KEMBAR2', 2, 'PERAWAT', 3219, 97),
('3343223222125940', 'PROBOLINGGO', '2020-01-31', 'PEREMPUAN', '04:29:00', 'RS/RB', 'KEMBAR2', 2, 'BIDAN UMUM', 3220, 98),
('3343223222125960', 'PROBOLINGGO', '2020-02-01', 'LAKI - LAKI', '05:29:00', 'PUSKESMAS', 'KEMBAR2', 1, 'DOKTER', 3221, 99),
('3343223222125980', 'PROBOLINGGO', '2020-02-02', 'PEREMPUAN', '06:29:00', 'PUSKESMAS', 'KEMBAR2', 1, 'PERAWAT', 3222, 100),
('3343223222126000', 'PROBOLINGGO', '2020-02-03', 'LAKI - LAKI', '07:29:00', 'PUSKESMAS', 'TUNGGAL', 4, 'BIDAN UMUM', 3223, 101),
('3343223222126020', 'PROBOLINGGO', '2020-02-04', 'PEREMPUAN', '08:29:00', 'POLINDES', 'TUNGGAL', 4, 'DOKTER', 3224, 102),
('3343223222126040', 'PROBOLINGGO', '2020-02-05', 'LAKI - LAKI', '09:29:00', 'RS/RB', 'TUNGGAL', 3, 'PERAWAT', 3225, 103),
('3343223222126060', 'PROBOLINGGO', '2020-02-06', 'LAKI - LAKI', '10:29:00', 'RS/RB', 'TUNGGAL', 4, 'BIDAN UMUM', 3226, 104),
('3343223222126080', 'PROBOLINGGO', '2020-02-07', 'PEREMPUAN', '11:29:00', 'PUSKESMAS', 'TUNGGAL', 3, 'DOKTER', 3227, 105),
('3343223222126100', 'PROBOLINGGO', '2020-02-08', 'LAKI - LAKI', '12:29:00', 'POLINDES', 'TUNGGAL', 4, 'PERAWAT', 3228, 106),
('3343223222126120', 'PROBOLINGGO', '2020-02-09', 'PEREMPUAN', '13:29:00', 'PUSKESMAS', 'TUNGGAL', 3, 'BIDAN UMUM', 3229, 107),
('3343223222126140', 'PROBOLINGGO', '2020-02-10', 'LAKI - LAKI', '14:29:00', 'PUSKESMAS', 'TUNGGAL', 4, 'DOKTER', 3230, 108),
('3343223222126160', 'PROBOLINGGO', '2020-02-11', 'LAKI - LAKI', '15:29:00', 'RS/RB', 'TUNGGAL', 3, 'PERAWAT', 3231, 109),
('3343223222126180', 'PROBOLINGGO', '2020-02-12', 'LAKI - LAKI', '16:29:00', 'RS/RB', 'TUNGGAL', 4, 'BIDAN UMUM', 3232, 110),
('3343223222126200', 'PROBOLINGGO', '2020-02-13', 'PEREMPUAN', '17:29:00', 'PUSKESMAS', 'TUNGGAL', 3, 'DOKTER', 3233, 111),
('3343223222126220', 'PROBOLINGGO', '2020-02-14', 'LAKI - LAKI', '18:29:00', 'RS/RB', 'TUNGGAL', 2, 'PERAWAT', 3234, 112),
('3343223222126240', 'PROBOLINGGO', '2020-02-15', 'PEREMPUAN', '19:29:00', 'POLINDES', 'TUNGGAL', 3, 'BIDAN UMUM', 3235, 113),
('3343223222126260', 'PROBOLINGGO', '2020-02-16', 'LAKI - LAKI', '20:29:00', 'PUSKESMAS', 'TUNGGAL', 4, 'DOKTER', 3236, 114),
('3343223222126280', 'PROBOLINGGO', '2020-02-17', 'PEREMPUAN', '21:29:00', 'RS/RB', 'TUNGGAL', 3, 'PERAWAT', 3237, 115),
('3343223222126300', 'PROBOLINGGO', '2020-02-18', 'LAKI - LAKI', '22:29:00', 'POLINDES', 'TUNGGAL', 2, 'BIDAN UMUM', 3238, 116),
('3343223222126320', 'PROBOLINGGO', '2020-02-19', 'PEREMPUAN', '23:29:00', 'PUSKESMAS', 'TUNGGAL', 3, 'DOKTER', 3239, 117),
('3343223222126340', 'PROBOLINGGO', '2020-02-20', 'PEREMPUAN', '00:29:00', 'PUSKESMAS', 'TUNGGAL', 4, 'PERAWAT', 3240, 118),
('3343223222126360', 'PROBOLINGGO', '2020-02-21', 'LAKI - LAKI', '01:29:00', 'PUSKESMAS', 'TUNGGAL', 2, 'BIDAN UMUM', 3241, 119),
('3343223222126380', 'PROBOLINGGO', '2020-02-22', 'LAKI - LAKI', '02:29:00', 'RS/RB', 'TUNGGAL', 3, 'DOKTER', 3242, 120),
('3343223222126400', 'PROBOLINGGO', '2020-02-23', 'PEREMPUAN', '03:29:00', 'RS/RB', 'TUNGGAL', 1, 'PERAWAT', 3243, 121),
('3343223222126420', 'PROBOLINGGO', '2020-02-24', 'LAKI - LAKI', '04:29:00', 'POLINDES', 'TUNGGAL', 2, 'BIDAN UMUM', 3244, 122),
('3343223222126440', 'PROBOLINGGO', '2020-02-25', 'PEREMPUAN', '05:29:00', 'PUSKESMAS', 'TUNGGAL', 3, 'DOKTER', 3245, 123),
('3343223222126460', 'PROBOLINGGO', '2020-02-26', 'LAKI - LAKI', '06:29:00', 'POLINDES', 'TUNGGAL', 2, 'PERAWAT', 3246, 124),
('3343223222126480', 'PROBOLINGGO', '2020-02-27', 'LAKI - LAKI', '07:29:00', 'RS/RB', 'TUNGGAL', 3, 'BIDAN UMUM', 3247, 125),
('3343223222126500', 'PROBOLINGGO', '2020-02-28', 'LAKI - LAKI', '08:29:00', 'PUSKESMAS', 'TUNGGAL', 2, 'PERAWAT', 3248, 126),
('3343223222126520', 'PROBOLINGGO', '2020-02-29', 'PEREMPUAN', '09:29:00', 'POLINDES', 'TUNGGAL', 3, 'BIDAN UMUM', 3249, 127);

-- --------------------------------------------------------

--
-- Struktur dari tabel `DATA_DESA`
--

CREATE TABLE `DATA_DESA` (
  `id_desa` char(4) NOT NULL,
  `nama_desa` varchar(35) NOT NULL,
  `kode_pos_desa` int(5) NOT NULL,
  `alamat_desa` text NOT NULL,
  `email_desa` varchar(35) NOT NULL,
  `telepon_desa` char(13) NOT NULL,
  `website_desa` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `DATA_DESA`
--

INSERT INTO `DATA_DESA` (`id_desa`, `nama_desa`, `kode_pos_desa`, `alamat_desa`, `email_desa`, `telepon_desa`, `website_desa`) VALUES
('D281', 'SELOGUDIG KULON', 67281, 'Selogudig Kulon, Pajarakan, Kabupaten Probolinggo', 'selogudigkulon@sidesa.my.id', '0335843966', 'selogudigkulon.sidesa.my.id'),
('D282', 'SELOGUDIG WETAN', 67281, 'Selogudig Wetan, Pajarakan, Probolinggo', 'selogudigwetan@sidesa.my.id', '033567562711', 'selogudigwetan.sidesa.my.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `DATA_DUSUN`
--

CREATE TABLE `DATA_DUSUN` (
  `id_dusun` char(4) NOT NULL,
  `id_ketua_dusun` char(16) NOT NULL,
  `id_desa` char(4) NOT NULL,
  `nama_dusun` varchar(35) NOT NULL,
  `luas_wilayah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `DATA_DUSUN`
--

INSERT INTO `DATA_DUSUN` (`id_dusun`, `id_ketua_dusun`, `id_desa`, `nama_dusun`, `luas_wilayah`) VALUES
('S231', '7782998277361580', 'D281', 'KRAJAN', 2300),
('S232', '7782998277361590', 'D281', 'KRAMAT JATI', 2301),
('S233', '7782998277361600', 'D281', 'KEMUNING', 2302),
('S234', '7782998277361610', 'D281', 'SUMBER REJO', 2303),
('S235', '7782998277361620', 'D281', 'BATU LUMPANG', 2304),
('S236', '7782998277361630', 'D281', 'TALANG', 2305),
('S237', '7782998277361640', 'D281', 'ASEM', 2306);

-- --------------------------------------------------------

--
-- Struktur dari tabel `DATA_KATEGORI`
--

CREATE TABLE `DATA_KATEGORI` (
  `id_kategori` char(4) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL,
  `detail_kategori` text NOT NULL,
  `status_aktif` enum('AKTIF','TIDAK AKTIF') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `DATA_KATEGORI`
--

INSERT INTO `DATA_KATEGORI` (`id_kategori`, `nama_kategori`, `detail_kategori`, `status_aktif`) VALUES
('K106', 'OLAHRAGA', 'Berisi tentang berita seputar olahraga', 'AKTIF'),
('K369', 'KERJA BAKTI', 'Berisi tentang kegiatan kerja bakti', 'AKTIF'),
('K876', 'DANA SOSIAL', 'Berisi tentang kegiatan dana sosial', 'AKTIF'),
('K975', 'BANTUAN DESA', 'Berisi berita tentang bantuan desa', 'AKTIF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `DATA_KK`
--

CREATE TABLE `DATA_KK` (
  `no_kk` char(16) NOT NULL,
  `id_rt` char(4) NOT NULL,
  `tanggal_cetak_kk` date NOT NULL,
  `kelas_sosial` enum('ATAS','MENENGAH KEATAS','MENENGAH KEBAWAH','BAWAH') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `DATA_KK`
--

INSERT INTO `DATA_KK` (`no_kk`, `id_rt`, `tanggal_cetak_kk`, `kelas_sosial`) VALUES
('8893774866278890', 'T524', '2020-12-10', 'ATAS'),
('8893774866278900', 'T525', '2020-12-11', 'MENENGAH KEATAS'),
('8893774866278910', 'T526', '2020-12-12', 'ATAS'),
('8893774866278920', 'T527', '2020-12-13', 'MENENGAH KEBAWAH'),
('8893774866278930', 'T528', '2020-12-14', 'MENENGAH KEATAS'),
('8893774866278940', 'T529', '2020-12-15', 'ATAS'),
('8893774866278950', 'T531', '2020-12-16', 'MENENGAH KEBAWAH'),
('8893774866278960', 'T531', '2020-12-17', 'MENENGAH KEATAS'),
('8893774866278970', 'T532', '2020-12-18', 'MENENGAH KEBAWAH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `DATA_KOMENTAR`
--

CREATE TABLE `DATA_KOMENTAR` (
  `id_komentar` char(5) NOT NULL,
  `id_post` char(5) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `isi_komentar` text NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `status_komentar` enum('DRAFT','APROVED') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `DATA_KOMENTAR`
--

INSERT INTO `DATA_KOMENTAR` (`id_komentar`, `id_post`, `nama`, `email`, `isi_komentar`, `tanggal_post`, `status_komentar`) VALUES
('76667', '00427', 'Wayan Samudro', 'wayan@gmail.com', '<p>Wah mantap banget!</p>', '2020-07-26 10:07:56', 'DRAFT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `DATA_PENDUDUK`
--

CREATE TABLE `DATA_PENDUDUK` (
  `nik` char(16) NOT NULL,
  `id_akte` char(16) NOT NULL,
  `id_perkawinan` char(6) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `status_wajib_ktp` enum('WAJIB','BELUM WAJIB') NOT NULL,
  `agama` enum('ISLAM','KRISTEN','KATHOLIK','HINDU','BUDHA','KONGHUCU','LAIN LAIN') NOT NULL,
  `pendidikan_dalam_kk` varchar(45) NOT NULL,
  `pendidikan_sekarang` varchar(45) NOT NULL,
  `pekerjaan` varchar(45) NOT NULL,
  `status_warga_negara` enum('WNI','WNA') NOT NULL,
  `status_penduduk` enum('TETAP','TIDAK TETAP','PENDATANG') NOT NULL,
  `alamat_sebelumnya` text DEFAULT NULL,
  `alamat_sekarang` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `DATA_PENDUDUK`
--

INSERT INTO `DATA_PENDUDUK` (`nik`, `id_akte`, `id_perkawinan`, `nama`, `status_wajib_ktp`, `agama`, `pendidikan_dalam_kk`, `pendidikan_sekarang`, `pekerjaan`, `status_warga_negara`, `status_penduduk`, `alamat_sebelumnya`, `alamat_sekarang`) VALUES
('7782998277361162', '3343223222125540', 'PK3212', 'Mahmud Adi', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PEGAWAI NEGERI SIPIL (PNS)', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 05'),
('7782998277361170', '3343223222125560', 'PK3213', 'MUHAMMAD BAGUS', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 06'),
('7782998277361180', '3343223222125580', 'PK3214', 'SLAMET IMRAN', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PELAJAR / MAHASISWA', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 07'),
('7782998277361190', '3343223222125600', 'PK3215', 'HIDAYAT IBRAHIM', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 08'),
('7782998277361200', '3343223222125620', 'PK3216', 'BULAN SINTA', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PEGAWAI NEGERI SIPIL (PNS)', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 09'),
('7782998277361210', '3343223222125640', 'PK3217', 'LESTARI KADEK', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 10'),
('7782998277361220', '3343223222125660', 'PK3218', 'MUHAMAD MELATI', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'KONSTRUKSI', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 11'),
('7782998277361230', '3343223222125680', 'PK3219', 'BUANA BATARI', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 12'),
('7782998277361240', '3343223222125700', 'PK3220', 'LUTFI WANGI', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PEGAWAI NEGERI SIPIL (PNS)', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 13'),
('7782998277361250', '3343223222125720', 'PK3221', 'MUHAMMAD WATI', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 14'),
('7782998277361260', '3343223222125740', 'PK3222', 'Muhammad Slamet', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'BELUM / TIDAK KERJA', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 15'),
('7782998277361270', '3343223222125760', 'PK3223', 'Purnama Nyoman', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 16'),
('7782998277361280', '3343223222125780', 'PK3224', 'Iskandar Hidayat', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PEGAWAI NEGERI SIPIL (PNS)', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 17'),
('7782998277361290', '3343223222125800', 'PK3225', 'Dwi Wibowo', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 18'),
('7782998277361300', '3343223222125820', 'PK3226', 'Yuda Utari', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 19'),
('7782998277361310', '3343223222125840', 'PK3227', 'Mahmud Hasan', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PEGAWAI NEGERI SIPIL (PNS)', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 20'),
('7782998277361320', '3343223222125860', 'PK3228', 'Muhamad Rahman', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'BELUM / TIDAK KERJA', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 21'),
('7782998277361330', '3343223222125880', 'PK3229', 'Mansur Firdaus', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'BELUM / TIDAK KERJA', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 22'),
('7782998277361340', '3343223222125900', 'PK3230', 'Tirta Raja', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 23'),
('7782998277361350', '3343223222125920', 'PK3231', 'Agung Akbar', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PEGAWAI NEGERI SIPIL (PNS)', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 24'),
('7782998277361360', '3343223222125940', 'PK3232', 'Mahmud Citra', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'BELUM / TIDAK KERJA', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 25'),
('7782998277361370', '3343223222125960', 'PK3233', 'Wayan Kasih', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 26'),
('7782998277361380', '3343223222125980', 'PK3234', 'Putra Ali', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PEGAWAI NEGERI SIPIL (PNS)', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 27'),
('7782998277361390', '3343223222126000', 'PK3235', 'Taufik Kuwat', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 28'),
('7782998277361400', '3343223222126020', 'PK3236', 'Wahyu Ketut', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 29'),
('7782998277361410', '3343223222126040', 'PK3237', 'Harta Susila', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 30'),
('7782998277361420', '3343223222126060', 'PK3238', 'Cinta Putri', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PEGAWAI NEGERI SIPIL (PNS)', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 31'),
('7782998277361430', '3343223222126080', 'PK3239', 'Putra Lutfi', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 32'),
('7782998277361440', '3343223222126100', 'PK3240', 'Ilham Sukarno', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 33'),
('7782998277361450', '3343223222126120', 'PK3241', 'Lestari Agus', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 34'),
('7782998277361460', '3343223222126140', 'PK3242', 'Arif Taufik', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PEGAWAI NEGERI SIPIL (PNS)', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 35'),
('7782998277361470', '3343223222126160', 'PK3243', 'Vina Purnama', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 36'),
('7782998277361480', '3343223222126180', 'PK3244', 'Mega Wangi', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 37'),
('7782998277361490', '3343223222126200', 'PK3245', 'Intan Daud', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 38'),
('7782998277361500', '3343223222126220', 'PK3246', 'Kuwat Abdullah', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PEGAWAI NEGERI SIPIL (PNS)', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 39'),
('7782998277361510', '3343223222126240', 'PK3247', 'Citra Bachtiar', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'BELUM / TIDAK KERJA', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 40'),
('7782998277361520', '3343223222126260', 'PK3248', 'Wayan Buana', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'BELUM / TIDAK KERJA', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 41'),
('7782998277361530', '3343223222126280', 'PK3249', 'Annisa Raja', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 42'),
('7782998277361540', '3343223222126300', 'PK3250', 'Utari Ismail', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PEGAWAI NEGERI SIPIL (PNS)', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 43'),
('7782998277361550', '3343223222126320', 'PK3251', 'Sulaiman Sari', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'BELUM / TIDAK KERJA', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 44'),
('7782998277361560', '3343223222126340', 'PK3252', 'Akbar Hidayat', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PEGAWAI NEGERI SIPIL (PNS)', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 45'),
('7782998277361570', '3343223222126360', 'PK3253', 'Wahyu Kuwat', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 46'),
('7782998277361580', '3343223222126380', 'PK3254', 'Lestari Sinta', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'BELUM / TIDAK KERJA', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 47'),
('7782998277361590', '3343223222126400', 'PK3255', 'Adi Nirmala', 'WAJIB', 'HINDU', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 48'),
('7782998277361600', '3343223222126420', 'PK3256', 'Krisna Wulan', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PEGAWAI NEGERI SIPIL (PNS)', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 49'),
('7782998277361610', '3343223222126440', 'PK3257', 'Kuwat Sukarno', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PETERNAK', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 50'),
('7782998277361620', '3343223222126460', 'PK3258', 'Wira Muhamad', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'BELUM / TIDAK KERJA', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 51'),
('7782998277361630', '3343223222126480', 'PK3259', 'Komang Bethari', 'WAJIB', 'BUDHA', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PEGAWAI NEGERI SIPIL (PNS)', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 52'),
('7782998277361640', '3343223222126500', 'PK3260', 'Kuwat Mega', 'WAJIB', 'KATHOLIK', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PEGAWAI NEGERI SIPIL (PNS)', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 53'),
('7782998277361650', '3343223222126520', 'PK3261', 'Citra Ismail', 'WAJIB', 'ISLAM', 'SLTA / SEDERAJAT', 'TIDAK SEDANG SEKOLAH', 'PEGAWAI NEGERI SIPIL (PNS)', 'WNI', 'TETAP', '', 'Jl. Pahlawan, No. 54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `DATA_PERANGKAT`
--

CREATE TABLE `DATA_PERANGKAT` (
  `id_perangkat` char(16) NOT NULL,
  `id_desa` char(4) NOT NULL,
  `niap` char(18) NOT NULL,
  `nip` char(18) NOT NULL,
  `pangkat` char(2) NOT NULL,
  `no_sk_angkat` int(11) NOT NULL,
  `tanggal_sk_angkat` date NOT NULL,
  `no_sk_berhenti` int(11) NOT NULL,
  `tanggal_sk_berhenti` date NOT NULL,
  `masa_jabatan` int(11) NOT NULL,
  `jabatan` varchar(35) NOT NULL,
  `status_pegawai` enum('AKTIF','TIDAK AKTIF') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `DATA_PERANGKAT`
--

INSERT INTO `DATA_PERANGKAT` (`id_perangkat`, `id_desa`, `niap`, `nip`, `pangkat`, `no_sk_angkat`, `tanggal_sk_angkat`, `no_sk_berhenti`, `tanggal_sk_berhenti`, `masa_jabatan`, `jabatan`, `status_pegawai`) VALUES
('7782998277361210', 'D281', '7783667277839928', '8983774827382647', '4A', 2147483647, '2020-07-07', 2147483647, '2030-07-21', 10, 'KEPALA DESA', 'AKTIF'),
('7782998277361230', 'D281', '1122112211221122', '3344334433443344', '3D', 2147483647, '2020-07-21', 2147483647, '2030-07-21', 10, 'SEKRETARIS DESA', 'AKTIF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `DATA_PERKAWINAN`
--

CREATE TABLE `DATA_PERKAWINAN` (
  `id_perkawinan` char(6) NOT NULL,
  `no_akta_nikah` varchar(16) DEFAULT NULL,
  `tanggal_perkawinan` char(10) DEFAULT NULL,
  `no_akta_perceraian` varchar(16) DEFAULT NULL,
  `tanggal_perceraian` char(10) DEFAULT NULL,
  `status_perkawinan` enum('BELUM KAWIN','KAWIN','CERAI HIDUP','CERAI MATI') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `DATA_PERKAWINAN`
--

INSERT INTO `DATA_PERKAWINAN` (`id_perkawinan`, `no_akta_nikah`, `tanggal_perkawinan`, `no_akta_perceraian`, `tanggal_perceraian`, `status_perkawinan`) VALUES
('PK3212', '7782663566176620', '1996-08-23', '', '', 'KAWIN'),
('PK3213', '7782663566176630', '1996-08-24', '', '', 'KAWIN'),
('PK3214', '7782663566176640', '1996-08-25', '', '', 'KAWIN'),
('PK3215', '7782663566176650', '1996-08-26', '', '', 'KAWIN'),
('PK3216', '7782663566176660', '1996-08-27', '', '', 'KAWIN'),
('PK3217', '7782663566176670', '1996-08-28', '', '', 'KAWIN'),
('PK3218', '7782663566176680', '1996-08-29', '', '', 'KAWIN'),
('PK3219', '7782663566176690', '1996-08-30', '', '', 'KAWIN'),
('PK3220', '7782663566176700', '1996-08-31', '', '', 'KAWIN'),
('PK3221', '7782663566176710', '1996-09-01', '', '', 'KAWIN'),
('PK3222', '7782663566176720', '1996-09-02', '', '', 'KAWIN'),
('PK3223', '7782663566176730', '1996-09-03', '', '', 'KAWIN'),
('PK3224', '7782663566176740', '1996-09-04', '', '', 'KAWIN'),
('PK3225', '7782663566176750', '1996-09-05', '', '', 'KAWIN'),
('PK3226', '7782663566176760', '1996-09-06', '', '', 'KAWIN'),
('PK3227', '7782663566176770', '1996-09-07', '', '', 'KAWIN'),
('PK3228', '7782663566176780', '1996-09-08', '', '', 'KAWIN'),
('PK3229', '7782663566176790', '1996-09-09', '', '', 'KAWIN'),
('PK3230', '7782663566176800', '1996-09-10', '', '', 'KAWIN'),
('PK3231', '7782663566176810', '1996-09-11', '', '', 'KAWIN'),
('PK3232', '7782663566176820', '1996-09-12', '', '', 'KAWIN'),
('PK3233', '7782663566176830', '1996-09-13', '', '', 'KAWIN'),
('PK3234', '7782663566176840', '1996-09-14', '', '', 'KAWIN'),
('PK3235', '7782663566176850', '1996-09-15', '', '', 'KAWIN'),
('PK3236', '7782663566176860', '1996-09-16', '', '', 'KAWIN'),
('PK3237', '7782663566176870', '1996-09-17', '', '', 'KAWIN'),
('PK3238', '7782663566176880', '1996-09-18', '', '', 'KAWIN'),
('PK3239', '7782663566176890', '1996-09-19', '', '', 'KAWIN'),
('PK3240', '7782663566176900', '1996-09-20', '', '', 'KAWIN'),
('PK3241', '7782663566176910', '1996-09-21', '', '', 'KAWIN'),
('PK3242', '7782663566176920', '1996-09-22', '', '', 'KAWIN'),
('PK3243', '7782663566176930', '1996-09-23', '', '', 'KAWIN'),
('PK3244', '7782663566176940', '1996-09-24', '', '', 'KAWIN'),
('PK3245', '7782663566176950', '1996-09-25', '', '', 'KAWIN'),
('PK3246', '7782663566176960', '1996-09-26', '', '', 'KAWIN'),
('PK3247', '7782663566176970', '1996-09-27', '', '', 'KAWIN'),
('PK3248', '7782663566176980', '1996-09-28', '', '', 'KAWIN'),
('PK3249', '7782663566176990', '1996-09-29', '', '', 'KAWIN'),
('PK3250', '7782663566177000', '1996-09-30', '', '', 'KAWIN'),
('PK3251', '7782663566177010', '1996-10-01', '', '', 'KAWIN'),
('PK3252', '7782663566177020', '1996-10-02', '', '', 'KAWIN'),
('PK3253', '7782663566177030', '1996-10-03', '', '', 'KAWIN'),
('PK3254', '7782663566177040', '1996-10-04', '', '', 'KAWIN'),
('PK3255', '7782663566177050', '1996-10-05', '', '', 'KAWIN'),
('PK3256', '7782663566177060', '1996-10-06', '', '', 'KAWIN'),
('PK3257', '7782663566177070', '1996-10-07', '', '', 'KAWIN'),
('PK3258', '7782663566177080', '1996-10-08', '', '', 'KAWIN'),
('PK3259', '7782663566177090', '1996-10-09', '', '', 'KAWIN'),
('PK3260', '7782663566177100', '1996-10-10', '', '', 'KAWIN'),
('PK3261', '7782663566177110', '1996-10-11', '', '', 'KAWIN'),
('PK8125', '', '', '', '', 'CERAI MATI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `DATA_POSTINGAN`
--

CREATE TABLE `DATA_POSTINGAN` (
  `id_post` char(5) NOT NULL,
  `id_tags` char(4) NOT NULL,
  `id_user` char(16) NOT NULL,
  `judul` varchar(120) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` datetime NOT NULL,
  `detail_post` longtext NOT NULL,
  `gambar_post` varchar(22) NOT NULL,
  `status_post` enum('PUBLISH','DRAFT') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `DATA_POSTINGAN`
--

INSERT INTO `DATA_POSTINGAN` (`id_post`, `id_tags`, `id_user`, `judul`, `tanggal_post`, `tanggal_update`, `detail_post`, `gambar_post`, `status_post`) VALUES
('00427', 'T803', '0000000000000000', 'Skema Pencairan Dana Desa Tahun 2020 Berubah', '2020-07-23 15:49:38', '0000-00-00 00:00:00', '<p style=\"text-align: justify; \">&nbsp;&nbsp;&nbsp;&nbsp;Dirjen PMD Kementerian Desa, Pembangunan Daerah Tertinggal dan Transmigrasi (PDTT), Taufik Madjid di sela-sela kunjungan Wamendes di Ende pertengahan Desember 2019 lalu menjelaskan, skema pencairan dana desa tahun 2020 akan berubah.</p><p style=\"text-align: justify; \">&nbsp;&nbsp;&nbsp;&nbsp;Untuk itu, dirinya meminta seluruh pihak baik pemerintah daerah, pendamping desa maupun pemerintah desa untuk lebih serius melakukan perencanaan yang efektif dan mempercepat pembuatan peraturan desa yang memuat penetapan Anggaran Pendapatan Belanja Desa.</p><p style=\"text-align: justify; \">&nbsp;&nbsp;&nbsp;&nbsp;â€œKita sudah evaluasi, tahun 2020&nbsp; realisasi pencairan dana desa tahap 1 bisa dilakukan di bulan Januari agar bisa lebih efektif dan tidak Silpa. Tapi kuncinya ya, Perbup dan Perdes harus segera ditetapkan di Desember ini,â€ ujar Taufik.</p><p style=\"text-align: justify; \">&nbsp;&nbsp;&nbsp;&nbsp;Apa yang dikatakan Taufik telah menjadi salah satu topik dalam Peraturan Menteri Keuangan (PMK) Nomor 205 Tahun 2019. Aturan tersebut memuat aturan tentang Pengelolaan Dana Desa.</p><p style=\"text-align: justify; \">&nbsp;&nbsp;&nbsp;&nbsp;Skema yang dimaksud yakni pada tahun sebelumnya pola pencairan dana desa yakni 20% tahap I, 40% tahap II, 40% tahap III. Memasuki tahun 2020, pola ini berganti menjadi; 40% tahap I, 40% &nbsp; &nbsp; tahap II, 20 % tahap III.</p><p style=\"text-align: justify; \">&nbsp;&nbsp;&nbsp;&nbsp;Dalam pasal 23 peraturan tersebut dijelaskan, khusus tahap I, paling cepat dicairkan pada Januari dan paling lambat bulan Juni. Untuk tahap II, paling cepat dicairkan pada bulan Maret dan paling lambat dicairkan pada Minggu keempat bulan Agustus. Sedangkan tahap III, paling cepat dicairkan pada bulan Juli.</p><p style=\"text-align: justify; \">&nbsp;&nbsp;&nbsp;&nbsp;Lebih lanjut dijelaskan, skema penyaluran dana desa untuk desa mandiri dilakukan melewati dua tahap. Tahap I paling cepat bulan Januari dan paling lambat bulan Juni sebesar 60%. Tahap II cair paling cepat bulan Juli sebesar 40%.</p><p style=\"text-align: justify; \">&nbsp;&nbsp;&nbsp;&nbsp;Adapun status desa mandiri merupakan hasil penilaian yang dilakukan setiap tahun oleh Kementerian Desa, Pembangunan Daerah Tertinggal dan Transmigrasi (PDTT) dalam indeks desa.</p><p style=\"text-align: justify; \">&nbsp;&nbsp;&nbsp;&nbsp;Persyaratan pencairan dana desa diatur dalam pasal 24. Khusus tahap I, demikian dalam Pasal 24, bupati atau walikota harus; pertama, mengeluarkan aturan peraturan bupati/wali kota tentang tata cara pembagian dan penetapan rincian dana desa. Kedua, mengeluarkan peraturan desa mengenai APBDes. Ketiga, mengeluarkan surat kuasa pemindahbukuan dana desa.</p><p style=\"text-align: justify; \">&nbsp;&nbsp;&nbsp;&nbsp;Pada tahap II, bupati atau walikota harus; pertama, membuat laporan realisasi penyerapan dan capaian keluaran dana desa tahun anggaran sebelumnya. Kedua, membuat laporan realisasi penyerapan tahap I dengan tata-rata penyerapan sebesar 50% dan rata-rata keluaran paling sedikit 35%.</p><p style=\"text-align: justify; \">&nbsp;&nbsp;&nbsp;&nbsp;Selanjutnya pada tahap III, bupati atau walikota menyiapkan; pertama, laporan realisasi penyerapan dan capaian keluaran dana desa sampai tahap II dengan rata-rata realisasi penyerapan paling sedikit 90% dan rata-rata keluaran paling sedikit 75%. Kedua, membuat laporan konvergensi pencegahan stunting tingkat desa tahun anggaran sebelumnya.<br></p>', '2020-07-23-00427.png', 'PUBLISH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `DATA_RT`
--

CREATE TABLE `DATA_RT` (
  `id_rt` char(4) NOT NULL,
  `id_ketua_rt` char(16) NOT NULL,
  `id_rw` char(4) NOT NULL,
  `nomor_rt` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `DATA_RT`
--

INSERT INTO `DATA_RT` (`id_rt`, `id_ketua_rt`, `id_rw`, `nomor_rt`) VALUES
('T524', '7782998277361162', 'W321', 1),
('T525', '7782998277361170', 'W321', 2),
('T526', '7782998277361180', 'W322', 1),
('T527', '7782998277361190', 'W322', 2),
('T528', '7782998277361200', 'W323', 1),
('T529', '7782998277361210', 'W323', 2),
('T530', '7782998277361220', 'W324', 1),
('T531', '7782998277361230', 'W324', 2),
('T532', '7782998277361240', 'W325', 1),
('T533', '7782998277361250', 'W325', 2),
('T534', '7782998277361260', 'W326', 1),
('T535', '7782998277361270', 'W326', 2),
('T536', '7782998277361280', 'W327', 1),
('T537', '7782998277361290', 'W327', 2),
('T538', '7782998277361300', 'W328', 1),
('T539', '7782998277361310', 'W328', 2),
('T540', '7782998277361320', 'W329', 1),
('T541', '7782998277361330', 'W329', 2),
('T542', '7782998277361340', 'W330', 1),
('T543', '7782998277361350', 'W330', 2),
('T544', '7782998277361360', 'W331', 1),
('T545', '7782998277361370', 'W331', 2),
('T546', '7782998277361380', 'W332', 1),
('T547', '7782998277361390', 'W332', 2),
('T548', '7782998277361400', 'W333', 1),
('T549', '7782998277361410', 'W333', 2),
('T550', '7782998277361420', 'W334', 1),
('T551', '7782998277361430', 'W334', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `DATA_RW`
--

CREATE TABLE `DATA_RW` (
  `id_rw` char(4) NOT NULL,
  `id_ketua_rw` char(16) NOT NULL,
  `id_dusun` char(4) NOT NULL,
  `nomor_rw` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `DATA_RW`
--

INSERT INTO `DATA_RW` (`id_rw`, `id_ketua_rw`, `id_dusun`, `nomor_rw`) VALUES
('W321', '7782998277361440', 'S231', 1),
('W322', '7782998277361450', 'S231', 2),
('W323', '7782998277361460', 'S232', 1),
('W324', '7782998277361470', 'S232', 2),
('W325', '7782998277361480', 'S233', 1),
('W326', '7782998277361490', 'S233', 2),
('W327', '7782998277361500', 'S234', 1),
('W328', '7782998277361510', 'S234', 2),
('W329', '7782998277361520', 'S235', 1),
('W330', '7782998277361530', 'S235', 2),
('W331', '7782998277361540', 'S236', 1),
('W332', '7782998277361550', 'S236', 2),
('W333', '7782998277361560', 'S237', 1),
('W334', '7782998277361570', 'S237', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `DATA_TAGS`
--

CREATE TABLE `DATA_TAGS` (
  `id_tags` char(4) NOT NULL,
  `id_kategori` char(4) NOT NULL,
  `nama_tags` varchar(25) NOT NULL,
  `detail_tags` text NOT NULL,
  `status_aktif` enum('AKTIF','TIDAK AKTIF') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `DATA_TAGS`
--

INSERT INTO `DATA_TAGS` (`id_tags`, `id_kategori`, `nama_tags`, `detail_tags`, `status_aktif`) VALUES
('T259', 'K106', 'VOLY', 'Berita tentang seputar olahraga voly', 'AKTIF'),
('T496', 'K876', 'DANA COVID', 'Memuat tentang berita seputar dana covid', 'AKTIF'),
('T662', 'K106', 'FUTSAL', 'Berita tentang seputar futsal', 'AKTIF'),
('T803', 'K876', 'DANA LANSIA', 'Berisi berita tentang dana lansia', 'AKTIF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `DATA_USER`
--

CREATE TABLE `DATA_USER` (
  `id_user` char(16) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` enum('ADMIN','SUPER ADMIN') NOT NULL,
  `photo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `DATA_USER`
--

INSERT INTO `DATA_USER` (`id_user`, `email`, `password`, `level`, `photo`) VALUES
('0000000000000000', 'admin@sidesa.my.id', 'eafd78efdb34e5b67b8676f8124cefaa', 'SUPER ADMIN', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `DETAIL_KK`
--

CREATE TABLE `DETAIL_KK` (
  `no_kk` char(16) NOT NULL,
  `nik` char(16) NOT NULL,
  `hubungan_dalam_kk` enum('KEPALA KELUARGA','SUAMI','ISTRI','ANAK','MENANTU','CUCU','ORANG TUA','MERTUA','PEMBANTU','LAIN LAIN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `DETAIL_KK`
--

INSERT INTO `DETAIL_KK` (`no_kk`, `nik`, `hubungan_dalam_kk`) VALUES
('8893774866278890', '7782998277361162', 'KEPALA KELUARGA'),
('8893774866278890', '7782998277361170', 'ISTRI'),
('8893774866278890', '7782998277361180', 'ANAK'),
('8893774866278890', '7782998277361190', 'ANAK'),
('8893774866278890', '7782998277361200', 'ANAK'),
('8893774866278890', '7782998277361210', 'ANAK'),
('8893774866278900', '7782998277361220', 'MENANTU'),
('8893774866278900', '7782998277361230', 'ISTRI'),
('8893774866278900', '7782998277361240', 'ANAK'),
('8893774866278900', '7782998277361250', 'ANAK'),
('8893774866278900', '7782998277361260', 'ANAK'),
('8893774866278900', '7782998277361270', 'ANAK'),
('8893774866278910', '7782998277361280', 'LAIN LAIN'),
('8893774866278910', '7782998277361290', 'ISTRI'),
('8893774866278910', '7782998277361300', 'KEPALA KELUARGA'),
('8893774866278910', '7782998277361310', 'ANAK'),
('8893774866278910', '7782998277361320', 'ANAK'),
('8893774866278910', '7782998277361330', 'ANAK'),
('8893774866278920', '7782998277361340', 'KEPALA KELUARGA'),
('8893774866278920', '7782998277361350', 'ISTRI'),
('8893774866278920', '7782998277361360', 'ANAK'),
('8893774866278920', '7782998277361370', 'ANAK'),
('8893774866278920', '7782998277361380', 'ANAK'),
('8893774866278920', '7782998277361390', 'ANAK'),
('8893774866278930', '7782998277361400', 'KEPALA KELUARGA'),
('8893774866278930', '7782998277361410', 'ISTRI'),
('8893774866278930', '7782998277361420', 'ANAK'),
('8893774866278930', '7782998277361430', 'ANAK'),
('8893774866278930', '7782998277361440', 'ANAK'),
('8893774866278930', '7782998277361450', 'ANAK'),
('8893774866278940', '7782998277361460', 'LAIN LAIN'),
('8893774866278940', '7782998277361470', 'ISTRI'),
('8893774866278940', '7782998277361480', 'ANAK'),
('8893774866278940', '7782998277361490', 'ANAK'),
('8893774866278940', '7782998277361500', 'ANAK'),
('8893774866278940', '7782998277361510', 'KEPALA KELUARGA'),
('8893774866278950', '7782998277361520', 'KEPALA KELUARGA'),
('8893774866278950', '7782998277361530', 'ISTRI'),
('8893774866278950', '7782998277361540', 'ANAK'),
('8893774866278950', '7782998277361550', 'ANAK'),
('8893774866278950', '7782998277361560', 'ANAK'),
('8893774866278950', '7782998277361570', 'ANAK'),
('8893774866278960', '7782998277361580', 'KEPALA KELUARGA'),
('8893774866278960', '7782998277361590', 'ISTRI'),
('8893774866278960', '7782998277361600', 'ANAK'),
('8893774866278960', '7782998277361610', 'ANAK'),
('8893774866278960', '7782998277361620', 'ANAK'),
('8893774866278960', '7782998277361630', 'ANAK'),
('8893774866278970', '7782998277361640', 'LAIN LAIN'),
('8893774866278970', '7782998277361650', 'KEPALA KELUARGA');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `VIEW_DETAIL_KK`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `VIEW_DETAIL_KK` (
`no_kk` char(16)
,`nik` char(16)
,`nama` varchar(55)
,`hubungan_dalam_kk` enum('KEPALA KELUARGA','SUAMI','ISTRI','ANAK','MENANTU','CUCU','ORANG TUA','MERTUA','PEMBANTU','LAIN LAIN')
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `VIEW_DUSUN`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `VIEW_DUSUN` (
`id_dusun` char(4)
,`nama` varchar(55)
,`nama_desa` varchar(35)
,`nama_dusun` varchar(35)
,`luas_wilayah` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `VIEW_FULL_DATA_KK`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `VIEW_FULL_DATA_KK` (
`no_kk` char(16)
,`tanggal_cetak_kk` date
,`kelas_sosial` enum('ATAS','MENENGAH KEATAS','MENENGAH KEBAWAH','BAWAH')
,`id_rt` char(4)
,`id_rw` char(4)
,`id_dusun` char(4)
,`nik` char(16)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `VIEW_KK`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `VIEW_KK` (
`no_kk` char(16)
,`nama_kepala_kk` varchar(55)
,`rt_rw` varchar(25)
,`nama_dusun` varchar(35)
,`nama_desa` varchar(35)
,`tanggal_cetak_kk` date
,`kelas_sosial` enum('ATAS','MENENGAH KEATAS','MENENGAH KEBAWAH','BAWAH')
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `VIEW_PENDUDUK`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `VIEW_PENDUDUK` (
`nik` char(16)
,`nama` varchar(55)
,`jenis_kelamin` enum('LAKI - LAKI','PEREMPUAN')
,`tempat_tanggal_lahir` varchar(36)
,`agama` enum('ISLAM','KRISTEN','KATHOLIK','HINDU','BUDHA','KONGHUCU','LAIN LAIN')
,`pendidikan_dalam_kk` varchar(45)
,`pendidikan_sekarang` varchar(45)
,`pekerjaan` varchar(45)
,`status_warga_negara` enum('WNI','WNA')
,`status_penduduk` enum('TETAP','TIDAK TETAP','PENDATANG')
,`alamat_sekarang` text
,`nama_desa` varchar(35)
,`nama_dusun` varchar(35)
,`rt_rw` varchar(23)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `VIEW_PERANGKAT`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `VIEW_PERANGKAT` (
`id_perangkat` char(16)
,`nama` varchar(55)
,`nama_desa` varchar(35)
,`niap` char(18)
,`nip` char(18)
,`pangkat` char(2)
,`no_sk_angkat` int(11)
,`tanggal_sk_angkat` date
,`no_sk_berhenti` int(11)
,`tanggal_sk_berhenti` date
,`masa_jabatan` int(11)
,`jabatan` varchar(35)
,`status_pegawai` enum('AKTIF','TIDAK AKTIF')
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `VIEW_POSTINGAN`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `VIEW_POSTINGAN` (
`id_post` char(5)
,`judul` varchar(120)
,`nama_kategori` varchar(25)
,`nama_tags` varchar(25)
,`tanggal_post` datetime
,`status_post` enum('PUBLISH','DRAFT')
,`detail_post` longtext
,`gambar_post` varchar(22)
,`id_tags` char(4)
,`id_kategori` char(4)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `VIEW_RT`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `VIEW_RT` (
`id_rt` char(4)
,`id_rw` char(4)
,`nama` varchar(55)
,`nomor_rt` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `VIEW_RW`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `VIEW_RW` (
`id_rw` char(4)
,`id_dusun` char(4)
,`nama` varchar(55)
,`nomor_rw` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `VIEW_TAGS`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `VIEW_TAGS` (
`id_tags` char(4)
,`nama_tags` varchar(25)
,`nama_kategori` varchar(25)
,`detail_tags` text
,`status_aktif` enum('AKTIF','TIDAK AKTIF')
);

-- --------------------------------------------------------

--
-- Struktur untuk view `VIEW_DETAIL_KK`
--
DROP TABLE IF EXISTS `VIEW_DETAIL_KK`;

CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `VIEW_DETAIL_KK`  AS  select `DETAIL_KK`.`no_kk` AS `no_kk`,`DETAIL_KK`.`nik` AS `nik`,`DATA_PENDUDUK`.`nama` AS `nama`,`DETAIL_KK`.`hubungan_dalam_kk` AS `hubungan_dalam_kk` from (`DETAIL_KK` join `DATA_PENDUDUK`) where `DETAIL_KK`.`nik` = `DATA_PENDUDUK`.`nik` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `VIEW_DUSUN`
--
DROP TABLE IF EXISTS `VIEW_DUSUN`;

CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `VIEW_DUSUN`  AS  select `DATA_DUSUN`.`id_dusun` AS `id_dusun`,`DATA_PENDUDUK`.`nama` AS `nama`,`DATA_DESA`.`nama_desa` AS `nama_desa`,`DATA_DUSUN`.`nama_dusun` AS `nama_dusun`,`DATA_DUSUN`.`luas_wilayah` AS `luas_wilayah` from ((`DATA_DUSUN` join `DATA_PENDUDUK`) join `DATA_DESA`) where `DATA_DUSUN`.`id_ketua_dusun` = `DATA_PENDUDUK`.`nik` and `DATA_DUSUN`.`id_desa` = `DATA_DESA`.`id_desa` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `VIEW_FULL_DATA_KK`
--
DROP TABLE IF EXISTS `VIEW_FULL_DATA_KK`;

CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `VIEW_FULL_DATA_KK`  AS  select `DATA_KK`.`no_kk` AS `no_kk`,`DATA_KK`.`tanggal_cetak_kk` AS `tanggal_cetak_kk`,`DATA_KK`.`kelas_sosial` AS `kelas_sosial`,`DATA_RT`.`id_rt` AS `id_rt`,`DATA_RW`.`id_rw` AS `id_rw`,`DATA_DUSUN`.`id_dusun` AS `id_dusun`,`DETAIL_KK`.`nik` AS `nik` from ((((`DATA_RT` join `DATA_RW`) join `DATA_DUSUN`) join `DATA_KK`) join `DETAIL_KK`) where `DATA_KK`.`id_rt` = `DATA_RT`.`id_rt` and `DATA_RT`.`id_rw` = `DATA_RW`.`id_rw` and `DATA_RW`.`id_dusun` = `DATA_DUSUN`.`id_dusun` and `DATA_KK`.`no_kk` = `DETAIL_KK`.`no_kk` and `DETAIL_KK`.`hubungan_dalam_kk` = 'KEPALA KELUARGA' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `VIEW_KK`
--
DROP TABLE IF EXISTS `VIEW_KK`;

CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `VIEW_KK`  AS  select `DATA_KK`.`no_kk` AS `no_kk`,`DATA_PENDUDUK`.`nama` AS `nama_kepala_kk`,concat(`DATA_RT`.`nomor_rt`,' / ',`DATA_RW`.`nomor_rw`) AS `rt_rw`,`DATA_DUSUN`.`nama_dusun` AS `nama_dusun`,`DATA_DESA`.`nama_desa` AS `nama_desa`,`DATA_KK`.`tanggal_cetak_kk` AS `tanggal_cetak_kk`,`DATA_KK`.`kelas_sosial` AS `kelas_sosial` from ((((((`DATA_KK` join `DATA_PENDUDUK`) join `DATA_DUSUN`) join `DATA_RW`) join `DATA_RT`) join `DATA_DESA`) join `DETAIL_KK`) where `DATA_KK`.`no_kk` = `DETAIL_KK`.`no_kk` and `DETAIL_KK`.`hubungan_dalam_kk` = 'KEPALA KELUARGA' and `DATA_KK`.`id_rt` = `DATA_RT`.`id_rt` and `DATA_RT`.`id_rw` = `DATA_RW`.`id_rw` and `DATA_RW`.`id_dusun` = `DATA_DUSUN`.`id_dusun` and `DATA_DUSUN`.`id_desa` = `DATA_DESA`.`id_desa` and `DATA_PENDUDUK`.`nik` = `DETAIL_KK`.`nik` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `VIEW_PENDUDUK`
--
DROP TABLE IF EXISTS `VIEW_PENDUDUK`;

CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `VIEW_PENDUDUK`  AS  select `b`.`nik` AS `nik`,`b`.`nama` AS `nama`,`a`.`jenis_kelamin` AS `jenis_kelamin`,concat(`a`.`tempat_lahir`,'/',`a`.`tanggal_lahir`) AS `tempat_tanggal_lahir`,`b`.`agama` AS `agama`,`b`.`pendidikan_dalam_kk` AS `pendidikan_dalam_kk`,`b`.`pendidikan_sekarang` AS `pendidikan_sekarang`,`b`.`pekerjaan` AS `pekerjaan`,`b`.`status_warga_negara` AS `status_warga_negara`,`b`.`status_penduduk` AS `status_penduduk`,`b`.`alamat_sekarang` AS `alamat_sekarang`,`h`.`nama_desa` AS `nama_desa`,`g`.`nama_dusun` AS `nama_dusun`,concat(`e`.`nomor_rt`,'/',`f`.`nomor_rw`) AS `rt_rw` from (((((((`DATA_AKTE` `a` join `DATA_PENDUDUK` `b` on(`a`.`id_akte` = `b`.`id_akte`)) join `DETAIL_KK` `c` on(`b`.`nik` = `c`.`nik`)) join `DATA_KK` `d` on(`c`.`no_kk` = `d`.`no_kk`)) join `DATA_RT` `e` on(`d`.`id_rt` = `e`.`id_rt`)) join `DATA_RW` `f` on(`e`.`id_rw` = `f`.`id_rw`)) join `DATA_DUSUN` `g` on(`f`.`id_dusun` = `g`.`id_dusun`)) join `DATA_DESA` `h` on(`g`.`id_desa` = `h`.`id_desa`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `VIEW_PERANGKAT`
--
DROP TABLE IF EXISTS `VIEW_PERANGKAT`;

CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `VIEW_PERANGKAT`  AS  select `DATA_PERANGKAT`.`id_perangkat` AS `id_perangkat`,`DATA_PENDUDUK`.`nama` AS `nama`,`DATA_DESA`.`nama_desa` AS `nama_desa`,`DATA_PERANGKAT`.`niap` AS `niap`,`DATA_PERANGKAT`.`nip` AS `nip`,`DATA_PERANGKAT`.`pangkat` AS `pangkat`,`DATA_PERANGKAT`.`no_sk_angkat` AS `no_sk_angkat`,`DATA_PERANGKAT`.`tanggal_sk_angkat` AS `tanggal_sk_angkat`,`DATA_PERANGKAT`.`no_sk_berhenti` AS `no_sk_berhenti`,`DATA_PERANGKAT`.`tanggal_sk_berhenti` AS `tanggal_sk_berhenti`,`DATA_PERANGKAT`.`masa_jabatan` AS `masa_jabatan`,`DATA_PERANGKAT`.`jabatan` AS `jabatan`,`DATA_PERANGKAT`.`status_pegawai` AS `status_pegawai` from ((`DATA_DESA` join `DATA_PERANGKAT`) join `DATA_PENDUDUK`) where `DATA_DESA`.`id_desa` = `DATA_PERANGKAT`.`id_desa` and `DATA_PERANGKAT`.`id_perangkat` = `DATA_PENDUDUK`.`nik` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `VIEW_POSTINGAN`
--
DROP TABLE IF EXISTS `VIEW_POSTINGAN`;

CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `VIEW_POSTINGAN`  AS  select `DATA_POSTINGAN`.`id_post` AS `id_post`,`DATA_POSTINGAN`.`judul` AS `judul`,`DATA_KATEGORI`.`nama_kategori` AS `nama_kategori`,`DATA_TAGS`.`nama_tags` AS `nama_tags`,`DATA_POSTINGAN`.`tanggal_post` AS `tanggal_post`,`DATA_POSTINGAN`.`status_post` AS `status_post`,`DATA_POSTINGAN`.`detail_post` AS `detail_post`,`DATA_POSTINGAN`.`gambar_post` AS `gambar_post`,`DATA_TAGS`.`id_tags` AS `id_tags`,`DATA_KATEGORI`.`id_kategori` AS `id_kategori` from ((`DATA_POSTINGAN` join `DATA_KATEGORI`) join `DATA_TAGS`) where `DATA_POSTINGAN`.`id_tags` = `DATA_TAGS`.`id_tags` and `DATA_TAGS`.`id_kategori` = `DATA_KATEGORI`.`id_kategori` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `VIEW_RT`
--
DROP TABLE IF EXISTS `VIEW_RT`;

CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `VIEW_RT`  AS  select `DATA_RT`.`id_rt` AS `id_rt`,`DATA_RT`.`id_rw` AS `id_rw`,`DATA_PENDUDUK`.`nama` AS `nama`,`DATA_RT`.`nomor_rt` AS `nomor_rt` from (`DATA_RT` join `DATA_PENDUDUK`) where `DATA_RT`.`id_ketua_rt` = `DATA_PENDUDUK`.`nik` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `VIEW_RW`
--
DROP TABLE IF EXISTS `VIEW_RW`;

CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `VIEW_RW`  AS  select `DATA_RW`.`id_rw` AS `id_rw`,`DATA_RW`.`id_dusun` AS `id_dusun`,`DATA_PENDUDUK`.`nama` AS `nama`,`DATA_RW`.`nomor_rw` AS `nomor_rw` from (`DATA_RW` join `DATA_PENDUDUK`) where `DATA_RW`.`id_ketua_rw` = `DATA_PENDUDUK`.`nik` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `VIEW_TAGS`
--
DROP TABLE IF EXISTS `VIEW_TAGS`;

CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `VIEW_TAGS`  AS  select `DATA_TAGS`.`id_tags` AS `id_tags`,`DATA_TAGS`.`nama_tags` AS `nama_tags`,`DATA_KATEGORI`.`nama_kategori` AS `nama_kategori`,`DATA_TAGS`.`detail_tags` AS `detail_tags`,`DATA_TAGS`.`status_aktif` AS `status_aktif` from (`DATA_TAGS` join `DATA_KATEGORI`) where `DATA_TAGS`.`id_kategori` = `DATA_KATEGORI`.`id_kategori` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `DATA_AKTE`
--
ALTER TABLE `DATA_AKTE`
  ADD PRIMARY KEY (`id_akte`);

--
-- Indeks untuk tabel `DATA_DESA`
--
ALTER TABLE `DATA_DESA`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indeks untuk tabel `DATA_DUSUN`
--
ALTER TABLE `DATA_DUSUN`
  ADD PRIMARY KEY (`id_dusun`),
  ADD KEY `FK_KEPALA_DUSUN1` (`id_ketua_dusun`),
  ADD KEY `FK_ID_DESA2` (`id_desa`);

--
-- Indeks untuk tabel `DATA_KATEGORI`
--
ALTER TABLE `DATA_KATEGORI`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `DATA_KK`
--
ALTER TABLE `DATA_KK`
  ADD PRIMARY KEY (`no_kk`),
  ADD KEY `FK_ID_RT2` (`id_rt`);

--
-- Indeks untuk tabel `DATA_KOMENTAR`
--
ALTER TABLE `DATA_KOMENTAR`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `FK_ID_POST12` (`id_post`);

--
-- Indeks untuk tabel `DATA_PENDUDUK`
--
ALTER TABLE `DATA_PENDUDUK`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `FK_ID_AKTA2` (`id_akte`),
  ADD KEY `FK_ID_PEKAWINAN` (`id_perkawinan`);

--
-- Indeks untuk tabel `DATA_PERANGKAT`
--
ALTER TABLE `DATA_PERANGKAT`
  ADD PRIMARY KEY (`id_perangkat`),
  ADD KEY `FK_ID_DESA3` (`id_desa`);

--
-- Indeks untuk tabel `DATA_PERKAWINAN`
--
ALTER TABLE `DATA_PERKAWINAN`
  ADD PRIMARY KEY (`id_perkawinan`);

--
-- Indeks untuk tabel `DATA_POSTINGAN`
--
ALTER TABLE `DATA_POSTINGAN`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `FK_ID_TAGS1` (`id_tags`),
  ADD KEY `FK_ID_USER1` (`id_user`);

--
-- Indeks untuk tabel `DATA_RT`
--
ALTER TABLE `DATA_RT`
  ADD PRIMARY KEY (`id_rt`),
  ADD KEY `FK_KETUA_RT1` (`id_ketua_rt`),
  ADD KEY `FK_ID_RW` (`id_rw`);

--
-- Indeks untuk tabel `DATA_RW`
--
ALTER TABLE `DATA_RW`
  ADD PRIMARY KEY (`id_rw`),
  ADD KEY `FK_KETUA_RW1` (`id_ketua_rw`),
  ADD KEY `FK_ID_DUSUN2` (`id_dusun`);

--
-- Indeks untuk tabel `DATA_TAGS`
--
ALTER TABLE `DATA_TAGS`
  ADD PRIMARY KEY (`id_tags`),
  ADD KEY `FK_ID_KATEGORI1` (`id_kategori`);

--
-- Indeks untuk tabel `DATA_USER`
--
ALTER TABLE `DATA_USER`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `DETAIL_KK`
--
ALTER TABLE `DETAIL_KK`
  ADD KEY `FK_NO_KK1` (`no_kk`),
  ADD KEY `FK_NIK2` (`nik`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `DATA_DUSUN`
--
ALTER TABLE `DATA_DUSUN`
  ADD CONSTRAINT `FK_ID_DESA2` FOREIGN KEY (`id_desa`) REFERENCES `DATA_DESA` (`id_desa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_KEPALA_DUSUN1` FOREIGN KEY (`id_ketua_dusun`) REFERENCES `DATA_PENDUDUK` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `DATA_KK`
--
ALTER TABLE `DATA_KK`
  ADD CONSTRAINT `FK_ID_RT2` FOREIGN KEY (`id_rt`) REFERENCES `DATA_RT` (`id_rt`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `DATA_KOMENTAR`
--
ALTER TABLE `DATA_KOMENTAR`
  ADD CONSTRAINT `FK_ID_POST12` FOREIGN KEY (`id_post`) REFERENCES `DATA_POSTINGAN` (`id_post`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `DATA_PENDUDUK`
--
ALTER TABLE `DATA_PENDUDUK`
  ADD CONSTRAINT `FK_ID_AKTA2` FOREIGN KEY (`id_akte`) REFERENCES `DATA_AKTE` (`id_akte`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ID_PEKAWINAN` FOREIGN KEY (`id_perkawinan`) REFERENCES `DATA_PERKAWINAN` (`id_perkawinan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `DATA_PERANGKAT`
--
ALTER TABLE `DATA_PERANGKAT`
  ADD CONSTRAINT `FK_ID_DESA3` FOREIGN KEY (`id_desa`) REFERENCES `DATA_DESA` (`id_desa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ID_PERANGKAT1` FOREIGN KEY (`id_perangkat`) REFERENCES `DATA_PENDUDUK` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `DATA_POSTINGAN`
--
ALTER TABLE `DATA_POSTINGAN`
  ADD CONSTRAINT `FK_ID_TAGS1` FOREIGN KEY (`id_tags`) REFERENCES `DATA_TAGS` (`id_tags`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ID_USER1` FOREIGN KEY (`id_user`) REFERENCES `DATA_USER` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `DATA_RT`
--
ALTER TABLE `DATA_RT`
  ADD CONSTRAINT `FK_ID_RW` FOREIGN KEY (`id_rw`) REFERENCES `DATA_RW` (`id_rw`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_KETUA_RT1` FOREIGN KEY (`id_ketua_rt`) REFERENCES `DATA_PENDUDUK` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `DATA_RW`
--
ALTER TABLE `DATA_RW`
  ADD CONSTRAINT `FK_ID_DUSUN2` FOREIGN KEY (`id_dusun`) REFERENCES `DATA_DUSUN` (`id_dusun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_KETUA_RW1` FOREIGN KEY (`id_ketua_rw`) REFERENCES `DATA_PENDUDUK` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `DATA_TAGS`
--
ALTER TABLE `DATA_TAGS`
  ADD CONSTRAINT `FK_ID_KATEGORI1` FOREIGN KEY (`id_kategori`) REFERENCES `DATA_KATEGORI` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `DETAIL_KK`
--
ALTER TABLE `DETAIL_KK`
  ADD CONSTRAINT `FK_NIK2` FOREIGN KEY (`nik`) REFERENCES `DATA_PENDUDUK` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_NO_KK1` FOREIGN KEY (`no_kk`) REFERENCES `DATA_KK` (`no_kk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
