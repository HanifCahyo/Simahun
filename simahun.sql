-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2022 pada 18.01
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simahun`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bimbingan`
--

CREATE TABLE `bimbingan` (
  `id` varchar(64) NOT NULL,
  `niy` varchar(64) NOT NULL,
  `nis` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bimbingan`
--

INSERT INTO `bimbingan` (`id`, `niy`, `nis`) VALUES
('6229a4fa302d0', '0209198117072006', '03701'),
('6229c3f12d80a', '0209198117072006', '03690');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` varchar(64) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `nis` varchar(64) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_kegiatan` varchar(100) NOT NULL,
  `waktu_mulai` varchar(50) NOT NULL,
  `waktu_selesai` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'gambar.png',
  `validasi` enum('Sudah diapprove','Belum diapprove') NOT NULL DEFAULT 'Belum diapprove',
  `input_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penarikan_pkl`
--

CREATE TABLE `penarikan_pkl` (
  `id` varchar(64) NOT NULL,
  `nomor_surat` varchar(64) NOT NULL,
  `tanggal_surat` varchar(255) NOT NULL,
  `tahun_pelajaran` varchar(255) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `alamat_perusahaan` varchar(255) NOT NULL,
  `mulai_pkl` varchar(64) NOT NULL,
  `selesai_pkl` varchar(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nis` varchar(64) NOT NULL,
  `status` varchar(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penarikan_pkl`
--

INSERT INTO `penarikan_pkl` (`id`, `nomor_surat`, `tanggal_surat`, `tahun_pelajaran`, `nama_perusahaan`, `alamat_perusahaan`, `mulai_pkl`, `selesai_pkl`, `nama`, `kelas`, `nomor`, `email`, `nis`, `status`) VALUES
('6229c5831138b', '2/PKL/SMK.RUS/XII/2022', '05 March 2022', '2022/2023', 'RS. Kumala Siwi', 'Kudus', '31 January 2022', '06 May 2022', 'Muhammad Siswa', '12 RPL 1', '085348311232', 'hanifcahyoprasetyo@gmail.com', '03701', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_pkl`
--

CREATE TABLE `pengajuan_pkl` (
  `id` varchar(50) NOT NULL,
  `nomor_surat` varchar(64) NOT NULL,
  `tanggal_surat` varchar(50) NOT NULL,
  `tahun_pelajaran` varchar(255) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `alamat_perusahaan` varchar(255) NOT NULL,
  `mulai_pkl` varchar(255) NOT NULL,
  `selesai_pkl` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nis` varchar(64) NOT NULL,
  `status` varchar(60) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuan_pkl`
--

INSERT INTO `pengajuan_pkl` (`id`, `nomor_surat`, `tanggal_surat`, `tahun_pelajaran`, `nama_perusahaan`, `alamat_perusahaan`, `mulai_pkl`, `selesai_pkl`, `nama`, `kelas`, `nomor`, `email`, `nis`, `status`, `created_at`) VALUES
('6229a885513c6', '1/PKL/SMK.RUS/XII/2022', '31 January 2022', '2022/2023', 'RS. Kumala Siwi', 'Kudus', '10 March 2022', '12 March 2022', 'Hanif Cahyo Prasetyo', '12 RPL 1', '085348311232', 'hanifcahyoprasetyo@gmail.com', '03701', '2', '2022-03-10 09:31:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id` varchar(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `program_studi` enum('Animasi','PPLG','DKV') NOT NULL,
  `nis` varchar(64) NOT NULL,
  `kelas` varchar(64) NOT NULL,
  `tanggal_surat` varchar(64) NOT NULL,
  `nama_pembimbing` varchar(64) NOT NULL,
  `angka_keahlian1` varchar(11) NOT NULL,
  `angka_keahlian2` varchar(11) NOT NULL,
  `angka_keahlian3` varchar(11) NOT NULL,
  `angka_keahlian4` varchar(11) NOT NULL,
  `angka_keahlian5` varchar(11) NOT NULL,
  `angka_keahlian6` varchar(11) NOT NULL,
  `angka_keahlian7` varchar(11) NOT NULL,
  `angka_disiplin` varchar(11) NOT NULL,
  `angka_kerjasama` varchar(11) NOT NULL,
  `angka_inisiatif` varchar(11) NOT NULL,
  `angka_kerajinan` varchar(11) NOT NULL,
  `angka_tanggung_jawab` varchar(11) NOT NULL,
  `angka_kepribadian` varchar(11) NOT NULL,
  `angka_prestasi` varchar(11) NOT NULL,
  `keahlian1` varchar(64) NOT NULL,
  `keahlian2` varchar(64) NOT NULL,
  `keahlian3` varchar(64) NOT NULL,
  `keahlian4` varchar(64) NOT NULL,
  `keahlian5` varchar(64) NOT NULL,
  `keahlian6` varchar(64) NOT NULL,
  `keahlian7` varchar(64) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nomor_induk` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'default.png',
  `program_studi` enum('Animasi','DKV','PPLG') NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(60) NOT NULL,
  `jekel` enum('Laki-laki','Perempuan') NOT NULL,
  `status` enum('Aktif','Selesai') NOT NULL,
  `role` enum('Admin','Guru','Siswa') NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nomor_induk`, `name`, `email`, `password`, `avatar`, `program_studi`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jekel`, `status`, `role`, `last_login`, `created_at`) VALUES
('0203197901072010', 'H.Abdul Fatiq,S.Pd. I.,S.Kom.,M.Kom.', '', '$2y$10$9gbDDRMU1mAH32.2pgFrz.3KpkhtIuXahiEn.kaBQSKIxnxcWwLxW', 'default.png', '', '', '', '', '', '', 'Guru', '2022-03-10 07:01:11', '2022-03-10 07:01:11'),
('0206198417072006', 'Arif Jauhari, S. Pd.', '', '$2y$10$ctopAJqi5XWK9GFjVbftfuCrFNKe1VLNoRqfY.EhmOAvuzUXBjYaW', 'default.png', '', '', '', '', '', '', 'Guru', '2022-03-10 06:59:32', '2022-03-10 06:59:32'),
('0209198117072006', 'Khusniyati, S. Pd.', '', '$2y$10$NTcYCfoiH5niOVbYmdN5JuUUcRNPEbOJd/IseRYDQjCzrmmfl975y', 'default.png', '', '', '', '', '', '', 'Guru', '2022-03-10 09:25:26', '2022-03-10 07:08:22'),
('0303196521122006', 'Drs. H. Masruhan', '', '$2y$10$ocjyOb5fiJiORAKlm3VLLOLe16Tr6LrHpaEYV70HXsmkvtp2l3uMW', 'default.png', '', '', '', '', '', '', 'Guru', '2022-03-10 07:06:59', '2022-03-10 07:06:59'),
('03688', 'Ade Verdaus Saputra', '', '$2y$10$1HbG4.HXxDg4oqOXlMSZcONEiYlCjMvZU4xNwDDFloZ303oyS8JCK', 'default.png', '', '', '', '', '', '', 'Admin', '2022-03-10 07:17:22', '2022-03-10 07:17:22'),
('03689', 'Adikku Isa Gibran Lasahido', '', '$2y$10$rh4/DYrvK3ynefgvMQzSF.cLSPD5HIRZpc/Uo6I5pW6VV60502gUq', 'default.png', '', '', '', '', '', '', 'Siswa', '2022-03-10 09:23:29', '2022-03-10 09:23:29'),
('03690', 'Alfin Rifaldi', '', '$2y$10$fIxkWENg/Zs/BbAe6U9/w.ied4wcPpDJoTJvoIOU.I0XSuHEK9dKC', 'default.png', '', '', '', '', '', '', 'Siswa', '2022-03-10 09:24:48', '2022-03-10 09:24:17'),
('03691', 'Andhika Rizky Nur Wahyu', '', '$2y$10$cvCnwVCQNR.1f2t4UGID/u3H6uhR8BUoK1y1EbXyYTaUb2Oabqwl6', 'default.png', '', '', '', '', '', '', 'Admin', '2022-03-10 07:16:41', '2022-03-10 07:16:41'),
('03701', 'Fadly Nugraha Jati', '', '$2y$10$3uXmaaAkFx2ttNNC8eKDA.oEAGta3rYoTbRID5ERGlQ9lqMmB/.Yy', 'default.png', '', '', '', '', '', '', 'Siswa', '2022-03-10 07:18:52', '2022-03-10 07:12:15'),
('03702', 'Hanif Prasetyo', '', '$2y$10$Q1R3FX2YVljdNE/3/VNuiu7NKI7BUdePGJi2JdL/bZShnrtM3nvGq', 'default.png', '', '', '', '', '', '', 'Admin', '2022-03-10 07:14:26', '2022-03-10 06:55:40'),
('0504196401072008', 'Drs. H. Ahmad Mifdloli ,M .Pd. I.', '', '$2y$10$LBT9k4Kp6DABvAmkmtEWdOVDNR4n9UkJwCnf9UdukDuGWmLcpw5.O', 'default.png', '', '', '', '', '', '', 'Guru', '2022-03-10 07:05:14', '2022-03-10 07:05:14'),
('0809198117072005', 'Rita Susiyanti, S. Pd.', '', '$2y$10$kKWkbnGQVWzDEolOYsZjBOznL/AyjBpmOu21lVyfBvr1Umyvj0OLu', 'default.png', '', '', '', '', '', '', '', '2022-03-10 07:06:04', '2022-03-10 07:06:04'),
('1002196617072006', 'H. Fariddudin,S.Sn.', '', '$2y$10$Lsu0eIzHveM/f7O20MZp0O48/x20oy6viMIFs7X6A0KYFnl8W3JAu', 'default.png', '', '', '', '', '', '', 'Guru', '2022-03-10 07:02:38', '2022-03-10 06:58:26'),
('1004198501072008', 'Fauziyah Lisfana, S. Pd.', '', '$2y$10$NTcYCfoiH5niOVbYmdN5JuUUcRNPEbOJd/IseRYDQjCzrmmfl975y', 'default.png', '', '', '', '', '', '', 'Guru', '2022-03-10 07:08:59', '2022-03-10 07:08:59'),
('1005196617072005', 'Dra. Sri Waluyo Dwi Cahyati', '', '$2y$10$lmr/lrRmC5xq/j6jlq99eOReInb2TNhB1XujA/F6pCDfQurpAuFri', 'default.png', '', '', '', '', '', '', 'Guru', '2022-03-10 07:07:44', '2022-03-10 07:07:44'),
('1704198901082014', 'Muhklis Wahyudi, S. Pd.', '', '$2y$10$rvbI94t8gtqHJ6FfEIh/ReUmbnA70iCrc/qiQqGujO9XUSAACWcY2', 'default.png', '', '', '', '', '', '', 'Guru', '2022-03-10 07:00:28', '2022-03-10 07:00:28'),
('1808198219072007', 'Agam Amintaha, S.Kom.', '', '$2y$10$MaBQQ8Si7oFAoBR.FZ864.gW1VqiVhCNYegTnGNpd3CDLH8hhEvi.', 'default.png', '', '', '', '', '', '', 'Guru', '2022-03-10 07:02:15', '2022-03-10 07:02:15'),
('1812198219072007', 'Vita Vinia Ardisari, S. Pd.', '', '$2y$10$xVvL7.lLn.uT8o3lNcDfUenD0TPJfRiI4UhdS3XqcYWkBPpn6pVma', 'default.png', '', '', '', '', '', '', 'Guru', '2022-03-10 07:10:19', '2022-03-10 07:10:19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `niy` (`niy`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NIS` (`nis`);

--
-- Indeks untuk tabel `penarikan_pkl`
--
ALTER TABLE `penarikan_pkl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `pengajuan_pkl`
--
ALTER TABLE `pengajuan_pkl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`nis`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nomor_induk`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD CONSTRAINT `nis` FOREIGN KEY (`nis`) REFERENCES `user` (`nomor_induk`),
  ADD CONSTRAINT `niy` FOREIGN KEY (`niy`) REFERENCES `user` (`nomor_induk`);

--
-- Ketidakleluasaan untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan` FOREIGN KEY (`nis`) REFERENCES `user` (`nomor_induk`);

--
-- Ketidakleluasaan untuk tabel `penarikan_pkl`
--
ALTER TABLE `penarikan_pkl`
  ADD CONSTRAINT `penarikan_pkl` FOREIGN KEY (`nis`) REFERENCES `user` (`nomor_induk`);

--
-- Ketidakleluasaan untuk tabel `pengajuan_pkl`
--
ALTER TABLE `pengajuan_pkl`
  ADD CONSTRAINT `pengajuan_pkl` FOREIGN KEY (`nis`) REFERENCES `user` (`nomor_induk`);

--
-- Ketidakleluasaan untuk tabel `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD CONSTRAINT `sertifikat` FOREIGN KEY (`nis`) REFERENCES `user` (`nomor_induk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
