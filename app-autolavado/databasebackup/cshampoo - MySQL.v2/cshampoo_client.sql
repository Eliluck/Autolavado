-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: cshampoo
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `client` (
  `CLIENTE` int NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CALLE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUMERO` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `COLONIA` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `POBLA` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CIUDAD` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ESTADO` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PAIS` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TELEFONO` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DIAS` float DEFAULT NULL,
  `CREDITO` float DEFAULT NULL,
  `DESC1` float DEFAULT NULL,
  `DESC2` float DEFAULT NULL,
  `DESC3` float DEFAULT NULL,
  `DESC4` float DEFAULT NULL,
  `DESC5` float DEFAULT NULL,
  `RFC` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TIPO` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CONTACTO` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `COBRADOR` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `VEND` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PRECIO` float DEFAULT NULL,
  `CP` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROSPECT` smallint DEFAULT NULL,
  `REVISION` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OBSERV` text COLLATE utf8mb4_unicode_ci,
  `ZONA` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CORREO` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `URL` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SALDO` float DEFAULT NULL,
  `USUARIO` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `USUHORA` time DEFAULT NULL,
  `USUFECHA` date DEFAULT NULL,
  `PROVEEDOR` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CURB` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CORTE` int DEFAULT NULL,
  `COBRO` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CONCEPTO` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `INGRESO` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bloqueado` smallint DEFAULT NULL,
  `claveweb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailcobranza` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `embarcar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comision` float DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `puntos` int DEFAULT NULL,
  `recomendado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nuevo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `F_nac` date DEFAULT NULL,
  `sexo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TipoA` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numerointerior` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numeroexterior` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SSMA_TimeStamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `localidad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saldoSBO` float DEFAULT NULL,
  `tcf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Exportado` smallint DEFAULT NULL,
  `Vigencia` datetime DEFAULT NULL,
  `TipoWeb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Activo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PagoForma` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PagoFormaDesc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PagoCuenta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PrePago` smallint DEFAULT NULL,
  `PrePagoDias` int DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UsoCFDI` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PagoMetodo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moneda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ValMoneda` smallint DEFAULT NULL,
  `ValCredito` smallint DEFAULT NULL,
  `pagoBanco` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ApSrv1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ApSrv2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CodAct` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CodActReg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TLIRegApl` smallint DEFAULT NULL,
  `TLIRegArt` smallint DEFAULT NULL,
  `TLIVisitaSuc` smallint DEFAULT NULL,
  `TLIVisitaFch` smallint DEFAULT NULL,
  `Ocupado` smallint DEFAULT NULL,
  `OcupadoSuc` smallint DEFAULT NULL,
  `Regimen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`CLIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-29 17:23:55
