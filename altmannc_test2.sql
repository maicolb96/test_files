-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2023 a las 22:04:57
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `altmannc_test2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `IdProceso` int(11) NOT NULL,
  `dietrich2` varchar(50) DEFAULT NULL,
  `fLukas` varchar(45) DEFAULT NULL,
  `contOlor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`IdProceso`, `dietrich2`, `fLukas`, `contOlor`) VALUES
(1, '1', '1', '1'),
(2, '1', '1', '1'),
(3, '1', '1', '1'),
(4, '1', '', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapas`
--

CREATE TABLE `etapas` (
  `IdProceso` varchar(50) NOT NULL,
  `NombreEtapa` varchar(50) NOT NULL,
  `HoraInicio` time DEFAULT NULL,
  `HoraFin` time DEFAULT NULL,
  `Temperatura` varchar(50) DEFAULT NULL,
  `Presion` varchar(50) DEFAULT NULL,
  `HoraToma` varchar(50) DEFAULT NULL,
  `Comentario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `etapas`
--

INSERT INTO `etapas` (`IdProceso`, `NombreEtapa`, `HoraInicio`, `HoraFin`, `Temperatura`, `Presion`, `HoraToma`, `Comentario`) VALUES
('1', 'triturado', '06:28:00', '07:29:00', NULL, NULL, NULL, NULL),
('1', 'fusion', '07:29:00', '08:29:00', '-2', '3', NULL, NULL),
('1', 'sulfurico', '06:34:00', '09:34:00', NULL, NULL, NULL, NULL),
('1', 'sulfurico1', '06:34:00', '09:34:00', '1', '1', NULL, NULL),
('1', 'sostener1', '19:35:00', NULL, '1', '1', NULL, NULL),
('1', 'sostener2', NULL, NULL, '1', '1', NULL, NULL),
('1', 'sostener3', NULL, '20:36:00', '1', '1', NULL, NULL),
('1', 'enfriado1', NULL, NULL, '1', '1', NULL, NULL),
('1', 'enfriado2', NULL, NULL, '1', '1', NULL, NULL),
('1', 'carga7001', '06:38:00', NULL, '1', '1', NULL, 'ee'),
('1', 'carga7002', NULL, NULL, '1', '1', NULL, 'ee'),
('1', 'carga7003', NULL, NULL, '1', '1', NULL, 'ee'),
('1', 'carga7004', NULL, NULL, '1', '1', NULL, 'ee'),
('1', 'carga7005', NULL, '07:39:00', '1', '1', NULL, 'ee'),
('1', 'reaccion1', '06:41:00', NULL, '1', '1', NULL, 'ee'),
('1', 'reaccion2', NULL, NULL, '1', '1', NULL, 'ee'),
('1', 'reaccion3', NULL, NULL, '1', '1', NULL, 'ee'),
('1', 'reaccion4', NULL, NULL, '1', '1', NULL, 'ee'),
('1', 'reaccion5', NULL, NULL, '1', '1', NULL, 'ee'),
('1', 'reaccion6', NULL, NULL, '1', '1', NULL, 'ee'),
('1', 'reaccion7', NULL, '07:42:00', '1', '1', NULL, 'ee'),
('1', 'adicionarstw', '06:46:00', '07:46:00', '1', '1', NULL, NULL),
('1', 'ReaccionNeutra1', '20:01:00', NULL, '1', '1', NULL, '1'),
('1', 'ReaccionNeutra2', NULL, NULL, '1', '1', NULL, '1'),
('1', 'ReaccionNeutra3', NULL, NULL, '1', '1', NULL, '1'),
('1', 'ReaccionNeutra4', NULL, '08:01:00', '1', '1', NULL, '1'),
('1', 'homogenizacion', '08:01:00', NULL, '1', '1', NULL, '1'),
('1', 'homogenizacion2', NULL, NULL, '1', '1', NULL, '1'),
('1', 'homogenizacion3', NULL, '08:01:00', '1', '1', NULL, '1'),
('1', 'RevisionOlorFDO035_1', '08:21:00', '08:21:00', '1', '1', NULL, NULL),
('1', 'RevisionOlorFDO035_2', '08:32:00', '08:32:00', '1', '1', NULL, NULL),
('1', 'Enfriet85-', '08:33:00', '08:33:00', '1', NULL, NULL, NULL),
('1', 'DescargaIbc', '09:47:00', '10:47:00', NULL, NULL, NULL, NULL),
('1', 'PasoFinal', '10:49:00', '11:49:00', NULL, NULL, NULL, NULL),
('2', 'triturado', '00:54:00', '00:56:00', NULL, NULL, NULL, NULL),
('2', 'fusion', '01:56:00', '01:54:00', '1', '1', NULL, NULL),
('2', 'sulfurico', '01:54:00', '02:55:00', NULL, NULL, NULL, NULL),
('2', 'sulfurico1', '01:54:00', '02:55:00', '1', '1', NULL, NULL),
('2', 'sostener1', '01:55:00', NULL, '1', '1', NULL, NULL),
('2', 'sostener2', NULL, NULL, '1', '1', NULL, NULL),
('2', 'sostener3', NULL, '01:55:00', '1', '1', NULL, NULL),
('2', 'enfriado1', NULL, NULL, '1', '1', NULL, NULL),
('2', 'enfriado2', NULL, NULL, '1', '1', NULL, NULL),
('2', 'carga7001', '00:56:00', NULL, '1', '1', NULL, '1'),
('2', 'carga7002', NULL, NULL, '1', '1', NULL, '1'),
('2', 'carga7003', NULL, NULL, '1', '1', NULL, '1'),
('2', 'carga7004', NULL, NULL, '1', '1', NULL, '1'),
('2', 'carga7005', NULL, '01:56:00', '1', '1', NULL, '1'),
('2', 'reaccion1', '01:56:00', NULL, '1', '1', NULL, '1'),
('2', 'reaccion2', NULL, NULL, '1', '1', NULL, '1'),
('2', 'reaccion3', NULL, NULL, '1', '1', NULL, '1'),
('2', 'reaccion4', NULL, NULL, '1', '1', NULL, '1'),
('2', 'reaccion5', NULL, NULL, '1', '1', NULL, '1'),
('2', 'reaccion6', NULL, NULL, '1', '1', NULL, '1'),
('2', 'reaccion7', NULL, '01:57:00', '1', '1', NULL, '1'),
('3', 'triturado', '02:00:00', '02:00:00', NULL, NULL, NULL, NULL),
('3', 'fusion', '02:00:00', '02:00:00', '1', '1', NULL, NULL),
('3', 'sulfurico', '01:00:00', '02:00:00', NULL, NULL, NULL, NULL),
('3', 'sulfurico1', '01:00:00', '02:00:00', '1', '1', NULL, NULL),
('3', 'sostener1', '02:00:00', NULL, '1', '1', NULL, NULL),
('3', 'sostener2', NULL, NULL, '1', '1', NULL, NULL),
('3', 'sostener3', NULL, '02:01:00', '1', '1', NULL, NULL),
('3', 'enfriado1', NULL, NULL, '1', '1', NULL, NULL),
('3', 'enfriado2', NULL, NULL, '1', '1', NULL, NULL),
('3', 'carga7001', '01:01:00', NULL, '1', '1', NULL, '1'),
('3', 'carga7002', NULL, NULL, '1', '1', NULL, '1'),
('3', 'carga7003', NULL, NULL, '1', '1', NULL, '1'),
('3', 'carga7004', NULL, NULL, '1', '1', NULL, '1'),
('3', 'carga7005', NULL, '02:01:00', '1', '1', NULL, '1'),
('3', 'reaccion1', '01:01:00', NULL, '1', '1', NULL, '1'),
('3', 'reaccion2', NULL, NULL, '1', '1', NULL, '1'),
('3', 'reaccion3', NULL, NULL, '1', '1', NULL, '1'),
('3', 'reaccion4', NULL, NULL, '1', '1', NULL, '1'),
('3', 'reaccion5', NULL, NULL, '1', '1', NULL, '1'),
('3', 'reaccion6', NULL, NULL, '1', '1', NULL, '1'),
('3', 'reaccion7', NULL, '02:02:00', '1', '1', NULL, '1'),
('3', 'adicionarstw', '02:02:00', '03:02:00', '1', '1', NULL, NULL),
('3', 'ReaccionNeutra1', '02:02:00', NULL, '1', '1', NULL, '1'),
('3', 'ReaccionNeutra2', NULL, NULL, '1', '1', NULL, '1'),
('3', 'ReaccionNeutra3', NULL, NULL, '1', '1', NULL, '1'),
('3', 'ReaccionNeutra4', NULL, '03:03:00', '1', '1', NULL, '1'),
('3', 'homogenizacion', '02:03:00', NULL, '1', '1', NULL, '1'),
('3', 'homogenizacion2', NULL, NULL, '1', '1', NULL, '1'),
('3', 'homogenizacion3', NULL, '06:03:00', '1', '1', NULL, '1'),
('3', 'RevisionOlorFDO035_1', '04:03:00', '04:03:00', '1', '1', NULL, NULL),
('3', 'RevisionOlorFDO035_2', '02:05:00', '03:06:00', '1', '1', NULL, NULL),
('3', 'Enfriet85-', '02:07:00', '03:07:00', '1', NULL, NULL, NULL),
('3', 'DescargaIbc', '03:09:00', '06:09:00', NULL, NULL, NULL, NULL),
('3', 'PasoFinal', '02:09:00', '06:09:00', NULL, NULL, NULL, NULL),
('4', 'triturado', '03:44:00', '05:44:00', NULL, NULL, NULL, NULL),
('4', 'fusion', '02:44:00', '02:44:00', '1', '1', NULL, NULL),
('4', 'sulfurico', '02:36:00', '02:36:00', NULL, NULL, NULL, NULL),
('4', 'sulfurico1', '02:36:00', '02:36:00', '1', '1', NULL, NULL),
('4', 'sostener1', '00:00:00', NULL, '1', '1', NULL, NULL),
('4', 'sostener2', NULL, NULL, '1', '1', NULL, NULL),
('4', 'sostener3', NULL, '04:51:00', '1', '1', NULL, NULL),
('4', 'enfriado1', NULL, NULL, '1', '1', NULL, NULL),
('4', 'enfriado2', NULL, NULL, '1', '1', NULL, NULL),
('4', 'carga7001', '02:52:00', NULL, '1', '1', NULL, '1'),
('4', 'carga7002', NULL, NULL, '1', '1', NULL, '1'),
('4', 'carga7003', NULL, NULL, '1', '1', NULL, '1'),
('4', 'carga7004', NULL, NULL, '1', '1', NULL, '1'),
('4', 'carga7005', NULL, '02:52:00', '1', '1', NULL, '1'),
('4', 'reaccion1', '02:52:00', NULL, '1', '1', NULL, '1'),
('4', 'reaccion2', NULL, NULL, '1', '1', NULL, '1'),
('4', 'reaccion3', NULL, NULL, '1', '1', NULL, '1'),
('4', 'reaccion4', NULL, NULL, '1', '1', NULL, '1'),
('4', 'reaccion5', NULL, NULL, '1', '1', NULL, '1'),
('4', 'reaccion6', NULL, NULL, '1', '1', NULL, '1'),
('4', 'reaccion7', NULL, '02:53:00', '1', '1', NULL, '1'),
('4', 'adicionarstw', '02:53:00', '03:53:00', '1', '1', NULL, NULL),
('4', 'ReaccionNeutra1', '02:53:00', NULL, '1', '1', NULL, '1'),
('4', 'ReaccionNeutra2', NULL, NULL, '1', '1', NULL, '1'),
('4', 'ReaccionNeutra3', NULL, NULL, '1', '1', NULL, '1'),
('4', 'ReaccionNeutra4', NULL, '06:53:00', '1', '1', NULL, '1'),
('4', 'homogenizacion', '03:53:00', NULL, '1', '1', NULL, '1'),
('4', 'homogenizacion2', NULL, NULL, '1', '1', NULL, '1'),
('4', 'homogenizacion3', NULL, '06:54:00', '1', '1', NULL, '1'),
('4', 'Enfriet85-', '02:54:00', '03:54:00', '1', NULL, NULL, NULL),
('4', 'DescargaIbc', '06:55:00', '02:55:00', NULL, NULL, NULL, NULL),
('4', 'PasoFinal', '02:57:00', '06:57:00', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiaprima`
--

CREATE TABLE `materiaprima` (
  `IdProceso` int(11) NOT NULL,
  `lote_nan000` varchar(255) DEFAULT NULL,
  `nan000` varchar(10) DEFAULT NULL,
  `lote_swf098` varchar(255) DEFAULT NULL,
  `swf098` varchar(10) DEFAULT NULL,
  `lote_stw000` varchar(255) DEFAULT NULL,
  `stw000` varchar(10) DEFAULT NULL,
  `lote_fdo037` varchar(255) DEFAULT NULL,
  `fdo037` varchar(10) DEFAULT NULL,
  `lote_myo000` varchar(255) DEFAULT NULL,
  `myo000` varchar(10) DEFAULT NULL,
  `lote_stw0002` varchar(255) DEFAULT NULL,
  `stw0002` varchar(10) DEFAULT NULL,
  `lote_csc050` varchar(255) DEFAULT NULL,
  `csc050` varchar(10) DEFAULT NULL,
  `lote_stw0003` varchar(255) DEFAULT NULL,
  `stw0003` varchar(10) DEFAULT NULL,
  `lote_nanace` varchar(255) DEFAULT NULL,
  `nanace` varchar(10) DEFAULT NULL,
  `total_materia_p` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materiaprima`
--

INSERT INTO `materiaprima` (`IdProceso`, `lote_nan000`, `nan000`, `lote_swf098`, `swf098`, `lote_stw000`, `stw000`, `lote_fdo037`, `fdo037`, `lote_myo000`, `myo000`, `lote_stw0002`, `stw0002`, `lote_csc050`, `csc050`, `lote_stw0003`, `stw0003`, `lote_nanace`, `nanace`, `total_materia_p`) VALUES
(1, 'TEST1', '1', 'TEST1', '1', 'TEST1', '1', 'TEST1', '1', 'TEST1', '1', 'TEST1', '1', 'TEST1', '1', 'TEST1', '1', '', '', '8'),
(2, '', '', 'test', '1', 'test', '1', 'test', '1', 'test', '1', 'test', '1', 'test', '1', 'test', '1', 'test', '1', '8'),
(3, '', '', 'test', '1', 'test', '1', 'test', '1', 'test', '1', 'test', '1', 'test', '1', 'test', '1', 'test', '1', '8'),
(4, '', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nfo`
--

CREATE TABLE `nfo` (
  `IdProceso` int(11) NOT NULL,
  `nfo` varchar(50) NOT NULL,
  `numeroLote` varchar(50) NOT NULL,
  `MatPriFP04` varchar(2) DEFAULT NULL,
  `MatPriSeparada` varchar(2) DEFAULT NULL,
  `MateriaPrimacol` varchar(2) DEFAULT NULL,
  `ReactorLimpio` varchar(50) DEFAULT NULL,
  `HermeticidadReactor` varchar(50) DEFAULT NULL,
  `ReactorFunciona` varchar(50) DEFAULT NULL,
  `VacioFunciona` varchar(50) DEFAULT NULL,
  `VaporFunciona` varchar(50) DEFAULT NULL,
  `EnfriamientoFunciona` varchar(50) DEFAULT NULL,
  `EmisionesFunciona` varchar(50) DEFAULT NULL,
  `phsodatanque` varchar(50) DEFAULT NULL,
  `CondensadorFunciona` varchar(50) DEFAULT NULL,
  `ApruebaInicio` varchar(2) DEFAULT NULL,
  `RazonesNoAprob` varchar(200) DEFAULT NULL,
  `SeguridadNaftaleno` varchar(2) DEFAULT NULL,
  `EquipoNaftaleno` varchar(2) DEFAULT NULL,
  `EnfriamientoCerrado` varchar(2) DEFAULT NULL,
  `ValvBloqueo` varchar(2) DEFAULT NULL,
  `AbrirControlOlores` varchar(2) DEFAULT NULL,
  `Estartazos` varchar(2) DEFAULT NULL,
  `AgitadorOk` varchar(2) DEFAULT NULL,
  `ProblemaFund` varchar(2) DEFAULT NULL,
  `ProblemaFundirNaf` varchar(200) DEFAULT NULL,
  `SeguridadSulfurico` varchar(2) DEFAULT NULL,
  `EquipoSulfurico` varchar(2) DEFAULT NULL,
  `Vapor` varchar(2) DEFAULT NULL,
  `ProblemaSWFO` varchar(2) DEFAULT NULL,
  `TextoProblemaSWFO` varchar(500) DEFAULT NULL,
  `CierreControlOlores` varchar(2) DEFAULT NULL,
  `EvacuarCamisa` varchar(2) DEFAULT NULL,
  `SuministroVapor` varchar(2) DEFAULT NULL,
  `SeguridadFDO` varchar(2) DEFAULT NULL,
  `EquipoFDO` varchar(2) DEFAULT NULL,
  `LineaTierraOk` varchar(2) DEFAULT NULL,
  `BombaNeumaticaOk` varchar(2) DEFAULT NULL,
  `ConexionOk` varchar(2) DEFAULT NULL,
  `MangueraOk` varchar(2) DEFAULT NULL,
  `LineaCargaOk` varchar(2) DEFAULT NULL,
  `ValvulasCerradas` varchar(2) DEFAULT NULL,
  `CapacidadTanque` varchar(2) DEFAULT NULL,
  `ProblemaCondensacion` varchar(2) DEFAULT NULL,
  `TextoProblemaCondensacion` varchar(250) DEFAULT NULL,
  `SeguridadCSO` varchar(2) DEFAULT NULL,
  `EquipoCSO` varchar(2) DEFAULT NULL,
  `OlorFormol` varchar(2) DEFAULT NULL,
  `OlorFormol2` varchar(2) DEFAULT NULL,
  `ph10` varchar(45) DEFAULT NULL,
  `Csc050Ajuste` varchar(45) DEFAULT NULL,
  `Stw00Ajuste` varchar(45) DEFAULT NULL,
  `ph10Fin` varchar(45) DEFAULT NULL,
  `ProductoBrillante` varchar(2) DEFAULT NULL,
  `HoraInicioLukas` time DEFAULT NULL,
  `HoraFinLukas` time DEFAULT NULL,
  `ProductoBrillante2` varchar(2) DEFAULT NULL,
  `NotificarLaboratorio` varchar(200) DEFAULT NULL,
  `EnviarPrevia1` varchar(2) DEFAULT NULL,
  `AutorizaDescarga` varchar(2) DEFAULT NULL,
  `SolicitantePrevia1` varchar(255) DEFAULT NULL,
  `AspectoPrevia1` varchar(255) DEFAULT NULL,
  `SolidosPrevia1` decimal(10,4) DEFAULT NULL,
  `phPrevia1` decimal(10,4) DEFAULT NULL,
  `SolubilidadPrevia1` varchar(255) DEFAULT NULL,
  `AjustarPrevia1` int(2) DEFAULT NULL,
  `PreviaConforme1` int(2) DEFAULT NULL,
  `PreviaNoConforme1` int(2) DEFAULT NULL,
  `HoraInicioPrevia1` time DEFAULT NULL,
  `HoraFinPrevia1` time DEFAULT NULL,
  `PreviaAnalizadaPor1` varchar(255) DEFAULT NULL,
  `PreviaAprobadaPor1` varchar(255) DEFAULT NULL,
  `SolicitantePrevia2` varchar(255) DEFAULT NULL,
  `AspectoPrevia2` varchar(255) DEFAULT NULL,
  `SolidosPrevia2` decimal(10,4) DEFAULT NULL,
  `phPrevia2` decimal(10,4) DEFAULT NULL,
  `SolubilidadPrevia2` varchar(255) DEFAULT NULL,
  `AjustarPrevia2` int(2) DEFAULT NULL,
  `PreviaConforme2` int(2) DEFAULT NULL,
  `PreviaNoConforme2` int(2) DEFAULT NULL,
  `HoraInicioPrevia2` time DEFAULT NULL,
  `HoraFinPrevia2` time DEFAULT NULL,
  `PreviaAnalizadaPor2` varchar(255) DEFAULT NULL,
  `PreviaAprobadaPor2` varchar(255) DEFAULT NULL,
  `SegNFO` varchar(2) DEFAULT NULL,
  `EquipoNFO` varchar(2) DEFAULT NULL,
  `AgitacionOff` varchar(2) DEFAULT NULL,
  `TalegoDescarga` varchar(2) DEFAULT NULL,
  `DescripcionResiduo` varchar(500) DEFAULT NULL,
  `ResponsableDescarga` varchar(255) DEFAULT NULL,
  `Bascula` varchar(255) DEFAULT NULL,
  `ResiduoTalego` varchar(2) DEFAULT NULL,
  `EnviarMuestraFinal` varchar(2) DEFAULT NULL,
  `Aspecto` varchar(100) DEFAULT NULL,
  `PorcentajeSolidos` varchar(45) DEFAULT NULL,
  `pH10Final` varchar(45) DEFAULT NULL,
  `Solubilidad10` varchar(45) DEFAULT NULL,
  `Solubilidad40` varchar(45) DEFAULT NULL,
  `Rendimiento` varchar(100) DEFAULT NULL,
  `ProcesoDif` varchar(2) DEFAULT NULL,
  `KgEnjuague` varchar(45) DEFAULT NULL,
  `KgLavado` varchar(45) DEFAULT NULL,
  `FechaMuestraLab` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nfo`
--

INSERT INTO `nfo` (`IdProceso`, `nfo`, `numeroLote`, `MatPriFP04`, `MatPriSeparada`, `MateriaPrimacol`, `ReactorLimpio`, `HermeticidadReactor`, `ReactorFunciona`, `VacioFunciona`, `VaporFunciona`, `EnfriamientoFunciona`, `EmisionesFunciona`, `phsodatanque`, `CondensadorFunciona`, `ApruebaInicio`, `RazonesNoAprob`, `SeguridadNaftaleno`, `EquipoNaftaleno`, `EnfriamientoCerrado`, `ValvBloqueo`, `AbrirControlOlores`, `Estartazos`, `AgitadorOk`, `ProblemaFund`, `ProblemaFundirNaf`, `SeguridadSulfurico`, `EquipoSulfurico`, `Vapor`, `ProblemaSWFO`, `TextoProblemaSWFO`, `CierreControlOlores`, `EvacuarCamisa`, `SuministroVapor`, `SeguridadFDO`, `EquipoFDO`, `LineaTierraOk`, `BombaNeumaticaOk`, `ConexionOk`, `MangueraOk`, `LineaCargaOk`, `ValvulasCerradas`, `CapacidadTanque`, `ProblemaCondensacion`, `TextoProblemaCondensacion`, `SeguridadCSO`, `EquipoCSO`, `OlorFormol`, `OlorFormol2`, `ph10`, `Csc050Ajuste`, `Stw00Ajuste`, `ph10Fin`, `ProductoBrillante`, `HoraInicioLukas`, `HoraFinLukas`, `ProductoBrillante2`, `NotificarLaboratorio`, `EnviarPrevia1`, `AutorizaDescarga`, `SolicitantePrevia1`, `AspectoPrevia1`, `SolidosPrevia1`, `phPrevia1`, `SolubilidadPrevia1`, `AjustarPrevia1`, `PreviaConforme1`, `PreviaNoConforme1`, `HoraInicioPrevia1`, `HoraFinPrevia1`, `PreviaAnalizadaPor1`, `PreviaAprobadaPor1`, `SolicitantePrevia2`, `AspectoPrevia2`, `SolidosPrevia2`, `phPrevia2`, `SolubilidadPrevia2`, `AjustarPrevia2`, `PreviaConforme2`, `PreviaNoConforme2`, `HoraInicioPrevia2`, `HoraFinPrevia2`, `PreviaAnalizadaPor2`, `PreviaAprobadaPor2`, `SegNFO`, `EquipoNFO`, `AgitacionOff`, `TalegoDescarga`, `DescripcionResiduo`, `ResponsableDescarga`, `Bascula`, `ResiduoTalego`, `EnviarMuestraFinal`, `Aspecto`, `PorcentajeSolidos`, `pH10Final`, `Solubilidad10`, `Solubilidad40`, `Rendimiento`, `ProcesoDif`, `KgEnjuague`, `KgLavado`, `FechaMuestraLab`) VALUES
(1, '720NFO000', 'LOTE TEST 1', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '1', '1', '1', '0', '', '1', '1', '1', '0', '', '1', '', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, '', 'ee', '1', '1', 'Operador Prueba', 'Liquido - Opaco - Homogeneo', 1.0000, 1.0000, 'Opaco', 0, 0, 1, '10:01:00', '11:01:00', 'Eliana Castaño', 'Eliana Castaño', 'Operador Prueba', 'Liquido - Opaco - Homogeneo', 1.0000, 1.0000, 'Opaco', 0, 1, 0, '22:35:00', '15:35:00', 'Eliana Castaño', 'Eliana Castaño', '1', '1', '1', '1', 'TEST', 'Operador Prueba', 'Báscula 1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0000-00-00 00:00:00.000000'),
(3, '720NFOB00', 'LOTE TEST 2', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '1', '1', '1', '0', '', '1', '1', '1', '0', '', '1', '', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, '', 'e', '1', '1', 'Operador Prueba', 'Liquido - Opaco - Homogeneo', 1.0000, 1.0000, 'Opaco', 0, 0, 1, '07:08:00', '02:08:00', 'Eliana Castaño', 'Eliana Castaño', 'Operador Prueba', 'Liquido - Opaco - Homogeneo', 1.0000, 1.0000, 'Opaco', 0, 1, 0, '02:08:00', '06:08:00', 'Eliana Castaño', 'Eliana Castaño', '1', '1', '1', '1', 'test', 'Operador Prueba', 'Báscula 1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '-1', '1', '0000-00-00 00:00:00.000000'),
(4, '720NFOB00', 'test hora', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '1', '1', '1', '0', '', '1', '1', '0', '0', '', '1', '', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '', '1', '1', '0', '', '1', '1', '1', '-1', '1', NULL, NULL, '', 'w', '1', '1', 'Operador Prueba', 'Liquido - Opaco - Homogeneo', 1.0000, 1.0000, 'Total', 0, 1, 0, '03:54:00', '02:54:00', 'Eliana Castaño', 'Eliana Castaño', '', '', 0.0000, 0.0000, '', 0, 0, 0, '00:00:00', '00:00:00', '', '', '1', '1', '1', '1', 'dd', 'Operador Prueba', 'Báscula 1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos`
--

CREATE TABLE `procesos` (
  `IdProceso` int(11) NOT NULL,
  `NumLote` varchar(45) NOT NULL,
  `FechaInicial` date NOT NULL,
  `FechaFinal` date DEFAULT NULL,
  `HoraInicial` time NOT NULL,
  `HoraFinal` time DEFAULT NULL,
  `Estado` int(11) NOT NULL,
  `Cedula` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `procesos`
--

INSERT INTO `procesos` (`IdProceso`, `NumLote`, `FechaInicial`, `FechaFinal`, `HoraInicial`, `HoraFinal`, `Estado`, `Cedula`) VALUES
(1, 'LOTE TEST 1', '2023-11-24', '2023-11-24', '18:26:34', '21:49:14', 2, '74745858'),
(2, 'tes2', '2023-11-25', NULL, '00:53:36', NULL, 1, '74745858'),
(3, 'LOTE TEST 2', '2023-11-25', '2023-11-25', '00:59:39', '01:09:48', 2, '74745858'),
(4, 'test hora', '2023-11-25', '2023-11-25', '01:20:27', '01:57:54', 2, '74745858');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Cedula` varchar(50) NOT NULL,
  `CorreoElectronico` varchar(50) NOT NULL,
  `Contrasena` varchar(50) NOT NULL,
  `Estado` int(11) NOT NULL DEFAULT 1,
  `Rol` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `Nombre`, `Apellido`, `Cedula`, `CorreoElectronico`, `Contrasena`, `Estado`, `Rol`) VALUES
(1, 'Admin', 'Admin', '112233', 'admin@gmail.com', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 1, 0),
(2, 'Operador', 'Prueba', '414525', 'operador@colre.com', '5d93ceb70e2bf5daa84ec3d0cd2c731a', 1, 1),
(3, 'Supervisor', 'Prueba', '858585', 'supervisor@colre.com', '5d93ceb70e2bf5daa84ec3d0cd2c731a', 1, 2),
(4, 'Coordinador', 'Prueba', '858588', 'coordinador@colre.com', '5d93ceb70e2bf5daa84ec3d0cd2c731a', 1, 3),
(31, 'ACuellar', '.', '74745858', 'andres.cuellar@gmail.com', '834db58c24ae2889bef62f212e89312c', 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `nfo`
--
ALTER TABLE `nfo`
  ADD PRIMARY KEY (`IdProceso`),
  ADD UNIQUE KEY `IdProceso_UNIQUE` (`IdProceso`);

--
-- Indices de la tabla `procesos`
--
ALTER TABLE `procesos`
  ADD PRIMARY KEY (`IdProceso`),
  ADD UNIQUE KEY `IdProceso_UNIQUE` (`IdProceso`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `IdUsuario_UNIQUE` (`IdUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `nfo`
--
ALTER TABLE `nfo`
  MODIFY `IdProceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `procesos`
--
ALTER TABLE `procesos`
  MODIFY `IdProceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
