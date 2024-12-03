-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.32-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para evently
CREATE DATABASE IF NOT EXISTS `evently` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `evently`;

-- Copiando estrutura para tabela evently.tb_administrador
CREATE TABLE IF NOT EXISTS `tb_administrador` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_administrador` varchar(50) NOT NULL,
  `funcao_administrador` varchar(50) NOT NULL,
  `dt_nascimento` varchar(50) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `rg` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `perfil` int(1) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela evently.tb_administrador: ~2 rows (aproximadamente)
INSERT INTO `tb_administrador` (`id_usuario`, `nome_administrador`, `funcao_administrador`, `dt_nascimento`, `sexo`, `rg`, `cpf`, `email`, `telefone`, `cep`, `estado`, `cidade`, `endereco`, `bairro`, `complemento`, `perfil`, `status`) VALUES
	(1, 'Jorge Leonardo', 'CEO', '1986-11-07', 'M', '000000000', '111111111111', 'jorge.leonardo@gmail.com', '(21)0000-1111', '21100-700', 'RJ', 'Rio de Janeiro', 'Rua 1', '', 'Casa 35', 1, '1'),
	(2, 'Luis de Castro da Silva', 'Líder Geral', '1970-01-01', 'F', '614.240.122-1', '614.240.122-10', 'luisc@hotmail.com', '(21)325-6489', '21500-600', 'RJ', 'Rio de Janeiro', 'Rua B', 'Mato Alto', 'Casa Sobrado n°2', 0, '1');

-- Copiando estrutura para tabela evently.tb_assinatura
CREATE TABLE IF NOT EXISTS `tb_assinatura` (
  `id_assinatura` int(10) NOT NULL AUTO_INCREMENT,
  `cod_igreja` int(10) NOT NULL,
  `valor` varchar(10) NOT NULL,
  `dt_vencimento` varchar(50) NOT NULL,
  `metodo_pagto` int(5) DEFAULT NULL,
  `pagto` int(3) NOT NULL,
  PRIMARY KEY (`id_assinatura`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela evently.tb_assinatura: ~13 rows (aproximadamente)
INSERT INTO `tb_assinatura` (`id_assinatura`, `cod_igreja`, `valor`, `dt_vencimento`, `metodo_pagto`, `pagto`) VALUES
	(1, 1201, '14.99', '2024-10-18', 1, 1),
	(2, 1201, '14.99', '2024-09-20', 1, 1),
	(3, 1201, '14.99', '2024-08-20', 1, 1),
	(4, 1201, '14.99', '2024-07-20', 3, 1),
	(7, 263, '14.99', '2024-11-04', 3, 1),
	(11, 390, '14.99', '2024-11-09', 2, 1),
	(12, 1009, '14.99', '2024-11-09', 1, 1),
	(13, 1268, '14.99', '2024-11-11', 2, 1),
	(15, 1201, '14.99', '2024-11-18', NULL, 0),
	(16, 770, '14.99', '2024-12-05', NULL, 1),
	(17, 950, '14.99', '2024-12-03', NULL, 1),
	(18, 155, '14.99', '2024-12-03', NULL, 1),
	(19, 256, '14.99', '2024-12-03', NULL, 1);

-- Copiando estrutura para tabela evently.tb_disponibilidade
CREATE TABLE IF NOT EXISTS `tb_disponibilidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_evento` int(5) NOT NULL,
  `id_membro` int(5) NOT NULL,
  `disponibilidade` int(5) NOT NULL,
  `cod_igreja` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela evently.tb_disponibilidade: ~126 rows (aproximadamente)
INSERT INTO `tb_disponibilidade` (`id`, `id_evento`, `id_membro`, `disponibilidade`, `cod_igreja`) VALUES
	(1, 8, 1, 0, 1201),
	(2, 8, 2, 0, 1201),
	(3, 8, 4, 0, 1201),
	(4, 8, 5, 0, 1201),
	(5, 8, 6, 1, 1201),
	(6, 8, 7, 0, 1201),
	(7, 8, 8, 1, 1201),
	(8, 8, 88, 0, 1201),
	(9, 3, 1, 0, 1201),
	(10, 3, 2, 0, 1201),
	(11, 3, 4, 0, 1201),
	(12, 3, 5, 0, 1201),
	(13, 3, 6, 0, 1201),
	(14, 3, 7, 0, 1201),
	(15, 3, 8, 1, 1201),
	(16, 3, 88, 1, 1201),
	(17, 6, 1, 0, 1201),
	(18, 6, 2, 0, 1201),
	(19, 6, 4, 1, 1201),
	(20, 6, 5, 0, 1201),
	(21, 6, 6, 0, 1201),
	(22, 6, 7, 0, 1201),
	(23, 6, 8, 0, 1201),
	(24, 6, 88, 1, 1201),
	(25, 10, 4, 1, 1201),
	(26, 10, 7, 1, 1201),
	(28, 10, 5, 1, 1201),
	(30, 10, 8, 1, 1201),
	(31, 10, 1, 0, 1201),
	(32, 10, 2, 0, 1201),
	(34, 10, 6, 0, 1201),
	(37, 12, 1, 0, 1201),
	(38, 12, 2, 0, 1201),
	(39, 12, 4, 1, 1201),
	(40, 12, 5, 0, 1201),
	(41, 12, 6, 0, 1201),
	(42, 12, 7, 1, 1201),
	(43, 12, 8, 1, 1201),
	(44, 15, 1, 0, 1201),
	(45, 15, 2, 0, 1201),
	(46, 15, 4, 1, 1201),
	(47, 15, 5, 1, 1201),
	(48, 15, 6, 0, 1201),
	(49, 15, 7, 1, 1201),
	(50, 15, 8, 1, 1201),
	(51, 16, 1, 1, 1201),
	(52, 16, 2, 1, 1201),
	(53, 16, 4, 1, 1201),
	(54, 16, 5, 0, 1201),
	(55, 16, 6, 0, 1201),
	(56, 16, 7, 0, 1201),
	(57, 16, 8, 0, 1201),
	(58, 17, 1, 0, 1201),
	(59, 17, 2, 0, 1201),
	(60, 17, 4, 1, 1201),
	(61, 17, 5, 0, 1201),
	(62, 17, 6, 1, 1201),
	(63, 17, 7, 1, 1201),
	(64, 17, 8, 1, 1201),
	(65, 19, 1, 0, 1201),
	(66, 19, 2, 0, 1201),
	(67, 19, 4, 1, 1201),
	(68, 19, 5, 0, 1201),
	(69, 19, 6, 1, 1201),
	(70, 19, 7, 1, 1201),
	(71, 19, 8, 1, 1201),
	(72, 20, 0, 0, 1201),
	(73, 20, 1, 0, 1201),
	(74, 20, 2, 0, 1201),
	(75, 20, 4, 1, 1201),
	(76, 20, 5, 0, 1201),
	(77, 20, 6, 1, 1201),
	(78, 20, 7, 1, 1201),
	(79, 20, 8, 1, 1201),
	(80, 20, 18, 1, 1201),
	(81, 21, 0, 0, 1201),
	(82, 21, 1, 0, 1201),
	(83, 21, 2, 0, 1201),
	(84, 21, 4, 1, 1201),
	(85, 21, 5, 0, 1201),
	(86, 21, 6, 1, 1201),
	(87, 21, 7, 1, 1201),
	(88, 21, 8, 1, 1201),
	(89, 21, 18, 1, 1201),
	(151, 24, 21, 1, 770),
	(152, 24, 22, 0, 770),
	(153, 24, 24, 0, 770),
	(154, 24, 25, 1, 770),
	(155, 24, 26, 0, 770),
	(156, 25, 21, 0, 770),
	(157, 25, 22, 0, 770),
	(158, 25, 24, 1, 770),
	(159, 25, 25, 1, 770),
	(160, 25, 26, 0, 770),
	(169, 26, 35, 0, 256),
	(170, 26, 37, 1, 256),
	(171, 26, 38, 0, 256),
	(172, 26, 40, 0, 256),
	(173, 27, 1, 0, 1201),
	(174, 27, 2, 1, 1201),
	(175, 27, 4, 1, 1201),
	(176, 27, 5, 0, 1201),
	(177, 27, 6, 0, 1201),
	(178, 27, 7, 0, 1201),
	(179, 27, 8, 1, 1201),
	(180, 27, 18, 0, 1201),
	(181, 28, 1, 1, 1201),
	(182, 28, 2, 1, 1201),
	(183, 28, 4, 0, 1201),
	(184, 28, 5, 0, 1201),
	(185, 28, 6, 1, 1201),
	(186, 28, 7, 0, 1201),
	(187, 28, 8, 0, 1201),
	(188, 28, 18, 1, 1201),
	(189, 29, 1, 1, 1201),
	(190, 29, 2, 0, 1201),
	(191, 29, 4, 0, 1201),
	(192, 29, 5, 1, 1201),
	(193, 29, 6, 0, 1201),
	(194, 29, 7, 0, 1201),
	(195, 29, 8, 1, 1201),
	(196, 29, 18, 0, 1201),
	(197, 12, 18, 1, 1201),
	(198, 12, 18, 1, 1201),
	(199, 12, 18, 1, 1201),
	(200, 12, 18, 1, 1201);

-- Copiando estrutura para tabela evently.tb_equipamento
CREATE TABLE IF NOT EXISTS `tb_equipamento` (
  `id_equipamento` int(5) NOT NULL AUTO_INCREMENT,
  `cod_igreja` int(5) NOT NULL,
  `descricao_equipamento` varchar(50) NOT NULL,
  PRIMARY KEY (`id_equipamento`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela evently.tb_equipamento: ~16 rows (aproximadamente)
INSERT INTO `tb_equipamento` (`id_equipamento`, `cod_igreja`, `descricao_equipamento`) VALUES
	(1, 1201, 'Caixas Acústicas Som Top 12 Passiva'),
	(2, 1201, 'Projetor Epson Powerlite E20 3LCD, XGA, 3.400'),
	(3, 1201, 'Microfones Sem Fio Leson Ls902 Digital Plus Duplo '),
	(4, 1201, 'Amplificador Profissional 1000wrms 4ohms Ba1000'),
	(5, 1201, 'Pedestal Sinalização Isolamento'),
	(7, 1201, 'Kit Trilho Eletrificado 4m Preto + 10 Spots Led 10'),
	(8, 1201, 'FoMaKo-Câmera NDI PTZ, Pacote 30X, HDMI 3G-SDI'),
	(9, 1201, 'Cones de sinalização'),
	(13, 770, 'microfone'),
	(14, 770, 'caixa de som'),
	(15, 770, 'projetor'),
	(16, 256, 'Microfone'),
	(17, 256, 'Caixa de Som'),
	(18, 256, 'Projetor'),
	(19, 256, 'Cone'),
	(21, 256, 'canhão refletor');

-- Copiando estrutura para tabela evently.tb_escala
CREATE TABLE IF NOT EXISTS `tb_escala` (
  `id_escala` int(5) NOT NULL AUTO_INCREMENT,
  `cod_igreja` int(5) DEFAULT NULL,
  `id_evento` int(5) DEFAULT NULL,
  `token` varchar(30) NOT NULL,
  `id_funcao` int(5) DEFAULT NULL,
  `id_membro` int(5) DEFAULT NULL,
  `func_hab` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_escala`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela evently.tb_escala: ~56 rows (aproximadamente)
