-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1:3306
-- Vytvořeno: Stř 23. úno 2022, 16:00
-- Verze serveru: 5.7.36
-- Verze PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `prace3`
--
CREATE DATABASE IF NOT EXISTS `prace3` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_czech_ci;
USE `prace3`;

DROP TABLE IF EXISTS `kniha_navstev`;
CREATE TABLE `kniha_navstev` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datum_a_cas` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `navstevnik` varchar(40) COLLATE utf8mb4_czech_ci NOT NULL,
  `zpravy` varchar(300) COLLATE utf8mb4_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

INSERT INTO `kniha_navstev` (`id`, `datum_a_cas`, `navstevnik`, `zpravy`) VALUES
(1,	'2022-03-27 0:00:0','Karel Janoušek','TEST 1'),
(2,	'2021-03-28 9:52:14','Karel Janoušek','TEST 2');