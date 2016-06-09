-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema sophie
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sophie
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sophie` DEFAULT CHARACTER SET utf8 ;
USE `sophie` ;

-- -----------------------------------------------------
-- Table `sophie`.`peinture`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sophie`.`peinture` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(150) NULL,
  `description` TEXT NULL,
  `imghref` TEXT NULL,
  `imgsrc` TEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sophie`.`temoignage`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sophie`.`temoignage` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(150) NULL,
  `email` VARCHAR(150) NULL,
  `profession` VARCHAR(150) NULL,
  `age` VARCHAR(150) NULL,
  `texte` TEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sophie`.`citation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sophie`.`citation` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `texte` VARCHAR(150) NULL,
  `auteur` VARCHAR(150) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sophie`.`creation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sophie`.`creation` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(150) NULL,
  `description` TEXT NULL,
  `imghref` TEXT NULL,
  `imgsrc` TEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sophie`.`evenement`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sophie`.`evenement` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(150) NULL,
  `date` TIMESTAMP NOT NULL,
  `descrition` TEXT NULL,
  `lieu` TEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
