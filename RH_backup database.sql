/*
SQLyog Community Edition- MySQL GUI v8.05 
MySQL - 5.5.5-10.4.8-MariaDB : Database - proyectorh
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`proyectorh` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `proyectorh`;

/*Table structure for table `Candidato_Competencia` */

CREATE TABLE `Candidato_Competencia` (
  `Id_Candiadto_Comp` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Candidato` int(11) NOT NULL,
  `Id_Competencia` int(11) NOT NULL,
  PRIMARY KEY (`Id_Candiadto_Comp`),
  KEY `Id_Candidato` (`Id_Candidato`),
  KEY `Id_Competencia` (`Id_Competencia`),
  CONSTRAINT `candidato_competencia_ibfk_1` FOREIGN KEY (`Id_Candidato`) REFERENCES `Candidatos` (`Id_Candidatos`),
  CONSTRAINT `candidato_competencia_ibfk_2` FOREIGN KEY (`Id_Competencia`) REFERENCES `Competencias` (`Id_Comp`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `Candidatos` */

CREATE TABLE `Candidatos` (
  `Id_Candidatos` int(11) NOT NULL AUTO_INCREMENT,
  `Cedula` varchar(20) DEFAULT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `puesto` int(11) NOT NULL,
  `departamento` int(11) NOT NULL,
  `Salario` varchar(10) DEFAULT NULL,
  `Recomendado` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Id_Candidatos`),
  KEY `puesto` (`puesto`),
  KEY `departamento` (`departamento`),
  CONSTRAINT `candidatos_ibfk_1` FOREIGN KEY (`puesto`) REFERENCES `Puestos` (`Id_Puesto`),
  CONSTRAINT `candidatos_ibfk_2` FOREIGN KEY (`departamento`) REFERENCES `Puestos` (`Id_Puesto`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `Capacitacion` */

CREATE TABLE `Capacitacion` (
  `Id_Cap` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Candidato` int(11) NOT NULL,
  `Descripcion` varchar(40) DEFAULT NULL,
  `Nivel` varchar(40) DEFAULT NULL,
  `F_desde` varchar(40) DEFAULT NULL,
  `F_Hasta` varchar(40) DEFAULT NULL,
  `Institucion` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`Id_Cap`),
  KEY `Id_Candidato` (`Id_Candidato`),
  CONSTRAINT `capacitacion_ibfk_1` FOREIGN KEY (`Id_Candidato`) REFERENCES `Candidatos` (`Id_Candidatos`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `Competencias` */

CREATE TABLE `Competencias` (
  `Id_Comp` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(40) DEFAULT NULL,
  `Estado` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id_Comp`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `Experiencia` */

CREATE TABLE `Experiencia` (
  `Id_exp` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Candidato` int(11) NOT NULL,
  `Empresa` varchar(40) DEFAULT NULL,
  `Puesto` varchar(40) DEFAULT NULL,
  `F_Desde` varchar(40) DEFAULT NULL,
  `F_Hasta` varchar(40) DEFAULT NULL,
  `Salario` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Id_exp`),
  KEY `Id_Candidato` (`Id_Candidato`),
  CONSTRAINT `experiencia_ibfk_1` FOREIGN KEY (`Id_Candidato`) REFERENCES `Candidatos` (`Id_Candidatos`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `Usuario` */

CREATE TABLE `Usuario` (
  `id_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) DEFAULT NULL,
  `clave` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `empleados` */

CREATE TABLE `empleados` (
  `Id_Empleado` int(11) NOT NULL AUTO_INCREMENT,
  `Cedula` varchar(40) DEFAULT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `F_Ingreso` datetime DEFAULT NULL,
  `Departamento` varchar(40) DEFAULT NULL,
  `Puesto` varchar(40) DEFAULT NULL,
  `Salario` varchar(10) DEFAULT NULL,
  `Estado` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id_Empleado`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `factura` */

CREATE TABLE `factura` (
  `id_factura` int(11) NOT NULL AUTO_INCREMENT,
  `idarticulo` varchar(40) DEFAULT NULL,
  `preciounbitario` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_factura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `idiomas` */

CREATE TABLE `idiomas` (
  `Id_Idioma` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) DEFAULT NULL,
  `Estado` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id_Idioma`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `puestos` */

CREATE TABLE `puestos` (
  `Id_Puesto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(40) DEFAULT NULL,
  `Departamento` varchar(40) DEFAULT NULL,
  `Nivel_riesgo` varchar(30) DEFAULT NULL,
  `Salario_min` varchar(5) DEFAULT NULL,
  `Salario_max` varchar(9) DEFAULT NULL,
  `Estado` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id_Puesto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;