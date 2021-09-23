-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 01:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supply_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_type`
--

CREATE TABLE `business_type` (
  `business_id` int(11) NOT NULL,
  `business_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_type`
--

INSERT INTO `business_type` (`business_id`, `business_type`) VALUES
(1, 'NIC'),
(2, 'Business Reg No');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `code` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `code`, `category`) VALUES
(1, '000001', 'Stationery, Including Photocopy, Digital, Transparency and Typing Papers etc.'),
(2, '000002', 'Printing/Rubber/Date Stamps, etc.'),
(3, '000003	', 'Office and Other Furniture - Wooden'),
(4, '000004 ', 'Office and Other Furniture - Steel'),
(5, '000005', 'Fiber glass Products'),
(6, '000006', 'Office Equipment/ Photocopiers, Fax Machines and Accessories, Magi Boards , etc.'),
(7, '000007', 'Tyres, Tubes and Motor Spare Parts'),
(8, '000008', 'Sawn Timber (Local & Imported )'),
(9, '000009', 'Laboratory and Medical Equipment-Including Dental Equipment'),
(10, '000010	', 'Chemicals, Medicines, Pharmaceuticals'),
(11, '000011', 'Teaching Equipment, Video, Radio, Camera, Photographic Material and Papers, Audio Visual/ Multimedia Projector, Public Address System etc'),
(12, '000012', 'Security Camera System'),
(13, '000013', 'Telephone Sets & Accessories'),
(14, '000014', 'Electrical and Electronic Equipment and Accessories'),
(15, '000015', 'Refrigerators, Deep Freezers, Bottle Coolers and Air Conditioners'),
(16, '000016', 'Computers, Printers, Accessories and Computer Stationery'),
(17, '000017', 'Library Books & Periodicals'),
(18, '000018	', 'Fire Extinguishers'),
(19, '000019', 'Hardware Item/ Building Material/ Paint/ Electrical Appliances, etc.'),
(20, '000020', 'Sanitary ware/ PVC Pipes/ GI Pipes / Accessories/ Water Pumps, etc.'),
(21, '000021', 'Sport Equipment and Sport Gear'),
(22, '000022', 'Plastic and Brass Name Boards/ Signal Boards/ Engraving'),
(23, '000023', 'Brooms, Brushes, Mattresses (Rubberized)'),
(24, '000024', 'Disinfectants and Agro-Chemicals/ Fertilizer, etc.'),
(25, '000025', 'Repairing of Office Equipments'),
(26, '000026', 'Repairing of Electrical Appliances, (Refrigerators/ Air Conditioners/ Video/ Cameras, Computers & Fans, CCTV Systems ,etc.)'),
(27, '000027', 'Installation and Repairing of Network System'),
(28, '000028', 'Repairing and Maintenance of Security Camera System'),
(29, '000029', 'Repairing and Servicing of Motor Vehicles/ Lorries/ Motor Coaches, etc.'),
(30, '000030', 'Repairing and Construction of Buildings and Painting Work, Grill Work,Welding Work and Road Works.'),
(31, '000031', 'House Wiring'),
(32, '000032', 'Cabling and Repairing of Internal Telephone Systems'),
(33, '000033', 'Repairing of Laboratory/ Medical Equipment & Gas Equipment'),
(34, '000034', 'Rehabilitation of Roads and Landscape, Cutting of Trees, Trimming and Removing'),
(35, '000035', 'Repairing of Office Chairs/ Cushioning and Polishing/ Supplying of Stage Curtains'),
(36, '000036', 'Repairing of Furniture - Wooden/ Steel'),
(37, '000037', 'Binding of Library Books and Magazines'),
(38, '000038', 'Laundry Services/ Cleaning of Office Curtains, etc.'),
(39, '000039', 'Tailoring & Supply of Cloaks/ Garlands/ Uniforms, Leather Bags, Towels, etc.'),
(40, '000040', 'Supply of Cow Dung Manure, Soil, Rubber, Sand, Cement Blocks, Bricks, etc.'),
(41, '000041', 'Leasing or Hiring of Vehicles/ Motor Car/ Van/ Lorry/ Motor Coach/ Three Wheeler, Gully Services, etc.'),
(42, '000042', 'Repairing of Auto Air Conditioners and Auto Interior Cleaning (Vehicles)'),
(43, '000043', 'Supply of Labour (Skilled / Unskilled)'),
(44, '000044', 'Transport of Goods, Cutting Earth, Excavation, Leveling, Loading, Unloading Machinery, JCB Machines, BACO Machines, etc.'),
(45, '000045', 'Delivery of Letters and Parcels - Local & Foreign and Clearing of Cargo'),
(46, '000046', 'Vertical Blinds/ Curtains'),
(47, '000047', 'Supply & Installation of Fire Extinguishers'),
(48, '000048', 'Supply of Labour Contracts (Carpentry, Masonry, Electric, Plumbing, Tree Cutting, Cleaning of Gardens, etc.)'),
(49, '000049', 'Private Security Services'),
(50, '000050', 'Cleaning Services/ Garbage Removal Services'),
(51, '000051', 'Pest Control/ Insect Control'),
(52, '000052', 'Conducting Outbound Training Programmes'),
(53, '000053', 'Event Management'),
(54, '000054', 'Providing Foods & Beverages');

-- --------------------------------------------------------

--
-- Table structure for table `foregin_local`
--

CREATE TABLE `foregin_local` (
  `fl_id` int(11) NOT NULL,
  `types` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foregin_local`
--

INSERT INTO `foregin_local` (`fl_id`, `types`) VALUES
(1, 'Foregin'),
(2, 'Local');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `business_type` varchar(50) NOT NULL,
  `foregin_local` varchar(50) NOT NULL,
  `nature` varchar(50) NOT NULL,
  `reg_no` varchar(11) NOT NULL,
  `vat` varchar(11) NOT NULL,
  `ictad` varchar(11) NOT NULL,
  `web_url` varchar(50) NOT NULL,
  `registred` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nature`
--

CREATE TABLE `nature` (
  `id` int(11) NOT NULL,
  `nature_business` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nature`
--

INSERT INTO `nature` (`id`, `nature_business`) VALUES
(1, 'Sale Proprietor'),
(2, 'Public Company'),
(3, 'Company Limited by Guarantee'),
(4, 'Partnership'),
(5, 'PVT(Ltd) Company');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_type`
--
ALTER TABLE `business_type`
  ADD PRIMARY KEY (`business_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foregin_local`
--
ALTER TABLE `foregin_local`
  ADD PRIMARY KEY (`fl_id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nature`
--
ALTER TABLE `nature`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_type`
--
ALTER TABLE `business_type`
  MODIFY `business_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `foregin_local`
--
ALTER TABLE `foregin_local`
  MODIFY `fl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nature`
--
ALTER TABLE `nature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
