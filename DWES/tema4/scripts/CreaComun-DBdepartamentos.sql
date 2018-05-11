CREATE DATABASE `COMUN1_DBdepartamentos` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `COMUN1_DBdepartamentos`;

CREATE TABLE  `COMUN1_DBdepartamentos`.`Departamento`( 
    `CodDepartamento` VARCHAR(3) NOT NULL primary key, 
    `DescDepartamento` VARCHAR( 250 ) NOT NULL
) ENGINE = INNODB;
