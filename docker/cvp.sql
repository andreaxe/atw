-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2018 at 06:12 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 5.6.33-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvp`
--

-- --------------------------------------------------------

--
-- Table structure for table `evento`
--

CREATE TABLE `evento` (
  `ide` int(11) NOT NULL,
  `designacao` varchar(254) DEFAULT NULL,
  `local` varchar(500) NOT NULL,
  `coordenadas` text,
  `categoria` text NOT NULL,
  `dataevento` date NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `evento`
--

INSERT INTO `evento` (`ide`, `designacao`, `local`, `coordenadas`, `categoria`, `dataevento`, `ativo`) VALUES
(2, 'Teste Evento 2', 'Braga', '7, -48', 'resistÃªncia', '2018-02-10', 1),
(3, 'country hope advice', 'Vila Nova de Famalicão', '-8, 45.8', 'ultra-maratona', '2018-07-17', 1),
(4, 'setting motor officer', 'Braga', '-8, 45.8', 'marcha', '2018-01-17', 1),
(5, 'birthday chain sock', 'Vila Nova de Gaia', '-8, 45.8', 'passeio', '2018-06-21', 1),
(6, 'speed shop gear', 'Braga', '-8, 45.8', 'marcha', '2018-01-08', 1),
(7, 'seat return document', 'Coimbra', '-8, 45.8', 'marcha', '2018-10-28', 1),
(8, 'spray pie fire', 'Guimarães', '-8, 45.8', 'resistência', '2018-11-08', 1),
(9, 'preparation fishing maintenance', 'Amadora', '-8, 45.8', 'resistência', '2018-04-14', 1),
(10, 'tradition mouse grab', 'Braga', '-8, 45.8', 'cross country', '2018-03-19', 1),
(11, 'bell care ease', 'Coimbra', '-8, 45.8', 'passeio', '2018-04-12', 1),
(12, 'minor brush assistance', 'Seixal', '-8, 45.8', 'marcha', '2018-05-25', 1),
(13, 'boat bus teaching', 'Vila Franca de Xira', '-8, 45.8', 'ultra-maratona', '2018-11-28', 1),
(14, 'copy bet mixture', 'Guimarães', '-8, 45.8', 'duatlo', '2018-07-22', 1),
(15, 'voice bat quote', 'Guimarães', '-8, 45.8', 'montanha', '2018-12-24', 1),
(16, 'stick war error', 'Santa Maria da Feira', '-8, 45.8', 'ultra-maratona', '2018-08-12', 1),
(17, 'college food towel', 'Lisboa', '-8, 45.8', 'passeio', '2018-11-24', 1),
(18, 'cat image store', 'Matosinhos', '-8, 45.8', 'triatlo', '2018-04-18', 1),
(19, 'meaning slide chemical', 'Santa Maria da Feira', '-8, 45.8', 'marcha', '2018-04-11', 1),
(20, 'bus stage limit', 'Maia', '-8, 45.8', 'cross country', '2018-04-05', 1),
(22, 'procedure swimming tip', 'Porto', '-8, 45.8', 'obstáculos', '2018-01-02', 1),
(23, 'mark president remote', 'Gondomar', '-8, 45.8', 'montanha', '2018-04-27', 1),
(24, 'tale bag chicken', 'Lisboa', '-8, 45.8', 'meia-maratona', '2018-06-11', 1),
(25, 'creative state hook', 'Amadora', '-8, 45.8', 'cross country', '2018-05-20', 1),
(26, 'classroom bet plastic', 'Vila Nova de Famalicão', '-8, 45.8', 'duatlo', '2018-04-01', 1),
(27, 'profile print low', 'Cascais', '-8, 45.8', 'ultra-maratona', '2018-10-24', 1),
(28, 'grandmother restaurant candle', 'Maia', '-8, 45.8', 'maratona', '2018-06-27', 1),
(29, 'tune fuel champion', 'Amadora', '-8, 45.8', 'montanha', '2018-04-26', 1),
(30, 'activity spiritual meal', 'Vila Franca de Xira', '-8, 45.8', 'passeio', '2018-04-25', 1),
(31, 'abroad extension stroke', 'Santa Maria da Feira', '-8, 45.8', 'meia-maratona', '2018-12-02', 1),
(32, 'wing cook total', 'Braga', '-8, 45.8', 'maratona', '2018-04-08', 1),
(33, 'historian farm reach', 'Loures', '-8, 45.8', 'marcha', '2018-05-04', 1),
(34, 'person release specialist', 'Gondomar', '-8, 45.8', 'resistência', '2018-08-23', 1),
(35, 'tour appearance corner', 'Coimbra', '-8, 45.8', 'maratona', '2018-06-22', 1),
(36, 'button print appointment', 'Matosinhos', '-8, 45.8', 'passeio', '2018-11-02', 1),
(37, 'potential alternative fruit', 'Maia', '-8, 45.8', 'maratona', '2018-04-20', 1),
(38, 'analysis jacket camera', 'Santa Maria da Feira', '-8, 45.8', 'marcha', '2018-04-21', 1),
(39, 'repair region love', 'Santa Maria da Feira', '-8, 45.8', 'montanha', '2018-07-13', 1),
(40, 'magazine refuse case', 'Amadora', '-8, 45.8', 'marcha', '2018-04-14', 1),
(41, 'consequence accident sex', 'Porto', '-8, 45.8', 'resistência', '2018-07-16', 1),
(42, 'application fat influence', 'Gondomar', '-8, 45.8', 'ultra-maratona', '2018-04-24', 1),
(43, 'storage tell topic', 'Lisboa', '-8, 45.8', 'meia-maratona', '2018-01-16', 1),
(44, 'assist unique ideal', 'Coimbra', '-8, 45.8', 'resistência', '2018-06-04', 1),
(45, 'move audience coast', 'Santa Maria da Feira', '-8, 45.8', 'resistência', '2018-09-26', 1),
(46, 'weather limit technology', 'Lisboa', '-8, 45.8', 'marcha', '2018-08-27', 1),
(47, 'project cover literature', 'Vila Franca de Xira', '-8, 45.8', 'meia-maratona', '2018-05-13', 1),
(48, 'single inspection struggle', 'Vila Franca de Xira', '-8, 45.8', 'maratona', '2018-06-07', 1),
(49, 'addition fix round', 'Amadora', '-8, 45.8', 'obstáculos', '2018-06-11', 1),
(50, 'explanation senior piece', 'Vila Franca de Xira', '-8, 45.8', 'obstáculos', '2018-12-09', 1),
(51, 'soup entrance guide', 'Maia', '-8, 45.8', 'resistência', '2018-05-02', 1),
(52, 'physics press union', 'Seixal', '-8, 45.8', 'ultra-maratona', '2018-08-14', 1),
(53, 'entry hall month', 'Lisboa', '-8, 45.8', 'obstáculos', '2018-08-07', 1),
(54, 'idea wheel print', 'Seixal', '-8, 45.8', 'maratona', '2018-07-07', 1),
(55, 'share mess maintenance', 'Loures', '-8, 45.8', 'maratona', '2018-07-23', 1),
(56, 'mode use past', 'Santa Maria da Feira', '-8, 45.8', 'meia-maratona', '2018-12-01', 1),
(57, 'shift entry mirror', 'Cascais', '-8, 45.8', 'duatlo', '2018-10-14', 1),
(58, 'potato word abroad', 'Porto', '-8, 45.8', 'passeio', '2018-02-10', 1),
(59, 'committee device personality', 'Maia', '-8, 45.8', 'meia-maratona', '2018-01-09', 1),
(60, 'mail cheek week', 'Odivelas', '-8, 45.8', 'cross country', '2018-04-24', 1),
(61, 'sound special sea', 'Vila Nova de Famalicão', '-8, 45.8', 'ultra-maratona', '2018-01-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inscricoes`
--

