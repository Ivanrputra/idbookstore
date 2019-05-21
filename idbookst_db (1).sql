-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 09:00 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `idbookst_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$A81QV51v1KYy.51uphPdNuD0E.H91BjEZJ1yHaOxQvtdY7lNlwKsW', 'ZVlcqPJxkuiOvKEu8DWYRPw7aGwf0reIQMQQQwKh3LIQQ2HiWtNt4TdouCYe', '2018-01-20 03:32:36', '2018-01-20 03:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'Author', 'author@mail.com', '$2y$10$SEyY80sVRyDv4BcG/c/mi.V4QprGRXFNJ/je95Ay7UFIic1QzVXp.', 'O0hiqKy7kHXnKegEiOHSxbDGRelO8vO3Fyt5qwvkeZ6Rfj2yEAyyfjZYyUVX', '2018-11-12 09:35:08', '2018-11-12 09:35:08'),
(13, 'John', 'john@mail.com', '$2y$10$H9Ah.7QMeP9fmycPZQtYIewVU/.J0sgh1pEIuvGgmvpl31ooucN/C', 'WDSpos0diEF7Zm8UGev6OOXaRGIUyfvnqZ5EgqOdOoHVQo0yePg5vTIeeOk4', '2018-10-16 11:05:08', '2018-10-16 11:05:08'),
(3, 'Fandi', 'fandi@mail.com', '$2y$10$t40CIMx7yV8JqfPKhkG75uR0OEKPWIndiJYmlnmBIF/0T/oLQsv8i', '0xqAoDjaJ24POiYLP59L2Wc30N5b7f46HPIgGXGMrFK4oJDzElDbIbzD0EgX', '2018-10-10 00:44:13', '2018-10-10 00:44:13'),
(4, 'Eko', 'eko@mail.com', '$2y$10$jWu6JEBPwxoVO/C8.xcTau2FQsFyFMsLf8IYIyzz3h0OYUy5Ubvam', 'JKJ8C0SjOGTe9kyVIWhVSfOHjYxC2hzrdzuqAvXzmv97JevWN83vtb4uU3wK', '2018-10-10 00:43:52', '2018-10-10 00:43:52'),
(6, 'Ivan', 'ivanrputra@mail.com', '$2y$10$J3lpJEa03QVyk3Z4PsZCmuQ5aYPTUX4hcMuxKTBgAklKUilflttsC', '7QQ6CKSEGqa4q5t5EAy01YV2Ex5r61IAN6V2hEKQSBMlSLIwgrJPgI1ulh2m', '2018-10-10 00:41:50', '2018-10-10 00:41:50'),
(7, 'Dicky', 'dicky@mail.com', '$2y$10$63ei4F9ptgWSvUbBUGKz2OZRSF4mopER/1uA.A.aETtJSJKE0ah/W', 'svNdwBS7lDSnFg8wtKIoTPiifQ5qP5xQRVpsh3JMEl078NdMbWkXfIKifGyV', '2018-10-10 00:42:30', '2018-10-10 00:42:30');

-- --------------------------------------------------------

--
-- Table structure for table `best_seller`
--

CREATE TABLE IF NOT EXISTS `best_seller` (
  `id` int(11) NOT NULL,
  `id_book` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `best_seller`
--

INSERT INTO `best_seller` (`id`, `id_book`) VALUES
(1, 25),
(2, 27);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`id` int(11) NOT NULL,
  `id_author` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `halaman` int(11) NOT NULL,
  `bahasa` text NOT NULL,
  `harga` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `nameFile` varchar(255) NOT NULL,
  `status` enum('sudah','belum') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `id_author`, `judul`, `deskripsi`, `halaman`, `bahasa`, `harga`, `kategori`, `nameFile`, `status`, `created_at`, `updated_at`) VALUES
(24, '4', 'Healthy Canteen ', 'What is inside healthy canteen should be in every school or industry canteen', 11, 'English', '100000', 'Health, Mind & Body', '66-$2y$10$K9H8eMABz9OtLE7nsRXLvOJuHNhFF608UhCYgl3Mx6vdzLPTvDCwq-Healthy Canteen ', 'sudah', '2018-07-29 03:56:26', '2018-07-29 03:56:26'),
(25, '2', 'Eggplants Growth', 'Book about how eggplant growth ', 11, 'English', '30000', 'Technique', '153-$2y$10$a.ZtgItJhymc4CpTnMoz0.pIZXDIA69XLxD.eYPCBaVEErvkLVG1m-Eggplants Growth', 'sudah', '2018-07-29 03:58:43', '2018-07-29 03:58:43'),
(26, '6', 'The Power of Photosynthesis', 'How photosynthesis can work and what photosynthesis actually do on plant', 11, 'English', '75000', 'Technique', '746-$2y$10$2qcNthp.iiHVFlZuJExipelwF9MdUkY2txNLa5x7wbavUcu7Xppq-The Power of Photosynthesis', 'sudah', '2018-07-29 04:00:18', '2018-10-10 04:19:06'),
(23, '7', 'The origin story of surabaya', 'This book tell story about how surabaya city origin', 11, 'English', '25000', 'History', '872-$2y$10$PBBVSNyuh92BrmwTwz35eLP0KrxUtjkRfJo4Qt..RLQGdJGE7esy-The origin story of surabaya', 'sudah', '2018-07-29 03:54:38', '2018-07-29 03:54:38'),
(22, '4', 'Education to Life Clean and Healthy', 'This book show children how to life clean and healthy on their own', 11, 'English', '50000', 'Health, Mind & Body', '750-$2y$10$lXvnuLdbEfDcfg8160soxOdr9S5AGJki7g6jXfnSm.0aJ.OiUsYu-Education to Life Clean and HealthyEducation to Life Clean and Healthy', 'sudah', '2018-07-29 02:03:38', '2018-07-29 02:03:38'),
(37, '6', 'Milan 1998', 'Baperous Story of Milan', 15, 'Indonesia', '15000', 'Fiction & Literature', '95-$2y$10$5YA3SRqmA7H1pusLEEoeLexs.jT9.2WlA5.pUrE0K3TiIqunFJGa-Milan 1998', 'belum', '2018-10-09 16:54:34', '2018-10-09 16:54:34'),
(38, '3', 'Kenyataan Pemimpi2', 'Apakah ini mimpi ataukah nyata?', 20, 'Indonesia', '20000', 'Comic', '305-$2y$10$fk1BM29EWpBe992P7tmofOVNrqSCMVqwpoWakJVras4O.4kMfI1ze-Kenyataan Pemimpi', 'sudah', '2018-10-09 16:57:13', '2018-10-10 01:51:18'),
(39, '3', '101 Resep Kue & Manisan', 'Lengkap 101 Resep Kue & Manisan', 10, 'Indonesia', '30000', 'Cook, Food & Drink', '89-$2y$10$NErcA6AUBEDvzQ6tX3AXmOkX46iRZ3iVmaFti.nosLfISXyz1mQVC-101 Resep Kue & Manisan', 'sudah', '2018-10-09 16:58:45', '2018-10-09 16:58:45'),
(36, '6', 'Humor Santri', 'Kumpulan Humor Santri', 30, 'Indonesia', '30000', 'Religious & Spiritual', '661-$2y$10$PT98JRdsSqcWnYeoBtWk3eJ0KkE1J8ogbAcMTfy5cOXaEMnuTH.yW-Humor Santri', 'sudah', '2018-10-09 16:45:10', '2018-10-09 16:45:10'),
(40, '3', 'Android Uncover', 'Android Learn', 31, 'English', '40000', 'Technique', '167-$2y$10$aRe70nj..QRXwxH42ehoqODrhrbs0YZPxbOEnsmZlgzATwuayMIuG-Android Uncover', 'sudah', '2018-10-09 16:59:36', '2018-10-09 16:59:36'),
(41, '3', 'Civil Engineering System Analysis', 'Civil Engineering', 30, 'English', '65000', 'Technique', '477-$2y$10$bF8WrEb4MQR29AAuWqYi3eV25A4zjhDt5VKASXBvvufEITU9vDtCO-Civil Engineering System Analysis', 'sudah', '2018-10-09 17:01:18', '2018-10-09 17:01:18'),
(42, '3', 'New Adventure in Malang', 'New Adventure in Malang', 15, 'English', '20000', 'Comic', '431-$2y$10$nJqbOotmpH5awq81Mnly.8jlr3ER1PSKd2BoHINvOlwzJP52.HCW-New Adventure in Malang', 'sudah', '2018-10-09 17:03:10', '2018-10-09 17:03:10'),
(43, '3', 'Be The Boss You Can Be', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate quas, commodi modi distinctio est facilis!', 43, 'English', '34000', 'Business & Investment', '525-$2y$10$vR7eYIH.G8rTAhc81fSCaeWMc2bEk5vcQIYOlXTLMlUmEt97zshoW-Be The Boss You Can Be', 'sudah', '2018-10-09 17:05:22', '2018-10-09 17:05:22'),
(44, '3', 'Soerabaya punya cerita', 'Cerita punya soerabaya', 19, 'Indonesia', '24000', 'History', '2-$2y$10$Dc4NtZO0ENUDZqTlEeNAOKgrkgM2CmW5OCISM3sBQQjnK7z.ush6-Soerabaya punya cerita', 'sudah', '2018-10-09 17:06:35', '2018-10-09 17:06:35'),
(45, '3', 'Wilwatikta', 'Wilwatikta adalah nama sansekerta dari Majapahit, yang didirikan oleh Nararya Sanggramawijaya (Bhre Wijaya) pada tahun 1293 M di sebuah desa yang masuk dalam kawasan hutan orang Terik. Wilwatikta itu sendiri adalah merupakan kelanjutan dari kerajaan Singasari yang runtuh akibat serangan Jayakatwang dari Gelang-gelang.', 53, 'Indonesia', '63000', 'History', '574-$2y$10$llR3dO8IJt3Mp9hHoDwJxO9EkKc5U2ca8cKc7GxjZ0CE0BwUb0g1a-Wilwatikta', 'sudah', '2018-10-09 17:08:21', '2018-10-09 17:08:21'),
(46, '3', 'Aku Anak Cerdas', 'Bukunya anak cerdas', 12, 'Indonesia', '23000', 'Child Book', '446-$2y$10$darVMOwRQj5o.3WUQ.dwWOHomLK2rExgnCjdeb4SD5UgUNnmpKWNS-Aku Anak Cerdas', 'sudah', '2018-10-09 17:09:22', '2018-10-09 17:09:22'),
(47, '3', 'Aplikasi Android dalam 5 menit', '5 menit membuat aplikasi android', 23, 'Indonesia', '48000', 'Technique', '132-$2y$10$IUBzfENnDWf2zGJy724LenX24WvlNUEsaCyz3bxxEnaFEqjsAanm-Aplikasi Android dalam 5 menit', 'sudah', '2018-10-09 17:10:47', '2018-10-09 17:10:47'),
(48, '3', 'Pandai berhitung', 'Bukan pandai menulis', 14, 'Indonesia', '13000', 'Child Book', '913-$2y$10$SFcOH.ZWTiqqo5ZjMzEcvu1uuBqGoc9h4L.jC0tSEC6Q5R.KQY0m-Pandai berhitung', 'sudah', '2018-10-09 17:11:49', '2018-10-09 17:11:49'),
(49, '3', 'Sukses Bisnis Online', 'Anda ingin sukses berbisnis online ???', 42, 'Indonesia', '43000', 'Business & Investment', '378-$2y$10$5COV9vYiGZIWdSitTsgUu0zbgRZfPStlKxXs1ikTYAWDVeb09Oqe-Sukses Bisnis Online', 'sudah', '2018-10-09 17:13:04', '2018-10-09 17:13:04'),
(50, '3', 'Pesan Rahasia Hati', 'hati yang selalu berpesan namun tak diketahui', 10, 'Indonesia', '10000', 'Romance', '340-$2y$10$.PRvFMcigejgPxdhFbfi.0bSTYHOG0N3el3OwFv4ZYjvAO2cH7mu-Pesan Rahasia Hati', 'sudah', '2018-10-09 17:14:11', '2018-10-09 17:14:11'),
(51, '3', 'Easy & Tasty Steak Recipes', 'Eating..Eating..Eating..', 20, 'English', '54000', 'Cook, Food & Drink', '839-$2y$10$S8mnYB8UFXHZJPZKANQgfOs0As7YKbiTJZAw3RAZzON4BoG0bFASq-Easy & Tasty Steak Recipes', 'belum', '2018-10-10 00:57:30', '2018-10-10 00:57:30'),
(53, '13', '1001 Trick Percantik dan Optimasi Website', 'Cara percantik dan optimasi website', 25, 'Indonesia', '50000', 'Technique', '117-$2y$10$cLI3.MtEzJD03Wusaan4ruFLgCs3C25BjtKZq0CM7oqnD91YlpcAe-1001 Trick Percantik dan Optimasi Website', 'sudah', '2018-10-16 12:55:21', '2018-10-16 12:55:21');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
`id` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `message` text NOT NULL,
  `writer` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `id_book`, `id_author`, `id_admin`, `message`, `writer`, `created_at`, `updated_at`) VALUES
(17, 51, 0, 1, 'haloo', 'admin', '2018-10-10 03:59:56', '2018-10-10 03:59:56'),
(18, 37, 6, 0, 'emboh wes', 'author', '2018-10-10 04:10:43', '2018-10-10 04:10:43'),
(19, 37, 0, 1, 'oyi bozz', 'admin', '2018-10-10 04:11:46', '2018-10-10 04:11:46'),
(23, 53, 0, 1, 'Baik, hasil model 3D nya akan saya beritahukan anda dulu sebelum saya finalisasi di aplikasinya', 'admin', '2018-10-16 13:11:02', '2018-10-16 13:11:02'),
(22, 53, 13, 0, 'Admin, mohon dibuatkan AR media untuk menjelaskan mengenai proses pembuatan website pada halaman 3 sampai halaman 8', 'author', '2018-10-16 13:10:10', '2018-10-16 13:10:10'),
(24, 53, 13, 0, 'oke min, tambahkan video nya juga ya, agar lebih memudahkan pemahaman', 'author', '2018-10-16 13:11:49', '2018-10-16 13:11:49'),
(25, 53, 0, 1, 'baik, videonya apa sudah ada atau saya buatkan?', 'admin', '2018-10-16 13:12:31', '2018-10-16 13:12:31'),
(26, 53, 13, 0, 'admin saja yang buatkan, saya belum menyiapkan video sebelumnya. Terima kasih banyak admin', 'author', '2018-10-16 13:13:12', '2018-10-16 13:13:12'),
(27, 53, 0, 1, 'Ok, saya akan kerjakan dulu, saya beritahu finalisasi bukunya lewat email sebelum kami publish', 'admin', '2018-10-16 13:14:07', '2018-10-16 13:14:07'),
(28, 53, 13, 0, 'Oke min.. :)', 'author', '2018-10-16 13:14:24', '2018-10-16 13:14:24'),
(29, 51, 0, 1, 'hai', 'admin', '2019-03-07 11:32:08', '2019-03-07 11:32:08'),
(30, 51, 0, 1, 'hai', 'admin', '2019-03-07 11:32:16', '2019-03-07 11:32:16'),
(31, 51, 0, 1, 'hai', 'admin', '2019-03-07 11:32:21', '2019-03-07 11:32:21'),
(32, 51, 0, 1, 'hai', 'admin', '2019-03-07 11:32:25', '2019-03-07 11:32:25'),
(33, 37, 0, 1, 'hai', 'admin', '2019-03-07 11:33:18', '2019-03-07 11:33:18'),
(34, 37, 0, 1, 'hai', 'admin', '2019-03-07 11:33:19', '2019-03-07 11:33:19'),
(35, 37, 0, 1, 'hai', 'admin', '2019-03-07 11:33:25', '2019-03-07 11:33:25');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `book_id` int(11) NOT NULL,
  `kategori` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`book_id`, `kategori`, `created_at`, `updated_at`) VALUES
(23, 'Biographies', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Biographies', '2018-07-29 03:56:26', '2018-07-29 03:56:26'),
(29, 'History', '2018-08-26 19:29:51', '2018-08-26 19:29:51'),
(29, 'Science & Math', '2018-08-26 19:29:51', '2018-08-26 19:29:51'),
(29, 'Fiction & Literary', '2018-08-26 19:29:51', '2018-08-26 19:29:51'),
(30, 'History', '2018-09-19 17:40:38', '2018-09-19 17:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
`id` int(11) NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `naskah`
--

CREATE TABLE IF NOT EXISTS `naskah` (
`id` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  `judul` text NOT NULL,
  `status` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `naskah`
--

INSERT INTO `naskah` (`id`, `id_author`, `judul`, `status`, `created_at`, `updated_at`) VALUES
(3, 14, 'naskah.epub', 'belum', '2019-03-09', '2019-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('kirom222@gmail.com', '$2y$10$hmw0DKzfQbYSYN5F8D8vwuf.HFJp71bC1VgnPcgNrstdaODm97POW', '2018-01-20 04:04:24'),
('arfabuma.987@gmail.com', '$2y$10$5Izo5GBbizp51NHwezJ2FeHR5K8KpbJhfFrA3LDv1Uvf8jahryV1q', '2018-06-28 03:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
`id` int(11) NOT NULL,
  `id_buku` varchar(255) NOT NULL,
  `id_pembeli` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL,
  `status_konfirmasi` varchar(255) NOT NULL,
  `id_author` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `id_buku`, `id_pembeli`, `harga`, `status_pembayaran`, `status_konfirmasi`, `id_author`, `created_at`, `updated_at`) VALUES
(34, '25', '1', '30000', 'Belum Bayar', 'Belum Dikonfirmasi', '2', '2018-09-27 12:31:30', '2018-09-27 12:31:30'),
(33, '22', '9', '50000', 'Sudah Bayar', 'Sudah Dikonfirmasi', '4', '2018-08-07 16:10:30', '2018-08-07 16:10:30'),
(30, '22', '2', '50000', 'Sudah Bayar', 'Sudah Dikonfirmasi', '4', '2018-07-31 06:25:46', '2018-07-31 06:25:46'),
(31, '24', '2', '100000', 'Sudah Bayar', 'Sudah Dikonfirmasi', '4', '2018-08-07 02:34:48', '2018-08-07 02:34:48'),
(32, '22', '8', '50000', 'Sudah Bayar', 'Sudah Dikonfirmasi', '4', '2018-08-07 15:10:45', '2018-08-07 15:10:45'),
(35, '42', '4', '20000', 'Sudah Bayar', 'Sudah Dikonfirmasi', '3', '2018-10-10 03:01:21', '2018-10-10 03:01:21'),
(36, '42', '3', '20000', 'Sudah Bayar', 'Sudah Dikonfirmasi', '3', '2018-10-10 03:35:55', '2018-10-10 03:35:55'),
(37, '24', '10', '100000', 'Sudah Bayar', 'Sudah Dikonfirmasi', '4', '2018-10-10 04:59:20', '2018-10-10 04:59:20'),
(38, '22', '10', '50000', 'Sudah Bayar', 'Sudah Dikonfirmasi', '4', '2018-10-10 07:43:10', '2018-10-10 07:43:10'),
(39, '22', '4', '50000', 'Sudah Bayar', 'Sudah Dikonfirmasi', '4', '2018-10-13 22:43:24', '2018-10-13 22:43:24'),
(40, '53', '11', '50000', 'Sudah Bayar', 'Sudah Dikonfirmasi', '13', '2018-10-16 13:20:57', '2018-10-16 13:20:57'),
(41, '22', '11', '50000', 'Sudah Bayar', 'Sudah Dikonfirmasi', '4', '2018-10-16 13:22:04', '2018-10-16 13:22:04'),
(42, '50', '2', '10000', 'Belum Bayar', 'Belum Dikonfirmasi', '3', '2018-11-21 04:56:38', '2018-11-21 04:56:38'),
(43, '49', '2', '43000', 'Belum Bayar', 'Belum Dikonfirmasi', '3', '2018-11-21 06:49:59', '2018-11-21 06:49:59'),
(44, '36', '2', '30000', 'Belum Bayar', 'Belum Dikonfirmasi', '6', '2018-11-21 06:50:30', '2018-11-21 06:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `stat_naskah`
--

CREATE TABLE IF NOT EXISTS `stat_naskah` (
`id` int(11) NOT NULL,
  `id_naskah` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `message` text NOT NULL,
  `title_naskah` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stat_naskah`
