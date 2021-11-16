drop database IF EXISTS Mvc;
CREATE DATABASE IF NOT EXISTS Mvc;

use Mvc;

CREATE TABLE Categories
(
	id_category INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name_category varchar(35) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE Articles
(
  id_article INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_category INT NOT NULL,
	title varchar(128) NOT NULL,
  content TEXT NOT NULL,
  dt_add timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,

  FOREIGN KEY (id_category) REFERENCES Categories (id_category)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE Users
(
  id_user INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  login varchar(128) NOT NULL UNIQUE,
  password varchar(256) NOT NULL,
	email varchar(256) NOT NULL,
  name varchar(128) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE Sessions
(
  id_session INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_user INT NOT NULL,
	token varchar(128) NOT NULL UNIQUE,
  dt_add timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;



INSERT Categories
(name_category)
VALUES
('Animal'),
('Sport'),
('Food');

INSERT Articles
(id_category, title, content)
VALUES
('1', 'TitleOne', 'ContentOne'),
('2', 'TitleTwo', 'ContentTwo'),
('3', 'TitleThree', 'ContentThree'),
('2', 'TitleFour', 'ContentFour'),
('1', 'TitleOne', 'ContentOne'),
('2', 'TitleTwo', 'ContentTwo'),
('3', 'TitleThree', 'ContentThree'),
('2', 'TitleFour', 'ContentFour'),
('1', 'TitleOne', 'ContentOne'),
('2', 'TitleTwo', 'ContentTwo'),
('3', 'TitleThree', 'ContentThree'),
('2', 'TitleFour', 'ContentFour'),
('1', 'TitleFive', 'ContentFive');