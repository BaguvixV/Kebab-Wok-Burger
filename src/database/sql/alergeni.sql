-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 05:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kwb`
--

-- --------------------------------------------------------

--
-- Table structure for table `alergeni`
--

CREATE TABLE `alergeni` (
  `id` int(11) NOT NULL,
  `alergena_identifikacija` varchar(50) COLLATE utf8mb4_latvian_ci NOT NULL,
  `apraksts` varchar(555) CHARACTER SET utf8 COLLATE utf8_latvian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_latvian_ci;

--
-- Dumping data for table `alergeni`
--

INSERT INTO `alergeni` (`id`, `alergena_identifikacija`, `apraksts`) VALUES
(1, 'A01', 'Graudaugi, kas satur lipekli (glutēnu) (t.i., kvieši, rudzi, mieži, auzas, speltas kvieši, triticum.<br> turgidum polonicum vai to hibridizēti celmi), un to produkti, izņemot:.<br> a) glikozes sīrupus uz kviešu bāzes, ieskaitot dekstrozi;<br> b) maltodekstrīnus uz kviešu bāzes;<br> c) glikozes sīrupus uz miežu bāzes;<br> d) graudaugus, ko izmanto, lai iegūtu destilātus vai lauksaimnieciskas izcelsmes etilspirtu stipro alkoholisko dzērienu un citu alkoholisko dzērienu ražošanai.'),
(2, 'A02', 'Vēžveidīgie un to produkti.'),
(3, 'A03', 'Olas un to produkti.'),
(4, 'A04', 'Zivis un to produkti, izņemot:<br> a) zivju želatīnu, ko izmanto vitamīnu vai karotinoīdu preparātiem;<br> b) zivju želatīnu vai zivju līmi, ko izmanto alus un vīna dzidrināšanai.'),
(5, 'A05', 'Zemesrieksti un to produkti.'),
(6, 'A06', 'a) pilnībā rafinētu sojas pupu eļļu un taukus un to produktus, ja vien to apstrādes procesā nevar palielināties alerģiskuma līmenis;<br> b) no sojas pupām iegūtus dabiskus jauktus tokoferolus (E306), dabisku D-alfa tokoferolu, dabisku D-alfa tokoferola acetātu, dabisku D-alfa tokoferola sukcinātu;<br> c) fitosterolus un fitosterolu esterus, kas atvasināti no augu eļļas, kas iegūta no sojas pupām;<br> d) fitostanola esterus, kas iegūti no tādas augu eļļas steroliem, kas iegūta no sojas pupām.'),
(7, 'A07', 'Piens un tā produkti (ieskaitot laktozi), izņemot:<br> a) sūkalas, ko izmanto, lai iegūtu destilātus vai lauksaimnieciskas izcelsmes etilspirtu stipro alkoholisko dzērienu un citu alkoholisko dzērienu ražošanai;<br> b) laktitolu.'),
(8, 'A08', 'Rieksti, t.i., mandeles (Amygdalius communis L.), lazdu rieksti (Corylus avellana), valrieksti (Juglans regia), Indijas rieksti (Anacardium occidentale), pekanrieksti (Carya illinoiesis(Wangenh.) K.Koch), Brazīlijas rieksti (Bertholletia excelca), pistāciju rieksti (Pistacia vera), makadāmijas rieksti un Queensland rieksti (Macadamia ternifolia) un to produkti, izņemot riekstus, ko izmanto, lai iegūtu destilātus vai lauksaimnieciskas izcelsmes etilspirtu stipro alkoholisko dzērienu un citu alkoholisko dzērienu ražošanai.'),
(9, 'A09', 'Selerijas un to produkti.'),
(10, 'A10', 'Sinepes un to produkti.'),
(11, 'A11', 'Sezama sēklas un to produkti.'),
(12, 'A12', 'Sēra dioksīds un sulfīti, ja to koncentrācija pārsniedz 10 mg/kg vai 10 mg/l, izteikts kā SO2.'),
(13, 'A13', 'Lupīna un tās produkti.'),
(14, 'A14', 'Gliemji un to produkti.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alergeni`
--
ALTER TABLE `alergeni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alergeni`
--
ALTER TABLE `alergeni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
