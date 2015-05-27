# Host: localhost  (Version: 5.6.22-log)
# Date: 2015-01-21 11:06:28
# Generator: MySQL-Front 5.3  (Build 4.191)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "actividad"
#

DROP TABLE IF EXISTS `actividad`;
CREATE TABLE `actividad` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(35) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `foto` blob,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "actividad"
#

INSERT INTO `actividad` VALUES (1,'FELIZ CUMPLEAÑOS DRUGO','2015-01-12',X'696D616765732F61637469766964616465732F6361726E6176616C2E6A7067');

#
# Structure for table "carta"
#

DROP TABLE IF EXISTS `carta`;
CREATE TABLE `carta` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text,
  `precio` float DEFAULT NULL,
  `foto` blob,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

#
# Data for table "carta"
#

INSERT INTO `carta` VALUES (1,'POLLO A LA BRASA','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum id ullam vitae officia non distinctio reiciendis',75.8,X'696D616765732F706F6C6C6F2E6A7067'),(2,'HAMBURGUESA','Tempora, illo ex aliquid, asperiores similique dolorem, numquam labore eaque iusto laudantium tenetur quo!',19.4,X'696D616765732F646F626C652E6A7067'),(4,'SILPANCHO','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia voluptas modi porro, veniam, excepturi enim, ullam corporis aperiam optio cum recusandae explicabo ad aut error nulla aliquam sequi voluptates tempore! Y personal',15.4,X'696D616765732F63617274612F6473635F303838352E6A7067'),(6,'1/4 DE POLLO','CUARTO DE POLLO ACOMPAÑADO DE PAPAS FRITAS Y ADEREZOS',25.5,X'696D616765732F63617274612F31356665356661706F6C6C6F6272617361363237702E6A7067'),(7,'CHORIZO CHUQUISAQUEÑO','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia voluptas modi porro, veniam, excepturi enim, ullam corporis aperiam optio cum recusandae explicabo ad aut error nulla aliquam sequi voluptates tempore! Y personal',26.7,X'696D616765732F63617274612F6465736361726761202831292E6A7067');

#
# Structure for table "menuhoy"
#

DROP TABLE IF EXISTS `menuhoy`;
CREATE TABLE `menuhoy` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `idPlato` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

#
# Data for table "menuhoy"
#

INSERT INTO `menuhoy` VALUES (2,2),(3,3),(5,4),(6,6),(7,7);

#
# Structure for table "personal"
#

DROP TABLE IF EXISTS `personal`;
CREATE TABLE `personal` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `paterno` varchar(30) DEFAULT NULL,
  `materno` varchar(30) DEFAULT NULL,
  `nombres` varchar(40) DEFAULT NULL,
  `foto` blob,
  `emplemes` int(11) DEFAULT NULL,
  `funcion` text,
  `cargo` varchar(20) DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "personal"
#

INSERT INTO `personal` VALUES (1,'DIAZ','ROJAS','GABRIELA',X'696D616765732F706572736F6E616C2F6761622E6A7067',0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia voluptas modi porro, veniam, excepturi enim, ullam corporis aperiam optio cum recusandae explicabo ad aut error nulla aliquam sequi voluptates tempore!','COCINERO'),(2,'RAMIREZ','CRUZ','DAVID',X'696D616765732F706572736F6E616C2F4D415243454C4F312E6A7067',0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia voluptas modi porro, veniam, excepturi enim, ullam corporis aperiam optio cum recusandae explicabo ad aut error nulla aliquam sequi voluptates tempore!','REPARTIDOR'),(3,'RAMIREZ','CARVAJAL','LORENA',X'696D616765732F706572736F6E616C2F70616765325F696D67352E6A7067',0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia voluptas modi porro, veniam, excepturi enim, ullam corporis aperiam optio cum recusandae explicabo ad aut error nulla aliquam sequi voluptates tempore!','COCINERO'),(4,'CANDELARIA','MALDONADO','GARBIÑE',X'696D616765732F706572736F6E616C2F70616765325F696D67342E6A7067',0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia voluptas modi porro, veniam, excepturi enim, ullam corporis aperiam optio cum recusandae explicabo ad aut error nulla aliquam sequi voluptates tempore!','COCINERO'),(5,'BALBOA','CRUZ','ELVIA',X'696D616765732F706572736F6E616C2F70616765345F696D67342E6A7067',0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia voluptas modi porro, veniam, excepturi enim, ullam corporis aperiam optio cum recusandae explicabo ad aut error nulla aliquam sequi voluptates tempore!','MESERO'),(6,'MARQUEZ','FERNANDEZ','MOISES',X'696D616765732F706572736F6E616C2F70616765325F696D67362E6A7067',1,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia voluptas modi porro, veniam, excepturi enim, ullam corporis aperiam optio cum recusandae explicabo ad aut error nulla aliquam sequi voluptates tempore!','COCINERO');

#
# Structure for table "usuario"
#

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `paterno` varchar(30) DEFAULT NULL,
  `materno` varchar(30) DEFAULT NULL,
  `ci` varchar(15) DEFAULT NULL,
  `nick` varchar(25) DEFAULT NULL,
  `pass` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "usuario"
#

INSERT INTO `usuario` VALUES (1,'NANDO','MEDRANO','NINA','6051443','kuervo','123456');
