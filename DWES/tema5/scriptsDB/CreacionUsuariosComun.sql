USE `COMUN1_DBdepartamentos`;

CREATE TABLE  `COMUN1_DBdepartamentos`.`Usuarios`(
    `CodUsuario` VARCHAR(10) NOT NULL primary key,
    `DescUsuario` VARCHAR( 250 ) NOT NULL,
    `Password` VARCHAR( 250 ) NOT NULL,
    `Perfil` VARCHAR( 250 ) NOT NULL,
    `UltimaConexion` TIMESTAMP,
    `NumeroAccesos` INT DEFAULT 0
) ENGINE = INNODB;