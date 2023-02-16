
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Tejas', 'tejas@gmail.com', 5000),
(2, 'Kick', 'kick@gmail.com', 3000),
(3, 'Shah', 'shah@gmail.com', 4000),
(4, 'Priya', 'priya@gmail.com', 5000),
(5, 'Shri', 'shri@gmail.com', 4000),
(6, 'Sandeep', 'sandeep@gmail.com', 3000),
(7, 'Deep', 'pal@gmail.com', 5000),
(8, 'Jai', 'jai@gmail.com', 4000),
(9, 'Krishna', 'krishna@gmail.com', 3000),
(10, 'Vivek', 'vivek@gmail.com', 5000);

ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;

ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;