CREATE TABLE `inscricoes` (
  `idutilizador` int(11) NOT NULL,
  `idprova` int(11) NOT NULL,
  `datainsc` date NOT NULL,
  `datalimite` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inscricoes`
--

INSERT INTO `inscricoes` (`idutilizador`, `idprova`, `datainsc`, `datalimite`) VALUES
(1, 3, '2018-02-08', '2018-02-08'),
(1, 5, '2018-02-08', '2018-02-08'),
(2, 1, '2018-02-08', '2018-02-08'),
(2, 3, '2018-02-08', '2018-02-08'),
(2, 6, '2018-02-08', '2018-02-08'),
(4, 1, '2018-02-08', '2018-02-08'),
(4, 3, '2018-02-08', '2018-02-08'),
(4, 6, '2018-02-08', '2018-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `prova`
--

CREATE TABLE `prova` (
  `idp` int(11) NOT NULL,
  `designacao` text NOT NULL,
  `hora` time NOT NULL,
  `idevento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prova`
--

INSERT INTO `prova` (`idp`, `designacao`, `hora`, `idevento`) VALUES
(1, 'Teste prova', '12:00:00', 2),
(3, 'Cenas birthday chain sock', '12:00:00', 5),
(5, 'Birthday prova', '13:00:00', 5),
(6, 'Cat image prova', '00:45:00', 18);

-- --------------------------------------------------------

--
-- Table structure for table `utilizador`
--

CREATE TABLE `utilizador` (
  `idu` int(11) NOT NULL,
  `nome` text NOT NULL,
  `nif` text,
  `cc` text,
  `datan` text,
  `email` text NOT NULL,
  `telef` text,
  `morada` varchar(500) DEFAULT NULL,
  `nacionalidade` text,
  `genero` text,
  `ativo` tinyint(1) NOT NULL DEFAULT '0',
  `senha` varchar(100) NOT NULL,
  `federado` tinyint(1) NOT NULL DEFAULT '0',
  `tempos` text,
  `tamanho` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilizador`
--

INSERT INTO `utilizador` (`idu`, `nome`, `nif`, `cc`, `datan`, `email`, `telef`, `morada`, `nacionalidade`, `genero`, `ativo`, `senha`, `federado`, `tempos`, `tamanho`) VALUES
(1, 'AndrÃ©', NULL, NULL, NULL, 'admin@admin.com', NULL, NULL, NULL, NULL, 0, '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 0, NULL, NULL),
(2, 'AndrÃ© Garcia Pinto', '248752979', NULL, NULL, 'andre.f.garcia@inesctec.pt', '935120942', NULL, '', NULL, 0, '8cb2237d0679ca88db6464eac60da96345513964', 0, NULL, NULL),
(3, 'Cristiano Ronaldo', NULL, NULL, NULL, 'cr7@gmail.com', NULL, NULL, NULL, NULL, 0, '8cb2237d0679ca88db6464eac60da96345513964', 0, NULL, NULL),
(4, 'Lionel Messi', '248752979', '12429825', '27/08/1984', 'andregarxia@gmail.com', '935120942', 'Rua das Flores', '', NULL, 1, '8cb2237d0679ca88db6464eac60da96345513964', 0, NULL, 'L'),
(5, 'Alexis', NULL, NULL, NULL, 'afg@inesctec.pt', NULL, NULL, NULL, NULL, 0, '8cb2237d0679ca88db6464eac60da96345513964', 0, NULL, NULL),
(6, 'Ana Paula Garcia', '248752979', '', '', 'afg@inesctec.pt', '', 'Rua D.Dinis 166 1ÂºEsq', '', 'Feminino', 0, '3818f520b729cf42c24b1e5d3ec1c92eb3815186', 0, '', 'XL'),
(7, 'Richard Lee', '268335158', '17192924', '02/22/1968', 'aljljca@hotmail.com', '73084836025', NULL, NULL, NULL, 0, '1180AH', 0, NULL, NULL),
(8, 'Timmy Hamilton', '271884365', '14167722', '05/21/1963', 'jkiflik@hotmail.com', '116272415481', NULL, NULL, NULL, 0, 'RVBRHU', 0, NULL, NULL),
(9, 'Pablo Quintana', '264772080', '10518070', '11/05/1980', 'laeigjh@mail.com', '163399025073', NULL, NULL, NULL, 0, '968QK2', 0, NULL, NULL),
(10, 'Paul Ho', '232789680', '14899619', '07/21/1979', 'aiaiick@hotmail.com', '144315486938', NULL, NULL, NULL, 0, 'ZUGSDE', 0, NULL, NULL),
(11, 'Cheryl Huffman', '230436876', '14199794', '05/15/2000', 'kjjgdjk@mail.kz', '54091656113', NULL, NULL, NULL, 0, '0ABQUD', 0, NULL, NULL),
(12, 'Anthony Bonifer', '207055589', '14130735', '07/09/1980', 'ecbegdh@hotmail.com', '99932825310', NULL, NULL, NULL, 0, 'RIA20J', 0, NULL, NULL),
(13, 'Clarence Alexander', '273723700', '19714710', '06/05/1978', 'efcbflj@mail.kz', '247319084093', NULL, NULL, NULL, 0, 'Q31E8I', 0, NULL, NULL),
(14, 'Anna Vaughn', '292164558', '19355395', '05/16/1974', 'fagjkih@hotmail.com', '68295887792', NULL, NULL, NULL, 0, 'CC7HS8', 0, NULL, NULL),
(15, 'Jennifer High', '203744070', '19812874', '04/02/1970', 'alkaaaj@mail.com', '319547314747', NULL, NULL, NULL, 0, 'S5E6US', 0, NULL, NULL),
(16, 'Francis Hunt', '251212408', '15957216', '05/27/1985', 'clajakg@hotmail.com', '251928695041', NULL, NULL, NULL, 0, 'Q4XDOQ', 0, NULL, NULL),
(17, 'Mark Brokaw', '209690731', '13688429', '03/28/1997', 'ecfidib@yahoo.com', '186285768935', NULL, NULL, NULL, 0, 'BJCGQD', 0, NULL, NULL),
(18, 'Mai Fisher', '270315359', '19949662', '04/28/1988', 'hekidfe@yahoo.com', '148652270243', NULL, NULL, NULL, 0, 'TJK0Y4', 0, NULL, NULL),
(19, 'Eugene Mcclendon', '273755148', '15651771', '08/16/1988', 'ghihiga@gmail.com', '218969134331', NULL, NULL, NULL, 0, 'BNZP1T', 0, NULL, NULL),
(20, 'Marie Moore', '248535348', '18991675', '04/12/1959', 'ldhkefe@yahoo.com', '316057698323', NULL, NULL, NULL, 0, 'UEVEVA', 0, NULL, NULL),
(21, 'Robert Heimsness', '208593345', '15690594', '09/27/1969', 'bjgghia@mail.kz', '340897076660', NULL, NULL, NULL, 0, '39FB24', 0, NULL, NULL),
(22, 'James Charles', '244145721', '19681945', '03/18/1956', 'kcfaffg@hotmail.com', '334003261766', NULL, NULL, NULL, 0, 'F8B7KO', 0, NULL, NULL),
(23, 'Wanda Shoaf', '248509886', '14510517', '05/13/1967', 'fkikbga@mail.kz', '192970770862', NULL, NULL, NULL, 0, 'SRVHEW', 0, NULL, NULL),
(24, 'Kimberly Quiles', '239135387', '19771572', '12/21/2000', 'jelckfd@mail.kz', '316834456534', NULL, NULL, NULL, 0, 'RNFTP2', 0, NULL, NULL),
(25, 'Sarah Wallace', '224211177', '13224927', '07/26/1975', 'kfihcbf@gmail.com', '165624776820', NULL, NULL, NULL, 0, 'J9MORX', 0, NULL, NULL),
(26, 'James Jones', '210725267', '10260265', '11/27/1953', 'fhcecfi@mail.com', '56856730625', NULL, NULL, NULL, 0, '3AG9MF', 0, NULL, NULL),
(27, 'Florence Stigers', '266937290', '19900280', '09/27/1978', 'dhkadgc@mail.com', '315488166028', NULL, NULL, NULL, 0, '7EA89M', 0, NULL, NULL),
(28, 'Manuel Johnston', '217775776', '16818671', '08/02/1959', 'fbkajjc@aol.com', '224063818332', NULL, NULL, NULL, 0, 'WHDCQJ', 0, NULL, NULL),
(29, 'Arlene Lucius', '262519198', '15846829', '12/25/1958', 'eiiglil@hotmail.com', '124447958442', NULL, NULL, NULL, 0, 'WQB1HS', 0, NULL, NULL),
(30, 'Ruth Necaise', '260859060', '12898961', '07/13/1981', 'afdajhk@gmail.com', '153625302616', NULL, NULL, NULL, 0, 'Y4L8T1', 0, NULL, NULL),
(31, 'Gerald Doran', '232603000', '13985577', '05/20/1999', 'bijbbbi@yahoo.com', '204248618385', NULL, NULL, NULL, 0, '9PK19A', 0, NULL, NULL),
(32, 'Richard Jurczyk', '263853776', '11012201', '06/25/1951', 'aikeble@mail.kz', '138335183100', NULL, NULL, NULL, 0, 'IJNR20', 0, NULL, NULL),
(33, 'John Dobek', '276197775', '17102830', '12/12/1953', 'aibcagl@gmail.com', '178927887997', NULL, NULL, NULL, 0, 'K3TIP6', 0, NULL, NULL),
(34, 'Paula Russo', '247670582', '12524068', '01/21/1961', 'bdbfegk@yahoo.com', '188755372383', NULL, NULL, NULL, 0, '1VHUF1', 0, NULL, NULL),
(35, 'Raymond Elton', '204510997', '16070879', '02/24/1972', 'kliijbh@yahoo.com', '260080069770', NULL, NULL, NULL, 0, '3D2MIV', 0, NULL, NULL),
(36, 'Howard Colby', '206223202', '16529667', '12/15/1967', 'fcfhhib@mail.com', '67945152867', NULL, NULL, NULL, 0, 'HKRC8G', 0, NULL, NULL),
(37, 'Gordon Sturman', '221967379', '15493234', '06/27/1954', 'fdebiel@gmail.com', '180666154677', NULL, NULL, NULL, 0, 'HYPUT3', 0, NULL, NULL),
(38, 'Mary Benack', '233834842', '19080341', '11/17/1952', 'bcefaek@gmail.com', '226614639150', NULL, NULL, NULL, 0, 'J1OC5K', 0, NULL, NULL),
(39, 'James Tresvant', '291569036', '19048394', '08/18/1961', 'jccihal@gmail.com', '64168537191', NULL, NULL, NULL, 0, 'WMUNPO', 0, NULL, NULL),
(40, 'Ruth Horne', '289680279', '15147876', '03/21/1959', 'bfdhjjk@hotmail.com', '86403928517', NULL, NULL, NULL, 0, '4R813R', 0, NULL, NULL),
(41, 'James Dahl', '293169574', '15014371', '12/04/1960', 'fbgfgdl@yahoo.com', '154963962369', NULL, NULL, NULL, 0, 'FLQHOH', 0, NULL, NULL),
(42, 'Paula Hawkins', '256549019', '12388873', '02/09/1956', 'dlhfhjc@mail.com', '88253933202', NULL, NULL, NULL, 0, 'FP97S4', 0, NULL, NULL),
(43, 'Shelley Martin', '237598864', '13045356', '09/16/1951', 'ldahbka@mail.kz', '292650707018', NULL, NULL, NULL, 0, '6G2VSC', 0, NULL, NULL),
(44, 'Drew Richard', '236187699', '12172590', '01/23/1971', 'kcafbhj@mail.kz', '64386597863', NULL, NULL, NULL, 0, 'S6JT49', 0, NULL, NULL),
(45, 'Adam Landis', '234929596', '15502524', '12/14/1955', 'fgjlcak@aol.com', '279577997840', NULL, NULL, NULL, 0, 'U2UZZ6', 0, NULL, NULL),
(46, 'Sandra Smith', '251731847', '15177722', '09/09/1987', 'liiicij@aol.com', '277916522186', NULL, NULL, NULL, 0, 'ZNNCYC', 0, NULL, NULL),
(47, 'Leroy Powers', '251959472', '17514855', '09/07/1969', 'gkhaikb@mail.com', '317057921851', NULL, NULL, NULL, 0, 'V8MZSJ', 0, NULL, NULL),
(48, 'Jeannette Boll', '207747710', '10759866', '10/03/1966', 'bflffgg@gmail.com', '221778235949', NULL, NULL, NULL, 0, '75IJ9J', 0, NULL, NULL),
(49, 'Mammie Thomas', '280448642', '11253726', '12/02/1953', 'lkabajb@mail.kz', '228847045638', NULL, NULL, NULL, 0, 'X5MB24', 0, NULL, NULL),
(50, 'Christopher Dunlap', '256418444', '19505730', '04/22/1956', 'ldgbcib@yahoo.com', '203126196389', NULL, NULL, NULL, 0, 'TCKHE5', 0, NULL, NULL),
(51, 'Jessie Schneider', '285818080', '10855625', '05/03/1996', 'kljllek@aol.com', '111325166567', NULL, NULL, NULL, 0, 'M80Y7Q', 0, NULL, NULL),
(52, 'Nellie Schwass', '215318168', '10207080', '04/28/1990', 'agjehgi@mail.kz', '179600384082', NULL, NULL, NULL, 0, 'DIXTFI', 0, NULL, NULL),
(53, 'Janice Brill', '284597947', '10672712', '11/26/1989', 'akdkbfc@yahoo.com', '219168435571', NULL, NULL, NULL, 0, '44PKGB', 0, NULL, NULL),
(54, 'David Shaw', '289983501', '10497871', '04/17/1959', 'ilkbalg@aol.com', '271708540220', NULL, NULL, NULL, 0, 'G5PPA6', 0, NULL, NULL),
(55, 'Ralph Lebo', '287378007', '15131260', '03/11/1985', 'kdflkac@hotmail.com', '116377773493', NULL, NULL, NULL, 0, 'R5MRQC', 0, NULL, NULL),
(56, 'Stephanie Kim', '285822097', '15929123', '08/12/1988', 'hkglekh@mail.kz', '179040699510', NULL, NULL, NULL, 0, 'BYAIKM', 0, NULL, NULL),
(57, 'Lola Vine', '257405540', '18396543', '01/13/1970', 'ceibchf@hotmail.com', '269613490474', NULL, NULL, NULL, 0, 'C3VRQH', 0, NULL, NULL),
(58, 'Margaret Balkcom', '247221590', '17069399', '10/28/1967', 'jdeadbj@aol.com', '40617027650', NULL, NULL, NULL, 0, 'JQ9DET', 0, NULL, NULL),
(59, 'David Anton', '219850316', '11497804', '07/07/1990', 'hgijbfi@hotmail.com', '121115752495', NULL, NULL, NULL, 0, 'J0D6NG', 0, NULL, NULL),
(60, 'John Kaminski', '250193401', '12104043', '08/26/1972', 'lccgacc@gmail.com', '57576210723', NULL, NULL, NULL, 0, '8T000F', 0, NULL, NULL),
(61, 'Ela Parra', '232068206', '10161586', '09/24/1976', 'babiahc@yahoo.com', '233305257322', NULL, NULL, NULL, 0, '7XKPGC', 0, NULL, NULL),
(62, 'Nora Clos', '247500241', '11587927', '07/22/1985', 'cekefli@mail.kz', '323873173160', NULL, NULL, NULL, 0, 'V5ZRDN', 0, NULL, NULL),
(63, 'Juan Altman', '236783053', '10159757', '06/21/1961', 'dchedbk@yahoo.com', '304924438154', NULL, NULL, NULL, 0, 'BMSVNG', 0, NULL, NULL),
(64, 'Eric Scharich', '237515596', '19085606', '10/25/1996', 'hkciall@gmail.com', '71178976100', NULL, NULL, NULL, 0, 'H3IPLN', 0, NULL, NULL),
(65, 'Mary Perkins', '264411421', '11190741', '01/24/1987', 'igablhd@hotmail.com', '275246565286', NULL, NULL, NULL, 0, '16MU7N', 0, NULL, NULL),
(66, 'Delores Reynolds', '288647767', '11510112', '03/08/1958', 'lbafbfe@hotmail.com', '221099253150', NULL, NULL, NULL, 0, 'L4XRB4', 0, NULL, NULL),
(67, 'Mary East', '274601729', '12087875', '09/20/1964', 'dagdifd@gmail.com', '246430676339', NULL, NULL, NULL, 0, '2VP86Z', 0, NULL, NULL),
(68, 'Richard Smith', '285533607', '14080406', '08/23/1969', 'afikldl@hotmail.com', '110507514002', NULL, NULL, NULL, 0, 'RO46TC', 0, NULL, NULL),
(69, 'Scott Garcia', '282436480', '16827737', '02/06/1952', 'jffcifj@yahoo.com', '152167340456', NULL, NULL, NULL, 0, 'Q714OF', 0, NULL, NULL),
(70, 'Diane Macfarlane', '261739408', '10296931', '01/23/1962', 'bgjdbej@aol.com', '169912174501', NULL, NULL, NULL, 0, 'UD4XKM', 0, NULL, NULL),
(71, 'Carlos Ingwersen', '293498203', '11650909', '02/25/1971', 'ihhcgja@aol.com', '82958695893', NULL, NULL, NULL, 0, '4N9WSH', 0, NULL, NULL),
(72, 'Frank Gurule', '226182449', '16953716', '12/24/1955', 'cegdjki@gmail.com', '178935231585', NULL, NULL, NULL, 0, '306E46', 0, NULL, NULL),
(73, 'Leonard Searles', '278577986', '19176216', '10/18/1972', 'hjiaelj@yahoo.com', '208918210484', NULL, NULL, NULL, 0, 'RG36JN', 0, NULL, NULL),
(74, 'Gale Small', '209941902', '14738980', '09/22/1975', 'fflelhe@aol.com', '131550093782', NULL, NULL, NULL, 0, 'RKPD0H', 0, NULL, NULL),
(75, 'Richard Beckwith', '274620106', '18922418', '08/05/1985', 'djhbjde@mail.kz', '41781271701', NULL, NULL, NULL, 0, 'F3G1A8', 0, NULL, NULL),
(76, 'Aida Evans', '276251075', '16655246', '12/28/1983', 'deifhah@mail.kz', '199485611771', NULL, NULL, NULL, 0, 'WVLSFM', 0, NULL, NULL),
(77, 'John Porter', '256544590', '13581513', '08/22/1961', 'algilcg@mail.kz', '214000422380', NULL, NULL, NULL, 0, '3XV3Y2', 0, NULL, NULL),
(78, 'Margaret Coates', '217570619', '16486078', '02/04/1987', 'dlblekd@gmail.com', '142161968275', NULL, NULL, NULL, 0, '8IJJXI', 0, NULL, NULL),
(79, 'Andrew Spillman', '216483380', '15668265', '09/15/1951', 'agggekc@mail.kz', '183799309343', NULL, NULL, NULL, 0, '98FYLI', 0, NULL, NULL),
(80, 'Darlene Nicolls', '252592123', '14813151', '01/10/1963', 'ekaaflg@aol.com', '276898423176', NULL, NULL, NULL, 0, '7LQXMW', 0, NULL, NULL),
(81, 'Jerry Matthews', '240521616', '14763854', '11/26/1951', 'eelilkj@mail.com', '47428174253', NULL, NULL, NULL, 0, '3WYBTQ', 0, NULL, NULL),
(82, 'Marvin Cantu', '251362352', '17683708', '08/20/1974', 'echabgc@gmail.com', '335166637561', NULL, NULL, NULL, 0, 'P1PJG5', 0, NULL, NULL),
(83, 'Eduardo Green', '208413774', '13512483', '06/04/1966', 'lggeejc@mail.com', '45356804589', NULL, NULL, NULL, 0, '8T1F8G', 0, NULL, NULL),
(84, 'Peggy Cartwright', '273688459', '11306604', '03/07/1984', 'dgegacd@yahoo.com', '232170537877', NULL, NULL, NULL, 0, 'WG7AUK', 0, NULL, NULL),
(85, 'Ron Swanson', '266529626', '12700500', '04/18/1968', 'lkhekag@mail.kz', '289866690027', NULL, NULL, NULL, 0, 'U53YSE', 0, NULL, NULL),
(86, 'Lindsey Anderson', '233097335', '11921310', '01/11/1999', 'kdgdelg@mail.com', '323403952120', NULL, NULL, NULL, 0, 'I12AWQ', 0, NULL, NULL),
(87, 'Naomi King', '244661093', '14464768', '02/26/1983', 'ehjjglk@gmail.com', '142661436651', NULL, NULL, NULL, 0, 'EV4T4A', 0, NULL, NULL),
(88, 'John Fricks', '260576419', '17078286', '02/10/1951', 'aieielh@yahoo.com', '160060689788', NULL, NULL, NULL, 0, '39S2ET', 0, NULL, NULL),
(89, 'Rose Fisher', '228123686', '18703924', '04/16/1980', 'ijbdlla@hotmail.com', '113785544571', NULL, NULL, NULL, 0, 'YQH1NJ', 0, NULL, NULL),
(90, 'Sonya Elder', '257361847', '16308107', '01/19/1991', 'aflbdgk@aol.com', '211268252892', NULL, NULL, NULL, 0, '63E38W', 0, NULL, NULL),
(91, 'Morris Bedwell', '222724139', '16841848', '07/09/1952', 'hdckedi@yahoo.com', '347068911589', NULL, NULL, NULL, 0, 'EK521D', 0, NULL, NULL),
(92, 'Mattie Martin', '206447651', '14147440', '06/18/1993', 'dgedkdf@hotmail.com', '38697682427', NULL, NULL, NULL, 0, 'K6AEE2', 0, NULL, NULL),
(93, 'Zenaida Hallenbeck', '273025050', '11349802', '10/14/1964', 'bacaecl@mail.com', '296357323462', NULL, NULL, NULL, 0, 'OS089X', 0, NULL, NULL),
(94, 'John Wenstrom', '265504416', '11363543', '08/06/1975', 'fbkicaj@aol.com', '221444373495', NULL, NULL, NULL, 0, '4TR0HG', 0, NULL, NULL),
(95, 'Jacqueline Guzman', '278244700', '17062793', '10/18/1985', 'bakjeke@aol.com', '236232308425', NULL, NULL, NULL, 0, 'NDHY3M', 0, NULL, NULL),
(96, 'Brian Licursi', '203856580', '19273766', '04/18/1968', 'edfjfgl@yahoo.com', '289667099205', NULL, NULL, NULL, 0, 'YQ7K1L', 0, NULL, NULL),
(97, 'Mary Ross', '276800512', '17728899', '08/20/1971', 'dhbleec@hotmail.com', '325436530902', NULL, NULL, NULL, 0, 'G1A262', 0, NULL, NULL),
(98, 'Nellie Shasteen', '261190092', '18777675', '09/12/1972', 'fiafcfc@hotmail.com', '116755314486', NULL, NULL, NULL, 0, 'UQ13IR', 0, NULL, NULL),
(99, 'Tina Brown', '255339840', '18316994', '06/15/1968', 'khcadkb@mail.com', '331341052301', NULL, NULL, NULL, 0, '0FBAOZ', 0, NULL, NULL),
(100, 'Florence Groves', '289760767', '11410167', '01/16/1993', 'hcklgdc@aol.com', '312449557996', NULL, NULL, NULL, 0, '0M3QHC', 0, NULL, NULL),
(101, 'Steven Kopf', '216874110', '19769182', '01/15/1968', 'ddefkdb@gmail.com', '213181409935', NULL, NULL, NULL, 0, 'KHGBSQ', 0, NULL, NULL),
(102, 'Mary Lake', '279547777', '16626491', '01/12/1988', 'dkggchb@yahoo.com', '334174408523', NULL, NULL, NULL, 0, 'D3HXLK', 0, NULL, NULL),
(103, 'William Pierce', '237636746', '19253278', '11/08/1963', 'iidfjfg@gmail.com', '218602530373', NULL, NULL, NULL, 0, 'XF75C7', 0, NULL, NULL),
(104, 'Patrick Dee', '214188477', '14922419', '07/04/1956', 'klcklfk@aol.com', '131624896006', NULL, NULL, NULL, 0, '7744NQ', 0, NULL, NULL),
(105, 'Katrina Gokey', '299482749', '14902053', '09/10/1989', 'cafddkc@hotmail.com', '65831821827', NULL, NULL, NULL, 0, '4NS756', 0, NULL, NULL),
(106, 'Shani Jensen', '275482128', '17841646', '10/05/1984', 'fbkghjl@aol.com', '88320316746', NULL, NULL, NULL, 0, '0F2V2G', 0, NULL, NULL),
(107, 'Freddy Pimentel', '206967733', '16190532', '11/14/1979', 'aldjjee@mail.com', '97555524015', NULL, NULL, NULL, 0, '78006A', 0, NULL, NULL),
(108, 'Teste2', '23123123', '3423423', '3423423', 'teste@teste.pt', '935120942', 'Rua D.Dinis 166 1ÂºEsq', 'portuguese', 'Masculino', 0, 'fb6aa43a919b30d78b30b6879c0b8d406abe1541', 0, 'ss', 'XL'),
(109, 'Teste3', '23123123', '3423423', '3423423', 'teste@teste.pt', '935120942', 'Rua D.Dinis 166 1ÂºEsq', 'portuguese', 'Masculino', 0, 'eaf2d390f2f197fdc7d86be9a06f43c0e667dd4b', 0, 'sdasda', 'XXL'),
(110, 'teste3', '23123123', '3423423', '3423423', 'teste3@teste.pt', '227122137', 'Rua D.Dinis 166 1ÂºEsq', 'portuguese', 'Feminino', 0, '08d3cc188d3cbd8551778ebb21c2e798eb238fbe', 0, 'ds', 'XXL'),
(111, 'teste3', '23123123', '3423423', '3423423', 'teste3@teste.pt', '227122137', 'Rua D.Dinis 166 1ÂºEsq', 'portuguese', 'Feminino', 0, 'b0aa62310314d55f2ccf26995ebedefe2ba34907', 0, 'ds', 'XXL'),
(112, 'Teste4', '11123', '123456', '123456', 'teste4@teste4.pt', '935120942', 'Rua D.Dinis 166 1ÂºEsq', 'afghan', 'Feminino', 0, 'ef8b278cbfdfcd0a99fb0254aff71637097bd468', 0, 's', 'M'),
(113, 'Activar', '23123123', '3423423', '3423423', 'andrefgarcia@live.com.pt2', '2232', 'Accra, sfdfasfsda', 'american', 'Masculino', 1, 'a003a70ce08e0f1041803e585e9ce4a9a745cfd6', 0, 'dasfafsa', 'sdas'),
(114, 'AndrÃ© Garcia', '23123123', '3423423', '3423423', 'andregarxia@gmail.com', '935120942', 'Rua D.Dinis 166 1ÂºEsq', 'portuguese', 'Masculino', 1, 'f3929e0c29bc9d495366aa055ba0a927979d2103', 0, 'sdasda', 'M'),
(115, 'AndrÃ© Garcia', '23123123', '3423423', '3423423', 'andregarxia@gmail.com', '935120942', 'Rua D.Dinis 166 1ÂºEsq', 'portuguese', 'Masculino', 1, '7ad4dca9498e9c754cd1ef8fd17e18dd8b690768', 0, 'sdasda', 'M'),
(116, 'AndrÃ© Garcia', '23123123', '3423423', '3423423', 'andregarxia@gmail.com222', '935120942', 'Rua D.Dinis 166 1ÂºEsq', 'portuguese', 'Masculino', 1, 'ec2681f5d3feebc85932e0dba7a51c277e3f89c5', 0, 'sdasda', 'M'),
(117, 'AndrÃ© Garcia', '23123123', '3423423', '3423423', 'andregarxia@gmail.com2223', '935120942', 'Rua D.Dinis 166 1ÂºEsq', 'portuguese', 'Masculino', 1, 'd0203e2a37d4e8ba726ccddf0a7a936429dff55b', 1, 'sdasda', 'M'),
(118, 'AndrÃ© Garcia', 'a', 'a', 'a', 'andrefgarcia@live.com.pt', '935120942', 'Rua D.Dinis 166 1ÂºEsq', 'portuguese', 'Masculino', 1, '67317eb115ef055e6d3a00b905addd48fe02aa3d', 1, 'sds', 'sd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`ide`);

--
-- Indexes for table `inscricoes`
--
ALTER TABLE `inscricoes`
  ADD PRIMARY KEY (`idutilizador`,`idprova`);

--
-- Indexes for table `prova`
--
ALTER TABLE `prova`
  ADD PRIMARY KEY (`idp`);

--
-- Indexes for table `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`idu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evento`
--
ALTER TABLE `evento`
  MODIFY `ide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `prova`
--
ALTER TABLE `prova`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `idu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
