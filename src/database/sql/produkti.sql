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
-- Table structure for table `produkti`
--

CREATE TABLE `produkti` (
  `id` int(11) NOT NULL,
  `nosaukums` varchar(14) COLLATE utf8_latvian_ci NOT NULL,
  `izmers_svars` varchar(15) COLLATE utf8_latvian_ci NOT NULL DEFAULT '---',
  `cena` decimal(10,2) NOT NULL DEFAULT 0.00,
  `sastavdalas` text COLLATE utf8_latvian_ci NOT NULL,
  `kategorija_id` varchar(55) COLLATE utf8_latvian_ci NOT NULL,
  `alergeni` varchar(255) COLLATE utf8_latvian_ci NOT NULL,
  `bilde` varchar(255) COLLATE utf8_latvian_ci NOT NULL,
  `unikalais_kods` varchar(10) COLLATE utf8_latvian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Dumping data for table `produkti`
--

INSERT INTO `produkti` (`id`, `nosaukums`, `izmers_svars`, `cena`, `sastavdalas`, `kategorija_id`, `alergeni`, `bilde`, `unikalais_kods`) VALUES
(1, 'Porto Di Mare', '40cm Ø', '9.92', 'Šķinķis, žāvētas vistas giross, krēmīgais mājas siers, kausētais siers, rīvēts siers, tomāti, saldā BBQ mērce, mango-karija mērce, baltā mērce.', 'pica', 'A01, A03, A06, A07, A10', 'picas/01-pica.jpg', 'P0001'),
(2, 'SAN DONATO', '40cm Ø', '7.90', 'Krēmīgais mājas siers, mocarella siers, rīvēts siers, pesto, ciedru rieksti.', 'pica', 'A01, A03, A07, A08, A10', 'picas/02-pica.jpg', 'P0002'),
(3, 'DERGANO', '40cm Ø', '11.91', 'Šķinķis, žāvētas vistas giross, krēmīgais mājas siers, kausētais siers, rīvēts siers, tomāti, saldā BBQ mērce, mango-karija mērce, baltā mērce.', 'pica', 'A01, A03, A06, A07, A10', 'picas/03-pica.jpg', 'P0003'),
(4, 'COMASINA', '40cm Ø', '12.90', 'Šķinķis, kraukšķīgā vista, rīvēts siers, marinēti šampinjoni, marinēti sīpoli, tomāti, maigā adžikas mērce, tomātu mērce.', 'pica', 'A01, A03, A07, A10', 'picas/04-pica.jpg', 'P0004'),
(5, 'MISSORI', '---', '5.90', 'Šķinķis, salami, mocarella siers, kausētais siers, rīvēts siers, tomāti, marinēti sīpoli, baltā mērce.', 'pica', 'A01, A03, A07, A10', 'picas/05-pica.jpg', 'P0005'),
(6, 'Pizza Zara', '40cm Ø', '16.41', 'Pizza Zara ar pildīto siera maliņu: Šķinķis, salami, siers, marinēti šampinjoni, marinēti sīpoli, tomāti, baltā mērce, pistācijas', 'pica', 'A01, A03, A07, A08, A10', 'picas/06-pica.jpg', 'P0006'),
(7, 'Affori (asā)', '40cm Ø', '8.90', 'Kūpināta karbonāde, bekons, krēmīgais mājas siers, tomāti, marinēti sīpoli, adžika, maigā adžikas mērce, halapenjo.', 'pica', 'A01, A03, A07, A10', 'picas/07-pica.jpg', 'P0007'),
(8, 'CLASSIC DUOMO', '40cm Ø', '6.50', 'Salami, siers, kečups.', 'pica', 'A01, A03, A07', 'picas/08-pica.jpg', 'P0008'),
(9, 'CROCETTA', '40cm Ø', '5.80', 'Krabju nūjiņas, siers, tomāti, kečups.', 'pica', 'A01, A02, A03, A07', 'picas/09-pica.jpg', 'P0009'),
(10, 'CORDUSSIO', '---', '9.15', 'Kebaba liellopa gaļas strēmelītes, marinēti gurķi, maigi marinēti sīpoli, rīvēts siers, kečups ķiploku mērce.', 'pica', 'A01, A03, A07, A10', 'picas/10-pica.jpg', 'P0010'),
(11, '1. Komplekts', '---', '6.50', 'STANDARTA IZMĒRA BURGERA KOMPLEKTS.\r\nIetilpst: Burgers ,frī kartupeļi, mērce pēc izvēles (maigā adžikas mērce, ķiploku mērce, kečups, skābā krējuma mērce, sweet čili mērce, gurķu/grauzdētu sīpolu mērce, adžika), dzēriens pēc izvēles (Pepsi, Mirinda, 7up).\r\n\r\n\r\n', 'burgers', 'A01, A03, A07, A10, A11', 'burgeri/01-burgers.jpeg', 'P0011'),
(12, '2. Komplekts', '---', '8.00', 'DUBULTĀ BURGERA KOMPLEKTS.\r\nIetilpst: Burgers ,frī kartupeļi, mērce pēc izvēles (maigā adžikas mērce, ķiploku mērce, kečups, skābā krējuma mērce, sweet čili mērce, gurķu/grauzdētu sīpolu mērce, adžika), dzēriens pēc izvēles (Pepsi, Mirinda, 7up).\r\n\r\n', 'burgers', 'A01, A03, A07, A10, A11', 'burgeri/02-burgers.jpeg', 'P0012'),
(13, 'Īpašais KWB', '---', '6.00', 'Uz vietas cepta, svaiga graudu maize, cūkgaļas kotlete, pildīta ar kūpinātu karbonādi un sieru, Čedaras siers, Aisberga salāti, svaigi tomāti, sweet čili mērcē glazēti sīpoli un paprika, ķiploku mērce.\r\n\r\n!!!Papildus iespējams pievienot bekonu + 0,50 EUR', 'burgers', 'A01, A03, A07, A10, A11', 'burgeri/03-burgers.jpeg', 'P0013'),
(14, 'KWB 10x', '3 kg', '29.99', '(paredzēts 10 personām):\r\nUz vietas cepta, svaiga graudu maize, 100 % liellopa gaļa, Čedaras siers,  kraukšķīgs bekons, smalcināti jaunie kāposti, svaigi tomāti, marinēti gurķi, maigi marinēti sīpoli, maigā adžikas mērce, ķiploku mērce.', 'burgers', 'A01, A03, A07, A10', 'burgeri/04-burgers.jpeg', 'P0014'),
(15, 'KWB MINI', '---', '2.00', 'Uz vietas cepta, svaiga graudu maize, 100 % liellopa gaļa, Čedaras siers, smalcināti jaunie kāposti, svaigs tomāts, maigā adžikas mērce, ķiploku mērce (iespējams izvēlēties arī kečupu un majonēzi).\r\n\r\n!!! 1 gb – €  2,00/ 10 gb – € 12,00', 'burgers', 'A01, A03, A07, A10', 'burgeri/05-burgers.jpeg', 'P0015'),
(16, 'Liellopa gaļas', '---', '4.00', 'Uz vietas cepta, svaiga graudu maize, 100% liellopa gaļa, Čedaras siers, smalcināti jaunie kāposti, svaigi tomāti, maigā adžikas mērce un ķiploku mērce.\r\n\r\nPapildus bezmaksas sastāvdaļas: Maigi marinēti sīpoli, marinēti gurķu kubiņi, Halapenjo pipari.\r\n\r\nPapildus maksas sastāvdaļas: \r\n\r\nBekons: € 0,50\r\n\r\nMarinēti šampinjoni: € 0,30\r\n\r\nCena: € 4.00\r\n\r\nbet ja - Dubultā gaļa un siers: € 5.50\r\n\r\n', 'burgers', '', 'burgeri/06-burgers.jpeg', 'P0016'),
(58, 'noasukums', '---', '0.00', 'sastāvdaļas', 'kategorija', 'alergēni', 'bilde', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produkti`
--
ALTER TABLE `produkti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produkti`
--
ALTER TABLE `produkti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
