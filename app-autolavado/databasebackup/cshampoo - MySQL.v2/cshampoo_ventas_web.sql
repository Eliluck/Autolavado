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
-- Table structure for table `ventas_web`
--

DROP TABLE IF EXISTS `ventas_web`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ventas_web` (
  `VENTA` int NOT NULL,
  `OCUPADO` varchar(10) DEFAULT NULL,
  `TIPO_DOC` varchar(10) DEFAULT NULL,
  `serieDocumento` varchar(20) DEFAULT NULL,
  `NO_REFEREN` varchar(50) DEFAULT NULL,
  `F_EMISION` date DEFAULT NULL,
  `F_VENC` date DEFAULT NULL,
  `CLIENTE` varchar(100) DEFAULT NULL,
  `VEND` varchar(20) DEFAULT NULL,
  `IMPORTE` decimal(10,2) DEFAULT NULL,
  `DESCUENTO` decimal(10,2) DEFAULT NULL,
  `IMPUESTO` decimal(10,2) DEFAULT NULL,
  `PRECIO` decimal(10,2) DEFAULT NULL,
  `COSTO` decimal(10,2) DEFAULT NULL,
  `ALMACEN` varchar(20) DEFAULT NULL,
  `ESTADO` varchar(20) DEFAULT NULL,
  `OBSERV` text,
  `TIPO_CAM` varchar(10) DEFAULT NULL,
  `MONEDA` varchar(10) DEFAULT NULL,
  `DESC1` varchar(50) DEFAULT NULL,
  `DESC2` varchar(50) DEFAULT NULL,
  `DESC3` varchar(50) DEFAULT NULL,
  `DESC4` varchar(50) DEFAULT NULL,
  `DESC5` varchar(50) DEFAULT NULL,
  `DATOS` text,
  `ENFAC` varchar(20) DEFAULT NULL,
  `VENTAREF` varchar(20) DEFAULT NULL,
  `CIERRE` varchar(20) DEFAULT NULL,
  `cierretienda` varchar(20) DEFAULT NULL,
  `DESGLOSE` varchar(20) DEFAULT NULL,
  `COBRANZA` varchar(20) DEFAULT NULL,
  `USUARIO` varchar(20) DEFAULT NULL,
  `USUFECHA` date DEFAULT NULL,
  `USUHORA` time DEFAULT NULL,
  `AUTO` varchar(20) DEFAULT NULL,
  `Relacion` varchar(20) DEFAULT NULL,
  `PEDCLI` varchar(20) DEFAULT NULL,
  `PEMB` varchar(20) DEFAULT NULL,
  `DATEMB` date DEFAULT NULL,
  `AplicarDes` varchar(20) DEFAULT NULL,
  `TipoVenta` varchar(20) DEFAULT NULL,
  `Exportado` varchar(20) DEFAULT NULL,
  `SUCURSAL` varchar(20) DEFAULT NULL,
  `VentaSuc` varchar(20) DEFAULT NULL,
  `Pago1` decimal(10,2) DEFAULT NULL,
  `Pago2` decimal(10,2) DEFAULT NULL,
  `Concepto1` varchar(50) DEFAULT NULL,
  `Concepto2` varchar(50) DEFAULT NULL,
  `Pago3` decimal(10,2) DEFAULT NULL,
  `Concepto3` varchar(50) DEFAULT NULL,
  `Comision` decimal(10,2) DEFAULT NULL,
  `VentaOrigen` varchar(20) DEFAULT NULL,
  `Diario` varchar(20) DEFAULT NULL,
  `Caja` varchar(20) DEFAULT NULL,
  `OrigenDev` varchar(20) DEFAULT NULL,
  `Corte` varchar(20) DEFAULT NULL,
  `Impreso` varchar(20) DEFAULT NULL,
  `BANCO` varchar(20) DEFAULT NULL,
  `NumeroCheque` varchar(20) DEFAULT NULL,
  `estacion` varchar(20) DEFAULT NULL,
  `interes` decimal(10,2) DEFAULT NULL,
  `redondeo` decimal(10,2) DEFAULT NULL,
  `Ticket` varchar(20) DEFAULT NULL,
  `importar` varchar(20) DEFAULT NULL,
  `sucremota` varchar(20) DEFAULT NULL,
  `ventaremota` varchar(20) DEFAULT NULL,
  `comodin` varchar(20) DEFAULT NULL,
  `iespecial` varchar(20) DEFAULT NULL,
  `nodesglosedetalle` varchar(20) DEFAULT NULL,
  `Transporte` varchar(20) DEFAULT NULL,
  `Repartidor` varchar(20) DEFAULT NULL,
  `horasalida` time DEFAULT NULL,
  `horaregreso` time DEFAULT NULL,
  `comisiontel` decimal(10,2) DEFAULT NULL,
  `verificado` varchar(20) DEFAULT NULL,
  `donativo` decimal(10,2) DEFAULT NULL,
  `pagado` decimal(10,2) DEFAULT NULL,
  `comisionvendedor` decimal(10,2) DEFAULT NULL,
  `comodin1` varchar(20) DEFAULT NULL,
  `comodin2` varchar(20) DEFAULT NULL,
  `comodin3` varchar(20) DEFAULT NULL,
  `comodin4` varchar(20) DEFAULT NULL,
  `pago4` decimal(10,2) DEFAULT NULL,
  `concepto4` varchar(50) DEFAULT NULL,
  `pregunta1` varchar(50) DEFAULT NULL,
  `pregunta2` varchar(50) DEFAULT NULL,
  `pregunta3` varchar(50) DEFAULT NULL,
  `pregunta4` varchar(50) DEFAULT NULL,
  `pregunta5` varchar(50) DEFAULT NULL,
  `fechacierre` date DEFAULT NULL,
  `businessintelligence` varchar(20) DEFAULT NULL,
  `pedido` varchar(20) DEFAULT NULL,
  `cambioDeEstado` varchar(20) DEFAULT NULL,
  `placas` varchar(20) DEFAULT NULL,
  `kilometraje` varchar(20) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `serie` varchar(20) DEFAULT NULL,
  `motor` varchar(20) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `modelo` varchar(20) DEFAULT NULL,
  `horaentrega` time DEFAULT NULL,
  `propina` decimal(10,2) DEFAULT NULL,
  `paraconcentrador` varchar(20) DEFAULT NULL,
  `felectronica` varchar(20) DEFAULT NULL,
  `coriginal` varchar(20) DEFAULT NULL,
  `sdigital` varchar(20) DEFAULT NULL,
  `ncortez` varchar(20) DEFAULT NULL,
  `archivofe` varchar(20) DEFAULT NULL,
  `facturado` varchar(20) DEFAULT NULL,
  `SSMA_TimeStamp` varchar(20) DEFAULT NULL,
  `ticketsno` varchar(20) DEFAULT NULL,
  `ventatipo` varchar(20) DEFAULT NULL,
  `motdev` varchar(20) DEFAULT NULL,
  `facorg` varchar(20) DEFAULT NULL,
  `tipodocorg` varchar(20) DEFAULT NULL,
  `foliodocorg` varchar(20) DEFAULT NULL,
  `pedidoSBO` varchar(20) DEFAULT NULL,
  `dAuto` varchar(20) DEFAULT NULL,
  `HoraEnt` time DEFAULT NULL,
  `HoraRecep` time DEFAULT NULL,
  `retraso` decimal(10,2) DEFAULT NULL,
  `aefolio` varchar(20) DEFAULT NULL,
  `reproceso` varchar(20) DEFAULT NULL,
  `ususrv` varchar(20) DEFAULT NULL,
  `proxser` varchar(20) DEFAULT NULL,
  `UUID` varchar(20) DEFAULT NULL,
  `ComprobanteXML` text,
  `PagoForma` varchar(20) DEFAULT NULL,
  `PagoFormaDesc` varchar(20) DEFAULT NULL,
  `PagoCuenta` varchar(20) DEFAULT NULL,
  `ActWeb` varchar(20) DEFAULT NULL,
  `OcupadoSuc` varchar(20) DEFAULT NULL,
  `Sinc20` varchar(20) DEFAULT NULL,
  `SucSinc` varchar(20) DEFAULT NULL,
  `LogCFDI` text,
  PRIMARY KEY (`VENTA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas_web`
--

LOCK TABLES `ventas_web` WRITE;
/*!40000 ALTER TABLE `ventas_web` DISABLE KEYS */;
/*!40000 ALTER TABLE `ventas_web` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-29 10:48:15
