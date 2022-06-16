-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 01:18 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camin`
--

-- --------------------------------------------------------

--
-- Table structure for table `camin`
--

CREATE TABLE `camin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `foto` varchar(100) DEFAULT 'camin-0.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camin`
--

INSERT INTO `camin` (`id`, `nama`, `visi`, `misi`, `foto`) VALUES
(1, 'Muhammad Naufal Syarifudin', 'Mewujudkan anggota UKM PCC yang santun dalam pekerti, adaptif, inovatif, solutif serta memiliki loyalitas tinggi', '1. Meningkatkan solidaritas seluruh anggota UKM PCC yang berasaskan kebersamaan dan kekeluargaan\r\n2. Membangun hubungan dan citra yang baik dengan seluruh komponen pendukung organisasi\r\n3. Mewadahi kreativitas anggota dalam pengembangan softskill dan hardskill\r\n4. Mengamalkan 7 Layer PCC pada setiap keanggotaan', 'camin-1.png'),
(2, 'Muhammad Yashkar Khafid', 'Mewujudkan kepengurusan organisasi UKM PCC yang harmonis, profesional, aktif, serta melek informasi dengan tetap berpedoman pada \"7 Layers\"', '1. Menciptakan hubungan yang harmonis baik antar pengurus UKM PCC maupun antar UKM lain\r\n2. Meningkatkan rasa tanggung jawab anggota juga rasa kepedulian kepada sesama baik terhadap anggota PCC maupun yang selainya\r\n3. Mengoptimalkan \"Share Your Knowledge!\" sebagai sarana peningkatan potensi agar dapat melangkah bersama\r\n4. Menanamkan pedoman \"7 Layers\" pada kepengurusan UKM PCC', 'camin-0.png'),
(3, 'Chairul An\'aam Maulidin', 'Menjadikan UKM. PCC sebagai tempat untuk menyalurkan minat atau bakat mahasiswa di bidang teknologi melalui pelatihan \r\npelatihan guna terwujudnya mahasiswa yang kreatif, inovatif dan berkompeten di era digitalisasi', '1. Menciptakan karakter kepengurusan yang berdasarkan pada prinsip 7 Layer PCC\r\n2. Menyelenggarakan berbagai pelatihan di bidang teknologi\r\n3. Mengkolaborasikan teknologi dengan kegiatan kegiatan yang ada\r\n4. Menumbuhkan rasa ingin “Share Your Knowledge\" kepada anggota aktif maupun pengurus PCC', 'camin-0.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camin`
--
ALTER TABLE `camin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camin`
--
ALTER TABLE `camin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
