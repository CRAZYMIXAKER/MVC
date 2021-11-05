drop database IF EXISTS Php1simple;
CREATE DATABASE IF NOT EXISTS Php1simple;

use Php1simple;


CREATE TABLE Messages
(
  id_message INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name varchar(128) NOT NULL,
  text TEXT NOT NULL,
  dt_add timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  status TINYINT NOT NULL DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
