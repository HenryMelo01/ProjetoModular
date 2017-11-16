CREATE TABLE `goals` (
  `ID_custumer` int(11) NOT NULL,
  `descGoals` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `goals`
  ADD KEY `ID_custumer` (`ID_custumer`);
ALTER TABLE `goals`
  ADD CONSTRAINT `goals_ibfk_1` FOREIGN KEY (`ID_custumer`) REFERENCES `custumer` (`ID_custumer`);