INSERT INTO `tb_escala` (`id_escala`, `cod_igreja`, `id_evento`, `token`, `id_funcao`, `id_membro`, `func_hab`) VALUES
	(2, 1201, 3, '', 6, 4, 1),
	(3, 1201, 3, '', 7, 2, 1),
	(4, 1201, 3, '', 8, 1, 1),
	(5, 1201, 3, '', 9, 7, 1),
	(6, 1201, 3, '', 10, 6, 1),
	(7, 1201, 3, '', 11, 5, 1),
	(14, 1201, 6, '', 6, 1, 1),
	(15, 1201, 6, '', 7, 5, 1),
	(16, 1201, 6, '', 8, 6, 1),
	(17, 1201, 6, '', 9, 2, 1),
	(18, 1201, 6, '', 10, 7, 1),
	(19, 1201, 6, '', 11, 8, 1),
	(20, 1201, 8, '', 6, 4, 1),
	(21, 1201, 8, '', 7, 2, 1),
	(22, 1201, 8, '', 8, 1, 1),
	(23, 1201, 8, '', 9, 7, 1),
	(24, 1201, 8, '', 10, 88, 1),
	(25, 1201, 8, '', 11, 5, 1),
	(32, 1201, 10, '', 6, 2, 1),
	(33, 1201, 10, '', 7, 1, 1),
	(36, 1201, 10, '', 10, 6, 1),
	(60, 1201, 12, 'ahy9snxr2bkosud4e8vkfkdv0', 6, 2, 1),
	(61, 1201, 12, 'ahy9snxr2bkosud4e8vkfkdv0', 7, 6, 1),
	(62, 1201, 12, 'ahy9snxr2bkosud4e8vkfkdv0', 9, 1, 1),
	(63, 1201, 12, 'ahy9snxr2bkosud4e8vkfkdv0', 11, 5, 1),
	(119, 770, 24, '26anwwnr52ecmvyt66xr663ue', 41, 26, 1),
	(120, 770, 24, '26anwwnr52ecmvyt66xr663ue', 42, 24, 1),
	(121, 770, 24, '26anwwnr52ecmvyt66xr663ue', 43, 22, 1),
	(122, 770, NULL, '', NULL, 24, NULL),
	(124, 770, NULL, '', NULL, 22, NULL),
	(125, 770, NULL, '', NULL, 21, NULL),
	(126, 770, 25, '6ai5qs21g02f1g4atbxr1179a', 41, 22, 1),
	(127, 770, 25, '6ai5qs21g02f1g4atbxr1179a', 42, 26, 1),
	(128, 770, 25, '6ai5qs21g02f1g4atbxr1179a', 43, 21, 1),
	(129, 256, NULL, '', NULL, 40, NULL),
	(130, 256, NULL, '', NULL, 35, NULL),
	(131, 256, NULL, '', NULL, 37, NULL),
	(132, 256, NULL, '', NULL, 38, NULL),
	(133, 256, 26, '2ziudnx8wczdgnwgw1tc2d5e6', 44, 40, 1),
	(134, 256, 26, '2ziudnx8wczdgnwgw1tc2d5e6', 45, 38, 1),
	(135, 256, 26, '2ziudnx8wczdgnwgw1tc2d5e6', 46, 35, 1),
	(136, 1201, NULL, '', NULL, 43, NULL),
	(137, 1201, 27, '59lo1y5tx3amie5s8b0hc7wk0', 7, 1, 1),
	(138, 1201, 27, '59lo1y5tx3amie5s8b0hc7wk0', 8, 6, 1),
	(139, 1201, 27, '59lo1y5tx3amie5s8b0hc7wk0', 9, 7, 1),
	(140, 1201, 27, '59lo1y5tx3amie5s8b0hc7wk0', 10, 18, 1),
	(141, 1201, 27, '59lo1y5tx3amie5s8b0hc7wk0', 11, 5, 1),
	(142, 1201, 28, 'liory5t069b0blqp04vec55mg', 6, 8, 1),
	(143, 1201, 28, 'liory5t069b0blqp04vec55mg', 7, 7, 1),
	(144, 1201, 28, 'liory5t069b0blqp04vec55mg', 10, 4, 1),
	(145, 1201, 28, 'liory5t069b0blqp04vec55mg', 11, 5, 1),
	(146, 1201, 29, 'ssfqphom50e0intlng5brxbkt', 6, 2, 1),
	(147, 1201, 29, 'ssfqphom50e0intlng5brxbkt', 7, 6, 1),
	(148, 1201, 29, 'ssfqphom50e0intlng5brxbkt', 8, 7, 1),
	(149, 1201, 29, 'ssfqphom50e0intlng5brxbkt', 9, 18, 1),
	(150, 1201, 29, 'ssfqphom50e0intlng5brxbkt', 10, 4, 1);

