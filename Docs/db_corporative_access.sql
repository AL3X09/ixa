-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2016 a las 15:56:19
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inspecciautos`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_create_person` (IN `_name` VARCHAR(222), IN `_lastname` VARCHAR(222), IN `_id_document_type` INT, IN `_identification_number` INT, IN `_id_city` INT, IN `_phone_number` INT, IN `_cellphone_number` INT, IN `_email` VARCHAR(222), IN `_address` VARCHAR(222), IN `_id_type_person` INT)  BEGIN
	INSERT INTO `transact_person`(`name_person`, `lastname_person`, `document_type_person`, `identification_number_person`, `id_city_person`, `phone_number_person`, `cellphone_number_person`, `email_person`, `address_person`, `id_type_person`) 
									VALUES (_name, _lastname, _id_document_type, _identification_number,_id_city,_phone_number,_cellphone_number,_email,_address,_id_type_person);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_select_all_activity_log` ()  BEGIN
select * from transact_activity_log;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_select_all_city` ()  BEGIN
	SELECT * FROM setting_city;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_select_all_client` ()  BEGIN
Select * from tranasct_client;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_select_all_employee` ()  BEGIN
SELECT * from transact_employee;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_select_all_person` ()  BEGIN
SELECT * from transact_person;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_select_all_position` ()  BEGIN
	SELECT * FROM setting_position;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_select_all_state` ()  BEGIN
select * from setting_state;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_select_all_town` ()  BEGIN
select * from setting_town;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_select_all_type_log` ()  BEGIN
select * from setting_type_log;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_select_all_type_person` ()  BEGIN
select * from setting_type_person;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_select_all_type_rol` ()  BEGIN
select * from setting_type_rol;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_select_all_user` ()  BEGIN
	SELECT * FROM transact_user;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_select_client_by_identification_number` (IN `_identification_number` INT)  BEGIN
	SELECT * FROM transact_person WHERE identification_number_person = _identification_number;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_select_menu_by_rol` (IN `_id_role` INT)  BEGIN
