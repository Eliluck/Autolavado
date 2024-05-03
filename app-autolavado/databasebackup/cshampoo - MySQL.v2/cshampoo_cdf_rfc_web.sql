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
-- Table structure for table `cdf_rfc_web`
--

DROP TABLE IF EXISTS `cdf_rfc_web`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cdf_rfc_web` (
  `Id` int DEFAULT NULL,
  `RFC` text,
  `regimenfiscal` int DEFAULT NULL,
  `Nombre` text,
  `Calle` text,
  `NumeroExterior` int DEFAULT NULL,
  `NumeroInterior` text,
  `Colonia` text,
  `CP` text,
  `Localidad` int DEFAULT NULL,
  `Municipio` text,
  `Estado` text,
  `Pais` text,
  `Certificado` text,
  `llave` text,
  `Clave` text,
  `Formato` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cdf_rfc_web`
--

LOCK TABLES `cdf_rfc_web` WRITE;
/*!40000 ALTER TABLE `cdf_rfc_web` DISABLE KEYS */;
INSERT INTO `cdf_rfc_web` VALUES (1,'AGO150812H27',601,'AUTOSHAMPOO GONZALITOS','AV. GONZALITOS',500,'','SAN JERONIMO','0345',64640,'MONTERREY','NUEVO LEON','MEX','C:\\FacturaElectronica\\Certificados\\Gonzalitos\\00001000000705090638.cer','C:\\FacturaElectronica\\Certificados\\Gonzalitos\\CSD_PRINCIPAL_AGO150812H27_20240212_165114.key','Ag010203','C:\\FacturaElectronica\\Certificados\\Gonzalitos\\ComprobanteCFDI40.mrt'),(2,'SEX080612G36',601,'SYMA EXPRESS SA DE CV','AV. GONZALITOS',218,'','SAN JERONIMO','0345',64640,'MONTERREY','NUEVO LEON','MEX','','','Se010203',''),(3,'MMI141222PX6',601,'MECANICA EN MINUTOS S.A. DE C.V.','AV. PASEO DE LOS LEONES',8900,'','PUERTA DE HIERRO','3475',64349,'MONTERREY','NUEVO LEON','MEX','','','Se010203',''),(4,'ATO1404236W1',601,'AUTOMOTRIZ PARA TODOS SA DE CV','AV. PABLO A. GONZALEZ PTE.',118,'','SAN JERONIMO','0345',64640,'MONTERREY','NUEVO LEON','MEX','','','Se010203',''),(6,'SUL141212TC6',601,'SERVICIOS DE ULTRA LAVADO','PASEO DE LOS LEONES',8900,'','PUERTA DE HIERRO','3475',64349,'MONTERREY','NUEVO LEON','MEX','C:\\FacturaElectronica\\Certificados\\PuertaHierro\\00001000000504098405.cer','C:\\FacturaElectronica\\Certificados\\PuertaHierro\\CSD_PRINICIPAL_SUL141212TC6_20200602_113613.key','Su010203','C:\\FacturaElectronica\\Certificados\\PuertaHierro\\ComprobanteCFDI40.mrt'),(7,'AGS230502HI9',601,'AUTOSHAMPOO GARZA SADA','EUGENIO GARZA SADA',6217,'','LOS ALAMOS','0501',64890,'MONTERREY','NUEVO LEON','MEX','C:\\FacturaElectronica\\Certificados\\GarzaSada\\00001000000703879025.cer','C:\\FacturaElectronica\\Certificados\\GarzaSada\\CSD_PRINCIPAL_AGS230502HI9_20231207_094511.key','Ag010203','C:\\FacturaElectronica\\Certificados\\GarzaSada\\ComprobanteCFDI40.mrt'),(8,'SAC060118F98',601,'SYMA AUTOSHAMPOO 4','LAZARO CARDENAS',2750,'','15 DE SEPTIEMBRE','0416',64760,'MONTERREY','NUEVO LEON','MEX','C:\\FacturaElectronica\\Certificados\\LazaroCardenas\\00001000000506079123.cer','C:\\FacturaElectronica\\Certificados\\LazaroCardenas\\CSD_PRINCIPAL_SAC060118F98_20201223_160021.key','Sa010203','C:\\FacturaElectronica\\Certificados\\LazaroCardenas\\ComprobanteCFDI40.mrt'),(9,'SAC060629FI6',601,'SYMA AUTOSHAMPOO 5','AV. REVOLUCION',5167,'','CONTRY','0491',64860,'MONTERREY','NUEVO LEON','MEX','C:\\FacturaElectronica\\Certificados\\Revolucion\\CSD_PRINCIPAL_SAC060629FI6_20161221_101434s.cer','C:\\FacturaElectronica\\Certificados\\Revolucion\\CSD_PRINCIPAL_SAC060629FI6_20161221_101434.key','Sa010203','C:\\FacturaElectronica\\Certificados\\Revolucion\\ComprobanteCFDI40.mrt'),(10,'SAS110923SU3',601,'SYMA AUTOSHAMPOO 6','AV. SENDERO',100,'','VALLE DEL CANADA','0764',66059,'GENERAL ESCOBEDO','NUEVO LEON','MEX','C:\\FacturaElectronica\\Certificados\\Sendero\\00001000000506089309.cer','C:\\FacturaElectronica\\Certificados\\Sendero\\CSD_PRINCIPAL_SAS110923SU3_20201228_143752.key','Sa010203','C:\\FacturaElectronica\\Certificados\\Sendero\\ComprobanteCFDI40.mrt'),(14,'ARC170927GE3',601,'AUTOSHAMPOO RUIZ CORTINES','AV. RUIZ CORTINES',103,'0','PASEO DE CUMBRES 1ER SEC.','3038',64346,'MONTERREY','NUEVO LEON','MEX','C:\\FacturaElectronica\\Certificados\\Ruiz Cortinez\\00001000000512022711.cer','C:\\FacturaElectronica\\Certificados\\Ruiz Cortinez\\CSD_PRINCIPAL_ARC170927GE3_20220323_090935.key','Ar010203','C:\\FacturaElectronica\\Certificados\\Ruiz Cortinez\\ComprobanteCFDI40.mrt'),(11,'ANO150409M91',601,'AUTOSHAMPOO DEL NORTE','EUGENIO GARZA SADA',3067,'','ALTA VISTA','0475',64840,'MONTERREY','NUEVO LEON','MEX','C:\\FacturaElectronica\\Certificados\\Tecnologico\\00001000000700324642.cer','C:\\FacturaElectronica\\Certificados\\Tecnologico\\CSD_PRINCIPAL_ANO150409M91_20230607_152821.key','An010203','C:\\FacturaElectronica\\Certificados\\Tecnologico\\ComprobanteCFDI40.mrt'),(12,'PAU051206NT5',601,'P.A.J.E. AUTOSHAMPOO','MANUEL ORDOÑEZ',700,'','BOSQUES DEL PONIENTE','1042',66362,'SANTA CATARINA','NUEVO LEON','MEX','C:\\FacturaElectronica\\Certificados\\SantaCatarina\\00001000000506104592.cer','C:\\FacturaElectronica\\Certificados\\SantaCatarina\\CSD_P.A.J.E._AUTOSHAMPOO_S_DE_RL_DE_CV_PAU051206NT5_20201230_155406.key','SELLOS2020','C:\\FacturaElectronica\\Certificados\\SantaCatarina\\ComprobanteCFDI40.mrt'),(15,'SFA1711131L9',601,'SAN FRANCISCO AUTOSHAMPOO','JOSE VASCONCELOS 1011',1011,'0','CENTRO','0857',66200,'SAN PEDRO GARZA GARCIA','NUEVO LEON','MEX','C:\\FacturaElectronica\\Certificados\\Sanfrancisco\\00001000000511617243.cer','C:\\FacturaElectronica\\Certificados\\Sanfrancisco\\CSD_PRINCIPAL_SFA1711131L9_20220224_165900.key','Sf010203','C:\\FacturaElectronica\\Certificados\\Sanfrancisco\\ComprobanteCFDI40.mrt');
/*!40000 ALTER TABLE `cdf_rfc_web` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-29 10:48:16
