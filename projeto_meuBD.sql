CREATE DATABASE IF NOT EXISTS `projeto_meu2.0` 
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projeto_meu`;

CREATE TABLE `loguin_admi`(
  id_admi INT NOT NULL,
     `usuario` VARCHAR(45) NOT NULL,
     `password` VARCHAR(45) NOT NULL,
     PRIMARY KEY (id_admi)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
 CREATE TABLE `tb_cad_cliente`(
  `id_cliente` INT NOT NULL,
     `nm_cliente` VARCHAR(100) NOT NULL,
     `cpf_client` INT(11) NOT NULL,
     `usuario` VARCHAR(45) NOT NULL,
     `passeword` VARCHAR(45) NOT NULL
 )ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
 ALTER TABLE `projeto_meu`.`tb_cad_cliente` 
 CHANGE COLUMN `id_cliente` `id_cliente` INT(11) NOT NULL AUTO_INCREMENT ,
 ADD PRIMARY KEY (`id_cliente`);
 
 ALTER TABLE `projeto_meu`.`tb_cad_cliente` 
 CHANGE COLUMN `cpf_client` `cpf_cliente` INT(11) NOT NULL;
 
 
 INSERT INTO `loguin_admi` (`id_admi`, `usuario`, `passeword`) VALUES
 (19802450, 'erosravier.15@gmail.com', '89Ra32vi@5024801989321ravier@A');
 
 INSERT INTO `loguin_admi` (`cpf_admi`) VALUES
 (06395250329);