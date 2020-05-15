-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mytext` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `test` (`id`, `mytext`) VALUES
(1,	'This is my new text in DB! Jou!'),
(2,	'And another text <i>cursive</i>!'),
(3,	'<button type=\"button\" class=\"btn btn-primary\">Главный</button> <button type=\"button\" class=\"btn btn-secondary\">Вторичный</button> <button type=\"button\" class=\"btn btn-success\">Успех</button>'),
(4,	'<div class=\"alert alert-primary\" role=\"alert\">   Это основное уведомление — check it out! </div> <div class=\"alert alert-secondary\" role=\"alert\">   Это дополнительное уведомление — check it out! </div>');

-- 2020-05-13 14:40:31
