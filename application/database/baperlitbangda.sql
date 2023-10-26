-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 10:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baperlitbangda`
--

-- --------------------------------------------------------

--
-- Table structure for table `aduan`
--

CREATE TABLE `aduan` (
  `id_aduan` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` int(23) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `isi_aduan` text NOT NULL,
  `tindak_lanjut` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aduan`
--

INSERT INTO `aduan` (`id_aduan`, `email`, `nama`, `nik`, `alamat`, `jenis_kelamin`, `pekerjaan`, `no_telp`, `isi_aduan`, `tindak_lanjut`, `created_at`) VALUES
(13, 'hhh@gmail.com', 'adfljasdjfjdf', 2147483647, 'lkjeg;ksd;gk;ldlgl', 'laki-laki', 'gladglkfdasg', 2147483647, 'ksjdlkgjlksdgjlkdsf', 'jnkjdsskjdnvosero', '2023-10-17 09:35:43'),
(15, 'eri@gmail.com', 'jskjs', 1231313, 'jdjkdjkd', 'laki-laki', 'qejjqeq', 2147483647, 'aldkakdlakda', 'kdksajdkajd', '2023-10-17 09:37:34');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `tanggal`, `isi_berita`, `gambar`, `id_kategori`) VALUES
(11, 'lolf bbb', '2023-10-14', '<p>dddff</p>', '02b374159270b578d2e0ce6f08199f07.png', 3),
(32, 'Sejarah MTs Negeri 1 Tegal', '2023-10-17', '<p>Jika dilihat dari sejarahnya, MTs Negeri 1 Tegal, yang dulu bernama MTsN Model Babakan adalah madrasah binaan Pondok Pesantren Mahadut Tholabah. Sejalan dengan perkembangan zaman, Pondok Pesantren Mahadut Tholabah tidak saja mengembangkan pendidikan pesantren yang konsentrasi pada ilmu agama semata, tetapi juga memberikan kesempatan bagi para santrinya untuk mendalami ilmu pengetahuan umum.</p><p>Tepatnya pada 1958, saat kepemimpinan Almaghfurlah KH Isya Mufti, setelah mendirikan Madrasah Wajib Belajar (MWB) sekarang menjadi Madrasah Ibtidaiyyah Islamiyah (MIS), dilanjutkan pada 1966 mendirikan Madrasah Menengah Pertama (MMP) yang pada akhirnya menjadi cikal bakal MTsN Model Babakan. Hubungan MTsN Model Babakan dan Pondok Pesantren Mahadut Tholabah sangat sinergis.</p><p>Keberadaan pondok pesantren sangat mendukung keberadaan MTsN Model Babakan. Tidak sedikit anak-anak yang berprestasi dalam bidang akademik, seperti anak yang menempati peringkat pertama paralel, anak yang juara olimpiade sains dan teknologi atau dalam bidang non akademik, seperti juara MTQ, bahkan tim bola volly ternyata bertempat di pondok pesantren. Hal ini sangat memungkinkan karena di samping mendapat tambahan pelajaran agama, tentunya, anak-anak yang bertempat di pondok pesantren memiliki kesempatan berdiskusi dan belajar bersama.</p><p>Dalam perjalanannya, animo masyarakat terhadap MMP yang semakin besar mendapat perhatian pemerintah yang kemudian meminta pihak Pondok Pesantren Mahadut Tholabah mengajukan penegrian MMP. Dengan berbagai pertimbangan dibentuklah panitia kecil&nbsp;&nbsp;yang&nbsp;terdiri&nbsp;dari&nbsp;K.H. Sofyan Mufti, B.A., (Pondok Pesantren Mahadut Tholabah), R. Muhammad Cholid (Inspektorat Pendidikan Agama Kab Tegal) dan Roemli Bakri, B.A. (Guru MMP).</p><p>Pada 1967,&nbsp;Pondok Pesantren Mahadut Tholabah mengajukan usul penegrian dengan nomor : 32/A/Perm/XII/67 Tanggal 1-12-1967 dan mendapat persetujuan Menteri Agama dengan Surat Keputusan No. 60 Tanggal 28-3-1968 dengan perubahan nama dari MMP menjadi Madrasah Tsanawiyah Agama Islam Negeri (MTsAIN).</p><p>Berdasarkan Surat Keputusan Menteri Agama tentang penegrian inilah, maka Drs. H. A. Busyairi (Kepala MTsN Model 2002-2005) menetapkan tanggal 28 Maret sebagai Hari Ulang Tahun/Miladiyah MTsN Model Babakan dan sekaligus mempelopori diadakannya Miladiyah MTsN pertama kalinya pada 2004 setelah mendapat penghaargaan sebagai MTs terbaik tingkat nasional pada tahun yang sama.</p><p>Perubahan nama dari MTsAIN berubah menjadi MTsN dan berubah lagi menjadi MTsN Model Babakan, sebagai konsekuensi MTsN pada saat itu dianggap sebagai madrasah yang berprestasi sehingga dianggap layak untuk dijadikan model percontohan bagi madrasah-madrasah di sekitar. MTsN pada saat itu ditunjuk sebagai penerima program pengembangan madrasah dari Program Kerja Sama antara Departemen Agama dan Asean Development Bank Project (ADB) sebagai MTsN Model Babakan. Kemudian pada tahun 2015, madrasah ini berganti nama secara resmi menjadi MTs Negeri 1 Tegal.</p><p>Sebagai penutup, semua civitas madrasah berterima kasih kepada pejuang MTsN 1 Tegal dengan selalu berdoa terutama kepada keluarga besar Pondok Pesantren Ma’hadut Tholabah dan kepada para guru dan karyawan. Penghargaan dan dedikasi yang tinggi kami sampaikan kepada semua Kepala MTsN 1 Tegal dari:</p><ol><li>Sofwan Mufti (1966 – 1972).</li><li>DRS. Muslich Ma’sum (1972 – 1990).</li><li>H. A. Busyairi (1991 – 1998).</li><li>H. Achfas (1999 – 2000).</li><li>H. Jalaluddin (2001 – 2002).</li><li>H. A. Busyairi (2002 – 2005).</li><li>Oeoeng Syamsuri, MSI (2006–2008).</li><li>Rohmad, M.Pd (2009 – 2010), dan</li><li>H. Wahidin (2010 – januari 2015).</li><li>H. Mukhlasin, M.Pd (2015 – sekarang)</li></ol><p>Guna mengetahui sejarah dan profil MTs Negeri Model Babakan hingga menjadi MTs Negeri 1 Tegal, silahkan bisa simak video berikut ini:</p>', '9073af443f145b0ae52801be97eb7c73.png', 8);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `judul`, `keterangan`, `file`, `tanggal`) VALUES
(4, 'dskldsa', 'sadda', '1ea66be9cdaa5fbe6e5dcf9d6c938f76.pdf', '2023-10-17'),
(5, ',asmldax', 'adsasd', 'c3c38e21bf03f0eeb9bc51894fbe560b.pdf', '2023-10-17'),
(6, 'ini file apa', 'aksjsk', '7ca07750f0185f711228e141632e0fe1.pdf', '2023-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `gambar`, `judul`, `tanggal`, `id_kategori`) VALUES
(6, '2153bb976c9e5ee73fbeeb64a7b098fe.png', 'peta', '2023-10-11', 1),
(12, '2b325b5a8507a886185f10decad3db9d.png', 'adsasd', '2023-10-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `infopublik`
--

CREATE TABLE `infopublik` (
  `id_infopublik` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `dokumen` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(3, 'Berita Eiw'),
(4, 'Berita Sekertariait'),
(5, 'Berita Kini'),
(8, 'Sapa');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_gambar`
--

