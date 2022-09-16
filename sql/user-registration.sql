-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2021 a las 19:46:45
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `user-registration`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` text,
  `inicio` datetime DEFAULT NULL,
  `fin` datetime DEFAULT NULL,
  `colortexto` varchar(7) DEFAULT NULL,
  `colorfondo` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`codigo`, `titulo`, `descripcion`, `inicio`, `fin`, `colortexto`, `colorfondo`) VALUES
(45, 'Cocina japonesa', '', '2021-02-01 08:00:00', '2021-02-01 11:00:00', '#ffffff', '#3788d8'),
(46, 'Cocina italiana', '', '2021-02-03 08:00:00', '2021-02-03 11:00:00', '#ffffff', '#3788d8'),
(47, 'Cocina francesa', '', '2021-02-08 08:00:00', '2021-02-08 11:00:00', '#ffffff', '#3788d8'),
(48, 'Cocina española', '', '2021-02-10 08:00:00', '2021-02-10 11:00:00', '#ffffff', '#3788d8'),
(49, 'Cocina árabe', '', '2021-02-17 08:00:00', '2021-02-17 11:00:00', '#ffffff', '#3788d8'),
(50, 'Cocina mexicana', '', '2021-02-22 08:00:00', '2021-02-22 11:00:00', '#ffffff', '#3788d8'),
(54, 'Pastelería I', '', '2021-03-10 08:00:00', '2021-03-10 11:00:00', '#ffffff', '#3788d8'),
(55, 'Pastelería II', '', '2021-03-15 08:00:00', '2021-03-15 11:00:00', '#ffffff', '#3788d8'),
(56, 'Mesa de quesos y pasapalos', '', '2021-03-17 08:00:00', '2021-03-17 11:00:00', '#ffffff', '#3788d8'),
(57, 'Organización de eventos', 'Seminario de emprendimiento ', '2021-03-22 08:00:00', '2021-03-22 11:00:00', '#ffffff', '#3788d8'),
(58, 'PRUEBA FINAL', '', '2021-03-24 08:00:00', '2021-03-24 11:00:00', '#ffffff', '#76bb40'),
(59, 'CARNAVAL NO LABORABLE', 'Día feriado', '2021-02-15 00:00:00', '2021-02-15 00:00:00', '#ffffff', '#e22400'),
(78, 'Segunda prueba (Caja)', '', '2021-03-01 00:00:00', '2021-03-01 00:00:00', '#ffffff', '#ffdd00'),
(79, 'Panadería salada', '', '2021-03-03 08:00:00', '2021-03-03 11:00:00', '#ffffff', '#3788d8'),
(80, 'Panadería dulce', '', '2021-03-08 08:00:00', '2021-03-08 11:00:00', '#ffffff', '#3788d8'),
(81, 'Cocina peruana', '', '2021-02-24 08:00:00', '2021-02-24 11:00:00', '#ffffff', '#3788d8'),
(82, 'Primera prueba', '', '2020-12-16 08:00:00', '2020-12-16 11:00:00', '#ffffff', '#fecb3e'),
(83, 'Cocina Internacional', '', '2021-02-13 00:00:00', '2021-02-13 00:00:00', '#ffffff', '#3788d8'),
(85, 'Cocina Internacional', '', '2021-07-10 00:00:00', '2021-07-10 00:00:00', '#ffffff', '#3788d8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos1`
--

CREATE TABLE `eventos1` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` text,
  `inicio` datetime DEFAULT NULL,
  `fin` datetime DEFAULT NULL,
  `colortexto` varchar(7) DEFAULT NULL,
  `colorfondo` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos1`
--

