CREATE DATABASE IF NOT EXISTS `bd_proj_jovem` 
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bd_proj_jovem`;

CREATE TABLE `tb_login_usuario`(
	`id_cliente` INT NOT NULL AUTO_INCREMENT,
	`nm_cliente` VARCHAR(45) NOT NULL,
    `cpf_cliente` VARCHAR(11) NOT NULL,
    `email` VARCHAR(45) NOT NULL,
	`password_unique` VARCHAR(45) NOT NULL,
	PRIMARY KEY (id_usuario)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
 CREATE TABLE `tb_login_admi`(
	`id_admi` INT NOT NULL,
	`nm_admi` VARCHAR(45) NOT NULL,
    `cpf_admi` VARCHAR(11) NOT NULL,
    `email_admi` VARCHAR(45) NOT NULL,
	`password_unique` VARCHAR(45) NOT NULL,
	PRIMARY KEY (id_admi)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 

 INSERT INTO `tb_login_admi` (`id_admi`,`nm_admi`, `email_admi`, `cpf_admi`, `password_unique`) VALUES
 (19802450,'eros ravier da silva aragao', 'erosravier.15@gmail.com', 06395250329, '89321ravier@A');
 
  INSERT INTO `tb_login_usuario` (`id_cliente`,`nm_cliente`, `cpf_cliente`, `email`, `password_unique`) VALUES
 (10203040,'cliente Johnnes', 'johnnes.15@gmail.com', 06395250349, '89321ravier40'),
 (10203050,'cliente Coorynga', 'corynga.15@gmail.com', 06395250359, '89321ravier50'),
 (10203060,'cliente CapaLoka', 'capaloka.15@gmail.com', 06395250369, '89321ravier60'),
 (10203070,'cliente AragonTech', 'aragontech.15@gmail.com', 06395250379, '89321ravier70');
 
