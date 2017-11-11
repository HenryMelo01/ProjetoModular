CREATE TABLE `goals` (

 `ID_goals` int(11) NOT NULl AUTO_INCREMENT
,
`ID_custumer` int(11) NOT NULL
,
`descGoals` varchar(30) NOT NULL

, PRIMARY KEY (`ID_goals`)
, FOREIGN KEY (`ID_custumer`) REFERENCES `custumer` (`ID_custumer`) 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