INSERT INTO `eventos1` (`codigo`, `titulo`, `descripcion`, `inicio`, `fin`, `colortexto`, `colorfondo`) VALUES
(1, 'test 2', '', '2021-01-02 00:00:00', '2021-01-02 00:00:00', '#ffffff', '#3788d8'),
(3, 'Higiene y seguridad industrial / Anatomía y fisiología del gusto y el olfato', 'Clase teórica. Introducción al curso.', '2021-03-13 10:00:00', '2021-03-13 15:00:00', '#ffffff', '#3788d8'),
(4, 'Corte de vegetales / Corte, limpieza y deshuesado de aves', 'Clase teórico práctica.', '2021-03-20 10:00:00', '2021-03-20 15:00:00', '#ffffff', '#3788d8'),
(5, 'Corte, limpieza y clasificación de las carnes / Clasificación de pescados 6 mariscos', '', '2021-03-27 10:00:00', '2021-03-27 15:00:00', '#ffffff', '#3788d8'),
(7, 'Sopas, cremas y potajes / Arroces y risottos ', 'Clase teórico-práctica', '2021-04-10 10:00:00', '2021-04-10 15:00:00', '#ffffff', '#3788d8'),
(8, 'Pastas frescas / Ensaladas y aderezos', 'Clase teórico-práctica', '2021-04-17 10:00:00', '2021-04-17 15:00:00', '#ffffff', '#3788d8'),
(9, 'Gastronomía central de Venezuela / llanera', '', '2021-04-24 10:00:00', '2021-04-24 15:00:00', '#ffffff', '#3788d8'),
(10, 'Guayana / Oriental - Insular', '', '2021-05-08 10:00:00', '2021-05-08 15:00:00', '#ffffff', '#3788d8'),
(11, 'Occidental venezolana / Andes', '', '2021-05-01 10:00:00', '2021-05-01 15:00:00', '#ffffff', '#3788d8'),
(12, 'China y Japonesa', '', '2021-05-15 10:00:00', '2021-05-15 15:00:00', '#ffffff', '#3788d8'),
(13, 'Mexicana y Peruana', '', '2021-05-22 10:00:00', '2021-05-22 15:00:00', '#ffffff', '#3788d8'),
(14, 'Árabe y Española', '', '2021-05-29 10:00:00', '2021-05-29 15:00:00', '#ffffff', '#3788d8'),
(15, 'Evento final', '', '2021-06-26 10:00:00', '2021-06-26 15:00:00', '#ffffff', '#76bb40'),
(16, 'Pastelería ', '', '2021-06-19 10:00:00', '2021-06-19 15:00:00', '#ffffff', '#3788d8'),
(17, 'Panadería dulce y pasapalos', '', '2021-06-12 10:00:00', '2021-06-12 15:00:00', '#ffffff', '#3788d8'),
(18, 'Francesa y Panadería salada', '', '2021-06-05 10:00:00', '2021-06-05 15:00:00', '#ffffff', '#3788d8'),
(19, 'Caldos y fondos / Salsas madres y sus derivadas', '', '2021-04-03 10:00:00', '2021-04-03 15:00:00', '#ffffff', '#3788d8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos2`
--

CREATE TABLE `eventos2` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` text,
  `inicio` datetime DEFAULT NULL,
  `fin` datetime DEFAULT NULL,
  `colortexto` varchar(7) DEFAULT NULL,
  `colorfondo` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos3`
--

CREATE TABLE `eventos3` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` text,
  `inicio` datetime DEFAULT NULL,
  `fin` datetime DEFAULT NULL,
  `colortexto` varchar(7) DEFAULT NULL,
  `colorfondo` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos4`
--

CREATE TABLE `eventos4` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` text,
  `inicio` datetime DEFAULT NULL,
  `fin` datetime DEFAULT NULL,
  `colortexto` varchar(7) DEFAULT NULL,
  `colorfondo` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos5`
--

CREATE TABLE `eventos5` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` text,
  `inicio` datetime DEFAULT NULL,
  `fin` datetime DEFAULT NULL,
  `colortexto` varchar(7) DEFAULT NULL,
  `colorfondo` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventospredefinidos`
--

CREATE TABLE `eventospredefinidos` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `horainicio` time DEFAULT NULL,
  `horafin` time DEFAULT NULL,
  `colortexto` varchar(7) DEFAULT NULL,
  `colorfondo` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventospredefinidos`
--

INSERT INTO `eventospredefinidos` (`codigo`, `titulo`, `horainicio`, `horafin`, `colortexto`, `colorfondo`) VALUES
(12, 'Segunda prueba (Caja)', '00:00:00', '00:00:00', '#ffffff', '#ffdd00'),
(13, 'Cocina Internacional', '00:00:00', '00:00:00', '#ffffff', '#3788d8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventospredefinidos1`
--

CREATE TABLE `eventospredefinidos1` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `horainicio` time DEFAULT NULL,
  `horafin` time DEFAULT NULL,
  `colortexto` varchar(7) DEFAULT NULL,
  `colorfondo` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventospredefinidos1`
--

INSERT INTO `eventospredefinidos1` (`codigo`, `titulo`, `horainicio`, `horafin`, `colortexto`, `colorfondo`) VALUES
(2, 'Alta cocina sabatino', '10:00:00', '15:00:00', '#ffffff', '#3788d8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventospredefinidos2`
--

CREATE TABLE `eventospredefinidos2` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `horainicio` time DEFAULT NULL,
  `horafin` time DEFAULT NULL,
  `colortexto` varchar(7) DEFAULT NULL,
  `colorfondo` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventospredefinidos3`
--

CREATE TABLE `eventospredefinidos3` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `horainicio` time DEFAULT NULL,
  `horafin` time DEFAULT NULL,
  `colortexto` varchar(7) DEFAULT NULL,
  `colorfondo` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventospredefinidos4`
--

CREATE TABLE `eventospredefinidos4` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `horainicio` time DEFAULT NULL,
  `horafin` time DEFAULT NULL,
  `colortexto` varchar(7) DEFAULT NULL,
  `colorfondo` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventospredefinidos5`
--

CREATE TABLE `eventospredefinidos5` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `horainicio` time DEFAULT NULL,
  `horafin` time DEFAULT NULL,
  `colortexto` varchar(7) DEFAULT NULL,
  `colorfondo` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `pdf_name` varchar(200) DEFAULT NULL,
  `pdf_description` varchar(200) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `files`
--

INSERT INTO `files` (`id`, `pdf_name`, `pdf_description`, `url`) VALUES
(4, 'grupo 1', 'prueba ', '../files/uploadsdiploma-idioma-ingles.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `files_1`
--

CREATE TABLE `files_1` (
  `id` int(11) NOT NULL,
  `pdf_name` varchar(200) DEFAULT NULL,
  `pdf_description` varchar(200) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `files_1`
--

INSERT INTO `files_1` (`id`, `pdf_name`, `pdf_description`, `url`) VALUES
(1, 'grupo2', 'prueba', '../files1/uploadsdiploma-idioma-ingles.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `files_2`
--

CREATE TABLE `files_2` (
  `id` int(11) NOT NULL,
  `pdf_name` varchar(200) DEFAULT NULL,
  `pdf_description` varchar(200) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `files_2`
--

INSERT INTO `files_2` (`id`, `pdf_name`, `pdf_description`, `url`) VALUES
(1, 'grupo 3', 'prueba', '../files2/uploadsdiploma-idioma-ingles.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `files_3`
--

CREATE TABLE `files_3` (
  `id` int(11) NOT NULL,
  `pdf_name` varchar(200) DEFAULT NULL,
  `pdf_description` varchar(200) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `files_3`
--

INSERT INTO `files_3` (`id`, `pdf_name`, `pdf_description`, `url`) VALUES
(1, 'grupo 4', 'prueba', '../files3/uploadsdiploma-idioma-ingles.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `files_4`
--

CREATE TABLE `files_4` (
  `id` int(11) NOT NULL,
  `pdf_name` varchar(200) DEFAULT NULL,
  `pdf_description` varchar(200) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `files_4`
--

INSERT INTO `files_4` (`id`, `pdf_name`, `pdf_description`, `url`) VALUES
(1, 'grupo 5', 'prueba', '../files4/uploadsdiploma-idioma-ingles.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `files_5`
--

CREATE TABLE `files_5` (
  `id` int(11) NOT NULL,
  `pdf_name` varchar(200) DEFAULT NULL,
  `pdf_description` varchar(200) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `files_5`
--

INSERT INTO `files_5` (`id`, `pdf_name`, `pdf_description`, `url`) VALUES
(1, 'grupo 6', 'prueba', '../files5/uploadsdiploma-idioma-ingles.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas_panaderia`
--

CREATE TABLE `recetas_panaderia` (
  `id` int(99) NOT NULL,
  `recipe_name` varchar(30) NOT NULL,
  `recipe_descrip` text NOT NULL,
  `recipe_ingredients` text NOT NULL,
  `img_url` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `recetas_panaderia`
--

INSERT INTO `recetas_panaderia` (`id`, `recipe_name`, `recipe_descrip`, `recipe_ingredients`, `img_url`) VALUES
(2, 'panaderia editado', 'panaderia editada', 'panaderia editado', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas_reposteria`
--

CREATE TABLE `recetas_reposteria` (
  `id` int(99) NOT NULL,
  `recipe_name` varchar(30) NOT NULL,
  `recipe_descrip` text NOT NULL,
  `recipe_ingredients` text NOT NULL,
  `img_url` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `recetas_reposteria`
--

INSERT INTO `recetas_reposteria` (`id`, `recipe_name`, `recipe_descrip`, `recipe_ingredients`, `img_url`) VALUES
(3, 'Reposteria editada', 'reposteria editada', 'reposteria editada', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas_saladas`
--

CREATE TABLE `recetas_saladas` (
  `id` int(99) NOT NULL,
  `recipe_name` varchar(30) NOT NULL,
  `recipe_descrip` text NOT NULL,
  `recipe_ingredients` text NOT NULL,
  `img_url` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `recetas_saladas`
--

INSERT INTO `recetas_saladas` (`id`, `recipe_name`, `recipe_descrip`, `recipe_ingredients`, `img_url`) VALUES
(4, 'editar salada', 'editar salada', 'editar salada', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `eva_1` varchar(2) NOT NULL,
  `eva_2` varchar(2) NOT NULL,
  `eva_3` varchar(2) NOT NULL,
  `eva_4` varchar(2) NOT NULL,
  `inscripcion` varchar(15) NOT NULL,
  `cuota_1` varchar(15) NOT NULL,
  `cuota_2` varchar(15) NOT NULL,
  `cuota_3` varchar(15) NOT NULL,
  `cuota_4` varchar(15) NOT NULL,
  `colorfondo` varchar(8) NOT NULL DEFAULT '#4ad737',
  `colorfondo1` varchar(8) NOT NULL DEFAULT '#ffdd00',
  `colorfondo2` varchar(8) NOT NULL DEFAULT '#e01515',
  `colorfondo3` varchar(8) NOT NULL DEFAULT '#ffffff',
  `comentario` text NOT NULL,
  `comentario1` text NOT NULL,
  `comentario2` text NOT NULL,
  `comentario3` text NOT NULL,
  `comentario4` text NOT NULL,
  `fechaIns` date NOT NULL,
  `fecha1` date NOT NULL,
  `fecha2` date NOT NULL,
  `fecha3` date NOT NULL,
  `fecha4` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `username`, `password`, `create_at`, `eva_1`, `eva_2`, `eva_3`, `eva_4`, `inscripcion`, `cuota_1`, `cuota_2`, `cuota_3`, `cuota_4`, `colorfondo`, `colorfondo1`, `colorfondo2`, `colorfondo3`, `comentario`, `comentario1`, `comentario2`, `comentario3`, `comentario4`, `fechaIns`, `fecha1`, `fecha2`, `fecha3`, `fecha4`) VALUES
(1, 'admin', '$2y$10$X0RbhjxnXbwc5HTi8smq9OtaRmdn3eflg12icFwTFST3oVU/hwKSq', '2021-07-21 17:28:12', '', '', '', '', 'PENDIENTE', 'PAGADO', '', '', '', '#4ad737', '#ffdd00', '#e01515', '#ffffff', 'skdjhasdjhsakjd', '', '', '', '', '2021-07-15', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(2, 'test', '$2y$10$AkAaJxjgKMK4vVCI0nV1v.QO8rvmWzWK.V4Bqfr83HrUn.ROmmHJ6', '2021-07-15 23:02:30', '', '', '', '', '', '', '', '', '', '#4ad737', '#ffdd00', '#e01515', '#ffffff', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_member1`
--

CREATE TABLE `tbl_member1` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `eva_1` int(11) NOT NULL,
  `eva_2` int(11) NOT NULL,
  `eva_3` int(11) NOT NULL,
  `eva_4` int(11) NOT NULL,
  `inscripcion` varchar(15) NOT NULL,
  `cuota_1` varchar(15) NOT NULL,
  `cuota_2` varchar(15) NOT NULL,
  `cuota_3` varchar(15) NOT NULL,
  `cuota_4` varchar(15) NOT NULL,
  `colorfondo` varchar(8) NOT NULL DEFAULT '#4ad737',
  `colorfondo1` varchar(8) NOT NULL DEFAULT '#ffdd00',
  `colorfondo2` varchar(8) NOT NULL DEFAULT '#e01515',
  `colorfondo3` varchar(8) NOT NULL DEFAULT '#ffffff',
  `comentario` text NOT NULL,
  `comentario1` text NOT NULL,
  `comentario2` text NOT NULL,
  `comentario3` text NOT NULL,
  `comentario4` text NOT NULL,
  `fechaIns` date NOT NULL,
  `fecha1` date NOT NULL,
  `fecha2` date NOT NULL,
  `fecha3` date NOT NULL,
  `fecha4` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_member1`
--

INSERT INTO `tbl_member1` (`id`, `username`, `password`, `create_at`, `eva_1`, `eva_2`, `eva_3`, `eva_4`, `inscripcion`, `cuota_1`, `cuota_2`, `cuota_3`, `cuota_4`, `colorfondo`, `colorfondo1`, `colorfondo2`, `colorfondo3`, `comentario`, `comentario1`, `comentario2`, `comentario3`, `comentario4`, `fechaIns`, `fecha1`, `fecha2`, `fecha3`, `fecha4`) VALUES
(1, 'admin', '$2y$10$XkDvmy2OHXOB7qd2tyKhtO0glL6sRBwzLx9./PNl9QEYXlKnh5Ofq', '2021-08-02 19:07:15', 0, 0, 0, 0, '', '', '', '', '', '#4ad737', '#ffdd00', '#e01515', '#ffffff', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(27, 'test', '$2y$10$m34g0bA/wJkyInoGqZxnPOmtvv2kL09DdHiVIOjYbkZuC9u91UY9i', '2021-08-02 19:07:09', 0, 0, 0, 0, '', '', '', '', '', '#4ad737', '#ffdd00', '#e01515', '#ffffff', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_member2`
--

CREATE TABLE `tbl_member2` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `eva_1` int(11) NOT NULL,
  `eva_2` int(11) NOT NULL,
  `eva_3` int(11) NOT NULL,
  `eva_4` int(11) NOT NULL,
  `inscripcion` varchar(15) NOT NULL,
  `cuota_1` varchar(15) NOT NULL,
  `cuota_2` varchar(15) NOT NULL,
  `cuota_3` varchar(15) NOT NULL,
  `cuota_4` varchar(15) NOT NULL,
  `colorfondo` varchar(8) NOT NULL DEFAULT '#4ad737',
  `colorfondo1` varchar(8) NOT NULL DEFAULT '#ffdd00',
  `colorfondo2` varchar(8) NOT NULL DEFAULT '#e01515',
  `colorfondo3` varchar(8) NOT NULL DEFAULT '#ffffff',
  `comentario` text NOT NULL,
  `comentario1` text NOT NULL,
  `comentario2` text NOT NULL,
  `comentario3` text NOT NULL,
  `comentario4` text NOT NULL,
  `fechaIns` date NOT NULL,
  `fecha1` date NOT NULL,
  `fecha2` date NOT NULL,
  `fecha3` date NOT NULL,
  `fecha4` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_member2`
--

INSERT INTO `tbl_member2` (`id`, `username`, `password`, `create_at`, `eva_1`, `eva_2`, `eva_3`, `eva_4`, `inscripcion`, `cuota_1`, `cuota_2`, `cuota_3`, `cuota_4`, `colorfondo`, `colorfondo1`, `colorfondo2`, `colorfondo3`, `comentario`, `comentario1`, `comentario2`, `comentario3`, `comentario4`, `fechaIns`, `fecha1`, `fecha2`, `fecha3`, `fecha4`) VALUES
(1, 'admin', '$2y$10$hWgMksPQmOAbIUPcKTjZBuAjVMN4pwkh9dGfihijiFUBhPi8Hh9XS', '2021-08-02 19:11:43', 0, 0, 0, 0, '', '', '', '', '', '#4ad737', '#ffdd00', '#e01515', '#ffffff', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(25, 'test', '$2y$10$Vd/UiB3mEy8ua8jn9FMM7.Yw70qS/L36t1J5qHSNZM.wKdF9orZhG', '2021-08-02 19:11:02', 0, 0, 0, 0, '', '', '', '', '', '#4ad737', '#ffdd00', '#e01515', '#ffffff', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_member3`
--

CREATE TABLE `tbl_member3` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `eva_1` int(11) NOT NULL,
  `eva_2` int(11) NOT NULL,
  `eva_3` int(11) NOT NULL,
  `eva_4` int(11) NOT NULL,
  `inscripcion` varchar(15) NOT NULL,
  `cuota_1` varchar(15) NOT NULL,
  `cuota_2` varchar(15) NOT NULL,
  `cuota_3` varchar(15) NOT NULL,
  `cuota_4` varchar(15) NOT NULL,
  `colorfondo` varchar(8) NOT NULL DEFAULT '#4ad737',
  `colorfondo1` varchar(8) NOT NULL DEFAULT '#ffdd00',
  `colorfondo2` varchar(8) NOT NULL DEFAULT '#e01515',
  `colorfondo3` varchar(8) NOT NULL DEFAULT '#ffffff',
  `comentario` text NOT NULL,
  `comentario1` text NOT NULL,
  `comentario2` text NOT NULL,
  `comentario3` text NOT NULL,
  `comentario4` text NOT NULL,
  `fechaIns` date NOT NULL,
  `fecha1` date NOT NULL,
  `fecha2` date NOT NULL,
  `fecha3` date NOT NULL,
  `fecha4` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_member3`
--

INSERT INTO `tbl_member3` (`id`, `username`, `password`, `create_at`, `eva_1`, `eva_2`, `eva_3`, `eva_4`, `inscripcion`, `cuota_1`, `cuota_2`, `cuota_3`, `cuota_4`, `colorfondo`, `colorfondo1`, `colorfondo2`, `colorfondo3`, `comentario`, `comentario1`, `comentario2`, `comentario3`, `comentario4`, `fechaIns`, `fecha1`, `fecha2`, `fecha3`, `fecha4`) VALUES
(1, 'admin', '$2y$10$Xznn.jOqk3vB1PRcZ7kxduMJJhYX8yiOYoyxMooUdy8POM2AZaz8O', '2021-08-02 19:13:12', 0, 0, 0, 0, '', '', '', '', '', '#4ad737', '#ffdd00', '#e01515', '#ffffff', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(2, 'test', '$2y$10$otXtddyONtLZEQTEZRyWKe9yi97Nkrhn5bzhsyj1j.YkjDDoklKB2', '2021-08-02 19:11:09', 0, 0, 0, 0, '', '', '', '', '', '#4ad737', '#ffdd00', '#e01515', '#ffffff', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_member4`
--

CREATE TABLE `tbl_member4` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `eva_1` int(11) NOT NULL,
  `eva_2` int(11) NOT NULL,
  `eva_3` int(11) NOT NULL,
  `eva_4` int(11) NOT NULL,
  `inscripcion` varchar(15) NOT NULL,
  `cuota_1` varchar(15) NOT NULL,
  `cuota_2` varchar(15) NOT NULL,
  `cuota_3` varchar(15) NOT NULL,
  `cuota_4` varchar(15) NOT NULL,
  `colorfondo` varchar(8) NOT NULL DEFAULT '#4ad737',
  `colorfondo1` varchar(8) NOT NULL DEFAULT '#ffdd00',
  `colorfondo2` varchar(8) NOT NULL DEFAULT '#e01515',
  `colorfondo3` varchar(8) NOT NULL DEFAULT '#ffffff',
  `comentario` text NOT NULL,
  `comentario1` text NOT NULL,
  `comentario2` text NOT NULL,
  `comentario3` text NOT NULL,
  `comentario4` text NOT NULL,
  `fechaIns` date NOT NULL,
  `fecha1` date NOT NULL,
  `fecha2` date NOT NULL,
  `fecha3` date NOT NULL,
  `fecha4` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_member4`
--

INSERT INTO `tbl_member4` (`id`, `username`, `password`, `create_at`, `eva_1`, `eva_2`, `eva_3`, `eva_4`, `inscripcion`, `cuota_1`, `cuota_2`, `cuota_3`, `cuota_4`, `colorfondo`, `colorfondo1`, `colorfondo2`, `colorfondo3`, `comentario`, `comentario1`, `comentario2`, `comentario3`, `comentario4`, `fechaIns`, `fecha1`, `fecha2`, `fecha3`, `fecha4`) VALUES
(1, 'admin', '$2y$10$RU4r67/r2Zs5vecAalyp6.CrMDruri3MAZL/HijLpEaSwFU8BHW5.', '2021-08-02 19:13:49', 0, 0, 0, 0, '', '', '', '', '', '#4ad737', '#ffdd00', '#e01515', '#ffffff', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(2, 'test', '$2y$10$cnC7bAmm5yU5J3PkV.IEfu39eK2ZKtxSczXgmlNGzRD7jfMxziqbe', '2021-08-02 19:11:16', 0, 0, 0, 0, '', '', '', '', '', '#4ad737', '#ffdd00', '#e01515', '#ffffff', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_member5`
--

CREATE TABLE `tbl_member5` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `eva_1` int(11) NOT NULL,
  `eva_2` int(11) NOT NULL,
  `eva_3` int(11) NOT NULL,
  `eva_4` int(11) NOT NULL,
  `inscripcion` varchar(15) NOT NULL,
  `cuota_1` varchar(15) NOT NULL,
  `cuota_2` varchar(15) NOT NULL,
  `cuota_3` varchar(15) NOT NULL,
  `cuota_4` varchar(15) NOT NULL,
  `colorfondo` varchar(8) NOT NULL DEFAULT '#4ad737',
  `colorfondo1` varchar(8) NOT NULL DEFAULT '#ffdd00',
  `colorfondo2` varchar(8) NOT NULL DEFAULT '#e01515',
  `colorfondo3` varchar(8) NOT NULL DEFAULT '#ffffff',
  `comentario` text NOT NULL,
  `comentario1` text NOT NULL,
  `comentario2` text NOT NULL,
  `comentario3` text NOT NULL,
  `comentario4` text NOT NULL,
  `fechaIns` date NOT NULL,
  `fecha1` date NOT NULL,
  `fecha2` date NOT NULL,
  `fecha3` date NOT NULL,
  `fecha4` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_member5`
--

INSERT INTO `tbl_member5` (`id`, `username`, `password`, `create_at`, `eva_1`, `eva_2`, `eva_3`, `eva_4`, `inscripcion`, `cuota_1`, `cuota_2`, `cuota_3`, `cuota_4`, `colorfondo`, `colorfondo1`, `colorfondo2`, `colorfondo3`, `comentario`, `comentario1`, `comentario2`, `comentario3`, `comentario4`, `fechaIns`, `fecha1`, `fecha2`, `fecha3`, `fecha4`) VALUES
(1, 'admin', '$2y$10$QERkCS0PGeZfe2lZgMJBIO/1zJBpHMxmWUk1.cUA0eAY4pNQSc2nK', '2021-08-02 19:14:30', 0, 0, 0, 0, '', '', '', '', '', '#4ad737', '#ffdd00', '#e01515', '#ffffff', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(2, 'test', '$2y$10$dg7hqm6S4s4RKUmSAcsXfeGdnp/ehNuG8nPGpPlrJeXYWSPdW1tyu', '2021-08-02 19:11:21', 0, 0, 0, 0, '', '', '', '', '', '#4ad737', '#ffdd00', '#e01515', '#ffffff', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `eventos1`
--
ALTER TABLE `eventos1`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `eventos2`
--
ALTER TABLE `eventos2`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `eventos3`
--
ALTER TABLE `eventos3`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `eventos4`
--
ALTER TABLE `eventos4`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `eventos5`
--
ALTER TABLE `eventos5`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `eventospredefinidos`
--
ALTER TABLE `eventospredefinidos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `eventospredefinidos1`
--
ALTER TABLE `eventospredefinidos1`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `eventospredefinidos2`
--
ALTER TABLE `eventospredefinidos2`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `eventospredefinidos3`
--
ALTER TABLE `eventospredefinidos3`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `eventospredefinidos4`
--
ALTER TABLE `eventospredefinidos4`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `eventospredefinidos5`
--
ALTER TABLE `eventospredefinidos5`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `files_1`
--
ALTER TABLE `files_1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `files_2`
--
ALTER TABLE `files_2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `files_3`
--
ALTER TABLE `files_3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `files_4`
--
ALTER TABLE `files_4`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `files_5`
--
ALTER TABLE `files_5`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recetas_panaderia`
--
ALTER TABLE `recetas_panaderia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recetas_reposteria`
--
ALTER TABLE `recetas_reposteria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recetas_saladas`
--
ALTER TABLE `recetas_saladas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_member1`
--
ALTER TABLE `tbl_member1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_member2`
--
ALTER TABLE `tbl_member2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_member3`
--
ALTER TABLE `tbl_member3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_member4`
--
ALTER TABLE `tbl_member4`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_member5`
--
ALTER TABLE `tbl_member5`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT de la tabla `eventos1`
--
ALTER TABLE `eventos1`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `eventos2`
--
ALTER TABLE `eventos2`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `eventos3`
--
ALTER TABLE `eventos3`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `eventos4`
--
ALTER TABLE `eventos4`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `eventos5`
--
ALTER TABLE `eventos5`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `eventospredefinidos`
--
ALTER TABLE `eventospredefinidos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `eventospredefinidos1`
--
ALTER TABLE `eventospredefinidos1`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `eventospredefinidos2`
--
ALTER TABLE `eventospredefinidos2`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `eventospredefinidos3`
--
ALTER TABLE `eventospredefinidos3`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `eventospredefinidos4`
--
ALTER TABLE `eventospredefinidos4`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `eventospredefinidos5`
--
ALTER TABLE `eventospredefinidos5`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `files_1`
--
ALTER TABLE `files_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `files_2`
--
ALTER TABLE `files_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `files_3`
--
ALTER TABLE `files_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `files_4`
--
ALTER TABLE `files_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `files_5`
--
ALTER TABLE `files_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `recetas_panaderia`
--
ALTER TABLE `recetas_panaderia`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `recetas_reposteria`
--
ALTER TABLE `recetas_reposteria`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `recetas_saladas`
--
ALTER TABLE `recetas_saladas`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_member1`
--
ALTER TABLE `tbl_member1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `tbl_member2`
--
ALTER TABLE `tbl_member2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `tbl_member3`
--
ALTER TABLE `tbl_member3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_member4`
--
ALTER TABLE `tbl_member4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_member5`
--
ALTER TABLE `tbl_member5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
