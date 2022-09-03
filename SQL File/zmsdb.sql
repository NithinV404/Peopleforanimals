-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2022 at 02:23 PM
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
-- Database: `zmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `donation_id` int(20) NOT NULL,
  `donation_uname` varchar(50) NOT NULL,
  `donation_email` varchar(50) NOT NULL,
  `donation_amt` int(20) NOT NULL,
  `donation_phn` varchar(20) NOT NULL,
  `donation_time` datetime(6) NOT NULL,
  `identity_type` varchar(20) NOT NULL,
  `identity_number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`donation_id`, `donation_uname`, `donation_email`, `donation_amt`, `donation_phn`, `donation_time`, `identity_type`, `identity_number`) VALUES
(3, 'Rahid ', 'rahidk85@gmail.com', 2000, '8147555195', '2022-07-27 11:22:41.000000', 'Aadhaar Number', 2147483647),
(4, 'Nithin', 'nithin.v053@gmail.com', 5000, '4534534535', '2022-07-29 08:44:32.000000', 'Aadhaar Number', 2147483647),
(5, 'Nithin', 'nithin.v053@gmail.com', 5000, '4534534535', '2022-07-29 09:09:30.000000', 'Aadhaar Number', 2147483647),
(6, 'Nithin', 'nithin.v053@gmail.com', 5000, '4534534535', '2022-07-29 09:09:36.000000', 'Aadhaar Number', 2147483647),
(7, 'Manoj', 'bmanoj9972334059@gmail.com', 100, '9292929299', '2022-07-31 16:48:59.000000', 'Permanent Account Nu', 2147483647),
(8, 'Vinay123', 'vinaygowda3001@gmail.com', 100, '9110291976', '2022-08-20 07:08:13.000000', 'Permanent Account Nu', 2147483647),
(9, 'Vinay123', 'vinaygowda3001@gmail.com', 100, '9110291976', '2022-08-20 07:09:48.000000', 'Permanent Account Nu', 2147483647),
(10, 'Vinay123', 'vinaygowda3001@gmail.com', 3000, '9110291976', '2022-08-20 07:30:56.000000', 'Permanent Account Nu', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 1234567890, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2022-04-20 21:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblanimal`
--

CREATE TABLE `tblanimal` (
  `ID` int(10) NOT NULL,
  `AnimalName` varchar(200) DEFAULT NULL,
  `CageNumber` int(10) DEFAULT NULL,
  `FeedNumber` varchar(200) DEFAULT NULL,
  `Breed` varchar(200) DEFAULT NULL,
  `AnimalImage` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblanimal`
--

INSERT INTO `tblanimal` (`ID`, `AnimalName`, `CageNumber`, `FeedNumber`, `Breed`, `AnimalImage`, `Description`, `CreationDate`) VALUES
(10, 'Emden goose', 12001, '101', 'Domestic goose', '390fe75282f343b5640cd8d67ce211041659070895.jpg', 'The Emden is the oldest goose breed of the area that is now Germany, with origins believed to go back to the thirteenth century. It derives from the traditional large white geese of the East Frisia region of north-western Germany; these had a long curved neck and so were sometimes known as Schwanengans or \"swan geese\"', '2022-07-29 05:01:35'),
(11, 'Saanen goat', 12002, '102', 'Domestic goose', 'a2e5b243860ef4cb150a1f7a26f6277b1659070956.jpg', 'The Saanen[a] is a Swiss breed of domestic goat. It takes its name from the Saanental in the Bernese Oberland, in the southern part of the Canton of Bern, in western Switzerland. It is a highly productive dairy goat and is distributed in more than eighty countries worldwide.', '2022-07-29 05:02:36'),
(12, 'American Quarter Horse', 12003, '103', 'American breed ', 'b9fb9d37bdf15a699bc071ce49baea531659071025.jpg', 'The American Quarter Horse is the most popular breed in the United States today, and the American Quarter Horse Association is the largest breed registry in the world, with almost three million living American Quarter Horses registered in 2014.[1] The American Quarter Horse is well known both as a race horse and for its performance in rodeos, horse shows and as a working ranch horse.', '2022-07-29 05:03:45'),
(13, 'Holstein Friesian cattle', 12004, '104', 'Dutch and German breed', '6ad6b93a1f02961205ce17046b4992f31659071142.jpg', 'The Holstein-Friesian is the most widespread cattle breed in the world; it is found in more than 150 countries.[1] With the growth of the New World, a demand for milk developed in North America and South America, and dairy breeders in those regions at first imported their livestock from the Netherlands. However, after about 8,800 Friesians (black pied German cows) had been imported, Europe stopped exporting dairy animals due to disease problems', '2022-07-29 05:05:42'),
(14, 'American Pit Bull Terrier', 12005, '105', 'American Pit Bull', '1e6ae4ada992769567b71815f124fac51659071660.jpg', 'The American Pit Bull Terrier (APBT) is a dog breed recognized by the United Kennel Club (UKC)[1] and the American Dog Breeders Association (ADBA),[2] but not the American Kennel Club (AKC).[3] It is a medium-sized, short-haired dog, of a solid build, whose early ancestors came from the British Isles. When compared with the English Staffordshire Bull Terrier, the American Pit Bull Terrier is larger by margins of 6–8 inches (15–20 cm) in height and 25–35 pounds (11–16 kg) in weight. The American Pit Bull Terrier varies in size: males are normally about 18–21 inches (45–53 cm) in height and around 35–60 pounds (15–27 kg) in weight, while females are normally around 17–20 inches (43–50 cm) in height and 30–50 pounds (13–22 kg) in weigh', '2022-07-29 05:14:20'),
(15, 'Golden Retriever', 12006, '106', 'Scottish breed ', '01f6aabc2cdba1b9d90ecf76d3418bd91659071724.jpg', 'The Golden Retriever is a Scottish breed of retriever dog of medium size. It is characterised by a gentle and affectionate nature and a striking golden coat. It is commonly kept as a pet and is among the most frequently registered breeds in several Western countries. It is a frequent competitor in dog shows and obedience trials; it is also used as a gundog, and may be trained for use as a guide dog.', '2022-07-29 05:15:24'),
(16, ' Labrador Retriever', 12007, '107', ' British breed', '0d5b1c4c7f720f698946c7f6ab08f6871659071795.jpg', 'The Labrador Retriever or Labrador is a British breed of retriever gun dog. It was developed in the United Kingdom from fishing dogs imported from the colony of Newfoundland (now a province of Canada), and was named after the Labrador region of that colony. It is among the most commonly kept dogs in several countries, particularly in the Western world.', '2022-07-29 05:16:35'),
(17, 'Blue-and-yellow macaw', 12008, '108', 'Psittacidae', 'ecadd873c39075a7d9f90dd280bca86d1659072065.jpg', 'These birds can reach a length of 76–86 cm (30–34 in) and weigh 0.900–1.5 kg (2–3 lb), making them some of the larger members of their family. They are vivid in appearance with bright aqua blue feathers on the top of their body except for the head, which is lime colored. The bottom, however, is a rich deep yellow/light orange. Their beak is black, as well as the feathers under their chin. Its feet are of a gray color, save for black talons. The bird has white skin, with its face having nearly no feathers beside a few black ones spaced apart from each other forming a striped pattern around the eyes. The irises are pale light yellow.', '2022-07-29 05:21:05'),
(18, 'Eagle', 12009, '109', 'Accipitridae', '3501a1fc1e8e91cf178fb42968f9dfed1659072145.jpg', 'The name describes a bird of prey large enough to hunt larger vertebrates. Eagles hunt during the day and have very good eyesight. Eagles are generally put in the family Accipitridae. They belong to several groups of genera, some of which are closely related.', '2022-08-20 05:32:50'),
(19, 'Alaskan Malamute', 12010, '110', 'Alaska', '9f26fd6a14debfb6f2feac8051214f071659072308.jpg', 'The Alaskan Malamute (/ˈmæləˌmjuːt/) is a large breed of dog that was originally bred for their strength and endurance to haul heavy freight as a sled dog and hound.[2] They are similar to other arctic, husky, and spitz breeds such as the Greenland Dog, Canadian Eskimo Dog, the Siberian Husky, and the Samoyed.', '2022-07-29 05:25:08');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` varchar(200) DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', '', 'We aim to\r\nProvide timely, specialised veterinary care to injured urban wild animals, rehabilitate them, and then release them into their natural or adoptive habitats.\r\n\r\nCreate awareness, amongst citizens of all ages and backgrounds, about urban wildlife, and to instil a deep regard for their cohabitation needs and when to actively engage in their welfare.\r\n\r\nCommunity outreach and education about our local environment and how we can enrich and protect it.\r\n<div><br></div>\r\n<h2 style=\"text-align:left;\">The Dire Need for Urban Wildlife Hospitals:</h2><br><br>\r\nAs of a 2011 census, Bangalore had seen a human population growth of 53% as compared to 2001. This has grown even further in the last 5 years. These dramatic increases have steadily resulted in urbanisation that has adversely affected the city\'s lakes, parks and partial forests - causing significant ecological imbalance. Not long ago, Bangalore was a city of positive coexistence, rich in urban wildlife. With the effect of urbanisation, we see an increase in displaced animals and orphaned young ones, seeking safety, food and species security.\r\n\r\nWhile the Wildlife Acts are designed to protect the nation\'s wildlife, they cannot protect the wildlife that lives in the cities. This then leaves the citizens of Bangalore city to responsibly and actively engage in enabling animals who coexist alongside us to be cared for, in much the same way we care for our pets, if not ourselves. This defines the role of the PfA Wildlife Hospital, and goes far deeper than human compassion and sensitivity.\r\n\r\n\r\nOver the years, we have had some renowned visitors from the animal world - Gilles Boeuf, President of National Museum of Natural History - Paris, Virginia McKenna of the Born Free Foundation, and herpetologist Gerard Martin, amongst others.\r\n\r\nDevelop a practise that employs better wildlife care techniques, engaging specialists and veterinarians from across the world.\r\n\r\n\r\nUltimately, we’d like to be a centre of excellence for animal care, focussed on urban wildlife.<div><br></div>', NULL, NULL, '2022-08-21 08:49:37'),
(2, 'contactus', 'Contact Us', 'Shavige Malleshwara Hills, 91st Main Rd, 1st Stage, Kumaraswamy Layout, Bengaluru, Karnataka 560078', 'peopleforanimal143@gmail.com', 9353834597, '2022-08-20 05:21:40'),
(3, 'volunteer', ' ', 'Our volunteer programme is open to wildlife enthusiasts and those willing to train for a committed service - such as helping with intensive care, surgeries, and animal rescues in their area.\r\n\r\nWe’d like volunteers to truly gain when they spend time with us, while the organisation gains much needed assistance. Volunteers do have a responsibility - to protect and aid our urban wildlife, by advocacy, by reporting cruelty, and through participation.\r\n\r\nGeneral Volunteering\r\nThere are many areas in which volunteers of all ages can help with. Volunteers can use their talent, inherent skill or pure interest in these. These needs change from time to time, so it is good to stay in touch with our Facebook page to know when/how to help.\r\n\r\nAnimal enclosure cleaning\r\nFeeding the animals\r\nSpecies identification\r\nParticipating in rescue and releases\r\nAssisting the doctor in treatments\r\nCampus enrichment, gardening, painting and conservation\r\nHosting of workshops and roadshows\r\nSurvey skills (studying the ecology within our shelter)\r\nDesign, photography and publicity material\r\nGetting sponsors for the adoption programme\r\n', NULL, NULL, '2022-07-29 03:59:35');

-- --------------------------------------------------------

--
-- Table structure for table `tblticforeigner`
--

CREATE TABLE `tblticforeigner` (
  `ID` int(10) NOT NULL,
  `TicketID` varchar(200) DEFAULT NULL,
  `visitorName` varchar(250) DEFAULT NULL,
  `NoAdult` int(10) DEFAULT NULL,
  `NoChildren` int(10) DEFAULT NULL,
  `AdultUnitprice` varchar(50) DEFAULT NULL,
  `ChildUnitprice` varchar(50) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblticforeigner`
--

INSERT INTO `tblticforeigner` (`ID`, `TicketID`, `visitorName`, `NoAdult`, `NoChildren`, `AdultUnitprice`, `ChildUnitprice`, `PostingDate`) VALUES
(3, '425693290', 'JohnDoe', 6, 3, '1100', '800', '2022-05-25 16:43:43');

-- --------------------------------------------------------

--
-- Table structure for table `tblticindian`
--

CREATE TABLE `tblticindian` (
  `ID` int(10) NOT NULL,
  `TicketID` varchar(100) NOT NULL,
  `visitorName` varchar(255) DEFAULT NULL,
  `NoAdult` int(10) DEFAULT NULL,
  `NoChildren` int(10) DEFAULT NULL,
  `AdultUnitprice` varchar(50) DEFAULT NULL,
  `ChildUnitprice` varchar(50) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblticindian`
--

INSERT INTO `tblticindian` (`ID`, `TicketID`, `visitorName`, `NoAdult`, `NoChildren`, `AdultUnitprice`, `ChildUnitprice`, `PostingDate`) VALUES
(2, '911666414', 'Atul singh', 2, 0, '350', '80', '2022-05-25 01:39:41'),
(3, '562063870', 'Anuj kumar', 4, 1, '300', '80', '2022-05-25 16:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbltickettype`
--

CREATE TABLE `tbltickettype` (
  `ID` int(10) NOT NULL,
  `TicketType` varchar(200) DEFAULT NULL,
  `Price` varchar(50) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltickettype`
--

INSERT INTO `tbltickettype` (`ID`, `TicketType`, `Price`, `CreationDate`) VALUES
(1, 'Normal Adult', '300', '2022-05-30 06:42:56'),
(2, 'Normal Child', '80', '2022-05-30 06:42:27'),
(3, 'Foreigner Adult', '1100', '2022-05-30 06:42:16'),
(4, 'Foreigner Child', '800', '2022-05-30 06:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `vol_registration`
--

CREATE TABLE `vol_registration` (
  `vol_id` int(20) NOT NULL,
  `vol_name` varchar(50) NOT NULL,
  `vol_age` int(20) NOT NULL,
  `vol_email` varchar(50) NOT NULL,
  `vol_phone` int(20) NOT NULL,
  `vol_address` varchar(500) NOT NULL,
  `vol_type` varchar(50) NOT NULL,
  `vol_timing` varchar(20) NOT NULL,
  `vol_duration` varchar(50) NOT NULL,
  `vol_weeks` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblanimal`
--
ALTER TABLE `tblanimal`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblticforeigner`
--
ALTER TABLE `tblticforeigner`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `TicketID` (`TicketID`),
  ADD KEY `TicketID_2` (`TicketID`),
  ADD KEY `priceid` (`AdultUnitprice`);

--
-- Indexes for table `tblticindian`
--
ALTER TABLE `tblticindian`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TicketID` (`TicketID`),
  ADD KEY `pidddd` (`ChildUnitprice`);

--
-- Indexes for table `tbltickettype`
--
ALTER TABLE `tbltickettype`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TicketType` (`TicketType`),
  ADD KEY `Price` (`Price`);

--
-- Indexes for table `vol_registration`
--
ALTER TABLE `vol_registration`
  ADD PRIMARY KEY (`vol_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `donation_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblanimal`
--
ALTER TABLE `tblanimal`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblticforeigner`
--
ALTER TABLE `tblticforeigner`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblticindian`
--
ALTER TABLE `tblticindian`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbltickettype`
--
ALTER TABLE `tbltickettype`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vol_registration`
--
ALTER TABLE `vol_registration`
  MODIFY `vol_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblticforeigner`
--
ALTER TABLE `tblticforeigner`
  ADD CONSTRAINT `priceid` FOREIGN KEY (`AdultUnitprice`) REFERENCES `tbltickettype` (`Price`);

--
-- Constraints for table `tblticindian`
--
ALTER TABLE `tblticindian`
  ADD CONSTRAINT `pidddd` FOREIGN KEY (`ChildUnitprice`) REFERENCES `tbltickettype` (`Price`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
