

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE DATABASE projekt1;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(25) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `pwd` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `fullname` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `rank` int(1) DEFAULT NULL,
  `ban` bit(1) DEFAULT NULL,
  `reg_time` datetime DEFAULT NULL,
  `log_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

