/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `director` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

CREATE TABLE `movie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_name` varchar(255) DEFAULT NULL,
  `director_id` int(11) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `favorite` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `director` (`id`, `name`, `lastname`) VALUES
(6, 'Matt', 'Reeves');
INSERT INTO `director` (`id`, `name`, `lastname`) VALUES
(7, 'Taika', 'Waititi');
INSERT INTO `director` (`id`, `name`, `lastname`) VALUES
(8, ' Francis Ford', 'Coppola');
INSERT INTO `director` (`id`, `name`, `lastname`) VALUES
(9, 'Sam', 'Raimi');

INSERT INTO `movie` (`id`, `movie_name`, `director_id`, `year`, `favorite`) VALUES
(8, 'The Batman', 6, '2022', 1);
INSERT INTO `movie` (`id`, `movie_name`, `director_id`, `year`, `favorite`) VALUES
(9, 'Thor: Love and Thunder', 7, '2022', 0);
INSERT INTO `movie` (`id`, `movie_name`, `director_id`, `year`, `favorite`) VALUES
(10, 'The Godfather', 8, '1972', 1);
INSERT INTO `movie` (`id`, `movie_name`, `director_id`, `year`, `favorite`) VALUES
(11, 'Spider-Man', 9, '2002', 1);

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;