-- Copiando estrutura para tabela evently.tb_evento
CREATE TABLE IF NOT EXISTS `tb_evento` (
  `id_evento` int(5) NOT NULL AUTO_INCREMENT,
  `token` varchar(30) NOT NULL,
  `cod_igreja` int(5) DEFAULT NULL,
  `nome_evento` varchar(70) DEFAULT NULL,
  `descricao_evento` varchar(250) DEFAULT NULL,
  `imagem` varchar(250) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_fim` time DEFAULT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_evento`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela evently.tb_evento: ~11 rows (aproximadamente)
INSERT INTO `tb_evento` (`id_evento`, `token`, `cod_igreja`, `nome_evento`, `descricao_evento`, `imagem`, `data`, `hora_inicio`, `hora_fim`, `status`) VALUES
	(3, '', 1201, '3 Dias de explosão Profético', '3 Dias de explosão Profético', 'b028a0c22a753321b52d9cb9f768ddee..jpg', '2024-04-26', '18:00:00', '22:00:00', 1),
	(6, '', 1201, 'AMIGOS COM AMIGOS', 'CULTUANDO O SENHOR', 'b1f25be27579879843dcd3292f60dbfd..jpg', '2024-10-19', '19:30:00', '22:00:00', 1),
	(8, '', 1201, 'Caminhada de Paz e Luz', 'Caminhada de Paz e Luz', 'caminhada-fe.jpg', '2024-10-24', '17:00:00', '21:00:00', 0),
	(10, '', 1201, '1º Congresso de Jovens', 'Ministério Jovem Aliança Eterna', '1cf9a09fdc8cdc29518e52247b9b5469..jpg', '2024-12-11', '16:00:00', '20:00:00', 1),
	(12, 'ahy9snxr2bkosud4e8vkfkdv0', 1201, 'TEENS E FAMÍLIA', 'NO TEMPO E LAUZANE', '6a34c913f7921eb59b46a7676275a5f4..jpeg', '2024-01-15', '18:00:00', '22:00:00', 1),
	(24, '26anwwnr52ecmvyt66xr663ue', 770, 'EVENTO TESTE 001', 'EVENTO TESTE 001', 'user.jpg', '2024-12-07', '18:00:00', '19:00:00', 1),
	(25, '6ai5qs21g02f1g4atbxr1179a', 770, 'EVENTO TESTE 002', 'EVENTO TESTE 002', 'user.jpg', '2024-12-24', '17:00:00', '20:00:00', 1),
	(26, '2ziudnx8wczdgnwgw1tc2d5e6', 256, 'CONFRATERNIZAÇÃO ENTRE OS MEMBROS DA IGREJA', 'CONFRATERNIZAÇÃO ENTRE OS MEMBROS DA IGREJA', '6f5333e49147db22b6fcdf4558292afe..jpg', '2024-12-23', '17:00:00', '22:00:00', 1),
	(27, '59lo1y5tx3amie5s8b0hc7wk0', 1201, 'Celebra 2024', 'Cariocão desbranvando o RIo', 'a8696b5db124fd5e083ccea1e024e60f..jpg', '2024-12-14', '15:00:00', '22:00:00', 1),
	(28, 'liory5t069b0blqp04vec55mg', 1201, 'RETIRO DE CRIANÇAS', 'RETIRO DE CRIANÇAS', '46b8303cf03c50f83d998e992282c864..jpeg', '2024-12-07', '08:00:00', '20:00:00', 1),
	(29, 'ssfqphom50e0intlng5brxbkt', 1201, 'Projeto Natal Missionário', 'Projeto Natal Missionário', 'abdb1361f3700e5e6d22f0c70a98245f..jpg', '2024-12-23', '18:00:00', '19:00:00', 1);

-- Copiando estrutura para tabela evently.tb_funcao
CREATE TABLE IF NOT EXISTS `tb_funcao` (
  `id_funcao` int(10) NOT NULL AUTO_INCREMENT,
  `cod_igreja` int(10) NOT NULL,
  `descricao_funcao` varchar(30) NOT NULL,
  `cor_funcao` varchar(20) NOT NULL,
  `id_equipamento` int(10) NOT NULL,
  PRIMARY KEY (`id_funcao`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela evently.tb_funcao: ~13 rows (aproximadamente)
INSERT INTO `tb_funcao` (`id_funcao`, `cod_igreja`, `descricao_funcao`, `cor_funcao`, `id_equipamento`) VALUES
	(6, 1201, 'FOTO/FILMAGEM', '#e01a1a', 0),
	(7, 1201, 'SOM / ÁUDIO', '#e3c60d', 4),
	(8, 1201, 'PROJEÇÃO', '#072f7d', 2),
	(9, 1201, 'TRANSMISSÃO', '#6d0ae6', 8),
	(10, 1201, 'ILUMINAÇÃO', '#107c0e', 7),
	(11, 1201, 'FLUXO DE PESSOAS', '#ba36b5', 5),
	(40, 1201, 'FISCAL DO ESTACIONAMENTO', '#127582', 9),
	(41, 770, 'AAA', '#000000', 13),
	(42, 770, 'BBB', '#000000', 14),
	(43, 770, 'CCCC', '#000000', 15),
	(44, 256, 'Iluminação', '#cc33a3', 21),
	(45, 256, 'projeção', '#2d7b72', 16),
	(46, 256, 'áudio /som', '#6242ff', 17);

-- Copiando estrutura para tabela evently.tb_habilitacao
CREATE TABLE IF NOT EXISTS `tb_habilitacao` (
  `id_habilitacao` int(5) NOT NULL AUTO_INCREMENT,
  `id_membro` int(5) NOT NULL,
  `id_funcao` int(5) NOT NULL,
  `habilitacao` varchar(3) NOT NULL,
  PRIMARY KEY (`id_habilitacao`)
) ENGINE=InnoDB AUTO_INCREMENT=252 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela evently.tb_habilitacao: ~200 rows (aproximadamente)
INSERT INTO `tb_habilitacao` (`id_habilitacao`, `id_membro`, `id_funcao`, `habilitacao`) VALUES
	(7, 2, 6, '1'),
	(8, 2, 7, '1'),
	(9, 2, 9, '1'),
	(10, 1, 7, '1'),
	(11, 1, 8, '1'),
	(12, 1, 9, '1'),
	(13, 1, 10, '1'),
	(20, 6, 7, '1'),
	(21, 6, 8, '1'),
	(22, 6, 10, '1'),
	(23, 6, 11, '1'),
	(24, 7, 7, '1'),
	(25, 7, 8, '1'),
	(26, 7, 9, '1'),
	(27, 7, 10, '1'),
	(35, 1, 6, '0'),
	(36, 1, 11, '0'),
	(37, 2, 8, '0'),
	(38, 2, 10, '0'),
	(39, 2, 11, '0'),
	(40, 6, 6, '0'),
	(41, 6, 9, '0'),
	(42, 8, 6, '1'),
	(43, 8, 7, '0'),
	(44, 8, 8, '1'),
	(45, 8, 9, '1'),
	(46, 8, 10, '0'),
	(47, 8, 11, '0'),
	(51, 88, 6, '0'),
	(52, 88, 7, '0'),
	(53, 88, 8, '1'),
	(54, 88, 9, '1'),
	(55, 88, 10, '1'),
	(56, 88, 11, '0'),
	(69, 4, 6, '1'),
	(70, 4, 7, '1'),
	(71, 4, 8, '0'),
	(72, 4, 9, '0'),
	(73, 4, 10, '1'),
	(74, 4, 11, '0'),
	(75, 1, 0, '0'),
	(76, 2, 0, '0'),
	(77, 4, 0, '0'),
	(79, 6, 0, '0'),
	(80, 7, 0, '0'),
	(81, 8, 0, '0'),
	(82, 8, 0, '0'),
	(90, 1, 40, '0'),
	(91, 2, 40, '0'),
	(92, 4, 40, '0'),
	(94, 6, 40, '0'),
	(95, 7, 40, '0'),
	(96, 8, 40, '0'),
	(97, 18, 6, '1'),
	(98, 18, 7, '0'),
	(99, 18, 8, '1'),
	(100, 18, 9, '1'),
	(101, 18, 10, '1'),
	(102, 18, 11, '0'),
	(103, 18, 40, '0'),
	(104, 5, 6, '0'),
	(105, 5, 7, '0'),
	(106, 5, 8, '0'),
	(107, 5, 9, '0'),
	(108, 5, 10, '1'),
	(109, 5, 11, '1'),
	(110, 5, 40, '1'),
	(111, 0, 41, '0'),
	(112, 1, 41, '0'),
	(113, 2, 41, '0'),
	(114, 4, 41, '0'),
	(115, 5, 41, '0'),
	(116, 6, 41, '0'),
	(117, 7, 41, '0'),
	(118, 8, 41, '0'),
	(119, 18, 41, '0'),
	(120, 0, 42, '0'),
	(121, 1, 42, '0'),
	(122, 2, 42, '0'),
	(123, 4, 42, '0'),
	(124, 5, 42, '0'),
	(125, 6, 42, '0'),
	(126, 7, 42, '0'),
	(127, 8, 42, '0'),
	(128, 18, 42, '0'),
	(129, 0, 43, '0'),
	(130, 1, 43, '0'),
	(131, 2, 43, '0'),
	(132, 4, 43, '0'),
	(133, 5, 43, '0'),
	(134, 6, 43, '0'),
	(135, 7, 43, '0'),
	(136, 8, 43, '0'),
	(137, 18, 43, '0'),
	(138, 26, 6, '0'),
	(139, 26, 7, '0'),
	(140, 26, 8, '0'),
	(141, 26, 9, '0'),
	(142, 26, 10, '0'),
	(143, 26, 11, '0'),
	(144, 26, 40, '0'),
	(145, 26, 41, '1'),
	(146, 26, 42, '1'),
	(147, 26, 43, '1'),
	(148, 25, 6, '0'),
	(149, 25, 7, '0'),
	(150, 25, 8, '0'),
	(151, 25, 9, '0'),
	(152, 25, 10, '0'),
	(153, 25, 11, '0'),
	(154, 25, 40, '0'),
	(155, 25, 41, '0'),
	(156, 25, 42, '1'),
	(157, 25, 43, '1'),
	(158, 21, 6, '0'),
	(159, 21, 7, '0'),
	(160, 21, 8, '0'),
	(161, 21, 9, '0'),
	(162, 21, 10, '0'),
	(163, 21, 11, '0'),
	(164, 21, 40, '0'),
	(165, 21, 41, '0'),
	(166, 21, 42, '0'),
	(167, 21, 43, '1'),
	(168, 24, 6, '0'),
	(169, 24, 7, '0'),
	(170, 24, 8, '0'),
	(171, 24, 9, '0'),
	(172, 24, 10, '0'),
	(173, 24, 11, '0'),
	(174, 24, 40, '0'),
	(175, 24, 41, '1'),
	(176, 24, 42, '1'),
	(177, 24, 43, '0'),
	(178, 22, 6, '0'),
	(179, 22, 7, '0'),
	(180, 22, 8, '0'),
	(181, 22, 9, '0'),
	(182, 22, 10, '0'),
	(183, 22, 11, '0'),
	(184, 22, 40, '0'),
	(186, 22, 42, '0'),
	(187, 22, 43, '0'),
	(188, 22, 41, '1'),
	(189, 22, 42, '1'),
	(190, 22, 43, '1'),
	(191, 0, 44, '0'),
	(192, 1, 44, '0'),
	(193, 2, 44, '0'),
	(194, 4, 44, '0'),
	(195, 5, 44, '0'),
	(196, 6, 44, '0'),
	(197, 7, 44, '0'),
	(198, 8, 44, '0'),
	(199, 18, 44, '0'),
	(200, 21, 44, '0'),
	(201, 22, 44, '0'),
	(202, 24, 44, '0'),
	(203, 25, 44, '0'),
	(204, 26, 44, '0'),
	(205, 0, 45, '0'),
	(206, 1, 45, '0'),
	(207, 2, 45, '0'),
	(208, 4, 45, '0'),
	(209, 5, 45, '0'),
	(210, 6, 45, '0'),
	(211, 7, 45, '0'),
	(212, 8, 45, '0'),
	(213, 18, 45, '0'),
	(214, 21, 45, '0'),
	(215, 22, 45, '0'),
	(216, 24, 45, '0'),
	(217, 25, 45, '0'),
	(218, 26, 45, '0'),
	(219, 0, 46, '0'),
	(220, 1, 46, '0'),
	(221, 2, 46, '0'),
	(222, 4, 46, '0'),
	(223, 5, 46, '0'),
	(224, 6, 46, '0'),
	(225, 7, 46, '0'),
	(226, 8, 46, '0'),
	(227, 18, 46, '0'),
	(228, 21, 46, '0'),
	(229, 22, 46, '0'),
	(230, 24, 46, '0'),
	(231, 25, 46, '0'),
	(232, 26, 46, '0'),
	(233, 40, 44, '1'),
	(234, 40, 45, '1'),
	(235, 40, 46, '1'),
	(236, 35, 44, '1'),
	(237, 35, 45, '0'),
	(238, 35, 46, '1'),
	(239, 37, 44, '1'),
	(240, 37, 45, '1'),
	(241, 37, 46, '0'),
	(242, 38, 44, '0'),
	(243, 38, 45, '1'),
	(244, 38, 46, '1');

-- Copiando estrutura para tabela evently.tb_igreja
CREATE TABLE IF NOT EXISTS `tb_igreja` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cod_igreja` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `denominacao` varchar(50) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `hierarquia` varchar(50) NOT NULL,
  `capacidade` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `exp_licenca` varchar(50) DEFAULT NULL,
  `ativo` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Copiando dados para a tabela evently.tb_igreja: 6 rows
/*!40000 ALTER TABLE `tb_igreja` DISABLE KEYS */;
INSERT INTO `tb_igreja` (`id`, `cod_igreja`, `nome`, `imagem`, `denominacao`, `descricao`, `telefone`, `hierarquia`, `capacidade`, `cep`, `estado`, `cidade`, `endereco`, `complemento`, `exp_licenca`, `ativo`) VALUES
	(1, 1201, 'Cristo Rei Church', '4b645c7313cb3ba46614646fd3e55ce4..png', 'Evangélica', 'Cristo Rei resgatando vidas', '(21)0000-1111', '', '3000', '21100-568', 'RJ', 'Rio d Janeiro', '', 's/n', NULL, 1),
	(5, 263, 'Deus é Maior', '', 'Cristã', 'Recebemos todos de braços abertos!', '(21)5621-4483', '', '300', '', '', '', '', '', '2024-11-04', 1),
	(10, 390, 'Batista de Penedo', '', 'Batista', 'Igreja Evangélica Batista da renovação com fogo', '(22) 5698-1588', '', '860', '', '', '', '', '', '2024-11-09', 1),
	(11, 1009, 'Assembléia de Deus ', '', 'Assembléia ', 'Assembléia de Deus do Fogo Caindo', '(21) 90865-1032', '', '1200', '', '', '', '', '', '2024-11-09', 1),
	(12, 1268, 'Igreja Presbiteriana da Lua', '', 'Presbiteriana', 'Igreja Presbiteriana da Lua', '(21)1234-56789', '', '620', '', '', '', '', '', '2024-11-11', 1),
	(16, 256, 'Igreja Betania', '62e5b39ebcc1b323bf50ef67ea433b6b..png', 'Cristã', 'Igreja Betania Renovada', '(21)656-4679', '', '300', '21452-000', 'RJ', 'Cabo Frio', 'Rua do Patrelime', 'nº 456', '2024-12-03', 1);
/*!40000 ALTER TABLE `tb_igreja` ENABLE KEYS */;

-- Copiando estrutura para tabela evently.tb_membro
CREATE TABLE IF NOT EXISTS `tb_membro` (
  `id_usuario` int(11) NOT NULL,
  `id_membro` int(10) NOT NULL AUTO_INCREMENT,
  `foto` longtext DEFAULT NULL,
  `cod_igreja` int(11) NOT NULL,
  `nome_membro` varchar(50) NOT NULL,
  `funcao_membro` varchar(50) NOT NULL,
  `dt_nascimento` varchar(50) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `rg` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `voluntario` int(1) NOT NULL DEFAULT 0,
  `perfil` int(1) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id_membro`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela evently.tb_membro: ~35 rows (aproximadamente)
INSERT INTO `tb_membro` (`id_usuario`, `id_membro`, `foto`, `cod_igreja`, `nome_membro`, `funcao_membro`, `dt_nascimento`, `sexo`, `rg`, `cpf`, `email`, `telefone`, `cep`, `estado`, `cidade`, `endereco`, `bairro`, `complemento`, `voluntario`, `perfil`, `status`) VALUES
	(0, 0, '335305a3f7a0d59f37dfaa2f7e721225..jpg', 0, 'teste', '', '', 'teste', '000', '000', '', '', '', '', '', '', '', '', 1, 0, ''),
	(80, 1, 'd78580432cf70a8c89b90f30ade50edd..jpg', 1201, 'Higor França Muchão Prucho', 'Membro', '1987-01-10', 'M', '0000000000', '111111111111', 'higor.franca@gmail.com', '(21)1234-5678', '21400-101', 'RJ', 'Rio de Janeiro', 'Rua 2', 'Higienópolis', 'Sobrados', 1, 5, '1'),
	(81, 2, 'e74a7f500b652a4addcc1da189563268..png', 1201, 'Guilherme Varanda', 'Membro', '1990-01-01', 'M', '00000', '111111111', 'guilherme.v@gmail.com', '(21)2564-9940', '21556-201', 'RJ', 'Rio de Janeiro', 'Rua do Machado', '', 'Vila A Casa 1', 1, 5, '1'),
	(82, 3, 'user.jpg', 867, 'Diego Oliveira Carvalho', '1', '1971-11-07', '', '0', '111111', 'DiegoOliveiraCarvalho@armyspy.com', '', '213132132', 'RJ', 'Rio de Janeiro', 'teste 2', '', 'teste 2', 0, 0, '1'),
	(83, 4, '5d332091b3c6ee22731631103a589295..jpg', 1201, 'Rafaela Oliveira Castro', 'Membro', '1959-08-07', 'F', '0', '0', 'RafaelaOliveiraCastro@dayrep.com', '(48) 6681-7175', '88045-380', 'SC', 'Florianópolis', 'Rua João Florentino de Jesus, 1871', '', '', 1, 5, '1'),
	(84, 5, '22ecf1a3a57623e80110dd1d306b8171..jpg', 1201, 'Vitor Ferreira Carvalho', 'Membro', '1970-01-01', 'M', '80830875', '80830875', 'VitorFerreiraCarvalho@rhyta.com', '(11) 7317-2432', '80830875', 'RJ', 'São Paulo', 'Rua Cinira, 511', '', '', 1, 5, '1'),
	(85, 6, 'c81744f832424628d7f123d709a4ab38..jpeg', 1201, 'Ana Costa Souza', 'Membro', '1990-05-08', 'F', 'N 2920590133', 'N 2920590133', 'AnaCostaSouza@rhyta.com', ' (21)2012-4105', '21000-000', 'RJ', 'Rio de Janeiro', '', '', '', 1, 5, '1'),
	(86, 7, '39a9b60dec8ca797dbfd3f7db645b1cd..png', 1201, 'Martim Lima Costa', 'Membro', '1970-01-01', 'M', '4085725658', '4085725658', 'MartimLimaCosta@armyspy.com', '(43) 7059-2243', '86813-460', 'PR', 'Apucana', 'Rua Waldemir de Araújo Leite', '', '1716', 1, 5, '1'),
	(87, 8, '80e8a0186cebb1b80523a38151299b26..jpg', 1201, 'Kaua Pinto Cardoso', 'Membro', '2010-06-02', 'M', '4485 0636 6484 2097', '4485 0636 6484 2097', 'KauaPintoCardoso@dayrep.com', '(22) 3455-6395', '28055-512', 'RJ', 'Campos dos Goyacazes', 'Avenida São Fidélis, 1972', '', 'Casa 3', 1, 5, '1'),
	(598, 10, 'user.jpg', 263, 'Luciano Paivão de Lima', 'Pastor', '2001-02-01', 'M', '000.000.00-11', '000.000.00-22', 'luciano.paivao@gmail.com', '(21)5621-4483', '', '', '', '', '', '', 0, 2, '1'),
	(309, 12, 'user.jpg', 390, 'Jaime de Lima Correia', 'Pastor', '1976-08-05', 'M', '562.000.1234-50', '562.000.1234-50', 'jaimelima@gmail.com', '(22) 5698-1588', '', '', '', '', '', '', 0, 2, '1'),
	(946, 13, 'user.jpg', 1009, 'Ana Claúdia Duarte de Souza', 'Presbitera', '1985-11-10', 'F', '890.227.474-84', '890.227.474-84', 'anaclaudia@r7.com', '(21) 90865-1032', '', '', '', '', '', '', 0, 2, '1'),
	(166, 14, 'user.jpg', 1268, 'João Teves de Oliveira', 'Pastor', '2001-04-06', 'M', '145604007', '61424012210', 'joaoteves@gmail.com', '(21)1234-56789', '', '', '', '', '', '', 0, 2, '1'),
	(101, 15, '335305a3f7a0d59f37dfaa2f7e721225..jpg', 1201, 'Maria João da Silva', 'Membro', '2005-03-05', 'F', '00000000', '111111111', 'maria.joao.s@gmail.com', '(21)5642-1001', '21100-800', 'Rj', 'Nova Iguaçu', 'Rua Demetriios 11', '', ' Casa 311', 0, 3, '1'),
	(102, 17, '6123f5a9f56cea2e5370508499716b4c..jpg', 1201, 'Eduarda Vinhonete Pereira', 'Membro', '1970-01-01', 'F', '0000000', '1111111111', 'dudavinhonete@gmail.com', '(21)99810-5647', '21100-720', 'Rj', 'Rio de Janeiro', 'Rua Matias ', 'Centro', 'Casa 47', 0, 2, '1'),
	(172, 18, '241335c60d8e6a5c57865c61b28b07bb..jpg', 1201, 'Letícia Pires', 'Membro', '0200-05-03', 'F', '', '', 'leticiapires@gmail.com', '(21)8888-99999', '', 'RJ', 'Rio de Janeiro', 'Rua 565', 'Centro do RJ', 'Casa 10', 1, 2, '1'),
	(10, 19, '1f407d8cdaef7532d07158819f2ee520..jpg', 1201, 'Matheus Vilela', 'Membro', '2001-01-01', 'M', '00', '000000000000000000', 'matheuv@hotmail.com', '(21)0000-1111', '000000000000', 'Rj', 'Rio de Janeiro', 'Rua 1', '', 'Casa 5', 0, 3, '1'),
	(511, 20, '7165c51580fe0420b37dd5ac512c43ce..jpeg', 770, 'João Paulo Figueiredo', 'João de testes', '2000-01-01', 'M', '000.000.00-0', '111.111.111.99', 'joaopgique@outlook.com', '(00)0000-0000', '', '', '', '', '', '', 0, 2, '1'),
	(12, 21, 'user.jpg', 770, 'Maria', 'Secretária', '1222-02-01', 'F', '000000', '1111111111', 'maria@outlook.com', '(00)0000-0000', '22542-450', 'RJ', 'Rio de Janeiro', 'RUa 5', '', 's/n', 1, 2, '1'),
	(15, 22, 'user.jpg', 770, 'Pedro', '', '1970-01-01', '---------', '', '', '', '', '', '', '', '', '', '', 1, 2, '1'),
	(10, 23, 'user.jpg', 770, 'Joaquim', 'Membro', '1970-01-01', 'F', '', '', '', '', '', '', '', '', 'Centro', '', 0, 2, '1'),
	(13, 24, 'user.jpg', 770, 'Lurdes', '', '1970-01-01', 'F', '', '', 'lurdes@gmail.com', '', '', '', '', '', '', '', 1, 4, '1'),
	(8, 25, '34d8b1e51e0d455f0f5c60d291ec4cb6..jpg', 770, 'Jorge', '', '1970-01-01', '---------', '', '', '', '', '', '', '', '', '', '', 1, 2, '1'),
	(7, 26, 'user.jpg', 770, 'José', '', '1970-01-01', '---------', '', '', '', '', '', '', '', '', '', '', 1, 4, '1'),
	(10, 27, 'user.jpg', 770, 'aaaaaaaaaaaaaaa', '', '1970-01-01', '---------', '', '', '', '', '', '', '', '', '', '', 0, 2, '1'),
	(244, 30, NULL, 950, 'Eduardo de Lima Farias', 'Pastor', '1980-04-05', 'M', '456.123.789-0', '456.123.789-00', 'eduardolima@outlook.com', '(21)956-3145', '', '', '', '', '', '', 0, 2, '1'),
	(879, 31, NULL, 155, 'Eduardo de Lima Farias', 'Pastor', '1980-04-05', 'M', '456.123.789-0', '456.123.789-00', 'eduardolima@outlook.com', '(21)956-3145', '', '', '', '', '', '', 0, 2, '1'),
	(560, 32, 'be71160615245c5f38b5e8a8cda1436d..jpg', 256, 'Eduardo Pereira de Lima Silva', 'Pastor', '1980-05-04', 'F', '454.681.323-0', '465.657.989-10', 'eduardoplima@outlook.com', '(21)656-4679', ' 26455-250', 'RJ', 'Cabo Frio', 'Rua Jorge Lóssio', 'Braga', 'n° 502', 0, 5, '1'),
	(5, 34, 'user.jpg', 256, 'Marcos Cunha Costa', 'Membro', '1970-01-01', 'M', '545.454.554-5', '554.545.454-54', 'marcosc@gmail.com', '(21)456-4656', '21456-560', 'RJ', 'Piraí', 'Rua santos de lima', 'Cidade Alta', ' casa 5', 0, 5, '1'),
	(11, 35, 'user.jpg', 256, 'Arthur Ferreira Rocha', 'membro', '1970-01-01', 'F', '', '', 'arthur@gmail.com', '', '', '', '', '', '', '', 1, 4, '1'),
	(13, 36, 'user.jpg', 256, 'Victor Oliveira Pereira', 'Membro', '1970-01-01', 'F', '', '', 'vitoro@gmail.com', '', '', '', '', '', '', '', 0, 5, '1'),
	(15, 37, 'user.jpg', 256, 'Gabriela Castro Pereira', 'Membro', '1970-01-01', 'F', '', '', 'gabriela@gmail.com', '', '', '', '', '', '', '', 1, 4, '1'),
	(76, 38, '34d8b1e51e0d455f0f5c60d291ec4cb6..jpg', 256, 'Júlia Azevedo Rodrigues', 'Membro', '1970-01-01', 'F', '', '', 'julia@gmail.com', '', '', '', '', '', '', '', 1, 4, '1'),
	(8, 39, '34d8b1e51e0d455f0f5c60d291ec4cb6..jpg', 256, 'Luiza Cardoso Silva', 'Membro', '1970-01-01', 'F', '', '', 'luiza@gmail.com', '', '', '', '', '', '', '', 0, 6, '1'),
	(10, 40, 'user.jpg', 256, 'Alex Pinto Almeida', 'Membro', '1970-01-01', 'M', '', '', 'alex@gmail.com', '', '', '', '', '', '', '', 1, 4, '1');

-- Copiando estrutura para tabela evently.tb_membro_funcao
CREATE TABLE IF NOT EXISTS `tb_membro_funcao` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome_funcao` varchar(30) NOT NULL,
  `cod_igreja` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela evently.tb_membro_funcao: ~6 rows (aproximadamente)
INSERT INTO `tb_membro_funcao` (`id`, `nome_funcao`, `cod_igreja`) VALUES
	(1, 'Pastor', 1201),
	(2, 'Secretário(a)', 1201),
	(3, 'Membro', 1201),
	(4, 'Líder de Eventos', 1201),
	(5, 'Voluntário', 1201),
	(6, 'Responsável Geral', 1201);

-- Copiando estrutura para tabela evently.tb_perfil
CREATE TABLE IF NOT EXISTS `tb_perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela evently.tb_perfil: ~4 rows (aproximadamente)
INSERT INTO `tb_perfil` (`id`, `perfil`) VALUES
	(1, 'Administrador Geral'),
	(2, 'Secretário'),
	(4, 'Voluntário'),
	(5, 'Membro');

-- Copiando estrutura para tabela evently.tb_usuario
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `cod_igreja` int(10) NOT NULL,
  `nivel` int(11) NOT NULL,
  `ativo` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=161 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Copiando dados para a tabela evently.tb_usuario: 17 rows
/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;
INSERT INTO `tb_usuario` (`id`, `id_usuario`, `nome`, `email`, `senha`, `foto`, `cod_igreja`, `nivel`, `ativo`) VALUES
	(126, 5, 'Joaquim', 'joaquim@gmail.com', '123', '31c803614792a11991443fdaccc2df51..jpg', 1201, 4, 1),
	(127, 3, 'Pedro Henrique', 'pedroh@gmail.com', '123', 'a70f634c60e424613f1c59c83cd0ad24..jpg', 1201, 2, 1),
	(132, 80, 'Higor França Muchão Prucho', 'higor@outlook.com', '123', '31c803614792a11991443fdaccc2df51..jpg', 1201, 1, 1),
	(136, 85, 'Ana Costa', 'AnaCostaSouza@rhyta.com', '123', 'user-perfil.png', 1201, 4, 1),
	(139, 88, 'Jorge Leonardo', 'jorge.leonardo@gmail.com', '123', 'user-perfil.png', 0, 1, 1),
	(140, 86, 'Martim Lima Costa', 'MartimLimaCosta@armyspy.com', '123', 'user-perfil.png', 1201, 4, 1),
	(144, 598, 'Luciano Paivão de Lima', 'luciano.paivao@gmail.com', '123', 'user-perfil.png', 263, 2, 1),
	(148, 309, 'Jaime de Lima Correia', 'jaimelima@gmail.com', '123', 'user-perfil.png', 390, 2, 1),
	(149, 166, 'João Teves de Oliveira', 'joaoteves@gmail.com', '123', '295e8c62276e97f3ae0c9be8853af988..jpg', 1268, 2, 1),
	(151, 172, 'Letícia Pires', 'leticiapires@gmail.com', '123', '241335c60d8e6a5c57865c61b28b07bb..jpg', 1201, 2, 1),
	(152, 10, 'Matheus Vilela', 'matheuv@hotmail.com', '123', '', 1201, 3, 1),
	(153, 511, 'João Paulo Figueiredo', 'joaopgique@outlook.com', '123', '7165c51580fe0420b37dd5ac512c43ce..jpeg', 770, 2, 1),
	(154, 13, 'Lurdes', 'lurdes@gmail.com', '123', '', 770, 4, 1),
	(155, 244, 'Eduardo de Lima Farias', 'eduardolima@outlook.com', '123', '', 950, 2, 1),
	(156, 879, 'Eduardo de Lima Farias', 'eduardolima@outlook.com', '123', '', 155, 2, 1),
	(157, 560, 'Eduardo Pereira de Lima Silva', 'eduardoplima@outlook.com', '123', 'be71160615245c5f38b5e8a8cda1436d..jpg', 256, 2, 1),
	(159, 76, 'Júlia Azevedo Rodrigues', 'julia@gmail.com', '123', '', 256, 4, 1);
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;

-- Copiando estrutura para tabela evently.tb_voluntario
CREATE TABLE IF NOT EXISTS `tb_voluntario` (
  `id_voluntario` int(5) NOT NULL AUTO_INCREMENT,
  `id_membro` int(5) NOT NULL,
  `cod_igreja` int(5) NOT NULL,
  `nome_voluntario` varchar(40) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id_voluntario`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela evently.tb_voluntario: ~7 rows (aproximadamente)
INSERT INTO `tb_voluntario` (`id_voluntario`, `id_membro`, `cod_igreja`, `nome_voluntario`, `status`) VALUES
	(1, 2, 1201, 'Guilherme Varanda', 1),
	(6, 1, 1201, 'Higor França Muchão Prucho', 1),
	(7, 4, 1201, 'Rafaela Oliveira Castro', 1),
	(8, 6, 1201, 'Ana Costa Souza', 1),
	(9, 5, 1201, 'Vitor Ferreira Carvalho', 1),
	(10, 7, 1201, 'Martim Lima Costa', 1),
	(11, 8, 1201, 'Kaua Pinto Cardoso', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