CREATE TABLE `kategori_gambar` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_gambar`
--

INSERT INTO `kategori_gambar` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Sapa das');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nik` int(23) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kecamatan` enum('Banjarharjo','Bantarkawung','Brebes','Bulakamba','Bumiayu','Jatibarang','Kersana','Ketanggungan','Larangan','Losari','Paguyangan','Salem','Sirampog','Songgom','Tanjung','Tonjong','Wanasari') NOT NULL,
  `isi_saran` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_saran`, `email`, `nama`, `jenis_kelamin`, `pekerjaan`, `nik`, `no_telp`, `alamat`, `kecamatan`, `isi_saran`, `created_at`) VALUES
(2, 'syeeta@gmail.com', 'syita', 'laki-laki', '', 2, 2147483647, 'jatibarang', 'Jatibarang', 'sdfsaf', '2023-10-17 09:36:41'),
(3, 'HAHA@gmail.com', 'jaskjfagsgkasf', 'laki-laki', 'ahsiouascasopiapso', 2147483647, 2147483647, 'vmcgchhgfjhhjl', 'Songgom', 'rulkk;;kljcfdgdgf', '2023-10-17 09:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `alamat`, `password`, `role_id`, `is_active`, `tanggal_input`) VALUES
(1, 'syita yuna', 'unaizahsyita@gmail.com', 'default.jpg', '', '$2y$10$nIu76z5FVmW8l6Elpcej8OXs4P.dERjB/cvazjNPG0xE7ShsBIkMy', 2, 1, 1694142255),
(2, 'Eri', 'er32@gmail.com', '', '', '$2y$10$7VsGKEFF.CJgmi7.uC/X4.ayUo08iNthhtcs2g.NPtziG7zfWlH4a', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aduan`
--
ALTER TABLE `aduan`
  ADD PRIMARY KEY (`id_aduan`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `infopublik`
--
ALTER TABLE `infopublik`
  ADD PRIMARY KEY (`id_infopublik`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_gambar`
--
ALTER TABLE `kategori_gambar`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aduan`
--
ALTER TABLE `aduan`
  MODIFY `id_aduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `infopublik`
--
ALTER TABLE `infopublik`
  MODIFY `id_infopublik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori_gambar`
--
ALTER TABLE `kategori_gambar`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
