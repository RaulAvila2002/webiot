-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-11-2021 a las 21:30:34
-- Versión del servidor: 5.7.36-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.24-0ubuntu0.18.04.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admin_iotdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data`
--

CREATE TABLE `data` (
  `data_id` int(10) NOT NULL,
  `device_id` int(11) NOT NULL,
  `data_device_serie` varchar(30) NOT NULL,
  `data_topic` varchar(30) NOT NULL,
  `data_payload` varchar(400) NOT NULL,
  `data_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `data`
--

INSERT INTO `data` (`data_id`, `device_id`, `data_device_serie`, `data_topic`, `data_payload`, `data_date`) VALUES
(1, 5, '5CCF7F780F24', 'data', '{\"button/1\":2,\"relay/1\":1,\"time\":\"2020-09-06 14:44:33\",\"mac\":\"5C:CF:7F:78:0F:24\",\"host\":\"DemoIOT\",\"ip\":\"192.168.0.18\",\"id\":776}', '2020-09-06 14:44:34'),
(2, 5, '5CCF7F780F24', 'data', '{\"temperature\":25.31,\"time\":\"2020-09-06 14:50:57\",\"mac\":\"5C:CF:7F:78:0F:24\",\"host\":\"DemoIOT\",\"ip\":\"192.168.0.18\",\"id\":794}', '2020-09-06 14:50:58'),
(3, 5, '5CCF7F780F24', 'data', '{\"temperature\":25.31,\"time\":\"2020-09-06 14:51:27\",\"mac\":\"5C:CF:7F:78:0F:24\",\"host\":\"DemoIOT\",\"ip\":\"192.168.0.18\",\"id\":795}', '2020-09-06 14:51:28'),
(4, 5, '5CCF7F780F24', 'data', '{\"temperature\":25.31,\"time\":\"2020-09-06 14:51:58\",\"mac\":\"5C:CF:7F:78:0F:24\",\"host\":\"DemoIOT\",\"ip\":\"192.168.0.18\",\"id\":796}', '2020-09-06 14:51:58'),
(5, 5, '5CCF7F780F24', 'data', '{\"app\":\"DemoIOT\",\"version\":\"1.14.1-dev\",\"board\":\"WebIOT_Demo\",\"host\":\"DemoIOT\",\"ssid\":\"TeleCentro-82ba\",\"ip\":\"192.168.0.18\",\"mac\":\"5C:CF:7F:78:0F:24\",\"rssi\":-46,\"uptime\":20413,\"datetime\":\"2020-09-06 14:52:21\",\"freeheap\":18440,\"relay/0\":0,\"relay/1\":0,\"relay/2\":1,\"channel/0\":249,\"channel/1\":109,\"channel/2\":104,\"brightness\":249,\"vcc\":2596,\"loadavg\":1,\"time\":\"2020-09-06 14:52:21\",\"id\":797}', '2020-09-06 14:52:21'),
(6, 5, '5CCF7F780F24', 'data', '{\"temperature\":25.31,\"time\":\"2020-09-06 14:52:28\",\"mac\":\"5C:CF:7F:78:0F:24\",\"host\":\"DemoIOT\",\"ip\":\"192.168.0.18\",\"id\":798}', '2020-09-06 14:52:28'),
(7, 5, '5CCF7F780F24', 'data', '{\"temperature\":25.31,\"time\":\"2020-09-06 14:52:58\",\"mac\":\"5C:CF:7F:78:0F:24\",\"host\":\"DemoIOT\",\"ip\":\"192.168.0.18\",\"id\":799}', '2020-09-06 14:52:58'),
(8, 5, '5CCF7F780F24', 'data', '{\"temperature\":25.31,\"time\":\"2020-09-06 14:53:28\",\"mac\":\"5C:CF:7F:78:0F:24\",\"host\":\"DemoIOT\",\"ip\":\"192.168.0.18\",\"id\":800}', '2020-09-06 14:53:28'),
(9, 5, '5CCF7F780F24', 'data', '{\"temperature\":25.31,\"time\":\"2020-09-06 14:53:58\",\"mac\":\"5C:CF:7F:78:0F:24\",\"host\":\"DemoIOT\",\"ip\":\"192.168.0.18\",\"id\":801}', '2020-09-06 14:53:58'),
(10, 5, '5CCF7F780F24', 'data', '{\"temperature\":25.25,\"time\":\"2020-09-06 14:54:28\",\"mac\":\"5C:CF:7F:78:0F:24\",\"host\":\"DemoIOT\",\"ip\":\"192.168.0.18\",\"id\":802}', '2020-09-06 14:54:28'),
(11, 5, '5CCF7F780F24', 'data', '{\"temperature\":25.23,\"time\":\"2020-09-06 14:54:58\",\"mac\":\"5C:CF:7F:78:0F:24\",\"host\":\"DemoIOT\",\"ip\":\"192.168.0.18\",\"id\":803}', '2020-09-06 14:54:58'),
(12, 5, '5CCF7F780F24', 'data', '{\"temperature\":25.19,\"time\":\"2020-09-06 14:55:28\",\"mac\":\"5C:CF:7F:78:0F:24\",\"host\":\"DemoIOT\",\"ip\":\"192.168.0.18\",\"id\":804}', '2020-09-06 14:55:28'),
(13, 5, '5CCF7F780F24', 'data', '{\"temperature\":24.73,\"time\":\"2020-09-06 15:06:28\",\"mac\":\"5C:CF:7F:78:0F:24\",\"host\":\"DemoIOT\",\"ip\":\"192.168.0.18\",\"id\":828}', '2020-09-06 15:06:29'),
(14, 5, '5CCF7F780F24', 'data', '{\"temperature\":24.69,\"time\":\"2020-09-06 15:06:58\",\"mac\":\"5C:CF:7F:78:0F:24\",\"host\":\"DemoIOT\",\"ip\":\"192.168.0.18\",\"id\":829}', '2020-09-06 15:06:59'),
(15, 5, '5CCF7F780F24', 'data', '{\"button/1\":2,\"relay/1\":1,\"time\":\"2020-09-06 15:06:59\",\"mac\":\"5C:CF:7F:78:0F:24\",\"host\":\"DemoIOT\",\"ip\":\"192.168.0.18\",\"id\":830}', '2020-09-06 15:07:00'),
(16, 11, '807D3A6E7688', 'data', '{\"button/0\":2,\"relay/0\":1,\"mac\":\"80:7D:3A:6E:76:88\",\"host\":\"ESPURNA-6E7688\",\"ip\":\"192.168.0.44\",\"id\":74}', '2020-09-06 15:07:09'),
(17, 11, '807D3A6E7688', 'data', '{\"button/0\":2,\"relay/0\":0,\"mac\":\"80:7D:3A:6E:76:88\",\"host\":\"ESPURNA-6E7688\",\"ip\":\"192.168.0.44\",\"id\":75}', '2020-09-06 15:07:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devices`
--

CREATE TABLE `devices` (
  `device_id` int(10) NOT NULL,
  `device_nombre` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `device_serie` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `device_estado` int(11) NOT NULL,
  `device_user_id` int(11) NOT NULL,
  `device_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `device_proyecto` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `device_aplicacion` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `devices`
--

INSERT INTO `devices` (`device_id`, `device_nombre`, `device_serie`, `device_estado`, `device_user_id`, `device_date`, `device_proyecto`, `device_aplicacion`) VALUES
(1, 'TEMPERATURA', '84F3EBB73CE7', 1, 1, '2021-05-24 21:10:06', 'BASE', 'DEMO'),
(2, 'GENERADOR', '84F3EBB73CE0', 1, 1, '2021-05-24 21:09:57', 'BASE', 'DEMO'),
(3, 'REMOTO', '807D3A6E7688', 1, 1, '2021-02-16 16:30:40', 'BASE', 'DEMO'),
(4, 'ESTABILIZADOR', '5CCF7F780F24', 1, 4, '2021-05-23 17:12:33', 'ESTABILIZADORES', 'MUNDO GENERADOR'),
(5, 'NODO DEMO', '5CCF7F780F24', 1, 1, '2021-05-23 15:42:50', 'WEBOIT', 'WEBIOT'),
(6, 'DEMO GENERAC', '40F5203D9CB1', 1, 1, '2021-05-23 15:44:25', 'BASE', 'WEBIOT'),
(7, 'DEMO MG', 'Mundogenerador', 1, 5, '2021-05-23 17:12:27', 'GENERADORES', 'MUNDO GENERADOR'),
(8, 'DEMO IOT', '5CCF7F780F24', 0, 5, '2021-05-25 21:44:02', 'GENERADORES', 'MUNDO GENERADOR'),
(9, 'DEMO RAUL', '84F3EBB73CE', 0, 5, '2021-06-14 13:05:09', 'GENERADORES', 'MUNDO GENERADOR'),
(10, 'Grupo Paternal', '5CCF7F780F27', 1, 3, '2021-05-24 14:09:40', 'WEBIOT', ''),
(11, 'Equipo Prueba', 'GrupoPaternal', 1, 3, '2021-09-24 17:12:51', 'GENERADORES', 'MUNDO GENERADOR'),
(12, 'ESTABILIZADOR', '321654987', 0, 6, '2021-07-01 10:52:44', 'GENERADORES', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mqtt_acl`
--

CREATE TABLE `mqtt_acl` (
  `id` int(11) UNSIGNED NOT NULL,
  `allow` int(1) DEFAULT NULL COMMENT '0: deny, 1: allow',
  `ipaddr` varchar(60) DEFAULT NULL COMMENT 'IpAddress',
  `username` varchar(100) DEFAULT NULL COMMENT 'Username',
  `clientid` varchar(100) DEFAULT NULL COMMENT 'ClientId',
  `access` int(2) NOT NULL COMMENT '1: subscribe, 2: publish, 3: pubsub',
  `topic` varchar(100) NOT NULL DEFAULT '' COMMENT 'Topic Filter'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mqtt_user`
--

CREATE TABLE `mqtt_user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `salt` varchar(35) DEFAULT NULL,
  `is_superuser` int(1) DEFAULT '0',
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mqtt_user`
--

INSERT INTO `mqtt_user` (`id`, `username`, `password`, `salt`, `is_superuser`, `created`) VALUES
(1, 'demo', 'demopass', NULL, 0, '2020-07-24 17:25:00'),
(2, 'web', 'webpass', NULL, 0, '2020-07-01 00:00:00'),
(3, 'mgdevice', 'mgpass', NULL, 0, '2021-05-21 00:00:00'),
(4, 'generac', 'generac', NULL, 0, '2021-06-21 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `users_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_nombre` varchar(100) NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `user_estado` int(11) NOT NULL,
  `user_proyecto` varchar(30) NOT NULL,
  `user_tipo` varchar(30) NOT NULL,
  `user_aplicacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`user_id`, `users_date`, `user_nombre`, `user_email`, `user_password`, `user_estado`, `user_proyecto`, `user_tipo`, `user_aplicacion`) VALUES
(1, '2021-02-16 16:25:59', 'Admin', 'admin@mail.com', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 1, 'BASE', 'admin', 'DEMO'),
(2, '2021-05-22 10:24:14', 'User', 'user@mail.com', '12dea96fec20593566ab75692c9949596833adc9', 1, 'BASE', 'user', 'DEMO'),
(3, '2021-06-28 01:19:26', 'Raul Avila', 'r@ul', '8b52b6b714585648fd300da0dbc0fa0678553280', 1, 'WEBIOT', 'owner', 'WEBIOT'),
(4, '2021-10-31 01:36:17', 'Gerardo Avila', 'gerardomg', '7ea4912022463b0c1342562015f114768c41c1ec', 1, 'GENERADORES', 'user', 'MUNDO GENERADOR'),
(5, '2021-10-31 01:36:05', 'Walter MG', 'waltermg', 'f18f9d8baa2fa0cb58562a87b426733853e0a4e9', 1, 'GENERADORES', 'user', 'MUNDO GENERADOR'),
(6, '2021-05-24 20:47:16', 'admin', 'adminmg', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'GENERADORES', 'admin', 'MUNDO GENERADOR'),
(7, '2021-05-24 20:52:58', 'tecnico1', 'tecnico1mg', '2506a4f76ad8590b7c2d7e63e909a5052b9fd833', 1, 'GENERADORES', 'user', 'MUNDO GENERADOR'),
(8, '2021-05-24 20:50:01', 'tecnico2', 'tecnico2mg', 'ed08ee3b9acb79611a13c7a1ab4d548213dfdfad', 1, 'GENERADORES', 'user', 'MUNDO GENERADOR'),
(9, '2021-07-01 11:22:17', 'tecnico3', 'tecnico3mg', '0a8b8ec29f6dbe1c1718e1a499953f2519a61f71', 0, 'GENERADORES', 'guest', 'MUNDO GENERADOR'),
(10, '2021-07-01 10:54:36', 'Usuario Demo', 'usermg', '12dea96fec20593566ab75692c9949596833adc9', 1, 'GENERADORES', 'user', 'MUNDO GENERADOR'),
(11, '2021-07-01 10:59:33', 'Invitado', 'invitadomg', '0c0438a2d770051789cbafdd47fe25a9d7f74587', 1, 'GENERADORES', 'guest', ''),
(12, '2021-07-01 11:24:30', 'Invitado', 'invitadomg', '0c0438a2d770051789cbafdd47fe25a9d7f74587', 0, 'GENERADORES', 'guest', ''),
(13, '2021-10-13 11:18:56', 'Jorge Ollearo', 'jorge', '33f927344e079e00d3fa45d8833b04e735223eec', 1, 'ITALAVIA', 'user', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`data_id`);

--
-- Indices de la tabla `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`device_id`);

--
-- Indices de la tabla `mqtt_acl`
--
ALTER TABLE `mqtt_acl`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mqtt_user`
--
ALTER TABLE `mqtt_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mqtt_username` (`username`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `data`
--
ALTER TABLE `data`
  MODIFY `data_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `devices`
--
ALTER TABLE `devices`
  MODIFY `device_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `mqtt_acl`
--
ALTER TABLE `mqtt_acl`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mqtt_user`
--
ALTER TABLE `mqtt_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
