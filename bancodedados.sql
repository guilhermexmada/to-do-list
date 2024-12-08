-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.32-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.7.0.6850
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para todolist
CREATE DATABASE IF NOT EXISTS `todolist` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `todolist`;

-- Copiando estrutura para tabela todolist.avisos
CREATE TABLE IF NOT EXISTS `avisos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpf_avisado` varchar(11) DEFAULT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `corpo` varchar(250) DEFAULT NULL,
  `data_envio` date DEFAULT NULL,
  `hora_envio` time DEFAULT NULL,
  `visto` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cpf_avisado` (`cpf_avisado`),
  CONSTRAINT `fk_cpf_avisado` FOREIGN KEY (`cpf_avisado`) REFERENCES `equipe` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela todolist.equipe
CREATE TABLE IF NOT EXISTS `equipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) DEFAULT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `turno` varchar(250) DEFAULT NULL,
  `funcao` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela todolist.tarefas
CREATE TABLE IF NOT EXISTS `tarefas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpf_encarregado` varchar(11) DEFAULT NULL,
  `prioridade` int(11) DEFAULT NULL,
  `nome_tarefa` varchar(250) DEFAULT NULL,
  `descricao_tarefa` varchar(250) DEFAULT NULL,
  `data_inicial` date DEFAULT NULL,
  `hora_inicial` time DEFAULT NULL,
  `data_final` date DEFAULT NULL,
  `hora_final` time DEFAULT NULL,
  `status_tarefa` int(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `fk_cpf_encarregado` (`cpf_encarregado`),
  CONSTRAINT `fk_cpf_encarregado` FOREIGN KEY (`cpf_encarregado`) REFERENCES `equipe` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
