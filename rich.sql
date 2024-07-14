-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 04:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rich`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(50) NOT NULL,
  `ad_date` date DEFAULT current_timestamp(),
  `ad_name` varchar(250) NOT NULL,
  `ad_username` varchar(200) NOT NULL,
  `ad_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_date`, `ad_name`, `ad_username`, `ad_password`) VALUES
(1, '2022-07-15', 'RITHESH Jaston', 'ritheshjaston22@gmail.com', '10722d29c4dbe354a97640b59912c8f3');

-- --------------------------------------------------------

--
-- Table structure for table `apti_test`
--

CREATE TABLE `apti_test` (
  `apt_id` int(50) NOT NULL,
  `apt_date` date NOT NULL DEFAULT current_timestamp(),
  `apt_type` varchar(200) NOT NULL,
  `apt_stream` varchar(200) NOT NULL,
  `apti_test_qution` varchar(600) NOT NULL,
  `apt_answer` varchar(200) NOT NULL,
  `apt_option1` varchar(200) NOT NULL,
  `apt_option2` varchar(200) NOT NULL,
  `apt_option3` varchar(200) NOT NULL,
  `p_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apti_test`
--

INSERT INTO `apti_test` (`apt_id`, `apt_date`, `apt_type`, `apt_stream`, `apti_test_qution`, `apt_answer`, `apt_option1`, `apt_option2`, `apt_option3`, `p_id`) VALUES
(59, '2022-08-09', 'admin', 'science', 'Chemical Formula of Water: ', 'H2O', 'WTR', 'N2O', 'H3O', 0),
(60, '2022-08-09', 'admin', 'science', 'Chemical Formula of Oxygen:', 'O2', 'O3', 'OXYGEN', 'None of These', 0),
(61, '2022-08-09', 'admin', 'science', 'Chemical Formula of Helium:', 'None Of These', 'H2O', 'N2O', 'H2SO4', 0),
(62, '2022-08-09', 'admin', 'science', 'Speed Of Light', '3x10pwr-8', '3x10pwr8', '3x9pwr2', '2000km/h', 0),
(63, '2022-08-09', 'admin', 'science', 'Who Found the Newton Laws of Motions', 'Issac Newton', 'Aisasac Newton', 'Jeorge Newton', 'Gelilio', 0),
(64, '2022-08-09', 'admin', 'science', 'Which force attracts the objects to the earth', 'Gravitational Force', 'Frictional Force', 'Attractional Force', 'Jumping Force', 0),
(65, '2022-08-09', 'admin', 'science', 'Earth me kithna percnt paani peene keliye layak he', '1%', '75%', '5%', 'None of These', 0),
(66, '2022-08-09', 'admin', 'science', 'sqrt(25)+sqrt(49)-sqrt(144)+2power4=?', '16', '32', '24', '2', 0),
(67, '2022-08-09', 'admin', 'science', 'What is the Value of pi', '3.145', '3.124', '3.245', '23/7', 0),
(68, '2022-08-09', 'admin', 'science', 'Formula for Area of Triangle', 'a=1/2bh', 'a=3/4hb', 'a=50/100bh', 'a=1.5xbxh', 0),
(69, '2022-08-09', 'admin', 'arts', 'When did India got Independant', '15 august 1947', '15 august 1997', '25 august 1947', '13 july 1190', 0),
(71, '2022-08-09', 'admin', 'arts', 'The Governer General during the fourth Anglo-Mysore War was', 'Wellesley', 'Dalhousie', 'Cornwallis', 'Rippon', 0),
(72, '2022-08-09', 'admin', 'science', 'Oxidation is a process which involves', 'addition of oxygen', 'addition of hydrogen', 'removal of oxygen', 'removal of hydrogen', 0),
(73, '2022-08-09', 'admin', 'arts', 'The first country to re-establish trade between India and Europe', 'Portugal', 'Italy', 'Britain', 'France', 0),
(74, '2022-08-09', 'admin', 'arts', 'Ottomon Turks captured Constantinople in the year', '1453', '1498', '1600', '1602', 0),
(75, '2022-08-09', 'admin', 'arts', 'Capital of a French in India was', 'Pondicherry', 'Calcutta', 'Chennai', 'Bombay', 0),
(76, '2022-08-09', 'admin', 'arts', 'The Dual government in Bengal was introduced by', 'Robert Clive', 'Siraj-ud-Daulah ', 'Dupleix', 'Mirjaffar', 0),
(77, '2022-08-09', 'admin', 'arts', 'The Founder of Portuguese power in India', 'Alfonso-de-Alburquerque ', 'Dupleix', 'Robert Clive', 'Francisco de almeida', 0),
(78, '2022-08-09', 'admin', 'arts', 'Nawab of Bengal after Mirjaffar was', ' Mirkasim', ' Shah Alam', 'Shuja-ud-Daulah ', ' Siraj-ud-Daulah', 0),
(79, '2022-08-09', 'admin', 'arts', ' Diwani rights to the British was accorded by', 'Shah Alam ', 'Jahangir', 'Furuk Siyyar', 'Bahadurshah II', 0),
(80, '2022-08-09', 'admin', 'arts', 'The French governor general of Pondicherry during the year 1746', 'Dupleix', ' Robert Clive ', 'Sir Eyre Coote', 'Lord Wellesly', 0),
(81, '2022-08-10', 'admin', 'commerce', 'Father of Economics', 'Adam Smith', 'Adam Smart', 'James Smith', 'Smith Adam', 0),
(82, '2022-08-10', 'admin', 'commerce', 'Father of Business studies', 'Peter F Drucker', 'Adam Smith', 'Charles Babbage', 'None of These', 0),
(83, '2022-08-10', 'admin', 'commerce', 'Founder of Vijayanagar Empire', 'Harihara I', 'Shri Krishnadevaraya', 'Shri Krishna', 'Tenali Rama', 0),
(84, '2022-08-10', 'admin', 'commerce', 'Other name of Harihara I', 'Hakka', 'Bukka', 'Vira', 'Keshava', 0),
(85, '2022-08-10', 'admin', 'commerce', 'Harihara is the founder of ', 'Vijayanagara Empire', 'Moghal Empire', 'Sulthans', 'Marathas', 0),
(86, '2022-08-10', 'admin', 'commerce', 'Full Form of GDP', 'Gross Domestic Price', 'Growth Dairy Productions', 'Grass Domestic Price', 'Guidance Development Programme', 0),
(87, '2022-08-10', 'admin', 'commerce', 'Full Form of MRP', 'Marked Retail Price', 'Marked Revenue Price', 'Management Resource Price', 'None of These', 0),
(88, '2022-08-10', 'admin', 'ITI', 'Full Form of ITI', 'Industrial Training Institute', 'Information Technology Institution', 'Information To Information', 'None of These', 0),
(89, '2022-08-10', 'admin', 'ITI', 'Full Form of Ac', 'Air Conditioner', 'Air Chamber', 'Air Channel', 'None of These', 0),
(90, '2022-08-10', 'admin', 'commerce', 'Which one of the following shortcut keys is used to paste a file?', 'Ctrl + v', 'Ctrl + b', 'Ctrl + x', 'Ctrl + c', 0),
(91, '2022-08-10', 'admin', 'arts', 'General purpose computer are used for:', 'All of the above', 'Creating a small database', ' Performs calculation', 'Accounting', 0),
(92, '2022-08-10', 'admin', 'commerce', 'Which of the following are computers that can be carried around easily?', 'Laptops', 'PCs', 'Supercomputers', 'Minicomputers', 0),
(93, '2022-08-10', 'admin', 'commerce', 'General purpose computer are used for', 'All of the above', 'Creating a small database', ' Performs calculation', 'Accounting', 0),
(94, '2022-08-10', 'admin', 'commerce', 'The brain of any computer system is', 'CPU', 'ALU', 'memory', 'control unit', 0),
(95, '2022-08-10', 'admin', 'ITI', 'What is the S.I unit of current?', 'Ampere', 'Coulomb', 'Ohm', 'Volt', 0),
(96, '2022-08-10', 'admin', 'ITI', 'What is the S.I unit of resistance?', 'Ohm', 'Coulomb', 'Volt', 'Ampere', 0),
(97, '2022-08-10', 'admin', 'ITI', 'The resistivity of a conductor depends on', 'Length', 'Current', 'Voltage', 'Power', 0),
(98, '2022-08-10', 'admin', 'ITI', 'In a transformer, the humming sound is primarily due to', 'Magnetostriction', 'Overflow of oil', 'Flux leakage', 'Lamination of transformer', 0),
(99, '2022-08-10', 'admin', 'ITI', 'The voltage range is non uniform. Its type is', 'Electrostatic instrument', 'Potentiometer', 'Galvanometer', 'Multimeter', 0),
(100, '2022-08-10', 'admin', 'ITI', '1 volt can be expressed as', '1 joule/ columb', '1 joule/weber', '1 joule/ohm', '1 watt/ Joule', 0),
(101, '2022-08-10', 'admin', 'ITI', 'A potentiometer is usually a', 'Null type instrument', 'Digital Instrument', 'Deflection type instrument', 'None of these', 0),
(102, '2022-08-10', 'admin', 'Diploma', 'Which of the following is an extensive property?', 'Volume ', 'Pressure', 'Viscosity', 'All of the above', 0),
(103, '2022-08-10', 'admin', 'Diploma', ' Deformation per unit length is called as', 'strain', 'stress', 'modulus of elasticity', 'none of the above', 0),
(104, '2022-08-10', 'admin', 'Diploma', 'An isobaric process, has constant ', 'pressure ', 'density', 'temperature', 'volume', 0),
(105, '2022-08-10', 'admin', 'Diploma', 'In which power transmitting drive polygon effect is observed?', 'Chain drive ', ' Belt drive', 'Both chain and belt drive', 'None of the above', 0),
(106, '2022-08-10', 'admin', 'Diploma', 'Which of the following energy conversion devices convert heat into work?', 'I. C engines ', 'Electrical generators ', 'Condensers ', ' All of the above', 0),
(107, '2022-08-11', 'admin', 'Diploma', 'Which of the following is a ferrous alloy?', 'Cast steel', 'All of the above', 'Brass', 'Aluminum alloys', 0),
(108, '2022-08-11', 'admin', 'Diploma', 'Copper when alloyed with zinc is known as', 'Brass', 'Bronze', 'All of the above', 'Babbits', 0),
(109, '2022-08-11', 'admin', 'Diploma', 'Which body transmits force with negligible deformation?', 'Resistant body', 'Elastic body', 'Deforming body', 'All of the above', 0),
(110, '2022-08-11', 'admin', 'Diploma', 'What is the primary function of mechanism?', 'Motion transmission', 'Power transmission', 'Power absorption', 'Force transmission', 0),
(111, '2022-08-11', 'admin', 'Diploma', 'The radiation pyrometers work on the principle of ______', 'Stefan Boltzmann’s law', 'Newton’s law', 'Zeroth law', 'None of the above', 0),
(112, '2022-08-11', 'centre', '', 'The radiation pyrometers work on the principle of ______', 'Stefan Boltzmann’s law', 'None of the above', 'Zeroth law', 'Newton’s law', 34),
(113, '2022-08-11', 'centre', '', 'Casting replica used to make the cavity is called as', 'Pattern', 'None of the above', 'Mould', 'Cope', 34),
(114, '2022-08-11', 'centre', '', 'What is the primary function of mechanism?', 'Motion transmission', 'Force transmission', 'Power absorption', 'Power transmission', 34),
(115, '2022-08-11', 'centre', '', 'Which body transmits force with negligible deformation?', 'Resistant body', 'Elastic body', 'Deforming body', 'All of the above', 34),
(117, '2022-08-11', 'centre', '', 'Copper when alloyed with zinc is known as', 'Brass', 'Bronze', 'Babbits', 'All of the above', 34),
(122, '2022-08-11', 'centre', '', 'Which of the following is a ferrous alloy?', 'Cast steel', 'Bronze', 'Aluminum alloys', 'All of the above', 34);

-- --------------------------------------------------------

--
-- Table structure for table `centre`
--

CREATE TABLE `centre` (
  `c_id` int(11) NOT NULL,
  `c_date` date NOT NULL DEFAULT current_timestamp(),
  `c_name` varchar(50) NOT NULL,
  `c_email_id` varchar(50) NOT NULL,
  `c_password` varchar(50) NOT NULL,
  `c_longitude` varchar(50) NOT NULL,
  `c_latitude` varchar(50) NOT NULL,
  `c_approval` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `centre`
--

INSERT INTO `centre` (`c_id`, `c_date`, `c_name`, `c_email_id`, `c_password`, `c_longitude`, `c_latitude`, `c_approval`) VALUES
(14, '2022-08-09', 'Svs College', 'ritheshjaston22@gmail.com', '10722d29c4dbe354a97640b59912c8f3', '75.0448352', '12.9419953', 'Approoved'),
(16, '2022-08-12', 'SDM college Manglore', 'sdm@gmail.com', '10722d29c4dbe354a97640b59912c8f3', '75.0448352', '12.9408794', 'Approoved');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(50) NOT NULL,
  `f_date` date NOT NULL DEFAULT current_timestamp(),
  `f_type` varchar(200) NOT NULL,
  `s_id` varchar(20) NOT NULL,
  `stu_name` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_date`, `f_type`, `s_id`, `stu_name`, `c_id`, `c_name`, `message`) VALUES
