-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 11:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'sunnygkp10@gmail.com', '123456'),
(2, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('55892169bf6a7', '55892169d2efc'),
('5589216a3646e', '5589216a48722'),
('558922117fcef', '5589221195248'),
('55892211e44d5', '55892211f1fa7'),
('558922894c453', '558922895ea0a'),
('558922899ccaa', '55892289aa7cf'),
('558923538f48d', '558923539a46c'),
('55892353f05c4', '55892354051be'),
('558973f4389ac', '558973f462e61'),
('558973f4c46f2', '558973f4d4abe'),
('558973f51600d', '558973f526fc5'),
('558973f55d269', '558973f57af07'),
('558973f5abb1a', '558973f5e764a'),
('5589751a63091', '5589751a81bf4'),
('5589751ad32b8', '5589751adbdbd'),
('5589751b304ef', '5589751b3b04d'),
('5589751b749c9', '5589751b9a98c'),
('6536bddf5380b', '6536bddf540e3'),
('6536bddf579df', '6536bddf58245'),
('6536bddf5b0a2', '6536bddf5bd31'),
('653a8dd4809a8', '653a8dd484bd0'),
('653a8dd48d592', '653a8dd48dc2b'),
('653f4f1416741', '653f4f1417577'),
('653f4f141ade1', '653f4f141b97d'),
('653fed0106283', '653fed010846d'),
('65436d010214a', '65436d010cfc6'),
('654b099ba19fe', '654b099ba210b'),
('654b099ba4ec9', '654b099ba58d0'),
('654b099ba77b6', '654b099ba7e54'),
('654b099baa33e', '654b099baaa96'),
('654b099bb0a50', '654b099bb2d3d'),
('654b0c3241a8b', '654b0c3242251'),
('654b0c3244bd2', '654b0c3245415'),
('654b0c3248652', '654b0c3248fa1'),
('654b0c324b24b', '654b0c324b920'),
('654b0c324f1ae', '654b0c324f8ea'),
('654b2423d7e2f', '654b2423d9219'),
('654b2423ddee5', '654b2423de756'),
('654b2423e0896', '654b2423e0e1c'),
('654b2423e2fb6', '654b2423e3573'),
('654b2423e546c', '654b2423e5bc7'),
('654b316700147', '654b316700b9d'),
('654b316ceab93', '654b316ceb483'),
('654bc8841dbc4', '654bc8841ef48'),
('654bc88421c04', '654bc884222c3'),
('654bc88424585', '654bc88424b82'),
('654bc88426cf2', '654bc884273fc'),
('654bcaf2370c5', '654bcaf237b7a'),
('654bcaf239751', '654bcaf239d91'),
('654bcaf23bcc7', '654bcaf23c5ad'),
('654bcaf23d702', '654bcaf23d948'),
('654bcaf23e503', '654bcaf23e7e8'),
('654bcaf23face', '654bcaf241550'),
('654bcaf243aed', '654bcaf243df1'),
('654bcaf244b7b', '654bcaf244e46'),
('654bcaf245fc6', '654bcaf246361'),
('654bcaf246ff1', '654bcaf247401');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('nik1@gmail.com', '558921841f1ec', 1, 2, 1, 1, '2015-06-23 16:11:50'),
('shakil@gmail.com', '558920ff906b8', 1, 2, 1, 1, '2023-10-26 18:21:17'),
('shakil@gmail.com', '6536bda213681', 1, 3, 2, 1, '2023-10-30 05:23:53'),
('shakil@gmail.com', '653f4ed8cad10', 4, 2, 2, 0, '2023-10-30 06:38:21'),
('admin@admin.com', '653fecc80677c', 1, 1, 1, 0, '2023-10-30 17:51:07'),
('admin@admin.com', '55897338a6659', 1, 5, 2, 3, '2023-11-07 04:47:56'),
('admin@admin.com', '654b08cb3cf17', 5, 5, 5, 0, '2023-11-08 04:08:46'),
('admin@admin.com', '654b0b2eb5b64', 5, 5, 5, 0, '2023-11-08 04:19:50'),
('admin@admin.com', '654b28d8b7cb4', 1, 1, 1, 0, '2023-11-08 08:28:08'),
('nurehafsa@gmail.com', '654b28d8b7cb4', 1, 1, 1, 0, '2023-11-08 09:36:31'),
('deepanwita.cse7.bu@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2023-11-08 17:56:10'),
('deepanwita.cse7.bu@gmail.com', '653a8c2ae7bce', -2, 2, 0, 2, '2023-11-08 17:58:07'),
('admin@admin.com', '654bc76928e2b', 4, 4, 4, 0, '2023-11-08 18:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('55892169bf6a7', 'usermod', '55892169d2efc'),
('55892169bf6a7', 'useradd', '55892169d2f05'),
('55892169bf6a7', 'useralter', '55892169d2f09'),
('55892169bf6a7', 'groupmod', '55892169d2f0c'),
('5589216a3646e', '751', '5589216a48713'),
('5589216a3646e', '752', '5589216a4871a'),
('5589216a3646e', '754', '5589216a4871f'),
('5589216a3646e', '755', '5589216a48722'),
('558922117fcef', 'echo', '5589221195248'),
('558922117fcef', 'print', '558922119525a'),
('558922117fcef', 'printf', '5589221195265'),
('558922117fcef', 'cout', '5589221195270'),
('55892211e44d5', 'int a', '55892211f1f97'),
('55892211e44d5', '$a', '55892211f1fa7'),
('55892211e44d5', 'long int a', '55892211f1fb4'),
('55892211e44d5', 'int a$', '55892211f1fbd'),
('558922894c453', 'cin>>a;', '558922895ea0a'),
('558922894c453', 'cin<<a;', '558922895ea26'),
('558922894c453', 'cout>>a;', '558922895ea34'),
('558922894c453', 'cout<a;', '558922895ea41'),
('558922899ccaa', 'cout', '55892289aa7cf'),
('558922899ccaa', 'cin', '55892289aa7df'),
('558922899ccaa', 'print', '55892289aa7eb'),
('558922899ccaa', 'printf', '55892289aa7f5'),
('558923538f48d', '255.0.0.0', '558923539a46c'),
('558923538f48d', '255.255.255.0', '558923539a480'),
('558923538f48d', '255.255.0.0', '558923539a48b'),
('558923538f48d', 'none of these', '558923539a495'),
('55892353f05c4', '192.168.1.100', '5589235405192'),
('55892353f05c4', '172.168.16.2', '55892354051a3'),
('55892353f05c4', '10.0.0.0.1', '55892354051b4'),
('55892353f05c4', '11.11.11.11', '55892354051be'),
('558973f4389ac', 'containing root file-system required during bootup', '558973f462e44'),
('558973f4389ac', ' Contains only scripts to be executed during bootup', '558973f462e56'),
('558973f4389ac', ' Contains root-file system and drivers required to be preloaded during bootup', '558973f462e61'),
('558973f4389ac', 'None of the above', '558973f462e6b'),
('558973f4c46f2', 'Kernel', '558973f4d4abe'),
('558973f4c46f2', 'Shell', '558973f4d4acf'),
('558973f4c46f2', 'Commands', '558973f4d4ad9'),
('558973f4c46f2', 'Script', '558973f4d4ae3'),
('558973f51600d', 'Boot Loading', '558973f526f9d'),
('558973f51600d', ' Boot Record', '558973f526fb9'),
('558973f51600d', ' Boot Strapping', '558973f526fc5'),
('558973f51600d', ' Booting', '558973f526fce'),
('558973f55d269', ' Quick boot', '558973f57aef1'),
('558973f55d269', 'Cold boot', '558973f57af07'),
('558973f55d269', ' Hot boot', '558973f57af17'),
('558973f55d269', ' Fast boot', '558973f57af27'),
('558973f5abb1a', 'bash', '558973f5e7623'),
('558973f5abb1a', ' Csh', '558973f5e7636'),
('558973f5abb1a', ' ksh', '558973f5e7640'),
('558973f5abb1a', ' sh', '558973f5e764a'),
('5589751a63091', 'q', '5589751a81bd6'),
('5589751a63091', 'wq', '5589751a81be8'),
('5589751a63091', ' both (a) and (b)', '5589751a81bf4'),
('5589751a63091', ' none of the mentioned', '5589751a81bfd'),
('5589751ad32b8', ' moves screen down one page', '5589751adbdbd'),
('5589751ad32b8', 'moves screen up one page', '5589751adbdce'),
('5589751ad32b8', 'moves screen up one line', '5589751adbdd8'),
('5589751ad32b8', ' moves screen down one line', '5589751adbde2'),
('5589751b304ef', ' yy', '5589751b3b04d'),
('5589751b304ef', 'yw', '5589751b3b05e'),
('5589751b304ef', 'yc', '5589751b3b069'),
('5589751b304ef', ' none of the mentioned', '5589751b3b073'),
('5589751b749c9', 'X', '5589751b9a98c'),
('5589751b749c9', 'x', '5589751b9a9a5'),
('5589751b749c9', 'D', '5589751b9a9b7'),
('5589751b749c9', 'd', '5589751b9a9c9'),
('5589751bd02ec', 'autoindentation is not possible in vi editor', '5589751bdadaa'),
('6536bddf5380b', 'KFJDFO', '6536bddf540e3'),
('6536bddf5380b', 'B', '6536bddf540ec'),
('6536bddf5380b', 'C', '6536bddf540ed'),
('6536bddf5380b', 'D', '6536bddf540ee'),
('6536bddf579df', 'AFD', '6536bddf58240'),
('6536bddf579df', 'B', '6536bddf58245'),
('6536bddf579df', 'C', '6536bddf58246'),
('6536bddf579df', 'D', '6536bddf58247'),
('6536bddf5b0a2', 'SDAFASDFASFDDF', '6536bddf5bd27'),
('6536bddf5b0a2', 'DSAF', '6536bddf5bd2f'),
('6536bddf5b0a2', 'SFSD', '6536bddf5bd30'),
('6536bddf5b0a2', 'ASFSD', '6536bddf5bd31'),
('653a8dd4809a8', 'Microarchitecture', '653a8dd484bca'),
('653a8dd4809a8', 'Harvard Architecture', '653a8dd484bce'),
('653a8dd4809a8', 'Von-Neumann Architecture', '653a8dd484bcf'),
('653a8dd4809a8', ' All of the mentioned', '653a8dd484bd0'),
('653a8dd48d592', ' Very Long Instruction Width', '653a8dd48dc26'),
('653a8dd48d592', ' Very Large Instruction Word', '653a8dd48dc29'),
('653a8dd48d592', 'Very Long Instruction Width', '653a8dd48dc2a'),
('653a8dd48d592', 'Very Long Instruction Word', '653a8dd48dc2b'),
('653f4f1416741', 'a', '653f4f1417577'),
('653f4f1416741', 'b', '653f4f14175b8'),
('653f4f1416741', 'c', '653f4f14175bc'),
('653f4f1416741', 'd', '653f4f14175be'),
('653f4f141ade1', 'a', '653f4f141b970'),
('653f4f141ade1', 'bbb', '653f4f141b97d'),
('653f4f141ade1', 'ccc', '653f4f141b980'),
('653f4f141ade1', 'dddddddddddddd', '653f4f141b983'),
('653fed0106283', 'ans a', '653fed010846d'),
('653fed0106283', 'option b', '653fed0108473'),
('653fed0106283', 'option c', '653fed0108474'),
('653fed0106283', 'option d', '653fed0108475'),
('65436d010214a', 'sksfsfsddf', '65436d010cfc6'),
('65436d010214a', 'dfd', '65436d010cfd0'),
('65436d010214a', 'dfdf', '65436d010cfd1'),
('65436d010214a', 'dfdf', '65436d010cfd2'),
('654b099ba19fe', 'Merge Sort', '654b099ba2104'),
('654b099ba19fe', 'Quick Sort', '654b099ba210a'),
('654b099ba19fe', 'Bubble Sort', '654b099ba210b'),
('654b099ba19fe', 'Radix Sort', '654b099ba210c'),
('654b099ba4ec9', 'Quick Sort', '654b099ba58d0'),
('654b099ba4ec9', 'Insertion Sort', '654b099ba58d6'),
('654b099ba4ec9', 'Selection Sort', '654b099ba58d7'),
('654b099ba4ec9', 'Radix Sort', '654b099ba58d8'),
('654b099ba77b6', 'Selection Sort', '654b099ba7e4b'),
('654b099ba77b6', 'Insertion Sort', '654b099ba7e53'),
('654b099ba77b6', ' Heap Sort', '654b099ba7e54'),
('654b099ba77b6', 'Radix Sort', '654b099ba7e55'),
('654b099baa33e', ' Bubble Sort', '654b099baaa8e'),
('654b099baa33e', 'Radix Sort', '654b099baaa95'),
('654b099baa33e', 'Merge Sort', '654b099baaa96'),
('654b099baa33e', 'Selection Sort', '654b099baaa98'),
('654b099bb0a50', 'Bubble Sort', '654b099bb2d37'),
('654b099bb0a50', 'Selection Sort', '654b099bb2d3c'),
('654b099bb0a50', ' Insertion Sort', '654b099bb2d3d'),
('654b099bb0a50', 'Quick Sort', '654b099bb2d3e'),
('654b0c3241a8b', 'A key used for encryption', '654b0c324224b'),
('654b0c3241a8b', 'A unique identifier for a record', '654b0c3242251'),
('654b0c3241a8b', 'A foreign key from another table', '654b0c3242252'),
('654b0c3241a8b', 'A key used for sorting', '654b0c3242253'),
('654b0c3244bd2', 'SELECT', '654b0c3245415'),
('654b0c3244bd2', 'INSERT', '654b0c324541d'),
('654b0c3244bd2', 'UPDATE', '654b0c324541e'),
('654b0c3244bd2', ' DELETE', '654b0c3245420'),
('654b0c3248652', 'A key used for encryption', '654b0c3248f90'),
('654b0c3248652', 'A key that links two tables together', '654b0c3248f9f'),
('654b0c3248652', 'A primary key from another table', '654b0c3248fa1'),
('654b0c3248652', 'A key used for sorting', '654b0c3248fa2'),
('654b0c324b24b', 'First Normal Form (1NF)', '654b0c324b920'),
('654b0c324b24b', 'Second Normal Form (2NF)', '654b0c324b924'),
('654b0c324b24b', 'Third Normal Form (3NF)', '654b0c324b925'),
('654b0c324b24b', 'Fourth Normal Form (4NF)', '654b0c324b926'),
('654b0c324f1ae', 'Atomicity, Consistency, Isolation, Durability', '654b0c324f8ea'),
('654b0c324f1ae', 'Association, Compatibility, Integration, Durability', '654b0c324f8f0'),
('654b0c324f1ae', 'Atomic, Complete, Integrated, Durable', '654b0c324f8f2'),
('654b0c324f1ae', 'Availability, Consistency, Isolation, Durability', '654b0c324f8f4'),
('654b2423d7e2f', ' Sequential Query Language', '654b2423d920f'),
('654b2423d7e2f', 'Simple Query Language', '654b2423d9217'),
('654b2423d7e2f', 'Structured Query Language', '654b2423d9219'),
('654b2423d7e2f', 'System Query Language', '654b2423d921a'),
('654b2423ddee5', 'ADD RECORD', '654b2423de750'),
('654b2423ddee5', ' INSERT INTO', '654b2423de756'),
('654b2423ddee5', 'CREATE RECORD', '654b2423de757'),
('654b2423ddee5', 'ADD INTO', '654b2423de758'),
('654b2423e0896', 'o arrange data in ascending order', '654b2423e0e17'),
('654b2423e0896', 'To filter records based on a condition', '654b2423e0e1a'),
('654b2423e0896', 'To perform mathematical calculations on data', '654b2423e0e1b'),
('654b2423e0896', 'To group rows with the same values into summary rows', '654b2423e0e1c'),
('654b2423e2fb6', 'To arrange data in ascending or descending order', '654b2423e3573'),
('654b2423e2fb6', 'To filter records based on a condition', '654b2423e3575'),
('654b2423e2fb6', 'To group rows with the same values into summary rows', '654b2423e3576'),
('654b2423e2fb6', 'To perform mathematical calculations on data', '654b2423e3577'),
('654b2423e546c', ' MIN()', '654b2423e5bc4'),
('654b2423e546c', 'MAX()', '654b2423e5bc7'),
('654b2423e546c', 'AVG()', '654b2423e5bc9'),
('654b2423e546c', 'SUM()', '654b2423e5bca'),
('654b316700147', 'Single-Source Shortest Path', '654b316700b9d'),
('654b316700147', 'Single-Search Shortest Path', '654b316700ba4'),
('654b316700147', 'Single-Sided Shortest Path', '654b316700ba6'),
('654b316700147', 'Single-Step Shortest Path', '654b316700ba7'),
('654b316ceab93', 'Single-Source Shortest Path', '654b316ceb483'),
('654b316ceab93', 'Single-Search Shortest Path', '654b316ceb488'),
('654b316ceab93', 'Single-Sided Shortest Path', '654b316ceb489'),
('654b316ceab93', 'Single-Step Shortest Path', '654b316ceb48a'),
('654bc8841dbc4', 'To teach programming languages ', '654bc8841ef36'),
('654bc8841dbc4', 'To provide hands-on experience with computer hardware and softwar', '654bc8841ef48'),
('654bc8841dbc4', 'To explore advanced network security concepts', '654bc8841ef49'),
('654bc8841dbc4', 'To study theoretical computer science concepts', '654bc8841ef4a'),
('654bc88421c04', 'Hardware components of a computer ', '654bc884222bc'),
('654bc88421c04', 'Operating systems', '654bc884222c2'),
('654bc88421c04', 'Advanced machine learning algorithms', '654bc884222c3'),
('654bc88421c04', 'Basic command line usage', '654bc884222c4'),
('654bc88424585', 'To run video games', '654bc88424b7c'),
('654bc88424585', ' To create virtual copies of computer systems for testing and experimentation ', '654bc88424b82'),
('654bc88424585', 'To simulate natural disasters', '654bc88424b83'),
('654bc88424585', 'To compose music', '654bc88424b84'),
('654bc88426cf2', 'Computer Language Interface ', '654bc884273f5'),
('654bc88426cf2', 'Central Learning Institute ', '654bc884273fb'),
('654bc88426cf2', 'Command Line Interface ', '654bc884273fc'),
('654bc88426cf2', 'Computer Literacy Instruction', '654bc884273fd'),
('654bcaf2370c5', 'Storing data ', '654bcaf237b76'),
('654bcaf2370c5', 'Executing instructions ', '654bcaf237b7a'),
('654bcaf2370c5', 'Displaying images', '654bcaf237b7b'),
('654bcaf2370c5', 'Connecting to the internet', '654bcaf237b7c'),
('654bcaf239751', 'RAM (Random Access Memory)', '654bcaf239d8a'),
('654bcaf239751', 'CPU (Central Processing Unit)', '654bcaf239d90'),
('654bcaf239751', 'Hard Drive or SSD (Solid State Drive)', '654bcaf239d91'),
('654bcaf239751', 'Motherboard', '654bcaf239d92'),
('654bcaf23bcc7', 'Basic Input/Output System', '654bcaf23c5ad'),
('654bcaf23bcc7', 'Binary Input/Output Standard', '654bcaf23c5b1'),
('654bcaf23bcc7', 'Basic Internet Operating System ', '654bcaf23c5b2'),
('654bcaf23bcc7', ' Binary Instruction Output System', '654bcaf23c5b3'),
('654bcaf23d702', 'Python', '654bcaf23d944'),
('654bcaf23d702', 'java', '654bcaf23d947'),
('654bcaf23d702', 'c++', '654bcaf23d948'),
('654bcaf23d702', 'HTML', '654bcaf23d949'),
('654bcaf23e503', ' To format and print documents ', '654bcaf23e7e5'),
('654bcaf23e503', 'To provide a user interface ', '654bcaf23e7e7'),
('654bcaf23e503', ' To manage hardware resources and run applications ', '654bcaf23e7e8'),
('654bcaf23e503', 'To connect to the internet', '654bcaf23e7e9'),
('654bcaf23face', 'Read-After-Write Memory', '654bcaf24154a'),
('654bcaf23face', 'Random Access Memory ', '654bcaf241550'),
('654bcaf23face', 'Rapid Application Manager', '654bcaf241551'),
('654bcaf23face', 'Remote Access Module', '654bcaf241552'),
('654bcaf243aed', ' RAM (Random Access Memory) ', '654bcaf243def'),
('654bcaf243aed', ' ROM (Read-Only Memory)', '654bcaf243df1'),
('654bcaf243aed', 'Cache memory', '654bcaf243df2'),
('654bcaf243aed', 'Virtual memory', '654bcaf243df3'),
('654bcaf244b7b', ' Base 2', '654bcaf244e46'),
('654bcaf244b7b', 'Base 10', '654bcaf244e48'),
('654bcaf244b7b', 'Base 16', '654bcaf244e49'),
('654bcaf244b7b', 'Base 8', '654bcaf244e4a'),
('654bcaf245fc6', 'Monitor ', '654bcaf24635f'),
('654bcaf245fc6', 'Keyboard', '654bcaf246360'),
('654bcaf245fc6', 'CPU ', '654bcaf246361'),
('654bcaf245fc6', ' Printer', '654bcaf246362'),
('654bcaf246ff1', 'To display output ', '654bcaf2473f8'),
('654bcaf246ff1', 'To process data', '654bcaf2473ff'),
('654bcaf246ff1', 'To store programs', '654bcaf247400'),
('654bcaf246ff1', ' To enter data into the computer', '654bcaf247401');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('558920ff906b8', '55892169bf6a7', 'what is command for changing user information??', 4, 1),
('558920ff906b8', '5589216a3646e', 'what is permission for view only for other??', 4, 2),
('558921841f1ec', '558922117fcef', 'what is command for print in php??', 4, 1),
('558921841f1ec', '55892211e44d5', 'which is a variable of php??', 4, 2),
('5589222f16b93', '558922894c453', 'what is correct statement in c++??', 4, 1),
('5589222f16b93', '558922899ccaa', 'which command is use for print the output in c++?', 4, 2),
('558922ec03021', '558923538f48d', 'what is correct mask for A class IP???', 4, 1),
('558922ec03021', '55892353f05c4', 'which is not a private IP??', 4, 2),
('55897338a6659', '558973f4389ac', 'On Linux, initrd is a file', 4, 1),
('55897338a6659', '558973f4c46f2', 'Which is loaded into memory when system is booted?', 4, 2),
('55897338a6659', '558973f51600d', ' The process of starting up a computer is known as', 4, 3),
('55897338a6659', '558973f55d269', ' Bootstrapping is also known as', 4, 4),
('55897338a6659', '558973f5abb1a', 'The shell used for Single user mode shell is:', 4, 5),
('5589741f9ed52', '5589751a63091', ' Which command is used to close the vi editor?', 4, 1),
('5589741f9ed52', '5589751ad32b8', ' In vi editor, the key combination CTRL+f', 4, 2),
('5589741f9ed52', '5589751b304ef', ' Which vi editor command copies the current line of the file?', 4, 3),
('5589741f9ed52', '5589751b749c9', ' Which command is used to delete the character before the cursor location in vi editor?', 4, 4),
('5589741f9ed52', '5589751bd02ec', ' Which one of the following statement is true?', 4, 5),
('6536bda213681', '6536bddf5380b', 'KDFJDKFJ', 4, 1),
('6536bda213681', '6536bddf579df', 'SDFAFDASD', 4, 2),
('6536bda213681', '6536bddf5b0a2', 'DFDFASDFA', 4, 3),
('653a8c2ae7bce', '653a8dd4809a8', ' Which of the following is a type of computer architecture?', 4, 1),
('653a8c2ae7bce', '653a8dd48d592', ' What does VLIW stands for?', 4, 2),
('653f4ed8cad10', '653f4f1416741', 'first q', 4, 1),
('653f4ed8cad10', '653f4f141ade1', 'a2', 4, 2),
('653fecc80677c', '653fed0106283', 'test q', 4, 1),
('65436cdd2907b', '65436d010214a', 'sorting ?', 4, 1),
('654b08cb3cf17', '654b099ba19fe', 'Which sorting algorithm has a time complexity of O(n^2) in the worst case?', 4, 1),
('654b08cb3cf17', '654b099ba4ec9', 'Which sorting algorithm uses the concept of a \"pivot\" element?', 4, 2),
('654b08cb3cf17', '654b099ba77b6', 'Which sorting algorithm builds a binary heap to perform the sorting operation?', 4, 3),
('654b08cb3cf17', '654b099baa33e', 'Which sorting algorithm uses a technique called \"divide and conquer\"?', 4, 4),
('654b08cb3cf17', '654b099bb0a50', 'Which sorting algorithm is most efficient for small data sets or nearly sorted data?', 4, 5),
('654b0b2eb5b64', '654b0c3241a8b', 'What is a primary key in a database?', 4, 1),
('654b0b2eb5b64', '654b0c3244bd2', 'Which operation is used to retrieve specific columns from a table in SQL?', 4, 2),
('654b0b2eb5b64', '654b0c3248652', 'In a relational database, what does a foreign key represent?', 4, 3),
('654b0b2eb5b64', '654b0c324b24b', 'Which normalization form ensures that there are no repeating groups of data?', 4, 4),
('654b0b2eb5b64', '654b0c324f1ae', 'What does ACID stand for in the context of database transactions?', 4, 5),
('654b0e074e7ad', '654b2423d7e2f', 'What does SQL stand for?', 4, 1),
('654b0e074e7ad', '654b2423ddee5', 'Which SQL command is used to insert new records into a table?', 4, 2),
('654b0e074e7ad', '654b2423e0896', 'What is the purpose of the SQL GROUP BY clause?', 4, 3),
('654b0e074e7ad', '654b2423e2fb6', 'What is the purpose of the SQL ORDER BY clause?', 4, 4),
('654b0e074e7ad', '654b2423e546c', 'Which SQL function is used to find the maximum value in a column?', 4, 5),
('654b28d8b7cb4', '654b2a1555f7a', 'What does DFS stand for in the context of graph traversal?', 4, 1),
('654b28d8b7cb4', '654b2a447e495', 'What does DFS stand for in the context of graph traversal?', 4, 1),
('654b30cb60aed', '654b316700147', 'What does SSSP stand for in the context of graph theory?', 4, 1),
('654b30cb60aed', '654b316704b18', 'Which SSSP algorithm is based on the principle of relaxing edges in the graph iteratively?', 4, 2),
('654b30cb60aed', '654b316ceab93', 'What does SSSP stand for in the context of graph theory?', 4, 1),
('654b30cb60aed', '654b316cee5fe', 'Which SSSP algorithm is based on the principle of relaxing edges in the graph iteratively?', 4, 2),
('654bc76928e2b', '654bc8841dbc4', 'What is the primary objective of an Introduction to Computer Systems lab?', 4, 1),
('654bc76928e2b', '654bc88421c04', 'Which of the following is not typically covered in an Introduction to Computer Systems lab?', 4, 2),
('654bc76928e2b', '654bc88424585', 'In an Introduction to Computer Systems lab, what is the purpose of virtualization technology like VirtualBox?', 4, 3),
('654bc76928e2b', '654bc88426cf2', 'What does the term \"CLI\" stand for in the context of an Introduction to Computer Systems lab?', 4, 4),
('654bc8ce4c305', '654bcaf2370c5', 'What is the primary function of the Central Processing Unit (CPU) in a computer system?', 4, 1),
('654bc8ce4c305', '654bcaf239751', 'Which component of a computer system is responsible for long-term storage of data and programs?\r\n\r\n\r\n', 4, 2),
('654bc8ce4c305', '654bcaf23bcc7', 'What does \"BIOS\" stand for in the context of computer systems?', 4, 3),
('654bc8ce4c305', '654bcaf23d702', 'Which of the following programming languages is known for its portability and is often used in systems programming?', 4, 4),
('654bc8ce4c305', '654bcaf23e503', 'What is the purpose of an operating system in a computer?', 4, 5),
('654bc8ce4c305', '654bcaf23face', 'What does RAM stand for in the context of computer memory?', 4, 6),
('654bc8ce4c305', '654bcaf243aed', 'Which type of computer memory is non-volatile, meaning it retains data even when the power is turned off?', 4, 7),
('654bc8ce4c305', '654bcaf244b7b', ' What is the binary number system based on?', 4, 8),
('654bc8ce4c305', '654bcaf245fc6', 'Which of the following is not a peripheral device?', 4, 9),
('654bc8ce4c305', '654bcaf246ff1', 'What is the purpose of an input device in a computer system?', 4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
('558920ff906b8', 'Linux : File Managment', 2, 1, 2, 5, '', 'CSE3102', '2023-10-26 18:20:19'),
('558921841f1ec', 'Php Coding', 2, 1, 2, 5, '', 'CSE1101', '2023-10-25 16:39:23'),
('5589222f16b93', 'C++ Coding', 2, 1, 2, 5, '', 'c++', '2015-06-23 09:09:03'),
('558922ec03021', 'Networking', 2, 1, 2, 5, '', 'networking', '2015-06-23 09:12:12'),
('55897338a6659', 'Linux:startup', 2, 1, 5, 10, '', 'CSE3102', '2023-10-26 18:20:19'),
('5589741f9ed52', 'Linux :vi Editor', 2, 1, 5, 10, '', 'CSE3102', '2023-10-26 18:20:19'),
('65366a0a431ec', 'Test', 1, 1, 2, 3, 'descrip', 'test', '2023-10-23 12:41:46'),
('6536bd6d50a7c', 'Test2', 0, 0, 3, 0, '', '', '2023-10-23 18:37:33'),
('6536bda213681', 'Test2', 1, 1, 3, 5, '', 'CSE3101', '2023-10-23 18:38:26'),
('653a8c2ae7bce', 'For Cse1102', 1, 1, 2, 2, '', 'CSE1102', '2023-10-26 16:08:53'),
('653f4ed8cad10', 'Test3', 2, 1, 2, 4, '', 'CSE3101', '2023-10-30 06:36:08'),
('653fecc80677c', 'Test4', 1, 1, 1, 1, '', 'CSE3101', '2023-10-30 17:50:00'),
('65436cdd2907b', 'Sorting', 2, 0, 1, 2, '', 'CSE3101', '2023-11-02 09:33:17'),
('654b08cb3cf17', 'Sorting Algorithm', 1, 0, 5, 3, '', 'CSE1201', '2023-11-08 04:04:27'),
('654b0b2eb5b64', 'Dtabase Management System', 1, 0, 5, 3, '', 'CSE2101', '2023-11-08 04:14:38'),
('654b0e074e7ad', 'Sql', 1, 0, 5, 3, '', 'CSE2102', '2023-11-08 04:26:47'),
('654b28d8b7cb4', 'Graph Algorithm', 1, 0, 5, 3, '', 'CSE2201', '2023-11-08 06:21:12'),
('654b30cb60aed', 'Single_source Shortest Path', 2, 0, 3, 2, '', 'CSE2202', '2023-11-08 06:55:07'),
('654bc76928e2b', 'Lab Quiz 1', 1, 1, 4, 4, '', 'CSE-1102', '2023-11-08 17:37:45'),
('654bc8ce4c305', 'Computer System', 1, 1, 10, 10, '', 'CSE-1101', '2023-11-08 17:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('nik1@gmail.com', 1, '2015-06-23 16:11:50'),
('mehedihasancse20@gmail.com', 0, '2023-10-22 13:31:59'),
('shakil@gmail.com', 6, '2023-10-30 06:38:21'),
('nurehafsa@gmail.com', -3, '2023-11-08 09:36:11'),
('deepanwita.cse7.bu@gmail.com', 2, '2023-11-08 17:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `college`, `email`, `mob`, `password`) VALUES
('Ahbi', 'M', '5', 'Ahbi@gmail.com', 175478631, '827ccb0eea8a706c4c34a16891f84e7b'),
('Deepanwita Roy', 'F', '1', 'deepanwita.cse7.bu@gmail.com', 1918840003, '827ccb0eea8a706c4c34a16891f84e7b'),
('Hasan', 'M', '2', 'hasan@gmail.com', 1689461303, '827ccb0eea8a706c4c34a16891f84e7b'),
('Mehedi_07_16', 'M', '2', 'mehedihasan.cse.bu.07@gmail.com', 12458878, '827ccb0eea8a706c4c34a16891f84e7b'),
('Md.mehedi Hasan', 'M', '2', 'mehedihasancse20@gmail.com', 1235665563, '827ccb0eea8a706c4c34a16891f84e7b'),
('Meher', 'M', '4', 'meher@gmail.com', 5487632, '827ccb0eea8a706c4c34a16891f84e7b'),
('Shefa', 'F', '5', 'nurehafsa399@gmail.com', 1753227876, '827ccb0eea8a706c4c34a16891f84e7b'),
('Nure Hafsa', 'F', '4', 'nurehafsa@gmail.com', 1746982797, '25d55ad283aa400af464c76d713c07ad'),
('Md. Shakil', 'M', '5', 'shakil@gmail.com', 204466, '827ccb0eea8a706c4c34a16891f84e7b'),
('User', 'M', '5', 'user@user.com', 11, 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
