CREATE TABLE `bdTesteProjetoModular`.`cadastro` (
`ID` INT NOT NULL AUTO_INCREMENT 
, `nome` VARCHAR(50) NOT NULL 
, `idade` INT NOT NULL 
, `sexo` BIT NOT NULL 
, `cidade` VARCHAR(70) NOT NULL 
, `bairro` VARCHAR(50) NOT NULL 
, PRIMARY KEY (`ID`)
) ENGINE = MyISAM COMMENT = 'Esboco da primeira tabela do sistema';
