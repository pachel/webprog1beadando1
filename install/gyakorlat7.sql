-- --------------------------------------------------------
-- Hoszt:                        127.0.0.1
-- Szerver verzió:               10.4.27-MariaDB - mariadb.org binary distribution
-- Szerver OS:                   Win64
-- HeidiSQL Verzió:              12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Struktúra mentése tábla gyakorlat7. felhasznalok
CREATE TABLE IF NOT EXISTS `felhasznalok` (
                                              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `csaladi_nev` varchar(45) NOT NULL DEFAULT '',
    `uto_nev` varchar(45) NOT NULL DEFAULT '',
    `bejelentkezes` varchar(12) NOT NULL DEFAULT '',
    `jelszo` varchar(40) NOT NULL DEFAULT '',
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Az adatok exportálása nem lett kiválasztva.

-- Struktúra mentése tábla gyakorlat7. uzenetek
CREATE TABLE IF NOT EXISTS `uzenetek` (
                                          `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `id_felhasznalok` int(10) unsigned NOT NULL DEFAULT 0,
    `szoveg` longtext NOT NULL,
    `nev` varchar(100) NOT NULL DEFAULT '',
    `datum` timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Az adatok exportálása nem lett kiválasztva.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
