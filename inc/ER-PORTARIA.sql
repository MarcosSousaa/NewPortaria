-- MySQL Script generated by MySQL Workbench
-- Mon May 21 16:30:42 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema SistemaPortaria
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `SistemaPortaria` ;

-- -----------------------------------------------------
-- Schema SistemaPortaria
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `SistemaPortaria` DEFAULT CHARACTER SET utf8 ;
SHOW WARNINGS;
USE `SistemaPortaria` ;

-- -----------------------------------------------------
-- Table `porteiros`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `porteiros` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `porteiros` (
  `ukey` INT NOT NULL AUTO_INCREMENT,
  `nomeporteiro` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ukey`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `veiculos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `veiculos` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `veiculos` (
  `ukey` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NOT NULL,
  `modelo` VARCHAR(45) NOT NULL,
  `placa` VARCHAR(7) NOT NULL,
  `motorista` VARCHAR(45) NOT NULL,
  `empresa` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ukey`))
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE UNIQUE INDEX `placa_UNIQUE` ON `veiculos` (`placa` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `chaves`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chaves` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `chaves` (
  `ukey` INT NOT NULL AUTO_INCREMENT,
  `codchave` VARCHAR(45) NOT NULL,
  `local` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`ukey`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `cc`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cc` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `cc` (
  `ukey` INT NOT NULL AUTO_INCREMENT,
  `cc_colabret` VARCHAR(45) NOT NULL,
  `cc_dataret` DATE NOT NULL,
  `cc_horaret` VARCHAR(6) NOT NULL,
  `cc_colabdev` VARCHAR(45) NOT NULL,
  `cc_data_dev` DATE NOT NULL,
  `cc_horadev` VARCHAR(6) NOT NULL,
  `cc_porteiroret` INT NOT NULL,
  `cc_porteirodev` INT NOT NULL,
  `cc_chave` INT NOT NULL,
  PRIMARY KEY (`ukey`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `recebimento_servico`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `recebimento_servico` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `recebimento_servico` (
  `ukey` INT NOT NULL AUTO_INCREMENT,
  `rs_data` DATE NULL,
  `rs_horaent` VARCHAR(5) NOT NULL,
  `rs_hrsai` VARCHAR(5) NULL,
  `rs_veiculo` INT NOT NULL,
  `rs_porteiro` INT NOT NULL,
  PRIMARY KEY (`ukey`))
ENGINE = InnoDB;

SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;