-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2020 pada 04.54
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penduduk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(2, 'ar fachmi', 'admin', '0192023a7bbd73250516f069df18b500'),
(3, 'endang', 'kepdes', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kelahiran`
--

CREATE TABLE `data_kelahiran` (
  `kk` varchar(12) NOT NULL,
  `dusun` varchar(15) NOT NULL,
  `desa` varchar(15) NOT NULL,
  `kecamatan` varchar(22) NOT NULL,
  `kabupaten` varchar(22) NOT NULL,
  `nama_anak` varchar(33) NOT NULL,
  `lhr_pd_tgl` varchar(22) NOT NULL,
  `jk` varchar(11) NOT NULL,
  `nm_ayh` varchar(22) NOT NULL,
  `pkrjn_ayh` varchar(22) NOT NULL,
  `umr_ayh` varchar(22) NOT NULL,
  `almt_skg_ayh` varchar(22) NOT NULL,
  `nm_ibu` varchar(22) NOT NULL,
  `pkrjn_ibu` varchar(22) NOT NULL,
  `umr_ibu` varchar(22) NOT NULL,
  `almt_skg_ibu` varchar(22) NOT NULL,
  `nik_ayh` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kelahiran`
--

INSERT INTO `data_kelahiran` (`kk`, `dusun`, `desa`, `kecamatan`, `kabupaten`, `nama_anak`, `lhr_pd_tgl`, `jk`, `nm_ayh`, `pkrjn_ayh`, `umr_ayh`, `almt_skg_ayh`, `nm_ibu`, `pkrjn_ibu`, `umr_ibu`, `almt_skg_ibu`, `nik_ayh`) VALUES
('321514241214', 'Dusun 01', 'Cikalongsari', 'Jatisari', 'Karawang', 'Yantini', '12 Mei 2018', 'P', 'Yantono', 'Karyawan', '30 thn', 'Dusun 01 RT02 RW03', 'Yantini', 'IRT', '29 thn', 'Dusun 01 RT02 RW03', 0),
('321518239809', 'Dusun 03', 'Cikalongsari', 'Jatisari', 'Karawang', 'Gunawan', '19 Juli 2017', 'L', 'Yadi', 'Wiraswasta', '25 thn', 'Dusun 01 RT02 RW02', 'Desi', 'IRT', '22', 'Dusun 01 RT02 RW02', 0),
('321521345891', 'Dusun 02', 'Cikalongsari', 'Jatisari', 'Karawang', 'Andi', '20 Juni 2018', 'L', 'Yusup', 'Karyawan', '30 thn', 'Dusun 02 RT01 RW01', 'Cantika', 'IRT', '29 thn', 'Dusun 02 RT01 RW01', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penduduk_pdh_dtg`
--

CREATE TABLE `data_penduduk_pdh_dtg` (
  `nm_krt_klg` varchar(55) NOT NULL,
  `ttl` varchar(55) NOT NULL,
  `alamat_asal` varchar(55) NOT NULL,
  `desa_asal` varchar(55) NOT NULL,
  `kec_asal` varchar(55) NOT NULL,
  `kab_asal` varchar(55) NOT NULL,
  `prov_asal` varchar(55) NOT NULL,
  `alasan_pindh` varchar(55) NOT NULL,
  `almt_tujuan_pindh` varchar(55) NOT NULL,
  `desa_pindh` varchar(55) NOT NULL,
  `kec_pindh` varchar(55) NOT NULL,
  `kab_pindh` varchar(55) NOT NULL,
  `prov_pindh` varchar(55) NOT NULL,
  `pindh_krn` varchar(55) NOT NULL,
  `pindh_antar_mn` varchar(55) NOT NULL,
  `nm_klg_pindh` varchar(55) NOT NULL,
  `nik` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_penduduk_pdh_dtg`
--

INSERT INTO `data_penduduk_pdh_dtg` (`nm_krt_klg`, `ttl`, `alamat_asal`, `desa_asal`, `kec_asal`, `kab_asal`, `prov_asal`, `alasan_pindh`, `almt_tujuan_pindh`, `desa_pindh`, `kec_pindh`, `kab_pindh`, `prov_pindh`, `pindh_krn`, `pindh_antar_mn`, `nm_klg_pindh`, `nik`) VALUES
('Eman', 'Karawang 19-10-1982', 'Dusun 02 RT02 RW02', 'Cikalongsari', 'Jatisari', 'Karawang', 'Jawa Barat', 'Pindah kerja', 'Desa sawangan RT01 RW02', 'Sawangan', 'Cipeundeuy', 'Subang', 'Jawa Barat', 'Pindah kerja', 'Antar Kabupaten', 'Eman ', '321512110938');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_permohonan_buat_kk`
--

CREATE TABLE `data_permohonan_buat_kk` (
  `desa` varchar(55) NOT NULL,
  `kec` varchar(55) NOT NULL,
  `kab` varchar(55) NOT NULL,
  `nm_pemohon` varchar(55) NOT NULL,
  `nm_kepala_klg` varchar(55) NOT NULL,
  `alamat` varchar(55) NOT NULL,
  `nm_lengkap` varchar(55) NOT NULL,
  `nik` varchar(55) NOT NULL,
  `ttl` varchar(55) NOT NULL,
  `jenis_kel` varchar(55) NOT NULL,
  `agama` varchar(55) NOT NULL,
  `status_kwn` varchar(55) NOT NULL,
  `pendidikan` varchar(55) NOT NULL,
  `pekerjaan` varchar(55) NOT NULL,
  `hub_dgn_kpl_klg` varchar(55) NOT NULL,
  `nm_bpk_ibu` varchar(55) NOT NULL,
  `ket` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_permohonan_buat_kk`
--

INSERT INTO `data_permohonan_buat_kk` (`desa`, `kec`, `kab`, `nm_pemohon`, `nm_kepala_klg`, `alamat`, `nm_lengkap`, `nik`, `ttl`, `jenis_kel`, `agama`, `status_kwn`, `pendidikan`, `pekerjaan`, `hub_dgn_kpl_klg`, `nm_bpk_ibu`, `ket`) VALUES
('Cikalongsari', 'Jatisari', 'Karawang', 'Dadang Bahdim', 'Dadang Bahdim', 'Dusun 03 RT03 RW01', 'Dadang Bahdim', '3215142212122345', 'Purwakarta 28-10-1979', 'L', 'Islam', 'Kawin', 'SMK sederajat', 'Karyawan', 'Kepala Keluarga', 'Asep, Yulia', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_permohonan_ektp`
--

CREATE TABLE `data_permohonan_ektp` (
  `no_kk` varchar(33) NOT NULL,
  `nik` varchar(33) NOT NULL,
  `nm_lengkap` varchar(33) NOT NULL,
  `jenis_kel` varchar(11) NOT NULL,
  `ttl` varchar(33) NOT NULL,
  `prov` varchar(22) NOT NULL,
  `pendidikan` varchar(22) NOT NULL,
  `status_kwn` varchar(22) NOT NULL,
  `agama` varchar(22) NOT NULL,
  `pekerjaan` varchar(22) NOT NULL,
  `alamat` varchar(33) NOT NULL,
  `kewarganegaraan` varchar(11) NOT NULL,
  `nm_ayh` varchar(22) NOT NULL,
  `nm_ibu` varchar(22) NOT NULL,
  `keterangan` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_permohonan_ektp`
--

INSERT INTO `data_permohonan_ektp` (`no_kk`, `nik`, `nm_lengkap`, `jenis_kel`, `ttl`, `prov`, `pendidikan`, `status_kwn`, `agama`, `pekerjaan`, `alamat`, `kewarganegaraan`, `nm_ayh`, `nm_ibu`, `keterangan`) VALUES
('3215141211891255', '-', 'Eka Lestari', 'L', 'Karawang 9-9-2001', 'Jawa Barat', 'SMK sederajat', 'Belum Kawin', 'Islam', 'Belum Bekerja', 'Dusun 02 RT04 RW02', 'WNI', 'Sandi', 'Kokom', 'Pemula'),
('3215142201880001', '-', 'Siti Rahmawati', 'P', 'Karawang 12-11-2001', 'Jawa Barat', 'SMA ', 'Belum Kawin', 'Islam', 'Belum Bekerja', 'Dusun 02 RT02 RW02', 'WNI', 'Anto', 'Aniti', 'Pemula');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `id_admin` varchar(33) NOT NULL,
  `desa_nama` varchar(55) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id_admin`, `desa_nama`, `alamat`) VALUES
('1', 'Cikalongsari', 'Jl Raya Cikalongsari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dusun`
--

CREATE TABLE `dusun` (
  `dusun_nama` varchar(55) NOT NULL,
  `desa` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dusun`
--

INSERT INTO `dusun` (`dusun_nama`, `desa`) VALUES
('Cikalong 01', 'Cikalongsari'),
('Cikalong 02', 'Cikalongsari'),
('Cikalong 03', 'Cikalongsari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `warga_id` int(11) NOT NULL,
  `warga_nama` varchar(55) NOT NULL,
  `warga_nik` varchar(22) NOT NULL,
  `warga_ttl` varchar(55) NOT NULL,
  `warga_jk` varchar(9) NOT NULL,
  `warga_desa` varchar(22) NOT NULL,
  `warga_dusun` int(11) NOT NULL,
  `warga_rt` varchar(11) NOT NULL,
  `warga_rw` varchar(11) NOT NULL,
  `warga_status` varchar(22) NOT NULL,
  `warga_pendidikan` varchar(22) NOT NULL,
  `warga_agama` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`warga_id`, `warga_nama`, `warga_nik`, `warga_ttl`, `warga_jk`, `warga_desa`, `warga_dusun`, `warga_rt`, `warga_rw`, `warga_status`, `warga_pendidikan`, `warga_agama`) VALUES
(1, 'Anda putra', '321511456300', '19 maret 1988', 'L', 'Cikalongsari', 2, '2', '2', 'Kawin', 'SMK', 'Islam'),
(2, 'Dikem putrinfa', '321512235990', '6 oktober 1980', 'P', 'Cikalongsari', 3, '1', '2', 'Kawin', 'SD', 'Islam'),
(3, 'Anung', '321512237890', '15 mei 1981', 'L', 'Cikalongsari', 2, '2', '2', 'Kawin', 'SMA', 'Islam'),
(4, 'Arif hidayat', '321512344523', '19 maret 1980', 'L', 'Cikalongsari', 1, '2', '1', 'Kawin', 'SD', 'Islam'),
(5, 'Riyan ramadhan', '321512441980', '4 agustus 1999', 'L', 'Cikalongsari', 1, '4', '1', 'Belum Kawin', 'SMK', 'Islam'),
(6, 'Yudistira', '321512452312', '22 mei 1997', 'L', 'Cikalongsari', 2, '2', '2', 'Belum Kawin', 'S1', 'Islam'),
(7, 'Sadiah', '321512563400', '11 januari 1989', 'P', 'Cikalongsari', 2, '2', '2', 'Kawin', 'SMA', 'Islam'),
(8, 'Sarikem', '321512568000', '1 juli 1983', 'P', 'Cikalongsari', 3, '1', '2', 'Kawin', 'S1', 'Islam'),
(9, 'Bunga lestari', '321512569801', '2 februari 1985', 'P', 'Cikalongsari', 1, '4', '5', 'Kawin', 'S1', 'Islam'),
(10, 'Yantini', '321512648012', '12 desember 1997', 'P', 'Cikalongsari', 2, '2', '1', 'Belum Kawin', 'SMA', 'Islam'),
(11, 'Bubun roy', '321512670909', '3 september 1997', 'L', 'Cikalongsari', 3, '5', '4', 'Kawin', 'SMA', 'Islam'),
(12, 'Nining maemunah', '321512678900', '28 maret 1979', 'P', 'Cikalongsari', 3, '2', '4', 'Kawin', 'S1', 'Islam');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kelahiran`
--
ALTER TABLE `data_kelahiran`
  ADD PRIMARY KEY (`kk`);

--
-- Indeks untuk tabel `data_penduduk_pdh_dtg`
--
ALTER TABLE `data_penduduk_pdh_dtg`
  ADD PRIMARY KEY (`nm_krt_klg`);

--
-- Indeks untuk tabel `data_permohonan_buat_kk`
--
ALTER TABLE `data_permohonan_buat_kk`
  ADD PRIMARY KEY (`nm_kepala_klg`);

--
-- Indeks untuk tabel `data_permohonan_ektp`
--
ALTER TABLE `data_permohonan_ektp`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`desa_nama`);

--
-- Indeks untuk tabel `dusun`
--
ALTER TABLE `dusun`
  ADD PRIMARY KEY (`dusun_nama`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`warga_nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