(18, '2022-08-10', 'Student', '1', 'Rithesh Jaston', '', '', 'Thank You for giving us this platform  by this platform I know myself more and more Thank You so much');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `j_id` int(50) NOT NULL,
  `j_date` date NOT NULL DEFAULT current_timestamp(),
  `job_designation` varchar(100) NOT NULL,
  `job_address` varchar(200) NOT NULL,
  `job_phone_no` varchar(20) NOT NULL,
  `job_website` varchar(150) NOT NULL,
  `job_no_of_jobs` int(50) NOT NULL,
  `job_type` varchar(50) NOT NULL,
  `job_salary` varchar(20) NOT NULL,
  `j_location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`j_id`, `j_date`, `job_designation`, `job_address`, `job_phone_no`, `job_website`, `job_no_of_jobs`, `job_type`, `job_salary`, `j_location`) VALUES
(20, '2022-08-10', 'Driver', 'driveracademy@gmail.com', '9380718579', 'driveac.com', 200, 'Part Time', '15000', 'Manglore'),
(21, '2022-08-10', 'Conductor', 'busconductor@gmail.com', '8574968574', 'busconductor.com', 12, 'Full Time', '17000', 'Banglore'),
(22, '2022-08-10', 'Network centre', 'rapidnetworks@gmail.com', '8525361452', 'rapidinfotech.com', 200, 'Full Time', '25000', 'Mumbai'),
(23, '2022-08-10', 'Bank pion', 'hdfc@gmail.com', '7485714574', 'hdfc.com', 45, 'Full Time', '21000', 'Kolkatta'),
(24, '2022-08-10', 'Network admin', 'rnetworks@gmail.com', '4714785202', 'Rnetworks.com', 12, 'Part Time', '12000', 'Manglore'),
(25, '2022-08-10', 'cable operator', 'rcabels@gmail.com', '7485967401', 'rcabels.com', 36, 'Part Time', '4000', 'Mumbai'),
(26, '2022-08-11', 'NetworkCentre', 'net@gmail.com', '9380718575', 'net.com', 200, 'Part Time', '25000', 'Banglore'),
(27, '2022-08-12', 'IT', 'it@gmail.com', '9380718579', 'it.com', 140, 'Full Time', '25000', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `p_id` int(50) NOT NULL,
  `c_id` int(50) NOT NULL,
  `p_date` date NOT NULL DEFAULT current_timestamp(),
  `p_name` varchar(60) NOT NULL,
  `p_address` varchar(500) NOT NULL,
  `p_longitude` varchar(200) NOT NULL,
  `p_latitude` varchar(200) NOT NULL,
  `p_description` varchar(5000) NOT NULL,
  `p_duration` varchar(50) NOT NULL,
  `p_status` int(20) NOT NULL,
  `p_seats` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`p_id`, `c_id`, `p_date`, `p_name`, `p_address`, `p_longitude`, `p_latitude`, `p_description`, `p_duration`, `p_status`, `p_seats`) VALUES
(31, 14, '2022-08-10', 'Arts', 'SVS college bantwal', '75.0260667', '12.886995', 'Arts Stream include Economics, History, Political Science, Geography, Sociology, Philosophy, Psychology, Computer Science, Hindi, Regional language, etc. From Law and Literary Studies to Journalism and Hotel Management, careers after Arts stream are copious.', '2.yrs', 0, '100'),
(32, 14, '2022-08-10', 'Commerce', 'SVS college bantwal', '75.0260667', '12.886995', 'Commerce is an education stream which offers the students a study of trade and business activities such as the exchange of goods and services from producer to the final consumer. The Commerce stream in Class 11 and 12 includes various subjects like Economics, Accountancy and Business Studies.', '2.yrs', 0, '97'),
(33, 14, '2022-08-10', 'Science', 'SVS college bantwal', '75.0448352', '12.886995', 'There are mainly two branches in the science stream: one is the non-medical stream (PCM), and another is the Medical stream (PCB). Physics and chemistry are standard for both streams. Maths is opted by the students who kick start their career in non-medical streams like Engineering and Architecture.', '2.yr', 0, '98'),
(34, 14, '2022-08-10', 'Diploma', 'SVS college bantwal', '75.0448352', '12.886995', 'There are mainly two branches in the science stream: one is the non-medical stream (PCM), and another is the Medical stream (PCB). Physics and chemistry are standard for both streams. Maths is opted by the students who kick start their career in non-medical streams like Engineering and Architecture.', '3.yr', 1, '97'),
(35, 14, '2022-08-10', 'ITI', 'SVS college bantwal', '75.0260667', '12.886995', 'The key sectors in which ITI students can find lucrative career opportunities include construction, agriculture, textiles, energy. As far as specific job profiles are concerned, electronics, welding refrigeration and air-conditioner mechanic are the most sought-after skills in an ITI student in the private sector', '6 Months', 0, '100'),
(36, 16, '2022-08-12', 'Arts', 'SDM college', '75.0448352', '12.9408794', 'a visual object or experience consciously created through an expression of skill or imagination. The term art encompasses diverse media such as painting, sculpture, printmaking, drawing, decorative arts, photography, and installation.', '2.yr', 0, '100'),
(37, 16, '2022-08-12', 'Commerce', 'SDM college', '75.0448352', '12.9408794', 'Commerce is the conduct of trade among economic agents. Generally, commerce refers to the exchange of goods, services, or something of value, between businesses or entities.', '2.yr', 0, '100'),
(38, 16, '2022-08-12', 'Science', 'SDM college', '75.0448352', '12.9408794', 'science, any system of knowledge that is concerned with the physical world and its phenomena and that entails unbiased observations and systematic experimentation. In general, a science involves a pursuit of knowledge covering general truths or the operations of fundamental laws.', '2.yr', 0, '100'),
(39, 16, '2022-08-12', 'Diploma', 'SDM college', '75.0448352', '12.9408794', 'A diploma is a document awarded by an educational institution (such as a college or university) testifying the recipient has graduated by successfully completing their courses of studies. Historically, it has also referred to a charter or official document of diplomacy.', '3.yr', 0, '100'),
(40, 16, '2022-08-12', 'ITI', 'SDM college', '75.0448352', '12.9408794', 'Industrial Training Institutes (ITI) and Industrial Training Centers (ITC) are post-secondary schools in India constituted under Directorate General of Training (DGT), Ministry of Skill Development and Entrepreneurship, Union Government to provide training in various trades.', '6 Months', 0, '100');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `req_id` int(50) NOT NULL,
  `p_id` int(50) NOT NULL,
  `c_id` int(50) NOT NULL,
  `s_id` int(50) NOT NULL,
  `req_score` int(20) NOT NULL,
  `req_date` date NOT NULL DEFAULT current_timestamp(),
  `req_requst` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`req_id`, `p_id`, `c_id`, `s_id`, `req_score`, `req_date`, `req_requst`) VALUES
(40, 32, 14, 1, 0, '2022-08-11', 'Approved'),
(41, 33, 14, 1, 0, '2022-08-11', ''),
(42, 34, 14, 14, 0, '2022-08-11', 'Approved'),
(45, 37, 16, 1, 0, '2022-08-13', ''),
(46, 31, 14, 1, 0, '2022-08-22', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(11) NOT NULL,
  `s_date` date NOT NULL DEFAULT current_timestamp(),
  `s_name` varchar(50) NOT NULL,
  `s_birth_date` varchar(50) NOT NULL,
  `s_email_id` varchar(50) NOT NULL,
  `s_password` varchar(50) NOT NULL,
  `s_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_date`, `s_name`, `s_birth_date`, `s_email_id`, `s_password`, `s_img`) VALUES
(1, '2022-07-15', 'Rithesh Jaston', '2002-08-26', 'ritheshjaston22@gmail.com', '10722d29c4dbe354a97640b59912c8f3', 'i8.jpg'),
(14, '2022-08-10', 'Shailesh Kumar', '2001-07-06', 'shaileshgowda045@gmail.com', '3d558122fcac9ea5fdc9ee8eccf8f433', 'i10.jpg'),
(15, '2022-08-11', 'Rithesh Jaston DSa', '2002-02-22', 'ritheshjaston2002@gmail.com', '10722d29c4dbe354a97640b59912c8f3', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `apti_test`
--
ALTER TABLE `apti_test`
  ADD PRIMARY KEY (`apt_id`);

--
-- Indexes for table `centre`
--
ALTER TABLE `centre`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`,`s_email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apti_test`
--
ALTER TABLE `apti_test`
  MODIFY `apt_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `centre`
--
ALTER TABLE `centre`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `j_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `p_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `req_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
