-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Feb 2021 pada 13.43
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indihome_witel_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `kode_admin` varchar(255) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `jekel_admin` varchar(255) NOT NULL,
  `username_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `foto_admin` varchar(255) NOT NULL,
  `role_admin` varchar(255) NOT NULL,
  `status_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `kode_admin`, `nama_admin`, `jekel_admin`, `username_admin`, `password_admin`, `foto_admin`, `role_admin`, `status_admin`) VALUES
(1, '', 'Fitria', 'Perempuan', 'fitria', '$2y$10$Wasu29wjDjoRriAbcRvQYODavW4HZranWGx/ZLHJTVd//p8MB6ow.', 'image_1610949377.png', 'TA', 'Aktif'),
(2, '', 'Muhammad Azwar Bahar', 'Laki - laki', 'acca', '$2y$10$lJeigVTflyRtjIF6Xl0V7eLjWvVyD.yv8qtD/MuNkqMseNPSM8rFG', 'image_1611083611.png', 'TA', 'Aktif'),
(3, '', 'Siporennu', 'Laki - laki', 'Siporennu', '$2y$10$9oN/USrhleqtCtM.wRxZQu9bZg6/992i75sI8sNjsDUARKuPriVP.', 'image_1611139685.PNG', 'TL', 'Aktif'),
(4, '', 'Asmira Sari', 'Perempuan', 'asmira', '$2y$10$I.6ezPxuEpkORpNTV7etA.EAix6IOmfjGLkCTIme8FZtIGpRzHGUi', 'image_1613646689.png', 'TL', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_auth`
--

CREATE TABLE `tb_auth` (
  `id_auth` int(11) NOT NULL,
  `id_akun` varchar(255) NOT NULL,
  `username_auth` varchar(255) NOT NULL,
  `password_auth` varchar(255) NOT NULL,
  `role_auth` varchar(255) NOT NULL,
  `status_auth` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_auth`
--

INSERT INTO `tb_auth` (`id_auth`, `id_akun`, `username_auth`, `password_auth`, `role_auth`, `status_auth`) VALUES
(1, '1', 'azwar', '$2y$10$b3lu.HgHXWAnKxAQGCiBfOjjPvU7c.aZXlP7IET3qxy1HPDmEW1wS', 'Teknisi', 'Aktif'),
(2, '1', 'yakin', '$2y$10$OvAQrrsJivl5yof.eIVC7O7Ps0W.zlYL4YUfSXwIRjuujDKm5xrye', 'Sales', 'Aktif'),
(3, '2', 'awal', '$2y$10$o28ftK4HqvcqSiOtjZwgUegiFWqo3eePnwkxKgHo1eJ4D3NZH/MPS', 'Sales', 'Aktif'),
(4, '3', 'rida', '$2y$10$D/ArdcwMS97rz9tdBNDMZOcRPGDHr82TdmeoKJeg56KnUxBiEbCV6', 'Sales', 'Aktif'),
(5, '1', 'aisyah', '$2y$10$ycjRaQT4Nt7WLelSHhaoK.NC/BhbwU24MViWzKlAcWcPS.43guYma', 'SPV', 'Aktif'),
(6, '2', 'viki', '$2y$10$WBVFDBf5CoIsHWxSLAVicuqb83Gcwl7qcfs/uYosAtPD2R4tIxUxO', 'Teknisi', 'Aktif'),
(7, '3', 'alif', '$2y$10$38A7D0IwggcFVQdCtKJIAeCG/8ZV6q/HwrHI.olH929.BaPn2skye', 'Teknisi', 'Aktif'),
(8, '4', 'takdir', '$2y$10$HKiYMc4bzJISdVBqk34RYOLpxYBSvRYH9YnX5fSRKa0nTavSi7hJG', 'Teknisi', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(11) NOT NULL,
  `myir` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telpon` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `sto` varchar(255) NOT NULL,
  `status_order` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paket_id` varchar(255) NOT NULL,
  `sales_id` varchar(255) NOT NULL,
  `teknisi_id` varchar(255) NOT NULL,
  `mitra_id` varchar(255) NOT NULL,
  `keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `myir`, `nama_lengkap`, `email`, `telpon`, `alamat`, `sto`, `status_order`, `tanggal`, `paket_id`, `sales_id`, `teknisi_id`, `mitra_id`, `keterangan`) VALUES
(1, 'MYIR-53210874733134120', 'Gilang Dirga', 'dirga_gilang@gmail.con', '086783457261', 'Jalan Samata Lr. 3a No 22 Kelurahan Samata Gowa', 'PNK-ANT', 'DONE', '2021-02-14 12:22:24', '2', '1', '1', '3', ''),
(2, 'MYIR-1532086882312339', 'Erwin Tahir', 'erwin32_tahir@gmail.com', '085672456311', 'Jalan Menuruki 2 No 15 Kec Tamalate Kota Makassar', 'PNK-ANT', 'DONE', '2021-02-15 07:53:43', '1', '1', '3', '4', ''),
(3, 'MYIR-3331086473313430', 'Nisrawati', 'nisra_@gmail.com', '085623728123', 'Jalan mamoa baru no 1 kelurahan mangasa', 'PNK-ANT', 'CANCEL', '2021-02-15 09:28:15', '1', '1', '1', '3', 'Kabel 300 meter tidak cukup unruk menjangkau rumah pelanggan'),
(4, 'MYIR-6931886436313230', 'Asrul Gunawan', 'asrulgun@gmail.com', '085349678455', 'Jalan Karunrung Raya No 21 Makassar', 'PNK-ANT', 'PROCCESS', '2021-02-17 09:39:31', '3', '1', '', '4', ''),
(5, 'MYIR-2341086473313638', 'Andi Abdillah', 'abdi@gmail.com', '078964351857', 'Jalan Patallassang No 3 Gowa', 'PNK-ANT', 'CANCEL', '2021-02-17 09:43:08', '2', '2', '1', '3', 'Tidak Dapat memasang dikarenakan rumah terlalu jauh dengan tower. '),
(6, 'MYIR-9731480473113420', 'Putri Risdayanti', 'risda@gmail.com', '089763152165', 'Jalan Merpati Lr 6c No 20 Bulukumba', 'PNK-ANT', 'DONE', '2021-02-17 22:17:31', '4', '3', '1', '3', ''),
(7, 'MYIR-6931886436313230', 'Muhammad Ilham', 'ilham990@gmail.com', '087963452487', 'Jalan Aroeppala Perumahan Royal Spring Blok C No 21 Gowa', 'PNK-ANT', 'CANCEL', '2021-02-20 12:08:16', '3', '1', '3', '4', 'Rumah pelanggan tidak memungkinkan, dikarenakan Cukup jauh dan tempat lalu lalang kendaraan berat, kabel bisa tersangkut');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `kecepatan_paket` varchar(255) NOT NULL,
  `media_paket` varchar(255) NOT NULL,
  `kuota_paket` varchar(255) NOT NULL,
  `harga_paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `nama_paket`, `kecepatan_paket`, `media_paket`, `kuota_paket`, `harga_paket`) VALUES
(1, 'Reguler IndiHome 2P Internet + Phone (OPSI STUDY)', '20 Mbps', 'Telepon', '300 Menit', 315000),
(2, 'Reguler IndiHome 2P Internet + Phone (OPSI ENTERTAINMENT)', '20 Mbps', 'Telepon', '300 Menit', 315000),
(3, 'Reguler IndiHome 2P Internet + TV (OPSI STUDY)', '20 Mbps', 'TV', '109 Channel', 345000),
(4, 'Reguler IndiHome 2P Internet + TV (OPSI MUSIC)', '20 Mbps', 'TV', '109 Channel', 345000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sales`
--

CREATE TABLE `tb_sales` (
  `id_sales` int(11) NOT NULL,
  `kode_sales` varchar(255) NOT NULL,
  `nama_sales` varchar(255) NOT NULL,
  `telpon` varchar(255) NOT NULL,
  `email_sales` varchar(255) NOT NULL,
  `alamat_sales` varchar(255) NOT NULL,
  `foto_sales` varchar(255) NOT NULL,
  `status_sales` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sales`
--

INSERT INTO `tb_sales` (`id_sales`, `kode_sales`, `nama_sales`, `telpon`, `email_sales`, `alamat_sales`, `foto_sales`, `status_sales`) VALUES
(1, 'SPMU50M', 'Akmalul Yaqin', '085396025609', 'akmalul@gmail.com', 'Jalan Karunrung Raya No 31 Makassar', 'foto_akmal.jpg', 'Aktif'),
(2, 'SPMU63M', 'Muhammad Awal Fikri', '085342231200', 'awalfikri@gmail.com', 'Jalan Sultan Hasanuddin No 321 Gowa', 'foto_awal.jpg', 'Aktif'),
(3, 'SPMU74M', 'Ridha Hamzah', '082353737770', 'ridha@gmail.com', 'Jalan Bontonompo No 1 Gowa', 'foto_ridha.jpg', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sc`
--

CREATE TABLE `tb_sc` (
  `id_sc` int(11) NOT NULL,
  `kode_sc` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `myir_sc` varchar(255) NOT NULL,
  `nama_sc` varchar(255) NOT NULL,
  `sto_sc` varchar(255) NOT NULL,
  `telpon_sc` varchar(255) NOT NULL,
  `alamat_sc` varchar(255) NOT NULL,
  `keterangan_sc` varchar(300) NOT NULL,
  `tanggal_sc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mitra_id` varchar(255) NOT NULL,
  `teknisi_id` varchar(255) NOT NULL,
  `status_sc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sc`
--

INSERT INTO `tb_sc` (`id_sc`, `kode_sc`, `order_id`, `myir_sc`, `nama_sc`, `sto_sc`, `telpon_sc`, `alamat_sc`, `keterangan_sc`, `tanggal_sc`, `mitra_id`, `teknisi_id`, `status_sc`) VALUES
(1, 'SC-5486', '5', 'MYIR-2341086473313638', 'Andi Abdillah', 'PNK-ANT', '078964351857', 'Jalan Patallassang No 3 Gowa', 'kabel pendek', '2021-02-17 22:07:45', '3', '1', 'CANCEL'),
(2, 'SC-3157', '6', 'MYIR-9731480473113420', 'Putri Risdayanti', 'PNK-ANT', '089763152165', 'Jalan Merpati Lr 6c No 20 Bulukumba', '', '2021-02-17 22:20:35', '3', '1', 'DONE'),
(3, 'SC-6578', '2', 'MYIR-1532086882312339', 'Erwin Tahir', 'PNK-ANT', '085672456311', 'Jalan Menuruki 2 No 15 Kec Tamalate Kota Makassar', '', '2021-02-20 12:11:01', '4', '3', 'DONE'),
(4, 'SC-5167', '7', 'MYIR-6931886436313230', 'Muhammad Ilham', 'PNK-ANT', '087963452487', 'Jalan Aroeppala Perumahan Royal Spring Blok C No 21 Gowa', 'Rumah pelanggan tidak memungkinkan, dikarenakan Cukup jauh dan tempat lalu lalang kendaraan berat, kabel bisa tersangkut', '2021-02-20 12:12:43', '4', '3', 'CANCEL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_spv`
--

CREATE TABLE `tb_spv` (
  `id_spv` int(11) NOT NULL,
  `kode_spv` varchar(255) NOT NULL,
  `nama_spv` varchar(255) NOT NULL,
  `telpon_spv` varchar(255) NOT NULL,
  `email_spv` varchar(255) NOT NULL,
  `alamat_spv` varchar(255) NOT NULL,
  `foto_spv` varchar(255) NOT NULL,
  `status_spv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_spv`
--

INSERT INTO `tb_spv` (`id_spv`, `kode_spv`, `nama_spv`, `telpon_spv`, `email_spv`, `alamat_spv`, `foto_spv`, `status_spv`) VALUES
(1, 'SPV210M', 'Siti Aisyah', '085249861890', 'aisyah@gmail.com', 'Jalan Pulau Sebatik No 21 Tarakan', 'foto_aisyah.jpg', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_teknisi`
--

CREATE TABLE `tb_teknisi` (
  `id_teknisi` int(11) NOT NULL,
  `id_mitra` varchar(255) NOT NULL,
  `nama_teknisi` varchar(255) NOT NULL,
  `telpon_teknisi` varchar(255) NOT NULL,
  `jekel_teknisi` varchar(255) NOT NULL,
  `foto_teknisi` varchar(255) NOT NULL,
  `status_teknisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_teknisi`
--

INSERT INTO `tb_teknisi` (`id_teknisi`, `id_mitra`, `nama_teknisi`, `telpon_teknisi`, `jekel_teknisi`, `foto_teknisi`, `status_teknisi`) VALUES
(1, '3', 'Azwar Bahar', '082349465420', 'Laki - laki', 'image_1611149511.jpg', 'Aktif'),
(2, '3', 'Vicky Haikal', '082349516782', 'Laki - laki', 'image_1613647751.png', 'Suspend'),
(3, '4', 'Alif Yusrika', '085241791000', 'Laki - laki', 'image_1613761902.PNG', 'Aktif'),
(4, '4', 'Muhammad Takdir', '082393610779', 'Laki - laki', 'image_1613762021.PNG', 'Suspend');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_auth`
--
ALTER TABLE `tb_auth`
  ADD PRIMARY KEY (`id_auth`);

--
-- Indeks untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `tb_sales`
--
ALTER TABLE `tb_sales`
  ADD PRIMARY KEY (`id_sales`);

--
-- Indeks untuk tabel `tb_sc`
--
ALTER TABLE `tb_sc`
  ADD PRIMARY KEY (`id_sc`);

--
-- Indeks untuk tabel `tb_spv`
--
ALTER TABLE `tb_spv`
  ADD PRIMARY KEY (`id_spv`);

--
-- Indeks untuk tabel `tb_teknisi`
--
ALTER TABLE `tb_teknisi`
  ADD PRIMARY KEY (`id_teknisi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_auth`
--
ALTER TABLE `tb_auth`
  MODIFY `id_auth` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_sales`
--
ALTER TABLE `tb_sales`
  MODIFY `id_sales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_sc`
--
ALTER TABLE `tb_sc`
  MODIFY `id_sc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_spv`
--
ALTER TABLE `tb_spv`
  MODIFY `id_spv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_teknisi`
--
ALTER TABLE `tb_teknisi`
  MODIFY `id_teknisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
