
CREATE DATABASE IF NOT EXISTS `cheapomail`;
USE `cheapomail`;



CREATE TABLE IF NOT EXISTS `message` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `body` varchar(2000) NOT NULL,
  `subject` varchar(555) NOT NULL,
  `recipient_ids` int(11) DEFAULT NULL,
  `user_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `user_ID` (`user_ID`));


CREATE TABLE IF NOT EXISTS `message_read` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `message_id` int(11) NOT NULL,
  `reader_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `message_id` (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;



CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(55) NOT NULL,
  `LastName` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
);

ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE;

ALTER TABLE `message_read`
  ADD CONSTRAINT `message_read_ibfk_1` FOREIGN KEY (`message_id`) REFERENCES `message` (`ID`);