--

INSERT INTO `stat_naskah` (`id`, `id_naskah`, `id_author`, `id_admin`, `message`, `title_naskah`, `created_at`, `updated_at`) VALUES
(4, 3, 14, 0, 'desk1\r\n', 'naskah.epub', '2019-03-09', '2019-03-09'),
(5, 3, 14, 0, 'tambah1', 'naskah0.epub', '2019-03-10', '2019-03-10'),
(6, 3, 0, 1, 'admin1', 'naskah00.epub', '2019-03-11', '2019-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE IF NOT EXISTS `template` (
`id` int(11) NOT NULL,
  `id_admin` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `template` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `id_admin`, `nama`, `nama_file`, `template`, `created_at`, `updated_at`) VALUES
(4, '1', 'test', '668-$2y$10$ZapF9U0uYw5eeJR3N5ZtOuLTnyylNgsTSWT8lWDulWOrdjX28p7zi-test', 'Epub', '2018-09-24 21:17:50', '2018-09-24 21:17:50'),
(3, '1', 'Template 1', '298-$2y$10$Xjxst7tRyR7QO1J08NIRNOrI6JGNzvx6SHmTP7YgstIkTRvWeJUjK-Template 1', 'Cover', '2018-07-12 07:56:03', '2018-07-12 07:56:03'),
(5, '1', '1231', '843-$2y$10$HwQxNJp0UcF0dvwGx0y7yeWwtcdf8BmX5bozNrWFb4va3ZwLaR4kO-1231', 'Sample', '2018-09-28 20:01:42', '2018-09-28 20:01:42'),
(6, '1', '1111', '672-$2y$10$giWghb.ldOsrRK3oMbqdkeUv30WmOjPkDBA.Wk3a86eT6hYTzP1Ii-1111', 'Sample', '2018-10-08 17:57:00', '2018-10-08 17:57:00'),
(7, '1', '1111111111111111111', '741-$2y$10$Ln/Btpa6rEOauyX63bEtTeaHeO0U.vMqtvll4bgdkmom1AN5xDNlS-1111111111111111111', 'Sample', '2018-10-08 18:01:37', '2018-10-08 18:01:37'),
(8, '1', '1111', '226-$2y$10$J2NsReIRZBwv4i3iE1GRN.R8p0Ij.K.bh55LKIq7usnmjnIgWbsrO-1111', 'Sample', '2018-10-08 18:06:27', '2018-10-08 18:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fathul Kirom', 'kirom222@gmail.com', '$2y$10$iMC5IlttjG.AgRw.WRqNPOl9vmoK8pOwW9sChen2hK2wf8jBcoB7q', '6eOhW6VU22BsawcIxYgr5jIbeAl3GpRCHOvuDpgngaqV1GgDE8SaEcqsSGGH', '2018-01-20 03:30:47', '2018-01-20 03:30:47'),
(2, 'Ivanrputra', 'ivanrputra@gmail.com', '$2y$10$C3i4ZsDzfqQrfKpu9.ipFOFiy/KQAxjdaYa0IkBSrTruYYbPZ/9eO', 'qICbdbvy01lQO8k3YdxbrHGD7Zzyy0hLo3yroTWyxyDrohq8Zd8Q9P7uhg8a', '2018-01-20 03:35:16', '2018-01-20 03:35:16'),
(3, 'Test', 'test@test.com', '$2y$10$VXQHYjX/JbtdqOBWa6OseOj3kLbloHiwz6kFtQbMT/LRZoVVMx5Ry', '11E1h7yezvMR1DjG4AT9aHrmqa3TElTEfVYQBj6TT85rqGiH788MkbXV82mM', '2018-01-20 10:54:09', '2018-01-20 10:54:09'),
(4, 'Fandi Arfa', 'arfabuma.987@gmail.com', '$2y$10$L87a1El9J2OUyfXysrW.l.S9LmauG4J/iDTWR7URPzXx7rVgMYApS', 'qzw831RPOud0RBtaAJSHhCNZeJQ4QC5VEpGDYcMl81777Ly7E8B4J6heTcpi', '2018-06-06 06:10:00', '2018-06-06 06:10:00'),
(5, 'SEOViemi', 'miekisimpna2013@seocdvig.ru', '$2y$10$1exdjwxkRyp2FYBBuXUtpu2u9/VJ5ThXg2MxPa0kzUrIFHtjUVhP6', NULL, '2018-06-18 20:40:21', '2018-06-18 20:40:21'),
(6, 'Dicki dwi p', 'dicki@gmail.com', '$2y$10$L.P34B20VK6bXOtggM9.1u4s8ayxpYUUOPOQvNdcTPx3TOYyG1rsO', '9QzE8nhctFkSzbM0q5RhN8NCQrgt6JOPjQr72PvkOfn6VCVIMv8BCNNBNTZo', '2018-06-28 03:31:09', '2018-06-28 03:31:09'),
(7, 'ivan', 'ivanrputr@gmail.com', '$2y$10$E9OGcNnkHp/LE2f/TvUCj.V8JP2v1HXFFE3QSrV.ysaYX7fHx49f2', 'EmDChe7JGWwYpjbUjRK6NA8O6GtF5b2uBqy7zThCPrlGKLDUpa63EqRH8bWp', '2018-07-07 05:28:04', '2018-07-07 05:28:04'),
(8, 'cahya', 'cahya@gmail.com', '$2y$10$mZxYr7QzHz1kUDvbj1UeeemyeDzLWp9AZZ4zsmCuGaIZV1c6djLf2', 'sJX9AJKN6AY3zaVfyQzWBLhCKQxaqOdOyIt32pZQFQ711zBzKwQUTOU9xp6T', '2018-08-07 15:10:35', '2018-08-07 15:10:35'),
(9, 'joko', 'joko@gmail.com', '$2y$10$5x5dIs9Spi5UyofrjOPKnOvF67/11rlypWe6ksmxiURCn28furE4i', NULL, '2018-08-07 16:10:14', '2018-08-07 16:10:14'),
(10, 'coba1', 'coba1@mail.com', '$2y$10$um0DrYgokgiS.2EpE0KHWORp0PYFLwWsbylPhOAS6aCZJT.eToNW6', NULL, '2018-10-10 04:59:11', '2018-10-10 04:59:11'),
(11, 'Devi', 'devi@mail.com', '$2y$10$CqFbA2M4vaNVMEUs2BdWSOlVd209HCxVgRT.tsPKr8azpgX9L7eUC', NULL, '2018-10-16 13:20:44', '2018-10-16 13:20:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `authors_email_unique` (`email`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `naskah`
--
ALTER TABLE `naskah`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_token_index` (`token`), ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stat_naskah`
--
ALTER TABLE `stat_naskah`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `naskah`
--
ALTER TABLE `naskah`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `stat_naskah`
--
ALTER TABLE `stat_naskah`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
