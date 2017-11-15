CREATE TABLE IF NOT EXISTS `custumer` (
`ID_custumer` int(11) NOT NULL AUTO_INCREMENT
,`nome` varchar(50) NOT NULL
,`idade` int(11) NOT NULL
,`sexo` bit(1) NOT NULL
,`ID_neighborhood` int(11) NOT NULL
, PRIMARY KEY (`ID_custumer`)
, FOREIGN KEY (`ID_neighborhood`) REFERENCES `neighborhood` (`ID_neighborhood`) 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



