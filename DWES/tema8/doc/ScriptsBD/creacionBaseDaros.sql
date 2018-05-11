
USE `COMUN1_valdekiru20`;

CREATE TABLE  `COMUN1_valdekiru20`.`Usuarios`(
    `CodUsuario` VARCHAR(8) NOT NULL primary key,
	`Password` VARCHAR( 250 ) NOT NULL,
    `DescUsuario` VARCHAR( 255 ) NOT NULL,
	`NumeroAccesos` INT DEFAULT 0,
	`UltimaConexion` TIMESTAMP,
    `Perfil` VARCHAR( 250 ) NOT NULL
) ENGINE = INNODB;

CREATE TABLE  `COMUN1_valdekiru20`.`Departamentos`(
    `CodDepartamento` VARCHAR(3) NOT NULL primary key,
	`DescDepartamento` VARCHAR(255) NOT NULL,
	`FechaCreacionDepartamento` TIMESTAMP NOT NULL,
	`VolumenDeNegocio` float,
	`FechaBajaDepartamento` TIMESTAMP
) ENGINE = INNODB;

CREATE TABLE  `COMUN1_valdekiru20`.`Cuestion`(
	`CodCuestion` int AUTO_INCREMENT primary key,
	`DescCuestion` VARCHAR(255) NOT NULL,
	`NumOrden` int not null,
	`TipoRespuesta` int not null
) ENGINE = INNODB;

CREATE TABLE  `COMUN1_valdekiru20`.`Opiniones`(
	`CodUsuario` VARCHAR(10) NOT NULL,
	`CodCuestion` int AUTO_INCREMENT,
	`ValorOpinion` int not null,
	 PRIMARY KEY  (`CodUsuario`,`CodCuestion`),
	 FOREIGN KEY (CodUsuario) REFERENCES Usuarios(CodUsuario) on delete cascade on update cascade,
	 FOREIGN KEY (CodCuestion) REFERENCES Cuestion(CodCuestion) on delete cascade on update cascade
) ENGINE = INNODB;
