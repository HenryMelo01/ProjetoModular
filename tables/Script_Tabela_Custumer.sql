CREATE TABLE `custumer` (
 
 `ID_custumer` int(11) NOT NULL AUTO_INCREMENT
,
`nome` varchar(50) NOT NULL
,
`idade` int(11) NOT NULL
,
`sexo` bit(1) NOT NULL
,
`cidade` varchar(70) NOT NULL
,
`bairro` varchar(50) NOT NULL

, PRIMARY KEY (`ID_custumer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