SELECT M.menu, M.prefix_menu FROM setting_permission P INNER JOIN setting_menu M
ON P.id_menu = M.id_menu WHERE P.id_role = _id_role;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_select_user` (IN `_name_user` VARCHAR(222))  BEGIN
	SELECT TU.id_user,TE.id_employee, TU.id_rol_user, TU.name_user, TU.password_user,
			TP.id_person,TP.name_person,TP.lastname_person,TP.document_type_person,TP.identification_number_person,
			TP.id_city_person,TP.phone_number_person,TP.cellphone_number_person,TP.email_person,TP.address_person,TP.id_type_person,TE.id_position_employee,TE.id_state_employee
			FROM transact_user TU INNER JOIN transact_employee TE 
			ON TU.id_employee_user = TE.id_employee INNER JOIN transact_person TP 
			ON TE.id_person_employee = TP.id_person
	WHERE name_user = _name_user;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `setting_city`
--

CREATE TABLE `setting_city` (
  `id_city` int(11) NOT NULL,
  `id_town_city` int(11) NOT NULL,
  `city` varchar(222) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `setting_city`
--

INSERT INTO `setting_city` (`id_city`, `id_town_city`, `city`) VALUES
(1, 1, 'Leticia'),
(2, 1, 'Puerto Nari&ntilde;o'),
(3, 2, 'Abejorral'),
(4, 2, 'Abriaqu&iacute;'),
(5, 2, 'Alejandria'),
(6, 2, 'Amag&aacute;'),
(7, 2, 'Amalfi'),
(8, 2, 'Andes'),
(9, 2, 'Angel&oacute;polis'),
(10, 2, 'Angostura'),
(11, 2, 'Anor&iacute;'),
(12, 2, 'Anz&aacute;'),
(13, 2, 'Apartad&oacute;'),
(14, 2, 'Arboletes'),
(15, 2, 'Argelia'),
(16, 2, 'Armenia'),
(17, 2, 'Barbosa'),
(18, 2, 'Bello'),
(19, 2, 'Belmira'),
(20, 2, 'Betania'),
(21, 2, 'Betulia'),
(22, 2, 'Bol&iacute;var'),
(23, 2, 'Brice&ntilde;o'),
(24, 2, 'Bur&iacute;tica'),
(25, 2, 'Caicedo'),
(26, 2, 'Caldas'),
(27, 2, 'Campamento'),
(28, 2, 'Caracol&iacute;'),
(29, 2, 'Caramanta'),
(30, 2, 'Carepa'),
(31, 2, 'Carmen de Viboral'),
(32, 2, 'Carolina'),
(33, 2, 'Caucasia'),
(34, 2, 'Ca&ntilde;asgordas'),
(35, 2, 'Chigorod&oacute;'),
(36, 2, 'Cisneros'),
(37, 2, 'Cocorn&aacute;'),
(38, 2, 'Concepci&oacute;n'),
(39, 2, 'Concordia'),
(40, 2, 'Copacabana'),
(41, 2, 'C&aacute;ceres'),
(42, 2, 'Dabeiba'),
(43, 2, 'Don Mat&iacute;as'),
(44, 2, 'Eb&eacute;jico'),
(45, 2, 'El Bagre'),
(46, 2, 'Entrerr&iacute;os'),
(47, 2, 'Envigado'),
(48, 2, 'Fredonia'),
(49, 2, 'Frontino'),
(50, 2, 'Giraldo'),
(51, 2, 'Girardota'),
(52, 2, 'Granada'),
(53, 2, 'Guadalupe'),
(54, 2, 'Guarne'),
(55, 2, 'Guatap&eacute;'),
(56, 2, 'G&oacute;mez Plata'),
(57, 2, 'Heliconia'),
(58, 2, 'Hispania'),
(59, 2, 'Itagü&iacute;'),
(60, 2, 'Ituango'),
(61, 2, 'Jard&iacute;n'),
(62, 2, 'Jeric&oacute;'),
(63, 2, 'La Ceja'),
(64, 2, 'La Estrella'),
(65, 2, 'La Pintada'),
(66, 2, 'La Uni&oacute;n'),
(67, 2, 'Liborina'),
(68, 2, 'Maceo'),
(69, 2, 'Marinilla'),
(70, 2, 'Medell&iacute;n'),
(71, 2, 'Montebello'),
(72, 2, 'Murind&oacute;'),
(73, 2, 'Mutat&aacute;'),
(74, 2, 'Nari&ntilde;o'),
(75, 2, 'Nech&iacute;'),
(76, 2, 'Necocl&iacute;'),
(77, 2, 'Olaya'),
(78, 2, 'Peque'),
(79, 2, 'Pe&ntilde;ol'),
(80, 2, 'Pueblorrico'),
(81, 2, 'Puerto Berr&iacute;o'),
(82, 2, 'Puerto Nare'),
(83, 2, 'Puerto Triunfo'),
(84, 2, 'Remedios'),
(85, 2, 'Retiro'),
(86, 2, 'R&iacute;onegro'),
(87, 2, 'Sabanalarga'),
(88, 2, 'Sabaneta'),
(89, 2, 'Salgar'),
(90, 2, 'San Andr&eacute;s de Cuerqu&iacute;a'),
(91, 2, 'San Carlos'),
(92, 2, 'San Francisco'),
(93, 2, 'San Jer&oacute;nimo'),
(94, 2, 'San Jos&eacute; de Monta&ntilde;a'),
(95, 2, 'San Juan de Urab&aacute;'),
(96, 2, 'San Lu&iacute;s'),
(97, 2, 'San Pedro'),
(98, 2, 'San Pedro de Urab&aacute;'),
(99, 2, 'San Rafael'),
(100, 2, 'San Roque'),
(101, 2, 'San Vicente'),
(102, 2, 'Santa B&aacute;rbara'),
(103, 2, 'Santa F&eacute; de Antioquia'),
(104, 2, 'Santa Rosa de Osos'),
(105, 2, 'Santo Domingo'),
(106, 2, 'Santuario'),
(107, 2, 'Segovia'),
(108, 2, 'Sons&oacute;n'),
(109, 2, 'Sopetr&aacute;n'),
(110, 2, 'Taraz&aacute;'),
(111, 2, 'Tarso'),
(112, 2, 'Titirib&iacute;'),
(113, 2, 'Toledo'),
(114, 2, 'Turbo'),
(115, 2, 'T&aacute;mesis'),
(116, 2, 'Uramita'),
(117, 2, 'Urrao'),
(118, 2, 'Valdivia'),
(119, 2, 'Valparaiso'),
(120, 2, 'Vegach&iacute;'),
(121, 2, 'Venecia'),
(122, 2, 'Vig&iacute;a del Fuerte'),
(123, 2, 'Yal&iacute;'),
(124, 2, 'Yarumal'),
(125, 2, 'Yolomb&oacute;'),
(126, 2, 'Yond&oacute; (Casabe)'),
(127, 2, 'Zaragoza'),
(128, 3, 'Arauca'),
(129, 3, 'Arauquita'),
(130, 3, 'Cravo Norte'),
(131, 3, 'Fort&uacute;l'),
(132, 3, 'Puerto Rond&oacute;n'),
(133, 3, 'Saravena'),
(134, 3, 'Tame'),
(135, 4, 'Baranoa'),
(136, 4, 'Barranquilla'),
(137, 4, 'Campo de la Cruz'),
(138, 4, 'Candelaria'),
(139, 4, 'Galapa'),
(140, 4, 'Juan de Acosta'),
(141, 4, 'Luruaco'),
(142, 4, 'Malambo'),
(143, 4, 'Manat&iacute;'),
(144, 4, 'Palmar de Varela'),
(145, 4, 'Piojo'),
(146, 4, 'Polonuevo'),
(147, 4, 'Ponedera'),
(148, 4, 'Puerto Colombia'),
(149, 4, 'Repel&oacute;n'),
(150, 4, 'Sabanagrande'),
(151, 4, 'Sabanalarga'),
(152, 4, 'Santa Luc&iacute;a'),
(153, 4, 'Santo Tom&aacute;s'),
(154, 4, 'Soledad'),
(155, 4, 'Suan'),
(156, 4, 'Tubar&aacute;'),
(157, 4, 'Usiacuri'),
(158, 5, 'Ach&iacute;'),
(159, 5, 'Altos del Rosario'),
(160, 5, 'Arenal'),
(161, 5, 'Arjona'),
(162, 5, 'Arroyohondo'),
(163, 5, 'Barranco de Loba'),
(164, 5, 'Calamar'),
(165, 5, 'Cantagallo'),
(166, 5, 'Cartagena'),
(167, 5, 'Cicuco'),
(168, 5, 'Clemencia'),
(169, 5, 'C&oacute;rdoba'),
(170, 5, 'El Carmen de Bol&iacute;var'),
(171, 5, 'El Guamo'),
(172, 5, 'El Pe&ntilde;on'),
(173, 5, 'Hatillo de Loba'),
(174, 5, 'Magangu&eacute;'),
(175, 5, 'Mahates'),
(176, 5, 'Margarita'),
(177, 5, 'Mar&iacute;a la Baja'),
(178, 5, 'Momp&oacute;s'),
(179, 5, 'Montecristo'),
(180, 5, 'Morales'),
(181, 5, 'Noros&iacute;'),
(182, 5, 'Pinillos'),
(183, 5, 'Regidor'),
(184, 5, 'R&iacute;o Viejo'),
(185, 5, 'San Cristobal'),
(186, 5, 'San Estanislao'),
(187, 5, 'San Fernando'),
(188, 5, 'San Jacinto'),
(189, 5, 'San Jacinto del Cauca'),
(190, 5, 'San Juan de Nepomuceno'),
(191, 5, 'San Mart&iacute;n de Loba'),
(192, 5, 'San Pablo'),
(193, 5, 'Santa Catalina'),
(194, 5, 'Santa Rosa '),
(195, 5, 'Santa Rosa del Sur'),
(196, 5, 'Simit&iacute;'),
(197, 5, 'Soplaviento'),
(198, 5, 'Talaigua Nuevo'),
(199, 5, 'Tiquisio (Puerto Rico)'),
(200, 5, 'Turbaco'),
(201, 5, 'Turban&aacute;'),
(202, 5, 'Villanueva'),
(203, 5, 'Zambrano'),
(204, 6, 'Almeida'),
(205, 6, 'Aquitania'),
(206, 6, 'Arcabuco'),
(207, 6, 'Bel&eacute;n'),
(208, 6, 'Berbeo'),
(209, 6, 'Beteitiva'),
(210, 6, 'Boavita'),
(211, 6, 'Boyac&aacute;'),
(212, 6, 'Brice&ntilde;o'),
(213, 6, 'Buenavista'),
(214, 6, 'Busbanza'),
(215, 6, 'Caldas'),
(216, 6, 'Campohermoso'),
(217, 6, 'Cerinza'),
(218, 6, 'Chinavita'),
(219, 6, 'Chiquinquir&aacute;'),
(220, 6, 'Chiscas'),
(221, 6, 'Chita'),
(222, 6, 'Chitaraque'),
(223, 6, 'Chivat&aacute;'),
(224, 6, 'Ch&iacute;quiza'),
(225, 6, 'Ch&iacute;vor'),
(226, 6, 'Ci&eacute;naga'),
(227, 6, 'Coper'),
(228, 6, 'Corrales'),
(229, 6, 'Covarach&iacute;a'),
(230, 6, 'Cubar&aacute;'),
(231, 6, 'Cucaita'),
(232, 6, 'Cuitiva'),
(233, 6, 'C&oacute;mbita'),
(234, 6, 'Duitama'),
(235, 6, 'El Cocuy'),
(236, 6, 'El Espino'),
(237, 6, 'Firavitoba'),
(238, 6, 'Floresta'),
(239, 6, 'Gachantiv&aacute;'),
(240, 6, 'Garagoa'),
(241, 6, 'Guacamayas'),
(242, 6, 'Guateque'),
(243, 6, 'Guayat&aacute;'),
(244, 6, 'Guic&aacute;n'),
(245, 6, 'G&aacute;meza'),
(246, 6, 'Iz&aacute;'),
(247, 6, 'Jenesano'),
(248, 6, 'Jeric&oacute;'),
(249, 6, 'La Capilla'),
(250, 6, 'La Uvita'),
(251, 6, 'La Victoria'),
(252, 6, 'Labranzagrande'),
(253, 6, 'Macanal'),
(254, 6, 'Marip&iacute;'),
(255, 6, 'Miraflores'),
(256, 6, 'Mongua'),
(257, 6, 'Mongu&iacute;'),
(258, 6, 'Moniquir&aacute;'),
(259, 6, 'Motavita'),
(260, 6, 'Muzo'),
(261, 6, 'Nobsa'),
(262, 6, 'Nuevo Col&oacute;n'),
(263, 6, 'Oicat&aacute;'),
(264, 6, 'Otanche'),
(265, 6, 'Pachavita'),
(266, 6, 'Paipa'),
(267, 6, 'Pajarito'),
(268, 6, 'Panqueba'),
(269, 6, 'Pauna'),
(270, 6, 'Paya'),
(271, 6, 'Paz de R&iacute;o'),
(272, 6, 'Pesca'),
(273, 6, 'Pisva'),
(274, 6, 'Puerto Boyac&aacute;'),
(275, 6, 'P&aacute;ez'),
(276, 6, 'Quipama'),
(277, 6, 'Ramiriqu&iacute;'),
(278, 6, 'Rond&oacute;n'),
(279, 6, 'R&aacute;quira'),
(280, 6, 'Saboy&aacute;'),
(281, 6, 'Samac&aacute;'),
(282, 6, 'San Eduardo'),
(283, 6, 'San Jos&eacute; de Pare'),
(284, 6, 'San Lu&iacute;s de Gaceno'),
(285, 6, 'San Mateo'),
(286, 6, 'San Miguel de Sema'),
(287, 6, 'San Pablo de Borbur'),
(288, 6, 'Santa Mar&iacute;a'),
(289, 6, 'Santa Rosa de Viterbo'),
(290, 6, 'Santa Sof&iacute;a'),
(291, 6, 'Santana'),
(292, 6, 'Sativanorte'),
(293, 6, 'Sativasur'),
(294, 6, 'Siachoque'),
(295, 6, 'Soat&aacute;'),
(296, 6, 'Socha'),
(297, 6, 'Socot&aacute;'),
(298, 6, 'Sogamoso'),
(299, 6, 'Somondoco'),
(300, 6, 'Sora'),
(301, 6, 'Sorac&aacute;'),
(302, 6, 'Sotaquir&aacute;'),
(303, 6, 'Susac&oacute;n'),
(304, 6, 'Sutamarch&aacute;n'),
(305, 6, 'Sutatenza'),
(306, 6, 'S&aacute;chica'),
(307, 6, 'Tasco'),
(308, 6, 'Tenza'),
(309, 6, 'Tiban&aacute;'),
(310, 6, 'Tibasosa'),
(311, 6, 'Tinjac&aacute;'),
(312, 6, 'Tipacoque'),
(313, 6, 'Toca'),
(314, 6, 'Togu&iacute;'),
(315, 6, 'Topag&aacute;'),
(316, 6, 'Tota'),
(317, 6, 'Tunja'),
(318, 6, 'Tunungua'),
(319, 6, 'Turmequ&eacute;'),
(320, 6, 'Tuta'),
(321, 6, 'Tutas&aacute;'),
(322, 6, 'Ventaquemada'),
(323, 6, 'Villa de Leiva'),
(324, 6, 'Viracach&aacute;'),
(325, 6, 'Zetaquir&aacute;'),
(326, 6, '&uacute;mbita'),
(327, 7, 'Aguadas'),
(328, 7, 'Anserma'),
(329, 7, 'Aranzazu'),
(330, 7, 'Belalc&aacute;zar'),
(331, 7, 'Chinchin&aacute;'),
(332, 7, 'Filadelfia'),
(333, 7, 'La Dorada'),
(334, 7, 'La Merced'),
(335, 7, 'La Victoria'),
(336, 7, 'Manizales'),
(337, 7, 'Manzanares'),
(338, 7, 'Marmato'),
(339, 7, 'Marquetalia'),
(340, 7, 'Marulanda'),
(341, 7, 'Neira'),
(342, 7, 'Norcasia'),
(343, 7, 'Palestina'),
(344, 7, 'Pensilvania'),
(345, 7, 'P&aacute;cora'),
(346, 7, 'Risaralda'),
(347, 7, 'R&iacute;o Sucio'),
(348, 7, 'Salamina'),
(349, 7, 'Saman&aacute;'),
(350, 7, 'San Jos&eacute;'),
(351, 7, 'Sup&iacute;a'),
(352, 7, 'Villamar&iacute;a'),
(353, 7, 'Viterbo'),
(354, 8, 'Albania'),
(355, 8, 'Bel&eacute;n de los Andaqu&iacute;es'),
(356, 8, 'Cartagena del Chair&aacute;'),
(357, 8, 'Curillo'),
(358, 8, 'El Doncello'),
(359, 8, 'El Paujil'),
(360, 8, 'Florencia'),
(361, 8, 'La Monta&ntilde;ita'),
(362, 8, 'Mil&aacute;n'),
(363, 8, 'Morelia'),
(364, 8, 'Puerto Rico'),
(365, 8, 'San Jos&eacute; del Fragua'),
(366, 8, 'San Vicente del Cagu&aacute;n'),
(367, 8, 'Solano'),
(368, 8, 'Solita'),
(369, 8, 'Valparaiso'),
(370, 9, 'Aguazul'),
(371, 9, 'Ch&aacute;meza'),
(372, 9, 'Hato Corozal'),
(373, 9, 'La Salina'),
(374, 9, 'Man&iacute;'),
(375, 9, 'Monterrey'),
(376, 9, 'Nunch&iacute;a'),
(377, 9, 'Orocu&eacute;'),
(378, 9, 'Paz de Ariporo'),
(379, 9, 'Pore'),
(380, 9, 'Recetor'),
(381, 9, 'Sabanalarga'),
(382, 9, 'San Lu&iacute;s de Palenque'),
(383, 9, 'S&aacute;cama'),
(384, 9, 'Tauramena'),
(385, 9, 'Trinidad'),
(386, 9, 'T&aacute;mara'),
(387, 9, 'Villanueva'),
(388, 9, 'Yopal'),
(389, 10, 'Almaguer'),
(390, 10, 'Argelia'),
(391, 10, 'Balboa'),
(392, 10, 'Bol&iacute;var'),
(393, 10, 'Buenos Aires'),
(394, 10, 'Cajib&iacute;o'),
(395, 10, 'Caldono'),
(396, 10, 'Caloto'),
(397, 10, 'Corinto'),
(398, 10, 'El Tambo'),
(399, 10, 'Florencia'),
(400, 10, 'Guachen&eacute;'),
(401, 10, 'Guap&iacute;'),
(402, 10, 'Inz&aacute;'),
(403, 10, 'Jambal&oacute;'),
(404, 10, 'La Sierra'),
(405, 10, 'La Vega'),
(406, 10, 'L&oacute;pez (Micay)'),
(407, 10, 'Mercaderes'),
(408, 10, 'Miranda'),
(409, 10, 'Morales'),
(410, 10, 'Padilla'),
(411, 10, 'Pat&iacute;a (El Bordo)'),
(412, 10, 'Piamonte'),
(413, 10, 'Piendam&oacute;'),
(414, 10, 'Popay&aacute;n'),
(415, 10, 'Puerto Tejada'),
(416, 10, 'Purac&eacute; (Coconuco)'),
(417, 10, 'P&aacute;ez (Belalcazar)'),
(418, 10, 'Rosas'),
(419, 10, 'San Sebasti&aacute;n'),
(420, 10, 'Santa Rosa'),
(421, 10, 'Santander de Quilichao'),
(422, 10, 'Silvia'),
(423, 10, 'Sotara (Paispamba)'),
(424, 10, 'Sucre'),
(425, 10, 'Su&aacute;rez'),
(426, 10, 'Timbiqu&iacute;'),
(427, 10, 'Timb&iacute;o'),
(428, 10, 'Torib&iacute;o'),
(429, 10, 'Totor&oacute;'),
(430, 10, 'Villa Rica'),
(431, 11, 'Aguachica'),
(432, 11, 'Agust&iacute;n Codazzi'),
(433, 11, 'Astrea'),
(434, 11, 'Becerr&iacute;l'),
(435, 11, 'Bosconia'),
(436, 11, 'Chimichagua'),
(437, 11, 'Chiriguan&aacute;'),
(438, 11, 'Curuman&iacute;'),
(439, 11, 'El Copey'),
(440, 11, 'El Paso'),
(441, 11, 'Gamarra'),
(442, 11, 'Gonzalez'),
(443, 11, 'La Gloria'),
(444, 11, 'La Jagua de Ibirico'),
(445, 11, 'La Paz (Robles)'),
(446, 11, 'Manaure Balc&oacute;n del Cesar'),
(447, 11, 'Pailitas'),
(448, 11, 'Pelaya'),
(449, 11, 'Pueblo Bello'),
(450, 11, 'R&iacute;o de oro'),
(451, 11, 'San Alberto'),
(452, 11, 'San Diego'),
(453, 11, 'San Mart&iacute;n'),
(454, 11, 'Tamalameque'),
(455, 11, 'Valledupar'),
(456, 12, 'Acand&iacute;'),
(457, 12, 'Alto Baud&oacute; (Pie de Pato)'),
(458, 12, 'Atrato (Yuto)'),
(459, 12, 'Bagad&oacute;'),
(460, 12, 'Bah&iacute;a Solano (M&uacute;tis)'),
(461, 12, 'Bajo Baud&oacute; (Pizarro)'),
(462, 12, 'Bel&eacute;n de Bajir&aacute;'),
(463, 12, 'Bojay&aacute; (Bellavista)'),
(464, 12, 'Cant&oacute;n de San Pablo'),
(465, 12, 'Carmen del Dari&eacute;n (CURBARAD&oacute;)'),
(466, 12, 'Condoto'),
(467, 12, 'C&eacute;rtegui'),
(468, 12, 'El Carmen de Atrato'),
(469, 12, 'Istmina'),
(470, 12, 'Jurad&oacute;'),
(471, 12, 'Llor&oacute;'),
(472, 12, 'Medio Atrato'),
(473, 12, 'Medio Baud&oacute;'),
(474, 12, 'Medio San Juan (ANDAGOYA)'),
(475, 12, 'Novita'),
(476, 12, 'Nuqu&iacute;'),
(477, 12, 'Quibd&oacute;'),
(478, 12, 'R&iacute;o Ir&oacute;'),
(479, 12, 'R&iacute;o Quito'),
(480, 12, 'R&iacute;osucio'),
(481, 12, 'San Jos&eacute; del Palmar'),
(482, 12, 'Santa Genoveva de Docorod&oacute;'),
(483, 12, 'Sip&iacute;'),
(484, 12, 'Tad&oacute;'),
(485, 12, 'Ungu&iacute;a'),
(486, 12, 'Uni&oacute;n Panamericana (&aacute;NIMAS)'),
(487, 13, 'Ayapel'),
(488, 13, 'Buenavista'),
(489, 13, 'Canalete'),
(490, 13, 'Ceret&eacute;'),
(491, 13, 'Chim&aacute;'),
(492, 13, 'Chin&uacute;'),
(493, 13, 'Ci&eacute;naga de Oro'),
(494, 13, 'Cotorra'),
(495, 13, 'La Apartada y La Frontera'),
(496, 13, 'Lorica'),
(497, 13, 'Los C&oacute;rdobas'),
(498, 13, 'Momil'),
(499, 13, 'Montel&iacute;bano'),
(500, 13, 'Monteria'),
(501, 13, 'Mo&ntilde;itos'),
(502, 13, 'Planeta Rica'),
(503, 13, 'Pueblo Nuevo'),
(504, 13, 'Puerto Escondido'),
(505, 13, 'Puerto Libertador'),
(506, 13, 'Pur&iacute;sima'),
(507, 13, 'Sahag&uacute;n'),
(508, 13, 'San Andr&eacute;s Sotavento'),
(509, 13, 'San Antero'),
(510, 13, 'San Bernardo del Viento'),
(511, 13, 'San Carlos'),
(512, 13, 'San Jos&eacute; de Ur&eacute;'),
(513, 13, 'San Pelayo'),
(514, 13, 'Tierralta'),
(515, 13, 'Tuch&iacute;n'),
(516, 13, 'Valencia'),
(517, 14, 'Agua de Dios'),
(518, 14, 'Alb&aacute;n'),
(519, 14, 'Anapoima'),
(520, 14, 'Anolaima'),
(521, 14, 'Apulo'),
(522, 14, 'Arbel&aacute;ez'),
(523, 14, 'Beltr&aacute;n'),
(524, 14, 'Bituima'),
(525, 14, 'Bogot&aacute; D.C.'),
(526, 14, 'Bojac&aacute;'),
(527, 14, 'Cabrera'),
(528, 14, 'Cachipay'),
(529, 14, 'Cajic&aacute;'),
(530, 14, 'Caparrap&iacute;'),
(531, 14, 'Carmen de Carupa'),
(532, 14, 'Chaguan&iacute;'),
(533, 14, 'Chipaque'),
(534, 14, 'Choach&iacute;'),
(535, 14, 'Chocont&aacute;'),
(536, 14, 'Ch&iacute;a'),
(537, 14, 'Cogua'),
(538, 14, 'Cota'),
(539, 14, 'Cucunub&aacute;'),
(540, 14, 'C&aacute;queza'),
(541, 14, 'El Colegio'),
(542, 14, 'El Pe&ntilde;&oacute;n'),
(543, 14, 'El Rosal'),
(544, 14, 'Facatativ&aacute;'),
(545, 14, 'Fosca'),
(546, 14, 'Funza'),
(547, 14, 'Fusagasug&aacute;'),
(548, 14, 'F&oacute;meque'),
(549, 14, 'F&uacute;quene'),
(550, 14, 'Gachal&aacute;'),
(551, 14, 'Gachancip&aacute;'),
(552, 14, 'Gachet&aacute;'),
(553, 14, 'Gama'),
(554, 14, 'Girardot'),
(555, 14, 'Granada'),
(556, 14, 'Guachet&aacute;'),
(557, 14, 'Guaduas'),
(558, 14, 'Guasca'),
(559, 14, 'Guataqu&iacute;'),
(560, 14, 'Guatavita'),
(561, 14, 'Guayabal de Siquima'),
(562, 14, 'Guayabetal'),
(563, 14, 'Guti&eacute;rrez'),
(564, 14, 'Jerusal&eacute;n'),
(565, 14, 'Jun&iacute;n'),
(566, 14, 'La Calera'),
(567, 14, 'La Mesa'),
(568, 14, 'La Palma'),
(569, 14, 'La Pe&ntilde;a'),
(570, 14, 'La Vega'),
(571, 14, 'Lenguazaque'),
(572, 14, 'Machet&aacute;'),
(573, 14, 'Madrid'),
(574, 14, 'Manta'),
(575, 14, 'Medina'),
(576, 14, 'Mosquera'),
(577, 14, 'Nari&ntilde;o'),
(578, 14, 'Nemoc&oacute;n'),
(579, 14, 'Nilo'),
(580, 14, 'Nimaima'),
(581, 14, 'Nocaima'),
(582, 14, 'Pacho'),
(583, 14, 'Paime'),
(584, 14, 'Pandi'),
(585, 14, 'Paratebueno'),
(586, 14, 'Pasca'),
(587, 14, 'Puerto Salgar'),
(588, 14, 'Pul&iacute;'),
(589, 14, 'Quebradanegra'),
(590, 14, 'Quetame'),
(591, 14, 'Quipile'),
(592, 14, 'Ricaurte'),
(593, 14, 'San Antonio de Tequendama'),
(594, 14, 'San Bernardo'),
(595, 14, 'San Cayetano'),
(596, 14, 'San Francisco'),
(597, 14, 'San Juan de R&iacute;o Seco'),
(598, 14, 'Sasaima'),
(599, 14, 'Sesquil&eacute;'),
(600, 14, 'Sibat&eacute;'),
(601, 14, 'Silvania'),
(602, 14, 'Simijaca'),
(603, 14, 'Soacha'),
(604, 14, 'Sop&oacute;'),
(605, 14, 'Subachoque'),
(606, 14, 'Suesca'),
(607, 14, 'Supat&aacute;'),
(608, 14, 'Susa'),
(609, 14, 'Sutatausa'),
(610, 14, 'Tabio'),
(611, 14, 'Tausa'),
(612, 14, 'Tena'),
(613, 14, 'Tenjo'),
(614, 14, 'Tibacuy'),
(615, 14, 'Tibirita'),
(616, 14, 'Tocaima'),
(617, 14, 'Tocancip&aacute;'),
(618, 14, 'Topaip&iacute;'),
(619, 14, 'Ubal&aacute;'),
(620, 14, 'Ubaque'),
(621, 14, 'Ubat&eacute;'),
(622, 14, 'Une'),
(623, 14, 'Venecia (Ospina P&eacute;rez)'),
(624, 14, 'Vergara'),
(625, 14, 'Viani'),
(626, 14, 'Villag&oacute;mez'),
(627, 14, 'Villapinz&oacute;n'),
(628, 14, 'Villeta'),
(629, 14, 'Viot&aacute;'),
(630, 14, 'Yacop&iacute;'),
(631, 14, 'Zipac&oacute;n'),
(632, 14, 'Zipaquir&aacute;'),
(633, 14, '&uacute;tica'),
(634, 15, 'In&iacute;rida'),
(635, 16, 'Calamar'),
(636, 16, 'El Retorno'),
(637, 16, 'Miraflores'),
(638, 16, 'San Jos&eacute; del Guaviare'),
(639, 17, 'Acevedo'),
(640, 17, 'Agrado'),
(641, 17, 'Aipe'),
(642, 17, 'Algeciras'),
(643, 17, 'Altamira'),
(644, 17, 'Baraya'),
(645, 17, 'Campoalegre'),
(646, 17, 'Colombia'),
(647, 17, 'El&iacute;as'),
(648, 17, 'Garz&oacute;n'),
(649, 17, 'Gigante'),
(650, 17, 'Guadalupe'),
(651, 17, 'Hobo'),
(652, 17, 'Isnos'),
(653, 17, 'La Argentina'),
(654, 17, 'La Plata'),
(655, 17, 'Neiva'),
(656, 17, 'N&aacute;taga'),
(657, 17, 'Oporapa'),
(658, 17, 'Paicol'),
(659, 17, 'Palermo'),
(660, 17, 'Palestina'),
(661, 17, 'Pital'),
(662, 17, 'Pitalito'),
(663, 17, 'Rivera'),
(664, 17, 'Saladoblanco'),
(665, 17, 'San Agust&iacute;n'),
(666, 17, 'Santa Mar&iacute;a'),
(667, 17, 'Suaza'),
(668, 17, 'Tarqui'),
(669, 17, 'Tello'),
(670, 17, 'Teruel'),
(671, 17, 'Tesalia'),
(672, 17, 'Timan&aacute;'),
(673, 17, 'Villavieja'),
(674, 17, 'Yaguar&aacute;'),
(675, 17, '&iacute;quira'),
(676, 18, 'Albania'),
(677, 18, 'Barrancas'),
(678, 18, 'Dibulla'),
(679, 18, 'Distracci&oacute;n'),
(680, 18, 'El Molino'),
(681, 18, 'Fonseca'),
(682, 18, 'Hatonuevo'),
(683, 18, 'La Jagua del Pilar'),
(684, 18, 'Maicao'),
(685, 18, 'Manaure'),
(686, 18, 'Riohacha'),
(687, 18, 'San Juan del Cesar'),
(688, 18, 'Uribia'),
(689, 18, 'Urumita'),
(690, 18, 'Villanueva'),
(691, 19, 'Algarrobo'),
(692, 19, 'Aracataca'),
(693, 19, 'Ariguan&iacute; (El Dif&iacute;cil)'),
(694, 19, 'Cerro San Antonio'),
(695, 19, 'Chivolo'),
(696, 19, 'Ci&eacute;naga'),
(697, 19, 'Concordia'),
(698, 19, 'El Banco'),
(699, 19, 'El Pi&ntilde;on'),
(700, 19, 'El Ret&eacute;n'),
(701, 19, 'Fundaci&oacute;n'),
(702, 19, 'Guamal'),
(703, 19, 'Nueva Granada'),
(704, 19, 'Pedraza'),
(705, 19, 'Piji&ntilde;o'),
(706, 19, 'Pivijay'),
(707, 19, 'Plato'),
(708, 19, 'Puebloviejo'),
(709, 19, 'Remolino'),
(710, 19, 'Sabanas de San Angel (SAN ANGEL)'),
(711, 19, 'Salamina'),
(712, 19, 'San Sebasti&aacute;n de Buenavista'),
(713, 19, 'San Zen&oacute;n'),
(714, 19, 'Santa Ana'),
(715, 19, 'Santa B&aacute;rbara de Pinto'),
(716, 19, 'Santa Marta'),
(717, 19, 'Sitionuevo'),
(718, 19, 'Tenerife'),
(719, 19, 'Zapay&aacute;n (PUNTA DE PIEDRAS)'),
(720, 19, 'Zona Bananera (PRADO - SEVILLA)'),
(721, 20, 'Acac&iacute;as'),
(722, 20, 'Barranca de Up&iacute;a'),
(723, 20, 'Cabuyaro'),
(724, 20, 'Castilla la Nueva'),
(725, 20, 'Cubarral'),
(726, 20, 'Cumaral'),
(727, 20, 'El Calvario'),
(728, 20, 'El Castillo'),
(729, 20, 'El Dorado'),
(730, 20, 'Fuente de Oro'),
(731, 20, 'Granada'),
(732, 20, 'Guamal'),
(733, 20, 'La Macarena'),
(734, 20, 'Lejan&iacute;as'),
(735, 20, 'Mapiripan'),
(736, 20, 'Mesetas'),
(737, 20, 'Puerto Concordia'),
(738, 20, 'Puerto Gait&aacute;n'),
(739, 20, 'Puerto Lleras'),
(740, 20, 'Puerto L&oacute;pez'),
(741, 20, 'Puerto Rico'),
(742, 20, 'Restrepo'),
(743, 20, 'San Carlos de Guaroa'),
(744, 20, 'San Juan de Arama'),
(745, 20, 'San Juanito'),
(746, 20, 'San Mart&iacute;n'),
(747, 20, 'Uribe'),
(748, 20, 'Villavicencio'),
(749, 20, 'Vista Hermosa'),
(750, 21, 'Alb&aacute;n (San Jos&eacute;)'),
(751, 21, 'Aldana'),
(752, 21, 'Ancuya'),
(753, 21, 'Arboleda (Berruecos)'),
(754, 21, 'Barbacoas'),
(755, 21, 'Bel&eacute;n'),
(756, 21, 'Buesaco'),
(757, 21, 'Chachagu&iacute;'),
(758, 21, 'Col&oacute;n (G&eacute;nova)'),
(759, 21, 'Consaca'),
(760, 21, 'Contadero'),
(761, 21, 'Cuaspud (Carlosama)'),
(762, 21, 'Cumbal'),
(763, 21, 'Cumbitara'),
(764, 21, 'C&oacute;rdoba'),
(765, 21, 'El Charco'),
(766, 21, 'El Pe&ntilde;ol'),
(767, 21, 'El Rosario'),
(768, 21, 'El Tabl&oacute;n de G&oacute;mez'),
(769, 21, 'El Tambo'),
(770, 21, 'Francisco Pizarro'),
(771, 21, 'Funes'),
(772, 21, 'Guachav&eacute;s'),
(773, 21, 'Guachucal'),
(774, 21, 'Guaitarilla'),
(775, 21, 'Gualmat&aacute;n'),
(776, 21, 'Iles'),
(777, 21, 'Im&uacute;es'),
(778, 21, 'Ipiales'),
(779, 21, 'La Cruz'),
(780, 21, 'La Florida'),
(781, 21, 'La Llanada'),
(782, 21, 'La Tola'),
(783, 21, 'La Uni&oacute;n'),
(784, 21, 'Leiva'),
(785, 21, 'Linares'),
(786, 21, 'Magüi (Pay&aacute;n)'),
(787, 21, 'Mallama (Piedrancha)'),
(788, 21, 'Mosquera'),
(789, 21, 'Nari&ntilde;o'),
(790, 21, 'Olaya Herrera'),
(791, 21, 'Ospina'),
(792, 21, 'Policarpa'),
(793, 21, 'Potos&iacute;'),
(794, 21, 'Providencia'),
(795, 21, 'Puerres'),
(796, 21, 'Pupiales'),
(797, 21, 'Ricaurte'),
(798, 21, 'Roberto Pay&aacute;n (San Jos&eacute;)'),
(799, 21, 'Samaniego'),
(800, 21, 'San Bernardo'),
(801, 21, 'San Juan de Pasto'),
(802, 21, 'San Lorenzo'),
(803, 21, 'San Pablo'),
(804, 21, 'San Pedro de Cartago'),
(805, 21, 'Sandon&aacute;'),
(806, 21, 'Santa B&aacute;rbara (Iscuand&eacute;)'),
(807, 21, 'Sapuyes'),
(808, 21, 'Sotomayor (Los Andes)'),
(809, 21, 'Taminango'),
(810, 21, 'Tangua'),
(811, 21, 'Tumaco'),
(812, 21, 'T&uacute;querres'),
(813, 21, 'Yacuanquer'),
(814, 22, 'Arboledas'),
(815, 22, 'Bochalema'),
(816, 22, 'Bucarasica'),
(817, 22, 'Chin&aacute;cota'),
(818, 22, 'Chitag&aacute;'),
(819, 22, 'Convenci&oacute;n'),
(820, 22, 'Cucutilla'),
(821, 22, 'C&aacute;chira'),
(822, 22, 'C&aacute;cota'),
(823, 22, 'C&uacute;cuta'),
(824, 22, 'Durania'),
(825, 22, 'El Carmen'),
(826, 22, 'El Tarra'),
(827, 22, 'El Zulia'),
(828, 22, 'Gramalote'),
(829, 22, 'Hacar&iacute;'),
(830, 22, 'Herr&aacute;n'),
(831, 22, 'La Esperanza'),
(832, 22, 'La Playa'),
(833, 22, 'Labateca'),
(834, 22, 'Los Patios'),
(835, 22, 'Lourdes'),
(836, 22, 'Mutiscua'),
(837, 22, 'Oca&ntilde;a'),
(838, 22, 'Pamplona'),
(839, 22, 'Pamplonita'),
(840, 22, 'Puerto Santander'),
(841, 22, 'Ragonvalia'),
(842, 22, 'Salazar'),
(843, 22, 'San Calixto'),
(844, 22, 'San Cayetano'),
(845, 22, 'Santiago'),
(846, 22, 'Sardinata'),
(847, 22, 'Silos'),
(848, 22, 'Teorama'),
(849, 22, 'Tib&uacute;'),
(850, 22, 'Toledo'),
(851, 22, 'Villa Caro'),
(852, 22, 'Villa del Rosario'),
(853, 22, '&aacute;brego'),
(854, 23, 'Col&oacute;n'),
(855, 23, 'Mocoa'),
(856, 23, 'Orito'),
(857, 23, 'Puerto As&iacute;s'),
(858, 23, 'Puerto Caicedo'),
(859, 23, 'Puerto Guzm&aacute;n'),
(860, 23, 'Puerto Legu&iacute;zamo'),
(861, 23, 'San Francisco'),
(862, 23, 'San Miguel'),
(863, 23, 'Santiago'),
(864, 23, 'Sibundoy'),
(865, 23, 'Valle del Guamuez'),
(866, 23, 'Villagarz&oacute;n'),
(867, 24, 'Armenia'),
(868, 24, 'Buenavista'),
(869, 24, 'Calarc&aacute;'),
(870, 24, 'Circasia'),
(871, 24, 'Cordob&aacute;'),
(872, 24, 'Filandia'),
(873, 24, 'G&eacute;nova'),
(874, 24, 'La Tebaida'),
(875, 24, 'Montenegro'),
(876, 24, 'Pijao'),
(877, 24, 'Quimbaya'),
(878, 24, 'Salento'),
(879, 25, 'Ap&iacute;a'),
(880, 25, 'Balboa'),
(881, 25, 'Bel&eacute;n de Umbr&iacute;a'),
(882, 25, 'Dos Quebradas'),
(883, 25, 'Gu&aacute;tica'),
(884, 25, 'La Celia'),
(885, 25, 'La Virginia'),
(886, 25, 'Marsella'),
(887, 25, 'Mistrat&oacute;'),
(888, 25, 'Pereira'),
(889, 25, 'Pueblo Rico'),
(890, 25, 'Quinch&iacute;a'),
(891, 25, 'Santa Rosa de Cabal'),
(892, 25, 'Santuario'),
(893, 26, 'Providencia'),
(894, 27, 'Aguada'),
(895, 27, 'Albania'),
(896, 27, 'Aratoca'),
(897, 27, 'Barbosa'),
(898, 27, 'Barichara'),
(899, 27, 'Barrancabermeja'),
(900, 27, 'Betulia'),
(901, 27, 'Bol&iacute;var'),
(902, 27, 'Bucaramanga'),
(903, 27, 'Cabrera'),
(904, 27, 'California'),
(905, 27, 'Capitanejo'),
(906, 27, 'Carcas&iacute;'),
(907, 27, 'Cepita'),
(908, 27, 'Cerrito'),
(909, 27, 'Charal&aacute;'),
(910, 27, 'Charta'),
(911, 27, 'Chima'),
(912, 27, 'Chipat&aacute;'),
(913, 27, 'Cimitarra'),
(914, 27, 'Concepci&oacute;n'),
(915, 27, 'Confines'),
(916, 27, 'Contrataci&oacute;n'),
(917, 27, 'Coromoro'),
(918, 27, 'Curit&iacute;'),
(919, 27, 'El Carmen'),
(920, 27, 'El Guacamayo'),
(921, 27, 'El Pe&ntilde;on'),
(922, 27, 'El Play&oacute;n'),
(923, 27, 'Encino'),
(924, 27, 'Enciso'),
(925, 27, 'Floridablanca'),
(926, 27, 'Flori&aacute;n'),
(927, 27, 'Gal&aacute;n'),
(928, 27, 'Gir&oacute;n'),
(929, 27, 'Guaca'),
(930, 27, 'Guadalupe'),
(931, 27, 'Guapota'),
(932, 27, 'Guavat&aacute;'),
(933, 27, 'Guepsa'),
(934, 27, 'G&aacute;mbita'),
(935, 27, 'Hato'),
(936, 27, 'Jes&uacute;s Mar&iacute;a'),
(937, 27, 'Jord&aacute;n'),
(938, 27, 'La Belleza'),
(939, 27, 'La Paz'),
(940, 27, 'Land&aacute;zuri'),
(941, 27, 'Lebrija'),
(942, 27, 'Los Santos'),
(943, 27, 'Macaravita'),
(944, 27, 'Matanza'),
(945, 27, 'Mogotes'),
(946, 27, 'Molagavita'),
(947, 27, 'M&aacute;laga'),
(948, 27, 'Ocamonte'),
(949, 27, 'Oiba'),
(950, 27, 'Onzaga'),
(951, 27, 'Palmar'),
(952, 27, 'Palmas del Socorro'),
(953, 27, 'Pie de Cuesta'),
(954, 27, 'Pinchote'),
(955, 27, 'Puente Nacional'),
(956, 27, 'Puerto Parra'),
(957, 27, 'Puerto Wilches'),
(958, 27, 'P&aacute;ramo'),
(959, 27, 'Rio Negro'),
(960, 27, 'Sabana de Torres'),
(961, 27, 'San Andr&eacute;s'),
(962, 27, 'San Benito'),
(963, 27, 'San G&iacute;l'),
(964, 27, 'San Joaqu&iacute;n'),
(965, 27, 'San Jos&eacute; de Miranda'),
(966, 27, 'San Miguel'),
(967, 27, 'San Vicente del Chucur&iacute;'),
(968, 27, 'Santa B&aacute;rbara'),
(969, 27, 'Santa Helena del Op&oacute;n'),
(970, 27, 'Simacota'),
(971, 27, 'Socorro'),
(972, 27, 'Suaita'),
(973, 27, 'Sucre'),
(974, 27, 'Surat&aacute;'),
(975, 27, 'Tona'),
(976, 27, 'Valle de San Jos&eacute;'),
(977, 27, 'Vetas'),
(978, 27, 'Villanueva'),
(979, 27, 'V&eacute;lez'),
(980, 27, 'Zapatoca'),
(981, 28, 'Buenavista'),
(982, 28, 'Caimito'),
(983, 28, 'Chal&aacute;n'),
(984, 28, 'Colos&oacute; (Ricaurte)'),
(985, 28, 'Corozal'),
(986, 28, 'Cove&ntilde;as'),
(987, 28, 'El Roble'),
(988, 28, 'Galeras (Nueva Granada)'),
(989, 28, 'Guaranda'),
(990, 28, 'La Uni&oacute;n'),
(991, 28, 'Los Palmitos'),
(992, 28, 'Majagual'),
(993, 28, 'Morroa'),
(994, 28, 'Ovejas'),
(995, 28, 'Palmito'),
(996, 28, 'Sampu&eacute;s'),
(997, 28, 'San Benito Abad'),
(998, 28, 'San Juan de Betulia'),
(999, 28, 'San Marcos'),
(1000, 28, 'San Onofre'),
(1001, 28, 'San Pedro'),
(1002, 28, 'Sincelejo'),
(1003, 28, 'Sinc&eacute;'),
(1004, 28, 'Sucre'),
(1005, 28, 'Tol&uacute;'),
(1006, 28, 'Tol&uacute; Viejo'),
(1007, 29, 'Alpujarra'),
(1008, 29, 'Alvarado'),
(1009, 29, 'Ambalema'),
(1010, 29, 'Anzo&aacute;tegui'),
(1011, 29, 'Armero (Guayabal)'),
(1012, 29, 'Ataco'),
(1013, 29, 'Cajamarca'),
(1014, 29, 'Carmen de Apical&aacute;'),
(1015, 29, 'Casabianca'),
(1016, 29, 'Chaparral'),
(1017, 29, 'Coello'),
(1018, 29, 'Coyaima'),
(1019, 29, 'Cunday'),
(1020, 29, 'Dolores'),
(1021, 29, 'Espinal'),
(1022, 29, 'Falan'),
(1023, 29, 'Flandes'),
(1024, 29, 'Fresno'),
(1025, 29, 'Guamo'),
(1026, 29, 'Herveo'),
(1027, 29, 'Honda'),
(1028, 29, 'Ibagu&eacute;'),
(1029, 29, 'Icononzo'),
(1030, 29, 'L&eacute;rida'),
(1031, 29, 'L&iacute;bano'),
(1032, 29, 'Mariquita'),
(1033, 29, 'Melgar'),
(1034, 29, 'Murillo'),
(1035, 29, 'Natagaima'),
(1036, 29, 'Ortega'),
(1037, 29, 'Palocabildo'),
(1038, 29, 'Piedras'),
(1039, 29, 'Planadas'),
(1040, 29, 'Prado'),
(1041, 29, 'Purificaci&oacute;n'),
(1042, 29, 'Rioblanco'),
(1043, 29, 'Roncesvalles'),
(1044, 29, 'Rovira'),
(1045, 29, 'Salda&ntilde;a'),
(1046, 29, 'San Antonio'),
(1047, 29, 'San Luis'),
(1048, 29, 'Santa Isabel'),
(1049, 29, 'Su&aacute;rez'),
(1050, 29, 'Valle de San Juan'),
(1051, 29, 'Venadillo'),
(1052, 29, 'Villahermosa'),
(1053, 29, 'Villarrica'),
(1054, 30, 'Alcal&aacute;'),
(1055, 30, 'Andaluc&iacute;a'),
(1056, 30, 'Ansermanuevo'),
(1057, 30, 'Argelia'),
(1058, 30, 'Bol&iacute;var'),
(1059, 30, 'Buenaventura'),
(1060, 30, 'Buga'),
(1061, 30, 'Bugalagrande'),
(1062, 30, 'Caicedonia'),
(1063, 30, 'Calima (Dari&eacute;n)'),
(1064, 30, 'Cal&iacute;'),
(1065, 30, 'Candelaria'),
(1066, 30, 'Cartago'),
(1067, 30, 'Dagua'),
(1068, 30, 'El Cairo'),
(1069, 30, 'El Cerrito'),
(1070, 30, 'El Dovio'),
(1071, 30, 'El &aacute;guila'),
(1072, 30, 'Florida'),
(1073, 30, 'Ginebra'),
(1074, 30, 'Guacar&iacute;'),
(1075, 30, 'Jamund&iacute;'),
(1076, 30, 'La Cumbre'),
(1077, 30, 'La Uni&oacute;n'),
(1078, 30, 'La Victoria'),
(1079, 30, 'Obando'),
(1080, 30, 'Palmira'),
(1081, 30, 'Pradera'),
(1082, 30, 'Restrepo'),
(1083, 30, 'Riofr&iacute;o'),
(1084, 30, 'Roldanillo'),
(1085, 30, 'San Pedro'),
(1086, 30, 'Sevilla'),
(1087, 30, 'Toro'),
(1088, 30, 'Trujillo'),
(1089, 30, 'Tul&uacute;a'),
(1090, 30, 'Ulloa'),
(1091, 30, 'Versalles'),
(1092, 30, 'Vijes'),
(1093, 30, 'Yotoco'),
(1094, 30, 'Yumbo'),
(1095, 30, 'Zarzal'),
(1096, 31, 'Carur&uacute;'),
(1097, 31, 'Mit&uacute;'),
(1098, 31, 'Taraira'),
(1099, 32, 'Cumaribo'),
(1100, 32, 'La Primavera'),
(1101, 32, 'Puerto Carre&ntilde;o'),
(1102, 32, 'Santa Rosal&iacute;a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `setting_menu`
--

CREATE TABLE `setting_menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(222) COLLATE utf8_spanish_ci NOT NULL,
  `prefix_menu` varchar(222) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `setting_menu`
