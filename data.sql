--
-- Database: `singtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `condo`
--

CREATE TABLE IF NOT EXISTS `condo` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `PID` bigint(20) NOT NULL,
  `SwimmingPool` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `idx_PID` (`PID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `condo`
--

INSERT INTO `condo` (`ID`, `PID`, `SwimmingPool`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 2, 2),
(4, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hdb`
--

CREATE TABLE IF NOT EXISTS `hdb` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `PID` bigint(20) NOT NULL,
  `HDBBlock` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `idx_PID` (`PID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hdb`
--

INSERT INTO `hdb` (`ID`, `PID`, `HDBBlock`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 2, 2),
(4, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Type` tinyint(4) DEFAULT '1',
  `Title` char(255) DEFAULT '',
  `Address` text NOT NULL,
  `Bedroom` int(11) DEFAULT '0',
  `Living_room` int(11) DEFAULT '0',
  `Diningroom` int(11) DEFAULT '0',
  `Size` decimal(6,2) DEFAULT '0.00',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`ID`, `Type`, `Title`, `Address`, `Bedroom`, `Living_room`, `Diningroom`, `Size`) VALUES
(1, 1, 'Property1', 'No-4\r\nBeach Road\r\nSingapore-10', 2, 1, 1, 5.00),
(2, 1, 'Property2', 'No-5\r\nBeach Road\r\nSingapore-10', 1, 1, 1, 3.00);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `condo`
--
ALTER TABLE `condo`
  ADD CONSTRAINT `condo_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `property` (`ID`);

--
-- Constraints for table `hdb`
--
ALTER TABLE `hdb`
  ADD CONSTRAINT `hdb_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `property` (`ID`);
