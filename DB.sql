drop database IF EXISTS Mvc;
CREATE DATABASE IF NOT EXISTS Mvc;

use Mvc;

CREATE TABLE Users
(
  id_user INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  login varchar(128) NOT NULL UNIQUE,
  password varchar(256) NOT NULL,
	email varchar(256) NOT NULL,
  name varchar(128) NOT NULL,
	status INT NOT NULL DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE Sessions
(
  id_session INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_user INT NOT NULL,
	token varchar(128) NOT NULL UNIQUE,
  dt_add timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,

	FOREIGN KEY (id_user) REFERENCES Users (id_user)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE Categories
(
	id_category INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name_category varchar(35) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE Articles
(
  id_article INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_category INT NOT NULL,
	id_user INT NOT NULL,
	title varchar(128) NOT NULL,
  content TEXT NOT NULL,
  dt_add timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,

  FOREIGN KEY (id_category) REFERENCES Categories (id_category),
	FOREIGN KEY (id_user) REFERENCES Users (id_user)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;



INSERT Categories
(name_category)
VALUES
('Animal'),
('Sport'),
('Food');

INSERT Users
(login, password, email, name)
VALUES
('Admin', '$2y$10$BznxptfdcgqpUHkSDCMXwe0t9b2LMw8Hcbq9Y/pPGs/MGjg/zqtsm', 'admin@gmail.com', 'Mikal'),
('Manager', '$2y$10$BznxptfdcgqpUHkSDCMXwe0t9b2LMw8Hcbq9Y/pPGs/MGjg/zqtsm', 'manager@gmail.com', 'Lena'),
('User', '$2y$10$BznxptfdcgqpUHkSDCMXwe0t9b2LMw8Hcbq9Y/pPGs/MGjg/zqtsm', 'user@gmail.com', 'Jery');

INSERT Articles
(id_category, id_user, title, content)
VALUES
('1', '1', 'TitleOne', 'ContentOne'),
('2', '2', 'TitleTwo', 'ContentTwo'),
('3', '3', 'TitleThree', 'ContentThree'),
('2', '1', 'TitleFour', 'ContentFour'),
('1', '2', 'TitleOne', 'ContentOne'),
('2', '1', 'TitleTwo', 'ContentTwo'),
('3', '3', 'TitleThree', 'ContentThree'),
('2', '1', 'TitleFour', 'ContentFour'),
('1', '2', 'TitleOne', 'ContentOne'),
('2', '1', 'TitleTwo', 'ContentTwo'),
('3', '3', 'TitleThree', 'ContentThree'),
('2', '2', 'TitleFour', 'ContentFour'),
('1', '3', 'TitleFive', 'ContentFive');