--

INSERT INTO `setting_menu` (`id_menu`, `menu`, `prefix_menu`) VALUES
(1, 'Consulta', 'pqrs'),
(2, 'Registro', 'enrollPqrs'),
(3, 'Tratamiento', 'processing'),
(4, 'Informes', 'informs'),
(5, 'Panel de control', 'controlPanel'),
(6, 'Salir', 'logOut');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `setting_permission`
--

CREATE TABLE `setting_permission` (
  `id_permission` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `setting_permission`
--

INSERT INTO `setting_permission` (`id_permission`, `id_menu`, `id_role`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `setting_position`
--

CREATE TABLE `setting_position` (
  `id_position` int(11) NOT NULL,
  `position` varchar(222) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `setting_position`
--

INSERT INTO `setting_position` (`id_position`, `position`) VALUES
(1, 'Personal Tecnologia'),
(2, 'Personal Comercial'),
(3, 'Personal Administrativo'),
(4, 'Jefe de Inventario'),
(5, 'Usuario MAS'),
(6, 'Usuario Visitante'),
(7, 'Gerente de Proyectos'),
(8, 'Calidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `setting_state`
--

CREATE TABLE `setting_state` (
  `id_state` int(11) NOT NULL,
  `state` varchar(222) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `setting_state`
--

INSERT INTO `setting_state` (`id_state`, `state`) VALUES
(1, 'ACTIVO'),
(2, 'INACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `setting_town`
--

CREATE TABLE `setting_town` (
  `id_town` int(11) NOT NULL,
  `town` varchar(222) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `setting_town`
--

INSERT INTO `setting_town` (`id_town`, `town`) VALUES
(1, 'Amazonas'),
(2, 'Antioquia'),
(3, 'Arauca'),
(4, 'Atl&aacute;ntico'),
(5, 'Bol&iacute;var'),
(6, 'Boyac&aacute;'),
(7, 'Caldas'),
(8, 'Caquet&aacute;'),
(9, 'Casanare'),
(10, 'Cauca'),
(11, 'Cesar'),
(12, 'Choc&oacute;'),
(13, 'C&oacute;rdoba'),
(14, 'Cundinamarca'),
(15, 'Güainia'),
(16, 'Guaviare'),
(17, 'Huila'),
(18, 'La Guajira'),
(19, 'Magdalena'),
(20, 'Meta'),
(21, 'Nari&ntilde;o'),
(22, 'Norte de Santander'),
(23, 'Putumayo'),
(24, 'Quindo'),
(25, 'Risaralda'),
(26, 'San Andr&eacute;s y Providencia'),
(27, 'Santander'),
(28, 'Sucre'),
(29, 'Tolima'),
(30, 'Valle del Cauca'),
(31, 'Vaup&eacute;s'),
(32, 'Vichada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `setting_type_log`
--

CREATE TABLE `setting_type_log` (
  `id_type_log` int(11) NOT NULL,
  `type_log` varchar(222) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `setting_type_person`
--

CREATE TABLE `setting_type_person` (
  `id_type_person` int(11) NOT NULL,
  `type_person` varchar(222) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `setting_type_person`
--

INSERT INTO `setting_type_person` (`id_type_person`, `type_person`) VALUES
(1, 'CLIENTE'),
(2, 'EMPLEADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `setting_type_rol`
--

CREATE TABLE `setting_type_rol` (
  `id_role` int(11) NOT NULL,
  `role` varchar(222) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `setting_type_rol`
--

INSERT INTO `setting_type_rol` (`id_role`, `role`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'ASESOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transact_activity_log`
--

CREATE TABLE `transact_activity_log` (
  `id_log` int(11) NOT NULL,
  `activity_log` varchar(222) COLLATE utf8_spanish_ci NOT NULL,
  `id_user_log` int(11) NOT NULL,
  `id_type_log` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transact_client`
--

CREATE TABLE `transact_client` (
  `id_client` int(11) NOT NULL,
  `id_person_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transact_employee`
--

CREATE TABLE `transact_employee` (
  `id_employee` int(11) NOT NULL,
  `id_person_employee` int(11) NOT NULL,
  `id_position_employee` int(11) NOT NULL,
  `id_state_employee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `transact_employee`
--

INSERT INTO `transact_employee` (`id_employee`, `id_person_employee`, `id_position_employee`, `id_state_employee`) VALUES
(2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transact_person`
--

CREATE TABLE `transact_person` (
  `id_person` int(11) NOT NULL,
  `name_person` varchar(222) COLLATE utf8mb4_spanish_ci NOT NULL,
  `lastname_person` varchar(222) COLLATE utf8mb4_spanish_ci NOT NULL,
  `document_type_person` int(11) NOT NULL,
  `identification_number_person` varchar(222) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_city_person` int(11) NOT NULL,
  `phone_number_person` int(11) DEFAULT NULL,
  `cellphone_number_person` int(11) NOT NULL,
  `email_person` varchar(222) COLLATE utf8mb4_spanish_ci NOT NULL,
  `address_person` varchar(222) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_type_person` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='//Tabla "person" donde se administran las personas relacionadas con el sistema';

--
-- Volcado de datos para la tabla `transact_person`
--

INSERT INTO `transact_person` (`id_person`, `name_person`, `lastname_person`, `document_type_person`, `identification_number_person`, `id_city_person`, `phone_number_person`, `cellphone_number_person`, `email_person`, `address_person`, `id_type_person`) VALUES
(1, 'Bryan', 'Mu&ntilde;oz', 1, '123456789', 525, 12345678, 1234567, 'fdalkjfa&ntilde;j', 'djkalfjas&ntilde;dl', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transact_user`
--

CREATE TABLE `transact_user` (
  `id_user` int(11) NOT NULL,
  `id_employee_user` int(11) NOT NULL,
  `id_rol_user` int(11) NOT NULL,
  `name_user` varchar(222) COLLATE utf8_spanish_ci NOT NULL,
  `password_user` varchar(222) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='//Administracion de usuarios de logueo en la aplicacion ';

--
-- Volcado de datos para la tabla `transact_user`
--

INSERT INTO `transact_user` (`id_user`, `id_employee_user`, `id_rol_user`, `name_user`, `password_user`) VALUES
(1, 2, 1, 'bmunoz', '12345678');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `setting_city`
--
ALTER TABLE `setting_city`
  ADD PRIMARY KEY (`id_city`),
  ADD KEY `id_town_city` (`id_town_city`);

--
-- Indices de la tabla `setting_menu`
--
ALTER TABLE `setting_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `setting_permission`
--
ALTER TABLE `setting_permission`
  ADD PRIMARY KEY (`id_permission`),
  ADD KEY `id_menu` (`id_menu`,`id_role`),
  ADD KEY `id_role` (`id_role`);

--
-- Indices de la tabla `setting_position`
--
ALTER TABLE `setting_position`
  ADD PRIMARY KEY (`id_position`);

--
-- Indices de la tabla `setting_state`
--
ALTER TABLE `setting_state`
  ADD PRIMARY KEY (`id_state`);

--
-- Indices de la tabla `setting_town`
--
ALTER TABLE `setting_town`
  ADD PRIMARY KEY (`id_town`);

--
-- Indices de la tabla `setting_type_log`
--
ALTER TABLE `setting_type_log`
  ADD PRIMARY KEY (`id_type_log`);

--
-- Indices de la tabla `setting_type_person`
--
ALTER TABLE `setting_type_person`
  ADD PRIMARY KEY (`id_type_person`);

--
-- Indices de la tabla `setting_type_rol`
--
ALTER TABLE `setting_type_rol`
  ADD PRIMARY KEY (`id_role`);

--
-- Indices de la tabla `transact_activity_log`
--
ALTER TABLE `transact_activity_log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_user_log` (`id_user_log`,`id_type_log`),
  ADD KEY `id_type_log` (`id_type_log`);

--
-- Indices de la tabla `transact_client`
--
ALTER TABLE `transact_client`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `id_person_client` (`id_person_client`);

--
-- Indices de la tabla `transact_employee`
--
ALTER TABLE `transact_employee`
  ADD PRIMARY KEY (`id_employee`),
  ADD KEY `id_person_employee` (`id_person_employee`),
  ADD KEY `id_position_employee` (`id_position_employee`),
  ADD KEY `id_state_employee` (`id_state_employee`);

--
-- Indices de la tabla `transact_person`
--
ALTER TABLE `transact_person`
  ADD PRIMARY KEY (`id_person`),
  ADD KEY `id_type_person` (`id_type_person`);

--
-- Indices de la tabla `transact_user`
--
ALTER TABLE `transact_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_employee_user` (`id_employee_user`),
  ADD KEY `id_rol_user` (`id_rol_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `setting_city`
--
ALTER TABLE `setting_city`
  MODIFY `id_city` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1103;
--
-- AUTO_INCREMENT de la tabla `setting_menu`
--
ALTER TABLE `setting_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `setting_permission`
--
ALTER TABLE `setting_permission`
  MODIFY `id_permission` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `setting_position`
--
ALTER TABLE `setting_position`
  MODIFY `id_position` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `setting_state`
--
ALTER TABLE `setting_state`
  MODIFY `id_state` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `setting_town`
--
ALTER TABLE `setting_town`
  MODIFY `id_town` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `setting_type_log`
--
ALTER TABLE `setting_type_log`
  MODIFY `id_type_log` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `setting_type_person`
--
ALTER TABLE `setting_type_person`
  MODIFY `id_type_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `setting_type_rol`
--
ALTER TABLE `setting_type_rol`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `transact_activity_log`
--
ALTER TABLE `transact_activity_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `transact_client`
--
ALTER TABLE `transact_client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `transact_employee`
--
ALTER TABLE `transact_employee`
  MODIFY `id_employee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `transact_person`
--
ALTER TABLE `transact_person`
  MODIFY `id_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `transact_user`
--
ALTER TABLE `transact_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
