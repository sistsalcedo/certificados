-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para farojeqn_bdpjhuanuco
CREATE DATABASE IF NOT EXISTS `farojeqn_bdpjhuanuco` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `farojeqn_bdpjhuanuco`;

-- Volcando estructura para tabla farojeqn_bdpjhuanuco.certificados_x_url
CREATE TABLE IF NOT EXISTS `certificados_x_url` (
  `id_certificado_url` int(11) NOT NULL AUTO_INCREMENT,
  `id_curso` int(11) NOT NULL,
  `nombre_curso` varchar(600) NOT NULL,
  `fecha_inicio_curso` datetime NOT NULL,
  `fecha_fin_curso` datetime NOT NULL,
  `organizador_curso` varchar(600) NOT NULL,
  `modelo_certificado` varchar(250) NOT NULL,
  `modalidad_curso` varchar(250) NOT NULL,
  `tpo_certificado` varchar(250) NOT NULL,
  `apellidos_nombres` varchar(500) NOT NULL,
  `id_alumno` int(11) NOT NULL DEFAULT '0',
  `firma_presidente` varchar(50) NOT NULL,
  `firma_organizador` varchar(50) NOT NULL,
  `firma_opcional` varchar(50) DEFAULT NULL,
  `n_certificado` int(10) NOT NULL,
  `codigo_certificado` varchar(250) NOT NULL DEFAULT '0',
  `qr_certificado` varchar(250) NOT NULL DEFAULT '0',
  `f_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `descargado_certificado` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_certificado_url`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='En esta tabla guardamos todos loscertificados, sin crear un pdf y guardarlo en el servidor por falta de espacio. Por eso se crea esta tabla para que los certificados se descarguen nada mas.';

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
